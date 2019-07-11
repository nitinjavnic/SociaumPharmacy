<?php
include('config.php');

if(!empty($_POST) && isset($_POST)){
	
	$user_id = $_POST['user_id'];
	$travel_from = $_POST['from'];
	$travel_to = $_POST['to'];
	$visitor_name = $_POST['visitor'];
	$travel_cost = $_POST['travel_cost'];
	$food_cost = $_POST['food'];
	$extra_cost = $_POST['extra'];
	$miscellaneous = $_POST['miscellaneous'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$expense_date=$_POST['expense_date'];
	$comment = $_POST['comment'];
	
	
		
		$insertQuery = "insert into add_expense (user_id, travel_from, travel_to, visitor_name, travel_cost,  food_cost, extra_cost, miscellaneous_cost, month, year, comment, expense_date, status, created_on, modified_on) value 
		('$user_id', '$travel_from', '$travel_to' ,'$visitor_name', '$travel_cost', '$food_cost', '$extra_cost', '$miscellaneous','$month', '$year', '$comment','$expense_date', '0', '$dateTime', '$dateTime') "; 

		$insertResult = mysqli_query($con, $insertQuery);
		
		if($insertResult) { // check if query is executed successfully
			$userData = array('expense_id' => mysqli_insert_id($con));
			$result = array('status' => 200, 'message' => 'expense added',  'data' => $userData);
		} else {
			$result = array('status' => 500, 'message' => 'not added');
		}
		
// 	} else { // old user i.e return data
		
// 		$userData = mysqli_fetch_assoc($queryResult);
// 		$result = array('status' => 200, 'message' => 'You are an existing user', 'is_user_new' => false, 'user_data' => $userData);
		
// 	}
	
} else {
	
    $result = array('status' => 500, 'message' => $_SERVER['REQUEST_METHOD'] . ' request is not allowed.');

}

die(json_encode($result));

?>