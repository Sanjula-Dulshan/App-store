<!DOCTYPE html>

<html>

<head>
	<title> Review | SLIIT App Store</title>
	<link rel="stylesheet" type="text/css" href="../css/style_dilsha.css">
	<script src="../js/web.js"></script>
</head>

<body> 

<?php 
	  include('header.php');
	
	?>

	<div class="content">
	
<div id="sidebarR">
		<ul>
		
			<li><a href="index.php"> Home </li></a>
			<li><a href="more.php"> Trending Apps </li></a>
			<li><a href="more.php"> New Apps </li></a>
			<li><a href="more.php"> More </li></a>
		</ul>
	</div>
	
	<!--
	 <div>
	 <br>
	 <img class="back" src="images/bg-img-3.png" width="100%" height="200%" top="100px">
	 </div>
	 --> 

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
	<?php
	include('config.php');
	
	$search = $_POST['srch'];
	
	$db = "SELECT * FROM app_information WHERE Tags LIKE '%$search%'";
	$result = mysqli_query($con,$db);
	
	if(mysqli_num_rows($result)!= 0)
	{
	$r =  mysqli_fetch_assoc($result);
	
			$AppID = $r['App_ID'];
			$AppName = $r['App_Name'];
			$Version = $r['Curr_ver'];
			$Description = $r['Description'];
			$IconLink = $r['Icon_Link'];
			$Screenshot1 = $r['Screenshot1'];
			$Screenshot2 = $r['Screenshot2'];
			$ApkLink = $r['Apk_Link'];
			$CID = $r['C_ID'];
			$Price = $r['Price'];
			$Tags = $r['Tags'];
			$Size = $r['Size'];
			$status = 0;
	
echo "
<div class='wrapperReview'>
<div class='app_name'>
<div class='container'>

    <img src= '$IconLink' style='width:10%'>
    <div>
        <h3 class='name'>  &nbsp &nbsp  $AppName  </h3>
		
        <br><br><br>";
		if($Price == 0)
			{
				echo"
				 <form action='$ApkLink'>
				 <button type = 'submit' class='btn' style='width:100%'><i class='fa fa-download'></i> Download</button>
			  </form>";
			}
			 else
			 {
				 
					 
				 echo"
				 <form action='paymentForm.php'  method='POST'>
				 <button class='btn' name ='buy' value='$Price' onclick='$Price'>$Price$ Buy</button>
				 </form>";
			 }	
         
		
	echo"	
    </div>
</div>

<br><br>

<div class='scrollmenu'>

<div class='row'>
  <div class='column'>
    <img src='$Screenshot1' style='width: 50%'>
  </div>
  <div class='column'>
    <img src='$Screenshot2' style='width:50%'>
  </div>
  
</div>
</div>
<br>
<br>
 <b><p class = 'des'>The description of $AppName</p></b><br><br>

<p> $Description </p>
<br>
<br>
<br>
<br>

";
	echo"<div class = 'feedbackWindow'>";
	 $feedbackSql = "SELECT * FROM reviews WHERE App_ID = $AppID";
	 $feedbackResult = mysqli_query($con,$feedbackSql);
	 if($feedbackResult)
	 {
	  while($feedbackRow = mysqli_fetch_assoc($feedbackResult))
	  {

				$feedbackUser = $feedbackRow['Username'];
				$feedbackTxt = $feedbackRow['Feedback'];
				

				echo "
				<img src='../images\ava.jpg'  class='avatar'> <label class='feedbacklbl'><b>$feedbackUser</b></label>
				<br>
				<p><label class='feedback'> $feedbackTxt </label></p>
				<br>
				<br>";
	   }
	 }
	echo"</div>";
}
else
{
	echo "There is no data found";
	$status = 1;
}
?>

<div>
<?php
	if($status != 1)
	{
	   if(isset($_SESSION['session']))
	   {
		   $uname=$_SESSION['session'];
		   include_once('config.php');
		   $sql = "SELECT * FROM user_details where username='$uname'";
		   $result = $con->query($sql);
		   $row = $result->fetch_assoc();
		   
		   $sql1 = "SELECT * FROM reviews where username='$uname' AND App_ID='$AppID'";
		   $result1 = $con->query($sql1);
		   $row1 = $result1->fetch_assoc();
		   
		   $type = $row['Acc_type'];
		   $feedbackShow = $row1['Feedback'];
		   if(($type =='General')||($type=='Genaral')||($type=='genaral'))
			{
		      echo"
<form class='#' action='crud.php'  method='POST'>
<br>
<br>
<br>
<br>
<h2><font color='black'>Enter your Feedback</font></h2>
<br>
<br>

<textarea class='feedbacktext' rows='8' cols='50' maxlength='450' name='feedback'>$feedbackShow</textarea><br><br>
<br>
<br>

<button class ='addfeedbackButton' name ='add' value='$AppID' onclick='$AppID'>Add Feeedback</button>
<button class ='addfeedbackButton' name ='edit' value='$AppID' onclick='$AppID'>Edit Feedback</button>
<button class ='addfeedbackButton' name ='delete' value='$AppID' onclick='$AppID'>Delete Feedback</button>

</form>
</div>";
} 

}
	} ?>

	
</div>
</div>
</div>

</br>
</br>
</br>
 
	 <!-- FOOTER ************** -->
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