-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.2.3-MariaDB-log - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for lanproject
CREATE DATABASE IF NOT EXISTS `lanproject` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `lanproject`;

-- Dumping structure for table lanproject.journals
CREATE TABLE IF NOT EXISTS `journals` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tglterbit` date NOT NULL,
  `abstract` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `references` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'proses',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lanproject.journals: ~3 rows (approximately)
DELETE FROM `journals`;
/*!40000 ALTER TABLE `journals` DISABLE KEYS */;
INSERT INTO `journals` (`id`, `title`, `author`, `keywords`, `tglterbit`, `abstract`, `references`, `file`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(5, 'asdasdasdas1', 'asdasdasd1', 'asdasdasd,asdasdasdasd,asdasdasdasd,asdasdasd1', '2013-12-12', '<p>asdasdasdasd1</p>', '<p>asdasdasdasd1</p>', '62d033c2f44a6a653387862ed3bb977eKotaku.pptx', 'proses', '2017-10-11 17:11:05', '2017-10-12 06:25:28', '2017-10-12 06:25:28'),
	(6, 'Jual Kucing Block Di Samarinda', 'kucing terbang', 'asdasdasd,asdasdasdasd,asdasdasdasd,asdasdasd', '2012-12-12', '<p>asdasdasd,asdasdasdasd,asdasdasdasd,asdasdasd</p>', '<p>asdasdasd,asdasdasdasd,asdasdasdasd,asdasdasd</p>', '367dcc4b1fa13d100f66db44138c9db2kartu konsultasi fix.pdf', 'proses', '2017-10-12 10:42:28', '2017-10-12 10:42:29', NULL),
	(7, 'asdasdasd', 'asdasdasdas', 'asdasdasd,asdasdasdasd,asdasdasdasd,asdasdasd', '2012-12-12', '<p>asdasdasd,asdasdasdasd,asdasdasdasd,asdasdasdasdasdasd,asdasdasdasd,asdasdasdasd,asdasdasdasdasdasd,asdasdasdasd,asdasdasdasd,asdasdasdasdasdasd,asdasdasdasd,asdasdasdasd,asdasdasd</p>', '<p>asdasdasd,asdasdasdasd,asdasdasdasd,asdasdasdasdasdasd,asdasdasdasd,asdasdasdasd,asdasdasdasdasdasd,asdasdasdasd,asdasdasdasd,asdasdasd</p>', '1c969b240ac37c1406890b986136c482Bintek.pdf', 'Proses', '2017-10-12 10:58:41', '2017-10-12 10:58:41', NULL);
/*!40000 ALTER TABLE `journals` ENABLE KEYS */;

-- Dumping structure for table lanproject.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lanproject.migrations: ~2 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2017_10_11_082848_create_journals_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table lanproject.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lanproject.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table lanproject.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'authors',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lanproject.users: ~4 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `username`, `email`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin', 'admin@admin.com', 'admin', '$2y$10$YOTP0dU/ig.5HBfQmr6KyOipb3wQ8U5jx/TZL9WVikJQE8vPEceLu', '4Pvte6vkW8rg0tusbAlTrFEarN375VIG5ipaqwyiMyH8pZmIdkRcynD84BV4', '2017-10-12 06:54:26', '2017-10-12 10:02:54'),
	(2, 'miyazaki adachi', 'miyazakikun', 'miyazaki@dawn.com', 'authors', '$2y$10$tShTiRp5oa/UjFNlSVvmx.pala3QvBe/Y9qSiE6HZCaMJtYIvqhfu', 'REmB37Tph2iOdNBxxGDo5QzR90oiRNHtr2K8zV5FIqAAfPQ4nZPXGgRJyaTn', '2017-10-12 07:00:59', '2017-10-12 07:00:59'),
	(5, 'Checkers 1', 'checkers1', 'kamukucing@gmail.com', 'checkers', '$2y$10$njWDW1Nwa8l.Sa.5iXJ5NOB/3uEAZWgOZF0sDg.Pybn3dyFt3BiNm', NULL, '2017-10-12 10:08:14', '2017-10-12 10:14:48'),
	(6, 'Reviewers 1', 'reviewers1', 'admin@dawnesia.com', 'reviewers', '$2y$10$m0ItIKMT5F0AqP0wmA/axetwlqy6Z/oqKRcMcQovGS7f9DsWLfpB6', NULL, '2017-10-12 10:08:40', '2017-10-12 10:15:23');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
