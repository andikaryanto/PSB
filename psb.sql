-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2020 at 11:05 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psb`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftarulang`
--

CREATE TABLE `daftarulang` (
  `Id` int(11) NOT NULL,
  `Peserta_Id` int(11) NOT NULL,
  `TahunAjaran_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `daftarulang`
--

INSERT INTO `daftarulang` (`Id`, `Peserta_Id`, `TahunAjaran_Id`) VALUES
(1, 42, 2);

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `Id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`Id`, `Nama`) VALUES
(1, 'Bantul'),
(2, 'Gunung Kidul'),
(3, 'Kulon Progo'),
(4, 'Sleman'),
(5, 'Kota Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `Id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Kabupaten_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`Id`, `Nama`, `Kabupaten_Id`) VALUES
(8, 'Bambanglipuro', 1),
(10, 'Banguntapan', 1),
(11, 'Bantul', 1),
(12, 'Dlingo', 1),
(13, 'Imogiri', 1),
(14, 'Jetis', 1),
(15, 'Kasihan', 1),
(16, 'Kretek', 1),
(17, 'Pajangan', 1),
(18, 'Pandak', 1),
(19, 'Piyungan', 1),
(20, 'Pleret', 1),
(21, 'Pundong', 1),
(22, 'Sanden', 1),
(23, 'Sedayu', 1),
(24, 'Sewon', 1),
(25, 'Srandakan', 1),
(26, 'Gedangsari', 2),
(27, 'Girisubo', 2),
(28, 'Karangmojo', 2),
(29, 'Ngawen', 2),
(30, 'Nglipar', 2),
(31, 'Paliyan', 2),
(32, 'Panggang', 2),
(33, 'Patuk', 2),
(34, 'Playen', 2),
(35, 'Ponjong', 2),
(36, 'Purwosari', 2),
(37, 'Rongkop', 2),
(38, 'Saptosari', 2),
(39, 'Semanu', 2),
(40, 'Semin', 2),
(41, 'Tanjungsari', 2),
(42, 'Tepus', 2),
(43, 'Wonosari', 2),
(44, 'Galur', 3),
(45, 'Girimulyo', 3),
(46, 'Kalibawang', 3),
(47, 'Kokap', 3),
(48, 'Lendah', 3),
(49, 'Nanggulan', 3),
(51, 'Panjatan', 3),
(52, 'Pengasih', 3),
(53, 'Samigaluh', 3),
(54, 'Sentolo', 3),
(55, 'Temon', 3),
(56, 'Wates', 3),
(57, 'Berbah', 4),
(58, 'Cangkringan', 4),
(59, 'Depok', 4),
(60, 'Gamping', 4),
(61, 'Godean', 4),
(62, 'Kalasan', 4),
(63, 'Minggir', 4),
(64, 'Mlati', 4),
(65, 'Moyudan', 4),
(66, 'Ngaglik', 4),
(67, 'Ngemplak', 4),
(68, 'Pakem', 4),
(69, 'Prambanan', 4),
(70, 'Sayegan', 4),
(71, 'Sleman', 4),
(72, 'Tempel', 4),
(73, 'Turi', 4),
(74, 'Danurejan', 5),
(75, 'Gedongtengen', 5),
(76, 'Gondokusuman', 5),
(77, 'Gondomanan', 5),
(78, 'Jetis', 5),
(79, 'Kotagede', 5),
(80, 'Kraton', 5),
(81, 'Mantrijeron', 5),
(82, 'Mergangsan', 5),
(83, 'Ngampilan', 5),
(85, 'Pakualaman', 5),
(87, 'Tegalrejo', 5),
(88, 'Umbulharjo', 5),
(89, 'Wirobrajan', 5);

-- --------------------------------------------------------

--
-- Table structure for table `matapelajaran`
--

CREATE TABLE `matapelajaran` (
  `Id` int(11) NOT NULL,
  `NamaMapel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `matapelajaran`
--

INSERT INTO `matapelajaran` (`Id`, `NamaMapel`) VALUES
(1, 'Bahasa Indonesia'),
(2, 'Matematika'),
(3, 'Ipa');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `Id` int(11) NOT NULL,
  `Version` varchar(50) DEFAULT NULL,
  `ExecutedAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nilaiujian`
--

CREATE TABLE `nilaiujian` (
  `Id` int(11) NOT NULL,
  `Peserta_Id` int(11) NOT NULL,
  `Mapel_Id` int(11) NOT NULL,
  `Nilai` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nilaiujian`
--

INSERT INTO `nilaiujian` (`Id`, `Peserta_Id`, `Mapel_Id`, `Nilai`) VALUES
(253, 42, 1, '80.60'),
(254, 42, 2, '60.90'),
(255, 42, 3, '70.80'),
(256, 43, 1, '80.60'),
(257, 43, 2, '60.90'),
(258, 43, 3, '70.80');

-- --------------------------------------------------------

--
-- Table structure for table `orangtua`
--

CREATE TABLE `orangtua` (
  `Id` int(11) NOT NULL,
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
  `NoTelp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orangtua`
--

INSERT INTO `orangtua` (`Id`, `Peserta_Id`, `NamaLengkap`, `Pekerjaan`, `Agama`, `Alamat`, `NamaWali`, `PekerjaanWali`, `AlamatWali`, `RT`, `RW`, `Kabupaten_Id`, `Kecamatan_Id`, `KodePos`, `NoTelp`) VALUES
(83, 42, 'Surya', 'Swasta', 'Islam', 'Sleman', '', NULL, NULL, '', '', 4, 64, '87898', '089757567756'),
(84, 43, 'Surya', 'Swasta', 'Islam', 'Sleman', '', NULL, NULL, '', '', 4, 8, '87898', '089757567756');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `Id` int(11) NOT NULL,
  `TglDaftar` datetime NOT NULL,
  `Peserta_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE `pengaturan` (
  `Id` int(11) NOT NULL,
  `NamaPengaturan` varchar(100) NOT NULL,
  `TglMulaiPendaftaran` datetime NOT NULL,
  `TglSelesaiPendaftaran` datetime NOT NULL,
  `TglPengumuman` datetime NOT NULL,
  `JumlahDiterima` int(11) NOT NULL,
  `Aktif` smallint(1) NOT NULL,
  `KepalaSekolah` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`Id`, `NamaPengaturan`, `TglMulaiPendaftaran`, `TglSelesaiPendaftaran`, `TglPengumuman`, `JumlahDiterima`, `Aktif`, `KepalaSekolah`) VALUES
(3, '', '2020-02-01 00:00:00', '2020-02-21 23:59:59', '2020-02-21 00:00:00', 1, 1, 'Ageng.S., M.Si');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `Id` int(11) NOT NULL,
  `Pengguna` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Level` smallint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`Id`, `Pengguna`, `Password`, `Level`) VALUES
(2, 'superadmin', 'superadmin', 0),
(3, 'sekertaris', '234', 1),
(4, 'tu', '234', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `Id` int(11) NOT NULL,
  `Peserta_Id` int(11) NOT NULL,
  `TahunAjaran_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`Id`, `Peserta_Id`, `TahunAjaran_Id`) VALUES
(18, 42, 2);

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `Id` int(11) NOT NULL,
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
  `TahunLulus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`Id`, `NoDaftar`, `NISN`, `NamaLengkap`, `JenisKelamin`, `TempatLahir`, `TglLahir`, `Agama`, `Alamat`, `RT`, `RW`, `Kabupaten_Id`, `Kecamatan_Id`, `KodePos`, `Domisili`, `NoTelp`, `AsalSekolah`, `AlamatSekolah`, `StatusSekolah`, `KartuMiskin`, `Status`, `Tahunajaran_Id`, `UrlPhoto`, `TahunLulus`) VALUES
(42, 'REG0042EI', '8798798798', 'Adi Nugraha', 'Laki - laki', 'Pati', '2004-10-08', 'Islam', 'Pati', '', '', 4, 64, '86568', 'Mlati, Sleman', '098767678887', 'SD Mlati 3', 'Sleman', 'Negeri', 0, 0, 2, 'uploads/20200221_085822-5160211078.jpg', 2020),
(43, 'REG0043WL', '8798798798', 'Adi Nugraha', 'Laki - laki', 'Pati', '2004-10-08', 'Islam', 'Pati', '', '', 4, 8, '86568', 'Mlati, Sleman', '098767678887', 'SD Mlati 3', 'Sleman', 'Negeri', 0, 0, 2, 'uploads/20200221_090021-5160211078.jpg', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `Id` int(11) NOT NULL,
  `Peserta_Id` int(11) NOT NULL,
  `NamaPrestasi` varchar(100) NOT NULL,
  `Nilai` decimal(18,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `Id` int(11) NOT NULL,
  `Peserta_Id` int(11) NOT NULL,
  `TahunAjaran_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`Id`, `Peserta_Id`, `TahunAjaran_Id`) VALUES
(1, 42, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tahunajaran`
--

CREATE TABLE `tahunajaran` (
  `Id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Deskripsi` varchar(100) NOT NULL,
  `Tahun` datetime NOT NULL,
  `Aktif` smallint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tahunajaran`
--

INSERT INTO `tahunajaran` (`Id`, `Nama`, `Deskripsi`, `Tahun`, `Aktif`) VALUES
(2, 'Tahun Ajaran 2019/ 2020', 'Tahun Ajaran 2019 / 2020', '2019-10-12 05:00:00', 1),
(3, 'Tahun Ajaran 2020 / 2021', 'Tahun Ajaran 2020 / 2021', '2020-08-12 05:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftarulang`
--
ALTER TABLE `daftarulang`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `daftarulang_Peserta_Id_fk` (`Peserta_Id`),
  ADD KEY `daftarulang_TahunAjaran_Id_fk` (`TahunAjaran_Id`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `kabupaten_kecamatan` (`Kabupaten_Id`);

--
-- Indexes for table `matapelajaran`
--
ALTER TABLE `matapelajaran`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `nilaiujian`
--
ALTER TABLE `nilaiujian`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `nilaiujian_Peserta_Id_fk` (`Peserta_Id`),
  ADD KEY `nilaiujian_Mapel_Id_fk` (`Mapel_Id`);

--
-- Indexes for table `orangtua`
--
ALTER TABLE `orangtua`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `orangtua_Peserta_Id_fk` (`Peserta_Id`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `pendaftaran_Peserta_Id_fk` (`Peserta_Id`);

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `pengumuman_Peserta_Id_fk` (`Peserta_Id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `peserta_Tahunajaran_Id_fk` (`Tahunajaran_Id`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `prestasi_Peserta_Id_fk` (`Peserta_Id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `siswa_Peserta_Id_fk` (`Peserta_Id`),
  ADD KEY `siswa_TahunAjaran_Id_fk` (`TahunAjaran_Id`);

--
-- Indexes for table `tahunajaran`
--
ALTER TABLE `tahunajaran`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftarulang`
--
ALTER TABLE `daftarulang`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `matapelajaran`
--
ALTER TABLE `matapelajaran`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilaiujian`
--
ALTER TABLE `nilaiujian`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=259;

--
-- AUTO_INCREMENT for table `orangtua`
--
ALTER TABLE `orangtua`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tahunajaran`
--
ALTER TABLE `tahunajaran`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftarulang`
--
ALTER TABLE `daftarulang`
  ADD CONSTRAINT `daftarulang_Peserta_Id_fk` FOREIGN KEY (`Peserta_Id`) REFERENCES `peserta` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `daftarulang_TahunAjaran_Id_fk` FOREIGN KEY (`TahunAjaran_Id`) REFERENCES `tahunajaran` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD CONSTRAINT `kabupaten_kecamatan` FOREIGN KEY (`Kabupaten_Id`) REFERENCES `kabupaten` (`Id`) ON UPDATE CASCADE;

--
-- Constraints for table `nilaiujian`
--
ALTER TABLE `nilaiujian`
  ADD CONSTRAINT `nilaiujian_Mapel_Id_fk` FOREIGN KEY (`Mapel_Id`) REFERENCES `matapelajaran` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilaiujian_Peserta_Id_fk` FOREIGN KEY (`Peserta_Id`) REFERENCES `peserta` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orangtua`
--
ALTER TABLE `orangtua`
  ADD CONSTRAINT `orangtua_Peserta_Id_fk` FOREIGN KEY (`Peserta_Id`) REFERENCES `peserta` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `pendaftaran_Peserta_Id_fk` FOREIGN KEY (`Peserta_Id`) REFERENCES `peserta` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD CONSTRAINT `pengumuman_Peserta_Id_fk` FOREIGN KEY (`Peserta_Id`) REFERENCES `peserta` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `peserta`
--
ALTER TABLE `peserta`
  ADD CONSTRAINT `peserta_Tahunajaran_Id_fk` FOREIGN KEY (`Tahunajaran_Id`) REFERENCES `tahunajaran` (`Id`) ON UPDATE CASCADE;

--
-- Constraints for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD CONSTRAINT `prestasi_Peserta_Id_fk` FOREIGN KEY (`Peserta_Id`) REFERENCES `peserta` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_Peserta_Id_fk` FOREIGN KEY (`Peserta_Id`) REFERENCES `peserta` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_TahunAjaran_Id_fk` FOREIGN KEY (`TahunAjaran_Id`) REFERENCES `tahunajaran` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
