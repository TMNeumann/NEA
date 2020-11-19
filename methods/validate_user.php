<?php
    
	require_once 'functions.php';

	$valida = Usuario::valida_usuario();	
	
	// 
	if($valida == 'ok'){
		header('location:http://192.168.150.222/nea/index.php');
	}
	else{
		header('location:http://192.168.150.222/nea/login.php?try');
	}
?>