<?php
include 'header.php';
?>
    <body>
        <section id="register">             
            <form action='http://192.168.150.222/nea/methods/cadastra_usuario.php' method="post" id="register_form" class="notificacao">
                <ul class="card">
                    <li><h2>Cadastro de Usuário</h2></li>
                    <li>
                        <div class="input_box big">
                            <label for="nome">Nome: </label>
                            <input class="input_check" type="text" name="nome" id="nome" required="" placeholder='' value='' autocomplete="username">
                        </div>
                    </li>
                    <li>
                        <div class="input_box big">
                            <label for="email">Email: </label>
                            <input class="input_check" type="text" name="email" id="email" required placeholder='' value=''autocomplete="email">
                        </div>
                    </li>
                    <li>
                        <div class="input_box big">
                            <label for="cargo">Cargo</label>
                            <input type="text" class="input_check" name="cargo" id="cargo" required="" value=''>
                        </div>
                    </li>
                    <li>
                        <div class="input_box big">
                            <label for="senha">Senha: </label>
                            <input class="input_check psw" type="password" name="senha" id="senha" placeholder="" required value=''autocomplete="current-password">
                        </div>
                    </li>
                    <li>
                        <div class="input_box big">
                            <label for="password_conf">Confirme a senha: </label>
                            <input class="input_check psw" type="password" name="senha_conf" id="senha_conf" required value='' autocomplete="current-password"> 
                        </div>
                    </li>
                    <li>
                        <input type="submit" value="Cadastrar" class="hidden_submit_btn hidden" id='cadastrar' onclick="">
                        <button class="btn form_btn submit_btn" id="cadastrar_btn" onclick="">Cadastrar</button>
                    </li>
                </ul>
            </form>
        </section>
        <script>
            const input = document.querySelectorAll('.input_check');
            const req = document.querySelectorAll('.required');
            //valida se os campos estão vazios e torna a borda vermelha
                        
            
            let senha_val = document.getElementById('senha').value;
            let senha_conf_val = document.getElementById('senha_conf').value;
            
            if (senha_val != senha_conf_val){
                alert('Senhas não conferem');
                senha.classList.add("required");
                senha_conf.classList.add("required");
            }
                  
            //remove a borda vermelha ao digitar nos campos required
           

        </script>
    </body>
</html>