<?php
include('config.php');

if(!empty($_POST) && isset($_POST)){
	
	$user_id = $_POST['user_id'];
	$department = $_POST['department'];
	$title = $_POST['title'];
	$feedback = $_POST['feedback'];

		
	$insertQuery = "insert into user_feedback (user_id, department, title, feedback, created_on, modified_on) values 
	('$user_id', '$department', '$title', '$feedback', '$dateTime', '$dateTime') "; 
		
		$insertResult = mysqli_query($con, $insertQuery);
		
		if($insertResult) { // check if query is executed successfully
			$userData = array('feedback_id' => mysqli_insert_id($con));
			$result = array('status' => 200, 'message' => 'your feedback has been received',  'data' => $userData);
		} else {
			$result = array('status' => 500, 'message' => 'error');
		}
	
} else {
	
    $result = array('status' => 500, 'message' => $_SERVER['REQUEST_METHOD'] . ' request is not allowed.');

}

die(json_encode($result));

?>