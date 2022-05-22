-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.24-MariaDB


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema clicciona
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ clicciona;
USE clicciona;

--
-- Table structure for table `clicciona`.`users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `email` (`email`),
  KEY `login` (`password`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clicciona`.`users`
--

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`,`name`,`email`,`password`,`created`) VALUES 
 (1,'a','a@hotmail.com','ee2ec3cc66427bb422894495068222a8','2021-04-10 18:47:26'),
 (2,'b','b@hotmail.com','079443582e2baf0a1e81ed2310270980','2021-04-10 19:09:33'),
 (3,'c','c@hotmail.com','57f842286171094855e51fc3a541c1e2','2021-04-10 20:23:08'),
 (4,'d','d@hotmail.com','7dfc5ecd62cbcc2a03726f016bbb9033','2021-04-10 21:14:06'),
 (5,'e','e@hotmail.com','4dbf17d127c7acd54b25276782a48041','2021-04-12 13:53:46'),
 (6,'f','f@hotmail.com','c6cc8094c2dc07b700ffcc36d64e2138','2021-04-14 14:40:00'),
 (7,'finch','finch@gmail.com','c041f0a44b95c6d5c7c3ff47e8ea9733','2022-05-18 21:27:21'),
 (8,'kike','kike@gmial.com','066fc7b468bbf62055fe69a4f097de90','2022-05-20 15:12:33');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
