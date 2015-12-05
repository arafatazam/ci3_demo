<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documentary extends CI_Controller {

    protected $view_subfolder = 'documentary';

    public function __construct(){
        parent::__construct();
        $this->load->model('DocumentaryModel','Model');
    }

    public function create(){
        $data = array(
            'title'=>'Create new Documentary',
            'view_file' => $this->view_subfolder.'/create'
        );
        $this->load->view('main_layout',$data);
    }
    public function store(){
        $data = array(
            'name'=>$this->input->post('name'),
            'director'=>$this->input->post('director'),
            'year'=>$this->input->post('year')
        );
        $this->Model->save($data);
        redirect(site_url('documentary'));
    }

    public function index(){
        $documentaries = $this->Model->getAll();
        $data = array(
            'title'=>'Documentaries',
            'view_file'=>$this->view_subfolder.'/index',
            'documentaries'=>$documentaries
        );
        $this->load->view('main_layout',$data);
    }

    public function show($id){
        $documentary = $this->Model->getById($id);
        $data = array(
            'title' => 'Documentary | '.$documentary['id'],
            'view_file' => $this->view_subfolder.'/show',
            'documentary' => $documentary
        );
        $this->load->view('main_layout',$data);
    }

    public function edit($id){
        $old_details = $this->Model->getById($id);
        $data = array(
            'title'=> 'Edit Documentary | '.$old_details['id'],
            'view_file' => $this->view_subfolder.'/edit',
            'old_details' => $old_details
        );
        $this->load->view('main_layout',$data);
    }

    public function update($id){
        $data = array(
            'name' => $this->input->post('name'),
            'director' => $this->input->post('director'),
            'year' => $this->input->post('year')
        );
        $this->Model->updateById($id,$data);
        redirect(site_url('documentary'));
    }

    public function destroy($id){
        $this->Model->deleteById($id);
        redirect(site_url('documentary'));
    }
}
