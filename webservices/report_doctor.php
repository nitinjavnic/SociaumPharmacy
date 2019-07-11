<?php
include('config.php');

if(!empty($_POST) && isset($_POST)){
	
	$user_id = $_POST['user_id'];
	$doctor_id = $_POST['doctor_id'];
	$status = $_POST['status'];

	
	
	 	 $query1 = "select * from doctors where `employee_id` = '$user_id' && `doctor_id` = '$doctor_id'";
	$queryResult1 = mysqli_query($con, $query1);

	if(mysqli_num_rows($queryResult1) >0) {  


		 $updateQuery = "UPDATE `doctors` SET `report_status`='$status',`modified_on`='$dateTime' WHERE `employee_id` = '$user_id' and `doctor_id` = '$doctor_id'"; 
		$updateResult = mysqli_query($con, $updateQuery);
		
		if($updateResult) { 
		
$result = array('status' => 200, 'msg' => 'Reported Successfully', 'updated_time' => $dateTime);

		} else {
			$result = array('status' => 500, 'msg' => 'error');
		}

	
	} else { 
		
		$result = array('status' => 500, 'message' => 'user id does not exist');
	
	}
	
} else {
	
    $result = array('status' => 500, 'message' => $_SERVER['REQUEST_METHOD'] . ' request is not allowed.');

}

die(json_encode($result));

?>