<?php

class Subject extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('action');  
        $this->holder();      
    }
    
    public function index() {
        $this->data['meta_title'] = 'Subject';
        $this->data['active'] = 'data-target="subject_menu"';
        $this->data['subMenu'] = 'data-target="add-new"';
        $this->data['confirmation'] = null;
        
        $this->data['subName'] = $this->action->read('subject_name');
         
        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/subject/subject-nav', $this->data);
        $this->load->view('components/subject/subjectForm', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer',$this->data);
    }

    public function allSubject() {
        $this->data['meta_title'] = 'Subject';
        $this->data['active'] = 'data-target="subject_menu"';
        $this->data['subMenu'] = 'data-target="all"';
        $this->data['confirmation'] = null;

          
        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/subject/subject-nav', $this->data);
        $this->load->view('components/subject/allSubject', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    public function editSubject($id=NULL) {
        $this->data['meta_title'] = 'Subject';
        $this->data['active'] = 'data-target="subject_menu"';
        $this->data['subMenu'] = 'data-target=""';
        $this->data['confirmation'] = null;
        
        $this->data['subName'] = $this->action->read('subject_name');
        $this->data['subject']=$this->action->read('subject',array('id'=>$id));
        
        
        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/subject/subject-nav', $this->data);
        $this->load->view('components/subject/editSubject', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    public function deleteSubject($id=NULL) {        
        $this->data['confirmation'] = null;

        $msg_array=array(
            "title"=>"Delete",
            "emit"=>"Subject Successfully Deleted!",
            "btn"=>true
          );

        $this->data['confirmation']=message($this->action->deletedata('subject',array('id'=>$id)),$msg_array);          
        $this->session->set_flashdata('confirmation',$this->data['confirmation']);
        redirect('subject/subject/allSubject','refresh');
    }
    
    
    /*add subject name start*/
    
    public function addSubjectName()
    {
        $this->data['meta_title'] = 'Subject';
        $this->data['active'] = 'data-target="subject_menu"';
        $this->data['subMenu'] = 'data-target="add-name-new"';
        $this->data['confirmation'] = null;
        
        if($this->input->post('save') == "Save")
        {
            $data = array(
                    'name' => trim($this->input->post('name'))
                );
                
            $msg_array=array(
              "title"=>"Success",
              "emit"=>"Subject Name Entry Successfully Completed!",
              "btn"=>true
           );
           
            $this->data['confirmation']=message($this->action->add("subject_name", $data), $msg_array);
            $this->session->set_flashdata('confirmation',$this->data['confirmation']);
            redirect('subject/subject/addSubjectName','refresh');
        }
        
        $this->data['all'] = $this->action->read('subject_name');
         
        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/subject/subject-nav', $this->data);
        $this->load->view('components/subject/addSubjectName', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer',$this->data);
    }
    
    public function editSubjectName($id=NULL)
    {
        $this->data['meta_title'] = 'Subject';
        $this->data['active'] = 'data-target="subject_menu"';
        $this->data['subMenu'] = 'data-target="add-name-new"';
        $this->data['confirmation'] = null;
        
        if($this->input->post('update') == "Update")
        {
            $data = array(
                    'name' => trim($this->input->post('name'))
                );
                
            $msg_array=array(
              "title"=>"Success",
              "emit"=>"Subject Update Successfully Completed!",
              "btn"=>true
           );
            
            $this->data['confirmation']=message($this->action->update("subject_name",$data,['id'=>$id]), $msg_array);
            $this->session->set_flashdata('confirmation',$this->data['confirmation']);
            redirect('subject/subject/addSubjectName','refresh');
        }
        
        $this->data['subName'] = $this->action->read('subject_name', ['id'=>$id]);
         
        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/subject/subject-nav', $this->data);
        $this->load->view('components/subject/editSubjectName', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer',$this->data);
    }
    
    public function deleteSubjectName($id=NULL) {        
        $this->data['confirmation'] = null;

        $msg_array=array(
            "title"=>"Delete",
            "emit"=>"Subject Successfully Deleted!",
            "btn"=>true
          );

        $this->data['confirmation']=message($this->action->deletedata('subject_name',array('id'=>$id)),$msg_array);          
        $this->session->set_flashdata('confirmation',$this->data['confirmation']);
        redirect('subject/subject/addSubjectName','refresh');
    }
    
    /*add subject name end*/

  private function holder() {
    $holder = config_item('privilege');
    
  if(!(in_array($this->session->userdata('holder'), $holder))){
        $this->membership_m->logout();
        redirect('access/users/login');
    }
  }

}
