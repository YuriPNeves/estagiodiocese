-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19-Set-2016 às 17:16
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diocese`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivos`
--

CREATE TABLE `arquivos` (
  `id` int(3) NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `arquivos`
--

INSERT INTO `arquivos` (`id`, `filename`) VALUES
(1, 'dafff6c2-9a67-4c39-a8e0-1a0f282e63e8-Pantanal.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cleros`
--

CREATE TABLE `cleros` (
  `id` int(11) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `role` enum('padre','bispo') NOT NULL DEFAULT 'padre'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cleros`
--

INSERT INTO `cleros` (`id`, `imagem`, `nome`, `role`) VALUES
(3, 'bannerImage4.jpg', 'Yuri ', 'padre');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comunidades`
--

CREATE TABLE `comunidades` (
  `id` int(10) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `responsavel` varchar(100) NOT NULL,
  `matriz` char(1) NOT NULL,
  `id_clero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `data` datetime NOT NULL,
  `valor` double NOT NULL,
  `peso` double NOT NULL DEFAULT '0',
  `endereco` varchar(255) NOT NULL,
  `tipo` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `nome`, `descricao`, `data`, `valor`, `peso`, `endereco`, `tipo`) VALUES
(1, 'Libras', 'kajlfakjsdfjaljsd', '2016-09-13 04:10:00', 20, 0, 'fkajdla', 'd'),
(2, 'Libras', 'kajlfakjsdfjaljsd', '2016-09-13 04:10:00', 20, 0, 'fkajdla', 'd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `gallery_albums`
--

CREATE TABLE `gallery_albums` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `default_name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `model` varchar(255) DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `tags` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `gallery_albums`
--

INSERT INTO `gallery_albums` (`id`, `title`, `default_name`, `path`, `model`, `model_id`, `tags`, `status`, `created`, `modified`) VALUES
(3, 'este', '', '', NULL, NULL, '', 'draft', '2016-09-09 21:03:19', '2016-09-09 21:03:33'),
(4, 'Album - 376', '', '', NULL, NULL, '', 'draft', '2016-09-12 22:28:57', '2016-09-12 22:28:57'),
(5, 'Album - 716', '', '', NULL, NULL, '', 'draft', '2016-09-13 18:56:40', '2016-09-13 18:56:40');

-- --------------------------------------------------------

--
-- Estrutura da tabela `gallery_pictures`
--

CREATE TABLE `gallery_pictures` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `size` bigint(20) NOT NULL,
  `album_id` int(11) NOT NULL,
  `main_id` int(11) DEFAULT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `style` varchar(255) NOT NULL DEFAULT 'full',
  `order` int(11) NOT NULL DEFAULT '9999999',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `gallery_pictures`
--

INSERT INTO `gallery_pictures` (`id`, `name`, `path`, `size`, `album_id`, `main_id`, `caption`, `style`, `order`, `created`, `modified`) VALUES
(15, 'small-Caso_de_usp.jpg', 'C:\\xampp\\htdocs\\dioceseII\\app\\webroot\\files\\gallery\\2\\small-e0b93ab7473022d591893d71d944acae.jpg', 1514, 2, 13, NULL, 'small', 9999999, '2016-09-09 18:20:23', '2016-09-09 18:20:23'),
(16, 'small-bd_locadora.png', 'C:\\xampp\\htdocs\\dioceseII\\app\\webroot\\files\\gallery\\2\\small-c7c782a5c205a52258220e0f8ff6a802.jpg', 1416, 2, 14, NULL, 'small', 9999999, '2016-09-09 18:20:23', '2016-09-09 18:20:23'),
(17, 'medium-Caso_de_usp.jpg', 'C:\\xampp\\htdocs\\dioceseII\\app\\webroot\\files\\gallery\\2\\medium-e0b93ab7473022d591893d71d944acae.jpg', 9695, 2, 13, NULL, 'medium', 9999999, '2016-09-09 18:20:23', '2016-09-09 18:20:23'),
(18, 'medium-bd_locadora.png', 'C:\\xampp\\htdocs\\dioceseII\\app\\webroot\\files\\gallery\\2\\medium-c7c782a5c205a52258220e0f8ff6a802.jpg', 9141, 2, 14, NULL, 'medium', 9999999, '2016-09-09 18:20:23', '2016-09-09 18:20:23'),
(19, 'large-Caso_de_usp.jpg', 'C:\\xampp\\htdocs\\dioceseII\\app\\webroot\\files\\gallery\\2\\large-e0b93ab7473022d591893d71d944acae.jpg', 53220, 2, 13, NULL, 'large', 9999999, '2016-09-09 18:20:24', '2016-09-09 18:20:24'),
(20, 'large-bd_locadora.png', 'C:\\xampp\\htdocs\\dioceseII\\app\\webroot\\files\\gallery\\2\\large-c7c782a5c205a52258220e0f8ff6a802.jpg', 66509, 2, 14, NULL, 'large', 9999999, '2016-09-09 18:20:24', '2016-09-09 18:20:24'),
(22, 'small-imagem.png', 'C:\\xampp\\htdocs\\dioceseII\\app\\webroot\\files\\gallery\\2\\small-41055949cb42e259b07d3fa7eb678ce3.jpg', 1499, 2, 21, NULL, 'small', 9999999, '2016-09-09 18:20:25', '2016-09-09 18:20:25'),
(23, 'medium-imagem.png', 'C:\\xampp\\htdocs\\dioceseII\\app\\webroot\\files\\gallery\\2\\medium-41055949cb42e259b07d3fa7eb678ce3.jpg', 7077, 2, 21, NULL, 'medium', 9999999, '2016-09-09 18:20:25', '2016-09-09 18:20:25'),
(24, 'large-imagem.png', 'C:\\xampp\\htdocs\\dioceseII\\app\\webroot\\files\\gallery\\2\\large-41055949cb42e259b07d3fa7eb678ce3.jpg', 43474, 2, 21, NULL, 'large', 9999999, '2016-09-09 18:20:25', '2016-09-09 18:20:25'),
(25, 'bd_locadora.png', 'C:\\xampp\\htdocs\\dioceseII\\app\\webroot\\files\\gallery\\3\\9d88c0bee77a59c0b2c93cdc2ec2ad1a.jpg', 170986, 3, NULL, NULL, 'full', 9999999, '2016-09-09 21:03:28', '2016-09-09 21:03:28'),
(26, 'small-bd_locadora.png', 'C:\\xampp\\htdocs\\dioceseII\\app\\webroot\\files\\gallery\\3\\small-9d88c0bee77a59c0b2c93cdc2ec2ad1a.jpg', 1416, 3, 25, NULL, 'small', 9999999, '2016-09-09 21:03:28', '2016-09-09 21:03:28'),
(27, 'medium-bd_locadora.png', 'C:\\xampp\\htdocs\\dioceseII\\app\\webroot\\files\\gallery\\3\\medium-9d88c0bee77a59c0b2c93cdc2ec2ad1a.jpg', 9141, 3, 25, NULL, 'medium', 9999999, '2016-09-09 21:03:28', '2016-09-09 21:03:28'),
(28, 'large-bd_locadora.png', 'C:\\xampp\\htdocs\\dioceseII\\app\\webroot\\files\\gallery\\3\\large-9d88c0bee77a59c0b2c93cdc2ec2ad1a.jpg', 66509, 3, 25, NULL, 'large', 9999999, '2016-09-09 21:03:28', '2016-09-09 21:03:28'),
(29, 'Pantanal.jpg', 'C:\\xampp\\htdocs\\DioceseFinal\\app\\webroot\\files\\gallery\\5\\b4aa655099ac66355a3724e96dba97ac.jpg', 218400, 5, NULL, NULL, 'full', 9999999, '2016-09-13 18:57:15', '2016-09-13 18:57:15'),
(30, 'small-Pantanal.jpg', 'C:\\xampp\\htdocs\\DioceseFinal\\app\\webroot\\files\\gallery\\5\\small-b4aa655099ac66355a3724e96dba97ac.jpg', 1720, 5, 29, NULL, 'small', 9999999, '2016-09-13 18:57:15', '2016-09-13 18:57:15'),
(31, 'medium-Pantanal.jpg', 'C:\\xampp\\htdocs\\DioceseFinal\\app\\webroot\\files\\gallery\\5\\medium-b4aa655099ac66355a3724e96dba97ac.jpg', 11274, 5, 29, NULL, 'medium', 9999999, '2016-09-13 18:57:16', '2016-09-13 18:57:16'),
(32, 'large-Pantanal.jpg', 'C:\\xampp\\htdocs\\DioceseFinal\\app\\webroot\\files\\gallery\\5\\large-b4aa655099ac66355a3724e96dba97ac.jpg', 78977, 5, 29, NULL, 'large', 9999999, '2016-09-13 18:57:16', '2016-09-13 18:57:16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `movimentos`
--

CREATE TABLE `movimentos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `coordenador` varchar(100) NOT NULL,
  `atividades` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `conteudo` text NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `data` datetime NOT NULL,
  `palavras_chave` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `transacaos`
--

CREATE TABLE `transacaos` (
  `id` int(11) NOT NULL,
  `nome_comprador` varchar(100) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `email_comprador` varchar(50) DEFAULT NULL,
  `ddd` int(2) NOT NULL,
  `telefone` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `transacaos`
--

INSERT INTO `transacaos` (`id`, `nome_comprador`, `curso_id`, `email_comprador`, `ddd`, `telefone`) VALUES
(8, 'Yuri ', 1, 'yuripedroso40@gmail.com', 0, 0),
(9, 'Yuri ', 2, 'yuripedroso40@gmail.com', 0, 0),
(10, 'Carlos', 1, 'yuripedroso40@gmail.com', 0, 0),
(11, 'Carlos', 1, 'yuripedroso40@gmail.com', 0, 0),
(12, 'Carlos', 1, 'yuripedroso40@gmail.com', 0, 0),
(13, 'Carlos', 1, 'yuripedroso40@gmail.com', 0, 0),
(14, 'Yuri Pedroso das Neves', 1, 'yuripedroso40@gmail.com', 0, 0),
(15, 'Yuri Pedroso das Neves', 1, 'yuripedroso40@gmail.com', 0, 0),
(16, 'Yuri Pedroso das Neves', 1, 'yuripedroso40@gmail.com', 0, 0),
(17, 'Yuri Pedroso das Neves', 2, 'yuripedroso40@gmail.com', 0, 0),
(18, 'Carlos Eduardo', 1, 'yuripedroso40@gmail.com', 0, 0),
(19, 'j', 1, 'Y@hotmail.com', 0, 0),
(20, 'yuri', 1, 'yuri@gmail.com', 0, 0),
(21, 'yuri', 1, 'yuri@gmail.com', 0, 0),
(22, 'yuri', 1, 'yuri@gmail.com', 0, 67),
(23, 'yuri', 1, 'yuri@gmail.com', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `password` varchar(60) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `role`, `password`, `username`) VALUES
(22, 'Luci', 'user', '$2a$10$bdnTWURSEALvzzvCQBu51ORDhngRHUW4MWsC/pQcFxDRmvN9arlii', 'Luci'),
(27, 'yuri', 'admin', '$2a$10$St.pcBD2HHhTCfxcuGiUPew2xtohrd4m86qpwAEsJ1i8fvAQ4RLgS', 'yuri_pedroso'),
(28, 'yuri', 'admin', '$2a$10$ZAS3O5IygSvxOa7128zmMunsQHNsSpv5/vP.fqu2.Vwdd4o/KQHvW', 'yuri_pedroso');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arquivos`
--
ALTER TABLE `arquivos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cleros`
--
ALTER TABLE `cleros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comunidades`
--
ALTER TABLE `comunidades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_paroquias_padres` (`id_clero`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_albums`
--
ALTER TABLE `gallery_albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_pictures`
--
ALTER TABLE `gallery_pictures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `folder_id` (`album_id`),
  ADD KEY `main_id` (`main_id`);

--
-- Indexes for table `movimentos`
--
ALTER TABLE `movimentos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transacaos`
--
ALTER TABLE `transacaos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK__cursos` (`curso_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arquivos`
--
ALTER TABLE `arquivos`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cleros`
--
ALTER TABLE `cleros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `comunidades`
--
ALTER TABLE `comunidades`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gallery_albums`
--
ALTER TABLE `gallery_albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `gallery_pictures`
--
ALTER TABLE `gallery_pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `movimentos`
--
ALTER TABLE `movimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transacaos`
--
ALTER TABLE `transacaos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `comunidades`
--
ALTER TABLE `comunidades`
  ADD CONSTRAINT `FK_paroquias_padres` FOREIGN KEY (`id_clero`) REFERENCES `cleros` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Limitadores para a tabela `transacaos`
--
ALTER TABLE `transacaos`
  ADD CONSTRAINT `FK__cursos` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
