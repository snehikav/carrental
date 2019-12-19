-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2019 at 08:59 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myrentals`
--
CREATE DATABASE IF NOT EXISTS `myrentals` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `myrentals`;

-- --------------------------------------------------------

--
-- Table structure for table `rentals`
--

CREATE TABLE IF NOT EXISTS `rentals` (
  `type` varchar(10) NOT NULL DEFAULT '',
  `model` varchar(50) NOT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rentals`
--

INSERT INTO `rentals` (`type`, `model`, `price`) VALUES
('Economy', 'Toyota', 30),
('Economy',	'Honda Civic', 30),
('Economy',	'Mitsubishi Mirage', 30),
('Economy',	'Hyundai Accent', 30),
('Economy',	'Nissan Sentra', 30),
('Economy',	'Subaru Impreza', 30),
('Economy',	'Honda Fit', 30),
('Economy',	'Hyundai Elantra', 30),
('Economy',	'Kia Soul', 30),
('Economy',	'Chevrolet Spark', 30),
('Economy',	'Mazda Mazda3', 30),
('Luxury',	'Acura ILX', 100),
('Luxury',	'Lexus CT Hybrid', 100),
('Luxury',	'Audi A3', 100),
('Luxury',	'Mercedes-Benz CLA', 100),
('Luxury',	'Acura TLX', 100),
('Luxury',	'Buick Cascada', 100),
('Luxury',	'BMW 2 Series', 100),
('Luxury',	'Volvo S60', 100),
('Luxury',	'Infiniti Q50', 100),
('SUV',	'Nissan Pathfinder', 50),
('SUV',	'Infiniti QX80', 50),
('SUV',	'Toyota RAV4', 50),
('SUV',	'Ford Expedition', 50),
('SUV',	'Ford Eco Sport', 50),
('SUV',	'Chevy Suburban', 50),
('SUV',	'Audi Q3', 50),
('SUV',	'BMW X3', 50),
('SUV',	'Audi Q7', 50);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
