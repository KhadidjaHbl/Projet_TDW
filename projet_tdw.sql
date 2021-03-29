-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2021 at 04:40 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet_tdw`
--

-- --------------------------------------------------------

--
-- Table structure for table `activite`
--

CREATE TABLE `activite` (
  `activiteID` int(11) NOT NULL,
  `eleveID` int(11) NOT NULL,
  `nomActivite` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activite`
--

INSERT INTO `activite` (`activiteID`, `eleveID`, `nomActivite`) VALUES
(1, 2, 'Tennis'),
(2, 3, 'Dessin'),
(3, 4, 'Echecs'),
(4, 2, 'Piano'),
(5, 3, 'Theatre'),
(6, 3, 'Natation');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(40) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `Adresse` varchar(30) NOT NULL,
  `Tel` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Nom`, `Prenom`, `Adresse`, `Tel`, `Email`, `Password`, `username`) VALUES
(1, 'habelhames', 'khadidja', 'Boumerdes', '', 'khadidja@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `anneescolaire`
--

CREATE TABLE `anneescolaire` (
  `eleveID` int(11) NOT NULL,
  `cycle` varchar(30) NOT NULL,
  `classe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anneescolaire`
--

INSERT INTO `anneescolaire` (`eleveID`, `cycle`, `classe`) VALUES
(2, 'Secondaire', 2),
(3, 'Moyen', 1),
(4, 'Primaire', 3);

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `description` text NOT NULL,
  `CategorieCons` varchar(40) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `articleID` int(11) NOT NULL,
  `image` varchar(30) NOT NULL,
  `txt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`description`, `CategorieCons`, `titre`, `articleID`, `image`, `txt`) VALUES
('t is a long established fact that a reader will be distracted by the readable content of a page that can contains\r\n', 'Parents', 'article2', 2, 'iot.jpg', 'It is a long established fact that a reader will be distracted by the readable content of a page when people looking at its layout It is a long established fact that a reader will be distracted by the readable content of a page when people looking at its layoutIt is a long established fact that a reader will be distracted by the readable content of a page when people looking at it'),
('There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form', 'Parents', 'article3', 3, 'book.jpg', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some formThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some formThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some formThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some formThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form'),
('It is a long established fact that a reader will be distracted by the readable content of a page when people looking at its layout\r\n\r\n\r\n\r\n\r\n', 'Moyen', 'article1', 4, 'lang.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when people looking at its layout It is a long established fact that a reader will be distracted by the readable content of a page when people looking at its layoutIt is a long established fact that a reader will be distracted by the readable content of a page when people looking at its layoutIt is a long established fact that a reader will be distracted by the readable content of a page when people looking at its layoutIt is a long established fact that a reader will be distracted by the readable content of a page when people looking at its layoutIt is a long established fact that a reader will be distracted by the readable content of a page when people looking at its layoutIt is a long established fact that a reader will be distracted by the readable content of a page when people looking at its layout'),
('believable. If you are going to use a passage of Lorem Ipsum, you need to be  sure there isn\'t anything embarrassing ', 'Parents', 'article4', 5, 'nb.jpg', 'believable. If you are going to use a passage of Lorem Ipsum, you need to be  sure there isn\'t anything embarrassing believable. If you are going to use a passage of Lorem Ipsum, you need to be  sure there isn\'t anything embarrassing believable. If you are going to use a passage of Lorem Ipsum, you need to be  sure there isn\'t anything embarrassing believable. If you are going to use a passage of Lorem Ipsum, you need to be  sure there isn\'t anything embarrassing believable. If you are going to use a passage of Lorem Ipsum, you need to be  sure there isn\'t anything embarrassing believable. If you are going to use a passage of Lorem Ipsum, you need to be  sure there isn\'t anything embarrassing '),
('to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour,', 'Secondaire', 'article6', 6, 'seo.jpg', ''),
('The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de', 'Primaire', ' article5', 7, 'sc.jpg', 'believable. If you are going to use a passage of Lorem Ipsum, you need to be  sure there isn\'t anything embarrassing believable. If you are going to use a passage of Lorem Ipsum, you need to be  sure there isn\'t anything embarrassing believable. If you are going to use a passage of Lorem Ipsum, you need to be  sure there isn\'t anything embarrassing believable. If you are going to use a passage of Lorem Ipsum, you need to be  sure there isn\'t anything embarrassing believable. If you are going to use a passage of Lorem Ipsum, you need to be  sure there isn\'t anything embarrassing believable. If you are going to use a passage of Lorem Ipsum, you need to be  sure there isn\'t anything embarrassing believable. If you are going to use a passage of Lorem Ipsum, you need to be  sure there isn\'t anything embarrassing believable. If you are going to use a passage of Lorem Ipsum, you need to be  sure there isn\'t anything embarrassing believable. If you are going to use a passage of Lorem Ipsum, you need to be  sure there isn\'t anything embarrassing '),
('This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", ', '', 'article7', 8, 'robot.jpg', 'This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\",when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.  Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).'),
('All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet', '', 'article8', 9, 'enf.jpg', 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet Where can I get some? There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Tel1` varchar(30) NOT NULL,
  `Tel2` varchar(30) NOT NULL,
  `Tel3` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `Email`, `Tel1`, `Tel2`, `Tel3`) VALUES
(1, 'www.El_MaarifaSchool@mail.com', '+553425689', '+554000167', '+662441290');

-- --------------------------------------------------------

--
-- Table structure for table `cours`
--

CREATE TABLE `cours` (
  `coursID` int(11) NOT NULL,
  `Jour` varchar(30) NOT NULL,
  `HeureDebut` time NOT NULL,
  `Duree` time NOT NULL,
  `ensID` int(11) NOT NULL,
  `moduleID` int(11) NOT NULL,
  `salleID` int(11) NOT NULL,
  `Groupe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `diaporama`
--

CREATE TABLE `diaporama` (
  `image` varchar(40) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diaporama`
--

INSERT INTO `diaporama` (`image`, `id`) VALUES
('form3.jpg', 1),
('form4.jpg', 2),
('form1.jpg', 3),
('form6.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `eleve`
--

CREATE TABLE `eleve` (
  `userID` int(11) NOT NULL,
  `Annee` varchar(30) NOT NULL,
  `Cycle` varchar(20) NOT NULL,
  `Groupe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eleve`
--

INSERT INTO `eleve` (`userID`, `Annee`, `Cycle`, `Groupe`) VALUES
(1, '2ème', 'Secondaire', 2),
(2, '2ème', 'Secondaire', 1),
(3, '3ème', 'Moyen', 1),
(4, '4ème', 'Moyen', 2);

-- --------------------------------------------------------

--
-- Table structure for table `enseigner`
--

CREATE TABLE `enseigner` (
  `ensID` int(11) NOT NULL,
  `nomModule` varchar(30) NOT NULL,
  `Cycle` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enseigner`
--

INSERT INTO `enseigner` (`ensID`, `nomModule`, `Cycle`) VALUES
(10, 'Arabe', 'Primaire'),
(10, 'Histoire/Geo', 'Primaire'),
(10, 'Math', 'Primaire'),
(11, 'Francais', 'Primaire');

-- --------------------------------------------------------

--
-- Table structure for table `heurerecep`
--

CREATE TABLE `heurerecep` (
  `EnsID` int(11) NOT NULL,
  `Jour` varchar(30) NOT NULL,
  `Heure` varchar(30) NOT NULL,
  `class` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `heurerecep`
--

INSERT INTO `heurerecep` (`EnsID`, `Jour`, `Heure`, `class`) VALUES
(5, 'Mercredi', '11h', '1,2,3'),
(6, 'Dimanche', '13h30', '0'),
(10, 'Jeudi', '14h30', '0'),
(9, 'Lundi', '9h', '0');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `moduleID` int(11) NOT NULL,
  `nomModule` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`moduleID`, `nomModule`) VALUES
(1, 'Francais'),
(2, 'Anglais'),
(3, 'Math'),
(4, 'informatique'),
(5, 'Dessin'),
(6, 'Physique'),
(7, 'Histoire/Geo'),
(8, 'Science Naturelle'),
(9, 'Arabe'),
(10, 'Espagnole');

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `eleveID` int(11) NOT NULL,
  `moduleID` int(30) NOT NULL,
  `note` float NOT NULL,
  `Remarque` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`eleveID`, `moduleID`, `note`, `Remarque`) VALUES
(3, 0, 16, '0'),
(1, 2, 0, '0'),
(3, 0, 16, '0'),
(3, 0, 16, '0'),
(3, 0, 16, '0'),
(3, 0, 16, '0'),
(1, 1, 0, '0'),
(1, 5, 0, '0'),
(2, 1, 16, '0'),
(2, 2, 16, '0'),
(2, 3, 14.5, '0'),
(2, 4, 13.5, '0'),
(2, 6, 17, '0'),
(2, 7, 15.5, '0'),
(2, 9, 12, '0'),
(3, 1, 10, '0'),
(3, 2, 14, '0'),
(3, 4, 11, '0'),
(3, 7, 9.5, '0'),
(3, 9, 12.5, '0'),
(3, 8, 8, '0'),
(4, 1, 6.5, '0'),
(4, 3, 8, '0'),
(4, 9, 7, '0');

-- --------------------------------------------------------

--
-- Table structure for table `paragraphe`
--

CREATE TABLE `paragraphe` (
  `ParagID` int(11) NOT NULL,
  `texte` text NOT NULL,
  `title` varchar(30) NOT NULL,
  `image` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paragraphe`
--

INSERT INTO `paragraphe` (`ParagID`, `texte`, `title`, `image`) VALUES
(1, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s\r\n\r\n                    ', 'Presentation1', 'sc.jpg'),
(2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'presentation2', 'form3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `repas`
--

CREATE TABLE `repas` (
  `repasID` int(11) NOT NULL,
  `nomRepas` varchar(40) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `restauration`
--

CREATE TABLE `restauration` (
  `id` int(11) NOT NULL,
  `Jour` varchar(40) NOT NULL,
  `Repas` varchar(40) NOT NULL,
  `dessert` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restauration`
--

INSERT INTO `restauration` (`id`, `Jour`, `Repas`, `dessert`) VALUES
(1, 'Dimanche', 'Couscous', 'Orange'),
(2, 'Lundi', 'chorba frik ', 'Yaourt'),
(3, 'Mardi', 'Riz', 'Pomme'),
(4, 'Mercredi', 'Jwez zitoune', 'Jus');

-- --------------------------------------------------------

--
-- Table structure for table `salle`
--

CREATE TABLE `salle` (
  `salleID` int(11) NOT NULL,
  `nomSalle` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tuteur`
--

CREATE TABLE `tuteur` (
  `tuteurID` int(11) NOT NULL,
  `eleveID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuteur`
--

INSERT INTO `tuteur` (`tuteurID`, `eleveID`) VALUES
(13, 12),
(14, 3);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(40) NOT NULL,
  `Prenom` varchar(40) NOT NULL,
  `Adresse` varchar(40) NOT NULL,
  `Tel1` varchar(30) NOT NULL,
  `Tel2` varchar(20) NOT NULL,
  `Tel3` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `DateNaiss` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`ID`, `Nom`, `Prenom`, `Adresse`, `Tel1`, `Tel2`, `Tel3`, `Email`, `Type`, `Password`, `DateNaiss`) VALUES
(2, 'Yousfi', 'Kenza', 'Alger', '0789654321', '0555432100', '', 'kenzaY@gmail.com', 'Eleve', '1234', '2000-03-15'),
(3, 'Draoui', 'Yasmina', 'Tipaza', '0662667890', '0556789045', '', 'yasmine@gmail.com', 'Eleve', '12345', '1999-10-31'),
(4, 'Mohammed', 'Abdelah', 'Alger', '0777889955', '0555446677', '', 'mohammed@gmail.com', 'Eleve', '1234', '2001-11-17'),
(5, 'Hadouche', 'Karim', 'Boumerdes', '0789654321', '0555432100', '0662441295', 'hadouchK@gmail.com', 'Enseignant', '1234', '1980-11-17'),
(6, 'gomri', 'Nabila', 'Alger', '0662345678', '0772345678', '', 'gomriN@gmail.com', 'Enseignant', 'gomri34', '1991-07-08'),
(7, 'kara', 'Meriem', 'Bouira', '0663546789', '0555667743', '', 'meriemK@gmail.com', 'Administrateur', 'kara2021', '1993-04-06'),
(8, 'chihab', 'Ahmed', 'blida', '0666778899', '', '', 'chihabA@gmail.com', 'Eleve', 'H768', '2003-01-03'),
(9, 'Loubar', 'Omar', 'Tipaza', '0789654333', '0552345678', '', 'LoubarO@gmail.com', 'Enseignant', 'loubar', '0000-00-00'),
(10, 'Hirech', 'Imane', 'Alger', '0667856534', '', '', 'HirechI@gmail.com', 'Enseignant', 'hirechI', '1983-06-08'),
(11, 'Kadem', 'Nora', 'Boumerdes', '0765432189', '', '', 'kademN@gmail.com', 'Enseignant', 'kadem45', '0000-00-00'),
(12, 'Habelhames', 'Khadidja', 'Boumerdes', '0778954321', '0664543278', '', 'khadidja@gmail.com', 'Eleve', '123', '1999-12-16'),
(13, 'Habelhames', 'Said', 'Boumerdes', '0666523488', '0664897694', '0553214578', 'saidH@gmail.com', 'Parent', 'said', '1960-03-04'),
(14, 'Karim', 'Draoui', 'Tipaza', '0789654321', '0555432100', '0662441290', 'karim@gmail.com', 'Parent', '1234', '1980-11-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`activiteID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`articleID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`coursID`);

--
-- Indexes for table `diaporama`
--
ALTER TABLE `diaporama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enseigner`
--
ALTER TABLE `enseigner`
  ADD PRIMARY KEY (`ensID`,`nomModule`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`moduleID`);

--
-- Indexes for table `paragraphe`
--
ALTER TABLE `paragraphe`
  ADD PRIMARY KEY (`ParagID`);

--
-- Indexes for table `restauration`
--
ALTER TABLE `restauration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`salleID`);

--
-- Indexes for table `tuteur`
--
ALTER TABLE `tuteur`
  ADD PRIMARY KEY (`tuteurID`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activite`
--
ALTER TABLE `activite`
  MODIFY `activiteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `articleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `diaporama`
--
ALTER TABLE `diaporama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `paragraphe`
--
ALTER TABLE `paragraphe`
  MODIFY `ParagID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `restauration`
--
ALTER TABLE `restauration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
