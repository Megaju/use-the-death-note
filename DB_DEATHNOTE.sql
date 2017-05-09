-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 09 Mai 2017 à 08:33
-- Version du serveur :  10.0.29-MariaDB-0ubuntu0.16.04.1
-- Version de PHP :  7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `DB_DEATHNOTE`
--
CREATE DATABASE IF NOT EXISTS `DB_DEATHNOTE` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `DB_DEATHNOTE`;

-- --------------------------------------------------------

--
-- Structure de la table `appleforryuk`
--

DROP TABLE IF EXISTS `appleforryuk`;
CREATE TABLE `appleforryuk` (
  `id` int(11) NOT NULL,
  `apples` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `appleforryuk`
--

INSERT INTO `appleforryuk` (`id`, `apples`) VALUES
(1, 80);

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `author` varchar(45) NOT NULL,
  `comment` longtext NOT NULL,
  `date_comment` datetime NOT NULL,
  `id_news` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `deathnote`
--

DROP TABLE IF EXISTS `deathnote`;
CREATE TABLE `deathnote` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `message` longtext NOT NULL,
  `dateofdeath` datetime NOT NULL,
  `top` int(11) NOT NULL,
  `note` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `deathnote`
--

INSERT INTO `deathnote` (`id`, `nom`, `prenom`, `message`, `dateofdeath`, `top`, `note`) VALUES
(1, 'Mighel', 'Glément', 'C\'est l\'étoufiation avec un bretzel. ', '2017-04-29 23:54:00', 0, 1),
(2, 'Bilerta', 'Aurore', 'Assassiné par la licorne rose invisible qui joue de l’accordéon.', '2017-07-22 02:04:00', 0, 0),
(3, 'Callioux', 'Emrode', 'Et c\'était la clope de trop !', '2017-04-30 04:44:00', 0, 0),
(4, 'Mal', 'Gulien', 'Crise cardiaque.', '2112-05-17 03:33:00', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title_fr` varchar(45) NOT NULL,
  `title_en` varchar(45) NOT NULL,
  `content_fr` longtext NOT NULL,
  `content_en` longtext NOT NULL,
  `date_creation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `appleforryuk`
--
ALTER TABLE `appleforryuk`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `deathnote`
--
ALTER TABLE `deathnote`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `appleforryuk`
--
ALTER TABLE `appleforryuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `deathnote`
--
ALTER TABLE `deathnote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
