-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 13 mars 2022 à 18:45
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `animaux`
--

-- --------------------------------------------------------

--
-- Structure de la table `animaux`
--

CREATE TABLE `animaux` (
  `id_animal` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `couleur` varchar(50) NOT NULL,
  `origines` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `id_race` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `animaux`
--

INSERT INTO `animaux` (`id_animal`, `nom`, `couleur`, `origines`, `avatar`, `id_race`) VALUES
(8, 'Crocodile', 'Vert', 'Afrique', 'https://images2.imgbox.com/2e/77/l3lsVG9a_o.jpg', 1),
(9, 'Iguane', 'Gris', 'Amérique du Sud', 'https://images2.imgbox.com/e4/f5/LJ1xHvxb_o.jpg', 1),
(10, 'Lion', 'Jaune', 'Afrique du Sud', 'https://images2.imgbox.com/d4/bb/51jynHk0_o.jpg', 2),
(11, 'Tigre', 'Orange', 'Asie du Sud-est', 'https://images2.imgbox.com/36/51/0aqMACPa_o.jpg', 2),
(12, 'Pingouin', 'Noir', 'Arctique', 'https://images2.imgbox.com/3a/2d/YU9EUmDd_o.jpg', 3),
(14, 'Babouin', 'Jaune', 'Afrique occidentale', 'https://images2.imgbox.com/02/2d/ct9Y8Hrw_o.jpg', 4),
(15, 'Gorille', 'Argenté', 'Afrique centrale', 'https://images2.imgbox.com/90/c7/w7r1yAcU_o.jpg', 4),
(18, 'Caniche', 'Blanc', 'Europe de l\'Ouest', 'https://images2.imgbox.com/80/b7/Q6cPtAqI_o.jpg', 6),
(19, 'Malinois', 'Marron', 'Europe de l\'Ouest', 'https://images2.imgbox.com/a6/35/7n5yWIZl_o.jpg', 6),
(20, 'Main Coon', 'Roux', 'Amérique du Nord-Est', 'https://images2.imgbox.com/92/b5/bxnzFOI6_o.jpg', 7),
(26, 'Colibri', 'Rouge pivert', 'Amazonie', 'https://images2.imgbox.com/e1/84/AJyKbriJ_o.jpg', 3),
(27, 'Patrick', 'Rose', 'Bikini Bottom', 'https://i.pinimg.com/736x/d2/ec/83/d2ec83e32c84ff369d3dcf37e96903f6.jpg', 5),
(28, 'Cerf', 'Marron', 'Amérique du Nord', 'https://images2.imgbox.com/51/e1/W4W7qCOZ_o.jpg', 2),
(29, 'Elephant', 'Gris', 'Afrique du Sud', 'https://images2.imgbox.com/98/ce/r7AC4yjF_o.jpg', 1),
(31, 'Leopard', 'Juane', 'Afrique du Sud', 'https://images2.imgbox.com/6b/41/xveu6V0A_o.jpg', 2),
(44, 'Chevrette', 'Rose', 'Antarctique', 'https://images2.imgbox.com/c9/d6/MXDTLkxR_o.jpg', 5);

-- --------------------------------------------------------

--
-- Structure de la table `races`
--

CREATE TABLE `races` (
  `id_race` int(11) NOT NULL,
  `nom_race` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `races`
--

INSERT INTO `races` (`id_race`, `nom_race`) VALUES
(1, 'Reptiles'),
(2, 'Félins'),
(3, 'Oiseaux'),
(4, 'Primates'),
(5, 'Poissons'),
(6, 'Chien'),
(7, 'Chat');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `animaux`
--
ALTER TABLE `animaux`
  ADD PRIMARY KEY (`id_animal`),
  ADD KEY `id_race` (`id_race`);

--
-- Index pour la table `races`
--
ALTER TABLE `races`
  ADD PRIMARY KEY (`id_race`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `animaux`
--
ALTER TABLE `animaux`
  MODIFY `id_animal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `races`
--
ALTER TABLE `races`
  MODIFY `id_race` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `animaux`
--
ALTER TABLE `animaux`
  ADD CONSTRAINT `animaux_ibfk_1` FOREIGN KEY (`id_race`) REFERENCES `races` (`id_race`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
