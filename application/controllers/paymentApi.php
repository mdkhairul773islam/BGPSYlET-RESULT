<?php if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

class PaymentApi extends CI_Controller {
    
    function __construct() {
        parent::__construct();

        $this->load->helper('admin');
    }


    public function rocketPaymentValidation(){
        
        $data = [];
        
        if(!empty($this->input->get('userid')) && is_numeric($this->input->get('userid'))){
        
            $select      = ['admission.student_id', 'admission.class', 'admission.section', 'admission.type', 'registration.name'];
            $studentInfo = get_row_join('admission', 'registration', 'admission.student_id=registration.reg_id', ['admission.student_id' => trim($_GET['userid'])], $select);
            
            if(!empty($studentInfo)){
                
                $balanceInfo = get_student_due($studentInfo->student_id, $studentInfo->class, $studentInfo->section, $studentInfo->type);
                
                if($balanceInfo->due > 0){
                    $data['userid']     = $studentInfo->student_id;
                    $data['name']       = $studentInfo->name;
                    $data['amount']     = $balanceInfo->due;
                    $data['status']     = 'Success';
                }else{
                    $data['status']     = 'Fail, You don\'t have any due.';
                }
            }else{
                $data['status']     = 'Fail, This student ID not found.';
            }
        }else{
            $data['status'] = 'Fail, This student ID not found.';
        }
        
        echo json_encode(array($data));
    }
    
    public function rocketPaymentConfirmation(){
        
        $data = [];
        
        if(!empty($this->input->get('userid')) && is_numeric($this->input->get('userid')) && !empty($this->input->get('amount')) && !empty($this->input->get('txnid')) && !empty($this->input->get('txndate'))){
        
            $select      = ['admission.student_id', 'admission.class', 'admission.section', 'admission.type', 'registration.name'];
            $studentInfo = get_row_join('admission', 'registration', 'admission.student_id=registration.reg_id', ['admission.student_id' => trim($_GET['userid'])], $select);
            
            if(!empty($studentInfo)){
                
                $data = [
                    'created'    => date('Y-m-d'),
                    'student_id' => $this->input->get('userid'),
                    'class'      => $studentInfo->class,
                    'section'    => $studentInfo->section,
                    'type'       => $studentInfo->type,
                    'amount'     => $this->input->get('amount'),
                    'txnid'      => $this->input->get('txnid'),
                    'txndate'    => $this->input->get('txndate'),
                    'created_at' => date('Y-m-d H:i:s')
                ];
                
                if(!empty($this->input->get('refNo'))){
                    $data['refno'] = $this->input->get('refNo');
                }
                
                save_data('rocket_payments', $data);
               
                $status['status']     = 'Success';
            }else{
                $status['status']     = 'Invalid Bill';
            }
        }else{
            $status['status'] = 'Invalid Bill';
        }
        
        echo json_encode(array($status));
    }
}