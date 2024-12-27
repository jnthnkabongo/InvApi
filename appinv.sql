-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 23 déc. 2024 à 20:33
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `appinv`
--

-- --------------------------------------------------------

--
-- Structure de la table `auth_controllers`
--

CREATE TABLE `auth_controllers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `clientadresses`
--

CREATE TABLE `clientadresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `commune_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `communes`
--

CREATE TABLE `communes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `ville_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `etatitems`
--

CREATE TABLE `etatitems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etatitems`
--

INSERT INTO `etatitems` (`id`, `state`, `created_at`, `updated_at`) VALUES
(1, 'Tres bon', '2024-12-22 15:29:37', '2024-12-22 15:29:37'),
(2, 'bon', '2024-12-22 15:29:37', '2024-12-22 15:29:37');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inventaires`
--

CREATE TABLE `inventaires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` varchar(255) NOT NULL,
  `date_inventaire` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `inventaires`
--

INSERT INTO `inventaires` (`id`, `user_id`, `item_id`, `date_inventaire`, `created_at`, `updated_at`) VALUES
(1, 1, '12345262626262', '2024-12-17', '2024-12-17 18:01:09', '2024-12-17 18:01:09'),
(2, 1, '435678', '2024-12-23', '2024-12-23 17:27:00', '2024-12-23 17:27:00');

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `type_item_id` int(11) NOT NULL,
  `quantite_id` int(11) NOT NULL,
  `lot_id` int(11) NOT NULL,
  `numero_unique` varchar(255) NOT NULL,
  `status_item_id` int(11) NOT NULL,
  `etat_item_id` int(11) NOT NULL,
  `localisation_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `type_item_id`, `quantite_id`, `lot_id`, `numero_unique`, `status_item_id`, `etat_item_id`, `localisation_id`, `created_at`, `updated_at`) VALUES
(1, 'bpower', 'sedtrfygu', 1, 1, 1, '5cdrfes5634', 1, 1, 1, '2024-12-19 13:23:04', '2024-12-19 13:23:04'),
(2, 'solar hd', 'panneaux solaires pluei', 1, 3, 1, '2345678', 1, 2, 1, '2024-12-22 14:35:25', '2024-12-22 15:09:47');

-- --------------------------------------------------------

--
-- Structure de la table `localisations`
--

CREATE TABLE `localisations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `localisations`
--

INSERT INTO `localisations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'hq', '2024-12-19 13:55:52', '2024-12-19 13:55:52'),
(2, 'dc', '2024-12-19 13:55:52', '2024-12-19 13:55:52'),
(3, 'shop', '2024-12-21 22:27:50', '2024-12-21 22:27:50'),
(4, 'rc', '2024-12-21 22:27:50', '2024-12-21 22:27:50');

-- --------------------------------------------------------

--
-- Structure de la table `lots`
--

CREATE TABLE `lots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lot_number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `lots`
--

INSERT INTO `lots` (`id`, `lot_number`, `created_at`, `updated_at`) VALUES
(1, 1234, '2024-12-22 15:30:21', '2024-12-22 15:30:21'),
(2, 2345, '2024-12-22 15:30:21', '2024-12-22 15:30:21');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_11_22_142221_create_auth_controllers_table', 1),
(6, '2016_06_01_000001_create_oauth_auth_codes_table', 2),
(7, '2016_06_01_000002_create_oauth_access_tokens_table', 2),
(8, '2016_06_01_000003_create_oauth_refresh_tokens_table', 2),
(9, '2016_06_01_000004_create_oauth_clients_table', 2),
(10, '2016_06_01_000005_create_oauth_personal_access_clients_table', 2),
(11, '2024_12_11_214626_create_roles_table', 3),
(12, '2024_12_11_214648_create_regions_table', 3),
(13, '2024_12_11_214710_create_clientadresses_table', 3),
(14, '2024_12_11_214723_create_provinces_table', 3),
(15, '2024_12_11_214739_create_villes_table', 3),
(16, '2024_12_11_214746_create_communes_table', 3),
(17, '2024_12_11_214758_create_localisations_table', 3),
(18, '2024_12_11_214815_create_statusitems_table', 3),
(19, '2024_12_11_214823_create_items_table', 3),
(20, '2024_12_11_214836_create_inventaires_table', 3),
(21, '2024_12_11_214847_create_quantites_table', 3),
(22, '2024_12_11_214856_create_lots_table', 3),
(23, '2024_12_11_214907_create_typesitems_table', 3),
(24, '2024_12_11_214917_create_etatitems_table', 3),
(25, '2012_12_21_181901_create_shops_table', 4);

-- --------------------------------------------------------

--
-- Structure de la table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `secret` varchar(100) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `redirect` text NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'hHmsTPzUwqGHeY7yA5nI9rDlMVULDNrlXyL5friC', NULL, 'http://localhost', 1, 0, 0, '2024-11-24 00:06:16', '2024-11-24 00:06:16'),
(2, NULL, 'Laravel Password Grant Client', 'F5nT5CQMzTnEQNi4BCLd9Fo2NJoZwq09aiLq888X', 'users', 'http://localhost', 0, 1, 0, '2024-11-24 00:06:16', '2024-11-24 00:06:16'),
(3, NULL, 'Laravel Personal Access Client', 'SkgyYjR9HFq6RoIdG3G3SRzqg7YACKLrzGrfhuxv', NULL, 'http://localhost', 1, 0, 0, '2024-11-24 00:08:30', '2024-11-24 00:08:30'),
(4, NULL, 'Laravel Password Grant Client', '3ez8f4ergriBLTZmUdpO22sTNu9yIpKSQEPsKSPW', 'users', 'http://localhost', 0, 1, 0, '2024-11-24 00:08:30', '2024-11-24 00:08:30');

-- --------------------------------------------------------

--
-- Structure de la table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2024-11-24 00:06:16', '2024-11-24 00:06:16'),
(2, 3, '2024-11-24 00:08:30', '2024-11-24 00:08:30');

-- --------------------------------------------------------

--
-- Structure de la table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) NOT NULL,
  `access_token_id` varchar(100) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(34, 'App\\Models\\User', 1, 'auth_token', '5f8fcae0ce87fa04e052e5c8d8389ab4ebfde4ae2835718fa3a0c5f189a39458', '[\"*\"]', '2024-12-17 18:01:09', NULL, '2024-11-25 19:42:13', '2024-12-17 18:01:09'),
(35, 'App\\Models\\User', 1, 'auth_token', '576f13f4c4e5d4906881f33cd2105cbd133886da975f560952afdb5f0ab8900e', '[\"*\"]', NULL, NULL, '2024-11-27 16:46:54', '2024-11-27 16:46:54'),
(36, 'App\\Models\\User', 1, 'auth_token', '18f550ca8aaf0b53bfe23b5a3b3687fa2de716e3d9610c8245cfabed99a20a45', '[\"*\"]', NULL, NULL, '2024-11-27 16:56:57', '2024-11-27 16:56:57'),
(37, 'App\\Models\\User', 1, 'auth_token', 'bb0d6a19a80b9ded5f63d41270a525dd3d1daa17ea62678e44ca7bd4de1fdc39', '[\"*\"]', NULL, NULL, '2024-11-27 17:02:07', '2024-11-27 17:02:07'),
(38, 'App\\Models\\User', 1, 'auth_token', 'a6de7f6492da4710d0022a5410c3511154aaed0f2402f183bdbfbaff50440a96', '[\"*\"]', NULL, NULL, '2024-11-27 17:05:02', '2024-11-27 17:05:02'),
(39, 'App\\Models\\User', 1, 'auth_token', 'e3b12b195710f0e467cb2beed976cc913018f88360ae0b1575b416e833269ea1', '[\"*\"]', NULL, NULL, '2024-11-27 17:10:55', '2024-11-27 17:10:55'),
(40, 'App\\Models\\User', 1, 'auth_token', '77275161156173d303db7940b78727a52eed49fdb519bf6384b6f7b6c51f01b8', '[\"*\"]', NULL, NULL, '2024-11-27 17:17:10', '2024-11-27 17:17:10'),
(41, 'App\\Models\\User', 1, 'auth_token', 'a007923307278d091e7cd0b4557d5e732c498dd232359eb606c643265c062869', '[\"*\"]', NULL, NULL, '2024-11-27 17:21:09', '2024-11-27 17:21:09'),
(42, 'App\\Models\\User', 1, 'auth_token', 'b066108d9fcb908a147efd5914a5f7eed5868dbfeb0d3ce71da175c17a693cdd', '[\"*\"]', NULL, NULL, '2024-11-27 17:22:13', '2024-11-27 17:22:13'),
(43, 'App\\Models\\User', 1, 'auth_token', '43e021c5830c617dad3a44c22be5e1a30a824cc40cabab00977bfad431de12fa', '[\"*\"]', NULL, NULL, '2024-11-27 19:02:34', '2024-11-27 19:02:34'),
(44, 'App\\Models\\User', 1, 'auth_token', '51a99f55461ee4fb6b633fc146675c35bca9300a33fd9fa39917954200a2fcd3', '[\"*\"]', NULL, NULL, '2024-12-02 18:47:38', '2024-12-02 18:47:38'),
(45, 'App\\Models\\User', 1, 'auth_token', '4dc1859bd4e9ae8e7b4cf0be7ba3caa31b41dce652f51cc470e2d2593d44e0b1', '[\"*\"]', NULL, NULL, '2024-12-02 19:03:56', '2024-12-02 19:03:56'),
(46, 'App\\Models\\User', 1, 'auth_token', 'c151acdf2b96096a952e84cb78f0083e343813890f8331cf77fbeff4998d4abb', '[\"*\"]', '2024-12-02 19:17:12', NULL, '2024-12-02 19:11:15', '2024-12-02 19:17:12'),
(47, 'App\\Models\\User', 1, 'auth_token', 'cb4b4eb73e5ab924344c18e2cf2644059300cacd67e715358b12f73d3a8af7f9', '[\"*\"]', NULL, NULL, '2024-12-02 19:17:22', '2024-12-02 19:17:22'),
(48, 'App\\Models\\User', 1, 'auth_token', '52c033ca0a8f61da9d0f69dbdaf1d1d74e8d9cd7174bf88a858f1f0ad8948228', '[\"*\"]', NULL, NULL, '2024-12-02 19:17:38', '2024-12-02 19:17:38'),
(49, 'App\\Models\\User', 1, 'auth_token', '76e88273b8b846c2442449d265a156eb340d224cbf8a8a05ae49535991db1870', '[\"*\"]', NULL, NULL, '2024-12-02 19:26:11', '2024-12-02 19:26:11'),
(50, 'App\\Models\\User', 1, 'auth_token', '95d861427069a294bc7aec143c122d96066bcded500576abf39ef425e35b9054', '[\"*\"]', NULL, NULL, '2024-12-02 19:31:38', '2024-12-02 19:31:38'),
(51, 'App\\Models\\User', 1, 'auth_token', '9570be16d6203d5547b4b55c99b992f13ad4a84112d764ed794a5a6cf7e10acf', '[\"*\"]', NULL, NULL, '2024-12-02 19:35:27', '2024-12-02 19:35:27'),
(52, 'App\\Models\\User', 1, 'auth_token', '63dd6896b1b5f70e0b48fb2bec18198cfc76fe097cb5e245da749ab8af9445c2', '[\"*\"]', NULL, NULL, '2024-12-02 19:38:20', '2024-12-02 19:38:20'),
(53, 'App\\Models\\User', 1, 'auth_token', 'b09f40bb57f1ec80171d268ea4f674456dde9dcab694a68fb3189e32a13bccf9', '[\"*\"]', NULL, NULL, '2024-12-02 19:45:40', '2024-12-02 19:45:40'),
(54, 'App\\Models\\User', 1, 'auth_token', '69298a6331a0639574d21ae66c587f17bfe3b0a10d98b8ad02df655baa5eb54e', '[\"*\"]', NULL, NULL, '2024-12-02 19:47:16', '2024-12-02 19:47:16'),
(55, 'App\\Models\\User', 1, 'auth_token', '1dfce73f3fb09239cd3c9da45eb2627c63ce10057fec1d102c54e94faaa9cee9', '[\"*\"]', NULL, NULL, '2024-12-02 19:48:03', '2024-12-02 19:48:03'),
(56, 'App\\Models\\User', 1, 'auth_token', '34a61b873f9732fc97dc118d4f823ad6243b7da2e821a862bab97ba322e59d28', '[\"*\"]', NULL, NULL, '2024-12-03 16:24:36', '2024-12-03 16:24:36'),
(57, 'App\\Models\\User', 1, 'auth_token', '7a4cc84220fed9ec2648322de0cb3a43d8c129976368b1f1196c2e21322247fe', '[\"*\"]', NULL, NULL, '2024-12-03 16:25:37', '2024-12-03 16:25:37'),
(58, 'App\\Models\\User', 1, 'auth_token', '00d26f70cdea8d6117be1961065db286cd9c19905063d8c6103a15cdd51c2250', '[\"*\"]', NULL, NULL, '2024-12-03 16:31:09', '2024-12-03 16:31:09'),
(59, 'App\\Models\\User', 1, 'auth_token', '755cc0ad7215271b200dfd07920d81a5240873e67c33b5c7696aca73b5be81bd', '[\"*\"]', NULL, NULL, '2024-12-03 16:32:29', '2024-12-03 16:32:29'),
(60, 'App\\Models\\User', 1, 'auth_token', '6cd256024b5dc1688ad4a8d119acab413e2ea4bda0d0ff585e3a026878802fe4', '[\"*\"]', NULL, NULL, '2024-12-03 16:33:55', '2024-12-03 16:33:55'),
(61, 'App\\Models\\User', 1, 'auth_token', '94f77792a979e1e3be8a9bfb86cdc807ae223d109e1ce3dac4ec3966dca383f9', '[\"*\"]', NULL, NULL, '2024-12-03 16:34:18', '2024-12-03 16:34:18'),
(62, 'App\\Models\\User', 1, 'auth_token', '4cddf146c97815e707dd4ce7ae524ceaeb12863968518dc4db0b5cc89e7a7c8c', '[\"*\"]', NULL, NULL, '2024-12-03 16:34:42', '2024-12-03 16:34:42'),
(63, 'App\\Models\\User', 1, 'auth_token', '89ee18efa33427928f8fbb1a778f9f46fde4e5e5f1521a7ff200658c8f757578', '[\"*\"]', NULL, NULL, '2024-12-03 16:39:29', '2024-12-03 16:39:29'),
(64, 'App\\Models\\User', 1, 'auth_token', '215a2778b3f14e96a28235ea73e949aff1f5817ca38cb03ea5de585074f44b5b', '[\"*\"]', NULL, NULL, '2024-12-03 16:41:58', '2024-12-03 16:41:58'),
(65, 'App\\Models\\User', 1, 'auth_token', 'badaa9907aeb25dff15ce104841770e34dc46472856dcc440885f950a2f0d0b8', '[\"*\"]', NULL, NULL, '2024-12-03 16:43:02', '2024-12-03 16:43:02'),
(66, 'App\\Models\\User', 1, 'auth_token', 'f6392fb258a3a39427e5816ccde6f47f6de5104d6a925844e313120472c79512', '[\"*\"]', NULL, NULL, '2024-12-03 16:47:39', '2024-12-03 16:47:39'),
(67, 'App\\Models\\User', 1, 'auth_token', 'c7ef7c3313f892b0ba71926709360fa38a5ffc2485a66dffed0d85216c7e9787', '[\"*\"]', NULL, NULL, '2024-12-03 16:48:19', '2024-12-03 16:48:19'),
(68, 'App\\Models\\User', 1, 'auth_token', 'a5962f509b7e39c809db3b7ee2a0cd15931e88b6d5bd73b2ee99bffbaf29913e', '[\"*\"]', NULL, NULL, '2024-12-03 16:52:51', '2024-12-03 16:52:51'),
(69, 'App\\Models\\User', 1, 'auth_token', '96507d4b5c8f2573ad72fa80776ff0812d171461d18a0ebf1d383acb9a023821', '[\"*\"]', NULL, NULL, '2024-12-03 16:57:00', '2024-12-03 16:57:00'),
(70, 'App\\Models\\User', 1, 'auth_token', '00d3539bb28a3243d287ff3911b1df77252a890b9b0d4c03633289ebe2273ec4', '[\"*\"]', NULL, NULL, '2024-12-03 16:58:19', '2024-12-03 16:58:19'),
(71, 'App\\Models\\User', 1, 'auth_token', '725765ad3301d8fe8a407f5e56abad9c14ce8b58aa0ca518833416fec3a44bda', '[\"*\"]', NULL, NULL, '2024-12-03 17:02:18', '2024-12-03 17:02:18'),
(72, 'App\\Models\\User', 1, 'auth_token', '3569ab3bcf72563b5c29a2fcc57f99a2d4394e5cd14e6b42980a74c7af6dca26', '[\"*\"]', NULL, NULL, '2024-12-03 17:03:59', '2024-12-03 17:03:59'),
(73, 'App\\Models\\User', 1, 'auth_token', '76524c560936210162de0f3be4164f47889c957f8d8d85ead98c75b0ecbb51a5', '[\"*\"]', NULL, NULL, '2024-12-03 17:07:21', '2024-12-03 17:07:21'),
(74, 'App\\Models\\User', 1, 'auth_token', '3c113df5ccc769c7c62a5d4a4c36992e7e591dc1d75b00088e4d511fbe83fb6f', '[\"*\"]', NULL, NULL, '2024-12-03 17:08:40', '2024-12-03 17:08:40'),
(75, 'App\\Models\\User', 1, 'auth_token', '0dd378580ff07e54921278d575cfc0c4f391221797357681f8efe71cc6b6e2df', '[\"*\"]', NULL, NULL, '2024-12-03 17:23:11', '2024-12-03 17:23:11'),
(76, 'App\\Models\\User', 1, 'auth_token', '4078bb49045b49471b41c6e64828bbe1f655a7e4ababeb379c7c3c9dd4424770', '[\"*\"]', NULL, NULL, '2024-12-03 17:24:41', '2024-12-03 17:24:41'),
(77, 'App\\Models\\User', 1, 'auth_token', 'c07d55b7614bb13f9a56d8b306d02c2f8cf21f623981c85de0529a6ac4802632', '[\"*\"]', NULL, NULL, '2024-12-03 17:26:21', '2024-12-03 17:26:21'),
(78, 'App\\Models\\User', 1, 'auth_token', '0dc298dbf01d55d19921ecb92594ff38b98129d1a5e90220eb739a8b413b81dc', '[\"*\"]', NULL, NULL, '2024-12-03 17:48:46', '2024-12-03 17:48:46'),
(79, 'App\\Models\\User', 1, 'auth_token', '14b0649433515f5cafb63c28b7f62a50a5df2684b611bd1ed1ce5b418e97f186', '[\"*\"]', NULL, NULL, '2024-12-03 17:55:16', '2024-12-03 17:55:16'),
(80, 'App\\Models\\User', 1, 'auth_token', '1a3b62d6517fe21e5ec24f9cbe6196721fe5a29fb8439d887210f8a4add84bf1', '[\"*\"]', NULL, NULL, '2024-12-03 17:58:40', '2024-12-03 17:58:40'),
(81, 'App\\Models\\User', 1, 'auth_token', '2d8b74e0f3e716825ad83d18673fdf67bb2fc9d73161ab11de4c4d1c26476a61', '[\"*\"]', NULL, NULL, '2024-12-03 18:02:02', '2024-12-03 18:02:02'),
(82, 'App\\Models\\User', 1, 'auth_token', '33e19993c940ff9f44e39b53b6f3b577bf7dcc4a3ea82f59371f3565a9e89e73', '[\"*\"]', NULL, NULL, '2024-12-03 18:30:10', '2024-12-03 18:30:10'),
(83, 'App\\Models\\User', 1, 'auth_token', 'd2028364f1e4e6463d19e0117d2a2c255a5e7464b785da9d6d1b6bc6e3b9b4a4', '[\"*\"]', NULL, NULL, '2024-12-05 18:05:58', '2024-12-05 18:05:58'),
(84, 'App\\Models\\User', 1, 'auth_token', 'f130682a6e1e81084b1b6856921f0aab16c920a886cf152bca727889e78d5508', '[\"*\"]', NULL, NULL, '2024-12-05 18:10:45', '2024-12-05 18:10:45'),
(85, 'App\\Models\\User', 1, 'auth_token', 'f1359731849134052913a6bbd3e1798a7dea9e8b1b07c0c71469d8540fc021ca', '[\"*\"]', NULL, NULL, '2024-12-05 19:22:30', '2024-12-05 19:22:30'),
(86, 'App\\Models\\User', 1, 'auth_token', 'db7368c0d9af54cf442a5849220a6c8f1b3cecd7cf34f506b09437eb59438af7', '[\"*\"]', NULL, NULL, '2024-12-05 19:27:23', '2024-12-05 19:27:23'),
(87, 'App\\Models\\User', 1, 'auth_token', '27e6bba89507803e8aa5bf1ba8d8213d28c31670528332f7f87e2948c7f417b2', '[\"*\"]', NULL, NULL, '2024-12-05 19:33:41', '2024-12-05 19:33:41'),
(88, 'App\\Models\\User', 1, 'auth_token', 'a6078b43c9fe68fb1cc595cde8773a6a5ee7696db4a1835ca3dc5fcb6d26161c', '[\"*\"]', NULL, NULL, '2024-12-05 19:36:53', '2024-12-05 19:36:53'),
(89, 'App\\Models\\User', 1, 'auth_token', '1fa103c1691ba4e57103a61381c17342ce841ba2c3b7ea64c23e9f24e1d77781', '[\"*\"]', NULL, NULL, '2024-12-05 19:51:17', '2024-12-05 19:51:17'),
(90, 'App\\Models\\User', 1, 'auth_token', 'bf4c67be82fdd93a62a5e6c48113c6f5a2c51255c43237022967c94234cef717', '[\"*\"]', NULL, NULL, '2024-12-17 17:56:30', '2024-12-17 17:56:30'),
(91, 'App\\Models\\User', 1, 'auth_token', 'ceff9497999a5237b85a2bb19c0311c264247f52198aebc90ca899959a70c4e0', '[\"*\"]', '2024-12-23 14:39:23', NULL, '2024-12-23 14:27:22', '2024-12-23 14:39:23'),
(92, 'App\\Models\\User', 1, 'auth_token', '730aa4bd4579dae7d2130d56429f62e914f92f7275f9241afbd5de6c99003919', '[\"*\"]', NULL, NULL, '2024-12-23 16:28:10', '2024-12-23 16:28:10'),
(93, 'App\\Models\\User', 1, 'auth_token', '50aa6b70848d9fa42623bac51f65a9835f5c04d12fdaa5a1973f6746d663f8c2', '[\"*\"]', NULL, NULL, '2024-12-23 16:52:00', '2024-12-23 16:52:00'),
(94, 'App\\Models\\User', 1, 'auth_token', 'db63b04de77eed0f52b0efd57068d5231f0597c9b7d30b1f4dc0eebd7133f749', '[\"*\"]', NULL, NULL, '2024-12-23 16:57:44', '2024-12-23 16:57:44'),
(95, 'App\\Models\\User', 1, 'auth_token', 'b10397d48200f5560a86ff319dab0d576da1904bd83843e8f06db6b1fabf982e', '[\"*\"]', NULL, NULL, '2024-12-23 17:02:08', '2024-12-23 17:02:08'),
(96, 'App\\Models\\User', 1, 'auth_token', 'b7a4f03e87b33da1f24442ec429dbdcf407d0066a9c4971de5170279e2e1eb6b', '[\"*\"]', NULL, NULL, '2024-12-23 17:04:06', '2024-12-23 17:04:06'),
(97, 'App\\Models\\User', 1, 'auth_token', 'e4eb34a2bcdcecacc7705a6eb21ea1ed0f06979999ae2114bf1bc40cf0dd4191', '[\"*\"]', NULL, NULL, '2024-12-23 17:07:36', '2024-12-23 17:07:36'),
(98, 'App\\Models\\User', 1, 'auth_token', '53493364d3d2248ac10ca988be677e455c8096f53588b26adce03b249367ce08', '[\"*\"]', NULL, NULL, '2024-12-23 17:09:54', '2024-12-23 17:09:54'),
(99, 'App\\Models\\User', 1, 'auth_token', 'f231afb820aedea8d044dc2d5e917fc4d250977d834927d67a1086d26a5bcd92', '[\"*\"]', NULL, NULL, '2024-12-23 17:14:50', '2024-12-23 17:14:50'),
(100, 'App\\Models\\User', 1, 'auth_token', '0253acab30e60102974a2e1be297c3c691336898bde4967bf3c79c1bd8ab9573', '[\"*\"]', '2024-12-23 17:27:08', NULL, '2024-12-23 17:19:37', '2024-12-23 17:27:08'),
(101, 'App\\Models\\User', 1, 'auth_token', '81196d539dd1193d34e537415cb4fef057c7d9677fb9dd988181dfdeb254f0ec', '[\"*\"]', NULL, NULL, '2024-12-23 17:21:12', '2024-12-23 17:21:12'),
(102, 'App\\Models\\User', 1, 'auth_token', 'fefe3a3ff39f2ac9add31ed260f15f6c3d3840cbe5201cfe5401b20aeaacc3a6', '[\"*\"]', NULL, NULL, '2024-12-23 17:24:38', '2024-12-23 17:24:38'),
(103, 'App\\Models\\User', 1, 'auth_token', '0c5dad88d857e0299aa9301ca31a525a26fa954a8ec119bb49a4c9ec5d844427', '[\"*\"]', '2024-12-23 17:25:25', NULL, '2024-12-23 17:25:23', '2024-12-23 17:25:25'),
(104, 'App\\Models\\User', 1, 'auth_token', 'b8bd243aacb33b68946f3404aefa3b64b08d3b06de8160abadd1d829dd51481f', '[\"*\"]', '2024-12-23 17:36:23', NULL, '2024-12-23 17:36:21', '2024-12-23 17:36:23'),
(105, 'App\\Models\\User', 1, 'auth_token', 'cb2f41442571b7d245a90e036f0d7847ebbcc13f66a510172e839c8b8226034b', '[\"*\"]', '2024-12-23 17:42:08', NULL, '2024-12-23 17:42:05', '2024-12-23 17:42:08'),
(106, 'App\\Models\\User', 1, 'auth_token', '301e6c5dcf5c0833473e0ef03c2d69af058e0747ee165263a922137cd0cca7e7', '[\"*\"]', '2024-12-23 17:44:40', NULL, '2024-12-23 17:44:38', '2024-12-23 17:44:40'),
(107, 'App\\Models\\User', 1, 'auth_token', '71be06bab48dc66f7570a18d3ec40fca103bb0c0e65d824a88a65eed9b5dd8ee', '[\"*\"]', '2024-12-23 17:52:53', NULL, '2024-12-23 17:52:51', '2024-12-23 17:52:53'),
(108, 'App\\Models\\User', 1, 'auth_token', 'f5ad163c0153166a56c83fb2e4c12fe8f01993d35c34ffea03774f8134788b40', '[\"*\"]', '2024-12-23 17:55:21', NULL, '2024-12-23 17:55:18', '2024-12-23 17:55:21'),
(109, 'App\\Models\\User', 1, 'auth_token', '066c877e151f2298684d44583a4acbeae0c8f2238e799fadca8e692cec387ff5', '[\"*\"]', '2024-12-23 17:59:04', NULL, '2024-12-23 17:59:02', '2024-12-23 17:59:04'),
(110, 'App\\Models\\User', 4, 'auth_token', '30218df91166e25a48cb316767abef9e25622c555646a47b743801f53b523bc7', '[\"*\"]', '2024-12-23 18:06:08', NULL, '2024-12-23 18:06:07', '2024-12-23 18:06:08'),
(111, 'App\\Models\\User', 4, 'auth_token', '00b7495d861f4ed5a5a2cbd406bc5596be663a77ddb0b6543fed1b1b3afc9536', '[\"*\"]', '2024-12-23 18:16:44', NULL, '2024-12-23 18:16:41', '2024-12-23 18:16:44'),
(112, 'App\\Models\\User', 1, 'auth_token', 'c552f665497d784022f2079548c5d2b3f3c92d02a853274aeb1ef2110887177a', '[\"*\"]', '2024-12-23 18:17:06', NULL, '2024-12-23 18:17:05', '2024-12-23 18:17:06');

-- --------------------------------------------------------

--
-- Structure de la table `provinces`
--

CREATE TABLE `provinces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `region_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `provinces`
--

INSERT INTO `provinces` (`id`, `name`, `region_id`, `created_at`, `updated_at`) VALUES
(1, 'ariwara', 1, '2024-12-21 18:05:35', '2024-12-21 18:05:35'),
(2, 'bunia shop', 1, '2024-12-21 18:05:35', '2024-12-21 18:05:35'),
(3, 'durba', 1, '2024-12-21 18:06:45', '2024-12-21 18:06:45'),
(4, 'kolwezi', 2, '2024-12-21 18:06:45', '2024-12-21 18:06:45'),
(5, 'lubumbashi', 2, '2024-12-21 18:07:23', '2024-12-21 18:07:23'),
(6, 'kinshasa ngaliema', 3, '2024-12-21 18:07:23', '2024-12-21 18:07:23'),
(7, 'kinshasa tshangu', 3, '2024-12-21 18:08:00', '2024-12-21 18:08:00'),
(8, 'beni', 4, '2024-12-21 18:08:00', '2024-12-21 18:08:00'),
(9, 'butembo', 4, '2024-12-21 18:08:35', '2024-12-21 18:08:35'),
(10, 'goma', 4, '2024-12-21 18:08:35', '2024-12-21 18:08:35');

-- --------------------------------------------------------

--
-- Structure de la table `quantites`
--

CREATE TABLE `quantites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantite` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `quantites`
--

INSERT INTO `quantites` (`id`, `quantite`, `created_at`, `updated_at`) VALUES
(1, 1, '2024-12-19 13:57:00', '2024-12-19 13:57:00');

-- --------------------------------------------------------

--
-- Structure de la table `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `regions`
--

INSERT INTO `regions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'ituri', '2024-12-21 17:49:56', '2024-12-21 17:49:56'),
(2, 'katanga', '2024-12-21 17:49:56', '2024-12-21 17:49:56'),
(3, 'kinshasa', '2024-12-21 18:02:46', '2024-12-21 18:02:46'),
(4, 'nord-kivu', '2024-12-21 18:02:46', '2024-12-21 18:02:46'),
(5, 'sud-kivu', '2024-12-21 18:03:14', '2024-12-21 18:03:14'),
(6, 'tshopo', '2024-12-21 18:03:14', '2024-12-21 18:03:14');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'administrateur', '2024-12-11 23:05:21', '2024-12-11 23:05:21'),
(2, 'utilisateur', '2024-12-11 23:05:21', '2024-12-11 23:05:21');

-- --------------------------------------------------------

--
-- Structure de la table `shops`
--

CREATE TABLE `shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `region_id` int(11) NOT NULL,
  `localisation_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `shops`
--

INSERT INTO `shops` (`id`, `name`, `region_id`, `localisation_id`, `created_at`, `updated_at`) VALUES
(1, 'ariwara', 1, 3, '2024-12-21 18:23:34', '2024-12-21 18:23:34'),
(2, 'bunia shop', 1, 3, '2024-12-21 18:23:34', '2024-12-21 18:23:34');

-- --------------------------------------------------------

--
-- Structure de la table `statusitems`
--

CREATE TABLE `statusitems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `statusitems`
--

INSERT INTO `statusitems` (`id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'en stock', '2024-12-20 18:21:21', '2024-12-20 18:21:21');

-- --------------------------------------------------------

--
-- Structure de la table `typesitems`
--

CREATE TABLE `typesitems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `typesitems`
--

INSERT INTO `typesitems` (`id`, `type_name`, `created_at`, `updated_at`) VALUES
(1, 'batterie', '2024-12-19 13:57:49', '2024-12-19 13:57:49'),
(2, 'tv', '2024-12-19 13:57:49', '2024-12-19 13:57:49'),
(3, 'bpower50', '2024-12-22 13:47:43', '2024-12-22 13:47:43');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role_id`, `region_id`, `created_at`, `updated_at`) VALUES
(1, 'jonathan', 'j.kabondo@bboxx.com', NULL, '$2y$10$rIUkFU1qr2GPLdN7A.jYf.JibRyEooSt8WE0r9m7F1Bb73sjBNCfm', NULL, 1, 3, '2024-11-22 14:46:01', '2024-12-21 23:31:00'),
(4, 'mayulu dieumerci', 'd.mayulu@bboxx.com', NULL, '$2y$10$TJs5T25XYf5RNyk5M5BEFOPIiinYtcj4tTpkGfpmtebycLXqEbgja', NULL, 1, 3, '2024-12-23 18:05:43', '2024-12-23 18:05:43');

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

CREATE TABLE `villes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `province_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `auth_controllers`
--
ALTER TABLE `auth_controllers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clientadresses`
--
ALTER TABLE `clientadresses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `communes`
--
ALTER TABLE `communes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etatitems`
--
ALTER TABLE `etatitems`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `inventaires`
--
ALTER TABLE `inventaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `localisations`
--
ALTER TABLE `localisations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lots`
--
ALTER TABLE `lots`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Index pour la table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Index pour la table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Index pour la table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `quantites`
--
ALTER TABLE `quantites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `statusitems`
--
ALTER TABLE `statusitems`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `typesitems`
--
ALTER TABLE `typesitems`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `villes`
--
ALTER TABLE `villes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `auth_controllers`
--
ALTER TABLE `auth_controllers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `clientadresses`
--
ALTER TABLE `clientadresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `communes`
--
ALTER TABLE `communes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `etatitems`
--
ALTER TABLE `etatitems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inventaires`
--
ALTER TABLE `inventaires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `localisations`
--
ALTER TABLE `localisations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `lots`
--
ALTER TABLE `lots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT pour la table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `quantites`
--
ALTER TABLE `quantites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `statusitems`
--
ALTER TABLE `statusitems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `typesitems`
--
ALTER TABLE `typesitems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `villes`
--
ALTER TABLE `villes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
