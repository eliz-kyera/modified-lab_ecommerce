<?php
require("../Controllers/cart_controller.php");
session_start();

$cid = $_SESSION['customer_id'];
$pid = $_GET['id'];

$duplicate_one_cart = duplicate_one_cart_ctrl($pid, $cid);
print_r($duplicate_one_cart);
if($duplicate_one_cart["qty"] <= 1){
   $del =delete_cart_qty_ctrl($pid,$cid);
   if($del){
        header("location:../View/cart.php");
   }
    else{
        echo"delete failed";
    }
}
else{

  $update = update_more_cart_qty_ctrl($pid,$cid);

  if ($update) {
      header("location:../View/cart.php");
  }
  else{
      echo"failed";
  }

}

?>