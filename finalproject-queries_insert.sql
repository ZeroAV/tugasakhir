# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.5-10.1.37-MariaDB)
# Database: finalproject
# Generation Time: 2019-05-06 12:51:53 PM +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table post
# ------------------------------------------------------------

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;

INSERT INTO `post` (`id`, `username`, `thread_id`, `content`, `date_created`, `date_edited`)
VALUES
	(44,'dika',5,'PHP itu apa sih','2019-05-06 12:10:11','2019-05-06 12:10:11'),
	(45,'aldy',5,'PHP: Hypertext Preprocessor is a general-purpose programming language originally designed for web development. It was originally created by Rasmus Lerdorf in 1994; the PHP reference implementation is now produced by The PHP Group.','2019-05-06 12:11:05','2019-05-06 12:11:05'),
	(46,'aldy',6,'HTML itu apa sih?','2019-05-06 12:11:22','2019-05-06 12:11:22'),
	(47,'adit',6,'Hypertext Markup Language is the standard markup language for creating web pages and web applications. With Cascading Style Sheets and JavaScript, it forms a triad of cornerstone technologies for the World Wide Web.','2019-05-06 12:11:45','2019-05-06 12:11:45'),
	(48,'adit',7,'Java itu apa sih?','2019-05-06 12:12:00','2019-05-06 12:12:00'),
	(50,'adit',5,'PHP is a server side scripting language','2019-05-06 12:22:54','2019-05-06 12:22:54'),
	(51,'aldy',7,'Java is a set of computer software and specifications developed by James Gosling at Sun Microsystems, which was later acquired by the Oracle Corporation, that provides a system for developing application software and deploying it in a cross-platform computing environment.','2019-05-06 12:25:05','2019-05-06 12:25:05');

/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table thread
# ------------------------------------------------------------

LOCK TABLES `thread` WRITE;
/*!40000 ALTER TABLE `thread` DISABLE KEYS */;

INSERT INTO `thread` (`thread_id`, `username`, `title`, `date_created`, `date_last_edited`)
VALUES
	(5,'dika','PHP','2019-05-06 12:10:11','2019-05-06 12:22:54'),
	(6,'aldy','HTML','2019-05-06 12:11:22','2019-05-06 12:11:45'),
	(7,'adit','Java','2019-05-06 12:12:00','2019-05-06 12:25:05');

/*!40000 ALTER TABLE `thread` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user
# ------------------------------------------------------------

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` (`username`, `nama`, `password`, `gender`, `bio`)
VALUES
	('adit','adit','$2y$10$9dHmhCV7PCzxUPo/cK0bxersM8bxO5jJ0lVSmZ4.yQlMgSYTrqVkW','m',NULL),
	('admin','admin','$2y$10$gV1H3Rf/HKhgU97fuXBSKeHHULYvuBqAv/JpapBJYd9pi9lHbOnBq','m',NULL),
	('aldy','aldy','$2y$10$24DgjG9ga5k0WjgF8AGjwe6Fq2IFEUVCXsQ.ZIEDaESC7d0EN9oQO','m',NULL),
	('dika','dika','$2y$10$.qxUoaaWGLFHwECkFb2lK.jWwvJyY/ZsNtM6wrIhv5BaRmKIr488u','m',NULL);

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
