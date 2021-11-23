<?php

class Feedback extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('action');
    }
    
    public function index($emit = NULL) {
        $this->data['meta_title'] = 'Feedback';
        $this->data['active'] = 'data-target="header_menu"';
        $this->data['subMenu'] = 'data-target="feedback"';
        $this->data['confirmation'] = null;
        
        $this->data['feedbackInfo']=$this->action->read('feedback',array(),'desc');

        //---------------------Delete Data Start------------------------------
        if($this->input->get("id")){//Deleting Feedback
            $this->action->deletedata('feedback',array('id'=>$this->input->get("id")));
            redirect('feedback/feedback?d_success=1','refresh');
        }

        if ($this->input->get("d_success")==1){
            $msg_array=array(
                "title"=>"Deleted",
                "emit"=>"Feedback Successfully Deleted",
                "btn"=>true
            );
            $this->data['confirmation']=message("danger",$msg_array);
        }
        //---------------------Delete Data End--------------------------------

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/feedback/feedback', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    public function view($id = NULL) {

        $this->data['meta_title'] = 'Feedback';
        $this->data['active'] = 'data-target="header_menu"';
        $this->data['subMenu'] = 'data-target=""';
        $this->data['confirmation'] = null;

        $where=array('id'=>$this->input->get('id'));
        
        $this->data['feedbackInfo']=$this->action->read('feedback',$where);

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/feedback/view', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    } 



   private function holder() {
        $holder = array('super','admin', 'user');
        if(!(in_array($this->session->userdata('holder'), $holder)))
        {
            $this->membership_m->logout();
            redirect('access/users/login');
        }
    }

}