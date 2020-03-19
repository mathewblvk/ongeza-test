<?php

require_once 'DBcontroller.php';

class Customer{

    private $db_handle;

    public function __construct()
    {
        $this->db_handle = new DBcontroller;
    }

public function addCustomer($first_name, $last_name, $town_name, $gender_id)
    {
        $query = 'INSERT INTO customer (first_name, last_name, town_name, gender_id) VALUES (?,?,?,?)';
        $param_type = 'sssi';
        $paramValue = array($first_name, $last_name, $town_name, $gender_id);
        $insertId = $this->db_handle->insert($query, $param_type, $paramValue);
        return $insertId;
    }

    public function editCustomer($first_name, $last_name, $town_name, $gender_id, $customer_id)
    {
        $query  = 'UPDATE customer SET first_name= ?, last_name= ?, town_name= ?, gender_id = ? WHERE id = ?';
        $paramType = "sssii";
        $paramValue = array($first_name, $last_name, $town_name, $gender_id, $customer_id);
        $this->db_handle->update($query, $paramType,  $paramValue);
    }

   
    public function getAllCustomers(){
        $query = "SELECT customer.id,customer.first_name,customer.last_name,customer.town_name,gender.gender_name FROM customer LEFT JOIN gender ON customer.gender_id = gender.id";
        $result = $this->db_handle->runBaseQuery($query);
        return $result;
    }

    public function getCustomerById($customer_id){
        $query = "SELECT * FROM customer WHERE id = ?";
        $paramType = "i";
        $paramValue = array($customer_id);
        $result  = $this->db_handle->runQuery($query, $paramType, $paramValue);
        return $result;
    }

    public function deleteCustomer($customer_id){
        $query = "DELETE FROM customer WHERE id = ?";
        $paramType = "i";
        $paramValue = array($customer_id);
        $this->db_handle->update($query, $paramType, $paramValue);
    }







}