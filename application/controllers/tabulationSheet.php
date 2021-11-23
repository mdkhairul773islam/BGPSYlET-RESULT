<?php class TabulationSheet extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('action');
        $this->load->model('retrieve');
        $this->data['meta_title'] = 'tabulation sheet';
        $this->data["session_list"] = $this->action->read_distinct("registration",array(),"session");
    }

    public function index() {
        $this->data['active'] = 'data-target="tabulation"';
        $this->data['subMenu'] = 'data-target=""';
        
        $this->data['sessions'] = get_result('marks', [], 'year', 'year', 'year', 'ASC');
        $this->data["exam"]     = get_result("exam", [], ['title', 'exam_id'], 'exam_id', 'exam_id', 'ASC');
        
        if(!empty($_POST['show'])){
            
            $whereMarks = [
                'result.class'       =>$_POST['class'],
                'result.section'     =>$_POST['section'],
                'result.year'        =>$_POST['session'],
                'result.exam_id'     =>$_POST['exam'],
                'result.total >'     =>0,
                'result.gpa >'       =>0
            ];
            if(!empty($this->input->post('student_id'))){
                $whereMarks['marks.student_id'] = $this->input->post('student_id');
            }  
            
            $students_total_marks = get_result('result', $whereMarks, 'total', '', 'total', 'DESC'); 
            
            $mark_position = [];
            if(!empty($students_total_marks)){
                foreach($students_total_marks as $key => $mark){
                    $mark_position[] =  $mark->total;
                }
            }
            
            $this->data['student_mark_position'] = $mark_position;
            
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
                    'registration.name',
                    'marks.student_id','marks.roll', 'marks.section', 'marks.year',
                    'marks.exam_id', 'marks.class', 'marks.total',
                    'marks.point', 'marks.letter'
                ];
            
            $this->data['student_information'] = get_join($tableForm, $tableTo, $joinCond, $where, $select, 'marks.student_id', 'marks.student_id', 'ASC');
        }
        
        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/tabulation-sheet', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }
    
    public function primary_education() {
        $this->data['active'] = 'data-target="tabulation"';
        $this->data['subMenu'] = 'data-target="primary_education"';
        
        $this->data['sessions'] = get_result('marks', [], 'year', 'year', 'year', 'ASC');
        $this->data["exam"]     = get_result("exam", [], ['title', 'exam_id'], 'exam_id', 'exam_id', 'ASC');
        
        if(!empty($_POST['show'])){
            
            $whereMarks = [
                'result.class'       =>$_POST['class'],
                'result.section'     =>$_POST['section'],
                'result.year'        =>$_POST['session'],
                'result.exam_id'     =>$_POST['exam'],
                'result.total >'     =>0,
                'result.gpa >'       =>0
            ];
            if(!empty($this->input->post('student_id'))){
                $whereMarks['result.student_id'] = $this->input->post('student_id');
            }  
            
            $students_total_marks = get_result('result', $whereMarks, 'total', '', 'total', 'DESC'); 
            
            $mark_position = [];
            if(!empty($students_total_marks)){
                foreach($students_total_marks as $key => $mark){
                    $mark_position[] =  $mark->total;
                }
            }
            
            $this->data['student_mark_position'] = $mark_position;
            
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
                    'registration.name',
                    'marks.student_id','marks.roll', 'marks.section', 'marks.year',
                    'marks.exam_id', 'marks.class', 'marks.total',
                    'marks.point', 'marks.letter'
                ];
            
            $this->data['student_information'] = get_join($tableForm, $tableTo, $joinCond, $where, $select, 'marks.student_id', 'marks.student_id', 'ASC');
        }
        
        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/tabulationSheet/primary_education', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }
    
    public function secondary_education() {
        $this->data['active'] = 'data-target="tabulation"';
        $this->data['subMenu'] = 'data-target="secondary_education"';
        
        $this->data['sessions'] = get_result('marks', [], 'year', 'year', 'year', 'ASC');
        $this->data["exam"]     = get_result("exam", [], ['title', 'exam_id'], 'exam_id', 'exam_id', 'ASC');
        
        if(!empty($_POST['show'])){
            
            $whereMarks = [
                'result.class'       =>$_POST['class'],
                'result.section'     =>$_POST['section'],
                'result.year'        =>$_POST['session'],
                'result.exam_id'     =>$_POST['exam'],
                'result.total >'     =>0,
                'result.gpa >'       =>0
            ];
            if(!empty($this->input->post('student_id'))){
                $whereMarks['result.student_id'] = $this->input->post('student_id');
            }  
            
            $students_total_marks = get_result('result', $whereMarks, 'total', '', 'total', 'DESC'); 
            
            $mark_position = [];
            if(!empty($students_total_marks)){
                foreach($students_total_marks as $key => $mark){
                    $mark_position[] =  $mark->total;
                }
            }
            
            $this->data['student_mark_position'] = $mark_position;
            
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
                    'registration.name',
                    'marks.student_id','marks.roll', 'marks.section', 'marks.year',
                    'marks.exam_id', 'marks.class', 'marks.total',
                    'marks.point', 'marks.letter'
                ];
            
            $this->data['student_information']  = get_join($tableForm, $tableTo, $joinCond, $where, $select, 'marks.student_id', 'marks.student_id', 'ASC');
            $this->data['subject_qty']          = count(get_join($tableForm, $tableTo, $joinCond, $where, 'marks.subject_name', 'marks.subject_name', 'marks.subject_name', 'ASC'));
        }
        
        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/tabulationSheet/secondary_education', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

}
