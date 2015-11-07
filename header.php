<?php session_start(); 

?>
<body>
<header>

<div class="col-md-6"> 	<img src="images/logo.png" />  </div>
<div class="col-md-6" align="right"> 	

<nav class="navbar">
  
      <ul class="nav navbar-nav navbar-right">
        
        
        
        <?php if($_SESSION['model']!=''){
		
		   $var = $_SESSION['model'];
		}
		else{
		  $var = $_SESSION['user'];
		}
		?>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo $var;?></a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        
        
      </ul>
 
</nav> 
 </div>

</header>
