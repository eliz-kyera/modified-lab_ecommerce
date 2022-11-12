<?php 

require("../Controllers/category_controller.php");

if (isset($_POST["submit"])) {
    $cat_name = $_POST['CategoryName'];

    $add = add_categories($cat_name) ;

    if ($add) {
        header('location: ../View/category.php'); 
    } else {
        echo "failed to add"; 
    }
} else {
    echo "failed"; 
}


?>