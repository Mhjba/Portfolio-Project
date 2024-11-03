-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 03 nov. 2024 à 20:19
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `shopping`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(1) NOT NULL,
  `image` varchar(900) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `des` varchar(10000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `size` varchar(1000) NOT NULL,
  `section` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `image`, `name`, `des`, `price`, `size`, `section`) VALUES
(84, '../images/img3.png', 'hp', 'hp computer', '1245$', '840 G3 I5 6EME 8G/256GB ', 'Computers'),
(104, '../images/img4.png', 'lenovo', 'Lenovo IdeaPad 3 ', '157$', '120Hz 6,67″(8Go,256Go)', 'Computers'),
(118, '../images/img10.png', 'Samsung Galaxy ', 'Samsung Galaxy A05', '120$', '840 G3 I5 6EME 8G/256GB ', 'Phones'),
(119, '../images/img7.png', 'usb', 'Kingston Clé USB', '51$', '64GB', 'Other Devices');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

