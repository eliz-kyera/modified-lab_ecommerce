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
   <button><a href="../functions/add_cartprocess.php" class="card-link">Add To Cart</a></button>
    <!-- <a href="#" class="card-link">Another link</a> -->
  </div>
</div>
</body>
</html>

<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Single Product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body> 
 
<?php
/* 
$products = select_all_product_ctrl();

foreach($products as $product) { */

    // $pid = $_GET['id'];
        
    // $product_one = select_product_ctrl($pid);
    //print_r($product_option);

    //if ($product_option) {
        /* foreach($product_option as $product_one){ */
            // $product_id = $product_one['product_id'];
            // $product_name = $product_one['product_title']; -->

            //echo "<option value = $product_id>$product_name</option>";
        

    
    //else {echo "<option value = 'not available'>product not found</option>";
    




?>

<div class="container">
  
  <div class="card-columns">
    <div class="card bg-primary">
      <!- Image of the product -->
      <!-- <img src="<?php echo $product_one['product_image']  ?>" style="width: 350px; height: 150px">
      <div class="card-body text-center">
        <p class="card-text"><?php echo $product_one['product_title']?></p>
        <p class="card-text"><b>$<?php echo $product_one['product_price']?></b></p>
        <p class="card-text"><?php echo $product_one['product_desc']?></p>
        <p class="card-text"><?php echo $product_one['product_keywords']?></p>
        -->
        <!-- <button type="button" onclick = "document.location= 'view/single_product.php'"><b>View More</b></button>  -->
        <!-- <button type="button" onclick = "document.location= ''"><b>Add to Cart</b></button> 
      </div>
    </div>   
    
  </div>
</div>

</body>
</html> -->


// only accepts image
//accept=image/*

only accepts this type of image format
// accept= image/png, image/jpeg