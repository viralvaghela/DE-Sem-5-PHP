<?php 
	echo chr(65);
	spc();

	echo ord('A');
	echo "<br>";		
	echo strtolower("AAvAAvaffAAafasAAfEE");
	spc();

	echo strtoupper("this SD adfasADADfv SF");
	spc();

	$len=strlen("Hello");
	echo "Hello Length is : ".$len;
	spc();

	echo ltrim("aviral","a");
	spc();

	echo rtrim("asdfghg","g");
	spc();
	
	echo trim("AviralA","A");
	spc();

	echo substr("I am Viral.",5,9);
	spc();

	echo strcmp("table", "classroom ");
	spc();

	echo strcasecmp("str", "STR");
	spc();

	echo strpos("string","ing");
	spc();

	echo strstr("Hi am string ","s");
	spc();

	echo stristr("Hi i am String","s");
	spc();

	echo str_replace("I am viral","viral","string");
	spc();

    echo strrev("String");
	






	#USER DEFINED FUNCTION FOR SPACE

function spc()
{
	echo "<br>";
}

?>