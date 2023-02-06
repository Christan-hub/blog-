-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2023 at 11:40 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `email` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `address_2` varchar(100) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` text NOT NULL,
  `zip` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`email`, `phone`, `address`, `address_2`, `city`, `state`, `zip`) VALUES
('christanpereira23@gmail.com', 2147483647, 'mumbai', 'vasai', 'mumbai', 'Maharashtra', 401201),
('christanpereira23@gmail.com', 2147483647, 'mumbai', 'vasai', 'mumbai', 'Maharashtra', 401201),
('christanpereira23@gmail.com', 2147483647, 'mumbai', 'vasai', 'mumbai', 'Maharashtra', 401201),
('pereirachristan22@gmail.com', 2147483647, 'plaghar', 'vasai', 'mumbai', 'Maharashtra', 401201),
('christanpereria23@gmail.com', 2147483647, 'plaghar', 'vasai', 'mumbai', 'Goa(Panaji)', 401201),
('alpha@gmail.com', 2147483647, 'plaghar', 'vasai', 'mumbai', 'Maharashtra', 401201);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
