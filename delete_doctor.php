<?php
include('config.php');
    $doctor_id = $_GET['doctor_id'];
    $query = "DELETE FROM `doctor` WHERE id = $doctor_id";
    $result = mysqli_query($conn,$query);
    if($result){
        $location='list_doctor.php';
        header("Location: $location?message=Doctor Delete Successfully!");

    }else{
        $location='edit_doctor.php';
        header("Location: $location?message=Something went Wrong!");
    }

?>
