<?php
	include 'menu.php';

	session_start();
	$server="127.0.0.1";
	$uname="root";	
	$pass="";
	$database="bank";
	$connect=mysqli_connect($server,$uname,$pass,$database);	//CONNECTION

	if (isset($_GET['submit'])) {
		$email=$_GET['email'];
		$password=$_GET['password'];

		$checksql="select * from registration where email='$email' and password='$password' ";
		$checkcmd=mysqli_query($connect,$checksql);
		
		$row=mysqli_fetch_array($checkcmd);
		$_SESSION['user']=$row['name'];
		if (isset($_SESSION['user'])) {
					header('location:profile.php');
		}
		else
			echo "Enter valid username and password";
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login </title>
	<link rel="stylesheet" type="text/css" href="registration.css">
</head>
<body>
	<form name="login" method="GET" action="" id="login">
	Email <input type="Email" name="email" id="email"><br>
	password  <input type="password" name="password" id="password"><br>
	<input type="submit" name="submit" id="submit" value="login">
</form>
</body>
</html>
