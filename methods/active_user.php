<?php
    
	require_once('functions.php');

	$ativa = Usuario::ativa_usuario();

	echo $ativa;
	sleep(1);

	header('Location:http://192.168.150.222/nea/usuarios.php');


?>