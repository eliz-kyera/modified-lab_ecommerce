<?php

require('../Classes/customer_class.php');

//Add customer controller 
function add_customer_ctr($name, $email, $password, $country, $city, $contact, $image)
{
    //create customer instance
    $customer_instance = new Customer();
    //call the method from the class
    return $customer_instance->add_customer($name, $email, $password, $country, $city, $contact, $image);
}



//Verify Login controller
function check_login_details_ctr($email)
{
    //create customer instance
    $customer_instance = new Customer();
    //call the method from the class
    return $customer_instance->check_login_details($email);
}



function select_all_customer_ctr(){
    // create an instance of the Customer class
    $customer_instance = new Customer();
    // call the method from the class
    return $customer_instance->select_all_customer();

}

function select_one_customer_ctr($id){
    // create an instance of the Customer class
    $customer_instance = new Customer();
    // call the method from the class
    return $customer_instance->select_one_customer($id);

}

?>