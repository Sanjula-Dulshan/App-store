<!DOCTYPE html>

<html>

<head>
	<title> HOME | SLIIT App Store</title>
	<link rel="stylesheet" type="text/css" href="../css/style_yasantha.css">
	<script src="../js/slideshow.js" charset="utf-8"></script>
	<!-- Search box scripts -->

	<script src="https://kit.fontawesome.com/b99e675b6e.js" charset="utf-8"></script>
	<script src="../js/searchbox.js" charset="utf-8"></script>

	
	
	
	<script>
		$(document).ready(function(){
			$(".default_option").click(function(){
				$(".dropdown ul").toggleClass("active");
			});
			
			$(".dropdown ul li").click(function(){
				var text = $(this).text();
				$(".default_option").text(text);
				$(".dropdown ul").removeClass("active");
			})
			
		});
	</script>
	
	<link rel = "icon" href =  "images/header-logo.png" type = "image/x-icon"> 
	
</head>

<body> 
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
			<li><a href="more.php"> More </li></a>

		</ul>
	</div>
	<!--END OF SIDE BAR ************** -->	
	
	<!-- Search Box
	
	<div class="sBox">
		<div class="search_box">
			<div class="dropdown">
				<div class="default_option">All Apps </div>
				<ul>
					<li>All Apps </li>
					<li>Games </li>
					<li>Applications </li>
				</ul>
				
			</div>
			<div class="search_field">
				<input type="text" class="input" placeholder="Search">
				<i class="fas fa-search"></i>
			</div>
		</div>	
	
	</div>
	
	End of Search Box -->
	
	<!-- SLIDE SHOW -->
	
	<div class="slider">
		<div class="slides">
		
			
			<input type="radio" name="radio-btn" id="radio1">
			<input type="radio" name="radio-btn" id="radio2">
			<input type="radio" name="radio-btn" id="radio3">
			<input type="radio" name="radio-btn" id="radio4">
		
			
			
			<div class="slide first">
				<img src="../images/slides1.jpg">
			</div>
			
			<div class="slide">
				<img src="../images/slides2.jpg">
			</div>
			
			<div class="slide">
				<img src="../images/slides3.jpg">
			</div>
			
			<div class="slide">
				<img src="../images/slides4.jpg">
			</div>
			
			<div class="navigation-auto">
				<div class="auto-btn1"></div>
				<div class="auto-btn2"></div>
				<div class="auto-btn3"></div>
				<div class="auto-btn4"></div>
			</div>
			
		</div>
		
		<div class="navigation-manual">
			<label for="radio1" class="manual-btn"></label>
			<label for="radio2" class="manual-btn"></label>
			<label for="radio3" class="manual-btn"></label>
			<label for="radio4" class="manual-btn"></label>
		</div>
		 
		 <script type="text/javascript">
			var counter=1;
			setInterval(function(){
				document.getElementById('radio'+counter).checked = true;
				counter++;
				if(counter>4){
					counter=1;
				}
			},5000);
		</script>	
		 
	</div>
	
	<div class="adbanner"> 
		
	</div>
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
	

	
	<!-- Start of categories -->
	
	<!-- games -->
	
	<h2 class="cname1"> Games </h2>
	<br>
	<div class="AppGrid">
		<div class="appSlot"><img src="../images/Game-COD.jpg">
		<h2>Call of Duty</h2>
		<br>
		<button>Download</button>
		</div>
		
		<div class="appSlot"><img src="../images/Game-NFS.jpeg">
		<h2>Need for Speed</h2> <br>
		<button>Download</button>
		</div>
		
		<div class="appSlot"><img src="../images/Game-Candy.png">
		<h2>Candy Crush</h2>
		<br>
		<button>Download</button>
		</div>
		
		<div class="appSlot"><img src="../images/Game-Temple.png">
		<h2>Temple Run</h2>
		<br>
		<button>Download</button>
		</div>
		
		<div class="appSlot"><img src="../images/Game-Sub.png">
		<h2>Subway Surf</h2>
		<br>
		<button>Download</button>
		</div>
     
	</div>
	
	<!-- End of Games -->
	
	<!-- Start of APPS -->
	
	<h2 class="cname1"> Applications </h2>
	<br>
	<div class="AppGrid">
		<div class="appSlot"><img src="../images/Apps-Uc.jpg">
		<h2>UC Browser</h2>
		<br>
		<button>Download</button>
		</div>
		
		<div class="appSlot"><img src="../images/Apps-Zoom.png">
		<h2>ZOOM</h2> <br>
		<button>Download</button>
		</div>
		
		<div class="appSlot"><img src="../images/Apps-Whatsapp.png">
		<h2>Whatsapp</h2>
		<br>
		<button>Download</button>
		</div>
		
		<div class="appSlot"><img src="../images/Apps-Facebook.png">
		<h2>Facebook</h2>
		<br>
		<button>Download</button>
		</div>
		
		<div class="appSlot"><img src="../images/Apps-Picsart.png">
		<h2>Pics Art</h2>
		<br>
		<button>Download</button>
		</div>
     
	</div>
	
	

	
	<!-- End of Apps -->
	
		
	 <!-- FOOTER ************** -->
	
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
		
	 
	 
</body>
	
</html>