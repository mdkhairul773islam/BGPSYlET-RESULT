<?php
class Attendance extends Admin_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('action');
    }
    
    public function index() {
        $this->data['meta_title']   = '';
        $this->data['active']       = 'data-target="e_attendance_menu"';
        $this->data['subMenu']      = 'data-target="attendance"';
        $this->data['confirmation'] = null;
        $this->data["info"]         = [];
        
        if(isset($_POST['send'])){
            $msg_warning = array(
                "title" => "Warning",
                "emit"  => "All Message Is Not Sent!!",
                "btn"   => true
            );
            $msg_success = array(
                "title" => "Success",
                "emit"  => "All Message Is Successfully Sent",
                "btn"   => true
            );
            if(is_array($_POST['ac_id'])){
                foreach($_POST['ac_id'] as $key=>$ac_id){
                    $employee = get_result('employee', ['ac_id'=>$ac_id]);
                    if($employee){
                        $message = send_sms($employee[0]->employee_mobile, $_POST['msg']);  		
                        $insert = array(
                         	'delivery_date'     => date('Y-m-d'),
                         	'delivery_time'     => date('H:i:s'),
                         	'mobile'            => $employee[0]->employee_mobile,
                         	'message'           => $_POST['msg'],
                         	'total_characters'  => strlen($_POST['msg']),
                         	'total_messages'    => (ceil(strlen($_POST['msg'])/130)),
                         	'delivery_report'   => $message
                        );
                        save_data('sms_record', $insert);
                    }
                }
                if($message){
                    $this->data['confirmation'] = message('success', $msg_success);
                }else{
                    $this->data['confirmation'] = message('warning', $msg_warning);
                }
            }
        }
        
        
        $this->data["department"]  = get_join('access_ctrl_attendance', 'employee', 'employee.ac_id=access_ctrl_attendance.ac_id', array('trash'=>0), 'department', 'department');
        $this->data["names"]       = get_join('access_ctrl_attendance', 'employee', 'employee.ac_id=access_ctrl_attendance.ac_id', array('trash'=>0), '', 'name');
        
       
        if(isset($_POST['show'])){
            $where = ['trash'=>0];
            foreach($_POST['search'] as $key => $val){
                if($val!=''){
                    if($key=="from"){
                        $where['access_ctrl_attendance.date >= '] = $val;
                    }
                    else if($key=="to"){
                        $where['access_ctrl_attendance.date <= '] = $val;
                    }
                    else if($key=="type"){
                        $where['access_ctrl_attendance.'.$val." != ''"] = '';
                    }
                    else {
                        $where['access_ctrl_attendance.'.$key] = $val;
                    }
                }
            }
            $this->data["info"] = get_join('access_ctrl_attendance', 'employee', 'employee.ac_id=access_ctrl_attendance.ac_id', $where);
        }
        
        
        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        //$this->load->view('components/employee/employee-nav', $this->data);
        $this->load->view('components/employee/list_attendance', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }
    public function student() {
        $this->data['meta_title']   = '';
        $this->data['active']       = 'data-target="e_attendance_menu"';
        $this->data['subMenu']      = 'data-target="attendance"';
        $this->data['confirmation'] = null;
        $this->data["info"]         = [];
        
        if(isset($_POST['send'])){
            $msg_warning = array(
                "title" => "Warning",
                "emit"  => "All Message Is Not Sent!!",
                "btn"   => true
            );
            $msg_success = array(
                "title" => "Success",
                "emit"  => "All Message Is Successfully Sent",
                "btn"   => true
            );
            
            if(is_array($_POST['ac_id'])){
                foreach($_POST['ac_id'] as $key=>$ac_id){
                    if($_POST['type']=="Teachers" || $_POST['type']=="STAFF"){
                        $registration = get_result('registration', ['ac_id'=>$ac_id]);
                        if($registration){
                            $message = send_sms($registration[0]->student_mobile, $_POST['msg']);  		
                            $insert = array(
                             	'delivery_date'     => date('Y-m-d'),
                             	'delivery_time'     => date('H:i:s'),
                             	'mobile'            => $registration[0]->student_mobile,
                             	'message'           => $_POST['msg'],
                             	'total_characters'  => strlen($_POST['msg']),
                             	'total_messages'    => (ceil(strlen($_POST['msg'])/130)),
                             	'delivery_report'   => $message
                            );
                            save_data('sms_record', $insert);
                            if($message){
                                $this->data['confirmation'] = message('success', $msg_success);
                            }else{
                                $this->data['confirmation'] = message('warning', $msg_warning);
                            }
                        }
                    }
                }
            }
        }
        
        
        $this->data["department"]  = get_join('access_ctrl_attendance', 'registration', 'registration.ac_id=access_ctrl_attendance.ac_id', array('trash'=>0), 'department', 'department');
        $this->data["names"]       = get_join('access_ctrl_attendance', 'registration', 'registration.ac_id=access_ctrl_attendance.ac_id', array('trash'=>0), '', 'access_ctrl_attendance.name');
        
        if(isset($_POST['show'])){
            $where = ['trash'=>0];
            foreach($_POST['search'] as $key => $val){
                if($val!=''){
                    if($key=="from"){
                        $where['access_ctrl_attendance.date >= '] = $val;
                    }
                    else if($key=="to"){
                        $where['access_ctrl_attendance.date <= '] = $val;
                    }
                    else if($key=="type"){
                        $where['access_ctrl_attendance.'.$val." != ''"] = '';
                    }
                    else {
                        $where[$key] = $val;
                    }
                }
            }
            $this->data["info"] = get_join('access_ctrl_attendance', 'registration', 'registration.ac_id=access_ctrl_attendance.ac_id', $where);
        }
        
        
        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        //$this->load->view('components/employee/employee-nav', $this->data);
        $this->load->view('components/employee/list_attendance_student', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }
    
    public function importEmployeeData(){
        
        if(isset($_POST['submit'])){
            
            
            if (!empty($_FILES['file']['name']) && $_FILES["file"]["size"] > 0) {
                
                $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
                
                if($ext == 'csv'){
                
                    $fileName = $_FILES["file"]["tmp_name"];
                    
                    $file = fopen($fileName, "r");
                    
                    while (($column = fgetcsv($file, '', ',')) !== FALSE) {
                        
                        
                        $data = [
                            'emp_id'     => (isset($column[0]) ? $column[0] : ''),
                            'ac_id'      => (isset($column[1]) ? $column[1] : ''),
                            'name'       => (isset($column[2]) ? $column[2] : ''),
                            'date'       => (isset($column[3]) ? $column[3] : ''),
                            'timetable'  => (isset($column[4]) ? $column[4] : ''),
                            'on_duty'    => (isset($column[5]) ? $column[5] : ''),
                            'off_duty'   => (isset($column[6]) ? $column[6] : ''),
                            'clock_in'   => (isset($column[7]) ? $column[7] : ''),
                            'clock_out'  => (isset($column[8]) ? $column[8] : ''),
                            'normal'     => (isset($column[9]) ? $column[9] : ''),
                            'real_time'  => (isset($column[10]) ? $column[10] : ''),
                            'late'       => (isset($column[11]) ? $column[11] : ''),
                            'early'      => (isset($column[12]) ? $column[12] : ''),
                            'absent'     => (isset($column[13]) ? $column[13] : ''),
                            'ot_time'    => (isset($column[14]) ? $column[14] : ''),
                            'work_time'  => (isset($column[15]) ? $column[15] : ''),
                            'exception'  => (isset($column[16]) ? $column[16] : ''),
                            'must_c_in'  => (isset($column[17]) ? $column[17] : ''),
                            'must_c_out' => (isset($column[18]) ? $column[18] : ''),
                            'department' => (isset($column[19]) ? $column[19] : ''),
                            'ndays'      => (isset($column[20]) ? $column[20] : ''),
                            'weekend'    => (isset($column[21]) ? $column[21] : ''),
                            'holiday'    => (isset($column[22]) ? $column[22] : ''),
                            'att_time'   => (isset($column[23]) ? $column[23] : ''),
                            'ndays_ot'   => (isset($column[24]) ? $column[24] : ''),
                            'weekend_ot' => (isset($column[25]) ? $column[25] : ''),
                            'holiday_ot' => (isset($column[26]) ? $column[26] : ''),
                        ];
                        
                        if(!empty($column[1]) && $column[1] != 'ac_id'){
                            save_data('access_ctrl_attendance', $data);
                        }
                    }
                    
                    fclose($file);
                    
                    $msg = [
                        "title" => "success",
                        "emit"  => "Employee data import successfully.",
                        "btn"   => true
                    ];
                    
                    $status = 'success';
                }else{
                    
                    $msg = [
                        "title" => "warning",
                        "emit"  => "This upload file not in csv file. You can upload only csv file.",
                        "btn"   => true
                    ];
                    
                    $status = 'warning';
                }
            }
            
            $this->session->set_flashdata('confirmation', message($status, $msg));
        }
        
        redirect('employee/attendance', 'refresh');
    }
    
    
    public function importStudentData(){
        
        if(isset($_POST['submit'])){
            
            
            if (!empty($_FILES['file']['name']) && $_FILES["file"]["size"] > 0) {
                
                $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
                
                if($ext == 'csv'){
                
                    $fileName = $_FILES["file"]["tmp_name"];
                    
                    $file = fopen($fileName, "r");
                    
                    while (($column = fgetcsv($file, '', ',')) !== FALSE) {
                        
                        $data = [
                            'ac_id'      => (isset($column[0]) ? $column[0] : ''),
                            'name'       => (isset($column[1]) ? $column[1] : ''),
                            'date'       => (isset($column[2]) ? $column[2] : ''),
                            'timetable'  => (isset($column[3]) ? $column[3] : ''),
                            'on_duty'    => (isset($column[4]) ? $column[4] : ''),
                            'off_duty'   => (isset($column[5]) ? $column[5] : ''),
                            'clock_in'   => (isset($column[6]) ? $column[6] : ''),
                            'clock_out'  => (isset($column[7]) ? $column[7] : ''),
                            'normal'     => (isset($column[8]) ? $column[8] : ''),
                            'real_time'  => (isset($column[9]) ? $column[9] : ''),
                            'late'       => (isset($column[10]) ? $column[10] : ''),
                            'early'      => (isset($column[11]) ? $column[11] : ''),
                            'absent'     => (isset($column[12]) ? $column[12] : ''),
                            'ot_time'    => (isset($column[13]) ? $column[13] : ''),
                            'work_time'  => (isset($column[14]) ? $column[14] : ''),
                            'exception'  => (isset($column[15]) ? $column[15] : ''),
                            'must_c_in'  => (isset($column[16]) ? $column[16] : ''),
                            'must_c_out' => (isset($column[17]) ? $column[17] : ''),
                            'department' => (isset($column[18]) ? $column[18] : ''),
                            'ndays'      => (isset($column[19]) ? $column[19] : ''),
                            'weekend'    => (isset($column[20]) ? $column[20] : ''),
                            'holiday'    => (isset($column[21]) ? $column[21] : ''),
                            'att_time'   => (isset($column[22]) ? $column[22] : ''),
                            'ndays_ot'   => (isset($column[23]) ? $column[23] : ''),
                            'weekend_ot' => (isset($column[24]) ? $column[24] : ''),
                            'holiday_ot' => (isset($column[25]) ? $column[25] : ''),
                        ];
                        
                        if(!empty($column[0]) && $column[0] != 'ac_id'){
                            save_data('access_ctrl_attendance', $data);
                        }
                    }
                    
                    fclose($file);
                    
                    $msg = [
                        "title" => "success",
                        "emit"  => "Student data import successfully.",
                        "btn"   => true
                    ];
                    
                    $status = 'success';
                }else{
                    
                    $msg = [
                        "title" => "warning",
                        "emit"  => "This upload file not in csv file. You can upload only csv file.",
                        "btn"   => true
                    ];
                    
                    $status = 'warning';
                }
            }
            
            $this->session->set_flashdata('confirmation', message($status, $msg));
        }
        
        redirect('employee/attendance/student', 'refresh');
    }
}
