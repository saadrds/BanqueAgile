-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 24 sep. 2021 à 10:51
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetagil`
--

-- --------------------------------------------------------

--
-- Structure de la table `agence`
--

CREATE TABLE `agence` (
  `nomAgence` varchar(20) NOT NULL,
  `ville` varchar(20) DEFAULT NULL,
  `adress` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `agence`
--

INSERT INTO `agence` (`nomAgence`, `ville`, `adress`) VALUES
('Agence1', 'Paris', 'adress2'),
('Agence2', 'Lille', 'adress1');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_cli` int(11) NOT NULL,
  `nomCli` varchar(20) DEFAULT NULL,
  `prenomCli` varchar(20) DEFAULT NULL,
  `date_nais` date DEFAULT NULL,
  `civilite` varchar(5) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `adress` varchar(30) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `mdp` varchar(20) DEFAULT NULL,
  `nomAgence` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_cli`, `nomCli`, `prenomCli`, `date_nais`, `civilite`, `email`, `adress`, `tel`, `mdp`, `nomAgence`) VALUES
(1, 'haba', 'marwan', '1999-12-21', 'Mr', 'haba@gmail.com', 'Calais', '065987451', 'haba123', 'Agence1'),
(2, 'bakhtaoui', 'aissam', '2000-11-27', 'Mr', 'bakhtaoui@gmail.com', 'Lille', '065458796', 'aissam123', 'Agence2');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `code` int(11) NOT NULL,
  `solde` float DEFAULT 0,
  `Rib` int(11) DEFAULT NULL,
  `date_ouvert` date DEFAULT current_timestamp(),
  `id_cli` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`code`, `solde`, `Rib`, `date_ouvert`, `id_cli`) VALUES
(1, 1200, 12, '2021-09-24', 1),
(2, 2600, 14, '2021-09-24', 2);

-- --------------------------------------------------------

--
-- Structure de la table `op_espece`
--

CREATE TABLE `op_espece` (
  `id_op` int(11) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `date` date DEFAULT current_timestamp(),
  `montant` float DEFAULT NULL,
  `id_cli` int(11) DEFAULT NULL,
  `motif` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `op_espece`
--

INSERT INTO `op_espece` (`id_op`, `type`, `date`, `montant`, `id_cli`, `motif`) VALUES
(1, 'ajouter', '2021-09-24', 10, 1, ' '),
(2, 'retirer', '2021-09-24', 20, 2, 'Achats');

-- --------------------------------------------------------

--
-- Structure de la table `op_virement`
--

CREATE TABLE `op_virement` (
  `id_op` int(11) NOT NULL,
  `date` date DEFAULT current_timestamp(),
  `montant` float DEFAULT NULL,
  `idC_emetteur` int(11) DEFAULT NULL,
  `idC_recepteur` int(11) DEFAULT NULL,
  `motif` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agence`
--
ALTER TABLE `agence`
  ADD PRIMARY KEY (`nomAgence`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_cli`),
  ADD KEY `nomAgence` (`nomAgence`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`code`),
  ADD KEY `id_cli` (`id_cli`);

--
-- Index pour la table `op_espece`
--
ALTER TABLE `op_espece`
  ADD PRIMARY KEY (`id_op`),
  ADD KEY `id_cli` (`id_cli`);

--
-- Index pour la table `op_virement`
--
ALTER TABLE `op_virement`
  ADD PRIMARY KEY (`id_op`),
  ADD KEY `idC_emetteur` (`idC_emetteur`),
  ADD KEY `idC_recepteur` (`idC_recepteur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_cli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `op_espece`
--
ALTER TABLE `op_espece`
  MODIFY `id_op` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `op_virement`
--
ALTER TABLE `op_virement`
  MODIFY `id_op` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`nomAgence`) REFERENCES `agence` (`nomAgence`);

--
-- Contraintes pour la table `compte`
--
ALTER TABLE `compte`
  ADD CONSTRAINT `compte_ibfk_1` FOREIGN KEY (`id_cli`) REFERENCES `client` (`id_cli`) ON DELETE CASCADE;

--
-- Contraintes pour la table `op_espece`
--
ALTER TABLE `op_espece`
  ADD CONSTRAINT `op_espece_ibfk_1` FOREIGN KEY (`id_cli`) REFERENCES `compte` (`code`) ON DELETE SET NULL;

--
-- Contraintes pour la table `op_virement`
--
ALTER TABLE `op_virement`
  ADD CONSTRAINT `op_virement_ibfk_1` FOREIGN KEY (`idC_emetteur`) REFERENCES `compte` (`code`) ON DELETE SET NULL,
  ADD CONSTRAINT `op_virement_ibfk_2` FOREIGN KEY (`idC_recepteur`) REFERENCES `compte` (`code`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
