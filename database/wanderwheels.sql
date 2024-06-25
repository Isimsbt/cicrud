-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2024 at 09:46 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wanderwheels`
--

-- --------------------------------------------------------

--
-- Table structure for table `agence`
--

CREATE TABLE `agence` (
  `ID_agence` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `téléphone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agence`
--

INSERT INTO `agence` (`ID_agence`, `nom`, `adresse`, `téléphone`, `email`) VALUES
(12, 'areoport monastir', 'monastir', '50320333', 'Areorpt@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `chauffeur`
--

CREATE TABLE `chauffeur` (
  `ID_chauffeur` int(11) NOT NULL,
  `Nom_chauffeur` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `téléphone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `ID_client` int(11) NOT NULL,
  `Nom_client` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `nationalite` varchar(20) NOT NULL,
  `gender` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`ID_client`, `Nom_client`, `email`, `adresse`, `telephone`, `nationalite`, `gender`) VALUES
(12345666, 'mohamed ben saleh', 'medmednin19i@gmail.COM', 'mednine', '92688419', 'tunisie', ''),
(14034977, 'feryel', 'feryelamara@gmail.com', 'monastir', '50687949', 'tunisie', ''),
(1234550511, 'salma baatout', 'salmabaatour@gmail.com', 'rue habib bourgiba 5023', '50320333', 'tunisie', '');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `ID_location` int(11) NOT NULL,
  `matricule` int(11) DEFAULT NULL,
  `ID_client` int(11) DEFAULT NULL,
  `ID_agence` int(11) DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`ID_location`, `matricule`, `ID_client`, `ID_agence`, `date_debut`, `date_fin`) VALUES
(0, 123444, 14034977, 12, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `paiements`
--

CREATE TABLE `paiements` (
  `id_paiement` int(8) NOT NULL,
  `id_reservation` int(11) NOT NULL,
  `montant` int(100) NOT NULL,
  `date` date NOT NULL,
  `mode_paiment` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `réservation`
--

CREATE TABLE `réservation` (
  `ID_reservation` int(11) NOT NULL,
  `ID_client` int(11) DEFAULT NULL,
  `matricule` int(11) DEFAULT NULL,
  `ID_chauffeur` int(11) DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `etat` enum('en attente','confirmé','annulé') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `réservation`
--

INSERT INTO `réservation` (`ID_reservation`, `ID_client`, `matricule`, `ID_chauffeur`, `date_debut`, `date_fin`, `etat`) VALUES
(0, 14034977, NULL, NULL, '2024-06-20', '2024-06-30', 'en attente');

-- --------------------------------------------------------

--
-- Table structure for table `taxi`
--

CREATE TABLE `taxi` (
  `matricule` int(11) NOT NULL,
  `marque` varchar(255) DEFAULT NULL,
  `modele` varchar(255) DEFAULT NULL,
  `disponibilite` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taxi`
--

INSERT INTO `taxi` (`matricule`, `marque`, `modele`, `disponibilite`) VALUES
(123444, 'ford', '2023', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agence`
--
ALTER TABLE `agence`
  ADD PRIMARY KEY (`ID_agence`);

--
-- Indexes for table `chauffeur`
--
ALTER TABLE `chauffeur`
  ADD PRIMARY KEY (`ID_chauffeur`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`ID_client`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`ID_location`),
  ADD KEY `ID_taxi` (`matricule`),
  ADD KEY `ID_client` (`ID_client`),
  ADD KEY `ID_agence` (`ID_agence`);

--
-- Indexes for table `paiements`
--
ALTER TABLE `paiements`
  ADD PRIMARY KEY (`id_paiement`),
  ADD KEY `id_reservation` (`id_reservation`);

--
-- Indexes for table `réservation`
--
ALTER TABLE `réservation`
  ADD PRIMARY KEY (`ID_reservation`),
  ADD KEY `ID_client` (`ID_client`),
  ADD KEY `ID_taxi` (`matricule`),
  ADD KEY `ID_chauffeur` (`ID_chauffeur`);

--
-- Indexes for table `taxi`
--
ALTER TABLE `taxi`
  ADD PRIMARY KEY (`matricule`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`matricule`) REFERENCES `taxi` (`matricule`),
  ADD CONSTRAINT `location_ibfk_2` FOREIGN KEY (`ID_client`) REFERENCES `client` (`ID_client`),
  ADD CONSTRAINT `location_ibfk_3` FOREIGN KEY (`ID_agence`) REFERENCES `agence` (`ID_agence`);

--
-- Constraints for table `réservation`
--
ALTER TABLE `réservation`
  ADD CONSTRAINT `réservation_ibfk_1` FOREIGN KEY (`ID_client`) REFERENCES `client` (`ID_client`),
  ADD CONSTRAINT `réservation_ibfk_2` FOREIGN KEY (`matricule`) REFERENCES `taxi` (`matricule`),
  ADD CONSTRAINT `réservation_ibfk_3` FOREIGN KEY (`ID_chauffeur`) REFERENCES `chauffeur` (`ID_chauffeur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
