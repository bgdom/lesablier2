-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 22 Décembre 2016 à 12:47
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sablier2`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id` int(11) NOT NULL,
  `IdDestination` int(11) NOT NULL,
  `IdUtilisateur` int(11) NOT NULL,
  `Contenu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `avis`
--

INSERT INTO `avis` (`id`, `IdDestination`, `IdUtilisateur`, `Contenu`) VALUES
(1, 1, 1, 'C\'était très beau');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `DateCom` date NOT NULL,
  `QtePers` int(11) NOT NULL,
  `IdUtilisateur` int(11) NOT NULL,
  `IdDestination` int(11) NOT NULL,
  `TimeCom` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`id`, `DateCom`, `QtePers`, `IdUtilisateur`, `IdDestination`, `TimeCom`) VALUES
(24, '2016-12-30', 4, 1, 1, '12:30:00');

-- --------------------------------------------------------

--
-- Structure de la table `destination`
--

CREATE TABLE `destination` (
  `id` int(11) NOT NULL,
  `Pays` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ville` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Titre` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DateHist` date NOT NULL,
  `Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Initial` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `destination`
--

INSERT INTO `destination` (`id`, `Pays`, `Ville`, `Titre`, `DateHist`, `Description`, `Initial`) VALUES
(1, 'Allemagne', 'Berlin', 'Mûr de Berlin', '1989-11-16', 'Le mur de berlin, composante de la frontière intérieure allemande, sépare physiquement la ville en Berlin-Est et Berlin-Ouest pendant plus de vingt-huit ans, et constitue le symbole le plus marquant d\'une Europe divisée par le rideau de fer', 'br');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `Nom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Prenom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Age` int(11) NOT NULL,
  `Sexe` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `Nom`, `Prenom`, `Email`, `Age`, `Sexe`) VALUES
(1, 'Besson', 'Dominique', 'guydombess@gmail.com', 18, 'm'),
(2, 'rodriges', 'ruben', 'ruben.rodrigues@gmail.com', 18, 'm');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dest_user_UQ` (`IdDestination`,`IdUtilisateur`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `date_user_UQ` (`DateCom`,`TimeCom`,`IdUtilisateur`);

--
-- Index pour la table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_3EC63EAA8202F6C7` (`Ville`),
  ADD UNIQUE KEY `UNIQ_3EC63EAA719A2433` (`Initial`),
  ADD UNIQUE KEY `search_idx` (`Pays`,`Ville`,`DateHist`,`Initial`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1D1C63B354231355` (`Nom`),
  ADD UNIQUE KEY `UNIQ_1D1C63B326535370` (`Email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT pour la table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
