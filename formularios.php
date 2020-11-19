<?php 
	require_once 'header.php';
	if(!isset($_SESSION)){
		session_start();
	}
	if($_SESSION['usuario_acesso'] == '0'){
		$arg = 'order by data desc';
	}
	else {
		$arg = 'WHERE usuario = '.$_SESSION["usuario_id"].' order by data desc';
	}
	$forms = Form::busca_formulario($arg);
	$total = count($forms);
	$today = date('yy-m-d');
	
?>			
	<section class="formList">
		<h2>Lista de Formularios</h2>
		<ul class="">
		<?php 
			for ($i=0; $i < $total; $i++) { 	
				$id = $forms[$i]['id'];
				if(!$forms[$i]['pergunta_nome_atingido']){
					$nome_atingido = '';
				}else{$nome_atingido = $forms[$i]['pergunta_nome_atingido'];};
				if(!$forms[$i]['pergunta_data']){
					$data = '';
				}else{$data = $forms[$i]['pergunta_data'];};
				if(!$relator = $forms[$i]['pergunta_relator']){
					$relator = '';
				}else{$relator = $forms[$i]['pergunta_relator'];};

			 ?>
			<li  class="" id="<?php echo $id ?>">
				<a href="form.php?form_id=<?php echo $id ?>">
					<p>Atingido(a): <span class="nome_atingido"><?php echo $nome_atingido ?></span></p>
					<p class="relator">Relatado por: <?php echo $relator ?></p>
					<p class="data">Data do ocorrido: <?php echo $data ?></p>
				</a>
			</li>
			
			<?php 
				} 
			?>

		</ul>
	</section>
	<footer>
	</footer>

	<script type="text/javascript">
		
		function goToId(el){
			window.location.href = "http://192.168.150.222/nea/edit_formulario.php?form_id="+el;
		}
		
	</script>




</body>
</html>