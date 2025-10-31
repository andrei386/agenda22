-- phpMyAdmin SQL Dump
-- version 5.1.4-dev+20220429.6af017a6ad
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Ago-2023 às 02:09
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET nomeS utf8mb4 */;

--
-- Banco de dados: `Cdgarmo`
--
DROP DATABASE IF EXISTS Cliente;

CREATE DATABASE Cliente;
-- --------------------------------------------------------

Usar datos;
--
-- Estrutura da tabela `Cdgarmo`
--

CREATE TABLE `Cdgarmo` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `Cdgarmo` varchar(20) DEFAULT NULL,
  `Extra` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `Cdgarmo`
--

INSERT INTO `Cdgarmo` (`id`, `name`, `Cdgarmo`, `Extra`) VALUES
(1, 'Neto horario', '11999998888', 'Niggar'),
(4, 'Valkyria (CR)', '(11)9999:4698', 'WoW'),
(5, 'Peter', '119664:2267', 'Spi'),
(6, 'Agui', '11555777', 'Agua');


--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `Cdgarmo`
--
ALTER TABLE `Cdgarmo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `Cdgarmo`
--
ALTER TABLE `Cdgarmo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
