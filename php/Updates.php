<?php 
	include_once 'config.php';
	include_once 'userdetails.php';
?>

<?php 

echo "Redirecting to Homepage...";
	
	$New = $_POST['Nickname'];
	
	
	if(!is_null($_GET)){
		$Action= $_GET['Action'];
		$Username = $_GET['Username'];
		$Card_No = $_GET['Card_No'];
		//$New= $_GET['New'];
	}
	else{
		$Action= "";
		$Username = "";
		$Card_No = "";
		$New= "";
	}
?>

<?php 
	
	if($Action==1){

		$newquery= "DELETE FROM `saved_cards` WHERE `saved_cards`.`username` = '$Username' AND `saved_cards`.`Card_No` = '$Card_No'";
		if(mysqli_query($con,$newquery)){
			echo '<script type="text/JavaScript">  alert("Card Deleted!"); 
			window.location.href = "index.php";
			</script>';
		}
		else{
			echo "Failed";
		}
		
	}
	else{
		$newquery= "UPDATE `saved_cards` SET Nickname='$New' WHERE `saved_cards`.`username` = '$Username' AND `saved_cards`.`Card_No` = '$Card_No'";
		if(mysqli_query($con,$newquery)){
			echo '<script type="text/JavaScript">  alert("Nickname Updated!");window.location.href = "index.php"; </script>';
		}
		else{
			echo "Failed";
		}
	}

		
?>
