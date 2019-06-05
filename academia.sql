-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Jun-2019 às 19:44
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academia`
--
CREATE DATABASE IF NOT EXISTS `academia` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `academia`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `horarios`
--

CREATE TABLE `horarios` (
  `id` int(11) NOT NULL,
  `horario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `horarios`
--

INSERT INTO `horarios` (`id`, `horario`) VALUES
(1, 'Segunda-Sexta das 5:30 as 21:30 | SÃ¡bado das 8:00 as 11:00                    ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `inicialadm`
--

CREATE TABLE `inicialadm` (
  `id` int(11) NOT NULL,
  `texto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `inicialadm`
--

INSERT INTO `inicialadm` (`id`, `texto`) VALUES
(1, 'Venha nos visitar!                                      ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `planosdanca`
--

CREATE TABLE `planosdanca` (
  `id` int(11) NOT NULL,
  `mensal` varchar(255) NOT NULL,
  `trimenstral` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `planosdanca`
--

INSERT INTO `planosdanca` (`id`, `mensal`, `trimenstral`) VALUES
(1, '41', '150');

-- --------------------------------------------------------

--
-- Estrutura da tabela `planosmusculacao`
--

CREATE TABLE `planosmusculacao` (
  `id` int(11) NOT NULL,
  `diario` varchar(10) NOT NULL,
  `semanal` varchar(10) NOT NULL,
  `quinzenal` varchar(10) NOT NULL,
  `mensal` varchar(10) NOT NULL,
  `trimenstral` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `planosmusculacao`
--

INSERT INTO `planosmusculacao` (`id`, `diario`, `semanal`, `quinzenal`, `mensal`, `trimenstral`) VALUES
(1, '15', '20', '30', '41', '150');

-- --------------------------------------------------------

--
-- Estrutura da tabela `quemsomos`
--

CREATE TABLE `quemsomos` (
  `id` int(11) NOT NULL,
  `texto` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `quemsomos`
--

INSERT INTO `quemsomos` (`id`, `texto`) VALUES
(2, 'OLAAAAAAAAA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `email`, `senha`) VALUES
(43, 'Gabriel MM', 'asd12', 'gabriel@', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(44, 'Gabriel', 'asd', 'gabriel@', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(45, 'DARABEER', 'gbx', 'pedro@', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inicialadm`
--
ALTER TABLE `inicialadm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `planosdanca`
--
ALTER TABLE `planosdanca`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `planosmusculacao`
--
ALTER TABLE `planosmusculacao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quemsomos`
--
ALTER TABLE `quemsomos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inicialadm`
--
ALTER TABLE `inicialadm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `planosdanca`
--
ALTER TABLE `planosdanca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `planosmusculacao`
--
ALTER TABLE `planosmusculacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quemsomos`
--
ALTER TABLE `quemsomos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
