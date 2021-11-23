<?php
class Admission extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('action');
        $this->load->library('upload');

        $this->data['meta_title'] = 'Admission';
    }

    public function index() {
        $this->data['active'] = 'data-target="admission_menu"';
        $this->data['subMenu'] = 'data-target="add-new"';
        $this->data['confirmation'] =  $this->data['stu_info'] = null;



        if(isset($_POST["save"])){
            $data = array(
                "date"          => date("Y-m-d"),
                "student_id"    => $this->input->post("student_id"),
                "roll"          => $this->input->post("roll"),
                "class"         => $this->input->post("class"),
                "group"         => $this->input->post("group"),
                "session"       => $this->input->post("session"),
                "section"       => $this->input->post("section"),
                "batch"         => $this->input->post("batch"),
                "shift"         => $this->input->post("shift"),
                "optional"      => $this->input->post("optional_subject")
            );

            $options = array(
                "title" => "Success",
                "emit"  => "Student Successfully Admitted",
                "btn"   => true
            );
            if($this->action->exists("admission",array('student_id'=>$this->input->post("student_id")))){
                 $this->data['confirmation'] = message($this->action->update("admission", $data,array('student_id'=>$this->input->post("student_id"))), $options);
            }else{
                $this->data['confirmation'] = message($this->action->add("admission", $data), $options);
            }

            // update registration status to admitted
            $this->action->update("registration", array("status" => "admitted"), array("id" => $this->input->post("student_id")));
        }

        //------------------------------------Add Students End here--------------------------------
        //-----------------------------------------------------------------------------------------

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/admission/admission-nav', $this->data);
        $this->load->view('components/admission/admissionForm', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    public function allStudent() {
        $this->data['active'] = 'data-target="admission_menu"';
        $this->data['subMenu'] = 'data-target="all"';
        $this->data['result'] = $this->data['session_list'] = null;

        $this->data['session_list']=$this->action->readDistinct('admission','session');

        if($this->input->get("id") > 0){
            $this->action->deleteData("admission", array("id" => $this->input->get("id")));
        }

        $where = array();
        if(isset($_POST["show"])){
            foreach($this->input->post("search") as $key => $val){
                if($val != null){
                    $where[$key] = $val;
                }
            }

            $this->data['result'] = $this->action->readOrderby("admission", "roll",$where);
        }

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/admission/admission-nav', $this->data);
        $this->load->view('components/admission/allStudent', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    public function profile() {
        $this->data['active'] = 'data-target="admission_menu"';
        $this->data['subMenu'] = 'data-target=""';


        $where = array("admission.id" => $this->input->get("id"));
        $details = array(
            "admission" => array("condition" => "registration.id = admission.student_id")
        );
        $this->data['result'] = $this->action->multipleJoinAndRead("registration", $details, $where);

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/admission/admission-nav', $this->data);
        $this->load->view('components/admission/profile', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    public function editStudent() {
        $this->data['active'] = 'data-target="admission_menu"';
        $this->data['subMenu'] = 'data-target=""';
        $this->data['confirmation'] = null;
         $this->data['id']=$this->input->get("id");

        $where = array("admission.id" => $this->input->get("id"));
        $cond="admission.student_id=registration.id";

        $this->data["result"] = $this->action->joinAndRead("admission","registration", $cond, $where);

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/admission/admission-nav', $this->data);
        $this->load->view('components/admission/editStudent', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }


  public function update($id=NULL) {

  $this->form_validation->set_rules('name', 'Student\'s Name', 'trim|required|max_length[255]|xss_clean');
  $this->form_validation->set_rules('father_name', 'Father Name', 'trim|required|max_length[255]|xss_clean');
  $this->form_validation->set_rules('mother_name', 'Mother Name', 'trim|required|max_length[255]|xss_clean');
  $this->form_validation->set_rules('father_profession', 'Father Profession', 'trim|max_length[255]|xss_clean');
  $this->form_validation->set_rules('mother_profession', 'Mother Profession', 'trim|max_length[255]|xss_clean');
  $this->form_validation->set_rules('student_mobile', 'Student Mobile', 'trim|required|max_length[15]|xss_clean');
  $this->form_validation->set_rules('guardian_mobile', 'Guardian Mobile', 'trim|required|max_length[15]|xss_clean');
  $this->form_validation->set_rules('birth_date', 'Date of Birth', 'trim|required|max_length[255]|xss_clean');
  $this->form_validation->set_rules('religion', 'Religion', 'trim|required|max_length[255]|xss_clean');
  $this->form_validation->set_rules('gender', 'Gender', 'trim|required|max_length[255]|xss_clean');
  $this->form_validation->set_rules('present_address', 'Present Address', 'trim|required|max_length[255]|xss_clean');
  $this->form_validation->set_rules('permanent_address', 'Permanent Address', 'trim|max_length[255]|xss_clean');
  $this->form_validation->set_rules('class', 'Class', 'trim|required|max_length[255]|xss_clean');
  $this->form_validation->set_rules('group', 'Group', 'trim|max_length[255]|xss_clean');
  $this->form_validation->set_rules('session', 'Session', 'trim|required|max_length[255]|xss_clean');

  if($this->form_validation->run()==FALSE){
    $msg_array=array(
        "title"=>"Error",
        "emit"=>validation_errors(),
        "btn"=>true
    );
    $this->data['confirmation']=message("warning",$msg_array);
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
            $data=array(
              'name'=>$this->input->post('name'),
              'father_name'=>$this->input->post('father_name'),
              'mother_name'=>$this->input->post('mother_name'),
              'father_profession'=>$this->input->post('father_profession'),
              'mother_profession'=>$this->input->post('mother_profession'),
              'student_mobile'=>$this->input->post('student_mobile'),
              'guardian_mobile'=>$this->input->post('guardian_mobile'),
              'birth_date'=>$this->input->post('birth_date'),
              'religion'=>$this->input->post('religion'),
              'gender'=>$this->input->post('gender'),
              'present_address'=>$this->input->post('present_address'),
              'permanent_address'=>$this->input->post('permanent_address'),
              'photo'=>$upload_data['file_name'],
              'class'=>$this->input->post('class'),
              'section'=>$this->input->post('section'),
              'group'=>$this->input->post('group'),
              'session'=>$this->input->post('session')
            );

            $msg_array=array(
                "title"=>"Update",
                "emit"=>"Student Information Successfully Updated!",
                "btn"=>true
            );
            $this->data['confirmation']=message($this->action->update("registration",$data,array('id'=>$id)), $msg_array);
          }else{
            $msg_array=array(
              "title"=>"Error",
              "emit"=>$this->upload->display_errors(),
              "btn"=>true
            );
         $this->data['confirmation']=message("warning",$msg_array);
       }
        }else{
           $data=array(
G
            );

            $msg_array=array(
                "title"=>"Success",
                "emit"=>"Student Information Successfully Updated!",
                "btn"=>true
            );
            $this->data['confirmation']=message($this->action->update("registration",$data,array('id'=>$id)), $msg_array);
        }

       $this->action->update("admission",array('roll'=>$this->input->post('roll'),'class'=>$this->input->post('class')),array('student_id'=>$id));

  }

  $this->session->set_flashdata('confirmation',$this->data['confirmation']);
  redirect('admission/admission/editStudent?id='.$this->input->post('id'),'refresh');
 }




 public function upgrade_student() {
  $this->data['active'] = 'data-target="registration_menu"';
  $this->data['subMenu'] = 'data-target="up"';
  $this->data['result'] = $this->data['session_list'] = $this->data['confirmation']=null;

  $this->data['session_list']=$this->action->readDistinct('admission','session');

  $where = array();
  if(isset($_POST["show"])){
      foreach($this->input->post("search") as $key => $val){
          if($val != null){
              $where["admission.".$key] = $val;
          }
      }

      $this->data['result'] = $this->action->joinAndReadOrderBy("admission","registration" ,"registration.reg_id = admission.student_id",$where,"roll","asc");
  }


  if($this->input->post("up")){
  foreach($_POST['id'] as $key => $value){
     $className = config_item('class');
      if($this->input->post('class') == "Eleven" || $this->input->post('class') == "Twelve"){
          $school_or_college = "BGPC";
      }else{
          $school_or_college = "BGPS";
      }

     $sid = $school_or_college."-".date("y").$className[$this->input->post('class')]."-".$_POST['section'][$value].str_pad($_POST['roll_no'][$value],3,0,STR_PAD_LEFT);
     
     $dataR = array(
       "class"    => $this->input->post("class"),
       "session"  => $this->input->post("session"),
       "group"    => $_POST['group'][$value],
       "section"  => $_POST['section'][$value]
    );
    
    
     $dataA = array(
       "class"   => $this->input->post("class"),
       "session" => $this->input->post("session"),
       "sid"     => $sid,
       "roll"    => $_POST['roll_no'][$value],
       "group"   => $_POST['group'][$value],
       "section" => $_POST['section'][$value]
    );
   

     $this->action->update('registration',$dataR,array('reg_id' =>  $_POST['student_id'][$value]));
     $this->action->update('admission',$dataA,array('student_id' => $_POST['student_id'][$value]));
   }
   
     $msg_array=array(
        "title" => "Upgrade",
        "emit"  => "Student successfully Upgraded",
        "btn"   => true
      );
      
      $this->data['confirmation']=message('success',$msg_array);
  }

  $this->load->view($this->data['privilege'].'/includes/header', $this->data);
  $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
  $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
  $this->load->view('components/registration/registration-nav', $this->data);
  $this->load->view('components/admission/upgrade_students', $this->data);
  $this->load->view($this->data['privilege'].'/includes/footer');
}




 /* public function test(){
     $data= array(
      "1389"	=> "180748",
		"1390"	=> "180749",
		"1391"	=> "180750",
		"1392"	=> "180751",
		"1393"	=> "180752",
		"1394"	=> "180753",
		"1395"	=> "180754",
		"1396"	=> "180755",
		"1397"	=> "180756",
		"1398"	=> "180757",
		"1399"	=> "180758",
		"1400"	=> "180759",
		"1401"	=> "180760",
		"1402"	=> "180761",
		"1403"	=> "180762",
		"1404"	=> "180763",
		"1405"	=> "180764",
		"1406"	=> "180765",
		"1407"	=> "180766",
		"1408"	=> "180767",
		"1409"	=> "180768",
		"1410"	=> "180769",
		"1411"	=> "180770",
		"1412"	=> "180771",
		"1413"	=> "180772",
		"1414"	=> "180773",
		"1415"	=> "180774",
		"1416"	=> "180775",
		"1417"	=> "180776",
		"1418"	=> "180777",
		"1419"	=> "180778",
		"1420"	=> "180779",
		"1421"	=> "180780",
		"1423"	=> "180781",
		"1424"	=> "180782",
		"1425"	=> "180783",
		"1426"	=> "180784",
		"1427"	=> "180785",
		"1428"	=> "180786",
		"1429"	=> "180787",
		"1430"	=> "180788",
		"1431"	=> "180789",
		"1432"	=> "180790",
		"1433"	=> "180791",
		"1434"	=> "180792",
		"1435"	=> "180793",
		"1436"	=> "180794",
		"1437"	=> "180795",
		"1438"	=> "180796",
		"1439"	=> "180797",
		"1440"	=> "180798",
		"1441"	=> "180799",
		"1442"	=> "180800",
		"1443"	=> "180801",
		"1444"	=> "180802",
		"1445"	=> "180803",
		"1446"	=> "180804",
		"1447"	=> "180805",
		"1448"	=> "180806",
		"1449"	=> "180807",
		"1450"	=> "180808",
		"1477"	=> "180809",
		"1478"	=> "180810",
		"533"	=> "180811",
		"540"	=> "180812",
		"541"	=> "180813",
		"542"	=> "180814",
		"538"	=> "180815",
		"590"	=> "180816",
		"574"	=> "180817",
		"573"	=> "180818",
		"610"	=> "180819",
		"591"	=> "180820",
		"593"	=> "180821",
		"580"	=> "180822",
		"576"	=> "180823",
		"625"	=> "180824",
		"575"	=> "180825",
		"578"	=> "180826",
		"577"	=> "180827",
		"598"	=> "180828",
		"582"	=> "180829",
		"581"	=> "180830",
		"584"	=> "180831",
		"583"	=> "180832",
		"589"	=> "180833",
		"592"	=> "180834",
		"587"	=> "180835",
		"618"	=> "180836",
		"616"	=> "180837",
		"617"	=> "180838",
		"615"	=> "180839",
		"613"	=> "180840",
		"623"	=> "180841",
		"621"	=> "180842",
		"549"	=> "180843",
		"550"	=> "180844",
		"551"	=> "180845",
		"552"	=> "180846",
		"553"	=> "180847",
		"555"	=> "180848",
		"556"	=> "180849",
		"558"	=> "180850",
		"559"	=> "180851",
		"560"	=> "180852",
		"562"	=> "180853",
		"563"	=> "180854",
		"564"	=> "180855",
		"565"	=> "180856",
		"567"	=> "180857",
		"571"	=> "180858",
		"572"	=> "180859",
		"585"	=> "180860",
		"586"	=> "180861",
		"595"	=> "180862",
		"596"	=> "180863",
		"599"	=> "180864",
		"600"	=> "180865",
		"601"	=> "180866",
		"602"	=> "180867",
		"603"	=> "180868",
		"604"	=> "180869",
		"605"	=> "180870",
		"607"	=> "180871",
		"608"	=> "180872",
		"609"	=> "180873",
		"611"	=> "180874",
		"612"	=> "180875",
		"614"	=> "180876",
		"619"	=> "180877",
		"620"	=> "180878",
		"622"	=> "180879",
		"624"	=> "180880",
		"753"	=> "180881"

    );

    	$counter = 0; foreach($data as $old=> $new){ $counter ++;
    	    $this->action->update("admission",array("student_id" => $new),array("id" => $old));
    	    echo $counter. "  =  " . $old ." is updated by ". $new."<br>";
    	}
    }
*/




    public function hash($string) {
        return hash('md5', $string . config_item('encryption_key'));
    }

    private function holder() {
        $holder = config_item('privilege');

        if(!(in_array($this->session->userdata('holder'), $holder)))
        {
            $this->membership_m->logout();
            redirect('access/users/login');
        }
    }

}
