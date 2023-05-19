-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: sefedin
-- ------------------------------------------------------
-- Server version	8.0.32

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
-- Table structure for table `combattant_competence`
--

DROP TABLE IF EXISTS `combattant_competence`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `combattant_competence` (
  `combattantCompetenceId` int NOT NULL AUTO_INCREMENT,
  `combattantId` int DEFAULT NULL,
  `competenceId` int DEFAULT NULL,
  PRIMARY KEY (`combattantCompetenceId`),
  KEY `combattantId` (`combattantId`),
  KEY `competenceId` (`competenceId`),
  CONSTRAINT `combattant_competence_ibfk_1` FOREIGN KEY (`combattantId`) REFERENCES `combattant` (`combattantId`),
  CONSTRAINT `combattant_competence_ibfk_2` FOREIGN KEY (`competenceId`) REFERENCES `competence` (`competenceId`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `combattant_competence`
--

LOCK TABLES `combattant_competence` WRITE;
/*!40000 ALTER TABLE `combattant_competence` DISABLE KEYS */;
INSERT INTO `combattant_competence` VALUES (1,5,4),(2,10,3),(3,7,2),(4,2,6),(5,9,1),(6,8,NULL),(7,8,NULL),(10,121,4),(11,122,1),(12,122,2),(13,122,3),(14,122,4);
/*!40000 ALTER TABLE `combattant_competence` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-19 23:55:27
