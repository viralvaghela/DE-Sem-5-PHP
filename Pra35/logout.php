<?php
session_start();
include 'menu.php';

	if (isset($_SESSION['user'])) {
		session_destroy();
		echo "You have been loged out";

	}
	else
		echo "You have not loged in so How to logout??? ;) LOL";
?>