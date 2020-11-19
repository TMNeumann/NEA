<?php

	require_once 'functions.php';

	$atualiza = Usuario::atualiza_usuario();

	echo $atualiza;
	sleep(1);

	header('Location:http://192.168.150.222/nea/usuarios.php');
?>