<?php 
class Usuario{

	
	function __construct(){
		
		
	}
	public function busca_usuario($arg){
		$pdo = Connection::getInstance();
		$sql = 'SELECT * FROM usuarios '.$arg;
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);	
		return $result;
	}
	public function valida_usuario(){
		$resultado = Usuario::busca_usuario('WHERE email = "'.$_POST['email'].'"');
		if($resultado){
			$senha = $_POST['senha'];
			$senhaBanco = $resultado[0]['senha'];
			$password64 = base64_decode($senhaBanco);
			if($password64 != $senha){
				return 'error';
				exit;
			}
			elseif($password64 === $senha){
				if (!isset($_SESSION)) {			
					session_start();
				}
				$_SESSION['usuario_id'] = $resultado[0]['id'];
				$_SESSION['usuario_nome'] = $resultado[0]['nome'];
				$_SESSION['usuario_acesso'] = $resultado[0]['acesso'];
				return 'ok';
			}
		}else{
			return 'email não cadastrado';
		};
		
	}
	public function cadastro_usuario(){	
		$pdo = Connection::getInstance();
		$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
		$email = isset($_POST['email']) ? $_POST['email'] : null;
		$cargo = isset($_POST['cargo']) ? $_POST['cargo'] : null;
		$password = isset($_POST['senha']) ? $_POST['senha'] : null;
		$acesso = '1';
		$password64 = base64_encode($password);
		// validação deve ser feita em JS
		$data = date('Y-m-d');
		$sql = "INSERT INTO usuarios(nome, email, cargo, acesso, senha, ativo, data_cadastro) VALUES(?, ?, ?, ?, ?, ?, ?)";
		$stmt = $pdo->prepare($sql);		 
		if ($stmt->execute(array($nome, $email, $cargo, $acesso, $password64, 1, $data)))
		{
		    return 'sucesso';
		}
		else
		{
		    $log = "Erro";
		    return $log;
		}
	}
	
	public function atualiza_usuario() {
		$pdo = Connection::getInstance();
		$id = isset($_POST['id']) ? $_POST['id'] : null;
		$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
		$email = isset($_POST['email']) ? $_POST['email'] : null;
		$cargo = isset($_POST['cargo']) ? $_POST['cargo'] : null;		
		$acesso = isset($_POST['acesso']) ? $_POST['acesso'] : null;
		$password = isset($_POST['password']) ? $_POST['password'] : null;
		$password64 = base64_encode($password);	
		$sql = 'UPDATE usuarios SET nome = "'.$nome.'", email = "'.$email.'", cargo = "'.$cargo.'", acesso = "'.$acesso.'", senha = "'.$password64.'" WHERE id = '.$id;
		$stmt = $pdo->prepare($sql);		
		if ($stmt->execute())
		{
		    echo 'Atualizado com sucesso';
		}
		else
		{
		    echo "Erro ao atualizar";
		    $log = "Erro";
		}
	}
	public function remove_usuario(){
		$pdo = Connection::getInstance();
		$id = isset($_GET['id']) ? $_GET['id'] : null;		
		$sql = 'UPDATE usuarios SET ativo = 0 WHERE id = '.$id;
		$stmt = $pdo->prepare($sql);
		if($stmt->execute()){
			return 'usuario removido';
		}
		else {
			return 'Erro ao remover usuario';
		}		
	}
	public function ativa_usuario(){
		$pdo = Connection::getInstance();
		$id = isset($_GET['id']) ? $_GET['id'] : null;
		$sql = 'UPDATE usuarios SET ativo = 1 WHERE id = '.$id;
		$stmt = $pdo->prepare($sql);
		if($stmt->execute()){
			return 'usuario ativado';
		}
		else {
			return 'Erro ao ativar usuario';
		}		
	}
	public function busca_usuario_email($arg){
		$pdo = Connection::getInstance();
		$email = $arg;
		$sql = 'SELECT * FROM usuarios WHERE email = "'.$email.'"';
		$stmt = $pdo->prepare($sql);
		$stmt->execute();	 		 
		$user = $stmt->fetch(PDO::FETCH_ASSOC);
		return $user;
	}
}
// end usuario---------------------------------------------------------
?>