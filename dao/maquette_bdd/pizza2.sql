-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 23 août 2021 à 22:27
-- Version du serveur :  10.4.14-MariaDB
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

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `NomCategorie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `produit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `telephone` varchar(10) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `horaire`
--

CREATE TABLE `horaire` (
  `id` int(11) NOT NULL,
  `jour` varchar(20) NOT NULL,
  `heureAM` varchar(20) DEFAULT NULL,
  `heurePM` varchar(20) DEFAULT NULL,
  `ouverture` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `nomProduit` varchar(255) NOT NULL,
  `prixMedium` float NOT NULL,
  `prixLarge` float NOT NULL,
  `descriptif` varchar(255) DEFAULT NULL,
  `cheminImage` varchar(255) NOT NULL,
  `categorie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nomProduit`, `prixMedium`, `prixLarge`, `descriptif`, `cheminImage`, `categorie_id`) VALUES
(1, 'Orientale', 12.5, 14.5, 'Sauce tomate à l\'origan, mozzarella, merguez et champignons frais.', 'img/pizzas/orientale.jpeg', 1),
(2, 'Margherita', 9.5, 12.5, 'Sauce tomate à l\'origan, mozzarella et basilic frais.', 'img/pizzas/base.jpg', 1),
(3, 'Royale', 10.9, 12.9, 'Sauce tomate à l\'origan, jambon, mozzarella et champignons frais.', 'img/pizzas/Royale.jpg', 1),
(4, 'Ch\'ti', 12.5, 14.5, 'Crème fraiche, mozzarella, maroilles et lard fumé.', 'img/pizzas/maroilles.jpg', 1),
(5, '4 Fromages', 13.9, 15.9, 'Crème fraiche, mozzarella, emmental, fromage de chèvre, gorgonzola.', 'img/pizzas/4fromages.jpg', 1),
(6, 'Montagnarde', 13.5, 15.5, 'Crème fraiche, mozzarella, jambon cru, fromage à raclette et champignons frais.', 'img/pizzas/montagnarde.jpg', 1),
(7, 'Végé.', 11.5, 13.5, 'Sauce tomate à l\'origan, mozzarella, champignons, oignons rouges, poivrons verts, tomages fraiches et olives noires .', 'img/pizzas/vege4.jpg', 1),
(8, 'Océane', 15.3, 17.3, 'Sauce tomate a l\'origan, mozzarella, moules, crevettes, calamars, poivrons.', 'img/pizzas/mer2.jpg', 1),
(9, 'Parmesane', 12.4, 14.4, 'Crème fraiche, mozzarella, jambon de parme, champignons, noix, parmesan.', 'img/pizzas/jParme.png', 1),
(10, 'Salade César', 0, 10.8, 'Salade romaine, filets de poulets rotis, tomates cerises, oeufs dur, copeaux de parmesan, sauce cesar.', 'img/entrees/cesar.jpg', 4),
(11, 'Salade méditerranéenne', 0, 10.8, 'Salade, avocat, tomates, oignons rouges, poulet rôti, sauce vinaigre balsamique.', 'img/entrees/mediteraneene.jpg', 4),
(12, 'Oignons Rings', 2.8, 5.5, 'Les classiques rondelles d\'oignons frits américaines.', 'img/entrees/oignons.jpg', 4),
(13, 'Nuggets', 3.9, 7.8, 'Des filets de poulets pannées frits et croustillants.', 'img/entrees/nuggets2.jpg', 4),
(14, 'Pain à l\'ail', 3.5, 5.5, 'Du pain frotté à l\'ail et au persil, fourré à la mozzarella puis gratinée.', 'img/entrees/painAil3.jpg', 4),
(15, 'Bruschetta Tomate mozza', 3.8, 5.8, 'Deux grande tranche de gratinées, recouvertes de tomates fraiches et de mozzarella.', 'img/entrees/tartine.jpg', 4),
(16, 'Tiramisu', 0, 4.5, 'Crème gourmande a la mascarpone, biscuits cuillère, café et cacao.', 'img/desserts/tiramisu.jpg', 3),
(17, 'Panna Cotta', 0, 2.9, 'Un classique italien à base de crème et de lait gélifié accompagné d\'un coulis de fruits rouge, de caramel ou de chocolat', 'img/desserts/panacota.jpg', 3),
(18, 'Cannoli Sicilien', 4.9, 8, 'Tuile italienne fourrée d\'une crème à la ricotta aromatisé au citron.', 'img/desserts/canelloni2.jpg', 3),
(19, 'Brownie', 3.5, 7, 'Le classique américain au chocolat et aux noisettes.', 'img/desserts/brownie.jpg', 3),
(20, 'Pot de glace', 3, 5.5, 'Crème glacée au choix (100 ou 200ml) : Vanille, Chocolat, Cookie, Caramel beurre salé, Pecan ou Dulce De Leche.', 'img/desserts/glaces2.jpg', 3),
(21, 'Cookie', 2, 5, 'Parfum au choix : tout chocolat, pétites de chocolat, cranberrie et chocolat blanc ou vanille aux éclats de noisettes.', 'img/desserts/cookie.jpg', 3),
(22, 'Sodas', 2.5, 4, 'Coca-Cola, Fanta, Ice-Tea, Oasis, Jus d\'orange, Jus de pomme, Perrier, Vittel.', 'img/boissons/sodas.jpg', 2),
(23, 'Bières', 0, 3.5, 'Heineken, Desperado, Pelforth ambré, Tourtelle twist (sans alcool).', 'img/boissons/bieres3.jpg', 2),
(24, 'Vins', 0, 9.8, 'Côtes de Provences Rosé ou Beaujolais Villages Rouge.', 'img/boissons/vins.jpg', 2);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `nomRole` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `login`, `email`, `password`, `role_id`) VALUES
(1, 'admin', 'admin@localhost.com', '1234567', 1),
(2, 'client1', 'client1@hotmail.fr', 'Fghy7$m', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_utilisateur_commande` (`utilisateur_id`),
  ADD KEY `FK_produit_commande` (`produit_id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `horaire`
--
ALTER TABLE `horaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_categoryProduct` (`categorie_id`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_utilisateur_role` (`role_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `horaire`
--
ALTER TABLE `horaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
