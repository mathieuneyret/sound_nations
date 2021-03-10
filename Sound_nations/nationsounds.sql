-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 04 fév. 2021 à 17:14
-- Version du serveur :  8.0.21
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `nationsounds`
--

-- --------------------------------------------------------

--
-- Structure de la table `artiste`
--

DROP TABLE IF EXISTS `artiste`;
CREATE TABLE IF NOT EXISTS `artiste` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NomGroupe` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `billeterie`
--

DROP TABLE IF EXISTS `billeterie`;
CREATE TABLE IF NOT EXISTS `billeterie` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `IDPass` int NOT NULL,
  `IDUser` int NOT NULL,
  `DateAchat` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_billeterie_typepass` (`IDPass`),
  KEY `fk_billeterie_User` (`IDUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `LibelléCat` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `concert`
--

DROP TABLE IF EXISTS `concert`;
CREATE TABLE IF NOT EXISTS `concert` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `LibelléConcert` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `jouer`
--

DROP TABLE IF EXISTS `jouer`;
CREATE TABLE IF NOT EXISTS `jouer` (
  `IDScene` int NOT NULL,
  `IDArtiste` int NOT NULL,
  `IDConcert` int NOT NULL,
  `DateConcert` date NOT NULL,
  `HeureConcert` datetime NOT NULL,
  `ID` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`),
  KEY `fk_jouer_scene` (`IDScene`),
  KEY `fk_jouer_artiste` (`IDArtiste`),
  KEY `fk_jouer_concert` (`IDConcert`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `partenaire`
--

DROP TABLE IF EXISTS `partenaire`;
CREATE TABLE IF NOT EXISTS `partenaire` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `LibelléPartenaire` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `IDCatégorie` int NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_partenaire_categorie` (`IDCatégorie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `programme`
--

DROP TABLE IF EXISTS `programme`;
CREATE TABLE IF NOT EXISTS `programme` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `IDConcert` int NOT NULL,
  `Horaire` datetime NOT NULL,
  `IDScene` int NOT NULL,
  `IDType` int NOT NULL,
  `Description` text,
  PRIMARY KEY (`ID`),
  KEY `fk_prog_type` (`IDType`),
  KEY `fk_prog_concert` (`IDConcert`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `scene`
--

DROP TABLE IF EXISTS `scene`;
CREATE TABLE IF NOT EXISTS `scene` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `LibelléScene` varchar(50) NOT NULL,
  `Coordonée` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `typemembre`
--

DROP TABLE IF EXISTS `typemembre`;
CREATE TABLE IF NOT EXISTS `typemembre` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `LibelléPoste` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `typemusical`
--

DROP TABLE IF EXISTS `typemusical`;
CREATE TABLE IF NOT EXISTS `typemusical` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `LibelléMusique` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `typepass`
--

DROP TABLE IF EXISTS `typepass`;
CREATE TABLE IF NOT EXISTS `typepass` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `LibelléPass` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(100) NOT NULL,
  `Prénom` varchar(100) NOT NULL,
  `NumTel` int NOT NULL,
  `Adresse` text NOT NULL,
  `CodePostal` int NOT NULL,
  `DateNaissance` date NOT NULL,
  `IDMembre` int NOT NULL,
  `AdresseMail` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_User_TypeMembre` (`IDMembre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `billeterie`
--
ALTER TABLE `billeterie`
  ADD CONSTRAINT `fk_billeterie_typepass` FOREIGN KEY (`IDPass`) REFERENCES `typepass` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_billeterie_User` FOREIGN KEY (`IDUser`) REFERENCES `user` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `jouer`
--
ALTER TABLE `jouer`
  ADD CONSTRAINT `fk_jouer_artiste` FOREIGN KEY (`IDArtiste`) REFERENCES `artiste` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_jouer_concert` FOREIGN KEY (`IDConcert`) REFERENCES `concert` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_jouer_scene` FOREIGN KEY (`IDScene`) REFERENCES `scene` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `partenaire`
--
ALTER TABLE `partenaire`
  ADD CONSTRAINT `fk_partenaire_categorie` FOREIGN KEY (`IDCatégorie`) REFERENCES `categorie` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `programme`
--
ALTER TABLE `programme`
  ADD CONSTRAINT `fk_prog_concert` FOREIGN KEY (`IDConcert`) REFERENCES `jouer` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_prog_type` FOREIGN KEY (`IDType`) REFERENCES `typemusical` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_User_TypeMembre` FOREIGN KEY (`IDMembre`) REFERENCES `typemembre` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
