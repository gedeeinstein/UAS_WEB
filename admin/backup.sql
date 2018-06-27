/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.16-MariaDB : Database - z_uas_web
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
  `deskripsi` varchar(240) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `barang` */

insert  into `barang`(`id_barang`,`gambar`,`sku`,`nama_barang`,`id_kategori`,`id_merek`,`id_gudang`,`stok`,`deskripsi`,`status`) values ('BRG01','-','-','Brang 1','KTG01','MRK01','GDG01',120,'-',1);

/*Table structure for table `barang_keluar` */

DROP TABLE IF EXISTS `barang_keluar`;

CREATE TABLE `barang_keluar` (
  `id_keluar` varchar(12) NOT NULL,
  `tujuan` varchar(120) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `tlp` varchar(120) NOT NULL,
  `tgl_keluar` date NOT NULL,
  PRIMARY KEY (`id_keluar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `barang_keluar` */

/*Table structure for table `barang_masuk` */

DROP TABLE IF EXISTS `barang_masuk`;

CREATE TABLE `barang_masuk` (
  `id_masuk` varchar(12) NOT NULL,
  `id_supplier` varchar(12) NOT NULL,
  `tgl_masuk` date NOT NULL,
  PRIMARY KEY (`id_masuk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `barang_masuk` */

/*Table structure for table `deatail_keluar` */

DROP TABLE IF EXISTS `deatail_keluar`;

CREATE TABLE `deatail_keluar` (
  `id` int(11) NOT NULL,
  `id_keluar` varchar(12) NOT NULL,
  `id_barang` varchar(12) NOT NULL,
  `qty` int(14) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `deatail_keluar` */

/*Table structure for table `detail_masuk` */

DROP TABLE IF EXISTS `detail_masuk`;

CREATE TABLE `detail_masuk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_masuk` varchar(120) NOT NULL,
  `id_barang` varchar(120) NOT NULL,
  `qty` int(12) NOT NULL,
  `id_supplier` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `detail_masuk` */

/*Table structure for table `gudang` */

DROP TABLE IF EXISTS `gudang`;

CREATE TABLE `gudang` (
  `id_gudang` varchar(12) NOT NULL,
  `nama_gudang` varchar(140) NOT NULL,
  PRIMARY KEY (`id_gudang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gudang` */

insert  into `gudang`(`id_gudang`,`nama_gudang`) values ('GDG01','Gudang 1');

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id_kategori` varchar(12) NOT NULL,
  `nm_kategori` varchar(140) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kategori` */

insert  into `kategori`(`id_kategori`,`nm_kategori`) values ('KTG01','Equipment');

/*Table structure for table `merek` */

DROP TABLE IF EXISTS `merek`;

CREATE TABLE `merek` (
  `id_merek` varchar(12) NOT NULL,
  `nm_merek` varchar(140) NOT NULL,
  PRIMARY KEY (`id_merek`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `merek` */

insert  into `merek`(`id_merek`,`nm_merek`) values ('MRK01','Non Merk');

/*Table structure for table `supplier` */

DROP TABLE IF EXISTS `supplier`;

CREATE TABLE `supplier` (
  `id_supplier` varchar(12) NOT NULL,
  `nm_supplier` varchar(140) NOT NULL,
  `alamat` varchar(140) NOT NULL,
  `email` varchar(140) NOT NULL,
  `telepon` varchar(120) NOT NULL,
  PRIMARY KEY (`id_supplier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `supplier` */

insert  into `supplier`(`id_supplier`,`nm_supplier`,`alamat`,`email`,`telepon`) values ('SUP01','Supplier 01','-','-','-');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` varchar(120) NOT NULL,
  `nama` varchar(140) NOT NULL,
  `email` varchar(140) NOT NULL,
  `password` varchar(140) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
