<?php
include('../db_connect.php');
  $dt1 = "Asia/Tashkent";
     date_default_timezone_set($dt1); 
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(isset($_POST['save'])){

	$id = $_POST['id'];
	$job_name=$_POST['job_name'];
	$branch_name=$_POST['branch_name'];
	$vil_nomi=$_POST['vil_nomi'];
    $bolim=$_POST['bolim'];
    $lavozim=$_POST['lavozim'];
    $stavka=$_POST['stavka'];
    $maosh=$_POST['maosh'];
    $malaka=$_POST['malaka'];
    $ish_soni=$_POST['ish_soni'];
    $daraja=$_POST['daraja'];
    $ish_turi=$_POST['ish_turi'];
    $tolov_shakli=$_POST['tolov_shakli'];
    $tashkilot_nomeri=$_POST['tashkilot_nomeri'];
    $kadr_nomeri=$_POST['kadr_nomeri'];
    $qisqacha=$_POST['qisqacha'];

 	$date = $_POST['date'];
    $job_id = $_POST['job_id'];
    $dt2=date("Y-m-d H:i:s");
    $job_id =md5($dt2);

mysqli_query($db,"UPDATE `admin_post` SET 
	`job_name`='$job_name',`branch_name`='$branch_name', `vil_nomi`='$vil_nomi', `bolim`='$bolim', `lavozim`='$lavozim', `stavka`='$stavka', `maosh`='$maosh', `malaka`='$malaka', `ish_soni`='$ish_soni', `daraja`='$daraja', `ish_turi`='$ish_turi', `tolov_shakli`='$tolov_shakli', `tashkilot_nomeri`='$tashkilot_nomeri', `kadr_nomeri`='$kadr_nomeri', `qisqacha`='$qisqacha' WHERE id = '$id'");

mysqli_close($db);
header("Location:ads.php");
}
?> 

