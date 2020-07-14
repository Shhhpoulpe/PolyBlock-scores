-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 14 juil. 2020 à 11:42
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `polyblock`
--

-- --------------------------------------------------------

--
-- Structure de la table `joueurs`
--

DROP TABLE IF EXISTS `joueurs`;
CREATE TABLE IF NOT EXISTS `joueurs` (
  `id` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `joueurs`
--

INSERT INTO `joueurs` (`id`, `pseudo`) VALUES
('STEAM_1:1:52513959', 'Shhhpoulpe'),
('STEAM_1:0:11101', 'Gaben');

-- --------------------------------------------------------

--
-- Structure de la table `scores`
--

DROP TABLE IF EXISTS `scores`;
CREATE TABLE IF NOT EXISTS `scores` (
  `IDJoueur` varchar(255) NOT NULL,
  `niveau` int(11) NOT NULL,
  `temps` time NOT NULL,
  PRIMARY KEY (`IDJoueur`,`niveau`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `scores`
--

INSERT INTO `scores` (`IDJoueur`, `niveau`, `temps`) VALUES
('STEAM_1:1:52513959', 1, '03:15:00'),
('STEAM_1:1:52513959', 2, '02:11:00'),
('STEAM_1:1:52513959', 3, '02:18:00'),
('STEAM_1:1:52513959', 4, '03:12:00'),
('STEAM_1:1:52513959', 5, '08:54:00'),
('STEAM_1:0:11101', 2, '01:11:00'),
('STEAM_1:0:11101', 3, '04:11:00'),
('STEAM_1:0:11101', 4, '01:11:00'),
('STEAM_1:0:11101', 5, '07:21:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
