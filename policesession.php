<?php
	
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="policeverification";
	
	$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	
	if($con){
		echo "connection sucess";
	}
	else{
		echo "connection failed";
	}
?>