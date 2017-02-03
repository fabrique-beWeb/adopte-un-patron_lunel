-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 03 Février 2017 à 12:32
-- Version du serveur :  5.7.16-0ubuntu0.16.04.1
-- Version de PHP :  7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `adopteUnPatron`
--

-- --------------------------------------------------------

--
-- Structure de la table `adopteUnPatron_candidat`
--

CREATE TABLE `adopteUnPatron_candidat` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateNaissance` date NOT NULL,
  `age` int(11) NOT NULL,
  `telephone` int(11) DEFAULT NULL,
  `adress` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codePostal` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mdp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visite` int(11) DEFAULT NULL,
  `favori` int(11) DEFAULT NULL,
  `matchs` int(11) DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateInscription` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `posteRecherche` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:array)',
  `rencontreRecruteur` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:array)',
  `role` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `adopteUnPatron_candidat`
--

INSERT INTO `adopteUnPatron_candidat` (`id`, `nom`, `prenom`, `dateNaissance`, `age`, `telephone`, `adress`, `codePostal`, `email`, `mdp`, `visite`, `favori`, `matchs`, `description`, `dateInscription`, `image`, `posteRecherche`, `rencontreRecruteur`, `role`) VALUES
(1, 'zehj', 'skfgdflhd', '1917-01-01', 9999, 123456789, 'uhdhigfdjfbfjob', 4845, 'c@c.com', 'admin', NULL, NULL, NULL, 'dgjfiughoiihgozg', '24/01/2017', 'http://azerty.fr', 'N;', 'N;', ''),
(2, 'segs', 'dhdfgj', '1920-08-09', 96, 123456789, 'dlbkndfdbjdfjb', 125963, 'z@z.com', 'z', NULL, NULL, NULL, 'azeghjk,hgftyukjhghjk;kjhg', '30/01/2017', 'b8352b45fd08170a56e50232cfed9c6e.png', 'N;', 'N;', ''),
(3, 'gddvhsfpfoj', 'sdopgojsdpogjnsg', '1917-01-01', 153, 5, 'sdldiffhqdoiv', 5, '1@1', '1', NULL, NULL, NULL, 'dfvbnkloiuhgvbnjkjhgfdertyhj', '02/02/2017', '28da67e7f81e61fcbd9e62ad9901a588.png', 'N;', 'N;', 'a:1:{i:0;s:13:"ROLE_CANDIDAT";}'),
(4, 'dhgdfigh', 'bknnfdlkbnfdnb', '1917-01-01', 522, 258, 'dfghxdfty', 82687, 'n@n', 'n', NULL, NULL, NULL, 'slgoigvdsoibvsl', '03/02/2017', '3099d1e04e5be5c8613c5b24234c9b7b.png', 'N;', 'N;', 'a:1:{i:0;s:13:"ROLE_CANDIDAT";}');

-- --------------------------------------------------------

--
-- Structure de la table `adopteUnPatron_offre`
--

CREATE TABLE `adopteUnPatron_offre` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomEntreprise` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomSkill` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `poste` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `typeContrat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salaire` int(11) NOT NULL,
  `duree` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `experienceRequis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lieu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `responsabilites` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pourquoiNous` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nousTrouver` varchar(512) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fk_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `adopteUnPatron_offre`
--

INSERT INTO `adopteUnPatron_offre` (`id`, `titre`, `nomEntreprise`, `nomSkill`, `poste`, `typeContrat`, `salaire`, `duree`, `experienceRequis`, `lieu`, `responsabilites`, `pourquoiNous`, `nousTrouver`, `fk_user`) VALUES
(3, 'blalba', 'caca', 'a:0:{}', 'merdique', 'Stage', 0, 'indeterminé', 'aucune', 'labas', 'aucune', 'parce que', 'sur google maps', 2),
(4, 'zdogihzgih', 'dlkgdfghsi', 'a:0:{}', 'pgpijjsfgphih', 'CDI', 28515, '5', 'djfjghsfgoib', 'okkdfhdgofigh', 'dfkofhgfoigh', 'sdlgklhshfgoioh', 'egihsgiss', 3),
(5, 'az', 'az', 'a:0:{}', 'az', 'Stage', 12, 'az', 'az', 'az', 'az', 'az', 'http://azerty.com', 6),
(6, 'fjdjsfolilvihsgpsih', 'dfkghfdglibdhb', 'a:0:{}', 'vosihgzrogihz', 'Freelance', 8522, '5', 'zklflkh', 'dfighsfgoli', 'zelfklhsgvo', 'flkkhfoih', 'ghsg', 3);

-- --------------------------------------------------------

--
-- Structure de la table `adopteUnPatron_recruteur`
--

CREATE TABLE `adopteUnPatron_recruteur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `entreprise` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mdp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codePostal` int(11) DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` varchar(512) COLLATE utf8_unicode_ci DEFAULT NULL,
  `visite` int(11) DEFAULT NULL,
  `favori` int(11) DEFAULT NULL,
  `matchs` int(11) DEFAULT NULL,
  `role` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `souhaitCandidat` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:array)',
  `$dateInscription` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `adopteUnPatron_recruteur`
--

INSERT INTO `adopteUnPatron_recruteur` (`id`, `nom`, `prenom`, `entreprise`, `email`, `mdp`, `codePostal`, `description`, `logo`, `visite`, `favori`, `matchs`, `role`, `souhaitCandidat`, `$dateInscription`) VALUES
(1, 'recrut', 'machin', 'bidule', 'a@a.com', 'admin', 99999, 'azerty', 'http://azerty.com', NULL, NULL, NULL, 'N;', 'N;', ''),
(2, 'recut1', 'recrut', 'eur', 'recrut@recrut.com', 'recrut', 44852153, 'ihoihfohzoiigizubzdiszducisqesgfzoighef', 'http://azerty.com', NULL, NULL, NULL, 'a:1:{i:0;s:14:"ROLE_RECRUTEUR";}', 'N;', ''),
(3, 'Petetin', 'Jean-Christian', 'YOPI', 'jc@jc.com', 'jc', 34400, 'caca', 'http://azerty.com', NULL, NULL, NULL, 'a:1:{i:0;s:14:"ROLE_RECRUTEUR";}', 'N;', ''),
(6, 'azerty', 'azerty', 'azerty', 'az@az.com', 'az', 12654, 'azerty', 'http://azerty.com', NULL, NULL, NULL, 'a:1:{i:0;s:14:"ROLE_RECRUTEUR";}', 'N;', ''),
(7, 'x', 'x', 'x', 'x@x.xom', 'x', 69, 'xxx', 'c06b388c1033196c314aadbf3869b811.png', NULL, NULL, NULL, 'a:1:{i:0;s:14:"ROLE_RECRUTEUR";}', 'N;', '');

-- --------------------------------------------------------

--
-- Structure de la table `comment_ca_marche`
--

CREATE TABLE `comment_ca_marche` (
  `id` int(11) NOT NULL,
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `LeftTitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `LeftText` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MidTitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MidText` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `RightTitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `RightText` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `SkillCandidat`
--

CREATE TABLE `SkillCandidat` (
  `candidat_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `adopteUnPatron_candidat`
--
ALTER TABLE `adopteUnPatron_candidat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_A6961BDFE7927C74` (`email`);

--
-- Index pour la table `adopteUnPatron_offre`
--
ALTER TABLE `adopteUnPatron_offre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_55E981111AD0877` (`fk_user`);

--
-- Index pour la table `adopteUnPatron_recruteur`
--
ALTER TABLE `adopteUnPatron_recruteur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1A71CACCE7927C74` (`email`);

--
-- Index pour la table `comment_ca_marche`
--
ALTER TABLE `comment_ca_marche`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `SkillCandidat`
--
ALTER TABLE `SkillCandidat`
  ADD PRIMARY KEY (`candidat_id`,`skill_id`),
  ADD KEY `IDX_4E00E2868D0EB82` (`candidat_id`),
  ADD KEY `IDX_4E00E2865585C142` (`skill_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `adopteUnPatron_candidat`
--
ALTER TABLE `adopteUnPatron_candidat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `adopteUnPatron_offre`
--
ALTER TABLE `adopteUnPatron_offre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `adopteUnPatron_recruteur`
--
ALTER TABLE `adopteUnPatron_recruteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `comment_ca_marche`
--
ALTER TABLE `comment_ca_marche`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `adopteUnPatron_offre`
--
ALTER TABLE `adopteUnPatron_offre`
  ADD CONSTRAINT `FK_AF86866F1AD0877` FOREIGN KEY (`fk_user`) REFERENCES `adopteUnPatron_recruteur` (`id`);

--
-- Contraintes pour la table `SkillCandidat`
--
ALTER TABLE `SkillCandidat`
  ADD CONSTRAINT `FK_4E00E2865585C142` FOREIGN KEY (`skill_id`) REFERENCES `skill` (`id`),
  ADD CONSTRAINT `FK_4E00E2868D0EB82` FOREIGN KEY (`candidat_id`) REFERENCES `adopteUnPatron_candidat` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
