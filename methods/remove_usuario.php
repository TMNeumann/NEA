<?php

	require_once 'functions.php';

	$remove = Usuario::remove_usuario();

	echo $remove;
	sleep(1);

	header('Location:http://192.168.150.222/nea/usuarios.php');
?>