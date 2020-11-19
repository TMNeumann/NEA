<?php

require_once('connect.php');
require_once('classes/Usuario.php');
require_once('classes/Formulario.php');

function test_input($arg){
	if($arg){
		$data = trim($arg);
		$data = stripslashes($data);
		$data = htmlentities($data);
		return $data;
	}
}
?>