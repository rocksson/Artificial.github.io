<?php
include('connect.php');

$sql = "select * from contact";


$user = $_POST["username"];
$email = (isset($_POST['$email']) ? $_POST['$email'] : null);
$mobile = $_POST["mobile"];
$comments = $_POST["comments"];

$query = " insert into contact (user, email, mobile, comments)
values ('$user', '$email', '$mobile', '$comments') ";

echo "$query";

mysqli_query($db, $query);
?>
