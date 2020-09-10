-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 10-Set-2020 às 02:37
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

DROP TABLE IF EXISTS `livros`;
CREATE TABLE IF NOT EXISTS `livros` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `sinopse` longtext COLLATE utf8_unicode_ci NOT NULL,
  `categoria` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `editora` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `autor` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `edicao` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `ano` int(4) NOT NULL,
  `numpg` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `titulo`, `sinopse`, `categoria`, `editora`, `autor`, `edicao`, `ano`, `numpg`) VALUES
(10, 'Harry Potter e a Pedra Filosofal', 'Harry Potter e a Pedra Filosofal Ã© o primeiro dos sete livros da sÃ©rie de fantasia Harry Potter, escrita por J. K. Rowling. O livro conta a histÃ³ria de Harry Potter, um Ã³rfÃ£o criado pelos tios que descobre, em seu dÃ©cimo primeiro aniversÃ¡rio, que Ã© um bruxo.', 'Romance, Literatura infantil, Alta fantasia, Literatura fantÃ¡stica', 'Rocco', ' J. K. Rowling', 'Pedra Filosofal', 1997, 304);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
