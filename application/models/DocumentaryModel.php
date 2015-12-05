<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include('BaseModel.php');

class DocumentaryModel extends BaseModel{

    public function __construct(){
        $table = 'documentaries';
        parent::__construct($table);
    }
}