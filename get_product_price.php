<?php
include('config.php');
$product_id = $_POST['product_id'];

if($product_id){
    $Query= "SELECT product_price FROM `product` WHERE id=$product_id";
    $sql = mysqli_query($conn, $Query);
    if(mysqli_num_rows($sql) > 0){
        $expensedta = array();
        while($row = mysqli_fetch_assoc($sql)){
            $expensedta[] = $row;
        }
       echo json_encode($expensedta);

    }else{
        $result = array('status' => 500);

    }

}


?>