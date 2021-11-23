<?php
class Home extends Frontend_Controller {

    function __construct() {
        parent::__construct();
        // load retrieve model
        $this->load->model('retrieve');
        $this->load->model('action');
        $this->load->helper("form");
        $this->load->library("session");

        $this->data['banner'] = $this->retrieve->read('banner');
        $this->data['latest_news']=$this->retrieve->read('latest_news',array(),"desc");
        $this->data['latest_notice']=$this->retrieve->read('notice',array(),"desc");

        //counter-------------------
        $todays_where = array(
            "date" => date("Y-m-d")
        );

        $this->data['todays_visitor']=$this->retrieve->read('visitors',$todays_where);
        $this->data['total_visitor']=$this->retrieve->readDistinct('visitors','ip');
        $this->data['current_visitor']=count($this->action->read('current_visitor'));
        //counter-----------------------
    }
    

    public function index() {
        $this->load->helper('ip');
        $this->load->helper('custom');
        $this->data['active'] = 'home';
        $this->data['meta_title'] = 'home';
        $where_at_a=array("page_page"=>"at_a_glance");
        $where_principal=array("speech_person"=>"principal");
        $where_president=array("speech_person"=>"president");
        $where_gb_member=array("speech_person"=>"gb_member");

        $this->data['p_speech']=$this->retrieve->read('speech',$where_principal);
        $this->data['pr_speech']=$this->retrieve->read('speech',$where_president);
        $this->data['gb_speech']=$this->retrieve->read('speech',$where_gb_member);
        $this->data['at_a_glance']=$this->retrieve->read('pages',$where_at_a);

        $this->data['slider_data']=$this->retrieve->read('slider');

        //counter-----------------------------
        $ip      = get_client_ip();
        $os      = getOS();
        $browser = getBrowser();
        $device  = getDevice();

        $date=date("Y-m-d");

        $data=array(
            "date"              => $date,
            "ip"                => $ip,
            "operating_system"  => $os,
            "browser"           => $browser,
            "device"            => $device
            );

        if ($this->action->exists('visitors', array('ip'=>$ip,'date'=>$date))==false) {
            $this->action->add('visitors',$data);
        }
        //counter-----------------------------

        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/banner', $this->data);
        $this->load->view('includes/navbar', $this->data);
        $this->load->view('includes/slider', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('home', $this->data);
        $this->load->view('includes/aside', $this->data);
        $this->load->view('includes/footer', $this->data);
    }
    

    public function c_counter(){
        $this->load->helper('ip');
        $ip=get_client_ip();

        $data=array(
            'ip'    =>$ip,
            'time'  =>strtotime('now +1min')
        );
        
        if ($this->action->exists('current_visitor', array('ip'=>$ip))==false) {
            $this->action->add("current_visitor",$data);
        }else{
            $data=array(
                'time'  =>strtotime('now +1min')
            );
            $where=array(
                'ip'=>$ip
            );
            $this->action->update("current_visitor",$data,$where);
        }

        $where=array(
            'time <' =>strtotime('now')
        );
        $this->action->deletedata("current_visitor",$where);
        echo "success";
    }

    public function notice() {
        $this->data['meta_title'] = 'notice';
        $this->data['active'] = 'notice';
        
        $where=array('id'=>$this->input->get('id'));
        $this->data['notice']=$this->retrieve->read('notice',$where);

        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/banner', $this->data);
        $this->load->view('includes/navbar', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('notice', $this->data);
        $this->load->view('includes/aside', $this->data);
        $this->load->view('includes/footer', $this->data);
    }

    public function news_update() {
        $this->data['meta_title'] = 'Update News';
        $where=array('id'=>$this->input->get('id'));
        $this->data['news_update']=$this->retrieve->read('latest_news',$where);

        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/banner', $this->data);
        $this->load->view('includes/navbar', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('latest_news', $this->data);
        $this->load->view('includes/aside', $this->data);
        $this->load->view('includes/footer', $this->data);
    }
    
	public function allNotice() {
        $this->data['meta_title'] = 'all_notice';
         $this->data['active'] = 'notice';

        $this->data['all_notice']=$this->retrieve->read('notice');

        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/banner', $this->data);
        $this->load->view('includes/navbar', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('allNotice', $this->data);
        $this->load->view('includes/aside', $this->data);
        $this->load->view('includes/footer', $this->data);
    }
    
	public function result_one2five() {
        $this->data['meta_title'] = 'All Result';
        
        $this->data['sessions'] = get_result('marks', [], 'year', 'year', 'year', 'ASC');
        $this->data['status']   = $this->retrieve->read('publish_message');
        $this->data["exam"]     = get_result("exam", [], ['title', 'exam_id'], 'exam_id', 'exam_id', 'ASC');
        
        if(!empty($_POST['submit'])){
            
            $where = [
                'marks.student_id'  =>$_POST['student_id'],
                'marks.class'       =>$_POST['class'],
                'marks.section'     =>$_POST['section'],
                'marks.year'        =>$_POST['session'],
                'marks.exam_id'     =>$_POST['exam'],
                'admission.session' =>$_POST['session'],
                'admission.class'   =>$_POST['class'],
                'admission.section' =>$_POST['section'],
                'admission.student_id'  =>$_POST['student_id']
            ];
            
            $tableForm ='marks';
            $tableTo   = ['admission', 'registration'];
            $joinCond  = ['marks.class=admission.class', 'admission.student_id=registration.reg_id'];
            $select    = [
                    'admission.student_id','admission.group', 'admission.session',
                    'registration.name', 'registration.photo', 
                    'marks.roll', 'marks.section', 'marks.year', 'marks.exam_id',
                    'marks.class', 'marks.subject', 'marks.total', 
                    'marks.point', 'marks.letter'
                ];
            
            $this->data['student_information'] = get_join($tableForm, $tableTo, $joinCond, $where, $select, '', 'marks.subject', 'ASC');
            
            
            //For Merit list 
            $whereMarks = [
                'result.class'       =>$_POST['class'],
                'result.section'     =>$_POST['section'],
                'result.year'        =>$_POST['session'],
                'result.exam_id'     =>$_POST['exam'],
                'result.total >'     =>0,
                'result.gpa >'       =>0
            ];
        
            $students_total_marks = get_result('result', $whereMarks, 'total', '', 'total', 'DESC'); 
            
            $mark_position = [];
            if(!empty($students_total_marks)){
                foreach($students_total_marks as $key => $mark){
                    $mark_position[] =  $mark->total;
                }
            }
            
            $this->data['student_mark_position'] = $mark_position;
            
            /*echo "<pre>";
            print_r($where);
            print_r($this->data['student_information']);*/
        }
        
        $this->load->view('one2five', $this->data);
    }
    
	public function result_six2ten() {
        $this->data['meta_title'] = 'All Result';
        
        $this->data['sessions'] = get_result('marks', [], 'year', 'year', 'year', 'ASC');
        $this->data['status']   = $this->retrieve->read('publish_message');
        $this->data["exam"]     = get_result("exam", [], ['title', 'exam_id'], 'exam_id', 'exam_id', 'ASC');
        
        if(!empty($_POST['submit'])){
            
            $where = [
                'marks.student_id'  =>$_POST['student_id'],
                'marks.class'       =>$_POST['class'],
                'marks.section'     =>$_POST['section'],
                'marks.year'        =>$_POST['session'],
                'marks.exam_id'     =>$_POST['exam'],
                'admission.session' =>$_POST['session'],
                'admission.class'   =>$_POST['class'],
                'admission.section' =>$_POST['section'],
                'admission.student_id' =>$_POST['student_id']
            ];
            
            $tableForm ='marks';
            $tableTo   = ['admission', 'registration'];
            $joinCond  = ['marks.class=admission.class', 'admission.student_id=registration.reg_id'];
            $select    = [
                    'admission.student_id','admission.group', 'admission.session',
                    'registration.name', 'registration.photo', 
                    'marks.roll', 'marks.section', 'marks.year',
                    'marks.class', 'marks.subject', 'marks.subject_name', 'marks.total',
                    'marks.written', 'marks.objective', 'marks.assignment', 'marks.exam_id',
                    'marks.cleanliness', 'marks.point', 'marks.letter'
                ];
            
            $this->data['student_information'] = get_join($tableForm, $tableTo, $joinCond, $where, $select, '', 'marks.subject', 'ASC');
            $this->data['subject_qty'] = count(get_join($tableForm, $tableTo, $joinCond, $where, 'marks.subject_name', 'marks.subject_name', 'marks.subject_name', 'ASC'));
        }

        $this->load->view('six2ten', $this->data);
    }

    public function all_result() {
        $this->load->helper('form');
        $this->data['active'] = 'academic';
         
        $this->data['all_result'] =NULL;
        $this->data['meta_title'] = 'all_result';

        $class=$this->input->post('class');
        $exam=$this->input->post('exam');

        //$this->data['result']=$this->retrieve->read('upload_result');
        if ($this->input->post("result_Query")) {
            if($class!=""){
                $where=array("result_class"=>$class);
                $this->data['result']=$this->retrieve->read('upload_result',$where,"desc");
            }

            if($exam!=""){
                $where=array("result_exam"=>$exam);
                $this->data['result']=$this->retrieve->read('upload_result',$where,"desc");
            }

        }


        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/banner', $this->data);
        $this->load->view('includes/navbar', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('all_result', $this->data);
        $this->load->view('includes/aside', $this->data);
        $this->load->view('includes/footer', $this->data);
    }
    
    
    public function showResult(){
	    $this->data['result'] = $this->data['student'] = NULL;
	    
	    $this->data['active'] = 'academic';
	     
	    $this->data['meta_title']='result';
	    $this->data['myrank'] = "";
        
        if($this->input->post('class') == 'Eleven' || $this->input->post('class') == 'Twelve'){
            $year = $this->input->post('session');
        }else{
            $year = explode('-', $this->input->post('session'))[0];
        }
       
        if(isset($_POST['submit'])){
            
            $where = array(
                'year'    => $year,
                'class'   => $this->input->post('class'),
                'section' => $this->input->post('section'),
                'exam_id' => $this->input->post('exam')
            );
            //print_r($where);
            
            if(!empty($this->input->post('roll'))){
                $where['roll'] = $this->input->post('roll');
            }
            
            $this->data['allStudents'] = get_result('result', $where, [], '', 'id', 'ASC');
            $this->data['myrank']   = $this->retrieve->read('result', $where);
            //print_r($this->data['allStudents']);
        }
        
        //$this->data['sessions'] = $this->retrieve->readGroupBy('registration', 'session', array(), "session", "asc");
        $this->data['sessions'] = $this->retrieve->readGroupBy('result', 'year', array(), "year", "asc");
        $this->data['status']   = $this->retrieve->read('publish_message');
        $this->data["exam"]     = $this->retrieve->readGroupBy("exam", "title");
        $this->load->view('newResult', $this->data);
    }

    public function newResult(){
	   $this->data['result'] = $this->data['student'] = NULL;
	   $this->data['meta_title']='result';

        if(isset($_POST['submit'])){
            
            
            $where   =array(
                'year'   => $this->input->post('session'),
                'class'  => $this->input->post('class'),
                'section'=> $this->input->post('section'),
                'exam_id'=> $this->input->post('exam')
            );
            
            if(!empty($this->input->post('roll'))){
                $where['roll'] = $this->input->post('roll');
            }
            
            $this->data['allStudents'] = get_result('result', $where, 'id', 'ASC');
        }
        
        $this->data['sessions']=$this->retrieve->readGroupBy('registration','session',array(),"session","asc");
        $this->data['status']= $this->retrieve->read('publish_message');
        $this->data["exam"] = $this->retrieve->readGroupBy("exam", "title");
        
        $this->load->view('newResult',$this->data);
    }




    public function show_result(){
        $this->data['meta_title']='result';
        $this->load->view('show_result', $this->data);
    }

    public function class_routine() {
        $this->data['meta_title'] = 'class_routine';

        $this->data['class_routine']=$this->retrieve->read('upload_routine');

        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/banner', $this->data);
        $this->load->view('includes/navbar', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('class_routine', $this->data);
        $this->load->view('includes/aside', $this->data);
        $this->load->view('includes/footer', $this->data);
    }

    public function syllabus() {
        $this->data['meta_title'] = 'syllabus';

        $this->data['syllabus']=$this->retrieve->read('upload_syllabus');

        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/banner', $this->data);
        $this->load->view('includes/navbar', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('syllabus', $this->data);
        $this->load->view('includes/aside', $this->data);
        $this->load->view('includes/footer', $this->data);
    }

    public function magazin() {
        $this->data['meta_title'] = 'magazine';

        $this->data['magazine']=$this->retrieve->read('upload_magazine');

        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/banner', $this->data);
        $this->load->view('includes/navbar', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('magazin', $this->data);
        $this->load->view('includes/aside', $this->data);
        $this->load->view('includes/footer', $this->data);
    }

    public function leave_list() {
        $this->data['meta_title'] = 'leave_list';
        $this->data['leave_list']=$this->retrieve->read('upload_leave');

        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/banner', $this->data);
        $this->load->view('includes/navbar', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('leave_list', $this->data);
        $this->load->view('includes/aside', $this->data);
        $this->load->view('includes/footer', $this->data);
    }

    public function academic_calendar() {
        $this->data['meta_title'] = 'academic_calendar';
        $this->data['active'] = 'academic';

        $this->data['ad_calender']=$this->retrieve->read('ad_calender');

        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/banner', $this->data);
        $this->load->view('includes/navbar', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('academic_calendar', $this->data);
        $this->load->view('includes/aside', $this->data);
        $this->load->view('includes/footer', $this->data);
    }

    public function gbmember_speech() {
        $this->data['meta_title'] = 'GB Member';

        $where_gb_member=array("speech_person"=>"gb_member");

        $this->data['gb_speech']=$this->retrieve->read('speech',$where_gb_member);

        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/banner', $this->data);
        $this->load->view('includes/navbar', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('gbmember_speech', $this->data);
        $this->load->view('includes/aside', $this->data);
        $this->load->view('includes/footer', $this->data);
    }

   public function digital_content(){
        $this->load->helper('form');
        $this->data['digital_content'] = NULL;
        $this->data['meta_title'] = 'digital_content';
        $this->data['digital_content']=null;

        //$this->data['result']=$this->retrieve->read('upload_result');
        if ($this->input->post("result_Query")) {
            $class=$this->input->post('class');
            $group=$this->input->post('group');
            $subject=$this->input->post('subject');
            $where=array();
            
            if(isset($_POST['search'])){
                foreach($this->input->post("search") as $key => $value){
                    if(!empty($value)){
                        $where[$key] = $value;
                    }
                }
            }
            
            $this->data['digital_content']=$this->retrieve->read('upload_digital_content',$where,"desc");

        }

        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/banner', $this->data);
        $this->load->view('includes/navbar', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('digital_content', $this->data);
        $this->load->view('includes/aside', $this->data);
        $this->load->view('includes/footer', $this->data);
    }


    public function teacher() {
        $this->data['meta_title'] = 'teacher';
        
        $this->data['active'] = 'academic';
         
        $this->data["teachers"]=get_result('employee', ['employee_type'=>'teacher']);

        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/banner', $this->data);
        $this->load->view('includes/navbar', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('teacher', $this->data);
        $this->load->view('includes/aside', $this->data);
        $this->load->view('includes/footer', $this->data);
    }

    public function staff() {
        $this->data['meta_title'] = 'staff';
        
        $this->data['active'] = 'academic';
        
        $where=array('employee_type'=>'staff');
        $this->data['staff']=$this->retrieve->read('employee',$where);

        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/banner', $this->data);
        $this->load->view('includes/navbar', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('staff', $this->data);
        $this->load->view('includes/aside', $this->data);
        $this->load->view('includes/footer', $this->data);
    }

    public function student() {
        $this->load->model('action');
        $this->load->helper('form');

        $this->data['meta_title'] = 'student';
		$this->data['allStudents']=NULL;

        $session=$this->input->post("session");
        $class=$this->input->post("class");

        $this->data["session_list"]=$this->action->read_distinct("students",array(),"session");
        $this->data["student_info"]=$this->action->read("students");

        if($class!=""){
            $where=array("class"=>$class);
            $this->data["student_info"]=$this->action->read("students",$where,"desc");
        }

        if($session!=""){
            $where=array("session"=>$session);
            $this->data["student_info"]=$this->action->read("students",$where,"desc");
        }

        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/banner', $this->data);
        $this->load->view('includes/navbar', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('student', $this->data);
        $this->load->view('includes/aside', $this->data);
        $this->load->view('includes/footer', $this->data);
    }

    public function committee() {
        $this->data['meta_title'] = 'committee';

        $this->data['committee_info']=$this->retrieve->read('committee_members');

        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/banner', $this->data);
        $this->load->view('includes/navbar', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('committee', $this->data);
        $this->load->view('includes/aside', $this->data);
        $this->load->view('includes/footer', $this->data);
    }

    public function imageGallery() {
        $this->data['meta_title'] = 'gallery';
        
        $this->data['active'] = 'gallery';

        $this->data['gallery_data']=$this->retrieve->read('gallery');

        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/banner', $this->data);
        $this->load->view('includes/navbar', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('image_gallery', $this->data);
        $this->load->view('includes/aside', $this->data);
        $this->load->view('includes/footer', $this->data);
    }

    public function videoGallery() {
        $this->data['meta_title'] = 'gallery';
        $this->data['active'] = 'gallery';

        $this->data['v_gallery_data']=$this->retrieve->read('video_gallery');

        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/banner', $this->data);
        $this->load->view('includes/navbar', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('video_gallery', $this->data);
        $this->load->view('includes/aside', $this->data);
        $this->load->view('includes/footer', $this->data);
    }
    
    public function library() {
        $this->data['meta_title'] = 'Library';
        $this->data['active'] = 'library';
        $this->data['library'] = null;
        
        $this->data['library'] = $this->retrieve->read('books');


        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/banner', $this->data);
        $this->load->view('includes/navbar', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('library', $this->data);
        $this->load->view('includes/aside', $this->data);
        $this->load->view('includes/footer', $this->data);
    }

    public function page($page) {
 		$this->data['meta_title'] = 'page';
 		
 		$page = $this->uri->segment(3, 0);
 		if($page=='at_a_glance' || $page=='future_plan' || $page=='college_history' || $page=='success_story' || $page=='college_achievement'){
 		    $this->data['active'] = 'about';
 		}elseif($page=='academic_rules' || $page=='post_information'){
 		     $this->data['active'] = 'administration';
 		}elseif($page=='sports' || $page=='library' || $page=='debate_club' || $page=='physical_education'){
 		    $this->data['active'] = 'curriculums';
 		}elseif($page=='campus' || $page=='study_tour' || $page=='academic_facilites'){
 		    $this->data['active'] = 'facilities';
 		}elseif($page=='admission_rules'){
 		    $this->data['active'] = 'admission';
 		}elseif($page=='phone_book'){
 		    $this->data['active'] = 'contact';
 		}elseif($page=='career'){
 		    $this->data['active'] = 'career';
 		}else{
 		    $this->data['active'] = 'home';
 		}
 		
 	
        $where=array('page_page'=>$page);

        $this->data['page_data']=$this->retrieve->read("pages",$where);

        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/banner', $this->data);
        $this->load->view('includes/navbar', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('single-page', $this->data);
        $this->load->view('includes/aside', $this->data);
        $this->load->view('includes/footer', $this->data);
    }

    public function contact(){
        $this->data['meta_title'] = 'contact';
        
        $this->data['active'] = 'contact';
        
        $this->data['message'] = NULL;
        $this->load->helper('form');
        $this->load->model('action');

        $this->load->library('form_validation');

        if ($this->input->post('msg_submit')) {

            $this->form_validation->set_rules('message', 'Invalid Message  ', 'trim|xss_clean');
            $this->form_validation->set_rules('name', 'Invalid Name', 'trim|xss_clean');
            $this->form_validation->set_rules('mobile', 'Invalid Mobile Number', 'trim|exact_length[11]|xss_clean');
            
            if($this->form_validation->run()==FALSE){
                
                $msg_array=array(
                   "title"=> "Error",
                   "emit" => "Message Invalid",
                   "btn"  => false
              	);
              	
              $this->data['message']=message('warning',$msg_array);
              
              }else{
                 
                $data=array(
                    'messages_date'      => date('Y-m-d'),
                    'messages_name'      => $this->input->post('name'),
                    'messages_mobile'    => $this->input->post('mobile'),
                    'messages_text'      => $this->input->post('message'),
                    'subject'            => $this->input->post('subject'),
                    'messages_condition' => 'unread'
                    );
    
                $msg_array=array(
                    "title"=>"Success",
                    "emit" =>"Message Successfully Sent",
                    "btn"  =>false
                );
                
                /*echo "<pre>";
                print_r($data);
                echo "</pre>";
                die();*/
                
                $this->data['message']=message($this->action->add('messages',$data),$msg_array);
            }
        }

        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/banner', $this->data);
        $this->load->view('includes/navbar', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('contact', $this->data);
        $this->load->view('includes/aside', $this->data);
        $this->load->view('includes/footer', $this->data);
    }
    
    public function feedback(){
        $this->data['meta_title'] = 'Feedback';
        $this->data['active'] = 'contact';
        
        $this->data['message'] = NULL;
        $this->load->helper('form');
        $this->load->model('action');
        $this->load->library('form_validation');
        
        

        if ($this->input->post('msg_submit')) {
            
            $this->form_validation->set_rules('message', 'Invalid Message  ', 'trim|xss_clean');
            $this->form_validation->set_rules('name', 'Invalid Name', 'trim|xss_clean');
            $this->form_validation->set_rules('subject', 'Invalid Subject', 'trim|xss_clean');
            $this->form_validation->set_rules('feedback', 'Invalid Feedback', 'trim|xss_clean');
            $this->form_validation->set_rules('mobile', 'Invalid Mobile Number', 'trim|exact_length[11]|xss_clean');
            
            if($this->form_validation->run()==FALSE){
                
                $msg_array=array(
                   "title"=>"Error",
                   "emit" => "Feedback Invalid",
                   "btn"  => false
              	);
              	
              $this->data['feedbackInfo']=message('warning',$msg_array);
              
              }else{
                 
                $data=array(
                    'date'             =>date('Y-m-d'),
                    'name'             =>$this->input->post('name'),
                    'mobile'           =>$this->input->post('mobile'),
                    'email'            =>$this->input->post('email'),
                    'subject'          =>$this->input->post('subject'),
                    'feedback'         =>$this->input->post('feedback')
                );
    
                $msg_array=array(
                    "title"=>"Success",
                    "emit" =>"Feedback Successfully Sent",
                    "btn"  =>false
                );
                
                $this->data['message']=message($this->action->add('feedback',$data),$msg_array);
            }
        }

        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/banner', $this->data);
        $this->load->view('includes/navbar', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('feedback', $this->data);
        $this->load->view('includes/aside', $this->data);
        $this->load->view('includes/footer', $this->data);
    }

    public function search_admitted_student(){
        $this->load->helper('form');
        $this->load->model('action');
        $this->data['meta_title'] = 'contact';
        $this->data['message'] = NULL;
      	$this->data["student_info"] = $this->action->read_limit('admission',array(),"asc",100);
       //Read distinct
        $this->data["session_list"]=$this->action->read_distinct("admission",array(),"session");

        if ($this->input->post("viewQuery")) {
            $where=array();
            foreach ($_POST['search'] as $key => $value) {
                if ($value!=null) {
                    $where[$key]=$value;
                }
            }
         $this->data['student_info']=$this->action->read('admission',$where);
        }

        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/banner', $this->data);
        $this->load->view('includes/navbar', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('components/students/search_admitted_student', $this->data);
        $this->load->view('includes/aside', $this->data);
        $this->load->view('includes/footer', $this->data);
    }


//-----------------------------------------------------------------------------------------
//-----------------------------------Additional Function-----------------------------------
//-----------------------------------------------------------------------------------------

	public function pdf() {
        $this->data['banner'] = $this->retrieve->read('banner');
        $this->load->helper(array('dompdf', 'file'));

        $cond = array(
            'year'      => $this->input->get('year'),
            'class'     => $this->input->get('class'),
            'roll'      => $this->input->get('roll'),
            'exam_id'   => $this->input->get('exam')
        );

        $this->data['result'] = $this->retrieve->read('marks', $cond);
        $this->data['student'] = $this->retrieve->read('admission', array('YEAR(date)' => $cond['year'], 'class' => $cond['class'], 'roll' => $cond['roll']));
        $this->data["students"] = $this->retrieve->readGroupBy("marks", "roll", $cond);

        $this->data["exam"] = $this->retrieve->readGroupBy("exam", "title");
        // page info here, db calls, etc.
        $html = $this->load->view('pdf_result', $this->data, true);
        pdf_create($html, 'result');

        /* or
        $data = pdf_create($html, '', false);
        write_file('name', $data);
        //if you want to write it to disk and/or send it as an attachment
        */
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
    
    public function getStudentInformation() {
        $content = file_get_contents('php://input');
        $receive = json_decode($content, true);
	
	    $resultset = array();
        $student_id = $receive['student_id'];
        
        $student_subjects = get_row('wish_subject', ['student_id'=>$student_id], ['compulsory_subject_one','compulsory_code_one','compulsory_subject_two','compulsory_code_two','compulsory_subject_three','compulsory_code_three','compulsory_subject_four','compulsory_code_four','compulsory_subject_five','compulsory_code_five','compulsory_subject_six','compulsory_code_six','optional_subject', 'optional_code']);
        $resultset['student_subjects'] = $student_subjects;

        echo json_encode($resultset);
    }

}
