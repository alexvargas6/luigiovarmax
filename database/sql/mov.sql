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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movies`
--

LOCK TABLES `movies` WRITE;
/*!40000 ALTER TABLE `movies` DISABLE KEYS */;
INSERT INTO `movies` VALUES (1,'Scream','https://www3.cuevana.pro/storage/14798/conversions/Vx9LRNBvDQHgerKcxXmkRyvpB5r4DEp39K4PhSJW-thumb.jpg','1:54','Una nueva entrega de la saga de terror \'Scream\' que seguirá a una mujer que regresa a su ciudad natal para intentar descubrir quién ha estado cometiendo una serie de crímenes atroces.','https://uqload.org/embed-zr2wh6er47gz.html','EUA','https://youtu.be/LtrbgB9lhzo','0','','',1,'2022-03-09 11:32:28','2022-03-09 11:32:28'),(2,'Matrix Resurrections','https://www3.cuevana.pro/storage/13163/conversions/l9ehHva9JH1K9ZQ1PSBX8ECjRt32iClQQpQHq5fX-thumb.jpg','2:27:54','Cuarta entrega de la franquicia \"Matrix\", que estará dirigida en solitario por Lana Wachowski. La producción del film arrancará en 2020, con Keanu Reeves y Carrie-Anne Moss interpretando de nuevo a sus personajes Neo y Trinity','https://uqload.com/embed-qlybw8fyyu74.html','EUA','https://www.youtube.com/embed/qjnvX44LoQw','0','','',1,'2022-03-10 08:01:44','2022-03-10 08:01:44'),(4,'Fresh','https://www3.cuevana.pro/storage/15159/conversions/DbUF8Q6KJZuT4LavNckt4nrvwbvV5CugJnb0jMkd-thumb.jpg','1:54','Thriller sobre los horrores de las citas modernas vistos a través de la desafiante batalla de una joven para sobrevivir a los inusuales apetitos de su nuevo novio.','https://uqload.org/embed-oo4rl1xza8ad.html','EUA','https://www.youtube.com/embed/wKk5VAK1GZQ','0','','',1,'2022-03-10 09:12:52','2022-03-10 09:12:52'),(5,'Hacksaw','https://www3.cuevana.pro/storage/15145/conversions/3QdW38r86YVyWPIzB79AihovcovZHQfZry9GQrwh-thumb.jpg','01:08','Una joven pareja en un viaje por carretera toma un desvío hacia el lugar donde un conocido asesino, Ed \"Hacksaw\" Crowe, se convirtió en una leyenda urbana el día en que fue asesinado muchos años antes, pero rápidamente descubren','https://uqload.org/embed-4pt74vey63bm.html','EUA','https://www.youtube.com/embed/s2-1hz1juBI','0','','',1,'2022-03-10 09:16:35','2022-03-10 09:16:35'),(6,'Black Box','https://www3.cuevana.pro/storage/15205/conversions/wEi2SMzq07hK13E1cTjjPsPtl3imUmXUKzpxooFE-thumb.jpg','02:09','Sinopsis\r\nMatthieu es un joven y talentoso analista de caja negra con la misión de resolver el motivo del accidente mortal de un avión nuevo. Sin embargo, cuando las autoridades cierran el caso, Matthieu no puede evitar sentir que algo anda...','https://uqload.org/embed-9igpjz0se095.html','FRANCIA','https://www.youtube.com/embed/Rv3RqTE5X-0','0','','',1,'2022-03-10 09:20:21','2022-03-10 09:20:21'),(7,'Hotel Transilvania: Transformanía','https://www3.cuevana.pro/storage/13753/conversions/PUoGitTnT0RA8jPLkjWl6DErLdVUBSrXHPuHlpAP-thumb.jpg','01:27','Drac y la pandilla vuelven, como nunca los habías visto antes en Hotel Transilvania: Transformanía. Volveremos a encontrarnos con nuestros monstruos favoritos en una aventura completamente nueva en la que Drac se enfrentará a una...','https://uqload.org/embed-sm5k8f3vp2fg.html','EUA','https://www.youtube.com/embed/xS-4wF89eT4','0','','',1,'2022-03-10 09:22:09','2022-03-10 09:22:09'),(8,'Detective Conan 23 : El puño de Zafiro Azul','https://www3.cuevana.pro/storage/13602/conversions/zC9iCcaSCLhLu0oFRHiTe5HqJuaYX2kU57MIixhw-thumb.jpg','01:49','Conan viaja a Singapur, concretamente a la famosa Marina Bay Sands, escenario en el que se ha producido un cruento asesinato. La investigación parece girar en torno a una gema legendaria conocida como \'Zafiro Azul\', que lleva sume...','https://uqload.org/embed-ptthbpfo7nt7.html','JAPÓN','https://www.youtube.com/embed/JdoU-4Z_yGU','0','','',1,'2022-03-10 09:24:23','2022-03-10 09:24:23'),(9,'Road Head','https://www3.cuevana.pro/storage/15190/conversions/vrJWc5tvYVyeWXeFYtxakibxJ4QjVARxYi7q1qlR-thumb.jpg','01:23','Tres amigos hacen un viaje por carretera al desierto de Mojave, donde sus complicadas relaciones llegan a un punto de ruptura cuando el grupo se encuentra con un culto solitario y asesino.','https://uqload.org/embed-ign13dsecap6.html','EUA','https://www.youtube.com/embed/mGMd9a9jbQo','0','','',1,'2022-03-10 09:26:45','2022-03-10 09:26:45');
/*!40000 ALTER TABLE `movies` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-09 21:27:47
