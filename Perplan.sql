/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.18-MariaDB : Database - perplan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`perplan` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `perplan`;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `IDUSERS` int(100) NOT NULL AUTO_INCREMENT,
  `NOME` char(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `SENHA` varchar(20) NOT NULL,
  PRIMARY KEY (`IDUSERS`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`IDUSERS`,`NOME`,`EMAIL`,`SENHA`) values 
(7,'Guilherme','teste123@hotmail.com','123123');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
