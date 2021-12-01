-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for blipou
DROP DATABASE IF EXISTS `blipou`;
CREATE DATABASE IF NOT EXISTS `blipou` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `blipou`;

-- Dumping structure for table blipou.logtest
DROP TABLE IF EXISTS `logtest`;
CREATE TABLE IF NOT EXISTS `logtest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `conftoken` varchar(255) DEFAULT NULL,
  `tokenconfirmed` timestamp NULL DEFAULT NULL,
  `roletype` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table blipou.logtest: ~5 rows (approximately)
DELETE FROM `logtest`;
/*!40000 ALTER TABLE `logtest` DISABLE KEYS */;
INSERT INTO `logtest` (`id`, `username`, `password`, `email`, `conftoken`, `tokenconfirmed`, `roletype`) VALUES
	(1, 'poi', '$2y$10$etweIMczIFCOuAgXgY9j/uEXyS1/y4WXRY/ymjRAW89CUn/A0/AlO', 'poi@gmail.com', '0', '2021-11-30 10:07:26', NULL),
	(2, 'mlk', '$2y$10$BhQfh/qC76nXfQ534LHIpOqIjODSsCwxmcMBL8MMXD7rFcdbjm5I2', 'mlk@gmail.com', '0', '2021-11-30 10:15:14', NULL),
	(3, 'mlk', '$2y$10$RxynRF8ivL9Ut03omIr81enHcx.4GENc/6D.dPl3gTKaSbOIpriba', 'mlk@gmail.com', '0', '2021-11-30 16:51:12', NULL),
	(4, 'lkj', '$2y$10$5MoI8ngOFdJHJVahOoNuWOBpMQTsbwccXUBLsmifxxPMSKlqXNbC2', 'lkj@gmail.com', '0', '2021-11-30 16:55:16', NULL),
	(5, 'jhg', '$2y$10$z6GQnGfY.Uw11zlHe5xi6uv8QlMgtHp5m8GVuWrIku9M34IAxt4Xa', 'jhg@gmail.com', '0', '2021-12-01 08:43:25', NULL);
/*!40000 ALTER TABLE `logtest` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
