<?php
$con= new mysqli("localhost","root","","appstore");

  if($con->connect_error){
	  die("Connection Failed: ".$con->connect_error);
  }
 
?>