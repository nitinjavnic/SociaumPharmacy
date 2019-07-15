<?php
session_start();
include('config.php');
if(isset($_POST['submit'])){
    $region = $_POST['region'];
    $area= $_POST['area'];
    $headquator= $_POST['headquator'];
    $r="Select * from add_area where state='$region' && headquator='$headquator'";
    $query=mysqli_query($conn,$r);
    if(mysqli_num_rows($query)==0){
        $q = "INSERT INTO add_area (state, area,headquator) VALUES ('$region','$area','$headquator')";
    }
    else
    {
        $location='add_area.php';
        header("Location: $location?message=Already Exists!");
        // header('Location: add_area.php')
    }
    $query = mysqli_query($conn,$q);
    if($query){
        $location='area_list.php';
        header("Location: $location?message=Area Added successfully!");


    }


}


?>