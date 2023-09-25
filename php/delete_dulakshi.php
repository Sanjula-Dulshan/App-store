<?php

	if(isset($_POST['delet']))
	{
		include 'config.php';
	
		$id=$_POST['C_ID'];
		$name=$_POST['Category_Name'];
		
	
		$sql = "DELETE FROM categorylist WHERE C_ID='$id'";
	
		if(mysqli_query($con,$sql))
			{
				header("location:categorylist.php");
				//echo "Record Deleted!";
			}
		else
			{
				echo "Error: " .musqli_error($conn);
			}
	}
?>