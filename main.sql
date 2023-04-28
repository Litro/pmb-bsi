-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.10.2-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for ci_pmb
CREATE DATABASE IF NOT EXISTS `ci_pmb` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
USE `ci_pmb`;

-- Dumping structure for table ci_pmb.profile
DROP TABLE IF EXISTS `profile`;
CREATE TABLE IF NOT EXISTS `profile` (
  `user_id` int(11) unsigned NOT NULL,
  `address` varchar(1024) DEFAULT '',
  `phone` varchar(32) NOT NULL DEFAULT '',
  `twitter` varchar(256) NOT NULL DEFAULT '',
  `facebook` varchar(256) NOT NULL DEFAULT '',
  `instagram` varchar(256) NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table ci_pmb.profile: 6 rows
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;
INSERT INTO `profile` (`user_id`, `address`, `phone`, `twitter`, `facebook`, `instagram`) VALUES
	(1, 'Jakarta kelelep', '082123456789', 'bsi', 'bsi', 'bsi'),
	(2, 'Jakarta kelelep', '082123456789', 'bsi', 'bsi', 'bsi'),
	(3, 'Jakarta kelelep', '082123456789', '', '', ''),
	(4, '', '', '', '', ''),
	(5, '', '', '', '', ''),
	(6, '', '', '', '', '');
/*!40000 ALTER TABLE `profile` ENABLE KEYS */;

-- Dumping structure for table ci_pmb.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` tinyint(3) unsigned NOT NULL DEFAULT 0 COMMENT '0: pengunjung, 1: user, 2: admin',
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`user_id`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table ci_pmb.users: ~6 rows (approximately)
INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `role_id`, `date_added`) VALUES
	(1, 'Web', 'Master', 'admin@bsi.com', '$2y$10$aCOXWj6L2AFOG5P2Lpx28.atW7vU7lbwC5XxVML4uUCjfEledjXd6', 2, '2018-12-17 11:09:10'),
	(2, 'Web', 'User', 'user@bsi.com', '$2y$10$aCOXWj6L2AFOG5P2Lpx28.atW7vU7lbwC5XxVML4uUCjfEledjXd6', 1, '2018-12-17 11:09:10'),
	(3, 'Khoirul', 'Akbar', 'haruna.epic@gmail.com', '$2y$10$gCaEEwCQV0elz3GPyDOBZetL8H/DscD/nB2aggivBMcFRpZreaBxq', 1, '2023-04-27 17:20:26'),
	(4, 'Luis', 'Sitohank', 'haruna.epic8@gmail.com', '$2y$10$Ms2LQFtGD.W9DCak0RiVROAxxxSYkP8W.rVSWeC2Ls3OuFqEZbQei', 2, '2023-04-27 17:24:41'),
	(5, 'Luis', 'Reynold Victorius', 'arina.mj15@gmail.com', '$2y$10$F4opMg3fhfFqb3Dz6d3WxuuKgeRxqNqNyUjvMHa8gFjDLxZd125DO', 1, '2023-04-27 17:36:03'),
	(6, 'Louis', 'Raynold Victorius', 'louis2@gmail.com', '$2y$10$xRCOmxCEs2LRv6918YQybOFe3RjzLxPp4nCyShERKtyxpgyJrFj6a', 1, '2023-04-28 05:10:27');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
