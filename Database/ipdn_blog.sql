-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 03:07 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipdn_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbimgnews`
--

CREATE TABLE `tbimgnews` (
  `news_id` int(11) NOT NULL,
  `fotonews` varchar(300) NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbjournal`
--

CREATE TABLE `tbjournal` (
  `id` int(11) NOT NULL,
  `ktg_id` int(11) NOT NULL,
  `namajurnal` varchar(128) NOT NULL,
  `linkjurnal` varchar(128) NOT NULL,
  `tglupload` date NOT NULL,
  `filename` varchar(300) NOT NULL,
  `didownload` int(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbjournal`
--

INSERT INTO `tbjournal` (`id`, `ktg_id`, `namajurnal`, `linkjurnal`, `tglupload`, `filename`, `didownload`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'pc_gaming_speks.txt', 'pc_gaming_speks.txt', '2022-11-02', 'pc_gaming_speks.txt', 0, '2022-11-03 04:48:13', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbkategori`
--

CREATE TABLE `tbkategori` (
  `id` int(11) NOT NULL,
  `ktgname` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbkategori`
--

INSERT INTO `tbkategori` (`id`, `ktgname`) VALUES
(2, 'Sosial Media'),
(3, 'Kesehatan Masyarakat'),
(4, 'Hiburan Netizen'),
(5, 'Tekhnologi'),
(6, 'Market Indonesia'),
(7, 'Ekonomi Indonesia'),
(8, 'Pendidikan Indonesia'),
(9, 'Internasional Goverment'),
(10, 'Kriminalitas Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `tbmainpage`
--

CREATE TABLE `tbmainpage` (
  `id` int(11) NOT NULL,
  `ip_address` char(50) NOT NULL,
  `ip_location` varchar(300) NOT NULL,
  `framemap` varchar(300) NOT NULL,
  `titepage` varchar(120) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `telpact` char(20) NOT NULL,
  `sosmedia` varchar(20) NOT NULL,
  `linksosmed` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbnews`
--

CREATE TABLE `tbnews` (
  `id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `urlnews` varchar(128) NOT NULL,
  `isinews` text NOT NULL,
  `tglposting` date NOT NULL,
  `penulis` varchar(128) NOT NULL,
  `dibaca` int(2) NOT NULL DEFAULT 0,
  `foto` varchar(128) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbnews`
--

INSERT INTO `tbnews` (`id`, `kategori_id`, `title`, `urlnews`, `isinews`, `tglposting`, `penulis`, `dibaca`, `foto`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'Memanfaatkan Sosial Media Menjadi Sarana Hiburan', 'Memanfaatkan Sosial Media Menjadi Sarana Hiburan', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit totam repellendus in vero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit.', '2022-11-02', 'Administrator System', 0, 'UPD-2211020e11b723ee.jpg', '2022-11-02 21:43:02', NULL, NULL),
(2, 2, 'Whatsapp Menjadi Alat Komunikasi Penting', 'Whatsapp Menjadi Alat Komunikasi Penting', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit totam repellendus in vero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit.', '2022-11-02', 'Administrator System', 0, 'UPD-2211023d4ce3dd9a.jpg', '2022-11-02 21:51:59', NULL, NULL),
(3, 3, 'Peran Penting Olahraga Dalam Tubuh', 'Peran Penting Olahraga Dalam Tubuh', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit totam repellendus in vero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit.', '2022-11-02', 'Administrator System', 0, 'default_img_news.jpg', '2022-11-02 21:57:05', NULL, NULL),
(4, 3, 'Bahaya Buruknya Lingkungan Terhadap Kesehatan', 'bahaya_buruknya_lingkungan_terhadap_kesehatan', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit totam repellendus in vero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit.', '2022-11-02', 'Administrator System', 0, 'default_img_news.jpg', '2022-11-02 10:22:35', NULL, NULL),
(5, 3, 'Peran Penting Orang Tua Dalam Berolahraga', 'Peran Penting Orang Tua Dalam Berolahraga', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit totam repellendus in vero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit.', '2022-11-02', 'Administrator System', 0, 'default_img_news.jpg', '2022-11-02 21:58:02', NULL, NULL),
(6, 4, 'Sosial Media Tiktok Dan Instagram Menjadi Alat Hiburan', 'sosial_media_tiktok_dan_instagram_menjadi_alat_hiburan', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit totam repellendus in vero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit.', '2022-11-02', 'Users Panel', 0, 'default_img_news.jpg', '2022-11-02 10:22:35', NULL, NULL),
(7, 5, 'Teknologi Perang Indonesia Dilirik Paman Putin', 'teknologi_perang_indonesia_dilirik_paman_putin', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit totam repellendus in vero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit.', '2022-11-04', 'Users Panel', 0, 'default_img_news.jpg', '2022-11-02 10:22:35', NULL, NULL),
(8, 5, 'Indonesia Peralatan Tempur Milik Paman Putin', 'indonesia_peralatan_tempur_milik_paman_putin', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit totam repellendus in vero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit.', '2022-11-04', 'Administrator System', 0, 'default_img_news.jpg', '2022-11-02 10:22:35', NULL, NULL),
(9, 10, 'Kejahatan Dimata Hukum Undang-undang Indonesia', 'kejahatan_dimata_hukum_undang-undang_indonesia', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit totam repellendus in vero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit.', '2022-11-09', 'Users Panel', 0, 'default_img_news.jpg', '2022-11-02 10:36:29', NULL, NULL),
(10, 10, 'Kejahatan Terhadap Wanita', 'kejahatan_terhadap_wanita', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit totam repellendus in vero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit.', '2022-11-04', 'Users Panel', 0, 'default_img_news.jpg', '2022-11-02 10:36:29', NULL, NULL),
(11, 7, 'Perkembangan Harga Telur Dan Daging Yang Rumit', 'perkembangan_harga_telur_dan_daging_yang_rumit', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit totam repellendus in vero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit.', '2022-11-03', 'Administrator System', 0, 'default_img_news.jpg', '2022-11-02 10:36:29', NULL, NULL),
(12, 2, 'Sosial Media Menjadi Alat Informasi Public', 'sosial_media_menjadi_alat_informasi_public', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit totam repellendus in vero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit.', '2022-11-06', 'Administrator System', 0, 'default_img_news.jpg', '2022-11-02 10:36:29', NULL, NULL),
(13, 9, 'Pengadaan Goverment Summit G20', 'pengadaan_goverment_summit_g20', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit totam repellendus in vero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit.', '2022-11-07', 'Users Panel', 0, 'default_img_news.jpg', '2022-11-02 10:36:29', NULL, NULL),
(14, 6, 'Harga BBM Periode Bulan November Turun Per Tanggal 1', 'harga_bbm_periode_bulan_november_turun_per_tanggal_1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit totam repellendus in vero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit.', '2022-11-02', 'Users Panel', 0, 'default_img_news.jpg', '2022-11-02 10:47:13', NULL, NULL),
(15, 6, 'Menurunya Harga Cabai Indonesia', 'menurunya_harga_cabai_indonesia', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit totam repellendus in vero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit.', '2022-11-03', 'Users Panel', 0, 'default_img_news.jpg', '2022-11-02 10:47:13', NULL, NULL),
(16, 6, 'Meningkatnya Harga Daging Di Pasar Indonesia', 'meningkatnya_harga_daging_di_pasar_indonesia', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit totam repellendus in vero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit.', '2022-11-06', 'Users Panel', 0, 'default_img_news.jpg', '2022-11-02 10:47:13', NULL, NULL),
(17, 8, 'Kembalinya Minus Pendidikan Karena Kurang Perhatian Khusus', 'kembalinya_minus_pendidikan_karena_kurang_perhatian_khusus', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit totam repellendus in vero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit.', '2022-11-05', 'Administrator System', 0, 'default_img_news.jpg', '2022-11-02 10:47:13', NULL, NULL),
(18, 8, 'Penerapan Tekhnologi Sebagai Media Pembelajaran', 'penerapan_tekhnologi_sebagai_media_pembelajaran', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit totam repellendus in vero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum iste nesciunt illo nobis ea necessitatibus, omnis commodi deserunt earum libero quod voluptatibus enim fugiat impedit.', '2022-11-03', 'Users Panel', 0, 'default_img_news.jpg', '2022-11-02 10:47:13', NULL, NULL),
(19, 3, 'Tester Berita Terbrau', 'Tester Berita Terbrau', 'Isi berita tekhnologi di perbarui diterbaru terbaru document', '2022-11-02', 'Administrator System', 0, 'UPD-221102b89024a6f0.jpg', '2022-11-02 21:45:34', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbnewsdraft`
--

CREATE TABLE `tbnewsdraft` (
  `id` int(11) NOT NULL,
  `kategori_id` int(11) DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `urlnews` varchar(128) DEFAULT NULL,
  `isinews` text DEFAULT NULL,
  `tglposting` date DEFAULT NULL,
  `dibaca` int(2) NOT NULL DEFAULT 0,
  `penulis` varchar(120) NOT NULL,
  `foto` varchar(300) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbnewsdraft`
--

INSERT INTO `tbnewsdraft` (`id`, `kategori_id`, `title`, `urlnews`, `isinews`, `tglposting`, `dibaca`, `penulis`, `foto`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'Tester Berita Terbaru', 'Tester Berita Terbaru', '', '2022-11-03', 0, 'Administrator System', NULL, '2022-11-03 06:22:13', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbusers`
--

CREATE TABLE `tbusers` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nikuser` char(10) NOT NULL,
  `password` varchar(300) NOT NULL,
  `nm_lengkap` varchar(120) NOT NULL,
  `email` varchar(200) NOT NULL,
  `is_active` int(2) NOT NULL,
  `role_id` int(11) NOT NULL,
  `foto` varchar(300) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbusers`
--

INSERT INTO `tbusers` (`id`, `username`, `nikuser`, `password`, `nm_lengkap`, `email`, `is_active`, `role_id`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'adminusers', '0042150610', '$2y$10$AOVWMlCnhIkXwmB3L5ZjFuwbRH1IMwD7cTTp3kvD393wpoiETjj9u', 'Administrator System', 'admin.ipdnblog11@sample.xml', 1, 1, 'UPD-221102_1_e607206095.jpg', '2022-11-01 23:58:10', '2022-11-03 05:20:06'),
(2, 'userspanel', '0045160510', '$2y$10$ub9yI5d0bJMkt4raf4l60elbFav4q1fshvXEvtn8orVQndKoZGC3C', 'Users Panel', 'user.panelipdn21@sample.xml', 1, 2, 'NWU102988fe819409.jpg', '2022-11-02 02:08:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbusersaccessmenu`
--

CREATE TABLE `tbusersaccessmenu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbusersaccessmenu`
--

INSERT INTO `tbusersaccessmenu` (`id`, `role_id`, `menu_id`) VALUES
(3, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbusersmenu`
--

CREATE TABLE `tbusersmenu` (
  `id` int(11) NOT NULL,
  `menunm` varchar(128) NOT NULL,
  `url` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `menu_active` int(2) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbusersmenu`
--

INSERT INTO `tbusersmenu` (`id`, `menunm`, `url`, `icon`, `menu_active`, `created_at`, `updated_at`) VALUES
(1, 'Dashboard', 'news_dashboard_panel_system_xml', 'ft-home', 1, '2022-11-02 02:30:27', NULL),
(2, 'Blogs', 'news_halaman_berita_data_xml', 'ft-book', 1, '2022-11-02 02:36:53', NULL),
(3, 'Journal', 'news_dashboard_panel_system_xml', 'fa fa-sharp fa-solid fa-server', 1, '2022-11-02 02:36:53', NULL),
(4, 'Gallery', 'news_dashboard_panel_system_xml', 'fa-solid fa-camera-retro', 1, '2022-11-02 02:36:53', NULL),
(5, 'Setting Website', 'news_dashboard_panel_system_xml', 'fa-solid fa-computer', 1, '2022-11-02 02:36:53', NULL),
(6, 'Profile', 'news_profile_data_xml', 'fa-solid fa-user-shield', 1, '2022-11-02 02:36:53', NULL),
(7, 'Rule System', 'news_profile_rules_system_data_xml', 'fa-solid fa-user-gear', 1, '2022-11-02 02:36:53', NULL),
(8, 'Menu', 'news_halaman_kelolamenu_data_xml', 'fa-solid fa-folder-tree', 1, '2022-11-02 02:36:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbusersrole`
--

CREATE TABLE `tbusersrole` (
  `id` int(11) NOT NULL,
  `nmrole` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbusersrole`
--

INSERT INTO `tbusersrole` (`id`, `nmrole`) VALUES
(1, 'Administrator'),
(2, 'Users'),
(3, 'Pembaca');

-- --------------------------------------------------------

--
-- Table structure for table `tbusersvisit`
--

CREATE TABLE `tbusersvisit` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tgl_visit` date NOT NULL,
  `timevisit` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbusersvisit`
--

INSERT INTO `tbusersvisit` (`id`, `user_id`, `tgl_visit`, `timevisit`) VALUES
(1, 1, '2022-11-03', '01:00:00'),
(2, 1, '2022-11-03', '07:06:42'),
(3, 2, '2022-11-03', '07:15:02'),
(4, 1, '2022-11-03', '07:36:27'),
(5, 1, '2022-11-03', '08:20:15'),
(6, 1, '2022-11-03', '09:31:21'),
(7, 2, '2022-11-03', '09:51:01'),
(8, 1, '2022-11-03', '11:22:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbusertimeline`
--

CREATE TABLE `tbusertimeline` (
  `id` int(11) NOT NULL,
  `nmactivity` varchar(128) NOT NULL,
  `linkurl` varchar(128) DEFAULT NULL,
  `tglvisiti` date NOT NULL,
  `menu` varchar(50) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `tgl_login` date DEFAULT NULL,
  `tgl_logout` date DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbjournal`
--
ALTER TABLE `tbjournal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbkategori`
--
ALTER TABLE `tbkategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbmainpage`
--
ALTER TABLE `tbmainpage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbnews`
--
ALTER TABLE `tbnews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbnewsdraft`
--
ALTER TABLE `tbnewsdraft`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbusers`
--
ALTER TABLE `tbusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `tbusersaccessmenu`
--
ALTER TABLE `tbusersaccessmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbusersmenu`
--
ALTER TABLE `tbusersmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbusersrole`
--
ALTER TABLE `tbusersrole`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbusersvisit`
--
ALTER TABLE `tbusersvisit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbusertimeline`
--
ALTER TABLE `tbusertimeline`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbjournal`
--
ALTER TABLE `tbjournal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbkategori`
--
ALTER TABLE `tbkategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbmainpage`
--
ALTER TABLE `tbmainpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbnews`
--
ALTER TABLE `tbnews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbnewsdraft`
--
ALTER TABLE `tbnewsdraft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbusers`
--
ALTER TABLE `tbusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbusersaccessmenu`
--
ALTER TABLE `tbusersaccessmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbusersmenu`
--
ALTER TABLE `tbusersmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbusersrole`
--
ALTER TABLE `tbusersrole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbusersvisit`
--
ALTER TABLE `tbusersvisit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbusertimeline`
--
ALTER TABLE `tbusertimeline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbusers`
--
ALTER TABLE `tbusers`
  ADD CONSTRAINT `tbusers_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `tbusersrole` (`id`);

--
-- Constraints for table `tbusertimeline`
--
ALTER TABLE `tbusertimeline`
  ADD CONSTRAINT `tbusertimeline_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbusers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
