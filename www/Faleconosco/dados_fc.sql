-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Set-2020 às 18:10
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `epiz_26371639_bancocci`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_fc`
--

CREATE TABLE `dados_fc` (
  `id` int(11) NOT NULL,
  `operadora` varchar(250) NOT NULL,
  `data_solicitacao` varchar(250) NOT NULL,
  `encaminhada_solicitacao` varchar(250) NOT NULL,
  `beneficiario` varchar(250) NOT NULL,
  `status_solicitacao` varchar(250) NOT NULL,
  `data_abertura` varchar(250) NOT NULL,
  `solicitacao` varchar(250) NOT NULL,
  `sub_autorizacao` varchar(250) NOT NULL,
  `sub_ressarcimento` varchar(250) NOT NULL,
  `sub_alt_cadastral` varchar(250) NOT NULL,
  `sub_cobertura_contratual` varchar(250) NOT NULL,
  `sub_vendas` varchar(250) NOT NULL,
  `sub_outros` varchar(250) NOT NULL,
  `created` date NOT NULL,
  `modified` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `dados_fc`
--
ALTER TABLE `dados_fc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dados_fc`
--
ALTER TABLE `dados_fc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
