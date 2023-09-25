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
			<li><a href="index.php"> Home</a> </li></a>
			<li> <a href="published.php">Add new app</a> </li></a>
			<li><a href="read_s.php"> Edit app</a> </li></a>
			<li> <a href="profile.php">Edit Profile </a></li></a>
			<li> <a href="more.php">My apps</a> </li></a>
			
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
	 <div class="appList">
	<?php
		include_once  'config.php';
		echo "<form method='post' action = update_delete.php>";
		 $sql = "SELECT * FROM app_information ";
		 $result = mysqli_query($con,$sql);
		 echo "<table rules='all' border = width = '100%'' style='font-weight:bold'>";
		 if($result)
		 {
		  while($row = mysqli_fetch_assoc($result))
		  {

					$appID = $row['App_ID'];
					$appname = $row['App_Name'];
					$version=$row['Curr_ver'];
					

					echo "
					
					<tr>
					   <td>$appname</td>
					    <td>$version</td>
						<!-- <td><input type = submit class ='buttonSubmit' name ='name' value='$appID'/>Edit</td>
						<td><input type = submit class ='buttonDelete' name ='$appID' value ='$appID'/>Delete</td> -->
						
						<td><button class ='buttonSubmit' name ='edit' value='$appID' onclick='$appID'>Edit</button></td>
						<td><button class ='buttonDelete' name ='delete' value ='$appID' onclick='$appID'>Delete </button></td>
					</tr>";
		   }
		 }
		echo"</table>";
	echo "</form>";
	?>
	 
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