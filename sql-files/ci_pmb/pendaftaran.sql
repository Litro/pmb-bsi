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

-- Dumping structure for table ci_pmb.pendaftaran
CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `index` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT 0,
  `nisn` varchar(50) NOT NULL DEFAULT '0',
  `nik` varchar(50) NOT NULL DEFAULT '0',
  `name` varchar(256) NOT NULL DEFAULT '0',
  `gender` varchar(12) NOT NULL DEFAULT '0',
  `religion` varchar(12) NOT NULL DEFAULT '0',
  `birthplace` varchar(50) NOT NULL DEFAULT '0',
  `birthdate` varchar(50) NOT NULL DEFAULT '0',
  `photo` varchar(1024) DEFAULT '0',
  `address` varchar(1024) NOT NULL DEFAULT '0',
  `email` varchar(256) NOT NULL DEFAULT '0',
  `phone` varchar(30) NOT NULL DEFAULT '0',
  `fakultas` varchar(22) NOT NULL DEFAULT '0',
  `prodi` varchar(28) NOT NULL DEFAULT '0',
  `father` varchar(28) NOT NULL DEFAULT '0',
  `fatherjob` varchar(28) NOT NULL DEFAULT '0',
  `fatherphone` varchar(28) NOT NULL DEFAULT '0',
  `fatherincome` varchar(28) NOT NULL DEFAULT '0',
  `mother` varchar(28) NOT NULL DEFAULT '0',
  `motherjob` varchar(28) NOT NULL DEFAULT '0',
  `motherphone` varchar(28) NOT NULL DEFAULT '0',
  `motherincome` varchar(28) NOT NULL DEFAULT '0',
  `status` varchar(28) DEFAULT 'PENDING',
  PRIMARY KEY (`index`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table ci_pmb.pendaftaran: 2 rows
/*!40000 ALTER TABLE `pendaftaran` DISABLE KEYS */;
INSERT INTO `pendaftaran` (`index`, `user_id`, `nisn`, `nik`, `name`, `gender`, `religion`, `birthplace`, `birthdate`, `photo`, `address`, `email`, `phone`, `fakultas`, `prodi`, `father`, `fatherjob`, `fatherphone`, `fatherincome`, `mother`, `motherjob`, `motherphone`, `motherincome`, `status`) VALUES
	(0000000004, 2, '543456456', '456456456', '456456456', 'Perempuan', 'Kristen', '45645645', '2023-03-27', 'bina-sarana-informatika-univ.jpeg', '64564564564', '456456456@gmail.com', '456456456456', 'Teknik dan Infomatika', 'S1-Ilmu komputer', '0', '0', '0', '0', '0', '0', '0', '0', 'PENDING'),
	(0000000011, 3, '123145123152312', '123251342314123', 'Louis Raynold V', 'Laki - Laki', 'Islam', 'Jakarta', '2023-03-29', 'bina-sarana-informatika-univ.jpeg', 'asdasdasd', 'arjunphp@gmail.com', '082112923800', 'Teknik dan Infomatika', 'S1-Ilmu komputer', 'Father', 'Wirausaha', '081248648748', '< 1.000.000', 'Mother', 'Wirausaha', '081334849488', '> 10.000.000', 'SUCCESS');
/*!40000 ALTER TABLE `pendaftaran` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
