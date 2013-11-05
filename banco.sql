-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.34-0ubuntu0.12.10.1 - (Ubuntu)
-- Server OS:                    debian-linux-gnu
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2013-11-05 21:16:40
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping database structure for mundoquimica
CREATE DATABASE IF NOT EXISTS `mundoquimica` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `mundoquimica`;


-- Dumping structure for table mundoquimica.materias
CREATE TABLE IF NOT EXISTS `materias` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) NOT NULL,
  `texto` text NOT NULL,
  `criado` datetime NOT NULL,
  `criador` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `criador` (`criador`),
  CONSTRAINT `FK_materias_usuarios` FOREIGN KEY (`criador`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table mundoquimica.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `senha` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
