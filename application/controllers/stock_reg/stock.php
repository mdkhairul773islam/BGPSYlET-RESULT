<?php class Stock extends Admin_Controller {

    function __construct() {
        parent::__construct();
        
        $this->load->model('action');
        $this->data['meta_title'] = 'Stock Register';
    }
    
    public function index() {
        $this->data['active']  = 'data-target="stock_reg_menu"';
        $this->data['subMenu'] = 'data-target="field"';        

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/stock_reg/nav', $this->data);
        $this->load->view('components/stock_reg/fieldcost', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer', $this->data);
    }

    public function room() {
        $this->data['active']  = 'data-target="stock_reg_menu"';
        $this->data['subMenu'] = 'data-target="room"';        

        if ($this->input->post('submit')) {
            $data=array("room"=>$this->input->post('room_no'));      

            $options1=array(
                'title' =>"warning",
                'emit'  =>"This Room No Allready Exists!",
                'btn'   =>true
            );

            $options2=array(
                'title' =>"success",
                'emit'  =>"Room No successfully saved!",
                'btn'   =>true
            );

            if($this->action->exists('room_no',$data)){
                $this->data['confirmation'] = message("warning",$options1);
                $this->session->set_flashdata("confirmation",$this->data['confirmation']);
            }else{
                $this->data['confirmation']=message($this->action->add("room_no",$data),$options2);
                $this->session->set_flashdata("confirmation",$this->data['confirmation']);
            }

            
            redirect("stock_reg/stock/room","refresh");
        }



        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/stock_reg/nav', $this->data);
        $this->load->view('components/stock_reg/room', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer', $this->data);
    }


    public function add(){
        $data=array("stock_field"=>$this->input->post('field_stock'));      

        $options1=array(
            'title' =>"warning",
            'emit'  =>"Field of Stock Register Allready Exists!",
            'btn'   =>true
        );

        $options2=array(
            'title' =>"success",
            'emit'  =>"Field of Stock Reg successfully saved!",
            'btn'   =>true
        );

        if($this->action->exists('stock_reg_field',$data)){
            $this->data['confirmation'] = message("warning",$options1);
            $this->session->set_flashdata("confirmation",$this->data['confirmation']);
        }else{
            $this->data['confirmation']=message($this->action->add("stock_reg_field",$data),$options2);
            $this->session->set_flashdata("confirmation",$this->data['confirmation']);
        }

        
        redirect("stock_reg/stock","refresh");
    }

    public function new_stock_reg() {
        $this->data['active']  = 'data-target="stock_reg_menu"';
        $this->data['subMenu'] = 'data-target="new"';
        
        $this->data['stock_fields']=$this->action->read('stock_reg_field');
        $this->data['room_no']=$this->action->read('room_no');

        // print_r($this->data['cost_fields']);

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/stock_reg/nav', $this->data);
        $this->load->view('components/stock_reg/new', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer', $this->data);
    }


    public function add_new_stock(){
        $data=array(
         "date"        => date("Y-m-d"),
         "stock_field" => $this->input->post('item'),
         "room_no"    => $this->input->post('room_no'),
         "quantity"      => $this->input->post('quantity'),
         "description" => $this->input->post('remarks')
        );      

        $options=array(
            'title' =>"success",
            'emit'  =>"Stock Register successfully saved!",
            'btn'   =>true
        );
        
        $this->data['confirmation']=message($this->action->add("stock_reg",$data),$options);        

        $this->session->set_flashdata("confirmation",$this->data['confirmation']);
        redirect("stock_reg/stock/new_stock_reg","refresh");
    }

    public function all_stock_reg() {
        $this->data['active']  = 'data-target="stock_reg_menu"';
        $this->data['subMenu'] = 'data-target="all"';

        $this->data['stock_field'] =$this->action->read('stock_reg_field');

        $where=array('trash'=>0);

        if(isset($_POST['show'])){
            foreach ($_POST['search'] as $key => $value) {
                if($value != NULL){
                    $where[$key] = $value;
                }
            }

            // foreach ($_POST['date'] as $key => $value) {
            //     if($value != NULL && $key == "from"){
            //         $where['date >='] = $value;
            //     }
				
            //     if($value != NULL && $key == "to"){
            //         $where['date <='] = $value;
            //     }
            // }
            //print_r($where);
        }

        $this->data['stock_reg']=$this->action->read('stock_reg', $where);

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/stock_reg/nav', $this->data);
        $this->load->view('components/stock_reg/all', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer', $this->data);
    }

    public function edit($id=NULL) {
        $this->data['active']  = 'data-target="cost_menu"';
        $this->data['subMenu'] = 'data-target="all"';

        $this->data['stock']=$this->action->read('stock_reg',array('id'=>$id));
        $this->data['stock_field']=$this->action->read('stock_reg_field');
        $this->data['roomList']=$this->action->read('room_no');

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/stock_reg/nav', $this->data);
        $this->load->view('components/stock_reg/edit', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    public function update_cost($id=NULL){

        $data=array(
            "stock_field" => $this->input->post('item'),
            "room_no"    => $this->input->post('room_no'),
            "quantity"      => $this->input->post('quantity'),
            "description" => $this->input->post('remarks')
        );        

        $options=array(
            'title' =>"update",
            'emit'  =>"Stock successfully updated!",
            'btn'   =>true
        );
        
        $this->data['confirmation']=message($this->action->update("stock_reg",$data,array('id'=>$id)),$options);        

        $this->session->set_flashdata("confirmation",$this->data['confirmation']);
        redirect("stock_reg/stock/all_stock_reg","refresh");

    }

    public function delete_field($id=NULL){
        $options=array(
            'title' =>'delete',
            'emit'  =>'This field of Stock Register Item successfully Deleted!',
            'btn'   =>true
        );
        $where=array("id"=>$id);
        $this->data['confirmation']=message($this->action->deleteData('stock_reg_field',$where),$options);
        $this->session->set_flashdata('confirmation',$this->data['confirmation']);
        redirect('stock_reg/stock','refresh');
    }

    public function delete_room($id=NULL){
        $options=array(
            'title' =>'delete',
            'emit'  =>'This  Room successfully Deleted!',
            'btn'   =>true
        );
        $where=array("id"=>$id);
        $this->data['confirmation']=message($this->action->deleteData('room_no',$where),$options);
        $this->session->set_flashdata('confirmation',$this->data['confirmation']);
        redirect('stock_reg/stock/room','refresh');
    }





     public function delete_stock($id=NULL){
        $where = array("id"=>$id);
        $data =  array('trash'=>1);
        $options=array(
            'title' =>'delete',
            'emit'  =>'Stock successfully Deleted!',
            'btn'   =>true
        );

        $this->data['confirmation']=message($this->action->update('stock_reg',$data,$where),$options);
        $this->session->set_flashdata('confirmation',$this->data['confirmation']);
        redirect('stock_reg/stock/all_stock_reg','refresh');
    }



}