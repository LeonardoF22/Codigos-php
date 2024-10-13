-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/10/2024 às 01:30
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema_clientes`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `arquivo_pdf` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `email`, `arquivo_pdf`) VALUES
(1, 'teste', 'aaa@gmail.com', '670856d08639c-Aula 05 - Comando SELECT.pdf'),
(2, 'Cliente1', 'Cliente1@gmail.com', '670862b387b33-Aula 03 - Comandos DQL e DML.pdf'),
(3, 'Cliente2', 'Cliente2@gmail.com', '670863023e598-Exercício Modelagem SiGA.pdf'),
(4, 'Cliente3', 'Cliente3@gmail.com', '6708631563b58-Notas_Aula_Engenharia_Requisitos.pdf'),
(5, 'Cliente4', 'Cliente4@gmail.com', '6708632e568f5-Tutorial - Cadastro de Cliente com Upload-imagens-0-mesclado.pdf');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nivel_acesso` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `nivel_acesso`) VALUES
(1, 'Teste123', 'teste1234@gmail.com', '$2y$10$LFmSnivmMF.3CRjgx7AwNOQeY/gHcoN01u.vqmbGXSvgNrEoM0Nxm', 'ADMINISTRADOR'),
(2, 'Usuario1', 'usuario1@gmail.com', '$2y$10$f.C7NFuJ4YviZm.ccXF6PuLrGAQCER3NJRw3naFN.YbhfKVuRfuoC', 'COMUM'),
(3, 'Usuario2', 'usuario2@gmail.com', '$2y$10$XIfTBBfg2nWlWMaMc3X2buDIpJZsKXEk3bWaVytAVpsucdf4.F63u', 'COMUM'),
(4, 'Usuario3', 'usuario3@gmail.com', '$2y$10$2StPkGEAc4Eo/Lz5dET7NuQy1aZbxZ07mHHabrg9R9XSnKdeD6wMa', 'COMUM'),
(5, 'Usuario4', 'Usuario4@gmail.com', '$2y$10$A9QiugmMjwC0WrK9rGWAV.5CXtqSX2T/UBrAOHY4z/nMm/SJZFAD.', 'COMUM');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
