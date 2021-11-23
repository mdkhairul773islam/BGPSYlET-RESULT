<?php

class Identity extends Admin_Controller {

     function __construct() {
        parent::__construct();

        $this->load->model('action');
    }

    public function index($emit = NULL) {
        $this->data['meta_title'] = 'Security Card';
        $this->data['active'] = 'data-target="ids-menu"';
        $this->data['subMenu'] = 'data-target="card"';
        $this->data['confirmation'] = $this->data['info'] = null;

        $this->data["session_list"] = $this->action->readDistinct("admission", "session");

        if(isset($_POST['show'])){
            $where = array();
            foreach ($_POST["search"] as $key => $val) {
               if($val != NULL){
                 $where[$key] = $val;
               }
            }

            //$where['status'] = 'active'; 

            $this->data['info'] = $this->action->read('admission', $where);
            //print_r($this->data['info']);
        }


        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/id_nav', $this->data);
        $this->load->view('components/identity', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }
    public function validity() {
        $this->data['meta_title'] = 'validity';
        $this->data['active'] = 'data-target="ids-menu"';
        $this->data['subMenu'] = 'data-target="validity"';
        
        $this->data['confirmation'] = null;

        if ($this->input->post('save')) {

            if($this->input->post('class') == 'Eleven'){

                $data = array('validity' => $this->input->post('validity'));

                $class = array("Eleven","Twelve");

                foreach ($class as $value) {
                    $where = array(
                        'class' => $value
                    );
                   $result= $this->action->update('admission', $data,$where);
                }

                $msg_array = array(
                    "title" => "Success",
                    "emit"  => "Successfully Updated",
                    "btn"   => true
                );

                $this->data['confirmation'] = message($result, $msg_array);
                $this->session->set_flashdata('confirmation',$this->data['confirmation']);
                redirect('identity/validity','refresh');   
            }


            if($this->input->post('class') == 'Six'){

                $data = array('validity' => $this->input->post('validity'));

                $class = array("Six","Seven","Eight","Nine","Ten");

                foreach ($class as $value) {
                    $where = array(
                        'class' => $value
                    );
                   $result= $this->action->update('admission', $data,$where);
                   //print_r($where);
                }

                $msg_array = array(
                    "title" => "Success",
                    "emit"  => "Successfully Updated",
                    "btn"   => true
                );

                $this->data['confirmation'] = message($result, $msg_array);
                $this->session->set_flashdata('confirmation',$this->data['confirmation']);
                redirect('identity/validity','refresh');   
            }
        }
        
        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/id_nav', $this->data);
        $this->load->view('components/validity', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

}
