-- MySQL dump 10.13  Distrib 8.0.42, for Win64 (x86_64)
--
-- Host: localhost    Database: akademi_hd
-- ------------------------------------------------------
-- Server version	8.0.44

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `enrollment_kelas`
--

DROP TABLE IF EXISTS `enrollment_kelas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `enrollment_kelas` (
  `kelasId` int NOT NULL,
  -- `memberId` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `memberId` int NOT NULL,
  `isPass` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date_pass` date DEFAULT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`kelasId`,`memberId`),
  KEY `fk_enrollment_kelas` (`memberId`),
  CONSTRAINT `fk_enrollment_kelas` FOREIGN KEY (`memberId`) REFERENCES `member` (`memberId`) ON DELETE CASCADE,
  CONSTRAINT `fk_enrollment_kelas2` FOREIGN KEY (`kelasId`) REFERENCES `kelas` (`kelasId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enrollment_kelas`
--

LOCK TABLES `enrollment_kelas` WRITE;
/*!40000 ALTER TABLE `enrollment_kelas` DISABLE KEYS */;
-- INSERT INTO `enrollment_kelas` VALUES (1,'202509240030',NULL,NULL,'2025-10-12 21:15:34'),(1,'202509244958',NULL,NULL,'2025-10-12 21:15:34'),(1,'202509246499',NULL,NULL,'2025-10-12 21:15:34'),(1,'202509247799',NULL,NULL,'2025-10-12 21:15:34'),(1,'202509248754',NULL,NULL,'2025-10-12 21:15:34');
/*!40000 ALTER TABLE `enrollment_kelas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-01-08 10:13:14
