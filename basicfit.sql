-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 16 Septembre 2020 à 08:10
-- Version du serveur :  5.6.20-log
-- Version de PHP :  5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `basicfit`
--

-- --------------------------------------------------------

--
-- Structure de la table `informations`
--

CREATE TABLE IF NOT EXISTS `informations` (
`id_informations` int(11) NOT NULL,
  `name_informations` varchar(400) COLLATE utf8_bin NOT NULL,
  `add_informations` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=21 ;

--
-- Contenu de la table `informations`
--

INSERT INTO `informations` (`id_informations`, `name_informations`, `add_informations`) VALUES
(20, 'ec2b67d5467580f9f9fea7878374ced969f38129', '2020-09-16 10:08:30'),
(19, 'a6b21a4281226e8a97c2e05517fbe546775efc6a', '2020-09-16 10:07:55'),
(18, '190c4a70068f9453e2320b650e94869a1306adb0', '2020-09-16 10:06:56'),
(17, 'ed2efc1c05342a60c2198a5e96773a237008956b', '2020-09-16 10:02:37'),
(16, '97e01b6f38ed3790a7fed91dda9b2f288222e77d', '2020-09-16 10:01:52'),
(15, '2659fc519890c924f82b4475ddd71b058178d02b.json', '2020-09-16 10:01:07');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `informations`
--
ALTER TABLE `informations`
 ADD PRIMARY KEY (`id_informations`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `informations`
--
ALTER TABLE `informations`
MODIFY `id_informations` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
