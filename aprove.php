	<!DOCTYPE html>
<html>
<body>

<center>
<img src="img/logo.jpg" alt="this is logo" width="150px" height="150px">
<h1> DHAKA METRO POLITON POLICE <h1> 
<h4> Phone No:02-9669100 <h4>
<h3> Police  <h3>
	<div class="h1">
		

	</div>
	</center>
	</body>
	</html>
	<?php
	include_once("policesession.php");

	$id = $_GET['id'];
	$result1 = mysqli_query($con,"select * from policeinsert where id = $id");
	?>

	<table border="1">
		<tr>
			<th>ID</th>
			<th>Name of tanant</th>
			<th>Father name</th>
			<th>birthday</th>
			<th>gender</th>
			<th>maritial status</th>
			<th>permanent address</th>
			<th>name of office/institute</th>
			<th>educational qualification</th>
			<th>phon no</th>
			<th>nid</th>
			<th>passport no</th>
			<th>email</th>
			<th>holding no</th>
			<th>flat no</th>
			<th> i name</th>
			<th>address</th>
			<th>relationship</th>
			<th>phon no</th>
			

		</tr>


	<?php
	 	 while ($res = mysqli_fetch_array($result1)) {
	 	 	# code...

	 	 	echo "<tr>";
	 	 	echo "<td>".$res['id']."</td>";
	 	 	echo "<td>".$res['nameoftanant']."</td>";
	 	 	echo "<td>".$res['fathername']."</td>";
	 	 	echo "<td>".$res['birthday']."</td>";
	 	 	echo "<td>".$res['gender']."</td>";
	 	 	echo "<td>".$res['maritialstatus']."</td>";
	 	 	echo "<td>".$res['paddress']."</td>";
	 	 	echo "<td>".$res['nameoffice']."</td>";
	 	 	echo "<td>".$res['education']."</td>";
	 	 	echo "<td>".$res['phn']."</td>";
	 	 	echo "<td>".$res['nid']."</td>";
	 	 	echo "<td>".$res['passport']."</td>";
	 	 	echo "<td>".$res['email']."</td>";
	 	 	echo "<td>".$res['holdingno']."</td>";
	 	 	echo "<td>".$res['flatno']."</td>";
	 	 	echo "<td>".$res['name']."</td>";
	 	 	echo "<td>".$res['address']."</td>";
	 	 	echo "<td>".$res['relation']."</td>";
	 	 	echo "<td>".$res['phnnumber']."</td>";
	 	 	
	 	 	echo "<tr>";

	 	 }

	 	 ?>