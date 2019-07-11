<?php
session_start();
include('config.php');
if(isset($_POST['submit'])){
    $from = $_POST['from'];
    $to= $_POST['to'];
    $amount= $_POST['amount'];
    $r="Select from_area_id from  travel_cost where from_area_id=$from";
    $sql = mysqli_query($conn, $r);
    $data = array();
    while($row = mysqli_fetch_assoc($sql)) {
        $data[] = $row;
    }
    $check_id = $data[0]['from_area_id'];
    if($check_id ==$from) {
        $q = "INSERT INTO travel_cost (from_area_id, to_area_id,area_amount) VALUES ('$from','$to','$amount')";
        $query = mysqli_query($conn, $q);
        if ($query) {
            $location = 'add_area.php';
            header("Location: $location?message=Area Added successfully!");
        }

    }else{
        echo "<script>alert('Please select another area!')</script>";

    }
}


?>