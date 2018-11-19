<?php
	include 'menu.php';
	session_start();
	$server="127.0.0.1";
	$uname="root";	
	$pass="";
	$database="bank";
	$connect=mysqli_connect($server,$uname,$pass,$database);	//CONNECTION

	if (isset($_GET['submit'])) 		//	GET ALL DATA INTO VARS...	
	{
		$name=$_GET['name'];
		$email=$_GET['email'];
		$aadharno=$_GET['aadhar'];
		$birthdate=$_GET['birthdate'];
		$number=$_GET['number'];
		$password=$_GET['password'];


		$insertsql="INSERT INTO registration(`name`,`email`,`aadharno`,`birthdate`,`number`,`password`)  VALUES('$name','$email','$aadharno','$birthdate','$number','$password')" ;
		$insertcmd=mysqli_query($connect,$insertsql);
		
		if($insertcmd)
			echo "<script>alert('Inserted successfull')</script>";
		else
			echo "Fail to insert<br>";
		echo mysqli_error($connect);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="registration.css">
</head>
<body>
	<form name="Registration" method="GET" action="" id="Registration">
<br><br>
		<center><h3>Registration</h3></center>
		<br>
		name:  <input type="text" name="name" id="name" ><br><br>
		Email: <input type="Email" name="email" id="email" ><br><br>
		Aadhar number:  <input type="text" name="aadhar" id="aadhar"><br><br>
		Birtdate:  <input type="date" name="birthdate" id="birtdate" ><br><br>
		Mobile number:  <input type="text" name="number" id="number"><br><br>
		Password:  <input type="Password" name="password" id="password"><br><br>
		<input type="submit" name="submit" id="submit" value="submit">
	</form>
</body>
</html>