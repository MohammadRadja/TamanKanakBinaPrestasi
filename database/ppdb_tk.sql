-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 13, 2024 at 08:29 AM
-- Server version: 8.0.30
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb_tk`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` int NOT NULL,
  `siswa_id` int NOT NULL,
  `tanggal` date NOT NULL,
  `status` enum('hadir','tidak hadir','izin','sakit') NOT NULL,
  `catatan` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `biodata_diri`
--

CREATE TABLE `biodata_diri` (
  `id` int NOT NULL,
  `pengguna_id` int NOT NULL,
  `nama_lengkap` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_panggilan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_tanggal_lahir` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` enum('islam','kristen protestan','kristen katolik','hindu','buddha','konghucu') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `anak_ke` int NOT NULL,
  `nama_ayah` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_ayah` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_ibu` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakurikuler`
--

CREATE TABLE `ekstrakurikuler` (
  `id` int NOT NULL,
  `minggu_ke` int NOT NULL,
  `kegiatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ekstrakurikuler`
--

INSERT INTO `ekstrakurikuler` (`id`, `minggu_ke`, `kegiatan`) VALUES
(1, 1, 'Cooking Class'),
(2, 2, 'Pencak Silat'),
(3, 3, 'Melukis dan Home Visit'),
(4, 4, 'Menari');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_masuk_sekolah`
--

CREATE TABLE `jadwal_masuk_sekolah` (
  `id` int NOT NULL,
  `hari` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_pulang` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal_masuk_sekolah`
--

INSERT INTO `jadwal_masuk_sekolah` (`id`, `hari`, `jam_masuk`, `jam_pulang`) VALUES
(1, 'Senin', '07:00:00', '13:00:00'),
(2, 'Selasa', '07:00:00', '13:00:00'),
(3, 'Rabu', '07:00:00', '13:00:00'),
(4, 'Kamis', '07:00:00', '13:00:00'),
(5, 'Jumat', '07:00:00', '11:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_harian`
--

CREATE TABLE `kegiatan_harian` (
  `id` int NOT NULL,
  `hari` varchar(20) NOT NULL,
  `kegiatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan_harian`
--

INSERT INTO `kegiatan_harian` (`id`, `hari`, `kegiatan`) VALUES
(1, 'Senin', 'Upacara, Kognitif'),
(2, 'Selasa', 'Shalat Dhuha, Hafalan Hadits, Bahasa Arab, Kognitif'),
(3, 'Rabu', 'English Day, Hafalan Doa-Doa Harian, Kognitif, Bahasa Indonesia'),
(4, 'Kamis', 'Olahraga, Cooking Class/Pencak Silat/Melukis/Menari, Menggosok Gigi'),
(5, 'Jumat', 'Shalat Fardhu, Hafalan Surat-Surat Pendek, Hijaiyah');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_harian_detail`
--

CREATE TABLE `kegiatan_harian_detail` (
  `id` int NOT NULL,
  `pukul` text NOT NULL,
  `kegiatan` text NOT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan_harian_detail`
--

INSERT INTO `kegiatan_harian_detail` (`id`, `pukul`, `kegiatan`, `keterangan`) VALUES
(1, '07:30-08:00', 'Mengaji', 'PG, TK A, TK B'),
(2, '08:00-08:15', 'Berbaris', 'PG, TK A, TK B'),
(3, '08:15-09:00', 'Pembukaan Shalat Dhuha/Shalat Fardhu dan Hafalan Hadist/Doa-Doa Harian/Surat-Surat Pendek', 'PG, TK A, TK B'),
(4, '09:00-09:30', 'Kognitif/Bahasa', 'PG, TK A, TK B'),
(5, '09:30-09:45', 'Istirahat', 'PG, TK A, TK B'),
(6, '09:45-10:00', 'Recalling, Refleksi, dan Pulang', 'PG, TK A'),
(7, '10:00-10:30', 'Membaca dan Dikte', 'TK B');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_semester`
--

CREATE TABLE `kegiatan_semester` (
  `id` int NOT NULL,
  `tanggal` date NOT NULL,
  `kegiatan` varchar(200) NOT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan_semester`
--

INSERT INTO `kegiatan_semester` (`id`, `tanggal`, `kegiatan`, `keterangan`) VALUES
(1, '2024-07-23', 'Memperingati Hari Anak: Kegiatan Mendongeng', 'Kegiatan Gabungan dengan TK AL - AMIN'),
(2, '2024-08-16', 'Lomba Memperingati Hari Kemerdekaan Indonesia', NULL),
(3, '2024-09-02', 'Memperingati Hari Polisi: Filedtrip ke Polsek Jatiuwung', 'Kegiatan Gabungan dengan TK AL - AMIN'),
(4, '2024-09-02', 'Memperingati Hari Tani: Kegiatan Menanam Tanaman Herbal', NULL),
(5, '2024-09-15', 'Kegiatan Manasik Haji', 'Wajib Untuk Kelas B'),
(6, '2024-10-02', 'Memperingati Hari Batik Nasional: Memakai Baju Batik dan Membuat batik dengan menggunakan teknik Eco print', NULL),
(7, '2024-10-10', 'Renang Ke Fun Park', NULL),
(8, '2024-11-09', 'Memperingati Hari Ayah: Kegiatan 1 Hari Bersama Ayah (Melukis Anak dan melengkapi lukisan)', NULL),
(9, '2024-11-18', 'Evaluasi Semester 1', NULL),
(10, '2024-11-25', 'Memperingati Hari Guru: Membuat Kartu Ucapan untuk Guru dan Photo Both', NULL),
(11, '2024-12-13', 'Pembagian Rapot Semester 1', NULL),
(12, '2024-12-15', 'Fieldtrip jawara', NULL),
(13, '2024-12-14', 'Libur Semester Ganjil', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu_cooking_class`
--

CREATE TABLE `menu_cooking_class` (
  `id` int NOT NULL,
  `tanggal` date NOT NULL,
  `menu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_cooking_class`
--

INSERT INTO `menu_cooking_class` (`id`, `tanggal`, `menu`) VALUES
(1, '2024-08-08', 'Spaghetti'),
(2, '2024-09-05', 'Bubur Kacang Hijau'),
(3, '2024-10-03', 'Sempol Ayam'),
(4, '2024-11-07', 'Es Kopyor');

-- --------------------------------------------------------

--
-- Table structure for table `menu_sehat_pomg`
--

CREATE TABLE `menu_sehat_pomg` (
  `id` int NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_sehat_pomg`
--

INSERT INTO `menu_sehat_pomg` (`id`, `tanggal`) VALUES
(1, '2024-08-16'),
(2, '2024-09-12'),
(3, '2024-10-31'),
(4, '2024-11-13');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int NOT NULL,
  `nama_lengkap` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('siswa','admin') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama_lengkap`, `username`, `email`, `password`, `role`, `created_at`) VALUES
(28, 'radja', 'radja', 'radja.amri28@gmail.com', '$2y$10$VmNmfvUgVJCOSCDFqBy7qOOABnNSLePNhoe0U02VE036xnnWNd.lW', 'siswa', '2024-07-13 07:14:59');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int NOT NULL,
  `pengguna_id` int DEFAULT NULL,
  `isi_pesan` text,
  `waktu_kirim` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `parent_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_tanggal_lahir` varchar(100) NOT NULL,
  `alamat` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pengguna_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `siswa_id` (`siswa_id`);

--
-- Indexes for table `biodata_diri`
--
ALTER TABLE `biodata_diri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_biodata_diri_pengguna` (`pengguna_id`);

--
-- Indexes for table `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_masuk_sekolah`
--
ALTER TABLE `jadwal_masuk_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan_harian`
--
ALTER TABLE `kegiatan_harian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan_harian_detail`
--
ALTER TABLE `kegiatan_harian_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan_semester`
--
ALTER TABLE `kegiatan_semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_cooking_class`
--
ALTER TABLE `menu_cooking_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_sehat_pomg`
--
ALTER TABLE `menu_sehat_pomg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengguna_id` (`pengguna_id`),
  ADD KEY `pesan_ibfk_2` (`parent_id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_siswa_pengguna` (`pengguna_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `biodata_diri`
--
ALTER TABLE `biodata_diri`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jadwal_masuk_sekolah`
--
ALTER TABLE `jadwal_masuk_sekolah`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kegiatan_harian`
--
ALTER TABLE `kegiatan_harian`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kegiatan_harian_detail`
--
ALTER TABLE `kegiatan_harian_detail`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kegiatan_semester`
--
ALTER TABLE `kegiatan_semester`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `menu_cooking_class`
--
ALTER TABLE `menu_cooking_class`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu_sehat_pomg`
--
ALTER TABLE `menu_sehat_pomg`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`siswa_id`) REFERENCES `siswa` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `biodata_diri`
--
ALTER TABLE `biodata_diri`
  ADD CONSTRAINT `fk_biodata_diri_pengguna` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `pesan_ibfk_2` FOREIGN KEY (`parent_id`) REFERENCES `pesan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `fk_siswa_pengguna` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
