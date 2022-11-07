<?php 

include("../Controllers/product_controller.php");

if (isset($_POST["submit"])) {
    $brand_name = $_POST['brandName'];

    $add = add_brand($brand_name);

    if ($add) {
        header('location: ../View/brand.php'); 
    } else {
        echo "failed to add"; 
    }
} else {
    echo "failed"; 
}


?>