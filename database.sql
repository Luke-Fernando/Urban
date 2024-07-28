-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: urban
-- ------------------------------------------------------
-- Server version	8.0.36

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
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `experience`
--

DROP TABLE IF EXISTS `experience`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `experience` (
  `id` int NOT NULL AUTO_INCREMENT,
  `experience` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `experience`
--

LOCK TABLES `experience` WRITE;
/*!40000 ALTER TABLE `experience` DISABLE KEYS */;
/*!40000 ALTER TABLE `experience` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `file`
--

DROP TABLE IF EXISTS `file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `file` (
  `id` int NOT NULL AUTO_INCREMENT,
  `file` varchar(150) NOT NULL,
  `file_type_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_file_file_type1_idx` (`file_type_id`),
  CONSTRAINT `fk_file_file_type1` FOREIGN KEY (`file_type_id`) REFERENCES `file_type` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `file`
--

LOCK TABLES `file` WRITE;
/*!40000 ALTER TABLE `file` DISABLE KEYS */;
/*!40000 ALTER TABLE `file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `file_type`
--

DROP TABLE IF EXISTS `file_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `file_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `file_type` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `file_type`
--

LOCK TABLES `file_type` WRITE;
/*!40000 ALTER TABLE `file_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `file_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job`
--

DROP TABLE IF EXISTS `job`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `category_id` int NOT NULL,
  `sub_category_id` int NOT NULL,
  `experience_id` int NOT NULL,
  `number_of_freelancers_id` int NOT NULL,
  `payment_type_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_jobs_category1_idx` (`category_id`),
  KEY `fk_jobs_sub_category1_idx` (`sub_category_id`),
  KEY `fk_job_number_of_freelancers1_idx` (`number_of_freelancers_id`),
  KEY `fk_job_experience1_idx` (`experience_id`),
  KEY `fk_job_payment_type1_idx` (`payment_type_id`),
  CONSTRAINT `fk_job_experience1` FOREIGN KEY (`experience_id`) REFERENCES `experience` (`id`),
  CONSTRAINT `fk_job_number_of_freelancers1` FOREIGN KEY (`number_of_freelancers_id`) REFERENCES `number_of_freelancers` (`id`),
  CONSTRAINT `fk_job_payment_type1` FOREIGN KEY (`payment_type_id`) REFERENCES `payment_type` (`id`),
  CONSTRAINT `fk_jobs_category1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  CONSTRAINT `fk_jobs_sub_category1` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_category` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job`
--

LOCK TABLES `job` WRITE;
/*!40000 ALTER TABLE `job` DISABLE KEYS */;
/*!40000 ALTER TABLE `job` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_has_file`
--

DROP TABLE IF EXISTS `job_has_file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_has_file` (
  `job_id` int NOT NULL,
  `file_id` int NOT NULL,
  PRIMARY KEY (`job_id`,`file_id`),
  KEY `fk_job_has_file_file1_idx` (`file_id`),
  KEY `fk_job_has_file_job1_idx` (`job_id`),
  CONSTRAINT `fk_job_has_file_file1` FOREIGN KEY (`file_id`) REFERENCES `file` (`id`),
  CONSTRAINT `fk_job_has_file_job1` FOREIGN KEY (`job_id`) REFERENCES `job` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_has_file`
--

LOCK TABLES `job_has_file` WRITE;
/*!40000 ALTER TABLE `job_has_file` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_has_file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_has_language`
--

DROP TABLE IF EXISTS `job_has_language`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_has_language` (
  `job_id` int NOT NULL,
  `language_id` int NOT NULL,
  PRIMARY KEY (`job_id`,`language_id`),
  KEY `fk_job_has_language_language1_idx` (`language_id`),
  KEY `fk_job_has_language_job1_idx` (`job_id`),
  CONSTRAINT `fk_job_has_language_job1` FOREIGN KEY (`job_id`) REFERENCES `job` (`id`),
  CONSTRAINT `fk_job_has_language_language1` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_has_language`
--

LOCK TABLES `job_has_language` WRITE;
/*!40000 ALTER TABLE `job_has_language` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_has_language` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_has_skill`
--

DROP TABLE IF EXISTS `job_has_skill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_has_skill` (
  `job_id` int NOT NULL,
  `skill_id` int NOT NULL,
  PRIMARY KEY (`job_id`,`skill_id`),
  KEY `fk_jobs_has_skills_skills1_idx` (`skill_id`),
  KEY `fk_jobs_has_skills_jobs1_idx` (`job_id`),
  CONSTRAINT `fk_jobs_has_skills_jobs1` FOREIGN KEY (`job_id`) REFERENCES `job` (`id`),
  CONSTRAINT `fk_jobs_has_skills_skills1` FOREIGN KEY (`skill_id`) REFERENCES `skill` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_has_skill`
--

LOCK TABLES `job_has_skill` WRITE;
/*!40000 ALTER TABLE `job_has_skill` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_has_skill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `language`
--

DROP TABLE IF EXISTS `language`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `language` (
  `id` int NOT NULL AUTO_INCREMENT,
  `language` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `language`
--

LOCK TABLES `language` WRITE;
/*!40000 ALTER TABLE `language` DISABLE KEYS */;
/*!40000 ALTER TABLE `language` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `number_of_freelancers`
--

DROP TABLE IF EXISTS `number_of_freelancers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `number_of_freelancers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `number_of_freelancers` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `number_of_freelancers`
--

LOCK TABLES `number_of_freelancers` WRITE;
/*!40000 ALTER TABLE `number_of_freelancers` DISABLE KEYS */;
/*!40000 ALTER TABLE `number_of_freelancers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_type`
--

DROP TABLE IF EXISTS `payment_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `payment_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `payment_type` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_type`
--

LOCK TABLES `payment_type` WRITE;
/*!40000 ALTER TABLE `payment_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile_picture`
--

DROP TABLE IF EXISTS `profile_picture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profile_picture` (
  `username` varchar(20) NOT NULL,
  `profile_picture` varchar(100) NOT NULL,
  PRIMARY KEY (`username`),
  KEY `fk_profile_picture_users_idx` (`username`),
  CONSTRAINT `fk_profile_picture_users` FOREIGN KEY (`username`) REFERENCES `user` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile_picture`
--

LOCK TABLES `profile_picture` WRITE;
/*!40000 ALTER TABLE `profile_picture` DISABLE KEYS */;
INSERT INTO `profile_picture` VALUES ('lukefer','user.svg');
/*!40000 ALTER TABLE `profile_picture` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reset_token`
--

DROP TABLE IF EXISTS `reset_token`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reset_token` (
  `username` varchar(20) NOT NULL,
  `reset_token` varchar(20) NOT NULL,
  PRIMARY KEY (`username`),
  KEY `fk_reset_token_users1_idx` (`username`),
  CONSTRAINT `fk_reset_token_users1` FOREIGN KEY (`username`) REFERENCES `user` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reset_token`
--

LOCK TABLES `reset_token` WRITE;
/*!40000 ALTER TABLE `reset_token` DISABLE KEYS */;
/*!40000 ALTER TABLE `reset_token` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skill`
--

DROP TABLE IF EXISTS `skill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `skill` (
  `id` int NOT NULL AUTO_INCREMENT,
  `skill` varchar(45) NOT NULL,
  `sub_category_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_skills_sub_category1_idx` (`sub_category_id`),
  CONSTRAINT `fk_skills_sub_category1` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_category` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skill`
--

LOCK TABLES `skill` WRITE;
/*!40000 ALTER TABLE `skill` DISABLE KEYS */;
/*!40000 ALTER TABLE `skill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sub_category`
--

DROP TABLE IF EXISTS `sub_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sub_category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sub_category` varchar(45) NOT NULL,
  `category_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_sub_category_category1_idx` (`category_id`),
  CONSTRAINT `fk_sub_category_category1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_category`
--

LOCK TABLES `sub_category` WRITE;
/*!40000 ALTER TABLE `sub_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `sub_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(12) NOT NULL,
  `datetime_joined` datetime NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('lukefer','Luke','Fernando','lukefernando.contact@gmail.com','Yn8fQA$9Bihp','2024-07-28 16:01:54');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-07-28 18:37:40
