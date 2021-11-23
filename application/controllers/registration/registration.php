<?php class Registration extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('action');
        $this->load->library('upload');
        $this->holder();
        $this->load->helper('admin');
    }

    public function index() {
        $this->data['meta_title']   = 'Registration';
        $this->data['active']       = 'data-target="registration_menu"';
        $this->data['subMenu']      = 'data-target="add-new"';
        $this->data['confirmation'] = null;

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/registration/registration-nav', $this->data);
        $this->load->view('components/registration/registrationForm', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }
    
    public function student_registration() {
        $this->data['meta_title']   = 'Student Registration';
        $this->data['active']       = 'data-target="registration_menu"';
        $this->data['subMenu']      = 'data-target="student_registration"';
        
        $this->data['districts'] = $this->data['divisions'] = $this->data['unions'] = $this->data['upazilas'] = null;
        
        $this->data['divisions']        = $this->action->read('divisions');
        $this->data['districts']        = $this->action->read('districts');
        $this->data['upazilas']         = $this->action->read('upazilas');
        $this->data['unions']           = $this->action->read('unions');
        $this->data['pourashava']       = $this->action->read('pourashava');
        $this->data['city_corporation'] = $this->action->read('city_corporation');
        

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/registration/registration-nav', $this->data);
        $this->load->view('components/registration/student_registration', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }
    
    public function registered() {

        $newData = [];
        if(!empty($_POST['subject_name'])){
            foreach($_POST['subject_name'] as $key => $row){
                $newData[$key]['subject'] = $row;
                $newData[$key]['number']  = $_POST['number'][$key];
                $newData[$key]['point']   = $_POST['point'][$key];
            }
        }
        $subjectiveData = json_encode($newData);
        
        $pscData = [];
        if(!empty($_POST['psc'])){
            foreach($_POST['psc'] as $key => $row){
                $pscData['student_id'] = $this->input->post('student_id');
                $pscData['class'] = 'psc';
                $pscData[$key] = $row;
            }
        }
        
        $sixData = [];
        if(!empty($_POST['six'])){
            foreach($_POST['six'] as $key => $row){
                $sixData['student_id'] = $this->input->post('student_id');
                $sixData['class'] = 'six';
                $sixData[$key] = $row;
            }
        }
        
        $sevenData = [];
        if(!empty($_POST['seven'])){
            foreach($_POST['seven'] as $key => $row){
                $sevenData['student_id'] = $this->input->post('student_id');
                $sevenData['class'] = 'seven';
                $sevenData[$key] = $row;
            }
        }
        
        $jscData = [];
        if(!empty($_POST['jsc'])){
            foreach($_POST['jsc'] as $key => $row){
                $jscData['student_id'] = $this->input->post('student_id');
                $jscData['class'] = 'jsc';
                $jscData[$key] = $row;
            }
        }
        
        $nineData = [];
        if(!empty($_POST['nine'])){
            foreach($_POST['nine'] as $key => $row){
                $nineData['student_id'] = $this->input->post('student_id');
                $nineData['class'] = 'nine';
                $nineData[$key] = $row;
            }
        }
        
        $sscData = [];
        if(!empty($_POST['ssc'])){
            foreach($_POST['ssc'] as $key => $row){
                $sscData['student_id'] = $this->input->post('student_id');
                $sscData['class'] = 'ssc';
                $sscData[$key] = $row;
            }
        }
        
        $elevenData = [];
        if(!empty($_POST['eleven'])){
            foreach($_POST['eleven'] as $key => $row){
                $elevenData['student_id'] = $this->input->post('student_id');
                $elevenData['class'] = 'eleven';
                $elevenData[$key] = $row;
            }
        }
        
        save_data('previous_class',$pscData);
        save_data('previous_class',$sixData);
        save_data('previous_class',$sevenData);
        save_data('previous_class',$jscData);
        save_data('previous_class',$nineData);
        save_data('previous_class',$sscData);
        save_data('previous_class',$elevenData);
        
        $participate_culture      = json_encode((!empty($this->input->post('participate_culture'))) ? $this->input->post('participate_culture') : "");
        $participate_sports       = json_encode((!empty($this->input->post('participate_sports'))) ? $this->input->post('participate_sports') : "");
        $participate_creative     = json_encode((!empty($this->input->post('participate_creative'))) ? $this->input->post('participate_creative') : "");
        $achievement_culture      = json_encode((!empty($this->input->post('achievement_culture'))) ? $this->input->post('achievement_culture') : "");
        $achievement_sports       = json_encode((!empty($this->input->post('achievement_sports'))) ? $this->input->post('achievement_sports') : "");
        $achievement_creative     = json_encode((!empty($this->input->post('achievement_creative'))) ? $this->input->post('achievement_creative') : "");
        $co_curricular_activities = json_encode((!empty($this->input->post('co_curricular_activities'))) ? $this->input->post('co_curricular_activities') : "");
        $hobby                    = json_encode((!empty($this->input->post('hobby'))) ? $this->input->post('hobby') : "");

        $data = array(
            'create_at'                  => date('Y-m-d'),
            'otp'                        => rand(100001,999999),
            'student_id'                 => $this->input->post('student_id'),
            'student_uid'                => $this->input->post('student_uid'),
            'eiin'                       => $this->input->post('student_eiin'),
            'name_bn'                    => $this->input->post('name_bn'),
            'name_en'                    => $this->input->post('name_en'),
            'birth_no'                   => (!empty($this->input->post('brith_card_no'))) ? $this->input->post('brith_card_no') : "",
            'dob'                        => (!empty($this->input->post('dob'))) ? $this->input->post('dob') : "",
            'birth_place'                => (!empty($this->input->post('birth_place'))) ? $this->input->post('birth_place') : "",
            'gender'                     => (!empty($this->input->post('gender'))) ? $this->input->post('gender') : "",
            'nationality'                => (!empty($this->input->post('nationality'))) ? $this->input->post('nationality') : "",
            'religion'                   => (!empty($this->input->post('religion'))) ? $this->input->post('religion') : "",
            'marital_status'             => (!empty($this->input->post('marital_status'))) ? $this->input->post('marital_status') : "",
            'study_class'                => (!empty($this->input->post('study_class'))) ? $this->input->post('study_class') : "",
            'study_section'              => (!empty($this->input->post('study_section'))) ? $this->input->post('study_section') : "",
            'study_group'                => (!empty($this->input->post('study_group'))) ? $this->input->post('study_group') : "",
            'class_roll'                 => (!empty($this->input->post('class_roll'))) ? $this->input->post('class_roll') : "",
            'disability'                 => (!empty($this->input->post('disability'))) ? $this->input->post('disability') : "",
            'blood_group'                => (!empty($this->input->post('blood_group'))) ? $this->input->post('blood_group') : "",
            'small_ethnic_group'         => (!empty($this->input->post('ethnic_group'))) ? $this->input->post('ethnic_group') : "",
            'student_sign_date'          => (!empty($this->input->post('student_sign_date'))) ? $this->input->post('student_sign_date') : "",
            'mother_name_bn'             => (!empty($this->input->post('mother_name_bn'))) ? $this->input->post('mother_name_bn') : "",
            'mother_name_en'             => (!empty($this->input->post('mother_name_en'))) ? $this->input->post('mother_name_en') : "",
            'mother_nid'                 => (!empty($this->input->post('mother_nid'))) ? $this->input->post('mother_nid') : "",
            'mother_dob'                 => (!empty($this->input->post('mother_dob'))) ? $this->input->post('mother_dob') : "",
            'mother_birth_no'            => (!empty($this->input->post('mother_birth_no'))) ? $this->input->post('mother_birth_no') : "",
            'mother_mobile'              => (!empty($this->input->post('mother_mobile'))) ? $this->input->post('mother_mobile') : "",
            'mother_profession'          => (!empty($this->input->post('mother_profession'))) ? $this->input->post('mother_profession') : "",
            'mother_death_year'          => (!empty($this->input->post('mother_death_year'))) ? $this->input->post('mother_death_year') : "",
            'father_name_bn'             => (!empty($this->input->post('father_name_bn'))) ? $this->input->post('father_name_bn') : "",
            'father_name_en'             => (!empty($this->input->post('father_name_en'))) ? $this->input->post('father_name_en') : "",
            'father_nid'                 => (!empty($this->input->post('father_nid'))) ? $this->input->post('father_nid') : "",
            'father_dob'                 => (!empty($this->input->post('father_dob'))) ? $this->input->post('father_dob') : "",
            'father_birth_no'            => (!empty($this->input->post('father_birth_no'))) ? $this->input->post('father_birth_no') : "",
            'father_mobile'              => (!empty($this->input->post('father_mobile'))) ? $this->input->post('father_mobile') : "",
            'father_profession'          => (!empty($this->input->post('father_profession'))) ? $this->input->post('father_profession') : "",
            'father_death_year'          => (!empty($this->input->post('father_death_year'))) ? $this->input->post('father_death_year') : "",
            'guardian_name'              => (!empty($this->input->post('guardian_name'))) ? $this->input->post('guardian_name') : "",
            'guardian_nid'               => (!empty($this->input->post('guardian_nid'))) ? $this->input->post('guardian_nid') : "",
            'guardian_mobile'            => (!empty($this->input->post('guardian_mobile'))) ? $this->input->post('guardian_mobile') : "",
            'guardian_occupation'        => (!empty($this->input->post('guardian_occupation'))) ? $this->input->post('guardian_occupation') : "",
            'guardian_relation'          => (!empty($this->input->post('guardian_relation'))) ? $this->input->post('guardian_relation') : "",
            'present_division'           => (!empty($this->input->post('present_division'))) ? $this->input->post('present_division') : "",
            'present_district'           => (!empty($this->input->post('present_district'))) ? $this->input->post('present_district') : "",
            'present_upazila'            => (!empty($this->input->post('present_upazila'))) ? $this->input->post('present_upazila') : "",
            'present_pourashava'         => (!empty($this->input->post('present_pourashava'))) ? $this->input->post('present_pourashava') : "",
            'present_city_corporation'   => (!empty($this->input->post('present_city_corporation'))) ? $this->input->post('present_city_corporation') : "",
            'present_union'              => (!empty($this->input->post('present_union'))) ? $this->input->post('present_union') : "",
            'present_village'            => (!empty($this->input->post('present_village'))) ? $this->input->post('present_village') : "",
            'present_word_no'            => (!empty($this->input->post('present_word_no'))) ? $this->input->post('present_word_no') : "",
            'present_mouza'              => (!empty($this->input->post('present_mouza'))) ? $this->input->post('present_mouza') : "",
            'present_holding_no'         => (!empty($this->input->post('present_holding_no'))) ? $this->input->post('present_holding_no') : "",
            'present_post_office'        => (!empty($this->input->post('present_post_office'))) ? $this->input->post('present_post_office') : "",
            'present_post_code'          => (!empty($this->input->post('present_post_code'))) ? $this->input->post('present_post_code') : "",
            'permanent_division'         => (!empty($this->input->post('permanent_division'))) ? $this->input->post('permanent_division') : "",
            'permanent_district'         => (!empty($this->input->post('permanent_district'))) ? $this->input->post('permanent_district') : "",
            'permanent_upazila'          => (!empty($this->input->post('permanent_upazila'))) ? $this->input->post('permanent_upazila') : "",
            'permanent_pourashava'       => (!empty($this->input->post('permanent_pourashava'))) ? $this->input->post('permanent_pourashava') : "",
            'permanent_city_corporation' => (!empty($this->input->post('permanent_city_corporation'))) ? $this->input->post('permanent_city_corporation') : "",
            'permanent_union'            => (!empty($this->input->post('permanent_union'))) ? $this->input->post('permanent_union') : "",
            'permanent_village'          => (!empty($this->input->post('permanent_village'))) ? $this->input->post('permanent_village') : "",
            'permanent_word_no'          => (!empty($this->input->post('permanent_word_no'))) ? $this->input->post('permanent_word_no') : "",
            'permanent_mouza'            => (!empty($this->input->post('permanent_mouza'))) ? $this->input->post('permanent_mouza') : "",
            'permanent_holding_no'       => (!empty($this->input->post('permanent_holding_no'))) ? $this->input->post('permanent_holding_no') : "",
            'permanent_post_office'      => (!empty($this->input->post('permanent_post_office'))) ? $this->input->post('permanent_post_office') : "",
            'permanent_post_code'        => (!empty($this->input->post('permanent_post_code'))) ? $this->input->post('permanent_post_code') : "",
            'guardian_sign_date'         => (!empty($this->input->post('guardian_sign_date'))) ? $this->input->post('guardian_sign_date') : "",
            'institute_name'             => (!empty($this->input->post('institute_name'))) ? $this->input->post('institute_name') : "",
            'institute_division'         => (!empty($this->input->post('institute_division'))) ? $this->input->post('institute_division') : "",
            'institute_district'         => (!empty($this->input->post('institute_district'))) ? $this->input->post('institute_district') : "",
            'institute_upazila'          => (!empty($this->input->post('institute_upazila'))) ? $this->input->post('institute_upazila') : "",
            'institute_pourashava'       => (!empty($this->input->post('institute_pourashava'))) ? $this->input->post('institute_pourashava') : "",
            'institute_city_corporation' => (!empty($this->input->post('institute_city_corporation'))) ? $this->input->post('institute_city_corporation') : "",
            'studying_class'             => (!empty($this->input->post('studying_class'))) ? $this->input->post('studying_class') : "",
            'studying_section'           => (!empty($this->input->post('studying_section'))) ? $this->input->post('studying_section') : "",
            'studying_shift'             => (!empty($this->input->post('studying_shift'))) ? $this->input->post('studying_shift') : "",
            'studying_version'           => (!empty($this->input->post('studying_version'))) ? $this->input->post('studying_version') : "",
            'studying_group'             => (!empty($this->input->post('studying_group'))) ? $this->input->post('studying_group') : "",
            'studying_roll'              => (!empty($this->input->post('studying_roll'))) ? $this->input->post('studying_roll') : "",
            'studying_regi_no'           => (!empty($this->input->post('studying_regi_no'))) ? $this->input->post('studying_regi_no') : "",
            'studying_first_class'       => (!empty($this->input->post('studying_first_class'))) ? $this->input->post('studying_first_class') : "",
            'studying_admission_date'    => (!empty($this->input->post('studying_admission_date'))) ? $this->input->post('studying_admission_date') : "",
            'studying_stipend'           => (!empty($this->input->post('studying_stipend'))) ? $this->input->post('studying_stipend') : "",
            'studying_scholarship'       => (!empty($this->input->post('studying_scholarship'))) ? $this->input->post('studying_scholarship') : "",
            'studying_other_scholarship' => (!empty($this->input->post('studying_other_scholarship'))) ? $this->input->post('studying_other_scholarship') : "",
            'studying_transfer_in'       => (!empty($this->input->post('studying_transfer_in'))) ? $this->input->post('studying_transfer_in') : "",
            'studying_repeater'          => (!empty($this->input->post('studying_repeater'))) ? $this->input->post('studying_repeater') : "",
            'subjective_class'           => (!empty($this->input->post('subjective'))) ? $this->input->post('subjective') : "",
            'subjective_type'            => (!empty($this->input->post('subjective_type'))) ? $this->input->post('subjective_type') : "",
            'subjective_result'          => $subjectiveData,
            
            'participate_culture'        => $participate_culture,
            'participate_sports'         => $participate_sports,
            'participate_creative'       => $participate_creative,
            'achievement_culture'        => $achievement_culture,
            'achievement_sports'         => $achievement_sports,
            'achievement_creative'       => $achievement_creative,
            'co_curricular_activities'   => $co_curricular_activities,
            'hobby'                      => $hobby,
            
            'student_type'               => (!empty($this->input->post('student_type'))) ? $this->input->post('student_type') : "",
            'class_teacher_sign_date'    => (!empty($this->input->post('class_teacher_sign_date'))) ? $this->input->post('class_teacher_sign_date') : "",
            'class_teacher_name'         => (!empty($this->input->post('class_teacher_name'))) ? $this->input->post('class_teacher_name') : "",
            'class_teacher_nid'          => (!empty($this->input->post('class_teacher_nid'))) ? $this->input->post('class_teacher_nid') : "",
            'class_teacher_mobile'       => (!empty($this->input->post('class_teacher_mobile'))) ? $this->input->post('class_teacher_mobile') : "",
            'principal_sign_date'        => (!empty($this->input->post('principal_sign_date'))) ? $this->input->post('principal_sign_date') : "",
            'principal_name'             => (!empty($this->input->post('principal_name'))) ? $this->input->post('principal_name') : "",
            'principal_nid'              => (!empty($this->input->post('principal_nid'))) ? $this->input->post('principal_nid') : "",
            'principal_mobile'           => (!empty($this->input->post('principal_mobile'))) ? $this->input->post('principal_mobile') : "",
        );
        
        if(!empty($_FILE['student_photo']['name'])){
            $data['student_photo'] = file_upload('student_photo','online_admission','','profile');
        }
        if(!empty($_FILE['student_sign']['name'])){
            $data['student_sign'] = file_upload('student_sign','online_admission','','student_sign');
        }
        if(!empty($_FILE['guardian_sign']['name'])){
            $data['guardian_sign'] = file_upload('guardian_sign','online_admission','','guardian_sign');
        }
        if(!empty($_FILE['class_teacher_sign']['name'])){
            $data['class_teacher_sign'] = file_upload('class_teacher_sign','online_admission','','class_teacher_sign');
        }
        if(!empty($_FILE['principal_sign']['name'])){
            $data['principal_sign'] = file_upload('principal_sign','online_admission','','principal_sign');
        }

        save_data('online_admission', $data);
        
        $msgOpt = array(
            "title" => "Success",
            "emit"  => "Student Information Successfully Upload. Student ID : " . $this->input->post('student_uid'),
            "btn"   => false
        );

        $this->session->set_flashdata('confirmation',message('success', $msgOpt));
        redirect("registration/registration/student_registration","refresh");
    }
    
    public function all_registration() {
        $this->data['meta_title']   = 'Student Registration';
        $this->data['active']       = 'data-target="registration_menu"';
        $this->data['subMenu']      = 'data-target="all_registration"';

        $where = ['trash'=>0];
        if(isset($_POST['show'])){
            if(!empty($_POST['search'])){
                foreach($_POST['search'] as $key => $val){
                    if($val != null){
                        $where[$key] = $val;
                    }
                }
            }
        }

        $this->data['result'] = get_result('online_admission',$where);

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/registration/registration-nav', $this->data);
        $this->load->view('components/registration/all_registration', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }
    
    public function regi_profile($id=null) {
        $this->data['meta_title']   = 'Profile';
        $this->data['active']       = 'data-target="registration_menu"';
        $this->data['subMenu']      = 'data-target="all_registration"';

        $this->data['result'] = get_result('online_admission',array('id'=> $id));

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/registration/registration-nav', $this->data);
        $this->load->view('components/registration/regi_profile', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }
    
    public function edit_registered($id=null) {
        $this->data['result'] = $result = get_result('online_admission',array('id'=> $id));

        $newData = [];
        if(!empty($_POST['subject_name'])){
            foreach($_POST['subject_name'] as $key => $row){
                $newData[$key]['subject'] = $row;
                $newData[$key]['number']  = $_POST['number'][$key];
                $newData[$key]['point']   = $_POST['point'][$key];
            }
        }
        $subjectiveData = json_encode($newData);

        $pscData = [];
        if(!empty($_POST['psc'])){
            foreach($_POST['psc'] as $key => $row){
                $pscData['student_id'] = $this->input->post('student_id');
                $pscData['class'] = 'psc';
                $pscData[$key] = $row;
            }
        }

        $sixData = [];
        if(!empty($_POST['six'])){
            foreach($_POST['six'] as $key => $row){
                $sixData['student_id'] = $this->input->post('student_id');
                $sixData['class'] = 'six';
                $sixData[$key] = $row;
            }
        }

        $sevenData = [];
        if(!empty($_POST['seven'])){
            foreach($_POST['seven'] as $key => $row){
                $sevenData['student_id'] = $this->input->post('student_id');
                $sevenData['class'] = 'seven';
                $sevenData[$key] = $row;
            }
        }

        $jscData = [];
        if(!empty($_POST['jsc'])){
            foreach($_POST['jsc'] as $key => $row){
                $jscData['student_id'] = $this->input->post('student_id');
                $jscData['class'] = 'jsc';
                $jscData[$key] = $row;
            }
        }

        $nineData = [];
        if(!empty($_POST['nine'])){
            foreach($_POST['nine'] as $key => $row){
                $nineData['student_id'] = $this->input->post('student_id');
                $nineData['class'] = 'nine';
                $nineData[$key] = $row;
            }
        }

        $sscData = [];
        if(!empty($_POST['ssc'])){
            foreach($_POST['ssc'] as $key => $row){
                $sscData['student_id'] = $this->input->post('student_id');
                $sscData['class'] = 'ssc';
                $sscData[$key] = $row;
            }
        }

        $elevenData = [];
        if(!empty($_POST['eleven'])){
            foreach($_POST['eleven'] as $key => $row){
                $elevenData['student_id'] = $this->input->post('student_id');
                $elevenData['class'] = 'eleven';
                $elevenData[$key] = $row;
            }
        }

        save_data('previous_class',$pscData, array('student_id'    => $result[0]->student_id));
        save_data('previous_class',$sixData, array('student_id'    => $result[0]->student_id));
        save_data('previous_class',$sevenData, array('student_id'  => $result[0]->student_id));
        save_data('previous_class',$jscData, array('student_id'    => $result[0]->student_id));
        save_data('previous_class',$nineData, array('student_id'   => $result[0]->student_id));
        save_data('previous_class',$sscData, array('student_id'    => $result[0]->student_id));
        save_data('previous_class',$elevenData, array('student_id' => $result[0]->student_id));
        
                
        $participate_culture      = json_encode((!empty($this->input->post('participate_culture'))) ? $this->input->post('participate_culture') : "");
        $participate_sports       = json_encode((!empty($this->input->post('participate_sports'))) ? $this->input->post('participate_sports') : "");
        $participate_creative     = json_encode((!empty($this->input->post('participate_creative'))) ? $this->input->post('participate_creative') : "");
        $achievement_culture      = json_encode((!empty($this->input->post('achievement_culture'))) ? $this->input->post('achievement_culture') : "");
        $achievement_sports       = json_encode((!empty($this->input->post('achievement_sports'))) ? $this->input->post('achievement_sports') : "");
        $achievement_creative     = json_encode((!empty($this->input->post('achievement_creative'))) ? $this->input->post('achievement_creative') : "");
        $co_curricular_activities = json_encode((!empty($this->input->post('co_curricular_activities'))) ? $this->input->post('co_curricular_activities') : "");
        $hobby                    = json_encode((!empty($this->input->post('hobby'))) ? $this->input->post('hobby') : "");


        $data = array(
            'update_at'                  => date('Y-m-d'),
            'eiin'                       => $this->input->post('student_eiin'),
            'name_bn'                    => $this->input->post('name_bn'),
            'name_en'                    => $this->input->post('name_en'),
            'birth_no'                   => (!empty($this->input->post('brith_card_no'))) ? $this->input->post('brith_card_no') : "",
            'dob'                        => (!empty($this->input->post('dob'))) ? $this->input->post('dob') : "",
            'birth_place'                => (!empty($this->input->post('birth_place'))) ? $this->input->post('birth_place') : "",
            'gender'                     => (!empty($this->input->post('gender'))) ? $this->input->post('gender') : "",
            'nationality'                => (!empty($this->input->post('nationality'))) ? $this->input->post('nationality') : "",
            'religion'                   => (!empty($this->input->post('religion'))) ? $this->input->post('religion') : "",
            'marital_status'             => (!empty($this->input->post('marital_status'))) ? $this->input->post('marital_status') : "",
            'study_class'                => (!empty($this->input->post('study_class'))) ? $this->input->post('study_class') : "",
            'study_section'              => (!empty($this->input->post('study_section'))) ? $this->input->post('study_section') : "",
            'study_group'                => (!empty($this->input->post('study_group'))) ? $this->input->post('study_group') : "",
            'class_roll'                 => (!empty($this->input->post('class_roll'))) ? $this->input->post('class_roll') : "",
            'disability'                 => (!empty($this->input->post('disability'))) ? $this->input->post('disability') : "",
            'blood_group'                => (!empty($this->input->post('blood_group'))) ? $this->input->post('blood_group') : "",
            'small_ethnic_group'         => (!empty($this->input->post('ethnic_group'))) ? $this->input->post('ethnic_group') : "",
            'student_sign_date'          => (!empty($this->input->post('student_sign_date'))) ? $this->input->post('student_sign_date') : "",
            'mother_name_bn'             => (!empty($this->input->post('mother_name_bn'))) ? $this->input->post('mother_name_bn') : "",
            'mother_name_en'             => (!empty($this->input->post('mother_name_en'))) ? $this->input->post('mother_name_en') : "",
            'mother_nid'                 => (!empty($this->input->post('mother_nid'))) ? $this->input->post('mother_nid') : "",
            'mother_dob'                 => (!empty($this->input->post('mother_dob'))) ? $this->input->post('mother_dob') : "",
            'mother_birth_no'            => (!empty($this->input->post('mother_birth_no'))) ? $this->input->post('mother_birth_no') : "",
            'mother_mobile'              => (!empty($this->input->post('mother_mobile'))) ? $this->input->post('mother_mobile') : "",
            'mother_profession'          => (!empty($this->input->post('mother_profession'))) ? $this->input->post('mother_profession') : "",
            'mother_death_year'          => (!empty($this->input->post('mother_death_year'))) ? $this->input->post('mother_death_year') : "",
            'father_name_bn'             => (!empty($this->input->post('father_name_bn'))) ? $this->input->post('father_name_bn') : "",
            'father_name_en'             => (!empty($this->input->post('father_name_en'))) ? $this->input->post('father_name_en') : "",
            'father_nid'                 => (!empty($this->input->post('father_nid'))) ? $this->input->post('father_nid') : "",
            'father_dob'                 => (!empty($this->input->post('father_dob'))) ? $this->input->post('father_dob') : "",
            'father_birth_no'            => (!empty($this->input->post('father_birth_no'))) ? $this->input->post('father_birth_no') : "",
            'father_mobile'              => (!empty($this->input->post('father_mobile'))) ? $this->input->post('father_mobile') : "",
            'father_profession'          => (!empty($this->input->post('father_profession'))) ? $this->input->post('father_profession') : "",
            'father_death_year'          => (!empty($this->input->post('father_death_year'))) ? $this->input->post('father_death_year') : "",
            'guardian_name'              => (!empty($this->input->post('guardian_name'))) ? $this->input->post('guardian_name') : "",
            'guardian_nid'               => (!empty($this->input->post('guardian_nid'))) ? $this->input->post('guardian_nid') : "",
            'guardian_mobile'            => (!empty($this->input->post('guardian_mobile'))) ? $this->input->post('guardian_mobile') : "",
            'guardian_occupation'        => (!empty($this->input->post('guardian_occupation'))) ? $this->input->post('guardian_occupation') : "",
            'guardian_relation'          => (!empty($this->input->post('guardian_relation'))) ? $this->input->post('guardian_relation') : "",
            'present_division'           => (!empty($this->input->post('present_division'))) ? $this->input->post('present_division') : "",
            'present_district'           => (!empty($this->input->post('present_district'))) ? $this->input->post('present_district') : "",
            'present_upazila'            => (!empty($this->input->post('present_upazila'))) ? $this->input->post('present_upazila') : "",
            'present_pourashava'         => (!empty($this->input->post('present_pourashava'))) ? $this->input->post('present_pourashava') : "",
            'present_city_corporation'   => (!empty($this->input->post('present_city_corporation'))) ? $this->input->post('present_city_corporation') : "",
            'present_union'              => (!empty($this->input->post('present_union'))) ? $this->input->post('present_union') : "",
            'present_village'            => (!empty($this->input->post('present_village'))) ? $this->input->post('present_village') : "",
            'present_word_no'            => (!empty($this->input->post('present_word_no'))) ? $this->input->post('present_word_no') : "",
            'present_mouza'              => (!empty($this->input->post('present_mouza'))) ? $this->input->post('present_mouza') : "",
            'present_holding_no'         => (!empty($this->input->post('present_holding_no'))) ? $this->input->post('present_holding_no') : "",
            'present_post_office'        => (!empty($this->input->post('present_post_office'))) ? $this->input->post('present_post_office') : "",
            'present_post_code'          => (!empty($this->input->post('present_post_code'))) ? $this->input->post('present_post_code') : "",
            'permanent_division'         => (!empty($this->input->post('permanent_division'))) ? $this->input->post('permanent_division') : "",
            'permanent_district'         => (!empty($this->input->post('permanent_district'))) ? $this->input->post('permanent_district') : "",
            'permanent_upazila'          => (!empty($this->input->post('permanent_upazila'))) ? $this->input->post('permanent_upazila') : "",
            'permanent_pourashava'       => (!empty($this->input->post('permanent_pourashava'))) ? $this->input->post('permanent_pourashava') : "",
            'permanent_city_corporation' => (!empty($this->input->post('permanent_city_corporation'))) ? $this->input->post('permanent_city_corporation') : "",
            'permanent_union'            => (!empty($this->input->post('permanent_union'))) ? $this->input->post('permanent_union') : "",
            'permanent_village'          => (!empty($this->input->post('permanent_village'))) ? $this->input->post('permanent_village') : "",
            'permanent_word_no'          => (!empty($this->input->post('permanent_word_no'))) ? $this->input->post('permanent_word_no') : "",
            'permanent_mouza'            => (!empty($this->input->post('permanent_mouza'))) ? $this->input->post('permanent_mouza') : "",
            'permanent_holding_no'       => (!empty($this->input->post('permanent_holding_no'))) ? $this->input->post('permanent_holding_no') : "",
            'permanent_post_office'      => (!empty($this->input->post('permanent_post_office'))) ? $this->input->post('permanent_post_office') : "",
            'permanent_post_code'        => (!empty($this->input->post('permanent_post_code'))) ? $this->input->post('permanent_post_code') : "",
            'guardian_sign_date'         => (!empty($this->input->post('guardian_sign_date'))) ? $this->input->post('guardian_sign_date') : "",
            'institute_name'             => (!empty($this->input->post('institute_name'))) ? $this->input->post('institute_name') : "",
            'institute_division'         => (!empty($this->input->post('institute_division'))) ? $this->input->post('institute_division') : "",
            'institute_district'         => (!empty($this->input->post('institute_district'))) ? $this->input->post('institute_district') : "",
            'institute_upazila'          => (!empty($this->input->post('institute_upazila'))) ? $this->input->post('institute_upazila') : "",
            'institute_pourashava'       => (!empty($this->input->post('institute_pourashava'))) ? $this->input->post('institute_pourashava') : "",
            'institute_city_corporation' => (!empty($this->input->post('institute_city_corporation'))) ? $this->input->post('institute_city_corporation') : "",
            'studying_class'             => (!empty($this->input->post('studying_class'))) ? $this->input->post('studying_class') : "",
            'studying_section'           => (!empty($this->input->post('studying_section'))) ? $this->input->post('studying_section') : "",
            'studying_shift'             => (!empty($this->input->post('studying_shift'))) ? $this->input->post('studying_shift') : "",
            'studying_version'           => (!empty($this->input->post('studying_version'))) ? $this->input->post('studying_version') : "",
            'studying_group'             => (!empty($this->input->post('studying_group'))) ? $this->input->post('studying_group') : "",
            'studying_roll'              => (!empty($this->input->post('studying_roll'))) ? $this->input->post('studying_roll') : "",
            'studying_regi_no'           => (!empty($this->input->post('studying_regi_no'))) ? $this->input->post('studying_regi_no') : "",
            'studying_first_class'       => (!empty($this->input->post('studying_first_class'))) ? $this->input->post('studying_first_class') : "",
            'studying_admission_date'    => (!empty($this->input->post('studying_admission_date'))) ? $this->input->post('studying_admission_date') : "",
            'studying_stipend'           => (!empty($this->input->post('studying_stipend'))) ? $this->input->post('studying_stipend') : "",
            'studying_scholarship'       => (!empty($this->input->post('studying_scholarship'))) ? $this->input->post('studying_scholarship') : "",
            'studying_other_scholarship' => (!empty($this->input->post('studying_other_scholarship'))) ? $this->input->post('studying_other_scholarship') : "",
            'studying_transfer_in'       => (!empty($this->input->post('studying_transfer_in'))) ? $this->input->post('studying_transfer_in') : "",
            'studying_repeater'          => (!empty($this->input->post('studying_repeater'))) ? $this->input->post('studying_repeater') : "",
            'subjective_class'           => (!empty($this->input->post('subjective'))) ? $this->input->post('subjective') : "",
            'subjective_type'            => (!empty($this->input->post('subjective_type'))) ? $this->input->post('subjective_type') : "",
            'subjective_result'          => $subjectiveData,
            
            'participate_culture'        => $participate_culture,
            'participate_sports'         => $participate_sports,
            'participate_creative'       => $participate_creative,
            'achievement_culture'        => $achievement_culture,
            'achievement_sports'         => $achievement_sports,
            'achievement_creative'       => $achievement_creative,
            'co_curricular_activities'   => $co_curricular_activities,
            'hobby'                      => $hobby,
            
            'student_type'               => (!empty($this->input->post('student_type'))) ? $this->input->post('student_type') : "",
            'class_teacher_sign_date'    => (!empty($this->input->post('class_teacher_sign_date'))) ? $this->input->post('class_teacher_sign_date') : "",
            'class_teacher_name'         => (!empty($this->input->post('class_teacher_name'))) ? $this->input->post('class_teacher_name') : "",
            'class_teacher_nid'          => (!empty($this->input->post('class_teacher_nid'))) ? $this->input->post('class_teacher_nid') : "",
            'class_teacher_mobile'       => (!empty($this->input->post('class_teacher_mobile'))) ? $this->input->post('class_teacher_mobile') : "",
            'principal_sign_date'        => (!empty($this->input->post('principal_sign_date'))) ? $this->input->post('principal_sign_date') : "",
            'principal_name'             => (!empty($this->input->post('principal_name'))) ? $this->input->post('principal_name') : "",
            'principal_nid'              => (!empty($this->input->post('principal_nid'))) ? $this->input->post('principal_nid') : "",
            'principal_mobile'           => (!empty($this->input->post('principal_mobile'))) ? $this->input->post('principal_mobile') : "",
        );

        if(!empty($_FILES['student_photo']['name'])){
            if (file_exists($this->input->post('old_student_photo'))) {
                unlink($this->input->post('old_student_photo'));
            }
            $data['student_photo'] = file_upload('student_photo', 'online_admission', '', 'profile');
        }

        if(!empty($_FILES['student_sign']['name'])){
            if (file_exists($this->input->post('old_student_sign'))) {
                unlink($this->input->post('old_student_sign'));
            }
            $data['student_sign'] = file_upload('student_sign', 'online_admission', '', 'student_sign');
        }

        if(!empty($_FILES['guardian_sign']['name'])){
            if (file_exists($this->input->post('old_guardian_sign'))) {
                unlink($this->input->post('old_guardian_sign'));
            }
            $data['guardian_sign'] = file_upload('guardian_sign', 'online_admission', '', 'guardian_sign');
        }

        if(!empty($_FILES['class_teacher_sign']['name'])){
            if (file_exists($this->input->post('old_class_teacher_sign'))) {
                unlink($this->input->post('old_class_teacher_sign'));
            }
            $data['class_teacher_sign'] = file_upload('class_teacher_sign', 'online_admission', '', 'class_teacher_sign');
        }

        if(!empty($_FILES['principal_sign']['name'])){
            if (file_exists($this->input->post('old_principal_sign'))) {
                unlink($this->input->post('old_principal_sign'));
            }
            $data['principal_sign'] = file_upload('principal_sign', 'online_admission', '', 'principal_sign');
        }

        save_data('online_admission', $data, array('id' => $id));

        $msgOpt = array(
            "title" => "Success",
            "emit"  => "Student Information Successfully Updated. Student ID : " . $this->input->post('student_uid'),
            "btn"   => false
        );

        $this->session->set_flashdata('confirmation',message('success', $msgOpt));
        redirect("registration/registration/all_registration","refresh");
    }

    public function edit_registration($id=null) {
        $this->data['meta_title']   = 'Edit Registration';
        $this->data['active']       = 'data-target="registration_menu"';
        $this->data['subMenu']      = 'data-target="all_registration"';
        
        $this->data['districts'] = $this->data['divisions'] = $this->data['unions'] = $this->data['upazilas'] = null;
        
        $this->data['divisions']        = $this->action->read('divisions');
        $this->data['districts']        = $this->action->read('districts');
        $this->data['upazilas']         = $this->action->read('upazilas');
        $this->data['unions']           = $this->action->read('unions');
        $this->data['pourashava']       = $this->action->read('pourashava');
        $this->data['city_corporation'] = $this->action->read('city_corporation');
        
        $this->data['result'] = get_result('online_admission',array('id'=> $id));
        

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/registration/registration-nav', $this->data);
        $this->load->view('components/registration/edit_registration', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }
    
    public function trash($id=null) {
        $this->data['confirmation'] = null;
        $result = get_row('online_admission',array('id'=> $id));
        
        $msg_array = array(
            "title" => "Delete",
            "emit"  => "Student Information Successfully Deleted!",
            "btn"   => true
          );
        $data = array("trash"=>1);
        if($this->action->update('online_admission', $data, array('id'=>$id))){
            
            $this->action->update('previous_class', $data, array('student_id'=>$result->student_id));
            
            $this->data['confirmation'] = message('danger', $msg_array); 
            $this->session->set_flashdata('confirmation', $this->data['confirmation']);
        }         
        redirect('registration/registration/all_registration','refresh');
    }
    
    public function registration_view() {
        $this->data['meta_title']   = 'Student Registration';
        $this->data['active']       = 'data-target="registration_menu"';
        $this->data['subMenu']      = 'data-target="student_registration"';
        

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/registration/registration-nav', $this->data);
        $this->load->view('components/registration/registration_view', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    public function allStudent() {
        $this->data['meta_title'] = 'Registration';
        $this->data['active'] = 'data-target="registration_menu"';
        $this->data['subMenu'] = 'data-target="all"';
        $this->data['confirmation'] = null;

        $this->data['sessions']=$this->action->readGroupBy('registration','session',array(),"session","asc");

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/registration/registration-nav', $this->data);
        $this->load->view('components/registration/allStudent', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    public function profile($id=NULL) {
        $this->data['meta_title'] = 'Registration';
        $this->data['active'] = 'data-target="registration_menu"';
        $this->data['subMenu'] = 'data-target="all"';
        $this->data['confirmation'] = null;

        $from     = "registration";
        $join     = "admission";
        $joinCond = "registration.reg_id = admission.student_id";
        $where    = array("registration.reg_id" => $id);

        $this->data['student']=$this->action->joinAndRead($from,$join,$joinCond,$where);


        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/registration/registration-nav', $this->data);
        $this->load->view('components/registration/profile', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }



    public function editStudent($id=NULL) {
        $this->data['meta_title'] = 'Registration';
        $this->data['active'] = 'data-target="registration_menu"';
        $this->data['subMenu'] = 'data-target="all"';
        $this->data['confirmation'] = null;

        $from     = "admission";
        $join     = "registration";
        $joinCond = "registration.reg_id = admission.student_id";
        $where    = array("registration.reg_id" => $id);

        $this->data['student']=$this->action->joinAndRead($from,$join,$joinCond,$where);

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/registration/registration-nav', $this->data);
        $this->load->view('components/registration/editStudent', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    public function deleteStudent($id=NULL) {
        $this->data['confirmation'] = null;

        $student=$this->action->read('registration',array('reg_id'=>$id));
         if($student != NULL){
            unlink('./public/students/'.$student[0]->photo);
         }

        $msg_array=array(
            "title"=>"Delete",
            "emit"=>"Student Information Successfully Deleted!",
            "btn"=>true
          );

        $this->data['confirmation']=message($this->action->deletedata('registration',array('reg_id'=>$id)),$msg_array);
        $this->action->deletedata('admission',array('student_id'=>$id));
        $this->session->set_flashdata('confirmation',$this->data['confirmation']);
        redirect('registration/registration/allStudent','refresh');
    }



    private function holder() {
        $holder = config_item('privilege');
        if(!(in_array($this->session->userdata('holder'), $holder))) {
            $this->membership_m->logout();
            redirect('access/users/login');
        }
    }

}
