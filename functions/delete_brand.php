<?php
require("../Controllers/product_controller.php");

//get item to delete
$delbrand = $_GET['bid'];



//delete item
$delete = delete_brand_name($delbrand);

if ($delete){
    header("location: ../view/brand.php");
}else{
    echo "Delete failed";
}


?>
 