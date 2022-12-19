CREATE DATABASE  IF NOT EXISTS `myagu_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `myagu_db`;
-- MySQL dump 10.13  Distrib 8.0.29, for macos12 (x86_64)
--
-- Host: 127.0.0.1    Database: myagu_db
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `academics_administration`
--

DROP TABLE IF EXISTS `academics_administration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `academics_administration` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` json DEFAULT NULL,
  `link` json DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `academics_administration`
--

LOCK TABLES `academics_administration` WRITE;
/*!40000 ALTER TABLE `academics_administration` DISABLE KEYS */;
INSERT INTO `academics_administration` VALUES (1,'{\"en\": \"EBYS\", \"tr\": \"EBYS\"}','{\"en\": \"https://ebys.agu.edu.tr\", \"tr\": \"https://ebys.agu.edu.tr\"}',1),(2,'{\"en\": \"DEPO\", \"tr\": \"DEPO\"}','{\"en\": \"https://depo.agu.edu.tr\", \"tr\": \"https://depo.agu.edu.tr\"}',1),(3,'{\"en\": \"CLOUD\", \"tr\": \"CLOUD\"}','{\"en\": \"http://cd.agu.edu.tr\", \"tr\": \"http://cd.agu.edu.tr\"}',1),(4,'{\"en\": \"AVESIS\", \"tr\": \"AVESİS\"}','{\"en\": \"https://avesis.agu.edu.tr\", \"tr\": \"https://avesis.agu.edu.tr\"}',1),(5,'{\"en\": \"YOKSIS\", \"tr\": \"YÖKSİS\"}','{\"en\": \"https://yoksis.yok.gov.tr\", \"tr\": \"https://yoksis.yok.gov.tr\"}',1),(6,'{\"en\": \"BAPSIS\", \"tr\": \"BAPSİS\"}','{\"en\": \"https://bapsis.agu.edu.tr\", \"tr\": \"https://bapsis.agu.edu.tr\"}',1),(7,'{\"en\": \"Forms & Documents\", \"tr\": \"Formlar & Belgeler\"}','{\"tr\": null}',1),(8,'{\"en\": \"Who is who?\", \"tr\": \"Who is who?\"}','{\"tr\": null}',1);
/*!40000 ALTER TABLE `academics_administration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `activations`
--

DROP TABLE IF EXISTS `activations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `activations` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `activations_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activations`
--

LOCK TABLES `activations` WRITE;
/*!40000 ALTER TABLE `activations` DISABLE KEYS */;
/*!40000 ALTER TABLE `activations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_activations`
--

DROP TABLE IF EXISTS `admin_activations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin_activations` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `admin_activations_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_activations`
--

LOCK TABLES `admin_activations` WRITE;
/*!40000 ALTER TABLE `admin_activations` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_activations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_password_resets`
--

DROP TABLE IF EXISTS `admin_password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin_password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `admin_password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_password_resets`
--

LOCK TABLES `admin_password_resets` WRITE;
/*!40000 ALTER TABLE `admin_password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_users`
--

DROP TABLE IF EXISTS `admin_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin_users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `forbidden` tinyint(1) NOT NULL DEFAULT '0',
  `language` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_login_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_users_email_deleted_at_unique` (`email`,`deleted_at`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_users`
--

LOCK TABLES `admin_users` WRITE;
/*!40000 ALTER TABLE `admin_users` DISABLE KEYS */;
INSERT INTO `admin_users` VALUES (1,'Administrator','Administrator','cms.admin@agu.edu.tr','$2a$12$GgJA8Ictjv0UBpURTIOxl.YQbMEr2rMf84wmqOmqF19Q4Nd.XN3C.','r6VuC52SfzvZGvk7iMtKLdycN2g4D32UFZhpchdRu3OsCHt5GLj8R5EGWWJd',1,0,'en',NULL,'2022-12-12 08:29:46','2022-12-17 10:42:33','2022-12-17 10:42:33');
/*!40000 ALTER TABLE `admin_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `announcements`
--

DROP TABLE IF EXISTS `announcements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `announcements` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` json DEFAULT NULL,
  `description` json DEFAULT NULL,
  `link` json DEFAULT NULL,
  `published_at` date DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `announcements`
--

LOCK TABLES `announcements` WRITE;
/*!40000 ALTER TABLE `announcements` DISABLE KEYS */;
INSERT INTO `announcements` VALUES (1,'{\"en\": \"Housing Applications\", \"tr\": \"Aday Memur\"}','{\"en\": \"<p><strong>Housing Application</strong><br></p>\", \"tr\": \"<p>Aday Memur Temel Eğitim Sınav Sonuçları için tıklayınız</p>\"}','{\"en\": \"http://www.agu.edu.tr/announcements/6693/\", \"tr\": \"https://personel-tr.agu.edu.tr/uploads/2022%20Aday%20Memur/Aday%20Memur%20Hazırlayıcı%20Eğitim%20Başarı%20Listesi%20%281%29.pdf\"}',NULL,1,'2022-12-16 09:43:49','2022-12-19 11:17:58'),(2,'{\"en\": \"2021-2022 Academic Year Summer School Course Selections and Fees\", \"tr\": \"2021-2022 Eğitim-Öğretim Yılı Yaz Okulu Ders Seçimleri ve Ücretleri\"}','{\"en\": \"<p>2021-2022 Academic Year Summer School Course Selections and Fees<br></p>\", \"tr\": \"<p>2021-2022 Eğitim-Öğretim Yılı Yaz Okulu Ders Seçimleri ve Ücretleri<br></p>\"}','{\"en\": \"http://www.agu.edu.tr/duyurular/6601/\", \"tr\": \"http://www.agu.edu.tr/duyurular/6600/\"}',NULL,1,'2022-12-19 10:22:31','2022-12-19 10:24:20'),(3,'{\"en\": \"announcement_name\", \"tr\": \"announcement_name\"}','{\"en\": \"<p>Some placeholder content in a paragraph.Some placeholder content in a paragraph that goes a little longer so it wraps to a new line.<br></p>\", \"tr\": \"<p>Some placeholder content in a paragraph.Some placeholder content in a paragraph that goes a little longer so it wraps to a new line.<br></p>\"}','{\"tr\": null}',NULL,1,'2022-12-19 11:07:48','2022-12-19 11:07:48');
/*!40000 ALTER TABLE `announcements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cafeteria_menu`
--

DROP TABLE IF EXISTS `cafeteria_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cafeteria_menu` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` json DEFAULT NULL,
  `published_at` date DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cafeteria_menu`
--

LOCK TABLES `cafeteria_menu` WRITE;
/*!40000 ALTER TABLE `cafeteria_menu` DISABLE KEYS */;
INSERT INTO `cafeteria_menu` VALUES (4,'{\"en\": \"xyz\"}',NULL,1,'2022-12-17 11:37:56','2022-12-17 13:22:41');
/*!40000 ALTER TABLE `cafeteria_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `calendar`
--

DROP TABLE IF EXISTS `calendar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `calendar` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` json DEFAULT NULL,
  `description` json DEFAULT NULL,
  `event_time` datetime DEFAULT NULL,
  `event_location` json DEFAULT NULL,
  `link` json DEFAULT NULL,
  `published_at` date DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calendar`
--

LOCK TABLES `calendar` WRITE;
/*!40000 ALTER TABLE `calendar` DISABLE KEYS */;
INSERT INTO `calendar` VALUES (1,'{\"en\": \"2022-2023 Course Selection\", \"tr\": \"2022-2023 Ders Seçimi\"}','{\"en\": \"<p>To Do #1</p>\", \"tr\": \"<p>Yapılacaklar #1</p>\"}','2022-12-20 12:00:00','{\"en\": \"Sumer Campus\", \"tr\": \"Sümer Kampüsü\"}','{\"en\": null}',NULL,1,'2022-12-18 09:31:51','2022-12-19 10:51:50'),(2,'{\"en\": \"Calendar Example\", \"tr\": \"Takvim Örneği\"}','{\"en\": \"<p>To Do #2</p>\", \"tr\": \"<p>Yapılacaklar #2</p>\"}','2022-12-19 18:00:00','{\"en\": \"Online\", \"tr\": \"Online\"}','{\"tr\": null}',NULL,1,'2022-12-19 10:36:28','2022-12-19 10:52:27'),(3,'{\"en\": \"Calendar Example\", \"tr\": \"Takvim Örneği\"}','{\"en\": \"<p>To Do #3</p>\", \"tr\": \"<p>Yapılacaklar #3</p>\"}','2022-12-19 11:00:00','{\"en\": \"Sumer Campus\", \"tr\": \"Sümer Kampüsü\"}','{\"tr\": null}',NULL,1,'2022-12-19 10:37:16','2022-12-19 10:52:41');
/*!40000 ALTER TABLE `calendar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `communicate`
--

DROP TABLE IF EXISTS `communicate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `communicate` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` json DEFAULT NULL,
  `link` json DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `communicate`
--

LOCK TABLES `communicate` WRITE;
/*!40000 ALTER TABLE `communicate` DISABLE KEYS */;
INSERT INTO `communicate` VALUES (1,'{\"en\": \"AGU Mail\", \"tr\": \"AGÜ E-posta\"}','{\"en\": \"https://posta.agu.edu.tr\", \"tr\": \"https://posta.agu.edu.tr\"}',1),(2,'{\"en\": \"ZOOM\", \"tr\": \"ZOOM\"}','{\"en\": \"https://zoom.us\", \"tr\": \"https://zoom.us\"}',1),(3,'{\"en\": \"MS Teams\", \"tr\": \"MS Teams\"}','{\"en\": \"https://www.microsoft.com/en-us/microsoft-teams/log-in\", \"tr\": \"https://www.microsoft.com/en-us/microsoft-teams/log-in\"}',1),(4,'{\"en\": \"Forms & Docs\", \"tr\": \"Formlar & Belgeler\"}','{\"tr\": null}',1),(5,'{\"en\": \"Campus Map\", \"tr\": \"Kampüs Haritası\"}','{\"en\": \"https://sustainability.agu.edu.tr/agu-environment\", \"tr\": \"https://sustainability.agu.edu.tr/agu-environment\"}',1);
/*!40000 ALTER TABLE `communicate` ENABLE KEYS */;
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
-- Table structure for table `manage_courses`
--

DROP TABLE IF EXISTS `manage_courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `manage_courses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` json DEFAULT NULL,
  `link` json DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manage_courses`
--

LOCK TABLES `manage_courses` WRITE;
/*!40000 ALTER TABLE `manage_courses` DISABLE KEYS */;
INSERT INTO `manage_courses` VALUES (1,'{\"en\": \"UIS\", \"tr\": \"UIS\"}','{\"en\": \"https://uis.agu.edu.tr\", \"tr\": \"https://uis.agu.edu.tr\"}',1),(2,'{\"en\": \"Canvas Old\", \"tr\": \"Canvas Old\"}','{\"en\": \"https://canvasold.agu.edu.tr\", \"tr\": \"https://canvasold.agu.edu.tr\"}',1),(3,'{\"en\": \"Canvas\", \"tr\": \"Canvas\"}','{\"en\": \"https://canvas.agu.edu.tr\", \"tr\": \"https://canvas.agu.edu.tr\"}',1),(4,'{\"en\": \"CATSIS\", \"tr\": \"CATSIS\"}','{\"en\": \"https://catsis.agu.edu.tr\", \"tr\": \"https://catsis.agu.edu.tr\"}',1),(5,'{\"en\": \"Classrooms\", \"tr\": \"Sınıflar\"}','{\"tr\": null}',1);
/*!40000 ALTER TABLE `manage_courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `media` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint unsigned NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `generated_conversions` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `media_uuid_unique` (`uuid`),
  KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  KEY `media_order_column_index` (`order_column`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
INSERT INTO `media` VALUES (1,'Brackets\\AdminAuth\\Models\\AdminUser',1,'0d0942e3-60ca-4456-bfd4-29f0db6933b0','avatar','avatar','avatar.png','image/png','media','media',23924,'[]','[]','{\"thumb_75\": true, \"thumb_150\": true, \"thumb_200\": true}','[]',1,'2022-12-12 08:29:46','2022-12-12 08:29:47'),(5,'App\\Models\\CafeteriaMenu',4,'e71882c8-06ea-4407-aa03-d271287223e5','file','oUY4gQ82Oh66DsHjDqgAOB3kJptgDJywWZVjUIvl','oUY4gQ82Oh66DsHjDqgAOB3kJptgDJywWZVjUIvl.pdf','application/pdf','media','media',188098,'[]','{\"name\": \"hw_5.pdf\", \"file_name\": \"hw_5.pdf\"}','[]','[]',2,'2022-12-17 11:37:56','2022-12-17 11:37:56');
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2017_08_24_000000_create_activations_table',1),(4,'2017_08_24_000000_create_admin_activations_table',1),(5,'2017_08_24_000000_create_admin_password_resets_table',1),(6,'2017_08_24_000000_create_admin_users_table',1),(7,'2018_07_18_000000_create_wysiwyg_media_table',1),(8,'2019_08_19_000000_create_failed_jobs_table',1),(9,'2019_12_14_000001_create_personal_access_tokens_table',1),(10,'2020_10_21_000000_add_last_login_at_timestamp_to_admin_users_table',1),(11,'2022_12_12_112849_create_media_table',1),(12,'2022_12_12_112849_create_permission_tables',1),(13,'2022_12_12_112854_fill_default_admin_user_and_permissions',1),(14,'2022_12_12_112945_create_translations_table',2),(15,'2022_12_16_124050_create_announcements_table',3),(16,'2022_12_16_124246_fill_permissions_for_announcement',4),(17,'2022_12_16_124637_create_calendar_table',5),(18,'2022_12_16_132242_fill_permissions_for_calendar',6),(19,'2022_12_16_132445_create_poll_table',7),(20,'2022_12_16_132709_fill_permissions_for_poll',8),(21,'2022_12_16_133604_create_communicate_table',9),(22,'2022_12_16_133814_fill_permissions_for_communicate',10),(23,'2022_12_16_133837_create_manage_courses_table',11),(24,'2022_12_16_134112_fill_permissions_for_manage-course',12),(25,'2022_12_16_134201_create_solve_table',13),(26,'2022_12_16_134339_fill_permissions_for_solve',14),(27,'2022_12_16_134504_create_academics_administration_table',15),(28,'2022_12_16_134557_fill_permissions_for_academics-administration',16),(29,'2022_12_16_140334_create_cafeteria_menu_table',17),(30,'2022_12_16_141023_fill_permissions_for_cafeteria-menu',18);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
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
INSERT INTO `model_has_roles` VALUES (1,'Brackets\\AdminAuth\\Models\\AdminUser',1);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
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
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'admin','admin','2022-12-12 08:29:46','2022-12-12 08:29:46'),(2,'admin.translation.index','admin','2022-12-12 08:29:46','2022-12-12 08:29:46'),(3,'admin.translation.edit','admin','2022-12-12 08:29:46','2022-12-12 08:29:46'),(4,'admin.translation.rescan','admin','2022-12-12 08:29:46','2022-12-12 08:29:46'),(5,'admin.admin-user.index','admin','2022-12-12 08:29:46','2022-12-12 08:29:46'),(6,'admin.admin-user.create','admin','2022-12-12 08:29:46','2022-12-12 08:29:46'),(7,'admin.admin-user.edit','admin','2022-12-12 08:29:46','2022-12-12 08:29:46'),(8,'admin.admin-user.delete','admin','2022-12-12 08:29:46','2022-12-12 08:29:46'),(9,'admin.upload','admin','2022-12-12 08:29:46','2022-12-12 08:29:46'),(10,'admin.admin-user.impersonal-login','admin','2022-12-12 08:29:46','2022-12-12 08:29:46'),(11,'admin.announcement','admin','2022-12-16 09:42:58','2022-12-16 09:42:58'),(12,'admin.announcement.index','admin','2022-12-16 09:42:58','2022-12-16 09:42:58'),(13,'admin.announcement.create','admin','2022-12-16 09:42:58','2022-12-16 09:42:58'),(14,'admin.announcement.show','admin','2022-12-16 09:42:58','2022-12-16 09:42:58'),(15,'admin.announcement.edit','admin','2022-12-16 09:42:58','2022-12-16 09:42:58'),(16,'admin.announcement.delete','admin','2022-12-16 09:42:58','2022-12-16 09:42:58'),(17,'admin.announcement.bulk-delete','admin','2022-12-16 09:42:58','2022-12-16 09:42:58'),(18,'admin.calendar','admin','2022-12-16 10:22:44','2022-12-16 10:22:44'),(19,'admin.calendar.index','admin','2022-12-16 10:22:44','2022-12-16 10:22:44'),(20,'admin.calendar.create','admin','2022-12-16 10:22:44','2022-12-16 10:22:44'),(21,'admin.calendar.show','admin','2022-12-16 10:22:44','2022-12-16 10:22:44'),(22,'admin.calendar.edit','admin','2022-12-16 10:22:44','2022-12-16 10:22:44'),(23,'admin.calendar.delete','admin','2022-12-16 10:22:44','2022-12-16 10:22:44'),(24,'admin.calendar.bulk-delete','admin','2022-12-16 10:22:44','2022-12-16 10:22:44'),(25,'admin.poll','admin','2022-12-16 10:27:10','2022-12-16 10:27:10'),(26,'admin.poll.index','admin','2022-12-16 10:27:10','2022-12-16 10:27:10'),(27,'admin.poll.create','admin','2022-12-16 10:27:10','2022-12-16 10:27:10'),(28,'admin.poll.show','admin','2022-12-16 10:27:10','2022-12-16 10:27:10'),(29,'admin.poll.edit','admin','2022-12-16 10:27:10','2022-12-16 10:27:10'),(30,'admin.poll.delete','admin','2022-12-16 10:27:10','2022-12-16 10:27:10'),(31,'admin.poll.bulk-delete','admin','2022-12-16 10:27:10','2022-12-16 10:27:10'),(32,'admin.communicate','admin','2022-12-16 10:38:15','2022-12-16 10:38:15'),(33,'admin.communicate.index','admin','2022-12-16 10:38:15','2022-12-16 10:38:15'),(34,'admin.communicate.create','admin','2022-12-16 10:38:15','2022-12-16 10:38:15'),(35,'admin.communicate.show','admin','2022-12-16 10:38:15','2022-12-16 10:38:15'),(36,'admin.communicate.edit','admin','2022-12-16 10:38:15','2022-12-16 10:38:15'),(37,'admin.communicate.delete','admin','2022-12-16 10:38:15','2022-12-16 10:38:15'),(38,'admin.communicate.bulk-delete','admin','2022-12-16 10:38:15','2022-12-16 10:38:15'),(39,'admin.manage-course','admin','2022-12-16 10:41:13','2022-12-16 10:41:13'),(40,'admin.manage-course.index','admin','2022-12-16 10:41:13','2022-12-16 10:41:13'),(41,'admin.manage-course.create','admin','2022-12-16 10:41:13','2022-12-16 10:41:13'),(42,'admin.manage-course.show','admin','2022-12-16 10:41:13','2022-12-16 10:41:13'),(43,'admin.manage-course.edit','admin','2022-12-16 10:41:13','2022-12-16 10:41:13'),(44,'admin.manage-course.delete','admin','2022-12-16 10:41:13','2022-12-16 10:41:13'),(45,'admin.manage-course.bulk-delete','admin','2022-12-16 10:41:13','2022-12-16 10:41:13'),(46,'admin.solve','admin','2022-12-16 10:43:40','2022-12-16 10:43:40'),(47,'admin.solve.index','admin','2022-12-16 10:43:40','2022-12-16 10:43:40'),(48,'admin.solve.create','admin','2022-12-16 10:43:40','2022-12-16 10:43:40'),(49,'admin.solve.show','admin','2022-12-16 10:43:40','2022-12-16 10:43:40'),(50,'admin.solve.edit','admin','2022-12-16 10:43:40','2022-12-16 10:43:40'),(51,'admin.solve.delete','admin','2022-12-16 10:43:40','2022-12-16 10:43:40'),(52,'admin.solve.bulk-delete','admin','2022-12-16 10:43:40','2022-12-16 10:43:40'),(53,'admin.academics-administration','admin','2022-12-16 10:45:59','2022-12-16 10:45:59'),(54,'admin.academics-administration.index','admin','2022-12-16 10:45:59','2022-12-16 10:45:59'),(55,'admin.academics-administration.create','admin','2022-12-16 10:45:59','2022-12-16 10:45:59'),(56,'admin.academics-administration.show','admin','2022-12-16 10:45:59','2022-12-16 10:45:59'),(57,'admin.academics-administration.edit','admin','2022-12-16 10:45:59','2022-12-16 10:45:59'),(58,'admin.academics-administration.delete','admin','2022-12-16 10:45:59','2022-12-16 10:45:59'),(59,'admin.academics-administration.bulk-delete','admin','2022-12-16 10:45:59','2022-12-16 10:45:59'),(60,'admin.cafeteria-menu','admin','2022-12-16 11:10:26','2022-12-16 11:10:26'),(61,'admin.cafeteria-menu.index','admin','2022-12-16 11:10:26','2022-12-16 11:10:26'),(62,'admin.cafeteria-menu.create','admin','2022-12-16 11:10:26','2022-12-16 11:10:26'),(63,'admin.cafeteria-menu.show','admin','2022-12-16 11:10:26','2022-12-16 11:10:26'),(64,'admin.cafeteria-menu.edit','admin','2022-12-16 11:10:26','2022-12-16 11:10:26'),(65,'admin.cafeteria-menu.delete','admin','2022-12-16 11:10:26','2022-12-16 11:10:26'),(66,'admin.cafeteria-menu.bulk-delete','admin','2022-12-16 11:10:26','2022-12-16 11:10:26');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
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
-- Table structure for table `poll`
--

DROP TABLE IF EXISTS `poll`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `poll` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` json DEFAULT NULL,
  `description` json DEFAULT NULL,
  `link` json DEFAULT NULL,
  `published_at` date DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `poll`
--

LOCK TABLES `poll` WRITE;
/*!40000 ALTER TABLE `poll` DISABLE KEYS */;
INSERT INTO `poll` VALUES (1,'{\"en\": \"Poll #1\"}','{\"en\": \"<p>xyz</p>\"}','{\"en\": null}',NULL,1,'2022-12-18 07:40:42','2022-12-18 07:49:20');
/*!40000 ALTER TABLE `poll` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
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
INSERT INTO `role_has_permissions` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(38,1),(39,1),(40,1),(41,1),(42,1),(43,1),(44,1),(45,1),(46,1),(47,1),(48,1),(49,1),(50,1),(51,1),(52,1),(53,1),(54,1),(55,1),(56,1),(57,1),(58,1),(59,1),(60,1),(61,1),(62,1),(63,1),(64,1),(65,1),(66,1);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Administrator','admin','2022-12-12 08:29:46','2022-12-12 08:29:46');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solve`
--

DROP TABLE IF EXISTS `solve`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `solve` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` json DEFAULT NULL,
  `link` json DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solve`
--

LOCK TABLES `solve` WRITE;
/*!40000 ALTER TABLE `solve` DISABLE KEYS */;
INSERT INTO `solve` VALUES (1,'{\"en\": \"Help Desk\", \"tr\": \"Destek Merkezi\"}','{\"en\": \"http://helpdesk.agu.edu.tr\", \"tr\": \"http://helpdesk.agu.edu.tr\"}',1),(2,'{\"en\": \"Student Affairs\", \"tr\": \"Öğrenci İşleri\"}','{\"en\": \"https://oidb-en.agu.edu.tr\", \"tr\": \"https://oidb-tr.agu.edu.tr\"}',1),(3,'{\"en\": \"Health\", \"tr\": \"Sağlık\"}','{\"tr\": null}',1),(4,'{\"en\": \"Report\", \"tr\": \"Rapor\"}','{\"tr\": null}',1),(5,'{\"en\": \"Feedback\", \"tr\": \"Öneri İstek Şikayet\"}','{\"en\": \"https://feedback.agu.edu.tr\", \"tr\": \"https://feedback.agu.edu.tr\"}',1);
/*!40000 ALTER TABLE `solve` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `translations`
--

DROP TABLE IF EXISTS `translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `translations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `namespace` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '*',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` json NOT NULL,
  `metadata` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `translations_namespace_index` (`namespace`),
  KEY `translations_group_index` (`group`)
) ENGINE=InnoDB AUTO_INCREMENT=220 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `translations`
--

LOCK TABLES `translations` WRITE;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
INSERT INTO `translations` VALUES (1,'brackets/admin-ui','admin','operation.succeeded','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(2,'brackets/admin-ui','admin','operation.failed','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(3,'brackets/admin-ui','admin','operation.not_allowed','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(4,'*','admin','admin-user.columns.first_name','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(5,'*','admin','admin-user.columns.last_name','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(6,'*','admin','admin-user.columns.email','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(7,'*','admin','admin-user.columns.password','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(8,'*','admin','admin-user.columns.password_repeat','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(9,'*','admin','admin-user.columns.activated','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(10,'*','admin','admin-user.columns.forbidden','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(11,'*','admin','admin-user.columns.language','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(12,'brackets/admin-ui','admin','forms.select_an_option','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(13,'*','admin','admin-user.columns.roles','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(14,'brackets/admin-ui','admin','forms.select_options','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(15,'*','admin','admin-user.actions.create','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(16,'brackets/admin-ui','admin','btn.save','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(17,'*','admin','admin-user.actions.edit','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(18,'*','admin','admin-user.actions.index','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(19,'brackets/admin-ui','admin','placeholder.search','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(20,'brackets/admin-ui','admin','btn.search','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(21,'*','admin','admin-user.columns.id','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(22,'*','admin','admin-user.columns.last_login_at','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(23,'brackets/admin-ui','admin','btn.edit','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(24,'brackets/admin-ui','admin','btn.delete','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(25,'brackets/admin-ui','admin','pagination.overview','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(26,'brackets/admin-ui','admin','index.no_items','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(27,'brackets/admin-ui','admin','index.try_changing_items','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(28,'brackets/admin-ui','admin','btn.new','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(29,'brackets/admin-ui','admin','profile_dropdown.account','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(30,'brackets/admin-auth','admin','profile_dropdown.profile','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(31,'brackets/admin-auth','admin','profile_dropdown.password','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(32,'brackets/admin-auth','admin','profile_dropdown.logout','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(33,'brackets/admin-ui','admin','sidebar.content','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(34,'brackets/admin-ui','admin','sidebar.settings','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(35,'*','admin','admin-user.actions.edit_password','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(36,'*','admin','admin-user.actions.edit_profile','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(37,'brackets/admin-auth','admin','activation_form.title','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(38,'brackets/admin-auth','admin','activation_form.note','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(39,'brackets/admin-auth','admin','auth_global.email','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(40,'brackets/admin-auth','admin','activation_form.button','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(41,'brackets/admin-auth','admin','login.title','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(42,'brackets/admin-auth','admin','login.sign_in_text','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(43,'brackets/admin-auth','admin','auth_global.password','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(44,'brackets/admin-auth','admin','login.button','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(45,'brackets/admin-auth','admin','login.forgot_password','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(46,'brackets/admin-auth','admin','forgot_password.title','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(47,'brackets/admin-auth','admin','forgot_password.note','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(48,'brackets/admin-auth','admin','forgot_password.button','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(49,'brackets/admin-auth','admin','password_reset.title','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(50,'brackets/admin-auth','admin','password_reset.note','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(51,'brackets/admin-auth','admin','auth_global.password_confirm','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(52,'brackets/admin-auth','admin','password_reset.button','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(53,'brackets/admin-auth','activations','email.line','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(54,'brackets/admin-auth','activations','email.action','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(55,'brackets/admin-auth','activations','email.notRequested','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(56,'brackets/admin-auth','admin','activations.activated','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(57,'brackets/admin-auth','admin','activations.invalid_request','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(58,'brackets/admin-auth','admin','activations.disabled','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(59,'brackets/admin-auth','admin','activations.sent','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(60,'brackets/admin-auth','admin','passwords.sent','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(61,'brackets/admin-auth','admin','passwords.reset','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(62,'brackets/admin-auth','admin','passwords.invalid_token','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(63,'brackets/admin-auth','admin','passwords.invalid_user','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(64,'brackets/admin-auth','admin','passwords.invalid_password','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(65,'brackets/admin-auth','resets','email.line','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(66,'brackets/admin-auth','resets','email.action','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(67,'brackets/admin-auth','resets','email.notRequested','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(68,'*','auth','failed','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(69,'*','auth','throttle','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(70,'*','*','Manage access','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(71,'*','*','Translations','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(72,'*','*','Configuration','[]',NULL,'2022-12-12 08:30:05','2022-12-19 07:46:27',NULL),(73,'brackets/admin-ui','admin','forms.currently_editing_translation','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(74,'brackets/admin-ui','admin','forms.more_can_be_managed','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(75,'brackets/admin-ui','admin','forms.manage_translations','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(76,'brackets/admin-ui','admin','forms.choose_translation_to_edit','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(77,'brackets/admin-ui','admin','forms.hide','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(78,'*','admin','academics-administration.columns.title','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(79,'*','admin','academics-administration.columns.link','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(80,'*','admin','academics-administration.columns.enabled','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(81,'*','admin','academics-administration.actions.create','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(82,'*','admin','academics-administration.actions.edit','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(83,'*','admin','academics-administration.actions.index','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(84,'*','admin','academics-administration.columns.id','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(85,'brackets/admin-ui','admin','listing.selected_items','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(86,'brackets/admin-ui','admin','listing.check_all_items','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(87,'brackets/admin-ui','admin','listing.uncheck_all_items','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(88,'brackets/admin-ui','admin','forms.publish','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(89,'*','admin','announcement.columns.published_at','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(90,'*','admin','announcement.columns.title','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(91,'*','admin','announcement.columns.description','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(92,'*','admin','announcement.columns.link','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(93,'*','admin','announcement.columns.enabled','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(94,'*','admin','announcement.actions.create','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(95,'brackets/admin-ui','admin','btn.saved','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(96,'*','admin','announcement.actions.edit','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(97,'*','admin','announcement.actions.index','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(98,'*','admin','announcement.columns.id','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(99,'*','admin','announcement.actions.will_be_published','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(100,'brackets/admin-ui','admin','operation.publish_later','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(101,'brackets/admin-ui','admin','operation.publish_now','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(102,'brackets/admin-ui','admin','operation.unpublish_now','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(103,'*','admin','cafeteria-menu.columns.published_at','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(104,'*','admin','cafeteria-menu.columns.title','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(105,'*','admin','cafeteria-menu.columns.enabled','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(106,'*','admin','cafeteria-menu.actions.create','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(107,'*','admin','cafeteria-menu.actions.edit','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(108,'*','admin','cafeteria-menu.actions.index','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(109,'*','admin','cafeteria-menu.columns.id','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(110,'*','admin','cafeteria-menu.actions.will_be_published','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(111,'*','admin','calendar.columns.published_at','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(112,'*','admin','calendar.columns.title','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(113,'*','admin','calendar.columns.description','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(114,'*','admin','calendar.columns.event_location','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(115,'*','admin','calendar.columns.link','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(116,'*','admin','calendar.columns.event_time','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(117,'brackets/admin-ui','admin','forms.select_date_and_time','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(118,'*','admin','calendar.columns.enabled','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(119,'*','admin','calendar.actions.create','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(120,'*','admin','calendar.actions.edit','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(121,'*','admin','calendar.actions.index','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(122,'*','admin','calendar.columns.id','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(123,'*','admin','calendar.actions.will_be_published','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(124,'*','admin','communicate.columns.title','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(125,'*','admin','communicate.columns.link','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(126,'*','admin','communicate.columns.enabled','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(127,'*','admin','communicate.actions.create','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(128,'*','admin','communicate.actions.edit','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(129,'*','admin','communicate.actions.index','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(130,'*','admin','communicate.columns.id','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(131,'*','admin','announcement.title','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(132,'*','admin','calendar.title','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(133,'*','admin','poll.title','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(134,'*','admin','communicate.title','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(135,'*','admin','manage-course.title','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(136,'*','admin','solve.title','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(137,'*','admin','academics-administration.title','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(138,'*','admin','cafeteria-menu.title','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(139,'*','admin','manage-course.columns.title','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(140,'*','admin','manage-course.columns.link','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(141,'*','admin','manage-course.columns.enabled','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(142,'*','admin','manage-course.actions.create','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(143,'*','admin','manage-course.actions.edit','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(144,'*','admin','manage-course.actions.index','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(145,'*','admin','manage-course.columns.id','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(146,'*','admin','poll.columns.published_at','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(147,'*','admin','poll.columns.title','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(148,'*','admin','poll.columns.description','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(149,'*','admin','poll.columns.link','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(150,'*','admin','poll.columns.enabled','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(151,'*','admin','poll.actions.create','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(152,'*','admin','poll.actions.edit','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(153,'*','admin','poll.actions.index','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(154,'*','admin','poll.columns.id','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(155,'*','admin','poll.actions.will_be_published','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(156,'*','admin','solve.columns.title','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(157,'*','admin','solve.columns.link','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(158,'*','admin','solve.columns.enabled','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(159,'*','admin','solve.actions.create','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(160,'*','admin','solve.actions.edit','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(161,'*','admin','solve.actions.index','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(162,'*','admin','solve.columns.id','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(163,'*','public','home.announcements','{\"en\": \"Announcements\", \"tr\": \"Duyurular\"}',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:39',NULL),(164,'*','public','home.poll','{\"en\": \"Poll\", \"tr\": \"Anket\"}',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:57',NULL),(165,'*','public','home.CafeteriaMenu','{\"en\": \"Cafeteria Menu\", \"tr\": \"Kafeterya Menüsü\"}',NULL,'2022-12-19 07:46:27','2022-12-19 07:47:20',NULL),(166,'*','public','home.calendar','{\"en\": \"Calendar\", \"tr\": \"Takvim\"}',NULL,'2022-12-19 07:46:27','2022-12-19 07:47:28',NULL),(167,'*','public','home.communicate','{\"en\": \"Communicate\", \"tr\": \"İletişim\"}',NULL,'2022-12-19 07:46:27','2022-12-19 07:47:49',NULL),(168,'*','public','home.ManageCourses','{\"en\": \"Manage Courses\", \"tr\": \"Ders Yönetimi\"}',NULL,'2022-12-19 07:46:27','2022-12-19 07:49:57',NULL),(169,'*','public','home.solve','{\"en\": \"Solve\", \"tr\": \"Çözüm\"}',NULL,'2022-12-19 07:46:27','2022-12-19 07:50:04',NULL),(170,'*','public','home.AcademicsAdministration','{\"en\": \"Academics & Administration\", \"tr\": \"Akademik & İdari\"}',NULL,'2022-12-19 07:46:27','2022-12-19 07:50:41',NULL),(171,'*','public','home.close','{\"en\": \"Close\", \"tr\": \"Kapat\"}',NULL,'2022-12-19 07:46:27','2022-12-19 07:50:49',NULL),(172,'*','public','home.abdullahguluniversitesi','{\"en\": \"Abdullah Gul University\", \"tr\": \"Abdullah Gül Üniversitesi\"}',NULL,'2022-12-19 07:46:27','2022-12-19 07:51:43',NULL),(173,'*','public','home.sumerkampusu','{\"en\": \"Sumer Campus, Kayseri Turkey\", \"tr\": \"Sümer Kampüsü, Kayseri TÜRKİYE\"}',NULL,'2022-12-19 07:46:27','2022-12-19 07:53:34',NULL),(174,'*','public','home.santral','{\"en\": \"Central\", \"tr\": \"Santral\"}',NULL,'2022-12-19 07:46:27','2022-12-19 07:52:18',NULL),(175,'*','public','home.faks','{\"en\": \"Fax\", \"tr\": \"Faks\"}',NULL,'2022-12-19 07:46:27','2022-12-19 07:52:26',NULL),(176,'*','public','home.aloagu','{\"en\": \"Alo AGU\", \"tr\": \"Alo AGÜ\"}',NULL,'2022-12-19 07:46:27','2022-12-19 07:52:54',NULL),(177,'*','public','home.epostagirin','{\"en\": \"Enter your e-mail address to follow our university closely.\", \"tr\": \"Üniversitemizi yakından takip etmek için e-posta adresinizi girin.\"}',NULL,'2022-12-19 07:46:27','2022-12-19 07:54:03',NULL),(178,'*','public','home.kayitol','{\"en\": \"Register\", \"tr\": \"Kayıt Ol\"}',NULL,'2022-12-19 07:46:27','2022-12-19 07:54:22',NULL),(179,'*','public','home.bilgiedinmekanunu','{\"en\": \"Freedom of Information Law\", \"tr\": \"Bilgi Edinme Kanunu\"}',NULL,'2022-12-19 07:46:27','2022-12-19 07:54:51',NULL),(180,'*','public','home.menu','{\"en\": \"MENU\", \"tr\": \"MENÜ\"}',NULL,'2022-12-19 07:46:27','2022-12-19 07:54:59',NULL),(181,'*','public','home.myagu','{\"en\": \"MY AGU\", \"tr\": \"MY AGÜ\"}',NULL,'2022-12-19 07:46:27','2022-12-19 07:55:09',NULL),(182,'brackets/admin-translations','admin','title','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(183,'brackets/admin-translations','admin','index.all_groups','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(184,'brackets/admin-translations','admin','index.edit','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(185,'brackets/admin-translations','admin','index.default_text','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(186,'brackets/admin-translations','admin','index.translation','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(187,'brackets/admin-translations','admin','index.translation_for_language','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(188,'brackets/admin-translations','admin','import.title','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(189,'brackets/admin-translations','admin','import.notice','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(190,'brackets/admin-translations','admin','import.upload_file','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(191,'brackets/admin-translations','admin','import.choose_file','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(192,'brackets/admin-translations','admin','import.language_to_import','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(193,'brackets/admin-translations','admin','fields.select_language','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(194,'brackets/admin-translations','admin','import.do_not_override','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(195,'brackets/admin-translations','admin','import.conflict_notice_we_have_found','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(196,'brackets/admin-translations','admin','import.conflict_notice_translations_to_be_imported','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(197,'brackets/admin-translations','admin','import.conflict_notice_differ','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(198,'brackets/admin-translations','admin','fields.group','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(199,'brackets/admin-translations','admin','fields.default','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(200,'brackets/admin-translations','admin','fields.current_value','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(201,'brackets/admin-translations','admin','fields.imported_value','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(202,'brackets/admin-translations','admin','import.sucesfully_notice','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(203,'brackets/admin-translations','admin','import.sucesfully_notice_update','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(204,'brackets/admin-translations','admin','index.export','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(205,'brackets/admin-translations','admin','export.notice','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(206,'brackets/admin-translations','admin','export.language_to_export','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(207,'brackets/admin-translations','admin','btn.export','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(208,'brackets/admin-translations','admin','index.title','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(209,'brackets/admin-translations','admin','btn.import','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(210,'brackets/admin-translations','admin','btn.re_scan','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(211,'brackets/admin-translations','admin','fields.created_at','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(212,'brackets/admin-translations','admin','index.no_items','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(213,'brackets/admin-translations','admin','index.try_changing_items','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(214,'brackets/admin-ui','admin','media_uploader.max_number_of_files','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(215,'brackets/admin-ui','admin','media_uploader.max_size_pre_file','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(216,'brackets/admin-ui','admin','media_uploader.private_title','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(217,'brackets/admin-ui','admin','page_title_suffix','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(218,'brackets/admin-ui','admin','footer.powered_by','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL),(219,'*','*','Close','[]',NULL,'2022-12-19 07:46:27','2022-12-19 07:46:27',NULL);
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;
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

--
-- Table structure for table `wysiwyg_media`
--

DROP TABLE IF EXISTS `wysiwyg_media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wysiwyg_media` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wysiwygable_id` int unsigned DEFAULT NULL,
  `wysiwygable_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wysiwyg_media_wysiwygable_id_index` (`wysiwygable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wysiwyg_media`
--

LOCK TABLES `wysiwyg_media` WRITE;
/*!40000 ALTER TABLE `wysiwyg_media` DISABLE KEYS */;
/*!40000 ALTER TABLE `wysiwyg_media` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-19 17:34:26
