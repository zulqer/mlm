<?php
  include('common.php');
  $adduser = new adduser();
  
  if(isset($_POST['login'])){
     if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Please enter data";
			}
			else{
			   
			$result=$adduser->login(); 
			//print_r($result);
			if($result['success']=='1'){
		     $_SESSION['email']=$result['email'];
			 $_SESSION['role']=$result['role'];
			
		//	print_r($result);
		//	die;
			if($result['role']=='user'){
			  header("location:userDashboard.php");
			}
			else{
			
			header("location:modelDashboard.php");
			
			
			}
			}else{
			
			}
			}
			
  
  } 
  
  
?>