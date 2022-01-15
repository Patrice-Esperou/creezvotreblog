-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 07 oct. 2021 à 11:23
-- Version du serveur : 10.4.19-MariaDB
-- Version de PHP : 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blackblog2`
--

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `createdAt` datetime NOT NULL,
  `article_id` int(11) NOT NULL,
  `is_valid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `pseudo`, `content`, `createdAt`, `article_id`, `is_valid`) VALUES
(1, 'Jean', 'Génial, hâte de voir ce que ça donne !', '2019-03-16 21:02:24', 1, 0),
(2, 'Nina', 'Trop cool ! depuis le temps', '2019-03-17 17:34:35', 1, 0),
(3, 'Rodrigo', 'Great ! ', '2019-03-17 17:42:04', 1, 0),
(4, 'Hélène', 'je suis heureuse de découvrir un super site ! Continuez comme ça ', '2019-03-18 12:08:37', 2, 0),
(5, 'Moussa', 'Un peu déçu par le contenu pour le moment...', '2019-03-18 03:09:02', 2, 0),
(6, 'Barbara', 'pressée de voir la suite', '2019-03-18 10:05:58', 2, 0),
(7, 'Guillaume', 'Je viens ici pour troller !', '2019-03-19 21:08:44', 3, 0),
(8, 'Aurore', 'Enfin un blog tranquille, où on ne nous casse pas les pieds !', '2019-03-19 21:09:27', 3, 0),
(9, 'Jordane', 'Je suis vendéen ! Amateur de mojettes !', '2019-03-20 10:10:11', 3, 0),
(10, 'moi', 'encore 1 test', '2021-10-03 16:26:15', 3, 0),
(12, 'loulou', 'ceci est un message', '2021-10-03 17:06:45', 3, 0),
(20, 'loulou', 'prend t\'il l\'heure de modification?', '2021-10-04 10:03:42', 1, 0),
(21, 'poumpoum', 'ajout 1 comment', '2021-10-04 10:04:57', 3, 0),
(22, 'lili', 'fffffffffffff', '2021-10-04 11:18:20', 12, 0),
(23, 'gggggg', 'gggggggggggg', '2021-10-04 11:39:53', 12, 0),
(24, 'llllllllll', 'llllllllllllll', '2021-10-04 12:27:29', 12, 0),
(25, 'lul', 'bof va partir chez admin', '2021-10-04 15:51:28', 12, 0),
(26, 'lili', 'test emoticone', '2021-10-04 18:58:45', 12, 0),
(27, 'lili', 'test emoticone', '2021-10-04 18:59:13', 12, 0),
(28, 'moi', 'iciiiiiiiii', '2021-10-06 07:51:27', 12, 0),
(29, 'lulu', 'va t\'il aller sur admin?', '2021-10-06 08:14:25', 12, 0),
(30, 'padraig', 'j\'ajoute', '2021-10-06 18:49:59', 15, 0),
(31, 'encore', 'test sort de la div', '2021-10-06 18:51:55', 15, 0),
(32, 'padraig', 'test margin border radius uuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu', '2021-10-06 19:26:19', 15, 0),
(33, 'padraig', 'ajoute comm', '2021-10-07 08:01:24', 15, 0),
(34, 'padraig', 'test message info', '2021-10-07 08:11:43', 15, 0),
(35, 'lulu', 'ici', '2021-10-07 11:07:27', 15, 0),
(36, 'vvvvv', 'vvvvvvvvvv', '2021-10-07 11:08:07', 15, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_article_id` (`article_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_article_id` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
