<?php
include_once("policesession.php");

if(isset($_POST['insert'])){
	$id = $_POST['id'];
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

		echo $id ;
	echo $nameoftanant;
	echo	$fname;
	echo	$bday;
	echo	$gender;
	echo	$maritial_status;
	echo	$paddress;
	echo	$name_office;
	echo	$education;
	echo	$mobile_no;
	echo	$nid;
	echo	$passport;
	echo	$email;
	echo	$holding_no;
	echo	$flat_no;
	echo	$i_name;
	echo	$address;
	echo	$relation;
	echo	$phn_no;


		$result = mysqli_query($con,"INSERT INTO police(nameoftanant,fathername,birthday,gender,maritialstatus,paddress,nameoffice,education,phn,nid,passport,email,holdingno,flatno,name,address,relation,phnnumber) VALUES('$nameoftanant','$fname','$bday','$gender','$maritial_status','$paddress','$name_office','$education','$mobile_no','$nid','$passport','$email','$holding_no','$flat_no','$i_name','$address','$relation','$phn_no')");

	if($result){
		header("location:ownwer.php");
	}else{
		echo "Edit Error!";
	}

}
if(!empty($_GET['id'])){
	$id = $_GET['id'];
	$result = mysqli_query($con,"select * from policeinsert where id = $id");
	while($res = mysqli_fetch_array($result)){

        $nameoftanant=$res['name'];
		$fname=$res['fname'];
		$bday=$res['bday'];
		$gender=$res['gender'];
		$maritial_status=$res['maritial_Status'];
		$paddress=$res['paddress'];
		$name_office=$res['name_office'];
		$education=$res['education'];
		$mobile_no=$res['mobile_no'];
		$nid=$res['nid'];
		$passport=$res['passport'];
		$email=$res['email'];
		$holding_no=$Pres['holding_no'];
		$flat_no=$res['flat_no'];
		$i_name=$res['i_name'];
		$address=$res['address'];
		$relation=$res['relation'];
		$phn_no=$res['phn_no'];
	}
}
else{
	echo "Id not exist";
}
?>

<!DOCTYPE html>
<html>
<head>
	
</head>
<body>

	<div class="h1" align="center">
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
			
			<input type="submit" name="insert" value="submit">
		</form>


	</div>

</body>
</html>