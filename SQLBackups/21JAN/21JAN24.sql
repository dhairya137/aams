-- MySQL dump 10.13  Distrib 8.0.32, for Linux (x86_64)
--
-- Host: localhost    Database: attendance_and_academia
-- ------------------------------------------------------
-- Server version	8.0.32-0ubuntu0.20.04.2

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `admin_id` int NOT NULL,
  `admin_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_pwd` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `contact_admin` int NOT NULL,
  `email_admin` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_profile` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','admin',9999,'admin@gmail.com',NULL),(2,'dhruv','dhruv',99999,'dhruv@gmail.com','1705854167.png');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `attendance` (
  `attend_id` int NOT NULL,
  `enrollment` bigint DEFAULT NULL,
  `attend` tinyint(1) NOT NULL,
  `faculty_id` int DEFAULT NULL,
  `faculty_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `subject_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `type_lect` tinyint(1) NOT NULL,
  `date_attend` date NOT NULL,
  PRIMARY KEY (`attend_id`),
  KEY `enrollment` (`enrollment`),
  KEY `faculty_id` (`faculty_id`),
  CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`enrollment`) REFERENCES `student` (`enrollment`),
  CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attendance`
--

LOCK TABLES `attendance` WRITE;
/*!40000 ALTER TABLE `attendance` DISABLE KEYS */;
/*!40000 ALTER TABLE `attendance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faculty` (
  `faculty_id` int NOT NULL,
  `faculty_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `faculty_pwd` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `subject_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `contact_faculty` int NOT NULL,
  `email_faculty` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `faculty_profile` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`faculty_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faculty`
--

LOCK TABLES `faculty` WRITE;
/*!40000 ALTER TABLE `faculty` DISABLE KEYS */;
INSERT INTO `faculty` VALUES (1,'Ashish','ashish','AJAVA',123,'ashish@ldrp.in','0','1705845312.png');
/*!40000 ALTER TABLE `faculty` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leave`
--

DROP TABLE IF EXISTS `leave`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `leave` (
  `leave_id` int NOT NULL AUTO_INCREMENT,
  `enrollment` bigint DEFAULT NULL,
  `leave_faculty` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `leave_desc` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `leave_start_date` date NOT NULL,
  `leave_end_date` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`leave_id`),
  KEY `enrollment` (`enrollment`),
  CONSTRAINT `leave_ibfk_1` FOREIGN KEY (`enrollment`) REFERENCES `student` (`enrollment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leave`
--

LOCK TABLES `leave` WRITE;
/*!40000 ALTER TABLE `leave` DISABLE KEYS */;
/*!40000 ALTER TABLE `leave` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meeting`
--

DROP TABLE IF EXISTS `meeting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `meeting` (
  `meeting_id` int NOT NULL AUTO_INCREMENT,
  `faculty_id` int DEFAULT NULL,
  `topic_meet` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `room_no` int NOT NULL,
  `date_meet` date NOT NULL,
  `desc_meeting` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `time_meet` time NOT NULL,
  PRIMARY KEY (`meeting_id`),
  KEY `faculty_id` (`faculty_id`),
  CONSTRAINT `meeting_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meeting`
--

LOCK TABLES `meeting` WRITE;
/*!40000 ALTER TABLE `meeting` DISABLE KEYS */;
/*!40000 ALTER TABLE `meeting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proxy_lecture`
--

DROP TABLE IF EXISTS `proxy_lecture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `proxy_lecture` (
  `proxy_id` int NOT NULL AUTO_INCREMENT,
  `from_faculty` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `to_faculty` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `date_proxy` date NOT NULL,
  `time_proxy` time NOT NULL,
  `desc_proxy` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`proxy_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proxy_lecture`
--

LOCK TABLES `proxy_lecture` WRITE;
/*!40000 ALTER TABLE `proxy_lecture` DISABLE KEYS */;
/*!40000 ALTER TABLE `proxy_lecture` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seminar_lecture_test`
--

DROP TABLE IF EXISTS `seminar_lecture_test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `seminar_lecture_test` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lecturer_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `type_seminar_lect_test` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `date_test_lect` date NOT NULL,
  `topic_test_lect` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `faculty_id` int DEFAULT NULL,
  `time_test_lect` time NOT NULL,
  `desc_lecture` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `faculty_id` (`faculty_id`),
  CONSTRAINT `seminar_lecture_test_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seminar_lecture_test`
--

LOCK TABLES `seminar_lecture_test` WRITE;
/*!40000 ALTER TABLE `seminar_lecture_test` DISABLE KEYS */;
/*!40000 ALTER TABLE `seminar_lecture_test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `student` (
  `enrollment` bigint NOT NULL,
  `std_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `std_pwd` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `contact_std` int NOT NULL,
  `semester` int DEFAULT NULL,
  `email_std` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `div_std` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `batch_std` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `std_profile` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`enrollment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1,'Dhairya Patel','dhairya',9,NULL,'dhairya00798@gmail.com',NULL,NULL,NULL),(2,'Dhairya Patel','dhairya',99,NULL,'dhairya00798@gmail.com',NULL,NULL,NULL),(123,'Dp','dhairya',9989,1,'dp@gmail.com','A','A1','1705845012.png');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subject` (
  `subject_name` varchar(50) NOT NULL,
  PRIMARY KEY (`subject_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subject`
--

LOCK TABLES `subject` WRITE;
/*!40000 ALTER TABLE `subject` DISABLE KEYS */;
INSERT INTO `subject` VALUES ('English');
/*!40000 ALTER TABLE `subject` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `timetable`
--

DROP TABLE IF EXISTS `timetable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `timetable` (
  `day_timetable` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `subject_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `faculty_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `batch_table` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `type_lect` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `div_table` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `room_lectlab_no` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `timetable`
--

LOCK TABLES `timetable` WRITE;
/*!40000 ALTER TABLE `timetable` DISABLE KEYS */;
INSERT INTO `timetable` VALUES ('1','English','Ashish','A2','08:00:00','09:00:00','lab','A',NULL);
/*!40000 ALTER TABLE `timetable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-21 21:57:15
