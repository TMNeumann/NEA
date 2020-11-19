-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Nov-2020 às 08:18
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `nea`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `formulario`
--

CREATE TABLE `formulario` (
  `id` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `data_mod` varchar(20) NOT NULL,
  `usuario` int(11) NOT NULL,
  `pergunta_relator` varchar(255) NOT NULL,
  `pergunta_data` varchar(255) NOT NULL,
  `pergunta_hora` varchar(255) NOT NULL,
  `pergunta_local` varchar(255) NOT NULL,
  `pergunta_turno` varchar(255) NOT NULL,
  `pergunta_nome_atingido` varchar(255) NOT NULL,
  `pergunta_classificacao` varchar(255) NOT NULL,
  `pergunta_prontuario` varchar(255) NOT NULL,
  `pergunta_registro` varchar(255) NOT NULL,
  `pergunta_convenio` varchar(255) NOT NULL,
  `pergunta_sexo` varchar(255) NOT NULL,
  `pergunta_idade` varchar(255) NOT NULL,
  `pergunta_tempo_internacao` varchar(50) NOT NULL,
  `pergunta_registrado_no_prontuario` varchar(255) NOT NULL,
  `pergunta_identificacao_status` varchar(255) NOT NULL,
  `pergunta_queda` varchar(255) NOT NULL,
  `pergunta_setor` varchar(255) NOT NULL,
  `pergunta_dispositivos_internos` varchar(255) NOT NULL,
  `pergunta_tot` varchar(255) NOT NULL,
  `pergunta_pele` varchar(255) NOT NULL,
  `pergunta_exames` varchar(255) NOT NULL,
  `pergunta_cirurgia_anestesia` varchar(255) NOT NULL,
  `pergunta_procedimentos_invasivos` varchar(255) NOT NULL,
  `pergunta_terapia_nutricional` varchar(255) NOT NULL,
  `pergunta_hemovigilancia` varchar(255) NOT NULL,
  `pergunta_tipo_reacao` varchar(255) NOT NULL,
  `pergunta_tipo_reacao_transfusao` varchar(255) NOT NULL,
  `pergunta_tempo_reacao_transfusao` varchar(255) NOT NULL,
  `pergunta_farmacovigilancia` varchar(255) NOT NULL,
  `pergunta_medicamentos` varchar(255) NOT NULL,
  `pergunta_tipo_gravidade` varchar(255) NOT NULL,
  `pergunta_descricao_evento` varchar(255) NOT NULL,
  `pergunta_acoes_adotadas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `formulario`
--

INSERT INTO `formulario` (`id`, `data`, `data_mod`, `usuario`, `pergunta_relator`, `pergunta_data`, `pergunta_hora`, `pergunta_local`, `pergunta_turno`, `pergunta_nome_atingido`, `pergunta_classificacao`, `pergunta_prontuario`, `pergunta_registro`, `pergunta_convenio`, `pergunta_sexo`, `pergunta_idade`, `pergunta_tempo_internacao`, `pergunta_registrado_no_prontuario`, `pergunta_identificacao_status`, `pergunta_queda`, `pergunta_setor`, `pergunta_dispositivos_internos`, `pergunta_tot`, `pergunta_pele`, `pergunta_exames`, `pergunta_cirurgia_anestesia`, `pergunta_procedimentos_invasivos`, `pergunta_terapia_nutricional`, `pergunta_hemovigilancia`, `pergunta_tipo_reacao`, `pergunta_tipo_reacao_transfusao`, `pergunta_tempo_reacao_transfusao`, `pergunta_farmacovigilancia`, `pergunta_medicamentos`, `pergunta_tipo_gravidade`, `pergunta_descricao_evento`, `pergunta_acoes_adotadas`) VALUES
(18, '2020-11-11 00:00:00', '', 0, 'anonimo', '', '', '', 'noite_1', 'asd', '', '', '', '', '', '', '', '', '', '', 'selecionar', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas`
--

CREATE TABLE `perguntas` (
  `id` int(11) NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `resposta` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cargo` varchar(20) NOT NULL,
  `ativo` int(2) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `data_cadastro` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `cargo`, `ativo`, `senha`, `data_cadastro`) VALUES
(13, 'thyago', 'thyago.neumann@funbeca.com.br', 'admin', 1, 'Y2FmZQ==', '2020-11-11');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `perguntas`
--
ALTER TABLE `perguntas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `formulario`
--
ALTER TABLE `formulario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `perguntas`
--
ALTER TABLE `perguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
