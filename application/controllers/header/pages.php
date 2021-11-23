<?php
    class Pages extends Admin_Controller {

        function __construct() {
            parent::__construct();

            $this->load->model('action');
            $this->load->library('upload');
        }

//-------------------------------------------------------------------------------------------
//-------------------------------Index Function Start here-----------------------------------
//-------------------------------------------------------------------------------------------
        
        public function index() {
            $this->data['meta_title'] = 'gallery';
            $this->data['active'] = 'data-target="header_menu"';
            $this->data['subMenu'] = 'data-target="pages"';
            $this->data['confirmation'] = null;
            
            $this->data['alldata'] = $this->action->read('pages');

            //-------------------------------------------------------------------------------------------
            //-----------------------------------Add page Start here-------------------------------------

            if ($this->input->post("add_page")) {
                
                //pdf upload
                if($_FILES["pdf"]["name"]!=null or $_FILES["pdf"]["name"]!="" )
                {
                    $config['upload_path'] = './public/page_pdf';
                    $config['allowed_types'] = 'pdf';
                    $config['max_size'] = '14096';
                    $config['file_name'] =$this->input->post("page").rand(1000,9999); 
                    $config['overwrite']=true;   
                    
                    $this->upload->initialize($config);
                    
                    if ($this->upload->do_upload("pdf")){
                        $upload_data=$this->upload->data();

                        $pdf = "public/page_pdf/".$upload_data['file_name'];
                         
                    }else{
                        $pdf = '';
                    }
                }else{
                    $pdf = '';
                }
                
                //image upload
                if ($_FILES["attachFile"]["name"]!=null or $_FILES["attachFile"]["name"]!="" ) {

                    $config['upload_path'] = './public/page_Image';
                    $config['allowed_types'] = 'png|jpeg|jpg|gif';
                    $config['max_size'] = '4096';
                    $config['max_width'] = '3000'; /* max width of the image file */
                    $config['max_height'] = '3000';
                    $config['file_name'] =$this->input->post("page").rand(1000,9999); 
                    $config['overwrite']=true;   
                    
                    $this->upload->initialize($config);
                    
                    if ($this->upload->do_upload("attachFile")){
                        $upload_data=$this->upload->data();

                        $data=array(
                            "page_date"=>date('Y-m-d'),
                            "page_page"=>$this->input->post("page"),
                            "page_title"=>$this->input->post("title"),
                            "page_description"=>$this->input->post("description"),
                            "page_path"=>"public/page_Image/".$upload_data['file_name'],
                            "page_pdf"=>$pdf,
                            );

                        $msg_array=array(
                        "title"=>"Success",
                        "emit"=>"New Notice Successfully Added With Attachment",
                        "btn"=>true
                        );
                        $this->data['confirmation']=message($this->action->add("pages",$data), $msg_array);
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
                            "page_date"=>date('Y-m-d'),
                            "page_page"=>$this->input->post("page"),
                            "page_title"=>$this->input->post("title"),
                            "page_description"=>$this->input->post("description"),
                            "page_pdf"=>$pdf,
                            );

                        $msg_array=array(
                            "title"=>"Success",
                            "emit"=>"New Notice Successfully Added without Attachment",
                            "btn"=>true
                        );
                        $this->data['confirmation']=message($this->action->add("pages",$data), $msg_array);
                }
            }

            //------------------------------------Add page End here--------------------------------------
            //-------------------------------------------------------------------------------------------

            //-------------------------------------------------------------------------------------------
            //-----------------------------------Edit page Start here------------------------------------
            if ($this->input->post("update_page")) {

                $where=array(
                    "id"=>$this->input->post("id_num")
                    );
                    
                
                $alldata = $this->action->read('pages', $where);    
                
                //pdf upload
                if($_FILES["pdf"]["name"]!=null or $_FILES["pdf"]["name"]!="" )
                {
                    $config['upload_path'] = './public/page_pdf';
                    $config['allowed_types'] = 'pdf';
                    $config['max_size'] = '14096';
                    $config['file_name'] =$this->input->post("page").rand(1000,9999); 
                    $config['overwrite']=true;   
                    
                    $this->upload->initialize($config);
                    
                    if ($this->upload->do_upload("pdf")){
                        $upload_data=$this->upload->data();

                        $pdf = "public/page_pdf/".$upload_data['file_name'];
                         
                    }else{
                        $pdf = '';
                    }
                }else{
                    $pdf = $alldata[0]->page_pdf;
                }
                
                //image upload

                if ($_FILES["attachFile"]["name"]!=null or $_FILES["attachFile"]["name"]!="" ) {
                    //Deleting old Image start-------------------------------------------
                        if (is_file("./".$this->input->post("hidden_image_url"))) {
                            unlink("./".$this->input->post("hidden_image_url"));
                        }
                    //Deleting old Image end---------------------------------------------
                    $config['upload_path'] = './public/page_Image';
                    $config['allowed_types'] = 'png|jpeg|jpg|gif';
                    $config['max_size'] = '4096';
                    $config['max_width'] = '3000'; /* max width of the image file */
                    $config['max_height'] = '3000';
                    $config['file_name'] =$this->input->post("page").rand(1000,9999); 
                    $config['overwrite']=true;   
                    
                    $this->upload->initialize($config);
                    
                    if ($this->upload->do_upload("attachFile")){
                        $upload_data=$this->upload->data();

                        $data=array(
                            "page_date"=>date('Y-m-d'),
                            "page_page"=>$this->input->post("page"),
                            "page_title"=>$this->input->post("title"),
                            "page_description"=>$this->input->post("description"),
                            "page_path"=>"public/page_Image/".$upload_data['file_name'],
                            "page_pdf"=>$pdf,
                            );

                        $msg_array=array(
                        "title"=>"Success",
                        "emit"=>"Notice Successfully Updated With Attachment",
                        "btn"=>true
                        );
                        $this->data['confirmation']=message($this->action->update("pages",$data,$where), $msg_array);
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
                            "page_date"=>date('Y-m-d'),
                            "page_page"=>$this->input->post("page"),
                            "page_title"=>$this->input->post("title"),
                            "page_description"=>$this->input->post("description"),
                            "page_pdf"=>$pdf,
                            );

                        $msg_array=array(
                            "title"=>"Success",
                            "emit"=>"Notice Successfully UPdated without Attachment",
                            "btn"=>true
                        );
                        $this->data['confirmation']=message($this->action->update("pages",$data,$where), $msg_array);
                }
            }
            //------------------------------------Edit page End here-------------------------------------
            //-------------------------------------------------------------------------------------------
            $this->load->view($this->data['privilege'].'/includes/header', $this->data);
            $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
            $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
            $this->load->view('components/header/pages', $this->data);
            $this->load->view($this->data['privilege'].'/includes/footer');
        }
        
        //delete image
        
        public function delete_img($id)
        {
            $this->data['active'] = 'data-target="header_menu"';
            
            $data = $this->action->read('pages', ['id'=>$id]);
            
            if (!empty($data[0]->page_path)) {
                unlink("./".$data[0]->page_path);
                $msg_array=array(
                    "title"=>"Success",
                    "emit"=>"Delete file",
                    "btn"=>true
                );
                
                $data_upt = array(
                        'page_path' => ''
                    );
                
                $this->data['confirmation']=message($this->action->update("pages",$data_upt,['id'=>$id]), $msg_array);
                
            
            }
            
            $this->data['alldata'] = $this->action->read('pages');
            
            $this->load->view($this->data['privilege'].'/includes/header', $this->data);
            $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
            $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
            $this->load->view('components/header/pages', $this->data);
            $this->load->view($this->data['privilege'].'/includes/footer');
        }
        
        public function delete_pdf($id)
        {
            $this->data['active'] = 'data-target="header_menu"';
            $data = $this->action->read('pages', ['id'=>$id]);
            
            if (!empty($data[0]->page_pdf)) {
                unlink("./".$data[0]->page_pdf);
                $msg_array=array(
                    "title"=>"Success",
                    "emit"=>"Delete file",
                    "btn"=>true
                );
                
                $data_upt = array(
                        'page_pdf' => ''
                    );
                
                $this->data['confirmation']=message($this->action->update("pages",$data_upt,['id'=>$id]), $msg_array);
                
            
            }
            
            $this->data['alldata'] = $this->action->read('pages');
            
            $this->load->view($this->data['privilege'].'/includes/header', $this->data);
            $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
            $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
            $this->load->view('components/header/pages', $this->data);
            $this->load->view($this->data['privilege'].'/includes/footer');
        }

//-------------------------------------------------------------------------------------------
//---------------------------------Index Function End here-----------------------------------
//-------------------------------------------------------------------------------------------


//-------------------------------------------------------------------------------------------
//-------------------------------Ajax Function Start here------------------------------------
//-------------------------------------------------------------------------------------------
        public function ajax_pages(){
            $page_name=$this->input->post("page_name");
            $query=mysql_query("select * from pages where page_page='$page_name'");
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

    }

