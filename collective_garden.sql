-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 26-Jun-2024 às 13:59
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `collective_garden`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_plantas`
--

CREATE TABLE `cadastro_plantas` (
  `latitude` text NOT NULL,
  `longetude` text NOT NULL,
  `nome_comum` varchar(25) NOT NULL,
  `nome_cientifico` varchar(25) NOT NULL,
  `observacao` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cadastro_plantas`
--

INSERT INTO `cadastro_plantas` (`latitude`, `longetude`, `nome_comum`, `nome_cientifico`, `observacao`) VALUES
('-30.089569844094086', '-51.3371479511261', 'hortela', '', 'em frente ao apartamento da falecida dna');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_usuario`
--

CREATE TABLE `cadastro_usuario` (
  `nome` varchar(15) NOT NULL,
  `sobrenome` varchar(15) NOT NULL,
  `email` text NOT NULL,
  `senha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cadastro_usuario`
--

INSERT INTO `cadastro_usuario` (`nome`, `sobrenome`, `email`, `senha`) VALUES
('mauricio', 'conceicao', 'ninesixblufs@gmail.com', '123'),
('mau', 'mau', 'ninesixblufs@gmail.com', '123'),
('adm', 'adm', 'ninesixblufs@gmail.com', '123'),
('adm', 'adm', 'ninesixblufs@gmail.com', '123'),
('carol', 'oliveira', 'carol@gmail.com', '12345'),
('abdiel', 'pumpum', 'pumpum@gmail.com', '12345a'),
('carol', 'oliveira', 'carol@gmail.com', '123'),
('carol', 'oliveira', 'carol@gmail.com', '123'),
('carol', 'oliveira', 'carol@gmail.com', '123'),
('bruna', 'conceicao', 'bruna@gmail.com', '123'),
('maria ', 'deniseconceiçao', 'conceicaodenisemaria6@gmail.com', '034113560d'),
('maia', 'conceicao', 'conceicaodenisemaria6@gmail.com', '034113560d');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
