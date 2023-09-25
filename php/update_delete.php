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
			<li><a href="index.php"> Home </li></a>
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
	 <?php
		include_once  'config.php';
		
		if (isset($_POST['edit'])) {
		$val = $_POST['edit'];
		$sql = "SELECT * FROM `app_information` WHERE App_ID = $val";
		$result = mysqli_query($con,$sql);
		$r =  mysqli_fetch_assoc($result);
					$appID = $r['App_ID'];
					$appname = $r['App_Name'];
					$version = $r['Curr_ver'];
					$description = $r['Description'];
					$icon = $r['Icon_Link'];
					$ss1 = $r['Screenshot1'];
					$ss2 = $r['Screenshot2'];
					$apk = $r['Apk_Link'];
					$cid = $r['C_ID'];
					$price = $r['Price'];
					$tags = $r['Tags'];
					$size = $r['Size'];
	 
	echo "
	<div class = 'published_window'>
	<form class='txtPublish' method='post' action='update_form.php'>
		
		<div class='col'>
			<div class='col1'>
			<label for='App name'>App name:</label><br>
			<input type='text' name='AppName' class='publish_Inputbox' required value = '$appname'> 
			</div>
			
			<div class='col2'>
			<label for='App version'>App version:</label><br>
			<input type='text' name='AppVersion' class='version_Inputbox' required value = '$version'><br><br>
			</div>
		</div>
		
		<label for='Description'>Description:</label><br>&nbsp &nbsp
		<textarea rows='8' cols='50' maxlength='450' name='Description' class='publish_Descriptionbox' required >$description</textarea><br><br>
		<label for='icon'>Icon Link:</label><br><br>
		<input type='text' name='Icon' class='link_Inputbox' required value ='$icon'><br><br>
		<label for='screenshots' >Screenshots Links:</label><br>&nbsp &nbsp
		
		<div class='col'>
			<div class='col1'>
			<input type='text' name='Screenshot1' class='link_Inputbox' required value='$ss1'>
			</div>
			
			<div class='col2'>
			<input type='text' name='Screenshot2' class='link_Inputbox' required value='$ss2'>
			</div>
		</div>
		<br><br>
		<label for='APK file'>APK Link:</label><br><br> 
		<input type='text' name='APKLink' class='link_Inputbox' required value = '$apk '><br><br>
		<label for='Tags'>Tags:</label><br>&nbsp &nbsp
		<input type='text' name='Tags' class='tags_Inputbox' required value ='$tags ' placeholder='Accept only 3 tags,Commas can be used to separate multiple values'><br><br>
		
		<label for='Size'>Size:</label><br><br>
		
		<div class='size-unit '>
		<input type='number' name='Size' class='size_Inputbox' value ='$size' required min='0' max='10240'>
		<span class='unit'>Mb</span>
		</div>
		<br><br>
		
		<div class='col'>
			<div class='col1'>
			<label for='category'>Category:</label>
			<br> 
			<div >";
			$check = $cid;
			echo $check;
			switch($check){
				case "Education";
					echo"
					<select name='Category' required>
					  <option value='Education' selected>Education</option>
					  <option value='Entertainment'>Entertainment</option>
					  <option value='Games'>Games</option>
					  <option value='Lifestyle'>Lifestyle</option>
					  <option value='Social'>Social</option>
					  <option value='Photograpy'>Photograpy</option>
					  <option value='Shopping'>Shopping</option>
					  <option value='Art & Design'>Art & Design</option>
					</select>";
					break;
					
				case "Entertainment";
					echo"
					<select name='Category' required>
					  <option value='Education' >Education</option>
					  <option value='Entertainment' selected>Entertainment</option>
					  <option value='Games'>Games</option>
					  <option value='Lifestyle'>Lifestyle</option>
					  <option value='Social'>Social</option>
					  <option value='Photograpy'>Photograpy</option>
					  <option value='Shopping'>Shopping</option>
					  <option value='Art & Design'>Art & Design</option>
					</select>";
					break;
					
				case "Games";
					echo"
					<select name='Category' required>
					  <option value='Education' >Education</option>
					  <option value='Entertainment'>Entertainment</option>
					  <option value='Games' selected>Games</option>
					  <option value='Lifestyle'>Lifestyle</option>
					  <option value='Social'>Social</option>
					  <option value='Photograpy'>Photograpy</option>
					  <option value='Shopping'>Shopping</option>
					  <option value='Art & Design'>Art & Design</option>
					</select>";
					break;
					
				case "Lifestyle";
					echo"
					<select name='Category' required>
					  <option value='Education' >Education</option>
					  <option value='Entertainment'>Entertainment</option>
					  <option value='Games'>Games</option>
					  <option value='Lifestyle' selected>Lifestyle</option>
					  <option value='Social'>Social</option>
					  <option value='Photograpy'>Photograpy</option>
					  <option value='Shopping'>Shopping</option>
					  <option value='Art & Design'>Art & Design</option>
					</select>";
					break;
					
				case "Social";
					echo"
					<select name='Category' required>
					  <option value='Education' >Education</option>
					  <option value='Entertainment'>Entertainment</option>
					  <option value='Games'>Games</option>
					  <option value='Lifestyle'>Lifestyle</option>
					  <option value='Social' selected>Social</option>
					  <option value='Photograpy'>Photograpy</option>
					  <option value='Shopping'>Shopping</option>
					  <option value='Art & Design'>Art & Design</option>
					</select>";
					break;

				case "Photograpy";
					echo"
					<select name='Category' required>
					  <option value='Education' >Education</option>
					  <option value='Entertainment'>Entertainment</option>
					  <option value='Games'>Games</option>
					  <option value='Lifestyle'>Lifestyle</option>
					  <option value='Social'>Social</option>
					  <option value='Photograpy' selected>Photograpy</option>
					  <option value='Shopping'>Shopping</option>
					  <option value='Art & Design'>Art & Design</option>
					</select>";
					break;
					
				case "Shopping";
					echo"
					<select name='Category' required>
					  <option value='Education' >Education</option>
					  <option value='Entertainment' >Entertainment</option>
					  <option value='Games'>Games</option>
					  <option value='Lifestyle'>Lifestyle</option>
					  <option value='Social'>Social</option>
					  <option value='Photograpy'>Photograpy</option>
					  <option value='Shopping' selected>Shopping</option>
					  <option value='Art & Design'>Art & Design</option>
					</select>";
					break;
					
				case "Art & Design";
					echo"
					<select name='Category' required>
					  <option value='Education' >Education</option>
					  <option value='Entertainment'>Entertainment</option>
					  <option value='Games' >Games</option>
					  <option value='Lifestyle'>Lifestyle</option>
					  <option value='Social'>Social</option>
					  <option value='Photograpy'>Photograpy</option>
					  <option value='Shopping'>Shopping</option>
					  <option value='Art & Design' selected>Art & Design</option>
					</select>";
					break;
			}
			echo"
			</div>
			</div>
			
			<div class='col2'>
			<label for='Price'>Price:</label>&nbsp &nbsp &nbsp &nbsp
			<input type='Number' name='Price' class='price_Inputbox' step='0.1' min='0.0' value ='$price' placeholder=' 0.0$'><br><br>
			</div>
		</div>
		<button class ='buttonSubmit' name ='update' value='$val' onclick='$val'>Update</button>
		<!-- <button class ='buttonSubmit' id ='publishBtn'></button> -->
		<br>
	
	</form>
	</div>
	</div>";
		} else if (isset($_POST['delete'])) {
			include_once  'config.php';

			$val = $_POST['delete'];
			 
			$query = "DELETE FROM app_information WHERE App_ID = $val";
			$result = mysqli_query($con,$query);
			if($result)
			{
				echo "<script>alert('Delete successfully');
						location.replace('read_s.php');
					</script>";

			}
			else
			{
				echo "<script>alert('Delete failed: $result');
				location.replace('read_s.php');
				</script>";
				header("read_s.php");
				exit();
			}
		}
		
		/*$appid = $_POST["name"];
		$dele = $_POST['name'];
		echo "($dele)";*/
		
		
		
	?>
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