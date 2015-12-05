<?php
class BookModel extends CI_Model{

    protected $table;

    public function __construct(){
        parent::__construct();
        $this->table = 'books';
    }

    public function save($data){
        $this->db->insert($this->table, $data);
    }

    public function getAll(){
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    public function getById($id){
        $query = $this->db->get_where($this->table, array('id' => $id));
        return $query->result_array()[0];
    }
}