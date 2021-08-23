-- ATENÇÃO: dados pessoais no banco de dados foram substituídos por placeholders, apenas para publicação no GitHub. Mesma coisa vale para conexao.php
-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Tempo de geração: 22/08/2021 às 23:36
-- Versão do servidor: 5.7.34
-- Versão do PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `jobsnet`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profissao` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nascimento` date NOT NULL,
  `estadocivil` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `profissao`, `nascimento`, `estadocivil`, `sexo`, `endereco`, `bairro`, `cidade`, `estado`, `cep`, `telefone`, `celular`, `email`, `cpf`) VALUES
(18, 'Maria', 'Professora', '1988-09-18', '', '', 'Rua tal', 'centro', 'Rio de Janeiro', 'Rio de Janeiro', '2222222', '2222222', '2222222', 'email@legal.com', '222222222'),
(19, 'Pedro', 'Músico', '1992-08-01', 'divorciado', '', 'Rua maneira', 'CENTRO', 'Rio de Janeiro', 'Rio de Janeiro', '2222222', '2222222222', '222222222', 'meu@email.com.br', '222222222');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
