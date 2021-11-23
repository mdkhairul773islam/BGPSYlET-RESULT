<?php

class ResultPublish extends Admin_Controller {

     function __construct() {
        parent::__construct();

        $this->load->model('action');
        $this->load->model('retrieve');
        $this->data['meta_title'] = 'Result Publish';
        $this->data["session_list"]=$this->action->read_distinct("registration",array(),"session");
    }

    public function index() {
        $this->data['active'] = 'data-target="result_menu"';
        $this->data['subMenu'] = 'data-target=""';
        $this->data['students'] = $this->data['confirmation'] = null;
        
        $this->data['sessions'] = get_result('marks', [], 'year', 'year', 'year', 'ASC');
        $this->data["exam"]     = get_result("exam", [], ['title', 'exam_id'], 'exam_id', 'exam_id', 'ASC');

        if(isset($_POST['show'])){
            
           $where = [
                'marks.class'       =>$_POST['class'],
                'marks.section'     =>$_POST['section'],
                'marks.year'        =>$_POST['session'],
                'marks.exam_id'     =>$_POST['exam'],
                'admission.session' =>$_POST['session'],
                'admission.class'   =>$_POST['class'],
                'admission.section' =>$_POST['section'],
            ];
            
            if(!empty($this->input->post('student_id'))){
                $where['marks.student_id'] = $this->input->post('student_id');
            }
            
            $tableForm ='marks';  
            $tableTo   = ['admission', 'registration'];
            $joinCond  = ['marks.student_id=admission.student_id', 'marks.student_id=registration.reg_id'];
            $select    = [
                'registration.name', 'admission.group',
                'marks.student_id','marks.roll', 'marks.section', 'marks.year',
                'marks.exam_id', 'marks.class', 'marks.total',
                'marks.point', 'marks.letter'
            ];
            
            $this->data['student_information'] = get_join($tableForm, $tableTo, $joinCond, $where, $select, 'marks.student_id', 'marks.student_id', 'ASC');
        }
        
        if(isset($_POST['publish'])){
            
            if(!empty($this->input->post('student_id'))){
                
                foreach($this->input->post('student_id') as $key => $val){
                    
                    $data = array(
                        "date"              => $this->input->post('date'),
                        "year"              => $this->input->post('year'),
                        "class"             => $this->input->post('class'),
                        "section"           => $this->input->post("section"),
                        "exam_id"           => $this->input->post('exam_id'),
                        "student_id"        => $val,
                        "roll"              => $_POST['roll'][$key],
                        "name"              => $_POST['name'][$key],
                        "group"             => $_POST['group'][$key],
                        "total"             => $_POST['total_marks'][$key],
                        "gpa"               => $_POST['gpa'][$key],
                        "grade"               => $_POST['grade'][$key]
                    );               
                
                    $where = [
                        'class'       =>$_POST['class'],
                        'section'     =>$_POST['section'],
                        'year'        =>$_POST['year'],
                        'exam_id'     =>$_POST['exam_id'],
                        "roll"        =>$_POST['roll'][$key],
                        "student_id"  =>$_POST['student_id'][$key],
                    ];
            
                    if($this->action->exists("result", $where)){
                        $options = array(
                            "title" => "Update",
                            "emit"  => "Information changed!",
                            "btn"   => true
                        );
                        $this->data['confirmation'] = message($this->action->update("result", $data, $where), $options);
                    } else {
                        $options = array(
                            "title" => "Success",
                            "emit"  => "Information saved!",
                            "btn"   => true
                        );
                        $this->data['confirmation'] = message($this->action->add("result", $data), $options);
                    }
                }
            }
        }
        
        
        
        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/resultPublish/publish-nav', $this->data);
        $this->load->view('components/resultPublish/resultPublish', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }
    
    
    public function resultPublishSSC() {
        $this->data['active'] = 'data-target="result_menu"';
        $this->data['subMenu'] = 'data-target=""';
        $this->data['students'] = $this->data['confirmation'] = null;
        
        $this->data['sessions'] = get_result('marks', [], 'year', 'year', 'year', 'ASC');
        $this->data["exam"]     = get_result("exam", [], ['title', 'exam_id'], 'exam_id', 'exam_id', 'ASC');

        if(isset($_POST['show'])){
            
           $where = [
                'marks.class'       =>$_POST['class'],
                'marks.section'     =>$_POST['section'],
                'marks.year'        =>$_POST['session'],
                'marks.exam_id'     =>$_POST['exam'],
                'admission.session' =>$_POST['session'],
                'admission.class'   =>$_POST['class'],
                'admission.section' =>$_POST['section'],
            ];
            
            if(!empty($this->input->post('student_id'))){
                $where['marks.student_id'] = $this->input->post('student_id');
            }
            
            $tableForm ='marks';  
            $tableTo   = ['admission', 'registration'];
            $joinCond  = ['marks.student_id=admission.student_id', 'marks.student_id=registration.reg_id'];
            $select    = [
                'registration.name', 'admission.group',
                'marks.student_id','marks.roll', 'marks.section', 'marks.year',
                'marks.exam_id', 'marks.class', 'marks.total',
                'marks.point', 'marks.letter'
            ];
            
            $this->data['student_information'] = get_join($tableForm, $tableTo, $joinCond, $where, $select, 'marks.student_id', 'marks.student_id', 'ASC');
            $this->data['subject_qty'] = count(get_join($tableForm, $tableTo, $joinCond, $where, 'marks.subject_name', 'marks.subject_name', 'marks.subject_name', 'ASC'));
        }
        
        if(isset($_POST['publish'])){
            
            if(!empty($this->input->post('student_id'))){
                
                foreach($this->input->post('student_id') as $key => $val){
                    
                    $data = array(
                        "date"              => $this->input->post('date'),
                        "year"              => $this->input->post('year'),
                        "class"             => $this->input->post('class'),
                        "section"           => $this->input->post("section"),
                        "exam_id"           => $this->input->post('exam_id'),
                        "student_id"        => $val,
                        "roll"              => $_POST['roll'][$key],
                        "name"              => $_POST['name'][$key],
                        "group"             => $_POST['group'][$key],
                        "total"             => $_POST['total_marks'][$key],
                        "gpa"               => $_POST['gpa'][$key],
                        "grade"               => $_POST['grade'][$key]
                    );               
                
                    $where = [
                        'class'       =>$_POST['class'],
                        'section'     =>$_POST['section'],
                        'year'        =>$_POST['year'],
                        'exam_id'     =>$_POST['exam_id'],
                        "roll"        =>$_POST['roll'][$key],
                        "student_id"  =>$_POST['student_id'][$key],
                    ];
            
                    if($this->action->exists("result", $where)){
                        $options = array(
                            "title" => "Update",
                            "emit"  => "Information changed!",
                            "btn"   => true
                        );
                        $this->data['confirmation'] = message($this->action->update("result", $data, $where), $options);
                    } else {
                        $options = array(
                            "title" => "Success",
                            "emit"  => "Information saved!",
                            "btn"   => true
                        );
                        $this->data['confirmation'] = message($this->action->add("result", $data), $options);
                    }
                }
            }
        }
        
        
        
        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/resultPublish/publish-nav', $this->data);
        $this->load->view('components/resultPublish/resultPublishSSC', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    public function publish_message() {
        $this->data['active'] = 'data-target="result_menu"';
        $this->data['subMenu'] = 'data-target="pm"';
        $this->data['students'] = $this->data['confirmation'] = null;

	if($this->input->post('save')){
		$data=array(
		'message'=>$this->input->post('message'),
		'is_publish'=>$this->input->post('status')
		);
		$where=array(
		'id'=>'1'
		);

		$options = array(
                "title" => "Success",
                "emit"  => "Information saved Successfully!",
                "btn"   => true
            	);
               $this->data['confirmation'] = message($this->action->update("publish_message", $data,$where), $options);
	}

		$this->data['msg_info'] = $this->action->read('publish_message');

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/resultPublish/publish-nav', $this->data);
        $this->load->view('components/resultPublish/publish_message', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

}
