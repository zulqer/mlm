<?php 

        //include('../classes.php'); 
        $adduser = new adduser();
  
		if(isset($_POST['submit'])){
		 	$adduser->addchattures(chattures,'index.php',1);
		     
		}	
		
	
?>


<div class="container">



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
  
</div>