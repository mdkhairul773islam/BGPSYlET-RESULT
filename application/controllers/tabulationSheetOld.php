<?php

class TabulationSheet extends Admin_Controller {

     function __construct() {
        parent::__construct();

        $this->load->model('action');
        $this->load->model('retrieve');
        $this->data['meta_title'] = 'tabulation sheet';
        $this->data["session_list"]=$this->action->read_distinct("registration",array(),"session");
    }

    public function index() {
        $this->data['active'] = 'data-target="tabulation"';
        $this->data['subMenu'] = 'data-target=""';
        $this->data['students'] = $this->data['confirmation'] = null;

         if(isset($_POST['show'])){
            $where = array(
                "year"    => $this->input->post("year"),
                "exam_id" => $this->input->post("exam_id"),
                "class"   => $this->input->post("class"),
                "section" => $this->input->post("section")
            );
            $admission_where = array(
                "session"    => $this->input->post("year"),
                "class"   => $this->input->post("class"),
                "section" => $this->input->post("section")
            );
            
            /*if($this->input->post('class') == 'Eleven'){
                unset($where['year']);
            }
            
            print_r($where);*/
            
            $this->data["students"] = $this->action->readGroupBy("marks", "roll", $where,"id","asc");
            //Sabbir
            $this->data["student_full_info"] = $this->action->read("admission", $admission_where);
            foreach($this->data["student_full_info"] as $single_student) {
                $this->data["all_students_optional"][$single_student->roll] = $single_student->optional;
            }
            $this->data['exam_id'] = $this->input->post("exam_id");
            
        }

        $this->data["exam"] = $this->action->readGroupBy("exam", "title");

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/tabulation-sheet', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

}
