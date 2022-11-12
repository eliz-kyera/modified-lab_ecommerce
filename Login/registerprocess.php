<?php

require('../Controllers/customer_controller.php');


if(isset($_POST['submit'])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $country = $_POST["country"];
    $city = $_POST["city"];
    $contact = $_POST["contact"];

    //hash password
    $encryptedPass = password_hash($password, PASSWORD_BCRYPT);


    $result = add_customer_ctr($name, $email, $encryptedPass, $country, $city, $contact);

    if($result)
    {
        echo "success!";
        header("location: ../Login/login.php");
    } else {
        echo "failed"; 
    }
}

?>