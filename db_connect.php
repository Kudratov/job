<?php
ob_start();
// $test=$_SERVER['QUERY_STRING'];
 $db = new mysqli("localhost","root","");
 
   if($db->connect_errno > 0){
         die('Unable to connect to database [' . $db->connect_error . ']');  } 
     
	 $db->query("CREATE DATABASE IF NOT EXISTS `job`");
	 
            mysqli_select_db($db,"job"); 
            mysqli_set_charset($db,"utf8");
			 
					
?>