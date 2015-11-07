<?php

error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);	
	$connection=  mysqli_connect("localhost", "root", "", "cyber");
	if(mysqli_connect_errno()){
    	die('could not connect to database'.mysql_errno());
	}

	
	
?>