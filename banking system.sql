-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 08:22 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET nameS utf8mb4 */;

--
-- Database: `banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `Banking Details`
--

CREATE TABLE `Banking Details` (
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mini_statement`
--

INSERT INTO `Banking Details` (`sender`, `receiver`, `amount`) VALUES
('Akash', 'Harshal', 400),
('Tejas', 'Utkarsh', 500),
('Msd', 'Raina', 250),
('Virat', 'Rohit', 120),
('Thala', 'Chinna thala', 170),
('Krishna', 'Sai', 190);


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `amount`) VALUES
('Akash', 'Akash@gmail.com', 1010),
('Harshal', 'Harshal@gmail.com', 990),
('Utkarsh', 'Utkarsh@gmail.com', 1000),
('Tejas', 'Tejas@gmail.com', 950),
('MSD', 'MSD@gmail.com', 1000),
('Raina', 'Raina@gmail.com', 1000),
('Virat', 'Virat@gmail.com', 1000),
('Rohit', 'Rohit@gmail.com', 1050),
('Krishna', 'Krishna@gmail.com', 800),
('Sai', 'Sai@gmail.com', 1200);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
