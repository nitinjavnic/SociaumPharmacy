<?php
include('config.php');

if(isset($_POST['submit'])){

    $product_id = $_POST['product_id'];
    $product_price = $_POST['product_price'];
    $product_qty = $_POST['product_qty'];
    $total_price = $_POST['total_price'];
    $area_id = $_POST['area_id'];
        $sql1  = "INSERT INTO `sale_data` (`product_id`,`area_id`,`product_price`,`product_qty`,`total_price`)
         VALUES ('$product_id','$area_id','$product_price','$product_qty','$total_price')";

         $query = mysqli_query($conn, $sql1);
         if($query){
             $location='list_sale_data.php';
             header("Location: $location?message=Sale data Added successfully!");


         }else{
             $location='add_sale.php';
             header("Location: $location?message=Something Went wrong!");



         }


}





?>
