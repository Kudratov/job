<?php



session_start();

     
include('../db_connect.php');


 if(empty($_SESSION['staff_login'])){
              header('location: ../staff_login.php');

      }
     else
     {
      $staff_login=$_SESSION['staff_login'];
     }
     




        mysqli_set_charset($db, 'utf8');
        
    $dt2 = "Asia/Tashkent";
  date_default_timezone_set($dt2);

  
      

if(isset($_POST['submit'])){
    $job_name=$_POST['job_name']; 
    $branch_name=$_POST['branch_name']; 
    $place=$_POST['place'];
    $experience=$_POST['experience'];
    $profession=$_POST['profession'];
    $job_description=$_POST['job_description'];
    $date = $_POST['date'];
    $job_id = $_POST['job_id'];
    $vil_id = $_POST['vil_id'];
    $dt2=date("Y-m-d H:i:s");
    $job_id =md5($dt2);

    $staff_login=$_SESSION['staff_login'];

       

  $sql = "INSERT INTO `admin_post` (job_name, branch_name, experience, place, profession, job_description, date, job_id) 
  VALUES
   ('$job_name','$branch_name', '$experience', '$place', '$profession', '$job_description','$dt2', '$job_id')";
  if(mysqli_query($db,$sql)){
    header("location:./basic_elements.php");
  }    else{
    echo "Error";
  }
}
?>