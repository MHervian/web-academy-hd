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
CREATE TABLE `sertifikat` (
  -- `memberId` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `memberId` int NOT NULL,
  `noSertifikat` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `date_issued` datetime NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`memberId`,`noSertifikat`),
  CONSTRAINT `fk_member_sertifikat` FOREIGN KEY (`memberId`) REFERENCES `member` (`memberId`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sertifikat`
--

LOCK TABLES `sertifikat` WRITE;
/*!40000 ALTER TABLE `sertifikat` DISABLE KEYS */;
-- INSERT INTO `sertifikat` VALUES ('202509240030','ZODO7CKOWA','2025-09-26 09:47:30','course_certificate.pdf','2025-09-26 16:47:30'),('202509242285','FRVMPYNCXE','2025-09-26 09:47:30','course_certificate.pdf','2025-09-26 16:47:30'),('202509242645','XIE7GS4FJQ','2025-09-26 09:47:30','course_certificate.pdf','2025-09-26 16:47:30'),('202509244958','MW8V1NEBRX','2025-09-26 09:47:30','course_certificate.pdf','2025-09-26 16:47:30'),('202509246499','UQKTMCZYN5','2025-09-26 09:47:30','course_certificate.pdf','2025-09-26 16:47:30'),('202509246861','123456789a','2025-09-26 00:00:00','file_f01YIHHWzXGUblk5PWi5_1758871014.pdf','2025-09-26 14:16:55'),('202509246861','U2PSMESBXM','2025-09-26 09:47:30','course_certificate.pdf','2025-09-26 16:47:30'),('202509247799','TUQERF4KUC','2025-09-26 09:47:30','course_certificate.pdf','2025-09-26 16:47:30'),('202509248754','5YIZAUTBUQ','2025-09-26 09:47:30','course_certificate.pdf','2025-09-26 16:47:30'),('202509249954','FDVPUA0GNA','2025-09-26 09:47:30','course_certificate.pdf','2025-09-26 16:47:30'),('202509249954','wasft1133','2025-09-27 00:00:00','file_2AY9dBSG0Rxx8hxQ9k6O_1758940338.pdf','2025-09-27 09:32:19');
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

-- Dump completed on 2026-01-08 10:13:14
