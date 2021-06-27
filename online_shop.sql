/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 8.0.25 : Database - online_shop
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`online_shop` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `online_shop`;

/*Table structure for table `cart` */

DROP TABLE IF EXISTS `cart`;

CREATE TABLE `cart` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_email` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

/*Data for the table `cart` */

/*Table structure for table `faqs` */

DROP TABLE IF EXISTS `faqs`;

CREATE TABLE `faqs` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `body` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

/*Data for the table `faqs` */

insert  into `faqs`(`id`,`body`) values 
(1,'             Our Aims:<br /><br />\n   1. To deliver quality cakes across the globe<br /><br />\n   2. To ensure that the human race are well fed with nutritious cakes<br />\n   3. To ensure everything works fine<br />\n'),
(2,'This is the best cake.');

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `orders_id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_email` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `goods` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  PRIMARY KEY (`orders_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

/*Data for the table `orders` */

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;

/*Data for the table `products` */

insert  into `products`(`id`,`name`,`image`,`price`) values 
(1,'Tulumba','tulumba.jpg','69.00'),
(2,'Tuti Fruti torta','tutifruti.jpg','150.00'),
(3,'Tiramisu','tiramisu.jpg','35.00'),
(4,'Svadbena torta','svadba.jpg','250.00'),
(5,'Sampita','sampita.jpg','2.00'),
(6,'Hurmasica','hurmasica.jpg','4.00'),
(7,'Bosanka Baklava','baklava.jpg','20.00'),
(8,'Breskva','breskva.jpg','120.00'),
(9,'Mala torta','123','69.00');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`) values 
(1,'Ajla Arnautovic','ajla@arnautovic.com','ajla123'),
(2,'Kenan','kenan@bektas.com','kenan123'),
(3,'Adna','adna@hehe.com','adna123');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
