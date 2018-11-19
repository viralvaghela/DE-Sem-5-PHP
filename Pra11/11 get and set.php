<?php 
	$name="Viral;";
	echo gettype($name);//String type...

	echo "<br>";
	$no=166210307109;
	echo gettype($no);//Double type

	echo "<br>";
	settype($no, 'string');//set datatype to string
	echo gettype($no);

	$no=$no.'44';
	echo $no;



 ?>
