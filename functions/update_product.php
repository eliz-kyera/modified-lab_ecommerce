<?php
include ('../Controllers/product_controller.php');

$product_id= $_GET['product_id'];
$update_products= $_GET['product_title'];
$update_products_price= $_GET['product_price'];
$update_products_desc= $_GET['product_desc'];
$update_products_keywords= $_GET['product_keywords'];

// $cat_id = $cat_id + 1; 

if (isset($_POST['submit'])) {
    $product_id=$_POST['product_id'];
  
    $brand_name=$_POST['product_brand'];
    
    $cat_name=$_POST['product_cat'];
   
    $new_name = $_POST['product_title'];
  
    $new_price = $_POST['product_price'];
  
    $new_desc = $_POST['product_desc'];
    
    $new_keywords = $_POST['product_keywords'];
   


    $run = update_products($product_id,$cat_name,$brand_name,$new_name, $new_price, $new_desc, $new_keywords);


    if ($run==true) {
        header('location: ../View/addproductform.php'); 
    } else {
        echo "update failed"; 
    }
  
  } 







?>

<div class="container">
          <h1 id="title" style="text-align: left;">Update Products</h1>
          <form method="POST" action="" style='padding-bottom: 10px;'>
          <div class="form-row">
          <input name="product_id" type="text" value="<?php echo $product_id; ?>" hidden>
          <select name="product_brand">
                <?php
                 

                
                
                
           
                // require_once("../Controllers/product_controller.php");


                $data = get_brands();
                foreach ($data as $key => $value) {

                    $name = $value['brand_name'];
                    $brand_id = $value['brand_id'];

                    echo "<option value= '$brand_id' >$name</option>";
                }
                ?>



            </select>

            <select name="product_cat">
                <?php
                require_once("../Controllers/category_controller.php");

                $data = get_categories();
                var_dump($data);
                foreach ($data as $key => $value) {

                    $name = $value['cat_name'];
                    $cat_id = $value['cat_id'];

                    echo "<option value= '$cat_id' >$name</option>";
                }
                ?>
            </select>
            <input type = 'text' name= 'product_id' value= "<?php echo $_GET['product_id'];// if(isset($_GET['brand_name'])){echo $brand_name;}  ?>">
            <div class="col">
             <input type="text" class="form-control" name='product_title' value="<?php echo $_GET['product_title'];// if(isset($_GET['brand_name'])){echo $brand_name;}  ?>"placeholder="Product Name">
            </div>
            <div class="col">
              <input type="text" class="form-control" name='product_price' value="<?php echo $_GET['product_price'];// if(isset($_GET['brand_name'])){echo $brand_name;}  ?>"placeholder="Product Price">
            </div>
            <div class="col">
              <input type="text" class="form-control" name='product_desc' value="<?php echo $_GET['product_desc'];// if(isset($_GET['brand_name'])){echo $brand_name;}  ?>"placeholder="Product Description">
            </div>
            <div class="col">
              <input type="text" class="form-control" name='product_keywords' value="<?php echo $_GET['product_keywords'];// if(isset($_GET['brand_name'])){echo $brand_name;}  ?>"placeholder="Product Name">
            </div>
            <div class="col">
              <input type="submit" class="btn btn-primary" name="submit" value="Update">
            </div>
          </div>