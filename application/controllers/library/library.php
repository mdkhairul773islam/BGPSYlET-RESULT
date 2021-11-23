<?php

class Library extends Admin_Controller {

   function __construct() {
        parent::__construct();
        $this->load->model('action');
    }
    
    public function index($emit = NULL) {
        $this->data['meta_title']   = 'library_menu';
        $this->data['active']       = 'data-target="library"';
        $this->data['subMenu']      = 'data-target="add"';
        $this->data['confirmation'] = null;
        
        
        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/library/nav', $this->data);
        $this->load->view('components/library/add', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }
    
    public function store(){
        $data = array(
            "created_at"    => date('Y-m-d'),
            "collect_date"  => $this->input->post('collect_date'),
            "book_name"     => $this->input->post('book_name'),
            "author_name"   => $this->input->post('author_name'),
            "publication"   => $this->input->post('publication'),
            "type"          => $this->input->post('type'),
            "remark"        => $this->input->post('remark'),
            "rack_no"       => $this->input->post('rack_no'),
            "shelf_no"      => $this->input->post('shelf_no'),
            "quantity"      => $this->input->post('quantity'),
        );

        $options = array(
            'title' => "success",
            'emit'  => "Book successfully saved!",
            'btn'   => true
        );

        $this->session->set_flashdata("confirmation", message($this->action->add("books", $data), $options));

        redirect("library/library", "refresh");
    }
    
    public function all(){
        $this->data['meta_title']   = 'library_menu';
        $this->data['active']       = 'data-target="library"';
        $this->data['subMenu']      = 'data-target="all"';
        $this->data['confirmation'] = null;
        
        $where = array(
                'trash'=>0
            );
        
        $this->data['authors']      = get_result('books', $where, 'author_name as name', 'author_name');
        $this->data['publications'] = get_result('books', $where, 'publication as name', 'publication');
        $this->data['books']     = get_result('books', $where, 'book_name as name', 'book_name');
        
        
        if (isset($_POST['show'])) {
            if (isset($_POST['search'])) {
                foreach ($_POST['search'] as $key => $value) {
                    if (!empty($value)) {
                        $where[$key] = $value;
                    }
                }
            }

            foreach ($_POST['date'] as $key => $value) {
                if (!empty($value) && $key == "from") {
                    $where['created_at >='] = $value;
                }

                if (!empty($value) && $key == "to") {
                    $where['created_at <='] = $value;
                }
            }
            
            $this->data['all_book']     = get_result('books', $where);
            
        }else{
            $this->data['all_book']     = get_result('books', $where);    
        }
        
        
        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/library/nav', $this->data);
        $this->load->view('components/library/all', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }
    
    public function edit($id){
        $this->data['meta_title']   = 'library_menu';
        $this->data['active']       = 'data-target="library"';
        $this->data['subMenu']      = 'data-target="all"';
        $this->data['confirmation'] = null;
        
        $this->data['book'] = get_result('books', ['id'=>$id])[0];
        
        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/library/nav', $this->data);
        $this->load->view('components/library/edit', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }
    
    public function update($id){
        if($_POST){
            $data = array(
                "collect_date"  => $this->input->post('collect_date'),
                "book_name"     => $this->input->post('book_name'),
                "author_name"   => $this->input->post('author_name'),
                "publication"   => $this->input->post('publication'),
                "type"          => $this->input->post('type'),
                "remark"        => $this->input->post('remark'),
                "rack_no"       => $this->input->post('rack_no'),
                "shelf_no"      => $this->input->post('shelf_no'),
                "quantity"      => $this->input->post('quantity'),
            );
    
            $options = array(
                'title' => "success",
                'emit'  => "Book successfully Updated!",
                'btn'   => true
            );
            $this->session->set_flashdata("confirmation", message($this->action->update("books", $data, ['id'=>$id]), $options));
            redirect("library/library/edit/$id", "refresh");
        }
    }
    
    public function delete($id){
        $options = array(
            'title' => "success",
            'emit'  => "Book successfully Deleted!",
            'btn'   => true
        );
        $this->session->set_flashdata("confirmation", message('success', $options));

        delete_data('books', ['id'=>$id]);
        redirect("library/library/all", "refresh");
    }
    
}

