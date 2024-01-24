-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: company_profile
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `company_excellences`
--

DROP TABLE IF EXISTS `company_excellences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `company_excellences` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_excellences`
--

LOCK TABLES `company_excellences` WRITE;
/*!40000 ALTER TABLE `company_excellences` DISABLE KEYS */;
INSERT INTO `company_excellences` VALUES (1,'Kualitas Layanan dan Produk','Menekankan komitmen perusahaan terhadap kualitas terbaik dalam semua layanan konstruksinya, baik dari segi desain, bahan bangunan, maupun pelaksanaan proyek','/storage/images/company_excellences/1702966601.jpg','2023-12-18 23:08:17','2023-12-18 23:16:41'),(2,'Keandalan Waktu dan Penyelesaian Proyek','Menekankan kemampuan perusahaan untuk menyelesaikan proyek tepat waktu sesuai dengan jadwal yang telah ditetapkan','/storage/images/company_excellences/1702966621.jpg','2023-12-18 23:10:26','2023-12-18 23:17:01'),(3,'Komitmen terhadap Keamanan dan Kesehatan','Menyoroti kebijakan dan praktik keamanan yang ketat di lokasi konstruksi, serta komitmen terhadap kesejahteraan dan keselamatan karyawan','/storage/images/company_excellences/1702966634.jpg','2023-12-18 23:10:51','2023-12-18 23:17:14');
/*!40000 ALTER TABLE `company_excellences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_faqs`
--

DROP TABLE IF EXISTS `company_faqs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `company_faqs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_faqs`
--

LOCK TABLES `company_faqs` WRITE;
/*!40000 ALTER TABLE `company_faqs` DISABLE KEYS */;
INSERT INTO `company_faqs` VALUES (1,'Apa saja layanan yang ditawarkan oleh PT Maju Jaya Sentosa ?','PT Maju Jaya Sentosa menyediakan berbagai layanan konstruksi, termasuk pembangunan, renovasi, dan manajemen proyek. Kami memiliki keahlian dalam proyek-proyek industri dan fasilitas, termasuk gudang, pabrik, dan bangunan komersial.','2023-12-20 08:09:58','2023-12-20 08:09:58'),(2,'Berapa lama PT Maju Jaya Sentosa telah beroperasi di industri ini?','PT Maju Jaya Sentosa telah berpengalaman lebih dari lima tahun di industri konstruksi dan telah menyelesaikan berbagai proyek dengan keberhasilan.','2023-12-20 08:10:53','2023-12-20 08:10:53'),(3,'Apakah PT Maju Jaya Sentosa memiliki sertifikasi atau akreditasi tertentu ?','Ya, kami memiliki sertifikasi dan akreditasi sesuai dengan standar industri dan peraturan yang berlaku.','2023-12-20 08:11:13','2023-12-20 08:11:13');
/*!40000 ALTER TABLE `company_faqs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_histories`
--

DROP TABLE IF EXISTS `company_histories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `company_histories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `year` date DEFAULT NULL,
  `title` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_histories`
--

LOCK TABLES `company_histories` WRITE;
/*!40000 ALTER TABLE `company_histories` DISABLE KEYS */;
INSERT INTO `company_histories` VALUES (2,'2018-06-05','Pendirian Perusahaan','Merupakan tahun berdirinya PT. Maju Jaya Sentosa sebagai perusahaan konstruksi di Jawa Timur Perusahaan mendapatkan izin usaha berbasis risiko dari Pemerintah Republik Indonesia dengan Nomor Induk Berusaha: 8120117072726','/storage/images/company_history/1702907634.jpg','2023-12-18 02:26:31','2023-12-18 06:53:54'),(3,'2018-12-20','Perekrutan Tim','PT Maju Jaya Sentosa mulai membangun tim manajemen awal dan merekrut tenaga kerja yang sesuai dengan kebutuhan proyek-proyek awal.','/storage/images/company_history/1702907647.jpg','2023-12-18 02:31:06','2023-12-18 06:54:07'),(4,'2019-02-14','Pengerjaan Proyek','PT. Maju Jaya Sentosa memulain untuk berpartisipasi dalam  proyek kecil dan menengah untuk membangun reputasi awal dan memperoleh pengalaman praktis dalam berbagai aspek konstruksi','/storage/images/company_history/1702907662.jpg','2023-12-18 02:33:36','2023-12-18 06:54:22'),(5,'2020-01-28','Tantangan Perusahaan','Pada saat terjadinya wabah Covid - 19 dilakukanya pembatasan sosial dan lockdown dapat mengakibatkan penurunan aktivitas konstruksi, baik karena proyek-proyek dihentikan sementara atau pelanggan menunda keputusan investasi','/storage/images/company_history/1702909073.jpg','2023-12-18 07:17:53','2023-12-18 07:17:53');
/*!40000 ALTER TABLE `company_histories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_profiles`
--

DROP TABLE IF EXISTS `company_profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `company_profiles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_profiles`
--

LOCK TABLES `company_profiles` WRITE;
/*!40000 ALTER TABLE `company_profiles` DISABLE KEYS */;
INSERT INTO `company_profiles` VALUES (3,'PT.Maju Jaya Sentosa','Kami menggali apa yang Anda impikan','Ds. Temandang Rt.04 Rw.04 Kec. Merakurak Kab. Tuban 62355','081331168840','ptmajujayasentosa@yahoo.com','/storage/images/company_profiles/1702478833.png','2023-12-13 07:47:13','2023-12-13 07:47:13');
/*!40000 ALTER TABLE `company_profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_projects`
--

DROP TABLE IF EXISTS `company_projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `company_projects` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_projects`
--

LOCK TABLES `company_projects` WRITE;
/*!40000 ALTER TABLE `company_projects` DISABLE KEYS */;
INSERT INTO `company_projects` VALUES (1,'PT. Semen Indonesia Tbk Persero SIG','Pembangunan Gudang Persediaan Semen','/storage/images/company_project/1703054723.jpg','Pengerjaan pembangunan gudang persediaan semen di PT Semen Indonesia oleh PT Maju Jaya Sentosa merupakan proyek konstruksi yang komprehensif dan berfokus pada penciptaan fasilitas penyimpanan semen yang modern dan sesuai standar industri. Tahapan proyek dimulai dari konsultasi mendalam dan perencanaan, pengadaan izin hingga persiapan situs, serta konstruksi bangunan gudang dengan penekanan pada keamanan, kekuatan, dan kualitas material. Sistem penyimpanan yang efisien dan manajemen inventaris yang terintegrasi menjadi prioritas, sementara pemasangan sistem keamanan canggih dan pematuhan terhadap regulasi lingkungan menciptakan lingkungan yang aman dan berkelanjutan.','2023-12-19 23:45:23','2023-12-19 23:45:23'),(2,'PT ISS Indonesia','Pembangunan Saluran Air','/storage/images/company_project/1703056073.jpg','Pengerjaan pembangunan saluran air di PT ISS Indonesia oleh PT Maju Jaya Sentosa adalah proyek konstruksi yang melibatkan tahapan komprehensif. Dimulai dari konsultasi, perencanaan, hingga pemilihan lokasi strategis, proyek ini bertujuan menciptakan sistem saluran air efisien. Persiapan situs, konstruksi infrastruktur dasar, dan pemasangan sistem penyimpanan menjadi fokus penting. Selain itu, integrasi teknologi dan inovasi diterapkan untuk meningkatkan efisiensi dan keberlanjutan. Proyek ini mencakup aspek keamanan dengan pemasangan sistem perlindungan, serta pengujian dan pemeliharaan rutin untuk memastikan operasional yang optimal. Dengan demikian, PT ISS Indonesia dapat mengandalkan sistem saluran air yang sesuai standar, efisien, dan berkelanjutan untuk mendukung aktivitas operasionalnya.','2023-12-20 00:07:53','2023-12-20 00:07:53');
/*!40000 ALTER TABLE `company_projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_services`
--

DROP TABLE IF EXISTS `company_services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `company_services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_services`
--

LOCK TABLES `company_services` WRITE;
/*!40000 ALTER TABLE `company_services` DISABLE KEYS */;
INSERT INTO `company_services` VALUES (2,'Konstruksi Bangungan Gudang','menyediakan layanan konstruksi bangunan gudang yang menyeluruh. Dengan fokus pada kualitas dan keamanan, perusahaan menawarkan perencanaan desain yang cermat, pemilihan bahan berkualitas tinggi, dan pelaksanaan konstruksi struktural yang tahan lama','/storage/images/company_services/1703047442.jpg','2023-12-19 21:44:02','2023-12-19 21:44:02'),(3,'Konstruksi Saluran Air','layanan konstruksi saluran air yang profesional dan berkualitas. Dengan fokus pada infrastruktur air, perusahaan ini menyediakan berbagai layanan termasuk perencanaan, desain, dan pelaksanaan konstruksi untuk saluran air','/storage/images/company_services/1703047481.jpg','2023-12-19 21:44:41','2023-12-19 21:44:41'),(4,'Konstruksi Pelabuhan','konstruksi pelabuhan yang komprehensif dan berkualitas tinggi. Dengan fokus pada infrastruktur maritim, perusahaan ini mencakup seluruh tahap proyek, mulai dari perencanaan dan desain hingga konstruksi struktural, pengerukan, instalasi infrastruktur maritim, manajemen lingkungan, keamanan, dan pemeliharaan.','/storage/images/company_services/1703047550.jpg','2023-12-19 21:45:50','2023-12-19 21:45:50');
/*!40000 ALTER TABLE `company_services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_teams`
--

DROP TABLE IF EXISTS `company_teams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `company_teams` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_teams`
--

LOCK TABLES `company_teams` WRITE;
/*!40000 ALTER TABLE `company_teams` DISABLE KEYS */;
INSERT INTO `company_teams` VALUES (1,'Bayu','/storage/images/company_team/1703086128.jpg','2023-12-20 08:28:48','2023-12-20 08:28:48'),(2,'Agung','/storage/images/company_team/1703086136.jpg','2023-12-20 08:28:56','2023-12-20 08:28:56'),(3,'Budi','/storage/images/company_team/1703086145.jpg','2023-12-20 08:29:05','2023-12-20 08:29:05');
/*!40000 ALTER TABLE `company_teams` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2013_10_12_000000_roles',1),(2,'2014_10_12_000000_create_users_table',1),(3,'2014_10_12_100000_create_password_reset_tokens_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2023_09_16_015906_company_excellence',1),(7,'2023_09_16_062045_company_project',1),(8,'2023_09_16_062125_company_history',1),(9,'2023_09_16_062157_company_team',1),(10,'2023_09_16_062221_company_faq',1),(11,'2023_10_16_015028_company_profile_table',1),(12,'2023_12_17_071201_create_question_companies_table',2),(13,'2023_12_20_024935_create_company_services_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
  `expires_at` timestamp NULL DEFAULT NULL,
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
-- Table structure for table `question_companies`
--

DROP TABLE IF EXISTS `question_companies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `question_companies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `question_companies_user_id` (`user_id`),
  CONSTRAINT `question_companies_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question_companies`
--

LOCK TABLES `question_companies` WRITE;
/*!40000 ALTER TABLE `question_companies` DISABLE KEYS */;
INSERT INTO `question_companies` VALUES (11,3,'pertanyaan 1','1234','test@gmail.com',0,'2024-01-01 04:00:24','2024-01-02 13:31:17'),(12,3,'pertanyaan 2','456','Tester@gmail.com',0,'2024-01-01 04:30:00','2024-01-01 04:51:17'),(13,3,'Pertanyaan 3','123','test@gmail.com',0,'2024-01-02 03:45:34','2024-01-02 12:29:37');
/*!40000 ALTER TABLE `question_companies` ENABLE KEYS */;
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'User','2023-12-13 07:30:25','2023-12-13 07:30:25'),(2,'Admin','2023-12-13 07:30:25','2023-12-13 07:30:25');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
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
  `role_id` bigint unsigned NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id` (`role_id`),
  CONSTRAINT `users_role_id` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'Reynaldi Rizky','rey@gmail.com',NULL,'$2y$10$m6F0dWvB6qYmUTOo9dSwZOiXLAP7.KVkqIgHSpRxACjSw4DvVijW2',2,NULL,'2023-12-13 07:34:45','2023-12-13 07:34:45'),(3,'Aliftyan','alif@gmail.com',NULL,'$2y$10$2B8NAsVGqy99SGkv7Ul7s.458I4E0gUh9ywL6PVNpnf36eNits0L.',1,NULL,'2023-12-13 07:51:59','2023-12-13 07:51:59'),(4,'adel','adel@gmail.com',NULL,'$2y$10$bmOv9W72gZBdbtHygyQDJu6bAeCPz5.zog9edfWwOfH64yDIZ2iC2',1,NULL,'2023-12-13 19:59:22','2023-12-13 19:59:22');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'company_profile'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-03 12:50:26
