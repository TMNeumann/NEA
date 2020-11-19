<!DOCTYPE html>
<html>
<head>
	<title>NEA</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="http://192.168.150.222/nea/style/style.css">
	<script type="text/javascript" src="http://192.168.150.222/nea/scripts/scripts.js"></script>
</head>
<body>
<?php 
	require_once 'methods/connect.php';
	require_once 'methods/functions.php';
	if(!isset($_SESSION)){
		//session_name(md5('seg'.$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']));
		session_cache_expire(10);
		session_start();
	}			
?>
	<header>
		<ul class="menu_header ">
			<li class="voltar">
				<a href="index.php" id="voltarBtn" class="">Voltar</a>
			</li>	
<?php 
	if(isset($_SESSION['usuario_nome'])){
?>	
			<li>
				<a href="formularios.php">Formulários</a>
			</li>
<?php
	if($_SESSION['usuario_acesso'] == '0'){
?>
			<li>
				<a href="usuarios.php">Usuários</a>
			</li>
<?php
	}
?>
			<li>
				<p class="user">Bem vindo <span class="blue"><?php echo $_SESSION['usuario_nome']; ?></span></p>
			</li>	
			<li>
				<a href="logout.php" id="logoutBtn" class="">Logout</a>
			</li>
<?php
	}else{
?>	
			<li class="login">
				<a href="login.php" id="loginBtn" class="">Log In</a>
			</li>
<?php 
	}
?>
		</ul>
	</header>