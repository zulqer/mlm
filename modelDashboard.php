<?php
  
  		session_start(); 
  		if($_SESSION['model']==''){
   			header('location:index.php');
  		}
  		include('connection.php');
  		include('classes.php');
  		include('head.php');
  		include('header.php');
  		$adduser = new adduser();
  
?>

<div class="container">
	<div class="row">
    	<div class="col-md-6">
        	<button class="btn btn-default btn-lg"><a href= "#" style="color:#FF0000;text-decoration:none;">GO LIVE NOW </a></button>
        </div>
    </div>
</div>