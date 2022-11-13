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
include("navigation.php");
?>

<?php
$data=get_products();

echo "<h1 id='title' style='text-align: left;'>View All Products</h1>";
    echo '<table class="table">';
        echo '<thead class= "thead-dark">';
        echo '    <tr>';
        echo '    <th scope="col">#</th>';
        echo '    <th scope="col"Product Title</th>';
        echo '    <th scope="col">Product Price</th>';
        echo ' <th scope="col">Product  Description</th>';
        echo ' <th scope="col">Product  Keywords</th>';
        echo '    </tr>';
        echo '</thead>';
    foreach( $data as $key=>$value ){
        
        $p_id = $value['product_id'];
        $title = $value['product_title'];
        $price = $value['product_price'];
        $desc = $value['product_desc'];
        $keyword = $value['product_keywords']; 
       
        echo '<tbody>';
        echo '    <tr>';
        echo ' <td>'.$value['product_id'].'</td>';
        echo ' <td>'.$value['product_title'].'</td>';
        echo ' <td>'.$value['product_price']. '</td>';
        echo ' <td>'.$value['product_desc'].'</td>';
        echo ' <td>'.$value['product_keywords'].'</td>';
        // echo '<td>'.'<a href='.'../functions/update_product.php?'.'product_id='.$value['product_id'].'&product_title='.$value['product_title'].'&product_price='.$value['product_price'].'&product_desc='.$value['product_desc'].'&product_keywords='.$value['product_keywords']."<button type='button' class='btn btn-success'>Update</button></a> ". '<a href='.'./functions/delete_product.php?'.'product_id='.$value['product_id']."<button type='button' class='btn btn-danger'>Delete</button></a>";
        
        echo "<td><a href='../view/singleproduct.php?product_id=$p_id&product_title=$title&product_price=$price&product_desc=$desc&product_keywords=$keyword type='button' class='btn btn-warning'>View </a> ";
        echo "<a href='../functions/add_cartprocess.php?product_id=$p_id&product_title=$title&product_price=$price&product_desc=$desc&product_keywords=$keyword type='button' class='btn btn-primary'>Add </a></td> ";
        echo '</tr>'; 
       
    }
    echo ' </tbody>
        </table>';
?>
     


        <!--Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
   </body>
</html>