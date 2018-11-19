<!DOCTYPE html>
<html>
<head>
	<title>Input through Form</title>
</head>
<body>
	<form name="frm1" method="GET" action="2.php"> 
		Uname:<input type="text" name="uname" id="uname"><br>
		Pas:<input type="password" name="pass"><br>
		message:
		<textarea name="msg">
			
		</textarea><br>
		email:<input type="email" name="email"><br>

		listbox:<input type="listbox" name="listbox">
			
		Radio Button:<br>
		Male:<input type="radio" name="radio" id="radio" value="male"><br>
		Female<input type="radio" name="radio" id="radio" value="female"><br>

		Check Box:<br>
		C:<input type="Checkbox" name="Checkbox[]" id="Checkbox" value="C"><br>
		C++:<input type="Checkbox" name="Checkbox[]" id="Checkbox" value="C++"><br>

		Color:<input type="Color" name="color" id="color"><br>

	

		<input type="submit" name="submit" id="submit"> 
	</form>
 
</body>
</html>