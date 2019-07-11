<?php
include('config.php');
if(!empty($_POST) && isset($_POST)){

    $date = $_POST['date'];
    $allemployee = $_POST['allemployee'];
    $allocated_area = $_POST['allocated_area'];
    $doctor_id = $_POST['doctor_id'];
    $r="Select * from assign_doctor where employee_id='$allemployee' && allocated_area_id='$allocated_area'";
    $query=mysqli_query($conn,$r);
    if(mysqli_num_rows($query)==0) {
        foreach ($doctor_id as $item_id => $item_qty) {
            $q = "INSERT INTO assign_doctor (date, employee_id,allocated_area_id,doctor_id) 
            VALUES ('$date','$allemployee','$allocated_area','$item_qty')";
            $query = mysqli_query($conn,$q);
            if($query){
                echo "successs";
            }
        }


    }else {
        echo "already exist!";
    }

}


?>