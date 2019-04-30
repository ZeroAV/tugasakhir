# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.5-10.1.37-MariaDB)
# Database: finalproject
# Generation Time: 2019-04-30 1:45:09 AM +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table admin
# ------------------------------------------------------------

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;

INSERT INTO `admin` (`username`, `nama`, `password`, `gender`, `bio`)
VALUES
	('admin','admin','123','L','ini punya admin');

/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table post
# ------------------------------------------------------------

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;

INSERT INTO `post` (`id`, `username`, `thread_id`, `content`, `date_created`, `date_edited`)
VALUES
	(1,'adit',1,'PHP itu apa?','2019-04-22 18:00:00','2019-04-22 18:00:00'),
	(2,'aldy',1,'PHP: Hypertext Preprocessor is a general-purpose programming language originally designed for web development. It was originally created by Rasmus Lerdorf in 1994; the PHP reference implementation is now produced by The PHP Group.','2019-04-22 18:21:00','2019-04-22 18:21:00'),
	(3,'dika',1,'PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages. PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft\'s ASP.\n','2019-04-22 18:32:00','2019-04-22 18:32:00'),
	(4,'aldy',2,'Java itu apa sih?','2019-04-23 20:11:00','2019-04-23 20:11:00'),
	(5,'dika',2,'Java is a general-purpose programming language that is class-based, object-oriented, and specifically designed to have as few implementation dependencies as possible','2019-04-23 20:13:00','2019-04-23 20:13:00'),
	(6,'dika',3,'HTML itu apa sih?','2019-04-24 19:20:00','2019-04-24 19:20:00'),
	(7,'adit',3,'HTML atau HyperText Markup Language digunakan untuk membuat website','2019-04-24 19:25:00','2019-04-24 19:25:00'),
	(8,'dika',4,'Scala itu apa sih?','2019-04-25 16:20:00','2019-04-25 16:20:00'),
	(9,'aldy',4,'Scala adalah bahasa pemrograman berbasis JVM','2019-04-25 16:23:00','2019-04-25 16:23:00');

/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table thread
# ------------------------------------------------------------

LOCK TABLES `thread` WRITE;
/*!40000 ALTER TABLE `thread` DISABLE KEYS */;

INSERT INTO `thread` (`thread_id`, `username`, `title`, `date_created`, `date_last_edited`)
VALUES
	(1,'adit','PHP','2019-04-22 18:00:00','2019-04-22 18:32:00'),
	(2,'aldy','Java','2019-04-23 20:11:00','2019-04-23 20:13:00'),
	(3,'dika','HTML','2019-04-24 19:20:00','2019-04-24 19:25:00'),
	(4,'dika','Scala','2019-04-25 16:20:00','2019-04-25 16:23:00');

/*!40000 ALTER TABLE `thread` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user
# ------------------------------------------------------------

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` (`username`, `nama`, `password`, `gender`, `bio`)
VALUES
	('adit','Adit','123','m','Ini profile adit'),
	('admin','admin','123','m','Ini punya admin'),
	('aldy','Aldy','123','m','Ini profile aldy'),
	('dika','Dika','123','m','Ini profile dika');

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
thread