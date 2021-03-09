-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 07 mars 2021 à 22:56
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quickbaluchon`
--

-- --------------------------------------------------------

--
-- Structure de la table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `idCustomer` int(11) NOT NULL AUTO_INCREMENT,
  `lastName` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `excelfile` text NOT NULL,
  PRIMARY KEY (`idCustomer`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `customer`
--

INSERT INTO `customer` (`idCustomer`, `lastName`, `firstName`, `Email`, `password`, `excelfile`) VALUES
(1, 'miss', 'miss', 'miss@gmail.com', 'f749d76f48b905d297b6b4b256db7307f51c61c5', 'null');

-- --------------------------------------------------------

--
-- Structure de la table `deliveryman`
--

DROP TABLE IF EXISTS `deliveryman`;
CREATE TABLE IF NOT EXISTS `deliveryman` (
  `idDeliveryMan` int(11) NOT NULL AUTO_INCREMENT,
  `lastName` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `CarType` varchar(255) NOT NULL,
  `GeographicalZone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`idDeliveryMan`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `deliveryman`
--

INSERT INTO `deliveryman` (`idDeliveryMan`, `lastName`, `firstName`, `CarType`, `GeographicalZone`, `Email`, `password`) VALUES
(3, 'efg', 'efg', 'efg', 'efg', 'efg@gmail.com', 'cbf019b764b9477080c5a9a748a2911a5fa6d614'),
(2, 'abc', 'abc', 'abc', 'abc', 'abc@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
