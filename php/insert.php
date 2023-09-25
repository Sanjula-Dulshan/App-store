<?php
       
	   //*** Server side validation ***
     if(isset($_POST['reg']))
	  {
		include('config.php');         //*** Require config.php file to verify connectivity status ***

        //*** Define variables and assign values ***
		
        $fname= $_POST["firstName"];   
        $lname= $_POST["lastName"];
        $uname= $_POST["uName"];
        $email= $_POST["email"];
        $pwd = $_POST["pwd1"];
		$repwd= $_POST["pwd2"];
        $dob= $_POST["DOB"];
        $mobile= $_POST["mobile"];

       if(empty($fname)||empty($uname)||empty($email)||empty($pwd)||empty($dob))     //*** Check required fields ***
	     {
		  header("location: signup.php?Error!!!EmptyFields");
	      exit();
	     }
		 
		 elseif($pwd != $repwd){                                                   //*** Check password equality ***
		   header("location: signup.php?Error!!!PasswordsMismatched");
	       exit(); 
		 }
			 
	else{ 
	  
	  $sql= "select Username from user_details where Username ='$uname' ";      
	  $result= $con->query($sql);
	
	if(mysqli_num_rows($result)>0)                                               //*** Check if any already exsist username ***
	{
		
	    header("location: signup.php?Error!!!UsernameAlreadyExists_TryDifferentOne");   
	    exit();
	}
	
	
	else
	 {
	 	$encpwd = password_hash($pwd,PASSWORD_DEFAULT);     //*** Encrypt password ***
		
		//*** Store data to the DB ***
		
		$sql = "insert into user_details(Username,Psw,F_Name,L_Name,Email,M_No,DOB,Img) values('$uname','$encpwd','$fname','$lname','$email','$mobile','$dob','../images/default-profile.png')";
		$con->query($sql);
		header("location: login.php");                   //** Should Redirect to homepage ***
	 }
	
   }
   
}else{
	   header("location: signup.php?ERROR!!!!");    //*** Prevent unauthorized access to insert.php page ***
	   exit();
     }
	
 
$con->close();        //*** Close connection with DB ***

?>