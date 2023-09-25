<?php
  session_start();
?>

<header>
<img class="logo" src="../images/LOGO-GREEN.png" alt="logo" width ="200px" height="60px"> 
  <nav>
     <ul class="nav_links">
				<li><a href="index.php">Home </a></li>
				<li><a href="more.php">Games</a></li>
				<li><a href="more.php">Apps</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Contact Us</a></li>
				
				<div class="topnav">                                                               <!--Searchbar-->
				<form method="post" action="search.php">
                <input type="text" name="srch" class ="searchBar" placeholder="Search..">
				<input type="submit" class ="searchButton" name="search"  value="Search"> </form>
                </div>
		</ul>	
  </nav>	
	<?php
	   if(isset($_SESSION['session']))
	   {
		   $uname=$_SESSION['session'];
		   include_once('config.php');
		   $sql = "SELECT * FROM user_details where username='$uname'";
		   $result = $con->query($sql);
		   $row = $result->fetch_assoc();
		  echo'
		   <div>
		  <a class="cta" href="logout.php"> <button> Log Out </button> </a>
		  </div> &nbsp &nbsp &nbsp 
		  
		  <div>
		  <a class="nav_links" href="profile.php"> <font size="5px" color="orange"> '.$row['F_Name'].'</font> </a>
		 </div>  
		 
		<div>
		<a href="profile.php">
	   <img class="propic" src="'.$row['Img'].'" alt="logo" width ="50px" height="50px"></a>
		</div>
		  ';
		   
	   }
	  
		
		else{
		 echo'	
		 <div>
		<a class="cta" href="login.php"><button> Sign in </button></a>
		</div>
		<div>
		<a href="profile.php">
		<img class="propic" src="../images/default-profile.png" alt="logo" width ="50px" height="50px"></a>
		</div>';
		}
	
	?>
	</header>