<?php

class Duesms extends Admin_Controller {

    function __construct() {
        parent::__construct();
        
        $this->load->model('action');
        $this->data['meta_title'] = 'Duesms';
    }
    
    public function index() {
        $this->data['active']  = 'data-target="duesms"';
        $this->data['subMenu'] = 'data-target="duesms"';
        $this->data['result']  =  null;


        

        // Search 
        if (isset($_POST['find'])) {
            if ($this->input->post('search') != null) {
                $whereA = $whereP = array();
                
                foreach ($_POST['search'] as $key => $value) {
                    
                    if($value != NULL && $key != 'year'){
                        $whereA["admission.".$key] = $value;
                    }
                    
                    if($value != NULL){
                        $whereP[$key] = $value;
                    }
                }
            }
            
            $whereP['status'] = "approved";
            
            $this->data['result'] = $this->action->joinAndRead("admission","registration","admission.student_id=registration.reg_id",$whereA);
        }


        // send data
        if(isset($_POST['send'])){
           $mobile_no = explode(",", $this->input->post('mobiles'));
           $content = $this->input->post('message');  
            
           foreach($_POST['mobile'] as $key => $num) {
                 $message = send_sms($num, $content);       
                 $insert = array(
                    'delivery_date'     => date('Y-m-d'),
                    'delivery_time'     => date('H:i:s'),
                    'mobile'            => $num,
                    'message'           => $this->input->post('message'),
                    'total_characters'  => $this->input->post('total_characters'),
                    'total_messages'    => $this->input->post('total_messages'),
                    'delivery_report'   => $message
                 );
                 $this->action->add('sms_record', $insert);
           }  
    
           if($message){
               $this->data['confirmation'] = message('success', array());
           } else {
               $this->data['confirmation'] = message('warning', array());
            }     
        }

        $this->data['sessions']=$this->action->readGroupBy('registration','session',array(),"session","asc");

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        //$this->load->view('components/duesms/nav', $this->data);
        $this->load->view('components/duesms/duesms', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer', $this->data);
    }
}