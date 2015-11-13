<?php
 include('../includes/chatture/header.php');
 include('../includes/chatture/head.php');
 include('../common.php');
 
 $email = $_SESSION['chatture'];
 $classobj = new adduser();
 $result = $classobj->chattureDetails(chattures,$email);
 $chattureid = $result['id'];
 $result2 = $classobj->modelDetails(models,'',$chattureid);
 $count = count($result2);
?>
    

	<div>
  	<div class="row">
    	<div class="col-xs-3">
        	<?php include('../includes/chatture/side_nav.php'); ?>
        </div>
        <div class="col-xs-9">
         <div style="margin-top:10px;background-color:#666666;height:50px;padding:7px">
        	<form class="form-inline">
          		<input type="text" name="search" placeholder="search" class="form-control"/>
          		<input type="text" name="search" placeholder="search" class="form-control "/>
          		<input type="text" name="search" placeholder="search" class="form-control "/>
        	</form>
         </div>
         <div>
            <table class="table table-striped table-hover table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Emailid</th>
        <th>Country</th>
      </tr>
    </thead>
    <tbody>
      <?php for($i=0;$i<$count;$i++) { ?>
      <tr>
        <td><?php echo $result2[$i]['name'] ?></td>
        <td><?php echo $result2[$i]['emailid'] ?></td>
        <td><?php echo $result2[$i]['country'] ?></td>
      </tr>
      <?php }?>
    </tbody>
  </table>
         </div>
        
        </div>
    </div>
  
  </div>