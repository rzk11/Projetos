-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Tempo de geração: 29-Nov-2022 às 21:22
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `study_notes`
--
CREATE DATABASE IF NOT EXISTS `study_notes` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `study_notes`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

DROP TABLE IF EXISTS `agenda`;
CREATE TABLE IF NOT EXISTS `agenda` (
  `id_agenda` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int NOT NULL,
  `horario` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `domingo` varchar(50) DEFAULT NULL,
  `segunda` varchar(50) DEFAULT NULL,
  `terca` varchar(50) DEFAULT NULL,
  `quarta` varchar(50) DEFAULT NULL,
  `quinta` varchar(50) DEFAULT NULL,
  `sexta` varchar(50) DEFAULT NULL,
  `sabado` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_agenda`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `id_usuario`, `horario`, `domingo`, `segunda`, `terca`, `quarta`, `quinta`, `sexta`, `sabado`) VALUES
(7, 3, '', 'ddd', 'qqq', 'qqq', 'qqq', 'qqq', 'qqq', 'qqq'),
(10, 3, '', 'pppppppp', 'pppppp', 'pppppp', '', '', '', ''),
(11, 3, '', 'pppppppp', 'pppppp', 'pppppp', '', '', '', ''),
(15, 3, '08:00', 'd', 'y', 'o', 'r', 'ii', 'tt', 'tt'),
(16, 3, '15:00', 'xzx', 'zxzx', 'zxzx', 'zxzx', 'zxzx', 'zx', 'zxzx');

-- --------------------------------------------------------

--
-- Estrutura da tabela `anotacoes`
--

DROP TABLE IF EXISTS `anotacoes`;
CREATE TABLE IF NOT EXISTS `anotacoes` (
  `id_anotacao` int NOT NULL AUTO_INCREMENT,
  `titulo_A` varchar(20) NOT NULL,
  `conteudoA` varchar(250) DEFAULT NULL,
  `id` int DEFAULT NULL,
  PRIMARY KEY (`id_anotacao`),
  KEY `fk_PesAnotações` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `anotacoes`
--

INSERT INTO `anotacoes` (`id_anotacao`, `titulo_A`, `conteudoA`, `id`) VALUES
(54, 'dawdwadaw', 'dwadwadaw', NULL),
(53, 'ssss', 'ssss', NULL),
(55, 'Segunda Guerra Mundi', '', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `todolist`
--

DROP TABLE IF EXISTS `todolist`;
CREATE TABLE IF NOT EXISTS `todolist` (
  `tdl_id` int NOT NULL AUTO_INCREMENT,
  `tarefa` varchar(200) NOT NULL,
  `concluida` int NOT NULL,
  `id` int NOT NULL,
  PRIMARY KEY (`tdl_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarioadm`
--

DROP TABLE IF EXISTS `usuarioadm`;
CREATE TABLE IF NOT EXISTS `usuarioadm` (
  `idadm` int NOT NULL AUTO_INCREMENT,
  `email` varchar(60) NOT NULL,
  `senha` varchar(20) NOT NULL,
  PRIMARY KEY (`idadm`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuarioadm`
--

INSERT INTO `usuarioadm` (`idadm`, `email`, `senha`) VALUES
(1, 'study@gmail.com', 'study123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `nivel_usuario` int DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `nivel_usuario`) VALUES
(3, 'lucas', 'lucas@gmail.com', 'lucas', 1),
(6, 'aaaa', 'a@gmail.com', 'a', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
