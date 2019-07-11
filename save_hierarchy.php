<?php
include('config.php');
if(!empty($_POST) && isset($_POST)){

    $superadmin = $_POST['superadmin'];
    $manager = $_POST['manager'];
    $rep = $_POST['rep'];
    $area_id = $_POST['area_id'];
    $r="Select * from maintain_hierarchy where representative_id='$rep' && manager_id='$manager'";
    $query=mysqli_query($conn,$r);
    if(mysqli_num_rows($query)==0) {
            $q = "INSERT INTO maintain_hierarchy (super_admin_id, manager_id,representative_id,area_id) 
            VALUES ('$superadmin','$manager','$rep','$area_id')";
            $query = mysqli_query($conn,$q);
            if($query){
                echo "successs";
            }

    }else {
            echo "already exist!";
    }

}


?>