<?php
 //error_reporting();
 include('../includes/admin/head.php');
 include('../includes/admin/header.php');  
 include('../includes/admin/side_nav.php');
  //session_start();
 include('../common.php');
 $adduser = new adduser();
   
	   
?>
<style>
.modal-body input{ margin-bottom:15px}
</style>

<?php 
		if(isset($_POST['submit'])){
		 	$adduser->addchattures(chattures,'index.php',1);   
		}	
?>

<div class="col-md-10" >
 <!-- Add chatture form -->
 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content"  style="width:70%; margin:auto">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="margin-top:-10px">&times;</button>
         
        </div>
        <div class="modal-body">
        <form action="" method="post">
		<input type="text" class="form-control" placeholder="Full Name" name="name" />
		
		<input type="text" class="form-control" placeholder="Organization" name="org"/>
		<input type="text" class="form-control" placeholder="Country" name="country"/>
		<input type="text" class="form-control" placeholder="Contact Number " name="contact"/>
		<input type="text" class="form-control" placeholder=" Email Id" name="email"/>
        <input type="password" class="form-control" placeholder="Password" name="pass"/>
        <input type="password" class="form-control" placeholder="Confirm Password" name="cpass"/>
		
		  <button type="submit" class="btn btn-default" name="submit" > Submit  </button>
		</form>
		
        </div>
        <div class="modal-footer">
        
        </div>
      </div>
      
    </div>
  </div>
 
 <!-- Add chatture form end -->
 
 
 
 
 
 
<div class="col-lg-12" style="background:#ececec; box-shadow:0 1px 5px #000000; padding-bottom:50px; margin-top:10px; text-align:center">

<div class="col-md-2 box1 btn-primary">
<h2>Earning </h2>
<h1><strong><?php echo '$'.$earning = $adduser->sumCoulmn(chip_sold,chip_price);?></strong></h>


<select class="form-control">

<option> Today</option>
<option> Yesterday</option>
<option> This month</option>
<option> This year</option>

	</select>



</div>

<div class="col-md-2 box2 btn-success">

<h2> Sold Chips </h2>
<h1><strong><?php echo $chip = $adduser->sumCoulmn(chip_sold,chip_value);?></strong></h>
<select class="form-control">

<option> Today</option>
<option> Yesterday</option>
<option> This month</option>
<option> This year</option>
	</select>


</div>


<div class="col-md-2 box3 btn-info">

<h2> Models </h2>
<h1><strong><?php echo $total = $adduser->rowCount(models); ?></strong></h1>
<button type="button" class="btn btn-default">View</button>

</div>



<div class="col-md-2 box4 btn-warning">

<h2> Chatture </h2>
<h1><strong><?php echo $total = $adduser->rowCount(chattures); ?></strong></h1>
<button type="button" class="btn btn-default">view</button>

</div>


<div class="col-md-2 box5 btn-danger ">

<h2> User </h2>
<h1><strong><?php echo $total = $adduser->rowCount(user); ?></strong></h1>
<button type="button" class="btn btn-default">view</button>

</div>





</div>

 </div>

</body>
</html>
