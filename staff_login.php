<?php 
include('db_connect.php');
$query ="SELECT * FROM branch_emp";
$results = $db->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Agrobank</title>
<link href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans|Francois+One:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="htt
ps://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	body {
		background-image: url('admin/images/back.jpg');
		
		font-family: 'Open Sans', sans-serif;
	}
    .form-control {
		min-height: 41px;
		background: #fff;
        border-color: #e3e3e3;
		box-shadow: none !important;
		border-radius: 4px;
	}   
	.form-control:focus {
		border-color: #99c432;
	}
	.login-form {
		width: 410px;
		margin: 0 auto;
		padding: 100px 0 30px;		
	}
    .login-form form {
		color: #999;
		border-radius: 10px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;	
		position: relative;	
    }
	.login-form h2 {		
		font-size: 24px;
		color: #454959;
        margin: 45px 0 25px;
		font-family: 'Francois One', sans-serif;
    }

    .login-form .btn {
        color: #fff;
        border-radius: 4px;
		text-decoration: none;
		transition: all 0.4s;
        line-height: normal;
        border: none;
    }
    .login-btn {        
        font-size: 16px;
        font-weight: bold;
		background: #33cc33;		
		margin-bottom: 20px;
    }
	.login-btn:hover, .login-btn:active {
		background: #86ac2d !important;
	}


</style>
<script src="jquery-3.2.1.min.js" type="text/javascript"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


</head>
<body id="hey">
<div class="login-form" >
    <form action="staff_server.php" method="POST">
        <h2 class="text-center">STAFF</h2>

        <div class="form-group col-md-12" id="heyy">
            <label>Viloyatlar</label>
                <select name="viloyat_id" class="form-control" onChange="getState(this.value);" >
                    <option value disabled selected>Viloyatni tanlang</option>
                    <?php foreach($results as $viloyat) { ?>
                    <option value="<?php echo $viloyat["id"]; ?>">
                        <?php echo $viloyat["branch_id"]; ?>
                    </option>
                    <?php } ?>
                </select>
        </div> 

        
		<div class="form-group col-md-12" id="heyy">
            <input class="form-control " type="password" name="staff_login" placeholder="1234567" required="required">	
        </div> 
        	<div class="form-group col-md-12">
            <input class="form-control" type="password" name="staff_password" placeholder="*******" required="required">	<input type="hidden" name="xodim" value="xodim">
        </div>        
        <div class="form-group ">
            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn " name="log" >Кириш</button>
        </div>
        

    </form>    
</div>
</body>
</html>                             