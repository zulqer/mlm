<?php 
include('common2.php');
$detail = new adduser(); 
$email = $_SESSION['email'];
$data = $detail->modelDetails(models,$email); 
?>
<style>
	.edit{
		width:200px; 
		
	}
	
</style>
<link type="text/css" rel="stylesheet" href="css/jquery-te-1.4.0.css">
<div class="container" id="edit">
	
    <div class="row">
    	<div class="col-md-4">
        	<h2>Edit Profile</h2>        
        </div>

    </div>
   <form>
    <div class="row">        
        <div class="col-md-6">
        <h4><strong>Basic Information</strong></h4>
        	
            <table>
            	<tr >
                    <td class="edit">  Full Name</td>
                	<td><input class="form-control" type="text" name="fullname" value="" required></td>
                </tr>
                <tr>
                    <td class="edit"> Email Address</td>
                	<td><input class="form-control" type="text" name="email" value="<?php //echo $member->email; ?>" required></td>
                </tr>
                <tr>
                    <td class="edit">  Alias</td>
                	<td><input  class="form-control" type="text" name="alias" value="<?php //echo $member->alias; ?>" required ></td>
                </tr>
                <tr>
                    <td class="edit">  Birth Date</td>
                	<td><input class="form-control"  type="text" name="birthdate" value="<?php //echo $member->birthdate; ?>" placeholder="yyyy-mm-dd" required></td>
                </tr>
                <tr>
                    <td class="edit"> City</td>
                	<td><input class="form-control"  type="text" name="address_city" value="<?php //echo $member->address_city; ?>" required></td>
                </tr>
                <tr>
                    <td class="edit">  State</td>
                	<td><input class="form-control"  type="text" name="address_state" value="<?php //echo $member->address_state; ?>" required></td>
                </tr>
                <tr>
                    <td class="edit">  Country</td>
                	<td><input class="form-control"  type="text" name="address_country" value="<?php // echo $member->address_country; ?>" required></td>
                </tr>
                <tr>
                    <td class="edit">  Zipcode</td>
                	<td><input class="form-control"  type="text" name="address_zipcode" value="<?php //echo $member->address_zipcode; ?>" required></td>
                </tr>
                <tr>
                    <td><strong>Preferences</strong><small>(Where you belong)</small></td>
                </tr>
               
               <tr>
               	<td> <input   type="checkbox" name="categories[]"  /> Girls</td>
                <td><input   type="checkbox" name="categories[]"  /> Transgendered</td>
               </tr>
               <tr>
               	<td> <input type="checkbox" name="categories[]"  /> Lesbian</td>
                <td><input type="checkbox" name="categories[]"  /> Gay</td>
               </tr>
               <tr>
               	<td> <input type="checkbox" name="categories[]"  /> Male</td>
                <td><input type="checkbox" name="categories[]"  /> Teen 18-19</td>
               </tr>
               <tr>
               	<td> <input type="checkbox" name="categories[]"  /> Fetish</td>
                <td><input type="checkbox" name="categories[]"  /> Ethnicity</td>
               </tr>
               <tr>
               	<td> <input type="checkbox" name="categories[]"  /> Asses</td>
                
               </tr>
               
                <tr>
                    <td><strong>Identification Card</strong></td>
                </tr>
               
               <tr>
                    <td class="edit">Card Type</td>
                    <td><input class="form-control"  type="text" name="identity_type" value="<?php //echo $member->identity_type; ?>" placeholder="Drivers license, social security, etc."></td>
                </tr>
                <tr>
                    <td class="edit">Card Number</td>
                    <td><input class="form-control"  type="text" name="identity_number" value="<?php //echo $member->identity_number; ?>"></td>
                </tr>
                <tr>
                    <td class="edit">Card SSN</td>
                    <td><input class="form-control"  type="text" name="identity_ssn" value="<?php //echo $member->identity_ssn; ?>"></td>
                </tr>

				<tr>
                    <td class="edit">Upload Card Picture </td>
                    <td><input class="form-control"  type="file" name="userfile"></td>
                </tr>
	                <tr><td><small>Note: Leave this field if you don't want to overwrite your current ID picture</small></td></tr>
            </table>			    		
		    </form>
    </div>
        
        <div class="col-md-6">
         <h4><strong>My Bio</strong></h4>
            <form>
            <table>
              <tr>
                    <td class="edit"> Weight</td>
                	<td><input class="form-control"  type="text" name="weight" value="<?php //echo $member->weight; ?>"></td>
                </tr>
                
                <tr>
                    <td class="edit"> Height</td>
                	<td><input class="form-control"  type="text" name="height" value="<?php //echo $member->height; ?>"></td>
                </tr>
                
                <tr>
                    <td class="edit"> Eye Color</td>
                	<td><input class="form-control"  type="text" name="eye_color" value="<?php //echo $member->eye_color; ?>"></td>
                </tr>
                
                <tr>
                    <td class="edit"> Race</td>
                	<td><input class="form-control"  type="text" name="race" value="<?php //echo $member->race; ?>"></td>
                </tr>
                
                <tr>
                    <td class="edit"> Hair Color</td>
                	<td><input class="form-control"  type="text" name="hair_color" value="<?php // echo $member->hair_color; ?>"></td>
                </tr>
                
                <tr>
                    <td class="edit"> Hair Length</td>
                	<td><input class="form-control"  type="text" name="hair_length" value="<?php //echo $member->hair_length; ?>"></td>
                </tr>
                <tr>
                    <td class="edit">Favorite Positions</td>
                	<td><textarea  class="form-control"  name="favorite_position"><?php //echo $member->favorite_position; ?></textarea></td>
                </tr>
                <tr>
                    <td class="edit"> Fantasies</td>
                	<td><textarea class="form-control"  name="fantasies"><?php //echo $member->fantasies; ?></textarea></td>
                </tr>
                <tr>
                    <td class="edit"> Hobbies</td>
                	<td><textarea class="form-control"  name="hobbies"><?php //echo $member->hobbies; ?></textarea></td>
                </tr>
                <tr>
                    <td class="edit">About Me</td>
                	<td><textarea class="form-control"  name="about_me" class="jqte-test"><?php //echo $member->about_me; ?></textarea></td>
                </tr>
                </table>
                
                    
                
                
        
        </div>
        

    </div>
    <button type="submit" class="btn btn-link inline">Save</button>
    <button type="submit" class="btn btn-link"><a href="modelDashboard.php">Cancel</a></button>
</form>
</div>