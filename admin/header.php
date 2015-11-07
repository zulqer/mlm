<?php session_start(); ?>
<body>
<header>

<div class="col-md-6"> 	<img src="images/logo.png" />  </div>
<div class="col-md-6" align="right"> 	

<nav class="navbar">
  
      <ul class="nav navbar-nav navbar-right">
        <?php if($_SESSION['admin']){?>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['admin'];?></a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        <?php }?>
      </ul>
 
</nav> 
 </div>

</header>
