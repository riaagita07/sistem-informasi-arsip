-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2023 at 04:21 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisteminformasi_arsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsips`
--

CREATE TABLE `arsips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaarsip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `arsips`
--

INSERT INTO `arsips` (`id`, `kode`, `namaarsip`, `category_id`, `user_id`, `keterangan`, `file`, `created_at`, `updated_at`) VALUES
(5, '001', 'Data Pegawai Pns', 1, 4, 'Data Formal Pegawai PNS', 'public/berkas/OVNVrRkEoDhC37FyNsmpZYmQBpGFVAvbstIgXgw1.xlsx', '2023-05-08 14:08:47', '2023-06-15 03:10:11'),
(14, '003', 'Kontrak Kerja  Achmad Fachrizal IHHP', 6, 7, 'Kontrak Kerja IHHP 2021', 'public/berkas/gZBz4otEd1vqjNN5XavpGTmOJScJnyWgDfICdUEw.doc', '2023-06-14 09:22:41', '2023-06-14 10:44:12'),
(15, '003', 'Kontrak Kerja  Candra Sitorus IHHP', 6, 7, 'Kontrak Kerja IHHP 2021', 'public/berkas/hgcGegEYOZiFGeJSIbfCUUeaTukwIzksd6CQ7Buv.doc', '2023-06-14 09:23:31', '2023-06-14 10:43:45'),
(16, '003', 'Kontrak Kerja  Ahsya Darmadhan sarbini IHHP', 6, 7, 'Kontrak Kerja IHHP 2021', 'public/berkas/jzQ7SzvzvHNCDcTc4aGv1uu6dJmxqyvD57Giwgod.doc', '2023-06-14 09:25:01', '2023-06-14 10:43:10'),
(19, '003', 'Kontrak Kerja Cecep Saepul Rohman IMHLP', 7, 12, 'Kontrak Kerja IMHLP 2021', 'public/berkas/vcSyA18ODaSRCUyVQEpVXslf6sWzpmdFHfNP3nYr.doc', '2023-06-14 09:53:40', '2023-06-14 10:42:06'),
(20, '003', 'Kontrak Kerja Gerry Kaiserio Putra IMHLP', 7, 12, 'Kontrak Kerja IMHLP 2021', 'public/berkas/01CYNb5VgZgRzjgyAX3zAyJpf6GmzjXnTI7nLQH6.doc', '2023-06-14 09:55:50', '2023-06-14 10:38:20'),
(21, '003', 'Kontrak Kerja Okky Wisudyanto MHLP', 7, 12, 'Kontrak Kerja IMHLP 2021', 'public/berkas/1KDd1DfgXJRVuc0mhfQoBImKWohMA3PpmH1wRhER.doc', '2023-06-14 09:55:50', '2023-06-14 10:40:25'),
(22, '003', 'Kontrak Kerja Mega Pramitasari  IMHLP', 7, 12, 'Kontrak Kerja IMHLP 2021', 'public/berkas/vWGfe3JkGzz75C89kPt9ldZtIJ5JfWnGC5pWpkKE.doc', '2023-06-14 09:55:50', '2023-06-14 10:41:33'),
(23, '003', 'Kontrak Kerja Andika Aditya Putra MINTEGAR', 8, 11, 'Kontrak Kerja MINTEGAR 2021', 'public/berkas/Boa0b9DnyFwdxBW4q4ws1IakUq1ywbS0AyECt1v3.doc', '2023-06-14 10:01:25', '2023-06-14 10:29:17'),
(24, '003', 'Kontrak Kerja Andika Aditya Putra MINTEGAR', 8, 11, 'Kontrak Kerja MINTEGAR 2021', 'public/berkas/SExPY44KUqtCaAIm1suXUNX9bpWtdTCUEuT0NTyo.doc', '2023-06-14 10:01:25', '2023-06-14 10:29:38'),
(25, '003', 'Kontrak Kerja Ferdian Nugroho MiNTEGAR', 8, 11, 'Kontrak Kerja MiNTEGAR 2021', 'public/berkas/Bu8DJ0Ej6NzjZhEUocNmGLBnIacedkgXs6ENz22O.doc', '2023-06-14 10:02:49', '2023-06-14 10:28:50'),
(26, '004', 'KGB  Maruzi', 4, 1, 'KGB april 2023', 'public/berkas/JD5pq6Ic1Oe3SsuAAfZLiwap8mpjPbm5DmOOrqh6.docx', '2023-06-14 10:09:15', '2023-06-14 10:11:33'),
(28, '004', 'KGB Dian Hendrani', 4, 1, 'KGB April 2023', 'public/berkas/B7kISGOpce5NOijQHDv9TJVOTCmJ3KDm1IcoX4qX.docx', '2023-06-14 10:11:07', '2023-06-14 10:11:07'),
(31, '004', 'KGB Mikris Naelle', 4, 1, 'KGB Juni 2023', 'public/berkas/O0ooC5ItucPyhSS0amRvlWzccg4vzsKBul8C3p0j.docx', '2023-06-14 10:16:57', '2023-06-14 10:16:57'),
(32, '004', 'KGB Suratna', 4, 1, 'KGB Juni 2023', 'public/berkas/XmlkzegP8yODKyetjJ4PbCi0wct04C1Snj4pgFpT.docx', '2023-06-14 10:16:57', '2023-06-14 10:17:46'),
(33, '004', 'KGB Rani', 4, 1, 'KGB Mei 2023', 'public/berkas/LAHMBvE6vgKoEty2sj7DFhB8qPTDC4UYDTG2xbN4.docx', '2023-06-14 10:19:58', '2023-06-14 10:19:58'),
(34, '004', 'KGB Mediarman', 4, 1, 'KGB Mei 2023', 'public/berkas/X4xUhNrQEbrDK2srXp0MiQZ82fnu36dFPi0Uetw9.docx', '2023-06-14 10:21:35', '2023-06-14 10:21:35'),
(35, '004', 'KGB Mediarman', 4, 1, 'KGB Mei 2023', 'public/berkas/Ib6Vh80zkvj2fTQBD2sVwjRA7DVbC1kcMDL7TlVi.docx', '2023-06-14 10:21:36', '2023-06-14 10:21:36'),
(36, '003', 'Kontrak Kerja Hisyam Ramadhan', 6, 7, 'Kontrak Kerja IHHP 2022', 'public/berkas/a1oYdYZJey1yBXUL0OFuvyze5RE7D3XLX3gtCfWz.doc', '2023-06-14 10:47:07', '2023-06-14 10:48:07'),
(37, '003', 'Kontrak Kerja Della Shabrina', 6, 7, 'Kontrak Kerja IHHP 2022', 'public/berkas/IkHi2BnOYArCR2Ula6SXmoUVwhstGuMUqfKdxZH7.doc', '2023-06-14 10:47:07', '2023-06-14 10:47:07'),
(38, '003', 'Kontrak Kerja Rendra Laksono', 6, 7, 'Kontrak Kerja IHHP 2022', 'public/berkas/NH15xnMADIpd7IXwUQ1l1aMOxQzfH6zWf23Ie9QB.doc', '2023-06-14 10:47:08', '2023-06-14 10:48:59'),
(39, '003', 'Kontrak Kerja  Rizky Apriano', 7, 12, 'Kontrak Kerja IMHLP 2022', 'public/berkas/GecILghiptEdOH62kiahw01qTkZARorsP9Z8ZB9u.doc', '2023-06-14 10:52:04', '2023-06-14 10:52:04'),
(40, '003', 'Kontrak Kerja Soraya Kurnia Dewi', 7, 12, 'Kontrak Kerja IMHLP 2022', 'public/berkas/Hltoaxrcg1yEYmmTnhAFZUiylkRHWPsQrTLvl1dx.doc', '2023-06-14 10:53:22', '2023-06-14 10:53:22'),
(41, '005', 'Data Absensi Pegawai Januari 2022', 4, 13, 'Absensi Pegawai Januari 2022', 'public/berkas/cHKC74FmdckUfrca2ySJCUSmFhxEiuikAszn8la8.xlsx', '2023-06-14 11:06:57', '2023-06-14 11:12:38'),
(42, '005', 'Data Absensi Pegawai Febuari 2022', 4, 13, 'Data Absensi Febuari 2022', 'public/berkas/50HQpQbaQxu3x1rzTQP5sf0lMhozJfpKsmYLMBet.xlsx', '2023-06-14 11:07:58', '2023-06-14 11:11:59'),
(43, '005', 'Data Absensi Pegawai Maret 2022', 4, 13, 'Data Absensi Maret 2022', 'public/berkas/fvpfvVS3G55AKuhFEFK94DXogYJYWHqg98Vxw3oz.xlsx', '2023-06-14 11:08:53', '2023-06-14 11:13:07'),
(44, '005', 'Data Absensi Pegawai  April 2022', 4, 13, 'Absensi Pegawai  April 2022', 'public/berkas/9wdsdAUxhwJHDJC7pwAvpllcMqm7qCxFwo7jRZTE.xlsx', '2023-06-14 11:10:11', '2023-06-14 11:10:11'),
(45, '005', 'Data Absensi Pegawai Juni 2022', 4, 13, 'Absensi Pegawai Juni 2022', 'public/berkas/C6CBZJjqvYg0WUNWtTtDIjMqEdOyz0qdUwWcwggr.xlsx', '2023-06-14 11:13:55', '2023-06-14 11:16:14'),
(46, '005', 'Data Absensi Pegawai  Mei 2022', 4, 13, 'Absensi Pegawai  Mei 2022', 'public/berkas/gNzX0itU239PePENXAE6i1LVQLUE5Out8aRBKmHH.xlsx', '2023-06-14 11:15:14', '2023-06-14 11:15:14'),
(47, '006', 'SK KP ABROR INSANY', 4, 13, 'SK KP 2022', 'public/berkas/7a2h5rj8XKQWnIy4JhXNq5Sej9BYjtuhqMDuSJMj.pdf', '2023-06-14 11:18:51', '2023-06-14 11:18:51'),
(48, '006', 'SK KP AFDHAL', 4, 13, 'SK KP 2022', 'public/berkas/QRFMiMSpD9qRfpSf8ndMjFbuTyFRO112GIC8noPH.pdf', '2023-06-14 11:19:37', '2023-06-14 11:19:37'),
(49, '006', 'SK KP AFDHAL', 4, 13, 'SK KP 2022', 'public/berkas/yM3AE10D9bvVjlqHgfPPyNV4OXC7XCZ5lzJgY03H.pdf', '2023-06-14 11:19:38', '2023-06-14 11:19:38'),
(51, '007', 'Data Pegawai 2022', 4, 13, 'Data Pegawai 2022', 'public/berkas/RfXkqPxpXhjFnxM1jP6KNC7phwxrNNn4CbQjXu89.xlsx', '2023-06-14 11:23:25', '2023-06-14 11:23:25'),
(54, '007', 'Data Pegawai Cuti 2022', 4, 13, 'Data Pegawai Cuti 2022', 'public/berkas/Fup55KCLONcowTHrXnGFHHSYsPJd0zUw68IU1fJY.xlsx', '2023-06-14 11:26:27', '2023-06-14 11:26:27'),
(55, '008', 'Data Uang Makan Pegawai 2022', 4, 13, 'Data Uang Makan Pegawai Agustus 2022', 'public/berkas/l4ARKWtKg7oXnblNvdEvPOFrjpOLeekGNxk8c3ar.xlsx', '2023-06-14 11:29:30', '2023-06-14 11:29:30'),
(56, '008', 'Perhitungan Uang Makan  2022', 4, 4, 'Perhitungan Uang Makan April  2022', 'public/berkas/ulMoYcfx0aImPCwu88LL4mJb7v703S9uUUt1xyRs.xlsx', '2023-06-14 11:30:41', '2023-06-15 03:05:37'),
(57, '008', 'Perhitungan Uang Makan  2022', 4, 13, 'Perhitungan Uang Makan April  2022', 'public/berkas/42kmmYdlSTbkSauUi7TsUs0f9OywSrwKXa5Ze1BD.xlsx', '2023-06-14 11:30:41', '2023-06-14 11:30:41');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Bagian Pegawaian', '2023-06-08 13:23:31', '2023-06-14 10:07:26'),
(2, 'Industri Hasil Hutan Perkebunan ( IHHP)', '2023-06-14 09:10:16', '2023-06-14 09:10:16'),
(3, 'Industri Makanan Hasil Laut dan Perikanan ( IMHLP)', '2023-06-14 09:49:46', '2023-06-14 09:49:59'),
(4, 'Industri Minuman, Hasil Tembakau Dan Bahan Penyegar (MINTEGAR)', '2023-06-14 09:59:10', '2023-06-14 09:59:10'),
(5, 'Data Absensi Pegawai', '2023-06-14 11:05:04', '2023-06-14 11:05:04');

-- --------------------------------------------------------

--
-- Table structure for table `code_arsips`
--

CREATE TABLE `code_arsips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `code_arsips`
--

INSERT INTO `code_arsips` (`id`, `code`, `name`, `created_at`, `updated_at`) VALUES
(1, '001', 'Data Pegawai Pns', '2023-04-04 15:58:10', '2023-06-14 08:56:48'),
(4, '002', 'Data Susunan Kerja Pegawai Pns', '2023-04-10 16:01:40', '2023-06-14 09:01:37'),
(6, '003', 'kontrak kerja pegawai', '2023-06-14 09:08:30', '2023-06-14 09:08:30'),
(7, '004', 'Kenaikan Gaji Berkala (KGB)', '2023-06-14 10:06:04', '2023-06-14 10:08:05'),
(8, '005', 'Absensi Pegawai', '2023-06-14 11:04:15', '2023-06-14 11:04:15'),
(9, '006', 'Surat Keterangan Kenaikan Pangkat Pegawai', '2023-06-14 11:17:37', '2023-06-14 11:17:37'),
(11, '007', 'daftar pegawai pensiun, cuti, mutasi masuk dan mutasi keluar', '2023-06-14 11:21:36', '2023-06-14 11:25:10'),
(12, '008', 'Data Perhitungan Uang Makan', '2023-06-14 11:27:54', '2023-06-14 11:27:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2023_04_04_220544_create_categories_table', 2),
(18, '2023_04_04_223510_create_arsips_table', 3),
(19, '2023_04_04_224132_create_code_arsips_table', 3),
(20, '2023_05_08_215653_create_pengunduhs_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawais`
--

CREATE TABLE `pegawais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip_baru` varchar(18) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(18) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gelar` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kd_kelamin` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kd_agama` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawais`
--

INSERT INTO `pegawais` (`id`, `nip_baru`, `nip`, `nama`, `gelar`, `tgl_lahir`, `tempat_lahir`, `kd_kelamin`, `kd_agama`) VALUES
(2, '196503201985032001', '090015840', 'Sri Helwiyah', '|S.Sos., M.Si.', '1965-03-20', 'Jambi', 'P', '1'),
(3, '196509061985032002', '090015938', 'Ani Mardentina', '|', '1965-09-06', 'Lumban Ria-ria, Sumut', 'P', '2'),
(4, '196412161985031004', '090016378', 'Nurdin Alip', '|', '1964-12-16', 'Jakarta', 'L', '1'),
(5, '196505081986021001', '090016976', 'Christian Maxmilian Johan Wattimury', '|', '1965-05-08', 'Ambon', 'L', '2'),
(6, '196508311986032006', '090017545', 'Asni', '|', '1965-08-31', 'Candung', 'P', '1'),
(7, '196410161986031002', '090017637', 'Ganjar Tridarmo', '|', '1964-10-16', 'Jakarta', 'L', '1'),
(8, '196504031986031008', '090017648', 'Edy Endar Sriono', '|S.Sos', '1965-04-03', 'Bangil', 'L', '1'),
(9, '196708251987091001', '090018954', 'Sumarna', '|S.Sos, MSi', '1967-08-25', 'Sleman', 'L', '1'),
(10, '196705191988022001', '090019162', 'Rr. Budh Arisaparmi', '|', '1967-05-19', 'Jakarta', 'P', '1'),
(11, '196508101988031004', '090019290', 'Sriyono', '|S.Sos.', '1965-08-10', 'Purworejo', 'L', '1'),
(12, '196509141990032001', '090019939', 'Andriani Z.', '|S.Sos, M. Si', '1965-09-14', 'Bukittinggi', 'P', '1'),
(13, '196401141990031003', '090020157', 'Tri Haryanta', '|SH, MM', '1964-01-14', 'Magelang', 'L', '1'),
(14, '196503291990031003', '090020405', 'Suhardi', '|S.Sos', '1965-03-29', 'Klaten', 'L', '1'),
(15, '196410191992031003', '090020675', 'Edy Sutopo', 'Ir.|M.Si', '1964-10-19', 'Kendal', 'L', '1'),
(16, '196611131993031001', '090020895', 'Emil Satria', 'Ir.|M.Si', '1966-11-13', 'Palembang', 'L', '1'),
(17, '196507141993031004', '090020909', 'Putu Juli Ardika', 'Ir.|MA', '1965-07-14', 'Buleleng', 'L', '4'),
(18, '197005011993032006', '090020955', 'Merrijantij Punguan Pintaria', '|ST, M.Eng.', '1970-05-01', 'Pematang Siantar', 'P', '2'),
(19, '196904101993032006', '090020978', 'Siti Komariah Sjadjoem', 'Ir.|', '1969-04-10', 'Tomohon', 'P', '1'),
(20, '196410081993031010', '090021006', 'Mediarman ', '|SE', '1964-10-08', 'Marunggi', 'L', '1'),
(21, '197811172003122002', '090022024', 'Siti Invriati ', '|SE', '1978-11-17', 'Jakarta', 'P', '1'),
(22, '197902252003122008', '090022033', 'Riris Marito', '|S.TP, MT', '1979-02-25', 'Jakarta', 'P', '1'),
(23, '197505052003121010', '090022183', 'Mohammad Ari Kurnia Taufik', '|SE., MInfT.', '1975-05-05', 'Jakarta', 'L', '1'),
(24, '198107262003121001', '090022226', 'Fajar Setiawan', '|S.Sos', '1981-07-26', 'Jakarta', 'L', '1'),
(25, '197905122003121003', '090022251', 'Mohammad Rifky Kenedy', '|S.Kom, M.Si', '1979-05-12', 'Banyuwangi', 'L', '1'),
(26, '197806142005022001', '090022442', 'Ericha Fatma Yuniati', '|ST, MT', '1978-06-14', 'Semarang', 'P', '1'),
(27, '198102252005022001', '090022444', 'Dian Hendrani', '|ST, M.S.E', '1981-02-25', 'Semarang', 'P', '3'),
(28, '198108022005021001', '090022445', 'Yusup Akbar Hikmatuloh', '|S.TP,MT', '1981-08-02', 'Garut', 'L', '1'),
(29, '197904182006041004', '090022558', 'Yusuf Kadarsyah', '| S.Sos, M.SE', '1979-04-18', 'Jakarta', 'L', '1'),
(30, '197701262006041001', '090022584', 'Arif Usman', '| S.TP,M.T', '1977-01-26', 'Purworejo', 'L', '1'),
(31, '198108132006041003', '090022590', 'Jef Rinaldi', '| S.T, M.T.', '1981-08-13', 'Padang', 'L', '1'),
(32, '197608312006041004', '090022592', 'Agus Jarwanto', '| ST, MT', '1976-08-31', 'Semarang', 'L', '1'),
(33, '198310092006041006', '090022593', 'Lila Harsyah Bakhtiar', '| S.T, M.T', '1983-10-09', 'Surabaya', 'L', '1'),
(34, '197811062006042003', '090022595', 'Rr. Citra Rapati', '| S.Hut, M. Si.', '1978-11-06', 'Limapuluh', 'P', '1'),
(35, '196806162007011002', '090022902', 'Suratna', '|', '1968-06-16', 'Jakarta', 'L', '1'),
(36, '196609132007012001', '090022903', 'Emelda Roamnah', '|', '1966-09-13', 'Jakarta', 'P', '1'),
(37, '196911132007011003', '090022905', 'Maruzi', '|', '1969-11-13', 'Jakarta', 'L', '1'),
(38, '196705282007011003', '090022939', 'Djupri', '|', '1967-05-28', 'Madiun', 'L', '1'),
(39, '198312102008031001', '090023111', 'Berlianto Nugroho', '|STP, MSE, MPP', '1983-12-10', 'Jakarta', 'L', '1'),
(40, '197712152008032002', '090023113', 'Pinke Arfianti Dwihapsari', '|ST', '1977-12-15', 'Purwokerto', 'P', '1'),
(41, '197905132009011012', '091099152', 'Andromeda', '|S.Kom, MM', '1979-05-13', 'Jakarta', 'L', '2'),
(42, '198104212009011007', '091099163', 'Dian Murti Prabowo', '|SE, M.Ec.Dev', '1981-04-21', 'Sleman', 'L', '1'),
(43, '198008312009011004', '091099166', 'Al Ichwan', '|SE, MM', '1980-08-31', 'Jakarta', 'L', '1'),
(44, '198012052009012010', '091099179', 'Rani Pratiwi Kurnia Rahman', '|SH.MH', '1980-12-05', 'Semarang', 'P', '1'),
(45, '198510232009112001', '091099417', 'Ditya Oktari', '| SE, MM', '1985-10-23', 'Tanjungkarang', 'P', '1'),
(46, '198508062009111002', '091099419', 'Muhammad Agustinus Abdillah', '| SH, MH', '1985-08-06', 'Palembang', 'L', '1'),
(47, '198403162009111001', '091099421', 'Rury Eysa Mardhika', '| S.Hut', '1984-03-16', 'Kuningan', 'L', '1'),
(48, '198507262009112002', '091099422', 'Yulis Anggunita Kurniasih', '| S.TP, MSc.', '1985-07-26', 'Magetan', 'P', '1'),
(49, '198605152009111001', '091099426', 'Hendra Permana', '|S.Kom, M.Sc.', '1986-05-15', 'Bandung', 'L', '1'),
(50, '198807202009112001', '091099427', 'Rindy Purwa Kartika Sari', '|SE', '1988-07-20', 'Pati', 'P', '1'),
(51, '198612042009111001', '091099428', 'Risetio Canggih Dwiputra', '| S.T.P., M.Ec.Dev.', '1986-12-04', 'Salatiga', 'L', '1'),
(52, '198404042009112001', '091099429', 'Ita Kurnia Sholihah', '|SE, M.S.E.', '1984-04-04', 'Sleman', 'P', '1'),
(53, '198602122009111001', '091099430', 'Rifqi Ansari', '| STP, MT, MBA', '1986-02-12', 'Jakarta', 'L', '1'),
(54, '198512222009112001', '091099455', 'Lies Lina Yunitawati', '| S.T.P., MPP, MSE', '1985-12-22', 'Jakarta', 'P', '1'),
(55, '198312182009112001', '091099502', 'RR Setyo Toulousia Ibnusantosa', '|ST, MT', '1983-12-18', 'Bandung', 'P', '1'),
(56, '198511222010122004', '091099722', 'Debi Kurnia', '|ST', '1985-11-22', 'Ponorogo', 'P', '1'),
(57, '198511042010121002', '091099752', 'Hartanto Sitorus', '|A.Md', '1985-11-04', 'Batam', 'L', '2'),
(58, '198505262010121001', '091099753', 'Rivano Pollax Rantung', '|ST', '1985-05-26', 'Manado', 'L', '2'),
(59, '198604042010122001', '091099754', 'Titis Wahyu Utami', '|STP.,MSE', '1986-04-04', 'Sleman', 'P', '1'),
(60, '198804252010122002', '091099755', 'Rika Arti', '|ST, MPM', '1988-04-25', 'Jakarta', 'P', '2'),
(61, '198406192010121002', '091099756', 'Hendy Yudyanto', '|S.Kel, M.S.E.', '1984-06-19', 'Semarang', 'L', '1'),
(62, '198501302010121002', '091099758', 'Hamid Rizali Siregar', '|S.Pi, MDP', '1985-01-30', 'Bogor', 'L', '1'),
(63, '198402082010121003', '091099759', 'Daniel Ibrahim', '|S.Hut,M.M', '1984-02-08', 'Tangerang', 'L', '1'),
(64, '198403072010122001', '091099760', 'Bernadheta Mia Tri Mareta', '|STP.,M.S.E', '1984-03-07', 'Blora', 'P', '3'),
(65, '196408281986071003', '196408281986071003', 'Mikris Nalle', '|SE', '1964-08-28', 'Kupang', 'L', '2'),
(66, '197906282006041010', '197906282006041010', 'Muhammad Rizky Sadif', '|SE, M.Si', '1979-06-28', 'Kendari', 'L', '1'),
(67, '198002212010011010', '198002212010011010', 'Ali Khomaini', '|ST', '1980-02-21', 'Pangkalpinang', 'L', '1'),
(68, '198208092009031002', '198208092009031002', 'Rifqi Abdul Wahab Thalib', '|ST', '1982-08-09', 'Malang', 'L', '1'),
(69, '198309162010012006', '198309162010012006', 'Prima Indrasari', '|S.T', '1983-09-16', 'Tegal', 'P', '1'),
(70, '198503082009021001', '198503082009021001', 'Nugraha Prasetia Yogie', '|ST, M.Si', '1985-03-08', 'Sumedang', 'L', '1'),
(71, '198511052019011001', '198511052019011001', 'Vita Harlan Bachtiar', '|S.Kom', '1985-11-05', 'Siak', 'L', '1'),
(72, '198603092014021001', '198603092014021001', 'Roni Toga Perdana', '|S.Hut', '1986-03-09', 'Bandung', 'L', '3'),
(73, '198604072014022002', '198604072014022002', 'Citra Pangestuti Lestari', '|S.TP', '1986-04-07', 'Tuban', 'P', '1'),
(74, '198611132019011001', '198611132019011001', 'Alpha Nugroho Saputro', '|S.Hut', '1986-11-13', 'Purworejo', 'L', '2'),
(75, '198701012022021001', '198701012022021001', 'Fathul Amin', '|M.Si', '1987-01-01', 'Bangka', 'L', '1'),
(76, '198701162014022001', '198701162014022001', 'Dewi Pratiwi', '|ST', '1987-01-16', 'Palembang', 'P', '1'),
(77, '198707022022021002', '198707022022021002', 'Welly Krisna Putra Kurniawan', '|S.H.', '1987-07-02', 'Temanggung', 'L', '2'),
(78, '198708272014021003', '198708272014021003', 'Jainal Abidin Turnip', '|SE', '1987-08-27', 'Pematang Siantar', 'L', '2'),
(79, '198711092014021001', '198711092014021001', 'Cecep Saepul Rahman', '|STP, M.Si', '1987-11-09', 'Tasikmalaya', 'L', '1'),
(80, '198712142014021001', '198712142014021001', 'Yosaphat Juan Xiadela Wattie', '|S.Pt', '1987-12-14', 'Jember', 'L', '3'),
(81, '198803082014021001', '198803082014021001', 'M. Ihsan Saputra', '|ST', '1988-03-08', 'Kampar', 'L', '1'),
(82, '198805282014022001', '198805282014022001', 'Lisa Sturoyya Faaz', '|S.T', '1988-05-28', 'Surabaya', 'P', '1'),
(83, '198806032015022001', '198806032015022001', 'Yuni Dwi Kartika', '|S.TP., M.M', '1988-06-03', 'Sukabumi', 'P', '1'),
(84, '198806122014021001', '198806122014021001', 'Wismoyo Hariri', '|SHI, MH', '1988-06-12', 'Depok', 'L', '1'),
(85, '198809292015022001', '198809292015022001', 'Ranny Maharanny', '|STP', '1988-09-29', 'Liwa', 'P', '1'),
(86, '198812082014021002', '198812082014021002', 'Okky Krisna Rachman', '|S.IP., M.PWK., M.MG', '1988-12-08', 'Bandung', 'L', '1'),
(87, '198812192020122002', '198812192020122002', 'Iyat Hamiyati', '|M.Si', '1988-12-19', 'Majalengka', 'P', '1'),
(88, '198902282014021001', '198902282014021001', 'Bayang Dwi Kusumadito', '|S.Pt, MM', '1989-02-28', 'Jakarta', 'L', '3'),
(89, '198904152018012001', '198904152018012001', 'Anjar Retnaning Ayu', '|S.TP.', '1989-04-15', 'Magelang', 'P', '1'),
(90, '198904192014021001', '198904192014021001', 'Arief Aditriandi Mohsin', '|S.H.Int.,M.A', '1989-04-19', 'Pontianak', 'L', '1'),
(91, '198908232019011001', '198908232019011001', 'Arya Wibisono Manifestoputra', '|S.T.P', '1989-08-23', 'Jakarta', 'L', '1'),
(92, '198912282022021001', '198912282022021001', 'Purbo Carito', '|S.T.P', '1989-12-28', 'Kulon Progo', 'L', '1'),
(93, '199004262020122002', '199004262020122002', 'Fitrina Aprilyanti Simanjuntak', '|STP', '1990-04-26', 'Jakarta', 'P', '2'),
(94, '199103022019011001', '199103022019011001', 'Dhiel Somantha Saragih', '|S.Kom', '1991-03-02', 'Medan', 'L', '2'),
(95, '199105082014022001', '199105082014022001', 'Kristi Mei Sara Simbolon', '|S.H., M.Si', '1991-05-08', 'Pematang Siantar', 'P', '2'),
(96, '199108072020121001', '199108072020121001', 'Grandy Wibakti', '|S.Si', '1991-08-07', 'Jakarta', 'L', '1'),
(97, '199108182020121001', '199108182020121001', 'Ikhlash Kautsar Wahyu Utomo', '|M.Si', '1991-08-18', 'Banda aceh', 'L', '1'),
(98, '199111262022021001', '199111262022021001', 'Helga Dara Dwin Kharisma', '|S.Hut', '1991-11-26', 'Surabaya', 'L', '1'),
(99, '199201252022022001', '199201252022022001', 'Laudetta Dianne Fitri', '|S.S', '1992-01-25', 'Mojokerto', 'P', '1'),
(100, '199207062020121003', '199207062020121003', 'Rheza Brahmantya', '|SE', '1992-07-06', 'Jakarta', 'L', '1'),
(101, '199207172018011001', '199207172018011001', 'Afdhal', '|S.Hut', '1992-07-17', 'Tanah Datar', 'L', '1'),
(102, '199208132022021002', '199208132022021002', 'Dimas Ronggo Rati Buwono', '|S.TP', '1992-08-13', 'Nganjuk', 'L', '1'),
(103, '199304062018012002', '199304062018012002', 'Alvita Rassya Tritikaningtyas', '|S.T.P.', '1993-04-06', 'Jakarta', 'P', '3'),
(104, '199308272022021001', '199308272022021001', 'Amri Wirawardana', '|S.T', '1993-08-27', 'Tegal', 'L', '1'),
(105, '199310032018012002', '199310032018012002', 'Gita Asapuri', '|S.TP.', '1993-10-03', 'Bandar Lampung', 'P', '1'),
(106, '199405252022022002', '199405252022022002', 'Fadmawaty Br. Marbun', '|S.T', '1994-05-25', 'Tapanuli Tengah', 'P', '2'),
(107, '199406112022022002', '199406112022022002', 'Valeria Natasha Nindya Putri', '|S.T.P.', '1994-06-11', 'Magelang', 'P', '3'),
(108, '199407252019012001', '199407252019012001', 'Agatha Intan Wihenti', '|STP.,M.Sc', '1994-07-25', 'Wonosobo', 'P', '3'),
(109, '199412072020122001', '199412072020122001', 'Nissa Rosmatillah Mitsalia', '|S.I.Kom', '1994-12-07', 'Jakarta selatan', 'P', '1'),
(110, '199503022018011001', '199503022018011001', 'Abror Insany Alatqo', '|S.T.P.', '1995-03-02', 'Sleman', 'L', '1'),
(111, '199508222022022001', '199508222022022001', 'Amarilla Tri Winjareni', '|S.TP.', '1995-08-22', 'Purbalingga', 'P', '1'),
(112, '199510252022021001', '199510252022021001', 'Bonifatius Bramantya Wisnugraha', '|S.T.', '1995-10-25', 'Yogyakarta', 'L', '3'),
(113, '199601092020122004', '199601092020122004', 'Ageng Dwi Prismayanti', '|M.Si', '1996-01-09', 'Jakarta', 'P', '1'),
(114, '199603022020122003', '199603022020122003', 'Anisa Muzalifa', '|A.Md', '1996-03-02', 'Jakarta', 'P', '1'),
(115, '199604092020121004', '199604092020121004', 'Fajar Dwi Prasetyo', '|ST', '1996-04-09', 'Tulungagung', 'L', '1'),
(116, '199606302019011001', '199606302019011001', 'Tommy Kagin Barus', '|S.Pt', '1996-06-30', 'Bandar Lampung', 'L', '2'),
(117, '199703212022021001', '199703212022021001', 'Aditya Bambang Pamungkas', '|S.T.P', '1997-03-21', 'Semarang', 'L', '1'),
(118, '199704142018122001', '199704142018122001', 'Ela Amalia', '| A.Md.Ak.', '1997-04-14', 'Blitar', 'P', '1'),
(119, '199707142020121003', '199707142020121003', 'Muhammad Hafizh Zulkarnaen', '|ST', '1997-07-14', 'Malang', 'L', '1'),
(120, '199708032022022001', '199708032022022001', 'Siti Disti Adzhani', '|S.T.', '1997-08-03', 'Bukittinggi', 'P', '1'),
(121, '199802102020121003', '199802102020121003', 'Theofano Feraldo', '|A.Md', '1998-02-10', 'Sungai penuh', 'L', '1'),
(122, '199808092020121001', '199808092020121001', 'Dima Maharika Dinama', '|S.Tr.T', '1998-08-09', 'Bandung', 'L', '1'),
(123, '199808142020122001', '199808142020122001', 'Saphyra Puti Larasati', '|A.Md', '1998-08-14', 'Bogor', 'P', '1'),
(124, '199901202022012001', '199901202022012001', 'Arista Diffauri', '|A.Md. M', '1999-01-20', '', 'P', '1'),
(125, '199901272021012001', '199901272021012001', 'Adinda Puteri Fitriana', '|A.Md.Ak.', '1999-01-27', 'Rembang', 'P', '1'),
(126, '199908222021011002', '199908222021011002', 'Alfaez Ridho Akbar', '|A,Md.Ak.', '1999-08-22', 'BOGOR', 'L', '1'),
(127, '199910232021012001', '199910232021012001', 'Nabilah Aulia Firdausy', '|A.Md.Kb.N.', '1999-10-23', 'Gresik', 'P', '1'),
(128, '200008032022011003', '200008032022011003', 'Muhammad Kautsar Fiergwiansyah', '|A.md.Kb.N', '2000-08-03', '', 'L', '1'),
(129, '198004092008031002', '960000436', 'Ariesta Nugraha', '|SE,ME', '1980-04-09', 'Jakarta', 'L', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pengunduhs`
--

CREATE TABLE `pengunduhs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `arsip_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengunduhs`
--

INSERT INTO `pengunduhs` (`id`, `user_id`, `arsip_id`, `created_at`, `updated_at`) VALUES
(1, 1, 5, '2023-05-08 15:05:03', '2023-05-08 15:05:03'),
(2, 1, 5, '2023-05-12 12:31:22', '2023-05-12 12:31:22'),
(3, 1, 4, '2023-05-12 12:43:22', '2023-05-12 12:43:22'),
(4, 3, 2, '2023-05-12 13:18:17', '2023-05-12 13:18:17'),
(5, 8, 4, '2023-05-13 12:15:00', '2023-05-13 12:15:00'),
(6, 7, 5, '2023-05-13 12:16:01', '2023-05-13 12:16:01'),
(7, 7, 4, '2023-05-14 00:25:06', '2023-05-14 00:25:06'),
(8, 7, 2, '2023-05-14 00:26:05', '2023-05-14 00:26:05'),
(9, 7, 5, '2023-05-14 00:45:04', '2023-05-14 00:45:04'),
(10, 7, 5, '2023-05-14 01:53:13', '2023-05-14 01:53:13'),
(11, 6, 4, '2023-05-14 01:53:50', '2023-05-14 01:53:50'),
(12, 6, 2, '2023-05-14 01:53:53', '2023-05-14 01:53:53'),
(13, 1, 5, '2023-05-15 03:14:23', '2023-05-15 03:14:23'),
(14, 1, 4, '2023-06-08 14:29:37', '2023-06-08 14:29:37'),
(15, 1, 5, '2023-06-08 14:39:41', '2023-06-08 14:39:41'),
(16, 10, 19, '2023-06-14 09:53:59', '2023-06-14 09:53:59'),
(17, 1, 56, '2023-06-15 03:44:58', '2023-06-15 03:44:58'),
(18, 1, 56, '2023-07-01 14:20:49', '2023-07-01 14:20:49');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `pegawai_id` bigint(20) UNSIGNED DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `is_active`, `pegawai_id`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sriyono', 'admin@gmail.com', NULL, '$2y$10$cYjISUcmzKwQOcLz8Mp8QemlqNwxYEUyXAcYPFLf4lQPRthq0mSfS', 'admin', 1, 11, 'public/foto/E1AthyrKSP5tK2Mo0WTooARdbpPoI0XHrT1L5dlq.jpg', NULL, '2023-04-04 06:29:51', '2023-06-14 09:28:22'),
(2, 'Tri Haryanta', 'tri1234@gmail.com', NULL, '$2y$10$KlwTYGB5ttdM1TPwtoDvi.EU4gYcPzGznyW13WXP1IO3kiSOnvVBW', 'petugas', 1, 13, 'public/foto/fzxYYtkdXj79lq1QveBhar2cSBwZnrtYqYQHGXXD.jpg', NULL, '2023-05-13 12:12:13', '2023-06-14 09:31:31'),
(4, 'asni', 'asni123@gmail.com', NULL, '$2y$10$8n18tPOQMFaEFeJvDINlvukptM6zBKONK8gzc4Rm7tLPf3VYeZ02K', 'petugas', 1, 6, 'public/foto/v0Z5snJT1uIVvMIsYv9b9WgfZwl0kdjsDzebYVMa.jpg', NULL, '2023-06-14 09:37:02', '2023-06-14 10:37:01'),
(5, 'suhardi', 'suhardiii12@gmail.com', NULL, '$2y$10$gtf3uBEIY6YtRsw3uEJ2Q.DiujU8xV35EF6XiOqXKlhBY6yIQZd66', 'petugas', 1, 14, 'public/foto/SNdMKmY7Kjdq3bAdXEgkyLvWldqBF9a6491eNyyQ.jpg', NULL, '2023-06-14 10:36:45', '2023-06-14 10:36:45'),
(6, 'Theo feraldo', 'theoferaldo@gmail.com', NULL, '$2y$10$GX2bPp96PwAOWGSoBJ0kY.YbKX9ag3ONLizFkx/MtoFvIcqENqM8q', 'admin', 1, 121, 'public/foto/0eJerwJ1jfp00j24ihfwQ6ij0yPAeaOBAUakRCGD.jpg', NULL, '2023-06-14 11:02:42', '2023-06-14 11:02:42'),
(14, 'Mohammad Ari Kurnia Taufik', 'arikurnia@gmail.com', NULL, '$2y$10$qzLEOqyjeTsVdVnijj0MPOY6y3nfoD4MB4EhzyXwAIu6mD7FXZf5O', 'user', 1, 23, 'public/foto/C9sW5CuiOi74ClQLxgdj3AAwnuMW7VdmRD1ZGJzW.jpg', NULL, '2023-06-15 02:30:57', '2023-06-15 02:30:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsips`
--
ALTER TABLE `arsips`
  ADD PRIMARY KEY (`id`),
  ADD KEY `arsips_kode_index` (`kode`),
  ADD KEY `arsips_category_id_index` (`category_id`),
  ADD KEY `arsips_user_id_index` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `code_arsips`
--
ALTER TABLE `code_arsips`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code_arsips_code_index` (`code`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pegawais`
--
ALTER TABLE `pegawais`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pegawais_nip_unique` (`nip`),
  ADD KEY `pegawais_kd_kelamin_foreign` (`kd_kelamin`),
  ADD KEY `pegawais_kd_agama_foreign` (`kd_agama`);

--
-- Indexes for table `pengunduhs`
--
ALTER TABLE `pengunduhs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengunduhs_user_id_index` (`user_id`),
  ADD KEY `pengunduhs_arsip_id_index` (`arsip_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_email_index` (`email`),
  ADD KEY `users_role_index` (`role`),
  ADD KEY `users_is_active_index` (`is_active`),
  ADD KEY `pegawai_id` (`pegawai_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsips`
--
ALTER TABLE `arsips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `code_arsips`
--
ALTER TABLE `code_arsips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `pengunduhs`
--
ALTER TABLE `pengunduhs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
