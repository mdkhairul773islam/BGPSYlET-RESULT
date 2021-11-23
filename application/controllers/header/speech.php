<?php

class Speech extends Admin_Controller {

     function __construct() {
        parent::__construct();

        $this->load->model('action');
        $this->load->library('upload');
    }
//-------------------------------------------------------------------------------
//-----------------------Principal Speech start here-----------------------------
//-------------------------------------------------------------------------------
    public function index() {
        $this->data['meta_title'] = 'gallery';
        $this->data['active'] = 'data-target="speech_menu"';
        $this->data['subMenu'] = 'data-target="principal_speech"';
        $this->data['confirmation'] = null;
            //-------------------------------------------------------------------------------------------
            //-----------------------------------Add speech Start here-------------------------------------
            $where=array(
            "speech_person"=>'principal',
            );
            if ($this->input->post("add_speech")) {

                if ($_FILES["attachFile"]["name"]!=null or $_FILES["attachFile"]["name"]!="" ) {

                    $config['upload_path'] = './public/speech';
                    $config['allowed_types'] = 'png|jpeg|jpg|gif';
                    $config['max_size'] = '4096';
                    $config['max_width'] = '3000'; /* max width of the image file */
                    $config['max_height'] = '3000';
                    $config['file_name'] ="principal".rand(10,99); 
                    $config['overwrite']=true;   
                    
                    $this->upload->initialize($config);
                    
                    if ($this->upload->do_upload("attachFile")){
                        $upload_data=$this->upload->data();

                        $data=array(
                            "speech_date"=>date('Y-m-d'),
                            "speech_person"=>'principal',
                            "speech_speech"=>$this->input->post("description"),
                            "speech_path"=>"public/speech/".$upload_data['file_name']
                            );

                        $msg_array=array(
                        "title"=>"Success",
                        "emit"=>"New Speech Successfully Saved",
                        "btn"=>true
                        );
                        $this->data['confirmation']=message($this->action->add("speech",$data), $msg_array);
                    }
                    else{

                        $msg_array=array(
                        "title"=>"Error",
                        "emit"=>$this->upload->display_errors(),
                        "btn"=>true
                        );
                        $this->data['confirmation']=message("warning",$msg_array);
                    }

                }
            }

            //------------------------------------Add speech End here--------------------------------------
            //---------------------------------------------------------------------------------------------

            //-------------------------------------------------------------------------------------------
            //-----------------------------------update speech Start here-------------------------------------

            if ($this->input->post("update_speech")) {

                    $where=array(
                    "id"=>$this->input->post("id_num"),
                    "speech_person"=>'principal',
                    );

                if ($_FILES["attachFile"]["name"]!=null or $_FILES["attachFile"]["name"]!="" ) {


                    //Deleting old Image start-------------------------------------------
                        if (is_file("./".$this->input->post("hidden_image_url"))) {
                            unlink("./".$this->input->post("hidden_image_url"));
                        }
                    //Deleting old Image end---------------------------------------------

                    $config['upload_path'] = './public/speech';
                    $config['allowed_types'] = 'png|jpeg|jpg|gif';
                    $config['max_size'] = '4096';
                    $config['max_width'] = '3000'; /* max width of the image file */
                    $config['max_height'] = '3000';
                    $config['file_name'] ="principal".rand(10,99); 
                    $config['overwrite']=true;   
                    
                    $this->upload->initialize($config);
                    
                    if ($this->upload->do_upload("attachFile")){
                        $upload_data=$this->upload->data();

                        $data=array(
                            "speech_date"=>date('Y-m-d'),
                            "speech_speech"=>$this->input->post("description"),
                            "speech_path"=>"public/speech/".$upload_data['file_name']
                            );

                        $msg_array=array(
                        "title"=>"Success",
                        "emit"=>"Speech Successfully Updated with photo",
                        "btn"=>true
                        );
                        $this->data['confirmation']=message($this->action->update("speech",$data,$where), $msg_array);
                    }
                    else{

                        $msg_array=array(
                        "title"=>"Error",
                        "emit"=>$this->upload->display_errors(),
                        "btn"=>true
                        );
                        $this->data['confirmation']=message("warning",$msg_array);
                    }

                }
                else{
                    $data=array(
                        "speech_date"=>date('Y-m-d'),
                        "speech_speech"=>$this->input->post("description"),
                    );

                    $msg_array=array(
                    "title"=>"Success",
                    "emit"=>"Speech Successfully Updated without photo",
                    "btn"=>true
                    );

                    $this->data['confirmation']=message($this->action->update("speech",$data,$where), $msg_array);
                }
            }
            $this->data['p_speech_data']=$this->action->read('speech',$where);
            //------------------------------------update speech End here--------------------------------------
            //-------------------------------------------------------------------------------------------

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/header/principal_speech', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }


//-------------------------------------------------------------------------------------------
//-------------------------------Ajax Function Start here------------------------------------
//-------------------------------------------------------------------------------------------
        public function ajax_principal_speech(){
            $query=mysql_query("select * from speech");
            $data_amount=mysql_num_rows($query);
            if ($data_amount>0) {
                $fetch_data=mysql_fetch_assoc($query);
                $encoded_data=json_encode($fetch_data);
                echo $encoded_data;
            }
            else{
                echo "Error";
            }
        }
//-------------------------------------------------------------------------------------------
//---------------------------------Ajax Function End here------------------------------------
//-------------------------------------------------------------------------------------------

//-------------------------------------------------------------------------------
//-----------------------Principal Speech end here-------------------------------
//-------------------------------------------------------------------------------

//-------------------------------------------------------------------------------
//-----------------------Vice Principal Speech start here------------------------
//-------------------------------------------------------------------------------

    public function vice_principal_speech() {
        $this->data['meta_title'] = 'gallery';
        $this->data['active'] = 'data-target="speech_menu"';
        $this->data['subMenu'] = 'data-target=""';
        $this->data['confirmation'] = null;
            //-------------------------------------------------------------------------------------------
            //-----------------------------------Add speech Start here-------------------------------------

            if ($this->input->post("add_speech")) {

                if ($_FILES["attachFile"]["name"]!=null or $_FILES["attachFile"]["name"]!="" ) {

                    $config['upload_path'] = './public/speech';
                    $config['allowed_types'] = 'png|jpeg|jpg|gif';
                    $config['max_size'] = '4096';
                    $config['max_width'] = '3000'; /* max width of the image file */
                    $config['max_height'] = '3000';
                    $config['file_name'] ="vice_principal".rand(10,99); 
                    $config['overwrite']=true;   
                    
                    $this->upload->initialize($config);
                    
                    if ($this->upload->do_upload("attachFile")){
                        $upload_data=$this->upload->data();

                        $data=array(
                            "vp_speech_date"=>date('Y-m-d'),
                            "vp_speech_speech"=>$this->input->post("description"),
                            "vp_speech_path"=>"public/speech/".$upload_data['file_name']
                            );

                        $msg_array=array(
                        "title"=>"Success",
                        "emit"=>"New Speech Successfully Saved",
                        "btn"=>true
                        );
                        $this->data['confirmation']=message($this->action->add("vp_speech",$data), $msg_array);
                    }
                    else{

                        $msg_array=array(
                        "title"=>"Error",
                        "emit"=>$this->upload->display_errors(),
                        "btn"=>true
                        );
                        $this->data['confirmation']=message("warning",$msg_array);
                    }

                }
            }

            //------------------------------------Add speech End here--------------------------------------
            //---------------------------------------------------------------------------------------------

            //-------------------------------------------------------------------------------------------
            //-----------------------------------update speech Start here-------------------------------------

            if ($this->input->post("update_speech")) {

                    $where=array(
                    "id"=>$this->input->post("id_num")
                    );

                if ($_FILES["attachFile"]["name"]!=null or $_FILES["attachFile"]["name"]!="" ) {


                    //Deleting old Image start-------------------------------------------
                        if (is_file("./".$this->input->post("hidden_image_url"))) {
                            unlink("./".$this->input->post("hidden_image_url"));
                        }
                    //Deleting old Image end---------------------------------------------

                    $config['upload_path'] = './public/speech';
                    $config['allowed_types'] = 'png|jpeg|jpg|gif';
                    $config['max_size'] = '4096';
                    $config['max_width'] = '3000'; /* max width of the image file */
                    $config['max_height'] = '3000';
                    $config['file_name'] ="vice_principal".rand(10,99); 
                    $config['overwrite']=true;   
                    
                    $this->upload->initialize($config);
                    
                    if ($this->upload->do_upload("attachFile")){
                        $upload_data=$this->upload->data();

                        $data=array(
                            "vp_speech_date"=>date('Y-m-d'),
                            "vp_speech_speech"=>$this->input->post("description"),
                            "vp_speech_path"=>"public/speech/".$upload_data['file_name']
                            );

                        $msg_array=array(
                        "title"=>"Success",
                        "emit"=>"Speech Successfully Updated with photo",
                        "btn"=>true
                        );
                        $this->data['confirmation']=message($this->action->update("vp_speech",$data,$where), $msg_array);
                    }
                    else{

                        $msg_array=array(
                        "title"=>"Error",
                        "emit"=>$this->upload->display_errors(),
                        "btn"=>true
                        );
                        $this->data['confirmation']=message("warning",$msg_array);
                    }

                }
                else{
                    $data=array(
                        "vp_speech_date"=>date('Y-m-d'),
                        "vp_speech_speech"=>$this->input->post("description"),
                    );

                    $msg_array=array(
                    "title"=>"Success",
                    "emit"=>"Speech Successfully Updated without photo",
                    "btn"=>true
                    );
                    $this->data['confirmation']=message($this->action->update("vp_speech",$data,$where), $msg_array);
                }
            }

            //------------------------------------update speech End here--------------------------------------
            //----------------------------------------------------------------------------------------------

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/header/vice_principal_speech', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }


//-------------------------------------------------------------------------------------------
//-------------------------------Ajax Function Start here------------------------------------
//-------------------------------------------------------------------------------------------
        public function ajax_viceprincipal_speech(){
            $query=mysql_query("select * from vp_speech");
            $data_amount=mysql_num_rows($query);
            if ($data_amount>0) {
                $fetch_data=mysql_fetch_assoc($query);
                $encoded_data=json_encode($fetch_data);
                echo $encoded_data;
            }
            else{
                echo "Error";
            }
        }
//-------------------------------------------------------------------------------------------
//---------------------------------Ajax Function End here------------------------------------
//-------------------------------------------------------------------------------------------

//-------------------------------------------------------------------------------
//-----------------------Vice Principal Speech end here--------------------------
//-------------------------------------------------------------------------------


//-------------------------------------------------------------------------------
//--------------------------At a glance start  here------------------------------
//------------------------------------------------------------------------------- 
    public function at_a_glance($emit = NULL) {
        $this->data['meta_title'] = 'gallery';
        $this->data['active'] = 'data-target="speech_menu"';
        $this->data['subMenu'] = 'data-target=""';
        $this->data['confirmation'] = null;
        //-------------------------------------------------------------------------------
        //--------------------------Add At a glance start  here--------------------------
        if ($this->input->post("aag_save")) {

            $data=array(
                "date"=>date('Y-m-d'),
                "at_a_glance"=>$this->input->post("description"),
                "at_a_glance_title"=>$this->input->post("title")
                );

                $msg_array=array(
                "title"=>"Success",
                "emit"=>"New At a glance Successfully Saved",
                "btn"=>true
                );
                $this->data['confirmation']=message($this->action->add("at_a_glance",$data), $msg_array);            
            
        }

        //--------------------------At a glance end  here--------------------------------
        //-------------------------------------------------------------------------------

        //----------------------------------------------------------------------------------
        //--------------------------Update At a glance start  here--------------------------
        if ($this->input->post("aag_update")) {
            $where=array(
                "id"=>$this->input->post("id_num")
                );
            $data=array(
                "date"=>date('Y-m-d'),
                "at_a_glance"=>$this->input->post("description"),
                "at_a_glance_title"=>$this->input->post("title")
                );

                $msg_array=array(
                "title"=>"Success",
                "emit"=>"New At a glance Successfully Updated",
                "btn"=>true
                );
                $this->data['confirmation']=message($this->action->update("at_a_glance",$data,$where), $msg_array);            
            
        }

        //--------------------------Update a glance end  here--------------------------------
        //-----------------------------------------------------------------------------------

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/header/at_a_glance', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

//-------------------------------------------------------------------------------------------
//-------------------------------Ajax Function Start here------------------------------------
//-------------------------------------------------------------------------------------------
        public function ajax_at_a_glance(){
            $query=mysql_query("select * from at_a_glance");
            $data_amount=mysql_num_rows($query);
            if ($data_amount>0) {
                $fetch_data=mysql_fetch_assoc($query);
                $encoded_data=json_encode($fetch_data);
                echo $encoded_data;
            }
            else{
                echo "Error";
            }
        }
//-------------------------------------------------------------------------------------------
//---------------------------------Ajax Function End here------------------------------------
//-------------------------------------------------------------------------------------------

//-------------------------------------------------------------------------------
//---------------------------At a glance end  here-------------------------------
//-------------------------------------------------------------------------------

    public function president_speech() {
        $this->data['meta_title'] = 'gallery';
        $this->data['active'] = 'data-target="speech_menu"';
        $this->data['subMenu'] = 'data-target="president_speech"';
        $this->data['confirmation'] = null;
        
            //-------------------------------------------------------------------------------------------
            //-----------------------------------Add speech Start here-------------------------------------
            $where=array(
            "speech_person"=>'president',
            );
            if ($this->input->post("add_speech")) {

                if ($_FILES["attachFile"]["name"]!=null or $_FILES["attachFile"]["name"]!="" ) {

                    $config['upload_path'] = './public/speech';
                    $config['allowed_types'] = 'png|jpeg|jpg|gif';
                    $config['max_size'] = '4096';
                    $config['max_width'] = '3000'; /* max width of the image file */
                    $config['max_height'] = '3000';
                    $config['file_name'] ="president".rand(10,99); 
                    $config['overwrite']=true;   
                    
                    $this->upload->initialize($config);
                    
                    if ($this->upload->do_upload("attachFile")){
                        $upload_data=$this->upload->data();

                        $data=array(
                            "speech_date"=>date('Y-m-d'),
                            "speech_person"=>'president',
                            "speech_speech"=>$this->input->post("description"),
                            "speech_path"=>"public/speech/".$upload_data['file_name']
                            );

                        $msg_array=array(
                        "title"=>"Success",
                        "emit"=>"New Speech Successfully Saved",
                        "btn"=>true
                        );
                        $this->data['confirmation']=message($this->action->add("speech",$data), $msg_array);
                    }
                    else{

                        $msg_array=array(
                        "title"=>"Error",
                        "emit"=>$this->upload->display_errors(),
                        "btn"=>true
                        );
                        $this->data['confirmation']=message("warning",$msg_array);
                    }

                }
            }

            //------------------------------------Add speech End here--------------------------------------
            //---------------------------------------------------------------------------------------------

            //-------------------------------------------------------------------------------------------
            //-----------------------------------update speech Start here-------------------------------------

            if ($this->input->post("update_speech")) {

                    $where=array(
                    "id"=>$this->input->post("id_num"),
                    "speech_person"=>'president',
                    );

                if ($_FILES["attachFile"]["name"]!=null or $_FILES["attachFile"]["name"]!="" ) {


                    //Deleting old Image start-------------------------------------------
                        if (is_file("./".$this->input->post("hidden_image_url"))) {
                            unlink("./".$this->input->post("hidden_image_url"));
                        }
                    //Deleting old Image end---------------------------------------------

                    $config['upload_path'] = './public/speech';
                    $config['allowed_types'] = 'png|jpeg|jpg|gif';
                    $config['max_size'] = '4096';
                    $config['max_width'] = '3000'; /* max width of the image file */
                    $config['max_height'] = '3000';
                    $config['file_name'] ="president".rand(10,99); 
                    $config['overwrite']=true;   
                    
                    $this->upload->initialize($config);
                    
                    if ($this->upload->do_upload("attachFile")){
                        $upload_data=$this->upload->data();

                        $data=array(
                            "speech_date"=>date('Y-m-d'),
                            "speech_speech"=>$this->input->post("description"),
                            "speech_path"=>"public/speech/".$upload_data['file_name']
                            );

                        $msg_array=array(
                        "title"=>"Success",
                        "emit"=>"Speech Successfully Updated with photo",
                        "btn"=>true
                        );
                        $this->data['confirmation']=message($this->action->update("speech",$data,$where), $msg_array);
                    }
                    else{

                        $msg_array=array(
                        "title"=>"Error",
                        "emit"=>$this->upload->display_errors(),
                        "btn"=>true
                        );
                        $this->data['confirmation']=message("warning",$msg_array);
                    }

                }
                else{
                    $data=array(
                        "speech_date"=>date('Y-m-d'),
                        "speech_speech"=>$this->input->post("description"),
                    );

                    $msg_array=array(
                    "title"=>"Success",
                    "emit"=>"Speech Successfully Updated without photo",
                    "btn"=>true
                    );

                    $this->data['confirmation']=message($this->action->update("speech",$data,$where), $msg_array);
                }
            }
            $this->data['pr_speech_data']=$this->action->read('speech',$where);
            //------------------------------------update speech End here--------------------------------------
            //------------------------------------------------------------------------------------------------

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/header/president_speech', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    public function speech_of_gb_member() {
    $this->data['meta_title'] = 'gallery';
    $this->data['active'] = 'data-target="speech_menu"';
    $this->data['subMenu'] = 'data-target="gb_member_speech"';
    $this->data['confirmation'] = null;
    
            //-------------------------------------------------------------------------------------------
            //-----------------------------------Add speech Start here-------------------------------------
            $where=array(
            "speech_person"=>'gb_member',
            );
            if ($this->input->post("add_speech")) {

                if ($_FILES["attachFile"]["name"]!=null or $_FILES["attachFile"]["name"]!="" ) {

                    $config['upload_path'] = './public/speech';
                    $config['allowed_types'] = 'png|jpeg|jpg|gif';
                    $config['max_size'] = '4096';
                    $config['max_width'] = '3000'; /* max width of the image file */
                    $config['max_height'] = '3000';
                    $config['file_name'] ="gb_member".rand(10,99); 
                    $config['overwrite']=true;   
                    
                    $this->upload->initialize($config);
                    
                    if ($this->upload->do_upload("attachFile")){
                        $upload_data=$this->upload->data();

                        $data=array(
                            "speech_date"=>date('Y-m-d'),
                            "speech_person"=>'gb_member',
                            "speech_speech"=>$this->input->post("description"),
                            "speech_path"=>"public/speech/".$upload_data['file_name']
                            );

                        $msg_array=array(
                        "title"=>"Success",
                        "emit"=>"New Speech Successfully Saved",
                        "btn"=>true
                        );
                        $this->data['confirmation']=message($this->action->add("speech",$data), $msg_array);
                    }
                    else{

                        $msg_array=array(
                        "title"=>"Error",
                        "emit"=>$this->upload->display_errors(),
                        "btn"=>true
                        );
                        $this->data['confirmation']=message("warning",$msg_array);
                    }

                }
            }

            //------------------------------------Add speech End here--------------------------------------
            //---------------------------------------------------------------------------------------------

            //-------------------------------------------------------------------------------------------
            //-----------------------------------update speech Start here-------------------------------------

            if ($this->input->post("update_speech")) {

                    $where=array(
                    "id"=>$this->input->post("id_num"),
                    "speech_person"=>'gb_member',
                    );

                if ($_FILES["attachFile"]["name"]!=null or $_FILES["attachFile"]["name"]!="" ) {


                    //Deleting old Image start-------------------------------------------
                        if (is_file("./".$this->input->post("hidden_image_url"))) {
                            unlink("./".$this->input->post("hidden_image_url"));
                        }
                    //Deleting old Image end---------------------------------------------

                    $config['upload_path'] = './public/speech';
                    $config['allowed_types'] = 'png|jpeg|jpg|gif';
                    $config['max_size'] = '4096';
                    $config['max_width'] = '3000'; /* max width of the image file */
                    $config['max_height'] = '3000';
                    $config['file_name'] ="gb_member".rand(10,99); 
                    $config['overwrite']=true;   
                    
                    $this->upload->initialize($config);
                    
                    if ($this->upload->do_upload("attachFile")){
                        $upload_data=$this->upload->data();

                        $data=array(
                            "speech_date"=>date('Y-m-d'),
                            "speech_speech"=>$this->input->post("description"),
                            "speech_path"=>"public/speech/".$upload_data['file_name']
                            );

                        $msg_array=array(
                        "title"=>"Success",
                        "emit"=>"Speech Successfully Updated with photo",
                        "btn"=>true
                        );
                        $this->data['confirmation']=message($this->action->update("speech",$data,$where), $msg_array);
                    }
                    else{

                        $msg_array=array(
                        "title"=>"Error",
                        "emit"=>$this->upload->display_errors(),
                        "btn"=>true
                        );
                        $this->data['confirmation']=message("warning",$msg_array);
                    }

                }
                else{
                    $data=array(
                        "speech_date"=>date('Y-m-d'),
                        "speech_speech"=>$this->input->post("description"),
                    );

                    $msg_array=array(
                    "title"=>"Success",
                    "emit"=>"Speech Successfully Updated without photo",
                    "btn"=>true
                    );

                    $this->data['confirmation']=message($this->action->update("speech",$data,$where), $msg_array);
                }
            }
            $this->data['gb_speech_data']=$this->action->read('speech',$where);
            //------------------------------------update speech End here--------------------------------------
            //------------------------------------------------------------------------------------------------

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/header/speech_of_bg_member', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }



}
