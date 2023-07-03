-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2023 at 03:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dinkes`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'umum', 'umum', '2023-07-02 16:05:54', '2023-07-02 16:05:54'),
(2, 'khusus', 'khusus', '2023-07-02 16:06:05', '2023-07-02 16:06:05');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `hari_kerja` varchar(255) DEFAULT NULL,
  `jam_buka` time DEFAULT NULL,
  `jam_tutup` time DEFAULT NULL,
  `maps` text DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `alamat`, `no_telp`, `hari_kerja`, `jam_buka`, `jam_tutup`, `maps`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'dinkes@bolmongkab.go.id', 'Lolak, Kabupaten Bolaang Mongondow', '082188631295', 'Senin-Jumat', '08:00:00', '14:00:00', NULL, NULL, '2023-07-03 03:12:06', '2023-07-03 03:12:06');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'Ada berapa total jenis layanan di Dinas Kesehatan Kab. Bolaang Mongondow?', 'Total jumlah jenis pelayanan yang ada di Dinas Kesehatan Kab. Bolaang Mongondow adalah 8 (delapan) layanan', '2023-07-02 17:00:21', '2023-07-03 03:21:34'),
(2, 'Apa yang dimaksud dengan Stunting?', '<span class=\"ILfuVd\" lang=\"id\"><span class=\"hgKElc\">Stunting adalah gagal tumbuh akibat kurangnya asupan gizi, di mana dalam jangka pendek dapat menyebabkan terganggunya perkembangan otak, metabolisme, dan pertumbuhan fisik pada anak. Sementara, dalam jangka panjang, dampak stunting adalah sebagai berikut: Kesulitan belajar</span></span>', '2023-07-02 17:00:39', '2023-07-03 03:19:52');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text DEFAULT NULL,
  `data` varchar(255) NOT NULL,
  `download` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `name`, `url`, `sort`, `position`, `image`, `created_at`, `updated_at`) VALUES
(1, 'bolmongkab', 'https://bolmongkab.go.id', NULL, NULL, NULL, '2023-07-02 17:43:25', '2023-07-02 17:43:25'),
(2, 'span lapor', 'https://span-lapor.go.id', NULL, NULL, NULL, '2023-07-02 17:43:39', '2023-07-02 17:43:39'),
(3, 'sippn', 'https://sippn.menpan.go.id', NULL, NULL, NULL, '2023-07-02 17:44:03', '2023-07-02 17:44:03'),
(4, 'Kementrian Kesehatan Republik Indonesia', 'https://kemkes.go.id', NULL, NULL, NULL, '2023-07-03 03:26:20', '2023-07-03 03:26:20');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_22_072606_create_permission_tables', 1),
(5, '2020_12_22_085813_create_tags_table', 1),
(6, '2020_12_22_090248_create_categories_table', 1),
(7, '2020_12_22_110947_create_photos_table', 1),
(8, '2020_12_22_111144_create_videos_table', 1),
(9, '2020_12_22_111317_create_sliders_table', 1),
(10, '2021_06_25_005431_create_services_table', 1),
(11, '2021_06_30_121103_create_downloads_table', 1),
(12, '2021_07_05_070331_create_news_table', 1),
(13, '2022_05_09_043424_create_profiles_table', 1),
(14, '2022_05_09_050859_create_contacts_table', 1),
(15, '2022_05_09_052357_create_files_table', 1),
(16, '2022_05_09_061432_create_sosmeds_table', 1),
(17, '2022_05_09_062042_create_links_table', 1),
(18, '2022_05_09_062139_create_visitors_table', 1),
(19, '2022_05_09_062309_create_menus_table', 1),
(20, '2022_05_09_062346_create_submenus_table', 1),
(21, '2022_08_04_004922_create_profpegs_table', 1),
(22, '2022_08_04_020501_create_views_table', 1),
(23, '2023_06_08_161720_create_faqs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `tayang` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `user_id`, `category_id`, `title`, `slug`, `body`, `image`, `tayang`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Inilah Sosok Figur Perintis WTP di Tiga Daerah yang Berbeda', 'inilah-sosok-figur-perintis-wtp-di-tiga-daerah-yang-berbeda-1688343024', 'Pemerintah Kabupaten (Pemkab) Bolaang Mongondow (Bolmong), kembali menjaga Trend Positif Laporan Hasil Pemeriksaan (LHP) dari Badan Pemeriksaan Keuangan (BPK) Republik Indonesia (RI) atas Laporan Keuangan Pemerintah Daerah (LKPD) tahun 2022.<br /><br />Bahkan dalam pengumuman LHP BPK RI Perwakilan Sulawesi Utara (Sulut) yang disampaikan, Pemkab Bolmong kembali meraih predikat Opini Wajar Tanpa Pengecualian (WTP), Manado, Senin 15 Mei 2022<br /><br />Diketahui, Opini ketiga ini pun diserahkan Kepala BPK RI Perwakilan Sulut Arief Fadillah kepada Penjabat Bupati Bolmong Limi Mokodompit dan ikut didampingi Ketua DPRD Welty Komaling.<br /><br />Tentu capaian keuangan daerah yang selalu didambakan tiap pemerintahan, ada tokoh yang berperan besar dalam Trend Positif ini.&nbsp;', 'gscKn6I8qSOYgiQ4YVAnK93r0Iml2t7w894PuGe0.jpg', NULL, '2023-07-02 16:10:24', '2023-07-02 16:10:24'),
(2, 1, 1, 'Dinas Kesehatan Bolmong Gelar Forum Komunikasi Publik', 'dinas-kesehatan-bolmong-gelar-forum-komunikasi-publik-1688381808', '<p><strong>Bolmong &mdash;&nbsp;</strong>Dinas Kesehatan (Dinkes) Kabupaten Bolaang Mongondow (Bolmong) sabtu (24/06/2023) siang pukul 13.40 wita menggelar kegiatan forum komunikasi publik yang dilaksanakan di Hotel Sutanraja, Kelurahan Kobo Besar, Kecamatan Kotamobagu Timur, Kota Kotamobagu.</p>\r\n<p>Forum komunikasi publik yang digelar Dinas Kesehatan Bolmong, dan dilaksanakan di Hotel Sutanraja, Kelurahan Kobo Besar, Kecamatan Kotamobagu Timur, Kota Kotamobagu, itu terkait dengan pelayanan kesehatan yang ada di Dinas Kesehatan.<br /><br />Kegiatan tersebut berdasarkan ketentuan pasal 15 huruf a Undang-undang Nomor 25 Tahun 2009 tentang Pelayanan Publik, penyelenggara pelayanan publik berkewajiban menyusun dan menetapkan Standar Pelayanan.<br /><br />Dalam kesempatan tersebut, Kepala Dinas Kesehatan Bolmong, Julin Ester Papuling, SKM., ME., menyampaikan kegiatan yang dilaksanakan menyampaikan 8 Poin standar pelayanan<br /><br />&ldquo;Disini kita bahas 8 standar pelayanan Dinas Kesehatan. Misalnya ada industri rumah tangga itu bisa mempermudah kalau berkasnya lengkap dan saya ada di lokasi tidak menunggu waktu lama kami berupaya untuk secepatnya mengeluarkan rekomendasi itu sebagai proses lanjut dan Satu Atap tanpa biaya. Jadi Sekali lagi kami tidak pernah meminta biaya kami hanya meminta materai jadi disiapkan materai oleh pengguna bukan untuk arsip kami materainya tapi untuk kelengkapan,&rdquo; ucap Julin Papuling, Kadis Kesehatan Bolmong.<br /><br />Lanjut Julin, dirinya berharap di momen pelaksanaan kegiatan Forum Komunikasi Publik yang dilaksanakan hari ini, dapat diberikan masukan guna menjadikan yang terbaik.<br /><br />&ldquo;Kami sangat berharap mungkin ada pelayanan kami di sepanjang tahun sebelumnya standar pelayanan kami yang mungkin tidak sesuai menurut Bapak Ibu silakan memberikan masukan kepada kami Dan pertemuan ini juga dalam rangka mengevaluasi standar pelayanan kami,&rdquo; tambahnya.<br /><br />Lebih lanjut lagi dikatakan Julin Papuling, Dinas Kesehatan ada 8 pelayanan publik yang dilaksanakan. &nbsp;Bahkan dalam kesempatan itu juga menyampaikan standar penerbitan rekomendasi surat izin yang dikeluarkan oleh Dinas Kesehatan.<br /><br />&ldquo;Ada 8 pelayanan yang dilakukan dengan persyaratan pelayanan yang telah kami sampaikan saat ini, ada produk layanan kami untuk rekomendasi surat izin praktek bagi tenaga kesehatan yaitu untuk apoteker ahli tentang biologi laboratorium bidan medis sampai pada tenaga teknik kefarmasian, dan dari pada itu Ini ada nomor whatsApp yang kami cantumkan yang bisa disampaikan ketika ada hal-hal yang kurang jelas ataupun pelayanan kami kurang tepat. Jam pelayanan itu disesuaikan dengan jam kantor &rdquo; terangnya.<br /><br />Hadir dalam kegiatan tetsebut selain Kepala Dinas Kesehatan Bolmong, Julin E Papuling, SKM., ME. Sekretaris Dinas Kesehatan, Jusuf Detu, mewakili Organisasi Profesi PPNI, Ketua Asosiasi DAMIU Pantura, Oengelola DAMIU, LSM, Media, Pelaku Industri Rumah Tangga, Toko Obat Prima Medika, IBI, HAKLI, serta ASN Lingkup Dinkes Bolmong.<br /><br /></p>\r\n<p>Berikut 8 Standar Pelayanan yang dibahas dalam Forum Komunikasi Publik oleh Dinas Kesehatan Bolmong.</p>\r\n<ol>\r\n<li><strong>STANDAR PELAYANAN PENERBITAN REKOMENDASI SURAT IZIN PRAKTIK BAGI TENAGA KESEHATAN DI FASILITAS PELAYANAN KESEHATAN</strong></li>\r\n<li><strong>STANDAR PELAYANAN PENERBITAN REKOMENDASI SURAT IZIN PRAKTIK BAGI TENAGA KESEHATAN DI PRAKTIK MANDIRI</strong></li>\r\n<li><strong>STANDAR PELAYANAN PENERBITAN REKOMENDASI SURAT IZIN PRAKTIK BAGI DOKTER DAN DOKTER GIGI DI FASILITAS PELAYANAN KESEHATAN</strong></li>\r\n<li><strong>STANDAR PELAYANAN PENERBITAN REKOMENDASI SURAT IZIN PRAKTIK BAGI DOKTER DAN DOKTER GIGI DI PRAKTIK MANDIRI</strong></li>\r\n<li><strong>STANDAR PELAYANAN PENERBITAN REKOMENDASI SURAT IZIN FASILITAS PELAYANAN KESEHATAN</strong></li>\r\n<li><strong>STANDAR PELAYANAN PENERBITAN REKOMENDASI LAIK HYGIENE SANITASI JASA BOGA / RESTORAN / RUMAH MAKAN</strong></li>\r\n<li><strong>STANDAR PELAYANAN PENERBITAN REKOMENDASI LAIK HYGIENE SANITASI DEPOT AIR MINUM ISI ULANG (DAMIU)</strong></li>\r\n<li><strong>STANDAR PELAYANAN PENDAFTARAN PENERBITAN REKOMENDASI PERIZINAN PANGAN INDUSTRI RUMAH TANGGA (PIRT)</strong></li>\r\n</ol>', 'xaF7QgK6MSknBjjWHX00jyg1Gw6Qc1PGKYn5pu5l.jpg', NULL, '2023-07-03 02:56:48', '2023-07-03 02:56:48'),
(3, 1, 1, 'Selang Tahun 2023 Ada 40 Kasus DBD dan 1 Meninggal di Bolmong, Ini yang Dilakukan Dinas Kesehatan', 'selang-tahun-2023-ada-40-kasus-dbd-dan-1-meninggal-di-bolmong-ini-yang-dilakukan-dinas-kesehatan-1688382211', '<div class=\"tribun-mark\">\r\n<p>Kabupaten Bolaang Mongondow (Bolmong) sepanjang tahun 2023 memiliki 40 kasus Demam Berdarah Dengue (DBD), Selasa (27/06/2023).</p>\r\n<p>Informasi ini disampaikan Dinas Kesehatan <a title=\"Bolmong\" href=\"https://manado.tribunnews.com/tag/bolmong\" aria-label=\"link\">Bolmong</a>.</p>\r\n<p>Kepala Dinas Kesehatan <a title=\"Bolmong\" href=\"https://manado.tribunnews.com/tag/bolmong\" aria-label=\"link\">Bolmong</a> <a title=\"Julin&nbsp;Papuling\" href=\"https://manado.tribunnews.com/tag/julin-papuling\" aria-label=\"link\">Julin&nbsp;Papuling</a> mengatakan bahwa benar 40 kasus tersebut terjadi rentang tahun 2023.</p>\r\n<p>\"Iya data yang masuk ke kami ada 40 kasus <a title=\"DBD\" href=\"https://manado.tribunnews.com/tag/dbd\" aria-label=\"link\">DBD</a> dari beberapa Kecamatan, \" ucapnya.</p>\r\n<p>Lanjut Julin, dari 40 kasus tersebut 1 orang meninggal.</p>\r\n<p>\"1 orang meninggal pada bulan April lalu yang terkena <a title=\"DBD\" href=\"https://manado.tribunnews.com/tag/dbd\" aria-label=\"link\">DBD</a>, \" ucapnya.</p>\r\n<p>Atas kejadian tersebut pihaknya melakukan beberapa langkah untuk menekan penularan <a title=\"DBD\" href=\"https://manado.tribunnews.com/tag/dbd\" aria-label=\"link\">DBD</a> ini.</p>\r\n<p>\"Pertama kami berkoordinasi lintas sektor ke wilayah untuk pelaksaan Pemberantasan sarang nyamuk (PSN) ,\" ucapnya.</p>\r\n<p>Menurutnya PSN harus dilakukan bila ada kasus <a title=\"DBD\" href=\"https://manado.tribunnews.com/tag/dbd\" aria-label=\"link\">DBD</a>.</p>\r\n<p>\"Bila setelah PSN ada ketambahan kasus maka di SPN Kembali baru di fogging, \" ucapnya.</p>\r\n<p>Julin berharap masyarakat bisa mengontrol dan berprerilaku hidup sehat terutama di wilayah masing-masing.</p>\r\n<p>\"Kesadaran masyarakat juga yang penting untuk menjaga lingkungan, baik dalam rumah dan luar rumah,\" ucapnya.</p>\r\n</div>', 'OxP0s6Gi0LaSfwxUciNPCtQkZMqffuxchBIc2w3C.jpg', NULL, '2023-07-03 03:03:31', '2023-07-03 03:03:31');

-- --------------------------------------------------------

--
-- Table structure for table `news_tag`
--

CREATE TABLE `news_tag` (
  `news_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_tag`
--

INSERT INTO `news_tag` (`news_id`, `tag_id`) VALUES
(1, 3),
(1, 1),
(2, 3),
(2, 2),
(2, 1),
(3, 2),
(3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'news.index', 'web', '2023-07-02 05:28:11', '2023-07-02 05:28:11'),
(2, 'news.create', 'web', '2023-07-02 05:28:11', '2023-07-02 05:28:11'),
(3, 'news.edit', 'web', '2023-07-02 05:28:11', '2023-07-02 05:28:11'),
(4, 'news.delete', 'web', '2023-07-02 05:28:11', '2023-07-02 05:28:11'),
(5, 'tags.index', 'web', '2023-07-02 05:28:11', '2023-07-02 05:28:11'),
(6, 'tags.create', 'web', '2023-07-02 05:28:11', '2023-07-02 05:28:11'),
(7, 'tags.edit', 'web', '2023-07-02 05:28:11', '2023-07-02 05:28:11'),
(8, 'tags.delete', 'web', '2023-07-02 05:28:11', '2023-07-02 05:28:11'),
(9, 'categories.index', 'web', '2023-07-02 05:28:11', '2023-07-02 05:28:11'),
(10, 'categories.create', 'web', '2023-07-02 05:28:11', '2023-07-02 05:28:11'),
(11, 'categories.edit', 'web', '2023-07-02 05:28:11', '2023-07-02 05:28:11'),
(12, 'categories.delete', 'web', '2023-07-02 05:28:11', '2023-07-02 05:28:11'),
(13, 'photos.index', 'web', '2023-07-02 05:28:11', '2023-07-02 05:28:11'),
(14, 'photos.create', 'web', '2023-07-02 05:28:11', '2023-07-02 05:28:11'),
(15, 'photos.delete', 'web', '2023-07-02 05:28:11', '2023-07-02 05:28:11'),
(16, 'videos.index', 'web', '2023-07-02 05:28:11', '2023-07-02 05:28:11'),
(17, 'videos.create', 'web', '2023-07-02 05:28:11', '2023-07-02 05:28:11'),
(18, 'videos.edit', 'web', '2023-07-02 05:28:11', '2023-07-02 05:28:11'),
(19, 'videos.delete', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(20, 'files.index', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(21, 'files.create', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(22, 'files.edit', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(23, 'files.delete', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(24, 'services.index', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(25, 'services.create', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(26, 'services.edit', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(27, 'services.delete', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(28, 'sliders.index', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(29, 'sliders.create', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(30, 'sliders.delete', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(31, 'roles.index', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(32, 'roles.create', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(33, 'roles.edit', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(34, 'roles.delete', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(35, 'permissions.index', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(36, 'users.index', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(37, 'users.create', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(38, 'users.edit', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(39, 'users.delete', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(40, 'profile.index', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(41, 'profile.create', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(42, 'profile.edit', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(43, 'contact.index', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(44, 'contact.create', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(45, 'contact.edit', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(46, 'contact.delete', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(47, 'link.index', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(48, 'link.create', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(49, 'link.edit', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(50, 'link.delete', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(51, 'sosmed.index', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(52, 'sosmed.create', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(53, 'sosmed.edit', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(54, 'sosmed.delete', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(55, 'downloads.index', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(56, 'downloads.create', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(57, 'downloads.edit', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(58, 'downloads.delete', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(59, 'profpegs.index', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(60, 'profpegs.create', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(61, 'profpegs.edit', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(62, 'profpegs.delete', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(63, 'faq.index', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(64, 'faq.create', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(65, 'faq.edit', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12'),
(66, 'faq.delete', 'web', '2023-07-02 05:28:12', '2023-07-02 05:28:12');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `caption` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `image`, `caption`, `created_at`, `updated_at`) VALUES
(3, 'assets/photos/1au4HFIRkRqf2rpdKuUSasCTXsSCbrBc5bLca1u2.jpg', 'Dinas Kesehatan Bolmong Gelar Forum Komunikasi Publik', '2023-07-03 03:04:20', '2023-07-03 03:04:20'),
(4, 'assets/photos/Y6WM4Y25hiNqHLcTY1BJmFm8I5npDYLeawCBidms.jpg', 'Dinkes Bolmong Berpartisipasi Konvergensi/ Intervensi Stunting', '2023-07-03 03:06:40', '2023-07-03 03:06:40'),
(5, 'assets/photos/YsKWpub3OseDlc4ryDGvG3eRMsdRdDmIFzB9UY5j.jpg', 'Giat Laksanakan Optimalisasi Penurunan Stunting di Kabupaten Bolaang Mongondow', '2023-07-03 03:07:51', '2023-07-03 03:07:51');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_opd` text NOT NULL,
  `short_name` varchar(255) NOT NULL,
  `dasar_hukum` text DEFAULT NULL,
  `sejarah` text DEFAULT NULL,
  `visi` text DEFAULT NULL,
  `misi` text DEFAULT NULL,
  `program` text DEFAULT NULL,
  `tupoksi` text DEFAULT NULL,
  `kata_sambutan` text DEFAULT NULL,
  `foto_pimpinan` varchar(255) DEFAULT NULL,
  `struktur_organisasi` varchar(255) DEFAULT NULL,
  `logo` varchar(255) NOT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `maklumat` varchar(255) DEFAULT NULL,
  `motto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `nama_opd`, `short_name`, `dasar_hukum`, `sejarah`, `visi`, `misi`, `program`, `tupoksi`, `kata_sambutan`, `foto_pimpinan`, `struktur_organisasi`, `logo`, `favicon`, `maklumat`, `motto`, `created_at`, `updated_at`) VALUES
(1, 'Dinas Kesehatan', 'Dinkes', NULL, NULL, '-', '-', NULL, NULL, '-', 'assets/profile/FRIIimve2DWQUFoMotBTSd5saWwv9XnVS0R7fpL5.jpg', 'assets/profile/oAOLIIqUCprlE7o5tCN1GubRVhoZusJkbcZccjnO.png', 'assets/profile/h8kIlPrXmJXYm9Bb8BKIgiVe3p0Cdxly2aZZ5QMA.png', 'assets/profile/bQiygI8D9KtZsLYh3Dv8wnNPp0MTvzuzbzmn23mi.png', 'assets/profile/MhUxDNYDYvFX3W7Bduet3uhH1a8eoZ9Kpwv4KMv1.png', 'assets/profile/vbTtCEBrvo5Ig9SdhuAyf9ooi9kBIFVnBZA6SRk2.png', '2023-07-02 12:51:37', '2023-07-03 03:24:04');

-- --------------------------------------------------------

--
-- Table structure for table `profpegs`
--

CREATE TABLE `profpegs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2023-07-02 05:28:11', '2023-07-02 05:28:11');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `persyaratan` text DEFAULT NULL,
  `prosedur` text DEFAULT NULL,
  `waktu` text DEFAULT NULL,
  `biaya` varchar(255) DEFAULT NULL,
  `produk_layanan` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `slug`, `persyaratan`, `prosedur`, `waktu`, `biaya`, `produk_layanan`, `image`, `created_at`, `updated_at`) VALUES
(1, 'STANDAR PELAYANAN PENERBITAN REKOMENDASI SURAT IZIN PRAKTIK BAGI TENAGA KESEHATAN DI FASILITAS PELAYANAN KESEHATAN', 'standar-pelayanan-penerbitan-rekomendasi-surat-izin-praktik-bagi-tenaga-kesehatan-di-fasilitas-pelayanan-kesehatan', '<p>Pengguna Layanan menyiapkan dokumen persyaratan sebagai berikut :</p>\r\n<ol>\r\n<li>Asli Permohonan bermeterai Rp.10.000,-</li>\r\n<li>Asli Rekomendasi Organisasi Profesi</li>\r\n<li>Asli Rekomendasi Persetujuan Atasan</li>\r\n<li>Asli Surat Pernyataan Memiliki Tempat Praktik</li>\r\n<li>Fotocopy KTP Elektronik</li>\r\n<li>Fotocopy Ijazah</li>\r\n<li>Fotocopy Surat Tanda Registrasi (STR) yang masih berlaku</li>\r\n<li>Fotocopy NPWP</li>\r\n</ol>\r\nPas Photo Warna Ukuran 3 x 4 = 3 Lembar', '-', '<ol>\r\n<li>Verifikasi kelengkapan berkas : 15 Menit</li>\r\n<li>Persetujuan pimpinan : 15 Menit</li>\r\n<li>Verifikasi data dan cetak : 30 Menit</li>\r\n</ol>\r\nPenandatanganan Rekomendasi : 2 Hari', 'Gratis', '<p>Rekomendasi Surat Izin Praktik Bagi Tenaga Kesehatan meliputi :</p>\r\n<ol>\r\n<li>Apoteker</li>\r\n<li>Ahli Teknologi Laboratrium Medik (ATLM)</li>\r\n<li>Bidan</li>\r\n<li>Elektromedis</li>\r\n<li>Fisioterapis</li>\r\n<li>Ahli Gizi</li>\r\n<li>Perawat</li>\r\n<li>Perekam Medis</li>\r\n<li>Radiografer</li>\r\n<li>Sanitarian</li>\r\n<li>Teknisi Gigi</li>\r\n</ol>\r\nTenaga Teknis Kefarmasian', NULL, '2023-07-03 01:41:32', '2023-07-03 02:13:45'),
(2, 'STANDAR PELAYANAN PENERBITAN REKOMENDASI SURAT IZIN PRAKTIK BAGI TENAGA KESEHATAN DI PRAKTIK MANDIRI', 'standar-pelayanan-penerbitan-rekomendasi-surat-izin-praktik-bagi-tenaga-kesehatan-di-praktik-mandiri', '<p>Pengguna Layanan menyiapkan dokumen persyaratan sebagai berikut :</p>\r\n<ol>\r\n<li>Asli Permohonan bermeterai Rp.10.000,-</li>\r\n<li>Asli Rekomendasi Organisasi Profesi</li>\r\n<li>Asli Surat Pernyataan Memiliki Tempat Praktik mandiri bermeterai Rp. 10.000,-</li>\r\n<li>Asli Denah Lokasi Tempat Praktik Mandiri</li>\r\n<li>Asli Denah Ruangan Tempat Praktik Mandiri</li>\r\n<li>Asli Daftar Peralatan Medis Yang Dimiliki</li>\r\n<li>Fotocopy Perjanjian Kerjasama Pengelolaan Limbah Medis (bila diperlukan sesuai jenis praktik tenaga kesehatan)</li>\r\n<li>Fotocopy KTP Elektronik</li>\r\n<li>Fotocopy Ijazah</li>\r\n<li>Fotocopy Surat Tanda Registrasi (STR) yang masih berlaku</li>\r\n<li>Fotocopy Surat Ijin Praktik (SIP) yang masih berlaku</li>\r\n<li>Fotocopy NPWP</li>\r\n</ol>\r\nPas Photo Warna Ukuran 3 x 4 = 3 Lembar', '<ol>\r\n<li><strong> Pemohon Rekomendasi</strong></li>\r\n<li>Pemohon menyiapkan persyaratan pelayanan</li>\r\n<li>Pemohon menyampaikan dokumen yang telah disiapkan kepada Bidang SDK Dinas Kesehatan</li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<ol>\r\n<li><strong> Admin Dinas Kesehatan</strong></li>\r\n<li>Melakukan verifikasi pengajuan dari pemohon dengan memeriksa dokumen sesuai dengan ketentuan</li>\r\n<li>Selanjutnya proses persetujuan dari pimpinan untuk pelaksanaan visitasi.</li>\r\n<li>Kembali ke bagian admin untuk proses koordinasi kesepakatan hari dan tanggal pelaksanaan visitasi lokasi.</li>\r\n<li>Dilaksanakan visitasi lokasi .</li>\r\n<li>Hasil visitasi :</li>\r\n<li>sudah sesuai dengan standar yang ditetapkan maka proses penerbitan rekomendasi berlanjut</li>\r\n<li>masih terdapat kekurangan maka pemohon mencukupi kekurangan dan bila sudah sesuai maka proses penerbitan rekomendasi berlanjut</li>\r\n<li>Menyampaikan hasil visitasi kepada Pemohon Rekomendasi</li>\r\n<li>Pimpinan menelati hasil visitasi dan memberikan persetujuan untuk diterbitkan rekomendasi</li>\r\n<li>Kembali ke bagian admin untuk proses verifikasi data yang disampaikan pemohon untuk data yang tercetak di rekomendasi</li>\r\n<li>Apabila ada ketidak sesuaian data seperti gelar, nomor STR, masa berlaku, kesalahan penulisan alamat maka admin akan melakukan revisi sesuai dokumen yang disampaikan</li>\r\n<li>Bila data sudah sesuai maka siap dilakukan cetak rekomendasi</li>\r\n<li>Rekomendasi diajukan ke pimpinan untuk dilakukan penanda tanganan.</li>\r\n<li>Apabila sudah selesai maka admin akan melakukan pemberitahuan melalui Whatsapp kepada pemohon</li>\r\n<li>Pemohon akan menerima pemberitahuan bahwa rekomendasi sudah selesai dan dapat diambil ke Dinas Kesehatan di jam kerja.</li>\r\n</ol>\r\n<p><strong>C.Pimpinan Dinas Kesehatan</strong></p>\r\n<ol>\r\n<li>Pimpinan memeriksa hasil verifikasi dari admin.</li>\r\n<li>Pimpinan memberikan persetujuan penerbitan Rekomendasi SIP</li>\r\n</ol>\r\nPenanda tanganan Rekomendasi SIP setelah dicetak oleh Admin Dinas Kesehatan', '<ol>\r\n<li>Verifikasi Dokumen : 15 menit</li>\r\n<li>Persetujuan Pimpinan : 15 menit</li>\r\n<li>Persiapan Visitasi : 2 hari</li>\r\n<li>Visitasi : 1 hari</li>\r\n<li>Verifikasi Data dan Cetak : 30 menit</li>\r\n</ol>\r\nPenandatangan Rekomendasi : 2 hari', 'Gratis', '<p>Rekomendasi Surat Izin Praktik Bagi Tenaga Kesehatan untuk Praktik Mandiri meliputi :</p>\r\n<ol>\r\n<li>Apoteker</li>\r\n<li>Ahli Teknologi Laboratrium Medik (ATLM)</li>\r\n<li>Bidan</li>\r\n<li>Elektromedis</li>\r\n<li>Fisioterapis</li>\r\n<li>Ahli Gizi</li>\r\n<li>Perawat</li>\r\n<li>Perekam Medis</li>\r\n<li>Radiografer</li>\r\n<li>Sanitarian</li>\r\n<li>Teknisi Gigi</li>\r\n</ol>\r\nTenaga Teknis Kefarmasian', NULL, '2023-07-03 01:44:36', '2023-07-03 02:12:36'),
(3, 'STANDAR PELAYANAN PENERBITAN REKOMENDASI SURAT IZIN PRAKTIK BAGI DOKTER DAN DOKTER GIGI DI FASILITAS PELAYANAN KESEHATAN', 'standar-pelayanan-penerbitan-rekomendasi-surat-izin-praktik-bagi-dokter-dan-dokter-gigi-di-fasilitas-pelayanan-kesehatan', '<p>Pengguna Layanan menyiapkan dokumen persyaratan sebagai berikut :</p>\r\n<ol>\r\n<li>Fotocopy KTP Pemohon</li>\r\n<li>Fotocopy Surat Tanda Registrasi (STR) yang diterbitkan dan dilegalisasi asli oleh KKI;</li>\r\n<li>Surat pernyataan memiliki tempat praktik mandiri bermaterai Rp. 10.000 (untuk praktik mandiri ) dan atau surat keterangan dari pimpinan fasilitas pelayanan kesehatan (untuk praktik di fasilitas pelayanan Kesehatan</li>\r\n<li>Surat Rekomendasi dari Organisasi Profesi, sesuai tempat praktik;</li>\r\n<li>Surat persetujuan dari atasan langsung bagi Dokter dan Dokter Gigi yang bekerja pada instansi/fasilitas pelayanan Kesehatan pemerintah atau pada instansi/fasilitas pelayanan kesehatan lain secara purna waktu.</li>\r\n<li>Surat pernyataan melaksanakan praktik kedokteran ;</li>\r\n<li>Pas foto berwarna ukuran 4 x 6 cm sebanyak 4 (empat) lembar</li>\r\n<li>Format permohonan bermaterai Rp.10.000</li>\r\n</ol>', '<ol>\r\n<li><strong> Pemohon Rekomendasi</strong></li>\r\n<li>Pemohon menyiapkan persyaratan pelayanan</li>\r\n<li>Pemohon menyampaikan dokumen yang telah disiapkan kepada Bidang SDK Dinas Kesehatan</li>\r\n</ol>\r\n<br />\r\n<ol>\r\n<li><strong> Admin Dinas Kesehatan</strong></li>\r\n<li>Melakukan verifikasi pengajuan dari pemohon dengan memeriksa dokumen sesuai dengan ketentuan</li>\r\n<li>Selanjutnya proses persetujuan dari pimpinan untuk penerbitan rekomendasi Surat Izin Praktik Dokter dan Dokter Gigi.</li>\r\n<li>Kembali ke bagian admin untuk proses verifikasi data yang di sampaikan pemohon untuk data yang tercetak di Surat Rekomendasi Izin Praktik Dokter dan Dokter Gigi. Apabila ada ketidak sesuaian data seperti gelar, nomor STR, masa berlaku, kesalahan penulisan alamat maka admin akan melakukan revisi melalui aplikasi.</li>\r\n<li>Bila data sudah sesuai maka siap dilakukan cetak Surat Rekomendasi Izin Praktik Dokter dan Dokter Gigi</li>\r\n<li>Surat Rekomendasi Izin Praktik Dokter dan Dokter Gigi diajukan ke pimpinan untuk dilakukan penanda tanganan.</li>\r\n<li>Apabila sudah selesai maka admin akan melakukan pemberitahuan melalui Whatsapp kepada pemohon</li>\r\n<li>Pemohon akan menerima pemberitahuan bahwa Surat Rekomendasi Izin Praktik Dokter dan Dokter Gigi sudah selesai dan dapat diambil ke Dinas Kesehatan di jam kerja.</li>\r\n</ol>\r\n<p><strong>C.Pimpinan Dinas Kesehatan</strong></p>\r\n<ol>\r\n<li>Pimpinan memeriksa hasil verifikasi dari admin.</li>\r\n<li>Pimpinan memberikan persetujuan penerbitan Rekomendasi SIP</li>\r\n<li>Penanda tanganan Rekomendasi SIP setelah dicetak oleh Admin Dinas Kesehatan</li>\r\n</ol>', '<ol>\r\n<li>Verifikasi kelengkapan berkas : 15 Menit</li>\r\n<li>Persetujuan pimpinan : 15 Menit</li>\r\n<li>Verifikasi data dan cetak : 30 Menit</li>\r\n</ol>\r\nPenandatanganan Rekomendasi : 2 Hari', 'Gratis', '<p>Rekomendasi Surat Izin Praktik Bagi Tenaga Kesehatan meliputi :</p>\r\n<ol>\r\n<li>Dokter</li>\r\n<li>Dokter Gigi</li>\r\n</ol>', NULL, '2023-07-03 05:00:25', '2023-07-03 05:00:25'),
(4, 'STANDAR PELAYANAN PENERBITAN REKOMENDASI SURAT IZIN PRAKTIK BAGI DOKTER DAN DOKTER GIGI DI PRAKTIK MANDIRI', 'standar-pelayanan-penerbitan-rekomendasi-surat-izin-praktik-bagi-dokter-dan-dokter-gigi-di-praktik-mandiri', '<p>Pengguna Layanan menyiapkan dokumen persyaratan sebagai berikut :</p>\r\n<ol>\r\n<li>Fotocopy KTP Pemohon</li>\r\n<li>Fotocopy Surat Tanda Registrasi (STR) yang diterbitkan dan dilegalisasi asli oleh KKI;</li>\r\n<li>Surat pernyataan memiliki tempat praktik mandiri bermaterai Rp. 10.000 (untuk praktik mandiri ) dan atau surat keterangan dari pimpinan fasilitas pelayanan kesehatan (untuk praktik di fasilitas pelayanan Kesehatan</li>\r\n<li>Surat Rekomendasi dari Organisasi Profesi, sesuai tempat praktik;</li>\r\n<li>Surat persetujuan dari atasan langsung bagi Dokter dan Dokter Gigi yang bekerja pada instansi/fasilitas pelayanan Kesehatan pemerintah atau pada instansi/fasilitas pelayanan kesehatan lain secara purna waktu.</li>\r\n<li>Surat pernyataan melaksanakan praktik kedokteran ;</li>\r\n<li>Pas foto berwarna ukuran 4 x 6 cm sebanyak 4 (empat) lembar</li>\r\n<li>Format permohonan bermaterai Rp.10.000</li>\r\n</ol>', '<ol>\r\n<li><strong> Pemohon Rekomendasi</strong></li>\r\n<li>Pemohon menyiapkan persyaratan pelayanan</li>\r\n<li>Pemohon menyampaikan dokumen yang telah disiapkan kepada Bidang SDK Dinas Kesehatan</li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<ol>\r\n<li><strong> Admin Dinas Kesehatan</strong></li>\r\n<li>Melakukan verifikasi pengajuan dari pemohon dengan memeriksa dokumen sesuai dengan ketentuan</li>\r\n<li>Selanjutnya proses persetujuan dari pimpinan untuk penerbitan rekomendasi Surat Izin Praktik Dokter dan Dokter Gigi.</li>\r\n<li>Kembali ke bagian admin untuk proses ;verifikasi data yang di sampaikan pemohon untuk data yang tercetak di Surat Rekomendasi Izin Praktik Dokter dan Dokter Gigi. Apabila ada ketidak sesuaian data seperti gelar, nomor STR, masa berlaku, kesalahan penulisan alamat maka admin akan melakukan revisi melalui aplikasi.</li>\r\n<li>Bila data sudah sesuai maka siap dilakukan cetak Surat Rekomendasi Izin Praktik Dokter dan Dokter Gigi</li>\r\n<li>Surat Rekomendasi Izin Praktik Dokter dan Dokter Gigi diajukan ke pimpinan untuk dilakukan penanda tanganan.</li>\r\n<li>Apabila sudah selesai maka admin akan melakukan pemberitahuan melalui Whatsapp kepada pemohon</li>\r\n<li>Pemohon akan menerima pemberitahuan bahwa Surat Rekomendasi Izin Praktik Dokter dan Dokter Gigi sudah selesai dan dapat diambil ke Dinas Kesehatan di jam kerja.</li>\r\n</ol>\r\n<p><strong>C.Pimpinan Dinas Kesehatan</strong></p>\r\n<ol>\r\n<li>Pimpinan memeriksa hasil verifikasi dari admin.</li>\r\n<li>Pimpinan memberikan persetujuan penerbitan Rekomendasi SIP</li>\r\n<li>Penanda tanganan Rekomendasi SIP setelah dicetak oleh Admin Dinas Kesehatan</li>\r\n</ol>', '<ol>\r\n<li>Verifikasi kelengkapan berkas : 15 Menit</li>\r\n<li>Persetujuan pimpinan : 15 Menit</li>\r\n<li>Persiapan Visitasi : 2 Hari</li>\r\n<li>Pelaksanaan Visitasi : 1 Hari</li>\r\n<li>Verifikasi data dan cetak : 30 Menit</li>\r\n<li>Penandatanganan Rekomendasi : 2 Hari</li>\r\n</ol>', 'Gratis', '<p>Rekomendasi Surat Izin Praktik Bagi Tenaga Kesehatan meliputi :</p>\r\n<ol>\r\n<li>Dokter</li>\r\n<li>Dokter Gigi</li>\r\n</ol>', NULL, '2023-07-03 05:03:46', '2023-07-03 05:03:46'),
(5, 'STANDAR PELAYANAN PENERBITAN REKOMENDASI SURAT IZIN FASILITAS PELAYANAN KESEHATAN', 'standar-pelayanan-penerbitan-rekomendasi-surat-izin-fasilitas-pelayanan-kesehatan', '<p>Pengguna Layanan menyiapkan dokumen persyaratan sebagai berikut :</p>\r\nBerkas pengajuan perizinan fasilitas pelayanan kesehatan yang disampaikan oleh Pemilik Usaha', '<ol>\r\n<li>Berkas yang telah di disposisi dilakukan verifikasi untuk kesesuaian berkas.</li>\r\n<li>Dilakukan persiapan visitasi lokasi izin meliputi :</li>\r\n<li>Koordinasi dengan pemilik usaha</li>\r\n<li>Koordinasi tim visitasi</li>\r\n<li>Membuat surat tugas</li>\r\n<li>Membuat ceklist pemeriksaan izin sesuai jenis fasyankes</li>\r\n<li>Melakukan visitasi lokasi bersama tim</li>\r\n<li>Hasil visitasi meliputi :</li>\r\n<li>Jika hasil visitasi tidak ada kekurangan dan sudah sesuai standar maka akan diterbitkan rekomendasi</li>\r\n<li>Jika hasil visitasi masih terdapat kekurangan, maka pemohon / pemilik usaha wajib memenuhinya dan apabila kekurangan berupa berkas maka dikirimkan ke Dinas Kesehatan dan apabila kekurangan terkait sarana prasarana di lokasi maka difoto dan dikirimkan ke Dinas Kesehatan. Selanjutnya hasil kekurangan tersebut kami sampaikan ke tim visitasi untuk disimpulkan sebagai dasar penetapan rekomendasi.</li>\r\n</ol>\r\nRekomendasi izin fasilitas pelayanan kesehatan diterbitkan dan ditandatangani oleh Kepala Dinas Kesehatan selanjutnya dikirimkan ke Dinas Penanaman Modal, dan PTSP, Sebagai dasar penerbitan surat izin fasilitas pelayanan kesehatan.', '<ol>\r\n<li>Verifikasi kelengkapan berkas : 1 Hari Kerja</li>\r\n<li>Persiapan Visitasi : 2 hari Kerja</li>\r\n<li>Pelaksanan visitasi : 1 Hari Kerja</li>\r\n<li>Penandatanganan Rekomendasi : 2 Hari Kerja</li>\r\n</ol>', 'Gratis', '<p>Rekomendasi Surat Izin Fasilitas Pelayanan Kesehatan meliputi :</p>\r\n<ol>\r\n<li>Apotek</li>\r\n<li>Toko Obat</li>\r\n<li>Klinik</li>\r\n<li>Optik</li>\r\n<li>Laboratorium Klinik</li>\r\n<li>Rumah Sakit</li>\r\n</ol>', NULL, '2023-07-03 05:06:03', '2023-07-03 05:06:03'),
(6, 'STANDAR PELAYANAN PENERBITAN REKOMENDASI LAIK HYGIENE SANITASI JASA BOGA / RESTORAN / RUMAH MAKAN', 'standar-pelayanan-penerbitan-rekomendasi-laik-hygiene-sanitasi-jasa-boga-restoran-rumah-makan', '<p>Permohonan pembuatan Laik Sehat Warung Makan/ Rumah Makan kepada Kepala Dinas Kesehatan Kabupaten disertai lampiran :</p>\r\n<ol>\r\n<li>Fotokopi KTP pemohon yang masih berlaku</li>\r\n<li>Pas foto terbaru ukuran 4 x 6 cm sebanyak 2 (dua) lembar</li>\r\n<li>Fotokopi sertifikat pelatihan / kursus hygiene sanitasi bagi pemilik / pengusaha dan atau penjamah makanan atau Surat pernyataan kesediaan mengikuti pelatihan / kursus hygiene Sanitasi</li>\r\n<li>Denah bangunan dapur diagram alur produksi makanan / minuman tersebut\\</li>\r\n<li>Hasil pemeriksaan laboratorium Kesehatan daerah / Lab. terakreditasi</li>\r\n</ol>\r\n<ul>\r\n<li>Cemaran kimia pada makanan negative</li>\r\n<li>Angka kuman escherichia coli pada makanan 0/gr contoh makanan</li>\r\n<li>Angka kuman pada peralatan makan 0 (nol)</li>\r\n<li>Pemeriksaan bakteriologi sampel air bersih)</li>\r\n</ul>', '<p>Persiapan Bahan dan Alat :</p>\r\n<ol>\r\n<li>Format Pendataan Rumah Makan / Warung Makan</li>\r\n<li>Format Audit Rumah Makan / Warung Makan</li>\r\n<li>Sampel makanan</li>\r\n</ol>\r\n<p>Langkah &ndash; Langkah Prosedur :</p>\r\n<ol>\r\n<li>Pengusaha mengajukan permohonan pembuatan Laik Sehat Warung Makan/ Rumah Makan kepada Kepala Dinas Kesehatan Kabupaten disertai lampiran.</li>\r\n<li>Permohonan dicatat dalam buku register</li>\r\n<li>Dinas Kesehatan melalui pejabat yang ditunjuk melakukan pemeriksaan (Audit Sanitasi Lingkungan) ke tempat ke tempat pengolahan Warung Makan/Rumah Makan sesuai formulir yang baku</li>\r\n<li>Pejabat yang ditunjuk yaitu tenaga Kesehatan lingkungan yang secara Struktural atau fungsional bertanggung jawab dalam melaksanakan tugas dimaksud.</li>\r\n<li>Dinas Kesehatan melalui pejabat yang ditunjuk melakukan pengambilan sampel Makanan dan Air Bersih.</li>\r\n<li>Pemeriksaan sampel dilaksanakan oleh UPT Labkesda Kota Blitar</li>\r\n<li>Bila hasil tidak memenuhi syarat maka akan dilakukan pengulangan pemeriksaan sampel Makanan dan Air Bersih serta dilakukan pembinaan</li>\r\n<li>Bagi Rumah Makan / Warung Makan yang berdasarkan pemeriksaan</li>\r\n<li>Memenuhi syarat, akan diberikan Sertifikat Laik Sehat.</li>\r\n<li>Dinas Kesehatan melaksanakan pembinaan dan Pengawasan</li>\r\n<li>Masa berlaku sertifikat selama 3 (tiga) tahun.</li>\r\n<li>Keterangan Laik Sehat dinyatakan tidak berlaku lagi apabila :</li>\r\n</ol>\r\n<ul>\r\n<li>Izin Usaha dicabut</li>\r\n<li>Perusahaan Tutup</li>\r\n</ul>', '2 Minggu', 'Gratis', 'Sertifikat Laik Hygiene Jasa Boga', NULL, '2023-07-03 05:07:45', '2023-07-03 05:07:45'),
(7, 'STANDAR PELAYANAN PENERBITAN REKOMENDASI LAIK HYGIENE SANITASI DEPOT AIR MINUM ISI ULANG (DAMIU)', 'standar-pelayanan-penerbitan-rekomendasi-laik-hygiene-sanitasi-depot-air-minum-isi-ulang-damiu', '<p>Permohonan pembuatan Laik Hygiene Sanitasi depot Air Minum Isi Ulang (DAMIU) kepada Kepala Dinas Kesehatan Kabupaten disertai lampiran :</p>\r\n<ol>\r\n<li>Fotokopi KTP yang masih berlaku sebanyak 1 (satu) lembar</li>\r\n<li>Pas foto 3 x 4 berwarna sebanyak 2 (dua) lembar</li>\r\n<li>Surat keterangan domisili usaha</li>\r\n<li>Denah lokasi dan bangunan tempat usaha</li>\r\n<li>Fotokopi sertifikat pelatihan / kursus hygiene sanitasi DAMIU dan bagi pemilik dan penjamah</li>\r\n<li>Nomor telepon HP yang bisa dihubungi</li>\r\n<li>Hasil pemeriksaan bakteriologi sampel air minum terbaru</li>\r\n<li>Hasil pemeriksaan kimia air baku dan air minum terbaru (dalam 6 bulan terakhir)</li>\r\n</ol>', '<p>Persiapan Bahan dan Alat :</p>\r\n<ol>\r\n<li>Format Pendataan Depot Air Minum Isi Ulang</li>\r\n<li>Format Audit Depot Air Minum Isi Ulang</li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Langkah &ndash; Langkah Prosedur :</p>\r\n<ol>\r\n<li>Pengusaha mengajukan permohonan Penerbitan Laik hygiene Sanitasi Depot Air Minum Isi Ulang (DAMIU) disertai lampiran.</li>\r\n<li>Permohonan dicatat dalam buku register</li>\r\n<li>Dinas Kesehatan melalui pejabat yang ditunjuk melakukan pemeriksaan (Audit Sanitasi Lingkungan) ke tempat pengolahan DAM Isi Ulang sesuai formulir yang baku.</li>\r\n<li>Pejabat yang ditunjuk yaitu tenaga Kesehatan lingkungan yang secara struktural atau fungsional bertanggung jawab dalam melaksanakan tugas dimaksud.</li>\r\n<li>Dinas Kesehatan melalui pejabat yang ditunjuk melakukan pengambilan sample air (Air Baku dan Air Minum)</li>\r\n<li>Pemeriksaan sampel (Air Baku dan Air Minum) dilaksanakan oleh UPTD Laboratorium Kesehatan Daerah</li>\r\n<li>Bila hasil tidak memenuhi syarat maka akan dilakukan pengulangan pemeriksaan sampel air dan pembinaan</li>\r\n<li>Bagi Depot Air Minum Isi Ulang yang berdasarkan pemeriksaan memenuhi syarat, akan diberikan Sertifikat Laik Sehat</li>\r\n<li>Dinas Kesehatan melaksanakan pembinaan dan Pengawasan</li>\r\n<li>Masa berlaku sertifikat selama 3 (tiga) tahun.</li>\r\n<li>Keterangan Laik Sehat dinyatakan tidak berlaku lagi apabila :</li>\r\n</ol>\r\n<ul>\r\n<li>Izin Usaha dicabut</li>\r\n<li>Perusahaan Tutup</li>\r\n</ul>', '2 Minggu', 'Gratis', 'Sertifikat Laik Hygiene Depot Air Minum Isi Ulang', NULL, '2023-07-03 05:09:28', '2023-07-03 05:09:28'),
(8, 'STANDAR PELAYANAN PENDAFTARAN PENERBITAN REKOMENDASI PERIZINAN PANGAN INDUSTRI RUMAH TANGGA (PIRT)', 'standar-pelayanan-pendaftaran-penerbitan-rekomendasi-perizinan-pangan-industri-rumah-tangga-pirt', '<p>Permohonan pembuatan Rekomendasi Periznan PIRT&nbsp; kepada Kepala Dinas Kesehatan Kabupaten disertai lampiran :</p>\r\n<ol>\r\n<li>Foto copy KTP pemohon</li>\r\n<li>Surat keterangan tinggal dari desa apabila tidak memiliki KTP</li>\r\n<li>Pas Photo 3 x 4 berwarna terbaru (2 lembar per jenis produk)</li>\r\n<li>Desain label</li>\r\n<li>Mengisi Formulir Data (terlampir)</li>\r\n<li>Denah Alur Produksi</li>\r\n<li>Denah Lokasi Produksi</li>\r\n<li>Contoh Sampel Produk</li>\r\n<li>Foto Copy Sertifikat Penyuluhan Keamanan Pangan</li>\r\n</ol>', '<p>Persiapan Bahan dan Alat :</p>\r\n<ol>\r\n<li>Format Rekomendasi perizinan</li>\r\n<li>Format Audit PIRT</li>\r\n<li>Botol dan jerigen untuk pengambilan sampel air baku dan air minum</li>\r\n</ol>\r\n<p>Langkah &ndash; Langkah Prosedur :</p>\r\n<ol>\r\n<li>Pengusaha mengajukan permohonan Penerbitan Rekomendasi Perizinan PIRT disertai lampiran.</li>\r\n<li>Penerimaan Pengajuan Permohonan SPPIRTP</li>\r\n<li>Petugas Dinas Kesehatan dan mengevaluasi kelengkapan dan kesesuaiannya Pemohon mengantarkan surat pengantar pemeriksaan air baku produksi dan pemeriksaan kesehatan penjamah makanan ke UPT Labkesda untuk selanjutnya ditindaklanjuti oleh UPT Labkesda</li>\r\n<li>Setelah persyaratan administrasi lengkap dilakukan pemeriksaan ke lokasi sarana produksi pangan oleh petugas DFI</li>\r\n<li>Bagi pemohon yang telah memenuhi persyaratan akan mendapatkan rekomendasi dari Dinas Kesehatan untuk pemberian Sertifikat PIRT ke Dinas Penanaman Modal dan PTSP</li>\r\n<li>Masa berlaku Surat Rekomendasi Sertifikat PIRT 5 (lima) tahun sejak diterbitnya Sertifikat PIRT tersebut.</li>\r\n</ol>', '2 Minggu', 'Gratis', 'Surat Rekomendasi Penerbitan Perizinan PIRT', NULL, '2023-07-03 05:11:13', '2023-07-03 05:11:13');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `title`, `keterangan`, `sort`, `created_at`, `updated_at`) VALUES
(1, 'Lnmzx2YBz6JJm0nlMWE2FbWoZewCnoFstZ4mBZ7P.png', '-', NULL, NULL, '2023-07-02 11:52:46', '2023-07-02 11:52:46'),
(2, '0U49RbWZdiOVyUhorF8b6VaCFkWgaF8qa46Sdf6y.jpg', '-', NULL, NULL, '2023-07-02 11:54:05', '2023-07-02 11:54:05');

-- --------------------------------------------------------

--
-- Table structure for table `sosmeds`
--

CREATE TABLE `sosmeds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `submenus`
--

CREATE TABLE `submenus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'dinkes', 'dinkes', '2023-07-02 16:06:23', '2023-07-02 16:06:23'),
(2, 'kesehatan', 'kesehatan', '2023-07-02 16:06:34', '2023-07-02 16:06:34'),
(3, 'bolmong', 'bolmong', '2023-07-02 16:06:45', '2023-07-02 16:06:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$HeUV8c4.k37/sNT.G0ycxuVX56X5fWlZbor7IUmY2IiGsD.7PFkCW', NULL, '2023-07-02 05:28:13', '2023-07-02 05:28:13');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `embed` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `viewable_type` varchar(255) NOT NULL,
  `viewable_id` bigint(20) UNSIGNED NOT NULL,
  `visitor` text DEFAULT NULL,
  `collection` varchar(255) DEFAULT NULL,
  `viewed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `device` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_email_unique` (`email`),
  ADD UNIQUE KEY `contacts_no_telp_unique` (`no_telp`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `files_user_id_foreign` (`user_id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_slug_unique` (`slug`),
  ADD KEY `news_user_id_foreign` (`user_id`),
  ADD KEY `news_category_id_foreign` (`category_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profpegs`
--
ALTER TABLE `profpegs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sosmeds`
--
ALTER TABLE `sosmeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submenus`
--
ALTER TABLE `submenus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `submenus_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `views_viewable_type_viewable_id_index` (`viewable_type`,`viewable_id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profpegs`
--
ALTER TABLE `profpegs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sosmeds`
--
ALTER TABLE `sosmeds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `submenus`
--
ALTER TABLE `submenus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `submenus`
--
ALTER TABLE `submenus`
  ADD CONSTRAINT `submenus_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
