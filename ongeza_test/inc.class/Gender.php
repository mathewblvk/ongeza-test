<?php

require_once 'DBcontroller.php';

class Gender{

    private $db_handle;

    public function __construct()
    {
        $this->db_handle = new DBcontroller;
    }

    public function addGender($gender_name){
    $query = 'INSERT INTO gender (gender_name) VALUES (?)';
    $param_type = 's';
    $paramValue = array($gender_name);
    $insertId = $this->db_handle->insert($query,$param_type,$paramValue);
    return $insertId;
    }

    public function getAllGender(){
        $query = "SELECT * FROM gender ORDER BY id;";
        $result = $this->db_handle->runBaseQuery($query);
        return $result;
    }

}