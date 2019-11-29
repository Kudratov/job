<?php 
session_start();
include('db_connect.php');
   // $id_encode=base64_encode($_SESSION['apply']);

    if(isset($_GET['resume_download'])) 
    {
        
        $id = base64_decode($_GET['resume_download']);

        $query = "SELECT resume_name, size, type, resume FROM apply WHERE get_job_id = '$id'";
        $result = $db->query($query) or die('Error, query failed');
        list($name, $size, $type, $content) = mysqli_fetch_array($result);

        header("Content-length: $size");
        header("Content-type: $type");
        header("Content-Disposition: attachment; filename=$name");
        echo $content; exit;
    }

  ?>
 
