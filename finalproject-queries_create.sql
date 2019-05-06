# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.5-10.1.37-MariaDB)
# Database: finalproject
# Generation Time: 2019-05-06 12:51:36 PM +0000
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

CREATE TABLE `post` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL DEFAULT '',
  `thread_id` int(10) unsigned NOT NULL,
  `content` longtext NOT NULL,
  `date_created` datetime NOT NULL,
  `date_edited` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_post-creator` (`username`),
  KEY `fk_thread-of-post` (`thread_id`),
  CONSTRAINT `fk_post-creator` FOREIGN KEY (`username`) REFERENCES `user` (`username`),
  CONSTRAINT `fk_thread-of-post` FOREIGN KEY (`thread_id`) REFERENCES `thread` (`thread_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table thread
# ------------------------------------------------------------

CREATE TABLE `thread` (
  `thread_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL DEFAULT '',
  `title` varchar(50) NOT NULL DEFAULT '',
  `date_created` datetime NOT NULL,
  `date_last_edited` datetime NOT NULL,
  PRIMARY KEY (`thread_id`),
  KEY `fk_thread-creator` (`username`),
  CONSTRAINT `fk_thread-creator` FOREIGN KEY (`username`) REFERENCES `user` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table user
# ------------------------------------------------------------

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL DEFAULT '',
  `gender` char(1) NOT NULL DEFAULT '',
  `bio` longtext,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
