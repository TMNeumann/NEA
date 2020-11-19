<?php

require_once 'functions.php';

$dat = Form::cadastro_formulario();
if($dat == 'sucesso'){
	
?>
<script>
	alert('Evento registrado com sucesso');
	window.location.href = 'http://192.168.150.222/nea/index.php';
</script>
<?php
}
else{
?>
	<script>
		alert('Houve um problema ao realizar o registro. Por Favor tente novamente');
		window.history.back();
	</script>
<?php
}

?>