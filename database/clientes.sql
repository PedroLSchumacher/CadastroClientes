-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Fev-2024 às 02:54
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `clientes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `sobrenome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `ddd` int(3) DEFAULT NULL,
  `tel_celular` int(9) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `est_civil` varchar(15) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `rg` varchar(10) DEFAULT NULL,
  `emissao_rg` date DEFAULT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `sobrenome`, `email`, `ddd`, `tel_celular`, `data_nascimento`, `est_civil`, `cpf`, `rg`, `emissao_rg`, `status`) VALUES
(1, 'João', 'Manuel', 'joaomanuel@hotmail.com', 85, 984758260, '2001-05-22', 'Casado', '45375437543', '1096050401', '2005-12-15', 1),
(2, 'Júlia', 'Tereza de Souza', 'juliasouza04@yahoo.com', 51, 987652414, '1990-11-08', 'Casado', '45345354354', '7827828232', '1998-05-12', 1),
(3, 'Carlos', 'Miguel Assis', 'carlos.assis@outlook.com', 54, 985652545, '2003-08-26', 'Solteiro', '54375375373', '2757878697', '2008-07-21', 1),
(4, 'Cinderela', 'Martins', 'cinderelam45@gmail.com', 51, 987654321, '1995-05-24', 'Solteiro', '75378378373', '7525755754', '2000-08-20', 1),
(5, 'Caio', 'Patrick', 'patrick0345@outlook.com', 85, 2147483647, '1990-12-18', 'Solteiro', '67867867867', '1234567891', '2001-05-14', 1),
(6, 'Pedro', 'Maciel', 'maciel.pedro@gmail.com', 51, 984758595, '2000-03-27', 'Solteiro', '35682758275', '8368383838', '2007-04-22', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
