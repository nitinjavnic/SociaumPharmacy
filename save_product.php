<?php
include('config.php');

if(isset($_POST['submit'])){

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    move_uploaded_file($_FILES["product_image"]["tmp_name"],"uploads/product_image/" . $_FILES["product_image"]["name"]);
    $picture=$_FILES["product_image"]["name"];
    $r="Select * from product where product_name='$product_name'";
    $query=mysqli_query($conn,$r);
    if(mysqli_num_rows($query)==0){
        $sql1  = "INSERT INTO `product` (`product_name`, `product_price`, `product_image`)
         VALUES ('$product_name', '$product_price', '$picture')";
        $query = mysqli_query($conn, $sql1);
        echo "<script>alert('Product added successfully!')</script>";
    }

    else
    {

        echo "<script>alert('Product Name already exist!')</script>";
    }









}





?>
