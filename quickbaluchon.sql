-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 11, 2021 at 10:58 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quickbaluchon`
--

-- --------------------------------------------------------

--
-- Table structure for table `colis`
--

CREATE TABLE `colis` (
  `id` int(11) NOT NULL,
  `numéro` int(11) NOT NULL,
  `rue` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `poids` int(11) NOT NULL,
  `dimension` int(11) NOT NULL,
  `colis` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `id_Customer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `colis`
--

INSERT INTO `colis` (`id`, `numéro`, `rue`, `ville`, `pays`, `poids`, `dimension`, `colis`, `description`, `id_Customer`) VALUES
(14, 50, 'rue des communes', 'marseille', 'france', 25, 130, 'tres tres treslogo.png', 'très gros colis', 4),
(15, 50, 'rue des gendarmes', 'nice', 'france', 50, 140, 'très beau colislogo.png', 'kkkkkkkkkkkkkkkkkkkkk', 4);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `idCustomer` int(11) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `excelfile` text NOT NULL,
  `admin` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`idCustomer`, `lastName`, `firstName`, `Email`, `password`, `excelfile`, `admin`) VALUES
(1, 'miss', 'miss', 'miss@gmail.com', 'f749d76f48b905d297b6b4b256db7307f51c61c5', 'null', NULL),
(2, 'gera', '', 'grae@gmail.com', '661f4979d47c50be5626c7870994eeddf77c82be', 'null', NULL),
(3, 'Billy', 'Billy', 'admin@gmail.com', '9cf95dacd226dcf43da376cdb6cbba7035218921', 'null', 1),
(4, 'frea', 'frea', 'frea@gmail.com', '6c63d852ac8d70b8d4fa9750c9005a3a5a2fbacb', 'null', NULL),
(5, 'test', 'test', 'test@gmail.com', '3b004ac6d8a602681f5ee3587c924855679e21d9', 'null', 1);

-- --------------------------------------------------------

--
-- Table structure for table `deliveryman`
--

CREATE TABLE `deliveryman` (
  `idDeliveryMan` int(11) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `CarType` varchar(255) NOT NULL,
  `GeographicalZone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `deliveryman`
--

INSERT INTO `deliveryman` (`idDeliveryMan`, `lastName`, `firstName`, `CarType`, `GeographicalZone`, `Email`, `password`) VALUES
(3, 'efg', 'efg', 'efg', 'efg', 'efg@gmail.com', 'cbf019b764b9477080c5a9a748a2911a5fa6d614'),
(2, 'abc', 'abc', 'abc', 'abc', 'abc@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colis`
--
ALTER TABLE `colis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Customer_fk` (`id_Customer`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`idCustomer`);

--
-- Indexes for table `deliveryman`
--
ALTER TABLE `deliveryman`
  ADD PRIMARY KEY (`idDeliveryMan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colis`
--
ALTER TABLE `colis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `idCustomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `deliveryman`
--
ALTER TABLE `deliveryman`
  MODIFY `idDeliveryMan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
