<?php
	include 'C:\xampp\htdocs\166210307109\Practicals\Pra30 Connect\connect.php';
	$create="CREATE DATABASE test0 ";
	$createsql=mysqli_query($con,$create);
	if($createsql)
		echo "created successfuy<br>";
	else
		echo "Fail to create<br>";

	$delete="DROP DATABASE test0";
	$deletesql=mysqli_query($con,$delete);
	
	if ($deletesql) 
		echo "Deleted successfuy<br>";
	else
		echo "Fail to delete<br>";
	
?>