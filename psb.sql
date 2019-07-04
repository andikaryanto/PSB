/*
SQLyog Professional v12.4.3 (64 bit)
MySQL - 10.1.33-MariaDB : Database - psb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `kelas` */

DROP TABLE IF EXISTS `kelas`;

CREATE TABLE `kelas` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `NamaKelas` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `kelassiswa` */

DROP TABLE IF EXISTS `kelassiswa`;

CREATE TABLE `kelassiswa` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Kelas_Id` int(11) NOT NULL,
  `Peserta_Id` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `kelassiswa_Peserta_Id_fk` (`Peserta_Id`),
  KEY `kelassiswa_Kelas_Id_fk` (`Kelas_Id`),
  CONSTRAINT `kelassiswa_Kelas_Id_fk` FOREIGN KEY (`Kelas_Id`) REFERENCES `kelas` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `kelassiswa_Peserta_Id_fk` FOREIGN KEY (`Peserta_Id`) REFERENCES `peserta` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `matapelajaran` */

DROP TABLE IF EXISTS `matapelajaran`;

CREATE TABLE `matapelajaran` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `NamaMapel` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `nilaiujian` */

DROP TABLE IF EXISTS `nilaiujian`;

CREATE TABLE `nilaiujian` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Peserta_Id` int(11) NOT NULL,
  `Mapel_Id` int(11) NOT NULL,
  `Nilai` decimal(18,2) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `nilaiujian_Peserta_Id_fk` (`Peserta_Id`),
  KEY `nilaiujian_Mapel_Id_fk` (`Mapel_Id`),
  CONSTRAINT `nilaiujian_Mapel_Id_fk` FOREIGN KEY (`Mapel_Id`) REFERENCES `matapelajaran` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `nilaiujian_Peserta_Id_fk` FOREIGN KEY (`Peserta_Id`) REFERENCES `peserta` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `orangtua` */

DROP TABLE IF EXISTS `orangtua`;

CREATE TABLE `orangtua` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Peserta_Id` int(11) NOT NULL,
  `NamaLengkap` varchar(300) NOT NULL,
  `Pekerjaan` varchar(300) NOT NULL,
  `Agama` enum('Islam','Katolik','Kristen','Hindu','Budha') NOT NULL,
  `Alamat` varchar(1000) NOT NULL,
  `NamaWali` varchar(100) DEFAULT NULL,
  `PekerjaanWali` varchar(300) DEFAULT NULL,
  `AlamatWali` varchar(1000) DEFAULT NULL,
  `RT` varchar(5) NOT NULL,
  `RW` varchar(5) NOT NULL,
  `Kelurahan` varchar(100) NOT NULL,
  `Kecamatan` varchar(100) NOT NULL,
  `KodePos` varchar(10) NOT NULL,
  `NoTelp` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `orangtua_Peserta_Id_fk` (`Peserta_Id`),
  CONSTRAINT `orangtua_Peserta_Id_fk` FOREIGN KEY (`Peserta_Id`) REFERENCES `peserta` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `pengaturan` */

DROP TABLE IF EXISTS `pengaturan`;

CREATE TABLE `pengaturan` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `NamaPengaturan` varchar(100) NOT NULL,
  `TglMulaiPendafataran` datetime NOT NULL,
  `TglSelesaiPendaftaran` datetime NOT NULL,
  `TglPegumuman` datetime NOT NULL,
  `Aktif` smallint(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `pengguna` */

DROP TABLE IF EXISTS `pengguna`;

CREATE TABLE `pengguna` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Pengguna` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` smallint(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `peserta` */

DROP TABLE IF EXISTS `peserta`;

CREATE TABLE `peserta` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `NoDaftar` varchar(20) DEFAULT NULL,
  `NISN` varchar(50) NOT NULL,
  `NamaLengkap` varchar(300) NOT NULL,
  `JenisKelamin` enum('Laki - laki','Perempuan') NOT NULL,
  `TempatLahir` varchar(100) NOT NULL,
  `TglLahir` date NOT NULL,
  `Agama` enum('Islam','Katolik','Kristen','Hindu','Budha') NOT NULL,
  `Alamat` varchar(1000) NOT NULL,
  `RT` varchar(5) NOT NULL,
  `RW` varchar(5) NOT NULL,
  `Kelurahan` varchar(100) NOT NULL,
  `Kecamatan` varchar(100) NOT NULL,
  `KodePos` varchar(10) NOT NULL,
  `Domisili` varchar(1000) NOT NULL,
  `NoTelp` varchar(15) NOT NULL,
  `AsalSekolah` varchar(100) DEFAULT NULL,
  `AlamatSekolah` varchar(300) DEFAULT NULL,
  `StatusSekolah` varchar(300) DEFAULT NULL,
  `KartuMiskin` tinyint(1) DEFAULT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `prestasi` */

DROP TABLE IF EXISTS `prestasi`;

CREATE TABLE `prestasi` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Peserta_Id` int(11) NOT NULL,
  `NamaPrestasi` varchar(100) NOT NULL,
  `Nilai` decimal(18,2) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `prestasi_Peserta_Id_fk` (`Peserta_Id`),
  CONSTRAINT `prestasi_Peserta_Id_fk` FOREIGN KEY (`Peserta_Id`) REFERENCES `peserta` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
