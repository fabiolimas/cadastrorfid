-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 04-Mar-2020 às 12:22
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rfid`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cartoes_rfid`
--

DROP TABLE IF EXISTS `cartoes_rfid`;
CREATE TABLE IF NOT EXISTS `cartoes_rfid` (
  `cartoes_rfid_id` int(11) NOT NULL AUTO_INCREMENT,
  `cartoes_rfid_numero_cartao` int(11) DEFAULT NULL,
  `cartoes_rfid_usuario` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cartoes_rfid_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cartoes_rfid`
--

INSERT INTO `cartoes_rfid` (`cartoes_rfid_id`, `cartoes_rfid_numero_cartao`, `cartoes_rfid_usuario`) VALUES
(17, 1, 'Lucas '),
(18, 2, 'JosÃ© '),
(19, 3, 'Mariana '),
(20, 4, 'Luiz '),
(21, 5, 'Cida '),
(22, 6, 'AracÃ­ '),
(23, 7, 'FÃ¡bio '),
(24, 8, 'Lopes '),
(25, 9, 'Guto '),
(26, 10, 'Raimunda '),
(27, 11, 'robeilton ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `controle_acesso_rfid`
--

DROP TABLE IF EXISTS `controle_acesso_rfid`;
CREATE TABLE IF NOT EXISTS `controle_acesso_rfid` (
  `controle_acesso_rfid_id` int(11) NOT NULL AUTO_INCREMENT,
  `controle_acesso_rfid_data` date DEFAULT NULL,
  `controle_acesso_rfid_hora` time DEFAULT NULL,
  `cartoes_rfid_cartoes_rfid_id` int(11) NOT NULL,
  PRIMARY KEY (`controle_acesso_rfid_id`),
  KEY `fk_controle_acesso_rfid_cartoes_rfid` (`cartoes_rfid_cartoes_rfid_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `controle_acesso_rfidd`
--

DROP TABLE IF EXISTS `controle_acesso_rfidd`;
CREATE TABLE IF NOT EXISTS `controle_acesso_rfidd` (
  `controle_acesso_rfid_id` int(4) NOT NULL AUTO_INCREMENT,
  `controle_acesso_rfid_date` date DEFAULT NULL,
  `controle_acesso_rfid_hora` time DEFAULT NULL,
  `cartoes_rfid_cartoes_rfid_id` int(4) DEFAULT NULL,
  PRIMARY KEY (`controle_acesso_rfid_id`),
  KEY `controle_fk` (`cartoes_rfid_cartoes_rfid_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
