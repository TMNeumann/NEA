
<?php 
	require_once 'header.php';
	if(!isset($_SESSION)){
		session_start();
	}
	$form_id = isset($_GET['form_id']) ? $_GET['form_id'] : null;
	if($form_id){
		$arg = 'where id = '.$form_id;
		$form = Form::busca_formulario($arg);
		$total = count($form);

?>
	<section id="edit">
		<?php 
			require_once 'methods/functions.php';
			require_once 'methods/connect.php';
			if(!isset($_SESSION)){
				session_start();
			}
		?>
		<form id="notificacao_edit" method="POST" action="http://192.168.150.222/nea/methods/atualiza.php">
			<ul class="card">
				<li class="start active">
					<h4>Formulario de Notificação de eventos adversos</h4>
				</li>
				<li class="">
					<div class="input_box big">
						<h4>
							<label for="relator">Nome do Relator</label>
						</h4>
						<input type="text" name="relator" id="relator" required="" class="big_input" value="<?php print_r($form[0]['pergunta_relator']) ?>">
					</div>
				</li>
				<li class="">
					<h4>Dados do evento</h4>
					<div class="input_box">
						<label for="data">Data</label>
						<input type="text" name="data" id="data" value="<?php print_r($form[0]['pergunta_data']) ?>">
					</div>
					<div class="input_box">
						<label for="hora">Hora</label>
						<input type="text" name="hora" id="hora" value="<?php print_r($form[0]['pergunta_hora']) ?>">
					</div>
					<div class="input_box">
						<label for="local">Local</label>
						<input type="text" name="local" id="local" value="<?php print_r($form[0]['pergunta_local']) ?>">
					</div>
				</li>
<?php
	$turno = $form[0]['pergunta_turno'];
?>
				<li class="">
					<h4>turno em que ocorreu o evento</h4>
					<div class="input_box">
						<input type="radio" name="turno" id="manha" value="manha" <?php if($turno == 'manha'){echo "checked";} ?>>
						<label for="manha">manha</label>
					</div>
					<div class="input_box">
						<input type="radio" name="turno" id="tarde" value="tarde" <?php if($turno == 'tarde'){echo "checked";} ?>>
						<label for="tarde">tarde</label>
					</div>
					<div class="input_box">
						<input type="radio" name="turno" id="noite_1" value="noite_1" <?php if($turno == 'noite_1'){echo "checked";} ?>>
						<label for="noite_1">noite 1</label>
						</div>
					<div class="input_box">
						<input type="radio" name="turno" id="noite_2" value="noite_2" <?php if($turno == 'noite_2'){echo "checked";} ?>>
						<label for="noite_2">noite 2</label>
					</div>
					<div class="input_box">
						<input type="radio" name="turno" id="hi" value="hi" <?php if($turno == 'hi'){echo "checked";} ?>>
						<label for="hi">HI</label>
					</div>
				</li>
				<li class="">
					<h4>Dados da pessoa atingida</h4>
					<div class="input_box big">
						<label for="nome_atingido">Nome</label>
						<input type="text" name="nome_atingido" id="nome_atingido" required="" class="big_input" value="<?php print_r($form[0]['pergunta_nome_atingido']) ?>">
					</div>
				</li>
<?php
	$classificacao = $form[0]['pergunta_classificacao'];
?>
				<li class="">
					<h4>Classificação</h4>
					<div class="input_box">
						<input type="radio" name="classificacao" id="paciente" value="paciente"  <?php if($classificacao == 'paciente'){echo "checked";} ?>>
						<label for="paciente">Paciente</label>
					</div>
					<div class="input_box">
						<input type="radio" name="classificacao" id="visitante" value="visitante"  <?php if($classificacao == 'visitante'){echo "checked";} ?>>
						<label for="visitante">Visitante</label>
					</div>
					<div class="input_box">
						<input type="radio" name="classificacao" id="funcionario" value="funcionario"  <?php if($classificacao == 'funcionario'){echo "checked";} ?>>
						<label for="funcionario">Funcionário</label>
					</div>
				</li>
				<li class="">
					<h4>Identificação</h4>
					<div class="input_box">
						<label for="prontuario">Prontuário</label>
						<input type="text" name="prontuario" id="prontuario" value="<?php print_r($form[0]['pergunta_prontuario']) ?>">
					</div>
					<div class="input_box">
						<label for="registro">Registro</label>
						<input type="text" name="registro" id="registro" value="<?php print_r($form[0]['pergunta_registro']) ?>">
					</div>
				</li>
<?php
	$convenio = $form[0]['pergunta_convenio'];
?>
				<li class="">
					<h4>Convênio</h4>
					<div class="input_box">
						<input type="radio" name="convenio" id="ipe" value="ipe"  <?php if($convenio == 'ipe'){echo "checked";} ?>>
						<label for="ipe">IPE</label>
					</div>
					<div class="input_box">
						<input type="radio" name="convenio" id="sus" value="sus"  <?php if($convenio == 'sus'){echo "checked";} ?>>
						<label for="sus">sus</label>
					</div>
					<div class="input_box">
						<input type="radio" name="convenio" id="cassi" value="cassi" <?php if($convenio == 'cassi'){echo "checked";} ?>>
						<label for="cassi">cassi</label>
					</div>
					<div class="input_box">
						<input type="radio" name="convenio" id="unimed" value="unimed" <?php if($convenio == 'unimed'){echo "checked";} ?>>
						<label for="unimed">unimed</label>
					</div>
					<div class="input_box">
						<input type="radio" name="convenio" id="caberbs" value="caberbs" <?php if($convenio == 'caberbs'){echo "checked";} ?>>
						<label for="caberbs">caberbs</label>
					</div>
					<div class="input_box">
						<input type="radio" name="convenio" id="geap" value="geap" <?php if($convenio == 'geap'){echo "checked";} ?>>
						<label for="geap">geap</label>
					</div>
					<div class="input_box">
						<input type="radio" name="convenio" id="convenio_outros" value="outros" value="convenio_outros" <?php if($convenio != 'ipe'&&$convenio != 'sus'&&$convenio != 'cassi'&&$convenio != 'unimed'&&$convenio != 'caberbs'&&$convenio != 'geap'&&$convenio != '') {echo "checked";} ?>>
						<label for="convenio_outros">outros</label>
					</div>
					<div class="input_box big">
						<input type="text" name="convenio" id="convenio_outros_desc" class="big_input" value="<?php if($convenio != 'ipe'&&$convenio != 'sus'&&$convenio != 'cassi'&&$convenio != 'unimed'&&$convenio != 'caberbs'&&$convenio != 'geap'&&$convenio != '') {print_r($form[0]['pergunta_convenio']); } else { echo '" disabled'; }?>" >
					</div>
				</li>
<?php
	$sexo = $form[0]['pergunta_sexo'];
?>
				<li class="">
					<h4>Sexo</h4>
					<div class="input_box">
						<input type="radio" name="sexo" id="feminino" value="feminino" <?php if($sexo == 'feminino'){echo "checked";} ?>>
						<label for="feminino">feminino</label>
					</div>
					<div class="input_box">
						<input type="radio" name="sexo" id="masculino" value="masculino" <?php if($sexo == 'masculino'){echo "checked";} ?>>
						<label for="masculino">masculino</label>
					</div>
					<div class="input_box">
						<label for="idade">idade</label>
						<input type="text" name="idade" id="idade" value="<?php print_r($form[0]['pergunta_idade']); ?>">
					</div>
				</li>
				<li class="">
					<h4>Tempo Médio de Internação</h4>
					<div class="input_box big">
						<label for="tempo_internacao">Tempo de internação no momento que ocorreu o incidente</label>
						<input type="text" name="tempo_internacao" id="tempo_internacao" class="big_input" value="<?php print_r($form[0]['pergunta_tempo_internacao']); ?>">
					</div>
				</li>
<?php
	$registrado_no_prontuario = $form[0]['pergunta_registrado_no_prontuario'];
?>
				<li class="">
					<h4>Registrado no Prontuário</h4>
					<div class="input_box">
						<input type="radio" name="registrado_no_prontuario" id="registrado_sim" value="registrado_sim"  <?php if($registrado_no_prontuario == 'registrado_sim'){echo "checked";} ?>>
						<label for="registrado_sim">sim</label>
					</div>
					<div class="input_box">
						<input type="radio" name="registrado_no_prontuario" id="registrado_nao" value="registrado_nao" <?php if($registrado_no_prontuario == 'registrado_nao'){echo "checked";} ?>>
						<label for="registrado_nao">nao</label>
					</div>
				</li>
<?php
	$identificacao_status = $form[0]['pergunta_identificacao_status'];
?>
				<li class="">
					<h4>identificação do Paciente</h4>
					<div class="input_box">
						<input type="radio" name="identificacao_status" id="pulseira_sim" value="pulseira_sim" <?php if($identificacao_status == 'pulseira_sim'){echo "checked";} ?>>
						<label for="pulseira_sim">Paciente com pulseira</label>
					</div>
					<div class="input_box">
						<input type="radio" name="identificacao_status" id="identificacao_inadequada" value="identificacao_inadequada" <?php if($identificacao_status == 'identificacao_inadequada'){echo "checked";} ?>>
						<label for="identificacao_inadequada">identificação inadequada</label>
					</div>
					<div class="input_box">
						<input type="radio" name="identificacao_status" id="identificacao_outros" value="outros" <?php if($identificacao_status != 'pulseira_sim'&&$identificacao_status != 'identificacao_inadequada'&&$identificacao_status != '') {echo "checked"; }?>>
						<label for="identificacao_outros">Outros</label>
					</div>
					<div class="input_box big">
						<input type="text" class="big_input" name="identificacao_status" id="identificacao_outros_desc" value="<?php if($identificacao_status != 'pulseira_sim'&&$identificacao_status != 'identificacao_inadequada'&&$identificacao_status != '') {echo $identificacao_status; }else { echo '" disabled'; }?>">
					</div>
				</li>
<?php
	$queda = $form[0]['pergunta_queda'];
?>
				<li class="">
					<h4>Quedas</h4>
					<div class="input_box">
						<input type="radio" name="queda" id="da_maca" value="da_maca" <?php if($queda == 'da_maca'){echo "checked";} ?>>
						<label for="da_maca">da maca</label>
					</div>
					<div class="input_box">
						<input type="radio" name="queda" id="do_leito" value="do_leito" <?php if($queda == 'do_leito'){echo "checked";} ?>>
						<label for="do_leito">do leito</label>
					</div>
					<div class="input_box">
						<input type="radio" name="queda" id="propria_altura" value="" <?php if($queda == 'propria_altura'){echo "checked";} ?>>
						<label for="propria_altura">propria altura</label>
					</div>
					<div class="input_box">
						<input type="radio" name="queda" id="queda_outros" value="outros" <?php if($queda!='da_maca'&&$queda!='do_leito'&&$queda!='propria_altura'&&$queda!=''){echo "checked";} ?>>
						<label for="queda_outros">outros</label>
					</div>
					<div class="input_box big">
						<input type="text" class="big_input" name="queda" id="queda_outros_desc" value="<?php if($queda!='da_maca'&&$queda!='do_leito'&&$queda!='propria_altura'&&$queda!=''){echo $form[0]['pergunta_queda'];}?>">
					</div>
				</li>
<?php
	$setor = $form[0]['pergunta_setor'];
?>
				<li class="">
					<h4>Localização</h4>
					<div class="input_box">
						<select id="setor" required="" name="setor">							
							<option value="selecionar">Selecionar</option>
							<option value="bloco a" <?php if($setor=="bloco a"){echo "selected";} ?>>bloco A</option>
							<option value="bloco b" <?php if($setor=="bloco b"){echo "selected";} ?>>Bloco B</option>
							<option value="bloco cirurgico" <?php if($setor=="bloco cirurgico"){echo "selected";} ?>>Bloco Cirurgico</option>
							<option value="maternidade" <?php if($setor=="maternidade"){echo "selected";} ?>>maternidade</option>
							<option value="pronto socorro" <?php if($setor=="pronto socorro"){echo "selected";} ?>>pronto socorro</option>
							<option value="tomografia" <?php if($setor=="tomografia"){echo "selected";} ?>>tomografia</option>
							<option value="raio x" <?php if($setor=="raio x"){echo "selected";} ?>>raio x</option>
							<option value="ecografia" <?php if($setor=="ecografia"){echo "selected";} ?>>ecografia</option>
							<option value="endoscopia" <?php if($setor=="endoscopia"){echo "selected";} ?>>endoscopia</option>
						</select>
					</div>
				</li>
<?php
	$dispositivos_internos = $form[0]['pergunta_dispositivos_internos'];
?>
				<li class="">
					<h4>Dispositivos internos</h4>
					<div class="input_box">
						<input type="checkbox" name="dispositivos_internos" id="drenos" value="drenos" <?php if($dispositivos_internos == 'drenos'){echo "checked";} ?>>
						<label for="drenos">drenos</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="dispositivos_internos" id="cateteres" value="cateteres" <?php if($dispositivos_internos == 'cateteres'){echo "checked";} ?>>
						<label for="cateteres">cateteres</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="dispositivos_internos" id="sonda_enteral" value="sonda_enteral" <?php if($dispositivos_internos == 'sonda_enteral'){echo "checked";} ?>>
						<label for="sonda_enteral">sonda enteral</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="dispositivos_internos" id="sonda_vesical" value="sonda_vesical" <?php if($dispositivos_internos == 'sonda_vesical'){echo "checked";} ?>>
						<label for="sonda_vesical">sonda vesical</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="dispositivos_internos" id="dispositivos_obstruida" value="dispositivos_obstruida" <?php if($dispositivos_internos == 'dispositivos_obstruida'){echo "checked";} ?>>
						<label for="dispositivos_obstruida">obstruida</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="dispositivos_internos" id="dispositivos_deslocada" value="dispositivos_deslocada" <?php if($dispositivos_internos == 'dispositivos_deslocada'){echo "checked";} ?>>
						<label for="dispositivos_deslocada">deslocada</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="dispositivos_internos" id="dispositivos_mal_posicionada" value="dispositivos_mal_posicionada" <?php if($dispositivos_internos == 'dispositivos_mal_posicionada'){echo "checked";} ?>>
						<label for="dispositivos_mal_posicionada">mal posicionada</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="dispositivos_internos" id="dispositivos_outros" value="outros" <?php if($dispositivos_internos!='drenos'&&$dispositivos_internos!='cateteres'&&$dispositivos_internos!='sonda_enteral'&&$dispositivos_internos!='sonda_vesical'&&$dispositivos_internos!='dispositivos_obstruida'&&$dispositivos_internos!='dispositivos_deslocada'&&$dispositivos_internos!='dispositivos_mal_posicionada'&&$dispositivos_internos!=''){echo "checked";} ?>>
						<label for="dispositivos_outros">dispositivos_outros</label>
					</div>
					<div class="input_box big">
						<input type="text" class="big_input" name="dispositivos_internos" id="dispositivos_outros_desc" disabled="" value="<?php if($dispositivos_internos!='drenos'&&$dispositivos_internos!='cateteres'&&$dispositivos_internos!='sonda_enteral'&&$dispositivos_internos!='sonda_vesical'&&$dispositivos_internos!='dispositivos_obstruida'&&$dispositivos_internos!='dispositivos_deslocada'&&$dispositivos_internos!='dispositivos_mal_posicionada'&&$dispositivos_internos!=''){print_r($form[0]['pergunta_dispositivos_internos']);} ?>">
					</div>
				</li>
<?php
	$tot = $form[0]['pergunta_tot'];
?>
				<li class="">
					<h4>TOT (TUBO ENDOTRAQUEAL)</h4>
					<div class="input_box">
						<input type="radio" name="tot" id="perda_tot" value="perda_tot" <?php if($tot == 'perda_tot'){echo "checked";} ?>>
						<label for="perda_tot">perda</label>
					</div>
					<div class="input_box">
						<input type="radio" name="tot" id="rompimento_tot" value="rompimento_tot" <?php if($tot == 'rompimento_tot'){echo "checked";} ?>>
						<label for="rompimento_tot">rompimento</label>
					</div>
					<div class="input_box">
						<input type="radio" name="tot" id="tot_outros" value="outros" <?php if($tot!='perda_tot'&&$tot!='rompimento_tot'&&$tot!=''){echo "checked";} ?>>
						<label for="tot_outros">outros</label>
					</div>
					<div class="input_box big">
						<input type="text" class="big_input" name="tot" id="tot_outros_desc" disabled="" value="<?php if($tot!='perda_tot'&&$tot!='rompimento_tot'&&$tot!=''){print_r($form[0]['pergunta_tot']);} ?>">
					</div>
				</li>
<?php
	$pele = $form[0]['pergunta_pele'];
?>
				<li class="">
					<h4>Pele</h4>
					<div class="input_box">
						<input type="checkbox" name="pele" id="lesao_bolha_pele" value="lesao_bolha_pele" <?php if($pele == 'lesao_bolha_pele'){echo "checked";} ?>>
						<label for="lesao_bolha_pele">lesao bolha</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="pele" id="assadura_pele" value="assadura_pele" <?php if($pele == 'assadura_pele'){echo "checked";} ?>>
						<label for="assadura_pele">assadura</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="pele" id="queimadura_pele" value="queimadura_pele" <?php if($pele == 'queimadura_pele'){echo "checked";} ?>>
						<label for="queimadura_pele">queimadura</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="pele" id="flebite_pele" value="flebite_pele" <?php if($pele == 'flebite_pele'){echo "checked";} ?>>
						<label for="flebite_pele">flebite</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="pele" id="trauma_escoriacao_pele" value="trauma_escoriacao_pele" <?php if($pele == 'trauma_escoriacao_pele'){echo "checked";} ?>>
						<label for="trauma_escoriacao_pele">trauma escoriacao</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="pele" id="ulcera_por_pressao_pele" value="ulcera_por_pressao_pele" <?php if($pele == 'ulcera_por_pressao_pele'){echo "checked";} ?>>
						<label for="ulcera_por_pressao_pele">ulcera por pressao</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="pele" id="lesao_bolha" value="lesao_bolha" <?php if($pele == 'lesao_bolha'){echo "checked";} ?>>
						<label for="lesao_bolha">lesao bolha</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="pele" id="lesao_medicamento" value="lesao_medicamento" <?php if($pele == 'lesao_medicamento'){echo "checked";} ?>>
						<label for="lesao_medicamento">lesao medicamento</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="pele" id="lesao_outros" value="outros" <?php if($pele!='lesao_bolha_pele'&&$pele!='assadura_pele'&&$pele!='queimadura_pele'&&$pele!='flebite_pele'&&$pele!='trauma_escoriacao_pele'&&$pele!='ulcera_por_pressao_pele'&&$pele!='lesao_bolha'&&$pele!='lesao_medicamento'&&$pele!=''){echo "checked";} ?>>
						<label for="lesao_outros">Outros</label>
					</div>
					<div class="input_box big">
						<input type="text" class="big_input" name="pele" id="lesao_outros_desc" value="<?php if($pele!='lesao_bolha_pele'&&$pele!='assadura_pele'&&$pele!='queimadura_pele'&&$pele!='flebite_pele'&&$pele!='trauma_escoriacao_pele'&&$pele!='ulcera_por_pressao_pele'&&$pele!='lesao_bolha'&&$pele!='lesao_medicamento'&&$pele!=''){print_r($form[0]['pergunta_pele']);} ?>">
					</div>
				</li>
<?php
	$exames = $form[0]['pergunta_exames'];
?>
				<li class="">
					<h4>Exames</h4>
					<div class="input_box">
						<input type="checkbox" name="exames" id="paciente_incorreto_exames" value="paciente_incorreto_exames" <?php if($exames == 'paciente_incorreto_exames'){echo "checked";} ?>>
						<label for="paciente_incorreto_exames">paciente incorreto</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="exames" id="solicitacao_incorreta_exames" value="solicitacao_incorreta_exames" <?php if($exames == 'solicitacao_incorreta_exames'){echo "checked";} ?>>
						<label for="solicitacao_incorreta_exames">solicitacao incorreta</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="exames" id="amostra_incorreta_exames" value="amostra_incorreta_exames" <?php if($exames == 'amostra_incorreta_exames'){echo "checked";} ?>>
						<label for="amostra_incorreta_exames">amostra incorreta</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="exames" id="resultado_incorreto_exames" value="resultado_incorreto_exames" <?php if($exames == 'resultado_incorreto_exames'){echo "checked";} ?>>
						<label for="resultado_incorreto_exames">resultado incorreto</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="exames" id="exame_outros" value="outros" <?php if($exames!='paciente_incorreto_exames'&&$exames!='solicitacao_incorreta_exames'&&$exames!='sonda_enteral'&&$exames!='amostra_incorreta_exames'&&$exames!='resultado_incorreto_exames'&&$exames!=''){echo "checked";}  ?>>
						<label for="exame_outros">Outros</label>
					</div>
					<div class="input_box big">
						<input type="text" class="big_input" name="exames" id="exame_outros_desc" value="<?php if($exames!='paciente_incorreto_exames'&&$exames!='solicitacao_incorreta_exames'&&$exames!='sonda_enteral'&&$exames!='amostra_incorreta_exames'&&$exames!='resultado_incorreto_exames'&&$exames!=''){print_r($form[0]['pergunta_exames']);} ?>">
					</div>
				</li>
<?php
	$cirurgia_anestesia = $form[0]['pergunta_cirurgia_anestesia'];
?>
				<li class="">
					<h4>Cirurgia/Anestesia</h4>
					<div class="input_box">
						<input type="checkbox" name="cirurgia_anestesia" id="paciente_incorreto_cirurgia_anestesia" value="paciente_incorreto_cirurgia_anestesia" <?php if($cirurgia_anestesia == 'paciente_incorreto_cirurgia_anestesia'){echo "checked";} ?>>
						<label for="paciente_incorreto_cirurgia_anestesia">paciente incorreto</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="cirurgia_anestesia" id="parte_corpo_incorreta_cirurgia_anestesia" value="parte_corpo_incorreta_cirurgia_anestesia" <?php if($cirurgia_anestesia == 'parte_corpo_incorreta_cirurgia_anestesia'){echo "checked";} ?>>
						<label for="parte_corpo_incorreta_cirurgia_anestesia">parte corpo incorreta</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="cirurgia_anestesia" id="falha_anestesica_cirurgia_anestesia" value="falha_anestesica_cirurgia_anestesia" <?php if($cirurgia_anestesia == 'falha_anestesica_cirurgia_anestesia'){echo "checked";} ?>>
						<label for="falha_anestesica_cirurgia_anestesia">falha anestesica</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="cirurgia_anestesia" id="bronco_aspiracao_cirurgia_anestesia" value="bronco_aspiracao_cirurgia_anestesia" <?php if($cirurgia_anestesia == 'bronco_aspiracao_cirurgia_anestesia'){echo "checked";} ?>>
						<label for="bronco_aspiracao_cirurgia_anestesia">bronco aspiracao</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="cirurgia_anestesia" id="artigo_medico_hospitalar" value="artigo_medico_hospitalar" <?php if($cirurgia_anestesia == 'artigo_medico_hospitalar'){echo "checked";} ?>>
						<label for="artigo_medico_hospitalar">artigo medico hospitalar</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="cirurgia_anestesia" id="queimadura_por_cauterio" value="queimadura_por_cauterio" <?php if($cirurgia_anestesia == 'queimadura_por_cauterio'){echo "checked";} ?>>
						<label for="queimadura_por_cauterio">queimadura por cauterio</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="cirurgia_anestesia" id="dirurgia_outros" value="outros" value="outros" <?php if($cirurgia_anestesia!='paciente_incorreto_cirurgia_anestesia'&&$cirurgia_anestesia!='parte_corpo_incorreta_cirurgia_anestesia'&&$cirurgia_anestesia!='falha_anestesica_cirurgia_anestesia'&&$cirurgia_anestesia!='bronco_aspiracao_cirurgia_anestesia'&&$cirurgia_anestesia!='artigo_medico_hospitalar'&&$cirurgia_anestesia!='queimadura_por_cauterio'&&$cirurgia_anestesia!=''){echo "checked";}  ?>>
						<label for="cirurgia_outros">Outros</label>
					</div>
					<div class="input_box big">
						<input type="text" class="big_input" name="cirurgia_anestesia" id="cirurgia_outros_desc" value="<?php if($cirurgia_anestesia!='paciente_incorreto_cirurgia_anestesia'&&$cirurgia_anestesia!='parte_corpo_incorreta_cirurgia_anestesia'&&$cirurgia_anestesia!='falha_anestesica_cirurgia_anestesia'&&$cirurgia_anestesia!='bronco_aspiracao_cirurgia_anestesia'&&$cirurgia_anestesia!='artigo_medico_hospitalar'&&$cirurgia_anestesia!='queimadura_por_cauterio'&&$cirurgia_anestesia!=''){print_r($form[0]['pergunta_cirurgia_anestesia']); }?>">
					</div>
				</li>
<?php
	$procedimentos_invasivos = $form[0]['pergunta_procedimentos_invasivos'];
?>
				<li class="">
					<h4>Procedimentos Invasivos</h4>
					<div class="input_box">
						<input type="checkbox" name="procedimentos_invasivos" id="invasivo_choque_anafilatico" value="invasivo_choque_anafilatico" <?php if($procedimentos_invasivos == 'invasivo_choque_anafilatico'){echo "checked";} ?>>
						<label for="invasivo_choque_anafilatico">choque anafilatico</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="procedimentos_invasivos" id="invasivo_pcr" value="invasivo_pcr" <?php if($procedimentos_invasivos == 'invasivo_pcr'){echo "checked";} ?>>
						<label for="invasivo_pcr">pcr</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="procedimentos_invasivos" id="reacao_ao_contraste" value="reacao_ao_contraste" <?php if($procedimentos_invasivos == 'invasivo_choque_anafilatico'){echo "checked";} ?>>
						<label for="reacao_ao_contraste">reação ao contraste</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="procedimentos_invasivos" id="hipotensao" value="hipotensao" <?php if($procedimentos_invasivos == 'hipotensao'){echo "checked";} ?>>
						<label for="hipotensao" >hipotensao</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="procedimentos_invasivos" id="dispineia" value="dispineia" <?php if($procedimentos_invasivos == 'dispineia'){echo "checked";} ?>>
						<label for="dispineia">dispineia</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="procedimentos_invasivos" id="baixa_saturacao" value="baixa_saturacao" <?php if($procedimentos_invasivos == 'baixa_saturacao'){echo "checked";} ?>>
						<label for="baixa_saturacao">baixa saturacao</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="procedimentos_invasivos" id="invasivos_outros" value="outros" <?php if($procedimentos_invasivos!='invasivo_choque_anafilatico'&&$procedimentos_invasivos!='invasivo_pcr'&&$procedimentos_invasivos!='reacao_ao_contraste'&&$procedimentos_invasivos!='hipotensao'&&$procedimentos_invasivos!='dispineia'&&$procedimentos_invasivos!='baixa_saturacao'&&$procedimentos_invasivos!=''){echo "checked";}  ?>>
						<label for="invasivos_outros">Outros</label>
					</div>
					<div class="input_box big">
						<input type="text" class="big_input" name="procedimentos_invasivos" id="invasivos_outros_desc" value="<?php if($procedimentos_invasivos!='invasivo_choque_anafilatico'&&$procedimentos_invasivos!='invasivo_pcr'&&$procedimentos_invasivos!='reacao_ao_contraste'&&$procedimentos_invasivos!='hipotensao'&&$procedimentos_invasivos!='dispineia'&&$procedimentos_invasivos!='baixa_saturacao'&&$procedimentos_invasivos!=''){print_r($form[0]['pergunta_procedimentos_invasivos']); }?>">
					</div>
				</li>
<?php
	$terapia_nutricional = $form[0]['pergunta_terapia_nutricional'];
?>
				<li class="">
					<h4>Terapia Nutricional</h4>
					<div class="input_box">
						<input type="checkbox" name="terapia_nutricional" id="paciente_incorreto_nutricao" value="paciente_incorreto_nutricao" <?php if($terapia_nutricional == 'paciente_incorreto_nutricao'){echo "checked";} ?>>
						<label for="paciente_incorreto_nutricao">paciente incorreto</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="terapia_nutricional" id="via_incorreta_nutricao" value="via_incorreta_nutricao" <?php if($terapia_nutricional == 'via_incorreta_nutricao'){echo "checked";} ?>>
						<label for="via_incorreta_nutricao">via incorreta</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="terapia_nutricional" id="volume_incorreto_nutricao" value="volume_incorreto_nutricao" <?php if($terapia_nutricional == 'volume_incorreto_nutricao'){echo "checked";} ?>>
						<label for="volume_incorreto_nutricao">volume incorreto</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="terapia_nutricional" id="consistencia_incorreta_nutricao" value="consistencia_incorreta_nutricao" <?php if($terapia_nutricional == 'consistencia_incorreta_nutricao'){echo "checked";} ?>>
						<label for="consistencia_incorreta_nutricao">consistencia incorreta</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="terapia_nutricional" id="erro_mapa_nutricao" value="erro_mapa_nutricao" <?php if($terapia_nutricional == 'erro_mapa_nutricao'){echo "checked";} ?>>
						<label for="erro_mapa_nutricao">erro no mapa de dietas</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="terapia_nutricional" id="erro_distribuicao_nutricao" value="erro_distribuicao_nutricao" <?php if($terapia_nutricional == 'erro_distribuicao_nutricao'){echo "checked";} ?>>
						<label for="erro_distribuicao_nutricao">erro na distribuicao pela copa</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="terapia_nutricional" id="alimentacao_externa_nutricao" value="alimentacao_externa_nutricao" <?php if($terapia_nutricional == 'alimentacao_externa_nutricao'){echo "checked";} ?>>
						<label for="alimentacao_externa_nutricao">alimentacao externa</label>
					</div>
					<div class="input_box">	
						<input type="checkbox" name="terapia_nutricional" id="posicionamento_incorreto_nutricao" value="posicionamento_incorreto_nutricao" <?php if($terapia_nutricional == 'posicionamento_incorreto_nutricao'){echo "checked";} ?>>
						<label for="posicionamento_incorreto_nutricao">posicionamento incorreto do paciente na administração</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="terapia_nutricional" id="nutricional_outros" value="outros" <?php if($terapia_nutricional!='paciente_incorreto_nutricao'&&$terapia_nutricional!='via_incorreta_nutricao'&&$terapia_nutricional!='volume_incorreto_nutricao'&&$terapia_nutricional!='consistencia_incorreta_nutricao'&&$terapia_nutricional!='erro_mapa_nutricao'&&$terapia_nutricional!='erro_distribuicao_nutricao'&&$terapia_nutricional!='alimentacao_externa_nutricao'&&$terapia_nutricional!='posicionamento_incorreto_nutricao'&&$terapia_nutricional!=''){echo "checked";}  ?>>
						<label for="nutricional_outros">Outros</label>
					</div>
					<div class="input_box big">
						<input type="text" class="big_input" name="terapia_nutricional" id="nutricional_outros_desc" value="<?php if($terapia_nutricional!='paciente_incorreto_nutricao'&&$terapia_nutricional!='via_incorreta_nutricao'&&$terapia_nutricional!='volume_incorreto_nutricao'&&$terapia_nutricional!='consistencia_incorreta_nutricao'&&$terapia_nutricional!='erro_mapa_nutricao'&&$terapia_nutricional!='erro_distribuicao_nutricao'&&$terapia_nutricional!='alimentacao_externa_nutricao'&&$terapia_nutricional!='posicionamento_incorreto_nutricao'&&$terapia_nutricional!=''){print_r($form[0]['pergunta_terapia_nutricional']); }?>">
					</div>
				</li>
<?php
	$hemovigilancia = $form[0]['pergunta_hemovigilancia'];
?>
				<li class="">
					<h4>Hemovigilância</h4>
					<div class="input_box">
						<input type="radio" name="hemovigilancia" id="hemo_paciente" value="hemo_paciente" <?php if($hemovigilancia == 'hemo_paciente'){echo "checked";} ?>>
						<label for="hemo_paciente">paciente</label>
					</div>
					<div class="input_box">
						<input type="radio" name="hemovigilancia" id="hemo_doador" value="hemo_doador" <?php if($hemovigilancia == 'hemo_doador'){echo "checked";} ?>>
						<label for="hemo_doador">doador</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="hemovigilancia" id="paciente_incorreto_transfusao" value="paciente_incorreto_transfusao" <?php if($hemovigilancia == 'paciente_incorreto_transfusao'){echo "checked";} ?>>
						<label for="paciente_incorreto_transfusao">paciente incorreto</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="hemovigilancia" id="cianose_transfusao"  value="cianose_transfusao" <?php if($hemovigilancia == 'cianose_transfusao'){echo "checked";} ?>>
						<label for="cianose_transfusao">cianose</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="hemovigilancia" id="Nauseas_vomito_transfusao" value="Nauseas_vomito_transfusao" <?php if($hemovigilancia == 'Nauseas_vomito_transfusao'){echo "checked";} ?>>
						<label for="Nauseas_vomito_transfusao">Nauseas vomito</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="hemovigilancia" id="tremores_calafrios_transfusao" value="tremores_calafrios_transfusao" <?php if($hemovigilancia == 'tremores_calafrios_transfusao'){echo "checked";} ?>>
						<label for="tremores_calafrios_transfusao">tremores calafrios</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="hemovigilancia" id="taquicardia_transfusao" value="taquicardia_transfusao" <?php if($hemovigilancia == 'taquicardia_transfusao'){echo "checked";} ?>>
						<label for="taquicardia_transfusao">taquicardia</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="hemovigilancia" id="febre_transfusao" value="febre_transfusao" <?php if($hemovigilancia == 'febre_transfusao'){echo "checked";} ?>>
						<label for="febre_transfusao">febre</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="hemovigilancia" id="pcr_transfusao" value="pcr_transfusao" <?php if($hemovigilancia == 'pcr_transfusao'){echo "checked";} ?>>
						<label for="pcr_transfusao">pcr</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="hemovigilancia" id="transfusao_outros" value="outros" value="transfusao_outros" <?php if($hemovigilancia!='hemo_paciente'&&$hemovigilancia!='hemo_doador'&&$hemovigilancia!='paciente_incorreto_transfusao'&&$hemovigilancia!='cianose_transfusao'&&$hemovigilancia!='Nauseas_vomito_transfusao'&&$hemovigilancia!='tremores_calafrios_transfusao'&&$hemovigilancia!='taquicardia_transfusao'&&$hemovigilancia!='febre_transfusao'&&$hemovigilancia!='pcr_transfusao'&&$hemovigilancia!=''){echo "checked";} ?>>
						<label for="transfusao_outros">outros</label>
					</div>
					<div class="input_box big">
						<input type="text" class="big_input" name="hemovigilancia" id="transfusao_outros_desc" value="<?php if($hemovigilancia!='hemo_paciente'&&$hemovigilancia!='hemo_doador'&&$hemovigilancia!='paciente_incorreto_transfusao'&&$hemovigilancia!='cianose_transfusao'&&$hemovigilancia!='Nauseas_vomito_transfusao'&&$hemovigilancia!='tremores_calafrios_transfusao'&&$hemovigilancia!='taquicardia_transfusao'&&$hemovigilancia!='febre_transfusao'&&$hemovigilancia!='pcr_transfusao'&&$hemovigilancia!=''){print_r($form[0]['pergunta_hemovigilancia']); }?>">
					</div>
				</li>
				<li class="">
					<h4>Tipo de reação</h4>
					<div class="input_box">
						<textarea name="tipo_reacao" id="tipo_reacao"><?php print_r($form[0]['pergunta_tipo_reacao']); ?></textarea>
					</div>
				</li>
				<li class="">
					<h4>Tipo de reação após transfusão</h4>
					<div class="input_box">
						<textarea name="tipo_reacao_transfusao" id="tipo_reacao_transfusao" ><?php print_r($form[0]['pergunta_tipo_reacao_transfusao']); ?></textarea>
					</div>
				</li>
				<li class="">
					<h4>Tempo de reação após transfusão</h4>
					<div class="input_box">
						<textarea name="tempo_reacao_transfusao" id="tempo_reacao_transfusao"><?php print_r($form[0]['pergunta_tempo_reacao_transfusao']); ?></textarea>
					</div>
				</li>
<?php
	$farmacovigilancia = $form[0]['pergunta_farmacovigilancia'];
?>
				<li class="">
					<h4>Farmácovigilância</h4>
					<div class="input_box">
						<input type="checkbox" name="farmacovigilancia" id="erro_dispensada_farmacia" value="erro_dispensada_farmacia" <?php if($farmacovigilancia == 'erro_dispensada_farmacia'){echo "checked";} ?>>
						<label for="erro_dispensada_farmacia">erro de medicação dispensada</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="farmacovigilancia" id="reacao_adversa_farmacia" value="reacao_adversa_farmacia" <?php if($farmacovigilancia == 'reacao_adversa_farmacia'){echo "checked";} ?>>
						<label for="reacao_adversa_farmacia">reacao adversa</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="farmacovigilancia" id="nao_padronisado_farmacia" value="nao_padronisado_farmacia" <?php if($farmacovigilancia == 'nao_padronisado_farmacia'){echo "checked";} ?>>
						<label for="nao_padronisado_farmacia">nao padronisado</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="farmacovigilancia" id="desvio_qualidade_farmacia" value="desvio_qualidade_farmacia" <?php if($farmacovigilancia == 'desvio_qualidade_farmacia'){echo "checked";} ?>>
						<label for="desvio_qualidade_farmacia">desvio qualidade</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="farmacovigilancia" id="via_incorreta_farmacia" value="via_incorreta_farmacia" <?php if($farmacovigilancia == 'via_incorreta_farmacia'){echo "checked";} ?>>
						<label for="via_incorreta_farmacia">via incorreta</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="farmacovigilancia" id="farmacia_outros" value="outros" <?php if($farmacovigilancia!='erro_dispensada_farmacia'&&$farmacovigilancia!='reacao_adversa_farmacia'&&$farmacovigilancia!='nao_padronisado_farmacia'&&$farmacovigilancia!='desvio_qualidade_farmacia'&&$farmacovigilancia!='via_incorreta_farmacia'&&$farmacovigilancia!=''){echo "checked";} ?>>
						<label for="farmacia_outros">outros</label>
					</div>
					<div class="input_box big">
						<input type="text" class="big_input" name="farmacovigilancia" id="farmacia_outros_desc" value="<?php if($farmacovigilancia!='erro_dispensada_farmacia'&&$farmacovigilancia!='reacao_adversa_farmacia'&&$farmacovigilancia!='nao_padronisado_farmacia'&&$farmacovigilancia!='desvio_qualidade_farmacia'&&$farmacovigilancia!='via_incorreta_farmacia'&&$farmacovigilancia!=''){print_r($form[0]['pergunta_farmacovigilancia']); }?>">
					</div>
				</li>
				<li class="">
					<h4>Nomes dos Medicamentos</h4>
					<div class="input_box">
						<textarea name="medicamentos" id="medicamentos" ><?php print_r($form[0]['pergunta_medicamentos']); ?></textarea>
					</div>
				</li>
<?php
	$tipo_gravidade = $form[0]['pergunta_tipo_gravidade'];
?>
				<li class="">					
					<h4>Tipo de incidente e gravidade</h4>
					<div class="input_box">
						<input type="checkbox" name="tipo_gravidade" id="obito" value="obito" <?php if($tipo_gravidade == 'obito'){echo "checked";} ?>>
						<label for="obito_adverso">obito(Causado ou antecipado pelo incidente)</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="tipo_gravidade" id="dano_grave" value="dano_grave" <?php if($tipo_gravidade == 'dano_grave'){echo "checked";} ?>>
						<label for="dano_grave_adverso">dano grave(Permanente e/ou longo prazo)</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="tipo_gravidade" id="dano_moderado" value="dano_moderado" <?php if($tipo_gravidade == 'dano_moderado'){echo "checked";} ?>>
						<label for="dano_moderado_adverso">dano moderado(Danos moderados, de media duração ou necessidade de intervenção)</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="tipo_gravidade" id="dano_leve" value="dano_leve" <?php if($tipo_gravidade == 'dano_leve'){echo "checked";} ?>>
						<label for="dano_leve_adverso">dano leve(sintomas leves, sem necessidade de tratamento ou intervenção)</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="tipo_gravidade" id="dano_near_miss" value="dano_near_miss" <?php if($tipo_gravidade == 'dano_near_miss'){echo "checked";} ?>>
						<label for="dano_near_miss">Near miss(incidente poderia causar um dano ao paciente e não causou)</label>
					</div>
				</li>
				<li class="">
					<h4>Descrição do evento</h4>
					<div class="input_box">
						<textarea name="descricao_evento" id="descricao_evento" ><?php print_r($form[0]['pergunta_descricao_evento']); ?></textarea>
					</div>
				</li>
				<li class="">
					<h4>Açoes imediatas adotadas</h4>
					<div class="input_box">
						<textarea name="acoes_adotadas" id="acoes_adotadas"><?php print_r($form[0]['pergunta_acoes_adotadas']); ?></textarea>
					</div>
				</li>
				<li class=" end">
					<h4>Obrigado pelas informações</h4>
					<div class=""imput_box>
					</div>
					<div class="input_box">
						<button class="btn" id="form_edit_btn">Enviar</button>
						<input type="submit" name="submit_btn" class="hidden" id="form_edit_submit_btn">
					</div>
				</li>
			</ul>
			<input type="text" class="hidden" name="formId" id="formId" value="<?php print_r($form[0]['id']); ?>">
			<input type="" name="usuario_id" id="usuario_id" class="hidden" value="<?php if(isset($_SESSION['usuario_id'])){ echo $_SESSION['usuario_id'];} else {echo '0';} ?>">
		</form>
	</section>
<?php
	}else{
?>
		<script>
			window.location.href = "index.php";
		</script>
<?php
	}
?>
	<button id="downloadCsv" class="hidden">asdasdasd</button>
<?php
	include_once('footer.php');
?>