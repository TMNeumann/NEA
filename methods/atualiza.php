<?php
require_once('functions.php');

$dat = Form::atualiza_formulario();

header('Location:http://192.168.150.222/nea/formularios.php');

?>