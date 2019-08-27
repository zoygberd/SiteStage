-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 26 août 2019 à 19:18
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `databsite`
--

-- --------------------------------------------------------

--
-- Structure de la table `logins`
--

DROP TABLE IF EXISTS `logins`;
CREATE TABLE IF NOT EXISTS `logins` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(10000) NOT NULL,
  `Email` varchar(10000) NOT NULL,
  `MotDp` varchar(30) NOT NULL,
  `BirthD` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `logins`
--

INSERT INTO `logins` (`ID`, `Nom`, `Email`, `MotDp`, `BirthD`) VALUES
(1, 'Admin', 'zoygberdzaki@gmail.com', '234234', '2000-09-07'),
(2, 'zakaria', 'zoygberd@gmail.com', '123123', '2000-06-09'),
(3, 'Mariam Aboujenane', 'mariamkarmykpop@gmail.com', 'mariam123', '2002-12-29'),
(4, 'ahmed el', 'zoygberdhamid@gmail.com', '123123', '2019-06-09'),
(5, 'Zakaria Aboujenane', 'zoygberdo@gmail.com', 'hallo123', '2000-09-07');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
