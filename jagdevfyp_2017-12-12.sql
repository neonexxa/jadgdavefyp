# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.7.17)
# Database: jagdevfyp
# Generation Time: 2017-12-12 14:04:38 +0000
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

LOCK TABLES `applicants` WRITE;
/*!40000 ALTER TABLE `applicants` DISABLE KEYS */;

INSERT INTO `applicants` (`id`, `appname`, `intdate`, `joi`, `dept`, `interviewer`, `inttype`, `radiostech`, `edutrain`, `workexp`, `orgskill`, `training`, `comm`, `overallrate`, `finalrec`, `created_at`, `updated_at`, `email`, `key`)
VALUES
	(24,'Ahmad Firhan','2017-12-27 00:00:00','2212','Finance','Aqila','Group',0,0,0,0,0,0,0,2,'2017-12-12 10:16:40','2017-12-12 10:16:40','firdaushishamuddin@gmail.com',NULL),
	(25,'Ahmad Firhan','2017-12-26 00:00:00','2212','Finance','test','Group',0,0,0,0,0,0,0,2,'2017-12-12 10:18:28','2017-12-12 10:18:28','firdaushishamuddin@gmail.com',NULL),
	(26,'Ahmad Firhan','2017-12-26 00:00:00','2212','Finance','Aqila','Group',0,0,0,0,0,0,0,2,'2017-12-12 10:21:01','2017-12-12 10:21:01','firdaushishamuddin@gmail.com',NULL),
	(27,'Ahmad Firhan','2017-12-17 00:00:00','2212','Finance','Aqila','Group',3,2,2,0,3,1,11,2,'2017-12-12 10:24:10','2017-12-12 10:24:10','firdaushishamuddin@gmail.com',NULL),
	(28,'Ahmad Firhan','2017-12-27 00:00:00','2212','Finance','Aqila','Group',0,0,0,0,0,0,0,2,'2017-12-12 10:25:02','2017-12-12 10:25:02','firdaushishamuddin@gmail.com',NULL),
	(29,'Ahmad Firhan','2017-12-28 00:00:00','2212','IT','Aqila','Group',0,0,0,0,0,0,0,2,'2017-12-12 11:18:28','2017-12-12 11:18:28','jagdavepolis@yahoo.com',NULL),
	(30,'Ahmad Firhan','2017-12-20 00:00:00','2212','Finance','Aqila','Group',0,0,0,0,0,0,0,2,'2017-12-12 11:21:21','2017-12-12 11:21:21','jagdavepolis@gmail.com',NULL);

/*!40000 ALTER TABLE `applicants` ENABLE KEYS */;
UNLOCK TABLES;


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

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;

INSERT INTO `employees` (`id`, `fullname`, `nin`, `oin`, `epfnum`, `itn`, `itnnum`, `bank`, `accref`, `accnum`, `spfullname`, `spnin`, `spoin`, `spdob`, `spnationality`, `sppn`, `spisworking`, `spoccupation`, `spcompany`, `sppostcode`, `spotn`, `sphn`, `spmd`, `child`, `created_at`, `updated_at`)
VALUES
	(1,'Jagdave Singh Cheema','951205-14-5657','-','23456','SG','12345678','Public Bank Berhad','nin','234678','Aqila Binti Ahmad Nazmi','930224-14-4840','-','1993-02-24 00:00:00','Malaysian','-','Yes','Finance Officer','intel','51000','03-26947623','013-3970001','2016-03-03 00:00:00','[{\"cname\":\"Sara\",\"crel\":\"Daughter\",\"cdob\":\"2017-03-09\",\"cic\":\"234567\",\"cstatus\":\"S\"},{\"cname\":\"qwertyuiop\",\"crel\":\"son\",\"cdob\":\"2017-07-21\",\"cic\":\"123456\",\"cstatus\":\"S\"}]','2017-12-12 13:34:02','2017-12-12 13:34:02');

/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2017_12_11_183435_create_applicants_table',2),
	(4,'2017_12_11_191849_add_email_to_applicant',3),
	(5,'2017_12_12_121550_create_employees_table',4);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


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

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'jagdev','jagdev@jagdev.com','$2y$10$r/6zsEeNVCOsJfJrgAxPruLYw8oUf2JBdOzL.Nfe3kybasTqpiWRu','ro5vYoaDQotD6LhqBPrRziFujjuYrPYVTIFTX6PkrA1FG3Mf58454Xo9u3ZY','2017-12-11 17:58:34','2017-12-11 17:58:34');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
