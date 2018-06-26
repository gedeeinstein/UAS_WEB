/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.31-MariaDB : Database - z_uas_web
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`z_uas_web` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `z_uas_web`;

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id_kategori` VARCHAR(12) NOT NULL,
  `nm_kategori` VARCHAR(120) NOT NULL,
  `status` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=INNODB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `kategori` */

INSERT  INTO `kategori`(`id_kategori`,`nm_kategori`,`status`) VALUES (1,'ALAT KERJA','active'),(2,'ALAT TULIS KANTOR','active'),(3,'BY OWNER','active'),(4,'CUSTOM','active'),(5,'DELUXE','active'),(6,'EQUIPMENT','active'),(7,'GETRA','active'),(8,'GWF','active'),(9,'MATERIAL','active'),(10,'PERALATAN','active'),(11,'PERLENGKAPAN','active'),(12,'PLAT','active'),(13,'RANGE','active');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;


INSERT  INTO `kategori`(`id_kategori`,`nm_kategori`,`status`) 
VALUES ('KG0001','ALAT KERJA','active'),
('KG0002','ALAT TULIS KANTOR','active'),
('KG0003','BY OWNER','active'),
('KG0004','CUSTOM','active'),
('KG0005','DELUXE','active'),
('KG0006','EQUIPMENT','active'),
('KG0007','GETRA','active'),
('KG0008','GWF','active'),
('KG0009','MATERIAL','active'),
('KG0010','PERALATAN','active'),
('KG0011','PERLENGKAPAN','active'),
('KG0012','PLAT','active'),
('KG0013','RANGE','active');
