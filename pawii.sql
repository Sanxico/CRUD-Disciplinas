-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Fev-2024 às 15:15
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pawii`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `id` int(11) NOT NULL,
  `codigo_disciplina` int(20) DEFAULT NULL,
  `nome_disciplina` varchar(50) DEFAULT NULL,
  `campus` varchar(45) DEFAULT NULL,
  `unidade_academica` varchar(45) DEFAULT NULL,
  `departamento` varchar(45) DEFAULT NULL,
  `carga_horaria` int(3) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`id`, `codigo_disciplina`, `nome_disciplina`, `campus`, `unidade_academica`, `departamento`, `carga_horaria`, `tipo`) VALUES
(1, 307, 'Auditoria e Segurança de Dados', 'Cuiabá', 'UFMT', 'Computação', 60, '1'),
(2, 307, 'Programação em Web 1', 'Cuiabá', '', 'Computação', 60, '1'),
(3, 308, 'Programação em Web 2', 'Cuiabá', '', 'Computação', 60, '1'),
(4, 308, 'Estágio Supervisionado', 'Cuiabá', 'UFMT', 'Computação', 400, '3'),
(5, 690, 'Sistemas a Decisão', 'Rondonópolis', 'UFMT', 'Computação', 60, '1'),
(8, 830, 'Computação Móvel', 'Cuiabá', 'UFMT', 'Computação', 60, '2'),
(9, 50, 'Tópicos Esp em I A', 'Cuiabá', 'UFMT', 'Computação', 60, '2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

CREATE TABLE `tipo` (
  `id_tipo` int(10) UNSIGNED NOT NULL,
  `nome_tipo` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipo`
--

INSERT INTO `tipo` (`id_tipo`, `nome_tipo`) VALUES
(1, 'Presencial'),
(2, 'EaD (Educação a Distância)'),
(3, 'Semipresencial');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id_tipo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id_tipo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
