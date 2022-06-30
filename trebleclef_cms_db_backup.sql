-- MySQL dump 10.19  Distrib 10.3.32-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: trebleclef_app
-- ------------------------------------------------------
-- Server version	10.3.32-MariaDB-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
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
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `message_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `receiverId` bigint(20) unsigned NOT NULL,
  `attachments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,8,'Hi','2022-06-12 17:27:00','2022-06-12 17:27:00',9,NULL),(2,2,'hello','2022-06-12 17:32:37','2022-06-12 17:32:37',9,NULL),(3,9,'heyloooo','2022-06-12 17:32:56','2022-06-12 17:32:56',9,NULL);
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (22,'2014_10_12_000000_create_users_table',1),(23,'2014_10_12_100000_create_password_resets_table',1),(24,'2019_08_19_000000_create_failed_jobs_table',1),(25,'2019_12_14_000001_create_personal_access_tokens_table',1),(26,'2022_04_05_215030_create_students_table',1),(27,'2022_04_05_215110_create_tutors_table',1),(28,'2022_04_05_215227_create_student_details_table',1),(29,'2022_04_05_215300_create_tutor_details_table',1),(30,'2022_04_05_215516_create_user_types_table',1),(31,'2022_05_30_151132_create_messages_table',2),(32,'2022_06_05_135254_create_tutor_invites_table',2),(33,'2022_06_05_145146_add_details_to_tutors_table',2),(34,'2022_06_05_214259_add_field_to_messages_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_details`
--

DROP TABLE IF EXISTS `student_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_details`
--

LOCK TABLES `student_details` WRITE;
/*!40000 ALTER TABLE `student_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `student_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residential_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `postal_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cellphoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `next_of_kin_fullName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `next_of_kin_cellphoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (1,1,NULL,'1/20.Apr.2022.19:04:750/69e71c2b-cfe5-4597-9430-6a93f1825d76-removebg-preview_auto_x2.jpg','hello love music','male','c8380323-f1f2-40a2-952b-7c00fbe9e26b',NULL,'2022-04-21',NULL,'0845899764',NULL,NULL,'2022-04-20 17:24:09','2022-04-20 17:28:57'),(2,2,NULL,'2/20.Apr.2022.21:04:469/TYE.jpg','Music is my first love. It Soothes, cleanses, inspires and serves as my safe space. Welcome to my profile, lets enjoy the journey together.','male','1b1b6045-a9d2-4339-b561-4249d727098e','The Parks Lifestyle Apartments\r\n21-2H','1988-01-06','The Parks Lifestyle Apartments\r\n21-2H','27786865680','Katlego Mosaka','0769480695','2022-04-20 19:01:36','2022-04-23 19:05:09'),(3,3,NULL,'3/21.Apr.2022.09:04:012/769e238f-2008-483b-8543-9033ea6ec68e.JPG','I love music its best thing in my life.','male','240bd2ff-1916-4331-8142-46fce393eb3c',NULL,'2022-04-19',NULL,'0845899764',NULL,NULL,'2022-04-21 07:00:40','2022-04-21 07:31:20'),(4,4,NULL,'4/21.Apr.2022.20:04:945/769e238f-2008-483b-8543-9033ea6ec68e.JPG','I am a total music enthusiast and I would die for my Guitar.','male','54a26f40-0174-412f-a1cf-fb2e120ff60e',NULL,'1988-01-06',NULL,'0845899764',NULL,NULL,'2022-04-21 18:48:41','2022-04-21 18:52:59'),(5,5,NULL,'5/22.Apr.2022.09:04:442/57W-new-suite-ext.jpeg','Hello love music','female','e68bdebc-b180-4cee-b0ea-37d8ab98ccae',NULL,'2022-04-20',NULL,'0845899764',NULL,NULL,'2022-04-22 07:08:24','2022-04-22 07:08:50'),(6,6,NULL,'6/28.Apr.2022.12:04:186/IMG_20220425_202300_321.jpg','Music','male','eb721752-6c29-42e9-88c0-89e57b17bf83',NULL,'1994-04-28',NULL,'068464686',NULL,NULL,'2022-04-28 10:41:36','2022-04-28 10:43:08'),(7,7,NULL,NULL,NULL,'male','9091c0d8-3941-4b65-ba90-43f9995addf3',NULL,'2022-05-19',NULL,'0671254408',NULL,NULL,'2022-05-30 12:02:59','2022-05-30 12:02:59'),(8,8,NULL,NULL,NULL,'male','9091c0d8-3941-4b65-ba90-43f9995addf3',NULL,'2021-12-26',NULL,'0845899764',NULL,NULL,'2022-06-12 17:22:40','2022-06-12 17:22:40');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tutor_details`
--

DROP TABLE IF EXISTS `tutor_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tutor_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tutor_details`
--

LOCK TABLES `tutor_details` WRITE;
/*!40000 ALTER TABLE `tutor_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `tutor_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tutor_invites`
--

DROP TABLE IF EXISTS `tutor_invites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tutor_invites` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `TutorInviteEmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tutor_invites`
--

LOCK TABLES `tutor_invites` WRITE;
/*!40000 ALTER TABLE `tutor_invites` DISABLE KEYS */;
INSERT INTO `tutor_invites` VALUES (1,'allanstack101@gmail.com',0,'2022-06-05 20:47:44','2022-06-05 20:47:44'),(2,'info@trebleclefacademy.co.za',0,'2022-06-06 17:37:19','2022-06-06 17:37:19'),(3,'tendainyamz@gmail.com',0,'2022-06-06 17:38:16','2022-06-06 17:38:16'),(4,'info@trebleclefacademy.co.za',0,'2022-06-12 17:23:30','2022-06-12 17:23:30');
/*!40000 ALTER TABLE `tutor_invites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tutors`
--

DROP TABLE IF EXISTS `tutors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tutors` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `userId` bigint(20) unsigned NOT NULL,
  `userType` bigint(20) unsigned NOT NULL DEFAULT 2,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `profile_picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cellphoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tutors`
--

LOCK TABLES `tutors` WRITE;
/*!40000 ALTER TABLE `tutors` DISABLE KEYS */;
INSERT INTO `tutors` VALUES (1,9,2,'2022-06-12 17:25:44','2022-06-12 17:25:44',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `tutors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_types`
--

DROP TABLE IF EXISTS `user_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_types`
--

LOCK TABLES `user_types` WRITE;
/*!40000 ALTER TABLE `user_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userType` bigint(20) unsigned NOT NULL DEFAULT 1,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Allan','Muzeya',1,'allan@allanthecodemaster.co.za',NULL,'$2y$10$vWa7zvvdlkXY2y6wSaFd1OhN1qkQvI1k50xvRSnwCVnpKuInR.yke',NULL,'2022-04-20 17:24:09','2022-04-20 17:24:09'),(2,'Tendai','Nyamayaro',3,'tendainyamz@gmail.com',NULL,'$2y$10$SgwJkHRSnZNQ4BCOU1dTWOdk8cdduBEpA/fA1jsO7dboweR6MPNda','WVdnHVkPpDye9fsVPcatKnrWxYTpJGlci9V9zXCsPVTQmKPtSnksRBq5LSlq','2022-04-20 19:01:36','2022-04-20 19:13:38'),(3,'Allan','Muzeya',3,'allan.muzeya@wundermanthompson.com',NULL,'$2y$10$q9U7D7Yu1elLscm/CMYy1euBQbqqDociJwKEibOJvkSqPxDH2fTwG',NULL,'2022-04-21 07:00:40','2022-04-21 07:00:40'),(4,'Tendai','Nyamayaro',3,'tendai@trebleclefacademy.co.za',NULL,'$2y$10$cy3olk23Jlx3wwBjOFc3LeP2Pb7sFe8arKVLKqtF.zw8u.PrZ4fM2',NULL,'2022-04-21 18:48:41','2022-04-21 18:57:28'),(5,'Allan','Muzeya',1,'allan@wundermanthompson.com',NULL,'$2y$10$JnIGgZ9h5Sq9T2jr1uHOC.tzm5w3uocveRADwU82eXM1O9zz9qPwm',NULL,'2022-04-22 07:08:24','2022-04-22 07:08:24'),(6,'Mike','Jacob',1,'jacobswaynee@gmail.com',NULL,'$2y$10$vnEq0CrfE.dNsKB1izeuKu/bVqcjVBACl9pFIIp3HykB1f0x.q7Sq','NR2Yt1A7QVGREc5ttvOO8TN00RFh9ir7TDVKWKVSRIjj9tHzVK6jM2quRaFJ','2022-04-28 10:41:36','2022-04-28 10:41:36'),(7,'BATSIRAI','MUCHAREVA',1,'much.batsy@gmail.com',NULL,'$2y$10$3R87yL.NNJ5e1hhPKcvkl.61L0nchyW2UMeFbq2mkj.5qIyycprU.',NULL,'2022-05-30 12:02:59','2022-05-30 12:02:59'),(8,'Donnel','Morphine',1,'donnel@gmail.com',NULL,'$2y$10$hgbKBl.WUrFembHF8khICem6J.JRngAvdrYypWN0jGB7roICfpm42',NULL,'2022-06-12 17:22:40','2022-06-12 17:22:40'),(9,'silas','moyo',2,'silas@gmail.com',NULL,'$2y$10$fbzDIh5csKvZyh50BWihJeCS.FYYv2R40/z.XtQ7jRwFwOUJTsiea','hh5Kge84oG6hKQjOsmxjXBftCbeOQd4i3BFbVrmvVIYtiZk6xF5kya6Lhm6E','2022-06-12 17:25:44','2022-06-12 17:25:44');
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

-- Dump completed on 2022-06-18 12:18:36
