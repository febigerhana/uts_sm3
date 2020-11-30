-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2020 at 02:20 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_sm3`
--

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pertanyaan` int(11) DEFAULT NULL,
  `jawaban` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id`, `id_user`, `id_pertanyaan`, `jawaban`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Usahakan untuk menjaga laptop tetap dingin dan selalu lakukan pengisian secara dangkal alias sedikit. Jangan biarkan laptopmu tetap terisi jika baterai sudah penuh, dalam kasus laptopmu belum memiliki teknologi yang mampu memindahkan listrik langsung ke laptop, bukan ke baterai.', '2020-11-27 17:55:33', '2020-11-27 17:55:33'),
(2, 1, 2, 'Virus adalah program yang mampu mengkloning dirinya sendiri, lalu menularkannya ke bagian yang lain. Sedangkan Trojan merupakan aplikasi yang tampaknya normal, namun sebenarnya punya tujuan tertentu seperti untuk melakukan hacking dan mengontrol komputermu.', '2020-11-27 17:55:49', '2020-11-27 17:55:49'),
(3, 7, 3, 'WiFi gratis sangatlah tidak aman. Walaupun ada kata sandinya, orang lain tetap bisa melihat apa yang kamu lakukan jika satu jaringan denganmu. Agar aman, matikan sistem sharing, gunakan HTTPS serta VPN.....', '2020-11-27 18:00:41', '2020-11-27 18:12:56'),
(4, 8, 4, 'Jelas adalah materialnya. Material yang baik akan merawat komputermu lebih bagus dan lebih mudah digunakan. Ini berlaku untuk kabel charger ataupun kabel headset, tetapi untuk kabel HDMI dan sebagainya, kamu bisa mencari yang lebih murah.', '2020-11-27 18:03:36', '2020-11-27 18:03:36'),
(5, 8, 4, 'Jelas adalah materialnya. Material yang baik akan merawat komputermu lebih bagus dan lebih mudah digunakan. Ini berlaku untuk kabel charger ataupun kabel headset, tetapi untuk kabel HDMI dan sebagainya, kamu bisa mencari yang lebih murah.', '2020-11-27 18:03:37', '2020-11-27 18:03:37');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `deskripsi`, `created_at`, `updated_at`) VALUES
(2, 'Netbook', 'Kecil dan ringan, tidak memiliki drive optic, memiliki keyboard yang minimalis dan umumnya hanya digunakan untuk melakukan browsing internet, mengirim dan menerima e-mail juga beberapa aktivitas komputasi yang ringan. Beberapa produsen laptop saat ini selalu melakukan penerobosan baru untuk menghasilkan netbook-netbook yang memiliki kinerja lebih cepat dan performa yang lebih tangguh.', '2020-11-27 17:52:05', '2020-11-27 17:52:05'),
(3, 'Hybrid Laptop Tablet', 'Karena kepopuleran tablet, banyak vendor laptop yang mengeluarkan perpaduan antara laptop dan tablet, disebut hybrid. Umumnya hybrid laptop ini dapat dilipat layarnya menjadi tablet, contoh Dell XPS 12, Sony Vaio Flip atau Lenovo Yoga. Ada juga yang keyboard dan layar dapat dipisah seperti Samsung Ativ atau Asus Transformer. Harga tidak murah namun anda mendapatkan komputer yang bisa dipakai untuk berbagai pekerjaan professional layaknya laptop, sekaligus tablet.', '2020-11-27 17:52:33', '2020-11-27 17:52:33'),
(4, 'Laptop Multimedia', 'Laptop dengan spesifikasi canggih, baterai yang tahan lama dan model yang keren. Biasanya dilengkapi audio video dengan kualitas premium seperti HP Envy yang dilengkapi Beats Audio atau Asus N Series dengan Bang Olufsen atau Toshiba P series dengan Harman Kardon.\r\n\r\nBisa dibilang laptop multimedia mirip laptop gaming namun dengan baterai lebih tahan lama, lebih ringan dan model yang lebih untuk umum. Cocok untuk casual gamer maupun professional yang butuh laptop untuk produktivitas sekaligus hiburan seperti menonton DVD / Bluray di laptop', '2020-11-27 17:58:28', '2020-11-27 17:58:28');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `pertanyaan` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `id_user`, `id_kategori`, `judul`, `pertanyaan`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'baterai laptop', 'Bagaimana caraku menjaga baterai laptop tetap baik?', '2020-11-27 17:53:36', '2020-11-27 17:53:36'),
(2, 1, 3, 'virus, Trojan, dan malware lainnya', 'Apa yang biasanya dilakukan virus, Trojan, dan malware lainnya ke komputer?', '2020-11-27 17:54:01', '2020-11-27 17:54:01'),
(3, 7, 4, 'WiFi publiks', 'Adakah yang salah menggunakan WiFi publik?', '2020-11-27 18:00:25', '2020-11-27 18:12:32'),
(4, 8, 2, 'kabel bagus', 'Mengapa kabel bagus selalu mahal?', '2020-11-27 18:03:22', '2020-11-27 18:03:22');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'username', 'username@gmail.com', '$2y$10$po.5qDRGb3jYBhYLXYTOLekpT3NLwTYBFg.N792F1az50HAZrWqfG', '2020-11-24 04:02:24', '2020-11-24 04:05:45'),
(7, 'user1', 'user1@gmail.com', '$2y$10$bPzgRta0CbqGsSWNULS6AuLh1jDxkqRkx3RxeaNJGnnPUqwmOJh2O', '2020-11-27 17:49:33', '2020-11-27 18:13:26'),
(8, 'user2', 'user2@gmail.com', '$2y$10$4tix/czouf3Nde0J.5HjAe8DF..6xplm8ls02xsmS9o7YQAgfNLoG', '2020-11-27 17:58:13', '2020-11-27 17:58:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
