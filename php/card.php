<?php 
	include_once 'config.php';
	include_once 'userdetails.php';
?>

<?php
	$chkq = "SELECT * FROM saved_cards WHERE username='$Username'";
	$cards = mysqli_query($con,$chkq);
	$crd_details = mysqli_fetch_assoc($cards);
		
?>

<!DOCTYPE html>

<html>
<head> <link rel="stylesheet" type="text/css" href="../css/style_yasantha.css"> 
<script src="../js/Query.js" charset="utf-8"></script>
	
</head>

<body>

<form action="Updates.php?Action=2&Username=<?php echo $Username ?>&Card_No=<?php echo $crd_details['Card_No'] ?>" method="post">
	
	<div class="crdPay" style="position:relative; top:-600px;left:40%; 
	transform: translate(-50%,-50%);
	max-width:480px;
	width:100%;
	background-color:#D0D0D0;
	border-radius: 5px;
	padding:30px;
	font-family:'Arial';"> 
		<div class="card_number" id="card-container">
			<div id="crdIns">
				<h3>Nickname : <?php echo $crd_details['Nickname']?> </h3>
				<br>
				<input type="text" name='Nickname' value="<?php echo $crd_details['Nickname']?>">
				<br>
				<br>
				<input type = "submit" class="btn" value="Update Nickname" style="width:210px;background:#8080ff;">
				<br>
				<br>
			</div>
</form>			
			<div id="crdIns">
				Card No
			</div>	
			<h4> <?php echo $crd_details['Card_No'] ?> </h4>
			</div>
		
			<div id="crdIns">
				Exp Date &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp CVV 
			</div>
			
			<div class="card_grp">
				<div class="expiry_date"> 
					<h4><?php echo $crd_details['Month'] ?> / </h4>
					<h4><?php echo $crd_details['Year'] ?> </h4>
				</div>
				<div class="cvv"> 
					<h4><?php echo $crd_details['CVV'] ?></h4>
				</div>
			
				
			</div>
			<input type="submit" value="Pay Now" name="submit" class="btn">

	
		<br>
		<br>
		
		<a href="Updates.php?Action=1&Username=<?php echo $Username ?>&Card_No=<?php echo $crd_details['Card_No'] ?>"><div class="btn" style="width:460px; background:red;" > Delete </div> </a>
		
		
	</div>

</body>
</html>