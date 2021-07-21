-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 02:25 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `armrobotdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `armrobotdb`
--

CREATE TABLE `armrobotdb` (
  `Engine1` int(3) NOT NULL,
  `Engine2` int(3) NOT NULL,
  `Engine3` int(3) NOT NULL,
  `Engine4` int(3) NOT NULL,
  `Engine5` int(3) NOT NULL,
  `Engine6` int(3) NOT NULL,
  `running` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `armrobotdb`
--

INSERT INTO `armrobotdb` (`Engine1`, `Engine2`, `Engine3`, `Engine4`, `Engine5`, `Engine6`, `running`) VALUES
(38, 53, 50, 0, 42, 48, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
