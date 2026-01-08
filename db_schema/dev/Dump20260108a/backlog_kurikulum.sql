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
-- Table structure for table `backlog_kurikulum`
--

DROP TABLE IF EXISTS `backlog_kurikulum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `backlog_kurikulum` (
  `kurikulumId` int NOT NULL,
  `seqno` int NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_backlog` date NOT NULL,
  KEY `fk_backlog_kurikulum` (`kurikulumId`),
  CONSTRAINT `fk_backlog_kurikulum` FOREIGN KEY (`kurikulumId`) REFERENCES `kurikulum` (`kurikulumId`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `backlog_kurikulum`
--

LOCK TABLES `backlog_kurikulum` WRITE;
/*!40000 ALTER TABLE `backlog_kurikulum` DISABLE KEYS */;
-- INSERT INTO `backlog_kurikulum` VALUES (15,1,'3Ge7yQt5fB5hR52Q22PP2uIRmQrUtTCU4blSARjawGs11pW7Km','2025-09-27'),(15,2,'Ro5DJuiFaNd9icROAUddGaGTQkhagZyYCDcMtvaZPuNs7wJtvP','2025-09-28'),(15,3,'kdM0V618B6NYlawN53BWJTDvItYj0x2CV0MgWwBQSfwYfPrsbs','2025-09-28'),(15,4,'iAxHparH5vhRydRtnvXpenXEf9zn8bdLZRU8pQzcrtGFGKFcmg','2025-09-28'),(16,1,'r3A9s9nz948OXl4oA87QtZzMiUkrwvRMLzD6Mj8PXIzdYSU3DY','2025-09-28'),(16,2,'Lorem ipsum test feedback','2025-10-06'),(16,3,'third feedback','2025-10-06'),(26,1,'Komentar pertama untuk kurikulum ini','2025-10-08'),(16,4,'test feedback kurikulum ini','2025-12-16'),(16,5,'hzCdHNnTw3Whrs6TXVapjKU9WzuykQ7ck1WHyWYE1CP3FolOdc','2025-12-16');
/*!40000 ALTER TABLE `backlog_kurikulum` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-01-08 10:13:15
