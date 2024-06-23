

CREATE TABLE `agence` (
  `ID_agence` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `téléphone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `agence` (`ID_agence`, `nom`, `adresse`, `téléphone`, `email`) VALUES
(12, 'areoport monastir', 'monastir', '50320333', 'Areorpt@gmail.com');



CREATE TABLE `chauffeur` (
  `ID_chauffeur` int(11) NOT NULL,
  `Nom_chauffeur` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `téléphone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `client` (
  `ID_client` int(11) NOT NULL,
  `Nom_client` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `nationalite` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `client` (`ID_client`, `Nom_client`, `email`, `adresse`, `telephone`, `nationalite`) VALUES
(12345666, 'mohamed ben saleh', 'medmednin19i@gmail.COM', 'mednine', '92688419', 'tunisie'),
(14034977, 'feryel', 'feryelamara@gmail.com', 'monastir', '50687949', 'tunisie'),
(1234550511, 'salma baatout', 'salmabaatour@gmail.com', 'rue habib bourgiba 5023', '50320333', 'tunisie');



CREATE TABLE `location` (
  `ID_location` int(11) NOT NULL,
  `matricule` int(11) DEFAULT NULL,
  `ID_client` int(11) DEFAULT NULL,
  `ID_agence` int(11) DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `location` (`ID_location`, `matricule`, `ID_client`, `ID_agence`, `date_debut`, `date_fin`) VALUES
(0, 123444, 14034977, 12, '0000-00-00', '0000-00-00');


CREATE TABLE `paiements` (
  `id_paiement` int(8) NOT NULL,
  `id_reservation` int(11) NOT NULL,
  `montant` int(100) NOT NULL,
  `date` date NOT NULL,
  `mode_paiment` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `réservation` (
  `ID_reservation` int(11) NOT NULL,
  `ID_client` int(11) DEFAULT NULL,
  `matricule` int(11) DEFAULT NULL,
  `ID_chauffeur` int(11) DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `etat` enum('en attente','confirmé','annulé') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `réservation` (`ID_reservation`, `ID_client`, `matricule`, `ID_chauffeur`, `date_debut`, `date_fin`, `etat`) VALUES
(0, 14034977, NULL, NULL, '2024-06-20', '2024-06-30', 'en attente');



CREATE TABLE `taxi` (
  `matricule` int(11) NOT NULL,
  `marque` varchar(255) DEFAULT NULL,
  `modele` varchar(255) DEFAULT NULL,
  `disponibilite` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `taxi` (`matricule`, `marque`, `modele`, `disponibilite`) VALUES
(123444, 'ford', '2023', 0);


ALTER TABLE `agence`
  ADD PRIMARY KEY (`ID_agence`);


ALTER TABLE `chauffeur`
  ADD PRIMARY KEY (`ID_chauffeur`);


ALTER TABLE `client`
  ADD PRIMARY KEY (`ID_client`);


ALTER TABLE `location`
  ADD PRIMARY KEY (`ID_location`),
  ADD KEY `ID_taxi` (`matricule`),
  ADD KEY `ID_client` (`ID_client`),
  ADD KEY `ID_agence` (`ID_agence`);

ALTER TABLE `paiements`
  ADD PRIMARY KEY (`id_paiement`),
  ADD KEY `id_reservation` (`id_reservation`);


ALTER TABLE `réservation`
  ADD PRIMARY KEY (`ID_reservation`),
  ADD KEY `ID_client` (`ID_client`),
  ADD KEY `ID_taxi` (`matricule`),
  ADD KEY `ID_chauffeur` (`ID_chauffeur`);

ALTER TABLE `taxi`
  ADD PRIMARY KEY (`matricule`);


ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`matricule`) REFERENCES `taxi` (`matricule`),
  ADD CONSTRAINT `location_ibfk_2` FOREIGN KEY (`ID_client`) REFERENCES `client` (`ID_client`),
  ADD CONSTRAINT `location_ibfk_3` FOREIGN KEY (`ID_agence`) REFERENCES `agence` (`ID_agence`);


ALTER TABLE `réservation`
  ADD CONSTRAINT `réservation_ibfk_1` FOREIGN KEY (`ID_client`) REFERENCES `client` (`ID_client`),
  ADD CONSTRAINT `réservation_ibfk_2` FOREIGN KEY (`matricule`) REFERENCES `taxi` (`matricule`),
  ADD CONSTRAINT `réservation_ibfk_3` FOREIGN KEY (`ID_chauffeur`) REFERENCES `chauffeur` (`ID_chauffeur`);
COMMIT;

