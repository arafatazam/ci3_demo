<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

    public function create(){
        $data = array(
            'title'=>'Create new Book',
            'view_file' => 'book/create_book_form'
        );
        $this->load->view('main_layout',$data);
    }
    public function store(){
        //here we will store the new book
    }

}
