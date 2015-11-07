<?php
  session_start();
	include('../connection.php');
	include('../classes.php');
	 include('head.php');
     include('header.php'); 
	 include('side_nav.php'); 
	$adduser = new adduser();
	if(!isset($_SESSION['chatture']))
	{
    	header('location:login.php');
	}
  
  ?>
   

<style>
.modal-body input{ margin-bottom:15px}
</style>
<?php   
         $username = $_SESSION['chatture'];
		 $data = $adduser->chattureDetails(chattures,ex.php,$username);
		 if($data!=''){
		 $chattureid = $data['id'];
		 
			if(isset($_POST['submit'])){
		 		$adduser->addModel(models,$chattureid,'index.php');
			}
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
		
		<input type="text" class="form-control" placeholder="Date of Birth" name="dob"/>
		<input type="text" class="form-control" placeholder="Age" name="age"/>
		<input type="text" class="form-control" placeholder="Sex" name="sex"/>
		<input type="text" class="form-control" placeholder="Interested In" name="interestedIn"/>
        <input type="password" class="form-control" placeholder="Country" name="country"/>
        <input type="password" class="form-control" placeholder="Contact Number" name="contact"/>
        
        <input type="text" class="form-control" placeholder="Email Id" name="email"/>
		<input type="text" class="form-control" placeholder="Password" name="password"/>
		<input type="text" class="form-control" placeholder="Language" name="language"/>
		<input type="text" class="form-control" placeholder="Body Type" name="bodyType"/>
        <input type="password" class="form-control" placeholder="Smoking/Drinking yes no" name="smoking"/>
        <input type="password" class="form-control" placeholder="Body Decoration" name="bodyDecoration"/>
        <input type="password" class="form-control" placeholder="About tMe" name="aboutMe"/>
		
		  <button type="submit" class="btn btn-default" name="submit" > Submit  </button>
		</form>
		
        </div>
        <div class="modal-footer">
        
        </div>
      </div>
      
    </div>
       
  </div>
    <h1 style="color:#66FF33"><b><em>Welcome Chatture</em></b></h1>
 
 <!-- Add chatture form end -->