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
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
          </li>    <li class="nav-item">
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
                         Ish nomi
                          </th>
                          <th>
                            filial
                          </th>
                          <th>
                            viloyat
                          </th>
                          <th>
                            bolim
                          </th>
                          <th>
                            lavozim
                          </th>
                          <th>
                            stavka
                          </th>
                          <th>
                            maosh
                          </th>
                          <th>
                            malaka
                          </th>
                          <th>
                            soni
                          </th>
                          <th>
                            daraja
                          </th>
                          <th>
                          turi
                          </th> 
                          <th>
                            tolov_shakli
                          </th>  
                          <th>
                            tashkilot_nomeri
                          </th>
                          <th>
                            kadr_nomeri
                          </th>
                          <th>
                            qisqacha
                          </th>
                          <th>
                            date
                          </th>
                          <th>
                            Ozgartirish
                          </th>
                          <th>
                            Ochirish
                          </th>
                        </tr>
                      </thead>
<!-- // job_name
// branch_name
// vil_nomi
// bolim
// lavozim
// stavka
// maosh
// malaka
// ish_soni
// daraja
// ish_turi
// tolov_shakli
// tashkilot_nomeri
// kadr_nomeri
// qisqacha
// date -->
       <?php
include('../db_connect.php');

$output = '';
if(isset($_POST["query"]))
{
 // $search = mysqli_real_escape_string($db, $_POST["query"]);
 // $query = "
 //  SELECT * FROM admin_post 
 //  WHERE job_name LIKE '%".$search."%'
 //  OR branch_name LIKE '%".$search."%' 
 //  OR experience LIKE '%".$search."%' 
 //  OR place LIKE '%".$search."%' 
 //  OR profession LIKE '%".$search."%' 
 //  OR job_description LIKE '%".$search."%' 
 //  OR date LIKE '%".$search."%' 
  
 // ";
}
else
{
  if($_SESSION['staff_login']!='admin')
  {
        $query = "
  SELECT * FROM admin_post WHERE vil_id='".$_SESSION['staff_login']."' OR vil_nomi='".$_SESSION['viloyat_id']."' ORDER BY date DESC
 ";
  }
  else
  {
    $query = "
  SELECT * FROM admin_post ORDER BY date DESC
 ";
  }

}
$result = mysqli_query($db, $query);
if(mysqli_num_rows($result) > 0)
{

 while($row = mysqli_fetch_array($result))
 {
?>
                      <tbody>
                        <tr>
                          <td class="font-weight-medium">
                             <?php echo $row["job_name"]; ?>
                          </td> 
                          <td class="font-weight-medium">
                             <?php echo $row["branch_name"]; ?>
                          </td>
                          <td>
                            <?php echo  $row["vil_nomi"]; ?>
                          </td> 
                          
                         
                          <td>
                             <?php echo $row["bolim"]; ?>
                          </td>
                          <td> 
                             <?php echo $row["lavozim"]; ?>
                          </td>

                          <td> 
                             <?php echo $row["stavka"]; ?>
                          </td> 
                          <td> 
                             <?php echo $row["maosh"]; ?>
                          </td>
                          <td> 
                             <?php echo $row["daraja"]; ?>
                          </td>                         
                           <td> 
                             <?php echo $row["ish_soni"]; ?>
                          </td>
                          <td> 
                             <?php echo $row["daraja"]; ?>
                          </td>
                        
                          <td>
                             <?php echo $row["ish_turi"]; ?>
                          </td>                       
                          <td>
                             <?php echo $row["tolov_shakli"]; ?>
                          </td>  
                          <td>
                             <?php echo $row["tashkilot_nomeri"]; ?>
                          </td> 
                           <td>
                             <?php echo $row["kadr_nomeri"]; ?>
                          </td>  
                           <td>
                             <?php echo $row["qisqacha"]; ?>
                          </td> 

                            <td>
                             <?php echo $row["date"]; ?>
                          </td>

                            <td>
                            <a href="update.php?id=<?php echo $row["id"]; ?>" class="btn btn-success">Update</a>
                          </td>
                          <td>
                           <a href="del.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a>
                            
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
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>