<!DOCTYPE html>
<html>
<body >

	<center>
		<div >
		<img src="img/logo.jpg" alt="this is logo" width="150px" height="150px">
		<h1> DHAKA METRO POLITON POLICE <h1> 
		<h4> Phone No:02-9669100 <h4>
		<h3> Registration Form For House Tenant <h3>

	<div class="h1">
		<form class="login" action="registrationforrm.php" method="post">
			<label>Name of Tenant:</label>
			<input type="text" name="name" required="required"><br><br>
			<label>Father's name  : </label>
			<input type="text" name="fname" required="required"><br><br>

            Birthday: <input type="date" name="bday" required="required">
             
			 <h4>Gendar</h4>
	        <input type="radio" name="gender" value="male" > Male<br>
            <input type="radio" name="gender" value="female" > Female<br>
            <input type="radio" name="gender" value="other" > Other<br>
			
			
			 <h4>Maritial Status</h4>
	        <input type="radio" name="maritial_Status" value="marid"  > Marrid<br>
            <input type="radio" name="maritial_Status" value="Unmaid" > Unmarid<br>
			
		
		
		    <label>Permanent Address:</label>
			<input type="text" name="paddress" required="required"><br><br>
            <label>Name of Office/Institute:</label>
			<input type="text" name="name_office" required="required"><br><br>
			<label>Educational Qualification:</label>
			<input type="text" name="education" required="required"><br><br>
			<label>Phone/Mobile No:</label>
			<input type="text" name="mobile_no" required="required"><br><br>
		     <label>National Id No:</label>
			<input type="text" name="nid" required="required"><br><br>
	    	<label>Passport No(If Have):</label>
			<input type="text" name="passport" required="required"><br><br>
			<label>Email Id:</label>
			<input type="text" name="email" required="required"><br><br>
			<label>Holding NO:</label>
			<input type="text" name="holding_no" required="required"><br><br>
			<label>Flat NO:</label>
			<input type="text" name="flat_no" required="required"><br><br>
			
	    	<h4>Imergency Contact</h4>
		    <label>name:</label>
			<input type="text" name="i_name" required="required"><br><br>
		    <label>Address:</label>
			<input type="text" name="address" required="required"><br><br>
	    	<label>Relationship:</label>
			<input type="text" name="relation" required="required"><br><br>
			<label>Phone No:</label>
			<input type="text" name="phn_no" required="required"><br><br>
			
			<br>
			
			<input type="submit" name="submit" value="submit">
		</form>


	</div>
</div>
	</center>
	

	</body>
	</html>
	
<?php
	include_once("policesession.php");
	if(isset($_POST['submit']))
	{
		$nameoftanant=$_POST['name'];
		$fname=$_POST['fname'];
		$bday=$_POST['bday'];
		$gender=$_POST['gender'];
		$maritial_status=$_POST['maritial_Status'];
		$paddress=$_POST['paddress'];
		$name_office=$_POST['name_office'];
		$education=$_POST['education'];
		$mobile_no=$_POST['mobile_no'];
		$nid=$_POST['nid'];
		$passport=$_POST['passport'];
		$email=$_POST['email'];
		$holding_no=$_POST['holding_no'];
		$flat_no=$_POST['flat_no'];
		$i_name=$_POST['i_name'];
		$address=$_POST['address'];
		$relation=$_POST['relation'];
		$phn_no=$_POST['phn_no'];
		
		$result = mysqli_query($con, "INSERT INTO policeinsert(nameoftanant,fathername,birthday,gender,maritialstatus,paddress,nameoffice,education,phn,nid,passport,email,holdingno,flatno,name,address,relation,phnnumber) VALUES('$nameoftanant','$fname','$bday','$gender','$maritial_status','$paddress','$name_office','$education','$mobile_no','$nid','$passport','$email','$holding_no','$flat_no','$i_name','$address','$relation','$phn_no')");
		
		//echo "what are you doing man";
		
		if($result){
			echo"insert sucessfull";
		}
		else{
			echo "not done";
		}
		
		
	}
?>