	<?php
	$servername="127.0.0.1";
	$username="root";
	$password="";
	$database="test";
	$connect=mysqli_connect($servername,$username,$password,$database);
	if(isset($_GET['insert'])) //INSERT RECORDS  IF USER SELECT INSERT BUTTON
		{

			$name= $_GET['name'];
			$email=$_GET['email'];
			$number=$_GET['number'];

			if($name=="" OR $email=="" OR $number=="")	//VALIDATION FOR EMPTY BOXES ;)
			{	echo "Please Enter Some Values";
				exit;
			}
			if(strlen($number)!=10)	// NUMBER VALIDATION
			{
				echo "Enter Valid 10 digit number";
				exit;
			}	
			else 	//iF NOT NULL THEN INSERT 
				$insertsql="insert into users(`name`,`email`,`number`) VALUES('$name','$email','$number');";
				$insertcmd=mysqli_query($connect,$insertsql);
				echo "<Script>alert('Inserter successfully')</script>";
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center><h3>
	<form name="frm" method="GET" action="" style="margin-top: 100px;border: 1px solid black;height: 120px;width: 600px;padding: 10px;" >
		Name:<input type="text" name="name" ><br>
		email:<input type="email" name="email"><br>
		Number:<input type="text" name="number" ><br>
	 	<input type="submit" name="insert" value="Insert">
	</form></h3>

	
	
</body>
</html>