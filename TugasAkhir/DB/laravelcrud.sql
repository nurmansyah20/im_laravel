-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2023 at 05:37 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `casts`
--

CREATE TABLE `casts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `umur` int(11) NOT NULL,
  `bio` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `casts`
--

INSERT INTO `casts` (`id`, `nama`, `umur`, `bio`, `created_at`, `updated_at`) VALUES
(1, 'Nurmansyah', 32, 'Nurmansyah berperan sebagai pekerja  di salah satu Rumah Sakit sebagai IT Support', '2023-01-05 10:15:44', '2023-01-07 11:12:42'),
(2, 'Suryadi', 20, 'Suryadi adalah aktor papan atas yang terkenal dengan perannya seorang pendekar yang gagah berani', '2023-01-05 10:30:31', '2023-01-07 10:02:26'),
(3, 'Tarman', 34, 'Nama lengkap saya adalah Tarman imanudin berperan sebagai ayah dari 2 anak', '2023-01-06 06:55:06', '2023-01-07 10:12:21'),
(4, 'Ahmad Nurudin', 46, 'Nama saya Ahmad Nurudin, saya adalah dosen di salah satu universitas', '2023-01-06 07:56:58', '2023-01-06 07:56:58'),
(5, 'Ahmad Rustandi', 31, 'Aktor pemeran antagonis di film aku bukan superman', '2023-01-07 03:41:50', '2023-01-17 21:55:30'),
(15, 'riski', 12, 'anak rajin', '2023-01-17 21:59:34', '2023-01-17 21:59:34');

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
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `ringkasan` text NOT NULL,
  `tahun` int(11) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `genre_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `judul`, `ringkasan`, `tahun`, `poster`, `genre_id`, `created_at`, `updated_at`) VALUES
(1, 'Fast and Furious 6', 'Joe Taslim menjadi salah satu bintang aktor terbaik Indonesia terpopuler. Ia lahir di Palembang pada 23 Juni 1981 dan mulai mengambil peran aktingnya sekitar tahun 2008. Ia pernah menjadi salah satu peraih medali Judo Olimpiade Indonesia sebagai atlet nasional yang meraih medali perunggu di SEA Games 2007\r\n\r\nJoe Taslim memulai ketenarannya setelah ia mengambil peran dalam film Fast and Furious 6. Dia juga mengambil peran dalam film Raid, Star Trek Beyond, the Swordsman, dan Mortal Kombat. Kepiawaiannya berakting memenangkan banyak penghargaan seperti Nickelodeon Indonesia kids choice awards, Festival Film Indonesia, Maya awards, dan masih banyak lagi.', 2008, '1674232629.jpg', 1, '2023-01-18 08:56:39', '2023-01-21 01:34:32'),
(2, 'Star Wars: The Force Awaken', 'Iko Uwais menjadi salah satu aktor terbaik Indonesia mulai populer. Ia lahir di Jakarta, pada 12 Februari 1983 dan menjadi begitu populer di pencak silat. Itu sebabnya dia biasanya mengambil aturan untuk beberapa film seni bela diri.\r\n\r\nFilm Merantau menjadi salah satu film fenomenal yang membawa Iko Uwais menjadi tenar. Belakangan dia banyak berperan di beberapa film Indonesia dan internasional. Dia mengambil peran utama dalam The Raid, The Raid 2, Star Wars: The Force Awaken, Triple Threat, dan banyak lagi.', 2009, '1674139519.jpg', 2, '2023-01-19 07:45:19', '2023-01-21 01:35:55'),
(3, 'Ada apa dengan cinta', 'Nicholas Saputra menjadi salah satu bintang aktor terbaik Indonesia terpopuler. Dia bermain di banyak film Indonesia yang menunjukkan kemampuan aktingnya. Ia memenangkan Aktor Pemeran Utama Terbaik dalam Penghargaan Film Indonesia pada 2005 dan Festival Film Indonesia pada 2005.\r\n\r\nNicholas Saputra tidak hanya menjadi bintang aktor terbaik Indonesia tetapi juga menjadi model Indonesia bagi beberapa perancang busana ternama Indonesia . Dia muncul di beberapa iklan dan video musik Indonesia.', 2002, '1674232828.jpg', 3, '2023-01-19 07:50:17', '2023-01-21 02:12:24'),
(4, 'Habibie & Ainun', 'Reza Rahadian menjadi salah satu bintang aktor terbaik Indonesia terpopuler. Dia bermain di begitu banyak film Indonesia yang membawanya ke ketenaran. Kepiawaiannya dalam berakting sangat memukau penonton sehingga membuat pekerjaannya selalu mendapat banyak apresiasi.\r\n\r\nBeberapa penghargaan diraih Reza Rahadian atas kemampuan aktingnya, seperti Piala Citra, Festival Film Indonesia, dan masih banyak lagi. Namanya menjadi begitu populer sejak ia mengambil peran Habibie & Ainun.', 2012, '1674232856.jpg', 4, '2023-01-19 07:54:44', '2023-01-21 02:13:56'),
(5, 'Heart Series', 'Siapa yang tak kenal dengan aktris cilik Yuki Kato? Yap, dirinya menjadi populer dan dikenal oleh masyarakat luas setelah berhasil membintangi serial televisi berjudul Heart Series pada tahun 2007. Yuki Anggraini Kato atau yang lebih dikenal dengan nama Yuki Kato ini lahir pada 2 April 1995. Dirinya merupakan anak pertama dari pasangan Takeshi Kato, seorang berdarah Jepang dan Italia, dengan Twinawati yang berdarah Jawa dan Sunda. Jadi, dapat dibilang bahwa Yuki Kato ini adalah aktris blasteran yang hingga saat ini masih aktif di layar kaca.\r\n\r\nPada tahun 2013 lalu, Yuki Kato berhasil menjadi pemeran utama di film Operation Wedding dan berperan sebagai Windi.', 2007, '1674232878.jpg', 6, '2023-01-20 08:34:15', '2023-01-21 02:14:50'),
(7, 'Bumi Manusia', 'Mawar Eva de Jongh adalah aktris muda Indonesia yang merupakan keturunan Belanda-Karo, dengan nama keluarganya de Jongh, lahir di Belanda pada 26 September 2001. Dirinya berhasil mendapatkan pengakuan banyak masyarakat setelah memerankan Annelies Mellema dalam film berjudul Bumi Manusia pada tahun 2019 lalu. Tidak hanya sebagai aktris saja, Mawar Eva juga menjadi seorang penyanyi lho dengan nama panggung Mawar de Jongh. Sebagai penyanyi, dirinya juga telah merilis single berjudul “Lebih Dari Egoku” dan  “Sedang Sayang Sayangnya”.\r\n\r\nPada tahun 2015, dirinya memenangkan ajang Miss Celebrity Indonesia di stasiun swasta SCTV dan akhirnya mendapatkan tawaran untuk bermain di FTV dan beberapa film. Debutnya di dunia akting dimulai dengan menjadi cameo di serial televisi berjudul Dongeng: Gadis Cantik & Buku Ajaib, yang mana diperankan saat dirinya masih duduk di bangku kelas 4 SD. Mawar juga berperan pada film adaptasi Korea, Miracle in Cell No.7 yang baru-baru ini tayang sebagai Kartika dewasa.', 2019, '1674231083.jpg', 7, '2023-01-20 09:11:23', '2023-01-21 02:19:11');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Joe Taslim', '2023-01-17 22:10:03', '2023-01-21 12:11:01'),
(2, 'Iko Uwais', '2023-01-17 22:38:05', '2023-01-21 19:49:33'),
(3, 'Nicholas Saputra', '2023-01-17 22:41:23', '2023-01-17 22:41:32'),
(4, 'Reza Rahadian', '2023-01-17 22:41:52', '2023-01-17 22:41:52'),
(6, 'Yuki Kato', '2023-01-20 08:32:43', '2023-01-20 08:32:43'),
(7, 'Mawar Eva de Jongh', '2023-01-20 08:33:02', '2023-01-20 08:33:02');

-- --------------------------------------------------------

--
-- Table structure for table `kritiks`
--

CREATE TABLE `kritiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `film_id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `point` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kritiks`
--

INSERT INTO `kritiks` (`id`, `user_id`, `film_id`, `content`, `point`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Ia pernah menjadi salah satu peraih medali Judo Olimpiade Indonesia sebagai atlet nasional yang meraih medali perunggu di SEA Games 2007 Joe Taslim memulai ketenarannya setelah ia mengambil peran dalam film Fast and Furious 6', 5, '2023-01-21 10:15:32', '2023-01-21 10:15:32'),
(4, 1, 3, 'Dia bermain di banyak film Indonesia yang menunjukkan kemampuan aktingnya. Ia memenangkan Aktor Pemeran Utama Terbaik dalam Penghargaan Film Indonesia pada 2005 dan Festival Film Indonesia pada 2005', 3, '2023-01-21 12:01:58', '2023-01-21 12:01:58');

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
(4, '2023_01_04_150125_create_genres_table', 1),
(5, '2023_01_04_151734_create_casts_table', 2),
(6, '2023_01_04_152750_create_films_table', 3),
(7, '2023_01_04_154656_create_profiles_table', 4),
(8, '2023_01_04_155339_create_perans_table', 5),
(10, '2023_01_04_155848_create_kritiks_table', 6),
(11, '2023_01_21_130940_ad_nama_column_to_perans_table', 7);

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
-- Table structure for table `perans`
--

CREATE TABLE `perans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `film_id` bigint(20) UNSIGNED NOT NULL,
  `cast_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `umur` int(11) NOT NULL,
  `bio` text NOT NULL,
  `alamat` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `umur`, `bio`, `alamat`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 32, 'Bukan siapa-siapa', 'Cirebon', 3, '2023-01-21 01:10:01', '2023-01-21 01:10:01'),
(2, 33, 'Ucha', 'Cirebon', 4, '2023-01-21 12:39:23', '2023-01-21 12:39:23');

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
(1, 'Nurmansyah', 'nurmansyah@gmail.com', NULL, '$2y$10$5sbBCz0uG9J.TXbR6FV4N.Gihfi6wvbmlGZ4FdlcLz2OaQLfwWvA2', NULL, '2023-01-11 09:36:41', '2023-01-11 09:36:41'),
(2, 'Nurman', 'Nurman@gmail.com', NULL, '$2y$10$BmtUe9yZvz1TYzxEzp4Eoup0cyf/.YFpdlTnoWaINeCZXKH/DPKd6', NULL, '2023-01-20 10:24:27', '2023-01-20 10:24:27'),
(3, 'Nurmansyah', 'noermansyah@gmail.com', NULL, '$2y$10$ufB/j/6a8IrtNOYr38l3Qu0Dfy2b0xCgpGG/rOUwoYwiFiQeYETM.', NULL, '2023-01-21 01:10:01', '2023-01-21 01:10:01'),
(4, 'Ucha', 'ucha@gmail.com', NULL, '$2y$10$DAKczPusNPS9VpcB14MgtuBu6JuOiNGrnPQ2yTDuB7xbOK3PaZgx2', NULL, '2023-01-21 12:39:23', '2023-01-21 12:39:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `casts`
--
ALTER TABLE `casts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`),
  ADD KEY `films_genre_id_foreign` (`genre_id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kritiks`
--
ALTER TABLE `kritiks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kritiks_user_id_foreign` (`user_id`),
  ADD KEY `kritiks_film_id_foreign` (`film_id`);

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
-- Indexes for table `perans`
--
ALTER TABLE `perans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perans_film_id_foreign` (`film_id`),
  ADD KEY `perans_cast_id_foreign` (`cast_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `casts`
--
ALTER TABLE `casts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kritiks`
--
ALTER TABLE `kritiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `perans`
--
ALTER TABLE `perans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `films`
--
ALTER TABLE `films`
  ADD CONSTRAINT `films_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`);

--
-- Constraints for table `kritiks`
--
ALTER TABLE `kritiks`
  ADD CONSTRAINT `kritiks_film_id_foreign` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`),
  ADD CONSTRAINT `kritiks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `perans`
--
ALTER TABLE `perans`
  ADD CONSTRAINT `perans_cast_id_foreign` FOREIGN KEY (`cast_id`) REFERENCES `casts` (`id`),
  ADD CONSTRAINT `perans_film_id_foreign` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`);

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
