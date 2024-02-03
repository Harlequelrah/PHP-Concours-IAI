-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 03 fév. 2024 à 01:41
-- Version du serveur : 5.7.24
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `iai-concours`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateurs`
--

CREATE TABLE `administrateurs` (
  `id_administrateur` int(11) NOT NULL,
  `username_admin` varchar(255) DEFAULT NULL,
  `password_admin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `administrateurs`
--

INSERT INTO `administrateurs` (`id_administrateur`, `username_admin`, `password_admin`) VALUES
(1, 'Harlequelrah', '@Lucifer1Morningstar9'),
(2, 'Silver_Crow', '@Viande2Piaf8'),
(3, 'NamekSulyvan', 'etiamsiomnesegonon');

-- --------------------------------------------------------

--
-- Structure de la table `candidats`
--

CREATE TABLE `candidats` (
  `id_candidat` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `photo` varchar(500) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `sexe` char(1) DEFAULT NULL,
  `nationalite` varchar(255) DEFAULT NULL,
  `annee_bac` int(11) DEFAULT NULL,
  `serie` varchar(2) DEFAULT NULL,
  `document_naissance` varchar(500) DEFAULT NULL,
  `document_nationalite` varchar(500) DEFAULT NULL,
  `document_attestation_bac` varchar(500) DEFAULT NULL,
  `id_etudiant` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `candidats`
--

INSERT INTO `candidats` (`id_candidat`, `nom`, `prenom`, `photo`, `date_naissance`, `sexe`, `nationalite`, `annee_bac`, `serie`, `document_naissance`, `document_nationalite`, `document_attestation_bac`, `id_etudiant`) VALUES
(1, 'utilisateur1', 'user1', NULL, '2007-01-10', 'M', 'Togolaise', 2021, 'D', NULL, NULL, NULL, 1),
(2, 'utilisateur2', 'user2', NULL, '2010-10-10', 'M', 'Togolaise', 2021, 'C', NULL, NULL, NULL, 2),
(3, 'utilisateur3', 'user3', NULL, '2004-07-15', 'F', 'Beninoise', 2022, 'E', NULL, NULL, NULL, 3),
(4, 'utilisateur5', 'user5', NULL, '2007-11-13', 'F', 'Senegalaise', 2021, 'F1', NULL, NULL, NULL, 5),
(5, 'utilisateur1', 'user1', NULL, '2003-09-10', 'F', 'Beninoise', 2022, 'F2', NULL, NULL, NULL, 1),
(6, 'utilisateur3', 'user3', NULL, '2005-07-12', 'M', 'Togolaise', 2022, 'C', NULL, NULL, NULL, 3),
(7, 'utilisateur4', 'user4', NULL, '2008-01-16', 'M', 'Camerounaise', 2021, 'D', NULL, NULL, NULL, 4),
(8, 'utilisateur6', 'user6', NULL, '2011-07-12', 'M', 'gambienne', 2022, 'C', NULL, NULL, NULL, 6),
(9, 'utilisateur10', 'user10', NULL, '2000-04-10', 'F', 'malawienne', 2021, 'F1', NULL, NULL, NULL, 10);

-- --------------------------------------------------------

--
-- Structure de la table `dates_concours`
--

CREATE TABLE `dates_concours` (
  `date_concours` date DEFAULT NULL,
  `date_limite_inscription` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `dates_concours`
--

INSERT INTO `dates_concours` (`date_concours`, `date_limite_inscription`) VALUES
('2024-09-05', '2024-08-31');

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id_etudiant` int(11) NOT NULL,
  `username_etud` varchar(255) DEFAULT NULL,
  `password_etud` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id_etudiant`, `username_etud`, `password_etud`, `email`) VALUES
(1, 'User1', '$2y$10$LZ8qFFoEQ60DSUNsUBtiUeQyyg7Usr2r52xRrxKGupequK.4G9P/e', 'userone@gmail.com'),
(2, 'User2', '$2y$10$kmS50ubbunh8wqa/FxCMFe4sxyD8yFYwncQtGMIdVGdT35oDAttj2', 'usertwo@gmail.com'),
(3, 'User3', '$2y$10$2ZXbi1QhKh452tMJNMlRiOOrwvXk2DhcIkmp0yrrDZtX932g.FGby', 'userthree@gmail.com'),
(4, 'User4', '$2y$10$BxYs60E1k0vQbdN0vqnxUe4GXCrauHPevSMnWu/W.CKaNa1g5Ent.', 'userfour@gmail.com'),
(5, 'User5', '$2y$10$MLSm5A0ZuZLLMVfxHGTRQOnytUSoUn8xUK/cTP.r/wK.6am06cWne', 'userfive@gmail.com'),
(6, 'User6', '$2y$10$JJGOXN/w/UmHVE51EDRc9OjTTZ0cPhuqLwJ7aAA0acxu459uB8bU.', 'usersix@gmail.com'),
(7, 'User7', '$2y$10$M80Ejz9ZcFSALkXu5QNrueF31zqew76ilDW1Gt.ogCJHQdVMePJx2', 'userseven@gmail.com'),
(8, 'User8', '$2y$10$/suYrYMm3EmcvJzIfkQa8OfrWbIleTpH/MQprhQAPkoYuLbOyhA4O', 'usereight@gmail.com'),
(9, 'User9', '$2y$10$D2jk7vo8UypCg53qvhFZzO7NatPREcYQSpxfdpSVhLOCSxl2ra7s.', 'usernine@gmail.com'),
(10, 'User10', '$2y$10$cv0OEH5oOLKuz2lV3XC5ruge2l54D63G3XPMHFmfNYl.Yet7Y38aW', 'userten@gmail.com'),
(11, 'User11', '$2y$10$ZJ7dnIahi20hlnkPyp74CO8dhuSIub2HzhxDt5V1vMTku1rR9mM9S', 'usereleven@gmail.com'),
(12, 'User12', '$2y$10$Nj6ERp6BzYjB4ra2mf.6hu3k/VkqHg4/2Sm4/sTaCfMNFzhlrCTei', 'usertwelve@gmail.com'),
(13, 'User13', '$2y$10$FBBDFhcqbZQOj1gCWLMZ0ufmAV4QmtpwAAjNEJeIKweTcl94AVNr.', 'userthirteen@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `email` varchar(256) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`email`, `message`) VALUES
('userone@gmail.com', 'j aime bien le site');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateurs`
--
ALTER TABLE `administrateurs`
  ADD PRIMARY KEY (`id_administrateur`);

--
-- Index pour la table `candidats`
--
ALTER TABLE `candidats`
  ADD PRIMARY KEY (`id_candidat`),
  ADD KEY `id_etudiant` (`id_etudiant`);

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id_etudiant`),
  ADD UNIQUE KEY `username_etud` (`username_etud`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateurs`
--
ALTER TABLE `administrateurs`
  MODIFY `id_administrateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `candidats`
--
ALTER TABLE `candidats`
  MODIFY `id_candidat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id_etudiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `candidats`
--
ALTER TABLE `candidats`
  ADD CONSTRAINT `candidats_ibfk_1` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiants` (`id_etudiant`);

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `fk_email` FOREIGN KEY (`email`) REFERENCES `etudiants` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
