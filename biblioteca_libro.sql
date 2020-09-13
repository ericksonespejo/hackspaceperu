-- MySQL dump 10.17  Distrib 10.3.22-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: biblioteca
-- ------------------------------------------------------
-- Server version	10.3.22-MariaDB-1ubuntu1

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
-- Table structure for table `libro`
--

DROP TABLE IF EXISTS `libro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `libro` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `autor` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `anio` smallint(6) NOT NULL,
  `editorial` varchar(255) NOT NULL,
  `resumen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `libro`
--

LOCK TABLES `libro` WRITE;
/*!40000 ALTER TABLE `libro` DISABLE KEYS */;
INSERT INTO `libro` VALUES (1,'Abad, Samuel; Soria, Daniel','Amnistia vs. Derechos Humanos. Buscando justicia',2001,'Defensoría del Pueblo','El presente informeDefensorial presenta los antecedes y el contexto político, institucional yjurídico'),(2,'Abdala Tolay, Gandhira','La problemática de los desplazos internos por vialencia',2003,'Universidad nacional mayor de san marcos','Con la finalidad que el tema del desplazamiento interno sea fácil de comprender'),(3,'Acevedo, Jorge','Prensa y violencia política (1980-1995)',2002,'Lima. Asociación de Comunicadores Sociales Calandria, 2002, 145 pp','El presente trabajoofrece una aproximación a los cambios experimentados en una parte significativade las visiones sobre la violencia'),(4,'Agüero, José Carlos','Los rendidos. Sobre el don de perdonar',2015,'Instituto de Estudios Peruanos (IEP)','La naturalezade este documento es algo indefinida. Por su forma agrupa relatos cortos, amedia carrera entre reflexiones y apuntes'),(5,'Aguirre Abarca, Silvia Elena','Victimología de los andes peruanos a partir del fenómeno de violencia política',2013,'Universidad Nacional Mayor de San Marcos. Programa Cybertesis','El ámbito de estudioelegido para el desarrollo de la presente tesis doctoral es la victimología, nocomo rama de la criminología'),(6,'Aliaga Iparraguirre, Aníbal','Revolución, terrorismo y pena de muerte.\n',1984,'Lima. Siglo XXI, 1984','“Revolución,terrorismo y pena de muerte”, ha sido escrito por Aníbal Aliaga Iparraguirre\"'),(7,'Aliaga, Jesús','Mártires de la pacificación. Violencia política, verdad y reconciliación en el Perú, 1980-2000',2005,'Lima. Ed. Taurus, 182 pp','l autor ha realizado un trabajo deinvestigación y recopilación de información sobre aquellos ciudadanos queperdieron la vida por el delito de ser apristas'),(8,'Álvarez Torres, Augusto Manuel Egberto','Sendero Luminoso en el Perú. Su alianza con el narcotráfico y las repercusiones en el hemisferio',2011,'Centro de Estudios en Seguridad, Defensa y Asuntos Internacionales (CESDAI)','Esta publicación pretendedemostrar la alianza de la organización terrorista Sendero Luminoso con el narcotráfico'),(9,'EricksoEspejo','Como no hacer un crud en php',2020,'mi casa','aun no he hecho el libro');
/*!40000 ALTER TABLE `libro` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-09-13  4:53:37
