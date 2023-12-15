-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15/12/2023 às 01:45
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
-- Banco de dados: `tecnobroccoli`
--
CREATE DATABASE IF NOT EXISTS `tecnobroccoli` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tecnobroccoli`;

DELIMITER $$
--
-- Procedimentos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `InserirRedator` (IN `p_Senha` VARCHAR(50), IN `p_Login` VARCHAR(50))   BEGIN
  INSERT INTO Redator (Senha, Login)
  VALUES (p_Senha, p_Login);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `administrador`
--

CREATE TABLE `administrador` (
  `ID` int(11) NOT NULL,
  `login` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `artigo`
--

CREATE TABLE `artigo` (
  `ID` int(11) NOT NULL,
  `nomeRedator` varchar(50) DEFAULT NULL,
  `nomeArtigo` varchar(100) DEFAULT NULL,
  `dataPublicacao` date DEFAULT NULL,
  `dataAlteracao` date DEFAULT NULL,
  `FK_Administrador_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `artigo`
--

INSERT INTO `artigo` (`ID`, `nomeRedator`, `nomeArtigo`, `dataPublicacao`, `dataAlteracao`, `FK_Administrador_ID`) VALUES
(2, '', 'TEste3', '2023-12-03', '2023-12-14', 0),
(3, '', 'teste', '2023-12-03', '2023-12-14', 0);

--
-- Acionadores `artigo`
--
DELIMITER $$
CREATE TRIGGER `before_update_artigo` BEFORE UPDATE ON `artigo` FOR EACH ROW BEGIN
SET NEW.DataAlteracao = NOW();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `mostrarartigo`
--

CREATE TABLE `mostrarartigo` (
  `ID` int(11) NOT NULL,
  `FK_redator_ID` int(11) DEFAULT NULL,
  `FK_administrador_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `redator`
--

CREATE TABLE `redator` (
  `ID` int(11) NOT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `artigo`
--
ALTER TABLE `artigo`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `mostrarartigo`
--
ALTER TABLE `mostrarartigo`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `redator`
--
ALTER TABLE `redator`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `artigo`
--
ALTER TABLE `artigo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `mostrarartigo`
--
ALTER TABLE `mostrarartigo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `redator`
--
ALTER TABLE `redator`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
