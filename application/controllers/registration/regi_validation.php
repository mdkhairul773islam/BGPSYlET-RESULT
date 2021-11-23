<?php
class Regi_validation extends Admin_Controller{

     function __construct() {
        parent::__construct();
        $this->load->model('action');
        $this->load->library('upload');
        $this->holder();
    }

    public function index() {
        if($this->input->post('student_id')) {
           $is_unique =  '|is_unique[registration.reg_id]';
        } else {
           $is_unique =  '';
        }
        
        $this->form_validation->set_rules('student_id', 'Student\'s student_id', 'required|trim|xss_clean'.$is_unique);
        
        $this->form_validation->set_rules('name', 'Student\'s Name', 'trim|required|max_length[255]|xss_clean');
        // $this->form_validation->set_rules('father_name', 'Father Name', 'trim|required|max_length[255]|xss_clean');
        // $this->form_validation->set_rules('father_profession', 'Father Profession', 'trim|max_length[255]|xss_clean');
        // $this->form_validation->set_rules('mother_profession', 'Mother Profession', 'trim|max_length[255]|xss_clean');
        // $this->form_validation->set_rules('student_mobile', 'Student Mobile', 'trim|required|max_length[15]|xss_clean');
        // $this->form_validation->set_rules('guardian_mobile', 'Guardian Mobile', 'trim|required|max_length[15]|xss_clean');
        // $this->form_validation->set_rules('birth_date', 'Date of Birth', 'trim|required|max_length[255]|xss_clean');
        // $this->form_validation->set_rules('religion', 'Religion', 'trim|required|max_length[255]|xss_clean');
        // $this->form_validation->set_rules('gender', 'Gender', 'trim|required|max_length[255]|xss_clean');
        // $this->form_validation->set_rules('present_address', 'Present Address', 'trim|required|max_length[255]|xss_clean');
        // $this->form_validation->set_rules('permanent_address', 'Permanent Address', 'trim|max_length[255]|xss_clean');
        $this->form_validation->set_rules('class', 'Class', 'trim|required|max_length[255]|xss_clean');
        $this->form_validation->set_rules('group', 'Group', 'trim|max_length[255]|xss_clean');
        $this->form_validation->set_rules('session', 'Session', 'trim|max_length[255]|xss_clean');
        
        /*set studen id start*/
        

    if($this->form_validation->run()==FALSE){
		$msg_array=array(
		    "title"=>"Error",
		    "emit"=>validation_errors(),
		    "btn"=>true
		);
		$this->data['confirmation']=message("warning",$msg_array);
    }else{
         
         $dataR = array(
                'datetime'                         =>date('Y-m-d'),
                'name'                             =>$this->input->post('name'),
                'name_bn'                          =>$this->input->post('name_bn'),
                
                'father_name'                      =>$this->input->post('father_name'),
                'father_profession'                =>$this->input->post('father_profession'),
                'father_workplace'                 =>$this->input->post('father_workplace'),
                'father_annual_income'             =>$this->input->post('father_annual_income'),
                'personal_no'                      =>$this->input->post('personal_no'),
                
                'mother_name'                      =>$this->input->post('mother_name'),
                'mother_profession'                =>$this->input->post('mother_profession'),
                'mother_workplace'                 =>$this->input->post('mother_workplace'),
                'mother_mobile'                    =>$this->input->post('mother_mobile'),
                'mother_annual_income'             =>$this->input->post('mother_annual_income'),
                'local_guardian'                   =>$this->input->post('local_guardian'),
                'previous_educational_institution' =>$this->input->post('previous_educational_institution'),
                'bgb_designation'                  =>$this->input->post('bgb_designation'),
                'last_unit'                        =>$this->input->post('last_unit'),
                
                'student_mobile'                   =>$this->input->post('student_mobile'),
                'guardian_mobile'                  =>$this->input->post('guardian_mobile'),
                'birth_date'                       =>$this->input->post('birth_date'),
                'religion'                         =>$this->input->post('religion'),
                'gender'                           =>$this->input->post('gender'),
                'blood_group'                      =>$this->input->post('blood_group'),
                'present_address'                  =>$this->input->post('present_address'),
                'permanent_address'                =>$this->input->post('permanent_address'),
                'class'                            =>$this->input->post('class'),
                'section'                          =>$this->input->post('section'),
                'group'                            =>$this->input->post('group'),
                'session'                          =>$this->input->post('session'),
                'class_roll'                       =>$this->input->post('class_roll'),
                'type'                             =>$this->input->post('type')
        	);
        	
        if($_FILES['photo']['name'] != '')
        {
            $config['upload_path']      = './public/students';
            $config['allowed_types']    = 'png|jpeg|jpg|gif|bmp';
            $config['max_size']         = '4096';
            $config['max_width']        = '3000';
            $config['max_height']       = '3000';
            $config['file_name']        = "students_".rand(111111,999999);
            $config['overwrite']        = true;  
            $this->upload->initialize($config);
            $this->upload->do_upload('photo');
            $upload_data=$this->upload->data();
            
            $dataR['photo'] = $upload_data['file_name'];
            
        }

            $dataA = array(
                "date"    => date("Y-m-d"),
                "class"   =>$this->input->post('class'),
                "group"   =>$this->input->post('group'),
                "session" =>$this->input->post('session'),
                "section" =>$this->input->post('section'),
                "roll"    => $this->input->post("roll"),
                "shift"   =>$this->input->post('shift'),
                "type"    =>$this->input->post('type'),
                "optional"=>$this->input->post('optional_subject')
            );
            
            $wish_subject = [
                "date"                      => date("Y-m-d"),
                "compulsory_subject_one"    =>$this->input->post('compulsory_subject_one'),
                "compulsory_code_one"       =>$this->input->post('compulsory_code_one'),
                "compulsory_subject_two"    =>$this->input->post('compulsory_subject_two'),
                "compulsory_code_two"       =>$this->input->post('compulsory_code_two'),
                "compulsory_subject_three"  =>$this->input->post('compulsory_subject_three'),
                "compulsory_code_three"     =>$this->input->post('compulsory_code_three'),
                "compulsory_subject_four"   =>$this->input->post('compulsory_subject_four'),
                "compulsory_code_four"      =>$this->input->post('compulsory_code_four'),
                "compulsory_subject_five"   =>$this->input->post('compulsory_subject_five'),
                "compulsory_code_five"      =>$this->input->post('compulsory_code_five'),
                "compulsory_subject_six"    =>$this->input->post('compulsory_subject_six'),
                "compulsory_code_six"       =>$this->input->post('compulsory_code_six'),
                "optional_subject"          =>$this->input->post('optional_subject'),
                "optional_code"             =>$this->input->post('optional_code')
            ];
            
            $dataR['ac_id'] = $_POST['student_id'];
            $dataA['ac_id'] = $_POST['student_id'];
            //add data into db and get Last inserted ID. R means Registration & A means Admission Table
            $idR = $this->action->addAndGetID('registration', $dataR);
            $idA = $this->action->addAndGetID('admission', $dataA);
            if($idR){
                $id_wish_subject = $this->action->addAndGetID('wish_subject',$wish_subject);
            }
         

            $className = config_item('class');
            if($this->input->post('class') == "Eleven" || $this->input->post('class') == "Twelve"){
                $school_or_college = "BGPC";
            }else{
                $school_or_college = "BGPS";
            }

            $sid = $school_or_college."-".date("y").$className[$this->input->post('class')]."-".$this->input->post('section').str_pad($this->input->post("roll"), 3,0,STR_PAD_LEFT);
            //Generating Registration ID End

            $insertStatus = null;
            $insertStatus = $this->action->update('registration',array("reg_id" => $this->input->post('student_id')),array("id" => $idR));
            $this->action->update('admission',array("student_id" => $this->input->post('student_id'),"sid" =>$sid),array("id" => $idA));
            $this->action->update('wish_subject',array("student_id" => $this->input->post('student_id')),array("id" => $id_wish_subject));
            
            if ($insertStatus=="success") {
                $msg_array=array(
                    "title" => "Success",
                    "emit"  => "Student Registration Successfully Completed! <br>Student Main ID is <strong>".$this->input->post('student_id'),
                    "btn"   => true
                );
                $this->data['confirmation'] = message('success', $msg_array);
            }else{
                $msg_array=array(
                    "title" => "warning",
                    "emit"  => "Oops ! Something went wrong.Try again please.",
                    "btn"   => true
                );
                $this->data['confirmation'] = message('warning', $msg_array);
            }
    	}
    	
    	
    
    	$this->session->set_flashdata('confirmation', $this->data['confirmation']);
        redirect('registration/registration','refresh');
    }


    public function update($id=NULL) {

        $this->form_validation->set_rules('name', 'Student\'s Name', 'trim|required|max_length[255]|xss_clean');
        //$this->form_validation->set_rules('father_name', 'Father Name', 'trim|required|max_length[255]|xss_clean');
        //$this->form_validation->set_rules('father_profession', 'Father Profession', 'trim|max_length[255]|xss_clean');
        //$this->form_validation->set_rules('mother_profession', 'Mother Profession', 'trim|max_length[255]|xss_clean');
        //$this->form_validation->set_rules('student_mobile', 'Student Mobile', 'trim|required|max_length[15]|xss_clean');
        //$this->form_validation->set_rules('guardian_mobile', 'Guardian Mobile', 'trim|required|max_length[15]|xss_clean');
        //$this->form_validation->set_rules('birth_date', 'Date of Birth', 'trim|required|max_length[255]|xss_clean');
        //$this->form_validation->set_rules('religion', 'Religion', 'trim|required|max_length[255]|xss_clean');
        //$this->form_validation->set_rules('gender', 'Gender', 'trim|required|max_length[255]|xss_clean');
        // $this->form_validation->set_rules('present_address', 'Present Address', 'trim|required|max_length[255]|xss_clean');
        //$this->form_validation->set_rules('permanent_address', 'Permanent Address', 'trim|max_length[255]|xss_clean');
        $this->form_validation->set_rules('class', 'Class', 'trim|required|max_length[255]|xss_clean');
        $this->form_validation->set_rules('group', 'Group', 'trim|max_length[255]|xss_clean');
        $this->form_validation->set_rules('session', 'Session', 'trim|max_length[255]|xss_clean');
        
        if($this->form_validation->run()==FALSE){
            $msg_array=array(
                "title" => "Error",
                "emit"  => validation_errors(),
                "btn"   => true
            );
            $this->data['confirmation'] = message("warning", $msg_array);
        }else{
           
            if($_FILES['photo']['name']!=NULL){
                $config['upload_path'] = './public/students';
                $config['allowed_types'] = 'png|jpeg|jpg|gif|bmp';
                $config['max_size'] = '4096';
                $config['max_width'] = '3000';
                $config['max_height'] = '3000';
                $config['file_name'] =$this->input->post('picture');
                $config['overwrite']=true;
        
                $this->upload->initialize($config);
        
                if($this->upload->do_upload('photo')){
                    $upload_data=$this->upload->data();
                    $dataR = array(
                        'name'              =>$this->input->post('name'),
                        'name_bn'           =>$this->input->post('name_bn'),
                        
                        'father_name'           =>$this->input->post('father_name'),
                        'father_profession'     =>$this->input->post('father_profession'),
                        'father_workplace'      =>$this->input->post('father_workplace'),
                        'father_annual_income'  =>$this->input->post('father_annual_income'),
                        'personal_no'           =>$this->input->post('personal_no'),
                        
                        'mother_name'           =>$this->input->post('mother_name'),
                        'mother_profession'     =>$this->input->post('mother_profession'),
                        'mother_workplace'      =>$this->input->post('mother_workplace'),
                        'mother_mobile'         =>$this->input->post('mother_mobile'),
                        'mother_annual_income'  =>$this->input->post('mother_annual_income'),
                        'local_guardian'        =>$this->input->post('local_guardian'),
                        'previous_educational_institution'       =>$this->input->post('previous_educational_institution'),
                        'bgb_designation'       =>$this->input->post('bgb_designation'),
                        'last_unit'       =>$this->input->post('last_unit'),
                        
                        'student_mobile'    =>$this->input->post('student_mobile'),
                        'guardian_mobile'   =>$this->input->post('guardian_mobile'),
                        'birth_date'        =>$this->input->post('birth_date'),
                        'religion'          =>$this->input->post('religion'),
                        'gender'            =>$this->input->post('gender'),
                        'blood_group'       =>$this->input->post('blood_group'),
                        'present_address'   =>$this->input->post('present_address'),
                        'permanent_address' =>$this->input->post('permanent_address'),
                        'photo'             =>$upload_data['file_name'],
                        'class'             =>$this->input->post('class'),
                        'section'           =>$this->input->post('section'),
                        'session'           =>$this->input->post('session'),
                        'group'             =>$this->input->post('group'),
                        'class_roll'        =>$this->input->post('class_roll'),
                        'type'              =>$this->input->post('type')
                    );
    
                    $msg_array=array(
                        "title" => "Update",
                        "emit"  => "Student Information Successfully Updated!",
                        "btn"   => true
                    );
                    $this->data['confirmation']=message($this->action->update("registration",$dataR,array('reg_id'=>$id)), $msg_array);
                }else{
                    $msg_array=array(
                        "title" => "Error",
                        "emit"  => $this->upload->display_errors(),
                        "btn"   => true
                    );
                    $this->data['confirmation']=message("warning",$msg_array);
                }
            }else{
                $dataR = array(
                    'name'                                   =>$this->input->post('name'),
                    'name_bn'                                =>$this->input->post('name_bn'),
                    'father_name'                            =>$this->input->post('father_name'),
                    'father_profession'                      =>$this->input->post('father_profession'),
                    'father_workplace'                       =>$this->input->post('father_workplace'),
                    'father_annual_income'                   =>$this->input->post('father_annual_income'),
                    'personal_no'                            =>$this->input->post('personal_no'),
                    'mother_name'                            =>$this->input->post('mother_name'),
                    'mother_profession'                      =>$this->input->post('mother_profession'),
                    'mother_workplace'                       =>$this->input->post('mother_workplace'),
                    'mother_mobile'                          =>$this->input->post('mother_mobile'),
                    'mother_annual_income'                   =>$this->input->post('mother_annual_income'),
                    'local_guardian'                         =>$this->input->post('local_guardian'),
                    'previous_educational_institution'       =>$this->input->post('previous_educational_institution'),
                    'bgb_designation'                        =>$this->input->post('bgb_designation'),
                    'last_unit'                              =>$this->input->post('last_unit'),
                    'student_mobile'                         =>$this->input->post('student_mobile'),
                    'guardian_mobile'                        =>$this->input->post('guardian_mobile'),
                    'birth_date'                             =>$this->input->post('birth_date'),
                    'religion'                               =>$this->input->post('religion'),
                    'gender'                                 =>$this->input->post('gender'),
                    'blood_group'                            =>$this->input->post('blood_group'),
                    'present_address'                        =>$this->input->post('present_address'),
                    'permanent_address'                      =>$this->input->post('permanent_address'),
                    'class'                                  =>$this->input->post('class'),
                    'section'                                =>$this->input->post('section'),
                    'session'                                =>$this->input->post('session'),
                    'group'                                  =>$this->input->post('group'),
                    'class_roll'                             =>$this->input->post('class_roll'),
                    'type'                                   =>$this->input->post('type')
                );
        
                $msg_array=array(
                      "title" => "Success",
                      "emit"  => "Student Information Successfully Updated!",
                      "btn"   => true
                );
                $this->data['confirmation'] = message($this->action->update("registration",$dataR,array('reg_id'=>$id)), $msg_array);
            }
        
            $className = config_item('class');
            if($this->input->post('class') == "Eleven" || $this->input->post('class') == "Twelve"){
                $school_or_college = "BPC";
            }else{
                $school_or_college = "BPS";
            }
    
            $sid = $school_or_college."-".date("y").$className[$this->input->post('class')]."-".$this->input->post('section').str_pad($this->input->post("roll"), 3,0,STR_PAD_LEFT);
    
            $dataA = array(
                "roll"        => $this->input->post('roll'),
                "class"       => $this->input->post('class'),
                "sid"         => $sid,
                'section'     =>$this->input->post('section'),
                'session'     =>$this->input->post('session'),
                'group'       =>$this->input->post('group'),
                "shift"       => $this->input->post('shift'),
                "type"        => $this->input->post('type'),
                "optional"    => $this->input->post('optional_subject')
            );
            
            $this->action->update("admission", $dataA, array('student_id'=>$id));
            
            $wish_subject = [
                "compulsory_subject_one"    =>$this->input->post('compulsory_subject_one'),
                "compulsory_code_one"       =>$this->input->post('compulsory_code_one'),
                "compulsory_subject_two"    =>$this->input->post('compulsory_subject_two'),
                "compulsory_code_two"       =>$this->input->post('compulsory_code_two'),
                "compulsory_subject_three"  =>$this->input->post('compulsory_subject_three'),
                "compulsory_code_three"     =>$this->input->post('compulsory_code_three'),
                "compulsory_subject_four"   =>$this->input->post('compulsory_subject_four'),
                "compulsory_code_four"      =>$this->input->post('compulsory_code_four'),
                "compulsory_subject_five"   =>$this->input->post('compulsory_subject_five'),
                "compulsory_code_five"      =>$this->input->post('compulsory_code_five'),
                "compulsory_subject_six"    =>$this->input->post('compulsory_subject_six'),
                "compulsory_code_six"       =>$this->input->post('compulsory_code_six'),
                "optional_subject"          =>$this->input->post('optional_subject'),
                "optional_code"             =>$this->input->post('optional_code')
            ];
            
            $this->action->update("wish_subject", $wish_subject, array('student_id'=>$id));
        }
    
        $this->session->set_flashdata('confirmation', $this->data['confirmation']);
        redirect('registration/registration/editStudent/'.$id, 'refresh');
    }
    
    
    public function getSubject() {
        $content = file_get_contents('php://input');
        $receive = json_decode($content, true);
	
	    $resultset = array();
        $group = $receive['group'];
        $subject = config_item('subjects');
        
        if($group == 'science') {
        	$resultset['chose_1'] = $subject[$group]['compolsury'][0];
        	$resultset['chose_2'] = $subject[$group]['compolsury'][0];
        	$resultset['chose_3'] = $subject[$group]['compolsury'][0];
        } elseif($group == 'humanities') {
        	$resultset['chose_1'] = $subject[$group]['compolsury'][0];
        	$resultset['chose_2'] = $subject[$group]['compolsury'][0];
        	$resultset['chose_3'] = $subject[$group]['compolsury'][0];
        } else {
        	$resultset['chose_1'] = $subject[$group]['compolsury'][0];
        	$resultset['chose_2'] = $subject[$group]['compolsury'][0];
        	$resultset['chose_3'] = $subject[$group]['compolsury'][0];
        }
        
        $resultset['optional'] = $subject[$group]['optional'];

        echo json_encode($resultset);
    }
    

    private function holder() {
        $holder = config_item('privilege');
        if(!(in_array($this->session->userdata('holder'), $holder))){
            $this->membership_m->logout();
            redirect('access/users/login');
        }
    }
}
