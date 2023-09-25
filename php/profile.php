<!DOCTYPE html>

<html>

<head>
	<title> Profile | SLIIT App Store</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	
	<script src="../js/myscript.js">          
    </script>
	
</head>

<body>
  <!-- ***** Header Start ***** --> 
	
	<?php 
	  include('header.php');
	
	?>
	
	<!-- ***** End of header ***** -->
	
	
	
	<!-- ***** Start of body ***** -->
	  <?php
	   if(isset($_SESSION['session']))
	   {
		   include('body.php');
	   }
	  else{
		  header("location: login.php?Error!!!");
	  }
	
	?>
	 
	 <!-- ***** End of body ***** -->
	
	 
	 <!-- FOOTER ************** -->
	
	 
	 
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