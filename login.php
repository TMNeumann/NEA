<?php
	if(!isset($_SESSION)){
		session_start();
	}
	include_once 'header.php';
    if(isset($_SESSION['usuario_id'])){
?>
    <script>
        window.location.href.includes("index.php");
    </script>
<?php
    }
?>
<section>
	<?php
		if($try = isset($_GET['try'])){
	?>
	<h3 style="text-align: center; font-style: italic; color: red;">Tente Novamente</h3>
	<?php
		}
	?>
	<form method="POST" action="http://192.168.150.222/nea/methods/validate_user.php" class="notificacao">
        <ul class="card">
            <li>
                <h2>Login</h2>
        		<div class="input_box big">
                    <label for="email">Email: </label>
                    <input class="input_check" type="text" name="email" id="email" required autocomplete="email">
                </div>
            </li>
            <li>
                <div class="input_box big">
                    <label for="password">Senha: </label>
                    <input class="input_check psw" type="password" name="senha" id="senha" placeholder="" required autocomplete="current-password">
                </div>
            </li>
            <li>
                <input type="submit" value="logar" class="hidden" id='logar' onclick="">
                <button class="btn form_btn submit_btn" id="logar_btn" onclick="">Logar</button>
                <a href="cadastro.php" class="btn form_btn" id="logar_btn" onclick="">Cadastrar</a>
            </li>
        </ul>
	</form>
</section>

<script>
	var btn = document.getElementById('logar_btn');
    btn.addEventListener("click", function(event){
        event.preventDefault();
        var tgt = document.getElementById('logar');
        var email = document.getElementById('email');
        var email_val = email.value;
        var senha = document.getElementById('senha');
        var senha_val = senha.value;
           
        if (!email_val){
            email.classList.add("required");
        }
        if (!senha_val){
            senha.classList.add("required");
        }
        var required_element = document.querySelector('.required');
           
        if (!required_element) {
            tgt.click();
        }
    });
    //remove a borda vermelha ao digitar nos campos required
    var input = document.querySelectorAll('.input_check');
    input.forEach(function(input){
        input.addEventListener("keypress", function(event){
            
            input.classList.remove("required");
            //alert(input);
        });
    });

</script>