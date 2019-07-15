<?php
include('config.php');
$doctor_id = $_POST['id'];

$query = "DELETE FROM `sale_data` WHERE id = $doctor_id";

$result = mysqli_query($conn,$query);
if($result){
    echo json_encode('success');

}else{
    echo json_encode('success');
}

?>
