<!DOCTYPE html>

<html>

<head>
	<title> Sign Up| SLIIT App Store</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	
	<script src="../js/myscript.js">          
    </script>
</head>

<body> 
	<header>
		<img class="logo" src="../images/LOGO-GREEN.png" alt="logo" width ="200px" height="60px">
		<nav>
			<ul class="nav_links">
				<li><a href="index.php">Home </a></li>
				<li><a href="more.php">Games</a></li>
				<li><a href="more.php">Apps</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>	
		</nav>
		<a class="cta" href="login.php"><button> Sign in </button></a>
		<img class="propic" src="../images/default-profile.png" alt="logo" width ="50px" height="50px">
		

	</header>
	


<body>

<div class="form1">
     <center> <h1>Sign Up Now</h1> </center><br>
	  <form  class="txt"  action="insert.php"  method="POST" >
	       
		   First Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <!--Keep extra space-->Last Name <br>
		   <input type="text"  name="firstName" class="box0"  required> &nbsp &nbsp   &nbsp  <input type="text" class="box0"  name="lastName" ><br> 
		   
           User Name   <br>
		   <input type="text" class="box1" name="uName"   required> <br> 
		   Email <br>
		   <input type="email" class="box1" name="email"      required> <br> 
		   
		    Password <br>
		   <input type="password" class="box1" name="pwd1" id="pwd1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
		    title="Must contain at least one digit, one uppercase character one lowercase character and at least 8 characters" required> <br> 
		   
		    Confirm Password <br>
		   <input type="password" class="box1" name="pwd2" id="pwd2" required> <br> 
		   
		   Date Of Birth <br>
		   <input type="date"  class="box1" name="DOB" min="1900-01-01"  > <br> 
		   
		   Mobile Number <br>
		   <input type="text"  class="box1" name="mobile" pattern="[0-9]{10}" title="Please Enter Valid Number With 10 Digits" > <br> <br>
		   
		   <input type="checkbox" name="chk" id="chk" onclick="enablebtn()"> <a href="#"> <font color="black"> Accept terms & conditions </font> </a> <br> <br>  <!--Should ridirect to terms page -->
		    
			<center>  <button type="submit"  name="reg" id="reg" class="btnsign" onclick="return checkPassword()"  disabled> Sign Up </button> </center>
		   
		  </form>
</div>


<!--
	 <div>
	 <br>
	 <img class="back" src="images/bg-img-3.png" width="100%" height="200%" top="100px">
	 </div>
	 -->

	 
	 <!-- FOOTER ************** -->
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	
	
	 <div class="footer">
		<div class="footer-content">
			<div class="footer-section about">			
				<img class="logo" src="../images/LOGO-GREEN.png" alt="logo" width ="200px" height="60px">
				
				<p class="foot">
					This is sample paragraph.This is sample paragraph.This is sample paragraph.This is sample paragraph.This is sample paragraph.This is sample paragraph.
				</p>
				<br>
				<div class="contact">
					<span><i> &nbsp; 077-002-5079</i> </span>
					<span><i> &nbsp; info@sliit.lk</i> </span>
					
					<img src="../images/fblogo.png" width="40px" height="40px" >
					<img src="../images/googlelogo.png" width="40px" height="40px" >
					<img src="../images/androidlogo.png" width="40px" height="40px" >
				</div>	
					
			</div>
			
			<div class="footer-section links">
			
				<h2>Quick Links</h2>
				<br>
				<ul>
				<a href="#"><li>Games</li></a>
				<a href="#"><li>Apps</li></a>
				<a href="#"><li>Entertainment</li></a>
				<a href="#"><li>premium</li></a>
				
				</ul>
			</div>
			<div class="footer-section contact">
				<h2>Contact Us</h2>
				<br>
				
				<ul>
				<a href="#"><li>Facebook</li></a>
				<a href="#"><li>E mail</li></a>
				<a href="#"><li>Instagram</li></a>
				<a href="#"><li>call us</li></a>
				
				</ul>
				<br>
				<img src="../images/fblogo.png" width="40px" height="40px" >
				<img src="../images/emaillogo.png" width="40px" height="40px" >
			
			</div>
		</div> 
		
		<div class="footer-bottom">
		 &copy; SLIIT.LK |Designed by Matara Center
		</div>
	 </div>
		
	 
	 
</body>
	
</html>