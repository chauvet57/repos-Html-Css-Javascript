-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 07 mai 2019 à 13:18
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
-- Structure de la table `athlete`
--

CREATE TABLE `athlete` (
  `ID_ATHLETE` int(11) NOT NULL,
  `ID_FEDERATION` int(11) NOT NULL,
  `NOM_ATHLETE` varchar(30) NOT NULL,
  `SEXE` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Structure de la table `resultat_athl`
--

CREATE TABLE `resultat_athl` (
  `ID_ELIMINATOIRE` int(11) NOT NULL,
  `ID_ATHLETE` int(11) NOT NULL,
  `RANG_ATHLETE` int(11) DEFAULT NULL,
  `POINTS_ATHLETE` int(11) DEFAULT NULL,
  `NOTATION_ATHLETE` int(11) DEFAULT NULL,
  `PERFORMANCE_ATHLETE` int(11) DEFAULT NULL,
  `RECORD` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

CREATE TABLE `specialite` (
  `ID_SPECIALITE` int(11) NOT NULL,
  `NOM_SPECIALITE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `ID_ATHLETE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `eliminatoire`
--
ALTER TABLE `eliminatoire`
  MODIFY `ID_ELIMINATOIRE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `epreuve`
--
ALTER TABLE `epreuve`
  MODIFY `ID_EPREUVE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `federation`
--
ALTER TABLE `federation`
  MODIFY `ID_FEDERATION` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `hebergement`
--
ALTER TABLE `hebergement`
  MODIFY `ID_HEBERGEMENT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `recompense`
--
ALTER TABLE `recompense`
  MODIFY `ID_SPONSOR` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `session`
--
ALTER TABLE `session`
  MODIFY `ID_SESSION` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `specialite`
--
ALTER TABLE `specialite`
  MODIFY `ID_SPECIALITE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `stade`
--
ALTER TABLE `stade`
  MODIFY `ID_STADE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `transport`
--
ALTER TABLE `transport`
  MODIFY `ID_TRANSPORT` int(11) NOT NULL AUTO_INCREMENT;

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
