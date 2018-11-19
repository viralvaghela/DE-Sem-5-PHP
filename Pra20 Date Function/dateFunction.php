<?php
	echo "Date Functions:<br>";
	
	echo date("d/m/y")."<br>";
	echo date("D/M/Y")."<br>";
	echo date("d/M/Y")."<br>";
	echo date("d/m/y h: i :s a")."<br><br>";
	
	echo "time() functions<br>";
	echo time()."<br><br>";

	echo "Check Date function<br>";
	if(checkdate(99,15,2018))
		echo 'valid date';
	else
		echo "not valid date<br><br>";

	echo "mktime() function<br>	";
	echo mktime(9,9,9,9,9,2018);
	

?>