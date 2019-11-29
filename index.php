  
<!DOCTYPE html>
<html>
    <head>    
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="atdlayout" content="jobsearchpage"><script type="text/javascript" src="go.automatad.com/geo/p8piRn/afihbs.js" async>
            
        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Language" content="en" />
        <title>Agrobank</title>

        <link rel="canonical" href="global-template-design-jobs.html" />
        <link rel="alternate" href="android-app://com.naukriGulf.app/https/www.naukrigulf.com/global-template-design-jobs" />
        <link rel="alternate" hreflang="en" href="global-template-design-jobs.html" />
        <link rel="alternate" hreflang="ar" href="https://arabic.naukrigulf.com/global-template-design-jobs" />
        <link rel="next" href="global-template-design-jobs-2.html" />
        
        
  
       
        <link rel="stylesheet" type="text/css" media="screen" href="static.naukimg.com/s/2/200/c/global_v32.min.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="static.naukimg.com/s/2/202/c/srp_v34.min.css" />
        <script type="text/javascript" src="static.naukimg.com/s/2/200/j/jquery_common_v3.min.js"></script>
        
                <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
    </head>
    <body id="hey">

 <style type="text/css" media="screen">
    #hey{
        background-image: url('admin/images/back.jpg');
    }
    .btn{
        color: #3399ff;
    }
    .btn:hover{
        background-color: #0073e6;
    }
        
    </style>
<div class="fullWrp">
    <div class="bgWrap"></div>
    <p class="brdCrumb dataWrap">
        <span>
            <a href="index.php" ><span>Bosh sahifa</span></a><small>&rsaquo;</small>
        </span>
                                           Agrobank ish o'rinlari
    </p>
    <section class="dataWrap">
    <script>
var enableArSuggestor = 1
</script>
<div class="advSearch clearfix" >
   
                <div class="dataWrap">
                    <form method="post"  action="" >
                        <input type="hidden" value = "https://www.naukrigulf.com/" id = "domain_Path" name = "domain_Path">
                        <input type="hidden" value = "" id = "xz" name = "xz">
                        <div class="keywordSection suggest" id="keyword">
                            <span class="heading"><label for="key"></label></span>
                            <div class="sWrap" style="font-size: 30px; font-color: green;">
                                    <h1><font color="white"> AGROBANK ONLINE ARIZALAR </font></h1>      
                            </div>
                        </div>
                        <div class="locationSection suggest" id="location">
                            <span class="heading">
                                <label for="loc"></label>
                            </span>
                        
                        </div>
                     
                        <div class="">
                            <span class="heading">&nbsp;</span>
                            <br>                            <br>
                            <br>                            <br>
                            <br>                            <br>
                        </div>
                       
                    </form>
                    <div id="errortxt" class="hide"><span class="bg"></span><p class="errMsg">Ma'lumot topilmadi</p></div>
                </div>
            </div>
      <div class="content clearfix">
      <div class='fr'>
        <div class="centerSection">
       
      <div class="resultData">
          <div id="initiator"></div>
          <div>
            <ol>


<?php
include('db_connect.php');
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($db, $_POST["query"]);
 $query = " SELECT * FROM admin_post  WHERE job_name LIKE '%".$search."%'
  OR branch_name LIKE '%".$search."%' 
 ";
}
else
{

 $query = "SELECT * FROM admin_post as a inner join viloyatlar as v  on a.vil_nomi=v.auto_id  ORDER BY date DESC";
}
$result = mysqli_query($db, $query);
if(mysqli_num_rows($result) > 0)
{

 $output .= '';
 while($row = mysqli_fetch_array($result))
 {
    $job_id = $row['job_id'];
 ?>
              <li class="appednd-article">
            <article id="data-to-show" class="<?php echo $row["viloyat"]; ?> <?php echo $row["branch_name"]; ?> aCont site-boxes display-all-regs clickableArea hasIcon">
                <input type="hidden" value="0" class="inpInfo" />
                    <div class="clearfix">
                    <div class="header">
                <a>
                    <h2 class="jhead"> </h2>
                    </a>
               <span><a style="font-size:23px;" class="cName ico exp">Ish nomi: <?php echo $row["job_name"]; ?></a></span><br>
                    <span><a style="font-size:20px;" class="cName ico keyW ">Viloyat:  <?php echo $row["viloyat"]; ?></a></span><br>
                    <span> 
                        <a style="font-size:17px;" class="cName ico loc ">Filial: <?php echo $row["branch_name"]; ?></a></span><br>
                            <br>
                            <br>
                    </div>
                           
                     </div>
            <span  class="keyword">
                <em class=""></em>
                <p style="font-size:20px;">UZS: <?php echo $row["maosh"] ?> </p>
            </span>
                    </a>
                    <span style="font-size:20px;" class="postedOn"><?php echo $row["date"] ?></span>&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp
                    &nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp
                    &nbsp;
                    
            <a href="apply.php?job_id=<?php echo $job_id ?>" class="btn"><font color="white"> Topshring</font></a>
                </article>
            </li>
   <?php 
 }

}
else
{
 echo '<h2> Malumot kiritilmagan</h2>';
}
?>

   <?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'job';
    $connection = mysql_connect($dbhost,$dbuser,$dbpass);
   // Check connection
    if (!$connection) {
        die("Database connection failed: " . mysql_error());
    }

    $db_select = mysql_select_db($dbname,$connection);

    $result = mysql_query("SELECT ish_soni FROM admin_post");

    $sum=0;
        while ($row = mysql_fetch_assoc($result)){
    $value = $row['ish_soni'];
    $sum += $value;
}

?>
            <?php
$conn=mysqli_connect("localhost","root","","job");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql="select count('id') from apply";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

mysqli_close($conn);
?>
</ol>
    
        
            </div>
        
                </div>
        </div>
                <div class="rtSection">
<div id="stickyPanelRt">
<div class="fEmp site-boxes" >
 


<span class="heading" >Ma'lumot</span>

<div class="map-left-item" style="padding-top: 50px;">
            <div class="map-left-item-item-number">
                <div class="dashboard-statistics__counter dashboard-statistics__counter_resumes">
                    <img src="1.png" style="width: 50px; ;margin-right: 10px; float: left; margin-bottom: 20px;">
                    <div class="" style="font-size: 50px;font-weight: 400;line-height: 40px;">
                         <a href=""><b><?php echo "$row[0]"; ?></b></a>
                        
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="">Kelib tushgan arizalar son </div>
                </div>
            </div>
            <div class="map-left-item-item-number" style="padding-top: 50px;">
                <div class="dashboard-statistics__counter dashboard-statistics__counter_resumes">
                    <img src="2.png" style="width:50px; margin-right: 10px; float: left; margin-bottom: 20px;">
                    <div class="" style="font-size:50px;font-weight: 400;line-height: 40px;">
                        
                        <a href=""><b><?php echo $sum; ?></b></a>
                    </div>
                    <br>
                    <br>
                    <div class="dashboard-statistics__text">Aktual bo'sh ish o'rinlar soni</div>
                </div>
            </div>
          
        </div>
<span class="halfBrick"></span>
</div>
</div>
</div>
</div>
                <div class="lfSection site-boxes">
    <div class="srpCluster">
                                <div class="refineSrc secHeading">Qidiruv</div>
                               
                                <form name="formCluster" id="formCluster" method="post">
                                <div id="createCluster">
       
          <div class="hLine p10">
            <h5 id="for-regs" class="hding2"></em><span>Viloyat</span>  
                <select class="form-control search-for-regions" onclick="checkReg()" id="exampleFormControlSelect1">
                    <option value="nothing">Tanlang</option>
                    <option value="Тошкент">Toshkent</option>
                    <option value="Сирдарё">Sirdaryo</option>
                    <option value="Жиззах">Jizzax</option>
                    <option value="Самарқанд" >Samarqand</option>
                    <option value="Фарғона">Farg'ona</option>
                    <option value="Наманган">Namangan</option>
                    <option value="Андижон">Andijon</option>
                    <option value="Қашқадарё">Qashqadaryo</option>
                    <option value="Сурхондарё">Sirdaryo</option>
                    <option value="Бухоро">Buxoro</option>
                    <option value="Навоий">Navoi</option>
                    <option value="Хоразм">Xorazm</option>
                    <option value="Қорақалпогистон Республикаси">Qoraqalpog'iston Respublikasi</option>
                </select
            </h5>
            
            </div> 


             <div class="hLine p10">
            <h5 class="hding2"></em><span>Filial</span>
                <select oninput="checkBran()" class="form-control select-for-branches" id="exampleFormControlSelect1" style="display: none;">
                    <option value="nothing-branches">Tanlang</option>
                </select>
            </h5>    
            </div>  

          
      
<div class="refineButton" style="position: fixed;">
            <input name="submit" type="submit" value="refine">
</div>
                                                                      </div>
                                 </form>
    </div>
                </div>
                </div>
            </div>
</section>            
    </div>
        <script type="text/javascript" src="static.naukimg.com/s/2/200/j/job_search_rev_common_v61.min.js"></script>
<script type="text/javascript" src="static.naukimg.com/s/2/202/j/srp_required_v33.min.js"></script>
            <div id="getPosition">
            <div id="setPosition" class="iframeContainer" ifname="search_results_gutter" ifsrc="https://www.naukrigulf.com/ni/nibms/bms_display.php?zonestr=125&regionstr=2&phrase=&location=&farea=&industry=&exp="></div>
        </div>
        <!-- Google Tag Manager -->
<noscript><iframe src="index.html"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push(
{'gtm.start': new Date().getTime(),event:'gtm.js'}
);var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WJ8D2R');</script>
<!-- End Google Tag Manager -->


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="./index.js"></script>


    </body>
</html>
