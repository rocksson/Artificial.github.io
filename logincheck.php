<?php 
session_start();
include('connect.php');
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users where email = '$email' and password = '$password'";
$result = $db->query($sql);
$num_rows = $result->num_rows;
if($num_rows == 1)
{
	$_SESSION['user'] = 1;
	echo 1;
}
else
{
	echo 0;
}
?>