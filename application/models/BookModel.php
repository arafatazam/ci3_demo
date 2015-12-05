<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include('BaseModel.php');

class BookModel extends BaseModel{

    public function __construct(){
        $table = 'books';
        parent::__construct($table);
    }
}