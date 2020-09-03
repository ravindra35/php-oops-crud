/*
SQLyog Community v12.5.0 (64 bit)
MySQL - 10.3.8-MariaDB : Database - oop_crud
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`oop_crud` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `oop_crud`;

/*Table structure for table `records` */

DROP TABLE IF EXISTS `records`;

CREATE TABLE `records`
(
  `id` int
(11) NOT NULL AUTO_INCREMENT,
  `name` varchar
(70) NOT NULL,
  `email` varchar
(70) DEFAULT NULL,
  `mobile` varchar
(15) DEFAULT NULL,
  `address` varchar
(200) DEFAULT NULL,
  PRIMARY KEY
(`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `records` */

insert  into `records`(`
id`,`name
`,`email`,`mobile`,`address`) values
(2,'ravindra','ravindra@gmail.com','8143675318','test'),
(4,'raghava','raghava@gmail.com','8143655522','gwk'),
(5,'raja','raja@gmail.com','9121662046','vizag');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
