<?php
  
    if(isset($_POST['save']))
	  {  
          include('config.php'); 
		  session_start();
		                                          
	      $fname = $_POST['name1'];   
          $lname = $_POST['name2'];
          $pwd3  = $_POST['pwd3'];
		  $pwd1  = $_POST['pwd1'];
		  $pwd2  = $_POST['pwd2'];
          $email = $_POST['email'];
          $mobile= $_POST['mnumb'];
		  $dob  =  $_POST['bdate'];
		  
		   $sql1 = "select username,Psw from user_details where username ='$_SESSION[session]'";
           $result1= $con->query($sql1);
		   $row1 = $result1 -> fetch_assoc();
		  
		  $encpwd = password_verify($pwd3,$row1['Psw']);    // *** Get boolean value ***
		  
		  if(empty($pwd3)||empty($pwd1)||empty($pwd3)) { 		  

	      $sql= " update user_details SET
		              F_Name='$fname',   
                      L_Name='$lname',
                      Email='$email',
                      DOB= '$dob',
		              M_No='$mobile'
					  
					  where username='$_SESSION[session]'";

          $con->query($sql);
		  header("location: login.php");                  // *** Should redirect to homepage ***   
		  
		  } 
		  
           elseif(($encpwd == true)&&($pwd1==$pwd2))
		   {
			 $encpwd1 = password_hash($pwd1,PASSWORD_DEFAULT);     //*** Encrypt password ***
			  
			  $sql= " update user_details SET
		              F_Name='$fname',   
                      L_Name='$lname',
                      Email='$email',
                      DOB='$dob',
		              psw='$encpwd1',
					  M_No='$mobile'
					  
					  where username='$_SESSION[session]'"; 
					  
				 $con->query($sql);
		         header("location: login.php");  	   // *** Should redirect to homepage ***   
			   
		   } else{
			   
			     header('location: profile.php?Password_ERROR!!!');
				
		   }         
       
	   }
	   
	else
	   {
	   header("location: signup.php?ERROR!!!!");    //*** Prevent unauthorized access to updatet.php page ***
	   exit();
     }
	
 

	 
	 ?>