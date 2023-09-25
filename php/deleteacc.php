<?php 
	  if(isset($_POST['del']))
		  
	 { 
		  include('config.php'); 
		  session_start();
		  
		   $pwd = $_POST['passwd']; 
        
           $sql = "select Psw from user_details where username ='$_SESSION[session]'";
           $result= $con->query($sql);
		   $row = $result -> fetch_assoc();
		  
		   $encpwd = password_verify($pwd,$row['Psw']);		// *** Get boolean value ***
		  
		  if($encpwd == true)
		  {
			 $sql1= "delete from user_details where username ='$_SESSION[session]'"; 
			  
		   $con->query($sql1);
		   ?>
			 <script>alert('Account Deleted Successfully');                    //*** JS part to give message ***
			 document.location='signup.php'
			 </script>
			 <?php 
		  }
		  else{
			  ?>
			 <script>alert('Enter correct password to delete account');                    //*** JS part to give message ***
			 document.location='delete.php'
			 </script>
			 <?php 
		  }

		  	  
	 }
	 
	 else{
		 
		 header("location: login.php?Error!!!");  
	 }
	$con->close();        //*** Close connection with DB ***
	?>