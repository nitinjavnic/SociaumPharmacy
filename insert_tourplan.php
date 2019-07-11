<?php
session_start();
include('config.php');
if(isset($_POST['submit'])){

    $date = $_POST['date'];
    $employee= $_POST['employee'];
    $area= $_POST['area'];
    $r="Select * from tour_plan where state='$area'";
    $query=mysqli_query($conn,$r);
    if(mysqli_num_rows($query)==0){
        $q = "INSERT INTO tour_plan (date, employee,area) VALUES ('$date','$employee','$area')";
    }
    else
    {
        $location='add_area.php';
        header("Location: $location?message=Already Exists!");
        // header('Location: add_area.php')
    }
    $query = mysqli_query($conn,$q);
    if($query){
        $location='add_area.php';
        header("Location: $location?message=Area Added successfully!");
        // header('Location: add_area.php');

    }


}


?>