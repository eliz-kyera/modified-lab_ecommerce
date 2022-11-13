<?php
// require_once('../Controllers/product_controller.php');
require_once('../Controllers/cart_controller.php');
// Retrieves the brand name and passes it into the add brand controller
session_start();
//error_reporting (E_ALL ^ E_NOTICE);

$cid = $_SESSION['user_id'];
$pid = $_GET['product_id'];


$ip_address = $_SERVER["REMOTE_ADDR"];

$duplicate_check = duplicate_cart_ctrl($pid, $cid);
//print_r($duplicate_check);
//$update_check = update_cart_qty_ctrl($pid, $cid);

if (count($duplicate_check) == 0){
    $cart_check = add_cart_ctrl($pid, $ip_address, $cid); 
    if ($cart_check) {
        /* echo "Brand name inserted successfully"; */
        header('Location: ../view/viewall_products.php');
    }
    else{
        echo "cart insertion failed";
    }
}else if(isset($_GET['subtract'])){
    $reduce =  reduce_cart_qty($pid, $cid);
    if($reduce){
        header('Location: ../view/cart.php');
        return;
    }

}
else{
    $update_check = update_cart_qty_ctrl($pid, $cid);
    if ($update_check) {
        if(isset($_GET['addbutton'])){
            header('Location: ../view/cart.php');
            return;
        }
        /* echo "Brand name inserted successfully"; */
       header('Location: ../view/viewall_products.php');
    }
    else{
        echo "cart insertion failed";
    }

}





?>
