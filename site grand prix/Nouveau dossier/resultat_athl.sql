-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 07 mai 2019 à 15:43
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `grandprix`
--

-- --------------------------------------------------------

--
-- Structure de la table `resultat_athl`
--

CREATE TABLE `resultat_athl` (
  `ID_ELIMINATOIRE` int(11) NOT NULL,
  `ID_ATHLETE` int(11) NOT NULL,
  `RANG_ATHLETE` int(11) DEFAULT NULL,
  `POINTS_ATHLETE` int(11) DEFAULT NULL,
  `RECORD` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `resultat_athl`
--

INSERT INTO `resultat_athl` (`ID_ELIMINATOIRE`, `ID_ATHLETE`, `RANG_ATHLETE`, `POINTS_ATHLETE`, `RECORD`) VALUES
(1, 1, 1, 58, 0),
(1, 2, 2, 57, 1),
(1, 3, 3, 47, 0),
(1, 4, 4, 40, 0),
(1, 5, 5, 38, 0),
(2, 6, 1, 68, 0),
(2, 7, 2, 67, 0),
(2, 8, 3, 58, 0),
(2, 9, 4, 38, 1),
(2, 10, 5, 28, 1),
(3, 1, 1, 58, 0),
(3, 2, 2, 48, 0),
(3, 3, 3, 38, 1),
(3, 4, 4, 28, 0),
(3, 5, 5, 18, 0),
(4, 6, 1, 75, 0),
(4, 7, 2, 65, 0),
(4, 8, 3, 55, 0),
(4, 9, 4, 45, 0),
(4, 10, 5, 35, 0),
(5, 1, 1, 79, 0),
(5, 2, 2, 69, 0),
(5, 3, 3, 58, 0),
(5, 4, 4, 49, 0),
(5, 5, 5, 39, 0),
(6, 6, 1, 98, 1),
(6, 7, 2, 88, 0),
(6, 8, 3, 65, 0),
(6, 9, 4, 51, 0),
(6, 10, 5, 29, 0),
(7, 1, 1, 89, 0),
(7, 2, 2, 78, 0),
(7, 3, 3, 55, 0),
(7, 4, 4, 43, 0),
(7, 5, 5, 18, 0),
(8, 6, 1, 91, 0),
(8, 7, 2, 86, 0),
(8, 8, 3, 85, 0),
(8, 9, 4, 72, 0),
(8, 10, 5, 55, 0),
(9, 1, 1, 66, 0),
(9, 2, 2, 12, 0),
(9, 3, 3, 74, 0),
(9, 4, 4, 32, 0),
(9, 5, 5, 9, 0),
(10, 6, 1, 89, 0),
(10, 7, 2, 78, 0),
(10, 8, 4, 11, 0),
(10, 9, 5, 8, 0),
(10, 10, 3, 52, 0),
(11, 1, 1, 92, 1),
(11, 2, 3, 45, 0),
(11, 3, 2, 70, 0),
(11, 4, 4, 13, 0),
(11, 5, 5, 5, 0),
(12, 6, 1, 99, 0),
(12, 7, 3, 78, 0),
(12, 8, 2, 90, 0),
(12, 9, 4, 56, 0),
(12, 10, 5, 45, 0),
(13, 1, 1, 97, 0),
(13, 2, 2, 69, 0),
(13, 3, 3, 67, 0),
(13, 4, 4, 25, 0),
(13, 5, 5, 12, 0),
(14, 6, 3, 78, 0),
(14, 7, 2, 85, 0),
(14, 8, 1, 89, 0),
(14, 9, 5, 10, 0),
(14, 10, 4, 25, 0),
(15, 1, 2, 83, 0),
(15, 2, 5, 58, 0),
(15, 3, 1, 97, 0),
(15, 4, 3, 72, 0),
(15, 5, 4, 65, 0),
(16, 6, 1, 92, 0),
(16, 7, 4, 77, 0),
(16, 8, 3, 82, 0),
(16, 9, 2, 86, 0),
(16, 10, 5, 60, 0),
(17, 1, 3, 81, 0),
(17, 2, 5, 40, 0),
(17, 3, 2, 89, 0),
(17, 4, 1, 91, 0),
(17, 5, 4, 78, 0),
(18, 6, 1, 78, 0),
(18, 7, 2, 62, 0),
(18, 8, 3, 50, 0),
(18, 9, 4, 45, 0),
(18, 10, 5, 39, 0),
(19, 1, 1, 90, 0),
(19, 2, 2, 78, 0),
(19, 3, 3, 72, 0),
(19, 4, 4, 65, 0),
(19, 5, 5, 60, 0),
(20, 6, 1, 92, 0),
(20, 7, 2, 78, 0),
(20, 8, 3, 70, 0),
(20, 9, 4, 64, 0),
(20, 10, 5, 53, 0),
(21, 1, 1, 93, 0),
(21, 2, 2, 82, 0),
(21, 3, 3, 74, 0),
(21, 4, 4, 25, 0),
(21, 5, 5, 11, 0),
(22, 6, 1, 104, 0),
(22, 7, 2, 74, 0),
(22, 8, 3, 73, 0),
(22, 9, 4, 54, 0),
(22, 10, 5, 22, 0),
(23, 1, 1, 50, 0),
(23, 2, 2, 30, 0),
(23, 3, 3, 20, 0),
(23, 4, 4, 15, 0),
(23, 5, 5, 10, 0),
(24, 6, 1, 93, 0),
(24, 7, 2, 82, 0),
(24, 8, 3, 74, 0),
(24, 9, 4, 25, 0),
(24, 10, 5, 11, 0),
(25, 1, 1, 50, 0),
(25, 2, 2, 30, 0),
(25, 3, 3, 20, 0),
(25, 4, 4, 15, 0),
(25, 5, 5, 10, 0),
(26, 6, 1, 104, 0),
(26, 7, 2, 74, 0),
(26, 8, 3, 73, 0),
(26, 9, 4, 54, 0),
(26, 10, 5, 22, 0),
(27, 1, 1, 50, 0),
(27, 2, 2, 30, 0),
(27, 3, 3, 20, 0),
(27, 4, 4, 15, 0),
(27, 5, 5, 10, 0),
(28, 6, 1, 104, 0),
(28, 7, 2, 74, 0),
(28, 8, 3, 73, 0),
(28, 9, 4, 54, 0),
(28, 10, 5, 22, 0),
(29, 1, 1, 98, 0),
(29, 2, 2, 93, 0),
(29, 3, 3, 78, 0),
(29, 4, 4, 55, 0),
(29, 5, 5, 45, 0),
(30, 6, 1, 94, 0),
(30, 7, 2, 74, 0),
(30, 8, 3, 69, 0),
(30, 9, 4, 54, 0),
(30, 10, 5, 41, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `resultat_athl`
--
ALTER TABLE `resultat_athl`
  ADD PRIMARY KEY (`ID_ELIMINATOIRE`,`ID_ATHLETE`),
  ADD KEY `FK_RESULTAT_ATHL2` (`ID_ATHLETE`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `resultat_athl`
--
ALTER TABLE `resultat_athl`
  ADD CONSTRAINT `FK_RESULTAT_ATHL` FOREIGN KEY (`ID_ELIMINATOIRE`) REFERENCES `eliminatoire` (`ID_ELIMINATOIRE`),
  ADD CONSTRAINT `FK_RESULTAT_ATHL2` FOREIGN KEY (`ID_ATHLETE`) REFERENCES `athlete` (`ID_ATHLETE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
