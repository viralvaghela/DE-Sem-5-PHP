<?php
	setcookie("visit",0,time()+60*60*60);
	$c=$_COOKIE['visit'];
	$c++;
	setcookie("visit",$c,time()+60*60*60);


?>	

<!DOCTYPE html>
<html>
<head>
	<title>Visitor tracker</title>
</head>
<body>
	<h3>You have visited this <?php 	
	echo $_COOKIE['visit'];
	?> Times.</h3>
</body>
</html>