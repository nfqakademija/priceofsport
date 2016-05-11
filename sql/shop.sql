-- phpMyAdmin SQL Dump
-- version 4.6.0deb1.wily~ppa.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 11, 2016 at 05:33 PM
-- Server version: 5.6.30-0ubuntu0.15.10.1
-- PHP Version: 7.0.6-1+donate.sury.org~wily+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shops`
--

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `shop_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shop_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `shop_link`, `shop_name`, `description`, `logo`) VALUES
(1, 'http://www.surfhouse.lt/eshop/', 'SurfHouse', 'Buriavimo ir kaitavimo mokykla, burlenčių pardavimas, snieglenčių prekyba, SUPai, SUPų nuoma, hidrokostiumai, termo rūbai, šalmai, apkaustai, slidinėjimo batai.', 'http://www.surfhouse.lt/eshop/image/data/logotipai%20png/surfhouse%20logo.png'),
(2, 'http://xpro.lt', 'xPro', 'Slidinėjimo, buriavimo, kaitavimo, nardymo įrangos el. parduotuvė, kelionės.', 'http://www.xpro.lt/img/new-store-1415276396.jpg'),
(3, 'http://bsonline.eu', 'Boards', 'BSonline.eu - sniego/gatvės/vandens sportų internetinė parduotuvė. Jeigu Jums patinka ekstremalus gyvenimo būdas, Jums patiks ir prekiniai ženklai, kuriuos mes atstovaujame.', 'http://bsonline.eu/image/data/bsonline.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
