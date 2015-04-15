# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.9)
# Database: idea_grafica
# Generation Time: 2015-04-15 11:03:24 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table contact
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `message`, `created_at`)
VALUES
	(5,'facundo capua','123123','facundocapua@gmail.com','aasdasjdhsakjdhakdsa','2012-08-05 09:20:33'),
	(6,'facundo capua','123123','facundocapua@gmail.com','aasdasjdhsakjdhakdsa','2012-08-05 09:40:55'),
	(7,'facundo capua','123123','facundocapua@gmail.com','gfhgh\r\nfh\r\nfh\r\nf\r\nhf','2012-08-05 09:47:23');

/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table customer
# ------------------------------------------------------------

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;

INSERT INTO `customer` (`id`, `name`, `image`)
VALUES
	(1,'Colombraro','customer_1.png'),
	(2,'Adaggio','customer_2.png'),
	(3,'AZHARES Y CANELA','customer_3.png'),
	(4,'Coroner','customer_4.png'),
	(5,'DELL´ORO HNOS S.A.','customer_5.png'),
	(6,'Emer House','customer_6.png'),
	(7,'Hotel Faena','customer_7.png'),
	(8,'Hotel FourSeasons','customer_8.png'),
	(9,'Hotel Hilton','customer_9.png'),
	(10,'Hotel Intercontinental','customer_10.png'),
	(11,'Hotel Marriott','customer_11.png'),
	(12,'Hotel Sheraton Libertador','customer_12.png'),
	(13,'Hotel Sheraton Pilar','customer_13.png'),
	(14,'Hotel Sheraton','customer_14.png'),
	(15,'Knightsbridge','customer_15.png'),
	(16,'La Marina','customer_16.png'),
	(17,'La Primavera Casa','customer_17.png'),
	(18,'Ladobueno','customer_18.png'),
	(19,'Madahos','customer_19.png'),
	(20,'OCA S.R.L.','customer_20.png'),
	(21,'OCASA S.A.','customer_21.png'),
	(22,'PMV S.A.','customer_22.png'),
	(23,'QUAKER','customer_23.png'),
	(24,'Bodegas San Huberto','customer_24.png'),
	(25,'Sindicato Nacional Luz y Fuerza Patagonia','customer_25.png'),
	(26,'TELGA','customer_26.png'),
	(27,'TNT','customer_27.png'),
	(28,'Transtec','customer_28.png');

/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table gallery
# ------------------------------------------------------------

DROP TABLE IF EXISTS `gallery`;

CREATE TABLE `gallery` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;

INSERT INTO `gallery` (`id`, `name`)
VALUES
	(1,'Banners'),
	(2,'Corpóreos'),
	(3,'Gráfica Vehicular'),
	(4,'Vinilos');

/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table image
# ------------------------------------------------------------

DROP TABLE IF EXISTS `image`;

CREATE TABLE `image` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `gallery_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;

INSERT INTO `image` (`id`, `name`, `file`, `gallery_id`)
VALUES
	(1,'Foto 1','image_1.jpg',1),
	(2,'Foto 2','image_2.jpg',1),
	(3,'Foto 3','image_3.jpg',1),
	(4,'Foto 4','image_4.jpg',1),
	(5,'Foto 5','image_5.jpg',2),
	(6,'Foto 6','image_6.jpg',2),
	(7,'Foto 7','image_7.jpg',2),
	(8,'Foto 8','image_8.jpg',2),
	(9,'Foto 9','image_9.jpg',2),
	(10,'Foto 10','image_10.jpg',2),
	(11,'Foto 11','image_11.jpg',3),
	(12,'Foto 12','image_12.jpg',3),
	(13,'Foto 13','image_13.jpg',3),
	(14,'Foto 14','image_14.jpg',3),
	(15,'Foto 15','image_15.jpg',3),
	(16,'Foto 16','image_16.jpg',3),
	(17,'Foto 17','image_17.jpg',3),
	(18,'Foto 18','image_18.jpg',3),
	(19,'Foto 19','image_19.jpg',3),
	(20,'Foto 20','image_20.jpg',3),
	(21,'Foto 21','image_21.jpg',3),
	(22,'Foto 22','image_22.jpg',3),
	(23,'Foto 23','image_23.jpg',3),
	(24,'Foto 24','image_24.jpg',3),
	(25,'Foto 25','image_25.jpg',3),
	(26,'Foto 26','image_26.jpg',3),
	(27,'Foto 27','image_27.jpg',3),
	(28,'Foto 28','image_28.jpg',3),
	(29,'Foto 29','image_29.jpg',3),
	(30,'Foto 30','image_30.jpg',3),
	(31,'Foto 31','image_31.jpg',3),
	(32,'Foto 32','image_32.jpg',3),
	(33,'Foto 33','image_33.jpg',3),
	(34,'Foto 34','image_34.jpg',3),
	(35,'Foto 35','image_35.jpg',4),
	(36,'Foto 36','image_36.jpg',4),
	(37,'Foto 37','image_37.jpg',4),
	(38,'Foto 38','image_38.jpg',4),
	(39,'Foto 39','image_39.jpg',4),
	(40,'Foto 40','image_40.jpg',4),
	(41,'Foto 41','image_41.jpg',4),
	(42,'Foto 42','image_42.jpg',4),
	(43,'Foto 43','image_43.jpg',4),
	(44,'Foto 44','image_44.jpg',4),
	(45,'Foto 45','image_45.jpg',4),
	(46,'Foto 46','image_46.jpg',5),
	(47,'Foto 47','image_47.jpg',5),
	(48,'Foto 48','image_48.jpg',5),
	(49,'Foto 49','image_49.jpg',5),
	(50,'Foto 50','image_50.jpg',5),
	(51,'Foto 51','image_51.jpg',5),
	(52,'Foto 52','image_52.jpg',5),
	(53,'Foto 53','image_53.jpg',5),
	(54,'Foto 54','image_54.jpg',5),
	(55,'Foto 55','image_55.jpg',5),
	(56,'Foto 56','image_56.jpg',5),
	(57,'Foto 57','image_57.jpg',5),
	(58,'Foto 58','image_58.jpg',5),
	(59,'Foto 59','image_59.jpg',5);

/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
