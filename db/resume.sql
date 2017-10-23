CREATE DATABASE  IF NOT EXISTS `resume` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `resume`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: localhost    Database: resume
-- ------------------------------------------------------
-- Server version	5.6.22-log

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
-- Table structure for table `academic_training`
--

DROP TABLE IF EXISTS `academic_training`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `academic_training` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  `mark` float DEFAULT NULL,
  `image` varchar(128) DEFAULT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `updated` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `academic_training`
--

LOCK TABLES `academic_training` WRITE;
/*!40000 ALTER TABLE `academic_training` DISABLE KEYS */;
INSERT INTO `academic_training` VALUES (1,'Técnico Superior en Desarrollo de Aplicaciones Informáticas',8.9,'/academic_training/1.jpg','2005-10-01','2007-07-09','2017-10-10');
/*!40000 ALTER TABLE `academic_training` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `experience`
--

DROP TABLE IF EXISTS `experience`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `experience` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(128) DEFAULT NULL,
  `image` varchar(128) DEFAULT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `updated` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `experience`
--

LOCK TABLES `experience` WRITE;
/*!40000 ALTER TABLE `experience` DISABLE KEYS */;
INSERT INTO `experience` VALUES (1,'Miracle Software','/experience/1.jpg','2007-04-01','2007-06-30',3,'Prácticas de empresa para completar el título de Técnico Superior en Desarrollo de Aplicaciones Informáticas, en la que me encargué de \\\"traducir\\\" diversas aplicaciones de Visual Basic a C#.','2017-10-10'),(2,'Informática y Gestión Asturias (IGA)','/experience/2.jpj','2007-08-01','2008-04-30',2,'IGA es la empresa desarrolladora y distribuidora a nivel nacional del software Nerón, creado para facilitar la gestión de negocios de hostelería y restauración. Durante el tiempo que trabajé con ellos, me encargué de dar formación y resolver incidencias, adquiriendo experiencia en el trato con los clientes y en empatizar con el punto de vista del usuario final.','2017-10-10'),(3,'Chipbip Servicios y Sistemas (Izertis)','/experience/3.jpg','2009-03-01','2009-04-30',3,'Prácticas de fin del curso de J2EE, Struts y Framework del Principado de Asturias (FWPA), en las que participé en el desarrollo de diversas aplicaciones bajo el FWPA.','2017-10-10'),(4,'Ayutamiento de Oviedo','/experience/4.jpg','2009-07-01','2009-12-31',2,'Formador y monitor de informática en el Telecentro del Ayuntamiento de Oviedo.','2017-10-10'),(5,'Treelogic','/experience/5.jpg','2010-03-01','2012-06-30',1,'En Treelogic desarrollé diversas aplicaciones móviles para Windows Mobile y Windows CE, sistemas que actualmente están obsoletos y en desuso, pero que me sirvió para conocer el mundo móvil y saber como encarar el desarrollo aplicaciones para este tipo de plataformas.','2017-10-10'),(6,'ABAMobile','/experience/6.jpg','2013-03-01',NULL,2,'En ABAMobile he desarrollado e impartido diversos cursos y talleres formativos, tanto para desarrolladores como para usuarios.','2017-10-10'),(7,'Izertis','/experience/7.jpg','2013-11-01','2014-04-30',2,'En colaboración con Izertis, he desarrollado e impartido diversos cursos de programación para móviles.','2017-10-10'),(8,'ABAMobile','/experience/8.jpg','2013-03-01',NULL,1,'Actualmente trabajo como Programador Senior en ABAMobile, donde me encargo del desarrollo de diversas aplicaciones nativas, tanto Android como iOS, bien por encargo o como productos propios de la empresa, colaborando en las labores de análisis, estimación de tiempos y definición de tareas.','2017-10-10'),(9,'Proyectos personales','/experience/9.jpg',NULL,NULL,1,'Como proyecto personal he desarrollado esta aplicación de Curriculum Vitae (por ahora en Android) para mostrar un ejemplo de aplicación que trata de seguir el patrón Model-View-Presenter haciendo uso de una arquitectura Clean e inyección de dependencias.','2017-10-10');
/*!40000 ALTER TABLE `experience` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `knowledge`
--

DROP TABLE IF EXISTS `knowledge`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `knowledge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  `image` varchar(128) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `updated` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `knowledge`
--

LOCK TABLES `knowledge` WRITE;
/*!40000 ALTER TABLE `knowledge` DISABLE KEYS */;
INSERT INTO `knowledge` VALUES (1,'Android','/knowledge/1.jpg',1,3,'2017-10-10'),(2,'iOS','/knowledge/2.jpg',1,3,'2017-10-10'),(3,'Phonegap','/knowledge/3.jpg',1,2,'2017-10-10'),(4,'Ionic','/knowledge/4.jpg',1,1,'2017-10-10'),(5,'Tizen','/knowledge/5.jpg',1,1,'2017-10-10'),(6,'Java','/knowledge/6.jpg',2,3,'2017-10-10'),(7,'Objective-C','/knowledge/7.jpg',2,3,'2017-10-10'),(8,'Kotlin','/knowledge/8.jpg',2,1,'2017-10-10'),(9,'C#','/knowledge/9.jpg',2,2,'2017-10-10'),(10,'HTML','/knowledge/10.jpg',2,2,'2017-10-10'),(11,'CSS','/knowledge/11.jpg',2,2,'2017-10-10'),(12,'Javascript','/knowledge/12.jpg',2,2,'2017-10-10'),(13,'Git','/knowledge/13.jpg',3,2,'2017-10-10'),(14,'SVN','/knowledge/14.jpg',3,2,'2017-10-10'),(15,'Android Studio','/knowledge/15.jpg',3,3,'2017-10-10'),(16,'Eclipse','/knowledge/16.jpg',3,3,'2017-10-10'),(17,'XCode','/knowledge/17.jpg',3,3,'2017-10-10'),(18,'JIRA','/knowledge/18.jpg',3,1,'2017-10-10'),(19,'Photoshop','/knowledge/19.jpg',3,2,'2017-10-10');
/*!40000 ALTER TABLE `knowledge` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `language`
--

DROP TABLE IF EXISTS `language`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `updated` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `language`
--

LOCK TABLES `language` WRITE;
/*!40000 ALTER TABLE `language` DISABLE KEYS */;
INSERT INTO `language` VALUES (1,'Inglés',2,'2017-10-10');
/*!40000 ALTER TABLE `language` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `library`
--

DROP TABLE IF EXISTS `library`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `library` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  `path` varchar(128) DEFAULT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `updated` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `library`
--

LOCK TABLES `library` WRITE;
/*!40000 ALTER TABLE `library` DISABLE KEYS */;
INSERT INTO `library` VALUES (1,'Retrofit','http://square.github.io/retrofit/','Cliente HTTP de tipo seguro para Android. Encargado de hacer la distintas peticiones a servicios web de la aplicación.','2017-10-10'),(2,'Picasso','http://square.github.io/picasso/','Librería para la descarga y \\\"cacheado\\\" de imágenes en Android.','2017-10-10'),(3,'SugarORM','http://satyan.github.io/sugar/','Libreria \\\"Object-Relational Mapping\\\" para facilitar la gestión de bases de datos SQLite en Android.','2017-10-10'),(4,'GSON','https://github.com/google/gson','Librería Java para la serialización y deserialización de objetos.','2017-10-10'),(5,'Joda-Time','http://www.joda.org/joda-time/','Libreria Java para facilitar el manejo de fechas.','2017-10-10'),(6,'Android Annotations','http://androidannotations.org/','Libreria Android para inyección de dependencias.','2017-10-10'),(7,'Crashlytics','https://try.crashlytics.com/','Framework para el control de errores de las aplicaciones.','2017-10-10'),(8,'AFNetworking','https://github.com/AFNetworking/AFNetworking','Framework para gestionar las peticiones a servicios web desde Objective-C.','2017-10-10'),(9,'CoreData','https://developer.apple.com/documentation/coredata','Framework iOS para gestión de bases de datos.','2017-10-10'),(10,'ObjectBox','http://objectbox.io/','Librería para gestionar bases de datos orientadas a objetos en dispositivos Android.','2017-10-10'),(11,'EventBus','http://greenrobot.org/eventbus/','Libreria para transmisión de eventos entre las distintas partes de una aplicación Android.','2017-10-10');
/*!40000 ALTER TABLE `library` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `other_data`
--

DROP TABLE IF EXISTS `other_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `other_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `updated` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `other_data`
--

LOCK TABLES `other_data` WRITE;
/*!40000 ALTER TABLE `other_data` DISABLE KEYS */;
INSERT INTO `other_data` VALUES (1,'Gran facilidad de aprendizaje y adaptación','Los dispositivos móviles tal vez sea lo que más rápido está evolucionando y cambiando en el ambito de la programación, por lo que considero fundamental el saber adaptarse a los cambios con rapidez.','2017-10-10'),(2,'Dotes para la comunicación y el trabajo en equipo','Hoy día prácticamente cualquier aplicación va a necesitar de la interacción de varios desarrolladores, que seguramente no tengan conocimientos en las mismas areas y es posible que ni si quiera trabajen en el mismo espacio, con lo que se hace clave el saber transmitir los conocimientos o problemas que puedan surgir durante el desarrollo.','2017-10-10'),(3,'Capacidad organizativa y resolutiva','De nada sirve tener una idea genial o a grandes programadores si no se sabe plasmar en algo terminado y funcional en unos plazos razonables, por lo que es importante saber definir una metas y alcanzarlas a tiempo.','2017-10-10');
/*!40000 ALTER TABLE `other_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `other_training`
--

DROP TABLE IF EXISTS `other_training`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `other_training` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  `school` varchar(128) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `hours` int(11) DEFAULT NULL,
  `image` varchar(128) DEFAULT NULL,
  `updated` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `other_training`
--

LOCK TABLES `other_training` WRITE;
/*!40000 ALTER TABLE `other_training` DISABLE KEYS */;
INSERT INTO `other_training` VALUES (1,'Master Java-J2EE, XML y AJAX','Syncrom Informática','2008-01-01',750,'/other_training/1.jpg','2017-10-10'),(2,'J2EE, Struts y Framework del Principado de Asturias','Gestione','2009-01-01',250,'/other_training/2.jpg','2017-10-10'),(3,'Certificación Framework Principado de Asturias','Dispal','2010-01-01',50,'/other_training/3.jpg','2017-10-10'),(4,'Cloud Computing: Desarrollo en la nube','Adico','2011-01-01',220,'/other_training/4.jpg','2017-10-10'),(5,'Desarrollo de aplicaciones Android','SEAS - Universidad Católica de Ávila','2012-09-01',150,'/other_training/5.jpg','2017-10-10'),(6,'Aprendizaje de Objective-C','Fundación UNED','2013-01-01',25,'/other_training/6.jpg','2017-10-10'),(7,'Iniciación al desarrollo de aplicaciones iOS','Fundación UNED','2013-05-01',60,'/other_training/7.jpg','2017-10-10'),(8,'Desarrollo avanzado de aplicaciones iOS','Fundación UNED','2013-09-01',60,'/other_training/8.jpg','2017-10-10'),(9,'Bootcamp Kotlin para desarrolladores Android','Antonio Leiva','2017-06-01',10,'/other_training/9.jpg','2017-10-10');
/*!40000 ALTER TABLE `other_training` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_data`
--

DROP TABLE IF EXISTS `personal_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  `surname` varchar(128) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `phone_number` varchar(9) DEFAULT NULL,
  `summary` varchar(2048) DEFAULT NULL,
  `image` varchar(128) DEFAULT NULL,
  `updated` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_data`
--

LOCK TABLES `personal_data` WRITE;
/*!40000 ALTER TABLE `personal_data` DISABLE KEYS */;
INSERT INTO `personal_data` VALUES (1,'Jesús','López Corominas','1979-08-03','admin@jesuslcorominas.com','','En el año 2010 empecé a desarrollar aplicaciones para dispositivos móviles con Windows Mobile y Windows CE. Aunque hoy en día son sistemas operativos obsoletos y en desuso, esa experiencia me sirvió para conocer y saber encarar los problemas típicos de una aplicación móvil.\\nActualmente, y durante los últimos 4 años y medio, me dedico a desarrollar aplicaciones, principalmente nativas, tanto para Android como para iOS, como por ejemplo https://goo.gl/AfQowp, https://goo.gl/1UTRwx, https://goo.gl/HoMkdh, https://goo.gl/ckKrdL o https://goo.gl/Tj99Tj de Android o https://goo.gl/cfMMKE, https://goo.gl/ryZKVa o https://goo.gl/vY2Dbk para iOS.','/personal_data/yo.jpg','2017-10-10');
/*!40000 ALTER TABLE `personal_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `platform` int(11) DEFAULT NULL,
  `icon` varchar(128) DEFAULT NULL,
  `path` varchar(128) DEFAULT NULL,
  `experience_id` int(11) NOT NULL,
  `updated` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_experience_idx` (`experience_id`),
  CONSTRAINT `fk_experience` FOREIGN KEY (`experience_id`) REFERENCES `experience` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project`
--

LOCK TABLES `project` WRITE;
/*!40000 ALTER TABLE `project` DISABLE KEYS */;
INSERT INTO `project` VALUES (1,'Emulsa: Sistema de ayuda a la explotación','Aplicación móvil nativa para dispositivos Mobile Devices desarrollada en Java para el seguimiento y gestión de la flota de vehiculos del servicio de limpieza y de recogida de basuras de Gijón. Control de los residuos recogidos haciendo uso de tecnología RFID.',5,'/projects/1/icon.png',NULL,5,'2017-10-10'),(4,'eWhere Lisboa','Aplicación móvil nativa para dispositivos Mobile Devices desarrollada en Java para el seguimiento y gestión de la flota de taxis de Lisboa.',5,'/projects/2/icon.png',NULL,5,'2017-10-10'),(5,'Alimerka','Aplicación para dispositivos móviles Windows Mobile desarrollada en C# para el seguimiento y gestión de la flota de camiones de la cadena de supermercados Alimerka.',4,'/projects/3/icon.png',NULL,5,'2017-10-10'),(6,'Desarrollo de aplicaciones nativas Android  (270h.)','Elaboración y tutorización de varias ediciones del curso online de desarrollo de aplicaciones Android.',6,NULL,NULL,6,'2017-10-10'),(7,'Taller de uso de dispositovos móviles en la Administración del Principado de Asturias (110h.)','Elaboración e impartición de diversas ediciones del taller de uso de dispositivos móviles para funcionarios del Principado, tanto presenciales como online.',6,NULL,NULL,6,'2017-10-10'),(8,'Open Data y desarrollo de aplicaciones Android (75h.)','Desarrollo e impartición del curso de desarrollo básico de aplicaciones Android orientado al Open Data.',6,NULL,NULL,7,'2017-10-10'),(9,'Desarrollo avanzado de aplicaciones nativas Android (50h.)','Desarrollo e impartición del curso avanzado de desarrollo en Android para profesionales del sector.',6,NULL,NULL,7,'2017-10-10'),(10,'Testygo','Aplicación móvil nativa para teléfonos Android desarrollada en Java para la gestión de partes de accidentes de tráfico.',1,'/projects/8/icon.png',NULL,8,'2017-10-10'),(11,'Catálogo de la industria de la construcción Asturiana','Aplicación móvil nativa para teléfonos y tabletas Android desarrollada en Java para la consulta del catálogo de las empresas de la CAC.',1,'/projects/9/icon.png','https://play.google.com/store/apps/details?id=com.abamobile.cac.catalogo',8,'2017-10-10'),(12,'Catálogo de la industria de la construcción Asturiana','Aplicación móvil nativa para teléfonos y tabletas iOS desarrollada en Objective-C para la consulta del catálogo de las empresas de la CAC.',2,'/projects/10/icon.png','https://itunes.apple.com/us/app/cat%C3%A1logo-de-la-industria-de-la-construcci%C3%B3n-asturiana/id883711019?mt=8',8,'2017-10-10'),(13,'Exxon Mobile','Aplicación Android nativa para tabletas Android desarrollada en Java para la fidelización de clientes de la cadena de gasolineras Exxon en Colombia.',1,'/projects/11/icon.png',NULL,8,'2017-10-10'),(14,'UsherU','Aplicación móvil híbrida (Phonegap) para la reserva y compra de entradas de cine desde teléfonos Android.',1,'/projects/12/icon.png','https://play.google.com/store/apps/details?id=com.eticco.usheru',8,'2017-10-10'),(15,'UsherU','Aplicación móvil híbrida (Phonegap) para la reserva y compra de entradas de cine desde teléfonos iOS.',2,'/projects/13/icon.png','https://itunes.apple.com/us/app/usheru-your-cinema-app/id972578826?mt=8',8,'2017-10-10'),(16,'WeQuiz','Aplicación nativa para teléfonos Android desarrollada en Java para la formación de empleados con un juego de preguntas y respuestas.',1,'/projects/14/icon.png','https://play.google.com/store/apps/details?id=com.abamobile.wequiz&hl=es_419',8,'2017-10-10'),(17,'WeQuiz','plicación nativa para teléfonos iOS desarrollada en Objective-C para la formación de empleados con un juego de preguntas y respuestas.',2,'/projects/15/icon.png','https://itunes.apple.com/es/app/wequiz/id982916096?mt=8',8,'2017-10-10'),(18,'WeQuiz4Tizen','Aplicación Tizen para relojes inteligentes Samsung Gear desarrollada con HTML, CSS y Javascript complementaria a WeQuiz.',3,'/projects/16/icon.png',NULL,8,'2017-10-10'),(19,'NFCLeads','Aplicación nativa para teléfonos Android desarrollada en Java para la optimización de relaciones profesionales en ferias y congresos a través de NFC.',1,'/projects/17/icon.png','https://play.google.com/store/apps/details?id=com.abamobile.exhibitornfcleads',8,'2017-10-10'),(20,'NFCLeads','Aplicación nativa para teléfonos iOS desarrollada en Objective-C para la optimización de relaciones profesionales en ferias y congresos a través de códigos QR.',2,'/projects/18/icon.png','https://itunes.apple.com/es/app/nfc-leads/id965939538?mt=8',8,'2017-10-10'),(21,'Aplicaciones para Eventos','Aplicación nativa para teléfonos Android desarrollada en Java altamente personalizable para la difusión de ferias y congresos.',1,'/projects/19/icon.png','https://play.google.com/store/apps/details?id=com.abamobile.appsforevents&hl=es_419',8,'2017-10-10'),(22,'Aplicaciones para Eventos','Aplicación nativa para teléfonos iOS desarrollada en Objective-C altamente personalizable para la difusión de ferias y congresos.',2,'/projects/20/icon.png','https://itunes.apple.com/es/app/apps-for-events/id980187442?mt=8',8,'2017-10-10'),(23,'Smarthouse','Aplicación móvil nativa para teléfonos Android desarrollada en Java para la monitorización del consumo de datos y llamadas.',1,'/projects/21/icon.png',NULL,8,'2017-10-10'),(24,'Merchagram','Aplicación móvil nativa para teléfonos Android desarrollada en Java para la gestión y control de espacios promocionales en tiendas de la cadena Phonehouse.',1,'/projects/22/icon.png','https://play.google.com/store/apps/details?id=es.phonehouse.merchagram.prod&hl=es_419',8,'2017-10-10'),(25,'Philips Tarifa Digital','Aplicación móvil nativa para teléfonos y tabletas Android desarrollada en Java para la consulta del catálogo de productos de Philips Lighting.',1,'/projects/23/icon.png','https://play.google.com/store/apps/details?id=com.philips.li.digitalpricelist&hl=es_419',8,'2017-10-10'),(26,'Philips Tarifa Digital','Aplicación móvil nativa para teléfonos y tabletas iOS desarrollada en Objective-C para la consulta del catálogo de productos de Philips Lighting.',2,'/projects/24/icon.png','https://itunes.apple.com/es/app/tarifa-philips-lighting/id1078834201?mt=8',8,'2017-10-10'),(27,'Next 2.0','Aplicación móvil nativa para teléfonos y tabletas Android desarrollada en Java para que niños programen secuencias en un robot conectado por bluetooth.',1,'/projects/25/icon.png','https://play.google.com/store/apps/details?id=com.edelvives.nextapp20&hl=es_419',8,'2017-10-10'),(28,'Next 2.0','Aplicación móvil nativa para teléfonos y tabletas iOS desarrollada en Objective-C para que niños programen secuencias en un robot conectado por bluetooth.',2,'/projects/26/icon.png',NULL,8,'2017-10-10'),(29,'Resume','Aplicación móvil nativa para teléfonos y tabletas Android desarrollada en Java en la que mostrar un currículo. Ejemplo de como construir una aplicación que implemente el patrón Model-View-Presenter haciendo uso de arquitectura Clean e inyección de dependencias.',1,'/projects/27/icon.png','https://github.com/jesuslcorominas/Android-Resume',9,'2017-10-10'),(30,'Resume','Aplicación móvil nativa para teléfonos y tabletas iOS desarrollada en Objective-C en la que mostrar un currículo. Ejemplo de como construir una aplicación que implemente el patrón Model-View-Presenter haciendo uso de arquitectura Clean.',1,'/projects/28/icon.png','https://github.com/jesuslcorominas/iOS-Resume',9,'2017-10-10');
/*!40000 ALTER TABLE `project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_image`
--

DROP TABLE IF EXISTS `project_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(128) DEFAULT NULL,
  `project_id` int(11) NOT NULL,
  `updated` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_project_idx` (`project_id`),
  CONSTRAINT `fk_project_image` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_image`
--

LOCK TABLES `project_image` WRITE;
/*!40000 ALTER TABLE `project_image` DISABLE KEYS */;
/*!40000 ALTER TABLE `project_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_library`
--

DROP TABLE IF EXISTS `project_library`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_library` (
  `project_id` int(11) NOT NULL,
  `library_id` int(11) NOT NULL,
  PRIMARY KEY (`project_id`,`library_id`),
  KEY `fk_library_idx` (`library_id`),
  CONSTRAINT `fk_library_project` FOREIGN KEY (`library_id`) REFERENCES `library` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_project_library` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_library`
--

LOCK TABLES `project_library` WRITE;
/*!40000 ALTER TABLE `project_library` DISABLE KEYS */;
INSERT INTO `project_library` VALUES (14,1),(17,1),(19,1),(21,1),(22,1),(23,1),(27,1),(14,2),(17,2),(19,2),(21,2),(23,2),(27,2),(14,3),(17,3),(19,3),(21,3),(22,3),(23,3),(25,3),(14,4),(17,4),(19,4),(21,4),(22,4),(23,4),(27,4),(14,5),(17,5),(19,5),(21,5),(22,5),(23,5),(27,5),(25,6),(27,6),(14,7),(15,7),(17,7),(18,7),(19,7),(20,7),(23,7),(24,7),(27,7),(15,8),(18,8),(20,8),(24,8),(15,9),(18,9),(20,9),(24,9),(26,9),(27,10),(25,11),(27,11);
/*!40000 ALTER TABLE `project_library` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-17 12:03:55
