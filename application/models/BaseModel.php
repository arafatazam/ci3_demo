<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BaseModel extends CI_Model{

    protected $table;

    public function __construct($table){
        parent::__construct();
        $this->table = $table;
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

    public function updateById($id,$data){
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }

    public function deleteById($id){
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }
}