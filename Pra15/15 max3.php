<?php 
	$a=10;
	$b=55;
	$c=15;
	$max;
	if($a > $b && $a > $c)
		$max=$a;
	elseif ($b > $a && $b > $c) 
		$max=$b;

	else
		$max=$c;
		
	echo $max;
?>