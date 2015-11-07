<?php
  include('connection.php');
  include('classes.php');
  echo $_REQUEST['mg'];
  
  $adduser = new adduser();
  
  $adduser->user(user,'nextreg.php');
  
?>