CREATE DATABASE  IF NOT EXISTS `bd_comercios` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `bd_comercios`;
-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: bd_comercios
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

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

--
-- Table structure for table `imagenes_negocios`
--

DROP TABLE IF EXISTS `imagenes_negocios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagenes_negocios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ubicacion` varchar(45) NOT NULL,
  `negocios_id` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_imagenes_negocios_negocios1_idx` (`negocios_id`),
  CONSTRAINT `fk_imagenes_negocios_negocios1` FOREIGN KEY (`negocios_id`) REFERENCES `negocios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagenes_negocios`
--

LOCK TABLES `imagenes_negocios` WRITE;
/*!40000 ALTER TABLE `imagenes_negocios` DISABLE KEYS */;
INSERT INTO `imagenes_negocios` VALUES (11,'perfil',1,'12441.jpeg');
/*!40000 ALTER TABLE `imagenes_negocios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagenes_productos`
--

DROP TABLE IF EXISTS `imagenes_productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagenes_productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) DEFAULT NULL,
  `numero` int(11) NOT NULL,
  `productos_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_imagenes_publicaciones_publicaciones1_idx` (`productos_id`),
  CONSTRAINT `fk_imagenes_publicaciones_publicaciones1` FOREIGN KEY (`productos_id`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagenes_productos`
--

LOCK TABLES `imagenes_productos` WRITE;
/*!40000 ALTER TABLE `imagenes_productos` DISABLE KEYS */;
INSERT INTO `imagenes_productos` VALUES (6,'e63f1366c5fffeb3c23a94100a642720.jpeg',0,12),(7,'7e5379cd3794836008b0937281586b77.jpg',0,13),(8,'1918ec2803f44c38766bb1e917031f95.jpg',1,13),(9,'1e4a8e438834ec44b21ce7d01af1655c.jpg',0,14),(10,'6d401e7d0669a32341b3e58333c84188.jpg',1,14),(11,'cc6ec4f7e6cc3446aaa1b62e84a3557d.jpg',2,14);
/*!40000 ALTER TABLE `imagenes_productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lugares`
--

DROP TABLE IF EXISTS `lugares`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lugares` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lugares`
--

LOCK TABLES `lugares` WRITE;
/*!40000 ALTER TABLE `lugares` DISABLE KEYS */;
INSERT INTO `lugares` VALUES (1,'Guamini');
/*!40000 ALTER TABLE `lugares` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `negocios`
--

DROP TABLE IF EXISTS `negocios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `negocios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `lugares_id` int(11) NOT NULL,
  `perfilfb` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_negocios_lugares_idx` (`lugares_id`),
  CONSTRAINT `fk_negocios_lugares` FOREIGN KEY (`lugares_id`) REFERENCES `lugares` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `negocios`
--

LOCK TABLES `negocios` WRITE;
/*!40000 ALTER TABLE `negocios` DISABLE KEYS */;
INSERT INTO `negocios` VALUES (1,'asdfqwe','2314546598','Al lado de lo de la sonia','descripcion de local generica',1,NULL,'asdf@gmail.com');
/*!40000 ALTER TABLE `negocios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `negocios_tags`
--

DROP TABLE IF EXISTS `negocios_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `negocios_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `negocios_id` int(11) NOT NULL,
  `tags_negocios_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_negocios_tags_negocios1_idx` (`negocios_id`),
  KEY `fk_negocios_tags_tags_negocios1_idx` (`tags_negocios_id`),
  CONSTRAINT `fk_negocios_tags_negocios1` FOREIGN KEY (`negocios_id`) REFERENCES `negocios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_negocios_tags_tags_negocios1` FOREIGN KEY (`tags_negocios_id`) REFERENCES `tags_negocios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `negocios_tags`
--

LOCK TABLES `negocios_tags` WRITE;
/*!40000 ALTER TABLE `negocios_tags` DISABLE KEYS */;
INSERT INTO `negocios_tags` VALUES (1,1,1),(2,1,2),(3,1,3);
/*!40000 ALTER TABLE `negocios_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) NOT NULL,
  `cuerpo` varchar(500) NOT NULL,
  `fecha` datetime NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `negocios_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_publicaciones_negocios1_idx` (`negocios_id`),
  CONSTRAINT `fk_publicaciones_negocios1` FOREIGN KEY (`negocios_id`) REFERENCES `negocios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (12,'Camperaa','Esta es una campera','2017-06-04 18:42:12',1200.00,1),(13,'Papa al horno','Esto no es una papa al horno','2017-06-04 18:44:46',12.00,1),(14,'producto con 3 fotos','Tiene 3 fotos, sisi','2017-06-04 18:46:31',300.00,1);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos_tags`
--

DROP TABLE IF EXISTS `productos_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productos_id` int(11) NOT NULL,
  `tags_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_publicaciones_tags_publicaciones1_idx` (`productos_id`),
  KEY `fk_publicaciones_tags_tags1_idx` (`tags_id`),
  CONSTRAINT `fk_publicaciones_tags_publicaciones1` FOREIGN KEY (`productos_id`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_publicaciones_tags_tags1` FOREIGN KEY (`tags_id`) REFERENCES `tags` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos_tags`
--

LOCK TABLES `productos_tags` WRITE;
/*!40000 ALTER TABLE `productos_tags` DISABLE KEYS */;
INSERT INTO `productos_tags` VALUES (1,12,2),(2,13,3),(3,14,1);
/*!40000 ALTER TABLE `productos_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reseñas`
--

DROP TABLE IF EXISTS `reseñas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reseñas` (
  `id` int(11) NOT NULL,
  `cuerpo` varchar(300) DEFAULT NULL,
  `negocios_id` int(11) NOT NULL,
  `publicaciones_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_reseñas_negocios1_idx` (`negocios_id`),
  KEY `fk_reseñas_publicaciones1_idx` (`publicaciones_id`),
  CONSTRAINT `fk_reseñas_negocios1` FOREIGN KEY (`negocios_id`) REFERENCES `negocios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_reseñas_publicaciones1` FOREIGN KEY (`publicaciones_id`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reseñas`
--

LOCK TABLES `reseñas` WRITE;
/*!40000 ALTER TABLE `reseñas` DISABLE KEYS */;
/*!40000 ALTER TABLE `reseñas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'Prueba'),(2,'Campera'),(3,'Remera');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags_negocios`
--

DROP TABLE IF EXISTS `tags_negocios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags_negocios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags_negocios`
--

LOCK TABLES `tags_negocios` WRITE;
/*!40000 ALTER TABLE `tags_negocios` DISABLE KEYS */;
INSERT INTO `tags_negocios` VALUES (1,'Regaleria'),(2,'Ropa'),(3,'Calzado');
/*!40000 ALTER TABLE `tags_negocios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ubicaciones_negocios`
--

DROP TABLE IF EXISTS `ubicaciones_negocios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ubicaciones_negocios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `X` longtext NOT NULL,
  `Y` longtext NOT NULL,
  `negocios_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ubicaciones_negocios_negocios1_idx` (`negocios_id`),
  CONSTRAINT `fk_ubicaciones_negocios_negocios1` FOREIGN KEY (`negocios_id`) REFERENCES `negocios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ubicaciones_negocios`
--

LOCK TABLES `ubicaciones_negocios` WRITE;
/*!40000 ALTER TABLE `ubicaciones_negocios` DISABLE KEYS */;
/*!40000 ALTER TABLE `ubicaciones_negocios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `creado` datetime NOT NULL,
  `ultima_conexion` datetime DEFAULT NULL,
  `rol` varchar(45) NOT NULL,
  `negocios_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `fk_users_negocios1_idx` (`negocios_id`),
  CONSTRAINT `fk_users_negocios1` FOREIGN KEY (`negocios_id`) REFERENCES `negocios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (7,'bourgeoistomas@gmail.com','$2y$10$Oi9qCWQJsl6Hpv0BaCEQ0OQO9nmUEoxuI5TQntfQowFMfD3CMOe7K','2017-03-14 13:32:00',NULL,'admin',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'bd_comercios'
--

--
-- Dumping routines for database 'bd_comercios'
--
/*!50003 DROP PROCEDURE IF EXISTS `renombrarfoto` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,STRICT_ALL_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ALLOW_INVALID_DATES,ERROR_FOR_DIVISION_BY_ZERO,TRADITIONAL,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `renombrarfoto`(
in nombrefoto varchar(255)
)
BEGIN
set @id = (select id from imagenes_negocios where foto = nombrefoto limit 1); 
if isnull(@id) then set @nuevafoto = 'error';
end if;
set @mensaje = concat(@id,nombrefoto);
update imagenes_negocios set foto=@mensaje where id = @id;
select @mensaje;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `renombrarfotoprod` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,STRICT_ALL_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ALLOW_INVALID_DATES,ERROR_FOR_DIVISION_BY_ZERO,TRADITIONAL,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `renombrarfotoprod`(
in nombrefoto varchar(255)
)
BEGIN
set @id = (select id from imagenes_productos where foto = nombrefoto limit 1); 
if isnull(@id) then set @nuevafoto = 'error';
end if;
set @mensaje = concat(@id,nombrefoto);
update imagenes_productos set foto=@mensaje where id = @id;
select @mensaje;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `traertags` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `traertags`(
in idlocal int
)
BEGIN
SELECT tags_negocios.nombre FROM bd_comercios.negocios
 inner join bd_comercios.negocios_tags on (negocios.id = negocios_tags.negocios_id)
 inner join tags_negocios on  (negocios_tags.tags_negocios_id = tags_negocios.id)
 where (negocios.id = idlocal);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-09  9:21:29
