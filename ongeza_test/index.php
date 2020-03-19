<?php 

require_once "inc.class/DBcontroller.php";
require_once "inc.class/Gender.php";
require_once "inc.class/Customer.php";

$db_handle = new DBcontroller;

switch ($_GET["action"]) { 

    case "gender_add":
        if (isset($_POST["add"])) 
        {
            $gender_name = $_POST["gender_name"];
            $gender = new Gender();
            $insertId =  $gender->addGender($gender_name);
            header("Location: index.php");
        }
    require_once "web/gender_add.php";
    break;


    case "customer_add":
        if (isset($_POST["add"])) 
        {
            $first_name = $_POST["first_name"];
            $last_name = $_POST["last_name"];
            $town_name = $_POST["town_name"];
            $gender_id  = $_POST["gender_id"];
            $customer  = new Customer();
            $insertId =  $customer->addCustomer($first_name, $last_name, $town_name, $gender_id);
            header("Location: index.php");
        }
        $gender = new Gender();
        $GenderResult = $gender->getAllGender();
        require_once "web/customer_add.php";
        break;


    case "customer_edit":
        $customer_id = $_GET["id"];
        $customer = new Customer();
        $gender = new Gender();

        if (isset($_POST["add"])) {
            $first_name = $_POST["first_name"];
            $last_name = $_POST["last_name"];
            $town_name = $_POST["town_name"];
            $gender_id  = $_POST["gender_id"];

            $customer->editCustomer($first_name, $last_name, $town_name, $gender_id,$customer_id);
            header("Location: index.php");
        }
        $result = $customer->getCustomerById($customer_id);
        $GenderResult = $gender->getAllGender();
        require_once "web/customer_edit.php";
    break;

    case "customer_delete":
        $customer_id = $_GET["id"];
        $customer = new Customer();
            if(!empty($customer_id))
            {
                $customer->deleteCustomer($customer_id);
            }
        $result = $customer->getAllCustomers();
        require_once "web/customer.php";
        break;

    default:
        $customer = new Customer();
        $result = $customer->getAllCustomers();
        require_once "web/customer.php";
    break;
}



