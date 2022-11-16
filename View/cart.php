<?php 
require("../Controllers/cart_controller.php");
// session_start();




// $count_cart = count_cart_ctrl($cid);
// $every_item = every_cart_item_ctr($cid);
// $total_price = total_price_ctrl($cid);
// print_r($total_price);


// $count_one_cart = count_one_cart_ctrl($cid);
// print_r($count_one_cart)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    

    <title>Cart</title>
    <style>
      body {
  background: #eecda3;
  background: -webkit-linear-gradient(to right, #eecda3, #ef629f);
  background: linear-gradient(to right, #eecda3, #ef629f);
  min-height: 100vh;
}
</style>
    
    
</head>
<body>
<?php
include("navigation.php");
$cid =  $_SESSION["user_id"];

$count_cart = count_cart_ctrl($cid);
 $every_item = every_cart_item_ctr($cid);
 $total_price = total_price_ctrl($cid);
$amt = 0;
 foreach($total_price as $total){
  $amt = $total['total'];

 }
// print_r($total_price);


// $//count_one_cart = count_one_cart_ctrl($cid);
// print_r($count_one_cart)

?>

<div class="px-4 px-lg-0">
  <!-- For demo purpose -->
  <div class="container text-white py-5 text-center">
    <h1 class="display-4">shopping cart</h1>
    <p class="lead mb-0">Just one step away to paRADISE. </p>
    <!-- <p class="lead">Snippet by <a href="https://bootstrapious.com/snippets" class="text-white font-italic"> -->
            <!-- <u>Bootstrapious</u></a> -->
    </p>
  </div>
  <!-- End -->

  <div class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

          <!-- Shopping cart table -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">Product</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Price</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Quantity</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Remove</div>

                    
                  </th>
                </tr>
              </thead>
              <tbody>
              </ul><a href="../functions/processpay.php" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to checkout</a>

              
                <?php
                foreach($every_item as $cart){
                  $product_id=$cart['product_id'];
                  $product_name=$cart['product_title'];
                  $product_price=$cart['product_price'];
                  $product_desc=$cart['product_desc'];
                  $product_qty=$cart['qty'];

                  echo "<tr>
                  <th scope='row' class='border-0'>
                    <div class='p-2'>
                      <img src='https://bootstrapious.com/i/snippets/sn-cart/product-1.jpg' alt='' width='70' class='img-fluid rounded shadow-sm'>
                      <div class='ml-3 d-inline-block align-middle'>
                        <h5 class='mb-0'> <a href='#' class='text-dark d-inline-block align-middle'>$product_name</a></h5><span class='text-muted font-weight-normal font-italic d-block'> description: $product_desc</span>
                      </div>
                    </div>
                  </th>
                  <td class='border-0 align-middle'><strong>$product_price</strong></td>
                  <td class='border-0 align-middle'><strong>$product_qty
                  <a class='btn btn-danger' href='../functions/add_cartprocess.php?product_id=$product_id&subtract=' role='button'>-</a>
                  <a class='btn btn-success' href='../functions/add_cartprocess.php?product_id=$product_id&addbutton=' role='button'>+</a>
                  
                  </strong></td>
                  <td class='border-0 align-middle'><a href='../functions/delete_cart.php?id=$product_id' class='text-danger'><i class='bi bi-trash-fill'></i></a></td>
                </tr>";
                }

                echo "<h1> Total Amount: GHC $amt </h1>";
                ?>
                 <tr>
                  
                   

      <!-- <div class="row py-5 p-4 bg-white rounded shadow-sm">
        <div class="col-lg-6">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Coupon code</div>
          <div class="p-4">
            <p class="font-italic mb-4">If you have a coupon code, please enter it in the box below</p>
            <div class="input-group mb-4 border rounded-pill p-2">
              <input type="text" placeholder="Apply coupon" aria-describedby="button-addon3" class="form-control border-0">
              <div class="input-group-append border-0">
                <button id="button-addon3" type="button" class="btn btn-dark px-4 rounded-pill"><i class="fa fa-gift mr-2"></i>Apply coupon</button>
              </div>
            </div>
          </div>
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Instructions for seller</div>
          <div class="p-4">
            <p class="font-italic mb-4">If you have some information for the seller you can leave them in the box below</p>
            <textarea name="" cols="30" rows="2" class="form-control"></textarea>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
          <div class="p-4">
            <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
            <ul class="list-unstyled mb-4">
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>$390.00</strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>$10.00</strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>$0.00</strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                <h5 class="font-weight-bold">$400.00</h5>
              </li> -->
          
          <!-- </div>
        </div>
      </div>

    </div>
  </div>
</div>   -->

<!-- <h1>Cart Items</h1>

<br><br>

<button type="button" onclick = "document.location= 'viewall_products.php'"><b>All Products</b></button>
<p> Total number of items in the cart: <b><?php echo $count_cart[0]['SUM(qty)'] ?></b></p>

<br><br>
    

<?php
// $cart_option = select_cart_ctrl($cid);
// //print_r($cart_option);
    
//     //if ($product_option) {
//         foreach($cart_option as $cart_one){
//             // print_r($cart_one);
//             $product_name = $cart_one['product_title'];
//             // echo "$product_name";
//             $product_price = $cart_one['product_price'];
//             $product_desc = $cart_one['product_desc'];
//             $product_image = $cart_one['product_image']; 

            //echo "<option value = $product_id>$product_name</option>";
        

    
    //else {echo "<option value = 'not available'>product not found</option>";
    
      // if ($_SERVER['REQUEST_METHOD'] == "POST"){
      //   $pid = $_POST['pid'];
      //   $txtbox = $_POST['cartitem'];

      //   $update_textbox = update_textbox_ctrl($pid, $cid, $txtbox);
      //   if ($update_textbox) {
      //     header("Location: cart.php");
      // }
      // else{
      //     return false;
      // }

      // }

?>

<div class="container">
  
  <div class="card-columns">
    <div class="card bg-primary">
      <!- Image of the product-->
      <!-- <img src="<?php echo $cart_one['product_image']?>" style="width: 350px; height: 150px">
      <div class="card-body text-center">
        <p class="card-text"><?php echo $cart_one['product_title']?></p>
        <p class="card-text"><b>$<?php echo $cart_one['product_price']?></b></p>
        
        <form method="POST" action="../functions/remove_from_cart.php">
        <label for="text"><b>Item Quantity</b></label><br>
        <input type="hidden" name="pid" value="<?php echo $cart_one['product_id'] ?>">
        <input type="number" name="cartitem" value="<?php echo $cart_one['qty']?>">
        <button type="submit"><b>Update</b></button>
        </form>

        <form action="../functions/remove_from_cart.php" method="GET">
          <input type="hidden" name="id" value="<?php echo $cart_one['product_id'] ?>">
        <button type="submit"><b>Delete</b></button> 
        </form>
        <br>
       <!-  <form action="../actions/add_to_cart.php" method="POST">
          <input type="hidden" name="pid" value="<?php //echo $cart_one['product_id']?>">
        <button type="submit"><b>Add to Cart</b></button> 
        </form> -->
      </div>
    </div>    
    
  <!-- </div>
</div> 
<?php ?>
<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<h3>Total Price: GHS <?php echo $total_price["SUM(cart.qty * products.product_price)"]?>.00</h3>
<button type="button" onclick = "document.location= 'payment.php'"><b>Checkout</b></button>  -->

</body> 
</html>