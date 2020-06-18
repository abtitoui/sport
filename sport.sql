-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 15 juin 2020 à 21:37
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*
--
-- Base de données : sport
--

-- --------------------------------------------------------

--
-- Structure de la table archive
--
CREATE DATABASE sport;
*/
CREATE TABLE archive (
  idarchive int(255) NOT NULL,
  titre varchar(255) CHARACTER SET utf8 NOT NULL,
  date date NOT NULL,
  idgerant int(255) NOT NULL,
  article tinytext CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table atlets
--

CREATE TABLE atlets (
  idatlet int(10) NOT NULL,
  nom varchar(20) NOT NULL,
  prenom varchar(20) NOT NULL,
  genre varchar(5) NOT NULL,
  cin varchar(10) NOT NULL,
  email varchar(50) NOT NULL,
  numtelephone int(13) NOT NULL,
  datedenaissance date NOT NULL,
  numassurance varchar(15) NOT NULL,
  perphoto varchar(100) NOT NULL,
  cinphoto varchar(100) NOT NULL,
  niveau varchar(10) NOT NULL,
  etat varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table gerants
--

CREATE TABLE gerants (
  idgerant int(255) NOT NULL,
  nom varchar(20) NOT NULL,
  prenom varchar(20) NOT NULL,
  cin varchar(10) NOT NULL,
  email varchar(50) NOT NULL,
  motdepasse varchar(30) NOT NULL,
  numtelephone int(13) NOT NULL,
  datedenaissance date NOT NULL,
  dateinscreption date NOT NULL,
  numassurance varchar(15) NOT NULL,
  perphoto varchar(100) NOT NULL,
  etat varchar(3) NOT NULL,
  role varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table gerants
--

INSERT INTO gerants (idgerant, nom, prenom, cin, email, motdepasse, numtelephone, datedenaissance, dateinscreption, numassurance, perphoto, etat, role) VALUES
(1, 'abtitoui', 'mohamed', 'cb12345', 'abtitou@gmail.com', '123456', 608008828, '2020-06-23', '2020-06-09', '123456789', '', '1', 'Admin');

-- --------------------------------------------------------

--
-- Structure de la table payemant
--

CREATE TABLE payemant (
  idpayemant int(255) NOT NULL,
  payee varchar(3) NOT NULL,
  idsport int(255) NOT NULL,
  idatlet int(255) NOT NULL,
  moispaye date NOT NULL,
  assurancepaye int(255) NOT NULL,
  datepayee date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table sport
--

CREATE TABLE sport (
  idsport int(11) NOT NULL,
  payee varchar(3) NOT NULL,
  dateinscri date NOT NULL,
  datepayee date NOT NULL,
  tsport varchar(15) NOT NULL,
  idatlet int(11) NOT NULL,
  prix int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table archive
--
ALTER TABLE archive
  ADD PRIMARY KEY (idarchive);

--
-- Index pour la table atlets
--
ALTER TABLE atlets
  ADD PRIMARY KEY (idatlet);

--
-- Index pour la table gerants
--
ALTER TABLE gerants
  ADD PRIMARY KEY (idgerant);

--
-- Index pour la table payemant
--
ALTER TABLE payemant
  ADD PRIMARY KEY (idpayemant);

--
-- Index pour la table sport
--
ALTER TABLE sport
  ADD PRIMARY KEY (idsport);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table archive
--
ALTER TABLE archive
  MODIFY idarchive int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table atlets
--
ALTER TABLE atlets
  MODIFY idatlet int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table gerants
--
ALTER TABLE gerants
  MODIFY idgerant int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table payemant
--
ALTER TABLE payemant
  MODIFY idpayemant int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table sport
--
ALTER TABLE sport
  MODIFY idsport int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
