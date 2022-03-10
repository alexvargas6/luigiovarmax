-- MySQL dump 10.13  Distrib 8.0.25, for Win64 (x86_64)
--
-- Host: localhost    Database: luigiovarmax
-- ------------------------------------------------------
-- Server version	8.0.25

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
-- Table structure for table `actores`
--

DROP TABLE IF EXISTS `actores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `actores` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `nacionalidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actores`
--

LOCK TABLES `actores` WRITE;
/*!40000 ALTER TABLE `actores` DISABLE KEYS */;
INSERT INTO `actores` VALUES (1,'Neve Campbell','1973-09-03','EUA','http://t0.gstatic.com/licensed-image?q=tbn:ANd9GcTzdNngWpyzIQt8_Zn7dalL36jsJzCxGJ4_aRb9LWEu4SC5ZrmLknFZ8BVVNy7n','2022-03-09 11:46:36','2022-03-09 11:46:36');
/*!40000 ALTER TABLE `actores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `actores_movies`
--

DROP TABLE IF EXISTS `actores_movies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `actores_movies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `idmovie` bigint unsigned NOT NULL,
  `idactor` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `actores_movies_idmovie_foreign` (`idmovie`),
  KEY `actores_movies_idactor_foreign` (`idactor`),
  CONSTRAINT `actores_movies_idactor_foreign` FOREIGN KEY (`idactor`) REFERENCES `actores` (`id`),
  CONSTRAINT `actores_movies_idmovie_foreign` FOREIGN KEY (`idmovie`) REFERENCES `movies` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actores_movies`
--

LOCK TABLES `actores_movies` WRITE;
/*!40000 ALTER TABLE `actores_movies` DISABLE KEYS */;
INSERT INTO `actores_movies` VALUES (1,1,1,'2022-03-09 11:46:46','2022-03-09 11:46:46');
/*!40000 ALTER TABLE `actores_movies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `calificacion_movies`
--

DROP TABLE IF EXISTS `calificacion_movies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `calificacion_movies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `usuario` bigint unsigned NOT NULL,
  `movie` bigint unsigned NOT NULL,
  `comentario` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calificacion` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `calificacion_movies_usuario_foreign` (`usuario`),
  KEY `calificacion_movies_movie_foreign` (`movie`),
  CONSTRAINT `calificacion_movies_movie_foreign` FOREIGN KEY (`movie`) REFERENCES `movies` (`id`),
  CONSTRAINT `calificacion_movies_usuario_foreign` FOREIGN KEY (`usuario`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calificacion_movies`
--

LOCK TABLES `calificacion_movies` WRITE;
/*!40000 ALTER TABLE `calificacion_movies` DISABLE KEYS */;
/*!40000 ALTER TABLE `calificacion_movies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comentario_movies`
--

DROP TABLE IF EXISTS `comentario_movies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comentario_movies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `idmovie` bigint unsigned NOT NULL,
  `comentario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idusuario` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comentario_movies_idmovie_foreign` (`idmovie`),
  KEY `comentario_movies_idusuario_foreign` (`idusuario`),
  CONSTRAINT `comentario_movies_idmovie_foreign` FOREIGN KEY (`idmovie`) REFERENCES `movies` (`id`),
  CONSTRAINT `comentario_movies_idusuario_foreign` FOREIGN KEY (`idusuario`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentario_movies`
--

LOCK TABLES `comentario_movies` WRITE;
/*!40000 ALTER TABLE `comentario_movies` DISABLE KEYS */;
/*!40000 ALTER TABLE `comentario_movies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `director_movies`
--

DROP TABLE IF EXISTS `director_movies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `director_movies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `idmovie` bigint unsigned NOT NULL,
  `iddirector` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `director_movies_idmovie_foreign` (`idmovie`),
  KEY `director_movies_iddirector_foreign` (`iddirector`),
  CONSTRAINT `director_movies_iddirector_foreign` FOREIGN KEY (`iddirector`) REFERENCES `directors` (`id`),
  CONSTRAINT `director_movies_idmovie_foreign` FOREIGN KEY (`idmovie`) REFERENCES `movies` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `director_movies`
--

LOCK TABLES `director_movies` WRITE;
/*!40000 ALTER TABLE `director_movies` DISABLE KEYS */;
INSERT INTO `director_movies` VALUES (1,1,1,'2022-03-09 11:45:27','2022-03-09 11:45:27');
/*!40000 ALTER TABLE `director_movies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directors`
--

DROP TABLE IF EXISTS `directors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `directors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `nacionalidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directors`
--

LOCK TABLES `directors` WRITE;
/*!40000 ALTER TABLE `directors` DISABLE KEYS */;
INSERT INTO `directors` VALUES (1,'Wes Craven','1939-04-02','EUA','2022-03-09 11:45:19','2022-03-09 11:45:19');
/*!40000 ALTER TABLE `directors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
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
-- Table structure for table `genero_movies`
--

DROP TABLE IF EXISTS `genero_movies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `genero_movies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `idmovie` bigint unsigned NOT NULL,
  `idgenero` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `genero_movies_idmovie_foreign` (`idmovie`),
  KEY `genero_movies_idgenero_foreign` (`idgenero`),
  CONSTRAINT `genero_movies_idgenero_foreign` FOREIGN KEY (`idgenero`) REFERENCES `generos` (`id`),
  CONSTRAINT `genero_movies_idmovie_foreign` FOREIGN KEY (`idmovie`) REFERENCES `movies` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genero_movies`
--

LOCK TABLES `genero_movies` WRITE;
/*!40000 ALTER TABLE `genero_movies` DISABLE KEYS */;
INSERT INTO `genero_movies` VALUES (1,1,1,'2022-03-09 11:44:32','2022-03-09 11:44:32');
/*!40000 ALTER TABLE `genero_movies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `generos`
--

DROP TABLE IF EXISTS `generos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `generos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `generos`
--

LOCK TABLES `generos` WRITE;
/*!40000 ALTER TABLE `generos` DISABLE KEYS */;
INSERT INTO `generos` VALUES (1,'terror','2022-03-09 11:44:26','2022-03-09 11:44:26');
/*!40000 ALTER TABLE `generos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `idiomas`
--

DROP TABLE IF EXISTS `idiomas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `idiomas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `idioma` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `idiomas`
--

LOCK TABLES `idiomas` WRITE;
/*!40000 ALTER TABLE `idiomas` DISABLE KEYS */;
/*!40000 ALTER TABLE `idiomas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `idiomas_movies`
--

DROP TABLE IF EXISTS `idiomas_movies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `idiomas_movies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `idmovie` bigint unsigned NOT NULL,
  `idioma` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idiomas_movies_idmovie_foreign` (`idmovie`),
  KEY `idiomas_movies_idioma_foreign` (`idioma`),
  CONSTRAINT `idiomas_movies_idioma_foreign` FOREIGN KEY (`idioma`) REFERENCES `idiomas` (`id`),
  CONSTRAINT `idiomas_movies_idmovie_foreign` FOREIGN KEY (`idmovie`) REFERENCES `movies` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `idiomas_movies`
--

LOCK TABLES `idiomas_movies` WRITE;
/*!40000 ALTER TABLE `idiomas_movies` DISABLE KEYS */;
/*!40000 ALTER TABLE `idiomas_movies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `imagenes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idmovie` bigint unsigned NOT NULL,
  `upload` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `imagenes_idmovie_foreign` (`idmovie`),
  KEY `imagenes_upload_foreign` (`upload`),
  CONSTRAINT `imagenes_idmovie_foreign` FOREIGN KEY (`idmovie`) REFERENCES `movies` (`id`),
  CONSTRAINT `imagenes_upload_foreign` FOREIGN KEY (`upload`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagenes`
--

LOCK TABLES `imagenes` WRITE;
/*!40000 ALTER TABLE `imagenes` DISABLE KEYS */;
/*!40000 ALTER TABLE `imagenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `like_movies`
--

DROP TABLE IF EXISTS `like_movies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `like_movies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `idmovie` bigint unsigned NOT NULL,
  `idusuario` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `like_movies_idmovie_foreign` (`idmovie`),
  KEY `like_movies_idusuario_foreign` (`idusuario`),
  CONSTRAINT `like_movies_idmovie_foreign` FOREIGN KEY (`idmovie`) REFERENCES `movies` (`id`),
  CONSTRAINT `like_movies_idusuario_foreign` FOREIGN KEY (`idusuario`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `like_movies`
--

LOCK TABLES `like_movies` WRITE;
/*!40000 ALTER TABLE `like_movies` DISABLE KEYS */;
/*!40000 ALTER TABLE `like_movies` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2013_02_23_210627_create_nivels_table',1),(2,'2014_10_12_000000_create_users_table',1),(3,'2014_10_12_100000_create_password_resets_table',1),(4,'2019_02_21_204228_create_movies_table',1),(5,'2019_08_19_000000_create_failed_jobs_table',1),(6,'2020_02_23_205001_create_actores_table',1),(7,'2020_02_23_205712_create_actores_movies_table',1),(8,'2022_02_23_204821_create_generos_table',1),(9,'2022_02_23_204908_create_idiomas_table',1),(10,'2022_02_23_205127_create_directors_table',1),(11,'2022_02_23_205313_create_genero_movies_table',1),(12,'2022_02_23_205451_create_director_movies_table',1),(13,'2022_02_23_205905_create_idiomas_movies_table',1),(14,'2022_02_23_210125_create_like_movies_table',1),(15,'2022_02_23_210140_create_comentario_movies_table',1),(16,'2022_02_23_210947_create_imagenes_table',1),(17,'2022_02_24_034202_create_news_table',1),(18,'2022_02_24_223954_create_calificacion_movies_table',1),(19,'2022_02_25_164824_create_videos_table',1),(20,'2022_03_03_030721_create_usuariofavoritas_table',1),(21,'2022_03_10_004852_create_posts_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `movies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portada` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duracion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pais` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trailer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_visitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `año` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bloqueo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `movies_upload_foreign` (`upload`),
  CONSTRAINT `movies_upload_foreign` FOREIGN KEY (`upload`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movies`
--

LOCK TABLES `movies` WRITE;
/*!40000 ALTER TABLE `movies` DISABLE KEYS */;
INSERT INTO `movies` VALUES (1,'Scream','https://www3.cuevana.pro/storage/14798/conversions/Vx9LRNBvDQHgerKcxXmkRyvpB5r4DEp39K4PhSJW-thumb.jpg','1:54','Una nueva entrega de la saga de terror \'Scream\' que seguirá a una mujer que regresa a su ciudad natal para intentar descubrir quién ha estado cometiendo una serie de crímenes atroces.','https://uqload.org/embed-zr2wh6er47gz.html','EUA','https://youtu.be/LtrbgB9lhzo','0','','',1,'2022-03-09 11:32:28','2022-03-09 11:32:28');
/*!40000 ALTER TABLE `movies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noticia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `news_author_foreign` (`author`),
  CONSTRAINT `news_author_foreign` FOREIGN KEY (`author`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nivels`
--

DROP TABLE IF EXISTS `nivels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nivels` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nivel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulonivel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nivels`
--

LOCK TABLES `nivels` WRITE;
/*!40000 ALTER TABLE `nivels` DISABLE KEYS */;
INSERT INTO `nivels` VALUES (1,'1','ADMIN','2022-03-09 11:13:10','2022-03-09 11:13:10'),(2,'2','MOD','2022-03-09 11:13:10','2022-03-09 11:13:10'),(3,'3','ESPECTADOR','2022-03-09 11:13:10','2022-03-09 11:13:10');
/*!40000 ALTER TABLE `nivels` ENABLE KEYS */;
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
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `usuario` bigint unsigned NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contenido` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_usuario_foreign` (`usuario`),
  CONSTRAINT `posts_usuario_foreign` FOREIGN KEY (`usuario`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
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
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nivel` bigint unsigned DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `bloqueado` int NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sobremi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_nivel_foreign` (`nivel`),
  CONSTRAINT `users_nivel_foreign` FOREIGN KEY (`nivel`) REFERENCES `nivels` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','https://avatars.githubusercontent.com/u/68472343?v=4','admin@gmail.com',1,NULL,0,'$2y$10$ONMMcJxSERSTbAC3wI9CW.kktGXj65zdTq9ucKa.RHihK5jKA6vOW',NULL,NULL,NULL,NULL,'2022-03-09 11:13:10','2022-03-10 06:43:47'),(6,'joto','','ads@asdsa.com',NULL,NULL,0,'$2y$10$5uR6v1F0x02B1L4zNF.siOFQN7QYW/4KX3ErH4AG.Djkc6h1Y0KAq',NULL,NULL,NULL,NULL,'2022-03-09 11:20:29','2022-03-09 11:20:29'),(7,'lalo','images/perfil.png','lalo@lola.com',3,NULL,0,'$2y$10$.rvLn1cMNmuzVgsOr3wpTOgHHWh.5u8CWkFtlNelzskHqsOEp1Loa',NULL,NULL,NULL,NULL,'2022-03-09 11:25:19','2022-03-09 11:25:19');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuariofavoritas`
--

DROP TABLE IF EXISTS `usuariofavoritas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuariofavoritas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `movie` bigint unsigned NOT NULL,
  `usuario` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `usuariofavoritas_movie_foreign` (`movie`),
  KEY `usuariofavoritas_usuario_foreign` (`usuario`),
  CONSTRAINT `usuariofavoritas_movie_foreign` FOREIGN KEY (`movie`) REFERENCES `movies` (`id`),
  CONSTRAINT `usuariofavoritas_usuario_foreign` FOREIGN KEY (`usuario`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuariofavoritas`
--

LOCK TABLES `usuariofavoritas` WRITE;
/*!40000 ALTER TABLE `usuariofavoritas` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuariofavoritas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `videos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duracion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portada` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `videos_movie_foreign` (`movie`),
  CONSTRAINT `videos_movie_foreign` FOREIGN KEY (`movie`) REFERENCES `movies` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` VALUES (1,'SCREAM | Official Trailer (2022 Movie) | Paramount Pictures Australia','2:14','https://www.youtube.com/embed/LtrbgB9lhzo','https://www.bing.com/th?id=OVP.wzs-mO2Vf98jm9nk_xGvRgEsDh&w=606&h=340&c=7&rs=2&qlt=90&o=6&pid=1.7',1,NULL,NULL);
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-09 18:52:37
