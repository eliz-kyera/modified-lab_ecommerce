<?php
require("../Controllers/cart_controller.php");
session_start();

$cid = $_SESSION['user_id'];
$pid = $_GET['id'];

$delete = delete_from_cart($cid,$pid) ;
if($delete){
    header("location: ../view/cart.php");
}else{
    echo "delete failed";
}
?>