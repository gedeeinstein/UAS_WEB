/*
SQLyog Ultimate - MySQL GUI v8.21 
MySQL - 5.5.5-10.1.26-MariaDB : Database - db_kampus
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_kampus` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_kampus`;

/*Table structure for table `mahasiswa` */

DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `nim` char(10) NOT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mahasiswa` */

insert  into `mahasiswa`(`nim`,`nama`,`alamat`,`telp`) values ('','','',''),('10101111','Bona Boni','Jl. Tukad Pakerisan No. 97','087655333333'),('15101932','I Gede Adi Putra','Gianyar','081917316364'),('15101935','Eka Pramana Putra','Ubud','0918181819111');

/*Table structure for table `matakuliah` */

DROP TABLE IF EXISTS `matakuliah`;

CREATE TABLE `matakuliah` (
  `kode_mk` char(10) NOT NULL,
  `nama_mk` varchar(25) DEFAULT NULL,
  `sks` char(2) DEFAULT NULL,
  `semester` char(1) DEFAULT NULL,
  PRIMARY KEY (`kode_mk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `matakuliah` */

insert  into `matakuliah`(`kode_mk`,`nama_mk`,`sks`,`semester`) values ('MK-0001','Basis Data','3','4'),('MK-0002','Web II','3','7'),('MK-0003','Web I','4','6'),('MK-0004','Web III','3','7'),('MK-0006','Web IV','3','8');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` char(10) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id_user`,`username`,`password`) values ('USR-001','root','gedeadi'),('USR-002','root','gedeadisur'),('USR-0022','root','gedeadisurya12'),('USR-0023','','gedeeinstein'),('USR-0024','gedeeinstein','gedeeinstein'),('USR-003','root','gedeeinstein'),('USR-004','root','wkwkkw'),('USR-009','root','gedeeinste');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
