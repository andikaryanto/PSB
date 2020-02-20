DROP TABLE IF EXISTS daftarulang;

CREATE TABLE `daftarulang` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Peserta_Id` int(11) NOT NULL,
  `TahunAjaran_Id` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `daftarulang_Peserta_Id_fk` (`Peserta_Id`),
  KEY `daftarulang_TahunAjaran_Id_fk` (`TahunAjaran_Id`),
  CONSTRAINT `daftarulang_Peserta_Id_fk` FOREIGN KEY (`Peserta_Id`) REFERENCES `peserta` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `daftarulang_TahunAjaran_Id_fk` FOREIGN KEY (`TahunAjaran_Id`) REFERENCES `tahunajaran` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES daftarulang WRITE;
UNLOCK TABLES;

DROP TABLE IF EXISTS kabupaten;

CREATE TABLE `kabupaten` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

LOCK TABLES kabupaten WRITE;
INSERT INTO kabupaten (Id, Nama) VALUES ('1', 'Bantul'), ('2', 'Gunung Kidul'), ('3', 'Kulon Progo'), ('4', 'Sleman'), ('5', 'Kota Yogyakarta');
UNLOCK TABLES;

DROP TABLE IF EXISTS kecamatan;

CREATE TABLE `kecamatan` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(50) NOT NULL,
  `Kabupaten_Id` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `kabupaten_kecamatan` (`Kabupaten_Id`),
  CONSTRAINT `kabupaten_kecamatan` FOREIGN KEY (`Kabupaten_Id`) REFERENCES `kabupaten` (`Id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;

LOCK TABLES kecamatan WRITE;
INSERT INTO kecamatan (Id, Nama, Kabupaten_Id) VALUES ('8', 'Bambanglipuro', '1'), ('10', 'Banguntapan', '1'), ('11', 'Bantul', '1'), ('12', 'Dlingo', '1'), ('13', 'Imogiri', '1'), ('14', 'Jetis', '1'), ('15', 'Kasihan', '1'), ('16', 'Kretek', '1'), ('17', 'Pajangan', '1'), ('18', 'Pandak', '1'), ('19', 'Piyungan', '1'), ('20', 'Pleret', '1'), ('21', 'Pundong', '1'), ('22', 'Sanden', '1'), ('23', 'Sedayu', '1'), ('24', 'Sewon', '1'), ('25', 'Srandakan', '1'), ('26', 'Gedangsari', '2'), ('27', 'Girisubo', '2'), ('28', 'Karangmojo', '2'), ('29', 'Ngawen', '2'), ('30', 'Nglipar', '2'), ('31', 'Paliyan', '2'), ('32', 'Panggang', '2'), ('33', 'Patuk', '2'), ('34', 'Playen', '2'), ('35', 'Ponjong', '2'), ('36', 'Purwosari', '2'), ('37', 'Rongkop', '2'), ('38', 'Saptosari', '2'), ('39', 'Semanu', '2'), ('40', 'Semin', '2'), ('41', 'Tanjungsari', '2'), ('42', 'Tepus', '2'), ('43', 'Wonosari', '2'), ('44', 'Galur', '3'), ('45', 'Girimulyo', '3'), ('46', 'Kalibawang', '3'), ('47', 'Kokap', '3'), ('48', 'Lendah', '3'), ('49', 'Nanggulan', '3'), ('51', 'Panjatan', '3'), ('52', 'Pengasih', '3'), ('53', 'Samigaluh', '3'), ('54', 'Sentolo', '3'), ('55', 'Temon', '3'), ('56', 'Wates', '3'), ('57', 'Berbah', '4'), ('58', 'Cangkringan', '4'), ('59', 'Depok', '4'), ('60', 'Gamping', '4'), ('61', 'Godean', '4'), ('62', 'Kalasan', '4'), ('63', 'Minggir', '4'), ('64', 'Mlati', '4'), ('65', 'Moyudan', '4'), ('66', 'Ngaglik', '4'), ('67', 'Ngemplak', '4'), ('68', 'Pakem', '4'), ('69', 'Prambanan', '4'), ('70', 'Sayegan', '4'), ('71', 'Sleman', '4'), ('72', 'Tempel', '4'), ('73', 'Turi', '4'), ('74', 'Danurejan', '5'), ('75', 'Gedongtengen', '5'), ('76', 'Gondokusuman', '5'), ('77', 'Gondomanan', '5'), ('78', 'Jetis', '5'), ('79', 'Kotagede', '5'), ('80', 'Kraton', '5'), ('81', 'Mantrijeron', '5'), ('82', 'Mergangsan', '5'), ('83', 'Ngampilan', '5'), ('85', 'Pakualaman', '5'), ('87', 'Tegalrejo', '5'), ('88', 'Umbulharjo', '5'), ('89', 'Wirobrajan', '5');
UNLOCK TABLES;

DROP TABLE IF EXISTS matapelajaran;

CREATE TABLE `matapelajaran` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `NamaMapel` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

LOCK TABLES matapelajaran WRITE;
INSERT INTO matapelajaran (Id, NamaMapel) VALUES ('1', 'Bahasa Indonesia'), ('2', 'Matematika'), ('3', 'Ipa');
UNLOCK TABLES;

DROP TABLE IF EXISTS migrations;

CREATE TABLE `migrations` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Version` varchar(50) DEFAULT NULL,
  `ExecutedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES migrations WRITE;
UNLOCK TABLES;

DROP TABLE IF EXISTS nilaiujian;

CREATE TABLE `nilaiujian` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Peserta_Id` int(11) NOT NULL,
  `Mapel_Id` int(11) NOT NULL,
  `Nilai` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `nilaiujian_Peserta_Id_fk` (`Peserta_Id`),
  KEY `nilaiujian_Mapel_Id_fk` (`Mapel_Id`),
  CONSTRAINT `nilaiujian_Mapel_Id_fk` FOREIGN KEY (`Mapel_Id`) REFERENCES `matapelajaran` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `nilaiujian_Peserta_Id_fk` FOREIGN KEY (`Peserta_Id`) REFERENCES `peserta` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=253 DEFAULT CHARSET=utf8;

LOCK TABLES nilaiujian WRITE;
INSERT INTO nilaiujian (Id, Peserta_Id, Mapel_Id, Nilai) VALUES ('232', '70', '1', '100.00'), ('233', '70', '2', '90.80'), ('234', '70', '3', '70.80'), ('235', '71', '1', '55.90'), ('236', '71', '2', '40.30'), ('237', '71', '3', '30.50'), ('238', '72', '1', '100.00'), ('239', '72', '2', '90.70'), ('240', '72', '3', '80.60'), ('241', '73', '1', '80.90'), ('242', '73', '2', '60.80'), ('243', '73', '3', '90.70'), ('244', '74', '1', '80.70'), ('245', '74', '2', '80.60'), ('246', '74', '3', '90.70'), ('247', '75', '1', '45.00'), ('248', '75', '2', '80.40'), ('249', '75', '3', '90.50'), ('250', '76', '1', '70.50'), ('251', '76', '2', '67.50'), ('252', '76', '3', '90.50');
UNLOCK TABLES;

DROP TABLE IF EXISTS orangtua;

CREATE TABLE `orangtua` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Peserta_Id` int(11) NOT NULL,
  `NamaLengkap` varchar(100) NOT NULL,
  `Pekerjaan` varchar(50) NOT NULL,
  `Agama` enum('Islam','Katolik','Kristen','Hindu','Budha','Konghucu') NOT NULL,
  `Alamat` varchar(350) NOT NULL,
  `NamaWali` varchar(100) DEFAULT NULL,
  `PekerjaanWali` varchar(50) DEFAULT NULL,
  `AlamatWali` varchar(350) DEFAULT NULL,
  `RT` varchar(5) NOT NULL,
  `RW` varchar(5) NOT NULL,
  `Kabupaten_Id` int(11) NOT NULL,
  `Kecamatan_Id` int(11) NOT NULL,
  `KodePos` varchar(5) NOT NULL,
  `NoTelp` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `orangtua_Peserta_Id_fk` (`Peserta_Id`),
  CONSTRAINT `orangtua_Peserta_Id_fk` FOREIGN KEY (`Peserta_Id`) REFERENCES `peserta` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;

LOCK TABLES orangtua WRITE;
INSERT INTO orangtua (Id, Peserta_Id, NamaLengkap, Pekerjaan, Agama, Alamat, NamaWali, PekerjaanWali, AlamatWali, RT, RW, Kabupaten_Id, Kecamatan_Id, KodePos, NoTelp) VALUES ('76', '70', 'Sulastri', 'Petani', 'Islam', 'Godean, RT 05 / RW 01, Sleman, Yogyakarta', '', NULL, NULL, '', '', '1', '8', '55432', '087833640980'), ('77', '71', 'Sujiwo', 'Swasta', 'Islam', 'Sleman', '', NULL, NULL, '', '', '1', '8', '77588', '977777777777'), ('78', '72', 'Tejo', 'PNS', 'Islam', 'Sleman', '', NULL, NULL, '', '', '1', '8', '97878', '736687466666'), ('79', '73', 'Suyono', 'Swasta', 'Islam', 'Sleman', '', NULL, NULL, '', '', '1', '8', '87456', '987878789787'), ('80', '74', 'Sutaji', 'Swasta', 'Islam', 'Mlati, Sleman, Yogyakarta', '', NULL, NULL, '', '', '1', '8', '59155', '082153740040'), ('81', '75', 'Setyo', 'Swasta', 'Islam', 'Dusun Trini, Mlati, Sleman', '', NULL, NULL, '', '', '1', '8', '59800', '087833640980'), ('82', '76', 'Sutaji', 'Swasta', 'Islam', 'Sleman', '', NULL, NULL, '', '', '1', '8', '43555', '087833640980');
UNLOCK TABLES;

DROP TABLE IF EXISTS pendaftaran;

CREATE TABLE `pendaftaran` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `TglDaftar` datetime NOT NULL,
  `Peserta_Id` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `pendaftaran_Peserta_Id_fk` (`Peserta_Id`),
  CONSTRAINT `pendaftaran_Peserta_Id_fk` FOREIGN KEY (`Peserta_Id`) REFERENCES `peserta` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES pendaftaran WRITE;
UNLOCK TABLES;

DROP TABLE IF EXISTS pengaturan;

CREATE TABLE `pengaturan` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `NamaPengaturan` varchar(100) NOT NULL,
  `TglMulaiPendaftaran` datetime NOT NULL,
  `TglSelesaiPendaftaran` datetime NOT NULL,
  `TglPengumuman` datetime NOT NULL,
  `JumlahDiterima` int(11) NOT NULL,
  `Aktif` smallint(1) NOT NULL,
  `KepalaSekolah` varchar(75) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

LOCK TABLES pengaturan WRITE;
INSERT INTO pengaturan (Id, NamaPengaturan, TglMulaiPendaftaran, TglSelesaiPendaftaran, TglPengumuman, JumlahDiterima, Aktif, KepalaSekolah) VALUES ('3', '', '2020-02-01T00:00:00', '2020-02-17T23:59:59', '2020-02-18T00:00:00', '10', '1', 'Moch Yusuf Sugeng.S., M.Si');
UNLOCK TABLES;

DROP TABLE IF EXISTS pengguna;

CREATE TABLE `pengguna` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Pengguna` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Level` smallint(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

LOCK TABLES pengguna WRITE;
INSERT INTO pengguna (Id, Pengguna, Password, Level) VALUES ('2', 'superadmin', 'superadmin', '0');
UNLOCK TABLES;

DROP TABLE IF EXISTS pengumuman;

CREATE TABLE `pengumuman` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Peserta_Id` int(11) NOT NULL,
  `TahunAjaran_Id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `pengumuman_Peserta_Id_fk` (`Peserta_Id`),
  CONSTRAINT `pengumuman_Peserta_Id_fk` FOREIGN KEY (`Peserta_Id`) REFERENCES `peserta` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

LOCK TABLES pengumuman WRITE;
INSERT INTO pengumuman (Id, Peserta_Id, TahunAjaran_Id) VALUES ('11', '72', '2'), ('12', '70', '2'), ('13', '74', '2'), ('14', '73', '2'), ('15', '76', '2'), ('16', '75', '2'), ('17', '71', '2');
UNLOCK TABLES;

DROP TABLE IF EXISTS peserta;

CREATE TABLE `peserta` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `NoDaftar` varchar(20) DEFAULT NULL,
  `NISN` varchar(50) NOT NULL,
  `NamaLengkap` varchar(150) NOT NULL,
  `JenisKelamin` enum('Laki - laki','Perempuan') NOT NULL,
  `TempatLahir` varchar(100) NOT NULL,
  `TglLahir` date NOT NULL,
  `Agama` enum('Islam','Katolik','Kristen','Hindu','Budha','Konghucu') NOT NULL,
  `Alamat` varchar(350) NOT NULL,
  `RT` varchar(5) NOT NULL,
  `RW` varchar(5) NOT NULL,
  `Kabupaten_Id` int(11) NOT NULL,
  `Kecamatan_Id` int(11) NOT NULL,
  `KodePos` varchar(10) NOT NULL,
  `Domisili` varchar(350) NOT NULL,
  `NoTelp` varchar(15) NOT NULL,
  `AsalSekolah` varchar(50) DEFAULT NULL,
  `AlamatSekolah` varchar(300) DEFAULT NULL,
  `StatusSekolah` enum('Negeri','Swasta') DEFAULT NULL,
  `KartuMiskin` tinyint(1) DEFAULT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `Tahunajaran_Id` int(11) DEFAULT NULL,
  `UrlPhoto` varchar(1000) DEFAULT NULL,
  `TahunLulus` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `peserta_Tahunajaran_Id_fk` (`Tahunajaran_Id`),
  CONSTRAINT `peserta_Tahunajaran_Id_fk` FOREIGN KEY (`Tahunajaran_Id`) REFERENCES `tahunajaran` (`Id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8;

LOCK TABLES peserta WRITE;
INSERT INTO peserta (Id, NoDaftar, NISN, NamaLengkap, JenisKelamin, TempatLahir, TglLahir, Agama, Alamat, RT, RW, Kabupaten_Id, Kecamatan_Id, KodePos, Domisili, NoTelp, AsalSekolah, AlamatSekolah, StatusSekolah, KartuMiskin, Status, Tahunajaran_Id, UrlPhoto, TahunLulus) VALUES ('70', 'REG0070WT', '0069142187', 'Muh Abdul', 'Laki - laki', 'Pati', '2004-09-05T00:00:00', 'Islam', 'Sleman', '', '', '1', '8', '59155', 'Trini, RT 06 / RW 03, Mlati, Sleman, Yogyakarta', '082153740040', 'SD Negeri Petinggen', 'Sleman, Yogyakarta', 'Negeri', 'False', 'False', '2', 'uploads/20200131_140327-3163111024.jpg', '2020'), ('71', 'REG0071BI', '0006789777', 'Adi Sucipto', 'Laki - laki', 'Pati', '2004-11-01T00:00:00', 'Islam', 'Pati', '', '', '1', '8', '49155', 'Sleman', '089348888888', 'SD Terban', 'Sleman', 'Swasta', 'False', 'False', '2', 'uploads/20200131_161414-3163111024.jpg', '2020'), ('72', 'REG0072RE', '3676744444', 'Dwi Nurul', 'Perempuan', 'Sleman', '2004-10-01T00:00:00', 'Islam', 'sleman', '', '', '1', '8', '76868', 'Sleman', '878787867676', 'SD Muh 3 Mlati', 'Sleman', 'Swasta', 'False', 'False', '2', 'uploads/20200131_162734-3163111019.jpg', '2020'), ('73', 'REG0073UQ', '8784786374', 'Dwi Nurul Aprilia', 'Perempuan', 'Sleman', '2004-11-01T00:00:00', 'Islam', '', '', '', '1', '8', '55285', 'Sleman', '087833640980', 'SD Sinduadi ', 'Sinduadi, Sleman', 'Swasta', 'False', 'False', '2', 'uploads/20200203_130134-fc723216c6ab8c6c707db01021b22bee.jpg', '2020'), ('74', 'REG0074PY', '0047687767', 'Setyo Adi', 'Laki - laki', 'Sleman', '2004-11-02T00:00:00', 'Islam', '', '', '', '1', '8', '59155', 'Mlati, Sleman', '087833640980', 'SD Muhammadiyah 3', 'Wirobrajan', 'Swasta', 'False', 'False', '2', 'uploads/20200208_093410-3163111024.jpg', '2020'), ('75', 'REG0075LD', '5438700076', 'Zulfia Rohmah', 'Perempuan', 'Jepara', '2004-09-01T00:00:00', 'Islam', 'Jepara', '', '', '1', '8', '58388', 'Sleman', '087833640980', 'SD Negeri ', 'Jl. Panglima Sudirman', 'Negeri', 'False', 'False', '2', 'uploads/20200213_162815-FOTO_Aula Zulfia Rohmah.jpeg', '2020'), ('76', 'REG0076BV', '9865347775', 'Steven Edwin', 'Perempuan', 'Pati', '2003-07-09T00:00:00', 'Islam', '', '', '', '1', '8', '59155', 'Mlati Sleman', '087833640980', 'SDN Tempel 1', 'Desa Tempel', 'Negeri', 'False', 'False', '2', 'uploads/20200214_233824-FOTO_Ageng Nugroho Adi.jpg', '2020');
UNLOCK TABLES;

DROP TABLE IF EXISTS prestasi;

CREATE TABLE `prestasi` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Peserta_Id` int(11) NOT NULL,
  `NamaPrestasi` varchar(100) NOT NULL,
  `Nilai` decimal(18,2) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `prestasi_Peserta_Id_fk` (`Peserta_Id`),
  CONSTRAINT `prestasi_Peserta_Id_fk` FOREIGN KEY (`Peserta_Id`) REFERENCES `peserta` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

LOCK TABLES prestasi WRITE;
INSERT INTO prestasi (Id, Peserta_Id, NamaPrestasi, Nilai) VALUES ('1', '75', 'Lomba Mewarnai', '1.00');
UNLOCK TABLES;

DROP TABLE IF EXISTS siswa;

CREATE TABLE `siswa` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Peserta_Id` int(11) NOT NULL,
  `TahunAjaran_Id` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `siswa_Peserta_Id_fk` (`Peserta_Id`),
  KEY `siswa_TahunAjaran_Id_fk` (`TahunAjaran_Id`),
  CONSTRAINT `siswa_Peserta_Id_fk` FOREIGN KEY (`Peserta_Id`) REFERENCES `peserta` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `siswa_TahunAjaran_Id_fk` FOREIGN KEY (`TahunAjaran_Id`) REFERENCES `tahunajaran` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES siswa WRITE;
UNLOCK TABLES;

DROP TABLE IF EXISTS tahunajaran;

CREATE TABLE `tahunajaran` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(50) NOT NULL,
  `Deskripsi` varchar(100) NOT NULL,
  `Tahun` datetime NOT NULL,
  `Aktif` smallint(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

LOCK TABLES tahunajaran WRITE;
INSERT INTO tahunajaran (Id, Nama, Deskripsi, Tahun, Aktif) VALUES ('2', 'Tahun Ajaran 2019 - 2020', 'Tahun Ajaran Baru 2020', '2020-01-01T07:00:00', '1'), ('3', 'Tahun Ajaran 2020/2021', 'Tahun Ajaran 2020/2021', '2020-02-22T07:00:00', '0');
UNLOCK TABLES;

