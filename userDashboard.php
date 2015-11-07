<?php
  include('connection.php');
  include('classes.php');
  include('header.php');
  include('head.php');
  $adduser = new adduser();
  session_start();
  $email=$_SESSION['user']; 
  if($_SESSION['user']==''){
   header('location:index.php');
  }
  $user = $_SESSION['user'];
  $result = $adduser->userDetail(user,$email);
  $currentchips = $result['availableChips'];
  
?>

<div class="foo" style="background-color:#13b4ff;height:500px">

<h3 style="text-align:center;color:#FFFFFF">Chat room history</h3>
</div>

<div class="foo" style="background-color:#ab3fdd;"></div>


<div class="foo" style="background-color:#ae163e;float:right;">
  <h1 style="text-align:center;color:#FFFFFF">Available chips</h1>
  <h1 style="text-align:center;color:#FFFFFF"> <?php echo $currentchips;?></h1>
</div>
<a href="buy_chip.php" style="padding:10px;background-color:#CCCCCC; text-decoration:none;position:absolute;top:52%;left:50%">Buy Chips</a>
<style>
.foo {   
    float: right;
    width: 200px;
    height: 200px;
    margin: 5px;
    border-width: 1px;
    border-style: solid;
    border-color: rgba(0,0,0,.2);
}

</style>
