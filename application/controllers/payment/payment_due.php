<?php

/**
* Methods:
*   index:  add payment Field.
*   delete_field: delete payment field.
*   payment_set: set amount to the payment field.
*   setting: Manage payment field for particular class and  month.
*/

class Payment_due extends Admin_Controller {

   function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['meta_title']   = 'Payment';
        $this->data['active']       = 'data-target="payment_menu"';
        $this->data['subMenu']      = 'data-target="payment_due"';
        $this->data['confirmation'] = null;
        
        // get all student
        $this->data['allStudent'] = get_result('registration', '', ['reg_id', 'name'], 'reg_id');
        
        
        $this->data['result'] = $this->search();

        
        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/payment/nav', $this->data);
        $this->load->view('components/payment/payment-due', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }
    
    private function search(){
        
        $data = $infoWhere = [];
        if(isset($_POST['show'])){
            
            if(!empty($_POST['student_id'])){
                $infoWhere['admission.student_id'] = $_POST['student_id'];
            }
            
            if(!empty($_POST['year'])){
                $infoWhere['admission.session'] = $_POST['year'];
            }
            
            // test student info
            $data['info'] = $info = get_row_join('admission', 'registration', 'admission.student_id=registration.reg_id', $infoWhere, ['admission.*', 'registration.name', 'registration.name']);
            
            // get all month
            $months = config_item('months');
            
            $paymentList = [];
            $count = 0;
            if(!empty($months) && !empty($info)){
                
                foreach($months AS $key => $value){
                    
                    $monthWhere = [
                        'set_payment.class'     => $info->class,
                        'set_payment.section'   => $info->section,
                        'set_payment.type'      => $info->type,
                        'payment_setting.month' => $value
                    ];
                    
                    $allField = get_join('set_payment', 'payment_setting', 'set_payment.id=payment_setting.set_payment_id', $monthWhere, ['set_payment.field_name', 'set_payment.amount']);
                    
                    if(!empty($allField)){
                        foreach($allField as $item){
                            
                            $paymentWhere = [
                                'student_id' => $info->student_id,    
                                'session'    => $info->session,    
                                'section'    => $info->section,    
                                'class'      => $info->class,    
                                'type'       => $info->type,    
                                'month'      => $value,    
                                'field'      => $item->field_name   
                            ];
                            
                            $paid = get_row('payment', $paymentWhere, 'amount');
                            $paid = (!empty($paid->amount) ? $paid->amount : 0);
                            $due  = $item->amount - $paid;
                            
                            $paymentList[$count]['month']      = $value;
                            $paymentList[$count]['field_name'] = $item->field_name;
                            $paymentList[$count]['amount']     = $item->amount;
                            $paymentList[$count]['paid']       = $paid;
                            $paymentList[$count]['due']        = $due;
                            
                            $count++;
                        }
                    }
                }
            }
            
            $data['records'] = $paymentList;
        }
        
        return $data;
    }


}
