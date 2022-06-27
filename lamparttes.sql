-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 27, 2022 at 07:54 PM
-- Server version: 8.0.27
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lamparttest`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `CategoryId` smallint UNSIGNED NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`CategoryId`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CategoryId`, `CategoryName`) VALUES
(1, 'Đồ chơi'),
(2, 'Văn phòng');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `ProductId` smallint UNSIGNED NOT NULL AUTO_INCREMENT,
  `ProductName` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ProductImage` varchar(100) DEFAULT NULL,
  `CategoryId` int NOT NULL,
  PRIMARY KEY (`ProductId`),
  KEY `CategoryId` (`CategoryId`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductId`, `ProductName`, `ProductImage`, `CategoryId`) VALUES
(20, '123', '1656346713.pngaaa.com-2193118.png', 1),
(26, 'Cờ cá ngựa', '1656354969.pngaaa.com-2193118.png', 1),
(5, 'Cờ vua', '1656358816.1656354969.pngaaa.com-2193118.png', 2),
(6, 'test', '1656345608.pngaaa.com-2193123.png', 2),
(12, '1', '2', 3),
(30, 'Cờ cá ngựa', '1656354969.pngaaa.com-2193118.png', 1),
(28, 'Cờ cá ngựa', '1656354969.pngaaa.com-2193118.png', 1),
(37, 'test img', '1656358759.1656344812.pngaaa.com-2193123.png', 2),
(29, 'Cờ cá ngựa', '1656354969.pngaaa.com-2193118.png', 1),
(32, 'sách ', '1656355086.2193280-small.png', 2),
(33, 'test img', '1656358759.1656344812.pngaaa.com-2193123.png', 2),
(36, 'test img', '1656358759.1656344812.pngaaa.com-2193123.png', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
