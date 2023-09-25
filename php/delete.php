<!DOCTYPE html>

<html>

<head>
	<title> Delete Account | SLIIT App Store</title>
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
	<div>
	<form class="delete" action="deleteacc.php" method="POST">
    <br>	
	<br>
	<br>
	<br>
	
	<?php
	if(isset($_SESSION['session']))
	{
	 echo'
	<h1 align="center"> <font color="red"> <b> Are you sure want to delete your account? </b> </font></h1> <br> <br> <br> <br> <br>';
	 }
	 else{
		  header("location: login.php?Error!!!");
	 }
	 ?>
	
	
	<h2><b><font color="black">Enter Your Password </font> </b></h2>
	<input type="password" class="boxd" name="passwd" id="passwd" required> <br> <br> <br>
	
	 
    <input type="submit" class="delbtn" name="del" id="del"  value="Delete Account">   
	
	</div>
	 
      <!-- SIDE BAR *****-->
	<div id="sidebar">
		<ul>
		    
			<li> <a href="profile.php">Edit Profile </a> </li> 
			<li> <a href="more.php">My Apps </a> </li>
			<li> <a href="#">Add Payment Methods </a> </li>
			<li> <a href="#"> <font color="green" size="5px"><b>Delete Account</b></font> </a> </li>
			
			
		</ul>
		
	</div>
	
	 
	 

	 
	 
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