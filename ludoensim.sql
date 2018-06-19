-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 19 juin 2018 à 20:43
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ludoensim`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherents`
--

DROP TABLE IF EXISTS `adherents`;
CREATE TABLE IF NOT EXISTS `adherents` (
  `IDCLIENT` int(5) NOT NULL,
  `NOM` varchar(20) CHARACTER SET latin1 NOT NULL,
  `PRENOM` varchar(20) CHARACTER SET latin1 NOT NULL,
  `DATEFINADHESION` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `adherents`
--

INSERT INTO `adherents` (`IDCLIENT`, `NOM`, `PRENOM`, `DATEFINADHESION`) VALUES
(1, 'MORGANT', 'VICTOR', '2019-09-09'),
(2, 'DUPONT', 'JEAN', '2018-09-09'),
(3, 'PLAYGIQUE', 'AMY', '2019-06-17'),
(4, 'TRUAND', 'ANTHONY', '2019-06-17'),
(5, 'ESTPAYER', 'MADETH', '2019-06-17');

-- --------------------------------------------------------

--
-- Structure de la table `jeux`
--

DROP TABLE IF EXISTS `jeux`;
CREATE TABLE IF NOT EXISTS `jeux` (
  `IDJEU` int(5) NOT NULL,
  `NOMJEU` varchar(20) CHARACTER SET latin1 NOT NULL,
  `AGEMIN` int(2) NOT NULL,
  `AGEMAX` int(2) NOT NULL,
  `TYPE` varchar(20) CHARACTER SET latin1 NOT NULL,
  `DESCRIPTION` text CHARACTER SET latin1 NOT NULL,
  `NBBOITE` int(2) NOT NULL,
  `NBDISPO` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `jeux`
--

INSERT INTO `jeux` (`IDJEU`, `NOMJEU`, `AGEMIN`, `AGEMAX`, `TYPE`, `DESCRIPTION`, `NBBOITE`, `NBDISPO`) VALUES
(1, 'battlestar galactica', 10, 99, 'strategie', 'Après l\'attaque des Cylons sur les Colonies, les survivants exsangues de la race humaine sont en fuite, à la recherche de la Terre. Ils font face à la menace extérieure d\'une attaque des Cylons, et à la menace intérieure d\'une crise et d\'une trahison. \r\nL\'humanité doit travailler de concert si elle veut avoir un espoir de survie... mais comment faire quand elle peut abriter en son sein un agent Cylon ? Battlestar Galactica est un jeu de suspicion, d\'intrigues et de lutte pour la survie de l\’humanité. Devenez Amiral de la Flotte Coloniale, Président des Colonies, ou pilote de Viper. La race humaine aura besoin de chacun d\'entre vous pour survivre... sauf si vous êtes un Cylon, bien sûr', 3, 3),
(2, 'Blanc Manger Coco', 18, 99, 'humour', 'Parce qu\'on ne rit jamais assez, parce qu\'on a le droit de rire de TOUT, nous avons créé Blanc-manger Coco, le jeu parfait pour animer vos apéros. Un joueur lit une carte question, une phrase à trou, et les autres complètent la phrase en proposant, face cachée, une carte réponse. Le joueur qui a lu la question, choisit la réponse qu\'il préfère et désigne ainsi le vainqueur de la manche. Toute la magie du jeu réside dans le décalage total entre questions et réponses : vous verrez par vous-même.', 3, 3),
(3, 'Loups-Garous', 0, 99, 'strategie', 'Les nuits ne sont pas sûres dans le petit hameau de Thiercelieux. D\'atroces meurtres sont commis par des villageois lycanthropes.\r\nThiercelieux, bourgade tranquille.\r\nLe jeu est composé de 24 cartes permettant de faire jouer jusqu\'à 18 personnes et un meneur de jeu. Ces cartes indiquent le type de personnages que chaque joueur va incarner durant la partie dirigée par le meneur.', 4, 4);

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

DROP TABLE IF EXISTS `profil`;
CREATE TABLE IF NOT EXISTS `profil` (
  `LOGIN` varchar(20) CHARACTER SET latin1 NOT NULL,
  `MDP` varchar(20) CHARACTER SET latin1 NOT NULL,
  `ADMIN` tinyint(1) DEFAULT NULL,
  `ID` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `profil`
--

INSERT INTO `profil` (`LOGIN`, `MDP`, `ADMIN`, `ID`) VALUES
('admin', 'admin', 1, 1),
('jdupont', 'azerty', 0, 2),
('mestpayer', 'ESTPAYER', 0, 5),
('atruand', 'TRUAND', 1, 4),
('aplaygique', 'PLAYGIQUE', 0, 3);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `ID` int(15) NOT NULL,
  `DATE` date NOT NULL,
  `IDJEU` int(5) NOT NULL,
  `IDADHERENT` int(5) NOT NULL,
  `DATEFIN` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`ID`, `DATE`, `IDJEU`, `IDADHERENT`, `DATEFIN`) VALUES
(1, '2018-06-19', 2, 2, '2018-07-03'),
(2, '2018-06-19', 1, 2, '2018-07-03'),
(3, '2018-06-19', 1, 1, '2018-07-03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
