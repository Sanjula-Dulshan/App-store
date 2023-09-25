<?php
include_once  'config.php';

$val = $_POST['update'];
$name = $_POST["AppName"];
$version = $_POST["AppVersion"];
$des = $_POST["Description"];
$ILink = $_POST["Icon"];
$SS1 = $_POST["Screenshot1"];
$SS2 = $_POST["Screenshot2"];
$App = $_POST["APKLink"];
$CID = $_POST["Category"];
$price = $_POST["Price"];
$tags = $_POST["Tags"];
$size = $_POST["Size"];
 
$query = "UPDATE app_information SET App_Name = '$name',
									Curr_ver = '$version',
									Description = '$des' ,
									Icon_Link = '$ILink' ,
									Screenshot1 = '$SS1', 
									Screenshot2 = '$SS2', 
									Apk_Link = '$App',
									 C_ID = '$CID',
									Price = '$price',
									Tags = '$tags', 
									Size = '$size' WHERE App_ID = $val";

$result = mysqli_query($con,$query);
if($result)
{
	echo "<script>alert('Update successfully');
			location.replace('read_s.php');
		</script>";

}
else
{
	echo "<script>alert('Update failed');
		location.replace('read_s.php');
	</script>";

}
?>