-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 13-Nov-2022 às 23:28
-- Versão do servidor: 10.5.13-MariaDB-cll-lve
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u989838830_superlogica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `cpf` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genero` enum('M','F') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ano_nascimento` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `info`
--

INSERT INTO `info` (`id`, `cpf`, `genero`, `ano_nascimento`) VALUES
(1, '16798125050', 'M', '1976'),
(2, '59875804045', 'M', '1960'),
(3, '04707649025', 'F', '1988'),
(4, '21142450040', 'M', '1954'),
(5, '83257946074', 'F', '1970'),
(6, '07583509025', 'M', '1972');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(140) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `zipcode`, `password`, `created_at`) VALUES
(2, 'Giovane Vinicius', 'Giovanevinicius', 'gio_vinicius@hotmail.com', '85.640-000', '$2y$10$alOfyn5esLq6EoxDMxXi4Oq2X2mB.MimRNO9WtaWwS4EAS4LPXj1O', '2022-11-13 14:28:07'),
(3, 'João da Silva', 'Joao_Silva', 'joaosilva@gmail.com', '12.132-534', '$2y$10$1Om2ssr.zSwYb/ksxQeeFu2zQsihW2WFMqDgOhl756kNkcP64Z15a', '2022-11-13 14:29:00'),
(4, 'Judite Silva', 'Ju_Silva', 'juditsilva@gmail.com', '45.675-230', '$2y$10$qvPkawY.sAmFfTmCemn5quhSGjU5v0aa8i2uKs9ujiKDbywcfkaKy', '2022-11-13 14:36:12'),
(5, 'Marta Rocha', 'Marta_Rcha', 'marta.rc@gmail.com', '25.346-897', '$2y$10$sChBEHybgkM2tVxXLFvQKekxWZ9KxB7oSvuTzUEy.CcLQH2vR.BSG', '2022-11-13 22:23:14'),
(6, 'Usuário', 'user_123', 'usuario@dominio.com', '85.640-000', '$2y$10$Jy5sh4w9Cm4YlTvQF6U2Rek8JUTI8NclQ2GOcm8kqbTbiBasr7pUC', '2022-11-13 22:37:17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `cpf` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(140) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `cpf`, `nome`) VALUES
(1, '16798125050', 'Luke Skywalker'),
(3, '59875804045', 'Bruce Wayne'),
(4, '04707649025', 'Diane Prince'),
(5, '21142450040', 'Bruce Banner'),
(6, '83257946074', 'Harley Quinn'),
(7, '07583509025', 'Peter Parker');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
