-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 14 mai 2019 à 15:58
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
-- Base de données :  `grand prix`
--

DELIMITER $$
--
-- Procédures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `session_sup` (IN `session_sup` INT)  BEGIN
DELETE
FROM resultat_athl 
WHERE ID_ELIMINATOIRE IN

          (SELECT ID_ELIMINATOIRE
           FROM eliminatoire
           WHERE ID_EPREUVE IN
          
           		(SELECT ID_EPREUVE
                 FROM epreuve
                 WHERE ID_SESSION IN
                 
                        (SELECT ID_SESSION
                        FROM session
                        WHERE session = session_sup)));
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `athlete`
--

CREATE TABLE `athlete` (
  `ID_ATHLETE` int(11) NOT NULL,
  `ID_FEDERATION` int(11) NOT NULL,
  `NOM_ATHLETE` varchar(30) NOT NULL,
  `SEXE` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(10, 5, 'Thibaud', 'M'),
(14, 1, 'BenHill', 'M');

--
-- Déclencheurs `athlete`
--
DELIMITER $$
CREATE TRIGGER `sexe_athlete` BEFORE INSERT ON `athlete` FOR EACH ROW BEGIN

    IF NEW.sexe != 'M' OR 'F'   
        
     THEN
       
       SIGNAL SQLSTATE '22018'
       SET MESSAGE_TEXT = 'ERREUR DE SEXE VEUILLEZ ENTRER M ou F';
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `sexe_athletes` BEFORE UPDATE ON `athlete` FOR EACH ROW BEGIN

    IF NEW.sexe != 'M' OR 'F'   
        
     THEN
       
       SIGNAL SQLSTATE '22018'
       SET MESSAGE_TEXT = 'ERREUR DE SEXE VEUILLEZ ENTRER M ou F';
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `discipline`
--

CREATE TABLE `discipline` (
  `ID_SPECIALITE` int(11) NOT NULL,
  `ID_ATHLETE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `eliminatoire`
--

CREATE TABLE `eliminatoire` (
  `ID_ELIMINATOIRE` int(11) NOT NULL,
  `ID_SPECIALITE` int(11) NOT NULL,
  `ID_EPREUVE` int(11) NOT NULL,
  `DATE_ELIMINATOIRE` date NOT NULL,
  `NBR_PARTICIPANT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Structure de la table `epreuve`
--

CREATE TABLE `epreuve` (
  `ID_EPREUVE` int(11) NOT NULL,
  `ID_SPECIALITE` int(11) NOT NULL,
  `ID_SESSION` int(11) NOT NULL,
  `DATE_DEBUT_EPREUVE` date NOT NULL,
  `DATE_FIN_EPREUVE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Déclencheurs `epreuve`
--
DELIMITER $$
CREATE TRIGGER `date_verif` BEFORE INSERT ON `epreuve` FOR EACH ROW BEGIN

    IF NEW.DATE_DEBUT_EPREUVE > NEW.DATE_FIN_EPREUVE   
        
     THEN
       
       SIGNAL SQLSTATE '22008'
       SET MESSAGE_TEXT = 'ERREUR DE DATE VERIFIER VOTRE SAISIE';
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `date_verifs` BEFORE UPDATE ON `epreuve` FOR EACH ROW BEGIN

    IF NEW.DATE_DEBUT_EPREUVE > NEW.DATE_FIN_EPREUVE   
        
     THEN
       
       SIGNAL SQLSTATE '22008'
       SET MESSAGE_TEXT = 'ERREUR DE DATE VERIFIER VOTRE SAISIE';
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `federation`
--

CREATE TABLE `federation` (
  `ID_FEDERATION` int(11) NOT NULL,
  `NOM_FEDE` varchar(60) NOT NULL,
  `DATE_INS_FEDE` date NOT NULL,
  `DATE_AGR_FEDE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `federation`
--

INSERT INTO `federation` (`ID_FEDERATION`, `NOM_FEDE`, `DATE_INS_FEDE`, `DATE_AGR_FEDE`) VALUES
(1, 'Fédération Francaise d\'Athlètisme', '2015-01-02', '2018-01-02'),
(2, 'Fédération Suisse d\'Athlètisme', '2015-01-02', '2018-01-02'),
(3, 'Fédération Allemande d\'Athlètisme', '2015-01-02', '2018-01-02'),
(4, 'Fédération Hollandaise d\'Athlètisme', '2015-01-02', '2018-01-02'),
(5, 'Fédération Francaise de Pétanque', '2015-01-02', '2018-01-02');

-- --------------------------------------------------------

--
-- Structure de la table `hebergement`
--

CREATE TABLE `hebergement` (
  `ID_HEBERGEMENT` int(11) NOT NULL,
  `ID_STADE` int(11) NOT NULL,
  `NOM_HEBERGEMENT` varchar(30) NOT NULL,
  `DISTANCE_` int(11) NOT NULL,
  `CAPACITE_HEBERGEMENT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Structure de la table `recompense`
--

CREATE TABLE `recompense` (
  `ID_SPONSOR` int(11) NOT NULL,
  `NOM_SPONSOR` varchar(30) NOT NULL,
  `NOM_LOT` varchar(30) NOT NULL,
  `DON` decimal(6,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Structure de la table `session`
--

CREATE TABLE `session` (
  `ID_SESSION` int(11) NOT NULL,
  `NOM_SESSION` varchar(30) NOT NULL,
  `DATE_DEBUT_SESSION` date NOT NULL,
  `DATE_FIN_SESSION` date NOT NULL,
  `ANNEE_SESSION` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `session`
--

INSERT INTO `session` (`ID_SESSION`, `NOM_SESSION`, `DATE_DEBUT_SESSION`, `DATE_FIN_SESSION`, `ANNEE_SESSION`) VALUES
(1, 'Grand Prix Paris', '2019-01-01', '2019-01-08', 2019),
(2, 'Grand Prix Lyon', '2019-02-01', '2019-02-28', 2019),
(3, 'Grand Prix Marseille', '2019-03-01', '2019-03-30', 2019);

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

CREATE TABLE `specialite` (
  `ID_SPECIALITE` int(11) NOT NULL,
  `NOM_SPECIALITE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Structure de la table `sponsorise`
--

CREATE TABLE `sponsorise` (
  `ID_SPONSOR` int(11) NOT NULL,
  `ID_ATHLETE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `stade`
--

CREATE TABLE `stade` (
  `ID_STADE` int(11) NOT NULL,
  `ID_FEDERATION` int(11) NOT NULL,
  `NOM_STADE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `stade`
--

INSERT INTO `stade` (`ID_STADE`, `ID_FEDERATION`, `NOM_STADE`) VALUES
(1, 1, 'Stade de france'),
(2, 2, 'Stadium'),
(3, 3, 'Orange vélodrome'),
(4, 4, 'Stade Pierre'),
(5, 5, 'Stade Saint Bobin');

-- --------------------------------------------------------

--
-- Structure de la table `transport`
--

CREATE TABLE `transport` (
  `ID_TRANSPORT` int(11) NOT NULL,
  `ID_STADE` int(11) NOT NULL,
  `STATION` varchar(30) NOT NULL,
  `NOM_TRANSPORT` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `athlete`
--
ALTER TABLE `athlete`
  ADD PRIMARY KEY (`ID_ATHLETE`),
  ADD KEY `FK_LICENCIE` (`ID_FEDERATION`);

--
-- Index pour la table `discipline`
--
ALTER TABLE `discipline`
  ADD PRIMARY KEY (`ID_SPECIALITE`,`ID_ATHLETE`),
  ADD KEY `FK_DISCIPLINE2` (`ID_ATHLETE`);

--
-- Index pour la table `eliminatoire`
--
ALTER TABLE `eliminatoire`
  ADD PRIMARY KEY (`ID_ELIMINATOIRE`),
  ADD KEY `FK_EST_COMPOSE` (`ID_EPREUVE`),
  ADD KEY `FK_TYPE_DE_DISCIPLINE_ELIMINATOIRE` (`ID_SPECIALITE`);

--
-- Index pour la table `epreuve`
--
ALTER TABLE `epreuve`
  ADD PRIMARY KEY (`ID_EPREUVE`),
  ADD KEY `FK_COMPOSE_DE` (`ID_SESSION`),
  ADD KEY `FK_SPECIALITE_D_EPREUVE` (`ID_SPECIALITE`);

--
-- Index pour la table `federation`
--
ALTER TABLE `federation`
  ADD PRIMARY KEY (`ID_FEDERATION`);

--
-- Index pour la table `hebergement`
--
ALTER TABLE `hebergement`
  ADD PRIMARY KEY (`ID_HEBERGEMENT`),
  ADD KEY `FK_HEBERGEMENT_DES_STADES` (`ID_STADE`);

--
-- Index pour la table `recompense`
--
ALTER TABLE `recompense`
  ADD PRIMARY KEY (`ID_SPONSOR`);

--
-- Index pour la table `resultat_athl`
--
ALTER TABLE `resultat_athl`
  ADD PRIMARY KEY (`ID_ELIMINATOIRE`,`ID_ATHLETE`),
  ADD KEY `FK_RESULTAT_ATHL2` (`ID_ATHLETE`);

--
-- Index pour la table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`ID_SESSION`);

--
-- Index pour la table `specialite`
--
ALTER TABLE `specialite`
  ADD PRIMARY KEY (`ID_SPECIALITE`);

--
-- Index pour la table `sponsorise`
--
ALTER TABLE `sponsorise`
  ADD PRIMARY KEY (`ID_SPONSOR`,`ID_ATHLETE`),
  ADD KEY `FK_SPONSORISE2` (`ID_ATHLETE`);

--
-- Index pour la table `stade`
--
ALTER TABLE `stade`
  ADD PRIMARY KEY (`ID_STADE`),
  ADD KEY `FK_GESTION` (`ID_FEDERATION`);

--
-- Index pour la table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`ID_TRANSPORT`),
  ADD KEY `FK_TRANSPORT_STADE` (`ID_STADE`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `athlete`
--
ALTER TABLE `athlete`
  MODIFY `ID_ATHLETE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `eliminatoire`
--
ALTER TABLE `eliminatoire`
  MODIFY `ID_ELIMINATOIRE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `epreuve`
--
ALTER TABLE `epreuve`
  MODIFY `ID_EPREUVE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `federation`
--
ALTER TABLE `federation`
  MODIFY `ID_FEDERATION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `hebergement`
--
ALTER TABLE `hebergement`
  MODIFY `ID_HEBERGEMENT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `recompense`
--
ALTER TABLE `recompense`
  MODIFY `ID_SPONSOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `session`
--
ALTER TABLE `session`
  MODIFY `ID_SESSION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `specialite`
--
ALTER TABLE `specialite`
  MODIFY `ID_SPECIALITE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `stade`
--
ALTER TABLE `stade`
  MODIFY `ID_STADE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `transport`
--
ALTER TABLE `transport`
  MODIFY `ID_TRANSPORT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `athlete`
--
ALTER TABLE `athlete`
  ADD CONSTRAINT `FK_LICENCIE` FOREIGN KEY (`ID_FEDERATION`) REFERENCES `federation` (`ID_FEDERATION`);

--
-- Contraintes pour la table `discipline`
--
ALTER TABLE `discipline`
  ADD CONSTRAINT `FK_DISCIPLINE` FOREIGN KEY (`ID_SPECIALITE`) REFERENCES `specialite` (`ID_SPECIALITE`),
  ADD CONSTRAINT `FK_DISCIPLINE2` FOREIGN KEY (`ID_ATHLETE`) REFERENCES `athlete` (`ID_ATHLETE`);

--
-- Contraintes pour la table `eliminatoire`
--
ALTER TABLE `eliminatoire`
  ADD CONSTRAINT `FK_EST_COMPOSE` FOREIGN KEY (`ID_EPREUVE`) REFERENCES `epreuve` (`ID_EPREUVE`),
  ADD CONSTRAINT `FK_TYPE_DE_DISCIPLINE_ELIMINATOIRE` FOREIGN KEY (`ID_SPECIALITE`) REFERENCES `specialite` (`ID_SPECIALITE`);

--
-- Contraintes pour la table `epreuve`
--
ALTER TABLE `epreuve`
  ADD CONSTRAINT `FK_COMPOSE_DE` FOREIGN KEY (`ID_SESSION`) REFERENCES `session` (`ID_SESSION`),
  ADD CONSTRAINT `FK_SPECIALITE_D_EPREUVE` FOREIGN KEY (`ID_SPECIALITE`) REFERENCES `specialite` (`ID_SPECIALITE`);

--
-- Contraintes pour la table `hebergement`
--
ALTER TABLE `hebergement`
  ADD CONSTRAINT `FK_HEBERGEMENT_DES_STADES` FOREIGN KEY (`ID_STADE`) REFERENCES `stade` (`ID_STADE`);

--
-- Contraintes pour la table `resultat_athl`
--
ALTER TABLE `resultat_athl`
  ADD CONSTRAINT `FK_RESULTAT_ATHL` FOREIGN KEY (`ID_ELIMINATOIRE`) REFERENCES `eliminatoire` (`ID_ELIMINATOIRE`),
  ADD CONSTRAINT `FK_RESULTAT_ATHL2` FOREIGN KEY (`ID_ATHLETE`) REFERENCES `athlete` (`ID_ATHLETE`);

--
-- Contraintes pour la table `sponsorise`
--
ALTER TABLE `sponsorise`
  ADD CONSTRAINT `FK_SPONSORISE` FOREIGN KEY (`ID_SPONSOR`) REFERENCES `recompense` (`ID_SPONSOR`),
  ADD CONSTRAINT `FK_SPONSORISE2` FOREIGN KEY (`ID_ATHLETE`) REFERENCES `athlete` (`ID_ATHLETE`);

--
-- Contraintes pour la table `stade`
--
ALTER TABLE `stade`
  ADD CONSTRAINT `FK_GESTION` FOREIGN KEY (`ID_FEDERATION`) REFERENCES `federation` (`ID_FEDERATION`);

--
-- Contraintes pour la table `transport`
--
ALTER TABLE `transport`
  ADD CONSTRAINT `FK_TRANSPORT_STADE` FOREIGN KEY (`ID_STADE`) REFERENCES `stade` (`ID_STADE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
