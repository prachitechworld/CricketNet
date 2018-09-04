-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2018 at 09:28 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cricket_net`
--

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'cqMRbyysnX', '2018-09-01 13:48:57', '2018-09-01 13:48:57'),
(2, 'fo2oWooHuv', '2018-09-01 13:48:57', '2018-09-01 13:48:57');

-- --------------------------------------------------------

--
-- Table structure for table `match_details`
--

CREATE TABLE `match_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `stadium` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `match_on` date NOT NULL,
  `teamA` int(10) UNSIGNED NOT NULL,
  `teamB` int(10) UNSIGNED NOT NULL,
  `winner` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `match_details`
--

INSERT INTO `match_details` (`id`, `stadium`, `match_on`, `teamA`, `teamB`, `winner`, `created_at`, `updated_at`) VALUES
(1, 'Eden Gardens', '2018-04-03', 1, 2, 2, '2018-09-02 11:14:57', '2018-09-02 11:14:57'),
(2, 'Nehru Stadium', '2018-04-05', 2, 3, 3, '2018-09-02 11:14:57', '2018-09-02 11:14:57'),
(3, 'Eden Gardens', '2018-04-08', 1, 3, 3, '2018-09-02 11:14:57', '2018-09-02 11:14:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_09_01_121738_create_clubs_table', 1),
(4, '2018_09_01_140927_create_teams_table', 1),
(5, '2018_09_01_141047_create_players_table', 1),
(7, '2018_09_02_155648_create_player_histories_table', 2),
(8, '2018_09_02_155842_create_match_details_table', 3),
(9, '2018_09_02_155944_create_team_points_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_uri` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jersey_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `first_name`, `last_name`, `image_uri`, `jersey_number`, `country`, `team_id`, `created_at`, `updated_at`) VALUES
(7, 'Gautam', 'Gambhir', 'players/1535877941.jpg', '1', 'IND', 1, '2018-09-02 03:36:38', '2018-09-02 03:36:38'),
(8, 'Rishabh', 'Pant', 'players/1535877981.jpg', '2', 'IND', 1, '2018-09-02 03:36:38', '2018-09-02 03:36:38'),
(9, 'Dinesh', 'Karthik', 'players/1535877781.jpg', '5', 'IND', 2, '2018-09-02 03:36:38', '2018-09-02 03:36:38'),
(10, 'Chris', 'Lynn', 'players/1545867781.jpg', '6', 'AUS', 2, '2018-09-02 03:36:38', '2018-09-02 03:36:38'),
(11, 'Virat', 'Kohli', 'players/1645867781.jpg', '7', 'IND', 3, '2018-09-02 03:36:38', '2018-09-02 03:36:38'),
(12, 'AB De', 'Villiers', 'players/1445867781.jpg', '8', 'SA', 3, '2018-09-02 03:36:38', '2018-09-02 03:36:38');

-- --------------------------------------------------------

--
-- Table structure for table `player_histories`
--

CREATE TABLE `player_histories` (
  `id` int(10) UNSIGNED NOT NULL,
  `player_id` int(10) UNSIGNED NOT NULL,
  `matches` int(10) NOT NULL,
  `runs` bigint(20) NOT NULL,
  `highest_score` int(11) NOT NULL,
  `fifties` int(11) NOT NULL,
  `hundreds` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `player_histories`
--

INSERT INTO `player_histories` (`id`, `player_id`, `matches`, `runs`, `highest_score`, `fifties`, `hundreds`, `created_at`, `updated_at`) VALUES
(7, 7, 147, 5238, 150, 34, 11, '2018-09-02 11:14:10', '2018-09-02 11:14:10'),
(8, 8, 10, 500, 70, 5, 1, '2018-09-02 11:14:10', '2018-09-02 11:14:10'),
(9, 9, 79, 1496, 94, 4, 0, '2018-09-02 11:14:10', '2018-09-02 11:14:10'),
(10, 10, 10, 158, 44, 0, 0, '2018-09-02 11:14:10', '2018-09-02 11:14:10'),
(11, 11, 211, 9779, 183, 48, 35, '2018-09-02 11:14:10', '2018-09-02 11:14:10'),
(12, 12, 228, 9577, 176, 53, 25, '2018-09-02 11:14:10', '2018-09-02 11:14:10');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_uri` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `club_state` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `logo_uri`, `club_state`, `created_at`, `updated_at`) VALUES
(1, 'Dare Devils', 'teams/15358316231.png', 1, '2018-09-02 03:36:32', '2018-09-02 03:36:32'),
(2, 'Knight Riders', 'teams/15358316232.jpg', 1, '2018-09-02 03:36:32', '2018-09-02 03:36:32'),
(3, 'Royal Challengers', 'teams/15358317232.png', 2, '2018-09-02 03:36:32', '2018-09-02 03:36:32');

-- --------------------------------------------------------

--
-- Table structure for table `team_points`
--

CREATE TABLE `team_points` (
  `id` int(10) UNSIGNED NOT NULL,
  `team_id` int(10) UNSIGNED NOT NULL,
  `points` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_points`
--

INSERT INTO `team_points` (`id`, `team_id`, `points`, `rating`, `created_at`, `updated_at`) VALUES
(1, 1, 153, 3, '2018-09-02 11:15:08', '2018-09-02 11:15:08'),
(2, 2, 200, 2, '2018-09-02 11:15:08', '2018-09-02 11:15:08'),
(3, 3, 300, 1, '2018-09-02 11:15:08', '2018-09-02 11:15:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `match_details`
--
ALTER TABLE `match_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `match_details_teama_foreign` (`teamA`),
  ADD KEY `match_details_teamb_foreign` (`teamB`),
  ADD KEY `match_details_winner_foreign` (`winner`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`),
  ADD KEY `players_team_id_foreign` (`team_id`);

--
-- Indexes for table `player_histories`
--
ALTER TABLE `player_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `player_histories_player_id_foreign` (`player_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_club_state_foreign` (`club_state`);

--
-- Indexes for table `team_points`
--
ALTER TABLE `team_points`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_points_team_id_foreign` (`team_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `match_details`
--
ALTER TABLE `match_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `player_histories`
--
ALTER TABLE `player_histories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team_points`
--
ALTER TABLE `team_points`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `match_details`
--
ALTER TABLE `match_details`
  ADD CONSTRAINT `match_details_teama_foreign` FOREIGN KEY (`teamA`) REFERENCES `teams` (`id`),
  ADD CONSTRAINT `match_details_teamb_foreign` FOREIGN KEY (`teamB`) REFERENCES `teams` (`id`),
  ADD CONSTRAINT `match_details_winner_foreign` FOREIGN KEY (`winner`) REFERENCES `teams` (`id`);

--
-- Constraints for table `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `players_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`);

--
-- Constraints for table `player_histories`
--
ALTER TABLE `player_histories`
  ADD CONSTRAINT `player_histories_player_id_foreign` FOREIGN KEY (`player_id`) REFERENCES `players` (`id`);

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_club_state_foreign` FOREIGN KEY (`club_state`) REFERENCES `clubs` (`id`);

--
-- Constraints for table `team_points`
--
ALTER TABLE `team_points`
  ADD CONSTRAINT `team_points_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
