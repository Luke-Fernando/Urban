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
-- Table structure for table ` education`
--

DROP TABLE IF EXISTS ` education`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE ` education` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_username` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(150) NOT NULL,
  `issued_date` date NOT NULL,
  `link` text,
  PRIMARY KEY (`id`),
  KEY `fk_ education_user1_idx` (`user_username`),
  CONSTRAINT `fk_ education_user1` FOREIGN KEY (`user_username`) REFERENCES `user` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table ` education`
--

LOCK TABLES ` education` WRITE;
/*!40000 ALTER TABLE ` education` DISABLE KEYS */;
/*!40000 ALTER TABLE ` education` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `application`
--

DROP TABLE IF EXISTS `application`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `application` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `application`
--

LOCK TABLES `application` WRITE;
/*!40000 ALTER TABLE `application` DISABLE KEYS */;
/*!40000 ALTER TABLE `application` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `badge`
--

DROP TABLE IF EXISTS `badge`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `badge` (
  `id` int NOT NULL AUTO_INCREMENT,
  `badge` varchar(45) NOT NULL,
  `file_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_badge_file1_idx` (`file_id`),
  CONSTRAINT `fk_badge_file1` FOREIGN KEY (`file_id`) REFERENCES `file` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `badge`
--

LOCK TABLES `badge` WRITE;
/*!40000 ALTER TABLE `badge` DISABLE KEYS */;
INSERT INTO `badge` VALUES (1,'Rising star',5),(2,'Repeat buyer',6);
/*!40000 ALTER TABLE `badge` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Development and IT'),(2,'Design and art'),(3,'Writing and translation'),(4,'Video and animation'),(5,'Digital marketing'),(6,'Finance and accounting');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `certification`
--

DROP TABLE IF EXISTS `certification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `certification` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(150) NOT NULL,
  `issued_date` date NOT NULL,
  `link` text,
  `provider` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_certification_user1_idx` (`username`),
  CONSTRAINT `fk_certification_user1` FOREIGN KEY (`username`) REFERENCES `user` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `certification`
--

LOCK TABLES `certification` WRITE;
/*!40000 ALTER TABLE `certification` DISABLE KEYS */;
INSERT INTO `certification` VALUES (1,'lukefer','Certification title','Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus sit iste blanditiis dicta, obcaecati accusantium vero. Iure suscipit dolore velit!','2024-06-06','example.com','freeCodeCamp.org'),(2,'lukefer','This is my awesome certification','This is a short description edited','2028-08-13','www.example-edited.com','My Awesome provider'),(11,'lukefer','My birth certificate','This is my birth certificate.','2001-04-21','www.gov.com','General hospital');
/*!40000 ALTER TABLE `certification` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `experience`
--

LOCK TABLES `experience` WRITE;
/*!40000 ALTER TABLE `experience` DISABLE KEYS */;
INSERT INTO `experience` VALUES (1,'Junior'),(2,'Medium'),(3,'Senior');
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `file`
--

LOCK TABLES `file` WRITE;
/*!40000 ALTER TABLE `file` DISABLE KEYS */;
INSERT INTO `file` VALUES (1,'job-file-66ae3b483c067.pdf',1),(2,'job-file-66ae3b48418b1.pdf',1),(3,'user.png',2),(4,'portfolio_1.png',2),(5,'badge_1.svg',2),(6,'badge_2.svg',2),(7,'1723481752860-670313-66ba3eb8f1ffa.jpg',2),(8,'1723481807627-224433-66ba3f0bbf69e.jpg',2),(9,'3-66bb5b5b94206-66bb5b7b531d3.jpg',2),(10,'2-66bb668b88d8e.jpg',2),(11,'1723557531655-624875-66bb66bf322a5.jpg',2),(12,'3-66bb8f5cf19b5.jpg',2),(13,'1723571376469-223908-66bb9cdb05425.jpg',2),(14,'1723576998919-128742-66bbb2cc9641a.png',2),(15,'job-file-66c09cafe4401.png',1);
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `file_type`
--

LOCK TABLES `file_type` WRITE;
/*!40000 ALTER TABLE `file_type` DISABLE KEYS */;
INSERT INTO `file_type` VALUES (1,'any'),(2,'image');
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
  `budget` double NOT NULL,
  `datetime_added` datetime NOT NULL,
  `username` varchar(20) NOT NULL,
  `datetime_viewed` datetime DEFAULT NULL,
  `status_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_jobs_category1_idx` (`category_id`),
  KEY `fk_jobs_sub_category1_idx` (`sub_category_id`),
  KEY `fk_job_number_of_freelancers1_idx` (`number_of_freelancers_id`),
  KEY `fk_job_experience1_idx` (`experience_id`),
  KEY `fk_job_payment_type1_idx` (`payment_type_id`),
  KEY `fk_job_user1_idx` (`username`),
  KEY `fk_job_status1_idx` (`status_id`),
  CONSTRAINT `fk_job_experience1` FOREIGN KEY (`experience_id`) REFERENCES `experience` (`id`),
  CONSTRAINT `fk_job_number_of_freelancers1` FOREIGN KEY (`number_of_freelancers_id`) REFERENCES `number_of_freelancers` (`id`),
  CONSTRAINT `fk_job_payment_type1` FOREIGN KEY (`payment_type_id`) REFERENCES `payment_type` (`id`),
  CONSTRAINT `fk_job_status1` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`),
  CONSTRAINT `fk_job_user1` FOREIGN KEY (`username`) REFERENCES `user` (`username`),
  CONSTRAINT `fk_jobs_category1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  CONSTRAINT `fk_jobs_sub_category1` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job`
--

LOCK TABLES `job` WRITE;
/*!40000 ALTER TABLE `job` DISABLE KEYS */;
INSERT INTO `job` VALUES (1,'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla atque incidunt, eligendi minima dolor commodi dicta laboriosam accusantium voluptatibus assumenda! ','Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente ipsam hic incidunt dolorem omnis voluptatibus eos similique! Laudantium sed sunt, molestias corrupti esse hic optio quod expedita adipisci! Magnam, quas vitae molestiae earum facilis debitis repellat cum vel nesciunt quasi perspiciatis in. Quam illum maiores sapiente doloremque exercitationem aliquam eaque earum sequi odio tempore molestias nesciunt sed possimus nihil, dolorum ex ducimus odit impedit, enim praesentium explicabo repudiandae voluptatem tenetur doloribus? Distinctio tempore quam harum voluptatibus voluptatum corrupti earum maiores consectetur vero, ad cumque provident aliquid, dolor perspiciatis architecto maxime quisquam ducimus porro animi atque odio quod. Ipsum adipisci molestias modi, fugiat, perspiciatis inventore laboriosam distinctio provident eligendi saepe deserunt aperiam officiis doloremque, quas animi rerum aliquam beatae a maxime corrupti voluptatibus debitis obcaecati? Laborum quos explicabo ex voluptatem deleniti nostrum laboriosam provident ullam dolorum accusantium reprehenderit accusamus ipsa dignissimos, placeat magnam vero quam, repellendus reiciendis cum magni, rem nulla. ',1,1,1,1,1,10,'2024-08-03 19:44:32','lukefer','2024-08-03 19:44:32',1),(2,'Seeking Creative Content Writer for Eco-Friendly Blog','We are looking for a talented content writer with a passion for environmental sustainability to contribute to our eco-friendly lifestyle blog. The ideal candidate should be able to produce engaging, well-researched articles on topics such as zero-waste living, renewable energy, sustainable fashion, and green technology. Experience with SEO and a conversational writing style are a plus. This is a remote position with flexible deadlines. Potential for ongoing work for the right candidate. Please provide writing samples and a brief summary of your experience.',1,1,1,1,1,150,'2024-08-17 18:20:55','lukefer','2024-08-17 18:20:55',1),(3,'Full-Stack Developer Needed for E-Commerce Website Redesign','We\'re seeking an experienced full-stack developer to redesign our existing e-commerce website. The project involves modernizing the front-end with a responsive design and enhancing back-end functionality to improve user experience and site performance. Proficiency in React, Node.js, and MongoDB is required. Familiarity with payment gateway integration and SEO best practices is a plus. This is a one-time project with a possibility of future maintenance work.',1,1,2,1,2,15,'2024-08-17 18:35:35','lukefer','2024-08-17 18:35:35',1),(4,'WordPress Developer for Custom Plugin Creation','Looking for a skilled WordPress developer to create a custom plugin that enhances our site\'s user engagement. The plugin should allow users to create and share custom content, integrate smoothly with existing themes, and be optimized for speed and security. Experience with PHP, MySQL, and WordPress plugin development is essential. Previous work samples and a detailed proposal are required.',1,1,2,1,1,20,'2024-08-17 18:36:19','lukefer','2024-08-17 18:36:19',1),(5,'WordPress Developer for Custom Plugin Creation','Looking for a skilled WordPress developer to create a custom plugin that enhances our site\'s user engagement. The plugin should allow users to create and share custom content, integrate smoothly with existing themes, and be optimized for speed and security. Experience with PHP, MySQL, and WordPress plugin development is essential. Previous work samples and a detailed proposal are required.',1,1,2,1,1,20,'2024-08-17 18:36:35','lukefer','2024-08-17 18:36:35',1),(6,'Front-End Developer for Single Page Application (SPA) Development','We need a talented front-end developer to build a dynamic Single Page Application (SPA) using Vue.js or React. The project involves creating a responsive user interface with smooth transitions and animations. Strong skills in JavaScript, HTML5, and CSS3 are necessary. Experience with RESTful APIs and front-end testing frameworks is a bonus. This is a short-term project with clear milestones and deadlines.',1,1,2,1,2,10,'2024-08-17 18:37:32','lukefer','2024-08-17 18:37:32',1),(7,'Shopify Developer to Optimize Online Store Performance','Seeking a Shopify developer to optimize our online store for better performance and faster load times. The job includes code optimization, image compression, and implementing best practices for Shopify speed enhancement. Familiarity with Liquid, HTML/CSS, and SEO for Shopify is required. This is a quick turnaround project with potential for ongoing support based on results.',1,1,2,1,1,250,'2024-08-17 18:39:38','lukefer','2024-08-17 18:39:38',1),(8,'Backend Developer Needed for API Integration and Database Management','We are looking for a backend developer to help with API integration and database management for a new web application. The job involves connecting our application to third-party services and optimizing our database for efficiency and scalability. Required skills include Node.js, Express, PostgreSQL, and RESTful API development. Previous experience with cloud services (AWS, Azure) is preferred. This project has a tight deadline, so availability for immediate start is important.',1,1,2,1,2,15,'2024-08-17 18:40:31','lukefer','2024-08-17 18:40:31',1);
/*!40000 ALTER TABLE `job` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_has_application`
--

DROP TABLE IF EXISTS `job_has_application`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_has_application` (
  `job_id` int NOT NULL,
  `application_id` int NOT NULL,
  PRIMARY KEY (`job_id`,`application_id`),
  KEY `fk_job_has_application_application1_idx` (`application_id`),
  KEY `fk_job_has_application_job1_idx` (`job_id`),
  CONSTRAINT `fk_job_has_application_application1` FOREIGN KEY (`application_id`) REFERENCES `application` (`id`),
  CONSTRAINT `fk_job_has_application_job1` FOREIGN KEY (`job_id`) REFERENCES `job` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_has_application`
--

LOCK TABLES `job_has_application` WRITE;
/*!40000 ALTER TABLE `job_has_application` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_has_application` ENABLE KEYS */;
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
INSERT INTO `job_has_file` VALUES (1,1),(1,2),(2,15);
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
INSERT INTO `job_has_language` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(7,3),(4,5),(5,5),(1,6);
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
INSERT INTO `job_has_skill` VALUES (1,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(1,2),(3,2),(4,2),(5,2),(6,2),(7,2),(8,2),(1,3),(3,3),(4,3),(5,3),(6,3),(7,3),(8,3),(1,5),(6,5),(8,5),(1,6),(4,6),(5,6),(8,6),(1,7),(3,7),(8,7),(2,9);
/*!40000 ALTER TABLE `job_has_skill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_has_user`
--

DROP TABLE IF EXISTS `job_has_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_has_user` (
  `job_id` int NOT NULL,
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`job_id`,`username`),
  KEY `fk_job_has_user_user1_idx` (`username`),
  KEY `fk_job_has_user_job1_idx` (`job_id`),
  CONSTRAINT `fk_job_has_user_job1` FOREIGN KEY (`job_id`) REFERENCES `job` (`id`),
  CONSTRAINT `fk_job_has_user_user1` FOREIGN KEY (`username`) REFERENCES `user` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_has_user`
--

LOCK TABLES `job_has_user` WRITE;
/*!40000 ALTER TABLE `job_has_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_has_user` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `language`
--

LOCK TABLES `language` WRITE;
/*!40000 ALTER TABLE `language` DISABLE KEYS */;
INSERT INTO `language` VALUES (1,'English'),(2,'Spanish'),(3,'French'),(4,'German'),(5,'Russian'),(6,'Sinhala');
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `number_of_freelancers`
--

LOCK TABLES `number_of_freelancers` WRITE;
/*!40000 ALTER TABLE `number_of_freelancers` DISABLE KEYS */;
INSERT INTO `number_of_freelancers` VALUES (1,'1'),(2,'1 to 5'),(3,'5 to 10'),(4,'10 to 20'),(5,'More than 20');
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_type`
--

LOCK TABLES `payment_type` WRITE;
/*!40000 ALTER TABLE `payment_type` DISABLE KEYS */;
INSERT INTO `payment_type` VALUES (1,'Fixed'),(2,'Hourly');
/*!40000 ALTER TABLE `payment_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `portfolio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `link` text,
  `file_id` int NOT NULL,
  PRIMARY KEY (`id`,`file_id`),
  KEY `fk_portfolio_user1_idx` (`username`),
  KEY `fk_portfolio_file1_idx` (`file_id`),
  CONSTRAINT `fk_portfolio_file1` FOREIGN KEY (`file_id`) REFERENCES `file` (`id`),
  CONSTRAINT `fk_portfolio_user1` FOREIGN KEY (`username`) REFERENCES `user` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `portfolio`
--

LOCK TABLES `portfolio` WRITE;
/*!40000 ALTER TABLE `portfolio` DISABLE KEYS */;
INSERT INTO `portfolio` VALUES (1,'lukefer','This is the sample project name','example.com',4),(2,'lukefer','My great portfolio title','example.com',10),(3,'lukefer','Awesome portfolio','www.link.com',12),(6,'lukefer','Another awesome portfolio','www.awesome.com',14);
/*!40000 ALTER TABLE `portfolio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile_picture`
--

DROP TABLE IF EXISTS `profile_picture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profile_picture` (
  `username` varchar(20) NOT NULL,
  `file_id` int NOT NULL,
  PRIMARY KEY (`username`),
  KEY `fk_profile_picture_users_idx` (`username`),
  KEY `fk_profile_picture_file1_idx` (`file_id`),
  CONSTRAINT `fk_profile_picture_file1` FOREIGN KEY (`file_id`) REFERENCES `file` (`id`),
  CONSTRAINT `fk_profile_picture_users` FOREIGN KEY (`username`) REFERENCES `user` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile_picture`
--

LOCK TABLES `profile_picture` WRITE;
/*!40000 ALTER TABLE `profile_picture` DISABLE KEYS */;
INSERT INTO `profile_picture` VALUES ('lukefer',3);
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
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `review` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `star` int NOT NULL,
  `datetime_added` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_review_user1_idx` (`username`),
  CONSTRAINT `fk_review_user1` FOREIGN KEY (`username`) REFERENCES `user` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review`
--

LOCK TABLES `review` WRITE;
/*!40000 ALTER TABLE `review` DISABLE KEYS */;
INSERT INTO `review` VALUES (1,'lukefer','This is the sample review title','Morem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus.',3,'2024-08-03 19:44:32');
/*!40000 ALTER TABLE `review` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `saved_job`
--

DROP TABLE IF EXISTS `saved_job`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `saved_job` (
  `job_id` int NOT NULL,
  `username` varchar(20) NOT NULL,
  KEY `fk_saved_job_job1_idx` (`job_id`),
  KEY `fk_saved_job_user1_idx` (`username`),
  CONSTRAINT `fk_saved_job_job1` FOREIGN KEY (`job_id`) REFERENCES `job` (`id`),
  CONSTRAINT `fk_saved_job_user1` FOREIGN KEY (`username`) REFERENCES `user` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `saved_job`
--

LOCK TABLES `saved_job` WRITE;
/*!40000 ALTER TABLE `saved_job` DISABLE KEYS */;
INSERT INTO `saved_job` VALUES (3,'lukefer'),(8,'lukefer');
/*!40000 ALTER TABLE `saved_job` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skill`
--

LOCK TABLES `skill` WRITE;
/*!40000 ALTER TABLE `skill` DISABLE KEYS */;
INSERT INTO `skill` VALUES (1,'HTML5',1),(2,'CSS3',1),(3,'JavaScript',1),(4,'Bootstrap',1),(5,'Responsive design',1),(6,'PHP',1),(7,'SQL',1),(8,'Git',1),(9,'WordPress',1);
/*!40000 ALTER TABLE `skill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `status` (
  `id` int NOT NULL AUTO_INCREMENT,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (1,'available'),(2,'unavailable');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_category`
--

LOCK TABLES `sub_category` WRITE;
/*!40000 ALTER TABLE `sub_category` DISABLE KEYS */;
INSERT INTO `sub_category` VALUES (1,'Web development',1),(2,'Mobile development',1),(3,'Software development',1),(4,'DevOps and cloud',1),(5,'Database management',1),(6,'Blockchain and cryptocurrency',1);
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
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(12) NOT NULL,
  `datetime_joined` datetime NOT NULL,
  `status_id` int NOT NULL,
  PRIMARY KEY (`username`),
  KEY `fk_user_status1_idx` (`status_id`),
  CONSTRAINT `fk_user_status1` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('lukefer','Luke','Fernando','Frontend Developer','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur id ex ut interdum. Nunc facilisis malesuada risus, tempor semper felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum consequat eros non magna sollicitudin, molestie faucibus dui tincidunt. Vivamus non sagittis nunc. Integer vitae urna sagittis, fringilla augue et, ornare justo. Maecenas maximus ante mi, non viverra magna ullamcorper a. Ut commodo dui eu nunc egestas feugiat. Sed fringilla, tellus eu porta scelerisque, erat diam sodales augue, ac pharetra velit mi ac libero. Maecenas eget eros purus. Morbi nec odio consectetur, ultricies turpis quis, tempor urna. Curabitur nec urna dapibus, luctus enim a, faucibus neque.','lukefernando.contact@gmail.com','Yn8fQA$9Bihp','2024-07-28 16:01:54',0);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_has_badge`
--

DROP TABLE IF EXISTS `user_has_badge`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_has_badge` (
  `username` varchar(20) NOT NULL,
  `badge_id` int NOT NULL,
  PRIMARY KEY (`username`,`badge_id`),
  KEY `fk_user_has_badge_badge1_idx` (`badge_id`),
  KEY `fk_user_has_badge_user1_idx` (`username`),
  CONSTRAINT `fk_user_has_badge_badge1` FOREIGN KEY (`badge_id`) REFERENCES `badge` (`id`),
  CONSTRAINT `fk_user_has_badge_user1` FOREIGN KEY (`username`) REFERENCES `user` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_has_badge`
--

LOCK TABLES `user_has_badge` WRITE;
/*!40000 ALTER TABLE `user_has_badge` DISABLE KEYS */;
INSERT INTO `user_has_badge` VALUES ('lukefer',1),('lukefer',2);
/*!40000 ALTER TABLE `user_has_badge` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_has_language`
--

DROP TABLE IF EXISTS `user_has_language`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_has_language` (
  `username` varchar(20) NOT NULL,
  `language_id` int NOT NULL,
  PRIMARY KEY (`username`,`language_id`),
  KEY `fk_user_has_language_language1_idx` (`language_id`),
  KEY `fk_user_has_language_user1_idx` (`username`),
  CONSTRAINT `fk_user_has_language_language1` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`),
  CONSTRAINT `fk_user_has_language_user1` FOREIGN KEY (`username`) REFERENCES `user` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_has_language`
--

LOCK TABLES `user_has_language` WRITE;
/*!40000 ALTER TABLE `user_has_language` DISABLE KEYS */;
INSERT INTO `user_has_language` VALUES ('lukefer',2),('lukefer',6);
/*!40000 ALTER TABLE `user_has_language` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_has_review`
--

DROP TABLE IF EXISTS `user_has_review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_has_review` (
  `username` varchar(20) NOT NULL,
  `review_id` int NOT NULL,
  PRIMARY KEY (`username`,`review_id`),
  KEY `fk_user_has_review_review1_idx` (`review_id`),
  KEY `fk_user_has_review_user1_idx` (`username`),
  CONSTRAINT `fk_user_has_review_review1` FOREIGN KEY (`review_id`) REFERENCES `review` (`id`),
  CONSTRAINT `fk_user_has_review_user1` FOREIGN KEY (`username`) REFERENCES `user` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_has_review`
--

LOCK TABLES `user_has_review` WRITE;
/*!40000 ALTER TABLE `user_has_review` DISABLE KEYS */;
INSERT INTO `user_has_review` VALUES ('lukefer',1);
/*!40000 ALTER TABLE `user_has_review` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_has_skill`
--

DROP TABLE IF EXISTS `user_has_skill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_has_skill` (
  `username` varchar(20) NOT NULL,
  `skill_id` int NOT NULL,
  PRIMARY KEY (`username`,`skill_id`),
  KEY `fk_user_has_skill_skill1_idx` (`skill_id`),
  KEY `fk_user_has_skill_user1_idx` (`username`),
  CONSTRAINT `fk_user_has_skill_skill1` FOREIGN KEY (`skill_id`) REFERENCES `skill` (`id`),
  CONSTRAINT `fk_user_has_skill_user1` FOREIGN KEY (`username`) REFERENCES `user` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_has_skill`
--

LOCK TABLES `user_has_skill` WRITE;
/*!40000 ALTER TABLE `user_has_skill` DISABLE KEYS */;
INSERT INTO `user_has_skill` VALUES ('lukefer',1),('lukefer',2),('lukefer',3);
/*!40000 ALTER TABLE `user_has_skill` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-08-30 23:39:48
