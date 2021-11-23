<?php

class ImageGallery extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('action');
        $this->load->library('upload');
    }
    
    public function index($emit = NULL) {
        $this->data['meta_title'] = 'gallery';
        $this->data['active'] = 'data-target="header_menu"';
        $this->data['subMenu'] = 'data-target="imageGallery"';
        $this->data['confirmation'] = null;

        //-----------------------------------------------------------------------
        //------------------------Save Gallery start here------------------------
        //-----------------------------------------------------------------------
        if ($this->input->post('gallery_Save')) {

            $config['upload_path'] = './public/gallery';
            $config['allowed_types'] = 'png|jpg|gif';
            $config['max_size'] = '4096';
            $config['max_width'] = '3000'; /* max width of the image file */
            $config['max_height'] = '3000';
            $config['file_name'] ="gallery".rand(1111,9999); 
            $config['overwrite']=false;   
            
            $this->upload->initialize($config);
            
            if ($this->upload->do_upload("gallery_image")){
                $upload_data=$this->upload->data();

                $data=array(
                    "gallery_date"=>date('Y-m-d'),
                    "gallery_title"=>$this->input->post("galleryTitle"),
                    "gallery_path"=>"public/gallery/".$upload_data['file_name'],
                    );
                $this->data['confirmation']=message($this->action->add("gallery",$data));
                
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
        //-----------------------------------------------------------------------
        //-------------------------Save Gallery end here-------------------------
        //-----------------------------------------------------------------------

        //-----------------------------------------------------------------------
        //-----------------------Delete Gallery Start here-----------------------
        //-----------------------------------------------------------------------
        if($this->input->get("delete_token")){//Deleting Message
            
            if (is_file("./".$this->input->get("img_url"))) {
                unlink("./".$this->input->get("img_url"));
            }
            
            $this->data['confirmation']=message($this->action->deletedata('gallery',array('id'=>$this->input->get("delete_token"))));
            
        }
        //-----------------------------------------------------------------------
        //------------------------Delete Gallery End here------------------------
        //-----------------------------------------------------------------------        
        $this->data["gallery_data"]=$this->action->read("gallery");

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/header/image-gallery', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

}
