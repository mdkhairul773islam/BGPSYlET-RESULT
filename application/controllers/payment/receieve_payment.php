<?php

/**
* Methods:
*	index             : Add payment to the table
*   class_wise_receive: Add payment class wise
*   payment_approve   : Approve payment
*   payment_disapprove: Disapprove payment 
*   delete_payment    : Delete payment
*/
class Receieve_payment extends Admin_Controller
{
    function __construct()
    {
    	parent::__construct();
    	$this->load->model('action');
    }

    public function index(){
        
        $this->data['meta_title']   = 'Payment';
        $this->data['active']       = 'data-target="payment_menu"';
        $this->data['subMenu']      = 'data-target="receieve_payment"';
        $this->data['confirmation'] = null;
    
    
        if ($this->input->post('payment')) {
            
            $where = array(
                'year'       => $this->input->post('year'),
                'session'    => $this->input->post('session'),
                'class'      => $this->input->post('class'),
                'section'    => $this->input->post('section'),
                'student_id' => $this->input->post('student_id'),
                'type'       => $this->input->post('type'),
                'month'      => $this->input->post('month'),
                'trash'      => 0
            );
    
            if($this->action->exists("payment",$where)){
                $options = array(
                    'title'  => 'warning',
                    'emit'   => 'The Payment of this Student has been already Received in this Month!',
                    'btn'    => true
                );
    
                $mesg = message('warning',$options);
                $this->session->set_flashdata("confirmation",$mesg);
                redirect("payment/receieve_payment","refresh");
            }else{
                foreach($_POST['field_name'] as $key => $value){
                        $data = array(
                            'date'            => $this->input->post('date'),
                            'time'            => date('h:i:s A'),
                            'year'            => $this->input->post('year'),
                            'session'         => $this->input->post('session'),
                            'class'           => $this->input->post('class'),
                            'section'         => $this->input->post('section'),
                            'student_id'      => $this->input->post('student_id'),
                            'roll'            => $this->input->post('roll'),
                            'guardian_mobile' => $this->input->post('guardian_mobile'),
                            'type'            => $this->input->post('type'),
                            'month'           => $this->input->post('month'),
                            'field'           => $_POST['field_name'][$key],
                            'amount'          => $_POST['amount'][$key]
                        );
    
                        $this->action->add("payment",$data);
    
                }
    
                // calculate invoice number
                $paymentID = $this->action->addAndGetID("payment_meta",array('student_id' => $this->input->post('student_id')));
                $invoice_no = date("y").date("m").str_pad($paymentID,"4",0,STR_PAD_LEFT );
    
                //update the payment and payment meta table
                $where = array(
                    'year'       => $this->input->post('year'),
                    'class'      => $this->input->post('class'),
                    'section'    => $this->input->post('section'),
                    'student_id' => $this->input->post('student_id'),
                    'type'       => $this->input->post('type'),
                    'month'      => $this->input->post('month'),
                    'trash'      => 0
                );
                $this->action->update("payment",array("invoice_no"=>$invoice_no),$where);
                $this->action->update("payment_meta",array("invoice_no"=>$invoice_no),array("id"=>$paymentID));
                redirect('payment/payment_singleView?invoice_no=' . $invoice_no,'refresh');
          }
        }
    
        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/payment/nav', $this->data);
        $this->load->view('components/payment/receieve_payment', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');

    }
    /**
     * Receive payment for every student in a class
     * Table: `payment`
     * Strategy: loop through all students from given class and add individual records to the table accroding to the Student ID 
     * 
     * */
    
    public function class_wise_receive(){
        
        $this->data['meta_title']   = 'Payment';
        $this->data['active']       = 'data-target="payment_menu"';
        $this->data['subMenu']      = 'data-target="class_receieve_payment"';
        $this->data['confirmation'] = null;
    
        $this->data['sessions'] = $this->action->readGroupBy('registration','session',array(),"session","asc");
        
        
        if ( isset($_POST['receive_payment']) ) {
        
            foreach($_POST['student_id'] as $key => $value ){
            
                foreach($_POST['field_name'][$key] as $index => $row){
                    
                    $data = array(
                        'date'            => date('Y-m-d'),
                        'time'            => date('h:i:s A'),
                        'year'            => $this->input->post('year'),
                        'session'         => $this->input->post('session'),
                        'class'           => $this->input->post('class'),
                        'section'         => $this->input->post('section'),
                        'student_id'      => $_POST['student_id'][$key],
                        'roll'            => $_POST['roll'][$key],
                        'guardian_mobile' => $_POST['guardian_mobile'][$key],
                        'type'            => $this->input->post('type'),
                        'month'           => $this->input->post('month'),
                        'field'           => $_POST['field_name'][$key][$index],
                        'amount'          => $_POST['amount'][$key][$index]
                    ); 
                   
                    $where = array(
                        'year'            => $this->input->post('year'),
                        'session'         => $this->input->post('session'),
                        'class'           => $this->input->post('class'),
                        'section'         => $this->input->post('section'),
                        'student_id'      => $_POST['student_id'][$key],
                        'type'            => $this->input->post('type'),
                        'month'           => $this->input->post('month'),
                        'field'           => $_POST['field_name'][$key][$index],
                        'trash'           => 0
                    );
                    /*
                    if(!($this->action->exists("payment",$where))){
                        
                         $this->action->add("payment",$data);
                        
                        // calculate invoice number
                        $paymentID = $this->action->addAndGetID("payment_meta",array('student_id' => $_POST['student_id'][$key] ));
                        $invoice_no = date("y").date("m").str_pad($paymentID,"4",0,STR_PAD_LEFT );
            
                        //update the payment and payment meta table
                        $where = array(
                            'year'            => $this->input->post('year'),
                            'session'         => $this->input->post('session'),
                            'class'           => $this->input->post('class'),
                            'section'         => $this->input->post('section'),
                            'student_id'      => $_POST['student_id'][$key],
                            'type'            => $this->input->post('type'),
                            'month'           => $this->input->post('month'),
                            'trash'           => 0
                        );
                        $this->action->update("payment",array("invoice_no"=>$invoice_no),$where);
                        $this->action->update("payment_meta",array("invoice_no"=>$invoice_no),array("id"=>$paymentID));
                    }*/
                    
                    
                    print_r($data);
                    
                }
            }
            
            
            $options = array(
                'title'  => 'success',
                'emit'   => 'Payment of this class successfully Received!',
                'btn'    => true
            );
    
            $mesg = message('success',$options);
            $this->session->set_flashdata("confirmation",$mesg);
            
            //redirect('payment/receieve_payment/class_wise_receive','refresh');
        }
        
    
        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/payment/nav', $this->data);
        $this->load->view('components/payment/class_receive_payment', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');

    }
    
    
    public function class_wise_payment_received(){
        
        foreach($_POST['student_id'] as $key => $value ){
            
                foreach($_POST['field_name'][$key] as $index => $row){
                    
                    $data = array(
                        'date'            => date('Y-m-d'),
                        'time'            => date('h:i:s A'),
                        'year'            => $this->input->post('year'),
                        'session'         => $this->input->post('session'),
                        'class'           => $this->input->post('class'),
                        'section'         => $this->input->post('section'),
                        'student_id'      => $_POST['student_id'][$key],
                        'roll'            => $_POST['roll'][$key],
                        'guardian_mobile' => $_POST['guardian_mobile'][$key],
                        'type'            => $this->input->post('type'),
                        'month'           => $this->input->post('month'),
                        'field'           => $_POST['field_name'][$key][$index],
                        'amount'          => $_POST['amount'][$key][$index]
                    ); 
                   
                    $where = array(
                        'year'            => $this->input->post('year'),
                        'session'         => $this->input->post('session'),
                        'class'           => $this->input->post('class'),
                        'section'         => $this->input->post('section'),
                        'student_id'      => $_POST['student_id'][$key],
                        'type'            => $this->input->post('type'),
                        'month'           => $this->input->post('month'),
                        'field'           => $_POST['field_name'][$key][$index],
                        'trash'           => 0
                    );
                    
                    if(!($this->action->exists("payment",$where))){
                        
                         $this->action->add("payment",$data);
                        
                        // calculate invoice number
                        $paymentID = $this->action->addAndGetID("payment_meta",array('student_id' => $_POST['student_id'][$key] ));
                        $invoice_no = date("y").date("m").str_pad($paymentID,"4",0,STR_PAD_LEFT );
            
                        //update the payment and payment meta table
                        $where = array(
                            'year'            => $this->input->post('year'),
                            'session'         => $this->input->post('session'),
                            'class'           => $this->input->post('class'),
                            'section'         => $this->input->post('section'),
                            'student_id'      => $_POST['student_id'][$key],
                            'type'            => $this->input->post('type'),
                            'month'           => $this->input->post('month'),
                            'trash'           => 0
                        );
                        $this->action->update("payment",array("invoice_no"=>$invoice_no),$where);
                        $this->action->update("payment_meta",array("invoice_no"=>$invoice_no),array("id"=>$paymentID));
                    }
                    
                }
            }
            
            
            $options = array(
                'title'  => 'success',
                'emit'   => 'Payment of this class successfully Received!',
                'btn'    => true
            );
    
            $mesg = message('success',$options);
            $this->session->set_flashdata("confirmation",$mesg);
            
            redirect('payment/receieve_payment/class_wise_receive','refresh');
    }
    
    
    /*
    * Table Name: `payment`
    *   Strategy: update status "pending" to "approved" by invoice no.
    */
    
    public function payment_approve(){
        
        $where = array("invoice_no" => $this->input->get('invoice_no'));
        $this->action->update("payment",array("status"=>"approved"),$where);
        $msg = array(
            'title' =>"success",
            'emit'  =>"Payment Successfully Approved!",
            'btn'   =>true
            );
        $this->data['confirmation'] = message('success',$msg);
        $this->session->set_flashdata('confirmation',$this->data['confirmation']);
        redirect('payment/payment_report','refresh');
        
    }
    
    /*
    * Table Name: `payment`
    *   Strategy: update status "approved" to "pending" by invoice no.
    */
    
    public function payment_disapprove(){
        
        $where = array("invoice_no" => $this->input->get('invoice_no'));
        $this->action->update("payment",array("status"=>"pending"),$where);
        $msg = array(
            'title' =>"success",
            'emit'  =>"Payment Successfully Disapproved!",
            'btn'   =>true
            );
        $this->data['confirmation'] = message('success',$msg);
        $this->session->set_flashdata('confirmation',$this->data['confirmation']);
        redirect('payment/payment_report','refresh');
        
    }
    
    /*
    * Delete the invoice no.
    * Table no: `payment`
    * Strategy:
    *   update the trash column from 0 to 1 by invoice no.    
    */
    
    public function delete_payment(){
        $where = array("invoice_no" => $this->input->get('invoice_no'));
        $this->action->update("payment",array("trash"=>1),$where);
        $msg = array(
            'title' =>"Delete!",
            'emit'  =>"Payment Successfully Delete!",
            'btn'   =>false
            );
        $this->data['confirmation'] = message('danger',$msg);
        $this->session->set_flashdata('confirmation',$this->data['confirmation']);
        redirect('payment/payment_report','refresh');
        
    }
    
}
