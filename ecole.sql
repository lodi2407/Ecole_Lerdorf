-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 01 fév. 2021 à 17:51
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecole`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `num_article` int(11) NOT NULL,
  `titre_article` varchar(100) NOT NULL,
  `date_article` date NOT NULL,
  `contenu_article` varchar(8000) NOT NULL,
  `auteur_article` varchar(50) NOT NULL,
  `theme_article` varchar(50) NOT NULL,
  `code_themeArticles` int(11) NOT NULL,
  `resume_article` varchar(500) NOT NULL,
  `lienImage_article` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`num_article`, `titre_article`, `date_article`, `contenu_article`, `auteur_article`, `theme_article`, `code_themeArticles`, `resume_article`, `lienImage_article`) VALUES
(29, 'L\'accueil individualisé', '2021-01-04', 'Les assistantes maternelles sont agréées par le Département : elles reçoivent l’autorisation d’exercer cette profession après avoir reçu une formation de 60 heures dispensée par des professionnels. Un complément de formation de 60 heures est prévu dans les 2 ans suivant l’accueil du premier enfant.\r\n\r\nLes assistantes maternelles sont contrôlées et suivies par le service départemental compétent qui s’assure de leur état de santé et des conditions d’accueil.\r\n\r\nL’enfant trouve chez l’assistante maternelle un cadre sécurisant. La disponibilité de l’assistante maternelle lui permet de prendre en compte la personnalité et le rythme de chaque enfant. Elle noue une relation privilégiée avec l’enfant qui profite ainsi d’une ambiance familiale en compagnie d’autres enfants.', 'admin', '', 1, '', 'nursery.jpg'),
(30, 'Accueil de loisirs', '2020-10-05', 'Les accueils de loisirs prennent en charge les enfants le mercredi après-midi et pendant les vacances scolaires. Ils sont ouverts à tous les enfants habitant à Vincennes ou scolarisés dans une école publique ou privée, de leur entrée en maternelle jusqu’au CM2.\r\n\r\nÀ la rentrée, les équipes des accueils de loisirs invitent les parents à une réunion d’information. Elles restent toute l’année à la disposition des familles, pour échanger et communiquer sur les activités proposées.\r\n\r\nPour être admis en accueil de loisirs et accueil périscolaire, l’enfant doit obligatoirement être inscrit.\r\nConcernant les vacances scolaires, une réservation est nécessaire en plus de l’inscription obligatoire. Afin de pouvoir respecter les règles de sécurité et d’encadrement auxquelles sont soumis les accueils de loisirs, et organiser des activités et sorties en conséquence, il est impératif de réserver la place de votre enfant pour les vacances scolaires, au moins 15 jours avant , en précisant les dates auxquelles il sera présent.', 'admin', '', 1, '', 'loisirs.jpg'),
(34, 'Les séjours de vacances', '2020-10-05', 'Des mini-séjours sont organisés pour les enfants âgés de 4 à 6 ans fréquentant en accueil de loisirs maternels. Encadrés par des animateurs que les enfants connaissent, ils sont de courte durée (5 jours maximum). Ils ont lieu durant les vacances scolaires. Pendant les vacances d\'hiver, des séjours sports d’hiver sont organisés. Pendant les vacances de printemps, un séjour à dominante culturelle, artistique ou en lien avec la découverte du milieu naturel est organisé pour les 6-14 ans (ateliers scientifiques et escape game en 2020). L’été, pour les 6-17 ans, la ville propose une vaste palette de séjours , organisés par des prestataires extérieurs : séjours à la mer, à la campagne ou à la montagne, avec des thématiques variées (équitation, séjour sportif pour les enfants ; séjours linguistiques et de découverte d’un pays pour les adolescents).', 'enseignants', '', 2, '', 'holidays.jpg'),
(35, 'La culture pour les jeunes', '2020-11-25', 'Le réseau des médiathèques de la ville, composé de 3 bibliothèques de quartier et de la médiathèque à Cœur de ville, met à la disposition du jeune public des espaces de lecture, de travail et des collections spécifiques : romans, bandes dessinées, albums, CD, DVD, contes en tous genres sont réunis pour satisfaire les appétits de lecture des tout-petits jusqu\'à ceux des adolescents.\r\n\r\nToutes les médiathèques proposent des postes internet avec des sites de jeux et de recherche spécialement conçus pour les jeunes. À Cœur de ville, la médiathèque dispose également d’un espace numérique qui organise ponctuellement des ateliers pour eux.\r\n\r\nDes animations pour la jeunesse sont par ailleurs régulièrement organisées : séances de lecture (Croc’histoire pour les 2/3 ans et les 3/6 ans, L\'Heure du Conte pour les 4/7 ans), spectacles, ateliers, rencontres avec des écrivains, Bibliothèques au jardin, club de lecture ado, expositions.\r\n\r\n En dehors des horaires d’ouverture au public, les bibliothécaires accueillent régulièrement des crèches ainsi que des classes de lycée, de collège et des écoles primaires.', 'enseignants', '', 2, '', 'biblio.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `inscriptionnewsletter`
--

CREATE TABLE `inscriptionnewsletter` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `inscriptionnewsletter`
--

INSERT INTO `inscriptionnewsletter` (`id`, `nom`, `prenom`, `email`) VALUES
(2, 'Sinart', 'Axel', 's.axel@gmail.com'),
(3, 'Lepart', 'Amélie', 'amelie.lepart@laposte.net'),
(4, 'Poidier', 'Jeanne', 'j.poidier@hotmail.fr');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id_questions` int(11) NOT NULL,
  `objet_questions` varchar(500) DEFAULT NULL,
  `contenu_questions` varchar(2000) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `tarifscantine`
--

CREATE TABLE `tarifscantine` (
  `code_tarif` int(11) NOT NULL,
  `tarif` float NOT NULL,
  `libelle` varchar(50) NOT NULL,
  `description_tarif` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tarifscantine`
--

INSERT INTO `tarifscantine` (`code_tarif`, `tarif`, `libelle`, `description_tarif`) VALUES
(1, 3.3, '1er et 2ème enfant', ''),
(2, 2.18, '3ème enfant', ''),
(3, 1.08, '', 'l\'accueil à la cantine pour les enfants, qui pour raison médicale uniquement, devront apporter leur repas.'),
(4, 1.03, '', 'Montant de la majoration pour tout repas non réservé.');

-- --------------------------------------------------------

--
-- Structure de la table `themearticles`
--

CREATE TABLE `themearticles` (
  `code_themeArticles` int(11) NOT NULL,
  `intitule_themeArticles` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `themearticles`
--

INSERT INTO `themearticles` (`code_themeArticles`, `intitule_themeArticles`) VALUES
(1, 'infos'),
(2, 'activites');

-- --------------------------------------------------------

--
-- Structure de la table `typesuser`
--

CREATE TABLE `typesuser` (
  `code_typeUtilisateurs` int(11) NOT NULL,
  `intitule_typeUser` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `typesuser`
--

INSERT INTO `typesuser` (`code_typeUtilisateurs`, `intitule_typeUser`) VALUES
(1, 'administrateur'),
(2, 'mairie'),
(3, 'enseignants'),
(4, 'parentsEleves'),
(5, 'deleguesParents'),
(6, 'invite');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nom_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `code_typeUtilisateurs` int(11) NOT NULL,
  `mdp_user` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`num_article`),
  ADD KEY `articles_themeArticles_FK` (`code_themeArticles`);

--
-- Index pour la table `inscriptionnewsletter`
--
ALTER TABLE `inscriptionnewsletter`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id_questions`);

--
-- Index pour la table `tarifscantine`
--
ALTER TABLE `tarifscantine`
  ADD PRIMARY KEY (`code_tarif`);

--
-- Index pour la table `themearticles`
--
ALTER TABLE `themearticles`
  ADD PRIMARY KEY (`code_themeArticles`);

--
-- Index pour la table `typesuser`
--
ALTER TABLE `typesuser`
  ADD PRIMARY KEY (`code_typeUtilisateurs`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `utilisateurs_typesUtilisateurs_FK` (`code_typeUtilisateurs`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `num_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT pour la table `inscriptionnewsletter`
--
ALTER TABLE `inscriptionnewsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id_questions` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tarifscantine`
--
ALTER TABLE `tarifscantine`
  MODIFY `code_tarif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_themeArticles_FK` FOREIGN KEY (`code_themeArticles`) REFERENCES `themearticles` (`code_themeArticles`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `utilisateurs_typesUtilisateurs_FK` FOREIGN KEY (`code_typeUtilisateurs`) REFERENCES `typesuser` (`code_typeUtilisateurs`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
