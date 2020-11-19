<?php

	require_once 'functions.php';

	$arg = 'WHERE email = "'.$_POST['email'].'"';
	$valida = Usuario::busca_usuario($arg);
	print_r(count($valida));
	if(!$valida){
	 	$insere = Usuario::cadastro_usuario();
	 	if($insere){
	 		$_SESSION['usuario_email'] = $_POST['email'];
	 		$_SESSION['usuario'] = $_POST['usuario'];
	 		$_SESSION['acesso'] = $_POST['cargo'];
	 		$byEmail = 'WHERE email = "'.$_POST['email'].'"';
	 		$getId = Usuario::busca_usuario($byEmail);
	 		$_SESSION['usuario_id'] = $getId[0]['id'];
	 	}
	 	header('Location:http://192.168.150.222/nea/login.php');
	}
	else{
?>
	<script>
		alert('email já cadastrado');
		window.history.back();
	</script> 
<?php
	}
	//sleep(1);

	
?> 