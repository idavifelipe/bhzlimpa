-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Nov-2017 às 05:10
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `blog_members`
--

CREATE TABLE `blog_members` (
  `memberID` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `blog_members`
--

INSERT INTO `blog_members` (`memberID`, `username`, `password`, `email`) VALUES
(2, 'Demo', '$2y$10$wJxa1Wm0rtS2BzqKnoCPd.7QQzgu7D/aLlMR5Aw3O.m9jx3oRJ5R2', 'demo@demo.com'),
(3, 'admin', '$2y$10$d3z9kBduvZ34cnXr8IvwZehCVFMSjkZxCQ7NHhg6TkbdUw5loVxZG', 'davifelipesilva@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `blog_posts`
--

CREATE TABLE `blog_posts` (
  `postID` int(11) UNSIGNED NOT NULL,
  `postTitle` varchar(255) DEFAULT NULL,
  `postDesc` text,
  `postCont` text,
  `postDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `blog_posts`
--

INSERT INTO `blog_posts` (`postID`, `postTitle`, `postDesc`, `postCont`, `postDate`) VALUES
(1, 'Bairro ParaÃ­so, Vista Alegre - 656', '<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://i0.wp.com/www.vetornortenoticias.com.br/wp-content/uploads/2017/03/Lixo.jpeg\" alt=\"BHZ Denuncia Post 01\" width=\"660\" height=\"367\" /></p>\r\n<h1 class=\"entry-title mkd-post-title\" style=\"text-align: center;\">Ap&oacute;s den&uacute;ncia do BHZ Limpa, entulho &eacute; retirado de&nbsp;lote</h1>\r\n<p style=\"text-align: justify;\">No &uacute;ltimo dia 2 de mar&ccedil;o, nossa equipe de reportagem foi acionada por moradores do bairro Jardim Imperial, em Lagoa Santa, que denunciaram o despejo de entulho na pra&ccedil;a Aur&eacute;lia Utsch. Na mat&eacute;ria anterior, o t&iacute;tulo foi &ldquo;Falta de sensibilidade! Uma situa&ccedil;&atilde;o comum em Lagoa Santa&rdquo;, para tentarmos encontrar uma justificativa que levar um ser humano a tomar atitudes como essa.&nbsp;</p>', '<h1 class=\"entry-title mkd-post-title\" style=\"text-align: center;\">Ap&oacute;s den&uacute;ncia do&nbsp;BHZ Limpa, entulho &eacute; retirado de&nbsp;lote</h1>\r\n<p style=\"text-align: justify;\">&ldquo;Infelizmente, cenas como essa da foto s&atilde;o comuns em Lagoa Santa e v&aacute;rias outras cidades de Minas e do Brasil. Os &ldquo;espert&otilde;es&rdquo; n&atilde;o podem ver uma &aacute;rea verde que logo v&atilde;o descartando entulho e todo tipo de lixo&rdquo;, parte da mat&eacute;ria publicada no dia 2 de mar&ccedil;o. &nbsp;</p>\r\n<p style=\"text-align: justify;\">E ap&oacute;s a grande repercuss&atilde;o da mat&eacute;ria, a prefeitura encontrou o respons&aacute;vel pelo entulho, e o notificou, dando prazo para a retirada do mesmo, com possibilidade de multa, caso descumprisse o prazo. E para a alegria dos moradores do bairro, o entulho foi todo retirado e a &aacute;rea limpa.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://i0.wp.com/www.vetornortenoticias.com.br/wp-content/uploads/2017/03/Lixo.jpeg\" alt=\"BHZ Denuncia Post 01\" width=\"674\" height=\"375\" /></p>\r\n<p style=\"text-align: justify;\">Situa&ccedil;&atilde;o como essa nem deveria acontecer, pra falar a verdade, mas como existe todo tipo de &ldquo;ser humano&rdquo;, somos obrigados a conviver com isso. Mas esse caso, do bairro Jardim Imperial, serviu de li&ccedil;&atilde;o.</p>\r\n<p style=\"text-align: justify;\">E se voc&ecirc; identificar alguma &aacute;rea pr&oacute;xima a sua casa que est&aacute; servindo de &ldquo;bota fora&rdquo;, envie para nossa reda&ccedil;&atilde;o o endere&ccedil;o e as fotos do local. Somos parceiros da sociedade, parceiros do cidad&atilde;o!</p>\r\n<p style=\"text-align: left;\">Conte com o BHZ Limps!</p>\r\n<p style=\"text-align: left;\">Por&nbsp;Davi Felipe</p>', '2017-11-13 13:34:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_members`
--
ALTER TABLE `blog_members`
  ADD PRIMARY KEY (`memberID`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`postID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_members`
--
ALTER TABLE `blog_members`
  MODIFY `memberID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `postID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
