<?php 
 
 include('../includes/admin/header.php');
 include('../includes/admin/head.php');
 include('../common.php');
 
 $classobj = new adduser();
 $result2 = $classobj->modelDetails(models,'','');
 $count = count($result2);
?>
<div>
  	<div class="row">
    	<div class="col-xs-3">
        	<?php include('../includes/admin/side_nav.php'); ?>
        </div>
        <div class="col-xs-9">
         <div style="margin-top:10px;background-color:#666666;height:50px;padding:7px">
        	<form class="form-inline">
          		<input type="text" name="search" placeholder="search" class="form-control"/>
          		<input type="text" name="search" placeholder="search" class="form-control "/>
          		<input type="text" name="search" placeholder="search" class="form-control "/>
        	</form>
         </div>
         <div style="margin-top:20px">
            <table class="table table-striped table-hover table-bordered">
    <thead>
      <tr>
        <th>Model Name</th>
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
      <?php  }?>
    </tbody>
  </table>
         </div>
        
        </div>
    </div>
  
  </div>