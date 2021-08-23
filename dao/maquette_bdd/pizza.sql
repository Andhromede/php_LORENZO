-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 23 août 2021 à 14:27
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pizza`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NomCategorie` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `NomCategorie`) VALUES
(1, 'Pizza'),
(2, 'Boissons'),
(3, 'Desserts'),
(4, 'Entree');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `utilisateur_id` int(11) NOT NULL,
  `produit_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_utilisateur_commande` (`utilisateur_id`),
  KEY `FK_produit_commande` (`produit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `telephone` varchar(10) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `horaire`
--

DROP TABLE IF EXISTS `horaire`;
CREATE TABLE IF NOT EXISTS `horaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jour` varchar(20) NOT NULL,
  `heureAM` varchar(20) DEFAULT NULL,
  `heurePM` varchar(20) DEFAULT NULL,
  `ouverture` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `horaire`
--

INSERT INTO `horaire` (`id`, `jour`, `heureAM`, `heurePM`, `ouverture`) VALUES
(1, 'Lundi', '11h00 - 14h30', '18h00 - 23h30', 1),
(2, 'Mardi', '11h00 - 14h30', '18h00 - 23h30', 1),
(3, 'Mercredi', '11h00 - 14h30', '18h00 - 23h30', 1);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomProduit` varchar(255) NOT NULL,
  `taille` varchar(50) DEFAULT NULL,
  `prix` float NOT NULL,
  `descriptif` varchar(255) DEFAULT NULL,
  `cheminImage` varchar(255) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_categoryProduct` (`categorie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nomProduit`, `taille`, `prix`, `descriptif`, `cheminImage`, `categorie_id`) VALUES
(1, 'Orientale', 'Medium', 12.5, 'Sauce tomate à l\'origan, mozzarella, merguez et champignons frais.', 'img/pizzas/orientale.jpeg', 1),
(2, 'Orientale', 'Large', 14.5, 'Sauce tomate à l\'origan, mozzarella, merguez et champignons frais.', 'img/pizzas/orientale.jpeg', 1),
(3, 'Margherita', 'Medium', 9.5, 'Sauce tomate à l\'origan, mozzarella et basilic frais.', 'img/pizzas/base.jpg', 1),
(4, 'Margherita', 'Large', 12.5, 'Sauce tomate à l\'origan, mozzarella et basilic frais.', 'img/pizzas/base.jpg', 1),
(5, 'Royale', 'Medium', 10.9, 'Sauce tomate à l\'origan, jambon, mozzarella et champignons frais.', 'img/pizzas/Royale.jpg', 1),
(6, 'Royale', 'Large', 12.9, 'Sauce tomate à l\'origan, jambon, mozzarella et champignons frais.', 'img/pizzas/Royale.jpg', 1),
(7, 'Ch\'ti', 'Medium', 12.5, 'Crème fraiche, mozzarella, maroilles et lard fumé.', 'img/pizzas/maroilles.jpg', 1),
(8, 'Ch\'ti', 'Large', 14.5, 'Crème fraiche, mozzarella, maroilles et lard fumé.', 'img/pizzas/maroilles.jpg', 1),
(9, '4 Fromages', 'Medium', 13.9, 'Crème fraiche, mozzarella, emmental, fromage de chèvre, gorgonzola.', 'img/pizzas/4fromages.jpg', 1),
(10, '4 Fromages', 'Large', 15.9, 'Crème fraiche, mozzarella, emmental, fromage de chèvre, gorgonzola.', 'img/pizzas/4fromages.jpg', 1),
(11, 'Montagnarde', 'Medium', 13.5, 'Crème fraiche, mozzarella, jambon cru, fromage à raclette et champignons frais.', 'img/pizzas/montagnarde.jpg', 1),
(12, 'Montagnarde', 'Large', 15.5, 'Crème fraiche, mozzarella, jambon cru, fromage à raclette et champignons frais.', 'img/pizzas/montagnarde.jpg', 1),
(13, 'Végé.', 'Medium', 11.5, 'Sauce tomate à l\'origan, mozzarella, champignons, oignons rouges, poivrons verts, tomages fraiches et olives noires .', 'img/pizzas/vege4.jpg', 1),
(14, 'Végé.', 'Large', 13.5, 'Sauce tomate à l\'origan, mozzarella, champignons, oignons rouges, poivrons verts, tomages fraiches et olives noires .', 'img/pizzas/vege4.jpg', 1),
(15, 'Océane', 'Medium', 15.3, 'Sauce tomate a l\'origan, mozzarella, moules, crevettes, calamars, poivrons.', 'img/pizzas/mer2.jpg', 1),
(16, 'Océane', 'Large', 17.3, 'Sauce tomate a l\'origan, mozzarella, moules, crevettes, calamars, poivrons.', 'img/pizzas/mer2.jpg', 1),
(17, 'Parmesane', 'Medium', 12.4, 'Crème fraiche, mozzarella, jambon de parme, champignons, noix, parmesan.', 'img/pizzas/jParme.png', 1),
(18, 'Parmesane', 'Large', 14.4, 'Crème fraiche, mozzarella, jambon de parme, champignons, noix, parmesan.', 'img/pizzas/jParme.png', 1),
(19, 'Salade César', NULL, 10.8, 'Salade romaine, filets de poulets rotis, tomates cerises, oeufs dur, copeaux de parmesan, sauce cesar.', 'img/entrees/cesar.jpg', 4),
(20, 'Salade méditerranéenne', NULL, 10.8, 'Salade, avocat, tomates, oignons rouges, poulet rôti, sauce vinaigre balsamique.', 'img/entrees/mediteraneene.jpg', 4),
(21, 'Oignons Rings', 'x4', 2.8, 'Les classiques rondelles d\'oignons frits américaines.', 'img/entrees/oignons.jpg', 4),
(22, 'Oignons Rings', 'x9', 5.5, 'Les classiques rondelles d\'oignons frits américaines.', 'img/entrees/oignons.jpg', 4),
(23, 'Nuggets', 'x4', 3.9, 'Des filets de poulets pannées frits et croustillants.', 'img/entrees/nuggets2.jpg', 4),
(24, 'Nuggets', 'x9', 7.8, 'Des filets de poulets pannées frits et croustillants.', 'img/entrees/nuggets2.jpg', 4),
(25, 'Pain à l\'ail', 'x1', 3.5, 'Du pain frotté à l\'ail et au persil, fourré à la mozzarella puis gratinée.', 'img/entrees/painAil3.jpg', 4),
(26, 'Pain à l\'ail', 'x2', 5.5, 'Du pain frotté à l\'ail et au persil, fourré à la mozzarella puis gratinée.', 'img/entrees/painAil3.jpg', 4),
(27, 'Bruschetta Tomate mozza', 'x1', 3.8, 'Deux grande tranche de gratinées, recouvertes de tomates fraiches et de mozzarella.', 'img/entrees/tartine.jpg', 4),
(28, 'Bruschetta Tomate mozza', 'x2', 5.8, 'Deux grande tranche de gratinées, recouvertes de tomates fraiches et de mozzarella.', 'img/entrees/tartine.jpg', 4),
(29, 'Tiramisu', NULL, 4.5, 'Crème gourmande a la mascarpone, biscuits cuillère, café et cacao.', 'img/desserts/tiramisu.jpg', 3),
(30, 'Panna Cotta', NULL, 2.9, 'Un classique italien à base de crème et de lait gélifié accompagné d\'un coulis de fruits rouge, de caramel ou de chocolat', 'img/desserts/panacota.jpg', 3),
(31, 'Cannoli Sicilien', 'x2', 4.9, 'Tuile italienne fourrée d\'une crème à la ricotta aromatisé au citron.', 'img/desserts/canelloni2.jpg', 3),
(32, 'Cannoli Sicilien', 'x4', 8, 'Tuile italienne fourrée d\'une crème à la ricotta aromatisé au citron.', 'img/desserts/canelloni2.jpg', 3),
(33, 'Brownie', 'x1', 3.5, 'Le classique américain au chocolat et aux noisettes.', 'img/desserts/brownie.jpg', 3),
(34, 'Brownie', 'x2', 7, 'Le classique américain au chocolat et aux noisettes.', 'img/desserts/brownie.jpg', 3),
(35, 'Pot de glace', '100ml', 3, 'Crème glacée au choix : Vanille, Chocolat, Cookie, Caramel beurre salé, Pecan ou Dulce De Leche.', 'img/desserts/glaces2.jpg', 3),
(36, 'Pot de glace', '200ml', 5.5, 'Crème glacée au choix : Vanille, Chocolat, Cookie, Caramel beurre salé, Pecan ou Dulce De Leche.', 'img/desserts/glaces2.jpg', 3),
(37, 'Cookie', 'x1', 2, 'Parfum au choix : tout chocolat, pétites de chocolat, cranberrie et chocolat blanc ou vanille aux éclats de noisettes.', 'img/desserts/cookie.jpg', 3),
(38, 'Cookie', 'x3', 5, 'Parfum au choix : tout chocolat, pétites de chocolat, cranberrie et chocolat blanc ou vanille aux éclats de noisettes.', 'img/desserts/cookie.jpg', 3),
(39, 'Sodas', '33cl', 2.5, 'Coca-Cola, Fanta, Ice-Tea, Oasis, Jus d\'orange, Jus de pomme, Perrier, Vittel.', 'img/boissons/sodas.jpg', 2),
(40, 'Sodas', '1L', 4, 'Coca-Cola, Fanta, Ice-Tea, Oasis, Jus d\'orange, Jus de pomme, Perrier, Vittel.', 'img/boissons/sodas.jpg', 2),
(41, 'Bières', '33cl', 3.5, 'Heineken, Desperado, Pelforth ambré, Tourtelle twist (sans alcool).', 'img/boissons/bieres.jpg', 2),
(42, 'Vins', '1L', 9.8, 'Côtes de Provences Rosé ou Beaujolais Villages Rouge.', 'img/boissons/vins.jpg', 2);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomRole` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `nomRole`) VALUES
(1, 'Administrateur'),
(2, 'Moderateur'),
(3, 'Utilisateur');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_utilisateur_role` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `login`, `email`, `password`, `role_id`) VALUES
(1, 'admin', 'admin@localhost.com', '1234567', 1),
(2, 'client1', 'client1@hotmail.fr', 'Fghy7$m', 3);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_produit_commande` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`id`),
  ADD CONSTRAINT `FK_utilisateur_commande` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FK_categoryProduct` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `FK_utilisateur_role` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;