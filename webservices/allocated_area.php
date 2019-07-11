<?php
include('config.php');
if(!empty($_POST) && isset($_POST)){

    $userid =$_POST['user_id'];

    $qry = "Select area from users where  user_id = '$userid'";

    $sql = mysqli_query($con, $qry);

    if(mysqli_num_rows($sql) > 0){

        $expensedta = array();
        while($row = mysqli_fetch_assoc($sql)){
            $expensedta[] = $row;
        }

        $result = array('status' => 200, 'message' => 'allocated_area', 'data' => $expensedta);

    }else

        $result = array('status' => 500, 'message' => 'No result found');

} else {

    $result = array('status' => 500, 'message' => $_SERVER['REQUEST_METHOD'] . ' request is not allowed.');

}
die(json_encode($result));


?>