DROP DATABASE IF EXISTS projettony;
CREATE DATABASE projettony;
USE projettony;
-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 13 déc. 2021 à 15:39
-- Version du serveur : 5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projettony`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_categories` int(11) NOT NULL,
  `nom_categorie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categories`, `nom_categorie`) VALUES
(1, 'fruits'),
(2, 'legumes'),
(3, 'boisson'),
(4, 'surgelé'),
(5, 'conserve'),
(6, 'imobilier'),
(7, 'jardin'),
(8, 'éléctroménager');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `id_categories` int(11) NOT NULL,
  `lien_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `designation`, `visible`, `id_categories`, `lien_image`) VALUES
(1, 'Pomme', 1, 1, '/src/img/Pomme.png'),
(2, 'Abricot', 1, 1, '/src/img/Abricot.png'),
(3, 'Banane', 1, 1, '/src/img/Banane.png'),
(4, 'Coca-Cola', 1, 3, '/src/img/Coca-Cola.png'),
(5, 'Jus de fruits', 1, 3, '/src/img/Jus de fruits.png'),
(6, 'Eau', 1, 3, '/src/img/Eau.png'),
(7, 'Carotte', 1, 2, '/src/img/Carotte.png'),
(8, 'Aubergine', 1, 2, '/src/img/Aubergine.png'),
(9, 'Pomme de terre', 1, 2, '/src/img/Pomme de terre.png');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `identifiant` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mot_de_passe` varchar(50) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_users`, `identifiant`, `email`, `mot_de_passe`, `admin`) VALUES
(1, 'SAUTRON', 'jd9743101@gmail.com', 'root', 1),
(2, 'TOTO', 'toto@gmail.com', 'toto', 0),
(3, 'a', 'a', 'a', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categories`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`),
  ADD KEY `id_categories_FK` (`id_categories`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categories` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `id_categories_FK` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id_categories`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
