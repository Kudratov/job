<?php
include('../db_connect.php');
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$id = $_GET['id'];

mysqli_query($db," DELETE FROM apply WHERE id='".$id."' ");
mysqli_close($db);
header("Location:index.php");
?> 