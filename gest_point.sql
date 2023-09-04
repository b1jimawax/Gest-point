-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 04 sep. 2023 à 12:30
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gest_point`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `idadministarteur` int NOT NULL AUTO_INCREMENT,
  `nom_utilisateur` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `mot_de_passe` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idadministarteur`),
  UNIQUE KEY `nom_utilisateur` (`nom_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`idadministarteur`, `nom_utilisateur`, `mot_de_passe`) VALUES
(1, 'benjimawax', '066948438');

-- --------------------------------------------------------

--
-- Structure de la table `apprenant`
--

DROP TABLE IF EXISTS `apprenant`;
CREATE TABLE IF NOT EXISTS `apprenant` (
  `idapprenant` int NOT NULL AUTO_INCREMENT,
  `prenom` varchar(45) DEFAULT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `referenciel` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idapprenant`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `apprenant`
--

INSERT INTO `apprenant` (`idapprenant`, `prenom`, `nom`, `referenciel`) VALUES
(27, 'Arsene', 'Ndinga', 'Développeur web/web mobile'),
(28, 'Christelle', 'Ada Ndong', 'Référent(e) digital'),
(29, 'Benji_mawa', 'Mba Allogo', 'Développeur web/web mobile'),
(30, 'Mathieu Bernie', 'Nze-Ekome', 'Développeur web/web mobile'),
(31, 'Symphora', 'Ayingone', 'Référent(e) digital'),
(32, 'Yann', 'Soungani', 'Développeur web/web mobile'),
(33, 'Grâce', 'Pambou', 'Développeur web/web mobile'),
(34, 'Falone', 'Babongui', 'Référent(e) digital'),
(35, 'Cévérine', 'Nkoukou', 'Développeur web/web mobile'),
(36, 'Stacy', 'Ngoua', 'Développeur web/web mobile'),
(37, 'Nadège', 'Balemba', 'Référent(e) digital'),
(38, 'Ronedy', 'Mayaya', 'Développeur web/web mobile'),
(39, 'Nelle', 'Matoka', 'Développeur web/web mobile'),
(40, 'Sabine', 'Bouango', 'Référent(e) digital'),
(41, 'Doriane', 'Boussa', 'Référent(e) digital'),
(42, 'Grasse', 'Boutsona', 'Référent(e) digital'),
(43, 'Aron', 'Manguimissou', 'Développeur web/web mobile'),
(44, 'Firmine', 'Madjinou', 'Développeur web/web mobile'),
(45, 'Morgane', 'Denguiace', 'Référent(e) digital'),
(46, 'Doriana', 'Lidia', 'Développeur web/web mobile'),
(49, 'Emmanuelle', 'Endele', 'Réferent(e) Digital'),
(50, 'Calin', 'Lengoumba', 'Développeur web/web mobile'),
(52, 'Lysianne', 'Ipouli', 'Réferent(e) Digital'),
(53, 'Evodie', 'Lekoumalame', 'Réferent(e) Digital'),
(54, 'Désiré', 'Hondjie', 'Développeur web/web mobile'),
(55, 'Flo', 'Mabika Maganga', 'Réferent(e) Digital'),
(56, 'Stephan', 'Mamichampa', 'Réferent(e) Digital'),
(57, 'Gloria', 'Mbang', 'Réferent(e) Digital'),
(58, 'Hermeline', 'Guikenzi', 'Développeur web/web mobile'),
(59, 'Christiana', 'Gnomba', 'Développeur web/web mobile'),
(60, 'Constant', 'Mboumba', 'Réferent(e) Digital'),
(61, 'Mickael Ange', 'Bushnell', 'Développeur web/web mobile'),
(62, 'Stelle', 'Medza Me Mba', 'Réferent(e) Digital'),
(63, 'Irma', 'Mouaghangouet', 'Réferent(e) Digital'),
(64, 'Nathanaliene', 'Moussounda', 'Réferent(e) Digital'),
(65, 'Thimotée', 'Ngabi', 'Réferent(e) Digital'),
(66, 'Ferry', 'Bibang-Bi-Ndong', 'Développeur web/web mobile'),
(67, 'Naomi', 'Ngayi', 'Réferent(e) Digital'),
(68, 'Sandrine', 'Angue', 'Développeur web/web mobile'),
(69, 'Symphorien', 'Ngoua', 'Réferent(e) Digital'),
(70, 'Robert', 'Abessolo', 'Développeur web/web mobile'),
(71, 'Marie', 'Nzie', 'Réferent(e) Digital'),
(72, 'Jenniela', 'Abang', 'Développeur web/web mobile'),
(73, 'Thérèsia', 'Obone Meye', 'Réferent(e) Digital'),
(74, 'Steeve', 'Paka', 'Réferent(e) Digital');

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

DROP TABLE IF EXISTS `connexion`;
CREATE TABLE IF NOT EXISTS `connexion` (
  `idconnexion` int NOT NULL AUTO_INCREMENT,
  `heure_de_connexion` datetime DEFAULT NULL,
  `idapprenant` int NOT NULL,
  PRIMARY KEY (`idconnexion`),
  KEY `fk_connexion_apprenant_idx` (`idapprenant`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `connexion`
--

INSERT INTO `connexion` (`idconnexion`, `heure_de_connexion`, `idapprenant`) VALUES
(85, '2023-09-03 15:33:16', 27),
(86, '2023-09-03 15:33:38', 27),
(87, '2023-09-03 15:34:14', 27),
(88, '2023-09-03 15:34:32', 27),
(89, '2023-09-03 15:44:32', 56),
(90, '2023-09-03 15:46:51', 56),
(91, '2023-09-03 17:01:03', 46),
(92, '2023-09-03 17:01:45', 46),
(93, '2023-09-03 17:21:12', 38),
(95, '2023-09-03 18:25:44', 28),
(96, '2023-09-04 10:40:27', 29);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `connexion`
--
ALTER TABLE `connexion`
  ADD CONSTRAINT `fk_connexion_apprenant` FOREIGN KEY (`idapprenant`) REFERENCES `apprenant` (`idapprenant`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
