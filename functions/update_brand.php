<?php

include ('../Controllers/product_controller.php');

$brand_id= $_GET['brand_id'];



if (isset($_POST['submit'])) {
    

    $new_name = $_POST['brand_name'];


    $run = update_brand_name($brand_id, $new_name);

    if ($run) {
        header('location: ../View/brand.php'); 
    } else {
        echo "update failed"; 
    }
  
  } 







?>

<div class="container">
          <h1 id="title" style="text-align: left;">Update Brand</h1>
          <form method="POST" action="" style='padding-bottom: 10px;'>
          <div class="form-row">
          <input name="brand_id" value="<?php echo $brand_id; ?>" type="hidden">
            <div class="col">
              <input type="text" class="form-control" name='brand_name' value="<?php echo $_GET['brand_name'];// if(isset($_GET['brand_name'])){echo $brand_name;}  ?>"placeholder="Brand Name">
            </div>
            <div class="col">
              <input type="submit" class="btn btn-primary" name="submit" value="Update">
            </div>
          </div>