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
-- Table structure for table `program`
--

DROP TABLE IF EXISTS `program`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `program` (
  `programId` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kurikulumId` int DEFAULT NULL,
  `file_jadwal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `isOpen` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `harga` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`programId`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `program`
--

LOCK TABLES `program` WRITE;
/*!40000 ALTER TABLE `program` DISABLE KEYS */;
INSERT INTO `program` VALUES (6,'Program Pendidikan Guru (Spesialis) Bahasa Korea','Program Pendidikan Guru Bahasa Korea merupakan program pelatihan khusus bagi calon dan guru Bahasa Korea untuk meningkatkan kompetensi pedagogik, linguistik, dan metodologi pengajaran sesuai standar pendidikan Korea dan Indonesia. ',NULL,'Jadwal perkuliahan disusun secara fleksibel dan akan diinformasikan kepada peserta sebelum program dimulai. Program dapat dilaksanakan secara tatap muka maupun daring sesuai ketentuan. ','2026-01-10 21:04:59','1','679000'),(7,'Program Persiapan TOPIK (Level 3-4)','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis augue quis dolor sagittis, id faucibus nisl feugiat. Duis et. ',NULL,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis augue quis dolor sagittis, id faucibus nisl feugiat. Duis et. ','2026-01-10 21:06:46','1','345000'),(8,'Bahasa Korea untuk Tujuan Khusus','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis augue quis dolor sagittis, id faucibus nisl feugiat. Duis et.',NULL,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis augue quis dolor sagittis, id faucibus nisl feugiat. Duis et.','2026-01-10 21:06:46','1','515000'),(9,'Test Update program kursus','Thisoi sdoif jsdofj dijfsoid fjd osjoi jdoj',NULL,'sfsjofidj sdj                Jadwal akan diberitahu oleh panitia','2026-01-11 09:38:25','1','9999999');
/*!40000 ALTER TABLE `program` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-01-12 21:24:52
