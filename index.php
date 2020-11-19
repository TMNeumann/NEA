<?php
	require_once('header.php');

?>
	<section id="main">		
		<form class="notificacao" method="POST" action="http://192.168.150.222/nea/methods/insere.php">
			<ul class="card">
				<li class="start active">
					<h3>Bem-vindo(a)</h3>
					<h4>Notificação de eventos adversos</h4>
					<a href="" class="start btn">Começar</a>
				</li>
				<li class="hidden">
					<div class="input_box big">
						<h4>
							<label for="relator">Seu Nome</label>
						</h4>
						<input type="text" name="relator" id="relator" required="" class="big_input" value="<?php if(isset($_SESSION['usuario_nome'])){echo $_SESSION['usuario_nome'];} ?>">
						<div class="inner">
							<input type="checkbox" name="anonimo" id="anonimo">
							<label for="anonimo">Não quero me identificar</label>
						</div>
					</div>
				</li>
				<li class="hidden">
					<h4>Dados do evento</h4>
					<div class="input_box">
						<label for="data">Data</label>
						<input type="text" name="data" id="data" value="" required="">
					</div>
					<div class="input_box">
						<label for="hora">Hora</label>
						<input type="text" name="hora" id="hora" value="">
					</div>
					<div class="input_box">
						<label for="local">Local</label>
						<input type="text" name="local" id="local" value="">
					</div>
				</li>
				<li class="hidden">
					<h4>turno em que ocorreu o evento</h4>
					<div class="input_box">
						<input type="radio" name="turno" id="manha" value="manha">
						<label for="manha">manha</label>
					</div>
					<div class="input_box">
						<input type="radio" name="turno" id="tarde" value="tarde">
						<label for="tarde">tarde</label>
					</div>
					<div class="input_box">
						<input type="radio" name="turno" id="noite_1" value="noite_1">
						<label for="noite_1">noite 1</label>
						</div>
					<div class="input_box">
						<input type="radio" name="turno" id="noite_2" value="noite_2">
						<label for="noite_2">noite 2</label>
					</div>
					<div class="input_box">
						<input type="radio" name="turno" id="hi" value="hi">
						<label for="hi">HI</label>
					</div>
				</li>
				<li class="hidden">
					<h4>Dados da pessoa atingida</h4>
					<div class="input_box big">
						<label for="nome_atingido">Nome</label>
						<input type="text" name="nome_atingido" id="nome_atingido" required class="big_input">
					</div>
				</li>
				<li class="hidden">
					<h4>Classificação</h4>
					<div class="input_box">
						<input type="radio" name="classificacao" id="paciente" value="paciente">
						<label for="paciente">Paciente</label>
					</div>
					<div class="input_box">
						<input type="radio" name="classificacao" id="visitante" value="visitante">
						<label for="visitante">Visitante</label>
					</div>
					<div class="input_box">
						<input type="radio" name="classificacao" id="funcionario" value="funcionario">
						<label for="funcionario">Funcionário</label>
					</div>
				</li>
				<li class="hidden">
					<h4>Identificação</h4>
					<div class="input_box">
						<label for="prontuario">Prontuário</label>
						<input type="text" name="prontuario" id="prontuario">
					</div>
					<div class="input_box">
						<label for="registro">Registro</label>
						<input type="text" name="registro" id="registro">
					</div>
				</li>
				<li class="hidden">
					<h4>Convênio</h4>
					<div class="input_box">
						<input type="radio" name="convenio" id="ipe" value="ipe">
						<label for="ipe">IPE</label>
					</div>
					<div class="input_box">
						<input type="radio" name="convenio" id="sus" value="sus">
						<label for="sus">sus</label>
					</div>
					<div class="input_box">
						<input type="radio" name="convenio" id="cassi" value="cassi">
						<label for="cassi">cassi</label>
					</div>
					<div class="input_box">
						<input type="radio" name="convenio" id="unimed" value="unimed">
						<label for="unimed">unimed</label>
					</div>
					<div class="input_box">
						<input type="radio" name="convenio" id="caberbs" value="caberbs">
						<label for="caberbs">caberbs</label>
					</div>
					<div class="input_box">
						<input type="radio" name="convenio" id="geap" value="geap">
						<label for="geap">geap</label>
					</div>
					<div class="input_box">
						<input type="radio" name="convenio" id="convenio_outros" value="outros" value="convenio_outros">
						<label for="convenio_outros">outros</label>
					</div>
					<div class="input_box big">
						<input type="text" name="convenio" id="convenio_outros_desc" class="big_input" disabled>
					</div>
				</li>
				<li class="hidden">
					<h4>Sexo</h4>
					<div class="input_box">
						<input type="radio" name="sexo" id="feminino" value="feminino">
						<label for="feminino">feminino</label>
					</div>
					<div class="input_box">
						<input type="radio" name="sexo" id="masculino" value="masculino">
						<label for="masculino">masculino</label>
					</div>
					<div class="input_box">
						<label for="idade">idade</label>
						<input type="text" name="idade" id="idade">
					</div>
				</li>
				<li class="hidden">
					<h4>Tempo Médio de Internação</h4>
					<div class="input_box big">
						<label for="tempo_internacao">Tempo de internação no momento que ocorreu o incidente</label>
						<input type="text" name="tempo_internacao" id="tempo_internacao" class="big_input">
					</div>
				</li>
				<li class="hidden">
					<h4>Registrado no Prontuário</h4>
					<div class="input_box">
						<input type="radio" name="registrado_no_prontuario" id="registrado_sim" value="registrado_sim">
						<label for="registrado_sim">sim</label>
					</div>
					<div class="input_box">
						<input type="radio" name="registrado_no_prontuario" id="registrado_nao" value="registrado_nao">
						<label for="registrado_nao">nao</label>
					</div>
				</li>
				<li class="hidden">
					<h4>identificação do Paciente</h4>
					<div class="input_box">
						<input type="radio" name="identificacao_status" id="pulseira_sim" value="pulseira_sim">
						<label for="pulseira_sim">Paciente com pulseira</label>
					</div>
					<div class="input_box">
						<input type="radio" name="identificacao_status" id="identificacao_inadequada" value="identificacao_inadequada">
						<label for="identificacao_inadequada">identificação inadequada</label>
					</div>
					<div class="input_box">
						<input type="radio" name="identificacao_status" id="identificacao_outros" value="outros">
						<label for="identificacao_outros">Outros</label>
					</div>
					<div class="input_box big">
						<input type="text" class="big_input" name="identificacao_status" id="identificacao_outros_desc" disabled="">
					</div>
				</li>
				<li class="hidden">
					<h4>Quedas</h4>
					<div class="input_box">
						<input type="radio" name="queda" id="da_maca" value="da_maca">
						<label for="da_maca">da maca</label>
					</div>
					<div class="input_box">
						<input type="radio" name="queda" id="do_leito" value="do_leito">
						<label for="do_leito">do leito</label>
					</div>
					<div class="input_box">
						<input type="radio" name="queda" id="propria_altura" value="">
						<label for="propria_altura">propria altura</label>
					</div>
					<div class="input_box">
						<input type="radio" name="queda" id="queda_outros" value="outros">
						<label for="queda_outros">outros</label>
					</div>
					<div class="input_box big">
						<input type="text" class="big_input" name="queda" id="queda_outros_desc" disabled="">
					</div>
				</li>
				<li class="hidden">
					<h4>Localização</h4>
					<div class="input_box">
						<select id="setor" required="">							
							<option value="">Selecionar</option>
							<option value="bloco_a">bloco A</option>
							<option value="bloco_b">Bloco B</option>
							<option value="bloco_cirurgico">Bloco Cirurgico</option>
							<option value="maternidade">maternidade</option>
							<option value="pronto_socorro">pronto socorro</option>
							<option value="tomografia">tomografia</option>
							<option value="raio x">raio x</option>
							<option value="ecografia">ecografia</option>
							<option value="endoscopia">endoscopia</option>
						</select>
					</div>
				</li>
				<li class="hidden">
					<h4>Dispositivos internos</h4>
					<div class="input_box">
						<input type="checkbox" name="dispositivos_internos" id="drenos" value="drenos">
						<label for="drenos">drenos</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="dispositivos_internos" id="cateteres" value="cateteres">
						<label for="cateteres">cateteres</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="dispositivos_internos" id="sonda_enteral" value="sonda_enteral">
						<label for="sonda_enteral">sonda enteral</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="dispositivos_internos" id="sonda_vesical" value="sonda_vesical">
						<label for="sonda_vesical">sonda vesical</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="dispositivos_internos" id="dispositivos_obstruida" value="dispositivos_obstruida">
						<label for="dispositivos_obstruida">obstruida</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="dispositivos_internos" id="dispositivos_deslocada" value="dispositivos_deslocada">
						<label for="dispositivos_deslocada">deslocada</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="dispositivos_internos" id="dispositivos_mal_posicionada" value="dispositivos_mal_posicionada">
						<label for="dispositivos_mal_posicionada">mal posicionada</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="dispositivos_internos" id="dispositivos_outros" value="outros">
						<label for="dispositivos_outros">dispositivos_outros</label>
					</div>
					<div class="input_box big">
						<input type="text" class="big_input" name="dispositivos_internos" id="dispositivos_outros_desc" disabled="">
					</div>
				</li>
				<li class="hidden">
					<h4>TOT (TUBO ENDOTRAQUEAL)</h4>
					<div class="input_box">
						<input type="radio" name="tot" id="perda_tot" value="perda_tot">
						<label for="perda_tot">perda</label>
					</div>
					<div class="input_box">
						<input type="radio" name="tot" id="rompimento_tot" value="rompimento_tot">
						<label for="rompimento_tot">rompimento</label>
					</div>
					<div class="input_box">
						<input type="radio" name="tot" id="tot_outros" value="outros">
						<label for="tot_outros">outros</label>
					</div>
					<div class="input_box big">
						<input type="text" class="big_input" name="tot" id="tot_outros_desc" disabled="">
					</div>
				</li>
				<li class="hidden">
					<h4>Pele</h4>
					<div class="input_box">
						<input type="checkbox" name="pele" id="lesao_bolha_pele" value="lesao_bolha_pele">
						<label for="lesao_bolha_pele">lesao bolha</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="pele" id="assadura_pele" value="assadura_pele">
						<label for="assadura_pele">assadura</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="pele" id="queimadura_pele" value="queimadura_pele">
						<label for="queimadura_pele">queimadura</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="pele" id="flebite_pele" value="flebite_pele">
						<label for="flebite_pele">flebite</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="pele" id="trauma_escoriacao_pele" value="trauma_escoriacao_pele">
						<label for="trauma_escoriacao_pele">trauma escoriacao</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="pele" id="ulcera_por_pressao_pele" value="ulcera_por_pressao_pele">
						<label for="ulcera_por_pressao_pele">ulcera por pressao</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="pele" id="lesao_bolha" value="lesao_bolha">
						<label for="lesao_bolha">lesao bolha</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="pele" id="lesao_medicamento" value="lesao_medicamento">
						<label for="lesao_medicamento">lesao medicamento</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="pele" id="lesao_outros" value="outros">
						<label for="lesao_outros">Outros</label>
					</div>
					<div class="input_box big">
						<input type="text" class="big_input" name="pele" id="lesao_outros_desc" disabled="">
					</div>
				</li>
				<li class="hidden">
					<h4>Exames</h4>
					<div class="input_box">
						<input type="checkbox" name="exames" id="paciente_incorreto_exames" value="paciente_incorreto_exames">
						<label for="paciente_incorreto_exames">paciente incorreto</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="exames" id="solicitacao_incorreta_exames" value="solicitacao_incorreta_exames">
						<label for="solicitacao_incorreta_exames">solicitacao incorreta</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="exames" id="amostra_incorreta_exames" value="amostra_incorreta_exames">
						<label for="amostra_incorreta_exames">amostra incorreta</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="exames" id="resultado_incorreto_exames" value="resultado_incorreto_exames">
						<label for="resultado_incorreto_exames">resultado incorreto</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="exames" id="exame_outros" value="outros">
						<label for="exame_outros">Outros</label>
					</div>
					<div class="input_box big">
						<input type="text" class="big_input" name="exames" id="exame_outros_desc" disabled="">
					</div>
				</li>
				<li class="hidden">
					<h4>Cirurgia/Anestesia</h4>
					<div class="input_box">
						<input type="checkbox" name="cirurgia_anestesia" id="paciente_incorreto_cirurgia_anestesia" value="paciente_incorreto_cirurgia_anestesia">
						<label for="paciente_incorreto_cirurgia_anestesia">paciente incorreto</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="cirurgia_anestesia" id="parte_corpo_incorreta_cirurgia_anestesia" value="parte_corpo_incorreta_cirurgia_anestesia">
						<label for="parte_corpo_incorreta_cirurgia_anestesia">parte corpo incorreta</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="cirurgia_anestesia" id="falha_anestesica_cirurgia_anestesia" value="falha_anestesica_cirurgia_anestesia">
						<label for="falha_anestesica_cirurgia_anestesia">falha anestesica</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="cirurgia_anestesia" id="bronco_aspiracao_cirurgia_anestesia" value="bronco_aspiracao_cirurgia_anestesia">
						<label for="bronco_aspiracao_cirurgia_anestesia">bronco aspiracao</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="cirurgia_anestesia" id="artigo_medico_hospitalar" value="artigo_medico_hospitalar">
						<label for="artigo_medico_hospitalar">artigo medico hospitalar</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="cirurgia_anestesia" id="queimadura_por_cauterio" value="queimadura_por_cauterio">
						<label for="queimadura_por_cauterio">queimadura por cauterio</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="cirurgia_anestesia" id="dirurgia_outros" value="outros" value="">
						<label for="cirurgia_outros">Outros</label>
					</div>
					<div class="input_box big">
						<input type="text" class="big_input" name="cirurgia_anestesia" id="cirurgia_outros_desc" disabled="">
					</div>
				</li>
				<li class="hidden">
					<h4>Procedimentos Invasivos</h4>
					<div class="input_box">
						<input type="checkbox" name="procedimentos_invasivos" id="invasivo_choque_anafilatico" value="invasivo_choque_anafilatico">
						<label for="invasivo_choque_anafilatico">choque anafilatico</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="procedimentos_invasivos" id="invasivo_pcr" value="invasivo_pcr">
						<label for="invasivo_pcr">pcr</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="procedimentos_invasivos" id="reacao_ao_contraste" value="reacao_ao_contraste">
						<label for="reacao_ao_contraste">reação ao contraste</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="procedimentos_invasivos" id="hipotensao" value="hipotensao">
						<label for="hipotensao" >hipotensao</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="procedimentos_invasivos" id="dispineia" value="dispineia">
						<label for="dispineia">dispineia</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="procedimentos_invasivos" id="baixa_saturacao" value="baixa_saturacao">
						<label for="baixa_saturacao">baixa saturacao</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="procedimentos_invasivos" id="invasivos_outros" value="outros">
						<label for="invasivos_outros">Outros</label>
					</div>
					<div class="input_box big">
						<input type="text" class="big_input" name="procedimentos_invasivos" id="invasivos_outros_desc" disabled="">
					</div>
				</li>
				<li class="hidden">
					<h4>Terapia Nutricional</h4>
					<div class="input_box">
						<input type="checkbox" name="terapia_nutricional" id="paciente_incorreto_nutricao" value="paciente_incorreto_nutricao">
						<label for="paciente_incorreto_nutricao">paciente incorreto</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="terapia_nutricional" id="via_incorreta_nutricao" value="via_incorreta_nutricao">
						<label for="via_incorreta_nutricao">via incorreta</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="terapia_nutricional" id="volume_incorreto_nutricao" value="volume_incorreto_nutricao">
						<label for="volume_incorreto_nutricao">volume incorreto</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="terapia_nutricional" id="consistencia_incorreta_nutricao" value="consistencia_incorreta_nutricao">
						<label for="consistencia_incorreta_nutricao">consistencia incorreta</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="terapia_nutricional" id="erro_mapa_nutricao" value="erro_mapa_nutricao">
						<label for="erro_mapa_nutricao">erro no mapa de dietas</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="terapia_nutricional" id="erro_distribuicao_nutricao" value="erro_distribuicao_nutricao">
						<label for="erro_distribuicao_nutricao">erro na distribuicao pela copa</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="terapia_nutricional" id="alimentacao_externa_nutricao" value="alimentacao_externa_nutricao">
						<label for="alimentacao_externa_nutricao">alimentacao externa</label>
					</div>
					<div class="input_box">	
						<input type="checkbox" name="terapia_nutricional" id="posicionamento_incorreto_nutricao" value=""posicionamento_incorreto_nutricao>
						<label for="posicionamento_incorreto_nutricao">posicionamento incorreto do paciente na administração</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="terapia_nutricional" id="nutricional_outros" value="outros">
						<label for="nutricional_outros">Outros</label>
					</div>
					<div class="input_box big">
						<input type="text" class="big_input" name="terapia_nutricional" id="nutricional_outros_desc" disabled="">
					</div>
				</li>
				<li class="hidden">
					<h4>Hemovigilância</h4>
					<div class="input_box">
						<input type="radio" name="hemovigilancia" id="hemo_paciente" value="hemo_paciente">
						<label for="hemo_paciente">paciente</label>
					</div>
					<div class="input_box">
						<input type="radio" name="hemovigilancia" id="hemo_doador" value="hemo_doador">
						<label for="hemo_doador">doador</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="hemovigilancia" id="paciente_incorreto_transfusao" value="paciente_incorreto_transfusao">
						<label for="paciente_incorreto_transfusao">paciente incorreto</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="hemovigilancia" id="cianose_transfusao"  value="cianose_transfusao">
						<label for="cianose_transfusao">cianose</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="hemovigilancia" id="Nauseas_vomito_transfusao" value="Nauseas_vomito_transfusao">
						<label for="Nauseas_vomito_transfusao">Nauseas vomito</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="hemovigilancia" id="tremores_calafrios_transfusao" value="tremores_calafrios_transfusao">
						<label for="tremores_calafrios_transfusao">tremores calafrios</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="hemovigilancia" id="taquicardia_transfusao" value="taquicardia_transfusao">
						<label for="taquicardia_transfusao">taquicardia</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="hemovigilancia" id="febre_transfusao" value="febre_transfusao">
						<label for="febre_transfusao">febre</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="hemovigilancia" id="pcr_transfusao" value="pcr_transfusao">
						<label for="pcr_transfusao">pcr</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="hemovigilancia" id="transfusao_outros" value="outros" value="transfusao_outros">
						<label for="transfusao_outros">outros</label>
					</div>
					<div class="input_box big">
						<input type="text" class="big_input" name="hemovigilancia" id="transfusao_outros_desc" disabled="">
					</div>
				</li>
				<li class="hidden">
					<h4>Tipo de reação</h4>
					<div class="input_box">
						<textarea name="tipo_reacao" id="tipo_reacao"></textarea>
					</div>
				</li>
				<li class="hidden">
					<h4>Tipo de reação após transfusão</h4>
					<div class="input_box">
						<textarea name="tipo_reacao_transfusao" id="tipo_reacao_transfusao" ></textarea>
					</div>
				</li>
				<li class="hidden">
					<h4>Tempo de reação após transfusão</h4>
					<div class="input_box">
						<textarea name="tempo_reacao_transfusao" id="tempo_reacao_transfusao"></textarea>
					</div>
				</li>
				<li class="hidden">
					<h4>Farmácovigilância</h4>
					<div class="input_box">
						<input type="checkbox" name="farmacovigilancia" id="erro_dispensada_farmacia" value="erro_dispensada_farmaciav">
						<label for="erro_dispensada_farmacia">erro de medicação dispensada</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="farmacovigilancia" id="reacao_adversa_farmacia" value="reacao_adversa_farmacia">
						<label for="reacao_adversa_farmacia">reacao adversa</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="farmacovigilancia" id="nao_padronisado_farmacia" value="nao_padronisado_farmacia">
						<label for="nao_padronisado_farmacia">nao padronisado</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="farmacovigilancia" id="desvio_qualidade_farmacia" value="desvio_qualidade_farmacia">
						<label for="desvio_qualidade_farmacia">desvio qualidade</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="farmacovigilancia" id="via_incorreta_farmacia" value="via_incorreta_farmacia">
						<label for="via_incorreta_farmacia">via incorreta</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="farmacovigilancia" id="farmacia_outros" value="outros">
						<label for="farmacia_outros">outros</label>
					</div>
					<div class="input_box big">
						<input type="text" class="big_input" name="farmacovigilancia" id="farmacia_outros_desc" disabled="">
					</div>
				</li>
				<li class="hidden">
					<h4>Nomes dos Medicamentos</h4>
					<div class="input_box">
						<textarea name="medicamentos" id="medicamentos" ></textarea>
					</div>
				</li>
				<li class="hidden">					
					<h4>Tipo de incidente e gravidade</h4>
					<div class="input_box">
						<input type="checkbox" name="tipo_gravidade" id="obito" value="obito">
						<label for="obito_adverso">obito(Causado ou antecipado pelo incidente)</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="tipo_gravidade" id="dano_grave" value="dano_grave">
						<label for="dano_grave_adverso">dano grave(Permanente e/ou longo prazo)</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="tipo_gravidade" id="dano_moderado" value="dano_moderado">
						<label for="dano_moderado_adverso">dano moderado(Danos moderados, de media duração ou necessidade de intervenção)</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="tipo_gravidade" id="dano_leve" value="dano_leve">
						<label for="dano_leve_adverso">dano leve(sintomas leves, sem necessidade de tratamento ou intervenção)</label>
					</div>
					<div class="input_box">
						<input type="checkbox" name="tipo_gravidade" id="dano_near_miss" value="dano_near_miss">
						<label for="dano_near_miss">Near miss(incidente poderia causar um dano ao paciente e não causou)</label>
					</div>
				</li>
				<li class="hidden">
					<h4>Descrição do evento</h4>
					<div class="input_box">
						<textarea name="descricao_evento" id="descricao_evento" ></textarea>
					</div>
				</li>
				<li class="hidden">
					<h4>Açoes imediatas adotadas</h4>
					<div class="input_box">
						<textarea name="acoes_adotadas" id="acoes_adotadas"></textarea>
					</div>
				</li>
				<li class="hidden end">
					<h4>Obrigado pelas informações</h4>
					<div class=""imput_box>
					</div>
					<div class="input_box">
						<button class="btn submit_btn">Enviar</button>
						<input type="submit" name="submit_btn" class="hidden hidden_submit_btn">
						<input type="" name="usuario_id" id="usuario_id" class="hidden" value="<?php if(isset($_SESSION['usuario_id'])){ echo $_SESSION['usuario_id'];} else {echo '0';} ?>">
					</div>
				</li>
			</ul>
			<div class="arrow_box">
				<a href="" id="prev" class="hidden"><img src="style/img/left.png"></a>
				<a href="" id="nex" class="hidden"><img src="style/img/right.png"></a>
			</div>
			
		</form>	
	</section>
	<button id="downloadCsv" class="hidden">Download CSV File</button>
<script>
	
	
</script>


<?php
	require_once 'footer.php';
?>
