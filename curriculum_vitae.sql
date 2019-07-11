-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 10 juil. 2019 à 10:57
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `curriculum_vitae`
--

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

CREATE TABLE `competences` (
  `id_competences` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `capacite` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `competences`
--

INSERT INTO `competences` (`id_competences`, `name`, `capacite`) VALUES
(8, 'HTML', 95),
(9, 'CSS', 80),
(10, 'PAO', 70),
(11, 'php', 40),
(12, 'Bootstrap', 95),
(13, 'Javascript', 60),
(14, 'Symfony', 40);

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

CREATE TABLE `experiences` (
  `id_experiences` int(11) NOT NULL,
  `nomEntreprise` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `experiences`
--

INSERT INTO `experiences` (`id_experiences`, `nomEntreprise`, `date`, `poste`, `ville`, `description`) VALUES
(3, 'LepoleS', 'Novembre 2018', 'D&eacute;veloppeur Web', 'PIERREFITTE SUR SEINE', 'cr&eacute;ation de site internet en html, css, php, symfony, javascript, bootstrap.'),
(4, 'Centre de loisir ', 'Septembre 2017 - Janvier 2018', 'Animateur Multim&eacute;dia', 'Stains', 'Animateur multim&eacute;dia sur les montage vid&eacute;o, les flyers, les affiches en utilisant : indesign, photoshop.'),
(5, 'Europe Computer Performance', 'Mars 2017 - Ao&ucirc;t 2017', 'Webdesigner', 'Stains', 'web designer sur la cr&eacute;ation du site internet, la mise &agrave; jour du site, les newsletters et sur la cr&eacute;ation visuelle dans la vente de produit informatique en grosse quantit&eacute;.'),
(6, 'Maquette Impression Reprographie', 'Novembre 2016 - F&eacute;vrier 2017', 'Webdesigner', 'Stains', 'Web designer sur la mise &agrave; jour du site de la ville, les flyers et affiches de la ville de Stains.'),
(7, 'P&ocirc;le Emploi', 'Janvier 2016 - Mai 2016', 'Web trainer', 'Stains', 'Formateur sur les postes informatique au p&ocirc;les emploi de Stains qui mes en apprentissage les personnes en non utilisation du multim&eacute;dia.');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id_formation` int(3) NOT NULL,
  `nomFormation` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id_formation`, `nomFormation`, `date`, `poste`, `ville`, `description`) VALUES
(3, 'LepoleS', '2018 - 2019', 'D&eacute;veloppeur Web', 'PIERREFITTE SUR SEINE', 'Cr&eacute;ation de site internet sur les langage informatique ( html, css, php, phpoo, javascript, jquery, angular, Symfony, ionic).'),
(4, 'NexFormation', '2017', 'Infographiste Multim&eacute;dia (Niveau)', 'Paris', 'cr&eacute;ation de site design( html, css, wordpress, Indesign, Illustrator, Photoshop).'),
(5, 'Cem&eacute;a Animation', '2015', 'Animateur', 'Sarcelles', 'Encadrement jeunesse sur les activit&eacute; ludique et en apprentissage a l\'enfant sur c\'est choix pour son avenir.'),
(6, ' Lyc&eacute;e d&rsquo;application de l&rsquo;ENNA', '2011-2012', 'Bac S.T.I. g&eacute;nie m&eacute;canique', 'Saint Denis', 'Dipl&ocirc;me sur la cr&eacute;ation de portail, &eacute;l&eacute;vateur pour personne &agrave; handicape gr&acirc;ce avec une mod&eacute;lisation via le logiciel SolidWorks.');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id_membre` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `roles` longtext CHARACTER SET latin1 NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `nom`, `prenom`, `email`, `username`, `password`, `roles`) VALUES
(1, 'hamdaoui', 'mehdi', 'mehdi.hamdaoui01@gmail.com', 'zorino', '$2y$10$w6pp7s4LeMKkf13Dizm5tuwGr3uedWEZmbxVL10b4ZGVOrBS2zO4S', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `competences`
--
ALTER TABLE `competences`
  ADD PRIMARY KEY (`id_competences`);

--
-- Index pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id_experiences`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id_formation`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id_membre`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `competences`
--
ALTER TABLE `competences`
  MODIFY `id_competences` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id_experiences` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id_formation` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_membre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
