<?php
  include('connection.php');
  include('db.inc.php'); 
  session_start();
   class adduser{
   
   
   		function Query()
		{
		
			$db = new DB();
		
		}
   
   
   		function mysqlqueryval($sql)
		{
		
			//$queryval=new Query();
			$query = $this->sqlquery($sql) or die(mysql_error());
			
			return $query;
		
		}
   		
		
		function sqlquery($sql)
		{ 	
			
			 return (@mysql_query($sql));			
		}
        
		
		
		function fetchassoc($sql)
		{ 
			 return (@mysql_fetch_assoc($sql));
		}	
		
		
		function fetcharray($sql)
		{ 			
			 return (@mysql_fetch_array($sql));
		}
		
		function rowCount($table){
			$sql = "SELECT * FROM $table";
			$query=$this->mysqlqueryval($sql);
			$result = mysql_num_rows($query);
			return $result;
		}

   	//////Function add user////////	
	
		function user($tablename,$url){
			$fname 			= 		$_POST['fname'];
  			$lname 			= 		$_POST['lname'];
  			$email 			= 		$_POST['email'];
  			$contact 		= 		$_POST['contact'];
  			$password 		= 		md5($_POST['password']);
  			$b_year 		= 		$_POST['birthday_year'];
  			$b_month 		= 		$_POST['birthday_month'];
  			$b_date 		= 		$_POST['birthday_day'];
  			$dob 			= 		$b_month."-".$b_date."-".$b_year;
  			$gender 		= 		$_POST['gender'];
  			$agree 			= 		$_POST['agree'];
  			$interest 		= 		$_POST['interest'];
  			$address 		= 		$_POST['address'];
  			$city 			= 		$_POST['city'];
  			$state 			= 		$_POST['state'];
			$country 		= 		$_POST['country'];
  			$postal 		= 		$_POST['postal'];
			
			$check="select * from user WHERE emailid='$email'";  
    				$run_query=mysql_query($check);  
  							if(mysql_num_rows($run_query)>0)  
   							 {  
								$msgs= "emailid already exists";  
							}else{
			 $file =  rand(100,500).$_FILES['file']['name'];
							 $file_loc = $_FILES['file']['tmp_name'];
								$file_size = $_FILES['file']['size'];
										$file_type = $_FILES['file']['type'];
											
							// new file size in KB
						   $new_size = $file_size/1024;  
						   // make file name in lower case
				           $new_file_name = strtolower($file);
						   // make file name in lower case
                           $final_file = str_replace(' ','-',$new_file_name);
						   $folder="../upload/".$final_file;
						   move_uploaded_file($file_loc,$folder);
						   		
			 $sql="INSERT INTO $tablename(fname,lname,dob,emailid,address,city,state,contact,interestedIn,postalcode,password,gender,countryid,uploadimage) VALUES('$fname','$lname','$dob','$email','$address','$city','$state','$contact','$interest','$postal','$password','$gender','$country','$final_file')";
             $result=mysql_query($sql) or die('errro in registration');
  
  			if($result){
        		$msg = "registration sucessfull";
				$sql2 = "SELECT * FROM $tablename order by id desc";
				$resultt=mysql_query($sql2) or die('errro fetching data');	
				$row = mysql_fetch_array($resultt);
				$id = $row['id'];
				$name = $row['fname'];
				$email = $row['emailid'];
				$password = $row['password'];
				$role = 'user';
				
				//// Enter data into login table////
				
				$sql3 = "INSERT INTO login(user_id,emailid,password,role) VALUES ('$id','$email','$password','$role')";
				$resultlogin=mysql_query($sql3) or die('errro in enter login data');
				
				header("location:$url?name=$name");
		
  			
				}
			
			}
		  
		}
   
   ///////////Function for user detail/////////////////
   
        function userDetail($table,$email){
			$sql = "SELECT * FROM $table where emailid= '".$email."'";
			$query=$this->mysqlqueryval($sql);
	    	$sqluserdetail=$this->fetcharray($query);
			return  $sqluserdetail;	 
		}
   
   
   
   //////  Function for login     /////
   
		function login($table,$url){
		 $email = $_POST['username'];
		 	$password = md5($_POST['password']); 
			
			 $querylog ="SELECT * FROM login WHERE emailid='".$email."' and password='".$password."'";
			  $resultttt =mysql_query($querylog) or die (mysql_error());
				 $rows = mysql_num_rows($resultttt);
				 $data = mysql_fetch_array($resultttt);
				 $role = $data['role']; 
				
				if($rows == 1) {
					$_SESSION['role']=$role;
					
		        	if($_SESSION['role']=='user'){
					    $_SESSION['user']=$email;
						header("location:$url");
					}
					else{
					 $_SESSION['model']=$email;
					  header("location:modelDashboard.php");
					}	
	            }  
		
				else{
		  			echo "Emailid or password incorrect";
		        }
		 	
   
       }
	   
	   
	   ////// function for add chattures   /////
	   
	   function addchattures($table,$url,$parentid){
	      $msg;
	      $success;
	      $data= array();
	      $name 				= 		$_POST['name'];
		  $organization 		= 		$_POST['org'];
		  $country 				= 		$_POST['country'];
		  $contactnumber 		= 		$_POST['contact'];
		  $level 				=  		$_POST['level'];
		  $email             	=       $_POST['email'];
		  $password         	=       md5($_POST['cpass']);
		      
		 
		 $sqlchattur ="insert into $table set 
							name='$name',
							organization='$organization',
							country='$country',
							contact_number='$contactnumber',
						    level= '$level',
							parent_chatture_id='$parentid',
							emailid='$email',
							password= '$password' ;
							";
							
							$result =$this->mysqlqueryval($sqlchattur);
							
							if($result)
							{
								
								$sql2 = "SELECT * FROM $table order by id desc";
								$resultt=mysql_query($sql2) or die('errro fetching data');	
								$row = mysql_fetch_array($resultt);
								
								$id = $row['id'];
								$name = $row['name'];
								$email = $row['emailid'];
								$password = $row['password'];
								//$role = 'model';
								
								$sqlchatturelogin ="insert into login set 
												    user_id='$id',
													emailid='$email',
													password='$password'
													";
								$result2 =$this->mysqlqueryval($sqlchatturelogin);
								
								
								$data["success"]=1;
								$_SESSION['addchatture'] = "Chatture has been added";
								header("location: $url");
								exit;
								
							}else{
							$data["succes"]=0;
							}
							return $data;
	   
	   }
	   
	   
	   /////////////Function for Chatture Details//////////////
	   
	   function chattureDetails($table,$url,$username){
	   
        $sql = "SELECT * from $table WHERE emailid='".$username."'";
		$query=$this->mysqlqueryval($sql);
	    $sqlchhature=$this->fetcharray($query);
		return  $sqlchhature;	   
	   
	  }
	   
        
		
		////////////// Function for Add models ////////////////
		
		function addModel($table,$chattureid,$url){
		
		 $msg;
	     $success;
	     $data= array();
		
		 $name              =     $_POST['name'];
		 $dob          		=     $_POST['dob'];
		 $age         		=     $_POST['age'];
		 $sex         		=     $_POST['sex'];
		 $interested        =     $_POST['interestedIn'];
		 $country           =     $_POST['country'];
		 $language          =     $_POST['language'];
		 $bodyType          =     $_POST['bodyType'];
		 $smoking           =     $_POST['smoking'];
		 $bodyDecoration    =     $_POST['bodyDecoration'];
		 $aboutMe           =     $_POST['aboutMe'];
		 $contact           =     $_POST['contact'];
		 $email             =     $_POST['email'];
		 $password          =     md5($_POST['password']);
		 
		 $sqlmodel ="insert into $table set 
							chattureId='$chattureid',
							name='$name',
							dob='$dob',
							age='$age',
						    sex= '$sex',
							interestedIn='$interested',
							country= '$country',
							bodyType= '$bodyType',
							smokingDrinking= '$smoking',
							bodyDecoration= '$bodyDecoration',
							aboutMe='$aboutMe',
							contact='$contact',
							emailid='$email',
							password='$password',
							language='$language'
							";
		                   
						    $result =$this->mysqlqueryval($sqlmodel);
							
							if($result)
							{
								$sql2 = "SELECT * FROM $table order by id desc";
								$resultt=mysql_query($sql2) or die('errro fetching data');	
								$row = mysql_fetch_array($resultt);
								
								$id = $row['id'];
								$name = $row['name'];
								$email = $row['emailid'];
								$password = $row['password'];
								$role = 'model';
								
								$sqlmodellogin ="insert into login set 
												    user_id='$id',
													emailid='$email',
													password='$password',
													role='$role'";
								$result2 =$this->mysqlqueryval($sqlmodellogin);					
													
								$data["msg"] = "Has been added";
								$data["success"]=1;
								header("location: $url");
								exit;
								
							}else{
							$data["succes"]=0;
							}
							return $data;
		
		}
		
		
		
		////////////Function for Models Details////////////
		
		function modelDetails($table,$url,$id){
			
			$sql = "SELECT * from $table WHERE id='".$id."'";
			$query=$this->mysqlqueryval($sql);
	    	$sqlmodel=$this->fetcharray($query);
			return  $sqlmodel;
		
		}
		
		///////////////Function for model list//////////////
		
		function modelList($table){
			$arr=array();
			$sql = "SELECT * from $table ";
			$query=$this->mysqlqueryval($sql);
			while($sqlmodel=$this->fetcharray($query)){
				array_push($arr,$sqlmodel);
			}
			return  $arr;
		
		}
		
   
        ////////////Function for Country////////////
		
		function countryList($table,$url){
			$sql = "SELECT * from $table";
			$query=$this->mysqlqueryval($sql);
	    	$sqlcountry=$this->fetcharray($query);
			return  $sqlcountry;
		
		}
		
		
		////////////Function for  Add devloper////////////
		
		function addDevloper($table,$url){
		
		 $msg;
	     $success;
	     $data= array();
		
		 $region           =     $_POST['region'];
		 $organization     =     $_POST['organization'];
		 $country          =     $_POST['country'];
		 $address          =     $_POST['address'];
		 $pin              =     $_POST['pin'];
		 
		 
		 
		 $sqldevloper ="insert into $table set 
							region='$region',
							organization='$organization',
							country='$country',
							address='$address',
						    pin= '$pin'
							";
		                   
						    $result =$this->mysqlqueryval($sqldevloper);
							
							if($result)
							{
								
								$data["msg"] = "Has been added";
								$data["success"]=1;
								header("location: $url");
								exit;
								
							}else{
							$data["succes"]=0;
							}
							return $data;
		
		}
		
		
		
		
		////////////Function for Bank details///////////
		
		
		function bankdetail($table,$url,$userid){
			$sql = "SELECT * FROM $table WHERE user_id ='".$userid."'";
			$query=$this->mysqlqueryval($sql);
	    	$sqlbank=$this->fetcharray($query);
			return  $sqlbank;
		
		}
		
      
	  
	  ////////////Function for add Marketing Manager///////////
	  
	  function addManager($table,$url){
	  		
		 $msg;
	     $success;
	     $data= array();
		 
		 $name             =	 $_POST['name'];
		 $region           =     $_POST['region'];
		 $organization     =     $_POST['organisation'];
		 $country          =     $_POST['country'];
		 $designation      =     $_POST['designation'];
		 $contact          =     $_POST['contact'];	
		 
		 
		 $sqlmanager ="insert into $table set 
							name=$name,
							region='$region',
							organisation='$organization',
							country='$country',
							designation='$designation',
						    contact= '$contact'
							";
		                   
						    $result =$this->mysqlqueryval($sqlmanager);
							
							if($result)
							{
								
								$data["msg"] = "Has been added";
								$data["success"]=1;
								header("location: $url");
								exit;
								
							}else{
							$data["succes"]=0;
							}
							return $data;
		
		
			
	  
	  }
	  
	  /////////////Function for Marketing Manager details///////////////
	  
	  function managerdetail($table,$url,$id){
			$sql = "SELECT * FROM $table WHERE id ='".$id."'";
			$query=$this->mysqlqueryval($sql);
	    	$sqlmanager=$this->fetcharray($query);
			return  $sqlmanager;
		
	  }
	  
	  
	  /////////Function for Chip Earning Model details //////////
	  
	  function earingModel($url,$modelid,$userid){
	  	    $sql = "SELECT * FROM $table WHERE model_id ='".$modelid."' AND user_id='".$userid."'";
			$query=$this->mysqlqueryval($sql);
	    	$sqlchip=$this->fetcharray($query);
			return  $sqlchip;
	  		
	  
	  
	  }
	  
	  
	  
	  /////////Function for Chip Investment by user details//////////
	  
	  function userInvestment($url,$modelid,$userid){
	  	    $sql = "SELECT * FROM $table WHERE model_id ='".$modelid."' AND user_id='".$userid."'";
			$query=$this->mysqlqueryval($sql);
	    	$sqlinvest=$this->fetcharray($query);
			return  $sqlinvest;
	  		
	  
	  
	  }
	  
	  
	  //////////////Function for Sales Marketing//////////////
	  
	  function addSalesMarket($table,$url,$parentid){
			$msg;
	     	$success;
	     	$data= array();
		    $parentid         =     $_POST['parentid'];
		 	$name             =	    $_POST['name'];
		 	$pin              =     $_POST['pin'];
		 	$organization     =     $_POST['organization'];
		 	$country          =     $_POST['country'];
			$address          =     $_POST['address'];
		 	$level            =     $_POST['level'];
			
			
			$sqlsalesmarketing ="insert into $table set 
							parent_id='$parentid',
							name='$name',
							pin='$pin',
							organization='$organization',
							country='$country',
							designation='$designation',
						    level= '$level'
							";
		                   
						    $result =$this->mysqlqueryval($sqlsalesmarketing);
							
							if($result)
							{
								
								$data["msg"] = "Has been added";
								$data["success"]=1;
								header("location: $url");
								exit;
								
							}else{
								$data["succes"]=0;
							}
							return $data;
	
	  
	  
	  }
	  
	  
	  /////////////Function for sales marketing details//////////////
	  
	  function salesMarketingDetail($table,$url,$id,$parentid){
	  		$sql = "SELECT * FROM $table WHERE id ='".$id."' AND parent_id='".$parentid."'";
			$query=$this->mysqlqueryval($sql);
	    	$sqlsales=$this->fetcharray($query);
			return  $sqlsales;
	  
	  }
	  
	  
	  
	  //////////////////Function for payment distribution//////////////////////
	  
	  
	  function paymentDistribution($table,$url,$recieverid,$receivertype,$amount,$regardingpaymentid){
	  
	  		  $sqlpayment ="insert into $table set 
							reciever_id=$recieverid,
							receiver_type=$receivertype,
							amount='$amount',
							regarding_payment_id='$regardingpaymentid'
							";
		                   
						    $result =$this->mysqlqueryval($sqlpayment);
							
							if($result)
							{
								
								$data["msg"] = "Has been added";
								$data["success"]=1;
								header("location: $url");
								exit;
								
							}else{
								$data["succes"]=0;
							}
							return $data;
	  
	  
	  }
	  
	  
	  
	 ////////Functiom for check login/////////
	 
	 function check_login($table,$connection,$username,$password){
        $sql="SELECT * FROM $table WHERE emailid='".$username."' and password='".$password."' and status='1' ";
    	$queryResult=$connection->query($sql);
    	if(!$queryResult)
    	{
        	return FALSE;
    	}
 		else{
       			$rows = mysqli_num_rows($queryResult);
				if ($rows == 1)
				{
					$_SESSION['chatture']=$username; // Initializing Session
		            return TRUE;
                } 
				else {
				      return FALSE;
				} 
      }
     
    return TRUE;  
    }
	
	
	///////function for select chips ///////
	 
	 function chipList($table,$id){
	    $arr=array();
	 	$sql="SELECT * FROM $table where status='1'";
		if(!empty($id)){
		 $sql .=" AND id='$id'";
		}
		$query=$this->mysqlqueryval($sql);
	    while($sqlchip=$this->fetcharray($query)){
		array_push($arr,$sqlchip);
		}
		return  $arr;
	 } 
	 
	 
	 /////////Function for Add chip/////////
	 
	 function addChip($table,$email,$value,$url,$valuee,$price,$userid){
	   
	   $msg;
	   $success;
	   $data= array();
	   $sql = "UPDATE $table SET availableChips='".$value."' where emailid = '".$email."'";
	   $result =$this->mysqlqueryval($sql);
							
							if($result)
							{
								
								$this->insertChip(chip_sold,$valuee,$price,$userid);
								$data["msg"] = "Has been updated";
								$data["success"]=1;
								header("location: $url");
								exit;
								
							}else{
								$data["succes"]=0;
							}
							return $data;

	 
	 }
	 
	 
	 //////////function for add chip detail with user in chip_sold table///////////
	 
	 function insertChip($table,$value,$price,$userid){
	  
    $sqlinsertchip ="insert into $table set 
							user_id='$userid',
							chip_price='$price',
							chip_value='$value'
							";
		                   
						    $result =$this->mysqlqueryval($sqlinsertchip);
							
							if($result)
							{
								
								$data["msg"] = "Has been added";
								$data["success"]=1;
								
								
							}else{
								$data["succes"]=0;
							}
							return $data;
	 
	 }
	 
	 
	 //////////////Function for sum any column////////////////
	 
	 function sumCoulmn($table,$coulmn){
	 	$sql = "SELECT SUM($coulmn) as total FROM $table";
		$result =$this->mysqlqueryval($sql);
	    while($row = mysql_fetch_array($result)){
		
		   $sum = $row['total'];
		}	
		return $sum;
	 
	 }
	 
	  
}
  
?>