/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 5.7.9 : Database - donation
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`donation` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `donation`;

/*Table structure for table `complaint` */

DROP TABLE IF EXISTS `complaint`;

CREATE TABLE `complaint` (
  `complaint_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `sendedby` varchar(30) DEFAULT NULL,
  `complint` varchar(30) DEFAULT NULL,
  `reply` varchar(30) DEFAULT NULL,
  `date` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`complaint_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `complaint` */

insert  into `complaint`(`complaint_id`,`login_id`,`sendedby`,`complint`,`reply`,`date`) values 
(1,4,'supplier','good','ok','2022-07-06'),
(2,4,'supplier','bad','bla','2022-07-06'),
(3,4,'supplier','asdfghj','pending','2022-07-06');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`login_id`,`username`,`password`,`type`) values 
(1,'admin','admin','admin'),
(2,'renuka','1234','block'),
(3,'shyam','12345','suppliers'),
(4,'anu','123456','suppliers'),
(5,'renuka','123456','members'),
(6,'sthyam','123','members'),
(7,'l',',','members'),
(8,'renuka','12345677','members'),
(9,'aaaaa','aaaaa','pending'),
(10,'aaaaa','bbbbb','suppliers');

/*Table structure for table `members` */

DROP TABLE IF EXISTS `members`;

CREATE TABLE `members` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `place` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pincode` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `members` */

insert  into `members`(`member_id`,`login_id`,`firstname`,`lastname`,`place`,`phone`,`email`,`pincode`) values 
(1,5,'renuka','kamath','ernakulam','9495736748','renukakamath@gmail.com','682999'),
(4,8,'renuka','kamath','ernakulam','9495736748','shyamkamath@gmail.com','682032');

/*Table structure for table `mrequest` */

DROP TABLE IF EXISTS `mrequest`;

CREATE TABLE `mrequest` (
  `mrequest_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `food` varchar(30) DEFAULT NULL,
  `description` varchar(30) DEFAULT NULL,
  `dateforfooddeliver` varchar(30) DEFAULT NULL,
  `date` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`mrequest_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `mrequest` */

insert  into `mrequest`(`mrequest_id`,`member_id`,`supplier_id`,`food`,`description`,`dateforfooddeliver`,`date`,`status`) values 
(1,1,1,'jkhg','have a nice day','2022-07-15','2022-07-04','accept'),
(2,1,1,'jkhg','no helmet','2022-07-17','2022-07-04','reject'),
(3,1,1,'jkhg','stop ','2022-07-10','2022-07-04','pending'),
(4,1,1,'jkhg','stop ','2022-07-10','2022-07-06','pending'),
(5,1,1,'jkhg','stop ','2022-07-15','2022-07-06','pending'),
(6,1,5,'hai','hello','2022-07-10','2022-07-06','pending'),
(7,1,5,'hai','hello','2022-07-10','2022-07-06','pick food');

/*Table structure for table `srequest` */

DROP TABLE IF EXISTS `srequest`;

CREATE TABLE `srequest` (
  `srequest_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `description` varchar(30) DEFAULT NULL,
  `datefordeliver` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`srequest_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `srequest` */

insert  into `srequest`(`srequest_id`,`member_id`,`supplier_id`,`description`,`datefordeliver`,`status`) values 
(1,1,2,'food','2022-07-23','ready'),
(2,1,2,'stop ','2022-07-08','pending');

/*Table structure for table `suppliers` */

DROP TABLE IF EXISTS `suppliers`;

CREATE TABLE `suppliers` (
  `supplier_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `place` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pincode` varchar(30) DEFAULT NULL,
  `licensenum` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`supplier_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `suppliers` */

insert  into `suppliers`(`supplier_id`,`login_id`,`first_name`,`last_name`,`place`,`phone`,`email`,`pincode`,`licensenum`) values 
(1,2,'renuka','kamath','ernakulam','9495736748','renukakamath@gmail.com','682032','7349863189'),
(2,3,'shyam','kamath','karanakodam','9495736748','shyam@gmail.com','682032','7349863189'),
(3,4,'anu','ddggd','thammanam','9495736748','anu@gmail.com','682032','7349863189'),
(4,9,'aaaaaa','aaaaaaa','aaaaaaaa','1234567890','renukakamath@gmail.com','682032','7349863189'),
(5,10,'aaaaa','bbbbb','aluva','9495736748','anu@gmail.com','682032','7349863189');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
