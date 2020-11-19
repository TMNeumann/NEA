<?php
include 'header.php';
$user_id = isset($_GET['id']) ? $_GET['id'] : null;
if(isset($user_id)){

    $user = Usuario::busca_usuario('WHERE id = "'.$user_id.'"')[0];
    //print_r($user);
?>
	<section class="">
	    <form action="http://192.168.150.222/nea/methods/update_user.php" method="post" class="notificacao">
            <ul class="card">
                <li>
                    <div class="input_box big">
                        <label for="edit_name">Nome: </label>
                        <input class="input_check" type="text" name="nome" id="edit_nome" required="" value='<?php echo $user["nome"] ?>' autocomplete="username">
                    </div>
                </li>
                <li>
                     <div class="input_box big">
                        <label for="edit_email">Email: </label>
                        <input class="input_check" type="text" name="email" id="edit_email" required value='<?php echo $user["email"] ?>' autocomplete="email">
                    </div>
                </li>
	           <li>
                 <div class="input_box big">
                    <input type="radio" name="acesso" id="edit_type_a" value="0" <?php if ($user['acesso'] == '0'): ?> checked="checked" <?php endif; ?>>
                    <label for="edit_type_a">Administrador </label>
                    <input type="radio" name="acesso" id="edit_type_u" value="1" <?php if ($user['acesso'] == '1'): ?> checked="checked" <?php endif; ?>>
                    <label for="edit_type_u">Usuário </label>
                </div>   
               </li>
                <li>
                    <div class="input_box big">
                        <label for="edit_cargo">Cargo: </label>
                        <input class="input_check" type="text" name="cargo" id="edit_cargo" required value='<?php echo $user["cargo"] ?>' autocomplete="cargo">
                    </div>
                </li>
               <li>
                    <div class="input_box big">
                        <label for="edit_password">Senha:</label>
                        <input class="input_check psw" type="password" name="password" id="edit_password" placeholder="" autocomplete="password">
                    </div>
               </li>
               <li>
                    <div class="input_box big">
                        <label for="edit_password_conf">Confirme a senha:</label>
                        <input class="input_check psw" type="password" name="password_conf" id="edit_password_conf" placeholder="" autocomplete="password"> 
                    </div>
               </li>
	           <li>
                    <div class="input_box big">
                        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">

                        <input type="submit" value="" class="hidden hidden_submit_btn" id="atualizar">
                        <button id="atualizar_btn" class="btn form_btn submit_btn">Atualizar</button>
                        <button id="cancelar_btn" class="btn form_btn" onclick="cancela()">Cancela</button>
                    </div>   
               </li>
	    </form>										
	</section>
	<script>
        function cancela(){
            window.history.back();
        }
        //toda validação de formularios é feita em scripts.js

    </script>
<?php
}
include_once 'footer.php';
?>