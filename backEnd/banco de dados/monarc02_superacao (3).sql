-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18/06/2024 às 20:38
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `monarc02_superacao`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `avaliacao`
--

CREATE TABLE `avaliacao` (
  `ID_AVALIACAO` int(11) NOT NULL,
  `ID_COLABORADOR_AVALIADO` int(11) NOT NULL,
  `ID_COLABORADOR_AVALIADOR` int(11) NOT NULL,
  `NOTA` decimal(2,2) DEFAULT NULL,
  `DATA_AVALIACAO` datetime DEFAULT NULL,
  `STATUS` int(11) DEFAULT NULL,
  `OBSERVACAO` varchar(4000) DEFAULT NULL,
  `TIPO_AVALIACAO` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `colaborador`
--

CREATE TABLE `colaborador` (
  `ID_COLABORADOR` int(11) NOT NULL,
  `NOME` varchar(100) NOT NULL,
  `FUNCAO` varchar(45) DEFAULT NULL,
  `DEPARTAMENTO` varchar(45) DEFAULT NULL,
  `CHEFIA` varchar(100) DEFAULT NULL,
  `PERFIL` int(11) DEFAULT NULL,
  `DATA_ADMISSAO` datetime DEFAULT NULL,
  `STATUS_COLABORADOR` tinyint(4) DEFAULT NULL,
  `SENHA` varchar(45) NOT NULL,
  `EMAIL` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `colaborador`
--

INSERT INTO `colaborador` (`ID_COLABORADOR`, `NOME`, `FUNCAO`, `DEPARTAMENTO`, `CHEFIA`, `PERFIL`, `DATA_ADMISSAO`, `STATUS_COLABORADOR`, `SENHA`, `EMAIL`) VALUES
(1, 'Matheus Bandeira', 'TECNICO INFORMATICA II', 'Gestao - Ti Servicos', 'Alexandre Preto', 2, NULL, NULL, 'teste@123', 'matheus@teste.com'),
(2, 'Lucas Beccon', 'TECNICO INFORMATICA II', 'Gestao - Ti Servicos', 'Matheus Bandeira', 1, NULL, NULL, 'teste@123', 'lucas@teste.com'),
(3, 'Marcelo Leal', 'SUPERVISOR II', 'Gestao - Ti Servicos', 'Matheus Bandeira', 1, NULL, NULL, 'teste@123', 'marcelo@teste.com'),
(4, 'Douglas Otto', 'TECNICO INFORMATICA II', 'Gestao - Ti Servicos', 'Matheus Bandeira', 1, NULL, NULL, 'teste@123', 'douglas@teste.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `objetivo`
--

CREATE TABLE `objetivo` (
  `ID_OBJETIVO` int(11) NOT NULL,
  `DESCRICAO_OBJETIVO` varchar(4000) DEFAULT NULL,
  `ID_COLABORADOR` int(11) NOT NULL,
  `NOME_OBJETIVO` varchar(100) DEFAULT NULL,
  `PESO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `objetivo`
--

INSERT INTO `objetivo` (`ID_OBJETIVO`, `DESCRICAO_OBJETIVO`, `ID_COLABORADOR`, `NOME_OBJETIVO`, `PESO`) VALUES
(1, 'asd', 1, 'asdas', 12);

-- --------------------------------------------------------

--
-- Estrutura para tabela `resultado`
--

CREATE TABLE `resultado` (
  `ID_RESULTADO` int(11) NOT NULL,
  `ID_COLABORADOR_AVALIADO` int(11) NOT NULL,
  `ID_OBJETIVO` int(11) DEFAULT NULL,
  `ID_COLABORADOR_AVALIADOR` int(11) NOT NULL,
  `STATUS` int(11) NOT NULL,
  `ANO` mediumint(4) DEFAULT NULL,
  `MES` mediumint(2) DEFAULT NULL,
  `DATA_CRIACAO` datetime DEFAULT NULL,
  `DATA_LIBERACAO` datetime DEFAULT NULL,
  `DATA_APROVACAO` datetime DEFAULT NULL,
  `DATA_AVALIACAO` datetime DEFAULT NULL,
  `JUSTIFICATIVA` varchar(4000) DEFAULT NULL,
  `COMECAR` varchar(4000) DEFAULT NULL,
  `PARAR` varchar(4000) DEFAULT NULL,
  `CONTINUAR` varchar(4000) DEFAULT NULL,
  `NOTA_RESULTADO` int(11) DEFAULT NULL,
  `JUSTIFICATIVA_NAO_CONTRATACAO` varchar(4000) DEFAULT NULL,
  `ID_AVALIACAO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD PRIMARY KEY (`ID_AVALIACAO`),
  ADD KEY `ID_COLABORADOR_AVALIADOR_idx` (`ID_COLABORADOR_AVALIADOR`),
  ADD KEY `FK_COLABORADOR_AVALIADO_idx` (`ID_COLABORADOR_AVALIADO`);

--
-- Índices de tabela `colaborador`
--
ALTER TABLE `colaborador`
  ADD PRIMARY KEY (`ID_COLABORADOR`),
  ADD UNIQUE KEY `EMAIL_UNIQUE` (`EMAIL`);

--
-- Índices de tabela `objetivo`
--
ALTER TABLE `objetivo`
  ADD PRIMARY KEY (`ID_OBJETIVO`),
  ADD KEY `FK_OBJETIVO_COLABORADOR_idx` (`ID_COLABORADOR`);

--
-- Índices de tabela `resultado`
--
ALTER TABLE `resultado`
  ADD PRIMARY KEY (`ID_RESULTADO`),
  ADD KEY `FK_RESULTADO_COLABORADOR_idx` (`ID_COLABORADOR_AVALIADO`),
  ADD KEY `FK_RESULTADO_OBJETIVO_idx` (`ID_OBJETIVO`),
  ADD KEY `FK_RESULTADO_AVALIADOR_idx` (`ID_COLABORADOR_AVALIADOR`),
  ADD KEY `FK_RESULTADO_AVALIACAO_idx` (`ID_AVALIACAO`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  MODIFY `ID_AVALIACAO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `colaborador`
--
ALTER TABLE `colaborador`
  MODIFY `ID_COLABORADOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `objetivo`
--
ALTER TABLE `objetivo`
  MODIFY `ID_OBJETIVO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `resultado`
--
ALTER TABLE `resultado`
  MODIFY `ID_RESULTADO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD CONSTRAINT `FK_COLABORADOR_AVALIADO` FOREIGN KEY (`ID_COLABORADOR_AVALIADO`) REFERENCES `colaborador` (`ID_COLABORADOR`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_COLABORADOR_AVALIADOR` FOREIGN KEY (`ID_COLABORADOR_AVALIADOR`) REFERENCES `colaborador` (`ID_COLABORADOR`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `objetivo`
--
ALTER TABLE `objetivo`
  ADD CONSTRAINT `FK_OBJETIVO_COLABORADOR` FOREIGN KEY (`ID_COLABORADOR`) REFERENCES `colaborador` (`ID_COLABORADOR`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `resultado`
--
ALTER TABLE `resultado`
  ADD CONSTRAINT `FK_RESULTADO_AVALIACAO` FOREIGN KEY (`ID_AVALIACAO`) REFERENCES `avaliacao` (`ID_AVALIACAO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_RESULTADO_AVALIADOR` FOREIGN KEY (`ID_COLABORADOR_AVALIADOR`) REFERENCES `colaborador` (`ID_COLABORADOR`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_RESULTADO_COLABORADOR` FOREIGN KEY (`ID_COLABORADOR_AVALIADO`) REFERENCES `colaborador` (`ID_COLABORADOR`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_RESULTADO_OBJETIVO` FOREIGN KEY (`ID_OBJETIVO`) REFERENCES `objetivo` (`ID_OBJETIVO`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
