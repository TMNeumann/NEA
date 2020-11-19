<?php
	
	if(!isset($_SESSION)){
		session_start();
	}

	session_destroy();

	header("location:http://192.168.150.222/nea/index.php");
	exit();

?>