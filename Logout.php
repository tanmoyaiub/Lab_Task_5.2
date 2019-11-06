<?php

session_start();
	//session_destroy();
	session_unset($_SESSION['name']);
	setcookie("uname", $user[0], time()-3, "/");
	header('location: signin.php');
	
	?>