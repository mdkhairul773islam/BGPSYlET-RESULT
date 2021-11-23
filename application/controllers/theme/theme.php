<?php class Theme extends Admin_controller {
     function __construct() {
        parent::__construct();
        $this->load->library('upload');
        $this->load->model('action');

    }
    /* Changeing Header Logo Start Here */
    public function index() {
        $this->data['meta_title'] = 'Theme';
        $this->data['active'] = 'data-target="theme-menu"';
        $this->data['subMenu'] = 'data-target="index"';
        $this->data['confirmation'] = null;

        $result = $this->data['theme_data'] = $this->action->read('theme');

        if ($this->input->post('submit_logo')) {
        	
            if ($_FILES["attachFile"]["name"]!=null && $_FILES["attachFile"]["name"]!="" ) {

                $config['upload_path'] = './public/theme';
                $config['allowed_types'] = 'png|jpeg|jpg|gif';
                $config['max_size'] = '4096';
                $config['max_width'] = '3000';
                $config['max_height'] = '3000';
                $config['file_name'] ="logo_".rand(111111,999999); 
                $config['overwrite']=true;   
                
                $this->upload->initialize($config);
                
                if ($this->upload->do_upload("attachFile")){
                    $upload_data=$this->upload->data();
                    
                   //Encoding into json array start here
                    $logo_info=array(
                        'logo'=> "public/theme/".$upload_data['file_name']
                    );

                    $logo_data=json_encode($logo_info);

                    //Encoding into json array end here
                    $data=array(
                        'header_logo'=>$logo_data
                    );

                    if ( $result == null ) {
                    	$msg_array = array(
	                        "title" => "Success",
	                        "emit"  => "Logo Successfully Saved",
	                        "btn"   => true
	                    );

                    	$this->data['confirmation'] = message($this->action->add('theme', $data), $msg_array);
                    	$this->session->set_flashdata('confirmation',$this->data['confirmation']);
                    	redirect('theme/theme/','refresh');
                    }else{
                    	$msg_array = array(
	                        "title" => "Success",
	                        "emit"  => "Logo Successfully Updated",
	                        "btn"   => true
	                    );

                    	$where = array();
                    	$this->data['confirmation'] = message($this->action->update('theme', $data, $where), $msg_array);
                    	$this->session->set_flashdata('confirmation',$this->data['confirmation']);
                    	redirect('theme/theme/','refresh');
                    }
                }
        	}else{
                $msg_array=array(
                "title"=>"Error",
                "emit"=>$this->upload->display_errors(),
                "btn"=>true
                );
                $this->data['confirmation']=message("warning",$msg_array);
            }
        }
        
        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/theme/nav', $this->data);
        $this->load->view('components/theme/header_logo', $this->data);
        $this->load->view('components/theme/footer_logo', $this->data);
        $this->load->view('components/theme/favicon', $this->data);
        $this->load->view('components/theme/login_img', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }
    /************************ Changeing Header Logo End Here **************************/



    /************************ Changeing Footer Logo Start Here ************************/
    public function footer_logo() {
        $this->data['meta_title'] = 'Theme';
        $this->data['active'] = 'data-target="theme-menu"';
        $this->data['subMenu'] = 'data-target=""';
        $this->data['confirmation'] = null;

        $result = $this->data['theme_data'] = $this->action->read('theme');

        if ($this->input->post('submit_f_logo')) {
        	
            if ($_FILES["attachFile"]["name"]!=null && $_FILES["attachFile"]["name"]!="" ) {

                $config['upload_path'] = './public/theme';
                $config['allowed_types'] = 'png|jpeg|jpg|gif';
                $config['max_size'] = '4096';
                $config['max_width'] = '3000';
                $config['max_height'] = '3000';
                $config['file_name'] ="logo_".rand(111111,999999); 
                $config['overwrite']=true;   
                
                $this->upload->initialize($config);
                
                if ($this->upload->do_upload("attachFile")){
                    $upload_data=$this->upload->data();
                    
                   //Encoding into json array start here
                    $logo_info=array(
                        'logo'       => "public/theme/".$upload_data['file_name'],
                        'footer_txt' => $this->input->post('footer_txt')
                    );

                    $logo_data=json_encode($logo_info);

                    //Encoding into json array end here
                    $data=array(
                        'footer_logo'=>$logo_data
                    );

                    if ( $result == null ) {
                    	$msg_array = array(
	                        "title" => "Success",
	                        "emit"  => "Footer Logo Successfully Saved",
	                        "btn"   => true
	                    );

                    	$this->data['confirmation'] = message($this->action->add('theme', $data), $msg_array);
                    	$this->session->set_flashdata('confirmation',$this->data['confirmation']);
                    	redirect('theme/theme/','refresh');
                    }else{
                    	$msg_array = array(
	                        "title" => "Success",
	                        "emit"  => "Footer Logo Successfully Updated",
	                        "btn"   => true
	                    );

                    	$where = array();
                    	$this->data['confirmation'] = message($this->action->update('theme', $data, $where), $msg_array);
                    	$this->session->set_flashdata('confirmation',$this->data['confirmation']);
                    	redirect('theme/theme/','refresh');
                    }
                }
        	}else{
                $msg_array=array(
                "title"=>"Error",
                "emit"=>$this->upload->display_errors(),
                "btn"=>true
                );
                $this->data['confirmation']=message("warning",$msg_array);
            }

        }
    }
    /************************ Changeing Footer Logo End Here ****************************/



    /************************ Changeing Favicon Start Here ******************************/
    public function favicon() {
        $this->data['meta_title'] = 'Theme';
        $this->data['active'] = 'data-target="theme-menu"';
        $this->data['subMenu'] = 'data-target=""';
        $this->data['confirmation'] = null;

        $result = $this->data['theme_data'] = $this->action->read('theme');

        if ($this->input->post('submit_favicon')) {
            
            if ($_FILES["attachFile"]["name"]!=null && $_FILES["attachFile"]["name"]!="" ) {

                $config['upload_path'] = './public/theme';
                $config['allowed_types'] = 'png|jpeg|jpg|gif';
                $config['max_size'] = '4096';
                $config['max_width'] = '3000';
                $config['max_height'] = '3000';
                $config['file_name'] ="logo_".rand(111111,999999); 
                $config['overwrite']=true;   
                
                $this->upload->initialize($config);
                
                if ($this->upload->do_upload("attachFile")){
                    $upload_data=$this->upload->data();
                    
                   //Encoding into json array start here
                    $fav_info=array(
                        'icon'=> "public/theme/".$upload_data['file_name']
                    );

                    $favicon_data=json_encode($fav_info);

                    //Encoding into json array end here
                    $data=array(
                        'favicon'=>$favicon_data
                    );

                    if ( $result == null ) {
                        $msg_array = array(
                            "title" => "Success",
                            "emit"  => "Logo Successfully Saved",
                            "btn"   => true
                        );

                        $this->data['confirmation'] = message($this->action->add('theme', $data), $msg_array);
                        $this->session->set_flashdata('confirmation',$this->data['confirmation']);
                        redirect('theme/theme/','refresh');
                    }else{
                        $msg_array = array(
                            "title" => "Success",
                            "emit"  => "Logo Successfully Updated",
                            "btn"   => true
                        );

                        $where = array();
                        $this->data['confirmation'] = message($this->action->update('theme', $data, $where), $msg_array);
                        $this->session->set_flashdata('confirmation',$this->data['confirmation']);
                        redirect('theme/theme/','refresh');
                    }
                }
            }else{
                $msg_array=array(
                "title"=>"Error",
                "emit"=>$this->upload->display_errors(),
                "btn"=>true
                );
                $this->data['confirmation']=message("warning",$msg_array);
            }

        }
    }
    /************************ Changeing Favicon End Here ********************************/



    /************************ Changeing Login Background Start Here *********************/
    public function login_img() {
        $this->data['meta_title'] = 'Theme';
        $this->data['active'] = 'data-target="theme-menu"';
        $this->data['subMenu'] = 'data-target=""';
        $this->data['confirmation'] = null;

        $result = $this->data['theme_data'] = $this->action->read('theme');

        if ($this->input->post('submit_background')) {
            
            if ($_FILES["attachFile"]["name"]!=null && $_FILES["attachFile"]["name"]!="" ) {

                $config['upload_path'] = './public/theme';
                $config['allowed_types'] = 'png|jpeg|jpg|gif';
                $config['max_size'] = '4096';
                $config['max_width'] = '3000';
                $config['max_height'] = '3000';
                $config['file_name'] ="logo_".rand(111111,999999); 
                $config['overwrite']=true;   
                
                $this->upload->initialize($config);
                
                if ($this->upload->do_upload("attachFile")){
                    $upload_data=$this->upload->data();
                    
                   //Encoding into json array start here
                    $fav_info=array(
                        'background'=> "public/theme/".$upload_data['file_name']
                    );

                    $favicon_data=json_encode($fav_info);

                    //Encoding into json array end here
                    $data=array(
                        'login_img'=>$favicon_data
                    );

                    if ( $result == null ) {
                        $msg_array = array(
                            "title" => "Success",
                            "emit"  => "Login Background Image Successfully Saved",
                            "btn"   => true
                        );

                        $this->data['confirmation'] = message($this->action->add('theme', $data), $msg_array);
                        $this->session->set_flashdata('confirmation',$this->data['confirmation']);
                        redirect('theme/theme/','refresh');
                    }else{
                        $msg_array = array(
                            "title" => "Success",
                            "emit"  => "Login Background Image Successfully Updated",
                            "btn"   => true
                        );

                        $where = array();
                        $this->data['confirmation'] = message($this->action->update('theme', $data, $where), $msg_array);
                        $this->session->set_flashdata('confirmation',$this->data['confirmation']);
                        redirect('theme/theme/','refresh');
                    }
                }
            }else{
                $msg_array=array(
                "title"=>"Error",
                "emit"=>$this->upload->display_errors(),
                "btn"=>true
                );
                $this->data['confirmation']=message("warning",$msg_array);
            }

        }
    }
    /************************ Changeing Login Background End Here ************************/



    /************************ Changeing Contact Info Start Here **************************/
    public function contact_info() {
        $this->data['meta_title'] = 'Theme';
        $this->data['active'] = 'data-target="theme-menu"';
        $this->data['subMenu'] = 'data-target="info"';
        $this->data['confirmation'] = null;

        $result = $this->data['theme_data'] = $this->action->read('theme');

        if ($this->input->post('submit_contact')) {
                    
           //Encoding into json array start here
            $con_info=array(
                'site_name'   => $this->input->post('site_name'),
                'address'     => $this->input->post('address'),
                'mobile1'     => $this->input->post('mobile1'),
                'mobile2'     => $this->input->post('mobile2'),
                'email1'      => $this->input->post('email1'),
                'email2'      => $this->input->post('email2'),
                'website'     => $this->input->post('website'),
                'copy_right'  => $this->input->post('copy_right')
            );

            $contact_data=json_encode($con_info);

            //Encoding into json array end here
            $data=array(
                'contact_info'=>$contact_data
            );

            if ( $result == null ) {
                $msg_array = array(
                    "title" => "Success",
                    "emit"  => "Contact Info Successfully Saved",
                    "btn"   => true
                );

                $this->data['confirmation'] = message($this->action->add('theme', $data), $msg_array);
                $this->session->set_flashdata('confirmation',$this->data['confirmation']);
                redirect('theme/theme/contact_info','refresh');
            }else{
                $msg_array = array(
                    "title" => "Success",
                    "emit"  => "Contact Info Successfully Updated",
                    "btn"   => true
                );

                $where = array();
                $this->data['confirmation'] = message($this->action->update('theme', $data, $where), $msg_array);
                $this->session->set_flashdata('confirmation',$this->data['confirmation']);
                redirect('theme/theme/contact_info','refresh');
            }    
        }
        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/theme/nav', $this->data);
        $this->load->view('components/theme/contact_info', $this->data);
        $this->load->view('components/theme/social_icon', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }
    /************************ Contact Information End Here ******************************/



    /************************ Changeing Contact Info Start Here **************************/
    public function social_icon() {
        $this->data['meta_title'] = 'Theme';
        $this->data['active'] = 'data-target="theme-menu"';
        $this->data['subMenu'] = 'data-target=""';
        $this->data['confirmation'] = null;

        $result = $this->data['theme_data'] = $this->action->read('theme');

        if ($this->input->post('submit_contact')) {
                    
           //Encoding into json array start here
            $links_info=array(
                'facebook'  => $this->input->post('facebook'),
                'twitter'   => $this->input->post('twitter'),
                'google'    => $this->input->post('google'),
                'instagran' => $this->input->post('instagran'),
                'pinterest' => $this->input->post('pinterest'),
                'utube'     => $this->input->post('utube')
            );

            $social_data=json_encode($links_info);

            //Encoding into json array end here
            $data=array(
                'social_links'=>$social_data
            );

            if ( $result == null ) {
                $msg_array = array(
                    "title" => "Success",
                    "emit"  => "Social Links Successfully Saved",
                    "btn"   => true
                );

                $this->data['confirmation'] = message($this->action->add('theme', $data), $msg_array);
                $this->session->set_flashdata('confirmation',$this->data['confirmation']);
                redirect('theme/theme/contact_info','refresh');
            }else{
                $msg_array = array(
                    "title" => "Success",
                    "emit"  => "Social Links Successfully Updated",
                    "btn"   => true
                );

                $where = array();
                $this->data['confirmation'] = message($this->action->update('theme', $data, $where), $msg_array);
                $this->session->set_flashdata('confirmation',$this->data['confirmation']);
                redirect('theme/theme/contact_info','refresh');
            }    
        }
    }
    /************************ Contact Information End Here ******************************/
}
       