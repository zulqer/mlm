<?php
    session_start();
	include('../common.php');
	$class = new adduser();
	
	if(isset($_POST['login'])){
    	if (empty($_POST['username']) || empty($_POST['pass'])) {
			$error = "blank data";
		}
 		else{
      		$username=$_POST['username'];
      	 	$password=$_POST['pass'];
			
     		if($class->check_login('admin',$connection, $username, $password)){
        		echo $_SESSION['admin']=$username;
				header("location:index.php");
     		}
 			else{
     			echo $msg= "username and password incorrect";    
     		}
     
 	   }
	}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Login </title>


<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<script language="javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  
  <style>
  .login{ margin-top:15%}
  .login_form{ background:#000; padding:30px; border-radius:2px; box-shadow:0 5px 10px #000000}
  .login_form{ width:26%; margin:auto }
  .login_form input{ margin-bottom:20px}
   body{ background:#FFCAE4}
  .admin{ text-align:center; color:#FFF; font-size:25px; }
  .login p a {
    float:left;
	color:red;
  }
  </style>
  
</head>

<body>

<div class="login">

<form action="" method="post" class="login_form" style="z-index:999999999999999">
<p><img src="../images/logo.png" width="100%" /></p>
<p class="admin"> Admin </p>
<input type="text" placeholder="Email Id" class="form-control" name="username"/>
<input type="password" placeholder="Password" class="form-control" name="pass"/>
<p><a href="" >Forgot Password ?</a></p>
<p align="right"><button type="submit" class="btn btn-primary" name="login">Login</button></p>
</form>
</div>


</body>
</html>
