<?php 

require('../Settings/db_class.php');

class Customer extends Connection{

    //methods
    function add_customer($name, $email, $password, $country, $city, $contact){
        $sql= "INSERT INTO `customer`(`customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `user_role`) VALUES ('$name', '$email', '$password', '$country', '$city', '$contact','2')";
        return $this->query($sql);
    }

    

    function check_login_details($email){

		$sql = "SELECT * FROM `customer` WHERE `customer_email` = '$email'";

		return $this -> fetchOne($sql);
	}

    function check_user_role($email) {
        $sql = "SELECT `user_role` FROM `customer` WHERE `customer_email` = '$email'";

        return $this->fetchOne($sql); 
    }


    



    function select_all_customer(){
        return $this->fetch("SELECT * FROM customer");
    }

    function select_one_customer($id){
        $sql = "SELECT * FROM customer WHERE customer_email='$id'";
        return $this->fetchOne($sql);

    }

}



?>