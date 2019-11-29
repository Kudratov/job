<?php
include('../db_connect.php');
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


if (isset($_POST['view'])) {
$id = $_POST['id'];
$status=$_POST['status'];
$success='SUCCESS';
mysqli_query($db,"UPDATE `apply` SET status='$success' WHERE id='".$id."' ");
}
else if(isset($_POST['accept'])){
	$id = $_POST['id'];
$status=$_POST['status'];
$accept='ACCEPT';
mysqli_query($db," UPDATE apply SET status='$accept' WHERE id='".$id."'  ");
}
else if(isset($_POST['ignore'])){
	$id = $_POST['id'];
$status=$_POST['status'];
$ignore='IGNORED';
mysqli_query($db," UPDATE apply SET status='$ignore' WHERE id='".$id."'  ");
}


mysqli_close($db);
header("Location:index.php");
?> 
