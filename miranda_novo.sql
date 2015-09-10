-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10-Set-2015 às 03:51
-- Versão do servidor: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `miranda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `legenda` varchar(255) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `foto_principal` varchar(255) NOT NULL,
  `destaque` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `album`
--

INSERT INTO `album` (`id`, `nome`, `legenda`, `id_categoria`, `foto_principal`, `destaque`) VALUES
(52, 'Teste 1', ' Atualizando Legenda do teste 1 ', 3, '', 0),
(53, 'wallpaper', 'Wallpapers', 4, '', 0),
(56, 'animais', '   Descrição do Album  animais ', 5, '', 0),
(57, 'Bodas de ouro', 'Legenda bodas de ouro', 2, '', 0),
(58, 'Formatura', 'Formatura descrição', 3, '', 0),
(59, 'Album teste 15 anos', ' Tesde de descricao 15', 4, '', 0),
(61, 'Album de animais', 'Album de animais', 5, 'Captura de Tela (1).png', 0),
(62, 'Album de animais', 'Album de animais', 5, 'Captura de Tela (1).png', 0),
(66, 'Ultimo album', 'Ultimo album cadastrado', 5, 'eiffel_tower_wallpaper_hd.jpg', 1),
(67, 'Ultimo album', 'Ultimo album cadastrado', 5, 'eiffel_tower_wallpaper_hd.jpg', 1),
(68, 'Ultimo album 2', 'teste', 5, 'wallpaper-da-selva.jpg', 1),
(69, 'teste de album 3', 'Descrição do album', 5, 'Tigre.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome`) VALUES
(2, 'Casamento'),
(3, 'Formatura'),
(4, '15 Anos'),
(5, 'Animais');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE IF NOT EXISTS `imagens` (
  `id` int(11) NOT NULL,
  `id_album` int(11) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `legenda` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imagens`
--

INSERT INTO `imagens` (`id`, `id_album`, `endereco`, `legenda`) VALUES
(34, 52, '11745620_537107676428023_7201302448515086830_n.jpg', 'Teste de adição '),
(35, 56, 'Lindo-Tigre.jpg', 'Tigre'),
(36, 53, 'logo.png', 'Teste de imagem'),
(37, 57, '1380232_529987447077415_912859782_n.jpg', ''),
(38, 57, '10426155_741209669288524_3410495218667819376_n.jpg', ''),
(39, 69, 'Tigre.jpg', 'Imagem tigre'),
(40, 52, 'Tigre.jpg', ''),
(41, 52, 'wallpaper-da-selva.jpg', ''),
(42, 52, 'HD-Wallpaper-Large.jpeg', ''),
(43, 52, 'Lindo-Tigre.jpg', ''),
(44, 52, 'Sem título.jpg', ''),
(45, 69, 'slide.png', ''),
(46, 52, 'Comp (1).jpg', ''),
(47, 52, 'Comp (2).jpg', ''),
(48, 52, 'diagram.jpg', ''),
(49, 52, 'Sem título.jpg', ''),
(50, 52, 'Comp (1).jpg', ''),
(51, 52, 'Comp (2).jpg', ''),
(52, 52, 'diagram.jpg', ''),
(53, 52, 'Sem título.jpg', ''),
(54, 69, 'Comp (1).jpg', ''),
(55, 69, 'Comp (2).jpg', ''),
(56, 69, 'diagram.jpg', ''),
(57, 69, 'Sem título.jpg', ''),
(58, 69, 'slide.png', ''),
(59, 69, 'Comp (1).jpg', ''),
(60, 69, 'Comp (2).jpg', ''),
(61, 69, 'diagram.jpg', ''),
(62, 69, 'Sem título.jpg', ''),
(63, 69, 'slide.png', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) CHARACTER SET utf8 NOT NULL,
  `telefone` varchar(30) CHARACTER SET utf8 NOT NULL,
  `email` varchar(20) CHARACTER SET utf8 NOT NULL,
  `senha` longtext CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `telefone`, `email`, `senha`) VALUES
(1, 'Valdeci', '(41) 9766-9768', 'admin@admin', 'MTIzNA=='),
(2, 'fdfdafdsf', 'dsfdsf', 'fdsfdsf@fdsf', 'ZHNmc2Rh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
