-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Apr 2020 pada 12.33
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.0.31

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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `Admin_Id` int(11) NOT NULL,
  `Pengguna` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Level` smallint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`Admin_Id`, `Pengguna`, `Password`, `Level`) VALUES
(2, 'superadmin', 'superadmin', 0),
(3, 'sekertaris', '123', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftarulang`
--

CREATE TABLE `daftarulang` (
  `Daftarulang_Id` int(11) NOT NULL,
  `Peserta_Id` int(11) NOT NULL,
  `TahunAjaran_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gelombang`
--

CREATE TABLE `gelombang` (
  `Gelombang_Id` int(11) NOT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `TanggalMulai` datetime DEFAULT NULL,
  `TanggalSelesai` datetime DEFAULT NULL,
  `Gelombamg_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gelombang`
--

INSERT INTO `gelombang` (`Gelombang_Id`, `Nama`, `TanggalMulai`, `TanggalSelesai`, `Gelombamg_Id`) VALUES
(1, 'Gelombang 1', '2020-03-01 00:00:00', '2020-03-31 23:59:59', NULL),
(2, 'Gelombang 3', '2020-05-01 00:00:00', '2020-05-31 23:59:59', NULL),
(3, 'Gelombang 2', '2020-04-01 00:00:00', '2020-04-30 23:59:59', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupaten`
--

CREATE TABLE `kabupaten` (
  `Kabupaten_Id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kabupaten`
--

INSERT INTO `kabupaten` (`Kabupaten_Id`, `Nama`) VALUES
(1, 'Bantul'),
(2, 'Gunung Kidul'),
(3, 'Kulon Progo'),
(4, 'Sleman'),
(5, 'Kota Yogyakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `Kecamatan_Id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Kabupaten_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`Kecamatan_Id`, `Nama`, `Kabupaten_Id`) VALUES
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
-- Struktur dari tabel `matapelajaran`
--

CREATE TABLE `matapelajaran` (
  `Mapel_Id` int(11) NOT NULL,
  `NamaMapel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `matapelajaran`
--

INSERT INTO `matapelajaran` (`Mapel_Id`, `NamaMapel`) VALUES
(1, 'Bahasa Indonesia'),
(2, 'Matematika'),
(3, 'Ipa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilaiujian`
--

CREATE TABLE `nilaiujian` (
  `Nilaiujian_Id` int(11) NOT NULL,
  `Peserta_Id` int(11) NOT NULL,
  `Mapel_Id` int(11) NOT NULL,
  `Nilai` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `orangtua`
--

CREATE TABLE `orangtua` (
  `Orangtua_Id` int(11) NOT NULL,
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `Pendaftaran_Id` int(11) NOT NULL,
  `TglDaftar` datetime NOT NULL,
  `Peserta_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE `pengaturan` (
  `Pengaturan_Id` int(11) NOT NULL,
  `NamaPengaturan` varchar(100) NOT NULL,
  `TglMulaiPendaftaran` datetime NOT NULL,
  `TglSelesaiPendaftaran` datetime NOT NULL,
  `TglPengumuman` datetime NOT NULL,
  `JumlahDiterima` int(11) NOT NULL,
  `Aktif` smallint(1) NOT NULL,
  `KepalaSekolah` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`Pengaturan_Id`, `NamaPengaturan`, `TglMulaiPendaftaran`, `TglSelesaiPendaftaran`, `TglPengumuman`, `JumlahDiterima`, `Aktif`, `KepalaSekolah`) VALUES
(3, '', '2020-03-01 00:00:00', '2020-05-31 23:59:59', '2020-05-31 00:00:00', 7, 1, 'Moch Yusuf.S., M.Si');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `Pengumuman_Id` int(11) NOT NULL,
  `Peserta_Id` int(11) NOT NULL,
  `TahunAjaran_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `Peserta_Id` int(11) NOT NULL,
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
  `Gelombang_Id` int(11) NOT NULL,
  `UrlPhoto` varchar(1000) DEFAULT NULL,
  `TahunLulus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `Prestasi_Id` int(11) NOT NULL,
  `Peserta_Id` int(11) NOT NULL,
  `NamaPrestasi` varchar(100) NOT NULL,
  `Nilai` decimal(18,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `Siswa_Id` int(11) NOT NULL,
  `Peserta_Id` int(11) NOT NULL,
  `TahunAjaran_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahunajaran`
--

CREATE TABLE `tahunajaran` (
  `Tahunajaran_Id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Deskripsi` varchar(100) NOT NULL,
  `Tahun` datetime NOT NULL,
  `Aktif` smallint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tahunajaran`
--

INSERT INTO `tahunajaran` (`Tahunajaran_Id`, `Nama`, `Deskripsi`, `Tahun`, `Aktif`) VALUES
(2, 'Tahun Ajaran 2019 - 2020', 'Tahun Ajaran 2019 - 2020', '2020-01-01 06:00:00', 1),
(3, 'Tahun Ajaran 2020 - 2021', 'Tahun Ajaran 2020 - 2021', '2020-02-22 06:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_Id`);

--
-- Indeks untuk tabel `daftarulang`
--
ALTER TABLE `daftarulang`
  ADD PRIMARY KEY (`Daftarulang_Id`),
  ADD KEY `daftarulang_Peserta_Id_fk` (`Peserta_Id`),
  ADD KEY `daftarulang_TahunAjaran_Id_fk` (`TahunAjaran_Id`);

--
-- Indeks untuk tabel `gelombang`
--
ALTER TABLE `gelombang`
  ADD PRIMARY KEY (`Gelombang_Id`);

--
-- Indeks untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`Kabupaten_Id`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`Kecamatan_Id`),
  ADD KEY `kabupaten_kecamatan` (`Kabupaten_Id`);

--
-- Indeks untuk tabel `matapelajaran`
--
ALTER TABLE `matapelajaran`
  ADD PRIMARY KEY (`Mapel_Id`);

--
-- Indeks untuk tabel `nilaiujian`
--
ALTER TABLE `nilaiujian`
  ADD PRIMARY KEY (`Nilaiujian_Id`),
  ADD KEY `nilaiujian_Peserta_Id_fk` (`Peserta_Id`),
  ADD KEY `nilaiujian_Mapel_Id_fk` (`Mapel_Id`);

--
-- Indeks untuk tabel `orangtua`
--
ALTER TABLE `orangtua`
  ADD PRIMARY KEY (`Orangtua_Id`),
  ADD KEY `orangtua_Peserta_Id_fk` (`Peserta_Id`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`Pendaftaran_Id`),
  ADD KEY `pendaftaran_Peserta_Id_fk` (`Peserta_Id`);

--
-- Indeks untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`Pengaturan_Id`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`Pengumuman_Id`),
  ADD KEY `pengumuman_Peserta_Id_fk` (`Peserta_Id`);

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`Peserta_Id`),
  ADD KEY `peserta_Tahunajaran_Id_fk` (`Tahunajaran_Id`);

--
-- Indeks untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`Prestasi_Id`),
  ADD KEY `prestasi_Peserta_Id_fk` (`Peserta_Id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`Siswa_Id`),
  ADD KEY `siswa_Peserta_Id_fk` (`Peserta_Id`),
  ADD KEY `siswa_TahunAjaran_Id_fk` (`TahunAjaran_Id`);

--
-- Indeks untuk tabel `tahunajaran`
--
ALTER TABLE `tahunajaran`
  ADD PRIMARY KEY (`Tahunajaran_Id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `daftarulang`
--
ALTER TABLE `daftarulang`
  MODIFY `Daftarulang_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gelombang`
--
ALTER TABLE `gelombang`
  MODIFY `Gelombang_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `Kabupaten_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `Kecamatan_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT untuk tabel `matapelajaran`
--
ALTER TABLE `matapelajaran`
  MODIFY `Mapel_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `nilaiujian`
--
ALTER TABLE `nilaiujian`
  MODIFY `Nilaiujian_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=277;

--
-- AUTO_INCREMENT untuk tabel `orangtua`
--
ALTER TABLE `orangtua`
  MODIFY `Orangtua_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `Pendaftaran_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `Pengaturan_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `Pengumuman_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `Peserta_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `Prestasi_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `Siswa_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tahunajaran`
--
ALTER TABLE `tahunajaran`
  MODIFY `Tahunajaran_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `daftarulang`
--
ALTER TABLE `daftarulang`
  ADD CONSTRAINT `daftarulang_Peserta_Id_fk` FOREIGN KEY (`Peserta_Id`) REFERENCES `peserta` (`Peserta_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `daftarulang_TahunAjaran_Id_fk` FOREIGN KEY (`TahunAjaran_Id`) REFERENCES `tahunajaran` (`Tahunajaran_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD CONSTRAINT `kabupaten_kecamatan` FOREIGN KEY (`Kabupaten_Id`) REFERENCES `kabupaten` (`Kabupaten_Id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilaiujian`
--
ALTER TABLE `nilaiujian`
  ADD CONSTRAINT `nilaiujian_Mapel_Id_fk` FOREIGN KEY (`Mapel_Id`) REFERENCES `matapelajaran` (`Mapel_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilaiujian_Peserta_Id_fk` FOREIGN KEY (`Peserta_Id`) REFERENCES `peserta` (`Peserta_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `orangtua`
--
ALTER TABLE `orangtua`
  ADD CONSTRAINT `orangtua_Peserta_Id_fk` FOREIGN KEY (`Peserta_Id`) REFERENCES `peserta` (`Peserta_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `pendaftaran_Peserta_Id_fk` FOREIGN KEY (`Peserta_Id`) REFERENCES `peserta` (`Peserta_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD CONSTRAINT `pengumuman_Peserta_Id_fk` FOREIGN KEY (`Peserta_Id`) REFERENCES `peserta` (`Peserta_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD CONSTRAINT `peserta_Tahunajaran_Id_fk` FOREIGN KEY (`Tahunajaran_Id`) REFERENCES `tahunajaran` (`Tahunajaran_Id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD CONSTRAINT `prestasi_Peserta_Id_fk` FOREIGN KEY (`Peserta_Id`) REFERENCES `peserta` (`Peserta_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_Peserta_Id_fk` FOREIGN KEY (`Peserta_Id`) REFERENCES `peserta` (`Peserta_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_TahunAjaran_Id_fk` FOREIGN KEY (`TahunAjaran_Id`) REFERENCES `tahunajaran` (`Tahunajaran_Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
