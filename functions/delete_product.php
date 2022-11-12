<?php
require("../Controllers/product_controller.php");

//get item to delete
$delproduct = $_GET['product_id'];



//delete item
$delete = delete_products($delproduct);

if ($delete){
    header("location: ../view/addproductform.php");
}else{
    echo "Delete failed";
}


?>