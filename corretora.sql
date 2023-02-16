-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Fev-2023 às 22:06
-- Versão do servidor: 10.11.0-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `corretora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `associado`
--

CREATE TABLE `associado` (
  `FK_E3_OCORRENCIAS_nr` int(3) DEFAULT NULL,
  `FK_E2_AUTOMOVEL_renavam` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `e1_clientes`
--

CREATE TABLE `e1_clientes` (
  `codigo` int(3) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `cpf` int(11) DEFAULT NULL,
  `rg` int(10) DEFAULT NULL,
  `Telefone` varchar(10) DEFAULT NULL,
  `FK_endereco_endereco_PK` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `e1_clientes`
--

INSERT INTO `e1_clientes` (`codigo`, `nome`, `cpf`, `rg`, `Telefone`, `FK_endereco_endereco_PK`) VALUES
(2, 'bs', 12, 21, '21', NULL),
(3, 'f', 3, 3, '3', NULL),
(6, 'c', 6, 6, '6', NULL),
(34, 'ab', 34, 34, '34', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `e2_automovel`
--

CREATE TABLE `e2_automovel` (
  `renavam` int(11) NOT NULL,
  `placa` varchar(10) DEFAULT NULL,
  `fabricante` varchar(20) DEFAULT NULL,
  `ano` int(4) DEFAULT NULL,
  `modelo` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `e3_ocorrencias`
--

CREATE TABLE `e3_ocorrencias` (
  `nr` int(3) NOT NULL,
  `data_` date DEFAULT NULL,
  `local_` varchar(20) DEFAULT NULL,
  `descricao` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `e3_ocorrencias`
--

INSERT INTO `e3_ocorrencias` (`nr`, `data_`, `local_`, `descricao`) VALUES
(1, '2023-02-16', 'ali', 'bateu feio'),
(2, '2023-02-15', 'acula', 'bateu fofo'),
(3, '2023-02-17', 'a', 'a'),
(4, '2023-02-17', 'a', 'a'),
(5, '2023-02-17', 'a', 'a'),
(6, '2023-02-01', 'ali', 'bateu feio');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `endereco_PK` int(2) NOT NULL,
  `logradouro` varchar(50) DEFAULT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `possui`
--

CREATE TABLE `possui` (
  `FK_E1_CLIENTES_codigo` int(3) DEFAULT NULL,
  `FK_E2_AUTOMOVEL_renavam` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `associado`
--
ALTER TABLE `associado`
  ADD KEY `FK_ASSOCIADO_1` (`FK_E3_OCORRENCIAS_nr`),
  ADD KEY `FK_ASSOCIADO_2` (`FK_E2_AUTOMOVEL_renavam`);

--
-- Índices para tabela `e1_clientes`
--
ALTER TABLE `e1_clientes`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `FK_E1_CLIENTES_2` (`FK_endereco_endereco_PK`);

--
-- Índices para tabela `e2_automovel`
--
ALTER TABLE `e2_automovel`
  ADD PRIMARY KEY (`renavam`);

--
-- Índices para tabela `e3_ocorrencias`
--
ALTER TABLE `e3_ocorrencias`
  ADD PRIMARY KEY (`nr`);

--
-- Índices para tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`endereco_PK`);

--
-- Índices para tabela `possui`
--
ALTER TABLE `possui`
  ADD KEY `FK_POSSUI_1` (`FK_E1_CLIENTES_codigo`),
  ADD KEY `FK_POSSUI_2` (`FK_E2_AUTOMOVEL_renavam`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `associado`
--
ALTER TABLE `associado`
  ADD CONSTRAINT `FK_ASSOCIADO_1` FOREIGN KEY (`FK_E3_OCORRENCIAS_nr`) REFERENCES `e3_ocorrencias` (`nr`),
  ADD CONSTRAINT `FK_ASSOCIADO_2` FOREIGN KEY (`FK_E2_AUTOMOVEL_renavam`) REFERENCES `e2_automovel` (`renavam`);

--
-- Limitadores para a tabela `e1_clientes`
--
ALTER TABLE `e1_clientes`
  ADD CONSTRAINT `FK_E1_CLIENTES_2` FOREIGN KEY (`FK_endereco_endereco_PK`) REFERENCES `endereco` (`endereco_PK`) ON DELETE NO ACTION;

--
-- Limitadores para a tabela `possui`
--
ALTER TABLE `possui`
  ADD CONSTRAINT `FK_POSSUI_1` FOREIGN KEY (`FK_E1_CLIENTES_codigo`) REFERENCES `e1_clientes` (`codigo`),
  ADD CONSTRAINT `FK_POSSUI_2` FOREIGN KEY (`FK_E2_AUTOMOVEL_renavam`) REFERENCES `e2_automovel` (`renavam`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
