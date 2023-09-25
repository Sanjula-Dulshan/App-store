 <?php
require 'config.php';

$id=$_POST['C_ID'];
$name=$_POST['Category_Name'];
$num=$_POST['No_Of_Apps'];
$descri=$_POST['Cat_Description'];

insertData($id,$name,$num,$descri);

function insertData($id,$name,$num,$descri)
{
	global $con;
	$sql ="INSERT INTO categorylist(C_ID,Category_Name,No_Of_Apps,Cat_Description) VALUES('$id','$name','$num','$descri')";
	if($con->query($sql)) 
	{
		header("location:categorylist.php");
		//echo"Inserted Successfully";
	}
	else
	{
		echo "Error:".$con->error;
	}
}
?>