-- MySQL dump 10.13  Distrib 5.7.23-23, for Linux (x86_64)
--
-- Host: localhost    Database: yousabte_verde
-- ------------------------------------------------------
-- Server version	5.7.23-23

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*!50717 SELECT COUNT(*) INTO @rocksdb_has_p_s_session_variables FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'performance_schema' AND TABLE_NAME = 'session_variables' */;
/*!50717 SET @rocksdb_get_is_supported = IF (@rocksdb_has_p_s_session_variables, 'SELECT COUNT(*) INTO @rocksdb_is_supported FROM performance_schema.session_variables WHERE VARIABLE_NAME=\'rocksdb_bulk_load\'', 'SELECT 0') */;
/*!50717 PREPARE s FROM @rocksdb_get_is_supported */;
/*!50717 EXECUTE s */;
/*!50717 DEALLOCATE PREPARE s */;
/*!50717 SET @rocksdb_enable_bulk_load = IF (@rocksdb_is_supported, 'SET SESSION rocksdb_bulk_load = 1', 'SET @rocksdb_dummy_bulk_load = 0') */;
/*!50717 PREPARE s FROM @rocksdb_enable_bulk_load */;
/*!50717 EXECUTE s */;
/*!50717 DEALLOCATE PREPARE s */;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dark` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` (`id`, `name`, `email`, `type`, `email_verified_at`, `password`, `remember_token`, `dark`, `created_at`, `updated_at`) VALUES (1,'Boula','admin@gmail.com','admin',NULL,'$2y$10$EuqsZ1KGAOPbmwixmYEjr..5aq7XiDWDuYhh2hIDwxP7gVuXFj7AC',NULL,0,'2025-02-25 18:46:28','2025-02-25 18:46:28'),(2,'Kermina','kermina@gmail.com','employee',NULL,'$2y$10$TwU68DJ1vH7aQ9izLtzN3.eifBFYk.Oxx0xv03uZTzth7fAMRD21q',NULL,0,'2025-02-25 18:46:28','2025-02-25 18:46:28'),(3,'Ibrahim','ibrahim@gmail.com','employee',NULL,'$2y$10$Cv8Fr.8De68lUE64cSeyqucgEWBW0XP3FbV7fGaNffqE7L6HkDOge',NULL,0,'2025-02-25 18:46:28','2025-02-25 18:46:28'),(4,'Konuz','konuz@gmail.com','employee',NULL,'$2y$10$2Vpj/vz/jYn1jc0VmFb9bOLXSTU3jGW0bQVGvbypzw9B8bVxqx57m',NULL,0,'2025-02-25 18:46:28','2025-02-25 18:46:28'),(5,'Melad','melad@gmail.com','employee',NULL,'$2y$10$G6bR2fpVih1sJGoh3aKmOuS9Jec6YDTErtLcvQw0JDtjM3mraxKJC',NULL,0,'2025-02-25 18:46:28','2025-02-25 18:46:28'),(6,'Tadros','tadros@gmail.com',NULL,NULL,'$2y$10$ctLU8ZoR.oljuTMaiNWKV..15dJzNKJZoinEGPOzuMBy.7SGxTN/a',NULL,0,'2025-02-25 18:46:28','2025-02-25 18:46:28');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `icon`, `created_at`, `updated_at`) VALUES (5,'fas fa-desktop','2025-02-25 18:52:21','2025-02-25 18:52:21'),(6,'fas fa-desktop','2025-02-25 18:53:57','2025-02-25 18:53:57');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_translations`
--

DROP TABLE IF EXISTS `category_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `category_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `category_translations_category_id_locale_unique` (`category_id`,`locale`),
  KEY `category_translations_locale_index` (`locale`),
  CONSTRAINT `category_translations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_translations`
--

LOCK TABLES `category_translations` WRITE;
/*!40000 ALTER TABLE `category_translations` DISABLE KEYS */;
INSERT INTO `category_translations` (`id`, `title`, `subtitle`, `description`, `category_id`, `locale`, `created_at`, `updated_at`) VALUES (9,'Interior',NULL,'kkkkdkkdk',5,'en','2025-02-25 18:52:21','2025-02-25 18:52:21'),(10,'الداخلية',NULL,'mdmdmdmd',5,'ar','2025-02-25 18:52:21','2025-02-25 18:52:21'),(11,'Development',NULL,'nnnn',6,'en','2025-02-25 18:53:57','2025-02-25 19:09:29'),(12,'تطوير',NULL,'ffffffff',6,'ar','2025-02-25 18:53:57','2025-02-25 19:09:29');
/*!40000 ALTER TABLE `category_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `complain_translations`
--

DROP TABLE IF EXISTS `complain_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `complain_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `complain_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `complain_translations_complain_id_locale_unique` (`complain_id`,`locale`),
  KEY `complain_translations_locale_index` (`locale`),
  CONSTRAINT `complain_translations_complain_id_foreign` FOREIGN KEY (`complain_id`) REFERENCES `complains` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `complain_translations`
--

LOCK TABLES `complain_translations` WRITE;
/*!40000 ALTER TABLE `complain_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `complain_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `complains`
--

DROP TABLE IF EXISTS `complains`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `complains` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `repeat` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `complains`
--

LOCK TABLES `complains` WRITE;
/*!40000 ALTER TABLE `complains` DISABLE KEYS */;
/*!40000 ALTER TABLE `complains` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`id`, `contact`, `icon`, `type`, `created_at`, `updated_at`) VALUES (1,'https://m.facebook.com/story.php?story_fbid=pfbid0fTMUTMAH79JrTkSWsvR5NxTSCsSpsWAAYAj7Vy5ZsMQiN5N9oABoWii7ejGoj8gWl&id=100657132864232&mibextid=qC1gEa','fab fa-facebook-f','social','2025-02-25 18:46:27','2025-02-25 18:46:27'),(3,'https://instagram.com/verde_developments?igshid=Nzg3NjI1NGI','fab fa-instagram','social','2025-02-25 18:46:27','2025-02-25 18:46:27'),(6,'01122228899','fas fa-phone','phone','2025-02-25 18:46:27','2025-02-25 18:46:27'),(7,'01122228899','fab fa-whatsapp','whatsapp','2025-02-25 18:46:27','2025-02-25 18:46:27'),(8,'01120111138','fas fa-phone','phone',NULL,NULL),(9,'01120111138','fab fa-whatsapp','whatsapp',NULL,NULL),(10,'info@verde-eg.com','fab fa-mail','email',NULL,NULL);
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `counter_translations`
--

DROP TABLE IF EXISTS `counter_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `counter_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `counter_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `counter_translations_counter_id_locale_unique` (`counter_id`,`locale`),
  KEY `counter_translations_locale_index` (`locale`),
  CONSTRAINT `counter_translations_counter_id_foreign` FOREIGN KEY (`counter_id`) REFERENCES `counters` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `counter_translations`
--

LOCK TABLES `counter_translations` WRITE;
/*!40000 ALTER TABLE `counter_translations` DISABLE KEYS */;
INSERT INTO `counter_translations` (`id`, `title`, `counter_id`, `locale`, `created_at`, `updated_at`) VALUES (1,'مشروع العاصمة الجديدة – R8',1,'ar','2025-02-25 18:46:27','2025-02-25 18:46:27'),(2,'Project New Capital – R8',1,'en','2025-02-25 18:46:27','2025-02-25 18:46:27'),(3,'منذ في مصر',2,'ar','2025-02-25 18:46:27','2025-02-25 18:46:27'),(4,'Since in Egypt',2,'en','2025-02-25 18:46:27','2025-02-25 18:46:27'),(5,'مشاريع غرب القاهرة',3,'ar','2025-02-25 18:46:27','2025-02-25 18:46:27'),(6,'West Cairo Projects',3,'en','2025-02-25 18:46:27','2025-02-25 18:46:27'),(7,'العاصمة الجديدة – وسط المدينة',4,'ar','2025-02-25 18:46:27','2025-02-25 18:46:27'),(8,'New Capital – Downtown',4,'en','2025-02-25 18:46:27','2025-02-25 18:46:27');
/*!40000 ALTER TABLE `counter_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `counters`
--

DROP TABLE IF EXISTS `counters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `counters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `count` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `counters`
--

LOCK TABLES `counters` WRITE;
/*!40000 ALTER TABLE `counters` DISABLE KEYS */;
INSERT INTO `counters` (`id`, `count`, `created_at`, `updated_at`) VALUES (1,'30','2025-02-25 18:46:27','2025-02-25 18:46:27'),(2,'15','2025-02-25 18:46:27','2025-02-25 18:46:27'),(3,'10','2025-02-25 18:46:27','2025-02-25 18:46:27'),(4,'5','2025-02-25 18:46:27','2025-02-25 18:46:27');
/*!40000 ALTER TABLE `counters` ENABLE KEYS */;
UNLOCK TABLES;

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
-- Table structure for table `faq_translations`
--

DROP TABLE IF EXISTS `faq_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faq_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `faq_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `faq_translations_faq_id_locale_unique` (`faq_id`,`locale`),
  KEY `faq_translations_locale_index` (`locale`),
  CONSTRAINT `faq_translations_faq_id_foreign` FOREIGN KEY (`faq_id`) REFERENCES `faqs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq_translations`
--

LOCK TABLES `faq_translations` WRITE;
/*!40000 ALTER TABLE `faq_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `faq_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faqs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faqs`
--

LOCK TABLES `faqs` WRITE;
/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;
/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fees`
--

DROP TABLE IF EXISTS `fees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fees` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `amount` double DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fees_project_id_foreign` (`project_id`),
  CONSTRAINT `fees_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fees`
--

LOCK TABLES `fees` WRITE;
/*!40000 ALTER TABLE `fees` DISABLE KEYS */;
/*!40000 ALTER TABLE `fees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `files` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fileable_id` int(11) NOT NULL,
  `fileable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `files`
--

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;
INSERT INTO `files` (`id`, `url`, `fileable_id`, `fileable_type`, `created_at`, `updated_at`) VALUES (1,'images/1.webp',1,'App\\Models\\Gallery','2025-02-25 18:46:27','2025-02-25 18:46:27'),(2,'images/2.webp',2,'App\\Models\\Gallery','2025-02-25 18:46:27','2025-02-25 18:46:27'),(3,'images/700x478c.jpg',3,'App\\Models\\Gallery','2025-02-25 18:46:27','2025-02-25 18:46:27'),(4,'images/DSC02299-1-768x512.jpg',4,'App\\Models\\Gallery','2025-02-25 18:46:27','2025-02-25 18:46:27'),(5,'images/footer1.jpg',3,'App\\Models\\Page','2025-02-25 18:46:27','2025-02-25 18:46:27'),(6,'images/lFm4BhN2x9t3xJnk42ivFtqCWzMCcLppx1Mlr9gN.jpg',1,'App\\Models\\Service','2025-02-25 18:46:28','2025-02-25 18:46:28'),(7,'images/tqmoHh1nzC4Zg0IE4JykvWbBigfJpdIxMqxNcYPF.jpg',2,'App\\Models\\Service','2025-02-25 18:46:28','2025-02-25 18:46:28'),(8,'images/fih4AHmLMdr3mBpXqeeellC00S18BZm5dDCHcntw.jpg',3,'App\\Models\\Service','2025-02-25 18:46:28','2025-02-25 18:46:28'),(9,'images/yvxLurP4RFhTzwsih8n5pYC62eHgY74TDzQ3J8xF.jpg',4,'App\\Models\\Service','2025-02-25 18:46:28','2025-02-25 18:46:28'),(10,'images/partners/1.jpg',1,'App\\Models\\Partner','2025-02-25 18:46:28','2025-02-25 18:46:28'),(11,'images/partners/2.png',2,'App\\Models\\Partner','2025-02-25 18:46:28','2025-02-25 18:46:28'),(12,'images/partners/3.jpg',3,'App\\Models\\Partner','2025-02-25 18:46:28','2025-02-25 18:46:28'),(13,'images/partners/3.png',4,'App\\Models\\Partner','2025-02-25 18:46:28','2025-02-25 18:46:28'),(14,'images/partners/4.jpg',5,'App\\Models\\Partner','2025-02-25 18:46:28','2025-02-25 18:46:28'),(15,'images/partners/5.png',6,'App\\Models\\Partner','2025-02-25 18:46:28','2025-02-25 18:46:28'),(16,'images/partners/bg2.jpg',7,'App\\Models\\Partner','2025-02-25 18:46:28','2025-02-25 18:46:28'),(17,'images/zlqIgyZxaZJCmqfSvsxqkTIFsou1vItih8tUaqXi.jpg',1,'App\\Models\\Team','2025-02-25 18:46:28','2025-02-25 18:46:28'),(18,'images/YE92B4LXiM6QhFcQbr5YKECGaMU5k8NokXve9o1m.jpg',2,'App\\Models\\Team','2025-02-25 18:46:28','2025-02-25 18:46:28'),(19,'images/YQXLPLiQgi8H1E9YE77J3lwUX0qSOYXkHMP192Nz.png',3,'App\\Models\\Team','2025-02-25 18:46:28','2025-02-25 18:46:28'),(20,'images/pekmLKsEWdfVwDSwbG0sSIZARXfO8GavZPaoOF1D.jpg',4,'App\\Models\\Team','2025-02-25 18:46:28','2025-02-25 18:46:28'),(21,'images/tAgfJG0vAJHhQsCii9FR441z6tGs9fyGKj92MUzy.jpg',5,'App\\Models\\Team','2025-02-25 18:46:28','2025-02-25 18:46:28'),(22,'images/melad.jpeg',6,'App\\Models\\Team','2025-02-25 18:46:28','2025-02-25 18:46:28'),(23,'images/zaid_sayed.jpeg',7,'App\\Models\\Team','2025-02-25 18:46:28','2025-02-25 18:46:28'),(24,'images/w66o7ZleB0PAmRNOOiLp37gmh9iwImRphogPhjFy.webp',1,'App\\Models\\Testimonial','2025-02-25 18:46:28','2025-02-25 18:46:28'),(25,'images/w66o7ZleB0PAmRNOOiLp37gmh9iwImRphogPhjFy.webp',2,'App\\Models\\Testimonial','2025-02-25 18:46:28','2025-02-25 18:46:28'),(26,'images/w66o7ZleB0PAmRNOOiLp37gmh9iwImRphogPhjFy.webp',3,'App\\Models\\Testimonial','2025-02-25 18:46:28','2025-02-25 18:46:28'),(27,'images/w66o7ZleB0PAmRNOOiLp37gmh9iwImRphogPhjFy.webp',4,'App\\Models\\Testimonial','2025-02-25 18:46:28','2025-02-25 18:46:28'),(28,'images/w66o7ZleB0PAmRNOOiLp37gmh9iwImRphogPhjFy.webp',5,'App\\Models\\Testimonial','2025-02-25 18:46:28','2025-02-25 18:46:28'),(33,'images/lFm4BhN2x9t3xJnk42ivFtqCWzMCcLppx1Mlr9gN.jpg',1,'App\\Models\\Product','2025-02-25 18:46:28','2025-02-25 18:46:28'),(34,'images/tqmoHh1nzC4Zg0IE4JykvWbBigfJpdIxMqxNcYPF.jpg',2,'App\\Models\\Product','2025-02-25 18:46:28','2025-02-25 18:46:28'),(35,'images/fih4AHmLMdr3mBpXqeeellC00S18BZm5dDCHcntw.jpg',3,'App\\Models\\Product','2025-02-25 18:46:28','2025-02-25 18:46:28'),(36,'images/yvxLurP4RFhTzwsih8n5pYC62eHgY74TDzQ3J8xF.jpg',4,'App\\Models\\Product','2025-02-25 18:46:28','2025-02-25 18:46:28'),(37,'images/projects1.jpg',1,'App\\Models\\Project','2025-02-25 18:46:28','2025-02-25 18:46:28'),(38,'images/projects2.jpg',2,'App\\Models\\Project','2025-02-25 18:46:28','2025-02-25 18:46:28'),(39,'images/projects3.jpg',3,'App\\Models\\Project','2025-02-25 18:46:28','2025-02-25 18:46:28'),(40,'images/news/1.jpg',1,'App\\Models\\News','2025-02-25 18:46:28','2025-02-25 18:46:28'),(41,'images/news/2.jpg',2,'App\\Models\\News','2025-02-25 18:46:28','2025-02-25 18:46:28'),(42,'images/news/3.jpg',3,'App\\Models\\News','2025-02-25 18:46:29','2025-02-25 18:46:29'),(43,'images/news/4.jpg',4,'App\\Models\\News','2025-02-25 18:46:29','2025-02-25 18:46:29'),(44,'images/news/5.jpg',5,'App\\Models\\News','2025-02-25 18:46:29','2025-02-25 18:46:29'),(45,'images/1.webp',5,'App\\Models\\Gallery','2025-02-25 18:46:29','2025-02-25 18:46:29'),(46,'images/2.webp',6,'App\\Models\\Gallery','2025-02-25 18:46:29','2025-02-25 18:46:29'),(47,'images/700x478c.jpg',7,'App\\Models\\Gallery','2025-02-25 18:46:29','2025-02-25 18:46:29'),(48,'images/DSC02299-1-768x512.jpg',8,'App\\Models\\Gallery','2025-02-25 18:46:29','2025-02-25 18:46:29'),(49,'images/zjpVNbGbpw77C5RTY6dZAQves45YMQnPFh5zqR8S.png',5,'App\\Models\\Category','2025-02-25 18:52:21','2025-02-25 18:52:21'),(50,'images/CRkS5sCg9hxw50KIWlU0HLJFss8cwNnDaAkwCynL.png',6,'App\\Models\\Category','2025-02-25 18:53:57','2025-02-25 18:53:57'),(51,'images/tNNaCSTsNjoQWsuHJs3YOzsCHUOW0vnzfQj6fhUV.jpg',2,'App\\Models\\Page','2025-02-25 19:42:19','2025-02-25 19:42:19'),(52,'images/w5oVTfNuPPMlrb0mySxgWnobvavojMbyB59WgRVF.jpg',2,'App\\Models\\Page','2025-02-25 19:42:19','2025-02-25 19:42:19'),(53,'images/1DBPwSay4wiNhrXblxHu17ZydD16IPoObCfbcdMG.jpg',2,'App\\Models\\Page','2025-02-25 19:42:19','2025-02-25 19:42:19'),(54,'images/Hdx6WIa3hoT7NZgZAeavJHy0F3tFS711NtVhd2Wf.jpg',4,'App\\Models\\Project','2025-02-25 20:23:09','2025-02-25 20:23:09'),(55,'images/Zq1PjpB8xbxtVAybzXryhugsRsGqBlcNKxN80mSG.jpg',5,'App\\Models\\Project','2025-02-25 20:35:05','2025-02-25 20:35:05'),(56,'images/KXSSfs5AtdpyOiYFa5947SFWy2QC03tWij3DCmL4.jpg',6,'App\\Models\\Project','2025-02-25 20:39:31','2025-02-25 20:39:31'),(57,'images/3404gQWlgoXUBGaVXIFyjNq2ECwAYub1holf9gvK.png',7,'App\\Models\\Project','2025-02-25 20:40:55','2025-02-25 20:40:55'),(58,'images/DvWfq8XMYO7d4lsLcyXcGMAKcCT3O1PuJLELtHAq.jpg',8,'App\\Models\\Project','2025-02-25 20:42:11','2025-02-25 20:42:11'),(59,'images/jbw9HMTN54Y20IjO2TYcB34m1vTzJi3P4n9BL0lg.jpg',9,'App\\Models\\Project','2025-02-25 20:43:18','2025-02-25 20:43:18'),(60,'images/SPOH6OMq5XQ1ahTp9LIFSAESN2PB1MNA3p0oTnio.jpg',10,'App\\Models\\Project','2025-02-25 20:44:54','2025-02-25 20:44:54'),(61,'images/siksW6k535lK283s3E3F23mWoZ9EXgH6HZSSp0nY.jpg',9,'App\\Models\\Gallery','2025-02-25 20:52:32','2025-02-25 20:52:32'),(62,'images/5EtTfJT8xQ72p7UOptSXxrqDkvkTzSbkkgkANras.jpg',9,'App\\Models\\Gallery','2025-02-25 20:52:32','2025-02-25 20:52:32'),(63,'images/L5a8KlDMnxfVnSl6G2MH9BDrFzOIzveazA1R9RMy.jpg',9,'App\\Models\\Gallery','2025-02-25 20:52:32','2025-02-25 20:52:32'),(64,'images/sqjKUN7jeONAhmzg8ec7QO86ejqgHDnhnwVdsOJ3.jpg',9,'App\\Models\\Gallery','2025-02-25 20:52:32','2025-02-25 20:52:32'),(65,'images/7VbFFuqAkBSasdJKujVSgY66ocCrlJzMEySiFZ3l.jpg',9,'App\\Models\\Gallery','2025-02-25 20:52:32','2025-02-25 20:52:32'),(66,'images/2GGxgPyg1ZsOF1X2icGBCHuUF9nNMSPiHPlYHRxC.jpg',10,'App\\Models\\Gallery','2025-02-25 20:58:31','2025-02-25 20:58:31'),(67,'images/qkdNew4e1eA4gg6ty9vGVROfLuHxYIIbsrPZ4i5c.jpg',10,'App\\Models\\Gallery','2025-02-25 20:58:31','2025-02-25 20:58:31'),(68,'images/VJPSMJy65GnV2oQVWktRuf9S4l4ErxITrArAnW0b.jpg',10,'App\\Models\\Gallery','2025-02-25 20:58:31','2025-02-25 20:58:31'),(69,'images/EjChrXkIx4AXdXcgOt5DnG9nG88yGWNQ4JEg8JJz.jpg',10,'App\\Models\\Gallery','2025-02-25 20:58:31','2025-02-25 20:58:31'),(70,'images/Z48hX1nKwpoOpv2EQeFi0WCF4XWEmtykCU4Efx0l.jpg',10,'App\\Models\\Gallery','2025-02-25 20:58:31','2025-02-25 20:58:31'),(71,'images/SLiq4UZ0pr9dvkvhmzS84dd3teCZX4jja2tpV3cB.jpg',6,'App\\Models\\News','2025-02-25 22:27:15','2025-02-25 22:27:15'),(72,'images/dgFUSzeenaXvtvqqkdQIyuZGEqnxq7FryyNex9y2.jpg',7,'App\\Models\\News','2025-02-25 22:32:14','2025-02-25 22:32:14'),(73,'images/K22IEXmwMv26iYSBo8DvT6sZDs6eybp1xrT4HG92.webp',8,'App\\Models\\News','2025-02-25 22:36:31','2025-02-25 22:36:31'),(74,'images/BihFQYTaFXrK2310szjUXTyQYwEbrTNSTCCewzBn.webp',9,'App\\Models\\News','2025-02-25 22:39:41','2025-02-25 22:39:41'),(75,'images/8gq6DWaXyVcgAlC5q1ritwor8M7z0KJTvXx9L03b.webp',10,'App\\Models\\News','2025-02-25 22:42:58','2025-02-25 22:42:58');
/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galleries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` (`id`, `created_at`, `updated_at`) VALUES (9,'2025-02-25 20:52:32','2025-02-25 20:52:32'),(10,'2025-02-25 20:58:31','2025-02-25 20:58:31');
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery_translations`
--

DROP TABLE IF EXISTS `gallery_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `gallery_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `gallery_translations_gallery_id_locale_unique` (`gallery_id`,`locale`),
  KEY `gallery_translations_locale_index` (`locale`),
  CONSTRAINT `gallery_translations_gallery_id_foreign` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery_translations`
--

LOCK TABLES `gallery_translations` WRITE;
/*!40000 ALTER TABLE `gallery_translations` DISABLE KEYS */;
INSERT INTO `gallery_translations` (`id`, `title`, `subtitle`, `description`, `gallery_id`, `locale`, `created_at`, `updated_at`) VALUES (17,'Palm Heals',NULL,NULL,9,'en','2025-02-25 20:52:32','2025-02-25 20:52:32'),(18,'Palm Heals',NULL,NULL,9,'ar','2025-02-25 20:52:32','2025-02-25 20:52:32'),(19,'Gym',NULL,NULL,10,'en','2025-02-25 20:58:31','2025-02-25 20:58:31'),(20,'Gym',NULL,NULL,10,'ar','2025-02-25 20:58:31','2025-02-25 20:58:31');
/*!40000 ALTER TABLE `gallery_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `images_gallery_id_foreign` (`gallery_id`),
  CONSTRAINT `images_gallery_id_foreign` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ltm_translations`
--

DROP TABLE IF EXISTS `ltm_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ltm_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL DEFAULT '0',
  `locale` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `key` text COLLATE utf8mb4_bin NOT NULL,
  `value` text COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ltm_translations`
--

LOCK TABLES `ltm_translations` WRITE;
/*!40000 ALTER TABLE `ltm_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `ltm_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES (1,'Ibrahim Samy','ibrahimsamy308@gmail.com','01289189890','ًكيفيه عمل موقع بتكلفه اقل','2025-02-25 18:46:27','2025-02-25 18:46:27'),(2,'Kero Boula','Kero@gmail.com','0124578960',NULL,'2025-02-25 18:46:27','2025-02-25 18:46:27'),(3,'ابراهيم سامى','ibrahim@gmail.com','450015885',NULL,'2025-02-25 18:46:27','2025-02-25 18:46:27');
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
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (1,'2014_04_02_193005_create_translations_table',1),(2,'2014_10_12_000000_create_users_table',1),(3,'2014_10_12_100000_create_password_reset_tokens_table',1),(4,'2014_10_12_100000_create_password_resets_table',1),(5,'2019_08_19_000000_create_failed_jobs_table',1),(6,'2019_12_14_000001_create_personal_access_tokens_table',1),(7,'2022_10_23_075806_create_categories_table',1),(8,'2022_10_23_075806_create_processes_table',1),(9,'2022_10_23_075806_create_products_table',1),(10,'2022_10_23_075806_create_services_table',1),(11,'2022_10_23_075806_create_testimonials_table',1),(12,'2022_10_23_075828_create_faqs_table',1),(13,'2022_10_23_075846_create_settings_table',1),(14,'2022_10_23_080942_create_galleries_table',1),(15,'2022_10_24_111948_create_partners_table',1),(16,'2022_10_24_111948_create_teams_table',1),(17,'2022_10_26_125729_create_pages_table',1),(18,'2022_10_29_155126_create_messages_table',1),(19,'2022_10_29_155126_create_newsletters_table',1),(20,'2022_10_29_155126_create_serviceRequests_table',1),(21,'2022_11_06_150334_create_images_table',1),(22,'2022_11_26_153759_create_videos_table',1),(23,'2022_11_26_154653_create_category_translations_table',1),(24,'2022_11_26_154654_create_contacts_table',1),(25,'2022_11_26_154654_create_counters_table',1),(26,'2022_11_26_154654_create_newss_table',1),(27,'2022_11_26_154654_create_projects_table',1),(28,'2023_06_26_124955_create_admins_table',1),(29,'2023_06_26_173744_create_permission_tables',1),(30,'2023_06_27_154699_create_fees_table',1),(31,'2023_06_27_154699_create_tasks_table',1),(32,'2023_06_27_170717_create_process_translations_table',1),(33,'2023_06_27_170717_create_product_translations_table',1),(34,'2023_06_27_170717_create_service_translations_table',1),(35,'2023_06_27_170717_create_testimonial_translations_table',1),(36,'2023_06_28_105000_create_files_table',1),(37,'2023_06_28_175347_create_faq_translations_table',1),(38,'2023_06_28_175347_create_news_translations_table',1),(39,'2023_06_28_175347_create_project_translations_table',1),(40,'2023_06_28_175550_create_setting_translations_table',1),(41,'2023_06_28_180004_create_gallery_translations_table',1),(42,'2023_06_28_180137_create_partner_translations_table',1),(43,'2023_06_28_180137_create_team_translations_table',1),(44,'2023_06_28_180243_create_page_translations_table',1),(45,'2023_06_28_180523_create_video_translations_table',1),(46,'2023_06_28_180559_create_counter_translations_table',1),(47,'2024_06_17_142322_create_complains_table',1),(48,'2024_06_17_143258_create_complain_translations_table',1),(49,'2024_06_19_070504_create_vaccancies_table',1),(50,'2024_06_20_090402_create_vaccancy_translations_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES (1,'App\\Models\\Admin',1),(2,'App\\Models\\Admin',2),(2,'App\\Models\\Admin',3),(2,'App\\Models\\Admin',4),(2,'App\\Models\\Admin',5),(2,'App\\Models\\Admin',6);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news_translations`
--

DROP TABLE IF EXISTS `news_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `news_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `news_translations_news_id_locale_unique` (`news_id`,`locale`),
  KEY `news_translations_locale_index` (`locale`),
  CONSTRAINT `news_translations_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `newss` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news_translations`
--

LOCK TABLES `news_translations` WRITE;
/*!40000 ALTER TABLE `news_translations` DISABLE KEYS */;
INSERT INTO `news_translations` (`id`, `title`, `subtitle`, `description`, `news_id`, `locale`, `created_at`, `updated_at`) VALUES (11,'New Office Design Project Completed for Tech Giant','Innovative interior design boosts employee productivity','Our company has successfully completed a state-of-the-art office design for a leading tech company. The project focused on creating a modern, collaborative workspace that enhances creativity and productivity.',6,'en','2025-02-25 22:27:15','2025-02-25 22:27:15'),(12,'اكتمال مشروع تصميم مكتب جديد لشركة تكنولوجيا عملاقة','تصميم داخلي مبتكر يعزز إنتاجية الموظفين','لقد أكملت شركتنا بنجاح تصميم مكتب حديث ومتطور لشركة تكنولوجيا رائدة. ركز المشروع على إنشاء مساحة عمل تعاونية حديثة تعزز الإبداع والإنتاجية',6,'ar','2025-02-25 22:27:15','2025-02-25 22:27:15'),(13,'Residential Development Project Launched in Prime Location','Luxury apartments with stunning interior designs','We are proud to announce the launch of our latest residential development project, offering luxury apartments with bespoke interior designs in one of the city\'s most sought-after neighborhoods',7,'en','2025-02-25 22:32:14','2025-02-25 22:32:14'),(14,'إطلاق مشروع تطوير سكني في موقع متميز','شقق فاخرة بتصاميم داخلية مذهلة','نفخر بالإعلان عن إطلاق أحدث مشاريعنا التطويرية السكنية، والتي تقدم شققًا فاخرة بتصاميم داخلية مخصصة في واحدة من أكثر الأحياء شهرة في المدينة',7,'ar','2025-02-25 22:32:14','2025-02-25 22:32:14'),(15,'Sustainable Interior Design Trends in 2024','Eco-friendly materials and energy-efficient solutions','As part of our commitment to sustainability, we are incorporating eco-friendly materials and energy-efficient solutions in our interior design projects, setting new trends for 2024',8,'en','2025-02-25 22:36:31','2025-02-25 22:36:31'),(16,'اتجاهات التصميم الداخلي المستدام في 2024','مواد صديقة للبيئة وحلول موفرة للطاقة','كجزء من التزامنا بالاستدامة، نقوم بدمج المواد الصديقة للبيئة والحلول الموفرة للطاقة في مشاريع التصميم الداخلي الخاصة بنا، مما يحدد اتجاهات جديدة لعام 2024',8,'ar','2025-02-25 22:36:31','2025-02-25 22:36:31'),(17,'Expansion of Our Development Division','New team members and advanced technologies introduced','To meet the growing demand for high-quality development projects, we have expanded our development division by hiring top talent and integrating cutting-edge technologies',9,'en','2025-02-25 22:39:41','2025-02-25 22:39:41'),(18,'توسيع قسم التطوير في شركتنا','إضافة أعضاء جدد لفريق العمل وتقنيات متطورة','لتلبية الطلب المتزايد على مشاريع التطوير عالية الجودة، قمنا بتوسيع قسم التطوير لدينا من خلال تعيين أفضل الكفاءات ودمج التقنيات المتطورة',9,'ar','2025-02-25 22:39:41','2025-02-25 22:39:41'),(19,'Award-Winning Interior Design for Luxury Hotel','Our team recognized for exceptional creativity and innovation','Our interior design team has been awarded for their outstanding work on a luxury hotel project, showcasing unique creativity and innovative solutions',10,'en','2025-02-25 22:42:58','2025-02-25 22:42:58'),(20,'تصميم داخلي فندقي فاخر حائز على جوائز','فريقنا يحصل على تقدير لابتكاره وإبداعه الاستثنائي','حصل فريق التصميم الداخلي لدينا على جائزة عن عمله المتميز في مشروع فندق فاخر، حيث قدم تصميمًا فريدًا وحلولًا مبتكرة',10,'ar','2025-02-25 22:42:58','2025-02-25 22:42:58');
/*!40000 ALTER TABLE `news_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newsletters`
--

DROP TABLE IF EXISTS `newsletters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `newsletters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `newsletterEmail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletters`
--

LOCK TABLES `newsletters` WRITE;
/*!40000 ALTER TABLE `newsletters` DISABLE KEYS */;
INSERT INTO `newsletters` (`id`, `newsletterEmail`, `created_at`, `updated_at`) VALUES (1,'ibrahimsamy308@gmail.com','2025-02-25 18:46:27','2025-02-25 18:46:27'),(2,'Kero@gmail.com','2025-02-25 18:46:27','2025-02-25 18:46:27'),(3,'ibrahim@gmail.com','2025-02-25 18:46:27','2025-02-25 18:46:27');
/*!40000 ALTER TABLE `newsletters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newss`
--

DROP TABLE IF EXISTS `newss`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `newss` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `cost` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newss`
--

LOCK TABLES `newss` WRITE;
/*!40000 ALTER TABLE `newss` DISABLE KEYS */;
INSERT INTO `newss` (`id`, `title`, `status`, `cost`, `created_at`, `updated_at`) VALUES (6,NULL,0,NULL,'2025-02-25 22:27:15','2025-02-25 22:27:15'),(7,NULL,0,NULL,'2025-02-25 22:32:14','2025-02-25 22:32:14'),(8,NULL,0,NULL,'2025-02-25 22:36:31','2025-02-25 22:36:31'),(9,NULL,0,NULL,'2025-02-25 22:39:41','2025-02-25 22:39:41'),(10,NULL,0,NULL,'2025-02-25 22:42:58','2025-02-25 22:42:58');
/*!40000 ALTER TABLE `newss` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page_translations`
--

DROP TABLE IF EXISTS `page_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `page_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `page_translations_page_id_locale_unique` (`page_id`,`locale`),
  KEY `page_translations_locale_index` (`locale`),
  CONSTRAINT `page_translations_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page_translations`
--

LOCK TABLES `page_translations` WRITE;
/*!40000 ALTER TABLE `page_translations` DISABLE KEYS */;
INSERT INTO `page_translations` (`id`, `title`, `subtitle`, `description`, `page_id`, `locale`, `created_at`, `updated_at`) VALUES (1,NULL,NULL,NULL,1,'ar','2025-02-25 18:46:27','2025-02-25 18:46:27'),(2,NULL,NULL,NULL,1,'en','2025-02-25 18:46:27','2025-02-25 18:46:27'),(3,'من نحن','الأمر كله يتعلق بالكمال','<p>واحدة من أكبر شركات التطوير العقاري في منطقة الشرق الأوسط وشمال إفريقيا، مملوكة لمجموعة من المستثمرين العرب. بدأت منذ أكثر من 12 عامًا في الإمارات العربية المتحدة، حيث بنت محفظة قوية في أبوظبي وغيرها من الإمارات. ثم توسعت الشركة في أحد أكبر الأسواق في منطقة الشرق الأوسط وشمال إفريقيا، جمهورية مصر العربية، وبدأت أعمالها في مصر منذ عام 2014.</p>',2,'ar','2025-02-25 18:46:27','2025-02-25 18:46:27'),(4,'About US','It\'s all about perfection','<p>Verde is a dynamic property development company powered by talented and innovative real estate professionals that span every discipline. Since our inception, we have been actively utilizing our expertise to develop efficient properties with identity and purpose, accommodating different community needs with one common denominator: excellence.</p>',2,'en','2025-02-25 18:46:27','2025-02-26 18:09:31'),(5,'البساطة هي قمة الأناقة والتميز',NULL,'<p>رؤيتنا هي أن نكون الشريك المفضل لأولئك الذين يؤمنون بأن التطوير العقاري الذكي والمُخطط بعناية يساهم في تحسين المجتمعات.</p>',3,'ar','2025-02-25 18:46:27','2025-02-25 18:46:27'),(6,'Simplictiy is the ultimate shophistication trend',NULL,'<p>Our vision is to be the partner of choice for those who believe that smart, thoughtful real estate development changes communities for the better</p>',3,'en','2025-02-25 18:46:27','2025-02-25 18:46:27'),(7,'what we do?',NULL,'For over two decades, Verde has been creating exemplary projects that demonstrate excellence in sustainable development and planning practice. In all our creations, we prioritize innovating concepts that break the urban paradigm and deliver timeless craftsmanship to facilitate community integration.',4,'en','2025-02-26 18:18:51','2025-02-26 18:18:51'),(8,'ماذا نفعل؟',NULL,'على مدار أكثر من عقدين، تقوم شركة فيردي بإبداع مشاريع نموذجية تُظهر التميز في التنمية المستدامة وممارسات التخطيط. في جميع إبداعاتنا، نُعطي الأولوية لابتكار مفاهيم تكسر القالب الحضري وتقدم حِرفية خالدة تُسهِّل التكامل المجتمعي.',4,'ar','2025-02-26 18:18:51','2025-02-26 18:18:51'),(9,'MISSION',NULL,'Develop world-class concepts that are community-beneficial, timeless, and financially sound.',5,'en','2025-02-26 18:25:02','2025-02-26 18:25:02'),(10,'مهمتنا',NULL,'نطوّر مفاهيم عالمية المستوى تُفيد المجتمع، وتتميز بالخلود والاستدامة المالية.',5,'ar','2025-02-26 18:25:02','2025-02-26 18:25:02'),(11,'vision',NULL,'To be pioneers in\r\ntransforming multiple\r\ndomains of Egypt\'s urban\r\nscene.',6,'en','2025-02-26 20:02:08','2025-02-26 20:02:08'),(12,'رؤيتنا',NULL,'أن نكون روادًا في تحويل مجالات متعددة في المشهد العمراني في مصر.',6,'ar','2025-02-26 20:02:08','2025-02-26 20:02:08'),(13,'CEO Message',NULL,'<span style=\"display: inline !important;\">We always look forward at Verdi Company to success before anything else, and it is the main goal of the company. To achieve success, we always strive to make our partners successful. They are the ones who request services and products from our company. We consider them partners from the first day, because achieving their ambitious goals through us is primarily reflected in our company’s reputation and gives us a positive indicator for the continuation of work. Since Verdi Company provides its engineering services and operational expertise for the projects developed through it, it always seeks to satisfy its customers primarily and work hard to develop investments</span>',7,'en','2025-02-26 20:12:48','2025-02-26 20:12:48'),(14,'رسالة الرئيس التنفيذي',NULL,'<p data-start=\"0\" data-end=\"317\">نحن في شركة فيردي ننظر دائمًا إلى النجاح قبل أي شيء آخر، فهو الهدف الأساسي للشركة. ولتحقيق النجاح، نسعى دائمًا لجعل شركائنا ناجحين، فهم من يطلبون الخدمات والمنتجات من شركتنا. نعتبرهم شركاء منذ اليوم الأول، لأن تحقيق أهدافهم الطموحة من خلالنا ينعكس بشكل أساسي على سمعة شركتنا، ويمنحنا مؤشرًا إيجابيًا لاستمرار العمل.</p><p data-start=\"319\" data-end=\"488\" data-is-last-node=\"\" data-is-only-node=\"\">نظرًا لأن شركة فيردي تقدم خدماتها الهندسية وخبراتها التشغيلية للمشاريع التي تطورها، فإنها تسعى دائمًا إلى إرضاء عملائها في المقام الأول، وتعمل بجد على تطوير الاستثمارات.</p>',7,'ar','2025-02-26 20:12:48','2025-02-26 20:12:48');
/*!40000 ALTER TABLE `page_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` (`id`, `identifier`, `youtube_link`, `created_at`, `updated_at`) VALUES (1,'blog','https://neweventdev.com/mainsite/wp-content/uploads/2024/10/H-Q-T.mp4','2025-02-25 18:46:27','2025-02-25 18:46:27'),(2,'aboutus-home','https://neweventdev.com/mainsite/wp-content/uploads/2024/10/H-Q-T.mp4','2025-02-25 18:46:27','2025-02-25 18:46:27'),(3,'footer-section','https://neweventdev.com/mainsite/wp-content/uploads/2024/10/H-Q-T.mp4','2025-02-25 18:46:27','2025-02-25 18:46:27'),(4,'what_we',NULL,'2025-02-26 18:18:51','2025-02-26 18:18:51'),(5,'mission',NULL,'2025-02-26 18:25:02','2025-02-26 18:25:02'),(6,'vision',NULL,'2025-02-26 20:02:08','2025-02-26 20:02:08'),(7,'ceo',NULL,'2025-02-26 20:12:48','2025-02-26 20:12:48');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partner_translations`
--

DROP TABLE IF EXISTS `partner_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partner_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `partner_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `partner_translations_partner_id_locale_unique` (`partner_id`,`locale`),
  KEY `partner_translations_locale_index` (`locale`),
  CONSTRAINT `partner_translations_partner_id_foreign` FOREIGN KEY (`partner_id`) REFERENCES `partners` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partner_translations`
--

LOCK TABLES `partner_translations` WRITE;
/*!40000 ALTER TABLE `partner_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `partner_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partners` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partners`
--

LOCK TABLES `partners` WRITE;
/*!40000 ALTER TABLE `partners` DISABLE KEYS */;
INSERT INTO `partners` (`id`, `created_at`, `updated_at`) VALUES (1,'2025-02-25 18:46:28','2025-02-25 18:46:28'),(2,'2025-02-25 18:46:28','2025-02-25 18:46:28'),(3,'2025-02-25 18:46:28','2025-02-25 18:46:28'),(4,'2025-02-25 18:46:28','2025-02-25 18:46:28'),(5,'2025-02-25 18:46:28','2025-02-25 18:46:28'),(6,'2025-02-25 18:46:28','2025-02-25 18:46:28'),(7,'2025-02-25 18:46:28','2025-02-25 18:46:28');
/*!40000 ALTER TABLE `partners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
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
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (1,'role-list','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(2,'role-create','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(3,'role-edit','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(4,'role-delete','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(5,'product-list','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(6,'product-create','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(7,'product-edit','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(8,'product-delete','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(9,'faq-list','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(10,'faq-create','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(11,'faq-edit','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(12,'faq-delete','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(13,'complain-list','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(14,'complain-create','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(15,'complain-edit','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(16,'complain-delete','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(17,'vaccancy-list','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(18,'vaccancy-create','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(19,'vaccancy-edit','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(20,'vaccancy-delete','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(21,'counter-list','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(22,'counter-create','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(23,'counter-edit','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(24,'counter-delete','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(25,'contact-list','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(26,'contact-create','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(27,'contact-edit','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(28,'contact-delete','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(29,'image-list','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(30,'image-create','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(31,'image-edit','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(32,'project-list','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(33,'project-create','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(34,'project-edit','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(35,'project-delete','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(36,'image-delete','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(37,'task-list','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(38,'task-create','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(39,'task-edit','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(40,'task-delete','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(41,'page-list','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(42,'page-edit','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(43,'page-delete','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(44,'news-list','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(45,'news-create','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(46,'news-edit','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(47,'news-delete','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(48,'portfolio-list','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(49,'portfolio-create','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(50,'portfolio-edit','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(51,'portfolio-delete','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(52,'service-list','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(53,'service-create','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(54,'service-edit','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(55,'service-delete','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(56,'testimonial-list','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(57,'testimonial-create','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(58,'testimonial-edit','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(59,'testimonial-delete','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(60,'category-list','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(61,'category-create','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(62,'category-edit','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(63,'category-delete','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(64,'process-list','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(65,'process-create','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(66,'process-edit','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(67,'process-delete','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(68,'setting-list','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(69,'setting-create','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(70,'setting-edit','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(71,'setting-delete','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(72,'partner-list','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(73,'partner-create','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(74,'partner-edit','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(75,'partner-delete','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(76,'team-list','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(77,'team-create','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(78,'team-edit','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(79,'team-delete','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(80,'video-list','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(81,'video-create','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(82,'video-edit','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(83,'video-delete','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(84,'user-list','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(85,'user-create','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(86,'user-edit','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(87,'user-delete','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(88,'admin-list','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(89,'admin-create','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(90,'admin-edit','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(91,'admin-delete','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(92,'message-list','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(93,'message-delete','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(94,'message-reply','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(95,'newsletter-list','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(96,'newsletter-delete','admin','2025-02-25 18:46:27','2025-02-25 18:46:27'),(97,'newsletter-reply','admin','2025-02-25 18:46:27','2025-02-25 18:46:27');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
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
  `abilities` text COLLATE utf8mb4_unicode_ci,
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
-- Table structure for table `process_translations`
--

DROP TABLE IF EXISTS `process_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `process_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `process_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `process_translations_process_id_locale_unique` (`process_id`,`locale`),
  KEY `process_translations_locale_index` (`locale`),
  CONSTRAINT `process_translations_process_id_foreign` FOREIGN KEY (`process_id`) REFERENCES `processes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `process_translations`
--

LOCK TABLES `process_translations` WRITE;
/*!40000 ALTER TABLE `process_translations` DISABLE KEYS */;
INSERT INTO `process_translations` (`id`, `title`, `subtitle`, `description`, `process_id`, `locale`, `created_at`, `updated_at`) VALUES (1,'حدد أهدافك ومتطلباتك:',NULL,'<p>حدد بوضوح أهدافك وغاياتك للموقع.</p>',1,'ar','2025-02-25 18:46:28','2025-02-25 18:46:28'),(2,'Define Your Goals and Requirements',NULL,'<p>Clearly identify your goals and objectives for the website.</p>',1,'en','2025-02-25 18:46:28','2025-02-25 18:46:28'),(3,'المشاورات الأولية',NULL,'<p>تواصل معنا للحصول على رسم توضيحي كامل لمناقشة أهداف مشروعك </p>',2,'ar','2025-02-25 18:46:28','2025-02-25 18:46:28'),(4,'Initial Consultation',NULL,'<p>Connect with us to have a full illustration to discuss your project goals </p>',2,'en','2025-02-25 18:46:28','2025-02-25 18:46:28'),(5,'الاقتراح والاتفاق',NULL,'<p>سنزودك بمقترح يوضح نطاق المشروع والجدول الزمني والتكلفة.</p>',3,'ar','2025-02-25 18:46:28','2025-02-25 18:46:28'),(6,'Proposal and Agreement',NULL,'<p>we will provide you with a proposal that outlines the project scope, timeline, and cost.</p>',3,'en','2025-02-25 18:46:28','2025-02-25 18:46:28'),(7,'تنفيذ وتسليم الموقع',NULL,'<p>مراجعة الموقع وتسليمه للعميل بمجرد رضاه عن المخرجات.</p>',4,'ar','2025-02-25 18:46:28','2025-02-25 18:46:28'),(8,'Executing and Delivering',NULL,'<p>reviewing the website and deliver it to client once he is satisfied with the output. </p>',4,'en','2025-02-25 18:46:28','2025-02-25 18:46:28');
/*!40000 ALTER TABLE `process_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `processes`
--

DROP TABLE IF EXISTS `processes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `processes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `processes`
--

LOCK TABLES `processes` WRITE;
/*!40000 ALTER TABLE `processes` DISABLE KEYS */;
INSERT INTO `processes` (`id`, `created_at`, `updated_at`) VALUES (1,'2025-02-25 18:46:28','2025-02-25 18:46:28'),(2,'2025-02-25 18:46:28','2025-02-25 18:46:28'),(3,'2025-02-25 18:46:28','2025-02-25 18:46:28'),(4,'2025-02-25 18:46:28','2025-02-25 18:46:28');
/*!40000 ALTER TABLE `processes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_translations`
--

DROP TABLE IF EXISTS `product_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `product_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_translations_product_id_locale_unique` (`product_id`,`locale`),
  KEY `product_translations_locale_index` (`locale`),
  CONSTRAINT `product_translations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_translations`
--

LOCK TABLES `product_translations` WRITE;
/*!40000 ALTER TABLE `product_translations` DISABLE KEYS */;
INSERT INTO `product_translations` (`id`, `title`, `subtitle`, `description`, `product_id`, `locale`, `created_at`, `updated_at`) VALUES (1,'انشاء مواقع الويب',NULL,'<p>نحن متخصصون في إنشاء مواقع ويب مخصصة تناسب احتياجات عملك المحددة. يعمل فريقنا من المطورين والمصممين ذوي الخبرة بشكل وثيق معك لفهم متطلباتك وتطوير موقع ويب يعكس هوية علامتك التجارية. نحن نستفيد من أحدث تقنيات الويب ومبادئ التصميم سريع الاستجابة لضمان أن يبدو موقع الويب الخاص بك مذهلاً ويعمل بشكل لا تشوبه شائبة عبر الأجهزة وبالاضافه الى لوحة تحكم لنجعلك قادر على التحكم فى جميع محتويات الموقع  </p>',1,'ar','2025-02-25 18:46:28','2025-02-25 18:46:28'),(2,'Custom Website Development',NULL,'<p>We specialize in creating custom websites that fit your specific business needs. Our team of experienced developers and designers work closely with you to understand your requirements and develop a website that reflects your brand identity. We take advantage of the latest web technologies and responsive design principles to ensure that your website looks amazing and works flawlessly across devices and in addition to a control panel to make you able to control all     site content</p>',1,'en','2025-02-25 18:46:28','2025-02-25 18:46:28'),(3,'انشاء مواقع تجارة الكترونية',NULL,'<p>إذا كنت تتطلع إلى بيع منتجات أو خدمات عبر الإنترنت، فيمكن أن تساعدك خدمات تطوير التجارة الإلكترونية لدينا. لدينا خبرة في بناء منصات تجارة إلكترونية آمنة وقابلة للتطوير توفر تجارب مستخدم سلسة وتكاملًا قويًا للدفع. بدءًا من كتالوجات المنتجات وعربات التسوق وحتى إدارة المخزون ومعالجة الطلبات، نقوم بإنشاء حلول للتجارة الإلكترونية تعمل على زيادة التحويلات وزيادة الإيرادات إلى أقصى حد</p>',2,'ar','2025-02-25 18:46:28','2025-02-25 18:46:28'),(4,'E-commerce Development',NULL,'<p>If you\'re looking to sell products or products online, our e-commerce development products can help. We have expertise in building secure and scalable e-commerce platforms that offer seamless user experiences and robust payment integration. From product catalogs and shopping carts to inventory management and order processing, we create e-commerce solutions that drive conversions and maximize revenue</p>',2,'en','2025-02-25 18:46:28','2025-02-25 18:46:28'),(5,'صيانة ودعم الموقع',NULL,'<p>نحن نؤمن بالشراكات طويلة الأمد مع عملائنا. تضمن خدمات صيانة ودعم موقع الويب لدينا بقاء موقع الويب الخاص بك آمنًا وحديثًا ومحسّنًا للأداء. نحن نقدم تحديثات منتظمة وتصحيحات أمنية ونسخًا احتياطية لحماية موقع الويب الخاص بك من نقاط الضعف. فريق الدعم لدينا متاح لمعالجة أية مشكلات والإجابة على الأسئلة وتقديم المساعدة الفنية المستمرة</p>',3,'ar','2025-02-25 18:46:28','2025-02-25 18:46:28'),(6,'Website Maintenance and Support',NULL,'<p>We believe in long-term partnerships with our clients. Our website maintenance and support products ensure that your website remains secure, up-to-date, and optimized for performance. We provide regular updates, security patches, and backups to protect your website from vulnerabilities. Our support team is available to address any issues, answer questions, and provide ongoing technical assistance </p>',3,'en','2025-02-25 18:46:28','2025-02-25 18:46:28'),(7,'استضافت مواقع ',NULL,'<p>في شركة تطوير الويب لدينا، نقدم خدمات استضافة شاملة للتأكد من أن موقع الويب الخاص بك يعمل على النحو الأمثل ويظل في متناول زوار موقعك. توفر خدمة الاستضافة لدينا بيئة موثوقة وآمنة لازدهار موقع الويب الخاص بك. فيما يلي نظرة عامة على خدمة الاستضافة لدينا:\n\nبنية تحتية موثوقة للاستضافة: نحن نحافظ على بنية تحتية قوية للاستضافة مع خوادم ومعدات شبكات حديثة. تم تحسين خوادمنا من أجل الأداء، مما يوفر أوقات تحميل سريعة وأقل وقت توقف. نحن نعطي الأولوية للموثوقية للتأكد من أن موقع الويب الخاص بك في متناول الزوار على مدار الساعة.\n\nحلول قابلة للتطوير: تم تصميم خدمة الاستضافة لدينا لاستيعاب نمو موقع الويب الخاص بك. سواء كان لديك موقع ويب خاص بشركة صغيرة أو تطبيق ويب معقد، فإننا نقدم حلول استضافة قابلة للتطوير يمكنها التكيف مع احتياجاتك المتغيرة. مع توسع موقع الويب الخاص بك، يمكننا بسهولة زيادة موارد الاستضافة للتعامل مع زيادة حركة المرور ومتطلبات البيانات.\n\nالتدابير الأمنية: نحن نعطي الأولوية لأمن موقع الويب الخاص بك والبيانات التي يحتوي عليها. تتضمن خدمة الاستضافة لدينا إجراءات أمنية قوية مثل جدران الحماية، وأنظمة كشف التسلل، والتحديثات الأمنية المنتظمة. نقوم أيضًا بتنفيذ شهادات SSL لتشفير نقل البيانات وحماية المعلومات الحساسة وبناء الثقة مع زوار موقعك.\n\nالنسخ الاحتياطي والتعافي من الكوارث: نحن ندرك أهمية حماية البيانات. تتضمن خدمة الاستضافة لدينا نسخًا احتياطية منتظمة لموقعك على الويب والبيانات المرتبطة به. في حالة وجود مشكلة فنية أو حدث غير متوقع، يمكننا استعادة موقع الويب الخاص بك بسرعة لتقليل وقت التوقف عن العمل وفقدان البيانات.\n\nالدعم الفني: فريق الدعم المخصص لدينا متاح لمساعدتك في أي مخاوف أو مشكلات فنية متعلقة بالاستضافة. سواء كانت لديك أسئلة حول تكوينات الخادم، أو كنت بحاجة إلى مساعدة بشأن إعدادات DNS، أو كنت بحاجة إلى استكشاف الأخطاء وإصلاحها، فإن موظفي الدعم ذوي المعرفة لدينا ليسوا سوى مكالمة هاتفية أو بريد إلكتروني.\n\nالتوافق مع تقنيات الويب: تدعم خدمة الاستضافة لدينا مجموعة واسعة من تقنيات الويب ولغات البرمجة. سواء تم إنشاء موقع الويب الخاص بك باستخدام PHP أو Python أو Node.js أو أطر عمل أخرى، يمكن لبيئة الاستضافة لدينا أن تلبي متطلباتك المحددة.\n\nشبكة تسليم المحتوى (CDN): لتحسين أداء موقع الويب الخاص بك، يمكننا دمج شبكة تسليم المحتوى (CDN) في خدمة الاستضافة لدينا. تساعد شبكة CDN على تقديم محتوى موقع الويب الخاص بك بسرعة للزائرين من مواقع جغرافية مختلفة، مما يحسن أوقات التحميل وتجربة المستخدم.\n\nاستضافة البريد الإلكتروني: إلى جانب استضافة مواقع الويب، نقدم أيضًا خدمات استضافة البريد الإلكتروني. يمكنك الحصول على عناوين بريد إلكتروني احترافية مرتبطة باسم النطاق الخاص بك، مما يوفر تجربة اتصال سلسة وموحدة لشركتك. </p>',4,'ar','2025-02-25 18:46:28','2025-02-25 18:46:28'),(8,'Website Hosting',NULL,'<p>At our web development company, we offer comprehensive hosting products to ensure that your website performs optimally and remains accessible to your visitors. Our hosting product provides a reliable and secure environment for your website to thrive. Here\'s an overview of our hosting product:\n\n                                Reliable Hosting Infrastructure: We maintain a robust hosting infrastructure with state-of-the-art servers and network equipment. Our servers are optimized for performance, offering fast load times and minimal downtime. We prioritize reliability to ensure that your website is accessible to visitors around the clock.\n                                \n                                Scalable Solutions: Our hosting product is designed to accommodate your website\'s growth. Whether you have a small business website or a complex web application, we offer scalable hosting solutions that can adapt to your changing needs. As your website expands, we can seamlessly scale up the hosting resources to handle increased traffic and data requirements.\n                                \n                                Security Measures: We prioritize the security of your website and the data it contains. Our hosting product includes robust security measures such as firewalls, intrusion detection systems, and regular security updates. We also implement SSL certificates to encrypt data transmission, safeguarding sensitive information and building trust with your visitors.\n                                \n                                Backup and Disaster Recovery: We understand the importance of data protection. Our hosting product includes regular backups of your website and its associated data. In the event of a technical issue or unexpected event, we can quickly restore your website to minimize downtime and data loss.\n                                \n                                Technical Support: Our dedicated support team is available to assist you with any hosting-related concerns or technical issues. Whether you have questions about server configurations, need assistance with DNS settings, or require troubleshooting, our knowledgeable support staff is just a phone call or email away.\n                                \n                                Compatibility with Web Technologies: Our hosting product supports a wide range of web technologies and programming languages. Whether your website is built with PHP, Python, Node.js, or other frameworks, our hosting environment can accommodate your specific requirements.\n                                \n                                Content Delivery Network (CDN): To enhance the performance of your website, we can integrate a Content Delivery Network (CDN) into our hosting product. A CDN helps deliver your website content quickly to visitors from various geographical locations, improving load times and user experience.\n                                \n                                Email Hosting: Along with website hosting, we also offer email hosting products. You can have professional email addresses associated with your domain name, providing a seamless and unified communication experience for your business.\n                                \n                                 </p>',4,'en','2025-02-25 18:46:28','2025-02-25 18:46:28');
/*!40000 ALTER TABLE `product_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `icon`, `created_at`, `updated_at`) VALUES (1,'far fa-window-restore','2025-02-25 18:46:28','2025-02-25 18:46:28'),(2,'fas fa-shopping-cart','2025-02-25 18:46:28','2025-02-25 18:46:28'),(3,'fas fa-cog','2025-02-25 18:46:28','2025-02-25 18:46:28'),(4,'fab fa-ioxhost','2025-02-25 18:46:28','2025-02-25 18:46:28');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_translations`
--

DROP TABLE IF EXISTS `project_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `project_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `project_translations_project_id_locale_unique` (`project_id`,`locale`),
  KEY `project_translations_locale_index` (`locale`),
  CONSTRAINT `project_translations_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_translations`
--

LOCK TABLES `project_translations` WRITE;
/*!40000 ALTER TABLE `project_translations` DISABLE KEYS */;
INSERT INTO `project_translations` (`id`, `title`, `subtitle`, `description`, `project_id`, `locale`, `created_at`, `updated_at`) VALUES (7,'Plam hills',NULL,NULL,4,'en','2025-02-25 20:23:09','2025-02-25 20:23:09'),(8,'تلال النخيل',NULL,NULL,4,'ar','2025-02-25 20:23:09','2025-02-25 20:23:09'),(9,'Madinaty Apartment Renders',NULL,NULL,5,'en','2025-02-25 20:35:05','2025-02-25 20:35:05'),(10,'صور شقق مدينتي',NULL,NULL,5,'ar','2025-02-25 20:35:05','2025-02-25 20:35:05'),(11,'Villa el tagamo',NULL,NULL,6,'en','2025-02-25 20:39:31','2025-02-25 20:39:31'),(12,'فيلا التجمع',NULL,NULL,6,'ar','2025-02-25 20:39:31','2025-02-25 20:39:31'),(13,'Mall',NULL,NULL,7,'en','2025-02-25 20:40:55','2025-02-25 20:40:55'),(14,'المول',NULL,NULL,7,'ar','2025-02-25 20:40:55','2025-02-25 20:40:55'),(15,'Verde School',NULL,NULL,8,'en','2025-02-25 20:42:11','2025-02-25 20:42:11'),(16,'مدرسة فيردى',NULL,NULL,8,'ar','2025-02-25 20:42:11','2025-02-25 20:42:11'),(17,'Azha Mall',NULL,NULL,9,'en','2025-02-25 20:43:18','2025-02-25 20:43:18'),(18,'ازهى مول',NULL,NULL,9,'ar','2025-02-25 20:43:18','2025-02-25 20:43:18'),(19,'Mall D render',NULL,NULL,10,'en','2025-02-25 20:44:54','2025-02-25 20:44:54'),(20,'عرض مول D',NULL,NULL,10,'ar','2025-02-25 20:44:54','2025-02-25 20:44:54');
/*!40000 ALTER TABLE `project_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `cost` double DEFAULT NULL,
  `category_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `projects_category_id_foreign` (`category_id`),
  CONSTRAINT `projects_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` (`id`, `title`, `status`, `cost`, `category_id`, `created_at`, `updated_at`) VALUES (4,NULL,0,NULL,5,'2025-02-25 20:23:09','2025-02-25 20:23:09'),(5,NULL,0,NULL,5,'2025-02-25 20:35:05','2025-02-25 20:35:05'),(6,NULL,0,NULL,5,'2025-02-25 20:39:31','2025-02-25 20:39:31'),(7,NULL,0,NULL,6,'2025-02-25 20:40:55','2025-02-25 20:40:55'),(8,NULL,0,NULL,6,'2025-02-25 20:42:11','2025-02-25 20:42:11'),(9,NULL,0,NULL,6,'2025-02-25 20:43:18','2025-02-25 20:43:18'),(10,NULL,0,NULL,6,'2025-02-25 20:44:54','2025-02-25 20:44:54');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(38,1),(39,1),(40,1),(41,1),(42,1),(43,1),(44,1),(45,1),(46,1),(47,1),(48,1),(49,1),(50,1),(51,1),(52,1),(53,1),(54,1),(55,1),(56,1),(57,1),(58,1),(59,1),(60,1),(61,1),(62,1),(63,1),(64,1),(65,1),(66,1),(67,1),(68,1),(69,1),(70,1),(71,1),(72,1),(73,1),(74,1),(75,1),(76,1),(77,1),(78,1),(79,1),(80,1),(81,1),(82,1),(83,1),(84,1),(85,1),(86,1),(87,1),(88,1),(89,1),(90,1),(91,1),(92,1),(93,1),(94,1),(95,1),(96,1),(97,1),(1,2),(2,2),(3,2),(4,2),(5,2),(6,2),(7,2),(8,2),(9,2),(10,2),(11,2),(12,2),(13,2),(14,2),(15,2),(16,2),(17,2),(18,2),(19,2),(20,2),(21,2),(22,2),(23,2),(24,2),(25,2),(26,2),(27,2),(28,2),(29,2),(30,2),(31,2),(32,2),(33,2),(34,2),(35,2),(36,2),(37,2),(38,2),(39,2),(40,2),(41,2),(42,2),(43,2),(44,2),(45,2),(46,2),(47,2),(48,2),(49,2),(50,2),(51,2),(52,2),(53,2),(54,2),(55,2),(56,2),(57,2),(58,2),(59,2),(60,2),(61,2),(62,2),(63,2),(64,2),(65,2),(66,2),(67,2),(68,2),(69,2),(70,2),(71,2),(72,2),(73,2),(74,2),(75,2),(76,2),(77,2),(78,2),(79,2),(80,2),(81,2),(82,2),(83,2),(84,2),(85,2),(86,2),(87,2),(88,2),(89,2),(90,2),(91,2),(92,2),(93,2),(94,2),(95,2),(96,2),(97,2);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (1,'Admin','admin','2025-02-25 18:46:28','2025-02-25 18:46:28'),(2,'Employee','admin','2025-02-25 18:46:28','2025-02-25 18:46:28');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `serviceRequests`
--

DROP TABLE IF EXISTS `serviceRequests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serviceRequests` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serviceRequest` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `serviceRequests`
--

LOCK TABLES `serviceRequests` WRITE;
/*!40000 ALTER TABLE `serviceRequests` DISABLE KEYS */;
/*!40000 ALTER TABLE `serviceRequests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_translations`
--

DROP TABLE IF EXISTS `service_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `service_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `service_translations_service_id_locale_unique` (`service_id`,`locale`),
  KEY `service_translations_locale_index` (`locale`),
  CONSTRAINT `service_translations_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_translations`
--

LOCK TABLES `service_translations` WRITE;
/*!40000 ALTER TABLE `service_translations` DISABLE KEYS */;
INSERT INTO `service_translations` (`id`, `title`, `subtitle`, `description`, `service_id`, `locale`, `created_at`, `updated_at`) VALUES (1,'انشاء مواقع الويب',NULL,'<p>نحن متخصصون في إنشاء مواقع ويب مخصصة تناسب احتياجات عملك المحددة. يعمل فريقنا من المطورين والمصممين ذوي الخبرة بشكل وثيق معك لفهم متطلباتك وتطوير موقع ويب يعكس هوية علامتك التجارية. نحن نستفيد من أحدث تقنيات الويب ومبادئ التصميم سريع الاستجابة لضمان أن يبدو موقع الويب الخاص بك مذهلاً ويعمل بشكل لا تشوبه شائبة عبر الأجهزة وبالاضافه الى لوحة تحكم لنجعلك قادر على التحكم فى جميع محتويات الموقع  </p>',1,'ar','2025-02-25 18:46:28','2025-02-25 18:46:28'),(2,'Custom Website Development',NULL,'<p>We specialize in creating custom websites that fit your specific business needs. Our team of experienced developers and designers work closely with you to understand your requirements and develop a website that reflects your brand identity. We take advantage of the latest web technologies and responsive design principles to ensure that your website looks amazing and works flawlessly across devices and in addition to a control panel to make you able to control all     site content</p>',1,'en','2025-02-25 18:46:28','2025-02-25 18:46:28'),(3,'انشاء مواقع تجارة الكترونية',NULL,'<p>إذا كنت تتطلع إلى بيع منتجات أو خدمات عبر الإنترنت، فيمكن أن تساعدك خدمات تطوير التجارة الإلكترونية لدينا. لدينا خبرة في بناء منصات تجارة إلكترونية آمنة وقابلة للتطوير توفر تجارب مستخدم سلسة وتكاملًا قويًا للدفع. بدءًا من كتالوجات المنتجات وعربات التسوق وحتى إدارة المخزون ومعالجة الطلبات، نقوم بإنشاء حلول للتجارة الإلكترونية تعمل على زيادة التحويلات وزيادة الإيرادات إلى أقصى حد</p>',2,'ar','2025-02-25 18:46:28','2025-02-25 18:46:28'),(4,'E-commerce Development',NULL,'<p>If you\'re looking to sell products or services online, our e-commerce development services can help. We have expertise in building secure and scalable e-commerce platforms that offer seamless user experiences and robust payment integration. From product catalogs and shopping carts to inventory management and order processing, we create e-commerce solutions that drive conversions and maximize revenue</p>',2,'en','2025-02-25 18:46:28','2025-02-25 18:46:28'),(5,'صيانة ودعم الموقع',NULL,'<p>نحن نؤمن بالشراكات طويلة الأمد مع عملائنا. تضمن خدمات صيانة ودعم موقع الويب لدينا بقاء موقع الويب الخاص بك آمنًا وحديثًا ومحسّنًا للأداء. نحن نقدم تحديثات منتظمة وتصحيحات أمنية ونسخًا احتياطية لحماية موقع الويب الخاص بك من نقاط الضعف. فريق الدعم لدينا متاح لمعالجة أية مشكلات والإجابة على الأسئلة وتقديم المساعدة الفنية المستمرة</p>',3,'ar','2025-02-25 18:46:28','2025-02-25 18:46:28'),(6,'Website Maintenance and Support',NULL,'<p>We believe in long-term partnerships with our clients. Our website maintenance and support services ensure that your website remains secure, up-to-date, and optimized for performance. We provide regular updates, security patches, and backups to protect your website from vulnerabilities. Our support team is available to address any issues, answer questions, and provide ongoing technical assistance </p>',3,'en','2025-02-25 18:46:28','2025-02-25 18:46:28'),(7,'استضافت مواقع ',NULL,'<p>في شركة تطوير الويب لدينا، نقدم خدمات استضافة شاملة للتأكد من أن موقع الويب الخاص بك يعمل على النحو الأمثل ويظل في متناول زوار موقعك. توفر خدمة الاستضافة لدينا بيئة موثوقة وآمنة لازدهار موقع الويب الخاص بك. فيما يلي نظرة عامة على خدمة الاستضافة لدينا:\n\nبنية تحتية موثوقة للاستضافة: نحن نحافظ على بنية تحتية قوية للاستضافة مع خوادم ومعدات شبكات حديثة. تم تحسين خوادمنا من أجل الأداء، مما يوفر أوقات تحميل سريعة وأقل وقت توقف. نحن نعطي الأولوية للموثوقية للتأكد من أن موقع الويب الخاص بك في متناول الزوار على مدار الساعة.\n\nحلول قابلة للتطوير: تم تصميم خدمة الاستضافة لدينا لاستيعاب نمو موقع الويب الخاص بك. سواء كان لديك موقع ويب خاص بشركة صغيرة أو تطبيق ويب معقد، فإننا نقدم حلول استضافة قابلة للتطوير يمكنها التكيف مع احتياجاتك المتغيرة. مع توسع موقع الويب الخاص بك، يمكننا بسهولة زيادة موارد الاستضافة للتعامل مع زيادة حركة المرور ومتطلبات البيانات.\n\nالتدابير الأمنية: نحن نعطي الأولوية لأمن موقع الويب الخاص بك والبيانات التي يحتوي عليها. تتضمن خدمة الاستضافة لدينا إجراءات أمنية قوية مثل جدران الحماية، وأنظمة كشف التسلل، والتحديثات الأمنية المنتظمة. نقوم أيضًا بتنفيذ شهادات SSL لتشفير نقل البيانات وحماية المعلومات الحساسة وبناء الثقة مع زوار موقعك.\n\nالنسخ الاحتياطي والتعافي من الكوارث: نحن ندرك أهمية حماية البيانات. تتضمن خدمة الاستضافة لدينا نسخًا احتياطية منتظمة لموقعك على الويب والبيانات المرتبطة به. في حالة وجود مشكلة فنية أو حدث غير متوقع، يمكننا استعادة موقع الويب الخاص بك بسرعة لتقليل وقت التوقف عن العمل وفقدان البيانات.\n\nالدعم الفني: فريق الدعم المخصص لدينا متاح لمساعدتك في أي مخاوف أو مشكلات فنية متعلقة بالاستضافة. سواء كانت لديك أسئلة حول تكوينات الخادم، أو كنت بحاجة إلى مساعدة بشأن إعدادات DNS، أو كنت بحاجة إلى استكشاف الأخطاء وإصلاحها، فإن موظفي الدعم ذوي المعرفة لدينا ليسوا سوى مكالمة هاتفية أو بريد إلكتروني.\n\nالتوافق مع تقنيات الويب: تدعم خدمة الاستضافة لدينا مجموعة واسعة من تقنيات الويب ولغات البرمجة. سواء تم إنشاء موقع الويب الخاص بك باستخدام PHP أو Python أو Node.js أو أطر عمل أخرى، يمكن لبيئة الاستضافة لدينا أن تلبي متطلباتك المحددة.\n\nشبكة تسليم المحتوى (CDN): لتحسين أداء موقع الويب الخاص بك، يمكننا دمج شبكة تسليم المحتوى (CDN) في خدمة الاستضافة لدينا. تساعد شبكة CDN على تقديم محتوى موقع الويب الخاص بك بسرعة للزائرين من مواقع جغرافية مختلفة، مما يحسن أوقات التحميل وتجربة المستخدم.\n\nاستضافة البريد الإلكتروني: إلى جانب استضافة مواقع الويب، نقدم أيضًا خدمات استضافة البريد الإلكتروني. يمكنك الحصول على عناوين بريد إلكتروني احترافية مرتبطة باسم النطاق الخاص بك، مما يوفر تجربة اتصال سلسة وموحدة لشركتك. </p>',4,'ar','2025-02-25 18:46:28','2025-02-25 18:46:28'),(8,'Website Hosting',NULL,'<p>At our web development company, we offer comprehensive hosting services to ensure that your website performs optimally and remains accessible to your visitors. Our hosting service provides a reliable and secure environment for your website to thrive. Here\'s an overview of our hosting service:\n\n                                Reliable Hosting Infrastructure: We maintain a robust hosting infrastructure with state-of-the-art servers and network equipment. Our servers are optimized for performance, offering fast load times and minimal downtime. We prioritize reliability to ensure that your website is accessible to visitors around the clock.\n                                \n                                Scalable Solutions: Our hosting service is designed to accommodate your website\'s growth. Whether you have a small business website or a complex web application, we offer scalable hosting solutions that can adapt to your changing needs. As your website expands, we can seamlessly scale up the hosting resources to handle increased traffic and data requirements.\n                                \n                                Security Measures: We prioritize the security of your website and the data it contains. Our hosting service includes robust security measures such as firewalls, intrusion detection systems, and regular security updates. We also implement SSL certificates to encrypt data transmission, safeguarding sensitive information and building trust with your visitors.\n                                \n                                Backup and Disaster Recovery: We understand the importance of data protection. Our hosting service includes regular backups of your website and its associated data. In the event of a technical issue or unexpected event, we can quickly restore your website to minimize downtime and data loss.\n                                \n                                Technical Support: Our dedicated support team is available to assist you with any hosting-related concerns or technical issues. Whether you have questions about server configurations, need assistance with DNS settings, or require troubleshooting, our knowledgeable support staff is just a phone call or email away.\n                                \n                                Compatibility with Web Technologies: Our hosting service supports a wide range of web technologies and programming languages. Whether your website is built with PHP, Python, Node.js, or other frameworks, our hosting environment can accommodate your specific requirements.\n                                \n                                Content Delivery Network (CDN): To enhance the performance of your website, we can integrate a Content Delivery Network (CDN) into our hosting service. A CDN helps deliver your website content quickly to visitors from various geographical locations, improving load times and user experience.\n                                \n                                Email Hosting: Along with website hosting, we also offer email hosting services. You can have professional email addresses associated with your domain name, providing a seamless and unified communication experience for your business.\n                                \n                                 </p>',4,'en','2025-02-25 18:46:28','2025-02-25 18:46:28');
/*!40000 ALTER TABLE `service_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` (`id`, `icon`, `created_at`, `updated_at`) VALUES (1,'far fa-window-restore','2025-02-25 18:46:28','2025-02-25 18:46:28'),(2,'fas fa-shopping-cart','2025-02-25 18:46:28','2025-02-25 18:46:28'),(3,'fas fa-cog','2025-02-25 18:46:28','2025-02-25 18:46:28'),(4,'fab fa-ioxhost','2025-02-25 18:46:28','2025-02-25 18:46:28');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setting_translations`
--

DROP TABLE IF EXISTS `setting_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `setting_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `address` text COLLATE utf8mb4_unicode_ci,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `appointment1` text COLLATE utf8mb4_unicode_ci,
  `copyright` text COLLATE utf8mb4_unicode_ci,
  `meta_data` text COLLATE utf8mb4_unicode_ci,
  `setting_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `setting_translations_setting_id_locale_unique` (`setting_id`,`locale`),
  KEY `setting_translations_locale_index` (`locale`),
  CONSTRAINT `setting_translations_setting_id_foreign` FOREIGN KEY (`setting_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setting_translations`
--

LOCK TABLES `setting_translations` WRITE;
/*!40000 ALTER TABLE `setting_translations` DISABLE KEYS */;
INSERT INTO `setting_translations` (`id`, `address`, `title`, `description`, `appointment1`, `copyright`, `meta_data`, `setting_id`, `locale`, `created_at`, `updated_at`) VALUES (1,'Building No.235 Second Sector, Fifth Settlement-New Cairo','Verde Developments','One of the biggest real estate developments companies in the MENA region owned by a group of Arab investors, started more than 12 years ago in the United Arab Emirates, during which it built a strong portfolio in Abu Dhabi and other emirates.','From Saturday to Thursday                From 11 am to 7 pm','© 2025 - Verde Developments . All rights reserved','Development Company',1,'en','2025-02-25 18:46:28','2025-02-26 22:36:32'),(2,'المبنى رقم 235، القطاع الثاني، التجمع الخامس - القاهرة الجديدة','فيردي ديفيلوبمنتس','إحدى أكبر شركات التطوير العقاري في منطقة الشرق الأوسط وشمال إفريقيا، مملوكة لمجموعة من المستثمرين العرب، بدأت منذ أكثر من 12 عامًا في الإمارات العربية المتحدة، وخلال تلك الفترة بنت محفظة قوية في أبوظبي والإمارات الأخرى.','من السبت إلى الخميس من الساعة 11 صباحًا حتى 7 مساءً','© 2025 - فيردي ديفيلوبمنتس. جميع الحقوق محفوظة','شركة تطوير عقاري',1,'ar','2025-02-25 18:46:28','2025-02-25 18:46:28');
/*!40000 ALTER TABLE `setting_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `white_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tab` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` (`id`, `logo`, `white_logo`, `tab`, `image`, `map`, `created_at`, `updated_at`, `address`) VALUES (1,'images/logo.png','images/logo.png','images/logo.png','image','<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6908.540976581482!2d31.4565122!3d30.0290969!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14582327d346541b%3A0x5958349b3e98235b!2sNew%20Event%20Developments!5e0!3m2!1sen!2seg!4v1739746329581!5m2!1sen!2seg\"  height=\"450\" style=\" width:100% !important; border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>','2025-02-25 18:46:28','2025-02-26 22:36:32',NULL);
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tasks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `employee_id` bigint(20) unsigned DEFAULT NULL,
  `project_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tasks_employee_id_foreign` (`employee_id`),
  KEY `tasks_project_id_foreign` (`project_id`),
  CONSTRAINT `tasks_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE,
  CONSTRAINT `tasks_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tasks`
--

LOCK TABLES `tasks` WRITE;
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team_translations`
--

DROP TABLE IF EXISTS `team_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `team_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `team_translations_team_id_locale_unique` (`team_id`,`locale`),
  KEY `team_translations_locale_index` (`locale`),
  CONSTRAINT `team_translations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team_translations`
--

LOCK TABLES `team_translations` WRITE;
/*!40000 ALTER TABLE `team_translations` DISABLE KEYS */;
INSERT INTO `team_translations` (`id`, `title`, `subtitle`, `description`, `team_id`, `locale`, `created_at`, `updated_at`) VALUES (1,'جرجس مكرم','مدير',NULL,1,'ar','2025-02-25 18:46:28','2025-02-25 18:46:28'),(2,'Gerges Makram','Manager',NULL,1,'en','2025-02-25 18:46:28','2025-02-25 18:46:28'),(3,'بولا نسيم','مهندس برمجيات',NULL,2,'ar','2025-02-25 18:46:28','2025-02-25 18:46:28'),(4,'Boula Nessim','Project Manager',NULL,2,'en','2025-02-25 18:46:28','2025-02-25 18:46:28'),(5,'ابراهيم سامى','مهندس برمجيات',NULL,3,'ar','2025-02-25 18:46:28','2025-02-25 18:46:28'),(6,'Ibrahim Samy','Software Engineer',NULL,3,'en','2025-02-25 18:46:28','2025-02-25 18:46:28'),(7,'كيرلس ادوارد','مصمم ويب ',NULL,4,'ar','2025-02-25 18:46:28','2025-02-25 18:46:28'),(8,'Kyrillos Edward','Software Engineer',NULL,4,'en','2025-02-25 18:46:28','2025-02-25 18:46:28'),(9,'تادرس اميل','مطور ويب',NULL,5,'ar','2025-02-25 18:46:28','2025-02-25 18:46:28'),(10,'Tadrous Emil','Software Engineer',NULL,5,'en','2025-02-25 18:46:28','2025-02-25 18:46:28'),(11,'ميلاد يوسف','مطور ويب',NULL,6,'ar','2025-02-25 18:46:28','2025-02-25 18:46:28'),(12,'Melad Youssef','Web Developer',NULL,6,'en','2025-02-25 18:46:28','2025-02-25 18:46:28'),(13,'زياد محمد','مطور ويب',NULL,7,'ar','2025-02-25 18:46:28','2025-02-25 18:46:28'),(14,'Zeiad Mohamed','Web Developer',NULL,7,'en','2025-02-25 18:46:28','2025-02-25 18:46:28');
/*!40000 ALTER TABLE `team_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teams` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teams`
--

LOCK TABLES `teams` WRITE;
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
INSERT INTO `teams` (`id`, `facebook`, `twitter`, `instagram`, `linkedin`, `created_at`, `updated_at`) VALUES (1,'https://www.facebook.com','https://www.twitter.com','https://www.instagram.com','https://www.linkedin.com','2025-02-25 18:46:28','2025-02-25 18:46:28'),(2,'https://www.facebook.com','https://www.twitter.com','https://www.instagram.com','https://www.linkedin.com','2025-02-25 18:46:28','2025-02-25 18:46:28'),(3,'https://www.facebook.com','https://www.twitter.com','https://www.instagram.com','https://www.linkedin.com','2025-02-25 18:46:28','2025-02-25 18:46:28'),(4,'https://www.facebook.com','https://www.twitter.com','https://www.instagram.com','https://www.linkedin.com','2025-02-25 18:46:28','2025-02-25 18:46:28'),(5,'https://www.facebook.com','https://www.twitter.com','https://www.instagram.com','https://www.linkedin.com','2025-02-25 18:46:28','2025-02-25 18:46:28'),(6,'https://www.facebook.com','https://www.twitter.com','https://www.instagram.com','https://www.linkedin.com','2025-02-25 18:46:28','2025-02-25 18:46:28'),(7,'https://www.facebook.com','https://www.twitter.com','https://www.instagram.com','https://www.linkedin.com','2025-02-25 18:46:28','2025-02-25 18:46:28');
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonial_translations`
--

DROP TABLE IF EXISTS `testimonial_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `testimonial_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `testimonial_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `testimonial_translations_testimonial_id_locale_unique` (`testimonial_id`,`locale`),
  KEY `testimonial_translations_locale_index` (`locale`),
  CONSTRAINT `testimonial_translations_testimonial_id_foreign` FOREIGN KEY (`testimonial_id`) REFERENCES `testimonials` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonial_translations`
--

LOCK TABLES `testimonial_translations` WRITE;
/*!40000 ALTER TABLE `testimonial_translations` DISABLE KEYS */;
INSERT INTO `testimonial_translations` (`id`, `title`, `subtitle`, `description`, `testimonial_id`, `locale`, `created_at`, `updated_at`) VALUES (1,'عمر محمد','العميل، الولايات المتحدة الأمريكية','<p> لقد كان من دواعي سروري العمل مع فريق شركة يوساب تك في مشروع موقع الويب الخاص بي، ولم أستطع أن أكون أكثر سعادة بالنتائج. لقد أظهروا، منذ البداية وحتى النهاية، مستوىً عالٍ من الاحترافية والخبرة والتفاني </p>',1,'ar','2025-02-25 18:46:28','2025-02-25 18:46:28'),(2,'Omar Mohamed','Customer,USA','<p>I had the pleasure of working with the team at Yousab Tech company for my website project, and I couldn\'t be happier with the results. From start to finish, they demonstrated a high level of professionalism, expertise, and dedication</p>',1,'en','2025-02-25 18:46:28','2025-02-25 18:46:28'),(3,'محمد احمد','العميل، الولايات المتحدة الأمريكية','<p>استغرق فريق شركة يوساب تك الوقت الكافي لفهم رؤيتي وأهدافي للموقع. لقد استمعوا باهتمام لمتطلباتي وقدموا رؤى واقتراحات قيمة لتعزيز تجربة المستخدم الشاملة. كان تواصلهم طوال المشروع ممتازًا، وأبقوني على اطلاع دائم بالتقدم المحرز بانتظام.</p>',2,'ar','2025-02-25 18:46:28','2025-02-25 18:46:28'),(4,'Mohamed Ahmed','Customer,USA','<p> The team at Yousab Tech company took the time to understand my vision and goals for the website. They listened attentively to my requirements and provided valuable insights and suggestions to enhance the overall user experience. Their communication throughout the project was excellent, and they kept me updated on the progress regularly</p>',2,'en','2025-02-25 18:46:28','2025-02-25 18:46:28'),(5,' علياء عماد','العميل، الولايات المتحدة الأمريكية','<p>لقد تأثرت بمهاراتهم الفنية واهتمامهم بالتفاصيل. موقع الويب الذي أنشأوه لي لا يبدو مذهلاً فحسب، بل يعمل أيضًا بشكل لا تشوبه شائبة. لقد تأكدوا من أن الموقع سريع الاستجابة ومُحسّن لمحركات البحث وسهل الاستخدام. التصميم حديث وجذاب بصريًا ويتوافق تمامًا مع هوية علامتي التجارية.</p>',3,'ar','2025-02-25 18:46:28','2025-02-25 18:46:28'),(6,'Alia Emad','Customer,USA','<p>I was impressed by their technical skills and attention to detail. The website they created for me not only looks stunning but also functions flawlessly. They ensured that the site is responsive, optimized for search engines, and user-friendly. The design is modern, visually appealing, and aligned perfectly with my brand identity</p>',3,'en','2025-02-25 18:46:28','2025-02-25 18:46:28'),(7,'شريف عاطف','العميل، الولايات المتحدة الأمريكية','<p>ما يميز شركة يوساب تك هو التزامها برضا العملاء. لقد ذهبوا إلى أبعد من ذلك لمعالجة أي مخاوف أو تعديلات كانت لدي، وكانوا دائمًا سريعين في ردودهم. خدمة العملاء الخاصة بهم استثنائية حقًا.</p>',4,'ar','2025-02-25 18:46:28','2025-02-25 18:46:28'),(8,'Sherif Atef','Customer,USA','<p>What sets Yousab Tech company apart is their commitment to customer satisfaction. They went above and beyond to address any concerns or modifications I had, and they were always prompt in their responses. Their customer service is truly exceptional.</p>',4,'en','2025-02-25 18:46:28','2025-02-25 18:46:28'),(9,' داليا سمير','العميل، الولايات المتحدة الأمريكية','<p>أوصي بشدة بشركة يوساب تك لأي شخص يحتاج إلى خدمات تطوير الويب الاحترافية. إنهم فريق موهوب وموثوق يحقق نتائج رائعة. لقد كان العمل معهم ممتعًا، وأتطلع إلى التعاون معهم مرة أخرى في المستقبل</p>',5,'ar','2025-02-25 18:46:28','2025-02-25 18:46:28'),(10,'Dalia Samir','Customer,USA','<p>I highly recommend Yousab Tech company to anyone in need of professional web development services. They are a talented and reliable team that delivers outstanding results. Working with them has been a pleasure, and I look forward to collaborating with them again in the future</p>',5,'en','2025-02-25 18:46:28','2025-02-25 18:46:28');
/*!40000 ALTER TABLE `testimonial_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `testimonials` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonials`
--

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` (`id`, `created_at`, `updated_at`) VALUES (1,'2025-02-25 18:46:28','2025-02-25 18:46:28'),(2,'2025-02-25 18:46:28','2025-02-25 18:46:28'),(3,'2025-02-25 18:46:28','2025-02-25 18:46:28'),(4,'2025-02-25 18:46:28','2025-02-25 18:46:28'),(5,'2025-02-25 18:46:28','2025-02-25 18:46:28');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (1,'Ibrahim Samy','ibrahimsamy308@gmail.com',NULL,'$2y$10$wDEGXgcodRUi3jNKz1HE8eEwz8HXwOG6PlRcx6x.7BXCGnQWtKlYa',NULL,'2025-02-25 18:46:28','2025-02-25 18:46:28'),(2,'Keroles Fouad','Kero@gmail.com',NULL,'$2y$10$NpAKslkFRnRgjThrfgR5nuawJthF3068CgTdHflBoLiEaBV..DXfa',NULL,'2025-02-25 18:46:28','2025-02-25 18:46:28'),(3,'ابراهيم سامى','ibrahim@gmail.com',NULL,'$2y$10$N7bzEjoLsMWIIOXpKsFwVeqxl8XcgUozujD9UeqZdN6.3j/FbxeRq',NULL,'2025-02-25 18:46:28','2025-02-25 18:46:28');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vaccancies`
--

DROP TABLE IF EXISTS `vaccancies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vaccancies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `salary` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vaccancies`
--

LOCK TABLES `vaccancies` WRITE;
/*!40000 ALTER TABLE `vaccancies` DISABLE KEYS */;
/*!40000 ALTER TABLE `vaccancies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vaccancy_translations`
--

DROP TABLE IF EXISTS `vaccancy_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vaccancy_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `vaccancy_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `vaccancy_translations_vaccancy_id_locale_unique` (`vaccancy_id`,`locale`),
  KEY `vaccancy_translations_locale_index` (`locale`),
  CONSTRAINT `vaccancy_translations_vaccancy_id_foreign` FOREIGN KEY (`vaccancy_id`) REFERENCES `vaccancies` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vaccancy_translations`
--

LOCK TABLES `vaccancy_translations` WRITE;
/*!40000 ALTER TABLE `vaccancy_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `vaccancy_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video_translations`
--

DROP TABLE IF EXISTS `video_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `video_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `video_translations_video_id_locale_unique` (`video_id`,`locale`),
  KEY `video_translations_locale_index` (`locale`),
  CONSTRAINT `video_translations_video_id_foreign` FOREIGN KEY (`video_id`) REFERENCES `videos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video_translations`
--

LOCK TABLES `video_translations` WRITE;
/*!40000 ALTER TABLE `video_translations` DISABLE KEYS */;
INSERT INTO `video_translations` (`id`, `title`, `video_id`, `locale`, `created_at`, `updated_at`) VALUES (1,'المؤتمر الصحفي لإطلاق المشروع الثالث لشركة نيو إيفنت للتطوير العقاري، مشروع قماري ريزيدنس',1,'ar','2025-02-25 18:46:28','2025-02-25 18:46:28'),(2,'Press conference for the launch of the third project of New Event Real Estate Development Company, the Qamari Residence project',1,'en','2025-02-25 18:46:28','2025-02-25 18:46:28'),(3,'التغطية الصحفية لإطلاق المشروع الثالث لشركة نيو إيفنت ديفيلوبمنتس، قماري ريزيدنس',2,'ar','2025-02-25 18:46:28','2025-02-25 18:46:28'),(4,'Press coverage of the launch of the third project of New Event Developments, Qamari Residence',2,'en','2025-02-25 18:46:28','2025-02-25 18:46:28'),(5,'قماري ريزيدنس',3,'ar','2025-02-25 18:46:28','2025-02-25 18:46:28'),(6,'Qamari Residence',3,'en','2025-02-25 18:46:28','2025-02-25 18:46:28'),(7,'فعالية قماري ريزيدنس',4,'ar','2025-02-25 18:46:28','2025-02-25 18:46:28'),(8,'Qamari Residence Event',4,'en','2025-02-25 18:46:28','2025-02-25 18:46:28'),(9,'الإطلاق الآن... كمبوند سكني في العاصمة الإدارية الجديدة - R8',5,'ar','2025-02-25 18:46:28','2025-02-25 18:46:28'),(10,'Launching Now... Residential Compound New Capital - R8',5,'en','2025-02-25 18:46:28','2025-02-25 18:46:28'),(11,'يوم مليء بالسعادة والفرح لشركة نيو إيفنت ديفيلوبمنتس',6,'ar','2025-02-25 18:46:28','2025-02-25 18:46:28'),(12,'A day full of happiness and joy for the New Event Developments',6,'en','2025-02-25 18:46:28','2025-02-25 18:46:28');
/*!40000 ALTER TABLE `video_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `youtube_link` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` (`id`, `youtube_link`, `created_at`, `updated_at`) VALUES (1,'https://youtu.be/RdJrgY46mjQ','2025-02-25 18:46:28','2025-02-25 18:46:28'),(2,'https://youtu.be/E614dD_pID8','2025-02-25 18:46:28','2025-02-25 18:46:28'),(3,'https://youtu.be/lEz8DSsDEe4','2025-02-25 18:46:28','2025-02-25 18:46:28'),(4,'https://youtu.be/pHxZvU6yfM8','2025-02-25 18:46:28','2025-02-25 18:46:28'),(5,'https://youtu.be/oZNu7NluXjQ','2025-02-25 18:46:28','2025-02-25 18:46:28'),(6,'https://youtu.be/5vZ7FLoQyCI','2025-02-25 18:46:28','2025-02-25 18:46:28');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;
/*!50112 SET @disable_bulk_load = IF (@is_rocksdb_supported, 'SET SESSION rocksdb_bulk_load = @old_rocksdb_bulk_load', 'SET @dummy_rocksdb_bulk_load = 0') */;
/*!50112 PREPARE s FROM @disable_bulk_load */;
/*!50112 EXECUTE s */;
/*!50112 DEALLOCATE PREPARE s */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-02-26  8:38:34
