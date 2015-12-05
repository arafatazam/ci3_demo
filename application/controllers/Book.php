<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

    protected $view_subfolder = 'book';

    public function __construct(){
        parent::__construct();
        $this->load->model('BookModel','Model');
    }

    public function create(){
        $data = array(
            'title'=>'Create new Book',
            'view_file' => $this->view_subfolder.'/create'
        );
        $this->load->view('main_layout',$data);
    }
    public function store(){
        $data = array(
            'name'=>$this->input->post('name'),
            'author'=>$this->input->post('author'),
            'stock'=>$this->input->post('stock')
        );
        $this->Model->save($data);
        redirect(site_url('book'));
    }

    public function index(){
        $books = $this->Model->getAll();
        $data = array(
            'title'=>'Books',
            'view_file'=>$this->view_subfolder.'/index',
            'books'=>$books
        );
        $this->load->view('main_layout',$data);
    }

    public function show($id){
        $book = $this->Model->getById($id);
        $data = array(
            'title' => 'Book | '.$book['id'],
            'view_file' => $this->view_subfolder.'/show',
            'book' => $book
        );
        $this->load->view('main_layout',$data);
    }

    public function edit($id){
        $old_details = $this->Model->getById($id);
        $data = array(
            'title'=> 'Edit Book | '.$old_details['id'],
            'view_file' => $this->view_subfolder.'/edit',
            'old_details' => $old_details
        );
        $this->load->view('main_layout',$data);
    }

    public function update($id){
        $data = array(
            'name' => $this->input->post('name'),
            'author' => $this->input->post('author'),
            'stock' => $this->input->post('stock')
        );
        $this->Model->updateById($id,$data);
        redirect(site_url('book'));
    }

    public function destroy($id){
        $this->Model->deleteById($id);
        redirect(site_url('book'));
    }
}
