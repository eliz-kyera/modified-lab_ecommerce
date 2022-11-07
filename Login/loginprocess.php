<?php

require('../Controllers/customer_controller.php');

//start session
session_start();

if(isset($_POST["loginCustomer"]))
{

    $email = $_POST["email"];
    $password = $_POST["password"];

// confirming whether th email exist and returns either a boolean or an associative array 
    $result = check_login_details_ctr($email);


    // store information to be used across multiple pages 
    if($result){

        if (password_verify($password, $result["customer_pass"])) {
            $_SESSION["user_id"] = $result["customer_id"];
            $_SESSION["user_role"] = $result["user_role"];

            $user_role = get_user_role($email); 

            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['user_role'] = $user_role['user_role'];
            // Check if user is an admin
            
            echo header('location: ../View/adminpage.php'); 
           
        } else {
            echo header('location: ./login.php');
        }
    
        

    }
    else echo header('location: ../Login/login.php');
    

}

