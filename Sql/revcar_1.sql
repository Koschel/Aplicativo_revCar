-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Out-2019 às 05:33
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `revcar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carro`
--

CREATE TABLE `carro` (
  `id` int(3) NOT NULL,
  `placa` varchar(8) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `ano` year(4) NOT NULL,
  `dt_ultima_revisao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `carro`
--

INSERT INTO `carro` (`id`, `placa`, `marca`, `modelo`, `ano`, `dt_ultima_revisao`) VALUES
(7, 'abk-3500', 'Chevrolet', 'Astra hacht', 2000, NULL),
(9, 'TRE-1313', 'Chevrolet', 'ChevetÃ£o', 1997, '2019-12-25'),
(11, 'ERT-1313', 'Chevrolet', 'ChevetÃ£o', 2000, '2019-10-02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(3) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tipo` int(1) NOT NULL,
  `data_Admi` date NOT NULL,
  `senha` varchar(64) DEFAULT NULL,
  `id_car` int(3) DEFAULT NULL,
  `func_ativo` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `nome`, `email`, `tipo`, `data_Admi`, `senha`, `id_car`, `func_ativo`) VALUES
(1, 'Adm', 'adm@adm', 1, '2019-10-01', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, 1),
(10, 'Motorista 1', 'moto@moto', 2, '2019-04-25', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 7, 1),
(11, 'Motorista 2', 'teste@teste', 2, '2019-10-01', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 9, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `quilometragem`
--

CREATE TABLE `quilometragem` (
  `id` int(10) NOT NULL,
  `data_inserido` date NOT NULL,
  `km` int(64) NOT NULL,
  `id_carro` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `quilometragem`
--

INSERT INTO `quilometragem` (`id`, `data_inserido`, `km`, `id_carro`) VALUES
(1, '2019-10-22', 34, 7),
(2, '2019-10-22', 37, 7);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carro`
--
ALTER TABLE `carro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `quilometragem`
--
ALTER TABLE `quilometragem`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carro`
--
ALTER TABLE `carro`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `quilometragem`
--
ALTER TABLE `quilometragem`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
