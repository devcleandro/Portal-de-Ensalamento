-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Abr 03, 2013 as 05:10 
-- Versão do Servidor: 5.1.37
-- Versão do PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `portal`
--
CREATE DATABASE `portal` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `portal`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE IF NOT EXISTS `disciplina` (
  `ID_DISCIPLINA` int(6) NOT NULL AUTO_INCREMENT,
  `NOME_DISCIPLINA` varchar(50) NOT NULL,
  `CARGA_HR_TOTAL` int(5) NOT NULL,
  `NUMERO_VAGAS` int(3) NOT NULL,
  `ID_PROFESSOR` int(11) NOT NULL,
  `ID_TURMA` int(4) NOT NULL,
  PRIMARY KEY (`ID_DISCIPLINA`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`ID_DISCIPLINA`, `NOME_DISCIPLINA`, `CARGA_HR_TOTAL`, `NUMERO_VAGAS`, `ID_PROFESSOR`, `ID_TURMA`) VALUES
(1, 'ComputaÃ§Ã£o Grafica', 60, 50, 1, 1),
(2, 'Inteligencia Artificial', 60, 50, 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Roberto Nogueira Aoki Junior', 'nogueiraaoki@gmail.com', '123456'),
(2, 'Cleandro de Souza Rocha', 'cleandrogalo@hotmail.com', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE IF NOT EXISTS `professor` (
  `ID_PROFESSOR` int(11) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(40) NOT NULL,
  `AREA_ATUA` varchar(50) NOT NULL,
  `CARGA_HR_T` int(3) NOT NULL,
  `CARGA_HR_D` int(3) NOT NULL,
  PRIMARY KEY (`ID_PROFESSOR`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`ID_PROFESSOR`, `NOME`, `AREA_ATUA`, `CARGA_HR_T`, `CARGA_HR_D`) VALUES
(1, 'Felipe', 'ComputaÃ§Ã£o Grafica', 20, 6),
(2, 'Kanda', 'Inteligencia Artificial', 20, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sala`
--

CREATE TABLE IF NOT EXISTS `sala` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NUMERO_SALA` int(5) NOT NULL,
  `BLOCO` char(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `sala`
--

INSERT INTO `sala` (`ID`, `NUMERO_SALA`, `BLOCO`) VALUES
(1, 100, 'A'),
(2, 303, 'A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `semana`
--

CREATE TABLE IF NOT EXISTS `semana` (
  `ID_SEMANA` int(1) NOT NULL AUTO_INCREMENT,
  `NOME_DIA` varchar(10) NOT NULL,
  PRIMARY KEY (`ID_SEMANA`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `semana`
--

INSERT INTO `semana` (`ID_SEMANA`, `NOME_DIA`) VALUES
(1, 'Segunda'),
(2, 'Terca'),
(3, 'Quarta'),
(4, 'Quinta'),
(5, 'Sexta');

-- --------------------------------------------------------

--
-- Estrutura da tabela `semana_disciplina`
--

CREATE TABLE IF NOT EXISTS `semana_disciplina` (
  `ID_SEMANA` int(2) NOT NULL,
  `ID_SALA` int(6) NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `HORARIO_INICIAL` varchar(10) NOT NULL,
  `ID_DISCIPLINA` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `semana_disciplina`
--

INSERT INTO `semana_disciplina` (`ID_SEMANA`, `ID_SALA`, `ID`, `HORARIO_INICIAL`, `ID_DISCIPLINA`) VALUES
(2, 1, 1, '16:00', 1),
(4, 2, 2, '16:00', 1),
(4, 1, 3, '8:00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE IF NOT EXISTS `turma` (
  `ID_TURMA` int(4) NOT NULL AUTO_INCREMENT,
  `NOME_CURSO` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_TURMA`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`ID_TURMA`, `NOME_CURSO`) VALUES
(1, 'Engenharia de Software');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
