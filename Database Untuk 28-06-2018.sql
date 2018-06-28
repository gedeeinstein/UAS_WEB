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
  `id_merk` varchar(12) NOT NULL,
  `id_gudang` varchar(12) NOT NULL,
  `stok` int(120) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` int(15) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `barang` */

insert  into `barang`(`id_barang`,`gambar`,`sku`,`nama_barang`,`id_kategori`,`id_merk`,`id_gudang`,`stok`,`deskripsi`,`status`) values ('BRG001','5b037982e29b6.jpg','GENSLIGSE112','GENERAL MEAT SLICER GSE 112-50','KTG007','MRK003','GUD001',100,'<p>\r\n\r\n</p><div>Make sausages, hamburgers, and more with this General meat grinder! Featuring a high power motor and stainless steel grinding knife, this meat grinder will grind 2-3 LBS of meat per minute. This grinder has options for forward and reverse operation and comes with 2 stainless steel grinding plates for medium and coarse grinds!</div><br>\r\n\r\n\r\n\r\n<h3>GENERAL MEAT MINCER GSM 50-50</h3><div><ul><li>Equipped with 5mm and 8mm extrusion discs.</li><li>Hub #12 head</li><li>Voltage: 120/60/1</li><li>(Also Available in 220/50/1 and 220/60/1)</li><li>Watts: 850</li><li>Power: 1.1 HP</li><li>Speed: 175 RPM</li><li>Weight: 52 LB/24 KG</li><li>Dimensions: 18 1/2? W x 8 3/4? D x 14 3/4? H</li><li>(470mm W x 222mm D x 375mm H)</li></ul></div>\r\n\r\n\r\n\r\n<div><strong>Features</strong></div><div><ul><li>Design is attractive with a smooth finish that is easy to clean.</li><li>Cast and polished aluminum body featuring a</li><li>stainless steel grind head and food tray.</li><li>Energy efficient motor and precision gear drive.</li><li>Compact design with all rounded corners.</li><li>Includes both a forward and reverse switch.</li><li>Supplied with two extruder discs and a food pusher.</li><li>Ideal for use in butcher shops, supermarkets, delis, pizza shops, and more!</li><li>Suited for continuous operation</li></ul><div><div><strong>EXTRUSION DISCS</strong></div><div><ul><li>Both units come equipped with</li><li>5mm and 8mm extrusion discs</li></ul></div></div></div>\r\n\r\n<br><p></p>',3),('BRG002','5b037982e29b6.jpg','GENSLIGSE115','GENERAL MEAT SLICER GSE 115-50','KTG008','MRK004','GUD002',50,'',4);

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

/*Table structure for table `status_tbl` */

DROP TABLE IF EXISTS `status_tbl`;

CREATE TABLE `status_tbl` (
  `id_status` int(15) NOT NULL,
  `nm_status` varchar(20) NOT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `status_tbl` */

insert  into `status_tbl`(`id_status`,`nm_status`) values (1,'AKTIF'),(2,'TIDAK AKTIF'),(3,'ADA'),(4,'TIDAK ADA'),(5,'INDENT'),(6,'ON SHIPPING');

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
