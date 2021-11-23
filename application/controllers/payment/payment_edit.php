<?php
/**
* For Edit the payment slip
*/
class Payment_edit extends Admin_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('action');
		$this->load->model('retrieve');
	}

	public function index()
	{
		$this->data['meta_title']   = 'Payment Sector';
        $this->data['active']       = 'data-target="payment_menu"';
        $this->data['subMenu']      = 'data-target="payment_edit"';
        $this->data['confirmation'] = null;

        $where = array("invoice_no" => $this->input->get('invoice_no'));
        $this->data['records'] = $this->retrieve->readGroupBy('payment','invoice_no',$where);
        
        
        if($this->input->post('update_payment')){
            $where = array("invoice_no" => $this->input->post("invoice_no"));
           
            foreach($_POST['id'] as $key => $value){
                
                $data = array('amount' => $_POST['Update_amount'][$key]);
                $where['id'] = $_POST['id'][$key];
                
              $this->action->update("payment",$data,$where);
            }
            
            $options = array(
                'title' =>"update",
                'emit'  =>"Payment Field successfully update!",
                'btn'   =>true
            );
            
             $this->data['confirmation']=message("success",$options);
             $this->session->set_flashdata("confirmation",$this->data['confirmation']);
             redirect("payment/payment_edit?invoice_no=".$this->input->post("invoice_no"),"refresh");
            
        }

	    $this->load->view($this->data['privilege'].'/includes/header', $this->data);
	    $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
	    $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
	    $this->load->view('components/payment/nav', $this->data);
	    $this->load->view('components/payment/payment_edit', $this->data);
	    $this->load->view($this->data['privilege'].'/includes/footer');


	}
}