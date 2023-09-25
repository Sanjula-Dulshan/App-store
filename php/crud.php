<?php

 include('config.php');

 session_start();
 


if(isset($_SESSION['session']))
 {   
    if(isset($_POST['add']))
	  {
		 $value = $_POST['add'];
		$uname=$_SESSION['session'];
		$id = $value;
		$fdb=$_POST["feedback"];  
		 
		 if(empty($fdb)||(empty($uname))){
			 ?>
			 <Script>alert('Empty Feedback');
			 document.location='index.php'
			 </script>
			 <?php
			 
		 }
		 else{
			  $sql= "select Username,App_ID from reviews where Username='$uname' AND App_ID='$id'";      
	          $result= $con->query($sql);
			  
			  if(mysqli_num_rows($result)>0)                                               //*** Check if any already exsist username ***
	         {
		      ?>
			   <Script>alert('You Can add only one feedback if you want you can edit it');
			   document.location='index.php'
			   </script>
			   <?php
	          
	        }else{
			 $sql = "insert into reviews(Username,App_ID,Feedback)values('$uname','$id','$fdb')";
			 $con->query($sql);
			  ?>
			   <Script>alert('Feedback Added Successfully');
			   document.location='index.php'
			   </script> 
			    <?php
			}
		 }
		
	  }elseif(isset($_POST['edit']))
	  {	
		 $value = $_POST['edit'];
		 $fdb=$_POST['feedback']; 
		 if(empty($fdb)){
			 echo"Can not Submit Empty Feedback";
		 }else{
			  $sql= " update reviews SET
		              Feedback='$fdb'
                    
                      where username='$_SESSION[session]'AND App_ID='$value'";
                     
                 $con->query($sql);
		        header("location: index.php"); 					 
		 }
		 
		  
		  
		  
     }
 elseif(isset($_POST['delete'])){
		   $value = $_POST['delete'];
	       $sql= "delete from reviews where username ='$_SESSION[session]'AND App_ID='$value'"; 
		   $con->query($sql);
		   header("location: index.php?Error!!!!");    
	      
     }
 }else{
	header("location: 404.php?Error!!!!"); 
}	  		
?>