<?php

include ('../Controllers/category_controller.php');

$cat_id= $_GET['cat_id'];
$update_categories_name= $_GET['cat_name'];

// $cat_id = $cat_id + 1; 

if (isset($_POST['submit'])) {
    

    $new_name = $_POST['cat_name'];


    $run = update_category_name($cat_id, $new_name);

    if ($run) {
        header('location: ../View/category.php'); 
    } else {
        echo "update failed"; 
    }
  
  } 







?>

<div class="container">
          <h1 id="title" style="text-align: left;">Update Category</h1>
          <form method="POST" action="" style='padding-bottom: 10px;'>
          <div class="form-row">
          <input name="brand_id" type="text" value="<?php echo $cat_id; ?>" hidden>
            <div class="col">
              <input type="text" class="form-control" name='cat_name' value="<?php echo $_GET['cat_name'];// if(isset($_GET['brand_name'])){echo $brand_name;}  ?>"placeholder="Brand Name">
            </div>
            <div class="col">
              <input type="submit" class="btn btn-primary" name="submit" value="Update">
            </div>
          </div>