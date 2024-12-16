-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/12/2023 às 19:14
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
-- Banco de dados: `autop`
--
CREATE DATABASE IF NOT EXISTS `autop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `autop`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `carro`
--

CREATE TABLE `carro` (
  `codigoC` int(4) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `codigoP` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `carro`
--

INSERT INTO `carro` (`codigoC`, `marca`, `codigoP`) VALUES
(2, 'Ferrari', 2),
(4, 'testadonomemarca', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `proprietario`
--

CREATE TABLE `proprietario` (
  `codigoP` int(4) NOT NULL,
  `apelido` varchar(50) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `celular` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `proprietario`
--

INSERT INTO `proprietario` (`codigoP`, `apelido`, `senha`, `celular`) VALUES
(1, 'teste', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '(55)55555-5555'),
(2, 'teste2', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '(66)66666-6666');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `carro`
--
ALTER TABLE `carro`
  ADD PRIMARY KEY (`codigoC`),
  ADD KEY `codigoP` (`codigoP`);

--
-- Índices de tabela `proprietario`
--
ALTER TABLE `proprietario`
  ADD PRIMARY KEY (`codigoP`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carro`
--
ALTER TABLE `carro`
  MODIFY `codigoC` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `proprietario`
--
ALTER TABLE `proprietario`
  MODIFY `codigoP` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `carro`
--
ALTER TABLE `carro`
  ADD CONSTRAINT `carro_ibfk_1` FOREIGN KEY (`codigoP`) REFERENCES `proprietario` (`codigoP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
