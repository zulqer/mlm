<?php 
session_start(); 
//session_destroy();

/*if(!isset($_SESSION['email'])){
   			header('location:index.php');
  		}*/
?>
<body>
<header>

<div class="col-md-6"> 	<img src="images/logo.png" />  </div>
<div class="col-md-6" align="right"> 	

<nav class="navbar">
  
      <ul class="nav navbar-nav navbar-right">
        
        
        
        <?php 
		
		   $var = $_SESSION['email'];
		
		?>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo $var;?></a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        
        
      </ul>
 
</nav> 
 </div>

</header>
</body>