<?php
session_start();
include('../connection.php');
include('../classes.php');
$adduser = new adduser();
if(!isset($_SESSION['admin']))
{
    header('location:login.php');
}
?>

<!-- this is tempraory menu     -->
<div class="menu2">
    <a href="#1">Add Chatture</a>
    <a href="#2">Dummy</a>
    <a href="#3">Dummy</a>
    <a href="#4">Dummy</a>
    <a href="#5">Dummy</a>
   	<?php if($_SESSION['admin']){?>
    	<a  href="logout.php" style="position:absolute;right:1%;">Logout </a>
    	<a  style="position:absolute;right:8%;"><?php echo "Welcome:  ".'&nbsp;&nbsp;&nbsp;' .$_SESSION['admin'];?> </a>
    <?php }?>
</div>
<style>

div.menu2
{
    /*width:500px;margin:0 auto;*//*Uncomment this line to make the menu center-aligned.*/
    text-align:center;
    background-image: url(../images/bg1.gif);
    border:1px solid black;
    font-size:0;
}

div.menu2 a
{
    display: inline-block;
    padding: 0 20px;
    background-image: url(../images/bg.gif);
    color:White;
    text-decoration:none;
    font: bold 12px Arial;
    line-height: 32px;
}

div.menu2 a:hover, div.menu2 a.current
{
    background-position:0 -60px;
}

div.menu2 a.dummy
{
    width:2px;
    padding:0 0;
}

 .abc tr td{
	padding:10px;

}
.abd tr td input{
	height:30px;

}

.foo {   
    float: right;
    width: 150px;
    height: 200px;
    margin: 5px;
    border-width: 1px;
    border-style: solid;
    border-color: rgba(0,0,0,.2);
	text-align:center;
}
</style>



<?php 
		if(isset($_POST['submit'])){
		 	$adduser->addchattures(chattures,'index.php',1);
		     
		}	
		
	
?>
<div class="foo" style="background-color:#ab3fdd;">
<h2 style="color:#FFFFFF;">Sold Chips</h2>
<h1 style="color:#FFFFFF;"><?php echo $chip = $adduser->sumCoulmn(chip_sold,chip_value);?></h1>
<a href="#" style="text-decoration:none;padding:5px;background-color:#3399FF;">view all</a>
</div>

<div class="foo" style="background-color:#ab3fdd;">
<h2 style="color:#FFFFFF;">Total Earning</h2>
<h1 style="color:#FFFFFF;"><?php echo '$'.$earning = $adduser->sumCoulmn(chip_sold,chip_price);?></h1>
<a href="#" style="text-decoration:none;padding:5px;background-color:#3399FF;">view all</a>
</div>


<div class="foo" style="background-color:#ab3fdd;">
<h2 style="color:#FFFFFF;">Models</h2>
<h1 style="color:#FFFFFF;"><?php echo $total = $adduser->rowCount(models); ?></h1>
<a href="#" style="text-decoration:none;padding:5px;background-color:#3399FF;">view all</a>
</div>
   
<div class="foo" style="background-color:#669900;">
<h2 style="color:#FFFFFF;">User</h2>
<h1 style="color:#FFFFFF;"><?php echo $total = $adduser->rowCount(user); ?></h1>
<a href="#" style="text-decoration:none;padding:5px;background-color:#3399FF;">view all</a>
</div>

<div class="foo" style="background-color:#0000FF;">
<h2 style="color:#FFFFFF;">Chatture</h2>
<h1 style="color:#FFFFFF;"><?php echo $total = $adduser->rowCount(chattures); ?></h1>
<a href="#" style="text-decoration:none;padding:5px;background-color:#3399FF;">view all</a>
</div>

<div id="addform" style="position:absolute;top:10%;width:500px;" >
	<form action="" method="post">
    	<table class="abc abd">
    		<tr>
    			<td width="200px">Full Name</td>
    			<td><input type="text" name="name"></td>
            </tr>
            <tr>    
                <td width="200px">Organization</td>
    			<td><input type="text" name="org"></td>
            </tr>    
            
            
            <tr>    
                <td width="200px">Country</td>
    			<td><input type="text" name="country"></td>
            </tr>    
            
            <tr>    
                <td width="200px">Contact Number</td>
    			<td><input type="text" name="contact"></td>
            </tr>    
            
            
            <tr>    
                <td width="200px">Email Id</td>
    			<td><input type="text" name="email"></td>
            </tr>    
            
            
            <tr>
                <td width="200px">Password</td>
    			<td><input type="text" name="pass"></td>
           </tr>     
           
           
           <tr>     
                <td width="200px">Confirm Password</td>
    			<td><input type="text" name="cpass"></td>
    		</tr>
            
            <tr>     
                <td width="200px"></td>
    			<td><input type="submit" name="submit" value="Submit"></td>
    		</tr>
    	</table>
    </form>

</div>







