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
$query = " SELECT * FROM admin_post WHERE `id` LIKE '$id'  ";
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
                            Filial
                          </th>
                          <th>
                            Viloyat
                          </th>
                          <th>
                            Bo'lim
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
                            ish_soni
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
                        </tr>
                      </thead>
<form method="post" action="view.php">

<?php while($row = mysqli_fetch_array($result)){ ?>
                      <tbody>
                        <tr>
                         
                          <td class="font-weight-medium">
                             <input type="text" name="job_name" value="<?php echo $row["job_name"]; ?>"
                             placeholder="<?php echo $row["job_name"]; ?>">
                          </td> 

                          <td class="font-weight-medium">
                             <input type="text" name="branch_name" value="<?php echo $row["branch_name"]; ?>"
                             placeholder="<?php echo $row["branch_name"]; ?>">
                          </td> 

                          <td class="font-weight-medium">
                             <input type="text" name="vil_nomi" value="<?php echo $row["vil_nomi"]; ?>"
                             placeholder="<?php echo $row["vil_nomi"]; ?>">
                          </td>
                          <td>
                            <input type="text" name="bolim" value="<?php echo $row["bolim"]; ?>"
                            placeholder="<?php echo $row["bolim"]; ?>">
                          </td> 
                          
                         
                          <td>
                            <input type="text" value="<?php echo$row["lavozim"]; ?>" name="lavozim" placeholder="<?php echo$row["lavozim"]; ?>" <?php echo$row["lavozim"]; ?>>
                          </td>
                          
                          <td> 
                           <input type="text" name="stavka" value="<?php echo$row["stavka"]; ?>" placeholder="<?php echo$row["stavka"]; ?>" <?php echo$row["stavka"]; ?>>
                          </td>

                          <td> 
                           <input type="text" name="maosh" value="<?php echo$row["maosh"]; ?>" placeholder="<?php echo$row["maosh"]; ?>" <?php echo$row["maosh"]; ?>>
                          </td> 
                         
                          <td> 
                           <input type="text" name="malaka" value="<?php echo$row["malaka"]; ?>" placeholder="<?php echo$row["malaka"]; ?>"<?php echo$row["malaka"]; ?>>
                          </td>
                          <td> 
                           <input type="text" name="ish_soni" value="<?php echo$row["ish_soni"]; ?>" placeholder="<?php echo$row["ish_soni"]; ?>"<?php echo$row["ish_soni"]; ?>>
                          </td>

                          <td> 
                           <input type="text" name="daraja" value="<?php echo$row["daraja"]; ?>" placeholder="<?php echo$row["daraja"]; ?>"<?php echo$row["daraja"]; ?>>
                          </td>

                          <td> 
                           <input type="text" name="ish_turi" value="<?php echo$row["ish_turi"]; ?>" placeholder="<?php echo$row["ish_turi"]; ?>"<?php echo$row["ish_turi"]; ?>>
                          </td>

                          <td> 
                           <input type="text" name="tolov_shakli" value="<?php echo$row["tolov_shakli"]; ?>" placeholder="<?php echo$row["tolov_shakli"]; ?>"<?php echo$row["tolov_shakli"]; ?>>
                          </td> 

                          <td> 
                           <input type="text" name="tashkilot_nomeri" value="<?php echo$row["tashkilot_nomeri"]; ?>" placeholder="<?php echo$row["tashkilot_nomeri"]; ?>"<?php echo$row["tashkilot_nomeri"]; ?>>
                          </td> 
                          
                           <td> 
                           <input type="text" name="kadr_nomeri" value="<?php echo$row["kadr_nomeri"]; ?>" placeholder="<?php echo$row["kadr_nomeri"]; ?>"<?php echo$row["kadr_nomeri"]; ?>>
                          </td>  

                           <td> 
                           <input type="text" name="qisqacha" value="<?php echo$row["qisqacha"]; ?>" placeholder="<?php echo$row["qisqacha"]; ?>"<?php echo$row["qisqacha"]; ?>>
                          </td>

                            <td>
                              <input type="hidden" name="id" value="<?php echo $id; ?>">
                              <button name="save" class="btn btn-success">save</button>
                            </td>
                        </tr>
                      </tbody>             
<?php }?>  
</form>
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