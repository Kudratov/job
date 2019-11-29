<?php
include('db_connect.php');
 $dt2 = "Asia/Tashkent";
  date_default_timezone_set($dt2);

if(isset($_POST['apply'])){
    $job_id=$_GET['job_id'];
    
    $sql1 = "SELECT * FROM admin_post WHERE `job_id`='$job_id'";
    $result = mysqli_query($db, $sql1);

    $row = mysqli_fetch_array($result);

   
        if(!empty($_FILES['resume']['size'])){
              $vil_id=$row['vil_id'];
              $job_id=$row['job_id'];
              $job_name=$row['job_name'];

              $name=$_POST['name']; 
              $id=$_POST['id']; 
               $info=$_POST['info'];
               $phone=$_POST['phone'];
               
              
              $inn=$_POST['inn'];
              $pass_num=$_POST['pass_num']; 
              $pass_ser=$_POST['pass_ser']; 
              $address=$_POST['address']; 
              $date_of_birth=$_POST['date_of_birth']; 
              $viloyat=$_POST['viloyat']; 
              $university=$_POST['university'];
              $degree=$_POST['degree'];
              $work_anketa=$_POST['work_anketa'];




              
            $fileName = $_FILES['resume']['name'];
            $tmpName  = $_FILES['resume']['tmp_name'];
            $fileSize = $_FILES['resume']['size'];
            $fileType = $_FILES['resume']['type'];
        
            $fp      = fopen($tmpName, 'r');
            $content = fread($fp, filesize($tmpName));
            $content = addslashes($content);
            fclose($fp);

            if(!get_magic_quotes_gpc())
            {
                $fileName = addslashes($fileName);
            }
         $date=$_POST['date'];
         $dt2=date("Y-m-d H:i:s");
  

    $sql = "INSERT INTO `apply` (resume, name, phone, info, date, job_n, viloyat_id, inn, pass_num, pass_ser, 
      address, date_of_birth, viloyat, university, degree, work_anketa, size, type, resume_name, get_job_id ) 
    VALUES ('$content','$name', '$phone', '$info', '$dt2', '$job_name', '$vil_id','$inn', '$pass_num','$pass_ser', '$address',
      '$date_of_birth', '$viloyat', '$university', '$degree', '$work_anketa', '$fileSize', '$fileType','$fileName', '$job_id')"; 


    if(mysqli_query($db,$sql)){  
    echo "hey Done";
     header("location:./index.php");
    } else{
      echo "NOT DONE";
    }   
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
<meta charset="utf-8">
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
<link href="plugins/home-plugins/css/bootstrap.min.css" rel="stylesheet" />
<link href="plugins/home-plugins/css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
<link href="plugins/home-plugins/css/flexslider.css" rel="stylesheet" /> 
<link href="plugins/home-plugins/css/style.css" rel="stylesheet" />
<!-- <link rel="stylesheet" href="/eris/plugins/dataTables/dataTables.bootstrap.css">  --> 
<link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css"> 

<link rel="stylesheet" href="plugins/dataTables/jquery.dataTables.min.css"> 
<link rel="stylesheet" href="plugins/dataTables/jquery.dataTables_themeroller.css"> 
<!-- datetime picker CSS -->
<link href="plugins/datepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link href="plugins/datepicker/datepicker3.css" rel="stylesheet" media="screen">
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<style type="text/css">
 
  #content {
    min-height: 400px;
    color: #000;
  }
  
  .contentbody p {
    font-weight: bold;
  }

</style>

</head>
<body>
<div id="wrapper" class="home-page">

  <header>
        <div class="topbar navbar-fixed-top">
          <div class="container">
            <div class="row">
              <div class="col-md-12">      
                <p class="pull-left hidden-xs"><i class="fa fa-phone"></i>Aloqa uchun telefon: (0-371) 203 88 88</p>
                    <div>
                        <p   class="pull-right hidden-xs"><i class="fa fa-phone"></i>Ishonch telefoni: (0-371) 150 67 40</p>
                    </div>
              </div>
            </div>
          </div>
        </div> 
        <div style="min-height: 30px;"></div>
        <div class="navbar navbar-default navbar-static-top" > 
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">AgroBank<!-- <img src="/eris/plugins/home-plugins/img/logo.png" alt="logo"/> --></a>
                </div>
                <div class="navbar-collapse collapse ">
                
                </div>
            </div>
        </div>

  </header>
      <section id="inner-headline" class="topbar navbar-fixed-top">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="pageTitle">Agorbank Kadrlar ATB</h2>
                    </div>
                </div>
            </div>
            </section>


            <section id="content">
  <div class="container content">     
  



 <p> </p>     
  <form class="form-horizontal span6  wow fadeInDown" action=""  enctype="multipart/form-data"  method="POST">
            <div class="col-sm-8"> 
                <div class="row">
                    <h2 class=" ">Shaxsiy ma'lumotlaringiz</h2>   
                        
<!-- <div class="form-group">
  <div class="col-md-11">
  <label class="col-md-4 control-label" for=
    "NATIONALID">NationalID:</label>

    <div class="col-md-8"> 
       <input class="form-control input-sm" id="NATIONALID" name="NATIONALID" placeholder=
          "00-000000000000" type="text" value=""  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
    </div>
  </div>
</div> -->
<div class="form-group">
    <div class="col-md-11">
    <label class="col-md-4 control-label" for=
        "FNAME">F.I.O:</label>

        <div class="col-md-8">
          <input name="JOBID" type="hidden" value="2">
           <input class="form-control input-sm" id="FNAME" name="name" placeholder=
              "Firstname" type="text" value=""  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
        </div>
    </div>
</div>

<div class="form-group">
    <div class="col-md-11">
        <label class="col-md-4 control-label" for=
        "LNAME">INN:</label>

        <div class="col-md-8">
          <input name="deptid" type="hidden" value="">
          <input  class="form-control input-sm" id="LNAME" name="inn" placeholder=
              "inn"    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
          </div>
    </div>
</div>

<div class="form-group">
    <div class="col-md-11">
        <label class="col-md-4 control-label" for=
        "MNAME">Passport:</label>

        <div class="col-md-3">
          <input name="deptid" type="hidden" value="">
          <input  class="form-control input-sm" id="MNAME" name="pass_num" placeholder=
              "AA"    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
           <!-- <input class="form-control input-sm" id="DEPARTMENT_DESC" name="DEPARTMENT_DESC" placeholder=
              "Description" type="text" value=""> -->
        </div>  

        <div class="col-md-5">
          <input name="deptid" type="hidden" value="">
          <input  class="form-control input-sm" id="MNAME" name="pass_ser" placeholder=
              "1234567"    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
           <!-- <input class="form-control input-sm" id="DEPARTMENT_DESC" name="DEPARTMENT_DESC" placeholder=
              "Description" type="text" value=""> -->
        </div>
    </div>
</div> 

<div class="form-group">
    <div class="col-md-11">
        <label class="col-md-4 control-label" for=
        "ADDRESS">Tug'ilgan joyingiz:</label>

        <div class="col-md-8">

         <textarea class="form-control input-sm" id="ADDRESS" name="address" placeholder=
            "Tug'ilgan joyingizni kiriting" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"></textarea>
        </div>
    </div>
</div> 

<div class="form-group">
    <div class="col-md-11">
        <label class="col-md-4 control-label" for=
        "ADDRESS">Tug'ilgan yilingiz:</label>

        <div class="col-md-8">

         <input type="date" class="form-control input-sm" id="ADDRESS" name="date_of_birth" placeholder=
            "Tug'ilgan yilingizni tanlang" type="text"  required  onkeyup="javascript:capitalize(this.id, this.value);" 
            autocomplete="off"></input>
        </div>
    </div>
</div> 

 <div class="form-group">
  <div class="col-md-11">
    <label class="col-md-4 control-label" for=
    "CIVILSTATUS">Viloyat:</label>

    <div class="col-md-8">
      
           <select class="form-control input-sm" name="viloyat" class="form-control" onChange="getState(this.value);" >
                    <option value disabled selected>Вилоятни Танланг</option>
                    <?php foreach($results as $viloyat) { ?>
                    <option value="<?php echo $viloyat["branch_id"]; ?>">
                        <?php echo $viloyat["branch_id"]; ?>
                    </option>
                    <?php } ?>
                </select>
          <!-- <option value="Fourth" >Fourth</option> -->
   
    </div>
  </div>
</div>  

 

 <div class="form-group">
    <div class="col-md-11">
      <label class="col-md-4 control-label" for=
      "BIRTHPLACE">Yashash joyingiz:</label>
      <!-- info -->

      <div class="col-md-8">
        
         <textarea class="form-control input-sm" id="BIRTHPLACE" name="info" placeholder=
            "Yashash joyingiz" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"></textarea>
      </div>
    </div>
  </div> 


 <div class="form-group">
  <div class="col-md-11">
    <label class="col-md-4 control-label" for=
    "TELNO">Qaysi oliygohni bitirgansiz:</label>

    <div class="col-md-8">
      
       <input class="form-control input-sm" id="TELNO" name="university" placeholder=
          "Qaysi oliygohni tugatgansiz" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
    </div>
  </div>
</div>  

<div class="form-group">
  <div class="col-md-11">
    <label class="col-md-4 control-label" for=
    "TELNO">Ma'lumotingiz:</label>

    <div class="col-md-8">
      
       <input class="form-control input-sm" id="TELNO" name="degree" placeholder=
          "Malumotingizni kiriting." type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
    </div>
  </div>
</div> 

<div class="form-group">
  <div class="col-md-11">
    <label class="col-md-4 control-label" for=
    "TELNO">Mehnat daftarchasi raqami:</label>

    <div class="col-md-8">
      
       <input class="form-control input-sm" id="TELNO" name="work_anketa" placeholder=
          "Mehnat daftarchasi raqami" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
    </div>
  </div>
</div>  

<div class="form-group">
  <div class="col-md-11">
    <label class="col-md-4 control-label" for=
    "TELNO">Tel No.:</label>

    <div class="col-md-8">
      
       <input class="form-control input-sm" id="TELNO" name="phone" placeholder=
          "998xx xxx-xx-xx" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
    </div>
  </div>
</div> 



 


 

  
   
                 </div>
            </div>
            <div class="col-sm-4">
                   <div class="row">
                    <h2 class=" " >Ish haqida ma'lumot</h2>
                    <?php

   $job_n=$_GET['job_id'];
   $query = " SELECT * FROM admin_post WHERE `job_id` LIKE '$job_n'  ";
  $result = mysqli_query($db, $query);
  if(mysqli_num_rows($result) > 0)
    {
      while($row = mysqli_fetch_array($result))
    {
      ?>
                     <div class="panel">
                         <div class="panel-header">
                              <div style="border-bottom: 1px solid #ddd;padding: 10px;font-size: 25px;font-weight: bold;color: #000;margin-bottom: 5px;">
                                <?php echo $row["job_name"];?></a> 
                              </div> 
                         </div>
                         <div class="panel-body">
                                  <div class="row contentbody">
                                        <div class="col-sm-6">
                                            <ul>
                                                <li><i class="fp-ht-bed"></i>Filial:<?php echo $row["branch_name"];?> </li>
                                                <br>
                                                <li><i class="fp-ht-bed"></i>Lavozim:<?php echo $row["lavozim"];?> </li>
                                               
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul> 
                                                <li><i class="fp-ht-tv"></i>Malakasi : <?php echo $row["malaka"];?></li>
                                                <br>
                                                <li><i class="fp-ht-computer"></i>Bosh o'rinlar <?php echo $row["ish_soni"];?> </li>
                                            </ul>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="col-sm-12"> 
                                          <br>
                                            <p>To'lov shakli:                                           
                                                 <?php echo $row["tolov_shakli"];?></p>
                                         </div>
                                        <div class="col-sm-12">
                                            <p>Tashkilot nomeri :  <?php echo $row["tashkilot_nomeri"];?></p> 
                                            <p>Kadr nomeri :  <?php echo $row["kadr_nomeri"];?></p>
                                            <p>Malakasi :  <?php echo $row["malaka"];?></p>
                                        </div>
                                    </div>
                         </div>
                         <div class="panel-footer">
                              Qisqacha :  <?php echo $row["qisqacha"];?>                        </div>

                              <div class="panel-footer">
                              Yuklangan sa'na :  <?php echo $row["date"];?>                        </div>
                     </div>
                     <?php
 }
 
}
else
{
 echo '<h2> Malumot kiritilmagan</h2>';
}
?>  
                     
                       
                </div>
            </div>
              <div class="col-sm-12">
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-header">
                            <div style="border-bottom: 1px solid #ddd;padding: 10px;font-size: 25px;font-weight: bold;color: #000;margin-bottom: 5px;">.ZIP fayl shaklida barch hujjatlaringizni yuklang:
                            </div>
                        </div>
                        <div class="panel-body"> 
                            <label class="col-md-2" value="file" id="file" for="picture" style="padding: 0;margin: 0;"><li>Passport nusxa</li><li>INN</li><li>Diplom nusxa</li><li>Mehnat daftarchasi</li><li>Resume</li></label> 
                            <div class="col-md-10" style="padding: 0;margin: 0;">
                                <input onchange="return fileValidation()"  id="file" name="resume" type="file">
                                <input name="MAX_FILE_SIZE" type="hidden" value="1000000"> 

                            </div> 
                        </div>
                    </div> 
                </div> 
            </div>
          <div class="form-group">
            <div class="col-md-12"> 
                 <button class="btn btn-primary btn-sm pull-right" name="apply" type="submit" >Submit <span class="fa fa-arrow-right"></span></button>
              <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-left"></span>&nbsp;<strong>Back</strong></a> 
            </div>
           </div>   
        </form> 
        </div> 
</section> 
     
 

  <!-- <footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4">
        <div class="widget">
          <h5 class="widgetheading">Our Contact</h5>
          <address>
          <strong>Our Company</strong><br>
          JC Main Road, Near Silnile tower<br>
           Pin-21542 NewYork US.</address>
          <p>
            <i class="icon-phone"></i> (123) 456-789 - 1255-12584 <br>
            <i class="icon-envelope-alt"></i> jannopalacios@gmail.com
          </p>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="widget">
          <h5 class="widgetheading">Quick Links</h5>
          <ul class="link-list">
            <li><a href="/eris/index.php">Home</a></li>
            <li><a href="/eris/index.php?q=company">Company</a></li>
            <li><a href="/eris/index.php?q=hiring">Hiring</a></li>
            <li><a href="/eris/index.php?q=About">About us</a></li>
            <li><a href="/eris/index.php?q=Contact">Contact us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="widget">
          <h5 class="widgetheading">Latest posts</h5>
          <ul class="link-list">
             <li><a href="/eris/index.php?q=viewjob&search=2">URC/ Accounting</a></li> <li><a href="/eris/index.php?q=viewjob&search=1">URC/ ISD</a></li> 
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-3">
        <div class="widget">
          <h5 class="widgetheading">Recent News</h5>
          <ul class="link-list">
            <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
            <li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
            <li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div id="sub-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="copyright">
            <p>
              <span>&copy; Janno Palacios 2018 All right reserved.  
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <ul class="social-network">
            <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  </footer> -->
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="plugins/home-plugins/js/jquery.js"></script>
<script src="plugins/home-plugins/js/jquery.easing.1.3.js"></script>
<script src="plugins/home-plugins/js/bootstrap.min.js"></script>
 

<script type="text/javascript" src="plugins/dataTables/dataTables.bootstrap.min.js" ></script>  
<script src="plugins/datatables/jquery.dataTables.min.js"></script> 

<script type="text/javascript" src="plugins/datepicker/bootstrap-datepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="plugins/datepicker/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="plugins/datepicker/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>

<script type="text/javascript" language="javascript" src="plugins/input-mask/jquery.inputmask.js"></script> 
<script type="text/javascript" language="javascript" src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script> 
<script type="text/javascript" language="javascript" src="plugins/input-mask/jquery.inputmask.extensions.js"></script> 

<script src="plugins/home-plugins/js/jquery.fancybox.pack.js"></script>
<script src="plugins/home-plugins/js/jquery.fancybox-media.js"></script>  
<script src="plugins/home-plugins/js/jquery.flexslider.js"></script>
<script src="plugins/home-plugins/js/animate.js"></script>


<!-- Vendor Scripts -->
<script src="plugins/home-plugins/js/modernizr.custom.js"></script>
<script src="plugins/home-plugins/js/jquery.isotope.min.js"></script>
<script src="plugins/home-plugins/js/jquery.magnific-popup.min.js"></script>
<script src="plugins/home-plugins/js/animate.js"></script>
<script src="plugins/home-plugins/js/custom.js"></script> 
<!-- <script src="/eris/plugins/paralax/paralax.js"></script>  -->

 <script type="text/javascript">
   
     $(function () {
    $("#dash-table").DataTable();
    $('#dash-table2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });


     $("#btnlogin").click(function(){
        var username = document.getElementById("user_email");
        var pass = document.getElementById("user_pass");

        // alert(username.value)
        // alert(pass.value)
        if(username.value=="" && pass.value==""){   
          $('#loginerrormessage').fadeOut(); 
                $('#loginerrormessage').fadeIn();  
                $('#loginerrormessage').css({ 
                        "background" :"red",
                        "color"      : "#fff",
                        "padding"    : "5px;"
                    }); 
          $("#loginerrormessage").html("Invalid Username and Password!");
          //  $("#loginerrormessage").css(function(){ 
          //   "background-color" : "red";
          // });
        }else{

          $.ajax({    //create an ajax request to load_page.php
              type:"POST",  
              url: "process.php?action=login",    
              dataType: "text",  //expect html to be returned  
              data:{USERNAME:username.value,PASS:pass.value},               
              success: function(data){   
                // alert(data);
                $('#loginerrormessage').fadeOut(); 
                $('#loginerrormessage').fadeIn();  
                $('#loginerrormessage').css({ 
                        "background" :"red",
                        "color"      : "#fff",
                        "padding"    : "5px;"
                    }); 
               $('#loginerrormessage').html(data);   
              } 
              }); 
          }
        });


$('input[data-mask]').each(function() {
  var input = $(this);
  input.setMask(input.data('mask'));
});


$('#BIRTHDATE').inputmask({
  mask: "2/1/y",
  placeholder: "mm/dd/yyyy",
  alias: "date",
  hourFormat: "24"
});
$('#HIREDDATE').inputmask({
  mask: "2/1/y",
  placeholder: "mm/dd/yyyy",
  alias: "date",
  hourFormat: "24"
});

$('.date_picker').datetimepicker({
  format: 'mm/dd/yyyy',
  startDate : '01/01/1950', 
  language:  'en',
  weekStart: 1,
  todayBtn:  1,
  autoclose: 1,
  todayHighlight: 1, 
  startView: 2,
  minView: 2,
  forceParse: 0 

});
 </script>
 
</body>
</html>
