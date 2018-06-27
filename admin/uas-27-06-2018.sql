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

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `id_barang` varchar(12) NOT NULL,
  `gambar` varchar(120) NOT NULL,
  `sku` varchar(12) NOT NULL,
  `nama_barang` varchar(140) NOT NULL,
  `id_kategori` varchar(12) NOT NULL,
  `id_merek` varchar(12) NOT NULL,
  `id_gudang` varchar(12) NOT NULL,
  `stok` int(120) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `barang` */

insert  into `barang`(`id_barang`,`gambar`,`sku`,`nama_barang`,`id_kategori`,`id_merek`,`id_gudang`,`stok`,`deskripsi`,`status`) values ('BRG001','5b037982e29b6.jpg','GENSLIGSE112','GENERAL MEAT SLICER GSE 112-50','KTG001','MRK001','GENERAL MEAT',100,'','active');

/*Table structure for table `gudang` */

DROP TABLE IF EXISTS `gudang`;

CREATE TABLE `gudang` (
  `id_gudang` varchar(12) NOT NULL,
  `nama_gudang` varchar(120) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id_gudang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gudang` */

insert  into `gudang`(`id_gudang`,`nama_gudang`,`alamat`) values ('GUD001','Star East Kitchen','Jalan Sunset Road No. 168, Kuta, Badung, Bali'),('GUD002','PT. Dapur Inspirasi Nusantara','Jalan Mertasari No. 68F, Suwung, Batan Kendal, Sidakarya, Denpasar Selatan, Denpasar, Bali');

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id_kategori` varchar(12) NOT NULL,
  `nm_kategori` varchar(120) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kategori` */

insert  into `kategori`(`id_kategori`,`nm_kategori`,`status`) values ('KTG001','ALAT KERJA','active'),('KTG002','ALAT TULIS KANTOR','active'),('KTG003','BY OWNER','active'),('KTG004','CUSTOM','active'),('KTG005','DELUXE','active'),('KTG006','EQUIPMENT','active'),('KTG007','GETRA','active'),('KTG008','GWF','active'),('KTG009','MATERIAL','active'),('KTG010','PERALATAN','active'),('KTG011','PERLENGKAPAN','active'),('KTG012','PLAT','active'),('KTG013','RANGE','active'),('KTG014','KOMPUTER','active');

/*Table structure for table `merk` */

DROP TABLE IF EXISTS `merk`;

CREATE TABLE `merk` (
  `id_merk` varchar(12) NOT NULL,
  `nm_merk` varchar(50) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_merk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `merk` */

insert  into `merk`(`id_merk`,`nm_merk`,`status`) values ('MRK001','ATMCOOL','active'),('MRK003','SUNEAST','active'),('MRK004','LOTUS','active'),('MRK005','GEA GETRA','active');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(160) DEFAULT NULL,
  `hp` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
