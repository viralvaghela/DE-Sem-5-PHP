<?php
	include 'menu.php';	
	session_start();
	$server="127.0.0.1";
	$uname="root";	
	$pass="";
	$database="bank";
	$connect=mysqli_connect($server,$uname,$pass,$database);	//CONNECTION
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2><?php 	if (isset($_SESSION['user'])) {
		echo "Welcome :".$_SESSION['user'];		}
		else
			echo "You have not loggedin";
	?>																	
</body>
</html>