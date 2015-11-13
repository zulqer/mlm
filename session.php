<?php
  session_start();
  if(!issest($_SESSION['email'])){
    header("location:index.php");
  }
 ?>