<?php
//connecting to database
//$conn = mysqli_connect("localhost","root","");
//fetching data
include('connect.php');
$sql = "select * from products";
$result = $db->query($sql);


$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

print_r($row);die();
$id=$row[0];
$productname=$row[1];
$price=$row[2];
$imagename=$row[3];

echo $id. "<BR>". $productname . "<BR>" . $price . "<BR>" . $imagename . "<BR>";

?>