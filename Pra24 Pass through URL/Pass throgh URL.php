 <!DOCTYPE html>
<html>
<head>
	<title>
		Pass values through URL
	</title>
</head>
<body>
	<form name="frm1" action="" method="GET">
		name:<input type="text" name="uname" id="uname"><br>
		Pass:<input type="Password" name="pass" id="pass"><br>
		<input type="submit" name="submit" id="submit"><br>
		
<?php
	if (isset($_GET['submit'])) {
		$name=$_GET['uname'];
		$pass=$_GET['pass'];

		if ($name=="" OR $pass=="") {
			echo "Please enter some value";
		}
		elseif(!$name=="" OR !$pass=="")
		echo "Username:".$name."<br>";
		echo "Password:".$pass;
	}

?>
	</form>
</body>
</html>