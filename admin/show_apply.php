<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
 </head>
<body>
 
</html>
<?php
include('db_connect.php');

$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($db, $_POST["query"]);
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
    $query = "
  SELECT * FROM apply ORDER BY date DESC
 ";
  }
 // $query = " SELECT * FROM apply ORDER BY name";
}
$result = mysqli_query($db, $query);
if(mysqli_num_rows($result) > 0)
{

 $output .= '';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <section id="blog"   class="container">
        <div class="blog" >
            <div class="row">
                 <div class="col-md-8">
                    <div class="blog-item">
                        <div class="row">    
                            <div class="col-xs-12 col-sm-10 blog-content">

                             <h3>'.$row["name"].'</h3>
                <td> <a href ="upload/'.$row['resume'].'"> '.$row['resume'].'</a> </td>
                              
                            </div>
                        </div>    
                    </div>
                </div>
                <aside class="col-md-4">
            <div class="widget categories">
               <br>
                  <br>
                  
                        <h3>Malumotlar</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="">
                                    <h4><p>'.$row["info"].'</p></h4> 
                                    <div class="entry-meta small muted">
                                    </div>
                                </div>
                                <div class="">
                                    <h4><p>'.$row["phone"].'</p></h4>
                                    <div class="entry-meta small muted">
                                    </div>
                                </div>
                             
                            </div>
                        </div>                     
                    </div>
          </aside>  
            </div>
        <hr>
        </div>   
        </section>
  ';
 }
 echo $output;
}
else
{
 echo '<h2> Malumot kiritilmagan</h2>';
}
?>
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/jquery.js"></script>  
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/jquery.isotope.min.js"></script>  
  <script src="js/wow.min.js"></script>
  <script src="js/functions.js"></script>
