<?php 

require('../Settings/db_class.php');


class Productclass extends Connection {

    //SELECT PRODUCTS
    function get_products() {
        $sql = "SELECT * FROM  `products`";


        return $this->fetch($sql); 
    }

    //Select one
		function get_one_product($product_id){
			$sql =" SELECT * FROM `products` WHERE `product_id` = '$product_id'";
	
			return $this -> fetch($sql);
		}

    //SELECT BRANDS
    function get_brands() {
        $sql = "SELECT * FROM `brands`";

        return $this->fetch($sql); 
    }

    
// INSERT BRANDS
    function add_brand($brand_name){

        $sql = "INSERT INTO `brands` (`brand_name`) VALUES ('$brand_name')";


        return $this->query($sql); 
    } 


//UPDATE BRANDS

    function update_brand($brand_id, $brand_name) {

        $sql= "UPDATE `brands` SET `brand_name`= '$brand_name' WHERE `brand_id`= $brand_id";
    
        return $this->query($sql);
    }

//UPDATE PRODUCTS
    function update_products($product_id, $product_cat, $product_brand, $product_title, $product_price, $product_desc, $product_keywords){

        $sql= "UPDATE `products` SET `product_cat`='$product_cat', `product_brand`='$product_brand', `product_title`= '$product_title' ,`product_price` = '$product_price', `product_desc`='$product_desc', `product_keywords`='$product_keywords' WHERE `product_id`= '$product_id'";
    
        return $this->query($sql);
    }
    

    // detele brands
    function delete_brand($brand_id)
    {
        $sql= "DELETE FROM `brands` WHERE `brand_id`= $brand_id";
        return $this->query($sql);
    }

    // DELETE PRODUCTS
    function delete_products($product_id)
    {
        $sql= "DELETE FROM `products` WHERE `product_id`= $product_id";
        return $this->query($sql);
    }

    //SELECT CATEGORIES

    function get_categories() {
        $sql = "SELECT * FROM `categories`";

        return $this->fetch($sql); 
    }
// INSERT CATEGORIES
    function add_categories($cat_name){

        $sql = "INSERT INTO `categories` (`cat_name`) VALUES ('$cat_name')";


        return $this->query($sql); 
    }

    // UPDATE CATEGOROES

    function update_categories($cat_id, $cat_name) {

        $sql= "UPDATE `categories` SET `cat_name`= '$cat_name' WHERE `cat_id`= $cat_id";
    
        return $this->query($sql);
    }

    // detele categories
    function delete_categories($cat_id)
    {
        $sql= "DELETE FROM `categories` WHERE `cat_id`= $cat_id";
        return $this->query($sql);
    }

    // INSERT PRODUCT
    function add_product($a, $b, $c, $d, $e, $f, $g){

        $sql = "INSERT INTO `products`( `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g')";

        return $this->query($sql); 
    }

    // Search products
    function search_products($a){
        $sql = "SELECT * FROM `products` WHERE `product_title` LIKE '%$a%'";
        return $this ->fetch($sql);
        //return $sql;
    }


    


    

}









?>