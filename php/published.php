<!DOCTYPE html>

<html>

<head>
	<title> HOME | SLIIT App Store</title>
	<link rel="stylesheet" type="text/css" href="../css/style_sanjula.css">
	<script src="js/myscript_sanjula.js"></script>
</head>

<body id="bodyPublish"> 
	<?php 
	  include('header.php');
	
	?>
	
	<!-- SIDE BAR ***********-->

	
	<div class="content">
	<div class="wrapper">
		<div id="sidebar">
		<ul>
			<li><a href="index.php"> Home</a> </li>
			<li> <a href="published.php">Add new app</a> </li>
			<li><a href="read_s.php"> Edit app</a> </li>
			<li> <a href="categorylist.php">Edit Category </a></li>
			<li> <a href="read.php">My apps</a> </li>
			
		</ul>
		</div>
	

	<br>
	<br>
	<br>
	<br>
	<!--
	 <div>
	 <br>
	 <img class="back" src="images/bg-img-3.png" width="100%" height="200%" top="100px">
	 </div>
	 -->
	 
	
	<div class = "published_window">
	<form class="txtPublish" method="post" action="insert_form.php">
		
		<div class="col">
			<div class="col1">
			<label for="App name">App name:</label><br>
			<input type="text" name="AppName" class="publish_Inputbox" required> 
			</div>
			
			<div class="col2">
			<label for="App version">App version:</label><br>
			<input type="text" name="AppVersion" class="version_Inputbox" required><br><br>
			</div>
		</div>
		
		<label for="Description">Description:</label><br>&nbsp &nbsp
		<textarea rows="8" cols="50" maxlength="450" name="Description" class="publish_Descriptionbox" required></textarea><br><br>
		<label for="icon">Icon Link:</label><br><br>
		<input type="url" name="Icon" class="link_Inputbox" required><br><br>
		<label for="screenshots" >Screenshots Links:</label><br>&nbsp &nbsp
		
		<div class="col">
			<div class="col1">
			<input type="url" name="Screenshot1" class="link_Inputbox" required>
			</div>
			
			<div class="col2">
			<input type="url" name="Screenshot2" class="link_Inputbox" required>
			</div>
		</div>
		<br><br>
		<label for="APK file">APK Link:</label><br><br> 
		<input type="url" name="APKLink" class="link_Inputbox" required><br><br>
		<label for="Tags">Tags:</label><br>&nbsp &nbsp
		<input type="text" name="Tags" class="tags_Inputbox" required placeholder="Accept only 3 tags,Commas can be used to separate multiple values"><br><br>
		
		<label for="Size">Size:</label><br><br>
		
		<div class="size-unit ">
		<input type="number" name="Size" class="size_Inputbox" required min="0" max="10240">
		<span class="unit">Mb</span>
		</div>
		<br><br>
		
		<div class="col">
			<div class="col1">
			<label for="category">Category:</label>
			<br> 
			<div >
			<select name="Category" required >
			  <option value="Education">Education</option>
			  <option value="Entertainment">Entertainment</option>
			  <option value="Games">Games</option>
			  <option value="Lifestyle">Lifestyle</option>
			  <option value="Social">Social</option>
			  <option value="Photograpy">Photograpy</option>
			  <option value="Shopping">Shopping</option>
			  <option value="Art & Design">Art & Design</option>
			</select>
			</div>
			</div>
			 
		<!--<input type="radio"  name="appStatus" value="Free app" required>
		<label for="Free app">Free app</label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		<input type="radio" name="appStatus" value="Paid app" required>
		<label for="Paid app">Paid app</label><br><br><br><br>
		-->
			<div class="col2">
			<label for="Price">Price:</label>&nbsp &nbsp &nbsp &nbsp
			<input type="Number" name="Price" class="price_Inputbox" step="0.1" min="0.0" placeholder=" 0.0$"><br><br>
			</div>
		</div>
		
		<button class ="buttonSubmit" id ="publishBtn">Publish</button>
		<br>
	
	</form>
	</div>
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