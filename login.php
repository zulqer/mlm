<?php
  include('connection.php');
  include('classes.php');
  $adduser = new adduser();
  
  if(isset($_POST['login'])){
     if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Please enter data";
			}
			else{
			   
				$adduser->login(login,'index.php'); 
			}
			
  
  } 
  
  
?>