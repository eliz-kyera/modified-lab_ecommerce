<?php require("../controllers/product_controller.php");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Search Result</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="../css/search.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

<!-- <form class="form-inline my-2 my-lg-0" method="GET" action="search_product.php">
<!-<a class="nav-link" href="shoppnhome.php">Home <span class="sr-only"></span></a> -->
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search by title" aria-label="Search" name="search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button>
      
    </form> --> 

    <!-- <nav class="navbar navbar-light bg-light">
        <a class="nav-link" href="homepage.php">Home <span class="sr-only"></span></a>
        <form action="search_product.php" method="GET">
            <input type="text" placeholder="Search by title..." name="search" id="search">
            <button type="submit"><b>Search</b></button>
        </form>
    </nav> -->

    <?php
    $search = $_GET['search'];


    $product_search = search_products($search);

    foreach ($product_search as $product_one) {
        $product_id = $product_one['product_id'];
        $product_name = $product_one['product_title'];

    ?>





        <div class="container">
            <br>



            <!-- <div class="card-columns">
    <div class="card bg-primary"> 
      Image of the product
      
      <div class="card-body text-center">
        <p class="card-text"><?php echo $product_one['product_title'] ?></p>
        <p class="card-text"><b>$<?php echo $product_one['product_price'] ?></b></p>
        <p class="card-text"><?php echo $product_one['product_desc'] ?></p>
        <p class="card-text"><?php echo $product_one['product_keywords'] ?></p>
       
        <button type="button" onclick = "document.location= 'view/single_product.php'"><b>View More</b></button> 
        <br><br>
       <button type="button" onclick = "document.location= ''"><b>Add to Cart</b></button> 
      </div>
    </div>    -->

            <div class="container page-wrapper">
                <div class="page-inner">
                    <div class="row">
                        <div class="el-wrapper">
                      
                            <div class="box-up">
                                <img class="img" src="" alt="">
                                <div class="img-info">
                                    <div class="info-inner">
                                        <span class="p-name"><?php echo $product_one['product_keywords'] ?></span>
                                        <span class="p-company"><?php echo $product_one['product_title'] ?></span>
                                    </div>
                                    <div class="a-size"><?php echo $product_one['product_desc'] ?></span></div>
                                </div>
                            </div>

                            <div class="box-down">
                                <div class="h-bg">
                                    <div class="h-bg-inner"></div>
                                </div>

                                <a class="cart" href="#">
                                    <span class="price">GH???:<?php echo $product_one['product_price'] ?></span>
                                    <span class="add-to-cart">
                                        <button onclick= "window.location.href='../functions/add_cartprocess.php?product_id= <?php echo $product_id;?>'" class="txt btn btn-primary" >Add To Cart</button>
                                        <?php
                                        // echo "<a href='../functions/add_cartprocess.php?product_id= $product_id type='button' class='btn btn-primary'>Add </a></td> ";
                                         ?>

                                       
                                        
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    <?php } ?>

</body>

</html>