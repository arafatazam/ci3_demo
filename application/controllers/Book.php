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
            'view_file' => 'book/create'
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
        $books = $this->BookModel->getAll();
        $data = array(
            'title'=>'Books',
            'view_file'=>'book/index',
            'books'=>$books
        );
        $this->load->view('main_layout',$data);
    }

    public function show($book_id){
        $book = $this->BookModel->getById($book_id);
        $data = array(
            'title' => 'Book | '.$book['id'],
            'view_file' => 'book/show',
            'book' => $book
        );
        $this->load->view('main_layout',$data);
    }

    public function edit($book_id){
        $old_details = $this->BookModel->getById($book_id);
        $data = array(
            'title'=> 'Edit Book | '.$old_details['id'],
            'view_file' => 'book/edit',
            'old_details' => $old_details
        );
        $this->load->view('main_layout',$data);
    }
}
