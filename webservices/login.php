<?php
include('config.php');

if(!empty($_POST) && isset($_POST)){
	
	$e = $_POST['username'];
	$p = $_POST['password'];
	
	$qry = "Select * from users where ( email = '$e' or phone = '$e' ) and password = '$p'";
	
	$sql = mysqli_query($con, $qry);
	
	if(mysqli_num_rows($sql) > 0){
		
		$row = mysqli_fetch_assoc($sql);
		
		$result = array('status' => 200, 'msg' => 'Login successfully', 'data' => $row);
		
	}else
		
		$result = array('status' => 500, 'msg' => 'Invalid Credentials');
	
	die(json_encode($result));
	
}
?>