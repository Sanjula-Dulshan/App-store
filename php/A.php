<!DOCTYPE html>

<html>

<head>
	<title> Review | SLIIT App Store</title>
	<link rel="stylesheet" type="text/css" href="../css/style1.css">
	<script src="../js/web.js"></script>

</head>

<body> 

<?php 
	  include('header.php');
	
	?>

	<div class="content">
	
<div id="sidebarR">
		<ul>
		
		<li><a href="index.php"> Home </li>
		<li><a href="more.php">Trending Apps </li>
		<li><a href="more.php">New Apps </li>
		<li><a href = "more.php">More  </li>
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

<div class="wrapperReview">
<div class="app_name">
<div class="container">

    <img src="../images\coc.png" style="width:10%">
    <div>
        <h3>  &nbsp &nbsp  Clash Of Clans  </h3>
		
        <br><br><br>  
         <button  class="btn" style="width:100%"><i class="fa fa-download"></i> Download</button>
		
		
    </div>
</div>

<br><br>

<div class="scrollmenu">

<div class="row">
  <div class="column">
    <img src="../images\x.jpg" alt="coc" style="width: 100%">
  </div>
  <div class="column">
    <img src="../images\p.jpg" alt="coc" style="width:100%">
  </div>
  <div class="column">
    <img src="../images\a.jpg" alt="coc" style="width:100%">
  </div>
    <div class="column">
    <img src="../images\zz.jpg" alt="coc" style="width:100%">
  </div>
  
</div>
</div>
<br>
<p><b>The description of Clash Of Clans</b></p>
<p>Join millions of players worldwide as you build your village, raise a clan, and compete in epic Clan Wars!

Mustachioed Barbarians, fire wielding Wizards, and other unique troops are waiting for you! Enter the world of Clash!

<br>
<b><i>New Features:</i></b>
<br>
● Upgrade to the brand new Town Hall 13 and devastate your foes with the Giga Inferno!
<br>
● An all-new Hero, the Royal Champion, joins your army with her trusty spear and crushing Seeking Shield!
<br>
● Feel the furry-ous might of the newest troop, the Yeti and the horde-breaking defense, the Scattershot.
<span id="dots">...</span><span id="more">
<br>
<b><i>Classic Features:</i></b>
<br>
● Join a Clan of fellow players or start your own and invite friends.
<br>
● Fight in Clan Wars as a team against other players across the globe.
<br>
● Test your skills in the competitive Clan War Leagues and prove you’re the best.
<br>
● Work together with your clan in Clan Games to earn valuable Magic Items
<br>
● Defend your village with a multitude of cannons, bombs, traps, mortars, and walls.
<br>
● Fight against the Goblin King in a campaign through the realm.
<br>
● Plan unique battle strategies with countless combinations of spells, troops, and Heroes!
<br>
● Friendly Challenges, Friendly Wars, and special events.
<br>
● Train unique troops with multiple levels of upgrades.
<br>
● Journey to the Builder Base and discover new buildings and characters in a mysterious world.
<br>
<br>
<b>PLEASE NOTE!</b> <br> Clash of Clans is free to download and play, however, some game items can also be purchased for real money. If you don't want to use this feature, please disable in-app purchases in your device's settings. Also, under our Terms of Service and Privacy Policy, you must be at least 13 years of age to play or download Clash of Clans.
<br>
A network connection is also required.

</span>
</p>
<button onclick="myFunction()" id="myBtn">Read more</button>

<br>
<br>
<br>
<br>

<img src="../images\ava.jpg" alt="Avatar" class="avatar">
<br>
<p><b>I have been playing COC for about 6 years. It is the only game that has ever held my interest this long.</b></p>
<br>
<br>
<br>

<img src="../images\q.jpg" alt="Avatar" class="avatar">
<br>
<p><b>Great game! I'm having fun building my town and playing together with my friends! I enjoy the characters and the development of the characters</b></p>
<br>
<br>
<br>

<img src="../images\k.jpg" alt="Avatar" class="avatar">
<br>
<p><b>it is one of the best strategy game for all whole the world. 
I play coc most of time everyday,, but after looking some bad reviews ,I want say something to that person who is blaming that ,
this game is just waste of money and time ,
this is one of the best 💯 percent ads free game in the world , 
and one of the best strategy based game ever.
<br>
<br>
<br>
<br>
<br>
<br>


<div>
<?php
	   if(isset($_SESSION['session']))
	   {
		   $uname=$_SESSION['session'];
		   include_once('config.php');
		   $sql = "SELECT * FROM user_details where username='$uname'";
		   $result = $con->query($sql);
		   $row = $result->fetch_assoc();
		   
		   $sql1 = "SELECT * FROM reviews where username='$uname' AND App_ID='1'";
		   $result1 = $con->query($sql1);
		   $row1 = $result1->fetch_assoc();
		   
		   $type = $row['Acc_type'];
		   $feedbackShow = $row1['Feedback'];
		   if(($type =='General')||($type=='Genaral')||($type=='genaral'))
			{
		      echo"
<form class='#' action='crud.php'  method='POST'>

<h2><font color='black'>Enter your Feedback</font></h2>
<br>
<br>

<textarea class='feedbacktext' rows='8' cols='50' maxlength='450' name='feedback'>$feedbackShow</textarea><br><br>
<br>
<br>

<input type='submit' class='addfeedbackButton' name='add'  value='Add Feeedback'> 

<input type='submit' class='editfeedbackButton' name='edit'  value='Edit Feedback'> 

<input type='submit' class='delfeedbackButton' name='delete'  value='Delete Feedback'> 
</form>
</div>";
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