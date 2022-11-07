<?php
require_once("../Controllers/product_controller.php");
require_once("../Controllers/category_controller.php");
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     
    <title>Brands</title>
</head>

<body>
<?php
include("./navigation.php");
?>
    
        <!-- <div class="container"> -->
        <h1 id="title" style="text-align: left;">Add Product</h1>
        <form method="POST" action="../functions/createproduct.php" style='padding-bottom: 10px;'>
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
                // require_once("../Controllers/category_controller.php");

                $data = get_categories();
                var_dump($data);
                foreach ($data as $key => $value) {

                    $name = $value['cat_name'];
                    $cat_id = $value['cat_id'];

                    echo "<option value= '$cat_id' >$name</option>";
                }
                ?>
            </select>

            <div class="form-control"> 
                <input type="text" placeholder="Product title" name="ptitle" id="ptitle">
             </div> 

            <div class="form-control">
                <input type="number" placeholder="Price" name="pprice" id="pprice">
            </div>

            <div class="form-control">

                <input type="text" placeholder="description" class="form-control" id="pdesc" name="pdesc">

            </div>

            <div class="form-control">
                <input type="text" placeholder='keyword' name="pkeyword" id="pkeyword">
            </div>

            <div class="col">
                <input type="submit" class="btn btn-primary" name="submit">
            </div>

            <br>
    </form>
        <?php
        
        $data = get_products();

        

        echo "<h1 id='title' style='text-align: left;'>View All Products</h1>";

        foreach($data as $key=>$value) {


          $product_id= $value['product_id'];
          $product_brand= $value['product_brand'];
          $product_cat = $value['product_cat'];
          $product_title = $value['product_title'];
          $product_price = $value['product_price'];
          $product_desc = $value['product_desc'];
          $product_keywords = $value['product_keywords'];
        
      
          echo "<li class='list-group-item'>". $product_title . $product_price . $product_desc. $product_keywords."<a href='../functions/update_product.php?product_id=$product_id&product_title=$product_title&product_cat=$product_cat&product_brand=$product_brand&product_price=$product_price&product_desc=$product_desc&product_keywords=$product_keywords'> <button type='button' class='btn btn-success'>Update</button> </a>" ."<a href='../functions/delete_product.php?pid=$product_id'> <button type='button' class='btn btn-danger'>Delete</button> </a> </li>";
        }

        ?>
        
        


        <!--Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
   </body>
</html>