<?php
	include_once("policesession.php");

	$id = $_GET['id'];
	$result = mysqli_query($con,"delete from policeinsert where id = $id");

	if($result){
		header("location:ownwer.php");
	}
	?>