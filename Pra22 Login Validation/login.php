<?php
	session_start();

	if (isset($_GET['submit'])) {

		$email=$_GET['email'];
		$password=$_GET['password'];
		
		if ($email=="" ) {
			$_SESSION['blankemail'] = "Please Enter Email";
		}
		elseif($password=="")
		{
			$_SESSION['blankpass']="Please enter Password";

		}
		elseif (strlen($password) <= 8 ) {
			$_SESSION['short'] =  "Password must 8 characters long ";
		}

		else
			echo "Welcome";

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form with validation</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form name="frmLogIn" action="" method="GET">
		Email address:<input type="text	" name="email" id="email"><br>
			<?php echo $_SESSION['blankemail']."<br>"; 
			unset($_SESSION['blankemail']); ?>

		Password: <input type="password" name="password" id="password" ><br><br>
			
		
		<input type="submit" name="submit" id="submit">

	</form>

</body>
</html>