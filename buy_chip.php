<?php 
	include('common2.php');
	$email = $_SESSION['email'];
	if($_SESSION['email']==''){
	  header('location:index.php');
	}
	
		
	
     $class = new adduser();
	 //function call for chip list
	 $data = $class->chipList('package','');

	if(isset($_POST['btnBuyChips'])){
       		 $packageid  =  $_POST['package'];
			 $result = $class->userDetail(user,$email);
	   		 $currentchips = $result['availableChips'];
			 $userid = $result['id'];
			
			  $dataa = $class->chipList('package',$packageid);
			
			  $value = $dataa[0]['chip_value'];
			  $price = $dataa[0]['chip_price'];
	   		  $totelchips = $value + $currentchips;
	   		  $class->addChip(user,$email,$totelchips,'buy_chip.php',$value,$price,$userid);
	   
	}


?>




<h1><em><b>Our Packages and Pricing</b></em></h1>
<div class="col-md-4">
	<form action="" method="post">
  		<select class="form-control " name="package">
  			<option  value="">Choose Package</option>
             <?php foreach($data as $value) {?>
             <option  value="<?php echo $value['id']; ?>"><?php echo $value['package_name'] ." $ ".$value['chip_price']." (".$value['chip_value']." chips".")" ; ?> </option>   
			<?php } ?>
  		</select>
        <input type="radio" class="" name="payment_option" value="gtbill" checked><label><strong>GTBill</strong> (Please visit <a href="http://gtbill.com" target="_blank">GTBill.com</a>, our authorized payment processor )</label>
        <input type="submit" name="btnBuyChips" value="Next" class="btn btn-primary">
        <a href="userDashboard.php"><button class="btn btn-default" >Cancel</button></a>
	</form>
</div>
