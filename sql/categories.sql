-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `vilnius5` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `vilnius5`;

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `categories` (`id`, `parent`, `name`, `token`) VALUES
(1,	0,	'Jėgos aitvarai',	'jegos-aitvarai'),
(2,	0,	'Irklentės',	'irklentes'),
(3,	0,	'Burlentes',	'burlentes'),
(4,	0,	'Riedlentės',	'riedlentes'),
(5,	0,	'Slidės',	'slides'),
(6,	1,	'Kaitavimo lentos',	'kaitavimo-lentos'),
(7,	1,	'Jėgos aitvarai',	'jegos-aitvarai'),
(8,	1,	'Trapecijos',	'trapecijos');

-- 2016-04-26 13:02:33
