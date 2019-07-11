<?php
include('config.php');

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $address = $_POST['address'];
    $qualification = $_POST['qualification'];
    $specialist = $_POST['specialist'];
    $phone = $_POST['phone'];
    $date_of_birth = $_POST['dob'];
    $doctor_id = $_POST['doctor_id'];
    $query = "UPDATE `doctor` SET first_name='$fname', address='$address', qualification='$qualification', speciality='$specialist', phone='$phone', dob='$date_of_birth' WHERE id=$doctor_id";

    $result = mysqli_query($conn,$query);
    if($result){
        $location='list_doctor.php';
        header("Location: $location?message=Doctor Update Successfully!!");


    }else{
        $location='edit_doctor.php';
        header("Location: $location?message=Something went Wrong!");
    }



    }




?>
