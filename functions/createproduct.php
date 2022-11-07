
<?php 
require("../Controllers/product_controller.php"); 
if (isset($_POST["submit"])) {
    $product_brand = $_POST['product_brand'];
    $product_cat= $_POST['product_cat'];
    $product_title= $_POST['ptitle'];
    $product_price= $_POST['pprice'];
    $product_desc= $_POST['pdesc'];
    $product_keywords= $_POST['pkeyword'];
    $product_image= 'NULL';
    
    
    // echo "hello";
    $add = add_product($product_cat, $product_brand, $product_title, $product_price, $product_desc, $product_image, $product_keywords); 

 if ($add) {
      header('location: ../View/addproductform.php'); 
  } else {
     echo "failed to add"; 
  }
} else {
    echo "failed"; 
 }

 // validation is datatype 

 // 1. Check if the submiit action was clicked
//  2. get the input 
//  3. validation 
//  4. connect to db - database class/ db_query
//  5. check if connection is working - data base class/ db_query
//  6. write the query - partial db class
//  7. execute/run the query - db query
//  8. check if query run  success

// fetchone - 4,5,7,8

?>