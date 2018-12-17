-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 17 déc. 2018 à 09:48
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `imiesphere`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `id_membre` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `introduction` varchar(100) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `corps_text` varchar(500) DEFAULT NULL,
  `categorie` varchar(255) DEFAULT NULL,
  `date_publication` varchar(10) DEFAULT NULL,
  `date_modification` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_article`),
  KEY `id_membre` (`id_membre`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `id_membre`, `titre`, `introduction`, `image`, `corps_text`, `categorie`, `date_publication`, `date_modification`) VALUES
(1, 1, 'titre1', 'intro1', 'image', 'oui l\'article', 'categorie1', NULL, NULL),
(2, 1, 'aze', 'aze', 'aze', 'azeaze', 'evenement', NULL, NULL),
(3, 1, 'RE : Tresors: vos decouvertes, ventes, echanges...', 'aaa', 'aaa', 'azeazeazeaze', 'evenement', NULL, NULL),
(4, 1, 'vs', 'vs', 'https://pbs.twimg.com/profile_images/1039803275023994881/dgmAK2in_400x400.jpg', 'vfdvdé', 'evenement', NULL, NULL),
(5, 1, 'vsaa', 'vs', 'https://pbs.twimg.com/profile_images/1039803275023994881/dgmAK2in_400x400.jpg', 'éééééééééé', 'evenement', NULL, NULL),
(6, 1, 'vsaaazeaze', 'vs', '', 'azeazeaze', 'evenement', NULL, NULL),
(7, 1, 'article 42', 'article numero 42', 'oui', 'ouiiuuouiuiuoiuoiuoiuioi', 'evenement', NULL, NULL),
(8, 1, 'aazza', 'azaaaa', 'azeazeaze', 'azeazzae', 'evenement', NULL, NULL),
(9, 1, 'aazzaeee', 'azaaaa', 'azeazeaze', 'azeaze', 'evenement', NULL, NULL),
(10, 1, 'aazzaeeeazeaze', 'azaaaa', 'azeazeaze', 'azeaze', 'evenement', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `espace_membre`
--

DROP TABLE IF EXISTS `espace_membre`;
CREATE TABLE IF NOT EXISTS `espace_membre` (
  `id_membre` int(11) NOT NULL AUTO_INCREMENT,
  `id_article` int(11) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `mail` varchar(255) NOT NULL,
  `motdepasse` text NOT NULL,
  `campus` varchar(15) DEFAULT NULL,
  `role` varchar(25) DEFAULT NULL,
  `ville` text,
  `adresse` varchar(75) DEFAULT NULL,
  `codepostal` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_membre`),
  KEY `id_article` (`id_article`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
