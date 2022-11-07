<?php

require('../Classes/customer_class.php');

//Add customer controller 
function add_customer_ctr($name, $email, $password, $country, $city, $contact)
{
    //create customer instance
    $customer_instance = new Customer;
    //call the method from the class
    $run_query =  $customer_instance->add_customer($name, $email, $password, $country, $city, $contact);

    if ($run_query) {
        return $run_query;
    } else {
        return false; 
    }
}

function get_user_role($email) {
    $customer = new Customer;

    $run_query = $customer->check_user_role($email);

    return $run_query; 
}



//Verify Login controller
function check_login_details_ctr($email)
{
    //create customer instance
    $customer_instance = new Customer;
    //call the method from the class
    $run_query =  $customer_instance->check_login_details($email);

    if ($run_query) {
        return $run_query;
    } else {
        return false; 
    }
}



function select_all_customer_ctr(){
    // create an instance of the Customer class
    $customer_instance = new Customer;
    // call the method from the class
    return $customer_instance->select_all_customer();

}

function select_one_customer_ctr($id){
    // create an instance of the Customer class
    $customer_instance = new Customer;
    // call the method from the class
    return $customer_instance->select_one_customer($id);

}

?>