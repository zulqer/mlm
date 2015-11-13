<?php
include('common2.php'); 

if(!isset($_SESSION['email'])){
   	header('location:index.php');
}
$detail = new adduser(); 
$email = $_SESSION['email'];
$data = $detail->modelDetails(models,$email,''); 
if($data['image']!=''){
		$image = $data['image'];
		
}else{
   $image = 'blank-face.png';
}
$adduser = new adduser();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>
      .mytab li a{
	  color:#FF0000;
	  }
	  #live {
	    margin-top:20px;
	  }
	  #mytable tr th{
	    width:150px;
	   }
	  
  </style>
</head>
<body>

<div class="container ">
<button class="btn btn-default btn-lg" id="live"><a href= "#" style="color:#FF0000;text-decoration:none;">GO LIVE NOW </a></button>
  <ul class="nav nav-tabs mytab">
    <li class="active"><a data-toggle="tab" href="#home">My Earning</a></li>
    <li><a data-toggle="tab" href="#menu1">Session History</a></li>
    <li><a data-toggle="tab" href="#menu2">My Profile</a></li>
    <li><a data-toggle="tab" href="#menu3">Chatroom</a></li>
    <li><a data-toggle="tab" href="#menu4">My Photos</a></li>
    <li><a data-toggle="tab" href="#menu5">My Videos</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Your Current Earnings: $0.00</h3>
       <strong>Payout information</strong><br><br>
       <p> Minimum Payout Amount: </p>
       <p> Payout Method: </p>
       <p> Payment Information: </p>      
      
      <button class="btn btn-default"><a href="payout_edit.php"style="color:#FF0000">Edit payout</a></button>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Your Commission Rate:</h3>
      <table border="0" id="mytable">
      	<tr>
        	<th>From<th>
            <th>Chat Type<th>
            <th>Chip Thrown<th>
            <th>Total<th>
            <th>Date<th>
            
        
        </tr>
      </table>
      	<div style="position:absolute;top:600px;right:5%">
			<strong>Subtotal: $ 0.00</strong> 
                                     
		</div>
        <div style="position:absolute;top:620px;right:5%">
			<small>Note: Every hour, the system checks your sessions and convert it into your earnings.</small> 
                                     
		</div>
    </div>
    <div id="menu2" class="tab-pane fade">
      	<div class="row">
        	<div class="col-md-6">
            	<h4>Basic information</h4>
                <table>
                	<tr><td>Username:</td> <td></td> <td></td></tr>
                    <tr><td>Full Name:</td> <td></td> <td></td></tr>
                    <tr><td>Email Address:</td> <td></td> <td></td></tr>
                    <tr><td>Alias:</td> <td></td> <td></td></tr>
                    <tr><td>Birth Date:</td> <td></td> <td></td></tr>
                    <tr><td>Address:</td> <td></td> <td></td></tr>
                    <tr><td>Birth Date:</td> <td></td> <td></td></tr>
                    <tr><td>Birth Date:</td> <td></td> <td></td></tr>
                	<tr><td></td><td></td><td></td></tr>
                    <tr><th>Preferences</th><td></td><td></td></tr>
                	<tr><td>N/A</td><td></td><td></td></tr>
                    <tr><th>Identification Card</th><td></td><td></td></tr>
                    <tr><td>Card Type</td><td></td><td></td></tr>
                    <tr><td>Card Number</td><td></td><td></td></tr>
                    <tr><td>Card SSN</td><td></td><td></td></tr>
                    <tr><td>Card Picture</td><td></td><td></td></tr>
                </table>
                
            </div>
            <div class="col-md-6">
            <h4>My Bio</h4>
            <table>
            	<tr><td>Weight:</td> <td></td> <td></td></tr>
                <tr><td>Height:</td> <td></td> <td></td></tr>
                <tr><td>Eye Color:</td> <td></td> <td></td></tr>
                <tr><td>Race:</td> <td></td> <td></td></tr>
                <tr><td>Hair Color:</td> <td></td> <td></td></tr>
                <tr><td>Hair Length:</td> <td></td> <td></td></tr>
                <tr><td>Favorite Positions:</td> <td></td> <td></td></tr>
                <tr><td>Fantasies:</td> <td></td> <td></td></tr>
                <tr><td>Hobbies:</td> <td></td> <td></td></tr>
                <tr><td>About Me:</td> <td></td> <td></td></tr>
                <tr><th>Profile Picture</td> <td></td> <td></td></tr>
                <tr><th><img src="upload/<?php echo $image; ?>" height="150px" width="150px"></td> <td></td> <td></td></tr>
                
            </table>
            </div>
        </div>
        
        <div class="row">
        	<div class="col-md-2">
            	<button class="btn btn-link"><a href= "profile_edit.php" style="color:#FF0000;text-decoration:none;">Edit Profie</a></button>
            </div>
            <div class="col-md-2">
            	<button class="btn btn-link"><a href= "password_edit.php" style="color:#FF0000;text-decoration:none;">Change Password</a></button>
            </div>
        </div>
    </div>
    
    
    
    
    <div id="menu3" class="tab-pane fade">
      <h3>Chat room information</h3>
      <strong>Chat room name:</strong><br><br>
      <strong>Chat room description:</strong><br>
      
      <br><button class="btn btn-default">Edit chatroom</button>
    </div>
    
    <div id="menu4" class="tab-pane fade">
      <br><br>
      <strong>You have not uploaded any photos yet.</strong><br><br>
      <br><button class="btn btn-default">Upload Photo</button>
    </div>
    
    <div id="menu5" class="tab-pane fade">
      <br><br>
      <strong>You have not recorded any videos yet.</strong><br><br>
      
    </div>
  
  
  </div>
</div>

</body>
</html>
