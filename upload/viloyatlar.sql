-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 01, 2018 at 12:19 AM
-- Server version: 5.6.38
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kredit`
--

-- --------------------------------------------------------

--
-- Table structure for table `viloyatlar`
--

CREATE TABLE `viloyatlar` (
  `vil_id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `viloyat` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `viloyatlar`
--

INSERT INTO `viloyatlar` (`vil_id`, `viloyat`) VALUES
('1', 'Тошкент'),
('20', 'Сирдарё'),
('25', 'Жиззах'),
('30', 'Самарқанд'),
('40', 'Фарғона'),
('50', 'Наманган'),
('60', 'Андижон'),
('70', 'Қашқадарё'),
('75', 'Сурхондарё'),
('80', 'Бухоро'),
('85', 'Навоий'),
('90', 'Хоразм'),
('95', 'Қорақалпогистон Республикаси');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `viloyatlar`
--
ALTER TABLE `viloyatlar`
  ADD PRIMARY KEY (`vil_id`),
  ADD UNIQUE KEY `vil_id` (`vil_id`),
  ADD UNIQUE KEY `vil_id_2` (`vil_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
