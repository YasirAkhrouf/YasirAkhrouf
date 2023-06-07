-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 07 juin 2023 à 13:41
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gy-goal`
--

-- --------------------------------------------------------

--
-- Structure de la table `maillots`
--

CREATE TABLE `maillots` (
  `NomEquipe` varchar(30) NOT NULL,
  `NombreMaillots` int(15) DEFAULT NULL,
  `Prix` decimal(8,2) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `maillots`
--

INSERT INTO `maillots` (`NomEquipe`, `NombreMaillots`, `Prix`, `images`) VALUES
('Fc Barcelone', 10, 59.99, 'images/barca.png'),
('Stade Rennais', 10, 49.00, 'images/rennes.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `maillots`
--
ALTER TABLE `maillots`
  ADD PRIMARY KEY (`NomEquipe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
