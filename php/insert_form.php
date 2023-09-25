<?php
include_once  'config.php';

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



$db ="INSERT INTO app_information(App_Name,Curr_ver,Description,Icon_Link,Screenshot1,Screenshot2,Apk_Link,C_ID,Price,Tags,Size)
		VALUES('$name','$version','$des','$ILink','$SS1','$SS2','$App','$CID','$price','$tags','$size')";
		
if($con->query($db))
{
	echo "<script>alert('Publish successfully');
		location.replace('published.php');
	</script>";
}
else
{
	echo "<script>alert('Publish failed');
		location.replace('published.php');
	</script>";
}
$con->close();
?> 