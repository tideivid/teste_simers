-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 10/12/2016 às 15:35
-- Versão do servidor: 5.5.51-38.2
-- Versão do PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `fgjjr057_simers`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` char(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Fazendo dump de dados para tabela `user`
--

INSERT INTO `user` (`id`, `nome`, `sobrenome`, `usuario`, `senha`, `email`, `status`) VALUES
(1, 'João', 'Matias', 'joao.matias', 'asdf', 'joao.matias@inmemorian.com', '1'),
(2, 'Maria', 'da Graça', 'maria.graca', 'fdsa', 'maria.graca@inmemorian.com', '1'),
(3, 'Pedro', 'de Lara', 'pedro.lara', '1234asdf', 'pedro.lara@inmemorian.com', '0'),
(4, 'Fulano', 'de Tal', 'fulano.tal', 'onaluf', 'fulano.tal@detal.com', '1'),
(5, 'Marcelo', 'Moura', 'marcelo.moura', 'plokiqaws', 'marcelo.moura@teste.com.br', '1'),
(6, 'Joao', 'Maria', 'joao.maria', 'qawsed', 'joao.maria@terra.com.br', '0'),
(7, 'Luciano', 'Bobsin', 'luciano.bobsin', 'frvdgr', 'luciano.bobsin@site.com', '1'),
(8, 'Pug', 'Nassal', 'pug', 's125w4', 'pug.nassal@terra.com', '0'),
(9, 'Vonnan', 'Niato', 'vonnan', '3212dd', 'vonnan@mail.com.br', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
