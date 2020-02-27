-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.11-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table cms_adendb.tbl_kategori
CREATE TABLE IF NOT EXISTS `tbl_kategori` (
  `id_kategori` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `uploader` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updater` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cms_adendb.tbl_kategori: 2 rows
/*!40000 ALTER TABLE `tbl_kategori` DISABLE KEYS */;
INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`, `kategori_seo`, `status`, `uploader`, `updater`, `created_at`, `updated_at`) VALUES
	(1, 'Antena', 'antena', 'Y', 'aden', 'aden', '2020-02-22 01:57:19', '2020-02-22 02:05:42'),
	(2, 'Parabola', 'parabola', 'N', 'aden', 'aden', '2020-02-22 02:02:46', '2020-02-22 23:36:43');
/*!40000 ALTER TABLE `tbl_kategori` ENABLE KEYS */;

-- Dumping structure for table cms_adendb.tbl_posts
CREATE TABLE IF NOT EXISTS `tbl_posts` (
  `id_posts` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_seo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `headline` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_posts` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL,
  `dibaca` int(5) NOT NULL DEFAULT 1,
  `tag` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_posts`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cms_adendb.tbl_posts: 0 rows
/*!40000 ALTER TABLE `tbl_posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_posts` ENABLE KEYS */;

-- Dumping structure for table cms_adendb.tbl_produk
CREATE TABLE IF NOT EXISTS `tbl_produk` (
  `id_produk` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_produkkategori` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_seo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_produk` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL,
  `dibaca` int(5) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cms_adendb.tbl_produk: 0 rows
/*!40000 ALTER TABLE `tbl_produk` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_produk` ENABLE KEYS */;

-- Dumping structure for table cms_adendb.tbl_produkkategori
CREATE TABLE IF NOT EXISTS `tbl_produkkategori` (
  `id_produkkategori` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_produkkategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produkkategori_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_produkkategori`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cms_adendb.tbl_produkkategori: 0 rows
/*!40000 ALTER TABLE `tbl_produkkategori` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_produkkategori` ENABLE KEYS */;

-- Dumping structure for table cms_adendb.tbl_slider
CREATE TABLE IF NOT EXISTS `tbl_slider` (
  `id_slider` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `no_urut` int(11) DEFAULT NULL,
  `judul_slider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uploader` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updater` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_slider`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cms_adendb.tbl_slider: 0 rows
/*!40000 ALTER TABLE `tbl_slider` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_slider` ENABLE KEYS */;

-- Dumping structure for table cms_adendb.tbl_tag
CREATE TABLE IF NOT EXISTS `tbl_tag` (
  `id_tag` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pilihan` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `uploader` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updater` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_tag`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cms_adendb.tbl_tag: 0 rows
/*!40000 ALTER TABLE `tbl_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_tag` ENABLE KEYS */;

-- Dumping structure for table cms_adendb.tbl_users
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id_users` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama_lengkap` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('user','superadmin') NOT NULL DEFAULT 'user',
  `blokir` enum('Y','N') NOT NULL DEFAULT 'Y',
  `id_session` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastlogin` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_users`),
  UNIQUE KEY `tbl_users_email_unique` (`email`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table cms_adendb.tbl_users: 1 rows
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
INSERT INTO `tbl_users` (`id_users`, `username`, `email`, `password`, `nama_lengkap`, `level`, `blokir`, `id_session`, `lastlogin`, `created_at`, `updated_at`) VALUES
	(1, 'aden', 'aden@gail.com', '$2y$10$m6gpC.NHwIm87olD50QOPOzkLio1aFFbP7MFFsjDGkOxBQS3S32Yu', 'Aden Dev', 'superadmin', 'Y', 'k290doatvhcf7pdjuceb385ooi', '2020-02-22 23:26:53', NULL, NULL);
/*!40000 ALTER TABLE `tbl_users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
