<?php 
	include_once 'config.php';
	include_once 'userdetails.php';
?>

<?php 
	
	if(is_null($_GET)){
		$AppName = $_GET['App'];
		$price = $_GET['price'];
	}
	else{
		$AppName = "App Name";
		$price = 0;
	}
?>

<?php 


	if(isset($_POST['submit'])){
		
		$crdNo = $_POST['crdNo'];
		$ex1 = $_POST['ex1'];
		$ex2 = $_POST['ex2'];
		$cvv = $_POST['cvv'];
		
		$sqlquery = "SELECT * FROM valid_cards";
		
		$result = mysqli_query($con,$sqlquery);
		
		
		
		while($record = mysqli_fetch_assoc($result)){
			$tmp= $record['card_No'];
			if($crdNo==$tmp and $cvv==$record['CVV'] and $ex1==$record['Month'] and $ex2==$record['Year']){
				
				
				echo '<script type="text/JavaScript">  
						var r = confirm("Do you want to save this Card?");
						  if (r == true) {
							  
							alert("Card Saved!");
							window.location.href = "https://storage.evozi.com/apk/dl/18/06/04/com.facebook.lite_250445075.apk";
						  } else {
							////storage.evozi.com/apk/dl/18/06/04/com.facebook.lite_250445075.apk
						  }; 
						</script>';
				
			}
		}


	}
?>

<!DOCTYPE html>

<html>

<head>
	<title> HOME | Pay Now </title>
	<link rel="stylesheet" type="text/css" href="../css/style_yasantha">
	<script src="../js/slideshow.js" charset="utf-8"></script>
	<script src="../js/card.js" charset="utf-8"></script>
	<!-- Search box scripts -->

	
	

	
</head>

<body id="pay"> 
	<?php
	include_once 'header.php';
?>
	
	<div class="content"> </div>
	<!-- SIDE BAR ***********-->
	<div id="sidebar" style="height:130%">
		<ul>
			<li> My Apps</li>
			<li> Trending Apps </li>
			<li> New Apps </li>
			<li> More </li>

		</ul>
	</div>
	<!--END OF SIDE BAR ************** -->	
	
	
	<!-- Card -->
	
	
	<!--END OF CARD -->

	<?php 
		include 'card.php';

	?>
		
	 <!-- FOOTER ************** -->
	
	 <div class="footer" style="margin-top:-8%">
		<div class="footer-content">
			<div class="footer-section about">			
				<img class="logo" src="../images/LOGO-GREEN.png" alt="logo" width ="200px" height="60px">
				
				<p class="foot">
					SLIIT Apps Store is the best place for you to find and download latest applications and games. We provide all services related to apps.
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