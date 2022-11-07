<?php
include("../Controllers/category_controller.php"); 
// include("../functions/update_brand.php");


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <title>Categories</title>
  </head>
  <body>

      <?php

      include("./navigation.php");
     
      ?>

      <div class="container">
          <h1 id="title" style="text-align: left;">Add a Category</h1>
          <form method="POST" action="../functions/add_category.php" style='padding-bottom: 10px;'>
          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" name='CategoryName' placeholder="CategoryName">
            </div>
            <div class="col">
              <input type="submit" class="btn btn-primary" name="submit" value="Add">
            </div>
          </div>

        </form>

        <br>
        <!--  
        // if(isset($_GET['brand_id']))
    {
        //$brand_id=$_GET['brand_id'];
        // $data= get_brands($brand_id);
        $brand_name=$data['brand_name'];
       
    } 
    ?> -->

        </form>
        <?php
        
          $data = get_categories();

          

          echo "<h1 id='title' style='text-align: left;'>View All Categories</h1>";

          foreach($data as $key=>$value) {

            $name = $value['cat_name'];
            $cat_id = $value['cat_id'];
        
            echo "<li class='list-group-item'>". $name ."<a href='../functions/update_category.php?cat_id=$cat_id&cat_name=$name'> <button type='button' class='btn btn-success'>Update</button> </a>" ."<a href='../functions/delete_category.php?bid=$cat_id'> <button type='button' class='btn btn-danger'>Delete</button> </a> </li>";
          }
        ?>

     </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>