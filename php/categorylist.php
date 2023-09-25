<?php
	include("config.php");
	$result= mysqli_query($con,"SELECT * from categorylist ORDER by C_ID ");
?>

<!DOCTYPE html>

<html>

<head>
	<title> Category List</title>
	<link rel="stylesheet" type="text/css" href="../css/style_dulakshi.css">
	<link rel="stylesheet" type="text/css" href="../css/categoryliststyle.css">
	<script type="text/javascript" src="../js/MyScript_dulakshi.js"></script>
	
</head>

<body> 
	<?php 
	  include('header.php');
	
	?>
	
	<div class="content">
	
	<!-- SIDE BAR *******-->
	<div id = "sidebar">
	<ul>
		<li><a href="index.php"> Home </li></a>
		<li><a href="more.php">Trending Apps </li></a>
		<li><a href="more.php">New Apps </li></a>
		<li><a href = "more.php">More  </li></a>
		</ul>
	</div>
		
	<h2 class="catlist">App Categories<h2><br><br>
	
	<?php
		if(isset($_POST['search']))
		{
			$searchKey = $_POST['search'];
			$sql = "SELECT *FROM categorylist WHERE C_ID LIKE '%$searchKey%'";
		}
		else{
			$sql="SELECT *FROM categorylist";
			$searchKey = "";
		}
		$result=mysqli_query($con,$sql);
	?>
	
		
	
		<div class="productData" id="tbl" style = "overflow: auto; border:1px ; background-color:transparent; width:700px; height:250px; color:black;text-align:center; padding:10px;">
		
		<!--search box-->
		<div class="searchbox" style="padding:10px;">
		<form class="example" action="" method="POST" style="margin:auto; max-width:400px">
		<input type="text" placeholder="Search C_ID Here.." name="search">
		<button type="submit" value="<?php echo $searchKey; ?>" >Search </button>
		</form>
		</div>
		<!--search box-->
		
		<table border="1" width="90%">
			<tr><th>C_ID</th><th>Category_Name</th></tr>
			
			<?php
				while($res=mysqli_fetch_array($result)){
					echo '<tr>';
					echo '<td>'.$res['C_ID'].'</td>';
					echo '<td>'.$res['Category_Name'].'</td>';
					echo '</tr>';
			}
			?>
			
		</table>
		</div><br>
		
		<div class="form"> 
		<div><form action="update_dulakshi.php" target="_blank" method="POST" onsubmit="test()">
		<input type="text" name="C_ID" placeholder="Enter cat_ID" size="10px">
		<input type="text" name="Category_Name" placeholder="Enter category name">
		<input type="text" name="No_Of_Apps" placeholder="Apps" size="5px">
		<input type="text" name="Cat_Description" placeholder="Enter category description">
		<button name="update1" type="submit" value="update" class="fbtn" onclick="myFunction1()">UPDATE</button></form><br><br></div>
		
		<div><form action="insert_dulakshi.php" target="_blank" method="POST" onsubmit="test()">
		<input type="text" name="C_ID" placeholder="Enter cat_ID" size="10px">
		<input type="text" name="Category_Name" placeholder="Enter category name">
		<input type="text" name="No_Of_Apps" placeholder="Apps" size="5px">
		<input type="text" name="Cat_Description" placeholder="Enter category description">
		<button  type="submit" value="Insert" class="fbtn" onclick="myFunction2()" >ADD NEW</button></form><br><br></div>
		
		<div><form action="delete_dulakshi.php" target="_blank" method="POST" onsubmit="test()">
		<input type="text" name="C_ID" placeholder="Enter cat_ID" size="10px">
		<input type="text" name="Category_Name" placeholder="Enter category name">
		<button name="delet" type="submit" value="delete" class="fbtn" onclick="myFunction3()">DELETE</button><br><br></div>
		
		<input type="checkbox" name="chkTerms" onchange="AcceptTerms"> Accept privacy policy and Terms<br>
	
		
		</form>
		</div>
		

	 <!-- FOOTER ************** -->
	 <br>
	 <div class="footer">
		<div class="footer-content">
			<div class="footer-section about">			
				<img class="logo" src="../images/logo-blue.png" alt="logo" width ="200px" height="60px">
				
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