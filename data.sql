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
/*Data for the table `daftarulang` */

/*Data for the table `kabupaten` */

insert  into `kabupaten`(`Id`,`Nama`) values 
(1,'Bantul'),
(2,'Gunung Kidul'),
(3,'Kulon Progo'),
(4,'Sleman'),
(5,'Kota Yogyakarta');

/*Data for the table `kecamatan` */

insert  into `kecamatan`(`Id`,`Nama`,`Kabupaten_Id`) values 
(8,'Bambanglipuro',1),
(10,'Banguntapan',1),
(11,'Bantul',1),
(12,'Dlingo',1),
(13,'Imogiri',1),
(14,'Jetis',1),
(15,'Kasihan',1),
(16,'Kretek',1),
(17,'Pajangan',1),
(18,'Pandak',1),
(19,'Piyungan',1),
(20,'Pleret',1),
(21,'Pundong',1),
(22,'Sanden',1),
(23,'Sedayu',1),
(24,'Sewon',1),
(25,'Srandakan',1),
(26,'Gedangsari',2),
(27,'Girisubo',2),
(28,'Karangmojo',2),
(29,'Ngawen',2),
(30,'Nglipar',2),
(31,'Paliyan',2),
(32,'Panggang',2),
(33,'Patuk',2),
(34,'Playen',2),
(35,'Ponjong',2),
(36,'Purwosari',2),
(37,'Rongkop',2),
(38,'Saptosari',2),
(39,'Semanu',2),
(40,'Semin',2),
(41,'Tanjungsari',2),
(42,'Tepus',2),
(43,'Wonosari',2),
(44,'Galur',3),
(45,'Girimulyo',3),
(46,'Kalibawang',3),
(47,'Kokap',3),
(48,'Lendah',3),
(49,'Nanggulan',3),
(51,'Panjatan',3),
(52,'Pengasih',3),
(53,'Samigaluh',3),
(54,'Sentolo',3),
(55,'Temon',3),
(56,'Wates',3),
(57,'Berbah',4),
(58,'Cangkringan',4),
(59,'Depok',4),
(60,'Gamping',4),
(61,'Godean',4),
(62,'Kalasan',4),
(63,'Minggir',4),
(64,'Mlati',4),
(65,'Moyudan',4),
(66,'Ngaglik',4),
(67,'Ngemplak',4),
(68,'Pakem',4),
(69,'Prambanan',4),
(70,'Sayegan',4),
(71,'Sleman',4),
(72,'Tempel',4),
(73,'Turi',4),
(74,'Danurejan',5),
(75,'Gedongtengen',5),
(76,'Gondokusuman',5),
(77,'Gondomanan',5),
(78,'Jetis',5),
(79,'Kotagede',5),
(80,'Kraton',5),
(81,'Mantrijeron',5),
(82,'Mergangsan',5),
(83,'Ngampilan',5),
(85,'Pakualaman',5),
(87,'Tegalrejo',5),
(88,'Umbulharjo',5),
(89,'Wirobrajan',5);

/*Data for the table `matapelajaran` */

insert  into `matapelajaran`(`Id`,`NamaMapel`) values 
(1,'Bahasa Indonesia'),
(2,'Matematika'),
(3,'Ipa');

/*Data for the table `migrations` */

insert  into `migrations`(`Id`,`Version`,`ExecutedAt`) values 
(1,'20190701041211','2019-07-12 10:26:10'),
(2,'20190702043302','2019-07-12 10:26:10'),
(3,'20190703062206','2019-07-12 10:26:11'),
(4,'20190703063330','2019-07-12 10:26:11'),
(5,'20190703063405','2019-07-12 10:26:11'),
(6,'20190703063843','2019-07-12 10:26:11'),
(7,'20190703064643','2019-07-12 10:26:12'),
(8,'20190703064940','2019-07-12 10:26:12'),
(9,'20190703065111','2019-07-12 10:26:12'),
(10,'20190703070237','2019-07-12 10:26:12'),
(11,'20190930040246','2019-09-30 09:04:46'),
(12,'20190930040247','2019-09-30 09:06:31'),
(13,'20190930040248','2019-09-30 09:06:52'),
(14,'20190930042032','2019-09-30 09:21:06'),
(15,'20190930042033','2019-09-30 09:41:58'),
(16,'20190930045847','2019-09-30 09:59:38'),
(17,'20190930045919','2019-09-30 09:59:38'),
(18,'20191030024347','2019-10-30 08:45:11'),
(19,'20191030025633','2019-10-30 08:59:02');

/*Data for the table `nilaiujian` */

insert  into `nilaiujian`(`Id`,`Peserta_Id`,`Mapel_Id`,`Nilai`) values 
(133,37,1,8.00),
(134,37,2,8.00),
(135,37,3,8.00);

/*Data for the table `orangtua` */

insert  into `orangtua`(`Id`,`Peserta_Id`,`NamaLengkap`,`Pekerjaan`,`Agama`,`Alamat`,`NamaWali`,`PekerjaanWali`,`AlamatWali`,`RT`,`RW`,`Kabupaten_Id`,`Kecamatan_Id`,`KodePos`,`NoTelp`) values 
(43,37,'dasdasd','asdasdasd','Islam','asdasdasdads','',NULL,NULL,'','',1,1,'234234','23423434');

/*Data for the table `pendaftaran` */

/*Data for the table `pengaturan` */

insert  into `pengaturan`(`Id`,`NamaPengaturan`,`TglMulaiPendaftaran`,`TglSelesaiPendaftaran`,`TglPengumuman`,`JumlahDiterima`,`Aktif`) values 
(2,'','2019-11-04 00:00:00','2019-11-10 23:59:59','2019-11-11 00:00:00',160,1);

/*Data for the table `pengguna` */

insert  into `pengguna`(`Id`,`Pengguna`,`Password`,`Level`) values 
(1,'superadmin','superadmin',2);

/*Data for the table `pengumuman` */

/*Data for the table `peserta` */

insert  into `peserta`(`Id`,`NoDaftar`,`NISN`,`NamaLengkap`,`JenisKelamin`,`TempatLahir`,`TglLahir`,`Agama`,`Alamat`,`RT`,`RW`,`Kabupaten_Id`,`Kecamatan_Id`,`KodePos`,`Domisili`,`NoTelp`,`AsalSekolah`,`AlamatSekolah`,`StatusSekolah`,`KartuMiskin`,`Status`,`Tahunajaran_Id`,`UrlPhoto`) values 
(37,'REG0037','42424234','werwerwer','Perempuan','asdasd','2019-08-13','Islam','asd','','',1,1,'123123','asdasd','21313123','asdasd','asdasdasd','Negeri',0,0,1,'uploads/20191105_112816-hope.png');

/*Data for the table `prestasi` */

insert  into `prestasi`(`Id`,`Peserta_Id`,`NamaPrestasi`,`Nilai`) values 
(31,37,'dfsdf',3.00);

/*Data for the table `siswa` */

/*Data for the table `tahunajaran` */

insert  into `tahunajaran`(`Id`,`Nama`,`Deskripsi`,`Tahun`,`Aktif`) values 
(1,'Tahun Ajaran 2019/2020','Tahun Ajaran 2019/2020','2019-07-12 05:00:00',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
