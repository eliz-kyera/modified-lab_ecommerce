<?php
// include("../Controller/product_controller.php");


include("./navigation.php");


$product_id= $_GET['product_id'];
$update_products= $_GET['product_title'];
$update_products_price= $_GET['product_price'];
$update_products_desc= $_GET['product_desc'];
$update_products_keywords= $_GET['product_keywords'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
</head>
<body>
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $update_products; ?></h5>
    <p class="card-text"><<?php echo $update_products_desc; ?>/p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">PRICE: <?php echo $update_products_price; ?></li>
    <li class="list-group-item">kEYWORDS: <?php echo $update_products_keywords; ?></li>
    <!-- <li class="list-group-item"></li> -->
  </ul>
  <div class="card-body">
   <button><a href="#" class="card-link">Add To Cart</a></button>
    <!-- <a href="#" class="card-link">Another link</a> -->
  </div>
</div>
</body>
</html>

// only accepts image
//accept=image/*

only accepts this type of image format
// accept= image/png, image/jpeg