<?php
  
    include('config.php');                                                         //*** Require config.php file to verify connectivity status ***

	//*** Server side validation ***
     if(isset($_POST['log']))
	  {
		  $username =$_POST['username'];
		  $pwd = $_POST['passwd'];
	  
		
       if(empty($username)||empty($pwd))                                          //*** Check required fields ***
	     {
			
		 header("location: login.php?Error!!!EmptyFields");
	     exit();
	     }
		 
	     else{ 
	  
	     $sql1= "select username from user_details where username ='$username' ";//*** Read username from DB ***   
	     $result1= $con->query($sql1); 
	     
		 $sql2= "select Psw from user_details where username ='$username' "; //*** Read password from DB ***  
		 $result2= $con->query($sql2); 
		 }
		 
		 if((mysqli_num_rows($result1)>1)||(mysqli_num_rows($result1)==0))     //*** Check if any repeated username or does not exists  ***
			{
			  ?>
			 <script>alert('User Account Does Not Exist');                    //*** JS part to give message ***
			 document.location='login.php'
			 </script>
		 <?php 
			}
			
		     
	    $sql = "select username,Psw from user_details where username ='$username'";
        $result= $con->query($sql);
		$row = $result -> fetch_assoc();                                     //*** Get result as associative array ***
		
		$encpwd = password_verify($pwd,$row['Psw']);                     //*** Check if the encrypted pw match with inserted pw ***
		
	     if($encpwd == true)                                                //*** encpwd result check ***
		 {
			 session_start();
			 
			 $_SESSION['session'] = $row['username'];
			 header('location: profile.php?login='.$_SESSION['session']);  //*** Should Redirect to homepage ***
			                                                               //*** Concatinate variable ***
		 }
		 else{
			  ?>
			 <script>alert('Invalid Username Or Password');                //*** JS part to give message ***
			 document.location='login.php'
			 </script>
		 <?php 
			 
		 }
			 
		 
	 } 
	else{
           header("location: login.php?ERROR!!!!");                       //*** Prevent unauthorized access to read.php page ***
	       exit();
       }
	


?>