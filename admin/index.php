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
      if(isset($_GET['id'])){

$id=$_GET['id'];
$query = " SELECT * FROM apply WHERE `id` LIKE '$id'  ";
$result = mysqli_query($db, $query);
}



      

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <title>Agobank Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<style type="text/css">
a:hover{
  color: black;
}

</style>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="#">
          <img src="images/logo.png" alt="logo" sty/>
          
        </a>
      </div>
    
      <div class="navbar-menu-wrapper d-flex align-items-center">
        
        <ul class="navbar-nav navbar-nav-right">
        
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a   href="../staff_login.php" >
            <button type="button" class="btn btn-default btn-sm"> 
                <span class="glyphicon glyphicon-log-out"></span> Log out
            </button>            
            </a>
          </li>
        </ul>
        
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="images/faces/face1.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Kadrlar</p>
                  <div>
                    <small class="designation text-muted">Admin</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Arizalar</span>
            </a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="basic_elements.php">
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="menu-title">E'lon qo'shish</span>
            </a>
          </li> 

          <li class="nav-item">
            <a class="nav-link" href="ads.php">
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="menu-title">E'lon ko'rib chiqish</span>
            </a>
          </li>
       
       
        
        
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Arizalar</h4>
                  <div class="table-responsive">
                      <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                           F.I.O
                          </th>
                          <th>
                            Ish nomi
                          </th>
                          <th>
                            ZIP
                          </th>
                          <th>
                            Passport
                          </th>
                          <th>
                            INN
                          </th>
                          <th>
                            Tug'ilgan joyi
                          </th>
                          <th>
                            Yashash joyi
                          </th>
                          <th>
                            Oliygohi
                          </th>
                          <th>
                            Ma'lumoti
                          </th>
                          <th>
                            Mehnat daftarchasi
                          </th>
                          <th>
                            Sana
                          </th>
                          <th>
                            Status
                          </th>   
                           <th>
                            Ochirish
                          </th>
                          
                        </tr>
                      </thead>
       <?php
include('../db_connect.php');

$output = '';
if(isset($_POST["query"]))
{
 // $search = mysqli_real_escape_string($db, $_POST["query"]);
 // $query = "
 //  SELECT * FROM apply 
 //  WHERE name LIKE '%".$search."%'
 //  OR resmue LIKE '%".$search."%' 
 //  OR phone LIKE '%".$search."%' 
 //  OR info LIKE '%".$search."%' 
  
 // ";
}
else
{
 if($_SESSION['staff_login']!='admin')
  {
        $query = "
  SELECT * FROM apply WHERE viloyat_id='".$_SESSION['staff_login']."' ORDER BY date DESC
 ";
  }
  else
  {
    $query = " SELECT * FROM apply ORDER BY date DESC
 ";
  }


}
$result = mysqli_query($db, $query);
if(mysqli_num_rows($result) > 0)
{

 $output .= '';
 while($row = mysqli_fetch_array($result))
 {
  $id = $row['id'];
  ?>
  <!-- 
  F.I.O
Ish nomi
ZIP
Passport
INN
Tug'ilgan joyi
Yashash joyi
 Oliygohi
Ma'lumoti
Mehnat daftarchasi
Sana
Status
Ochirish
inn -->

                      <tbody>
                        <tr>
                          
                          <td>
                         
                             <?php echo  $row["name"]; ?>
                          </td> 
                          <td> 
                            <?php echo  $row["job_n"] ; ?>
                          </td> 

                          <td>
                            <a href ="../filedownload.php?resume_download=<?php echo base64_encode($row['get_job_id']);?>"> <?php echo $row['resume_name'] ;?></a>
                          </td>

                           <td> 
                               <?php echo  $row["pass_num"] ; ?> &nbsp;&nbsp;&nbsp; <?php echo  $row["pass_ser"] ; ?> 
                          </td>
                         
                          <td>
                            <?php echo  $row["inn"] ; ?>
                          </td>
                         

                          <td> 
                            <?php echo  $row["date_of_birth"] ; ?>
                          </td>
                        
                          <td>
                            <?php echo  $row["address"] ; ?>
                          </td> 
                          <td>
                            <?php echo  $row["university"] ; ?>
                          </td> 
                          <td>
                            <?php echo  $row["degree"] ; ?>
                          </td>
                          <td>
                            <?php echo  $row["work_anketa"] ; ?>
                          </td> 
                          <td>
                            <?php echo  $row["date"]; ?>
                          </td>
                            
                          <td>

                           <form action="status.php" method="post"> 

                              <?php if(!empty($_SESSION['staff_login'])){
                    $sql_success = $db->query("SELECT * FROM `apply` WHERE id = '$id'");
                    $result_3 = mysqli_fetch_array($sql_success);
                    if(($result_3['status'] == 'SUCCESS')  ){
                      ?>
        <button disabled  class="btn btn-primary " >
                <span class="glyphicon glyphicon-eye-open"></span>
        </button>

        <button disabled  
                class="btn btn-primary  btn-outline-primary" >
                <span class="glyphicon glyphicon-ok" ></span>           
        </button>


        <button disabled  
                class="btn btn-primary  btn-outline-primary" >
                <span class="glyphicon glyphicon-remove"  ></span>           
        </button>
                    <?php 
                    }  else  if( ($result_3['status'] == 'ACCEPT') ){
                      ?>
        <button disabled  class="btn btn-primary btn-outline-primary" >
                <span class="glyphicon glyphicon-eye-open"></span>
        </button>

        <button disabled  
                class="btn btn-primary  " >
                <span class="glyphicon glyphicon-ok" ></span>           
        </button>


        <button disabled  
                class="btn btn-primary  btn-outline-primary" >
                <span class="glyphicon glyphicon-remove"  ></span>           
        </button>
                    <?php 
                    }   else if(($result_3['status'] == 'IGNORED')){
                      ?>
        <button disabled  class="btn btn-primary btn-outline-primary" >
                <span class="glyphicon glyphicon-eye-open"></span>
        </button>

        <button disabled  
                class="btn btn-primary  btn-outline-primary" >
                <span class="glyphicon glyphicon-ok" ></span>           
        </button>


        <button disabled  
                class="btn btn-primary  " >
                <span class="glyphicon glyphicon-remove"  ></span>           
        </button>
                    <?php 
                    } else { ?>

                          <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <button  class="btn btn-primary  btn-outline-primary" name="view">
                                    <span class="glyphicon glyphicon-eye-open"></span>
                                </button>
            
                             <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <button value="status.php?id=<?php echo $row["id"]; ?>" 
                                  class="btn btn-primary  btn-outline-primary" name="accept">
                                    <span class="glyphicon glyphicon-ok" ></span>           
                                </button> 

                             <input type="hidden" name="id" value="<?php echo $id; ?>">
                                 <button value="status.php?id=<?php echo $row["id"]; ?>" 
                                  class="btn btn-primary  btn-outline-primary" name="ignore">
                                    <span class="glyphicon glyphicon-remove"  ></span>           
                               </button>
                <?php
                  }
                }?>





                            
                            </form>

                          </td>

                          <td>
                           <a href="delete.php?id=<?php echo $row["id"];?>" class="btn btn-danger btn-primary a-btn-slide-text ">
                              <span class="  glyphicon glyphicon-remove"  ></span>
                              <span><strong>Delete</strong></span>            
                          </a>
                           
                            
                          </td>
                        </tr>
                      </tbody>             
                      <?php
 }
 
}
else
{
 echo '<h2> Malumot kiritilmagan</h2>';
}
?>  
         </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a  target="_blank">ATB</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Agrobank & Jobs 
            </span>
          </div>
        </footer>
      </div>
    </div>
  </div>
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/dashboard.js"></script>
</body>

</html>