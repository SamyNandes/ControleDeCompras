-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02/12/2024 às 16:10
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
-- Banco de dados: `compraspessoais`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `compra`
--

CREATE TABLE `compra` (
  `nome_Cli_Compra` varchar(30) NOT NULL,
  `data_Compra` date NOT NULL,
  `nome_Loja_Compra` varchar(30) NOT NULL,
  `Compra_Identificador` int(11) NOT NULL,
  `Id_Compra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `compra`
--

INSERT INTO `compra` (`nome_Cli_Compra`, `data_Compra`, `nome_Loja_Compra`, `Compra_Identificador`, `Id_Compra`) VALUES
('Samyra Fernandes', '2007-08-13', 'Americanas', 123, 1),
('Samyra Fernandes', '2007-08-13', 'Americanas', 123123, 2),
('Victor Leal Rodrigues', '2006-05-11', 'Casas bahia', 13082007, 3),
('Te amo Victor', '2007-08-13', 'Americanas', 123123123, 5),
('Samyra Fernandes', '2007-08-13', 'Americanas', 2147483647, 6);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`Id_Compra`),
  ADD UNIQUE KEY `Compra_Identificador` (`Compra_Identificador`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `compra`
--
ALTER TABLE `compra`
  MODIFY `Id_Compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
