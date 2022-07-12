-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 19 Nov 2021 pada 10.54
-- Versi server: 8.0.27
-- Versi PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `powermap_gis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE `customers` (
  `id` bigint UNSIGNED NOT NULL,
  `region_id` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `customers`
--

INSERT INTO `customers` (`id`, `region_id`, `nama`, `alamat`, `no_hp`, `file`, `latitude`, `longitude`, `created_at`, `updated_at`, `deleted_at`) VALUES
(52, '2', 'ari imam', 'd', 'd', '1632931578_Untitled.png', '-7.506471512781233', '110.10498046875001', '2021-09-29 09:06:18', '2021-10-16 07:12:08', '2021-10-16 07:12:08'),
(53, '4', 'agus', 'solo', '99', '1634372773_logo.png', '-7.5803277913301415', '110.06103515625001', '2021-10-16 01:26:13', '2021-10-16 01:30:51', '2021-10-16 01:30:51'),
(54, '2', 'test', 'solo', '000', '1634373079_logo.png', '-7.362466865535738', '109.599609375', '2021-10-16 01:31:19', '2021-10-16 07:12:12', '2021-10-16 07:12:12'),
(55, '2', 'ari imam', 'solo', '099', '1634537440_Screenshot_2021-09-21-20-15-22-819_com.dts.freefireth.jpg', '-7.538125746966706', '110.75042724609376', '2021-10-17 22:45:43', '2021-10-20 17:49:28', '2021-10-20 17:49:28'),
(56, '2', 'Linda Subiyanto', 'Jl Mawar Raya 1 A Fajar Indah, Baturan, Colomadu', '081225067076', '1634777480_linda.jpg', '-7.5469088', '110.791223', '2021-10-20 17:51:20', '2021-10-20 17:51:20', NULL),
(57, '2', 'Trio Handoko', 'Jl Mawar Barat 12 Blok B No.76 Fajar Indah, Baturan, Colomadu', '0816670130', '1634777933_trio h.jpg', '-7.5454851', '110.7909818', '2021-10-20 17:58:53', '2021-10-20 17:58:53', NULL),
(58, '2', 'Drs P Tridjoko Sembodho', 'Jl. Mawar Raya A 51 Rt 4 Rw 9 Fajar Indah Baturan Colomadu', '08113015151', '1634783640_sambodo.jpg', '-7.5450272', '110.7917729', '2021-10-20 19:34:00', '2021-10-20 19:34:00', NULL),
(59, '2', 'Djiu Nyo', 'Jl. Danliris Ruko Flamboyan Indah Ruko 12 Blulukan Colomadu Karanganyar', '081392389090', '1634784103_djiu .jpg', '-7.5430677', '110.7751575', '2021-10-20 19:41:43', '2021-10-20 19:41:43', NULL),
(60, '2', 'Bambang Purnomo', 'Toko Raffi Jl. Puspan Rt 002 Rw 007 Blulukan Colomadu Karanganyar', '085728008123', '1634784399_toko raffi.jpg', '-7.5438492', '110.7759207', '2021-10-20 19:46:39', '2021-10-20 19:46:39', NULL),
(61, '2', 'Khoiruddin Bagasfadnu', 'The Colomadu (Fotokopi De Tjolomadu) ,colomadu', '081225079034', '1634784602_foto kopi.jpg', '-7.5335992', '110.7507567', '2021-10-20 19:50:02', '2021-10-20 19:50:02', NULL),
(62, '2', 'Maria Pradinta Sari', 'Jl Mawar Barat V Blok C 54 Fajar Indah, Baturan, Colomadu', '087836565344', '1634784798_maria.jpg', '-7.5459001', '110.7906742', '2021-10-20 19:53:18', '2021-10-20 19:53:18', NULL),
(63, '2', 'Deny Alwan', 'Jl Permata Gajahan Rt 02 Rw 03 No.134 Colomadu', '08562510313', '1634785132_deny.jpg', '-7.5411237', '110.7618746', '2021-10-20 19:58:52', '2021-10-20 19:58:52', NULL),
(64, '2', 'Agus Lotus', 'Jl Pandan VIII No 16 Baturan Colomadu', '081325145079', '1634785379_agus.jpg', '-7.5424587', '110.787947', '2021-10-20 20:02:59', '2021-10-20 20:02:59', NULL),
(65, '2', 'PT ATMI BizDec', 'Jl LU Adi Sucipto Km 9,5 Blulukan Colomadu Karanganyar', '085728492095', '1634785750_atmi.jpg', '-7.5417916', '110.7667912', '2021-10-20 20:09:10', '2021-10-20 20:09:10', NULL),
(66, '4', 'Yoga Ichsan Permana', 'Jl Raya Grogol No.21 ( Sate Kambing Bu Mar )', '083849892976', '1634789155_yoga ic.jpg', '-7.604775', '110.8188127', '2021-10-20 21:05:55', '2021-10-20 21:05:55', NULL),
(67, '4', 'WD Anung Yunarko JR', 'Jl Panda AI-07 Solo Baru, Grogol', '081225928123', '1634789410_anung.jpg', '-7.6111587', '110.81359', '2021-10-20 21:10:10', '2021-10-20 21:10:10', NULL),
(68, '4', 'Dicky Haryanto 2', 'Jl Cendrawasih H-09 Perum Burung, Solo Baru, Grogol', '081229383200', '1634790173_dicky.jpg', '-7.6086399', '110.8147532', '2021-10-20 21:22:53', '2021-10-20 21:22:53', NULL),
(69, '4', 'Dicky Haryanto 1', 'Jl Cendrawasih L-09 Grogol Perum Burung, Solo baru, Grogol', '081229383200', '1634790274_dicky 1.jpg', '-7.6089956', '110.8146034', '2021-10-20 21:24:34', '2021-10-20 21:24:34', NULL),
(70, '4', 'Sukarmi (Damai Elektronik)', 'Jl Raya Grogol (Deket Kreteg Bacem)', '0822657652734', '1634790464_sukarmi.jpg', '-7.6112453', '110.8187529', '2021-10-20 21:27:44', '2021-10-20 21:27:44', NULL),
(71, '4', 'Haris Tyantoko 2', 'Jl Raya Grogol No.173 Sukoharjo', '081338823667', '1634790886_haris.jpg', '-7.6100538', '110.8187709', '2021-10-20 21:34:46', '2021-10-20 21:34:46', NULL),
(72, '4', 'PT Tecma Mitratama Advertindo', 'Jl. Lempuyang I No.3, Munyung, Kwarasan, Kec.Grogol, Kab. Sukoharjo, Jawa Tengah', '0271625646', '1634791979_tecma.jpg', '-7.5949714', '110.8107794', '2021-10-20 21:52:59', '2021-10-20 21:52:59', NULL),
(73, '4', 'PT Adi Surya Amartya', 'Jl Lempuyang 1 Munyung RT 001 RW 001 Kwarasan Grogol Sukoharjo', '62 898-5396-096', '1634792147_adi surya.jpg', '-7.5949615', '110.8110497', '2021-10-20 21:55:47', '2021-10-20 21:55:47', NULL),
(74, '6', 'Muhammad Irvan', 'Jl Melati 5 no B5-6 ,Perum Tiara Ardi Purbayan, Baki', '081231748395', '1634795379_soleto.png', '-7.5724717', '110.7748504', '2021-10-20 22:49:39', '2021-10-20 22:49:39', NULL),
(75, '6', 'Novi Era Larasati', 'Sawahan Baru Jl Melati 5 Rt.005/010 Purbayan Baki Sukoharjo', '082134279307', '1634795557_novi.png', '-7.5724717', '110.7748504', '2021-10-20 22:52:37', '2021-10-20 22:52:37', NULL),
(76, '6', 'Joko Nugroho', 'Jl Mangesti Raya rt 03 rw 03 Baki Gentan Sukoharjo', '085725524757', '1634796031_joko nug.png', '-7.5829215', '110.7802267', '2021-10-20 23:00:31', '2021-10-20 23:00:31', NULL),
(77, '6', 'Drs.Kiswantara', 'Jl Melati V BB 14 RT 005/010 Purbayan Baki Sukoharjo', 'Jl Melati V BB 14 005/010 Purbayan Baki Sukoharjo', '1634797690_kiswan.png', '-7.5727073', '110.7750814', '2021-10-20 23:28:10', '2021-10-20 23:28:10', NULL),
(78, '6', 'Sumitra', 'Perum Safira Mangesti, Jl Mangesti Raya, Dusun II, Purbayan, Baki', '082138688606', '1634798944_WhatsApp Image 2021-10-21 at 13.47.18.jpeg', '-7.5831981', '110.7699823', '2021-10-20 23:49:04', '2021-10-20 23:49:04', NULL),
(79, '4', 'Ronny Susanto', 'Jl Gelatik III blok X 8 Rt 04 rw 07 Solo Baru, Grogol', '087836550011', '1634798986_ronny.png', '-7.6079283', '110.8161925', '2021-10-20 23:49:46', '2021-10-20 23:49:46', NULL),
(80, '12', 'Ponco Sulistiyono', 'Perum Citra Jaya 1 No.26, Joho, Mojolaban', '089508284223', '1634804377_WhatsApp Image 2021-10-21 at 15.18.10.jpeg', '-7.593527', '110.881210', '2021-10-21 01:19:37', '2021-10-21 01:19:37', NULL),
(81, '4', 'Rudy Saksono', 'Jl Cemara Raya CH - 03, Perum Buah, Solo Baru ,Grogol', '08121547999', '1634871259_rudy.jpg', '-7.6066711', '110.806279', '2021-10-21 19:54:19', '2021-10-21 19:54:19', NULL),
(82, '4', 'Michel Julianto', 'Jl sawo FE 22 Perum Buah, Solo Baru, Grogol', '62 852-2981-8168', '1634871465_michel.jpg', '-7.6083865', '110.8048825', '2021-10-21 19:57:45', '2021-10-21 19:57:45', NULL),
(83, '6', 'Rakhmat Aries Raharjo', 'Perum Taman Anggrek A25, Gentan, Baki', '081342224950', '1634885148_WhatsApp Image 2021-10-22 at 13.44.40.jpeg', '-7.5828827', '110.765035', '2021-10-21 23:45:48', '2021-10-21 23:45:48', NULL),
(84, '2', 'Benny Widya Susanto S M', 'Fajar Indah Mawar Raya No. A20 Colomadu Karanganyar', '085726507785', '1634887076_WhatsApp Image 2021-10-22 at 14.16.44.jpeg', '-7.5462928', '110.7890797', '2021-10-22 00:16:07', '2021-10-22 00:17:56', NULL),
(85, '12', 'Tukimin', 'Sambilawang RT 1 RW 2, Demakan, Mojolaban', '087836301081', '1634890635_WhatsApp Image 2021-10-22 at 15.09.30.jpeg', '-7.5956736', '110.8687934', '2021-10-22 01:17:15', '2021-10-22 01:17:15', NULL),
(86, '6', 'laras ayu ningtyas', 'Jl. Empu Tantular No.22, Gentan, Baki', '082136214221', '1634899123_8FCDB5F5-5960-47DA-9C09-14A6C0B59456.jpeg', '-7.5817274', '110.7848549', '2021-10-22 03:36:33', '2021-10-22 03:38:43', NULL),
(87, '6', 'Miftah Intan Nurjanah', 'Perum Gentan Madani, Jl Mangesti Raya No. A3, Gentan, Baki', '085641453520', '1634966340_WhatsApp Image 2021-10-23 at 12.13.43.jpeg', '-7.583328', '110.783604', '2021-10-22 22:19:00', '2021-10-22 22:19:00', NULL),
(88, '12', 'Hariyanto', 'Seliran, RT 4 RW 8, Cangkol, Mojolaban', '081904775811', '1634967024_WhatsApp Image 2021-10-23 at 12.20.58.jpeg', '-7.6201664', '110.8826591', '2021-10-22 22:30:24', '2021-10-22 22:30:24', NULL),
(89, '12', 'Siti Isnaini Ibnurrohmah', 'Seliran, RT 4 RW 8, Cangkol, Mojolaban', '081393248016', '1634967132_WhatsApp Image 2021-10-23 at 12.21.37.jpeg', '-7.6201664', '110.8826591', '2021-10-22 22:32:12', '2021-10-22 22:32:12', NULL),
(90, '12', 'Nita Sari Kusumaningrum', 'Seliran, RT 4 RW 8, Cangkol, Mojolaban', '085728740193', '1634968491_WhatsApp Image 2021-10-23 at 12.50.27.jpeg', '-7.6199122', '110.8830782', '2021-10-22 22:54:51', '2021-10-22 22:54:51', NULL),
(91, '12', 'Ari Nugroho', 'Seliran RT 4 RW 8, Cangkol, Mojolaban', '085777331555', '1634968560_WhatsApp Image 2021-10-23 at 12.51.39.jpeg', '-7.6197485', '110.883256', '2021-10-22 22:56:00', '2021-10-22 22:56:00', NULL),
(92, '6', 'Miftah Intan Nurjanah', 'Perum Gentan Madani, Jl Mangesti Raya No. A3, Gentan', '085641453520', '1635058830_WhatsApp Image 2021-10-24 at 13.57.09.jpeg', '-7.5832744', '110.7814035', '2021-10-24 00:00:30', '2021-10-24 00:00:30', NULL),
(93, '2', 'Sherlyn', 'jl mawar barat 12 no.19 Fajar Indah, Baturan, Colomadu', '62 813-2576-8910', '1635130579_sherlin.jpg', '-7.5446903', '110.7912111', '2021-10-24 19:56:19', '2021-10-24 19:56:19', NULL),
(94, '12', 'Catur Hartanto', 'Jati Malang RT4/1 Joho Mojolaban Sukoharjo', '085642256294', '1635135251_WhatsApp Image 2021-10-25 at 11.11.58.jpeg', '-7.584544', '110.882228', '2021-10-24 21:14:11', '2021-10-24 21:14:11', NULL),
(95, '12', 'Otong Saepul Hidayat', 'Perum Graha Swastika, Klaruan, RT 4 RW 16, Palur, Mojolaban', '0000000000', '1635140824_WhatsApp Image 2021-10-25 at 12.27.45.jpeg', '-7.5807066', '110.8701701', '2021-10-24 22:47:04', '2021-10-24 22:47:04', NULL),
(96, '12', 'Bambang Purnomo', 'Perum Graha Swastika, Klaruan, RT 4 RW 16, Palur', '088981028344', '1635140903_WhatsApp Image 2021-10-25 at 12.30.06.jpeg', '-7.5803933', '110.8702592', '2021-10-24 22:48:23', '2021-10-24 22:48:23', NULL),
(97, '4', 'abdullah', 'JL. Semen Romo, Gang Mawar RT5/17 no.5B Cemani Grogol Sukoharjo', '085200690444', '1635140993_WhatsApp Image 2021-10-25 at 12.43.29.jpeg', '-7.5845146', '110.80882', '2021-10-24 22:49:53', '2021-10-24 22:49:53', NULL),
(98, '13', 'Ludi Suryadi', 'Jl. Suryo Pranoto no.57 RT6/2 Kepatihan Wetan Jebres Surakarta', '08122600277', '1635219791_WhatsApp Image 2021-10-26 at 10.40.46.jpeg', '-7.5672667', '110.8288363', '2021-10-25 20:43:11', '2021-10-25 20:43:11', NULL),
(99, '6', 'Hartono', 'Perum Tiara Ardi CC 60 Purbayan Baki Sukoharjo', '08327350333', '1635222190_WhatsApp Image 2021-10-26 at 11.17.03.jpeg', '-7.573672', '110.775064', '2021-10-25 21:23:10', '2021-10-25 21:23:10', NULL),
(100, '13', 'Sedar Panji Gumilang', 'Jl Rinjani Barat 6 No.2, RT 3 RW 19, Mojosongo, Jebres', '081539277611', '1635222259_WhatsApp Image 2021-10-26 at 11.08.41.jpeg', '-7.538438', '110.840936', '2021-10-25 21:24:19', '2021-10-25 21:24:19', NULL),
(101, '13', 'Surjo Budi Prajitno 1', 'JL. Kol Sutarto no.165 Jebres Surakarta', '089690516046', '1635222480_surjo.jpg', '-7.5598256', '110.838659', '2021-10-25 21:28:00', '2021-10-25 21:28:00', NULL),
(102, '4', 'Thomas Budi Utomo', 'Kwarasan Permai Blok C 6/8, Grogol', '2007048', '1635225425_thomas.jpg', '-7.600054', '110.8063421', '2021-10-25 22:17:05', '2021-10-25 22:17:05', NULL),
(103, '6', 'Yulianah', 'Kandilangu, RT 2 RW 2, Baki, Sukoharjo', '089518178405', '1635228200_WhatsApp Image 2021-10-26 at 12.54.38.jpeg', '-7.605282', '110.794075', '2021-10-25 23:03:20', '2021-10-25 23:03:20', NULL),
(104, '4', 'Andika Sri Buwana Sentosa', 'Perum Griya Sentosa Blok B7 Rt 008 Rw 006 Gedangan Grogol Sukoharjo', '08115416524', '1635229452_WhatsApp Image 2021-10-26 at 13.22.49.jpeg', '-7.602236', '110.796043', '2021-10-25 23:24:12', '2021-10-25 23:24:12', NULL),
(105, '6', 'Bagus Dimas Sagita', 'Tegalan Rt 003 Rw 007 Waru Baki Sukoharjo', '00000000000000', '1635309216_WhatsApp Image 2021-10-27 at 11.31.08.jpeg', '-7.572746', '110.775137', '2021-10-26 21:33:36', '2021-10-26 21:33:36', NULL),
(106, '6', 'Farida Agustina', 'Perum Graha Sakinah No. A5, Jl Dewa, Ruci Tower RCTI, Gentan, Baki', '081393898989', '1635314355_WhatsApp Image 2021-10-27 at 12.56.40 (1).jpeg', '-7.584549', '110.786238', '2021-10-26 22:59:15', '2021-10-26 22:59:15', NULL),
(107, '13', 'Indra Premono SE', 'Gang Anjaya 3, Joyoraharjan, RT 3 RW 10, Purwodiningratan, Jebres', '087836305757', '1635319901_WhatsApp Image 2021-10-27 at 14.26.06.jpeg', '-7.564322', '110.835689', '2021-10-27 00:31:41', '2021-10-27 00:31:41', NULL),
(108, '12', 'Ichsan Fathori', 'Perum Graha Swastika, Klaruan, Palur, Mojolaban', '0000000000', '1635320044_WhatsApp Image 2021-10-27 at 14.22.47.jpeg', '-7.580944', '110.872028', '2021-10-27 00:34:04', '2021-10-27 00:34:04', NULL),
(109, '2', 'Bambang Riyanto SH', 'Gajahan, RT 4 RW 1, Colomadu, Karanganyar', '085959640088', '1635399085_WhatsApp Image 2021-10-28 at 12.19.46.jpeg', '-7.545384', '110.758446', '2021-10-27 22:31:25', '2021-10-27 22:31:25', NULL),
(110, '2', 'Siwi Fauzia Rachma', 'Jati Rt 006 Rw 004 Cemani Grogol Sukoharjo', '089628730087', '1635404339_WhatsApp Image 2021-10-28 at 13.20.18.jpeg', '-7.575361', '110.803192', '2021-10-27 23:58:59', '2021-10-27 23:58:59', NULL),
(111, '6', 'Asri Yudyarti', 'Jl Perum Pondok Baru, Blok K RT 8 RW 12 No. 30, Gentan, Baki', '085642048921', '1635491153_WhatsApp Image 2021-10-29 at 14.03.06.jpeg', '-7.579409', '110.787047', '2021-10-29 00:05:53', '2021-10-29 00:05:53', NULL),
(112, '6', 'Dyah Ratna Pratiwi', 'perum griya fajar no 15, Gentan, Baki', '00000000000', '1635496707_CC31401C-39BE-4532-A33B-968718A2123C.jpeg', '-7.5790710', '110.7866520', '2021-10-29 01:38:27', '2021-10-29 01:38:27', NULL),
(113, '4', 'Lidia Sindoro', 'Apartemen Kahyangan Lt 18 No.17, Solo Baru', '08114004925', '1635568861_WhatsApp Image 2021-10-30 at 11.28.03.jpeg', '-7.611208', '110.811441', '2021-10-29 21:41:01', '2021-10-29 21:41:01', NULL),
(114, '6', 'Tatag Ardhiya Surya', 'Jl. Mangesti Raya Perum Pak Carik Rt 01 rw 03 Gentan Baki Sukoharjo', '085210708987', '1635584089_WhatsApp Image 2021-10-30 at 15.53.52.jpeg', '-7.583309', '110.779453', '2021-10-30 01:54:49', '2021-10-30 01:54:49', NULL),
(115, '12', 'Ernawati', 'ngunut rt 02 rw 10', '0000000000', '1635661272_0CFD1CFC-9CC8-4B40-8D63-A04F1EE661FA.jpeg', '-7.598565', '110.884277', '2021-10-30 23:21:12', '2021-10-30 23:21:12', NULL),
(116, '2', 'irawati irwanto', 'Perum Flamboyan Indah 1 Blok A9 ,Colomadu', '62 822-2352-4137', '1635739801_WhatsApp Image 2021-11-01 at 11.07.10.jpeg', '-7.543702', '110.774250', '2021-10-31 21:10:01', '2021-10-31 21:10:01', NULL),
(117, '6', 'umi', 'Jl. Merpati I 32-8, Ngebrak, Gentan, Kec. Baki, Kabupaten Sukoharjo,', '00000000', '1635742019_WhatsApp Image 2021-11-01 at 11.44.32.jpeg', '-7.577293', '110.784477', '2021-10-31 21:46:59', '2021-10-31 21:46:59', NULL),
(118, '6', 'Hokkie Riffianata', 'Jl. Flamboyan Dusun 1 Kadilangu Baki Sukoharjo', '082298890288', '1635827510_WhatsApp Image 2021-11-02 at 11.26.43.jpeg', '-7.605201', '110.793806', '2021-11-01 21:31:50', '2021-11-01 21:31:50', NULL),
(119, '13', 'Joni Hartono', 'Jl Demo Timur 1/10 Rt 3/4 Mojosongo , Kec. Jebres, Kota Surakarta, Jawa Tengah 57127', '085877360174', '1635833854_WhatsApp Image 2021-11-02 at 13.15.29.jpeg', '-7.536419', '110.836697', '2021-11-01 23:17:34', '2021-11-01 23:17:34', NULL),
(120, '13', 'aries cahyadi', 'Purwoprajan Rt 02 Rw 29 Jebres Surakarta', '081328280088', '1635920498_WhatsApp Image 2021-11-03 at 13.16.08.jpeg', '-7.558501', '110.840867', '2021-11-02 23:21:38', '2021-11-02 23:21:38', NULL),
(121, '12', 'Ahmadi', 'Jl Veteran Perang Kemerdekaan, RT 5, Demakan, Mojolaban', '081228934830', '1635921000_WhatsApp Image 2021-11-03 at 13.23.48 (1).jpeg', '-7.596760', '110.877383', '2021-11-02 23:30:00', '2021-11-02 23:30:00', NULL),
(122, '12', 'Joevancha Nicky Mutiara', 'Jl Veteran Parang Kemerdekaan RT 5, Demakan, Mojolaban', '085713662170', '1636002503_WhatsApp Image 2021-11-04 at 11.51.25.jpeg', '-7.596497', '110.877389', '2021-11-03 22:08:23', '2021-11-03 22:08:23', NULL),
(123, '4', 'Kartika Suryawati', 'Jl Jupiter No.32, Dusun I Gedangan RT 4 RW 6, Grogol', '08122979323', '1636002698_WhatsApp Image 2021-11-04 at 12.04.13.jpeg', '-7.602924', '110.796860', '2021-11-03 22:11:38', '2021-11-03 22:11:38', NULL),
(124, '12', 'Erma Sri Wahyuni', 'Jatimalang 002/012 Palur Mojolaban', '08992771359', '1636009807_erma.jpg', '-7.5819614', '110.8811008', '2021-11-04 00:10:07', '2021-11-04 00:10:07', NULL),
(125, '12', 'Jakobus Catur Vitriyanto', 'Tegal, RT 2 RW 2, Triyagan, Mojolaban, Sukoharjo', '082226134257', '1636092453_WhatsApp Image 2021-11-05 at 13.02.37.jpeg', '-7.578343', '110.892563', '2021-11-04 23:07:33', '2021-11-04 23:07:33', NULL),
(126, '12', 'Joko Purnomo', 'Tegal, RT 2 RW 2, Triyagan, Mojolaban, Sukoharjo', '085331770288', '1636096303_WhatsApp Image 2021-11-05 at 14.11.04 (1).jpeg', '-7.579043', '110.892249', '2021-11-05 00:11:43', '2021-11-05 00:11:43', NULL),
(127, '12', 'Suwartono', 'Tegal, RT 2 RW 2, Triyagan, Mojolaban, Sukoharjo', '085293347402', '1636098873_WhatsApp Image 2021-11-05 at 13.21.17.jpeg', '-7.578667', '110.892357', '2021-11-05 00:54:33', '2021-11-05 00:54:33', NULL),
(128, '12', 'Joko Ariyanto', 'Tegal Rt 002 Rw 002 Triyagan Mojolaban', '081390705942', '1636099482_WhatsApp Image 2021-11-05 at 14.59.29 (1).jpeg', '-7.578409', '110.892423', '2021-11-05 01:04:42', '2021-11-05 01:04:42', NULL),
(129, '12', 'Yenita Sari', 'Godegan, RT 2 RW 14, Wirun, Mojolaban', '085869030126', '1636172830_WhatsApp Image 2021-11-06 at 11.19.13.jpeg', '-7.6011737', '110.8667689', '2021-11-05 21:27:10', '2021-11-05 21:27:10', NULL),
(130, '12', 'Ahmad Ainurofiq', 'Triyagan RT 002 / 006 , Triyagan, Mojolaban, Sukoharjo', '08156672276', '1636174142_WhatsApp Image 2021-11-06 at 11.46.59 (1).jpeg', '-7.587557792663574', '110.90017700195312', '2021-11-05 21:49:02', '2021-11-05 21:49:02', NULL),
(131, '4', 'Yulia Lieshawati', 'Jl Gelatik Raya S12, Langenharjo, Grogol', '081393707101', '1636174215_WhatsApp Image 2021-11-06 at 11.34.09.jpeg', '-7.606507', '110.812489', '2021-11-05 21:50:15', '2021-11-05 21:50:15', NULL),
(132, '13', 'Rahadhian Aji Pradana', 'Jagalan, RT 2 RW 15, Jebres', '089509391777', '1636179454_WhatsApp Image 2021-11-06 at 13.15.53.jpeg', '-7.569098', '110.846432', '2021-11-05 23:17:34', '2021-11-05 23:17:34', NULL),
(133, '12', 'Roni Kristiawan', 'Godegan, RT 1 RW 15, Wirun, Mojolaban', '085647224229', '1636184147_WhatsApp Image 2021-11-06 at 14.33.46.jpeg', '-7.602262', '110.866795', '2021-11-06 00:35:47', '2021-11-06 00:35:47', NULL),
(134, '13', 'Aldino Yanuafi', 'Jl Lampo Batang Tengah 1 No 15 Mojosongo Jebres Surakarta', '081392367194', '1636351365_WhatsApp Image 2021-11-08 at 12.54.00.jpeg', '-7.533705', '110.841091', '2021-11-07 23:02:45', '2021-11-07 23:02:45', NULL),
(135, '12', 'Sri Surani', 'Godegan, RT 5 RW 14, Wirun, Mojolaban', '085741859817', '1636353620_WhatsApp Image 2021-11-08 at 13.37.18.jpeg', '-7.602199', '110.865955', '2021-11-07 23:40:20', '2021-11-07 23:40:20', NULL),
(136, '12', 'Waluyo Widodo', 'Godegan, RT 4 RW 14, Wirun, Mojolaban', '081568361110', '1636354204_WhatsApp Image 2021-11-08 at 13.37.57.jpeg', '-7.602199', '110.865955', '2021-11-07 23:50:04', '2021-11-07 23:50:04', NULL),
(137, '12', 'Kardi Purwanto', 'Godegan, RT 4 RW 14, Wirun, Mojolaban', '085728793001', '1636358632_WhatsApp Image 2021-11-08 at 14.20.44.jpeg', '-7.602199', '110.865955', '2021-11-08 01:03:52', '2021-11-08 01:03:52', NULL),
(138, '4', 'Devi Yanuar', 'perum peny regency 2 gedangan solo baru', '082136214772', '1636519728_WhatsApp Image 2021-11-10 at 11.20.58 (1).jpeg', '-7.601414', '110.803162', '2021-11-09 21:48:48', '2021-11-09 21:48:48', NULL),
(139, '4', 'Supadmo', 'perum peny regency 2 no.A-9 gedangan solo baru, Grogol', '081326152098', '1636519796_WhatsApp Image 2021-11-10 at 11.19.17 (1).jpeg', '-7.601414', '110.803162', '2021-11-09 21:49:56', '2021-11-09 21:49:56', NULL),
(140, '2', 'Sriyanto', 'Kampung Puspan RT 2 RW 7, Kost Puspan, Blulukan, Colomadu', '+6281245371822', '1636697769_WhatsApp Image 2021-11-12 at 12.35.47.jpeg', '-7.5429725', '110.7740045', '2021-11-11 23:16:09', '2021-11-11 23:16:09', NULL),
(141, '2', 'Eko Sarjono', 'Ngerengan 2/3 Gawanan Colomadu', '000000000000000000', '1636697858_WhatsApp Image 2021-11-12 at 12.49.20.jpeg', '-7.5282339', '110.7509562', '2021-11-11 23:17:38', '2021-11-11 23:17:38', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `histories`
--

CREATE TABLE `histories` (
  `id` bigint UNSIGNED NOT NULL,
  `customer_id` int NOT NULL,
  `tanggal` date NOT NULL,
  `trouble` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `histories`
--

INSERT INTO `histories` (`id`, `customer_id`, `tanggal`, `trouble`, `action`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 52, '2021-10-16', 'Kabel putus Di rumah', 'resplice di odp', '2021-10-15 23:57:51', '2021-10-16 07:11:38', '2021-10-16 07:11:38'),
(7, 56, '2021-10-15', 'kabel putus di atas genting rumah pelanggan', 'Resplice kabel fiber iptik', '2021-10-21 20:15:28', '2021-10-21 20:15:28', NULL),
(8, 86, '2021-10-22', 'modem hang', 'ganti modem baru', '2021-10-22 03:40:33', '2021-10-22 03:40:33', NULL),
(9, 80, '2021-10-22', 'kabel fo putus di fast konektor', 'ganti konektor baru', '2021-10-22 03:41:14', '2021-10-22 03:41:14', NULL),
(10, 74, '2021-10-22', 'Fo cut di dalam ODP', 'rescplice kabel FO', '2021-10-22 03:41:51', '2021-10-22 03:41:51', NULL),
(11, 70, '2021-10-25', 'Kabel Fiber optik putus di dalam rumah', 'resplice kabel fiber optik', '2021-10-24 21:18:01', '2021-10-24 21:18:01', NULL),
(12, 101, '2021-10-26', 'kabel fo putus didalam odp', 'resplice didalam odp', '2021-10-25 21:30:00', '2021-10-25 21:30:00', NULL),
(13, 96, '2021-10-27', 'adaptor modem rusak', 'ganti adaptor baru', '2021-10-26 23:13:36', '2021-10-26 23:13:36', NULL),
(14, 98, '2021-10-27', 'odp pelanggan mati', 'perbaikan odp oleh team jaringan', '2021-10-26 23:14:05', '2021-10-26 23:14:05', NULL),
(15, 67, '2021-10-28', 'Kabel Fiber optik dimakan tikus di atas plafon', 'Resplice kabel fiber iptik di atas plafon', '2021-10-28 01:33:15', '2021-10-28 01:33:15', NULL),
(16, 109, '2021-10-28', 'Modem error', 'reconfig modem', '2021-10-28 01:33:43', '2021-10-28 01:33:43', NULL),
(17, 111, '2021-10-29', 'fast konektor spc rusak', 'ganti Konektor scp baru', '2021-10-29 00:06:51', '2021-10-29 00:06:51', NULL),
(18, 99, '2021-10-29', 'kabel pigtail putus terknea meja', 'ganti kabel pigtail baru', '2021-10-29 00:07:20', '2021-10-29 00:07:20', NULL),
(19, 102, '2021-10-29', 'wifi modem tidak tampil', 'ganti modem baru', '2021-10-29 00:07:41', '2021-10-29 00:07:41', NULL),
(20, 112, '2021-10-29', 'Sinyal Redaman kabel fiber optik naik', 'ganti konektor baru di odp', '2021-10-29 01:39:39', '2021-10-29 01:39:39', NULL),
(21, 66, '2021-10-29', 'fiber cut di dalam odp', 'resplice di odp', '2021-10-29 01:40:32', '2021-10-29 01:40:32', NULL),
(22, 68, '2021-10-29', 'Modem sering restart sendiri dan koneksi internet tidak lancar', 'ganti modem baru', '2021-10-29 06:35:50', '2021-10-29 06:35:50', NULL),
(23, 113, '2021-10-30', 'kabel patcord putus terhimpit meja', 'ganti patcord baru', '2021-10-29 21:48:26', '2021-10-29 21:48:26', NULL),
(24, 115, '2021-10-31', 'kabel putus kena layangan', 'ganti kabel baru dari titik odp ke titik rumah pelanggan', '2021-10-30 23:22:42', '2021-10-30 23:22:42', NULL),
(25, 116, '2021-11-01', 'koneksi wifi sering putus-putus', 'ganti channel frequensi wifi ke chael 11 karena channel yg di pake sebelumnya sudah full', '2021-10-31 21:11:05', '2021-10-31 21:11:05', NULL),
(26, 101, '2021-11-01', 'router mikroting tereset', 'seting ulang mikrotik dan management bandwith', '2021-11-01 01:21:49', '2021-11-01 01:21:49', NULL),
(27, 72, '2021-11-02', 'kabel backbone putus di dekat jembatan bacem', 'resplice kabel', '2021-11-01 17:51:56', '2021-11-01 17:51:56', NULL),
(28, 113, '2021-11-04', 'Tplink tereset pelanggan', 'seting ulang tplink', '2021-11-03 22:12:19', '2021-11-03 22:12:19', NULL),
(29, 116, '2021-11-04', 'sinyal redaman fiber optik naik', 'resplice kabel FO disisi odp pelanggan', '2021-11-03 22:12:58', '2021-11-03 22:12:58', NULL),
(30, 98, '2021-11-04', 'modem sering restart sendiri', 'ganti modem baru', '2021-11-04 00:38:50', '2021-11-04 00:38:50', NULL),
(31, 127, '2021-11-05', 'Modem sering hang', 'Ganti modem baru', '2021-11-05 00:56:34', '2021-11-05 00:56:34', NULL),
(32, 62, '2021-11-05', 'Kabel putus di dalam rumah', 'Resplice kabel fiber optik', '2021-11-05 00:57:01', '2021-11-05 00:57:01', NULL),
(33, 133, '2021-11-06', 'kabel fiber optik putus terkena layangan', 'tarik ulang kabel fiber optik baru', '2021-11-06 00:41:44', '2021-11-06 00:41:44', NULL),
(34, 120, '2021-11-06', 'sinyal redaman fiber optik di odp naik', 'perbaikan odp oleh team jaringan', '2021-11-06 00:42:15', '2021-11-06 00:42:15', NULL),
(35, 73, '2021-11-06', 'koneksi inet di lantai atas error', 'restart switch dlink di server', '2021-11-06 00:43:00', '2021-11-06 00:43:00', NULL),
(36, 56, '2021-11-08', 'kabel fiber optik di makan tikus', 'tarik ulang kabel fiber optik baru dari sisi odp ke rumah pelanggan', '2021-11-07 23:12:36', '2021-11-07 23:12:36', NULL),
(37, 134, '2021-11-08', 'odp pelanggan rusak', 'perbaikan odp oleh team jaringan', '2021-11-07 23:13:04', '2021-11-07 23:13:04', NULL),
(38, 78, '2021-11-09', 'Kabel putus di dekat modem', 'Putus kabel ganti fast konektor baru', '2021-11-09 03:38:53', '2021-11-09 03:38:53', NULL),
(39, 138, '2021-11-10', 'Sinyal redaman fiber optik naik 28DBm', 'Resplice kabel fiber optik di odp', '2021-11-10 02:07:52', '2021-11-10 02:07:52', NULL),
(40, 139, '2021-11-10', 'Redama kabel fiber optik naik 32DBm', 'Resplice kabel fiber optik dengan pigtail di odp', '2021-11-10 02:08:38', '2021-11-10 02:08:38', NULL),
(41, 61, '2021-11-10', 'Adaptor modem mati', 'Ganti adaptor baru', '2021-11-10 02:09:03', '2021-11-10 02:09:03', NULL),
(42, 63, '2021-11-10', 'Kabel fiber optik rusak', 'Instalasi kabel baru dari sisi odp kerumah pelanggan', '2021-11-10 02:09:42', '2021-11-10 02:09:42', NULL),
(43, 100, '2021-11-11', 'Modem blank tidak mau hidup', 'Ganti modem baru', '2021-11-11 04:34:29', '2021-11-11 04:34:29', NULL),
(44, 141, '2021-11-12', 'Fast konektor rusak ,sehingga sinyal fiber optik naik 28db', 'Ganti fast konektor baru', '2021-11-12 03:50:55', '2021-11-12 03:50:55', NULL),
(45, 140, '2021-11-12', 'Modem mati terkena air hujan', 'Ganti modem baru', '2021-11-12 03:51:28', '2021-11-12 03:51:28', NULL),
(46, 125, '2021-11-13', 'splitter 1/8 di odp mropol', 'resplice & ganti spliter 1/8 baru', '2021-11-13 05:27:03', '2021-11-13 05:27:03', NULL),
(47, 69, '2021-11-13', 'kabel putus di sambungan atas rumah', 'resplice ulang sambungan di atas rumah', '2021-11-13 05:27:38', '2021-11-13 05:27:38', NULL),
(48, 85, '2021-11-15', 'Kabel putus terkena perbaikan bangunan di rumah pelanggan', 'Pindah jalur dan resplice kabel fiber optik', '2021-11-15 05:35:11', '2021-11-15 05:35:11', NULL),
(49, 125, '2021-11-15', 'Modem error indikator lampu nyala semua', 'Ganti modem baru', '2021-11-15 05:36:05', '2021-11-15 05:36:05', NULL),
(50, 61, '2021-11-15', 'Modem mati', 'Colokan stop kontak rusak sehingga modem mati', '2021-11-15 05:37:40', '2021-11-15 05:37:40', NULL),
(51, 103, '2021-11-15', 'Kabel fiber putus terkena penebangan pohon', 'Ganti kabel baru + ikr ulang', '2021-11-15 05:39:01', '2021-11-15 05:39:01', NULL),
(52, 81, '2021-11-18', 'sinyal fiber optik naik 28 db', 'ganti komektor baru di odp', '2021-11-17 21:07:00', '2021-11-17 21:07:00', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_08_03_153518_create_regions_table', 2),
(5, '2021_08_04_044639_create_customers_table', 3),
(6, '2021_08_04_050309_create_riwayats_table', 3),
(7, '2021_08_04_050346_create_histories_table', 3),
(8, '2021_08_06_144645_create_tampils_table', 4),
(9, '2021_08_18_025218_create_permission_tables', 4),
(10, '2021_09_20_151938_add_softdeteles_to_histories', 5),
(11, '2021_09_20_152139_add_softdeteles_to_customer', 6),
(12, '2021_09_20_152427_add_softdeteles_to_customers', 7),
(13, '2021_09_22_041014_add_softdeteles_to_regions', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(3, 'App\\Models\\User', 6),
(4, 'App\\Models\\User', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `regions`
--

CREATE TABLE `regions` (
  `id` bigint UNSIGNED NOT NULL,
  `kode_wilayah` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_wilayah` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `regions`
--

INSERT INTO `regions` (`id`, `kode_wilayah`, `nama_wilayah`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'CLMD', 'Colomadu', '2021-08-03 22:00:50', '2021-10-16 07:57:00', NULL),
(3, 'SB', 'Solo Baru', '2021-08-03 22:01:00', '2021-10-16 07:56:45', '2021-10-16 07:56:45'),
(4, 'GRG', 'Grogol', '2021-08-03 22:01:13', '2021-10-20 21:00:49', NULL),
(6, 'BK', 'Baki', '2021-08-03 22:01:33', '2021-10-20 20:32:27', NULL),
(9, 'PLR', 'Palur', '2021-08-12 06:43:03', '2021-10-24 22:58:42', '2021-10-24 22:58:42'),
(10, 'PK', 'Pasar Kliwon', '2021-09-20 06:57:36', '2021-10-16 07:56:42', '2021-10-16 07:56:42'),
(11, 'cb', 'cb', '2021-09-21 22:07:37', '2021-09-21 22:07:44', '2021-09-21 22:07:44'),
(12, 'MJLBN', 'Mojolaban', '2021-10-18 07:42:56', '2021-10-18 07:42:56', NULL),
(13, 'JBRS', 'Jebres', '2021-10-24 22:59:11', '2021-10-24 22:59:11', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(3, 'admin', 'web', '2021-08-18 06:24:48', '2021-08-18 06:24:48'),
(4, 'teknisi', 'web', '2021-08-18 06:24:48', '2021-08-18 06:24:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tampils`
--

CREATE TABLE `tampils` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'Admin', 'admin@powertel.com', NULL, '$2y$10$SSQPGJ9AAACRywWYLmm2XexFNlzbO58C1lVz//pJG//hSEsjlSAAC', 'hlENyZSQbhovQNEue7Ygso8lI6n6sNw5M0ulpq6vVr9lnatRj5PeZUbBWVby', '2021-08-18 06:24:48', '2021-10-24 04:20:45'),
(7, 'Teknisi', 'teknisi@powertel.com', NULL, '$2y$10$XYnhVYHsFkKpVnNeIP26r.PksoVNJrrzHHh5IEEdc/.62SRWWFLYi', 'Nele2VTDf9L1Y7sCTIU3wWCoRJXDOGDixBK1XUFJdKucEHgOaMpSyP0S5sww', '2021-08-18 06:24:49', '2021-10-24 04:20:36');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `region_id` (`region_id`(768));

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `tampils`
--
ALTER TABLE `tampils`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `histories`
--
ALTER TABLE `histories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tampils`
--
ALTER TABLE `tampils`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
