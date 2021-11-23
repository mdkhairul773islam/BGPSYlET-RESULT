<?php

class Statistics extends Admin_Controller {

     function __construct() {
        parent::__construct();

        $this->load->model('action');
        $this->load->model('retrieve');
        $this->data['meta_title'] = 'Statistics';
        $this->data["session_list"]=$this->action->read_distinct("registration",array(),"session");
    }

    public function index() {
        $this->data['active'] = 'data-target="statistics"';
        $this->data['subMenu'] = 'data-target="overall"';
        $this->data['results'] = null;
        
        if(isset($_POST['show'])){
          // get total student 
         if($_POST['class'] == "Nine" || $_POST['class'] == "Ten" || $_POST['class'] == "Eleven" || $_POST['class'] == "Twelve") {
               $where = array(
                "session"  => $this->input->post("session"),
                "class"    => $this->input->post("class")           
              );
              
              $where['group'] = "Science";         
              $this->data['results'][0]['science'] = count($this->retrieve->readGroupBy("admission","roll",$where,"id","asc"));
              
              $where['group'] = "Huminities";
              $this->data['results'][0]['humanities'] = count($this->retrieve->readGroupBy("admission","roll",$where,"id","asc"));
              
              
              
              // get total examinee
              $where = array(
                "year"     => $this->input->post("year"),
                "class"    => $this->input->post("class"), 
                "exam_id"  => $this->input->post("exam_id")                    
              );
              
              $where['section'] = "A";
              $this->data['results'][1]['science'] = count($this->retrieve->readGroupBy("marks","roll",$where,"id","asc"));
              
              $where['section'] = "B";
              $this->data['results'][1]['humanities'] = count($this->retrieve->readGroupBy("marks","roll",$where,"id","asc"));
         }else{
               $where = array(
                "session"  => $this->input->post("session"),
                "class"    => $this->input->post("class")           
              );
              
              $where['group'] = "Science";         
              $this->data['results'][0]['science'] = count($this->retrieve->readGroupBy("admission","roll",$where,"id","asc"));
              
              $where['group'] = "Huminities";
              $this->data['results'][0]['humanities'] = count($this->retrieve->readGroupBy("admission","roll",$where,"id","asc"));
              
              
              
              // get total examinee
              $where = array(
                "year"     => $this->input->post("year"),
                "class"    => $this->input->post("class"), 
                "exam_id"  => $this->input->post("exam_id")                    
              );
              
              $where['section'] = "A";
              $this->data['results'][1]['science'] = count($this->retrieve->readGroupBy("marks","roll",$where,"id","asc"));
              
              $where['section'] = "B";
              $this->data['results'][1]['humanities'] = count($this->retrieve->readGroupBy("marks","roll",$where,"id","asc"));
         }
          
          
          // get total pass
          $where = array(
            "year"     => $this->input->post("year"),
            "class"    => $this->input->post("class"), 
            "exam_id"  => $this->input->post("exam_id"),
            "gpa >"    => 0.00                
          );
         
         
          $where['section'] = "A";
          $this->data['results'][2]['science'] = count($this->retrieve->readGroupBy("result","roll",$where,"id","asc"));
          
          $where['section'] = "B";
          $this->data['results'][2]['humanities'] = count($this->retrieve->readGroupBy("result","roll",$where,"id","asc"));  
          
          
           // get total A+
          $where = array(
            "year"     => $this->input->post("year"),
            "class"    => $this->input->post("class"), 
            "exam_id"  => $this->input->post("exam_id"),
            "gpa >="   => 5.00                
          );
          
          $where['section'] = "A";
          $this->data['results'][3]['science'] = count($this->retrieve->readGroupBy("result","roll",$where,"id","asc"));
          
          $where['section'] = "B";
          $this->data['results'][3]['humanities'] = count($this->retrieve->readGroupBy("result","roll",$where,"id","asc")); 
          
          
            // get total A
          $where = array(
            "year"     => $this->input->post("year"),
            "class"    => $this->input->post("class"), 
            "exam_id"  => $this->input->post("exam_id"),
            "gpa >="   => 4.00,   
            "gpa <"   => 5.00              
          );
          
          $where['section'] = "A";
          $this->data['results'][4]['science'] = count($this->retrieve->readGroupBy("result","roll",$where,"id","asc"));
          
          $where['section'] = "B";
          $this->data['results'][4]['humanities'] = count($this->retrieve->readGroupBy("result","roll",$where,"id","asc")); 
          
          
          
          // get total A-
          $where = array(
            "year"     => $this->input->post("year"),
            "class"    => $this->input->post("class"), 
            "exam_id"  => $this->input->post("exam_id"),
            "gpa >="   => 3.50,   
            "gpa <"   => 4.00              
          );
          
          $where['section'] = "A";
          $this->data['results'][5]['science'] = count($this->retrieve->readGroupBy("result","roll",$where,"id","asc"));
          
          $where['section'] = "B";
          $this->data['results'][5]['humanities'] = count($this->retrieve->readGroupBy("result","roll",$where,"id","asc")); 
          
          
           // get total B
          $where = array(
            "year"     => $this->input->post("year"),
            "class"    => $this->input->post("class"), 
            "exam_id"  => $this->input->post("exam_id"),
            "gpa >="   => 3.00,   
            "gpa <"   => 3.50              
          );
          
          $where['section'] = "A";
          $this->data['results'][6]['science'] = count($this->retrieve->readGroupBy("result","roll",$where,"id","asc"));
          
          $where['section'] = "B";
          $this->data['results'][6]['humanities'] = count($this->retrieve->readGroupBy("result","roll",$where,"id","asc")); 
          
          
            // get total C
          $where = array(
            "year"     => $this->input->post("year"),
            "class"    => $this->input->post("class"), 
            "exam_id"  => $this->input->post("exam_id"),
            "gpa >="   => 2.00,   
            "gpa <"    => 3.00              
          );
          
          $where['section'] = "A";
          $this->data['results'][7]['science'] = count($this->retrieve->readGroupBy("result","roll",$where,"id","asc"));
          
          $where['section'] = "B";
          $this->data['results'][7]['humanities'] = count($this->retrieve->readGroupBy("result","roll",$where,"id","asc"));
          
          
          
           // get total D
          $where = array(
            "year"     => $this->input->post("year"),
            "class"    => $this->input->post("class"), 
            "exam_id"  => $this->input->post("exam_id"),
            "gpa >="   => 1.00,   
            "gpa <"   => 2.00              
          );
          
          $where['section'] = "A";
          $this->data['results'][8]['science'] = count($this->retrieve->readGroupBy("result","roll",$where,"id","asc"));
          
          $where['section'] = "B";
          $this->data['results'][8]['humanities'] = count($this->retrieve->readGroupBy("result","roll",$where,"id","asc"));
          
                  
        
          
          
          // get total fail
          $where = array(
            "year"     => $this->input->post("year"),
            "class"    => $this->input->post("class"), 
            "exam_id"  => $this->input->post("exam_id"),
            "gpa <="   => 0.00                
          );
          
          $where['section'] = "A";
          $this->data['results'][9]['science'] = count($this->retrieve->readGroupBy("result","roll",$where,"id","asc"));
          
          $where['section'] = "B";
          $this->data['results'][9]['humanities'] = count($this->retrieve->readGroupBy("result","roll",$where,"id","asc"));         
          
         }

	
	$this->data["exam"] = $this->action->readGroupBy("exam", "exam_id");
	
        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        //$this->load->view('components/statistics/nav', $this->data);
        $this->load->view('components/statistics/overall_stat', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

}
