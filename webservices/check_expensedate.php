

<?php
include('config.php');

if (isset($_POST) && !empty($_POST)) {

$data = json_decode(file_get_contents("php://input"), true);

$userId = $_POST["user_id"];
$expenseDate = $_POST["date"];

$qry = "Select * from add_expense where user_id = '$userId' and expense_date = '$expenseDate' ";

$sql = mysqli_query($con, $qry);

$isExpenseAdded = mysqli_num_rows($sql) != 0;

$result = array('status' => 200, 'is_expense_added' => $isExpenseAdded);

} else
$result = array('status' => 500, 'message' => $_SERVER['REQUEST_METHOD'] . ' request is not allowed.');

die(json_encode($result));

?>