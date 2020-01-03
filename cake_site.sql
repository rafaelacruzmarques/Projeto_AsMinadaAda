-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31-Jan-2018 às 00:11
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake_site`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(25) NOT NULL,
  `local` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `hour` time(5) NOT NULL,
  `description` text,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `events`
--

INSERT INTO `events` (`id`, `name`, `local`, `date`, `hour`, `description`, `user_id`) VALUES
(2, 'Evento 1', 'Av João César n° 100', '2017-10-26', '16:00:00.00000', 'Evento para incentivar mulheres a se inserirem na área de Tecnologia da Informação.', 2),
(4, 'Evento 2', 'Sesc Paladium', '2017-12-20', '17:00:00.00000', 'Palestra sobre mercado de trabalho e mulheres.', 2),
(12, 'Workshop Meninas ++', 'UFV Rio Paranaíba', '2017-09-25', '08:00:00.00000', 'Minicurso: App Inventor\r\nPalestra:Mulheres no mercado de trabalho.', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `speeches`
--

CREATE TABLE `speeches` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(8) DEFAULT NULL,
  `profession` varchar(25) NOT NULL,
  `sex` char(2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `profession`, `sex`, `created`, `modified`) VALUES
(2, 'Rafaela', 'rafaela@teste.com', '1234', 'estudante', 'F', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Rafaela Marques', 'teste@teste.com', '1234', 'estudante', 'f', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'teste', 'asds@gmail.com', '$2y$10$0', 'a', 'm', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Teste', 'rafaela@gmail.com', '$2y$10$V', 'teste', 'f', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Laura', 'laura@gmail.com', '$2y$10$J', 'estudante', 'f', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Rafa', 'rafaelc@gmail.com', '$2y$10$8', 'estudante', 'f', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'kakd', 'sa@hotmail.com', '$2y$10$y', 'sdakfs', 'f', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `works`
--

CREATE TABLE `works` (
  `id` int(10) UNSIGNED NOT NULL,
  `company` varchar(40) NOT NULL,
  `job` varchar(30) NOT NULL,
  `description` tinytext,
  `address` varchar(50) NOT NULL,
  `jobs` int(3) NOT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `works`
--

INSERT INTO `works` (`id`, `company`, `job`, `description`, `address`, `jobs`, `contact`, `user_id`) VALUES
(1, 'Empresa 1', 'Analista de Sistema', 'Mulheres', 'Avenida n° 100, BH', 1, 'contato@contato.com', 2),
(2, 'Empresa 2', 'Programadora', 'Mulheres', 'endereco', 3, 'contato@contato.com.br', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_event_user` (`user_id`);

--
-- Indexes for table `speeches`
--
ALTER TABLE `speeches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_speech_user` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_work_user` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `speeches`
--
ALTER TABLE `speeches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `id_event_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `speeches`
--
ALTER TABLE `speeches`
  ADD CONSTRAINT `id_speech_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `works`
--
ALTER TABLE `works`
  ADD CONSTRAINT `id_work_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
