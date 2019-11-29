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
        
    $dt2 = 'Asia/Tashkent';
    date_default_timezone_set($dt2);

if(isset($_POST['submit'])){
    $job_name=$_POST['job_name']; 
    $branch_name=$_POST['branch_name']; 

    if($_SESSION['staff_login']=='admin')
    {
       $vil_nomi=$_POST['vil_nomi'];
    }
    else{
      $vil_nomi=$_SESSION['viloyat_id'];
    }
   
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
       
  $sql = "INSERT INTO `admin_post` (job_name, branch_name, vil_nomi, bolim, lavozim, stavka, maosh, 
    malaka, ish_soni, daraja, ish_turi, tolov_shakli, tashkilot_nomeri, kadr_nomeri, qisqacha, date, job_id, vil_id) 
  VALUES
   ('$job_name','$branch_name', '$vil_nomi','$bolim','$lavozim','$stavka','$maosh','$malaka','$ish_soni','$daraja','$ish_turi',
    '$tolov_shakli','$tashkilot_nomeri','$kadr_nomeri', '$qisqacha', '$dt2', '$job_id','$staff_login')";
  if(mysqli_query($db,$sql)){
    
    echo "success";
  }    else{
    echo "Error";
  }
}
?>

<?php 
$query ="SELECT * FROM branch_emp";
$results = $db->query($query);
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
  <link rel="stylesheet" href="vendors/icheck/skins/all.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
   <script>
function getState(val) {
    $.ajax({
    type: "POST",
    url: "getState.php",
    data:'id='+val,
    success: function(data){
        $("#filial-list").html(data);
        getCity();
    }
    });
}
</script>

  
</head>

<body>
  <div class="container-scroller">

    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="basic_elements.php">
          <img src="images/logo.png" alt="logo" />
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
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
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
            
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body col-md-6 mx-auto">
                  <h4 class="card-title">Agrobank kadrlar</h4>
                  <p class="card-description">
                    Ishlarni yuklash
                  </p>
                  <form class="forms-sample" action="" method="POST"  enctype="multipart/form-data">
                    
                    <div class="form-group">
                      <label for="exampleInputEmail3">Ish nomi</label>
                      <input type="text" class="form-control" name="job_name"  placeholder="Ish nomi">
                    </div>
<?php
if($_SESSION['staff_login']=='admin'){?>
                    <div class="form-group">
                       <label for="exampleInputEmail3">Viloyat</label>
                        <select class="form-control input-sm" name="vil_nomi" class="form-control" onChange="getState(this.value);" >
                              <option value disabled selected>Viloyatni tanlang</option>
                              <?php foreach($results as $viloyat) { ?>
                                <option value="<?php echo $viloyat["id"]; ?>">
                                  <?php echo $viloyat["branch_id"]; ?>
                                </option>
                              <?php } ?>
                        </select>
                    </div>

                  <div class="form-group" id="heyy" >
                      <label>Filial</label>
                          <select name="branch_name" id="filial-list" class="form-control" >
                                <option value="">Filialni tanlang</option>
                          </select>
                  </div> 

<?php } else {
      $query = "SELECT filiallar.filial 
            FROM branch_emp JOIN filiallar ON id = fil_id 
            WHERE fil_id ='" . $_SESSION['viloyat_id'] . "'";
      $results = $db->query($query);
  
  ?>

                 <div class="form-group" id="heyy" >
                      <label>Filial</label>
                          <select name="branch_name"  class="form-control" >
                               <?php
        foreach ($results as $state) {
            ?>
    <option value="<?php echo $state["filial"]; ?>"><?php echo $state["filial"]; ?></option>
    
  <?php
      }?>
                </select>          
                  </div> 
<?php }?>

                    <!-- <div class="form-group">
                      <label for="exampleInputEmail3">Filial nomi</label>
                      <input type="text" class="form-control" name="branch_name"  placeholder="Filial nomi">
                    </div>
 -->

                     <div class="form-group">
                      <label for="exampleInputEmail3">Bo'lim</label>
                      <input type="text" class="form-control" name="bolim"  placeholder="Bo'lim">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputPassword4">Lavozim</label>
                      <input type="text" class="form-control"  name="lavozim" id="exampleInputPassword4" placeholder="Lavozim">
                    </div> 

                    <div class="form-group">
                      <label for="exampleInputPassword4">Stavka</label>
                      <input type="text" class="form-control"  name="stavka" id="exampleInputPassword4" placeholder="Stavka">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword4">Oylik ish haqi</label>
                      <input type="text" class="form-control"  name="maosh" id="exampleInputPassword4" placeholder="Oylik ish haqi">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword4">Ish malaksi</label>
                      <select type="text" class="form-control"  name="malaka" id="exampleInputPassword4" placeholder="Ish malaksi">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>

                      </select>
                    </div>

                     <div class="form-group">
                      <label for="exampleInputPassword4">Ish o'rinlar soni</label>
                      <input type="text" name="ish_soni" class="form-control" id="exampleInputPassword4" placeholder="Ish o'rinlar soni">
                    </div>
                   
                    <div class="form-group">
                      <label for="exampleInputCity1">Talab qilinadigan ta'lim darajasi</label>
                      <input type="text" name="daraja"  class="form-control" id="exampleInputCity1" placeholder="Talab qilinadigan ta'lim darajasi">
                    </div>

                    <div class="form-group">
                      <label for="exampleTextarea1">Ish turi</label>
                      <input class="form-control"  name="ish_turi" id="exampleTextarea1" placeholder="Ish turi" rows="2"></input>
                    </div>  

                    <div class="form-group">
                      <label for="exampleTextarea1">To'lov shakli</label>
                      <input class="form-control"  name="tolov_shakli" id="exampleTextarea1" placeholder="To'lov shakli" rows="2"></input>
                    </div>

                    <div class="form-group">
                      <label for="exampleTextarea1">Tashkilot no'meri</label>
                      <input class="form-control"  name="tashkilot_nomeri" id="exampleTextarea1" placeholder="Tashkilot no'meri" rows="2"></input>
                    </div>

                    <div class="form-group">
                      <label for="exampleTextarea1">Kadr tel no'meri</label>
                      <input class="form-control"  name="kadr_nomeri" id="exampleTextarea1" placeholder="Kadr tel no'meri" rows="2"></input>
                    </div>

                    <div class="form-group">
                      <label for="exampleTextarea1">Ish haqida qisqacha</label>
                      <textarea class="form-control"  name="qisqacha" id="exampleTextarea1" placeholder="Ish haqida qisqacha" rows="2"></textarea>
                    </div>

                    <button type="submit" name="submit" class="btn btn-success mr-2">Saqlamoq</button>
                    <button class="btn btn-light">Rad qilmoq</button>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>

        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a  target="_blank">ATB</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Agrobank & Jobs
              <i class="mdi mdi-heart text-danger"></i>
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

</body>

</html>