<?php 
session_start();
if(isset($_SESSION['user'])){
   $user = $_SESSION['user'];
}
include('classes.php');
$class = new adduser();
?>

<!DOCTYPE html>
<html class="no-js" lang="en" >


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to CyberSensual</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
  <script src="js/vendor/modernizr.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>  
      <script src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript">
    $("document").ready(function(){    
          
      $(".member_login_form").submit(function(){
        var data = {
          "action": "login data"
        };
        data = $(this).serialize() + "&" + $.param(data);
        $('.ajax-message').html('Logging in... <br><br>');
        $.ajax({
          type: "POST",
          dataType: "json",
          url: "http://cybersensual.com/ajax/check_login", //Relative or absolute path
          data: data,
          success: function(data) {
            $(".ajax-message").html(
              data["ajax_response_message"]
            );

            if(data["status"] == 1) {
             $(location).attr('href','member/dashboard.html');
            }
            
          }
        });
        return false;
      });
    });
    </script>
  </head>
<body>
<div class="row">&nbsp;</div>
<div class="row">
  <div class="large-4 columns left logo_top">
   <a href="index.html"><img src="images/logo.png"></a>
  </div>
  <div class="large-8 columns">
      <div class="row collapse">
        
        
        <div class="large-5 columns right text-right">
          <div class="row collapse">
            <div class="large-12 columns cfooter">
                <?php if(!isset($user)){?>             
               <a href="#" data-reveal-id="signinModal" style="background:#ff004e; padding:12px; border-radius:30px">  LOGIN  &nbsp; <img src="images/key.png" style="margin-right:4px;"> </a> &nbsp; 
              <a href="#" data-reveal-id="signupModal" style="background:#ff004e; padding:12px; border-radius:30px">  SIGNUP</a>&nbsp;
              <?php }?>
              
			  <?php if(isset($user)){?>  
              <a href="userDashboard.php" style="background:#ff004e; padding:12px; border-radius:30px">  USER:<?php echo $user;?></a>&nbsp;
              <a href="logout.php"  style="background:#ff004e; padding:12px; border-radius:30px">  LOGOUT</a>&nbsp;
			  <?php }?>
              
              

              
		
                   <div id="signinModal" class="reveal-modal small" data-reveal>
                    <form action="login.php" method="post" class=""  accept-charset="utf-8" data-abide>
                      <h3 >Sign In</h3>              
                      
                      
                      <br>

                      
                      <div class="row">
                        <div class="large-12 columns ajax-message"></div>
                      </div>
                      <div class="row">
                        <div class="large-4 columns">Username</div>
                        <div class="large-8 columns">
                          <input type="text" name="username" required>
                          <small class="error">Username is required</small>
                        </div>
                        <div class="large-4 columns">Password</div>
                        <div class="large-8 columns">
                          <input type="password" name="password" required>
                          <small class="error">Password is required</small>
                        </div>         
                        
                        
                        
                        
                         <div class="large-4 columns">&nbsp;</div>
                        <div class="large-8 columns">
                      <p>   <a href="#"> Create New  Account </a>&nbsp;&nbsp;
                          <a href="#"> Forgot password?</a> </p><br>

        
                        </div>                
                        
                        
                        
                        
                               
                        <div class="large-4 columns">&nbsp;</div>
                        <div class="large-2 columns left">
                          <input type="submit" class="button suffix" value="Login" name="login">
                        </div>
                      </div>
                      <a class="close-reveal-modal">&#215;</a>
                    </form>
                  </div>
                  

                  <div id="signupModal" class="reveal-modal small" data-reveal data-options="close_on_background_click:false;close_on_esc:false;">
                    <form method="post" action="register.php" data-abide enctype="multipart/form-data">
                      <h3>Register</h3>
                      <p>Registration with CyberSensual is easy as one-click.</p>
                      <p>&nbsp;</p>                      
                      <div class="row">
                        <div class="large-4 columns">First name</div>
                        <div class="large-8 columns">
                          <input type="text" name="fname"  required>
                          <small class="error">First name is required</small>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-4 columns">Last name</div>
                        <div class="large-8 columns">
                          <input type="text" name="lname"  required>
                          <small class="error">Last name is required</small>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="large-4 columns">Email Address</div>
                        <div class="large-8 columns">
                          <input type="text" name="email"  required>
                          <small class="error">Email address is required</small>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="large-4 columns">Password</div>
                        <div class="large-8 columns">
                          <input type="password" name="password"  required>
                          <small class="error">Password is required</small>
                        </div>
                      </div>


                        <div class="row">
                        <div class="large-4 columns">Contact No</div>
                        <div class="large-8 columns">
                          <input type="text" name="contact"  required>
                          <small class="error">Contact no is required</small>
                        </div>
                      </div>
 
                      <div class="row">
                        <div class="large-4 columns">Upload image</div>
                        <div class="large-8 columns">
                          <input type="file" name="file">
                          <small class="error">Passwor is required</small>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="large-4 columns"> Birthday </div>
                        <div class="large-8 columns">
                        
                        
                        
                        
                       <select name="birthday_month" id="id_birthday_month" style="width:28%" required>
<option value="0"> Month </option>
<option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">August</option>
<option value="9">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>
<small class="error">Month is required</small>
<select name="birthday_day" id="id_birthday_day" style="width:30%">
<option value="0"> Day </option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<small class="error">Day is required</small>
<select name="birthday_year" id="id_birthday_year" style="width:30%">
<option value="0">Year-</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
<option value="1939">1939</option>
<option value="1938">1938</option>
<option value="1937">1937</option>
<option value="1936">1936</option>
<option value="1935">1935</option>
<option value="1934">1934</option>
<option value="1933">1933</option>
<option value="1932">1932</option>
<option value="1931">1931</option>
<option value="1930">1930</option>
<option value="1929">1929</option>
<option value="1928">1928</option>
<option value="1927">1927</option>
<option value="1926">1926</option>
<option value="1925">1925</option>
<option value="1924">1924</option>
<option value="1923">1923</option>
<option value="1922">1922</option>
<option value="1921">1921</option>
<option value="1920">1920</option>
<option value="1919">1919</option>
<option value="1918">1918</option>
<option value="1917">1917</option>
<option value="1916">1916</option>
<option value="1915">1915</option>
<option value="1914">1914</option>
<option value="1913">1913</option>
<option value="1912">1912</option>
<option value="1911">1911</option>
<option value="1910">1910</option>
<option value="1909">1909</option>
<option value="1908">1908</option>
<option value="1907">1907</option>
<option value="1906">1906</option>
<option value="1905">1905</option>
<option value="1904">1904</option>
<option value="1903">1903</option>
<option value="1902">1902</option>
<option value="1901">1901</option>
</select>
<small class="error">Year is required</small>          
             
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                  
                        </div>
                      </div>
                      
                      
                      
                      
                      
            <div class="row">
                        <div class="large-4 columns"> Gender </div>
                        <div class="large-8 columns">
                      
                      
                      <select name="gender" id="id_gender" required >
<option selected="selected" value=""> Gender</option>
<option value="m">Male</option>
<option value="f">Female</option>

</select>
                      
                          <small class="error">Gender is required</small>
                        </div>
                      </div>
                                 
                      
                      
                      
                      
                      
                      
                      
                      
                      <div class="row">
                        <div class="large-4 columns">&nbsp;</div>
                        <div class="large-8 columns">
                          <input type="checkbox" name="agree" required> I Agree 
                        </div>
                      </div>

                      <div class="row collapse">
                                                <p>&nbsp;</p>
                      </div>

						<div class="row">
                        <div class="large-4 columns">Interested In</div>
                        <div class="large-8 columns">
                          <input type="text" name="interest"  required>
                          <small class="error">Interest is required</small>
                        </div>
                      </div>

                      <div class="row">
                        <div class="large-4 columns">Address</div>
                        <div class="large-8 columns">
                          <input type="text" name="address"  required>
                          <small class="error">Address is required</small>
                        </div>
                      </div>

						<div class="row">
                        <div class="large-4 columns">City</div>
                        <div class="large-8 columns">
                          <input type="text" name="city"  required>
                          <small class="error">City is required</small>
                        </div>
                      </div>
						
                        <div class="row">
                        <div class="large-4 columns">State</div>
                        <div class="large-8 columns">
                          <input type="text" name="state"  required>
                          <small class="error">State is required</small>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="large-4 columns">Country</div>
                        <div class="large-8 columns">
                          <input type="text" name="country"  required>
                          <small class="error">Country is required</small>
                        </div>
                      </div>
                        
                        
                        <div class="row">
                        <div class="large-4 columns">Postal Code</div>
                        <div class="large-8 columns">
                          <input type="text" name="postal"  required>
                          <small class="error">Postal Code is required</small>
                        </div>
                      </div>
                        

                      <div class="row">
                        <div class="large-4 columns">&nbsp;</div>
                        <div class="large-2 columns left">
                          <input type="submit" class="button suffix" value="Register Me">
                        </div>
                      </div>
                      <a class="close-reveal-modal">&#215;</a>
                    </form>
                  </div>
                
                <div id="tocModal" class="reveal-modal large" data-reveal data-options="close_on_background_click:false;close_on_esc:false;">
                 <style>
p { margin-bottom:5px; }
</style>
<div class="row collapse inner">
	<div class="large-12 columns">	    		
		<div class="row">
			<div class="large-12 columns right">
				<h3 class="text-center">Terms and Conditions</h3>
				<h6 class="text-center">Inevitable Media Faction, Ltd.</h6>
				<hr>
	    		<dl class="tabs vertical" data-tab>
						  <dd class="active"><a href="#panel1">MEMBER</a></dd>
						  <dd><a href="#panel2">MODEL</a></dd>
						</dl>
						<div class="tabs-content">
						  <div class="content active" id="panel1">
						    <div class="large-3 columns">
						  		&nbsp;
						  	</div>
						  	<div class="large-9 coluns right">
						  		
								    1. <strong><u>PRECURSORY PROVISIONS : </u></strong>
								<br><br>
								
								    (A) Our websites are different from many other sites on the Internet as they contain communications provided by users
								<br><br>
								
								    and third parties that may be outside of our direct control.
								<br><br>
								
								    (B) Through the use of these Terms and Conditions, we are placing legal conditions on your use of these websites
								<br><br>
								
								    (www.cybersensual.com, hereinafter the "Websites"), and making certain promises to you.
								<br><br>
								
								    (C) Our first condition is that you must agree to all of the conditions in this set of Terms and Conditions of use
								<br><br>
								
								    (hereinafter "T&amp;C's" or "Agreement"). You do not need to use our Websites, therefore if you do not wish to be
								<br><br>
								
								    bound by each and every provision in this Agreement, then you are not welcome to use these Websites and should
								<br><br>
								
								    leave and use another service.
								<br><br>
								
								    (D) Our Websites exclusively for adults only. If you are under the age of eighteen (18),
								<br><br>
								
								    <strong> SORRY BUT, YOU ARE PROHIBITED FROM USING ANY OUR OUR WEBSITES.</strong>
								<br><br>
								
								    <strong> </strong>
								<br><br>
								
								    (E) If you do not understand all of the terms in this Agreement, then you should consult with a lawyer before using the
								<br><br>
								
								    Websites.
								<br><br>
								
								    (F) You MUST NOT disregard any portion of this Agreement. However, if there is a particular portion of this
								<br><br>
								
								    Agreement that you wish to avoid, you may contact us to negotiate a separate agreement prior to using the
								<br><br>
								
								    Websites. We do not guarantee that such negotiations will be successful. However, if you wish to discuss your
								<br><br>
								
								    own personalized Agreement, please contact us or have your attorney do so.
								<br><br>
								
								    2. <strong><u>USER TERMS:</u></strong>
								<br><br>
								
								    (A) {Us,} being the service provider. Cybersensual is the service provider ww.cybersensual.com . Just for the sake of legal clarity
								<br><br>
								
								    wherever our members terms and conditions use the pronoun such as (us, we, our, ours etc.) Those pronouns simply are
								<br><br>
								
								    referring to Cybersensual as the service provider for “www.cybersensual.com
								<br><br>
								
								    (B) {You,} being the user as a User of these websites, this agreement will refer to the user herein after as “You” or through
								<br><br>
								
								    any second person pronouns, such as Yours, etc. Hereinafter, the user of the websites shall be referred to in . Applicatory
								<br><br>
								
								    second person pronouns.
								<br><br>
								
								    (C) When the term Websites is being used in the TERMS AND CONDITIONS, it means www.cybersensual.com
								<br><br>
								
								    unless the agreement specifically says otherwise.
								<br><br>
								
								    3. <strong>Consideration</strong>
								<br><br>
								
								    <strong> </strong>
								    for consent to all of the provisions we’ve outlined in this agreement that have provided to
								<br><br>
								
								    “You” in the form of allowing you to use our websites and our services. “You” agree that such consideration is both
								<br><br>
								
								    sufficient, and that it is has been received upon your viewing or downloading any portion of any of our websites.
								<br><br>
								
								    4. <strong>Revisions to this Agreement</strong>
								<br><br>
								
								    (A) Periodically, “We” may change this agreement. “We” reserve the right to do so, and “You” specifically
								<br><br>
								
								    agree that “We “solely have this right. “You” agree that all modifications or changes to this agreement are
								<br><br>
								
								    enforced immediately upon posting. The updated or edited version repudiate any previous versions
								<br><br>
								
								    immediately upon posting, and the previous version has no legal effect.
								<br><br>
								
								    (B) If “We” change anything in this Agreement, “We” will change the "last modified date" at the top of this
								<br><br>
								
								    Agreement. “You” agree to re-visit this web page on a weekly basis, and to use the "refresh" button on “Your”
								<br><br>
								
								    browser when doing so. Upon each visit, “You” agree to note the date of the last revision to this Agreement.
								<br><br>
								
								    If the "last modified" date remains unchanged from the last time “You” reviewed this Agreement, then “You”
								<br><br>
								
								    may presume that nothing in the Agreement has been changed since the last time “You” read it. If the "last
								<br><br>
								
								    modified" date has changed, then “You” can be certain that something in the Agreement has been changed,
								<br><br>
								
								    and you agree that you will re-review the Agreement in its entirety and that “You” will agree to its terms or
								<br><br>
								
								    immediately STOP use of any Websites in the Network.
								<br><br>
								
								    (C) Waiver - if “You” fail to re-review this Agreement as required to determine if any of the terms have changed,
								<br><br>
								
								    “You” assume all responsibility for such neglect and “You” agree that such failure amounts to “Your”
								<br><br>
								
								    affirmative waiver of Your right to review the amended terms. We are not responsible for Your disregard of
								<br><br>
								
								    Your legal rights.
								<br><br>
								
								    5. <strong><u>CONSENT STATEMENT</u></strong>
								<br><br>
								
								    (A) “You” must agree to all of the terms in this Agreement before using the Websites or our services.
								<br><br>
								
								    (B) The way in which “You” can and will demonstrate Your affirmative acceptance of all of the terms in this Agreement: (C) If you click any link, button,
								    or other device, provided to “You” in any part of Our Websites' interface, then
								<br><br>
								
								    “You” have legally agreed to all of these T&amp;C's; or
								<br><br>
								
								    (D) By using our services. “You” understand and agree that “We” will consider any use of
								<br><br>
								
								    “Our” Websites as “Your” affirmation of “Your” complete and unconditional acceptance to all of the terms in this
								<br><br>
								
								    Agreement.
								<br><br>
								
								    6. <strong><u>ACCESS FEES AND MEMBER STATUS</u></strong>
								<br><br>
								
								    (A) Access and limited license - All Users may access certain public areas of the Site. “You” understand that all “We” are
								<br><br>
								
								    selling “You” is access to “Our” services as “We” provide them on occasion. “You” need to provide “Your” own access to
								<br><br>
								
								    the hardware and/or software to “You” - and You need to purchase or license the necessary hardware and software to
								<br><br>
								
								    access. the Website. This User Agreement covers all public and non-public areas of the Website.
								<br><br>
								
								    (B) Subject to all of the User Agreement and recognizing that and “Our” services, the Publisher grants “You” a limited,
								<br><br>
								
								    inclusive, non negotiable, irregular, personal license to access and use the Website and the materials within.
								<br><br>
								
								    Publisher provides the materials on this Website for the personal, non-commercial use by viewers, fans, visitors,
								<br><br>
								
								    subscribers and/or potential subscribers of said Website. “Users” of this Website are granted a single copy license to view
								<br><br>
								
								    materials limited to one computer only.
								<br><br>
								
								    (C) All materials on the Website shall be for private non-commercial use only, and all other use is STRICTLY PROHIBITED.
								<br><br>
								
								    Publisher reserves the right to limit the amount of materials viewed. You agree to prevent any unauthorized copying
								<br><br>
								
								    of the Website, or any of the materials within. Any unauthorized usage of the Website or any of the materials
								<br><br>
								
								    within terminates this limited license effective immediately. This is a license to use and access the Website for
								<br><br>
								
								    its intended purpose and is not a transfer of title. You will not copy or redistribute any of the content appearing on
								<br><br>
								
								    this Website. Publisher reserves the right to terminate this license at any time if “You” breach or violate any provision of
								<br><br>
								
								    this Agreement, in which case You will be obligated to immediately destroy any information or materials . “You” have
								<br><br>
								
								    downloaded, printed or copied from this Website. Offenders of this limited license may be prosecuted to the
								<br><br>
								
								    fullest extent under the applicable law.
								<br><br>
								
								    7. <strong><u>MEMBERSHIP TYPES, FEES AND PACKAGES</u></strong>
								<br><br>										
										<strong>Packages:</strong>
								    	<ol>
								    		<li>Basic $9.69 (138 + 20 chips, Non-Recurring and will expire in 20 days)</li>
								    		<li>Silver $49.69 (710 + 40 chips, Recurring and will expire in 30 days)</li>
								    		<li>Gold $99.69 (1424 + 70 chips, Recurring and will expire in 40 days)</li>
								    		<li>Elite $149.69 (2138 + 100 chips, Non-Recurring and will expire in 60 days)</li>
								    	</ol>
								    	<strong>Activation Time:</strong> Your membership account will be activated immediately upon credit card approval
										<br>
								    	<strong>Free Memberships:</strong> Expires after 7 days.
								<br><br>
								
								    8. <strong>SPECIAL CONSIDERATIONS REGARDING MINORS</strong>
								<br><br>
								
								    (A) <strong>Age of Majority</strong>. In order to use the Websites or any our services, You must qualify the age of
								<br><br>
								
								    majority in your jurisdiction. ‘You” must verify that “You are <strong>eighteen {18} or {21} years of age</strong>
								<br><br>
								
								    depending on the age of majority in “Your” jurisdiction, and that “You” have the legal capacity to enter into this
								<br><br>
								
								    Agreement.
								<br><br>
								
								    (B) We specifically discard any responsibility or liability for any misrepresentations regarding a User's age. . ( (C) “You must verify that “You” will not
								    allow any minor access to these Websites. Users should
								<br><br>
								
								    implement parental control protections, such as computer hardware, software, or filtering services, which
								<br><br>
								
								    may help users to limit minors' access to harmful material. “You” acknowledge that if your computer can be
								<br><br>
								
								    accessed by a minor, that You will take all precautions to keep “Our” materials from being viewed by minors.
								<br><br>
								
								    “You” also acknowledge that if You are a parent, it is Your responsibility, and not “Ours,” to keep “Our”
								<br><br>
								
								    adult content from being displayed to Your children.
								<br><br>
								
								    9. <strong>WE HAVE A ZERO TOLERANCE POLICY FOR CHILD PORNOGRAPHY AND A ZERO TOLERANCE POLICY REGARDING</strong>
								<br><br>
								
								    <strong> PEDOPHILE RELATED ACTIVITY.</strong>
								<br><br>
								
								    (A) All of Our webcam performances are provided by persons over the age of eighteen (18). We take great
								<br><br>
								
								    measures to ensure that no underage models appear on “Our” Websites.
								<br><br>
								
								    (B) If “You” pursue any form of child pornography (<strong><em>including "VIRTUAL" child pornography</em></strong>), You must exit
								<br><br>
								
								    “Our” Websites immediately. We do not provide this kind of material nor do we allow those who
								<br><br>
								
								    provide this kind of material. We strictly prohibit consumers of this kind of material.
								<br><br>
								
								    (C) In order to further “Our” zero-tolerance policy “You” as a User, agree to report any images that appear
								<br><br>
								
								    to depict minors on “Our” Websites. If You see any other images that are suspect, “You” agree to
								<br><br>
								
								    report these findings by emailing us at abuse@cybersensual.com .
								<br><br>
								
								    (D) Customer must include any evidence discovered including the date and time. All reports will be
								<br><br>
								
								    investigated and action will be taken.
								<br><br>
								
								    (E) We actively cooperate with any law-enforcement agency investigating child pornography. If You
								<br><br>
								
								    suspect other outside websites are participating in unlawful activities involving minors, please report them
								<br><br>
								
								    toabuse@cybersensual.com .
								<br><br>
								
								    10. <strong><u>IMAGES AND CONTENT</u></strong>
								<br><br>
								
								    (A) “Our” Websites provide live and pre-recorded webcam content, as well as IMAGES, TEXT, GRAPHICS, DATA,
								<br><br>
								
								    messages, and other information (collectively, "Materials").
								<br><br>
								
								    (B) “You” acknowledge that all of the materials are suggestive content that is fully protected by the First
								<br><br>
								
								    Amendment to the United States Constitution.
								<br><br>
								
								    (C) “You” acknowledge that some of the materials may contain graphic/ visual depictions/ sexual activity
								<br><br>
								
								    nudity, graphic audio portions of the same kind of content, and descriptions of sexually
								<br><br>
								
								    explicit activities. “You” acknowledge and are mindful of the nature of the materials provided by “Our” Websites and
								<br><br>
								
								    that “You “are not offended by such materials, and to the contrary, that You are accessing these Websites specifically
								<br><br>
								
								    because “You “enjoy such graphic content and “You” wish to view such materials. You acknowledge that you access these
								<br><br>
								
								    Websites of your own free will, and for Your own personal satisfaction.
								<br><br>
								
								    (D) “You” agree not to use or access the Websites if doing so would violate the laws of Your State, Province, or Country.
								<br><br>
								
								    (E) In the event that any court finds that any third party communication or third party content on “Our” Websites falls
								<br><br>
								
								    outside of the realm of Section 230 of the Communications Decency Act ("CDA"), this shall not be deemed to be a
								<br><br>
								
								    waiver of any legal protections provided by CDA 230 for any and all other content posted on “Our” Websites.
								<br><br>
								
								    11. <strong><u>RULES AND REGULATIONS OF WEBSITE</u></strong><u></u>
								<br><br>
								
								    (A) “You” agree that this Website will only be used for purposes specifically permitted and consider by this
								<br><br>
								
								    Agreement. “You” may not use the Websites for any other purposes without “Our” sole previous written consent.
								<br><br>
								
								    (B) Without “Our” prior written authorization, “You” are unauthorized to the following:
								<br><br>
								
								    1. Copy any part of “Our” Websites or the materials contained within, except as where specifically provided
								<br><br>
								
								    elsewhere in this Agreement
								<br><br>
								
								    2. Rearrange or create any subordinate works based on the Websites or any of the materials contained
								<br><br>
								
								    within our Sites. “You” agree that any such use is <strong><u>PROHIBITED</u></strong><strong><u></u></strong>
								<br><br>
								
								    3. Use the Websites or any of the materials contained within for any public display, public performance, sale
								<br><br>
								
								    or rental, “You” also hereby agree that any and all such uses are <strong><u>PROHIBITED</u></strong><strong><u></u></strong>
								<br><br>
								
								    4. Remove any copyright © or other proprietary notices from the Websites Materials contained within.
								<br><br>
								
								    5. Circumvent any encryption or other security tools used anywhere on the Websites including the theft of
								<br><br>
								
								    user names /passwords or using another person's user name and password in order to gain access to a
								<br><br>
								
								    restricted area of the Websites.
								<br><br>
								
								    6. Use our materials in any kind of public performance or display “Our” materials to an audience outside of Your
								<br><br>
								
								    home.
								<br><br>
								
								    7. Use any technology to record any content broadcast on Our Websites.
								<br><br>
								
								    12. <strong><u>ACCEPTABLE USE POLICY </u></strong>You agree and accept that our Website permits “You” to use “Our” services in
								<br><br>
								
								    order to post content and communicate with other users. “You “ agree that “You” will not use “Our” services
								<br><br>
								
								    to post or distribute content that falls into the following categories:
								<br><br>
								
								    · Unlawful, harmful, threatening, abusive , harassing, of another’s privacy or right to publicity, or harm to minors in any
								<br><br>
								
								    Shape or form.
								<br><br>
								
								    · That might be considered to be impersonating another person or legal entity
								<br><br>
								
								    · Any posts with personally identifying information about another person without that person’s prior explicit consent.
								<br><br>
								
								    · That constitute SPAM or bulk posting of commercial advertisements for commercial interests
								<br><br>
								
								    · That infringes upon any trademark, copyright © or other intellectual property rights of any party requests.
								<br><br>
								
								    · “You” agree that “You” will not use “Our” services to stalk or otherwise harass any other person
								<br><br>
								
								    · “You” agree that “You” will not use “Our” services in order to collect any personal data about other users
								<br><br>
								
								    · “You” agree that “You” will not use “Our” services in order to conduct any illegal activities at all
								<br><br>
								
								    · “You” agree that “You” will not use “Our” services in order to conduct any illegal activities at all
								<br><br>
								
								    · “You” agree that ‘You” will not use “Our” services to collect any personal data about other users
								<br><br>
								
								    · “You” agree that “You “ will not use “Our” services in order to conduct any illegal activities at all
								<br><br>
								
								    · “You” agree that “You” will not use “Our” services in order to view, transmit , traffic or in any other way interact or provide
								<br><br>
								
								    · to any other person, or receive drugs or other illegal substances in any other way
								<br><br>
								
								    · Any violation of our Acceptable Use Policies as provided for in this Agreement shall subject “You “ to liquidated damages of $5,000.00 for each and every
								    violation. In “Our” own discretion, “We” may choose to provide “You” with a warning before assessing damages. Additionally , “We “ may in “Our” own
								    discretion , assign any such damage claim to a third party who has been wronged by “Your” conduct.
								<br><br>
								
								    · These liquidated damages are not a penalty, and they are an attempt by the parties to reasonably ascertain the amount of actual damage that could occur
								    from such violations. Both parties hereby agree that this is a minimum, and actual damages may be more.
								<br><br>
								
								    <strong><u></u></strong>
								<br><br>
								
								    <strong><u> </u></strong>
								<br><br>
								
								    13. <strong><u>DISCLAIMER AND INDEMNIFICATION</u></strong>
								<br><br>
								
								    <strong><u> </u></strong>
								<br><br>
								
								    (A) If “We” determine that “You” or any User has used “Our” services in violation of any law, Your ability to use the
								<br><br>
								
								    Websites may be terminated immediately and “We have every right to voluntarily cooperate with law
								<br><br>
								
								    enforcement or private parties that we may be legally compelled to do so. “We” hereby disclaim any
								<br><br>
								
								    liability from User providing any services for any purpose that violates any law. “You” hereby agreed to defend, indemnify and hold “Us” harmless from any
								    liability that may arise from “Us” should “You” VIOLATE ANY LAW.
								<br><br>
								
								    (B) “You” also agree to defend and indemnify “Us” should any third party be harmed by “Your” actions or should
								<br><br>
								
								    “We “ be obligated to defend any claims including , without limitation any criminal or civil action brought by any
								<br><br>
								
								    party.
								<br><br>
								
								    (C) “Our” Websites contain material that may be offensive to third parties . “You” agree to indemnify and hold “Us”
								<br><br>
								
								    harmless from any liability that may arise from someone viewing such material and “You” agree to cease review of the Websites should “You” find them
								    offensive.
								<br><br>
								
								    (D) “You” agree to defend and hold harmless Cybersensual, its officers, directors , shareholders , employees,
								<br><br>
								
								    independent contractors, telecommunication providers and agents , from and against any and all claims or
								<br><br>
								
								    or actions, loss , liabilities , expenses, costs or demands including without limitation legal and accounting fees,
								<br><br>
								
								    for all damages authority( including without limitation to governmental agencies) use, misuse , or incapacity to use the “Websites” or any of the materials
								    contained within, or your breach of any part of this agreement. “We” shall
								<br><br>
								
								    promptly notify “You” by electronic mail of any such claim or suit , and cooperate full at your expense in the
								<br><br>
								
								    defense of such claim or suit. “We reserve the right to participate in the defense of such claim or defense at “Our “ own expense , and choose “Our” own
								    legal counsel , however , “We are not obligated to do so.
								<br><br>
								
								    (E) “You” acknowledge and accept that all webcam video communications and transmissions conducted through a
								<br><br>
								
								    member account during premium services is recorded and archived for use in combatting fraud or for use as
								<br><br>
								
								    evidence in any civil or criminal proceeding in which may be relevant. “You” specifically waive and release “Us”
								<br><br>
								
								    from any claims arising out of such recordation, archiving and subsequent use as outlined above. While we are
								<br><br>
								
								    committed to protecting your privacy, “We reserve the right to cooperate in any claim or legal proceeding by
								<br><br>
								
								    releasing archived video footage of member webcam sessions consistent with the state, federal and
								<br><br>
								
								    international law.
								<br><br>
								
								    14. <strong><u>INTELLECTUAL PROPERTY INFORMATION</u></strong>
								<br><br>
								
								    <strong><u></u></strong>
								<br><br>
								
								    (A) Cybersensual and the aforementioned name of the Websites are “Our” service marks and/or
								<br><br>
								
								    Exclusive Trademarks.
								<br><br>
								
								    (B) Other companies products and service names referenced within may be trademarks and service marks of their
								<br><br>
								
								    Respective companies are the exclusive property of such respective owners and may not be used publicly
								<br><br>
								
								    Without the express written consent of the owners and holders of such trademarks and service marks.
								<br><br>
								
								    (C) <strong>COPYWRIGHT ©</strong> –These websites belong to “Us” and we either own or have rights to display all of the materials
								<br><br>
								
								    Within. “You” may not use any of “Our” materials without “Our” express written consent.
								<br><br>
								
								    15<strong><u>. LIMITATION OF LIABLILITY</u></strong>
								<br><br>
								
								    <strong><u> </u></strong>
								<br><br>
								
								    (A) In no event shall “We” (or “our” licensors, agents, suppliers, resellers, service providers, or any other
								<br><br>
								
								    Subscribers) be liable to “You” or any other third party for any direct, special , incidental, consequential
								<br><br>
								
								    Or punitive damages, including without limitation, damages for loss of profits, loss of information or business interruption, revenue or goodwill. Which
								    may arise from any person’s use, misuse, or inability to use the Websites
								<br><br>
								
								    or any of the materials contained within. In the event “We” have been advised of the probability of such damages. This is for any matter arising out of or
								    relating to this agreement, whether such liability is asserted on the basis of contract, or otherwise, even if “We have been have been advised of the
								    probability of such damages.
								<br><br>
								
								    This is for any matter arising out of or relating to this agreement whether such liability is asserted on the basis of contract or otherwise. Even if we
								    have been advised of the possibility of such damages
								<br><br>
								
								    (B) In no event shall “Our” maximum total aggregate liability hereunder for direct damages exceed the total fees
								<br><br>
								
								    “You” for use of a website for a period of no more that 1 month form the accrual of the applicable cause of action. Some jurisdictions prohibit the
								    exclusion of liability for consequential or incidental damages. The above
								<br><br>
								
								    limitations may not apply to “You.”
								<br><br>
								
								    16. <strong><u>DEFEMATION OR INVASIVE MATERIAL POLICY</u></strong>
								<br><br>
								
								    (A) We provide an interactive computer service and thus we have liability for user posted content
								<br><br>
								
								    Due to Section 230 of the CDA . Nevertheless , we recognize that despite this protection, there may
								<br><br>
								
								    occassionaly be content posted “our” that is unappreciated by the subject of the user posted content. It is not “our intention to cause anguish to any
								    person nor harm to any entity , nor to allow through inaction such
								<br><br>
								
								    harm to occur. Accordingly, it is “Our” policy to respond respectfully to any complaints about “User” posted
								<br><br>
								
								    or provided by us. “We” agree to take reasonable measures and precautions.
								<br><br>
								
								    (B) If you feel damaged by any of the content posted by a “User,” or “Us,” “We agree
								<br><br>
								
								    to take reasonable measures at “Our” discretion to respond to “Your” requests.
								<br><br>
								
								    (C) “You” can agree that if “You” have any complaint about any content on “Our” websites, including
								<br><br>
								
								    (but not limited to ) a complaint or claim of defamation (slander) invasion of privacy, trademark
								<br><br>
								
								    infringement, right of publicity claims, or anything related. “You” will provide notice to “Us” by email
								<br><br>
								
								    at following email: <a href="mailto:abuse@cybersensual.com">abuse@cybersensual.com</a>
								<br><br>
								
								    (D) “You” agree that “We” shall have 10 business days after RECEIPT of said notice to evaluate “Your”
								<br><br>
								
								    concerns.
								<br><br>
								
								    (E) After we have evaluated all of your concerns, “We” will either inform you that we reject your concern and
								<br><br>
								
								    Deem it to be invalid, or “We” will request “Your” preference regarding an opportunity to cure “Your”
								<br><br>
								
								    Concerns. This cure may include one of the following.
								<br><br>
								
								    1/ We may offer to delete the offensive material
								<br><br>
								
								    2/ We may offer to modify the offensive material
								<br><br>
								
								    3/ We may offer “You” the opportunity to publish a rebuttal to the offending material.
								<br><br>
								
								    4/ We will engage “You” and seek any other alternative resolution that will mitigate Your damaged
								<br><br>
								
								    legal interests even if we are not legally required to do so.
								<br><br>
								
								    5/ We may provide “You” with some or all identifying information that “We” have about the actual
								<br><br>
								
								    suspect ( if the content was posted by another user. However, we are under no obligation to do so, and
								<br><br>
								
								    we expressively reserve the right not to
								<br><br>
								
								    (F) “You” acknowledge and agree that upon transmission of “Your” complaint to us. “You” will be considered
								<br><br>
								
								    To have in engaged in settlement discussions with “Us” and neither party will initiate formal legal action
								<br><br>
								
								    While non adversarial resolution is in progress. “You” agree that “you” will not file suit unless “We”
								<br><br>
								
								    Issue a statement to “You” tat “We” have taken our final action, and that no further action will be taken
								<br><br>
								
								    Without adverse proceedings. At that point, “You” may proceed with arbitration as provided for under
								<br><br>
								
								    This agreement.
								<br><br>
								
								    (G) “You” understand that no part of this agreement obligates “Us” to go beyond that required by law, and this
								<br><br>
								
								    agreement is in place for “Your “ convenience. If “We “ believe that your requests are unreasonable , “We”
								<br><br>
								
								    reserve the right to terminate all discussions with or file suit against “You” to recover any legal fees
								<br><br>
								
								    incurred due to harassing or unreasonable requests.
								<br><br>
								
								    17. <strong><u>GENERAL PROVISION</u></strong>
								<br><br>
								
								    <strong> </strong>
								<br><br>
								
								    <strong>(A) </strong>
								    The parties agree to exclusive jurisdiction in and only in <strong>British Columbia, in the city of Vancouver, British Columbia, Canada.</strong>
								<br><br>
								
								    <strong>(B) </strong>
								    The parties agree to exclusive venue in and only in <strong>British Columbia , in the city of Vancouver, British Columbia, Canada.</strong>
								<br><br>
								
								    <strong>(C) </strong>
								    The parties additionally agree that this choice of venue and forum is mandatory and not permissive<strong></strong>
								<br><br>
								
								    In nature, thereby precluding any possibility of litigation between the parties with respect to, or arising
								<br><br>
								
								    Out of this agreement in a jurisdiction other than that specified in this paragraph.
								<br><br>
								
								    <strong>(D) </strong>
								    All parties herby waive any right to assert the doctrine or similar doctrines, or to object to venue with
								<br><br>
								
								    Respect to any dispute under this agreement whatsoever
								<br><br>
								
								    <strong>(E) </strong>
								    All parties stipulate that the state and federal courts located in <strong>British Columbia, in the city of Vancouver. British Columbia, Canada </strong>
								    shall have personal jurisdiction over the for the purpose of litigating any dispute, controversy or proceeding arising out of ( or related to) this
								    agreement and/or the relationship between the parties contemplated thereby. <strong></strong>
								<br><br>
								
								    <strong>(F) </strong>
								    Each party hereby authorizes and accepts service of process sufficient for personal jurisdiction in any
								<br><br>
								
								    Action against it, as contemplated by this paragraph by registered or certified mail, Federal Express,
								<br><br>
								
								    Proof of delivery or return receipt request, to the parties address for the giving of notices as set forth
								<br><br>
								
								    In this Agreement.
								<br><br>
								
								    <strong>(G) </strong>
								    Any final judgment rendered against a party in any action or proceeding shall be conclusive as to the
								<br><br>
								
								    Subject of such final judgment and may be enforced in other jurisdictions in any manner provided by
								<br><br>
								
								    Law if such enforcement becomes necessary.
								<br><br>
								
								    17. <u>BINDING ARBITRATION </u> If there is a dispute between the parties arising out of or otherwise
								<br><br>
								
								    relating to this Agreement, the parties shall meet and negotiate in good faith to attempt to resolve the
								<br><br>
								
								    dispute. If the parties are unable to resolve the dispute through direct negotiations, then, except as
								<br><br>
								
								    otherwise provided within. Either party may submit the issue to binding arbitration in accordance with
								<br><br>
								
								    existing <strong>COMMERCIAL ARBITRATION RULES .</strong>
								<br><br>
								
								    Arbitral claims may include, but are not limited to contract and tort claims of any kind. All claims based
								<br><br>
								
								    On any federal , state, international law, or regulation, excepting only claims under applicable workers
								<br><br>
								
								    Compensation law, unemployment insurance claims, actions for injunctions, attachment, garnishment,
								<br><br>
								
								    And others equitable relief. The arbitration shall be conducted in <strong>BRITISH COLUMBIA, in the city of Vancouver British Columbia , Canada. </strong>
								    CONDUCTED by a single arbitrator, knowledgeable in Internet and e- commerce disputes.
								<br><br>
								
								    The Arbitrator should have no authority to reward no punitive or exemplary damages certified a class
								<br><br>
								
								    action, add any parties, vary or ignore the provisions of this Agreement, and shall be bound by applicable Law. The arbitrator shall have no authority to
								    award punitive or exemplary, certify a class action , add any parties vary or ignore the provisions of this Agreement and shall be bound by governing and
								    applicable Law. The arbitrator shall render a written opinion setting forth all material facts and the basis or his or
								<br><br>
								
								    her decision within 30 days of the conclusion of the arbitration proceeding.
								<br><br>
								
								    <strong>THE PARTIES HEREBY WAVE ANY RIGHTS THEY MAY HAVE TO TRIAL BY JURY </strong>
								<br><br>
								
								    <strong>IN REGARD TO ARBITRAL CLAIMS. </strong>
								<br><br>
								
								    <strong> </strong>
								<br><br>
								
								    <strong> 18. </strong>
								    The Arbitrator shall have no authority to effect any punitive or exemplary damages, certify a class action,
								<br><br>
								
								    add any parties, vary or ignore provisions of this Agreement and shall be bound by governing the
								<br><br>
								
								    applicable law. The arbitrator shall render a written opinion setting forth all material , facts, and the
								<br><br>
								
								    basis of his/ her decision within 30 days of the conclusion of the arbitration proceeding.
								<br><br>
								
								    <strong>PARTIES HEREBY WAIVE ANY RIGHTS THEY MAY HAVE TO TRIAL BY JURY IN REGARD</strong>
								<br><br>
								
								    <strong>TO ARBITAL CLAIMS</strong>
								    .
								<br><br>
								
								    <strong></strong>
								<br><br>
								
								    19. No Waiver of Right to Arbitration. There shall be no waiver of the right to arbitration unless such waiver
								<br><br>
								
								    is provided affirmatively and in writing by the waiving party to the other party. There shall be no
								<br><br>
								
								    implied waiver of this right to arbitration. No acts including the filing of litigation shall be construed,
								<br><br>
								
								    as a waiver repudiation of the right to arbitrate.
								<br><br>
								
								    20. The <strong>FIRST AMMENDMENT</strong> applies to Arbitration proceedings. Any arbitration tribunal shall consider
								<br><br>
								
								    the <strong>FIRST AMMENDMENT</strong> to the United States Constitution to be in force and effect between the
								<br><br>
								
								    parties stipulate to the applicability of the <strong>FIRST AMMENDENT’S </strong>protection of free speech, expression
								<br><br>
								
								    and both parties stipulate the case law interpreting the <strong>FIRST AMMENDMENT </strong>shall be admissible
								<br><br>
								
								    and considered to be binding authority upon the Arbitrator.
								<br><br>
								
								    21. Assignment: The rights and liabilities of the parties from here on in will bind and inure to the benefit
								<br><br>
								
								    of their respective assignees, successors , executors, and administrators as the case may be.
								<br><br>
								
								    22. Severability: If for any reason a core of competent jurisdiction or and arbitrator finds any provision of this
								<br><br>
								
								    Agreement on or any , or any portion thereof, to be unenforceable. That provision will be enforced to
								<br><br>
								
								    The maximum extent permissible and the remainder of this Agreement will continue in full force and
								<br><br>
								
								    Effect.
								<br><br>
								
								    23. Attorneys’ Fees: In the event any party shall commerce any claims, actions, formal legal action, or
								<br><br>
								
								    arbitration to interpret or enforce any of the terms and conditions of this Agreement. Relating in any
								<br><br>
								
								    to this Agreement, including without limitation asserted breaches of representation and warrantees,
								<br><br>
								
								    the prevailing party in any such action or proceeding shall be entitled to recover. In addition to available
								<br><br>
								
								    relief it’s reasonable attorney fees and costs incurred in connection including all attorney fees
								<br><br>
								
								    on appeal.
								<br><br>
								
								    24. No Waiver: No waiver or action maid by “Us” shall be deemed a waiver of any subsequent default
								<br><br>
								
								    of the same provision of this Agreement. If any term , clause or provision is held invalid or
								<br><br>
								
								    unenforceable by a court of competent jurisdiction. Such invalidity shall not affect the validity or
								<br><br>
								
								    operation of any other term, clause or provision and such invalid term , clause or provision shall be
								<br><br>
								
								    deemed to be severed from this Agreement.
								<br><br>
								
								    25. Headings: All heading are solely for the convenience of reference and shall not affect the meaning,
								<br><br>
								
								    construction or effect of this Agreement.
								<br><br>
								
								    26. Complete Agreement: This Agreement constitutes the entire agreement between the parties with
								<br><br>
								
								    respect to “Your” access and use of the Websites and the materials contained therein “Your”
								<br><br>
								
								    membership with the Websites supersedes and replaces all prior understandings or agreements, written
								<br><br>
								
								    or oral regarding such subject matter.
								<br><br>
								
								    27. Other Jurisdictions: “We” make no representation that Websites or any of the materials contained therein
								<br><br>
								
								    are appropriate or available for use in other locations, and access them from territories where their
								<br><br>
								
								    content may be illegal or is otherwise prohibited. Those who choose to access the Websites from such
								<br><br>
								
								    locations do so on their own initiative and are solely responsible for determining compliance with all
								<br><br>
								
								    applicable laws.
								<br><br>
								
								    <strong> 28. </strong>
								    <strong>GOVERNING LAW/ INDEMNITY CLAUSE:</strong>
								<br><br>
								
								    <strong><u></u></strong>
								<br><br>
								
								    <strong> </strong>
								    All parties to this agreement agree that all actions or proceedings arising in connection with this
								<br><br>
								
								    agreement or any services or business interactions between the parties that may be subject to this
								<br><br>
								
								    agreement shall be tried or litigated exclusively in provincial and federal courts located in
								<br><br>
								
								    <strong> British Columbia, in the city of Vancouver, British Columbia, Canada. </strong>
								    This agreement
								<br><br>
								
								    and all matters arising out of or relating to it shall be governed by the laws of <strong> British Columbia</strong>
								<br><br>
								
								    <strong> and any legal action must be commenced in the city of Vancouver, British Columbia, Canada.</strong>
								<br><br>
								
								    In summary all disputes and eventualities “You” have with respect to the contents contained within
								<br><br>
								
								    these Terms and Conditions stated on “Our,”website must be, without exception, brought to court and
								<br><br>
								
								    litigated in<strong> British Columbia, in the city of Vancouver , British Columbia, Canada.</strong>
								<br><br>
						  	</div>
						  </div>
						  <div class="content" id="panel2">
						  	<div class="large-3 columns">
						  		&nbsp;
						  	</div>
						  	<div class="large-9 coluns right">
								
								    <strong><u>PROLOGUE:</u></strong>
								<br><br>
								
								When you sign up for or otherwise use any service within Inevitable Media, LLC’s cybersensual.com website (collectively, the “<strong>Site</strong>,” “    <strong>we</strong>,” “<strong>our</strong>,” “<strong>us</strong>,” or other appropriate first-person terms), all of which services are hereinafter
								    referred to collectively as the “<strong>Service</strong>,” you agree to all of the terms and conditions of this Agreement. Please read the following terms
								and conditions carefully, as they form the agreement between you, the website user (sometimes referred to herein as “<strong>User</strong>,” “<strong>you</strong>,” “<strong>your</strong>,” or other appropriate second-person terms), and the Site (such agreement is referred to wherefore as the “    <strong>Agreement</strong>”). IF YOUR NOT IN ACCORDANCE WITH TERMS AND CONDITIONS, YOU MAY NOT USE THE SERVICE, AND SHOULD NOT PROCEED TO REGISTER OR
								    OTHERWISE USE THE SERVICE. BY USING THE SERVICE, YOU ARE EXTRACTING YOUR WILLINGNESS TO BE BOUND BY THIS AGREEMENT, INCLUDING ALL AMENDMENTS MAY VARY
								    OCCASSIONALY.
								<br><br>
								
								    <strong><u>1/ AGREEMENT:</u></strong>
								<br><br>
								
								    <u>(A) Right to Use</u>
								    . “Your” right to use the service is subject to any conditions and limitations established by “us” , in our sole discretion. “We” may discontinue any part
								    of the service or the Website at any time, including the availability of any service feature, database or content. “We” may also impose limits on certain
								    features and aspects of the service and/or restrict your access to parts and/or all of the service without notice or liability.
								<br><br>
								
								    (B) <strong>OUR WEBSITES ARE FOR ADULTS ONLY</strong> “You” represent that you <strong>are at least 18 years of age</strong> or the age of majority in your
								    jurisdiction, whichever is older (the “<strong>Age of Majority</strong>”). The Website and service are intended for <strong>adults only</strong>. By using
								    the Website and service you agree that you have reached the <strong>Age of Majority</strong>. We reserve the right to terminate your account if we, in our
								    sole and absolute discretion, believe you are in violation of this section. “We” additionally reserve the right to close your account and report you to the
								    proper authorities . If we suspect that “You” who is not the <strong>Age of Majority</strong> has used your account.
								<br><br>
								
								    <u>(C) </u>
								    <strong><u>WE HAVE A ZERO TOLERANCE POLICY FOR CHILD PORNOGRAPHY AND A ZERO TOLERANCE POLICY REGARDING PEDOPHILES, SIMILAR RELATED ACTIVITY</u></strong>
								    <u>.</u>
								<br><br>
								
								    (D)All images of all persons on the Website are provided under an obligation of the producer therefore to upload or stream videos or images portraying
								    persons over the <strong>age of eighteen (18</strong>) as of the date of the production of the images. We ensure that <strong>no underage</strong> MODELS
								    appear in any video or image our Websites.
								<br><br>
								
								    (E)If you seek any form of child pornography (such as “virtual” child pornography), “You” must exit the Website immediately. “We” do not provide this kind
								    of material and “we” do not permit those who provide this kind of material, nor do we tolerate consumers of this kind of material.
								<br><br>
								
								    (F) Abiding by our zero-tolerance policy, “you” agree to report any images which “you” have reason to believe portray minors on the Website by clicking the
								    “Support” link at the bottom of each page on our Websites. Please include with “your “report any appropriate evidence, including the date and time of
								    identification. All reports will be investigated swiftly and action will be taken based upon our reasonable ability to verify the evidence provided.
								<br><br>
								
								    (G)We cooperate with any law-enforcement agency investigating child pornography. If “you” suspect other outside websites are participating in unlawful
								    activities involving minors, please report them to <strong>asacp.org.</strong>
								<br><br>
								
								    <strong><u>2/ Code of Conduct</u></strong>
								    .
								<br><br>
								
								    You agree to use the Service in compliance with the following Code of Conduct:
								<br><br>
								
								    (A) “You” are responsible for any information that “you” post through the Websites and service. “You” agree to keep all information provided through the
								    Website and service as confidential, and agree not give this information to anyone without the permission of the person who provided it to “you;”
								<br><br>
								
								    (B) “You” are aware that the service contains vivid adult materials provided only by and to consenting users who are at least the Age of Majority;
								<br><br>
								
								    (C) “You” will not use the service to engage in any form of offensive behavior, not limited to the posting or sharing of any message, image or recording,
								    which contains may be abusive or harrassing statements Please coincide with your local laws and community standards;
								<br><br>
								
								    (D) Performers are allowed to freely interact with other performers on the Website, but also have the choice to block other performers from communicating
								    with the It is completely up to the performer to choose who they talk to on the Website. Performers may ignore anyone and may ban anyone from communicating
								    with them.
								<br><br>
								
								    (E) You will not post any message, image or recorded use of the service in any way which:
								<br><br>
								
								    1/violates, plagiarizes or infringes upon the rights of any third party, but not limited to, any copyright © or trademark law, privacy or other personal or
								    proprietary rights, or
								<br><br>
								
								    2/is fraudulent or otherwise constitutes unlawful conduct in connection with your use of the service or violates any law.
								<br><br>
								
								    (F) You will not use the service to distribute, promote or otherwise publish any material containing any solicitation for funds, advertising nor solicit
								    for goods or services;
								<br><br>
								
								    (G) Your access to the Service is for your own personal use. You may not allow others to use the Service and you may not transfer accounts to other users;
								<br><br>
								
								    (H) You will not use the Service to infringe on any privacy right, property right, or other civil right of any person; and
								<br><br>
								
								    (I) You will not forward any chain letters, advertisements, spam, or any such commercial message through the Service.
								<br><br>
								
								    <u>3/ </u>
								    <strong><u>Illegal and Prohibited Conduct</u></strong>
								    . In addition to the foregoing “Code of Conduct,” performers appearing on the Site are prohibited from doing any of the following:
								<br><br>
								
								    (A)There can be no minors, children, babies or unauthorized persons on camera or in the same room.
								<br><br>
								
								    (B)Bestiality, or animals/pets on camera in a sexual or provocative context, or illegal drugs (or drugs that may be perceived as illegal in other
								    locations, e.g. medicinal marijuana), are strictly prohibited.
								<br><br>
								
								    (C)Sleeping on camera (whether real or acting/pretending) is not permitted.
								<br><br>
								
								    (D)Overly large sex toys or animal-shaped sex toys may not be used on camera, and objects may not be used as sex toys unless they are typically marketed
								    and sold for that purpose. Please email <a href="mailto:support@cybersensual.com">support@cybersensual.com</a> for authorization to incorporate any type of
								    mechanical device, tool, “sex machine” or other unusual equipment into your performance (whether controlled by you or remotely by users of the Site),
								    providing a detailed proposal. We may require you to sign a waiver and release of liability in order to use certain devices on the Site. Any authorization
								    or permission we give to you may be revoked by us at any time and for any reason, without notice, in our sole and absolute discretion.
								<br><br>
								
								    (E)Consumption of alcohol is not allowed.
								<br><br>
								
								    (F)Performing while intoxicated, whether from drugs or alcohol, is strictly prohibited.
								<br><br>
								
								    (G)Incest (sexual relations involving family members) is not allowed.
								<br><br>
								
								    (H)Excessively degrading dialog or verbal abuse is not allowed.
								<br><br>
								
								    (I)Display of or reference to menstruation is not permitted.
								<br><br>
								
								    (J)“Bukakke” scenes are not allowed.
								<br><br>
								
								    (K)“Goatse” displays are prohibited.
								<br><br>
								
								    (L)Illegal or unsafe activity of any kind, violence, blood, torture, pain, erotic asphyxiation, fisting, rape themes, or any actions associated with
								    bringing harm to you, in any way, is prohibited.
								<br><br>
								
								    (M)Performers may not broadcast from a public place or from a studio or set that creates the impression that the performer is in a public place.
								<br><br>
								
								    (N)Performers are prohibited from broadcasting outdoors unless the broadcast is done from private property, with the property owner’s consent, and in an
								    area that is not visible from any neighboring property.
								<br><br>
								
								    (O)A performer may not discuss or arrange prostitution or escort services.
								<br><br>
								
								    (P)Any action that may be deemed obscene in your community is prohibited.
								<br><br>
								
								    (Q)Performers may exchange information with members of the Site, including contact information, but performers MAY NOT use members’ information to provide
								    webcam shows or receive payments outside of the Site. If a performer sells something to a member, e.g., underwear, or performs any other miscellaneous
								    transaction, the sale must be completed in exchange for Virtual Money (defined below).
								<br><br>
								
								    (R)Performers are not allowed to advertise commercial websites that offer live webcam streams, under any circumstances, but performers MAY mention their
								    own personal profiles, homepages and wish lists.
								<br><br>
								
								    (S)Performers are not allowed to ask for members’ account information or to log in using accounts that do not belong to them.
								<br><br>
								
								    (T)Performers are prohibited from making any statements, written or verbal, or cause or encourage others to make any statements, written or verbal, that
								    defame, disparage, or in any way criticize the Site or Service.
								<br><br>
								
								    <strong>
								        The foregoing list is non-exclusive, and “we” may, at any time, prohibit any activity that “we” determine, in our absolute discretion, to be
								        unnaceptable. “We” reserve the right to terminate or suspend “your “ access to all or part of the service at any time, with or without notice, for
								        engaging in any unacceptable activity.
								    </strong>
								<br><br>
								
								    <u>4 </u>
								    <strong><u>/ Privacy and Use of Information</u></strong>
								    <strong>. Except as more fully set forth in our </strong>
								    <a href="http://chaturbate.com/privacy/"><strong>Privacy Policy</strong></a>
								    <strong>, your personal information will not be disclosed to any third party</strong>
								    .
								<br><br>
								
								    <u>5/ </u>
								    <strong><u>Content Posted on the Site</u></strong>
								    .
								<br><br>
								
								    (a)By agreeing to the Terms and Conditions of this Agreement, “you” represent and warrant that all depictions “you” upload to the Website do not in any way
								    impose on any third party’s intellectual property rights. The Website hereby asserts immunity with respect to all content provided by members or other
								    third parties, as provided by law, not limited to, under the <strong>Communications Decency Act</strong>. Members and others are prohibited from uploading,
								    sharing or describing to anyone on or through the Website/Service. Any matters, or depictions which, in “our” sole opinion, might be illegal or offensive,
								    including, but not limited to, any content involving bestiality, urination, other bodily excretions, defamatory material or otherwise obscene material or
								    any conduct that violates the prohibitions set forth under the <strong>“Code of Conduct,”</strong> above, or any other provision of this Agreement. “You”
								    may not use the service or the Website to solicit any information that might be used for unlawful purposes or encourages unlawful activities.
								<br><br>
								
								    (J) “We” do not claim any ownership rights in the text, files, images, photos, video, sounds, musical works, works of authorship, applications, or any
								    other materials (collectively, the “Materials”) that you transmit, submit, display or publish (“post”) on, through or in connection with the service. After
								    posting the materials on, through or in connection with the service, you continue to retain any such rights that you may have in them, subject to the
								    license herein. By posting the materials on, through or in connection with the service, you hereby grant our Websites a non-exclusive, fully-paid and
								    royalty-free, sub-licensable, and worldwide license to use, modify, delete from, add to, publicly perform, publicly display, reproduce, and distribute the
								    material, including, without limitation, distributing part or all of the materials, in any media formats and through any media channels. In addition to the
								foregoing license, you hereby authorize us to send takedown demands, pursuant to the    <strong>United States’ Digital Millennium Copyright Act (the “DMCA”),</strong> to any service provider hosting reproductions of the materials that have
								    been taken from the Site (e.g., a video clip bearing our watermark).
								<br><br>
								
								    (K) You may not use the Website or service for commercial purposes, including, but not limited to, marketing, advertising of goods or services, any
								    investment opportunities, contests, or similar activities. Additionally, the Website reserves the right, in the Site’s sole discretion, to immediately
								    suspend your account, file for injunctive relief, file for civil and/or report any conduct that violates these terms and conditions to all law enforcement
								    that have jurisdiction over the matter. In the event any actions are brought against the Website as a result of content you have shared in, or as a result
								    of you engaging in any prohibited activities, you agree to indemnify and hold the Website harmless with respect to all costs and expenses including
								    attorneys’ fees that the Website may incur as a consequence of your posting of such content or engaging in such prohibited activities.
								<br><br>
								
								    <u>6/ </u>
								    <u>Members’ Obligations Under 18 U.S.C. § 2257</u>
								    . You should be aware that, pursuant to federal law, any visual depictions that you post, share or perform on the Website which portray actual sexually
								explicit conduct, depictions of the genitals or pubic area, or simulated sexually explicit activity, as such terms are defined in    <strong>18 U.S.C. 2256(2)(A)-(D) and 2257A</strong>, require that you maintain the records required by <strong>18 U.S.C. 2257</strong>, and any such
								postings must contain an “18 <strong>U.S.C. 2257</strong> Record-Keeping Requirements Compliance Statement.” Your failure to comply with the provisions of    <strong>18 U.S.C. 2257</strong> may make you subject to criminal and civil prosecution for the violation of federal law.
								<br><br>
								
								    <u>7/ </u>
								    <strong><u>Use of Information on Service.</u></strong>
								    You acknowledge and agree that:
								<br><br>
								
								    (A) “We” can’t ensure the security or privacy of information you provide through the Internet, or otherwise; “you” release us from any and all liability in
								    connection with the breach of the security of such information and/or messages and with respect to the use of such information by other parties;
								<br><br>
								
								    (B)”We” are not responsible for, and cannot control, the use of any information, by anyone, which you provide to any other parties or the Service and you
								    should use caution in selecting the personal information you provide to others through the service;
								<br><br>
								
								    (C)”We” can’t assume any responsibility for the content of any message sent by any user on the service, and you release us from any and all liability in
								    connection with the content of any communication you may receive from other users;
								<br><br>
								
								    (D)”You” accept that you can’t bring legal action against our Websites or any of its employees, officers or agents for any damages of any kind, under any
								    theory, as a consequence of using the service;
								<br><br>
								
								    (E)Any and all depictions uploaded to the service and/or Websites become licensed property of the Websites and may be used by the Website, without any
								    restriction, as marketing materials. By accepting this Agreement and its Terms and Conditions you specifically authorize us to use any images you upload to
								    the Website/Service for marketing the Site and Service in our sole discretion.
								<br><br>
								
								    (F)You may not use the Service for any unlawful purpose. We may refuse to grant you or discontinue your use of a user name, for whatever reason, including,
								    but not limited to, that the user name you have chosen impersonates someone else, is protected by trademark or proprietary law, or is vulgar or otherwise
								    offensive, as determined by us in our sole discretion.
								<br><br>
								
								    <u>8<strong>/ </strong></u>
								    <strong><u>On- and Off-site Interactions/Meeting</u></strong>
								    <u>s</u>
								    . Our Websites do not recommend or allow any form of user interaction outside of the Website and, as disclosed elsewhere in this agreement. “Your” use of
								    and interactions through the Website are at your own risk. Use of the Website to arrange face-to-face meetings for the purpose of engaging in illegal
								    activity is strictly prohibited and will subject your account to immediate termination. If do you elect to legally interact with any member of the service
								    outside of the Website, you do so at your own risk, and you acknowledge and agree that we are not responsible for any consequences of such election to
								    interact, whether in person or otherwise, outside of the Website.
								<br><br>
								
								    <strong>You should, at a minimum, consider the following precaution if meeting or corresponding with anyone on any social networking website:</strong>
								<br><br>
								
								    (A)Anyone who is able to commit identity theft can also falsify a member
								<br><br>
								
								    profile.
								<br><br>
								
								    There is no substitute for acting with caution when communicating with any stranger who wants to meet you.
								<br><br>
								
								    (B) Never include your last name, email address, home address, phone number, place of work, or any other identifying information in your member profile or
								    initial email messages. Stop communicating with anyone who pressures you for personal or financial information or attempts in any way to trick you into
								    revealing it.
								<br><br>
								
								    (C) If you choose to have a face-to-face meeting with another member, always tell someone in your family or a friend where you are going and when you will
								    return. Never agree to be picked up at your home. Always provide your own transportation to and from the meeting, which should be in a public place with
								    many people around.
								<br><br>
								
								    (D) All moneys and gifts sent by you to any other user directly or indirectly whether through the Site or off of the Site is at your own risk. We will not
								    intervene or become involved in any dispute between any users.
								<br><br>
								
								    <u>9/ </u>
								    <u>Your Representations and Warranties</u>
								    .
								<br><br>
								
								    By using the service, you thereby favorably acknowledge, express , and warrant the truth and accuracy of each of the following statements:
								<br><br>
								
								    (A)”You” are not prohibited by law from using the service and that you have the right, authority and capacity to enter into this Agreement and to abide by
								    all of its Terms and Conditions as posted here and as amended from time to time.
								<br><br>
								
								    (B)”You “are familiar with the laws in your area that may affect your legal right to access erotica or adult-oriented material, and you have the legal
								    right to access such material and the Website has the legal right to transmit such material to you in your location;
								<br><br>
								
								    (C)”You” understand that, through use of the Service, you will be exposed to visual images, verbal descriptions audio sounds and other features and/or
								    products of a sexually oriented, frankly erotic nature, which may include graphic visual depictions and descriptions of nudity and sexual activity, and you
								    are voluntarily choosing to do so, because you want to view, read and/or hear the various materials and/or order and enjoy the use of such products or
								    features, which are available, for your own personal enjoyment, information and/or education;
								<br><br>
								
								    (D) ”Your “choice to use the service is a demonstration of your interest in sexual matters which, you believe, are both healthy and normal and which, in
								    your experience, is generally shared by average adults in your community.
								<br><br>
								
								    (E) ”You “are familiar with the standards in your community regarding the acceptance of such sexually oriented materials, and the materials you expect to
								    encounter through use of the Service are within those standards;
								<br><br>
								
								    (F) In “your” judgment, the average adult in your community accepts the consumption of such materials by willing adults, in circumstances such as those
								    under which the Service is provided, offering reasonable insulation from the materials for minors and unwilling adults, and will not find such materials to
								    appeal to a prurient interest or to be patently offensive.
								<br><br>
								
								    (G) It is your desire to share and/or to invite others to share your own private and personal behaviors and to comment, rate, criticize, organize and
								    recommend based on what you are exposed to, by utilizing the Services, while inviting others to do the same.
								<br><br>
								
								    (H) You have not notified any governmental agency, including the U.S. Postal Service, that you do not wish to receive sexually oriented material.
								<br><br>
								
								    (I) The Website provides access to an online service comprising information and materials created and posted, uploaded, or streamed by you and other users
								    (each a “<strong>Contributor</strong>”).
								<br><br>
								
								    (J) Video and images on the Site that are available for viewing (collectively, the “<strong>Content</strong>”) are stored on or streamed through our
								    servers at the direction of our users.
								<br><br>
								
								    (K) Any modification of the Content that is uploaded or streamed by our users, such as the addition of a watermark, is performed by an automated process.
								    Accordingly, as the Contributor is aware that such modifications shall take place automatically upon transmission, the Contributor shall be deemed the
								    party responsible for such automatic modification and shall be considered the “author” of such automatically modified Content. The Site is not responsible
								    for modifications that occur to Content as part of its automatic transmission process.
								<br><br>
								
								    (L) Any review of uploaded or streamed Content that may be performed by the Site before or after making such Content available to the public is cursory and
								    only intended to identify immediately obvious violations of this Agreement. Accordingly, and despite any such gate keeping, the Contributor uploading or
								    streaming any Content shall be deemed the party at whose direction that Content is available to others through use of the Service.
								<br><br>
								
								    (M) The Website has never directed, and never will direct, its users to upload or stream Content that infringes upon any right belonging to a third party.
								    Uploading or streaming Content that infringes on third-party rights constitutes a direct and material violation of this Agreement and will subject the
								    uploading or streaming Contributor’s account to suspension and/or termination, where appropriate.
								<br><br>
								
								    (N) The Website correctly presumes that the Contributor uploading or streaming any Content is the sole holder of all exclusive rights to that Content,
								    except where the Content alone bears some obvious indication to the contrary, such as a visible proprietary marking identifying a person or entity other
								    than the Contributor as the exclusive rights holder.
								<br><br>
								
								    (O) Where Content has no obvious proprietary marking that indicates an exclusive owner, the Site cannot be deemed to have actual knowledge that such
								    Content infringes upon any third party’s rights.
								<br><br>
								
								    (P) The Website has no right or ability to control the activities of Contributors who create, post, upload, or stream Content through the Site. In the
								    event that a Contributor infringes upon a third party’s rights by creating, posting, uploading, or streaming Content, that Contributor is the sole
								    responsible party for such infringement, and the Site has no control over such activity.
								<br><br>
								
								    (Q) Apart from identifying an obvious proprietary marking in any Content that indicates an exclusive owner, the Site has no other ability to determine
								    whether the rights appurtenant to a particular piece of Content may belong to a party other than the uploading or streaming Contributor. As the Website’s
								    only other means of identifying Content that may infringe upon a third party’s rights, the Website relies entirely on properly presented notifications from
								    third parties claiming that their rights have been violated.
								<br><br>
								
								    <u>9/ </u>
								    <strong><u>Notice of Intellectual Property Infringement</u></strong>
								    .
								    <strong>
								        The Website respects the intellectual property of others, and we ask our members and others to do the same. We voluntarily observe and comply with the
								        DMCA. If you believe that your work has been copied in a way that constitutes copyright infringement, or your intellectual property rights have been
								        otherwise violated, please provide the Service’s Designated Copyright Agent with the following information:
								    </strong>
								<br><br>
								
								    (A) an electronic or physical signature of the person authorized to act on behalf of the owner of the copyright or other intellectual property interest;
								<br><br>
								
								    (B) description of the copyrighted work or other intellectual property that “you” claim has been infringed;
								<br><br>
								
								    (C) A description of where the material that “you” claim is infringing on our Website;
								<br><br>
								
								    (D) your address, telephone number, and email address;
								<br><br>
								
								    (E) A statement by you that you have a good faith belief that the disputed use is not authorized by the copyright owner, its agent, or the law; and
								<br><br>
								
								    (F) A statement by you, made under penalty of perjury, that the above information in “your “Notice is accurate and that “you “are the copyright or
								    intellectual property owner or authorized to act on the copyright or intellectual property owner's behalf.
								<br><br>
								
								    You may send your Notice of Claimed Infringement to:
								<br><br>
								
								    Custodian of records office: Attention/Travis Cline
								    <br/>
								    Street #105-5775 Irmin Street
								    <br/>
								    City: Burnaby
								    <br/>
								    Province: British Columbia
								    <br/>
								    Country: Canada
								    <br/>
								    Postal: V5J 0C3
								    <br/>
								    Email: inevitablemediafaction@yahoo.com
								<br><br>
								
								Please do not send other inquires or information to our Designated Agent. Please send other inquiries to    <a href="mailto:support@cybersensual.com">support@cybersensual.com</a>.
								<br><br>
								
								    <u>10/ </u>
								    <strong><u>Virtual Money</u></strong>
								    . The Service may, but is not obligated to, include a virtual, in-app currency (“<strong>Virtual Money</strong>”) including, but not limited to coins,
								    cash, tokens or points, that may be purchased from us for actual physical money if you are a legal adult in your country of residence. Other than a
								    limited, personal, revocable, non-transferable, non-sub license to use the Virtual Money in the service, you have no right or title in or to any such
								    Virtual Money appearing or originating in the service, or any other attributes associated with use of the service or stored within the service. We have the
								    absolute right to manage, regulate, control, modify and/or eliminate such Virtual Money as we see fit in our sole discretion, and we shall have no
								    liability to you or anyone for the exercise of such rights. Transfers of Virtual Money are strictly prohibited except where explicitly authorized within
								    the Service. Except as expressly provided otherwise herein, you may not sell any Virtual Money for actual physical money or otherwise exchange such items
								    for value. Any attempt to do so is in violation of this Agreement and may result in a lifetime ban from the Website and possible legal action. All Virtual
								    Money that has not been purchased directly by you (e.g., tips from other users, referral commissions, etc.) is forfeited if your account is terminated or
								    suspended for any reason, in our sole and absolute discretion, or if we discontinue providing the Service.
								<br><br>
								
								    <u>11/ </u>
								    <strong><u>Tipping.</u></strong>
								    <strong>
								        The Website may, but is not obligated to, permit tipping of age-verified Contributors through the service. To the extent that we decide to permit
								        tipping, you acknowledge and agree that:
								    </strong>
								<br><br>
								
								    (A) Tipping is done at your own option and risk. Tipping is not required for use of the Service.
								<br><br>
								
								    (B) Tipping may only be done using Virtual Money. Contributors may not solicit tips through means of payment other than Virtual Money.
								<br><br>
								
								    (C) Tips are a voluntary gratuity and may not be given in exchange for specific services. Promising to give a tip in exchange for performance of any act is
								    strictly prohibited, and such conduct will result in an immediate and lifetime ban from use of the Service.
								<br><br>
								
								    (D) All tips are chargeable when made. We will not return a tip made from your account except in situations that are deemed by us, in our sole and absolute
								    discretion, to be exceptional.
								<br><br>
								
								    (E) Tipping does not alter our code of conduct. Giving or receiving tips in exchange for actual or promised conduct in violation of this Agreement is
								    prohibited.
								<br><br>
								
								    (F) Exhibitionist users are never eligible to receive tips.
								<br><br>
								
								12 <strong><u>Pics and Video Purchases</u></strong>. The Website may, but is not obligated to, permit users to post Materials (“    <strong>Paid Content</strong>”) that may only be accessed after payment of a specified amount of Virtual Money. If you post any Paid Content, you represent
								    and warrant that 1/ the Paid Content you post will comply in all respects with the terms of this Agreement; and 2/ you have all rights and permissions
								    necessary to post such Paid Content and to permit users to access the same in exchange for payment. We shall have the absolute right to remove any Paid
								    Content, in whole or in part, for any or no reason at all. In the event that Paid Content you post results in chargebacks or refund requests from users who
								    have purchased such Paid Content, we reserve the right to assess a chargeback fee to your account and/or suspend your ability to post Paid Content. By
								    purchasing or accessing any Paid Content, you thereby demonstrate your express acknowledgement and agreement that 1/ The Site is not the source of such
								    Paid Content; 2/ the user posting such Paid Content is solely responsible for any claims or liabilities associated with, arising from, or in any way
								    relating to such Paid Content; 3/ your purchase and/or use of any Paid Content is solely at your own risk; 4/ The Site has no responsibility for viewing or
								    screening any Paid Content; and 5/ you forever release the Site , and its affiliates, successors, assigns, officers, employees, agents, directors,
								    shareholders and attorneys, from any and all claims and liabilities associated with, arising from, or in any way relating to such Paid Content.
								<br><br>
								
								    <u> </u>
								<br><br>
								
								    13 <strong><u>Fan Clubs</u></strong>. The Site may, but is not obligated to, permit certain users to create and administer their own fan club on the Site.
								    Eligible performing users may be permitted to set a monthly fee that other Site users must pay in Virtual Money to be members of the performing users’ fan
								    clubs, and the Site may, but is not obligated to, credit a portion of such payment to the performing users’ accounts. “We “reserve the right to resound any
								    user’s permission to have a fan club for any or no reason at all. In the event that members of your fan club request a refund from us, or institute a
								    chargeback with our payment processor, “we “reserve the right to assess a chargeback fee to your account and/or suspend your ability to have a fan club on
								    the Site.
								<br><br>
								
								    14 <strong><u>Monitoring of Information</u></strong>. “We” reserve the right, but have no obligation, to monitor any and all messages and chats that take
								place through the Site. We are not responsible for any offensive or obscene materials that may be in anyway transmitted by any and all users (    <strong>including unauthorized users, as well as the possibility of “hackers”</strong>). As noted above, “we” are also not responsible, under any
								    circumstances, for the use of any personal information, by anyone, that you in anyway transmit through the Service.
								<br><br>
								
								    15 <strong><u>Termination of Access to the Service</u></strong>. “We” may, in our sole discretion, terminate or suspend your access to all or part of the
								    service at any time, with or without notice, for any reason without limitation. Breach of this Agreement for no reason without limiting the generality of
								    the foregoing, any fraudulent, abusive, or otherwise illegal activity may be grounds for termination of your access to all or part of the Service at our
								    sole discretion. “We” reserve the right to refer such activity to any and all appropriate law enforcement agencies.
								<br><br>
								
								    16 <strong><u>Proprietary Information</u></strong>. The service contains information that is proprietary to us and/or users of the service. We assert full
								    copyright protection in the service, including all of the design and code embodied within. Any information shared or posted by us or users of the service
								    may be protected whether it is identified as proprietary to us or to the user. “You” agree not to modify, copy or distribute any such information in any
								    manner whatsoever without having first received the express permission of the owner of such information.
								<br><br>
								
								    17 <strong><u>No responsibility</u></strong>. “We” are not responsible for any incidental, punitive, direct or indirect damages of any kind whatsoever,
								    which may arise out of or relate to your use of the service, including but not limited to lost revenue, profits, business or data, or damages resulting
								    from any viruses, worms, “Trojan horses” or other destructive software or materials. Also communications by you or other users of the Service, or any
								    interruption or suspension of the service, regardless of the cause of the interruption or suspension. Any claim against us shall be limited to the amount
								    you paid, if any, for use of the service during the previous 12 months. “We” may discontinue or change the service or its availability to you at any time,
								    and you may stop using the Service at any time, please see details on cancellation below
								<br><br>
								
								    18 <strong><u>Security</u></strong><strong>.</strong> “Your “account is private and should not be used by anyone else. You are responsible for all usage or
								    activity on the service by users using your login and password, including but not limited to use of your login and password by any third party.
								<br><br>
								
								    19 <strong><u>Other Links</u></strong>. The service may from time to time contain links to other sites and resources (“<strong>External Links</strong>”).
								    We are not responsible for, and have no liability as a result of, the availability of External Links or their contents.
								<br><br>
								
								    20 <strong><u>No Warranties</u></strong>. The service is distributed on an “as is” and “as available” basis. “We” do not warrant that this service will be
								    uninterrupted or error-free. There may be delays, omissions, and interruptions in the availability of the service. Where permitted by law, you acknowledge
								    that the service is provided without any warranties of any kind. Either express or implied including but not limited to the implied warranties of
								    merchantability or fitness for a particular purpose. The site make any warranty as to the results that may be obtained from the use of the services or as
								    to the accuracy or reliability of any information obtained through the services or that defects in any software, hardware or the services will be
								    corrected. you understand and agree that any use you make of any material and/or data downloaded or otherwise obtained through the use of the service is at
								    your own discretion and risk, and that you will be solely responsible for any damage to your computer system or loss of data that results from the download
								    of such material and/or data. “We” do not represent or endorse the accuracy or reliability of any advice, opinion, statement or other information
								    displayed, uploaded or distributed through the service by the Website or any user of the Service or any other person or entity. “You” acknowledge that any
								    reliance upon any such opinion, advice, statement or information shall be at your own risk.
								<br><br>
								
								    21 <strong><u>Modifications</u></strong>. “We” may modify this Agreement on occassion. Notification of changes in this Agreement will be posted on the
								    service or sent via electronic mail, as we may determine in our own discretion. If “you” do not agree to any modifications, “you” should terminate “your
								    “use of the Service. “Your” continued use of the Service now, or following the posting of notice of any changes in this Agreement, will constitute a
								    binding acceptance from “you” of this Agreement.
								<br><br>
								
								    22 <strong><u>Disclosure and Other Communication</u></strong>. “We “reserve the right to send electronic mail to you, for the purpose of informing you of
								    changes or additions to the Service, or of any related products and services offered by the Website or it’s affiliated entities. “We” reserve the right to
								    disclose information about your usage of the service and statistics in forms that do not reveal your personal identity. For a more detailed description of
								    what information “we may disclose, please review our <a href="http://chaturbate.com/privacy/">Privacy Policy</a>, which is fully incorporated within by
								    this reference.
								<br><br>
								
								    23 <strong><u>Complaints</u></strong>. To resolve or report a complaint regarding the service or members who use the service users should send an email
								    detailing such complaint to <a href="mailto:support@cybersensual.com">support@cybersensual.com</a>. In appropriate circumstances, we will take immediate
								    action in order to help solve the problem.
								<br><br>
								
								    24 <strong><u>Registration</u></strong>. You may become a member of the service by completing an online registration form, which must be accepted by the
								    Website. Upon submission of the online registration form, the Website or its authorized agent will process the application. In connection with completing
								    the online registration form, you agree to:
								<br><br>
								
								A/ Provide true, accurate, current and complete information about yourself as prompted by the registration form (such information being the “    <strong>Registration Data</strong>”); and
								<br><br>
								
								    B/ Maintain and promptly update the Registration Data to keep it true, accurate, current and complete at all times while “you” are a member.
								<br><br>
								
								    You must promptly inform the Website of all changes to the Registration Data, including, but not limited to, changes in your address and changes in the
								    credit card information you used in connection with billing for the Service. If you provide any information that is false, not current, up to date, or
								    incomplete . The Website or any of its authorized agents have reasonable grounds to suspect that such information is false the Site has the right to
								    suspend or terminate your account and refuse your current or future use of the service and our Websites. “We may also subject you to criminal and civil
								    liability. “You” are responsible for dishonored checks and any related fees that “we “ incur with respect to your account.
								<br><br>
								
								    25 <strong><u>Member Account and Password</u></strong>. As part of the registration process, you will be issued a unique user name and password, which you
								    must provide in order to gain access to the non-public portions of the Service. You certify that, when asked to choose a username, you will not choose a
								    name which falsely represents you as somebody else, or a name which may otherwise be in violation of the rights of a third party. We reserve the right to
								    disallow the use of user names that we, in our sole discretion, deem inappropriate. We reserve the right to cancel, at any time, the membership of any
								    member who uses their selected username in violation of these Terms and Conditions or in any other way we, in our own discretion, deem inappropriate. “Your
								    “membership, the user name and password are nontransferable and non-assignable. “You” represent and warrant that you will not disclose to any other person
								    your unique user name or password and that you will not provide access to the service to anyone who is below the <strong>Age of Majority</strong>, or
								    otherwise does not wish to view the content on the Site. :”You” are solely responsible for maintaining the confidentiality of your user name and password
								    and are fully responsible for all activities that occur under your user name and password. “We” will not release your password for security reasons. You
								    agree to 1/ immediately notify the website of any unauthorized use of your user name or password or any other breach of security, and 2/ Ensure that you
								    exit from your account at the end of each session. “You “agree that you are solely liable and responsible for any unauthorized use of the service using
								    your account until you notify the Website by email regarding that unauthorized use. Unauthorized access to the service is illegal and a breach of this
								    Agreement. “You” agree to indemnify the Site with respect to all activities conducted through your account. You may obtain access to your billing records
								    upon your reasonable request.
								<br><br>
								
								    26 <strong><u>Promotion of the Site and Service</u></strong>. Registered members of the service may be eligible to participate in our affiliate advertising
								    program and potentially earn commissions based on the number and quality of registered user referred to the Site.
								<br><br>
								
								    (A) <u>License to Promotional Items</u>. All registered members who are currently in compliance with the terms of this Agreement are hereby granted a
								    revocable, non-exclusive, non-transferable license to utilize the Site’s name, access and download promotional banners, videos, photographs, other
								promotional materials, and/or promotional materials created by you, provided that such materials are approved by the Site in writing (the “    <strong>Promotional Items</strong>”), for use on site(s) owned by such registered members (“<strong>Referral Sites</strong>”). The Promotional Items are
								    licensed to eligible registered members for the limited purposes of advertising, marketing and promoting the Site and Service. Any and all licenses granted
								    to registered members pursuant to this Agreement shall immediately cease and revert to us upon the termination or cancellation of this Agreement. You agree
								    not to share any of the Promotional Items with anyone in any way, which is not in accordance with the terms of this Agreement and applicable law. You
								    hereby acknowledge and agree that all rights to the Promotional Items belong solely to the Site and/or the Site’s licensors. You further acknowledge and
								    agree that any Promotional Items created by you and approved by the Website are a specially ordered and commissioned “work made for hire” within the
								    meaning of the <u>1976 Copyright Act </u>for the good and valuable consideration provided you herein.
								<br><br>
								
								    <u>(B) </u>
								    <u>Keywords; Domain Names</u>
								    . Notwithstanding the foregoing license to use the names of our Website in connection with referring traffic to the service, you are not, as a part of this
								    license, permitted to (a) bid on, purchase or otherwise register/use “<strong>Cybersensual</strong>,” “cybersensual.com,” or any other similar spelling, or
								    use same in connection with the words “Official,” “Officially” or “Official Site,” as keywords or advertising words on any internet search engines,
								    including, without limitation, google.com, bing.com, ask.com, yahoo.com, etc.; use the Site Names in association with any similar or competing website or
								    service; or (b) register any domain name which incorporates or is a “misspelling” of “<strong>Cybersensual</strong>.” You agree that in the event you
								    violate any part of this section of this Agreement, your account will be immediately terminated, any monies earned but not yet paid will be forfeited, and
								    that you will cooperate fully in transferring any items forbidden by this section to the Site as the rightful owner. Subject to the foregoing limitations
								    and pursuant to the license granted herein, eligible registered members will be permitted to use any website domain name they choose in connection with
								    promoting the Site and Service, so long as such website domain names registered do not infringe on our or any third party's intellectual property rights,
								    defame, insult or otherwise harass anyone, and do not promote or suggest any illegal activity.
								<br><br>
								
								    <u>(C) </u>
								    <strong><u>Restrictions</u></strong>
								    . You are prohibited from using any images, text, script(s), applications, logos and functional elements appearing on a Referral Sites, to which you do not
								    have all legal rights, free from any and all encumbrances and third party claims. Further, you represent and warrant that you will only advertise on
								    services and providers, which permit advertisement of services such as the Site. You understand and agree that if you advertise on any service or provider,
								    which does not permit such advertising, your account will be terminated without notice and without pay. Furthermore, you acknowledge and agree that we may,
								    at any time, review the contents of any Referral Site and disapprove of any material thereon that might, in our sole discretion, reflect negatively upon
								    the Site or the Service. Upon request from us, such material must be immediately removed in order for you to remain eligible to receive commissions
								    hereunder.
								<br><br>
								
								    <u>(D) </u>
								    <strong><u>No Email Marketing</u></strong>
								    . We do not permit promotion of the Site by email marketing. You acknowledge and agree that any email marketing by you will be grounds for immediate
								    termination of your account without pay.
								<br><br>
								
								    <u>(E) </u>
								    <strong><u>User Referral Link</u></strong>
								    . Each member shall be assigned one or more unique URLs (each a “User Referral Link”) that must be used when referring new members in order to connect such
								    new members to the existing member who referred them. Your User Referral Links can be found on the “My Profile” page under the “Share and Earn” tab. You
								    acknowledge and agree that we are not obligated to pay any commissions to you for any member signups or member spending that did not result from use of one
								    of your User Referral Links.
								<br><br>
								
								    <u>(F) </u>
								    <strong><u>Commissions on Member Spending</u></strong>
								    .
								<br><br>
								
								    (<strong><u>YET TO BE DETERMINED</u></strong>)
								<br><br>
								
								    The Site will compensate eligible members, subject to the terms of this Agreement in all respects, a commission for certain types of referrals generated by
								    such eligible members, as set forth in further detail below:
								<br><br>
								
								    1/ Definition of Adjusted Gross Receipts. As used herein, “Adjusted Gross Receipts” shall mean gross payments received from a subject member, less any
								    chargebacks (including amounts paid as a result of credit card abuse or fraud, or paid to such subject member by us to settle a claim involving the
								    allegation of credit card or other abuse or fraud) or any uncollectable revenue attributable to the subject member.
								<br><br>
								
								    2/ Paying Member Referrals. As used herein, a “Referred Member” shall mean an internet user who creates a new member account using an existing member’s
								    User Referral Link. Eligible members will receive a commission equal to twenty percent (20%) of Adjusted Gross Receipts paid by each of their Referred
								    Members to the Site.
								<br><br>
								
								    3/ Paying Sub-Referrals. Eligible members will receive a commission equal to five percent (5%) of the amount of commissions paid to their Referred Members
								    for payments received from internet users who create new member accounts using the Referred Members’ User Referral Link.
								<br><br>
								
								    4/ Performing Member Referrals. As used herein, a “Referred Performer” shall mean an internet user who creates a new member account using an existing
								    member’s User Referral Link and who verifies his or her account for purposes of collecting payment by completing the Site’s age verification process.
								    Eligible members will receive a one-time fifty U.S. dollars (US$50.00) commission for each of their Referred Performers who subsequently earns a minimum
								    amount that we will establish, from time to time, in our sole discretion. Studio accounts are not eligible for model referral commissions.
								<br><br>
								
								    We reserve the right to modify these amounts at any time without further notice to you.
								<br><br>
								
								    27 <strong><u>Commissions on Number of Signups; Countries and Tiers</u></strong>.
								<br><br>
								
								    (a) Certain members may be eligible for commissions based on the number of internet users referred by such members who create an account with the Site. The
								    amount of commission will depend upon the country in which the referred internet user resides, as described more fully below. As applicable, a commission
								    of One U.S. Dollar (US$1.00) will be paid for referred members from a Tier 1 country, Ten U.S. Cents (US$0.10) for referred members from a Tier 2 country,
								    and One U.S. Cent (US$0.01) for referred members from a Tier 3 country. We reserve the right to modify these amounts at any time without further notice to
								    you. No commission will be paid for a referred members residing in a country not found in Tier 1, Tier 2, or Tier 3 below.
								<br><br>
								
								    The following countries have been assigned to the tiers indicated for each:
								<br><br>
								
								    Tier 1: Netherlands Antilles Austria Australia Belgium Canada Switzerland Germany Denmark Finland Falkland Islands (Malvinas) Faroe Islands France United
								    Kingdom Guernsey Gibraltar Greenland Ireland Iceland Jersey Japan Liechtenstein Luxembourg Netherlands Norway New Zealand Qatar Sweden Singapore San Marino
								    United States Minor Outlying Islands United States United States Virgin Islands
								    <br/>
								    Tier 2: United Arab Emirates Aruba Brunei Darussalam Brazil the Bahamas Cyprus Spain Equatorial Guinea Greece Hong Kong Israel Isle of Man Italy South
								    Korea Kuwait Cayman Islands Macau Macao French Polynesia Puerto Rico Portugal Slovenia British Virgin Islands
								    <br/>
								    Tier 3: Antigua and Barbuda Anguilla Barbados Bahrain Cook Islands Chile Czech Republic Estonia Guam Croatia Hungary Saint Kitts and Nevis Lebanon
								    Lithuania Latvia Northern Mariana Islands Malta Mexico New Caledonia Oman Poland Russia Saudi Arabia Seychelles Slovakia Turkey Trinidad and Tobago Taiwan
								    Uruguay Venezuela
								    <br/>
								    We reserve the right to modify the countries belonging to each tier at any time without further notice to you.
								<br><br>
								
								    (<strong>b)</strong><u> /Commission Payouts</u>. Periods for eligible members to accumulate commissions run from the 1st through the 15th and the 16th
								    through the 31st of each month. Commission payments will be made to eligible members seven days after each period is closed. In the event that you
								    accumulate a commission, you will not be entitled to receive payment, nor shall the Site be liable for any such payment, unless and until the total amount
								    of accumulated funds associated with your account exceeds Fifty U.S. Dollars (US$50.00). In order to receive cash commissions, you may be required to
								    complete a one-time claim form, which might include submission of your legal name, a copy of your government-issued photo identification, mailing address,
								    birth date, telephone number, social security number and a selection of a preferred payment method. In addition, depending on the amount of commissions
								    accumulated, you might be required to sign, notarize, and return an affidavit or declaration of eligibility, a liability release, an I.R.S. Form W-9 and
								    provide any additional information that may be required by the Site. Failure to provide any requested information may result in forfeiture of any unpaid
								    commissions. We reserve the right to charge a $10.00 payment reissue fee for replacing lost or misplaced payments that had previously been issued. Fee
								    assessed at time of reissue.
								<br><br>
								
								    <strong>(c)<u> </u></strong>
								    <u>Disclaimer of Agency</u>
								    . Nothing in this Agreement is intended by you or the Site to constitute a joint venture or collaboration between you and the Site. You acknowledge that
								    you are in no way an agent, employee or similarly situated employment like relationship. You further acknowledge that you have no authority to act on the
								    Site’s behalf or bind the Site to any debt or agreement.
								<br><br>
								
								    <strong><u>(d)</u></strong>
								    <u> </u>
								    <strong><u>Invalid Referrals</u></strong>
								    . You acknowledge and agree that you shall not be entitled to any compensation from the Site for any referral if the Site determines or believes, in the
								    Site’s sole discretion, that such referral is the result of possibly fraudulent activity or any violation of this Agreement.
								<br><br>
								
								    28 <strong><u>Billing Errors</u></strong>. If you believe that you have been erroneously billed, please notify us immediately of such error. If we do not
								    hear from you within thirty (30) days after such billing error first appears on any account statement, such fee will be deemed acceptable by you for all
								    purposes, including resolution of inquiries made by your credit card issuer. You release us from all liabilities and claims of loss resulting from any
								    error or discrepancy that is not reported to us within thirty (30) days of its publication.
								<br><br>
								
								    29 <strong><u>Severability</u></strong><strong>.</strong> If any term, clause or provision hereof is held invalid or unenforceable by a court of competent
								    jurisdiction, such invalidity shall not affect the validity or operation of any other term, clause or provision and such invalid term, clause or provision
								    shall be deemed to be severed from this Agreement.
								<br><br>
								
								    30 <strong><u>Arbitration</u></strong>. All Disputes (including any dispute relating to the arbitration of this agreement or any provision of this
								    agreement or any other dispute relating to arbitration) must be submitted to arbitration in accordance with the arbitration rules governed by the laws of
								    British Columbia, in the city of Vancouver, British Columbia, Canada. The term “Dispute” means any controversy or claim arising out of or relating to the
								    Website or the Services or this agreement, or any breach thereof, including any claim that this Agreement, or any part of this Agreement is invalid,
								    illegal or otherwise voidable or void.
								    <br/>
								    <br/>
								    The provisions of this Arbitration Section must be construed as independent of any other covenant or provision of this Agreement; provided that if a court
								    of competent jurisdiction or arbitrator determines that any such provisions are unlawful in any way, such court or arbitrator is to modify or interpret
								    such provisions to the minimum extent necessary to have them comply with the law. Notwithstanding any provision of this Agreement relating to under which
								    state’s laws this Agreement is to be governed by and construed under, all issues relating to arbitration or the enforcement of the Agreement to arbitrate
								    contained herein are to be governed by the the laws of British Columbia in the city of Vancouver, British Columbia, Canada.
								    <br/>
								    <br/>
								    Judgment upon an arbitration award may be entered in any court having competent jurisdiction and will be binding, final and non-appealable. “You” and the
								    Website hereby waive to the fullest extent permitted by law, any right to or claim for any punitive or exemplary damages against the other and agree that
								    in the event of a dispute between them, each shall be limited to the recovery of any actual damages sustained by it.
								    <br/>
								    <br/>
								    This arbitration provision is self-executing and will remain in full force and effect after the expiration or termination of this Agreement. In the event
								    either party fails to appear at any properly noticed arbitration proceeding, an award may be entered against such party by default or otherwise
								    notwithstanding said failure to appear.
								    <br/>
								    <strong>
								        <u>
								            <br/>
								        </u>
								    </strong>
								    You and the Site hereby agree that no action (whether for arbitration, damages, injunctive, equitable or other relief, including rescission) will be
								    maintained by any party to enforce any liability or obligation of the other party, whether arising from this Agreement or otherwise, or any other Dispute,
								    unless brought before the expiration of the earlier of one year from the occurrence of the facts giving rise to such claims or within 90 days from either
								    the actual discovery of the facts giving rise to such claims or from the date on which the party should have, in the exercise of reasonable diligence,
								    discovered such facts.
								    <br/>
								    <br/>
								    <br/>
								<br><br>
								
								    The obligation to arbitrate is not binding upon the Site with respect to claims relating to its trademarks, service marks, patents, copyrights, or other
								    intellectual-property rights, or requests for temporary restraining orders, preliminary injunctions or other procedures in a court of competent
								    jurisdiction to obtain interim relief when deemed necessary by such court to preserve the status quo or prevent irreparable injury pending resolution by
								    arbitration of the actual dispute between the parties.
								    <br/>
								    <br/>
								    The prevailing party will be entitled to receive from the non-prevailing party its costs relating to the arbitration proceeding including but not limited
								    to, the arbitrator's fees, attorneys' fees and costs, witness fees, transcription fees, etc. and sales and use taxes thereon, if any.
								    <br/>
								    <br/>
								    You and the Website each acknowledges and agrees that it is the intent of the parties that arbitration and litigation between the parties will be of the
								    parties' individual claims, and that none of their respective claims may be arbitrated or litigated on a class-wide basis.
								<br><br>
								
								    <strong>
								        <u>
								            Any and all arbitration shall be governed by the Laws of British Columbia, in the city of Vancouver, British Columbia, Canada and any legal action
								            must be commensed in Vancouver, British Columbia, Canada
								        </u>
								    </strong>
								<br><br>
								
								    <u>31/ </u>
								    <strong><u>Cancellation By User</u></strong>
								    . You may cancel your membership at any time by visiting <a href="accounts/delete/index.html">our cancellation page</a>. You hereby agree to
								    be personally liable for any and all charges incurred by your user name and password until you terminate your membership as provided herein. In the event
								    that you cancel your account, refunds may be granted for Virtual Money that was directly purchased by you; no funds will be credited to you or can be
								    converted to cash or other form of reimbursement unless those funds were paid by you in purchasing Virtual Money. Upon our processing of your request to
								    cancel your membership, you will no longer have access to the non-public areas of the Service.
								<br><br>
								
								    <u>32 </u>
								    <strong><u>Termination By the Site</u></strong>
								    <strong>. </strong>
								<br><br>
								
								    Without limiting other remedies, the Service may immediately issue a warning, temporarily suspend, indefinitely suspend, or terminate your access and use
								    of the Service and refuse to provide our services to you at any time, with or without advance notice, if: (a) the Site believes that you have breached any
								    of these Terms and Conditions; (b) we are unable to verify or authenticate any information you provide to us; (c) we believe that your actions may cause
								    legal liability for you, our users or us; or (d) the Site decides to cease operations or to otherwise discontinue any of the Site or parts thereof.
								    Further, you agree that neither the Site, nor any third party acting on our behalf, shall be liable to you for any termination of your membership or access
								    to the Service. You agree that if your account is terminated by the Site, you will not attempt to re-register as a member without prior written consent
								    from the Site.
								<br><br>
								
								    <strong>33 </strong>
								    <strong><u>After Termination or Cancellation</u></strong>
								    . You accept that when you cancel your membership with the Service you will be automatically deleted from and locked out of the Service. You will be unable
								    to access your account on the Service. You also agree and accept that upon cancellation your account, any mail and all other membership materials will be
								    immediately deleted from the Site and Service and that such information will be irretrievable.
								<br><br>
								
								    <strong>34 </strong>
								    <strong><u>Indemnification</u></strong>
								    <strong>.</strong>
								    You agree to defend, indemnify, defend, and hold the Site and its affiliates, successors, assigns, officers, employees, agents, directors, shareholders and
								    attorneys, harmless from and against any and all claims and liabilities, including reasonable attorneys’ and experts’ fees, related to or arising from: (i)
								    any breach by you of this Agreement; (ii) your use (or misuse) of the Service, Site and/or Promotional Materials; (iii) all conduct and activities
								    occurring using your account and/or Referral Sites, if any; (iv) any item or service sold or advertised in connection with your Referral Sites, if any; (v)
								    any defamatory, libelous or illegal material(s) contained within your Content or your information and data; (vi) any claim or contention that any of your
								    Referral Sites, if any, contain information, data or other materials which infringes any third party’s patent, copyright, trademark, or other intellectual
								    property rights or violates any third party's rights of privacy or publicity; (vii) third-party access or use of any Promotional Materials provided to you;
								    (viii) any claim related to your website(s); (ix) any costs incurred on your behalf as a result of your failure to comply with your local governing
								    jurisdiction law; and/or (x) any violation of this Agreement. We reserve the right, at our own expense, to participate in the defense of any matter
								    otherwise subject to indemnification from you, but shall have no obligation to do so, and we are permitted by this agreement to later seek indemnification
								    from you. You shall not settle any such claim or liability without the prior written consent of the Site. You understand that we will take any and all
								    measures to protect ourselves from any legal or civil litigation including, but not limited to canceling your account, in our sole discretion. You also
								    understand that we will charge, on an hourly basis, for any and all time spent responding to any third-party complaints, disputes, copyright claims or
								    actions involving you or your Referral Sites.
								<br><br>
							</div>
						  </div>
						</div>
			</div>
		</div>
	</div>
</div>                  <a href="#" data-reveal-id="signupModal" class="close-reveal-modal">&#215;</a>
                </div> 

                <div id="packagesModal" class="reveal-modal large" data-reveal data-options="close_on_background_click:false;close_on_esc:false;">
                 <div class="row collapse inner">
	<div class="large-12 columns">	    		
		<div class="row">
			<div class="large-12 columns right">
				<h3 class="text-center">Membership Types, Fees and Packages</h3>
				<hr>
				<strong>Free Trial</strong> <br>
				Expires in 7 days. <br><br>
				<form style="margin:0px;">
				<a href="#" data-reveal-id="signupModal" class="button tiny radius close-reveal-modal" style="position: inherit; font-size: 16px;
">Free Signup</a>
				</form>

	    		<strong>Basic Package $9.69</strong> <br>
	    		With the Basic Package you get acess to live chat with models and group chat. <br>
	    		You'll get 138 + 20 chips with this type of package. <br>
	    		Membership under this package is non-recurring and will expire in 20 days. <br><br>
	    		<form method="post" action="https://billing.gtbill.com/signup.aspx" data-abide style="margin:0px;">
				<!--Required--> 
				<input type="hidden" name="MerchantID" value="79f9802d-7e9a-4968-ba74-657e622ab076"/> 
				<input type="hidden" name="SiteID" value="76850c18-4abc-41b6-abc6-a76cc8ce2224"/> 
				<input type="hidden" name="PriceID" value="9897"/> 
				<input type="hidden" name="CurrencyID" value="USD"/> 
				<!--Optional-->				
				<input type="submit" value="Buy Now" class="button tiny radius" style="padding:8px;">
				</form>

	    		<strong>Silver $49.69</strong> <br>
	    		With the Silver Package you get acess to live chat with models and group chat. <br>
	    		You'll get 710 + 40 chips with this type of package. <br>
	    		Membership under this package is recurring and will expire in 30 days. <br>
	    		Please note after 30 days your membership will be renewed unless cancelled as per your request. <br><br>
	    		<form method="post" action="https://billing.gtbill.com/signup.aspx" data-abide style="margin:0px;">
				<!--Required--> 
				<input type="hidden" name="MerchantID" value="79f9802d-7e9a-4968-ba74-657e622ab076"/> 
				<input type="hidden" name="SiteID" value="76850c18-4abc-41b6-abc6-a76cc8ce2224"/> 
				<input type="hidden" name="PriceID" value="9898"/> 
				<input type="hidden" name="CurrencyID" value="USD"/> 
				<!--Optional-->				
				<input type="submit" value="Buy Now" class="button tiny radius" style="padding:8px;">
				</form>

	    		<strong>Gold $99.69</strong> <br>
	    		With the Silver Package you get acess to live chat with models and group chat. <br>
	    		You'll get 1424 + 70 chips with this type of package. <br>
	    		Membership under this package is recurring and will expire in 40 days. <br>
	    		Please note after 30 days your membership will be renewed unless otherwise cancelled as per your request. <br><br>
	    		<form method="post" action="https://billing.gtbill.com/signup.aspx" data-abide style="margin:0px;">
				<!--Required--> 
				<input type="hidden" name="MerchantID" value="79f9802d-7e9a-4968-ba74-657e622ab076"/> 
				<input type="hidden" name="SiteID" value="76850c18-4abc-41b6-abc6-a76cc8ce2224"/> 
				<input type="hidden" name="PriceID" value="9899"/> 
				<input type="hidden" name="CurrencyID" value="USD"/> 
				<!--Optional-->				
				<input type="submit" value="Buy Now" class="button tiny radius" style="padding:8px;">
				</form>

	    		<strong>Elite $149.69</strong> <br>
	    		With the Silver Package you get acess to live chat with models and group chat. <br>
	    		You'll get 2138 + 100 chips with this type of package. <br>
	    		Membership under this package is non-recurring and will expire in 60 days. <br><br>
	    		<form method="post" action="https://billing.gtbill.com/signup.aspx" data-abide style="margin:0px;">
				<!--Required--> 
				<input type="hidden" name="MerchantID" value="79f9802d-7e9a-4968-ba74-657e622ab076"/> 
				<input type="hidden" name="SiteID" value="76850c18-4abc-41b6-abc6-a76cc8ce2224"/> 
				<input type="hidden" name="PriceID" value="9900"/> 
				<input type="hidden" name="CurrencyID" value="USD"/> 
				<!--Optional-->				
				<input type="submit" value="Buy Now" class="button tiny radius" style="padding:8px;">
				</form>	    		

			</div>
		</div>
	</div>
</div>                  <a href="#" data-reveal-id="signupModal" class="close-reveal-modal">&#215;</a>
                </div>                

            </div>
          </div>
          <div class="row collapse">&nbsp;</div>
          <div class="row collapse">
            <div class="large-12 columns right">
              <form id="frmSearch" method="post" action="http://cybersensual.com/search/keywords">
                <div class="row collapse postfix-round">
                <div class="small-9 columns">
                  <input type="text" name="keywords" placeholder="search" class="searchTextField" style=" color:#000">
                </div>
                <div class="small-3 columns searchBtn">
                  <a href="#" onClick="document.getElementById('frmSearch').submit();" class="button postfix" style="background:none;color:#ff0000;text-decoration:none; border-radius:4px !important">Go</a>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  </div> 
</div>
<div style=" height:1px; background:#222222; overflow:hidden">
&nbsp;
</div>

<style>
.left li{ border-right:1px solid}

.name{ border-right:1px solid}




#sk li{ box-shadow:#b3b3b3 0 0 0.5px ; margin-bottom:35px !important; width:24%; margin:.5%; padding-top:4px;}


@media(max-width:640px)
{
#sk li{ box-shadow:#b3b3b3 0 0 0.5px ; margin-bottom:35px !important; width:49%; margin:.5%; padding-top:4px;}
#nav_responsive li{ border-bottom:#222222 1px solid; border-right:none !important}

.dropdown h5 a{ color:#ff004e !important; font-weight:600}

	}

@media(min-width:641px)
{	.top-nav-ho{ display:none}
	}

@media(max-width:1124px)
{
.responsiv_botton{ clear:both !important; width:100% !important; float:right; align:right  !important; margin-top:20px}
}
@media(max-width:372px)
{
.responsiv_botton{ font-size:8.4px}
.logo_top{ margin-bottom:10px;}

}


</style>
<div class="row" style="display:none" >
  <div class="large-12 columns" >
    <nav class="top-bar" data-topbar role="navigation" >
      <ul class="title-area la"  >
        
        <li class="top-nav-ho"><h1>&nbsp;</h1>
        
        </li>

   
         <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
      </ul>      
      <section class="top-bar-section" id="nav_responsive" >
        <!-- Right Nav Section -->  
     
        <ul class="left" >
         <li ><a href="index.html" >HOME</a></li>
         <li ><a href="#">GIRLS</a></li>
         <li ><a href="#">TRANSGENDERED</a></li>
          <li ><a href="#">LESBIAN</a></li>
         <li ><a href="#">GAY</a></li>
         <li ><a href="#">MALE</a></li>
          <li ><a href="#">TEEN 18 -19</a></li>
          <li class="has-dropdown">
            <a href="search/category/fetish.html">FETISH</a>
            <ul class="dropdown">
              <li ><a href="#">Dominatrix </a></li>
              <li class="active"><a href="#">Bondage</a></li>
            </ul>
          </li>
          <li class="has-dropdown">
            <a href="#">ETHNICITY</a>
            <ul class="dropdown">
             <li ><a href="#">Asian</a></li>
             <li ><a href="#">Ebony</a></li>
              <li ><a href="#">Latin</a></li>
             <li ><a href="#">European</a></li>
              <li ><a href="#">Middle Eastern </a></li>
             <li ><a href="#">Bi Racial</a></li>
            </ul>
          </li>
          <li class="has-dropdown">
            <a href="#">ASSES</a>
            <ul class="dropdown">
             <li ><a href="#">Fair</a></li>
              <li ><a href="#">Medium</a></li>
              <li ><a href="#">Large</a></li>
            </ul>
          </li>         
          <li class="has-dropdown" style="border:none !important">
            <a href="#">MORE</a>
            <ul class="dropdown">
              <li class="has-dropdown">
                <a href="search/category/breast.html">BREAST</a>
                <ul class="dropdown">
                 <li ><a href="#">Boobs</a></li>
                 <li ><a href="#">Tits</a></li>
                </ul>
              </li>
              <li><a href="search/category/bbw.html">BBW</a></li>
              <li class="has-dropdown">
               <li ><a href="#">ROLEPLAY</a>
                <ul class="dropdown">
                 <li ><a href="#">Nurse</a></li>
                 <li ><a href="#">Maid</a></li>
                 <li ><a href="#">Doctor</a></li>
                  <li ><a href="#">Police</a></li>
               <li ><a href="#">Student</a></li>
                </ul>
              </li>
             <li ><a href="#">PORNSTARS</a></li>
             <li ><a href="#">MUSCLE</a></li>
            <li ><a href="#">GORGEOUS</a></li>
             <li ><a href="#">GRANDE</a></li>
             <li ><a href="#">HOTTIES</a></li>
             <li ><a href="#">BABES</a></li>
             <li ><a href="#">TWERK</a></li>
             <li ><a href="#">STRIP</a></li>
              <li ><a href="#">PETITE</a></li>
            </ul>
          </li>   
        </ul>
     
      </section>
    </nav>
  </div>
</div>
</div>
<div class="row">
  <div class="large-12 columns">
    <div class="row collapse inner">&nbsp;</div>


  
<script type="text/javascript">
    $("document").ready(function(){        
      
      $('#flashModal').foundation('reveal', 'open')


    });
    </script>
<style>
.reveal-modal-bg {
	background:#3b3939 !important;
	opacity:0.9;
}
</style>

<!--<div id="flashModal" class="reveal-modal large" data-reveal data-options="close_on_background_click:false;close_on_esc:false;" style="box-shadow: 1px 1px 10px #272727; border-radius: 5px;  ">
  <strong>YOU MUST BE OVER 18 AND AGREE TO THE TERMS BELOW BEFORE CONTINUING:</strong> <br><br>
  <div class="scroll">
    
    <p>This website contains information, links, images and videos of 
	sexually explicit material (collectively, the “Sexually Explicit 
	Material”).  Do NOT continue if: (i) you are not at least 18 years 
	of age or the age of majority in each and every jurisdiction in 
	which you will or may view the Sexually Explicit Material, 
	whichever is higher (the “Age of Majority”), (ii) such material 
	offends you, or (iii) viewing the Sexually Explicit Material is 
	not legal in each and every community where you choose to view 
	it.</p>
    <p>By choosing to enter this website you are affirming under oath and 
	penalties of perjury pursuant to Title 28 U.S.C. § 1746 and other 
	applicable statutes and laws that all of the following statements 
	are true and correct:</p>
    <ul>
	<li>I have attained the Age of Majority in my jurisdiction;</li>
	<li>The sexually explicit material I am viewing is for my own 
	    personal use and I will not expose any minors to the 
	    material;</li>
	<li>I desire to receive/view sexually explicit material;</li>
	<li>I believe that as an adult it is my inalienable constitutional 
	    right to receive/view sexually explicit material;</li>
	<li>I believe that sexual acts between consenting adults are 
	    neither offensive nor obscene;</li>
	<li>The viewing, reading and downloading of sexually explicit 
	    materials does not violate the standards of any community, 
	    town, city, state or country where I will be viewing, reading 
	    and/or downloading the Sexually Explicit Materials;</li>
	<li>I am solely responsible for any false disclosures or legal 
	    ramifications of viewing, reading or downloading any material 
	    appearing on this site.  I further agree that neither this 
	    website nor its affiliates will be held responsible for any 
	    legal ramifications arising from any fraudulent entry into or 
	    use of this website;</li>
	<li>I understand that my use of this website is governed by the 
	    website’s <a href="terms-and-conditions.html">Terms</a>
	    which I have reviewed and accepted, and I agree to be bound by 
	    such Terms.</li>
	<li>I agree that by entering this website, I am subjecting myself, 
	    and any business entity in which I have any legal or equitable 
	    interest, to the personal jurisdiction of the State of Florida, 
	    Miami-Dade County, should any dispute arise at any time between 
	    this website, myself and/or such business entity;</li>
	<li>This warning page constitutes a legally binding agreement 
	    between me, this website and/or any business in which I have 
	    any legal or equitable interest.  If any provision of this 
	    Agreement is found to be unenforceable, the remainder shall be 
	    enforced as fully as possible and the unenforceable provision 
	    shall be deemed modified to the limited extent required to 
	    permit its enforcement in a manner most closely representing 
	    the intentions as expressed herein;</li>
	<li>All performers on this site are over the age of 18, have 
	    consented being photographed and/or filmed, believe it is their 
	    right to engage in consensual sexual acts for the entertainment 
	    and education of other adults and I believe it is my right as 
	    an adult to watch them doing what adults do;</li>
	<li>The videos and images in this site are intended to be used by 
	    responsible adults as sexual aids, to provide sexual education 
	    and to provide sexual entertainment;</li>
	<li>I understand that providing a false declaration under the 
	    penalties of perjury is a criminal offense; and</li>
	<li>I agree that this agreement is governed by the Electronic 
	    Signatures in Global and National Commerce Act (commonly known 
	    as the “E-Sign Act”), 15 U.S.C. § 7000, et seq., and by 
	    choosing to click on “I Agree.  Enter Here” and indicating my 
	    agreement to be bound by the terms of this agreement, I 
	    affirmatively adopt the signature line below as my signature 
	    and the manifestation of my consent to be bound by the terms 
	    of this agreement.</li>
    </ul>
      </div>
  <br>
  <span style="color:#FF0000;">THIS SITE ACTIVELY COOPERATES WITH LAW ENFORCEMENT IN ALL INSTANCES OF SUSPECTED ILLEGAL USE OF THE SERVICE, ESPECIALLY IN THE CASE OF UNDERAGE USAGE OF THE SERVICE.</span> <br>
  <p style="padding-top:20px;text-align:center;">
  	<a href="#" data-reveal-id="tocModal2">Terms and Condition</a> &nbsp; | &nbsp; 
  	<a href="#" data-reveal-id="model2257">2257 Policy</a> &nbsp; | &nbsp; 
    <a href="#" data-reveal-id="contactModal" >Contact Us</a>
  </p>
  <p style="margin-top: 25px; text-align: center;">
      <img src="../ssl-ccstatic.highwebmedia.com/images/badges/safelabeling.gif">
      <img src="../ssl-ccstatic.highwebmedia.com/images/badges/88x31_RTA-5042-1996-1400-1577-RTA_a.gif" style="margin: 0 10px;">
      <img src="../ssl-ccstatic.highwebmedia.com/images/badges/ApprovedASACPmember.gif">
  </p>
   <br>
  <div class="row">
    <div class="large-4 columns">
      &nbsp;
    </div>
    <div class="large-2 columns">
      <a href="http://google.com/" class="button" onclick="window.top.close();">EXIT</a>
    </div>
    <div class="large-2 columns">
      <a href="#" class="close-reveal-modal button" style="font-size:1rem;top:0rem;">I AGREE</a>
    </div>
    <div class="large-4 columns">
      &nbsp;
    </div>
  </div>
</div>-->

<div id="tocModal2" class="reveal-modal large" data-reveal data-options="close_on_background_click:false;close_on_esc:false;">
 <style>
p { margin-bottom:5px; }
</style>
<div class="row collapse inner">
	<div class="large-12 columns">	    		
		<div class="row">
			<div class="large-12 columns right">
				<h3 class="text-center">Terms and Conditions</h3>
				<h6 class="text-center">Inevitable Media Faction, Ltd.</h6>
				<hr>
	    		<dl class="tabs vertical" data-tab>
						  <dd class="active"><a href="#panel1">MEMBER</a></dd>
						  <dd><a href="#panel2">MODEL</a></dd>
						</dl>
						<div class="tabs-content">
						  <div class="content active" id="panel1">
						    <div class="large-3 columns">
						  		&nbsp;
						  	</div>
						  	<div class="large-9 coluns right">
						  		
								    1. <strong><u>PRECURSORY PROVISIONS : </u></strong>
								<br><br>
								
								    (A) Our websites are different from many other sites on the Internet as they contain communications provided by users
								<br><br>
								
								    and third parties that may be outside of our direct control.
								<br><br>
								
								    (B) Through the use of these Terms and Conditions, we are placing legal conditions on your use of these websites
								<br><br>
								
								    (www.cybersensual.com, hereinafter the "Websites"), and making certain promises to you.
								<br><br>
								
								    (C) Our first condition is that you must agree to all of the conditions in this set of Terms and Conditions of use
								<br><br>
								
								    (hereinafter "T&amp;C's" or "Agreement"). You do not need to use our Websites, therefore if you do not wish to be
								<br><br>
								
								    bound by each and every provision in this Agreement, then you are not welcome to use these Websites and should
								<br><br>
								
								    leave and use another service.
								<br><br>
								
								    (D) Our Websites exclusively for adults only. If you are under the age of eighteen (18),
								<br><br>
								
								    <strong> SORRY BUT, YOU ARE PROHIBITED FROM USING ANY OUR OUR WEBSITES.</strong>
								<br><br>
								
								    <strong> </strong>
								<br><br>
								
								    (E) If you do not understand all of the terms in this Agreement, then you should consult with a lawyer before using the
								<br><br>
								
								    Websites.
								<br><br>
								
								    (F) You MUST NOT disregard any portion of this Agreement. However, if there is a particular portion of this
								<br><br>
								
								    Agreement that you wish to avoid, you may contact us to negotiate a separate agreement prior to using the
								<br><br>
								
								    Websites. We do not guarantee that such negotiations will be successful. However, if you wish to discuss your
								<br><br>
								
								    own personalized Agreement, please contact us or have your attorney do so.
								<br><br>
								
								    2. <strong><u>USER TERMS:</u></strong>
								<br><br>
								
								    (A) {Us,} being the service provider. Cybersensual is the service provider ww.cybersensual.com . Just for the sake of legal clarity
								<br><br>
								
								    wherever our members terms and conditions use the pronoun such as (us, we, our, ours etc.) Those pronouns simply are
								<br><br>
								
								    referring to Cybersensual as the service provider for “www.cybersensual.com
								<br><br>
								
								    (B) {You,} being the user as a User of these websites, this agreement will refer to the user herein after as “You” or through
								<br><br>
								
								    any second person pronouns, such as Yours, etc. Hereinafter, the user of the websites shall be referred to in . Applicatory
								<br><br>
								
								    second person pronouns.
								<br><br>
								
								    (C) When the term Websites is being used in the TERMS AND CONDITIONS, it means www.cybersensual.com
								<br><br>
								
								    unless the agreement specifically says otherwise.
								<br><br>
								
								    3. <strong>Consideration</strong>
								<br><br>
								
								    <strong> </strong>
								    for consent to all of the provisions we’ve outlined in this agreement that have provided to
								<br><br>
								
								    “You” in the form of allowing you to use our websites and our services. “You” agree that such consideration is both
								<br><br>
								
								    sufficient, and that it is has been received upon your viewing or downloading any portion of any of our websites.
								<br><br>
								
								    4. <strong>Revisions to this Agreement</strong>
								<br><br>
								
								    (A) Periodically, “We” may change this agreement. “We” reserve the right to do so, and “You” specifically
								<br><br>
								
								    agree that “We “solely have this right. “You” agree that all modifications or changes to this agreement are
								<br><br>
								
								    enforced immediately upon posting. The updated or edited version repudiate any previous versions
								<br><br>
								
								    immediately upon posting, and the previous version has no legal effect.
								<br><br>
								
								    (B) If “We” change anything in this Agreement, “We” will change the "last modified date" at the top of this
								<br><br>
								
								    Agreement. “You” agree to re-visit this web page on a weekly basis, and to use the "refresh" button on “Your”
								<br><br>
								
								    browser when doing so. Upon each visit, “You” agree to note the date of the last revision to this Agreement.
								<br><br>
								
								    If the "last modified" date remains unchanged from the last time “You” reviewed this Agreement, then “You”
								<br><br>
								
								    may presume that nothing in the Agreement has been changed since the last time “You” read it. If the "last
								<br><br>
								
								    modified" date has changed, then “You” can be certain that something in the Agreement has been changed,
								<br><br>
								
								    and you agree that you will re-review the Agreement in its entirety and that “You” will agree to its terms or
								<br><br>
								
								    immediately STOP use of any Websites in the Network.
								<br><br>
								
								    (C) Waiver - if “You” fail to re-review this Agreement as required to determine if any of the terms have changed,
								<br><br>
								
								    “You” assume all responsibility for such neglect and “You” agree that such failure amounts to “Your”
								<br><br>
								
								    affirmative waiver of Your right to review the amended terms. We are not responsible for Your disregard of
								<br><br>
								
								    Your legal rights.
								<br><br>
								
								    5. <strong><u>CONSENT STATEMENT</u></strong>
								<br><br>
								
								    (A) “You” must agree to all of the terms in this Agreement before using the Websites or our services.
								<br><br>
								
								    (B) The way in which “You” can and will demonstrate Your affirmative acceptance of all of the terms in this Agreement: (C) If you click any link, button,
								    or other device, provided to “You” in any part of Our Websites' interface, then
								<br><br>
								
								    “You” have legally agreed to all of these T&amp;C's; or
								<br><br>
								
								    (D) By using our services. “You” understand and agree that “We” will consider any use of
								<br><br>
								
								    “Our” Websites as “Your” affirmation of “Your” complete and unconditional acceptance to all of the terms in this
								<br><br>
								
								    Agreement.
								<br><br>
								
								    6. <strong><u>ACCESS FEES AND MEMBER STATUS</u></strong>
								<br><br>
								
								    (A) Access and limited license - All Users may access certain public areas of the Site. “You” understand that all “We” are
								<br><br>
								
								    selling “You” is access to “Our” services as “We” provide them on occasion. “You” need to provide “Your” own access to
								<br><br>
								
								    the hardware and/or software to “You” - and You need to purchase or license the necessary hardware and software to
								<br><br>
								
								    access. the Website. This User Agreement covers all public and non-public areas of the Website.
								<br><br>
								
								    (B) Subject to all of the User Agreement and recognizing that and “Our” services, the Publisher grants “You” a limited,
								<br><br>
								
								    inclusive, non negotiable, irregular, personal license to access and use the Website and the materials within.
								<br><br>
								
								    Publisher provides the materials on this Website for the personal, non-commercial use by viewers, fans, visitors,
								<br><br>
								
								    subscribers and/or potential subscribers of said Website. “Users” of this Website are granted a single copy license to view
								<br><br>
								
								    materials limited to one computer only.
								<br><br>
								
								    (C) All materials on the Website shall be for private non-commercial use only, and all other use is STRICTLY PROHIBITED.
								<br><br>
								
								    Publisher reserves the right to limit the amount of materials viewed. You agree to prevent any unauthorized copying
								<br><br>
								
								    of the Website, or any of the materials within. Any unauthorized usage of the Website or any of the materials
								<br><br>
								
								    within terminates this limited license effective immediately. This is a license to use and access the Website for
								<br><br>
								
								    its intended purpose and is not a transfer of title. You will not copy or redistribute any of the content appearing on
								<br><br>
								
								    this Website. Publisher reserves the right to terminate this license at any time if “You” breach or violate any provision of
								<br><br>
								
								    this Agreement, in which case You will be obligated to immediately destroy any information or materials . “You” have
								<br><br>
								
								    downloaded, printed or copied from this Website. Offenders of this limited license may be prosecuted to the
								<br><br>
								
								    fullest extent under the applicable law.
								<br><br>
								
								    7. <strong><u>MEMBERSHIP TYPES, FEES AND PACKAGES</u></strong>
								<br><br>										
										<strong>Packages:</strong>
								    	<ol>
								    		<li>Basic $9.69 (138 + 20 chips, Non-Recurring and will expire in 20 days)</li>
								    		<li>Silver $49.69 (710 + 40 chips, Recurring and will expire in 30 days)</li>
								    		<li>Gold $99.69 (1424 + 70 chips, Recurring and will expire in 40 days)</li>
								    		<li>Elite $149.69 (2138 + 100 chips, Non-Recurring and will expire in 60 days)</li>
								    	</ol>
								    	<strong>Activation Time:</strong> Your membership account will be activated immediately upon credit card approval
										<br>
								    	<strong>Free Memberships:</strong> Expires after 7 days.
								<br><br>
								
								    8. <strong>SPECIAL CONSIDERATIONS REGARDING MINORS</strong>
								<br><br>
								
								    (A) <strong>Age of Majority</strong>. In order to use the Websites or any our services, You must qualify the age of
								<br><br>
								
								    majority in your jurisdiction. ‘You” must verify that “You are <strong>eighteen {18} or {21} years of age</strong>
								<br><br>
								
								    depending on the age of majority in “Your” jurisdiction, and that “You” have the legal capacity to enter into this
								<br><br>
								
								    Agreement.
								<br><br>
								
								    (B) We specifically discard any responsibility or liability for any misrepresentations regarding a User's age. . ( (C) “You must verify that “You” will not
								    allow any minor access to these Websites. Users should
								<br><br>
								
								    implement parental control protections, such as computer hardware, software, or filtering services, which
								<br><br>
								
								    may help users to limit minors' access to harmful material. “You” acknowledge that if your computer can be
								<br><br>
								
								    accessed by a minor, that You will take all precautions to keep “Our” materials from being viewed by minors.
								<br><br>
								
								    “You” also acknowledge that if You are a parent, it is Your responsibility, and not “Ours,” to keep “Our”
								<br><br>
								
								    adult content from being displayed to Your children.
								<br><br>
								
								    9. <strong>WE HAVE A ZERO TOLERANCE POLICY FOR CHILD PORNOGRAPHY AND A ZERO TOLERANCE POLICY REGARDING</strong>
								<br><br>
								
								    <strong> PEDOPHILE RELATED ACTIVITY.</strong>
								<br><br>
								
								    (A) All of Our webcam performances are provided by persons over the age of eighteen (18). We take great
								<br><br>
								
								    measures to ensure that no underage models appear on “Our” Websites.
								<br><br>
								
								    (B) If “You” pursue any form of child pornography (<strong><em>including "VIRTUAL" child pornography</em></strong>), You must exit
								<br><br>
								
								    “Our” Websites immediately. We do not provide this kind of material nor do we allow those who
								<br><br>
								
								    provide this kind of material. We strictly prohibit consumers of this kind of material.
								<br><br>
								
								    (C) In order to further “Our” zero-tolerance policy “You” as a User, agree to report any images that appear
								<br><br>
								
								    to depict minors on “Our” Websites. If You see any other images that are suspect, “You” agree to
								<br><br>
								
								    report these findings by emailing us at abuse@cybersensual.com .
								<br><br>
								
								    (D) Customer must include any evidence discovered including the date and time. All reports will be
								<br><br>
								
								    investigated and action will be taken.
								<br><br>
								
								    (E) We actively cooperate with any law-enforcement agency investigating child pornography. If You
								<br><br>
								
								    suspect other outside websites are participating in unlawful activities involving minors, please report them
								<br><br>
								
								    toabuse@cybersensual.com .
								<br><br>
								
								    10. <strong><u>IMAGES AND CONTENT</u></strong>
								<br><br>
								
								    (A) “Our” Websites provide live and pre-recorded webcam content, as well as IMAGES, TEXT, GRAPHICS, DATA,
								<br><br>
								
								    messages, and other information (collectively, "Materials").
								<br><br>
								
								    (B) “You” acknowledge that all of the materials are suggestive content that is fully protected by the First
								<br><br>
								
								    Amendment to the United States Constitution.
								<br><br>
								
								    (C) “You” acknowledge that some of the materials may contain graphic/ visual depictions/ sexual activity
								<br><br>
								
								    nudity, graphic audio portions of the same kind of content, and descriptions of sexually
								<br><br>
								
								    explicit activities. “You” acknowledge and are mindful of the nature of the materials provided by “Our” Websites and
								<br><br>
								
								    that “You “are not offended by such materials, and to the contrary, that You are accessing these Websites specifically
								<br><br>
								
								    because “You “enjoy such graphic content and “You” wish to view such materials. You acknowledge that you access these
								<br><br>
								
								    Websites of your own free will, and for Your own personal satisfaction.
								<br><br>
								
								    (D) “You” agree not to use or access the Websites if doing so would violate the laws of Your State, Province, or Country.
								<br><br>
								
								    (E) In the event that any court finds that any third party communication or third party content on “Our” Websites falls
								<br><br>
								
								    outside of the realm of Section 230 of the Communications Decency Act ("CDA"), this shall not be deemed to be a
								<br><br>
								
								    waiver of any legal protections provided by CDA 230 for any and all other content posted on “Our” Websites.
								<br><br>
								
								    11. <strong><u>RULES AND REGULATIONS OF WEBSITE</u></strong><u></u>
								<br><br>
								
								    (A) “You” agree that this Website will only be used for purposes specifically permitted and consider by this
								<br><br>
								
								    Agreement. “You” may not use the Websites for any other purposes without “Our” sole previous written consent.
								<br><br>
								
								    (B) Without “Our” prior written authorization, “You” are unauthorized to the following:
								<br><br>
								
								    1. Copy any part of “Our” Websites or the materials contained within, except as where specifically provided
								<br><br>
								
								    elsewhere in this Agreement
								<br><br>
								
								    2. Rearrange or create any subordinate works based on the Websites or any of the materials contained
								<br><br>
								
								    within our Sites. “You” agree that any such use is <strong><u>PROHIBITED</u></strong><strong><u></u></strong>
								<br><br>
								
								    3. Use the Websites or any of the materials contained within for any public display, public performance, sale
								<br><br>
								
								    or rental, “You” also hereby agree that any and all such uses are <strong><u>PROHIBITED</u></strong><strong><u></u></strong>
								<br><br>
								
								    4. Remove any copyright © or other proprietary notices from the Websites Materials contained within.
								<br><br>
								
								    5. Circumvent any encryption or other security tools used anywhere on the Websites including the theft of
								<br><br>
								
								    user names /passwords or using another person's user name and password in order to gain access to a
								<br><br>
								
								    restricted area of the Websites.
								<br><br>
								
								    6. Use our materials in any kind of public performance or display “Our” materials to an audience outside of Your
								<br><br>
								
								    home.
								<br><br>
								
								    7. Use any technology to record any content broadcast on Our Websites.
								<br><br>
								
								    12. <strong><u>ACCEPTABLE USE POLICY </u></strong>You agree and accept that our Website permits “You” to use “Our” services in
								<br><br>
								
								    order to post content and communicate with other users. “You “ agree that “You” will not use “Our” services
								<br><br>
								
								    to post or distribute content that falls into the following categories:
								<br><br>
								
								    · Unlawful, harmful, threatening, abusive , harassing, of another’s privacy or right to publicity, or harm to minors in any
								<br><br>
								
								    Shape or form.
								<br><br>
								
								    · That might be considered to be impersonating another person or legal entity
								<br><br>
								
								    · Any posts with personally identifying information about another person without that person’s prior explicit consent.
								<br><br>
								
								    · That constitute SPAM or bulk posting of commercial advertisements for commercial interests
								<br><br>
								
								    · That infringes upon any trademark, copyright © or other intellectual property rights of any party requests.
								<br><br>
								
								    · “You” agree that “You” will not use “Our” services to stalk or otherwise harass any other person
								<br><br>
								
								    · “You” agree that “You” will not use “Our” services in order to collect any personal data about other users
								<br><br>
								
								    · “You” agree that “You” will not use “Our” services in order to conduct any illegal activities at all
								<br><br>
								
								    · “You” agree that “You” will not use “Our” services in order to conduct any illegal activities at all
								<br><br>
								
								    · “You” agree that ‘You” will not use “Our” services to collect any personal data about other users
								<br><br>
								
								    · “You” agree that “You “ will not use “Our” services in order to conduct any illegal activities at all
								<br><br>
								
								    · “You” agree that “You” will not use “Our” services in order to view, transmit , traffic or in any other way interact or provide
								<br><br>
								
								    · to any other person, or receive drugs or other illegal substances in any other way
								<br><br>
								
								    · Any violation of our Acceptable Use Policies as provided for in this Agreement shall subject “You “ to liquidated damages of $5,000.00 for each and every
								    violation. In “Our” own discretion, “We” may choose to provide “You” with a warning before assessing damages. Additionally , “We “ may in “Our” own
								    discretion , assign any such damage claim to a third party who has been wronged by “Your” conduct.
								<br><br>
								
								    · These liquidated damages are not a penalty, and they are an attempt by the parties to reasonably ascertain the amount of actual damage that could occur
								    from such violations. Both parties hereby agree that this is a minimum, and actual damages may be more.
								<br><br>
								
								    <strong><u></u></strong>
								<br><br>
								
								    <strong><u> </u></strong>
								<br><br>
								
								    13. <strong><u>DISCLAIMER AND INDEMNIFICATION</u></strong>
								<br><br>
								
								    <strong><u> </u></strong>
								<br><br>
								
								    (A) If “We” determine that “You” or any User has used “Our” services in violation of any law, Your ability to use the
								<br><br>
								
								    Websites may be terminated immediately and “We have every right to voluntarily cooperate with law
								<br><br>
								
								    enforcement or private parties that we may be legally compelled to do so. “We” hereby disclaim any
								<br><br>
								
								    liability from User providing any services for any purpose that violates any law. “You” hereby agreed to defend, indemnify and hold “Us” harmless from any
								    liability that may arise from “Us” should “You” VIOLATE ANY LAW.
								<br><br>
								
								    (B) “You” also agree to defend and indemnify “Us” should any third party be harmed by “Your” actions or should
								<br><br>
								
								    “We “ be obligated to defend any claims including , without limitation any criminal or civil action brought by any
								<br><br>
								
								    party.
								<br><br>
								
								    (C) “Our” Websites contain material that may be offensive to third parties . “You” agree to indemnify and hold “Us”
								<br><br>
								
								    harmless from any liability that may arise from someone viewing such material and “You” agree to cease review of the Websites should “You” find them
								    offensive.
								<br><br>
								
								    (D) “You” agree to defend and hold harmless Cybersensual, its officers, directors , shareholders , employees,
								<br><br>
								
								    independent contractors, telecommunication providers and agents , from and against any and all claims or
								<br><br>
								
								    or actions, loss , liabilities , expenses, costs or demands including without limitation legal and accounting fees,
								<br><br>
								
								    for all damages authority( including without limitation to governmental agencies) use, misuse , or incapacity to use the “Websites” or any of the materials
								    contained within, or your breach of any part of this agreement. “We” shall
								<br><br>
								
								    promptly notify “You” by electronic mail of any such claim or suit , and cooperate full at your expense in the
								<br><br>
								
								    defense of such claim or suit. “We reserve the right to participate in the defense of such claim or defense at “Our “ own expense , and choose “Our” own
								    legal counsel , however , “We are not obligated to do so.
								<br><br>
								
								    (E) “You” acknowledge and accept that all webcam video communications and transmissions conducted through a
								<br><br>
								
								    member account during premium services is recorded and archived for use in combatting fraud or for use as
								<br><br>
								
								    evidence in any civil or criminal proceeding in which may be relevant. “You” specifically waive and release “Us”
								<br><br>
								
								    from any claims arising out of such recordation, archiving and subsequent use as outlined above. While we are
								<br><br>
								
								    committed to protecting your privacy, “We reserve the right to cooperate in any claim or legal proceeding by
								<br><br>
								
								    releasing archived video footage of member webcam sessions consistent with the state, federal and
								<br><br>
								
								    international law.
								<br><br>
								
								    14. <strong><u>INTELLECTUAL PROPERTY INFORMATION</u></strong>
								<br><br>
								
								    <strong><u></u></strong>
								<br><br>
								
								    (A) Cybersensual and the aforementioned name of the Websites are “Our” service marks and/or
								<br><br>
								
								    Exclusive Trademarks.
								<br><br>
								
								    (B) Other companies products and service names referenced within may be trademarks and service marks of their
								<br><br>
								
								    Respective companies are the exclusive property of such respective owners and may not be used publicly
								<br><br>
								
								    Without the express written consent of the owners and holders of such trademarks and service marks.
								<br><br>
								
								    (C) <strong>COPYWRIGHT ©</strong> –These websites belong to “Us” and we either own or have rights to display all of the materials
								<br><br>
								
								    Within. “You” may not use any of “Our” materials without “Our” express written consent.
								<br><br>
								
								    15<strong><u>. LIMITATION OF LIABLILITY</u></strong>
								<br><br>
								
								    <strong><u> </u></strong>
								<br><br>
								
								    (A) In no event shall “We” (or “our” licensors, agents, suppliers, resellers, service providers, or any other
								<br><br>
								
								    Subscribers) be liable to “You” or any other third party for any direct, special , incidental, consequential
								<br><br>
								
								    Or punitive damages, including without limitation, damages for loss of profits, loss of information or business interruption, revenue or goodwill. Which
								    may arise from any person’s use, misuse, or inability to use the Websites
								<br><br>
								
								    or any of the materials contained within. In the event “We” have been advised of the probability of such damages. This is for any matter arising out of or
								    relating to this agreement, whether such liability is asserted on the basis of contract, or otherwise, even if “We have been have been advised of the
								    probability of such damages.
								<br><br>
								
								    This is for any matter arising out of or relating to this agreement whether such liability is asserted on the basis of contract or otherwise. Even if we
								    have been advised of the possibility of such damages
								<br><br>
								
								    (B) In no event shall “Our” maximum total aggregate liability hereunder for direct damages exceed the total fees
								<br><br>
								
								    “You” for use of a website for a period of no more that 1 month form the accrual of the applicable cause of action. Some jurisdictions prohibit the
								    exclusion of liability for consequential or incidental damages. The above
								<br><br>
								
								    limitations may not apply to “You.”
								<br><br>
								
								    16. <strong><u>DEFEMATION OR INVASIVE MATERIAL POLICY</u></strong>
								<br><br>
								
								    (A) We provide an interactive computer service and thus we have liability for user posted content
								<br><br>
								
								    Due to Section 230 of the CDA . Nevertheless , we recognize that despite this protection, there may
								<br><br>
								
								    occassionaly be content posted “our” that is unappreciated by the subject of the user posted content. It is not “our intention to cause anguish to any
								    person nor harm to any entity , nor to allow through inaction such
								<br><br>
								
								    harm to occur. Accordingly, it is “Our” policy to respond respectfully to any complaints about “User” posted
								<br><br>
								
								    or provided by us. “We” agree to take reasonable measures and precautions.
								<br><br>
								
								    (B) If you feel damaged by any of the content posted by a “User,” or “Us,” “We agree
								<br><br>
								
								    to take reasonable measures at “Our” discretion to respond to “Your” requests.
								<br><br>
								
								    (C) “You” can agree that if “You” have any complaint about any content on “Our” websites, including
								<br><br>
								
								    (but not limited to ) a complaint or claim of defamation (slander) invasion of privacy, trademark
								<br><br>
								
								    infringement, right of publicity claims, or anything related. “You” will provide notice to “Us” by email
								<br><br>
								
								    at following email: <a href="mailto:abuse@cybersensual.com">abuse@cybersensual.com</a>
								<br><br>
								
								    (D) “You” agree that “We” shall have 10 business days after RECEIPT of said notice to evaluate “Your”
								<br><br>
								
								    concerns.
								<br><br>
								
								    (E) After we have evaluated all of your concerns, “We” will either inform you that we reject your concern and
								<br><br>
								
								    Deem it to be invalid, or “We” will request “Your” preference regarding an opportunity to cure “Your”
								<br><br>
								
								    Concerns. This cure may include one of the following.
								<br><br>
								
								    1/ We may offer to delete the offensive material
								<br><br>
								
								    2/ We may offer to modify the offensive material
								<br><br>
								
								    3/ We may offer “You” the opportunity to publish a rebuttal to the offending material.
								<br><br>
								
								    4/ We will engage “You” and seek any other alternative resolution that will mitigate Your damaged
								<br><br>
								
								    legal interests even if we are not legally required to do so.
								<br><br>
								
								    5/ We may provide “You” with some or all identifying information that “We” have about the actual
								<br><br>
								
								    suspect ( if the content was posted by another user. However, we are under no obligation to do so, and
								<br><br>
								
								    we expressively reserve the right not to
								<br><br>
								
								    (F) “You” acknowledge and agree that upon transmission of “Your” complaint to us. “You” will be considered
								<br><br>
								
								    To have in engaged in settlement discussions with “Us” and neither party will initiate formal legal action
								<br><br>
								
								    While non adversarial resolution is in progress. “You” agree that “you” will not file suit unless “We”
								<br><br>
								
								    Issue a statement to “You” tat “We” have taken our final action, and that no further action will be taken
								<br><br>
								
								    Without adverse proceedings. At that point, “You” may proceed with arbitration as provided for under
								<br><br>
								
								    This agreement.
								<br><br>
								
								    (G) “You” understand that no part of this agreement obligates “Us” to go beyond that required by law, and this
								<br><br>
								
								    agreement is in place for “Your “ convenience. If “We “ believe that your requests are unreasonable , “We”
								<br><br>
								
								    reserve the right to terminate all discussions with or file suit against “You” to recover any legal fees
								<br><br>
								
								    incurred due to harassing or unreasonable requests.
								<br><br>
								
								    17. <strong><u>GENERAL PROVISION</u></strong>
								<br><br>
								
								    <strong> </strong>
								<br><br>
								
								    <strong>(A) </strong>
								    The parties agree to exclusive jurisdiction in and only in <strong>British Columbia, in the city of Vancouver, British Columbia, Canada.</strong>
								<br><br>
								
								    <strong>(B) </strong>
								    The parties agree to exclusive venue in and only in <strong>British Columbia , in the city of Vancouver, British Columbia, Canada.</strong>
								<br><br>
								
								    <strong>(C) </strong>
								    The parties additionally agree that this choice of venue and forum is mandatory and not permissive<strong></strong>
								<br><br>
								
								    In nature, thereby precluding any possibility of litigation between the parties with respect to, or arising
								<br><br>
								
								    Out of this agreement in a jurisdiction other than that specified in this paragraph.
								<br><br>
								
								    <strong>(D) </strong>
								    All parties herby waive any right to assert the doctrine or similar doctrines, or to object to venue with
								<br><br>
								
								    Respect to any dispute under this agreement whatsoever
								<br><br>
								
								    <strong>(E) </strong>
								    All parties stipulate that the state and federal courts located in <strong>British Columbia, in the city of Vancouver. British Columbia, Canada </strong>
								    shall have personal jurisdiction over the for the purpose of litigating any dispute, controversy or proceeding arising out of ( or related to) this
								    agreement and/or the relationship between the parties contemplated thereby. <strong></strong>
								<br><br>
								
								    <strong>(F) </strong>
								    Each party hereby authorizes and accepts service of process sufficient for personal jurisdiction in any
								<br><br>
								
								    Action against it, as contemplated by this paragraph by registered or certified mail, Federal Express,
								<br><br>
								
								    Proof of delivery or return receipt request, to the parties address for the giving of notices as set forth
								<br><br>
								
								    In this Agreement.
								<br><br>
								
								    <strong>(G) </strong>
								    Any final judgment rendered against a party in any action or proceeding shall be conclusive as to the
								<br><br>
								
								    Subject of such final judgment and may be enforced in other jurisdictions in any manner provided by
								<br><br>
								
								    Law if such enforcement becomes necessary.
								<br><br>
								
								    17. <u>BINDING ARBITRATION </u> If there is a dispute between the parties arising out of or otherwise
								<br><br>
								
								    relating to this Agreement, the parties shall meet and negotiate in good faith to attempt to resolve the
								<br><br>
								
								    dispute. If the parties are unable to resolve the dispute through direct negotiations, then, except as
								<br><br>
								
								    otherwise provided within. Either party may submit the issue to binding arbitration in accordance with
								<br><br>
								
								    existing <strong>COMMERCIAL ARBITRATION RULES .</strong>
								<br><br>
								
								    Arbitral claims may include, but are not limited to contract and tort claims of any kind. All claims based
								<br><br>
								
								    On any federal , state, international law, or regulation, excepting only claims under applicable workers
								<br><br>
								
								    Compensation law, unemployment insurance claims, actions for injunctions, attachment, garnishment,
								<br><br>
								
								    And others equitable relief. The arbitration shall be conducted in <strong>BRITISH COLUMBIA, in the city of Vancouver British Columbia , Canada. </strong>
								    CONDUCTED by a single arbitrator, knowledgeable in Internet and e- commerce disputes.
								<br><br>
								
								    The Arbitrator should have no authority to reward no punitive or exemplary damages certified a class
								<br><br>
								
								    action, add any parties, vary or ignore the provisions of this Agreement, and shall be bound by applicable Law. The arbitrator shall have no authority to
								    award punitive or exemplary, certify a class action , add any parties vary or ignore the provisions of this Agreement and shall be bound by governing and
								    applicable Law. The arbitrator shall render a written opinion setting forth all material facts and the basis or his or
								<br><br>
								
								    her decision within 30 days of the conclusion of the arbitration proceeding.
								<br><br>
								
								    <strong>THE PARTIES HEREBY WAVE ANY RIGHTS THEY MAY HAVE TO TRIAL BY JURY </strong>
								<br><br>
								
								    <strong>IN REGARD TO ARBITRAL CLAIMS. </strong>
								<br><br>
								
								    <strong> </strong>
								<br><br>
								
								    <strong> 18. </strong>
								    The Arbitrator shall have no authority to effect any punitive or exemplary damages, certify a class action,
								<br><br>
								
								    add any parties, vary or ignore provisions of this Agreement and shall be bound by governing the
								<br><br>
								
								    applicable law. The arbitrator shall render a written opinion setting forth all material , facts, and the
								<br><br>
								
								    basis of his/ her decision within 30 days of the conclusion of the arbitration proceeding.
								<br><br>
								
								    <strong>PARTIES HEREBY WAIVE ANY RIGHTS THEY MAY HAVE TO TRIAL BY JURY IN REGARD</strong>
								<br><br>
								
								    <strong>TO ARBITAL CLAIMS</strong>
								    .
								<br><br>
								
								    <strong></strong>
								<br><br>
								
								    19. No Waiver of Right to Arbitration. There shall be no waiver of the right to arbitration unless such waiver
								<br><br>
								
								    is provided affirmatively and in writing by the waiving party to the other party. There shall be no
								<br><br>
								
								    implied waiver of this right to arbitration. No acts including the filing of litigation shall be construed,
								<br><br>
								
								    as a waiver repudiation of the right to arbitrate.
								<br><br>
								
								    20. The <strong>FIRST AMMENDMENT</strong> applies to Arbitration proceedings. Any arbitration tribunal shall consider
								<br><br>
								
								    the <strong>FIRST AMMENDMENT</strong> to the United States Constitution to be in force and effect between the
								<br><br>
								
								    parties stipulate to the applicability of the <strong>FIRST AMMENDENT’S </strong>protection of free speech, expression
								<br><br>
								
								    and both parties stipulate the case law interpreting the <strong>FIRST AMMENDMENT </strong>shall be admissible
								<br><br>
								
								    and considered to be binding authority upon the Arbitrator.
								<br><br>
								
								    21. Assignment: The rights and liabilities of the parties from here on in will bind and inure to the benefit
								<br><br>
								
								    of their respective assignees, successors , executors, and administrators as the case may be.
								<br><br>
								
								    22. Severability: If for any reason a core of competent jurisdiction or and arbitrator finds any provision of this
								<br><br>
								
								    Agreement on or any , or any portion thereof, to be unenforceable. That provision will be enforced to
								<br><br>
								
								    The maximum extent permissible and the remainder of this Agreement will continue in full force and
								<br><br>
								
								    Effect.
								<br><br>
								
								    23. Attorneys’ Fees: In the event any party shall commerce any claims, actions, formal legal action, or
								<br><br>
								
								    arbitration to interpret or enforce any of the terms and conditions of this Agreement. Relating in any
								<br><br>
								
								    to this Agreement, including without limitation asserted breaches of representation and warrantees,
								<br><br>
								
								    the prevailing party in any such action or proceeding shall be entitled to recover. In addition to available
								<br><br>
								
								    relief it’s reasonable attorney fees and costs incurred in connection including all attorney fees
								<br><br>
								
								    on appeal.
								<br><br>
								
								    24. No Waiver: No waiver or action maid by “Us” shall be deemed a waiver of any subsequent default
								<br><br>
								
								    of the same provision of this Agreement. If any term , clause or provision is held invalid or
								<br><br>
								
								    unenforceable by a court of competent jurisdiction. Such invalidity shall not affect the validity or
								<br><br>
								
								    operation of any other term, clause or provision and such invalid term , clause or provision shall be
								<br><br>
								
								    deemed to be severed from this Agreement.
								<br><br>
								
								    25. Headings: All heading are solely for the convenience of reference and shall not affect the meaning,
								<br><br>
								
								    construction or effect of this Agreement.
								<br><br>
								
								    26. Complete Agreement: This Agreement constitutes the entire agreement between the parties with
								<br><br>
								
								    respect to “Your” access and use of the Websites and the materials contained therein “Your”
								<br><br>
								
								    membership with the Websites supersedes and replaces all prior understandings or agreements, written
								<br><br>
								
								    or oral regarding such subject matter.
								<br><br>
								
								    27. Other Jurisdictions: “We” make no representation that Websites or any of the materials contained therein
								<br><br>
								
								    are appropriate or available for use in other locations, and access them from territories where their
								<br><br>
								
								    content may be illegal or is otherwise prohibited. Those who choose to access the Websites from such
								<br><br>
								
								    locations do so on their own initiative and are solely responsible for determining compliance with all
								<br><br>
								
								    applicable laws.
								<br><br>
								
								    <strong> 28. </strong>
								    <strong>GOVERNING LAW/ INDEMNITY CLAUSE:</strong>
								<br><br>
								
								    <strong><u></u></strong>
								<br><br>
								
								    <strong> </strong>
								    All parties to this agreement agree that all actions or proceedings arising in connection with this
								<br><br>
								
								    agreement or any services or business interactions between the parties that may be subject to this
								<br><br>
								
								    agreement shall be tried or litigated exclusively in provincial and federal courts located in
								<br><br>
								
								    <strong> British Columbia, in the city of Vancouver, British Columbia, Canada. </strong>
								    This agreement
								<br><br>
								
								    and all matters arising out of or relating to it shall be governed by the laws of <strong> British Columbia</strong>
								<br><br>
								
								    <strong> and any legal action must be commenced in the city of Vancouver, British Columbia, Canada.</strong>
								<br><br>
								
								    In summary all disputes and eventualities “You” have with respect to the contents contained within
								<br><br>
								
								    these Terms and Conditions stated on “Our,”website must be, without exception, brought to court and
								<br><br>
								
								    litigated in<strong> British Columbia, in the city of Vancouver , British Columbia, Canada.</strong>
								<br><br>
						  	</div>
						  </div>
						  <div class="content" id="panel2">
						  	<div class="large-3 columns">
						  		&nbsp;
						  	</div>
						  	<div class="large-9 coluns right">
								
								    <strong><u>PROLOGUE:</u></strong>
								<br><br>
								
								When you sign up for or otherwise use any service within Inevitable Media, LLC’s cybersensual.com website (collectively, the “<strong>Site</strong>,” “    <strong>we</strong>,” “<strong>our</strong>,” “<strong>us</strong>,” or other appropriate first-person terms), all of which services are hereinafter
								    referred to collectively as the “<strong>Service</strong>,” you agree to all of the terms and conditions of this Agreement. Please read the following terms
								and conditions carefully, as they form the agreement between you, the website user (sometimes referred to herein as “<strong>User</strong>,” “<strong>you</strong>,” “<strong>your</strong>,” or other appropriate second-person terms), and the Site (such agreement is referred to wherefore as the “    <strong>Agreement</strong>”). IF YOUR NOT IN ACCORDANCE WITH TERMS AND CONDITIONS, YOU MAY NOT USE THE SERVICE, AND SHOULD NOT PROCEED TO REGISTER OR
								    OTHERWISE USE THE SERVICE. BY USING THE SERVICE, YOU ARE EXTRACTING YOUR WILLINGNESS TO BE BOUND BY THIS AGREEMENT, INCLUDING ALL AMENDMENTS MAY VARY
								    OCCASSIONALY.
								<br><br>
								
								    <strong><u>1/ AGREEMENT:</u></strong>
								<br><br>
								
								    <u>(A) Right to Use</u>
								    . “Your” right to use the service is subject to any conditions and limitations established by “us” , in our sole discretion. “We” may discontinue any part
								    of the service or the Website at any time, including the availability of any service feature, database or content. “We” may also impose limits on certain
								    features and aspects of the service and/or restrict your access to parts and/or all of the service without notice or liability.
								<br><br>
								
								    (B) <strong>OUR WEBSITES ARE FOR ADULTS ONLY</strong> “You” represent that you <strong>are at least 18 years of age</strong> or the age of majority in your
								    jurisdiction, whichever is older (the “<strong>Age of Majority</strong>”). The Website and service are intended for <strong>adults only</strong>. By using
								    the Website and service you agree that you have reached the <strong>Age of Majority</strong>. We reserve the right to terminate your account if we, in our
								    sole and absolute discretion, believe you are in violation of this section. “We” additionally reserve the right to close your account and report you to the
								    proper authorities . If we suspect that “You” who is not the <strong>Age of Majority</strong> has used your account.
								<br><br>
								
								    <u>(C) </u>
								    <strong><u>WE HAVE A ZERO TOLERANCE POLICY FOR CHILD PORNOGRAPHY AND A ZERO TOLERANCE POLICY REGARDING PEDOPHILES, SIMILAR RELATED ACTIVITY</u></strong>
								    <u>.</u>
								<br><br>
								
								    (D)All images of all persons on the Website are provided under an obligation of the producer therefore to upload or stream videos or images portraying
								    persons over the <strong>age of eighteen (18</strong>) as of the date of the production of the images. We ensure that <strong>no underage</strong> MODELS
								    appear in any video or image our Websites.
								<br><br>
								
								    (E)If you seek any form of child pornography (such as “virtual” child pornography), “You” must exit the Website immediately. “We” do not provide this kind
								    of material and “we” do not permit those who provide this kind of material, nor do we tolerate consumers of this kind of material.
								<br><br>
								
								    (F) Abiding by our zero-tolerance policy, “you” agree to report any images which “you” have reason to believe portray minors on the Website by clicking the
								    “Support” link at the bottom of each page on our Websites. Please include with “your “report any appropriate evidence, including the date and time of
								    identification. All reports will be investigated swiftly and action will be taken based upon our reasonable ability to verify the evidence provided.
								<br><br>
								
								    (G)We cooperate with any law-enforcement agency investigating child pornography. If “you” suspect other outside websites are participating in unlawful
								    activities involving minors, please report them to <strong>asacp.org.</strong>
								<br><br>
								
								    <strong><u>2/ Code of Conduct</u></strong>
								    .
								<br><br>
								
								    You agree to use the Service in compliance with the following Code of Conduct:
								<br><br>
								
								    (A) “You” are responsible for any information that “you” post through the Websites and service. “You” agree to keep all information provided through the
								    Website and service as confidential, and agree not give this information to anyone without the permission of the person who provided it to “you;”
								<br><br>
								
								    (B) “You” are aware that the service contains vivid adult materials provided only by and to consenting users who are at least the Age of Majority;
								<br><br>
								
								    (C) “You” will not use the service to engage in any form of offensive behavior, not limited to the posting or sharing of any message, image or recording,
								    which contains may be abusive or harrassing statements Please coincide with your local laws and community standards;
								<br><br>
								
								    (D) Performers are allowed to freely interact with other performers on the Website, but also have the choice to block other performers from communicating
								    with the It is completely up to the performer to choose who they talk to on the Website. Performers may ignore anyone and may ban anyone from communicating
								    with them.
								<br><br>
								
								    (E) You will not post any message, image or recorded use of the service in any way which:
								<br><br>
								
								    1/violates, plagiarizes or infringes upon the rights of any third party, but not limited to, any copyright © or trademark law, privacy or other personal or
								    proprietary rights, or
								<br><br>
								
								    2/is fraudulent or otherwise constitutes unlawful conduct in connection with your use of the service or violates any law.
								<br><br>
								
								    (F) You will not use the service to distribute, promote or otherwise publish any material containing any solicitation for funds, advertising nor solicit
								    for goods or services;
								<br><br>
								
								    (G) Your access to the Service is for your own personal use. You may not allow others to use the Service and you may not transfer accounts to other users;
								<br><br>
								
								    (H) You will not use the Service to infringe on any privacy right, property right, or other civil right of any person; and
								<br><br>
								
								    (I) You will not forward any chain letters, advertisements, spam, or any such commercial message through the Service.
								<br><br>
								
								    <u>3/ </u>
								    <strong><u>Illegal and Prohibited Conduct</u></strong>
								    . In addition to the foregoing “Code of Conduct,” performers appearing on the Site are prohibited from doing any of the following:
								<br><br>
								
								    (A)There can be no minors, children, babies or unauthorized persons on camera or in the same room.
								<br><br>
								
								    (B)Bestiality, or animals/pets on camera in a sexual or provocative context, or illegal drugs (or drugs that may be perceived as illegal in other
								    locations, e.g. medicinal marijuana), are strictly prohibited.
								<br><br>
								
								    (C)Sleeping on camera (whether real or acting/pretending) is not permitted.
								<br><br>
								
								    (D)Overly large sex toys or animal-shaped sex toys may not be used on camera, and objects may not be used as sex toys unless they are typically marketed
								    and sold for that purpose. Please email <a href="mailto:support@cybersensual.com">support@cybersensual.com</a> for authorization to incorporate any type of
								    mechanical device, tool, “sex machine” or other unusual equipment into your performance (whether controlled by you or remotely by users of the Site),
								    providing a detailed proposal. We may require you to sign a waiver and release of liability in order to use certain devices on the Site. Any authorization
								    or permission we give to you may be revoked by us at any time and for any reason, without notice, in our sole and absolute discretion.
								<br><br>
								
								    (E)Consumption of alcohol is not allowed.
								<br><br>
								
								    (F)Performing while intoxicated, whether from drugs or alcohol, is strictly prohibited.
								<br><br>
								
								    (G)Incest (sexual relations involving family members) is not allowed.
								<br><br>
								
								    (H)Excessively degrading dialog or verbal abuse is not allowed.
								<br><br>
								
								    (I)Display of or reference to menstruation is not permitted.
								<br><br>
								
								    (J)“Bukakke” scenes are not allowed.
								<br><br>
								
								    (K)“Goatse” displays are prohibited.
								<br><br>
								
								    (L)Illegal or unsafe activity of any kind, violence, blood, torture, pain, erotic asphyxiation, fisting, rape themes, or any actions associated with
								    bringing harm to you, in any way, is prohibited.
								<br><br>
								
								    (M)Performers may not broadcast from a public place or from a studio or set that creates the impression that the performer is in a public place.
								<br><br>
								
								    (N)Performers are prohibited from broadcasting outdoors unless the broadcast is done from private property, with the property owner’s consent, and in an
								    area that is not visible from any neighboring property.
								<br><br>
								
								    (O)A performer may not discuss or arrange prostitution or escort services.
								<br><br>
								
								    (P)Any action that may be deemed obscene in your community is prohibited.
								<br><br>
								
								    (Q)Performers may exchange information with members of the Site, including contact information, but performers MAY NOT use members’ information to provide
								    webcam shows or receive payments outside of the Site. If a performer sells something to a member, e.g., underwear, or performs any other miscellaneous
								    transaction, the sale must be completed in exchange for Virtual Money (defined below).
								<br><br>
								
								    (R)Performers are not allowed to advertise commercial websites that offer live webcam streams, under any circumstances, but performers MAY mention their
								    own personal profiles, homepages and wish lists.
								<br><br>
								
								    (S)Performers are not allowed to ask for members’ account information or to log in using accounts that do not belong to them.
								<br><br>
								
								    (T)Performers are prohibited from making any statements, written or verbal, or cause or encourage others to make any statements, written or verbal, that
								    defame, disparage, or in any way criticize the Site or Service.
								<br><br>
								
								    <strong>
								        The foregoing list is non-exclusive, and “we” may, at any time, prohibit any activity that “we” determine, in our absolute discretion, to be
								        unnaceptable. “We” reserve the right to terminate or suspend “your “ access to all or part of the service at any time, with or without notice, for
								        engaging in any unacceptable activity.
								    </strong>
								<br><br>
								
								    <u>4 </u>
								    <strong><u>/ Privacy and Use of Information</u></strong>
								    <strong>. Except as more fully set forth in our </strong>
								    <a href="http://chaturbate.com/privacy/"><strong>Privacy Policy</strong></a>
								    <strong>, your personal information will not be disclosed to any third party</strong>
								    .
								<br><br>
								
								    <u>5/ </u>
								    <strong><u>Content Posted on the Site</u></strong>
								    .
								<br><br>
								
								    (a)By agreeing to the Terms and Conditions of this Agreement, “you” represent and warrant that all depictions “you” upload to the Website do not in any way
								    impose on any third party’s intellectual property rights. The Website hereby asserts immunity with respect to all content provided by members or other
								    third parties, as provided by law, not limited to, under the <strong>Communications Decency Act</strong>. Members and others are prohibited from uploading,
								    sharing or describing to anyone on or through the Website/Service. Any matters, or depictions which, in “our” sole opinion, might be illegal or offensive,
								    including, but not limited to, any content involving bestiality, urination, other bodily excretions, defamatory material or otherwise obscene material or
								    any conduct that violates the prohibitions set forth under the <strong>“Code of Conduct,”</strong> above, or any other provision of this Agreement. “You”
								    may not use the service or the Website to solicit any information that might be used for unlawful purposes or encourages unlawful activities.
								<br><br>
								
								    (J) “We” do not claim any ownership rights in the text, files, images, photos, video, sounds, musical works, works of authorship, applications, or any
								    other materials (collectively, the “Materials”) that you transmit, submit, display or publish (“post”) on, through or in connection with the service. After
								    posting the materials on, through or in connection with the service, you continue to retain any such rights that you may have in them, subject to the
								    license herein. By posting the materials on, through or in connection with the service, you hereby grant our Websites a non-exclusive, fully-paid and
								    royalty-free, sub-licensable, and worldwide license to use, modify, delete from, add to, publicly perform, publicly display, reproduce, and distribute the
								    material, including, without limitation, distributing part or all of the materials, in any media formats and through any media channels. In addition to the
								foregoing license, you hereby authorize us to send takedown demands, pursuant to the    <strong>United States’ Digital Millennium Copyright Act (the “DMCA”),</strong> to any service provider hosting reproductions of the materials that have
								    been taken from the Site (e.g., a video clip bearing our watermark).
								<br><br>
								
								    (K) You may not use the Website or service for commercial purposes, including, but not limited to, marketing, advertising of goods or services, any
								    investment opportunities, contests, or similar activities. Additionally, the Website reserves the right, in the Site’s sole discretion, to immediately
								    suspend your account, file for injunctive relief, file for civil and/or report any conduct that violates these terms and conditions to all law enforcement
								    that have jurisdiction over the matter. In the event any actions are brought against the Website as a result of content you have shared in, or as a result
								    of you engaging in any prohibited activities, you agree to indemnify and hold the Website harmless with respect to all costs and expenses including
								    attorneys’ fees that the Website may incur as a consequence of your posting of such content or engaging in such prohibited activities.
								<br><br>
								
								    <u>6/ </u>
								    <u>Members’ Obligations Under 18 U.S.C. § 2257</u>
								    . You should be aware that, pursuant to federal law, any visual depictions that you post, share or perform on the Website which portray actual sexually
								explicit conduct, depictions of the genitals or pubic area, or simulated sexually explicit activity, as such terms are defined in    <strong>18 U.S.C. 2256(2)(A)-(D) and 2257A</strong>, require that you maintain the records required by <strong>18 U.S.C. 2257</strong>, and any such
								postings must contain an “18 <strong>U.S.C. 2257</strong> Record-Keeping Requirements Compliance Statement.” Your failure to comply with the provisions of    <strong>18 U.S.C. 2257</strong> may make you subject to criminal and civil prosecution for the violation of federal law.
								<br><br>
								
								    <u>7/ </u>
								    <strong><u>Use of Information on Service.</u></strong>
								    You acknowledge and agree that:
								<br><br>
								
								    (A) “We” can’t ensure the security or privacy of information you provide through the Internet, or otherwise; “you” release us from any and all liability in
								    connection with the breach of the security of such information and/or messages and with respect to the use of such information by other parties;
								<br><br>
								
								    (B)”We” are not responsible for, and cannot control, the use of any information, by anyone, which you provide to any other parties or the Service and you
								    should use caution in selecting the personal information you provide to others through the service;
								<br><br>
								
								    (C)”We” can’t assume any responsibility for the content of any message sent by any user on the service, and you release us from any and all liability in
								    connection with the content of any communication you may receive from other users;
								<br><br>
								
								    (D)”You” accept that you can’t bring legal action against our Websites or any of its employees, officers or agents for any damages of any kind, under any
								    theory, as a consequence of using the service;
								<br><br>
								
								    (E)Any and all depictions uploaded to the service and/or Websites become licensed property of the Websites and may be used by the Website, without any
								    restriction, as marketing materials. By accepting this Agreement and its Terms and Conditions you specifically authorize us to use any images you upload to
								    the Website/Service for marketing the Site and Service in our sole discretion.
								<br><br>
								
								    (F)You may not use the Service for any unlawful purpose. We may refuse to grant you or discontinue your use of a user name, for whatever reason, including,
								    but not limited to, that the user name you have chosen impersonates someone else, is protected by trademark or proprietary law, or is vulgar or otherwise
								    offensive, as determined by us in our sole discretion.
								<br><br>
								
								    <u>8<strong>/ </strong></u>
								    <strong><u>On- and Off-site Interactions/Meeting</u></strong>
								    <u>s</u>
								    . Our Websites do not recommend or allow any form of user interaction outside of the Website and, as disclosed elsewhere in this agreement. “Your” use of
								    and interactions through the Website are at your own risk. Use of the Website to arrange face-to-face meetings for the purpose of engaging in illegal
								    activity is strictly prohibited and will subject your account to immediate termination. If do you elect to legally interact with any member of the service
								    outside of the Website, you do so at your own risk, and you acknowledge and agree that we are not responsible for any consequences of such election to
								    interact, whether in person or otherwise, outside of the Website.
								<br><br>
								
								    <strong>You should, at a minimum, consider the following precaution if meeting or corresponding with anyone on any social networking website:</strong>
								<br><br>
								
								    (A)Anyone who is able to commit identity theft can also falsify a member
								<br><br>
								
								    profile.
								<br><br>
								
								    There is no substitute for acting with caution when communicating with any stranger who wants to meet you.
								<br><br>
								
								    (B) Never include your last name, email address, home address, phone number, place of work, or any other identifying information in your member profile or
								    initial email messages. Stop communicating with anyone who pressures you for personal or financial information or attempts in any way to trick you into
								    revealing it.
								<br><br>
								
								    (C) If you choose to have a face-to-face meeting with another member, always tell someone in your family or a friend where you are going and when you will
								    return. Never agree to be picked up at your home. Always provide your own transportation to and from the meeting, which should be in a public place with
								    many people around.
								<br><br>
								
								    (D) All moneys and gifts sent by you to any other user directly or indirectly whether through the Site or off of the Site is at your own risk. We will not
								    intervene or become involved in any dispute between any users.
								<br><br>
								
								    <u>9/ </u>
								    <u>Your Representations and Warranties</u>
								    .
								<br><br>
								
								    By using the service, you thereby favorably acknowledge, express , and warrant the truth and accuracy of each of the following statements:
								<br><br>
								
								    (A)”You” are not prohibited by law from using the service and that you have the right, authority and capacity to enter into this Agreement and to abide by
								    all of its Terms and Conditions as posted here and as amended from time to time.
								<br><br>
								
								    (B)”You “are familiar with the laws in your area that may affect your legal right to access erotica or adult-oriented material, and you have the legal
								    right to access such material and the Website has the legal right to transmit such material to you in your location;
								<br><br>
								
								    (C)”You” understand that, through use of the Service, you will be exposed to visual images, verbal descriptions audio sounds and other features and/or
								    products of a sexually oriented, frankly erotic nature, which may include graphic visual depictions and descriptions of nudity and sexual activity, and you
								    are voluntarily choosing to do so, because you want to view, read and/or hear the various materials and/or order and enjoy the use of such products or
								    features, which are available, for your own personal enjoyment, information and/or education;
								<br><br>
								
								    (D) ”Your “choice to use the service is a demonstration of your interest in sexual matters which, you believe, are both healthy and normal and which, in
								    your experience, is generally shared by average adults in your community.
								<br><br>
								
								    (E) ”You “are familiar with the standards in your community regarding the acceptance of such sexually oriented materials, and the materials you expect to
								    encounter through use of the Service are within those standards;
								<br><br>
								
								    (F) In “your” judgment, the average adult in your community accepts the consumption of such materials by willing adults, in circumstances such as those
								    under which the Service is provided, offering reasonable insulation from the materials for minors and unwilling adults, and will not find such materials to
								    appeal to a prurient interest or to be patently offensive.
								<br><br>
								
								    (G) It is your desire to share and/or to invite others to share your own private and personal behaviors and to comment, rate, criticize, organize and
								    recommend based on what you are exposed to, by utilizing the Services, while inviting others to do the same.
								<br><br>
								
								    (H) You have not notified any governmental agency, including the U.S. Postal Service, that you do not wish to receive sexually oriented material.
								<br><br>
								
								    (I) The Website provides access to an online service comprising information and materials created and posted, uploaded, or streamed by you and other users
								    (each a “<strong>Contributor</strong>”).
								<br><br>
								
								    (J) Video and images on the Site that are available for viewing (collectively, the “<strong>Content</strong>”) are stored on or streamed through our
								    servers at the direction of our users.
								<br><br>
								
								    (K) Any modification of the Content that is uploaded or streamed by our users, such as the addition of a watermark, is performed by an automated process.
								    Accordingly, as the Contributor is aware that such modifications shall take place automatically upon transmission, the Contributor shall be deemed the
								    party responsible for such automatic modification and shall be considered the “author” of such automatically modified Content. The Site is not responsible
								    for modifications that occur to Content as part of its automatic transmission process.
								<br><br>
								
								    (L) Any review of uploaded or streamed Content that may be performed by the Site before or after making such Content available to the public is cursory and
								    only intended to identify immediately obvious violations of this Agreement. Accordingly, and despite any such gate keeping, the Contributor uploading or
								    streaming any Content shall be deemed the party at whose direction that Content is available to others through use of the Service.
								<br><br>
								
								    (M) The Website has never directed, and never will direct, its users to upload or stream Content that infringes upon any right belonging to a third party.
								    Uploading or streaming Content that infringes on third-party rights constitutes a direct and material violation of this Agreement and will subject the
								    uploading or streaming Contributor’s account to suspension and/or termination, where appropriate.
								<br><br>
								
								    (N) The Website correctly presumes that the Contributor uploading or streaming any Content is the sole holder of all exclusive rights to that Content,
								    except where the Content alone bears some obvious indication to the contrary, such as a visible proprietary marking identifying a person or entity other
								    than the Contributor as the exclusive rights holder.
								<br><br>
								
								    (O) Where Content has no obvious proprietary marking that indicates an exclusive owner, the Site cannot be deemed to have actual knowledge that such
								    Content infringes upon any third party’s rights.
								<br><br>
								
								    (P) The Website has no right or ability to control the activities of Contributors who create, post, upload, or stream Content through the Site. In the
								    event that a Contributor infringes upon a third party’s rights by creating, posting, uploading, or streaming Content, that Contributor is the sole
								    responsible party for such infringement, and the Site has no control over such activity.
								<br><br>
								
								    (Q) Apart from identifying an obvious proprietary marking in any Content that indicates an exclusive owner, the Site has no other ability to determine
								    whether the rights appurtenant to a particular piece of Content may belong to a party other than the uploading or streaming Contributor. As the Website’s
								    only other means of identifying Content that may infringe upon a third party’s rights, the Website relies entirely on properly presented notifications from
								    third parties claiming that their rights have been violated.
								<br><br>
								
								    <u>9/ </u>
								    <strong><u>Notice of Intellectual Property Infringement</u></strong>
								    .
								    <strong>
								        The Website respects the intellectual property of others, and we ask our members and others to do the same. We voluntarily observe and comply with the
								        DMCA. If you believe that your work has been copied in a way that constitutes copyright infringement, or your intellectual property rights have been
								        otherwise violated, please provide the Service’s Designated Copyright Agent with the following information:
								    </strong>
								<br><br>
								
								    (A) an electronic or physical signature of the person authorized to act on behalf of the owner of the copyright or other intellectual property interest;
								<br><br>
								
								    (B) description of the copyrighted work or other intellectual property that “you” claim has been infringed;
								<br><br>
								
								    (C) A description of where the material that “you” claim is infringing on our Website;
								<br><br>
								
								    (D) your address, telephone number, and email address;
								<br><br>
								
								    (E) A statement by you that you have a good faith belief that the disputed use is not authorized by the copyright owner, its agent, or the law; and
								<br><br>
								
								    (F) A statement by you, made under penalty of perjury, that the above information in “your “Notice is accurate and that “you “are the copyright or
								    intellectual property owner or authorized to act on the copyright or intellectual property owner's behalf.
								<br><br>
								
								    You may send your Notice of Claimed Infringement to:
								<br><br>
								
								    Custodian of records office: Attention/Travis Cline
								    <br/>
								    Street #105-5775 Irmin Street
								    <br/>
								    City: Burnaby
								    <br/>
								    Province: British Columbia
								    <br/>
								    Country: Canada
								    <br/>
								    Postal: V5J 0C3
								    <br/>
								    Email: inevitablemediafaction@yahoo.com
								<br><br>
								
								Please do not send other inquires or information to our Designated Agent. Please send other inquiries to    <a href="mailto:support@cybersensual.com">support@cybersensual.com</a>.
								<br><br>
								
								    <u>10/ </u>
								    <strong><u>Virtual Money</u></strong>
								    . The Service may, but is not obligated to, include a virtual, in-app currency (“<strong>Virtual Money</strong>”) including, but not limited to coins,
								    cash, tokens or points, that may be purchased from us for actual physical money if you are a legal adult in your country of residence. Other than a
								    limited, personal, revocable, non-transferable, non-sub license to use the Virtual Money in the service, you have no right or title in or to any such
								    Virtual Money appearing or originating in the service, or any other attributes associated with use of the service or stored within the service. We have the
								    absolute right to manage, regulate, control, modify and/or eliminate such Virtual Money as we see fit in our sole discretion, and we shall have no
								    liability to you or anyone for the exercise of such rights. Transfers of Virtual Money are strictly prohibited except where explicitly authorized within
								    the Service. Except as expressly provided otherwise herein, you may not sell any Virtual Money for actual physical money or otherwise exchange such items
								    for value. Any attempt to do so is in violation of this Agreement and may result in a lifetime ban from the Website and possible legal action. All Virtual
								    Money that has not been purchased directly by you (e.g., tips from other users, referral commissions, etc.) is forfeited if your account is terminated or
								    suspended for any reason, in our sole and absolute discretion, or if we discontinue providing the Service.
								<br><br>
								
								    <u>11/ </u>
								    <strong><u>Tipping.</u></strong>
								    <strong>
								        The Website may, but is not obligated to, permit tipping of age-verified Contributors through the service. To the extent that we decide to permit
								        tipping, you acknowledge and agree that:
								    </strong>
								<br><br>
								
								    (A) Tipping is done at your own option and risk. Tipping is not required for use of the Service.
								<br><br>
								
								    (B) Tipping may only be done using Virtual Money. Contributors may not solicit tips through means of payment other than Virtual Money.
								<br><br>
								
								    (C) Tips are a voluntary gratuity and may not be given in exchange for specific services. Promising to give a tip in exchange for performance of any act is
								    strictly prohibited, and such conduct will result in an immediate and lifetime ban from use of the Service.
								<br><br>
								
								    (D) All tips are chargeable when made. We will not return a tip made from your account except in situations that are deemed by us, in our sole and absolute
								    discretion, to be exceptional.
								<br><br>
								
								    (E) Tipping does not alter our code of conduct. Giving or receiving tips in exchange for actual or promised conduct in violation of this Agreement is
								    prohibited.
								<br><br>
								
								    (F) Exhibitionist users are never eligible to receive tips.
								<br><br>
								
								12 <strong><u>Pics and Video Purchases</u></strong>. The Website may, but is not obligated to, permit users to post Materials (“    <strong>Paid Content</strong>”) that may only be accessed after payment of a specified amount of Virtual Money. If you post any Paid Content, you represent
								    and warrant that 1/ the Paid Content you post will comply in all respects with the terms of this Agreement; and 2/ you have all rights and permissions
								    necessary to post such Paid Content and to permit users to access the same in exchange for payment. We shall have the absolute right to remove any Paid
								    Content, in whole or in part, for any or no reason at all. In the event that Paid Content you post results in chargebacks or refund requests from users who
								    have purchased such Paid Content, we reserve the right to assess a chargeback fee to your account and/or suspend your ability to post Paid Content. By
								    purchasing or accessing any Paid Content, you thereby demonstrate your express acknowledgement and agreement that 1/ The Site is not the source of such
								    Paid Content; 2/ the user posting such Paid Content is solely responsible for any claims or liabilities associated with, arising from, or in any way
								    relating to such Paid Content; 3/ your purchase and/or use of any Paid Content is solely at your own risk; 4/ The Site has no responsibility for viewing or
								    screening any Paid Content; and 5/ you forever release the Site , and its affiliates, successors, assigns, officers, employees, agents, directors,
								    shareholders and attorneys, from any and all claims and liabilities associated with, arising from, or in any way relating to such Paid Content.
								<br><br>
								
								    <u> </u>
								<br><br>
								
								    13 <strong><u>Fan Clubs</u></strong>. The Site may, but is not obligated to, permit certain users to create and administer their own fan club on the Site.
								    Eligible performing users may be permitted to set a monthly fee that other Site users must pay in Virtual Money to be members of the performing users’ fan
								    clubs, and the Site may, but is not obligated to, credit a portion of such payment to the performing users’ accounts. “We “reserve the right to resound any
								    user’s permission to have a fan club for any or no reason at all. In the event that members of your fan club request a refund from us, or institute a
								    chargeback with our payment processor, “we “reserve the right to assess a chargeback fee to your account and/or suspend your ability to have a fan club on
								    the Site.
								<br><br>
								
								    14 <strong><u>Monitoring of Information</u></strong>. “We” reserve the right, but have no obligation, to monitor any and all messages and chats that take
								place through the Site. We are not responsible for any offensive or obscene materials that may be in anyway transmitted by any and all users (    <strong>including unauthorized users, as well as the possibility of “hackers”</strong>). As noted above, “we” are also not responsible, under any
								    circumstances, for the use of any personal information, by anyone, that you in anyway transmit through the Service.
								<br><br>
								
								    15 <strong><u>Termination of Access to the Service</u></strong>. “We” may, in our sole discretion, terminate or suspend your access to all or part of the
								    service at any time, with or without notice, for any reason without limitation. Breach of this Agreement for no reason without limiting the generality of
								    the foregoing, any fraudulent, abusive, or otherwise illegal activity may be grounds for termination of your access to all or part of the Service at our
								    sole discretion. “We” reserve the right to refer such activity to any and all appropriate law enforcement agencies.
								<br><br>
								
								    16 <strong><u>Proprietary Information</u></strong>. The service contains information that is proprietary to us and/or users of the service. We assert full
								    copyright protection in the service, including all of the design and code embodied within. Any information shared or posted by us or users of the service
								    may be protected whether it is identified as proprietary to us or to the user. “You” agree not to modify, copy or distribute any such information in any
								    manner whatsoever without having first received the express permission of the owner of such information.
								<br><br>
								
								    17 <strong><u>No responsibility</u></strong>. “We” are not responsible for any incidental, punitive, direct or indirect damages of any kind whatsoever,
								    which may arise out of or relate to your use of the service, including but not limited to lost revenue, profits, business or data, or damages resulting
								    from any viruses, worms, “Trojan horses” or other destructive software or materials. Also communications by you or other users of the Service, or any
								    interruption or suspension of the service, regardless of the cause of the interruption or suspension. Any claim against us shall be limited to the amount
								    you paid, if any, for use of the service during the previous 12 months. “We” may discontinue or change the service or its availability to you at any time,
								    and you may stop using the Service at any time, please see details on cancellation below
								<br><br>
								
								    18 <strong><u>Security</u></strong><strong>.</strong> “Your “account is private and should not be used by anyone else. You are responsible for all usage or
								    activity on the service by users using your login and password, including but not limited to use of your login and password by any third party.
								<br><br>
								
								    19 <strong><u>Other Links</u></strong>. The service may from time to time contain links to other sites and resources (“<strong>External Links</strong>”).
								    We are not responsible for, and have no liability as a result of, the availability of External Links or their contents.
								<br><br>
								
								    20 <strong><u>No Warranties</u></strong>. The service is distributed on an “as is” and “as available” basis. “We” do not warrant that this service will be
								    uninterrupted or error-free. There may be delays, omissions, and interruptions in the availability of the service. Where permitted by law, you acknowledge
								    that the service is provided without any warranties of any kind. Either express or implied including but not limited to the implied warranties of
								    merchantability or fitness for a particular purpose. The site make any warranty as to the results that may be obtained from the use of the services or as
								    to the accuracy or reliability of any information obtained through the services or that defects in any software, hardware or the services will be
								    corrected. you understand and agree that any use you make of any material and/or data downloaded or otherwise obtained through the use of the service is at
								    your own discretion and risk, and that you will be solely responsible for any damage to your computer system or loss of data that results from the download
								    of such material and/or data. “We” do not represent or endorse the accuracy or reliability of any advice, opinion, statement or other information
								    displayed, uploaded or distributed through the service by the Website or any user of the Service or any other person or entity. “You” acknowledge that any
								    reliance upon any such opinion, advice, statement or information shall be at your own risk.
								<br><br>
								
								    21 <strong><u>Modifications</u></strong>. “We” may modify this Agreement on occassion. Notification of changes in this Agreement will be posted on the
								    service or sent via electronic mail, as we may determine in our own discretion. If “you” do not agree to any modifications, “you” should terminate “your
								    “use of the Service. “Your” continued use of the Service now, or following the posting of notice of any changes in this Agreement, will constitute a
								    binding acceptance from “you” of this Agreement.
								<br><br>
								
								    22 <strong><u>Disclosure and Other Communication</u></strong>. “We “reserve the right to send electronic mail to you, for the purpose of informing you of
								    changes or additions to the Service, or of any related products and services offered by the Website or it’s affiliated entities. “We” reserve the right to
								    disclose information about your usage of the service and statistics in forms that do not reveal your personal identity. For a more detailed description of
								    what information “we may disclose, please review our <a href="http://chaturbate.com/privacy/">Privacy Policy</a>, which is fully incorporated within by
								    this reference.
								<br><br>
								
								    23 <strong><u>Complaints</u></strong>. To resolve or report a complaint regarding the service or members who use the service users should send an email
								    detailing such complaint to <a href="mailto:support@cybersensual.com">support@cybersensual.com</a>. In appropriate circumstances, we will take immediate
								    action in order to help solve the problem.
								<br><br>
								
								    24 <strong><u>Registration</u></strong>. You may become a member of the service by completing an online registration form, which must be accepted by the
								    Website. Upon submission of the online registration form, the Website or its authorized agent will process the application. In connection with completing
								    the online registration form, you agree to:
								<br><br>
								
								A/ Provide true, accurate, current and complete information about yourself as prompted by the registration form (such information being the “    <strong>Registration Data</strong>”); and
								<br><br>
								
								    B/ Maintain and promptly update the Registration Data to keep it true, accurate, current and complete at all times while “you” are a member.
								<br><br>
								
								    You must promptly inform the Website of all changes to the Registration Data, including, but not limited to, changes in your address and changes in the
								    credit card information you used in connection with billing for the Service. If you provide any information that is false, not current, up to date, or
								    incomplete . The Website or any of its authorized agents have reasonable grounds to suspect that such information is false the Site has the right to
								    suspend or terminate your account and refuse your current or future use of the service and our Websites. “We may also subject you to criminal and civil
								    liability. “You” are responsible for dishonored checks and any related fees that “we “ incur with respect to your account.
								<br><br>
								
								    25 <strong><u>Member Account and Password</u></strong>. As part of the registration process, you will be issued a unique user name and password, which you
								    must provide in order to gain access to the non-public portions of the Service. You certify that, when asked to choose a username, you will not choose a
								    name which falsely represents you as somebody else, or a name which may otherwise be in violation of the rights of a third party. We reserve the right to
								    disallow the use of user names that we, in our sole discretion, deem inappropriate. We reserve the right to cancel, at any time, the membership of any
								    member who uses their selected username in violation of these Terms and Conditions or in any other way we, in our own discretion, deem inappropriate. “Your
								    “membership, the user name and password are nontransferable and non-assignable. “You” represent and warrant that you will not disclose to any other person
								    your unique user name or password and that you will not provide access to the service to anyone who is below the <strong>Age of Majority</strong>, or
								    otherwise does not wish to view the content on the Site. :”You” are solely responsible for maintaining the confidentiality of your user name and password
								    and are fully responsible for all activities that occur under your user name and password. “We” will not release your password for security reasons. You
								    agree to 1/ immediately notify the website of any unauthorized use of your user name or password or any other breach of security, and 2/ Ensure that you
								    exit from your account at the end of each session. “You “agree that you are solely liable and responsible for any unauthorized use of the service using
								    your account until you notify the Website by email regarding that unauthorized use. Unauthorized access to the service is illegal and a breach of this
								    Agreement. “You” agree to indemnify the Site with respect to all activities conducted through your account. You may obtain access to your billing records
								    upon your reasonable request.
								<br><br>
								
								    26 <strong><u>Promotion of the Site and Service</u></strong>. Registered members of the service may be eligible to participate in our affiliate advertising
								    program and potentially earn commissions based on the number and quality of registered user referred to the Site.
								<br><br>
								
								    (A) <u>License to Promotional Items</u>. All registered members who are currently in compliance with the terms of this Agreement are hereby granted a
								    revocable, non-exclusive, non-transferable license to utilize the Site’s name, access and download promotional banners, videos, photographs, other
								promotional materials, and/or promotional materials created by you, provided that such materials are approved by the Site in writing (the “    <strong>Promotional Items</strong>”), for use on site(s) owned by such registered members (“<strong>Referral Sites</strong>”). The Promotional Items are
								    licensed to eligible registered members for the limited purposes of advertising, marketing and promoting the Site and Service. Any and all licenses granted
								    to registered members pursuant to this Agreement shall immediately cease and revert to us upon the termination or cancellation of this Agreement. You agree
								    not to share any of the Promotional Items with anyone in any way, which is not in accordance with the terms of this Agreement and applicable law. You
								    hereby acknowledge and agree that all rights to the Promotional Items belong solely to the Site and/or the Site’s licensors. You further acknowledge and
								    agree that any Promotional Items created by you and approved by the Website are a specially ordered and commissioned “work made for hire” within the
								    meaning of the <u>1976 Copyright Act </u>for the good and valuable consideration provided you herein.
								<br><br>
								
								    <u>(B) </u>
								    <u>Keywords; Domain Names</u>
								    . Notwithstanding the foregoing license to use the names of our Website in connection with referring traffic to the service, you are not, as a part of this
								    license, permitted to (a) bid on, purchase or otherwise register/use “<strong>Cybersensual</strong>,” “cybersensual.com,” or any other similar spelling, or
								    use same in connection with the words “Official,” “Officially” or “Official Site,” as keywords or advertising words on any internet search engines,
								    including, without limitation, google.com, bing.com, ask.com, yahoo.com, etc.; use the Site Names in association with any similar or competing website or
								    service; or (b) register any domain name which incorporates or is a “misspelling” of “<strong>Cybersensual</strong>.” You agree that in the event you
								    violate any part of this section of this Agreement, your account will be immediately terminated, any monies earned but not yet paid will be forfeited, and
								    that you will cooperate fully in transferring any items forbidden by this section to the Site as the rightful owner. Subject to the foregoing limitations
								    and pursuant to the license granted herein, eligible registered members will be permitted to use any website domain name they choose in connection with
								    promoting the Site and Service, so long as such website domain names registered do not infringe on our or any third party's intellectual property rights,
								    defame, insult or otherwise harass anyone, and do not promote or suggest any illegal activity.
								<br><br>
								
								    <u>(C) </u>
								    <strong><u>Restrictions</u></strong>
								    . You are prohibited from using any images, text, script(s), applications, logos and functional elements appearing on a Referral Sites, to which you do not
								    have all legal rights, free from any and all encumbrances and third party claims. Further, you represent and warrant that you will only advertise on
								    services and providers, which permit advertisement of services such as the Site. You understand and agree that if you advertise on any service or provider,
								    which does not permit such advertising, your account will be terminated without notice and without pay. Furthermore, you acknowledge and agree that we may,
								    at any time, review the contents of any Referral Site and disapprove of any material thereon that might, in our sole discretion, reflect negatively upon
								    the Site or the Service. Upon request from us, such material must be immediately removed in order for you to remain eligible to receive commissions
								    hereunder.
								<br><br>
								
								    <u>(D) </u>
								    <strong><u>No Email Marketing</u></strong>
								    . We do not permit promotion of the Site by email marketing. You acknowledge and agree that any email marketing by you will be grounds for immediate
								    termination of your account without pay.
								<br><br>
								
								    <u>(E) </u>
								    <strong><u>User Referral Link</u></strong>
								    . Each member shall be assigned one or more unique URLs (each a “User Referral Link”) that must be used when referring new members in order to connect such
								    new members to the existing member who referred them. Your User Referral Links can be found on the “My Profile” page under the “Share and Earn” tab. You
								    acknowledge and agree that we are not obligated to pay any commissions to you for any member signups or member spending that did not result from use of one
								    of your User Referral Links.
								<br><br>
								
								    <u>(F) </u>
								    <strong><u>Commissions on Member Spending</u></strong>
								    .
								<br><br>
								
								    (<strong><u>YET TO BE DETERMINED</u></strong>)
								<br><br>
								
								    The Site will compensate eligible members, subject to the terms of this Agreement in all respects, a commission for certain types of referrals generated by
								    such eligible members, as set forth in further detail below:
								<br><br>
								
								    1/ Definition of Adjusted Gross Receipts. As used herein, “Adjusted Gross Receipts” shall mean gross payments received from a subject member, less any
								    chargebacks (including amounts paid as a result of credit card abuse or fraud, or paid to such subject member by us to settle a claim involving the
								    allegation of credit card or other abuse or fraud) or any uncollectable revenue attributable to the subject member.
								<br><br>
								
								    2/ Paying Member Referrals. As used herein, a “Referred Member” shall mean an internet user who creates a new member account using an existing member’s
								    User Referral Link. Eligible members will receive a commission equal to twenty percent (20%) of Adjusted Gross Receipts paid by each of their Referred
								    Members to the Site.
								<br><br>
								
								    3/ Paying Sub-Referrals. Eligible members will receive a commission equal to five percent (5%) of the amount of commissions paid to their Referred Members
								    for payments received from internet users who create new member accounts using the Referred Members’ User Referral Link.
								<br><br>
								
								    4/ Performing Member Referrals. As used herein, a “Referred Performer” shall mean an internet user who creates a new member account using an existing
								    member’s User Referral Link and who verifies his or her account for purposes of collecting payment by completing the Site’s age verification process.
								    Eligible members will receive a one-time fifty U.S. dollars (US$50.00) commission for each of their Referred Performers who subsequently earns a minimum
								    amount that we will establish, from time to time, in our sole discretion. Studio accounts are not eligible for model referral commissions.
								<br><br>
								
								    We reserve the right to modify these amounts at any time without further notice to you.
								<br><br>
								
								    27 <strong><u>Commissions on Number of Signups; Countries and Tiers</u></strong>.
								<br><br>
								
								    (a) Certain members may be eligible for commissions based on the number of internet users referred by such members who create an account with the Site. The
								    amount of commission will depend upon the country in which the referred internet user resides, as described more fully below. As applicable, a commission
								    of One U.S. Dollar (US$1.00) will be paid for referred members from a Tier 1 country, Ten U.S. Cents (US$0.10) for referred members from a Tier 2 country,
								    and One U.S. Cent (US$0.01) for referred members from a Tier 3 country. We reserve the right to modify these amounts at any time without further notice to
								    you. No commission will be paid for a referred members residing in a country not found in Tier 1, Tier 2, or Tier 3 below.
								<br><br>
								
								    The following countries have been assigned to the tiers indicated for each:
								<br><br>
								
								    Tier 1: Netherlands Antilles Austria Australia Belgium Canada Switzerland Germany Denmark Finland Falkland Islands (Malvinas) Faroe Islands France United
								    Kingdom Guernsey Gibraltar Greenland Ireland Iceland Jersey Japan Liechtenstein Luxembourg Netherlands Norway New Zealand Qatar Sweden Singapore San Marino
								    United States Minor Outlying Islands United States United States Virgin Islands
								    <br/>
								    Tier 2: United Arab Emirates Aruba Brunei Darussalam Brazil the Bahamas Cyprus Spain Equatorial Guinea Greece Hong Kong Israel Isle of Man Italy South
								    Korea Kuwait Cayman Islands Macau Macao French Polynesia Puerto Rico Portugal Slovenia British Virgin Islands
								    <br/>
								    Tier 3: Antigua and Barbuda Anguilla Barbados Bahrain Cook Islands Chile Czech Republic Estonia Guam Croatia Hungary Saint Kitts and Nevis Lebanon
								    Lithuania Latvia Northern Mariana Islands Malta Mexico New Caledonia Oman Poland Russia Saudi Arabia Seychelles Slovakia Turkey Trinidad and Tobago Taiwan
								    Uruguay Venezuela
								    <br/>
								    We reserve the right to modify the countries belonging to each tier at any time without further notice to you.
								<br><br>
								
								    (<strong>b)</strong><u> /Commission Payouts</u>. Periods for eligible members to accumulate commissions run from the 1st through the 15th and the 16th
								    through the 31st of each month. Commission payments will be made to eligible members seven days after each period is closed. In the event that you
								    accumulate a commission, you will not be entitled to receive payment, nor shall the Site be liable for any such payment, unless and until the total amount
								    of accumulated funds associated with your account exceeds Fifty U.S. Dollars (US$50.00). In order to receive cash commissions, you may be required to
								    complete a one-time claim form, which might include submission of your legal name, a copy of your government-issued photo identification, mailing address,
								    birth date, telephone number, social security number and a selection of a preferred payment method. In addition, depending on the amount of commissions
								    accumulated, you might be required to sign, notarize, and return an affidavit or declaration of eligibility, a liability release, an I.R.S. Form W-9 and
								    provide any additional information that may be required by the Site. Failure to provide any requested information may result in forfeiture of any unpaid
								    commissions. We reserve the right to charge a $10.00 payment reissue fee for replacing lost or misplaced payments that had previously been issued. Fee
								    assessed at time of reissue.
								<br><br>
								
								    <strong>(c)<u> </u></strong>
								    <u>Disclaimer of Agency</u>
								    . Nothing in this Agreement is intended by you or the Site to constitute a joint venture or collaboration between you and the Site. You acknowledge that
								    you are in no way an agent, employee or similarly situated employment like relationship. You further acknowledge that you have no authority to act on the
								    Site’s behalf or bind the Site to any debt or agreement.
								<br><br>
								
								    <strong><u>(d)</u></strong>
								    <u> </u>
								    <strong><u>Invalid Referrals</u></strong>
								    . You acknowledge and agree that you shall not be entitled to any compensation from the Site for any referral if the Site determines or believes, in the
								    Site’s sole discretion, that such referral is the result of possibly fraudulent activity or any violation of this Agreement.
								<br><br>
								
								    28 <strong><u>Billing Errors</u></strong>. If you believe that you have been erroneously billed, please notify us immediately of such error. If we do not
								    hear from you within thirty (30) days after such billing error first appears on any account statement, such fee will be deemed acceptable by you for all
								    purposes, including resolution of inquiries made by your credit card issuer. You release us from all liabilities and claims of loss resulting from any
								    error or discrepancy that is not reported to us within thirty (30) days of its publication.
								<br><br>
								
								    29 <strong><u>Severability</u></strong><strong>.</strong> If any term, clause or provision hereof is held invalid or unenforceable by a court of competent
								    jurisdiction, such invalidity shall not affect the validity or operation of any other term, clause or provision and such invalid term, clause or provision
								    shall be deemed to be severed from this Agreement.
								<br><br>
								
								    30 <strong><u>Arbitration</u></strong>. All Disputes (including any dispute relating to the arbitration of this agreement or any provision of this
								    agreement or any other dispute relating to arbitration) must be submitted to arbitration in accordance with the arbitration rules governed by the laws of
								    British Columbia, in the city of Vancouver, British Columbia, Canada. The term “Dispute” means any controversy or claim arising out of or relating to the
								    Website or the Services or this agreement, or any breach thereof, including any claim that this Agreement, or any part of this Agreement is invalid,
								    illegal or otherwise voidable or void.
								    <br/>
								    <br/>
								    The provisions of this Arbitration Section must be construed as independent of any other covenant or provision of this Agreement; provided that if a court
								    of competent jurisdiction or arbitrator determines that any such provisions are unlawful in any way, such court or arbitrator is to modify or interpret
								    such provisions to the minimum extent necessary to have them comply with the law. Notwithstanding any provision of this Agreement relating to under which
								    state’s laws this Agreement is to be governed by and construed under, all issues relating to arbitration or the enforcement of the Agreement to arbitrate
								    contained herein are to be governed by the the laws of British Columbia in the city of Vancouver, British Columbia, Canada.
								    <br/>
								    <br/>
								    Judgment upon an arbitration award may be entered in any court having competent jurisdiction and will be binding, final and non-appealable. “You” and the
								    Website hereby waive to the fullest extent permitted by law, any right to or claim for any punitive or exemplary damages against the other and agree that
								    in the event of a dispute between them, each shall be limited to the recovery of any actual damages sustained by it.
								    <br/>
								    <br/>
								    This arbitration provision is self-executing and will remain in full force and effect after the expiration or termination of this Agreement. In the event
								    either party fails to appear at any properly noticed arbitration proceeding, an award may be entered against such party by default or otherwise
								    notwithstanding said failure to appear.
								    <br/>
								    <strong>
								        <u>
								            <br/>
								        </u>
								    </strong>
								    You and the Site hereby agree that no action (whether for arbitration, damages, injunctive, equitable or other relief, including rescission) will be
								    maintained by any party to enforce any liability or obligation of the other party, whether arising from this Agreement or otherwise, or any other Dispute,
								    unless brought before the expiration of the earlier of one year from the occurrence of the facts giving rise to such claims or within 90 days from either
								    the actual discovery of the facts giving rise to such claims or from the date on which the party should have, in the exercise of reasonable diligence,
								    discovered such facts.
								    <br/>
								    <br/>
								    <br/>
								<br><br>
								
								    The obligation to arbitrate is not binding upon the Site with respect to claims relating to its trademarks, service marks, patents, copyrights, or other
								    intellectual-property rights, or requests for temporary restraining orders, preliminary injunctions or other procedures in a court of competent
								    jurisdiction to obtain interim relief when deemed necessary by such court to preserve the status quo or prevent irreparable injury pending resolution by
								    arbitration of the actual dispute between the parties.
								    <br/>
								    <br/>
								    The prevailing party will be entitled to receive from the non-prevailing party its costs relating to the arbitration proceeding including but not limited
								    to, the arbitrator's fees, attorneys' fees and costs, witness fees, transcription fees, etc. and sales and use taxes thereon, if any.
								    <br/>
								    <br/>
								    You and the Website each acknowledges and agrees that it is the intent of the parties that arbitration and litigation between the parties will be of the
								    parties' individual claims, and that none of their respective claims may be arbitrated or litigated on a class-wide basis.
								<br><br>
								
								    <strong>
								        <u>
								            Any and all arbitration shall be governed by the Laws of British Columbia, in the city of Vancouver, British Columbia, Canada and any legal action
								            must be commensed in Vancouver, British Columbia, Canada
								        </u>
								    </strong>
								<br><br>
								
								    <u>31/ </u>
								    <strong><u>Cancellation By User</u></strong>
								    . You may cancel your membership at any time by visiting <a href="accounts/delete/index.html">our cancellation page</a>. You hereby agree to
								    be personally liable for any and all charges incurred by your user name and password until you terminate your membership as provided herein. In the event
								    that you cancel your account, refunds may be granted for Virtual Money that was directly purchased by you; no funds will be credited to you or can be
								    converted to cash or other form of reimbursement unless those funds were paid by you in purchasing Virtual Money. Upon our processing of your request to
								    cancel your membership, you will no longer have access to the non-public areas of the Service.
								<br><br>
								
								    <u>32 </u>
								    <strong><u>Termination By the Site</u></strong>
								    <strong>. </strong>
								<br><br>
								
								    Without limiting other remedies, the Service may immediately issue a warning, temporarily suspend, indefinitely suspend, or terminate your access and use
								    of the Service and refuse to provide our services to you at any time, with or without advance notice, if: (a) the Site believes that you have breached any
								    of these Terms and Conditions; (b) we are unable to verify or authenticate any information you provide to us; (c) we believe that your actions may cause
								    legal liability for you, our users or us; or (d) the Site decides to cease operations or to otherwise discontinue any of the Site or parts thereof.
								    Further, you agree that neither the Site, nor any third party acting on our behalf, shall be liable to you for any termination of your membership or access
								    to the Service. You agree that if your account is terminated by the Site, you will not attempt to re-register as a member without prior written consent
								    from the Site.
								<br><br>
								
								    <strong>33 </strong>
								    <strong><u>After Termination or Cancellation</u></strong>
								    . You accept that when you cancel your membership with the Service you will be automatically deleted from and locked out of the Service. You will be unable
								    to access your account on the Service. You also agree and accept that upon cancellation your account, any mail and all other membership materials will be
								    immediately deleted from the Site and Service and that such information will be irretrievable.
								<br><br>
								
								    <strong>34 </strong>
								    <strong><u>Indemnification</u></strong>
								    <strong>.</strong>
								    You agree to defend, indemnify, defend, and hold the Site and its affiliates, successors, assigns, officers, employees, agents, directors, shareholders and
								    attorneys, harmless from and against any and all claims and liabilities, including reasonable attorneys’ and experts’ fees, related to or arising from: (i)
								    any breach by you of this Agreement; (ii) your use (or misuse) of the Service, Site and/or Promotional Materials; (iii) all conduct and activities
								    occurring using your account and/or Referral Sites, if any; (iv) any item or service sold or advertised in connection with your Referral Sites, if any; (v)
								    any defamatory, libelous or illegal material(s) contained within your Content or your information and data; (vi) any claim or contention that any of your
								    Referral Sites, if any, contain information, data or other materials which infringes any third party’s patent, copyright, trademark, or other intellectual
								    property rights or violates any third party's rights of privacy or publicity; (vii) third-party access or use of any Promotional Materials provided to you;
								    (viii) any claim related to your website(s); (ix) any costs incurred on your behalf as a result of your failure to comply with your local governing
								    jurisdiction law; and/or (x) any violation of this Agreement. We reserve the right, at our own expense, to participate in the defense of any matter
								    otherwise subject to indemnification from you, but shall have no obligation to do so, and we are permitted by this agreement to later seek indemnification
								    from you. You shall not settle any such claim or liability without the prior written consent of the Site. You understand that we will take any and all
								    measures to protect ourselves from any legal or civil litigation including, but not limited to canceling your account, in our sole discretion. You also
								    understand that we will charge, on an hourly basis, for any and all time spent responding to any third-party complaints, disputes, copyright claims or
								    actions involving you or your Referral Sites.
								<br><br>
							</div>
						  </div>
						</div>
			</div>
		</div>
	</div>
</div>  <a href="#" data-reveal-id="flashModal" class="close-reveal-modal">&#215;</a>
</div>

<div id="model2257" class="reveal-modal large" data-reveal data-options="close_on_background_click:false;close_on_esc:false;">
 <div class="row collapse inner">
	<div class="large-12 columns">	    		
		<div class="row">
			<div class="large-12 columns right">
				<h3 class="text-center">2257 Policy</h3>
				<hr>
	    		18 U.S.C. 2257 Records Keeping Requirements Compliance Statement In compliance with United States Code, Title 18, Section 2257, all models, actors, actresses and other persons who appear on in any visual depiction of actual sexually explicit conduct appearing or otherwise contained in or at this site were over the age of eighteen years at the time of the creation of such depictions and they appear here exclusively in roles depicting them as adults. All other visual depictions displayed on this Website are exempt from the provision of 18. <br><br>

U.S.C. section 2257 and 28 C.F.R. 75 because said they do not portray conduct as specifically listed in 18 U.S.C section 2256 (2) (A) through (D), but are merely depictions of non-sexually explicit nudity, or are depictions of simulated sexual conduct, or are otherwise exempt because the visual depictions were created prior to July 3, 1995. For CyberSensual videos, records required to be maintained by this section are kept by the custodian of records at: Emancipatie Blvd 29 Curaçao, Netherlands Antilles The owners and operators of this website believe its content to be non-obscene erotic expression protected by the First Amendment. The owners and operators of this website are not the primary producer (as the term is defined in 18 USC Section 2257) of any of the visual content contained in this website. This website primarily links to partner websites provided by other vendors and does not produce any content.The original records required pursuant to 18 U.S.C. section 2257 and 28 C.F.R. 75 for all material provided by partner sites are kept by the following Custodian of Records:</p>
    
    <br><br>
    Suite # 105 -5775 Irmin Street,<br>
    Burnaby , British Columbia<br>
    Canada, V5J 0C3 <br><br>
    Custodian of Records: <br>Inevitable Media Faction. Ltd.
			</div>
		</div>
	</div>
</div>  <a href="#" data-reveal-id="flashModal" class="close-reveal-modal">&#215;</a>
</div>

<div id="contactModal" class="reveal-modal large" data-reveal data-options="close_on_background_click:false;close_on_esc:false;">
  <div class="row">
    <div class="large-2 columns"><h5>Our Address</h5></div>
    <div class="large-10 columns" style="line-height:22px;">
      <strong>Inevitable Media Faction Ltd.</strong><br>
      <strong>Main Office:</strong> Suite # 105 -5775 Irmin Street, Burnaby , <br> 
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;British Columbia, Canada, V5J 0C3. <br>
      <strong>EU Address:</strong> Office 3 Unit R, Penfold Trading Estate, <br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Imperial Way, Watford, Hertfordshire, WD24 4YY <br> 
      <strong>Contact:</strong> 1-778-808-7877 <br>
      <strong>Support:</strong> <a href="mailto:support@cybersensual.com">support@cybersensual.com</a> <br>
    </div>
  </div>  

  <a href="#" data-reveal-id="flashModal" class="close-reveal-modal">&#215;</a>
</div>



<div class="row collapse inner">
	<div class="large-9 columns">	    		
		<div class="row">
			<div class="large-12 columns right">
	    		<ul class="small-block-grid-2 medium-block-grid-4 large-block-grid-4" id="sk">
	    			       <?php $data = $class->modelList(models);
						          $count = count($data);
								  for($i=0;$i<$count;$i++){
							  ?>
	    					<li style="font-size:13px;">
	    						<a href="show/pub/testmodel.html">
	    						<img src="img/img.jpg" style="border:0px;"> 
	    						</a>
	    						<span style="color:#FF0036; "><?php echo $data[$i]['name']?></span> 
	    						 <?php if($data[$i]['live_status']==0){
								   $pic = 'bullet-red.png';
								 }else{
								    $pic = 'green_bullet.gif';
								 }
								 ?>
                                <p style=" clear:both !important; width:100%; margin-top:-20px !important; text-align:right" ><img src="images/<?php echo $pic ?> " style="width:16px !important; height:16px !important; text-align:right;  margin-left:30%;"></p>
								
                                
                                
	    					</li>
	    					 <?php }?>
	    					<!--<li style="font-size:13px;">
	    						<a href="show/pub/testmodel2.html">
	    						<img src="img/img.jpg" style="border:0px;"> 
	    						</a>
	    						<span style="color:#FF0036;">Anne Monsef</span> 
	    						<p style=" clear:both !important; width:100%; margin-top:-20px !important; text-align:right" ><img src="images/bullet-red.png" style="width:20px !important; height:20px !important; text-align:right" ></p>
	    					</li>
	    					 
	    					<li style="font-size:13px;">
	    						<a href="show/pub/testmodel3.html">
	    					<img src="img/img.jpg" style="border:0px;"> 
	    						</a>
	    						<span style="color:#FF0036;">Akihshi Tanaka</span> 
	    						<p style=" clear:both !important; width:100%; margin-top:-20px !important; text-align:right" ><img src="images/green_bullet.gif " style="width:16px !important; height:16px !important; text-align:right;  margin-left:30%;"></p>
	    					</li>
	    					 
	    					<li style="font-size:13px;">
	    						<a href="show/pub/testmodel4.html">
	    						<img src="img/img.jpg" style="border:0px;"> 
	    						</a>
	    						<span style="color:#FF0036;">Akira Yomoto</span> 
	    					<p style=" clear:both !important; width:100%; margin-top:-20px !important; text-align:right" ><img src="images/bullet-red.png" style="width:20px !important; height:20px !important; text-align:right" ></p>
	    					</li>
	    					 
	    					<li style="font-size:13px;">
	    						<a href="show/pub/testmodel5.html">
	    					<img src="img/img.jpg" style="border:0px;"> 
	    						</a>
	    						<span style="color:#FF0036;">Alice Lee</span> 
	    					<p style=" clear:both !important; width:100%; margin-top:-20px !important; text-align:right" ><img src="images/bullet-red.png" style="width:20px !important; height:20px !important; text-align:right" ></p>
	    					</li>
	    					 
	    					<li style="font-size:13px;">
	    						<a href="show/pub/testmodel6.html">
	    					<img src="img/img.jpg" style="border:0px;"> 
	    						</a>
	    						<span style="color:#FF0036;">Ashley Smith</span> 
	    						<p style=" clear:both !important; width:100%; margin-top:-20px !important; text-align:right" ><img src="images/bullet-red.png" style="width:20px !important; height:20px !important; text-align:right" ></p>
	    					</li>
	    					 
	    					<li style="font-size:13px;">
	    						<a href="show/pub/testmodel7.html">
	    					<img src="img/img.jpg" style="border:0px;"> 
	    						</a>
	    						<span style="color:#FF0036;">Brandie Belle</span> 
	    				<p style=" clear:both !important; width:100%; margin-top:-20px !important; text-align:right" ><img src="images/green_bullet.gif " style="width:16px !important; height:16px !important; text-align:right;  margin-left:30%;"></p>
	    					</li>
	    					 
	    					<li style="font-size:13px;">
	    						<a href="show/pub/testmodel8.html">
	    					<img src="img/img.jpg" style="border:0px;"> 
	    						</a>
	    						<span style="color:#FF0036;">Daniele Torres</span> 
	    						<p style=" clear:both !important; width:100%; margin-top:-20px !important; text-align:right" ><img src="images/bullet-red.png" style="width:20px !important; height:20px !important; text-align:right" ></p>
	    					</li>
	    					 
	    					<li style="font-size:13px;">
	    						<a href="show/pub/testmodel9.html">
	    			<img src="img/img.jpg" style="border:0px;">  
	    						</a>
	    						<span style="color:#FF0036;">Dolly Trinidad</span> 
	    						<p style=" clear:both !important; width:100%; margin-top:-20px !important; text-align:right" ><img src="images/bullet-red.png" style="width:20px !important; height:20px !important; text-align:right" ></p>
	    					</li>
	    					 
	    					<li style="font-size:13px;">
	    						<a href="show/pub/testmodel10.html">
	    					<img src="img/img.jpg" style="border:0px;"> 
	    						</a>
	    						<span style="color:#FF0036;">Josephine Yumol</span> 
	    					<p style=" clear:both !important; width:100%; margin-top:-20px !important; text-align:right" ><img src="images/green_bullet.gif " style="width:16px !important; height:16px !important; text-align:right;  margin-left:30%;"></p>
	    					</li>
	    					 
	    					<li style="font-size:13px;">
	    						<a href="show/pub/testmodel11.html">
	    						<img src="img/img.jpg" style="border:0px;"> 
	    						</a>
	    						<span style="color:#FF0036;">Luiese Trolly</span> 
	    						<p style=" clear:both !important; width:100%; margin-top:-20px !important; text-align:right" ><img src="images/bullet-red.png" style="width:20px !important; height:20px !important; text-align:right" ></p>
	    					</li>
	    					 
	    					<li style="font-size:13px;">
	    						<a href="show/pub/testmodel12.html">
	    					<img src="img/img.jpg" style="border:0px;"> 
	    						</a>
	    						<span style="color:#FF0036;">Margelo Smith</span> 
	    						<p style=" clear:both !important; width:100%; margin-top:-20px !important; text-align:right" ><img src="images/green_bullet.gif " style="width:16px !important; height:16px !important; text-align:right;  margin-left:30%;"></p>
	    					</li>
-->
	    						    		</ul>
			</div>
		</div>
	</div>
	
<div class="large-3 columns text-center">	    		
		<div class="row">
			<div class="large-12 columns">
				<img src="images/side_bar.png" width="100%">
			</div>
		</div>
		<div class="row">&nbsp;</div>
		<div class="row">
			<div class="large-12 columns">
				<img src="images/side_bar1.png" width="100%" style="height:">
			</div>
		</div>
		
	</div>
</div>
 <div class="row collapse inner">&nbsp;</div>
  </div>
</div>

<div class="row">&nbsp;</div>
<div class="row"> 
    <div class="large-8 columns left cfooter">
        CYBERSENSUAL &copy; 2014 • 
        <a href="terms-and-conditions.html">TERMS & CONDITIONS</a> | 
        <a href="privacy-policy.html">PRIVACY POLICY</a> | 
        <a href="policy-2257.html">2257 POLICY</a> | 
        <a href="refund-policy.html">REFUND POLICY</a> |  
        <a href="disclaimer.html">DISCLAIMER</a> |  
        <a href="rta.html">RTA</a> | 
        <a href="support.html">SUPPORT</a> | 
        <a href="help.html">HELP</a> | 
        <a href="contact.html">CONTACT</a>
    </div>
    <div class="large-4 columns text-right cfooter responsiv_botton">
    
    
            
            
            
        <a href="#" style="background:#ff004e; padding:12px; border-radius:30px;">AFFILIATE LOGIN &nbsp;  <img src="images/key.png" style="margin-right:4px;"></a> &nbsp; 
        <a href="#" style="background:#ff004e; padding:12px; border-radius:30px">AFFILIATE SIGNUP</a>&nbsp;
        
      <a href="#" style="background:#ff004e; padding:12px; border-radius:30px"> EMPLOYMENT </a>&nbsp;


    </div>
</div> 
<div class="row">&nbsp;</div>
<div class="row">


  <div class="large-12 columns cfooter" style="line-height:16px;">
    <center>
    
    
<span style="font-size:18px; color:#ff004e; font-weight:600">CONNECT <span style="color:#FFF">WITH US </span></span><br>


<A href="#"><img src="images/2.png"></a>&nbsp;
 <A href="#"><img src="images/1.png"> </a>&nbsp;

  <A href="#"><img src="images/4.png"></a>&nbsp;
  
    
  <A href="#"><img src="images/3.png"></a>&nbsp;
  
  
 <br>

 <br>

      EU Address: Office 3 Unit R, Penfold Trading Estate, Imperial Way, Watford, Hertfordshire, WD24 4YY <br>
      &copy; Copyright Cybersensual.com 2014 - 2015. All Rights Reserved. 
    </center>
  </div>
</div>
<div class="row">&nbsp;</div>
<div class="row">
  <div class="large-12 columns cfooter" style="line-height:16px;">
    <center>
      <strong>GTBill</strong> (Please visit <a href="http://gtbill.com/" target="_blank">GTBill.com</a>, our authorized sales agent for access to cybersensual.com) <br>
      Contact 1888-889-07-88 for billing customer service and/or cancellation. <br>
      Or <a href="http://www.gtbill.com/cancel.html" target="_blank"> Click Here </a> to go to cancel page.
    </center>
  </div>
</div>
<div class="row">&nbsp;</div>
 <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>

  <script>
    $(document).foundation();
  </script>
  </body>
</html>