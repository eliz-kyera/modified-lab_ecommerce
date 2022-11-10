<?php



    function getRealIpAddr(){
 if ( !empty($_SERVER['HTTP_CLIENT_IP']) ) {
  // Check IP from internet.
  $ip = $_SERVER['HTTP_CLIENT_IP'];
 } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
  // Check IP is passed from proxy.
  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
 } else {
  // Get IP address from remote address.
  $ip = $_SERVER['REMOTE_ADDR'];
 }
 return $ip;
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../view/index.php">Shida's Shoppn</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<?php

session_start();

if (isset($_SESSION['email'])){
    if($_SESSION['user_role'] == 1){
    //if user is admin
    ?>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="../Login/logout.php">logout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="brand.php">Brand</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="category.php">Category</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addproductform.php">Products</a>
      </li>
     
    </ul>
  </div>
<?php
    }else{
        //if user is customer
    ?>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="../Login/logout.php">logout</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="../Login/register.php">Register</a>
        <li class="nav-item"> -->
        <a class="nav-link" href="viewall_products.php">All Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../Login/logout.php">Cart</a>
      </li>
      <!-- </li>
      <li class="nav-item">
        <a class="nav-link" href="">All Products</a>
      </li> -->
      
       
    </ul>

  </div>

<?php
    }}else{
?>
<!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="../Login/login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../Login/register.php">Register</a>
      </li>
   
    </ul>

  </div> -->
<?php
}?>

  <form class="form-inline my-2 my-lg-0" method="GET" action="search_product.php">
<!-- <a class="nav-link" href="shoppnhome.php">Home <span class="sr-only"></span></a> -->
      <input class="form-control mr-sm-2" type="search" placeholder="Search by title" aria-label="Search" name="search" >
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      
    </form>
</nav> 



