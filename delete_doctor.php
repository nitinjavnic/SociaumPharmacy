<?php
include('config.php');
    $doctor_id = $_POST['doctor_id'];

    $query = "DELETE FROM `doctor` WHERE id = $doctor_id";

    $result = mysqli_query($conn,$query);
    if($result){
        echo json_encode('success');

    }else{
        $location='edit_doctor.php';
        echo json_encode('success');
    }

?>
