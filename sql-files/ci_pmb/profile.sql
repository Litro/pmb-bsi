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

-- Dumping structure for table ci_pmb.profile
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

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
