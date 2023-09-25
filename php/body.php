 <div class="form3"> 
	 
	  <div style="text-align:left" class="form4"> <form action="#" method="POST"> <br> <br> <br> <br> 
      <h2><font color="#778899">&nbsp  &nbsp &nbsp &nbsp Profile Picture </font> </h2> <br>

	  <?php echo'<img  src="'.$row['Img'].'" width="250px" height="250px"> <br>';?>
	  
	  
	   </form> </div>
	 
	  
    <?php 
	  
	  // *** Display user details ***
	  // *** Used 'echo' to use html codes inside php ***
	  
     echo'<h1>My Profile</h1> <br>                                                 
	  <form class="txt1" action="update.php"  method="POST">
	      
		  First Name   <br> 
		  <input type="text" name="name1"  id="name1" class="boxprofile" value="'.$row['F_Name'].'">  <br> <br> 
		
		  Last Name   <br> 
		   <input type="text" name="name2" id="name2" class="boxprofile" value="'.$row['L_Name'].'">  <br> <br> 
		  
		  Username   <br> 
		  <input type="text" name="uname" id="uname" class="boxprofile" value="'.$row['Username'].'" disabled>  <br> <br>  
		  
		  Email  <br> 
		  <input type="text" name="email" id="email" class="boxprofile" value="'.$row['Email'].'">  <br> <br> 
		  
		  Birthday  <br> 
		 <input type="date" name="bdate" id="bdate" class="boxprofile"  value="'.$row['DOB'].'">   <br> <br> 
		 
		  Mobile Number  <br> 
		 <input type="text" name="mnumb" id="mnumb" class="boxprofile" pattern="[0-9]{10}" title="Please Enter Valid Number With 10 Digits" value="'.$row['M_No'].'">   <br> <br>';
	    ?>
		  
	     
		    <button name="btnchange1" id="btnchange1" onclick="return pw1()">Change Password </button> <br> 
		   
		    <input type="password" class="border1" name="pwd3" id="pwd3" placeholder="Enter Current Password" required disabled> <br>
			
		    <input type="password" class="border1" name="pwd1" id="pwd1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
		    title="Must contain at least one digit, one uppercase character one lowercase character and at least 8 characters" placeholder="Enter New Password" required disabled>  &nbsp 
		   
		    <input type="password" class="border1" name="pwd2" id="pwd2" placeholder="Re-Enter Password" required disabled> <br> <br> 
			
			 <input type="submit" name="save" id="save" class="save" value="Save" onclick="return checkPassword()">
			 
		   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <a href="profile.php"> <input type="button" name="cancel" id="cancel" class="save" value="Cancel"> </button></a> 
			  
		    </form>
	 </div>
	
      <!-- SIDE BAR *****-->
	  <?php                                                                             // *** Identify acc type of user according to session ***
	   $user = $_SESSION['session'];
	   $sql = "SELECT Acc_type from user_details where username='$user'";
	   $result = $con->query($sql);
	   $row = $result->fetch_assoc();
	   
	   $type = $row['Acc_type'];
	 
	 ?>
	        
			 <!-- Show relavent content for accont type -->
			<?php 
			// *** Loading content for Admin ***
			 if(($type =='ADMIN')||($type=='Admin')||($type=='admin'))
			{
				echo'
				 <div id="sidebar">
		         <ul>
		    
			   <li> <a href="profile.php"><font color="green" size="5px"><b>Edit Profile </b></font></a> </li> 
			   <li> <a href="more.php">My Apps </a> </li>
			   <li> <a href="#">Add Payment Methods </a> </li>
			   <li> <a href="delete.php" name="del" id="del">Delete Account </a> </li> </ul>	
		       <li><a href="published.php" name="adm" id="adm">Goto Admin Page </a> </li></div>';   //*** Enter admin page's url ***
			
			}
			
			///*** Loading content for Developer ***
			elseif(($type =='DEVELOPER')||($type=='Developer')||($type=='developer'))
			{
				echo'
			   <div id="sidebar">
		       <ul>
		    
			  <li> <a href="#"><font color="green" size="5px"><b>Edit Profile </b></font></a> </li> 
			  <li> <a href="more.php">My Apps </a> </li>
			  <li> <a href="#">Add Payment Methods </a> </li>
			  <li> <a href="delete.php" name="del" id="del">Delete Account </a> </li> </ul>	
		      <li><a href="published.php" name="adm" id="adm">Goto Developer Page </a> </li></div>';   //*** Enter developer page's url ***
			
			}
			///*** Loading content for General User ***
			else{
			   
			   echo'
               <div id="sidebar">
		       <ul>			   
			  <li> <a href="#"><font color="green" size="5px"><b>Edit Profile </b></font></a> </li> 
			  <li> <a href="more.php">My Apps </a> </li>
			  <li> <a href="#">Add Payment Methods </a> </li>
			  <li> <a href="delete.php" name="del" id="del">Delete Account </a> </li> </ul> </div>';
			}
			
		
		
		
	
	 
	 

	 