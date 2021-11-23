<?php

class Attendancefine extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('action');
        $this->data['meta_title'] = 'Attendancefine';
        $this->data["session_list"]=$this->action->read_distinct("registration",array(),"session");
    }

    public function index() {
        $this->data['active']  = 'data-target="attendance_fine"';
        $this->data['subMenu'] = 'data-target="add"';

        if(isset($_POST['save'])){

            $data = array(
                'class' => $this->input->post('class'),
                'fine'  => $this->input->post('fine')
            );

            if($this->action->read('attendance_fine', array('class'=>$this->input->post('class'))) == null){
                if($this->action->add('attendance_fine', $data)){
                    $msg_array=array(
                            "title"=>"Success",
                            "emit"=>"Attendance fine added successfully!",
                            "btn"=>true
                        );

                    $confirmation = message('success', $msg_array);
                    $this->session->set_flashdata('confirmation', $confirmation);
                    redirect('attendancefine/attendancefine');
                }
            }else{
                 $updateData = array(
                    'fine'  => $this->input->post('fine')
                 );
                 
                $msg_array=array(
                        "title"=>"success",
                        "emit"=>"Attendance fine successfully Update!",
                        "btn"=>true
                    );

               $this->data['confirmation'] = message($this->action->update('attendance_fine',$updateData,array('class' => $this->input->post('class'))),$msg_array);
                $this->session->set_flashdata('confirmation',  $this->data['confirmation']);
                redirect('attendancefine/attendancefine',"refresh");
            }
          
        }
        
        $this->data['allFines'] = $this->action->read('attendance_fine');

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/attendancefine/nav', $this->data);
        $this->load->view('components/attendancefine/fine', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer', $this->data);
    }

    public function allfine() {
        $this->data['active']  = 'data-target="attendance_fine"';
        $this->data['subMenu'] = 'data-target="all"';
        $this->data['results'] = $this->data['students'] = NULL;

        if(isset($_POST['show'])){
            $where = array(
                "YEAR(date)"     => $this->input->post('year'),
                "MONTH(date)"    => $this->input->post('month'),
                'class'          => $this->input->post('class'),
                'session'        => $this->input->post('session'),
                'section'        => $this->input->post('section')
            );
            $this->data['results'] = $this->action->read("attendance",$where);
           

            $from     = "admission";
            $join     = "registration";
            $joinCond = "registration.reg_id = admission.student_id";
            $where = array(
                "registration.class"   => $this->input->post('class'),
                'registration.session' => $this->input->post('session'),
                'registration.section' => $this->input->post('section'),
                "registration.status"  => "admitted"
                );

            $this->data['students']=$this->action->joinAndRead($from,$join,$joinCond,$where);
            

        }

        $this->data['allFine'] = $this->action->read('attendance_fine',array("class" => $this->input->post('class')));

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/attendancefine/nav', $this->data);
        $this->load->view('components/attendancefine/allfine', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer', $this->data);
    }
}
