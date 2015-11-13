<?php
 include('common2.php');
 ?>
 <style>
 .edit{
   width:250px;
 }
 .edit2{
   width:400px;
 }
 </style>
<div class="container">
	<div class="row">
		<div class="col-md-12">
        	<h2>Edit Payout setting</h2>
             <strong>Payout Preferences</strong><br>
             <table>
             	<tr >
                	<td class="edit"> Minimum Payout Amount </td>
                    <td class="edit2"> <select name="payout_min_amount" required class="form-control">
				    			<option value="100" >$100</option>
				    			<option value="200" >$200</option>
				    			<option value="500" >$500</option>
				    			<option value="800" >$800</option>
				    			<option value="1000">$1000</option>
				    			<option value="2500">$2500</option>
				    	</select>
                    </td>
                </tr>
                
                <tr>
                	<td class="edit">Payout method </td>
                    <td class="edit2"> <select name="payout_min_amount" required class="form-control">
				    			<option value="100" >paypal</option>
				    			<option value="200" >western union </option>
				    			<option value="500" >other</option>
				    			
				    	</select>
                    </td>
                </tr>
                
                <tr>
                	<td class="edit">Payment Information </td>
                    <td class="edit2"> <small>e.g. Email address for paypal, Full name for Western Union, or Complete address for Check</small></td>
                </tr>
                
                <tr>
                	<td class="edit"></td>
                    <td class="edit2"> <textarea name="payout_information" class="jqte-test" required style="width:400px"></textarea></td>
                </tr>
                
                <tr>
                	<td class="edit"></td>
                    <td class="edit2"> <button class="btn btn-default">save</button> <button class="btn btn-default"><a href="modelDashboard.php"> cancel</a></button></td>
                </tr>
                
             </table>
        </div>
    </div>
</div>    