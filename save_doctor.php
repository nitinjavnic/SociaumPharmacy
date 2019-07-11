<?php
include('config.php');

if(isset($_POST['submit'])){

    $fname = $_POST['fname'];
    $address = $_POST['address'];
    $qualification = $_POST['qualification'];
    $specialist = $_POST['specialist'];
    $phone = $_POST['phone'];
    $date_of_birth = $_POST['dob'];

    $r="Select * from doctors where phone='$phone'";
    $query=mysqli_query($conn,$r);
    if(mysqli_num_rows($query)==0){

        $sql1  = "INSERT INTO `doctor` (`first_name`, `address`, `qualification`, `speciality`, `phone`, `dob`)
         VALUES ('$fname', '$address', '$qualification', '$specialist', '$phone', '$date_of_birth')";
        $query = mysqli_query($conn, $sql1);
        echo "<script>alert('Record added successfully!')</script>";
    }

    else
    {

        echo "<script>alert('Email already exist!')</script>";
    }









}





?>
