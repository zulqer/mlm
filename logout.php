<?php
session_start();
if($_SESSION['user']!=''){
	session_destroy();
	header("location:index.php");
}
if($_SESSION['model']!=''){
	session_destroy();
	header("location:index.php");
}

?>

