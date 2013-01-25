# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.25)
# Database: zipse
# Generation Time: 2013-01-23 02:45:49 -0800
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) DEFAULT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `user_name`, `first_name`, `last_name`, `email`, `password`, `role`, `created`, `modified`, `last_login`)
VALUES
	(1,'god','mike','hunt','suck@my.com','5c5a788eaabfe962ffd507b6bd7c410eed43449e',1,'2012-12-05 08:00:01','2012-12-12 09:05:41','2012-12-05 07:59:00'),
	(3,'new','new','new','new@new.com','new',0,'2012-12-12 08:25:42','2012-12-12 08:25:48','2012-12-12 08:25:00'),
	(4,'newwan','new','wan','newwan@new.com','123',NULL,'2012-12-12 08:52:45','2012-12-12 08:52:45','2012-12-12 08:39:00'),
	(5,'wtf','wtf','wtf','wtf@wtf.com','f08a59da2cfc4bfca4dd4215ffbb0b4fa51d361e',0,'2012-12-12 09:15:01','2012-12-12 09:40:25','2012-12-12 09:14:00'),
	(6,'wtfwtf','wtf','wtf','wtfwtf@wtf.com','4e83141d9394c8f1633323e9aeb638782f405774',0,'2012-12-12 09:41:08','2012-12-12 09:41:08','2012-12-12 09:40:00');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
