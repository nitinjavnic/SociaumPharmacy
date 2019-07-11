<?php
include('config.php');
if(!empty($_POST) && isset($_POST)){
	$area = $_POST['area'];

	$qry = "Select * from sale where area = '$area'";
	
	$sql = mysqli_query($con, $qry);
	
	if(mysqli_num_rows($sql) > 0){
		
$saledate = array();
		while($row = mysqli_fetch_assoc($sql)){
$saledate[] = $row;
}
		
		$result = array('status' => 200, 'message' => 'sale date', 'data' => $saledate);
		
	}else
		
		$result = array('status' => 500, 'message' => 'No data found');
} else {
	
    $result = array('status' => 500, 'message' => $_SERVER['REQUEST_METHOD'] . ' request is not allowed.');

}
	die(json_encode($result));
	

?>