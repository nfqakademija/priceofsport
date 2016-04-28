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
(8,	1,	'Trapecijos',	'trapecijos'),
(9,	1,	'Jėgos aitvaro valdymo sistemos',	'jegos-aitvaro-valdymo-sistemos'),
(10,	1,	'Liemenės',	'liemenes'),
(11,	1,	'Maišai įrangai',	'maisai-irangai'),
(12,	1,	'Aksesuarai',	'aksesuarai'),
(13,	3,	'Burlentės',	'burlentes'),
(14,	3,	'Burės',	'bures'),
(15,	3,	'Stiebai',	'stiebai'),
(16,	3,	'Gikai',	'gikai'),
(17,	3,	'Prailgintuvai ir šarnyrai',	'prailgintuvai-ir-sarnyrai'),
(18,	3,	'Trapecijos',	'trapecijos'),
(19,	3,	'Liemenės',	'liemenes'),
(20,	3,	'Maišai įrangai',	'maisai-irangai'),
(21,	3,	'Aksesuarai',	'aksesuarai'),
(22,	0,	'Snieglentės',	'snieglentes'),
(23,	22,	'Snieglentės',	'snieglentes'),
(24,	22,	'Apkaustai',	'apkaustai'),
(25,	22,	'Batai',	'batai'),
(26,	22,	'Apsaugos',	'apsaugos'),
(27,	22,	'Šalmai',	'salmai'),
(28,	22,	'Akiniai',	'akiniai'),
(29,	22,	'Pirštinės',	'pirstines'),
(30,	22,	'Aksesuarai',	'aksesuarai'),
(31,	22,	'Pošalmiai ir kaukės',	'posalmiai-ir-kaukes'),
(32,	5,	'Slidės',	'slides'),
(33,	5,	'Lazdos',	'lazdos'),
(34,	5,	'Apkaustai',	'apkaustai'),
(35,	5,	'Batai',	'batai'),
(36,	5,	'Slidinėjimo apsaugos',	'slidinejimo-apsaugos'),
(37,	5,	'Apranga',	'apranga'),
(38,	5,	'Aksesuarai',	'aksesuarai'),
(39,	5,	'Krepšiai',	'krepsiai'),
(40,	5,	'Slidinėjimo akiniai',	'slidinejimo-akiniai');

-- 2016-04-28 14:54:28
