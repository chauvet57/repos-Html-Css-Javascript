-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 07 mai 2019 à 13:19
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

--
-- Déchargement des données de la table `athlete`
--

INSERT INTO `athlete` (`ID_ATHLETE`, `ID_FEDERATION`, `NOM_ATHLETE`, `SEXE`) VALUES
(1, 1, 'David', 'M'),
(2, 1, 'Christophe', 'M'),
(3, 2, 'Mario', 'M'),
(4, 2, 'Alex', 'M'),
(5, 3, 'Sylvain', 'M'),
(6, 3, 'Fred', 'M'),
(7, 4, 'Maxime', 'M'),
(8, 4, 'Hatem', 'M'),
(9, 5, 'Sebastien', 'M'),
(10, 5, 'Thibaud', 'M');

--
-- Déchargement des données de la table `eliminatoire`
--

INSERT INTO `eliminatoire` (`ID_ELIMINATOIRE`, `ID_SPECIALITE`, `ID_EPREUVE`, `DATE_ELIMINATOIRE`, `NBR_PARTICIPANT`) VALUES
(1, 1, 1, '2019-01-01', 5),
(2, 1, 1, '2019-01-01', 5),
(3, 2, 2, '2019-01-02', 5),
(4, 2, 2, '2019-01-02', 5),
(5, 3, 3, '2019-01-03', 5),
(6, 3, 3, '2019-01-03', 5),
(7, 4, 4, '2019-01-04', 5),
(8, 4, 4, '2019-01-04', 5),
(9, 5, 5, '2019-01-05', 5),
(10, 5, 5, '2019-01-05', 5),
(11, 6, 6, '2019-02-01', 5),
(12, 6, 6, '2019-02-01', 5),
(13, 7, 7, '2019-02-02', 5),
(14, 7, 7, '2019-02-02', 5),
(15, 8, 8, '2019-02-03', 5),
(16, 8, 8, '2019-02-03', 5),
(17, 9, 9, '2019-02-04', 5),
(18, 9, 9, '2019-02-04', 5),
(19, 10, 10, '2019-02-06', 5),
(20, 10, 10, '2019-02-06', 5),
(21, 1, 11, '2019-03-01', 5),
(22, 1, 11, '2019-03-01', 5),
(23, 5, 12, '2019-03-02', 5),
(24, 5, 12, '2019-03-02', 5),
(25, 4, 13, '2019-03-03', 5),
(26, 4, 13, '2019-03-03', 5),
(27, 3, 14, '2019-03-04', 5),
(28, 3, 14, '2019-03-04', 5),
(29, 7, 15, '2019-03-05', 5),
(30, 7, 15, '2019-03-05', 5);

--
-- Déchargement des données de la table `epreuve`
--

INSERT INTO `epreuve` (`ID_EPREUVE`, `ID_SPECIALITE`, `ID_SESSION`, `DATE_DEBUT_EPREUVE`, `DATE_FIN_EPREUVE`) VALUES
(1, 1, 1, '2019-01-01', '2019-01-01'),
(2, 2, 1, '2019-01-02', '2019-01-02'),
(3, 3, 1, '2019-01-03', '2019-01-03'),
(4, 4, 1, '2019-01-04', '2019-01-04'),
(5, 5, 1, '2019-01-05', '2019-01-05'),
(6, 6, 2, '2019-02-01', '2019-02-01'),
(7, 7, 2, '2019-02-02', '2019-02-02'),
(8, 8, 2, '2019-02-03', '2019-02-03'),
(9, 9, 2, '2019-02-04', '2019-02-05'),
(10, 10, 2, '2019-02-06', '2019-02-06'),
(11, 1, 3, '2019-03-01', '2019-03-01'),
(12, 5, 3, '2019-03-02', '2019-03-02'),
(13, 4, 3, '2019-03-03', '2019-03-03'),
(14, 3, 3, '2019-03-04', '2019-03-04'),
(15, 7, 3, '2019-03-05', '2019-03-05');

--
-- Déchargement des données de la table `federation`
--

INSERT INTO `federation` (`ID_FEDERATION`, `NOM_FEDE`, `DATE_INS_FEDE`, `DATE_AGR_FEDE`) VALUES
(1, 'Fédération Francaise d\'Athlètisme', '2015-01-02', '2018-01-02'),
(2, 'Fédération Suisse d\'Athlètisme', '2015-01-02', '2018-01-02'),
(3, 'Fédération Allemande d\'Athlètisme', '2015-01-02', '2018-01-02'),
(4, 'Fédération Hollandaise d\'Athlètisme', '2015-01-02', '2018-01-02'),
(5, 'Fédération Francaise de Pétanque', '2015-01-02', '2018-01-02');

--
-- Déchargement des données de la table `hebergement`
--

INSERT INTO `hebergement` (`ID_HEBERGEMENT`, `ID_STADE`, `NOM_HEBERGEMENT`, `DISTANCE_`, `CAPACITE_HEBERGEMENT`) VALUES
(1, 1, 'Villa Venezia', 53, 415),
(2, 1, 'Resto du parc', 52, 54),
(3, 2, 'AFPA', 63, 25),
(4, 2, 'Auberge de la lune', 15, 36),
(5, 3, 'Internat Lycée Bertrand Schwar', 41, 321),
(6, 3, 'SPA', 52, 73),
(7, 4, 'Auberge Duvun', 57, 86),
(8, 4, 'Hotel Trivago', 27, 41),
(9, 5, 'Hotel McDonald', 47, 58),
(10, 5, 'Hotel Azerty', 25, 36);

--
-- Déchargement des données de la table `recompense`
--

INSERT INTO `recompense` (`ID_SPONSOR`, `NOM_SPONSOR`, `NOM_LOT`, `DON`) VALUES
(1, 'Belin', 'Mustang', '45000'),
(2, 'Chips', 'Porsche', '85000'),
(3, 'Curly', 'bmw', '25000'),
(4, 'Afpa', 'vacances', '8000'),
(5, 'costa', 'croisiere', '10000'),
(6, 'rolex', 'montre', '5000');

--
-- Déchargement des données de la table `session`
--

INSERT INTO `session` (`ID_SESSION`, `NOM_SESSION`, `DATE_DEBUT_SESSION`, `DATE_FIN_SESSION`, `ANNEE_SESSION`) VALUES
(1, 'Grand Prix Paris', '2019-01-01', '2019-01-08', 2019),
(2, 'Grand Prix Lyon', '2019-02-01', '2019-02-28', 2019),
(3, 'Grand Prix Marseille', '2019-03-01', '2019-03-30', 2019);

--
-- Déchargement des données de la table `specialite`
--

INSERT INTO `specialite` (`ID_SPECIALITE`, `NOM_SPECIALITE`) VALUES
(1, '100 m'),
(2, '100 m hai'),
(3, '1000 m'),
(4, 'lancer javelot'),
(5, 'lancer disque'),
(6, 'lancer poids'),
(7, 'Saut à la perche'),
(8, 'triple saut'),
(9, 'saut en longueur'),
(10, 'pétanque');

--
-- Déchargement des données de la table `stade`
--

INSERT INTO `stade` (`ID_STADE`, `ID_FEDERATION`, `NOM_STADE`) VALUES
(1, 1, 'Stade de france'),
(2, 2, 'Stadium'),
(3, 3, 'Orange vélodrome'),
(4, 4, 'Stade Pierre'),
(5, 5, 'Stade Saint Bobin');

--
-- Déchargement des données de la table `transport`
--

INSERT INTO `transport` (`ID_TRANSPORT`, `ID_STADE`, `STATION`, `NOM_TRANSPORT`) VALUES
(1, 1, 'Saint denis', 'bus'),
(2, 1, 'Saint denis', 'tram'),
(3, 2, 'Saint michel 	', 'bus'),
(4, 2, 'Saint michel 	', 'tram'),
(5, 3, 'Prado', 'bus'),
(6, 3, 'Prado', 'tram'),
(7, 4, 'Pierre', 'bus'),
(8, 4, 'Pierre', 'tram'),
(9, 5, 'Bobin', 'bus'),
(10, 5, 'Bobin', 'tram');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
