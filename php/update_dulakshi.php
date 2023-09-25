<?php
	if(isset($_POST['update1']))
	{
		
		include 'config.php';
		session_start();
	
		$id=$_POST['C_ID'];
		$name=$_POST['Category_Name'];
		$num=$_POST['No_Of_Apps'];
		$descri=$_POST['Cat_Description'];
		
		$sql="UPDATE categorylist SET Category_Name='$name',No_Of_Apps='$num',Cat_Description='$descri' WHERE C_ID='$id' ";
		$result=mysqli_query($con,$sql);
		
		if($result==true)
		{
			header("location:categorylist.php");
			//echo "Record inserted";
		}
		else
		{
			echo "Failed!";
		}
	
	}
?>