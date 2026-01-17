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
-- Table structure for table `sertifikat`
--

DROP TABLE IF EXISTS `sertifikat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
-- CREATE TABLE `sertifikat` (
--   `sertifikatId` int PRIMARY KEY AUTO_INCREMENT,
--   `memberId` int NOT NULL,
--   `kelasId` int NOT NULL,
--   `noSertifikat` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
--   `date_issued` datetime NOT NULL,
--   `filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
--   `created_at` datetime DEFAULT NULL,
--   `updated_at` datetime DEFAULT NULL,
--   PRIMARY KEY (`memberId`,`noSertifikat`),
--   CONSTRAINT `fk_member_sertifikat` FOREIGN KEY (`memberId`) REFERENCES `member` (`memberId`) ON DELETE CASCADE
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
CREATE TABLE `sertifikat` (
  `sertifikatId` int NOT NULL AUTO_INCREMENT,
  `memberId` int NOT NULL,
  `kelasId` int NOT NULL,
  `noSertifikat` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `date_issued` datetime NOT NULL,
  `filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  -- Menetapkan sertifikatId sebagai Primary Key tunggal
  PRIMARY KEY (`sertifikatId`),
  -- Membuat INDEX pada noSertifikat sesuai permintaan
  INDEX `idx_noSertifikat` (`noSertifikat`),
  -- Jika (memberId + noSertifikat) harus unik, gunakan UNIQUE INDEX
  UNIQUE KEY `unique_member_sertifikat` (`memberId`, `noSertifikat`),
  -- Foreign Key
  CONSTRAINT `fk_member_sertifikat` FOREIGN KEY (`memberId`) REFERENCES `member` (`memberId`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sertifikat`
--

LOCK TABLES `sertifikat` WRITE;
/*!40000 ALTER TABLE `sertifikat` DISABLE KEYS */;
/*!40000 ALTER TABLE `sertifikat` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-01-13  9:12:13
