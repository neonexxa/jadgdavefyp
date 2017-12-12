# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.7.17)
# Database: jagdevfyp
# Generation Time: 2017-12-12 14:38:04 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table applicants
# ------------------------------------------------------------

DROP TABLE IF EXISTS `applicants`;

CREATE TABLE `applicants` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `appname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intdate` timestamp NULL DEFAULT NULL,
  `joi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interviewer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inttype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `radiostech` int(11) NOT NULL DEFAULT '0',
  `edutrain` int(11) NOT NULL DEFAULT '0',
  `workexp` int(11) NOT NULL DEFAULT '0',
  `orgskill` int(11) NOT NULL DEFAULT '0',
  `training` int(11) NOT NULL DEFAULT '0',
  `comm` int(11) NOT NULL DEFAULT '0',
  `overallrate` int(11) NOT NULL DEFAULT '0',
  `finalrec` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table employees
# ------------------------------------------------------------

DROP TABLE IF EXISTS `employees`;

CREATE TABLE `employees` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `oin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `epfnum` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `itn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `itnnum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accref` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accnum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spfullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spnin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spoin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `spdob` timestamp NULL DEFAULT NULL,
  `spnationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sppn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `spisworking` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spoccupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spcompany` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sppostcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spotn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sphn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spmd` timestamp NULL DEFAULT NULL,
  `child` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `employees_spnin_unique` (`spnin`),
  UNIQUE KEY `employees_spoin_unique` (`spoin`),
  UNIQUE KEY `employees_nin_unique` (`nin`),
  UNIQUE KEY `employees_oin_unique` (`oin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
