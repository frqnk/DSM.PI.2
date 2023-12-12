-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/12/2023 às 04:28
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `technobroccoli`
--

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
-- Acionadores `redator`
--
DELIMITER $$
CREATE TRIGGER `AtualizarDataAlteracao` AFTER INSERT ON `redator` FOR EACH ROW BEGIN
    UPDATE Artigo
    SET DataAlteracao = NOW()
    WHERE NomeRedator = NEW.Login;
END
$$
DELIMITER ;

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
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_Administrador_ID` (`FK_Administrador_ID`);

--
-- Índices de tabela `mostrarartigo`
--
ALTER TABLE `mostrarartigo`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_redator_ID` (`FK_redator_ID`),
  ADD KEY `FK_administrador_ID` (`FK_administrador_ID`);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

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

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `artigo`
--
ALTER TABLE `artigo`
  ADD CONSTRAINT `artigo_ibfk_1` FOREIGN KEY (`FK_Administrador_ID`) REFERENCES `administrador` (`ID`);

--
-- Restrições para tabelas `mostrarartigo`
--
ALTER TABLE `mostrarartigo`
  ADD CONSTRAINT `mostrarartigo_ibfk_1` FOREIGN KEY (`FK_redator_ID`) REFERENCES `redator` (`ID`),
  ADD CONSTRAINT `mostrarartigo_ibfk_2` FOREIGN KEY (`FK_administrador_ID`) REFERENCES `administrador` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
