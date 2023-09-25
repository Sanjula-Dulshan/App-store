<?php 
	include_once 'config.php';
	include_once 'userdetails.php';
?>

<?php 
	
	if(is_null($_GET)){
		
		$price = $_POST['buy'];
	}
	else{
		$AppName = "App Name";
		$price = 0;
	}
?>

<?php 


		
	if(!isset($_POST['buy'])){

		$chkq = "SELECT * FROM saved_cards WHERE username='$Username'";
		$cards = mysqli_query($con,$chkq);
		$numofcrd = mysqli_num_rows($cards);
		
		if($numofcrd>0){
			
			echo '<script type="text/JavaScript">  
							var r = confirm("Do you want pay with saved cards?");
							  if (r == true) {
								//if saved cards exist
								window.location.href ="saved.php";
							  } 
							</script>';
			
		}	
	}

	if(isset($_POST['submit'])){
		
		$crdNo = $_POST['crdNo'];
		$ex1 = $_POST['ex1'];
		$ex2 = $_POST['ex2'];
		$cvv = $_POST['cvv'];
		
		$sqlquery = "SELECT * FROM valid_cards";
		
		$result = mysqli_query($con,$sqlquery);
		$flag = 0;
		
		
		while($record = mysqli_fetch_assoc($result)){
			$tmp= $record['card_No'];
			if($crdNo==$tmp and $cvv==$record['CVV'] and $ex1==$record['Month'] and $ex2==$record['Year']){
				
				
				echo '<script type="text/JavaScript">  
						var r = confirm("Do you want to save this Card?");
						  if (r == true) {
							//alert("Card Saved!");
							//window.location.href = "https://storage.evozi.com/apk/dl/18/06/04/com.facebook.lite_250445075.apk";
						  } else {
							alert("Payment Succefull!");
								
							window.location.href = "https://storage.evozi.com/apk/dl/18/06/04/com.facebook.lite_250445075.apk";
						  }; 
						</script>';
				$flag = 1;
			}
		}
		if($flag==0){
			echo '<script type="text/JavaScript">  alert("This card is not valid!"); </script>';
			$flag = 0;
		}
		else{
			$insquery = "INSERT INTO saved_cards(username,Card_No,Month,Year,CVV) VALUES ('$Username',$crdNo,$ex1,$ex2,$cvv)";
			if(mysqli_query($con,$insquery)){
				echo '<script type="text/JavaScript">  alert("Card Saved!"); 
				window.location.href = "https://storage.evozi.com/apk/dl/18/06/04/com.facebook.lite_250445075.apk";
				</script>';
			}
			else{
				echo '<script type="text/JavaScript">  alert("Something went wrong!"); </script>';
			}
		}


	}
?>

<!DOCTYPE html>

<html>

<head>
	<title> HOME | Pay Now </title>
	<link rel="stylesheet" type="text/css" href="../css/style_yasantha.css">
	<script src="../js/slideshow.js" charset="utf-8"></script>
	<script src="../js/card.js" charset="utf-8"></script>
	<script src="../js/Query.js" charset="utf-8"></script>
	<!-- Search box scripts -->

	
	

	
</head>

<body id="pay"> 
	<?php
	include_once 'header.php';
?>
	
	<div class="content"> </div>
	<!-- SIDE BAR ***********-->
	<div id="sidebar">
		<ul>
			<li><a href="index.php"> Home </li></a>
			<li><a href="more.php"> Trending Apps </li></a>
			<li><a href="more.php"> New Apps </li></a>
			<li><a href = "more.php">More  </li></a>

		</ul>
	</div>
	<!--END OF SIDE BAR ************** -->	
	
	
	<!-- Card -->
	
	<form action="paymentForm.php" method="post">
	
	<div class="crdPay"> 
		<div class="card_number" id="card-container">
			<div id="crdIns">
				Card No
			</div>	
			<input type="text" class="input" placeholder="0000 0000 0000 0000" id='myText' name='crdNo' pattern="[0-9]{16}" required>
		</div>
		
			<div id="crdIns">
				Exp Date &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp CVV 
			</div>
			
			<div class="card_grp">
				<div class="expiry_date"> 
					<input type="text" class="expiry_input" placeholder="MM" id='ex1' name='ex1' pattern="[0-12]{2}" required> 
					<input type="text" class="expiry_input" placeholder="YY" id='ex2' name='ex2' pattern="[0-35]{2}" required> 
				</div>
				<div class="cvv"> 
					<input type="text" class="cvv_input" placeholder="000" id='cvv' name='cvv' pattern="[0-9]{3}" required> 
				</div>
			
				
			</div>
			<input type="submit" value="Pay Now" name="submit" class="btn">

		</form>
		
		
	</div>
	<?php
	$price = $_POST['buy'];
	?>
	<div class="checkout">
		<br>

		<br>
		<h3> Premium package </h3>
		<br>
		<h1> $ <?php echo $price ?> </h1>
		<br>
		<button>Checkout</button>
		</div>
	
	<!--END OF CARD -->
	
	
		
	 <!-- FOOTER ************** -->
	<div class="payment">
	 <div class="footer">
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
	</div>	
	 
	 
</body>
	
</html>