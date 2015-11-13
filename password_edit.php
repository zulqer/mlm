<?php 
include('common2.php');
<style>
	.edit{
		width:200px; 
		
	}
	
</style>

<div class="container">

	<div class="row">
    	<div class="col-md-4">
        	<h2>Change Password</h2>        
        </div>

    </div>
    <form action="">
    	<div class="row">
    		<div class="col-md-6">
        		<strong>Enter your new password</strong>
                <table>
                	<tr>
                    	<td class="edit">Password</td>
                        <td ><input type="password" class="form-control"/></td>
                    </tr>
                    <tr>
                    	<td class="edit">Confirm Password</td>
                        <td ><input type="password" class="form-control"/></td>
                    </tr>
                </table>
        	</div>
    	</div>
        <button class="btn btn-link inline">Save</button>
        <button class="btn btn-link inline"><a href="modelDashboard.php">Cancel</a></button>
	</form>

</div>