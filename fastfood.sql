-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 21 fév. 2020 à 11:59
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `fastfood`
--

-- --------------------------------------------------------

--
-- Structure de la table `admettres`
--

CREATE TABLE `admettres` (
  `IdPanier` int(11) NOT NULL DEFAULT 1,
  `IdProduit` int(11) NOT NULL,
  `Quantite` int(11) NOT NULL DEFAULT 1,
  `PrixTotalPanier` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `title`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mimi', 'mimisfood@gmail.com', 'Administrateur', '$2y$10$R3IodCBegIQyvyKelCPYj.nqFq0JALsvxF.6XjSdbxpfR2T43Vi02', 'UlVV1nFOpdSYkkr7xfzkCm1aWuROOBdzmLlNr5tydTTvxcsui42lYLaTcwjS', '2020-02-19 06:52:46', '2020-02-19 06:52:46');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `IdClt` int(10) UNSIGNED NOT NULL,
  `NomClt` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PrenomomCl` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SexeClt` enum('M','F') COLLATE utf8mb4_unicode_ci NOT NULL,
  `DateNaissClt` date DEFAULT NULL,
  `TelClt` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EmailClt` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PaysClt` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `VilleClt` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AdresseClt` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`IdClt`, `NomClt`, `PrenomomCl`, `SexeClt`, `DateNaissClt`, `TelClt`, `EmailClt`, `PaysClt`, `VilleClt`, `AdresseClt`, `id`) VALUES
(114, 'DJITONGUE', 'Saratou', 'M', NULL, '93272407', 'saratoudjitongue23@gmail.com', 'Togo', 'Lomé', 'Vapkossito', 10);

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id` int(10) UNSIGNED NOT NULL,
  `DateCommande` date DEFAULT NULL,
  `PrixTotalCommande` double DEFAULT NULL,
  `EtatCommande` tinyint(1) NOT NULL DEFAULT 0,
  `IdClt` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`id`, `DateCommande`, `PrixTotalCommande`, `EtatCommande`, `IdClt`) VALUES
(103, '2020-02-20', 2800, 1, 10);

-- --------------------------------------------------------

--
-- Structure de la table `conserners`
--

CREATE TABLE `conserners` (
  `IdCommande` int(11) NOT NULL,
  `IdProduit` int(11) NOT NULL,
  `Quantite` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `conserners`
--

INSERT INTO `conserners` (`IdCommande`, `IdProduit`, `Quantite`) VALUES
(103, 14, 1),
(103, 7, 1);

-- --------------------------------------------------------

--
-- Structure de la table `factures`
--

CREATE TABLE `factures` (
  `IdFacture` int(10) UNSIGNED NOT NULL,
  `DateFacture` date NOT NULL,
  `PrixTotalFacture` double NOT NULL,
  `EtatFacture` tinyint(1) NOT NULL DEFAULT 0,
  `IdClt` int(11) NOT NULL,
  `IdCommande` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `livraisons`
--

CREATE TABLE `livraisons` (
  `IdLivraison` int(10) UNSIGNED NOT NULL,
  `DateLivraison` date NOT NULL,
  `PrixTotalLivraison` double NOT NULL,
  `EtatLivraison` tinyint(1) NOT NULL DEFAULT 0,
  `LieuLivraison` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdClt` int(11) NOT NULL,
  `IdCommande` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `livraisons`
--

INSERT INTO `livraisons` (`IdLivraison`, `DateLivraison`, `PrixTotalLivraison`, `EtatLivraison`, `LieuLivraison`, `IdClt`, `IdCommande`) VALUES
(6, '2020-02-20', 500, 1, 'vakpossito', 10, 103);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(32, '2014_10_12_000000_create_users_table', 1),
(33, '2014_10_12_100000_create_password_resets_table', 1),
(34, '2018_07_05_172905_create_paniers_table', 1),
(35, '2018_07_05_172929_create_clients_table', 1),
(36, '2018_07_05_172946_create_type_produits_table', 1),
(37, '2018_07_05_173002_create_produits_table', 1),
(38, '2018_07_05_173028_create_commandes_table', 1),
(39, '2018_07_05_173045_create_factures_table', 1),
(40, '2018_07_05_173057_create_livraisons_table', 1),
(41, '2018_07_05_173111_create_admettres_table', 1),
(42, '2018_08_07_113243_create_conserners_table', 1),
(43, '2018_08_16_120026_create_admins_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `paniers`
--

CREATE TABLE `paniers` (
  `id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `paniers`
--

INSERT INTO `paniers` (`id`) VALUES
(1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(10) UNSIGNED NOT NULL,
  `NomProduit` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PrixProduit` double NOT NULL,
  `ImageProduit` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DetailsProduit` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdTypeProduit` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `NomProduit`, `PrixProduit`, `ImageProduit`, `DetailsProduit`, `IdTypeProduit`) VALUES
(2, 'Pizza', 3000, 'Food15_1534104542.jpg', 'hcvdj\"', 1),
(3, 'Poulet entier', 4500, 'Food26_1534171010.jpg', 'un poulet en entier', 1),
(4, 'Cocktail', 500, 'Food36_1534405984.jpg', 'rafraichissement', 3),
(5, 'Creme', 1500, 'Food08_1534406035.jpg', 'laitier', 2),
(6, 'Chocolat noir', 800, 'Food34_1534406087.jpg', 'caramele', 4),
(7, 'Sirop au citron', 800, 'Food27_1534408932.jpg', 'boisson sans alcool', 3),
(8, 'Croissant', 750, 'Food38_1534408960.jpg', 'gxshx', 1),
(10, 'Omelette', 300, 'Food07_1534409057.jpg', 'nbhjj', 1),
(11, 'Riz', 1200, 'Food30_1534409119.jpg', 'gbchjd', 1),
(12, 'Fritte au poulet', 2500, 'Food19_1534409148.jpg', 'bhb', 1),
(13, 'Salade Vegetarien', 3200, 'Food29_1534611171.jpg', 'hjuk', 1),
(14, 'Big Burger', 2000, 'Food16_1534616974.jpg', 'big', 1),
(17, 'Riz au poulet', 1500, 'Food28_1535038186.jpg', 'plat de résistance\"\"', 1);

-- --------------------------------------------------------

--
-- Structure de la table `type_produits`
--

CREATE TABLE `type_produits` (
  `IdTypeProduit` int(10) UNSIGNED NOT NULL,
  `NomTypeProduit` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DetailtTypeProduit` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type_produits`
--

INSERT INTO `type_produits` (`IdTypeProduit`, `NomTypeProduit`, `DetailtTypeProduit`) VALUES
(1, 'Plat', 'Bon'),
(2, 'Creme', 'kn;jnbkh'),
(3, 'Boisson', 'knk'),
(4, 'Patisserie', 'bkj');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(10, 'DJITONGUE Saratou', 'saratoudjitongue23@gmail.com', '$2y$10$Y8htIO.yq8i5BTmNAV7HZOArVJu3g7moy9hA.Ebe2E4JrfxpeqaV6', 'SX6qhrj2jJ3T1P9yl0G0MlpF2af0aHkZ6ZcM9D1c3tIsgmAYv4WL8m4JcitL', '2020-02-20 10:15:12', '2020-02-20 10:15:12');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admettres`
--
ALTER TABLE `admettres`
  ADD KEY `admettres_idpanier_foreign` (`IdPanier`),
  ADD KEY `admettres_idproduit_foreign` (`IdProduit`);

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`IdClt`),
  ADD KEY `clients_id_foreign` (`id`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commandes_idclt_foreign` (`IdClt`);

--
-- Index pour la table `conserners`
--
ALTER TABLE `conserners`
  ADD KEY `conserners_idcommande_foreign` (`IdCommande`),
  ADD KEY `conserners_idproduit_foreign` (`IdProduit`);

--
-- Index pour la table `factures`
--
ALTER TABLE `factures`
  ADD PRIMARY KEY (`IdFacture`),
  ADD KEY `factures_idclt_foreign` (`IdClt`),
  ADD KEY `factures_idcommande_foreign` (`IdCommande`);

--
-- Index pour la table `livraisons`
--
ALTER TABLE `livraisons`
  ADD PRIMARY KEY (`IdLivraison`),
  ADD KEY `livraisons_idclt_foreign` (`IdClt`),
  ADD KEY `livraisons_idcommande_foreign` (`IdCommande`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `paniers`
--
ALTER TABLE `paniers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produits_idtypeproduit_foreign` (`IdTypeProduit`);

--
-- Index pour la table `type_produits`
--
ALTER TABLE `type_produits`
  ADD PRIMARY KEY (`IdTypeProduit`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `IdClt` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT pour la table `factures`
--
ALTER TABLE `factures`
  MODIFY `IdFacture` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `livraisons`
--
ALTER TABLE `livraisons`
  MODIFY `IdLivraison` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT pour la table `paniers`
--
ALTER TABLE `paniers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `type_produits`
--
ALTER TABLE `type_produits`
  MODIFY `IdTypeProduit` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
