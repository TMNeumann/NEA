<?php
class Form {
	function __construct(){	}

	function cadastro_formulario(){	

		$pdo = Connection::getInstance();

		if(isset($_POST['usuario_id'])){
			$usuario = $_POST['usuario_id'];
		}else{
			$usuario = '0';
		}

		if(isset($_POST['anonimo'])){
			$pergunta_relator = 'anonimo';
		}elseif(isset($_POST['relator'])){
			$pergunta_relator = $_POST['relator'];
		}else{$pergunta_relator = '';};

		if(isset($_POST['data'])){
			$pergunta_data = $_POST['data'];
		}else{$pergunta_data = '';};

		if(isset($_POST['hora'])){
			$pergunta_hora = $_POST['hora'];
		}else{$pergunta_hora = '';};

		if(isset($_POST['local'])){
			$pergunta_local = $_POST['local'];
		}else{$pergunta_local = '';};

		if(isset($_POST['turno'])){
			$pergunta_turno = $_POST['turno'];
		}else{$pergunta_turno = '';};

		if(isset($_POST['nome_atingido'])){
			$pergunta_nome_atingido = $_POST['nome_atingido'];
		}else{$pergunta_nome_atingido = '';};

		if(isset($_POST['classificacao'])){
			$pergunta_classificacao = $_POST['classificacao'] ;
		}else{$pergunta_classificacao = '';};

		if(isset($_POST['prontuario'])){
			$pergunta_prontuario = $_POST['prontuario'] ;
		}else{$pergunta_prontuario = '';};

		if(isset($_POST['registro'])){
			$pergunta_registro = $_POST['registro'];
		}else{$pergunta_registro = '';};

		if(isset($_POST['convenio'])){
			$pergunta_convenio = $_POST['convenio'] ;
		}else{$pergunta_convenio = '';};

		if(isset($_POST['sexo'])){
			$pergunta_sexo = $_POST['sexo'] ;
		}else{$pergunta_sexo = '';};

		if(isset($_POST['idade'])){
			$pergunta_idade = $_POST['idade'];
		}else{$pergunta_idade = '';};

		if(isset($_POST['tempo_internacao'])){
			$pergunta_tempo_internacao = $_POST['tempo_internacao'];
		}else{$pergunta_tempo_internacao = '';};

		if(isset($_POST['registrado_no_prontuario'])){
			$pergunta_registrado_no_prontuario = $_POST['registrado_no_prontuario'] ;
		}else{$pergunta_registrado_no_prontuario = '';};

		if(isset($_POST['identificacao_status'])){
			$pergunta_identificacao_status = $_POST['identificacao_status'] ;
		}else{$pergunta_identificacao_status = '';};

		if(isset($_POST['queda'])){
			$pergunta_queda = $_POST['queda'] ;
		}else{$pergunta_queda = '';};

		if(isset($_POST['setor'])){
			$pergunta_setor = $_POST['setor'] ;
		}else{$pergunta_setor = '';};

		if(isset($_POST['dispositivos_internos'])){
			$pergunta_dispositivos_internos = $_POST['dispositivos_internos'] ;
		}else{$pergunta_dispositivos_internos = '';};

		if(isset($_POST['tot'])){
			$pergunta_tot = $_POST['tot'] ;
		}else{$pergunta_tot = '';};

		if(isset($_POST['pele'])){
			$pergunta_pele = $_POST['pele'] ;
		}else{$pergunta_pele = '';};

		if(isset($_POST['exames'])){
			$pergunta_exames = $_POST['exames'] ;
		}else{$pergunta_exames = '';};

		if(isset($_POST['cirurgia_anestesia'])){
			$pergunta_cirurgia_anestesia = $_POST['cirurgia_anestesia'] ;
		}else{$pergunta_cirurgia_anestesia = '';};

		if(isset($_POST['procedimentos_invasivos'])){
			$pergunta_procedimentos_invasivos = $_POST['procedimentos_invasivos'] ;
		}else{$pergunta_procedimentos_invasivos = '';};

		if(isset($_POST['terapia_nutricional'])){
			$pergunta_terapia_nutricional = $_POST['terapia_nutricional'] ;
		}else{$pergunta_terapia_nutricional = '';};

		if(isset($_POST['hemovigilancia'])){
			$pergunta_hemovigilancia = $_POST['hemovigilancia'] ;
		}else{$pergunta_hemovigilancia = '';};

		if(isset($_POST['tipo_reacao'])){
			$pergunta_tipo_reacao = $_POST['tipo_reacao'] ;
		}else{$pergunta_tipo_reacao = '';};

		if(isset($_POST['tipo_reacao_transfusao'])){
			$pergunta_tipo_reacao_transfusao = $_POST['tipo_reacao_transfusao'] ;
		}else{$pergunta_tipo_reacao_transfusao = '';};

		if(isset($_POST['tempo_reacao_transfusao'])){
			$pergunta_tempo_reacao_transfusao = $_POST['tempo_reacao_transfusao'] ;
		}else{$pergunta_tempo_reacao_transfusao = '';};

		if(isset($_POST['farmacovigilancia'])){
			$pergunta_farmacovigilancia = $_POST['farmacovigilancia'] ;
		}else{$pergunta_farmacovigilancia = '';};

		if(isset($_POST['medicamentos'])){
			$pergunta_medicamentos = $_POST['medicamentos'];
		}else{$pergunta_medicamentos = '';};

		if(isset($_POST['tipo_gravidade'])){
			$pergunta_tipo_gravidade = $_POST['tipo_gravidade'];
		}else{$pergunta_tipo_gravidade = '';};

		if(isset($_POST['descricao_evento'])){
			$pergunta_descricao_evento = $_POST['descricao_evento'];
		}else{$pergunta_descricao_evento = '';};

		if(isset($_POST['acoes_adotadas'])){			
		$pergunta_acoes_adotadas = $_POST['acoes_adotadas'];
		}else{$pergunta_acoes_adotadas = '';};
		
		
		// validação deve ser feita em JS
		$data = date('Y-m-d');
		$sql = "INSERT INTO formulario(data, usuario, pergunta_relator, pergunta_data, pergunta_hora, pergunta_local, pergunta_turno, pergunta_nome_atingido, pergunta_classificacao, pergunta_prontuario, pergunta_registro, pergunta_convenio, pergunta_sexo, pergunta_idade, pergunta_tempo_internacao, pergunta_registrado_no_prontuario, pergunta_identificacao_status, pergunta_queda, pergunta_setor, pergunta_dispositivos_internos, pergunta_tot, pergunta_pele, pergunta_exames, pergunta_cirurgia_anestesia, pergunta_procedimentos_invasivos, pergunta_terapia_nutricional, pergunta_hemovigilancia, pergunta_tipo_reacao, pergunta_tipo_reacao_transfusao, pergunta_tempo_reacao_transfusao, pergunta_farmacovigilancia, pergunta_medicamentos, pergunta_tipo_gravidade, pergunta_descricao_evento, pergunta_acoes_adotadas) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$stmt = $pdo->prepare($sql);
		if ($stmt->execute(array($data, $usuario, $pergunta_relator, $pergunta_data, $pergunta_hora, $pergunta_local, $pergunta_turno, $pergunta_nome_atingido, $pergunta_classificacao, $pergunta_prontuario, $pergunta_registro, $pergunta_convenio, $pergunta_sexo, $pergunta_idade, $pergunta_tempo_internacao, $pergunta_registrado_no_prontuario, $pergunta_identificacao_status, $pergunta_queda, $pergunta_setor, $pergunta_dispositivos_internos, $pergunta_tot, $pergunta_pele, $pergunta_exames, $pergunta_cirurgia_anestesia, $pergunta_procedimentos_invasivos, $pergunta_terapia_nutricional, $pergunta_hemovigilancia, $pergunta_tipo_reacao, $pergunta_tipo_reacao_transfusao, $pergunta_tempo_reacao_transfusao, $pergunta_farmacovigilancia, $pergunta_medicamentos, $pergunta_tipo_gravidade, $pergunta_descricao_evento, $pergunta_acoes_adotadas)))
		{
		   return 'sucesso';
		}
		else
		{
		   $log = "Erro";
		   return $log;
		}

	}
	function busca_formulario($arg){
		$pdo = Connection::getInstance();
		$sql = 'SELECT * FROM formulario '.$arg;
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);	
		return $result;
	}

	function atualiza_formulario(){	

		$pdo = Connection::getInstance();
		
		if(isset($_POST['usuario_id'])){
			$usuario = $_POST['usuario_id'];
		}else{
			$usuario = '0';
		};

		if(isset($_POST['anonimo'])){
			$pergunta_relator = 'anonimo';
		}elseif(isset($_POST['relator'])){
			$pergunta_relator = $_POST['relator'];
		}else{$pergunta_relator = '';};

		if(isset($_POST['formId'])){
			$id = $_POST['formId'];
		}else{echo 'erro';}

		if(isset($_POST['data'])){
			$pergunta_data = $_POST['data'];
		}else{$pergunta_data = '';};

		if(isset($_POST['hora'])){
			$pergunta_hora = $_POST['hora'];
		}else{$pergunta_hora = '';};

		if(isset($_POST['local'])){
			$pergunta_local = $_POST['local'];
		}else{$pergunta_local = '';};

		if(isset($_POST['turno'])){
			$pergunta_turno = $_POST['turno'];
		}else{$pergunta_turno = '';};

		if(isset($_POST['nome_atingido'])){
			$pergunta_nome_atingido = $_POST['nome_atingido'];
		}else{$pergunta_nome_atingido = '';};

		if(isset($_POST['classificacao'])){
			$pergunta_classificacao = $_POST['classificacao'] ;
		}else{$pergunta_classificacao = '';};

		if(isset($_POST['prontuario'])){
			$pergunta_prontuario = $_POST['prontuario'] ;
		}else{$pergunta_prontuario = '';};

		if(isset($_POST['registro'])){
			$pergunta_registro = $_POST['registro'];
		}else{$pergunta_registro = '';};

		if(isset($_POST['convenio'])){
			$pergunta_convenio = $_POST['convenio'] ;
		}else{$pergunta_convenio = '';};

		if(isset($_POST['sexo'])){
			$pergunta_sexo = $_POST['sexo'] ;
		}else{$pergunta_sexo = '';};

		if(isset($_POST['idade'])){
			$pergunta_idade = $_POST['idade'];
		}else{$pergunta_idade = '';};

		if(isset($_POST['tempo_internacao'])){
			$pergunta_tempo_internacao = $_POST['tempo_internacao'];
		}else{$pergunta_tempo_internacao = '';};

		if(isset($_POST['registrado_no_prontuario'])){
			$pergunta_registrado_no_prontuario = $_POST['registrado_no_prontuario'] ;
		}else{$pergunta_registrado_no_prontuario = '';};

		if(isset($_POST['identificacao_status'])){
			$pergunta_identificacao_status = $_POST['identificacao_status'] ;
		}else{$pergunta_identificacao_status = '';};

		if(isset($_POST['queda'])){
			$pergunta_queda = $_POST['queda'] ;
		}else{$pergunta_queda = '';};

		if(isset($_POST['setor'])){
			$pergunta_setor = $_POST['setor'] ;
		}else{$pergunta_setor = '';};

		if(isset($_POST['dispositivos_internos'])){
			$pergunta_dispositivos_internos = $_POST['dispositivos_internos'] ;
		}else{$pergunta_dispositivos_internos = '';};

		if(isset($_POST['tot'])){
			$pergunta_tot = $_POST['tot'] ;
		}else{$pergunta_tot = '';};

		if(isset($_POST['pele'])){
			$pergunta_pele = $_POST['pele'] ;
		}else{$pergunta_pele = '';};

		if(isset($_POST['exames'])){
			$pergunta_exames = $_POST['exames'] ;
		}else{$pergunta_exames = '';};

		if(isset($_POST['cirurgia_anestesia'])){
			$pergunta_cirurgia_anestesia = $_POST['cirurgia_anestesia'] ;
		}else{$pergunta_cirurgia_anestesia = '';};

		if(isset($_POST['procedimentos_invasivos'])){
			$pergunta_procedimentos_invasivos = $_POST['procedimentos_invasivos'] ;
		}else{$pergunta_procedimentos_invasivos = '';};

		if(isset($_POST['terapia_nutricional'])){
			$pergunta_terapia_nutricional = $_POST['terapia_nutricional'] ;
		}else{$pergunta_terapia_nutricional = '';};

		if(isset($_POST['hemovigilancia'])){
			$pergunta_hemovigilancia = $_POST['hemovigilancia'] ;
		}else{$pergunta_hemovigilancia = '';};

		if(isset($_POST['tipo_reacao'])){
			$pergunta_tipo_reacao = $_POST['tipo_reacao'] ;
		}else{$pergunta_tipo_reacao = '';};

		if(isset($_POST['tipo_reacao_transfusao'])){
			$pergunta_tipo_reacao_transfusao = $_POST['tipo_reacao_transfusao'] ;
		}else{$pergunta_tipo_reacao_transfusao = '';};

		if(isset($_POST['tempo_reacao_transfusao'])){
			$pergunta_tempo_reacao_transfusao = $_POST['tempo_reacao_transfusao'] ;
		}else{$pergunta_tempo_reacao_transfusao = '';};

		if(isset($_POST['farmacovigilancia'])){
			$pergunta_farmacovigilancia = $_POST['farmacovigilancia'] ;
		}else{$pergunta_farmacovigilancia = '';};

		if(isset($_POST['medicamentos'])){
			$pergunta_medicamentos = $_POST['medicamentos'];
		}else{$pergunta_medicamentos = '';};

		if(isset($_POST['tipo_gravidade'])){
			$pergunta_tipo_gravidade = $_POST['tipo_gravidade'];
		}else{$pergunta_tipo_gravidade = '';};

		if(isset($_POST['descricao_evento'])){
			$pergunta_descricao_evento = $_POST['descricao_evento'];
		}else{$pergunta_descricao_evento = '';};

		if(isset($_POST['acoes_adotadas'])){			
		$pergunta_acoes_adotadas = $_POST['acoes_adotadas'];
		}else{$pergunta_acoes_adotadas = '';};

		// validação deve ser feita em JS
		$data_mod = date('Y-m-d');
		echo $id;
		$sql = 'UPDATE formulario SET usuario = "'.$usuario.'", pergunta_relator = "'.$pergunta_relator.'", pergunta_data = "'.$pergunta_data.'", pergunta_hora = "'.$pergunta_hora.'", pergunta_local = "'.$pergunta_local.'", pergunta_turno = "'.$pergunta_turno.'", pergunta_nome_atingido = "'.$pergunta_nome_atingido.'", pergunta_classificacao = "'.$pergunta_classificacao.'", pergunta_prontuario = "'.$pergunta_prontuario.'", pergunta_registro = "'.$pergunta_registro.'", pergunta_convenio = "'.$pergunta_convenio.'", pergunta_sexo = "'.$pergunta_sexo.'", pergunta_idade = "'.$pergunta_idade.'", pergunta_tempo_internacao = "'.$pergunta_tempo_internacao.'", pergunta_registrado_no_prontuario = "'.$pergunta_registrado_no_prontuario.'", pergunta_identificacao_status = "'.$pergunta_identificacao_status.'", pergunta_queda = "'.$pergunta_queda.'", pergunta_setor = "'.$pergunta_setor.'", pergunta_dispositivos_internos = "'.$pergunta_dispositivos_internos.'", pergunta_tot = "'.$pergunta_tot.'", pergunta_exames = "'.$pergunta_exames.'", pergunta_cirurgia_anestesia = "'.$pergunta_cirurgia_anestesia.'", pergunta_procedimentos_invasivos = "'.$pergunta_procedimentos_invasivos.'", pergunta_terapia_nutricional = "'.$pergunta_terapia_nutricional.'", pergunta_hemovigilancia = "'.$pergunta_hemovigilancia.'", pergunta_tipo_reacao = "'.$pergunta_tipo_reacao.'", pergunta_tipo_reacao_transfusao = "'.$pergunta_tipo_reacao_transfusao.'", pergunta_tempo_reacao_transfusao = "'.$pergunta_tempo_reacao_transfusao.'", pergunta_farmacovigilancia = "'.$pergunta_farmacovigilancia.'", pergunta_medicamentos = "'.$pergunta_medicamentos.'", pergunta_tipo_gravidade = "'.$pergunta_tipo_gravidade.'", pergunta_descricao_evento = "'.$pergunta_descricao_evento.'", pergunta_acoes_adotadas = "'.$pergunta_acoes_adotadas.'" WHERE id = '.$id;
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
}
?>