<?php 
session_start();

	$login = "";
	$password = "";
	//$viloyatc=$_POST['viloyatc'];
	//$filialc=$_POST['filialc'];


	include('db_connect.php');

	if(isset($_POST['log'])){
		
		$login = mysqli_real_escape_string($db, $_POST['staff_login']);
		$password = mysqli_real_escape_string($db, $_POST['staff_password']);
		$viloyat_id = mysqli_real_escape_string($db, $_POST['viloyat_id']);
		// $filialc = mysqli_real_escape_string($db, $_POST['filialc']);
		// $staff_xodim = mysqli_real_escape_string($db, $_POST['xodim']);

		if($login!="" && $password!="" && $viloyat_id!=""){
			$sql="SELECT * FROM branch_emp WHERE  login='$login' AND password='$password' AND branch_id='$viloyat_id'";
			$result = mysqli_query($db, $sql);
			$row = mysqli_fetch_array($result);
			$count = mysqli_num_rows($result);

			if($count==1){
				//  
			//	echo "YES";
				$_SESSION['staff_login'] = $login;
				// $_SESSION['xodim']=$staff_xodim;
				// $_SESSION['filialc'] = $filialc;   //  extra to use sessions
				//$_SESSION['viloyatc'] = $staff_login;   // . . .

				//$_SESSION['success'] = "You are now logged in";
				
				  header("Location: admin/basic_elements.php");
				echo "DONE";
			}

else{
					echo "<h2><center>XATOLIK</center></h2><br><a type='submit' href='login.php'>Qaytish Login 
					</a><&nbsp;&nbsp;&nbsp;<a type='submit' href='staff_login.php'>Qaytish Register </a>
					";
				//header("location:login.php");
			}
	
	
		

		}
	}
?>