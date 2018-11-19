<?php
	$mark1=80;
	$mark2=60;
	$mark3=75;

	$total = $mark1 + $mark2 + $mark3;
	$per = ($total * 100)/300;
	if ($per > 90) {
		echo 'Grade : A';
	}
	elseif ($per > 80 && $per<90 ) {
		echo 'Grade : B';
	}
	elseif ($per >60 && $per<80) {
		echo 'Grade : C';
	}
	elseif ($per >50 && $per < 60) {
		echo 'Grade : D';
	}
	else
		echo 'Fail';
?>