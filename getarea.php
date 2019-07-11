<?php
include('config.php');
if(!empty($_POST) && isset($_POST)){
    $user_id = $_POST['userId'];
    $qry = "Select id, area_name from area_list where user_id=$user_id";
    $sql = mysqli_query($conn, $qry);
        $expensedta = array();
        while($row = mysqli_fetch_assoc($sql)){
            $expensedta[] = $row;
        }
        echo json_encode($expensedta);

}


?>