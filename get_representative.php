<?php
include('config.php');
$manager = $_POST['manager'];

if($manager){
    $Query= "SELECT first_name FROM users INNER JOIN area_list ON area_list.user_id=users.user_id WHERE users.role=3 && area_list.user_id=$manager";

    $sql = mysqli_query($conn, $Query);
    if(mysqli_num_rows($sql) > 0){
        $expensedta = array();
        while($row = mysqli_fetch_assoc($sql)){
            $expensedta[] = $row;
        }
        $result = array('status' => 200, 'message' => 'area_list', 'data' => $expensedta);

    }else{
        $result = array('status' => 500, 'message' => 'No result found');

    }

}

die(json_encode($result));

?>