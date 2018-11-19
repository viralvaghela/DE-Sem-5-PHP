<?php 
	if (isset($_GET['submit'])) {
		session_start();
		$_SESSION['name']=$_GET['name'];
		echo "Session created"."<br>";
		echo "Session Value:".$_SESSION['name'];
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pass variable with session variables</title>
</head>
<body>
	<form name="frm1" action="" method="GET">
			
			Enter your name:<input type="text" name="name" id="name"><br>
			<input type="submit" name="submit" id="submit">


	</form>

</body>
</html>