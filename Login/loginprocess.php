<?php

require('../Controllers/customer_controller.php');

//start session
session_start();

if(isset($_POST["loginCustomer"]))
{

    $email = $_POST["email"];
    $password = $_POST["password"];


    $result = check_login_details_ctr($email);

    if(isset($result["customer_email"])){
        password_verify($password, $result["customer_pass"]);
        $_SESSION["user_id"] = $result["customer_id"];
        $_SESSION["user_role"] = $result["user_role"];
        echo header('location: ../index.php');

    }
    else echo header('location: ../Login/login.php');
    
    
    
}
