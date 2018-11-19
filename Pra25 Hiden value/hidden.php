<?php
	if (isset($_GET['submit'])) {
	
		echo "Uname:".$_GET['uname']."<br>";
		echo "Hidden value:".$_GET['hid'];
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Hidden value</title>
</head>
<body>
	<form name="frm1" action="" method="GET">
		name:<input type="text" name="uname" id="uname"><br>
		<input type="hidden" name="hid" value="viral" id="hidden">
		<input type="submit" name="submit" id="submit">
	</form>
</body>
</html>