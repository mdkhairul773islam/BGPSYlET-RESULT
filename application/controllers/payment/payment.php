<?php

/**
* Methods:
*   index:  add payment Field.
*   delete_field: delete payment field.
*   payment_set: set amount to the payment field.
*   setting: Manage payment field for particular class and  month.
*/

class Payment extends Admin_Controller {

   function __construct() {
        parent::__construct();

        $this->load->model('action');
    }

    /**
    * Working with field of Payment Section.
    * Table name: payment_field
    * Strategy: Add field to table if exist then update.
    */
    public function index($emit = NULL) {
        $this->data['meta_title']   = 'Payment';
        $this->data['active']       = 'data-target="payment_menu"';
        $this->data['subMenu']      = 'data-target="field"';
        $this->data['confirmation'] = null;

        if ($this->input->post('submit')) {

            $data = array("field_name" => $this->input->post('field_name'));

            $options1=array(
                'title' =>"update",
                'emit'  =>"Payment field successfully update!",
                'btn'   =>true
            );

            $options2=array(
                'title' =>"success",
                'emit'  =>"Payment field successfully saved!",
                'btn'   =>true
            );

            if($this->action->exists('payment_field',$data)){
                $this->data['confirmation']=message($this->action->update("payment_field",$data,$data),$options1);
            }else{
                $this->data['confirmation']=message($this->action->add("payment_field",$data),$options2);
            }

            $this->session->set_flashdata("confirmation",$this->data['confirmation']);
            redirect("payment/payment","refresh");
        }


        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/payment/nav', $this->data);
        $this->load->view('components/payment/fieldofpayment', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    /**
    * For deleting payment_table field
    * Table name: payment_field
    * Strategy: Delete field using id.
    */

    public function delete_field($id=NULL){
        $options=array(
            'title' =>'delete',
            'emit'  =>'Field Successfully Deleted!',
            'btn'   =>true
        );
        $where=array("id"=>$id);
        $this->data['confirmation']=message($this->action->deleteData('payment_field',$where),$options);
        $this->session->set_flashdata('confirmation',$this->data['confirmation']);
        redirect("payment/payment","refresh");
    }

    /**
    * Set amount(Tk) to field
    * Table name: set_payment
    * Strategy: set payment_field amount according to
    *   class,section,type:Civil,Military.
    * Add or Update data to the table.
    */

    public function payment_set(){
        $this->data['meta_title']   = 'Payment';
        $this->data['active']       = 'data-target="payment_menu"';
        $this->data['subMenu']      = 'data-target="payment_set"';
        $this->data['confirmation'] = null;

        $this->data['allStudents'] = $this->action->readGroupBy('admission','student_id');

        $title = $message = "";
        if ($this->input->post('set')) {
            foreach ($_POST['amount'] as $key => $value) {
                $data = array(
                    'date'          => date('Y-m-d'),
                    'class'         => $this->input->post('class'),
                    'section'       => $this->input->post('section'),
                    'type'          => $this->input->post('student_type'),
                    'field_name'    => $_POST['field_name'][$key],
                    'amount'        => $_POST['amount'][$key]
                );

                $where = array(
                    'class'         => $this->input->post('class'),
                    'section'       => $this->input->post('section'),
                    'type'          => $this->input->post('student_type'),
                    'field_name'    => $_POST['field_name'][$key]
                );

                /*if (!empty($this->input->post('student_id') !='')) {
                    $data['student_id']  = $this->input->post('student_id');
                    $where['student_id'] = $this->input->post('student_id');
                }
                */

                if($this->action->exists('set_payment',$where)){
                    $title = "Success";
                    $message = "Amount Successfully Update!!";
                    $this->action->update('set_payment',$data,$where);

                }else{
                    $title = "Success";
                    $message = "Amount Successfully Set";
                    $this->action->add("set_payment",$data);
                }
            }

            $options = array(
                'title' => $title,
                'emit'  => $message,
                'btn'   => true
            );

            $mesg = message('success',$options);
            $this->session->set_flashdata("confirmation",$mesg);
            redirect("payment/payment/payment_set","refresh");
        }

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/payment/nav', $this->data);
        $this->load->view('components/payment/payment_set', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    /**
    * Set particular payment field for particular class info and month.
    * Table name : payment_setting
    * Strategy:
    *   Make connection through 'set_payment' table's `id` with 'payment_setting' table's `set_payment_id`
    *   Add set_payment.id to payment_setting.set_payment_id,month name to the table.
    *
    */
    public function setting(){
        $this->data['meta_title']   = 'Payment';
        $this->data['active']       = 'data-target="payment_menu"';
        $this->data['subMenu']      = 'data-target="setting"';
        $this->data['confirmation'] = null;

        if ($this->input->post('update')) {
            // delete the previous data for update by the current data start
            
            $where = [
                'payment_setting.month' => $_POST['month'],
                'set_payment.class'     => $_POST['class'],
                'set_payment.section'   => $_POST['section'],
                'set_payment.type'      => $_POST['student_type']
            ];
            
            $select = ['payment_setting.*', 'set_payment.class', 'set_payment.section', 'set_payment.type'];

            $fieldList = get_join('payment_setting', 'set_payment', 'payment_setting.set_payment_id=set_payment.id', $where, $select);
            if(!empty($fieldList)){
                foreach ($fieldList as  $item) {
                    delete_data('payment_setting', ['id' => $item->id]);
                }
            }
            
            // delete the previous data for update by the current data end
            if(!empty($_POST['field_id'])){
                foreach ($_POST['field_id'] as $key => $value) {
                
                    $data = [
                        'set_payment_id' => $_POST['field_id'][$key],
                        'month'          => $_POST['month']    
                    ];
                    
                    save_data('payment_setting', $data);
                }
                
                $msg = [
                    'title' => 'success',
                    'emit'  => 'Monthly payment set successful.',
                    'btn'   => true    
                ];
                
                $this->session->set_flashdata("confirmation", message('success', $msg));
            }
            
            redirect("payment/payment/setting","refresh");
        }

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/payment/nav', $this->data);
        $this->load->view('components/payment/setting', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }


    public function all($emit = NULL) {
        $this->data['meta_title'] = 'Payment';
        $this->data['active'] = 'data-target="payment_menu"';
        $this->data['subMenu'] = 'data-target="all"';
        $this->data['confirmation'] = null;

        $this->data['paymentInfo']=$this->action->read("payment");

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/payment/nav', $this->data);
        $this->load->view('components/payment/all', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }
    
    


    private function holder() {
		$holder = config_item('privilege');

        if(!(in_array($this->session->userdata('holder'), $holder)))
		{
            $this->membership_m->logout();
            redirect('access/users/login');
        }
    }

}
