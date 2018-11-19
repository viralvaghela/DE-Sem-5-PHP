<?php 

	htmlentities($UnescapedString);
	$name=$_GET['uname'];
	$pass=$_GET['pass'];
	$message=$_GET['msg'];
	$email=$_GET['email'];
	$list=$_GET['listbox'];
	$radio=$_GET['radio'];
	$color=$_GET['color'];
	//$checkbox=$_GET['checkbox'];

	echo "Name:".$name."<br>";
	echo "Password Normal:".$pass."<br>";
	echo "Password MD5:".md5($pass);
	echo "Message".$message."<br>";
	echo "Email:".$email."<br>";
	echo "Gender:".$radio."<br>";
	
		
	foreach($_GET['Checkbox'] as $selected){
	echo $selected."</br>";

	echo "Color:".$color;	
?>

	

