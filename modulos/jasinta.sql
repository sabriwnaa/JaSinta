-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/08/2025 às 14:52
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
-- Banco de dados: `jasinta`
--
CREATE DATABASE IF NOT EXISTS `jasinta` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `jasinta`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome`) VALUES
(1, 'pet'),
(2, 'pessoa'),
(3, 'paisagem'),
(4, 'arte');

-- --------------------------------------------------------

--
-- Estrutura para tabela `confianca`
--

CREATE TABLE `confianca` (
  `id` int(11) NOT NULL,
  `down_pontuacao` int(11) NOT NULL,
  `up_pontuacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `confianca`
--

INSERT INTO `confianca` (`id`, `down_pontuacao`, `up_pontuacao`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 2, 1),
(6, 2, 2),
(7, 2, 3),
(8, 2, 4),
(9, 3, 1),
(10, 3, 2),
(11, 3, 3),
(12, 3, 4),
(13, 4, 1),
(14, 4, 2),
(15, 4, 3),
(16, 4, 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `jogadora` int(11) NOT NULL,
  `is_ativa` tinyint(4) NOT NULL DEFAULT 1,
  `is_preferencia` tinyint(4) NOT NULL DEFAULT 0,
  `data_cadastro` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `foto`
--

INSERT INTO `foto` (`id`, `imagem`, `descricao`, `jogadora`, `is_ativa`, `is_preferencia`, `data_cadastro`) VALUES
(21, 'img/image1.png', 'esta é a historia dessa imagem', 1, 1, 0, '2025-08-12'),
(22, 'img/image1.png', 'esta é a historia dessa imagem', 1, 1, 0, '2025-08-12'),
(23, 'img/image1.png', 'esta é a historia dessa imagem', 1, 1, 0, '2025-08-12'),
(24, 'img/image1.png', 'esta é a historia dessa imagem', 1, 1, 0, '2025-08-12'),
(25, 'img/image1.png', 'esta é a historia dessa imagem', 1, 1, 0, '2025-08-12'),
(26, 'img/image1.png', 'esta é a historia dessa imagem', 1, 1, 0, '2025-08-12'),
(27, 'img/image1.png', 'esta é a historia dessa imagem', 1, 1, 0, '2025-08-12'),
(28, 'img/image1.png', 'esta é a historia dessa imagem', 1, 1, 0, '2025-08-12'),
(29, 'img/image1.png', 'esta é a historia dessa imagem', 1, 1, 0, '2025-08-12'),
(30, 'img/image1.png', 'esta é a historia dessa imagem', 1, 1, 0, '2025-08-12'),
(31, 'img/image1.png', 'esta é a historia dessa imagem', 1, 1, 0, '2025-08-12'),
(32, 'img/image1.png', 'esta é a historia dessa imagem', 1, 1, 0, '2025-08-12'),
(33, 'img/image1.png', 'esta é a historia dessa imagem', 1, 1, 0, '2025-08-12'),
(34, 'img/image1.png', 'esta é a historia dessa imagem', 1, 1, 0, '2025-08-12'),
(35, 'img/image1.png', 'esta é a historia dessa imagem', 1, 1, 0, '2025-08-12'),
(36, 'img/image1.png', 'esta é a historia dessa imagem', 1, 1, 0, '2025-08-12'),
(37, 'img/image1.png', 'esta é a historia dessa imagem', 1, 1, 0, '2025-08-12'),
(38, 'img/image1.png', 'esta é a historia dessa imagem', 1, 1, 0, '2025-08-12'),
(39, 'img/image1.png', 'esta é a historia dessa imagem', 1, 1, 0, '2025-08-12'),
(40, 'img/image1.png', 'esta é a historia dessa imagem', 1, 1, 0, '2025-08-12');

-- --------------------------------------------------------

--
-- Estrutura para tabela `foto_categoria`
--

CREATE TABLE `foto_categoria` (
  `id_foto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `foto_categoria`
--

INSERT INTO `foto_categoria` (`id_foto`, `id_categoria`) VALUES
(21, 1),
(22, 2),
(23, 3),
(24, 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `jogadora`
--

CREATE TABLE `jogadora` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `data_cadastro` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `jogadora`
--

INSERT INTO `jogadora` (`id`, `nome`, `data_cadastro`) VALUES
(1, 'Sabrina', '2025-08-12'),
(2, 'Isabela', '2025-08-12'),
(3, 'Vanitas', '2025-08-12'),
(4, 'Matias', '2025-08-12');

-- --------------------------------------------------------

--
-- Estrutura para tabela `sentimento`
--

CREATE TABLE `sentimento` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `data_cadastro` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `sentimento`
--

INSERT INTO `sentimento` (`id`, `nome`, `data_cadastro`) VALUES
(1, 'Admiração', '2025-08-12'),
(2, 'Carinho', '2025-08-12'),
(3, 'Amizade', '2025-08-12'),
(4, 'Alegria', '2025-08-12'),
(5, 'Felicidade', '2025-08-12'),
(6, 'Alívio', '2025-08-12'),
(7, 'Esperança', '2025-08-12'),
(8, 'Encantamento', '2025-08-12'),
(9, 'Amor', '2025-08-12'),
(10, 'Gratidão', '2025-08-12'),
(11, 'Orgulho', '2025-08-12'),
(12, 'Saudade', '2025-08-12'),
(13, 'Empolgação', '2025-08-12'),
(14, 'Euforia', '2025-08-12'),
(15, 'Satisfação', '2025-08-12'),
(16, 'Ternura', '2025-08-12'),
(17, 'Paz', '2025-08-12'),
(18, 'Segurança', '2025-08-12'),
(19, 'Liberdade', '2025-08-12'),
(20, 'Cumplicidade', '2025-08-12'),
(21, 'Tristeza', '2025-08-12'),
(22, 'Medo', '2025-08-12'),
(23, 'Raiva', '2025-08-12'),
(24, 'Ciúmes', '2025-08-12'),
(25, 'Frustração', '2025-08-12'),
(26, 'Culpa', '2025-08-12'),
(27, 'Vergonha', '2025-08-12'),
(28, 'Inveja', '2025-08-12'),
(29, 'Desespero', '2025-08-12'),
(30, 'Rejeição', '2025-08-12'),
(31, 'Solidão', '2025-08-12'),
(32, 'Solitude', '2025-08-12'),
(33, 'Desconfiança', '2025-08-12'),
(34, 'Humilhação', '2025-08-12'),
(35, 'Angústia', '2025-08-12'),
(36, 'Melancolia', '2025-08-12'),
(37, 'Desamparo', '2025-08-12'),
(38, 'Ansiedade', '2025-08-12'),
(39, 'Nostalgia', '2025-08-12'),
(40, 'Surpresa', '2025-08-12'),
(41, 'Vulnerabilidade', '2025-08-12'),
(42, 'Confusão', '2025-08-12'),
(43, 'Curiosidade', '2025-08-12'),
(44, 'Exaustão', '2025-08-12'),
(45, 'Apego', '2025-08-12'),
(46, 'Tensão', '2025-08-12'),
(47, 'Desequilíbrio', '2025-08-12'),
(48, 'Inquietação', '2025-08-12'),
(49, 'Silêncio', '2025-08-12'),
(50, 'Flutuação', '2025-08-12'),
(51, 'Deslumbramento', '2025-08-12'),
(52, 'Clariciano', '2025-08-12'),
(53, 'Incômodo', '2025-08-12'),
(54, 'Incompletude', '2025-08-12'),
(55, 'Entorpecimento', '2025-08-12'),
(56, 'Ilusão', '2025-08-12'),
(57, 'Fuga', '2025-08-12'),
(58, 'Encontro', '2025-08-12'),
(59, 'Queda', '2025-08-12'),
(60, 'Retorno', '2025-08-12'),
(61, 'Recomeço', '2025-08-12'),
(62, 'Perda', '2025-08-12'),
(63, 'Invisibilidade', '2025-08-12'),
(64, 'Vazio', '2025-08-12'),
(65, 'Tédio', '2025-08-12'),
(66, 'Serenidade', '2025-08-12'),
(67, 'Contemplação', '2025-08-12'),
(68, 'Contentamento', '2025-08-12'),
(69, 'Calmaria', '2025-08-12'),
(70, 'Compaixão', '2025-08-12'),
(71, 'Confiança', '2025-08-12'),
(72, 'Insegurança', '2025-08-12'),
(73, 'Fúria', '2025-08-12'),
(74, 'Êxtase', '2025-08-12'),
(75, 'Rebeldia', '2025-08-12'),
(76, 'Justiça', '2025-08-12'),
(77, 'Injustiça', '2025-08-12');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `confianca`
--
ALTER TABLE `confianca`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_foto_jogadora` (`jogadora`);

--
-- Índices de tabela `foto_categoria`
--
ALTER TABLE `foto_categoria`
  ADD KEY `fk_relacao_fc` (`id_foto`),
  ADD KEY `fk_relacao_cf` (`id_categoria`);

--
-- Índices de tabela `jogadora`
--
ALTER TABLE `jogadora`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sentimento`
--
ALTER TABLE `sentimento`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `confianca`
--
ALTER TABLE `confianca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `jogadora`
--
ALTER TABLE `jogadora`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `sentimento`
--
ALTER TABLE `sentimento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `fk_foto_jogadora` FOREIGN KEY (`jogadora`) REFERENCES `jogadora` (`id`);

--
-- Restrições para tabelas `foto_categoria`
--
ALTER TABLE `foto_categoria`
  ADD CONSTRAINT `fk_relacao_cf` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `fk_relacao_fc` FOREIGN KEY (`id_foto`) REFERENCES `foto` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
