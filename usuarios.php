<?php
require_once 'header.php';

if(!$_SESSION || $_SESSION['usuario_acesso'] != '0'){
?>
<script>
	window.location.href = "http://192.168.150.222/nea/login.php";
</script>
<?php
}else {

$arg = 'ORDER BY id desc';
$usuarios = Usuario::busca_usuario($arg);
$total = count($usuarios);
?> 
    <body>       
 		<section id="users">
 			<div class="top">
		        <h2>Lista de Usuários</h2>	 		 	        
		 		<a href="http://192.168.150.222/nea/cadastro.php" class="">Adicionar Usuário</a> 				
 			</div>
<?php 
for ($i=0; $i < $total; $i++) { 
	$usr = $usuarios[$i];
?>
	        <ul class='ul_row <?php if($usr["ativo"] == 0){echo "inativo";} ?>'>
	            
                <li>
                	<p>Nome:</p>
                	<p><?php echo $usr['nome'] ?></p>
                </li>
                <li>
                	<p>E-mail:</p>
                	<p><?php echo $usr['email'] ?></p>
                </li>
                <li>
                	<p>Cargo:</p>
                	<p><?php echo $usr['cargo']; ?></p>
                </li>
                <li>
                    <p>Acesso:</p>
                    <p><?php if($usr['acesso'] == '0'){echo 'Admin';}elseif($usr['acesso'] == '1'){echo 'Usuário';} ?></p>
                </li>
                <li>
                    <a href="http://192.168.150.222/nea/atualiza_usuario.php?id=<?php echo $usr['id'] ?>"  class="btn modal_open">Editar</a>
<?php 
	if($usr["ativo"] == 1){
?>
                    <a href="http://192.168.150.222/nea/methods/remove_usuario.php?id=<?php echo $usr['id'] ?>" class="btn" onclick="return confirm('Tem certeza de que deseja desativar o usuario?'); ">Desativar</a>
<?php
	}elseif($usr["ativo"] == 0){
?>
                    <a href="http://192.168.150.222/nea/methods/active_user.php?id=<?php echo $usr['id'] ?>" class="btn" onclick="return confirm('Tem certeza de que deseja ativar o usuario?'); " style="color:#1B2432;">Ativar</a>
<?php
	}
?>
                </li>

            </ul>
<?php 
}
}
?>
	    </section>
<?php 
	require_once 'footer.php';
?>