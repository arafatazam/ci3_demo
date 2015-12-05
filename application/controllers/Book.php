<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('BookModel');
    }

    public function create(){
        $data = array(
            'title'=>'Create new Book',
            'view_file' => 'book/create_book_form'
        );
        $this->load->view('main_layout',$data);
    }
    public function store(){
        $data = array(
            'name'=>$this->input->post('name'),
            'author'=>$this->input->post('author'),
            'stock'=>$this->input->post('stock')
        );
        $this->BookModel->save($data);
        redirect(site_url('book'));
    }

    public function index(){
        echo 'list of all the books';
    }

}
