-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2020 at 06:34 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aset_manajemen`
--

-- --------------------------------------------------------

--
-- Table structure for table `aset`
--

CREATE TABLE `aset` (
  `id` int(11) NOT NULL,
  `kode_aset` varchar(100) NOT NULL,
  `nama_aset` varchar(50) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aset`
--

INSERT INTO `aset` (`id`, `kode_aset`, `nama_aset`, `id_lokasi`, `deskripsi`, `created_at`, `id_kategori`) VALUES
(11, 'LabP1-TI-kom-1001001', 'komputer', 1, '-', '2020-08-27', 4),
(12, 'LabP2-TI-cpu-1001002', 'CPU', 2, '-', '2020-08-27', 6);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_aset`
--

CREATE TABLE `kategori_aset` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `kode_kategori` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_aset`
--

INSERT INTO `kategori_aset` (`id`, `nama_kategori`, `kode_kategori`) VALUES
(2, 'perabotan', ''),
(4, 'elektronik-k', 'kom'),
(6, 'elektronik-c', 'cpu');

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_aset`
--

CREATE TABLE `kondisi_aset` (
  `id` int(11) NOT NULL,
  `kondisi` varchar(20) NOT NULL,
  `tanggal_kondisi` datetime NOT NULL,
  `id_aset` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kondisi_aset`
--

INSERT INTO `kondisi_aset` (`id`, `kondisi`, `tanggal_kondisi`, `id_aset`, `deskripsi`, `gambar`) VALUES
(1, 'good', '2020-10-10 00:00:00', 1, 'zddd', 'dasdad'),
(2, 'Good', '2020-08-19 15:28:00', 1, 'adksdk', 'images/zihfW7uVn47GuivZ3oGTLCZaZ8MGcSoZkOkk4yYq.png'),
(4, 'Good', '2020-08-19 15:36:00', 4, 'zdasesrfwes', 'images/FJWPPAnKEIQ1Ydq9l4jh3doWoREsPrw5yMoUKSkJ.png'),
(5, 'Bad', '2020-08-19 15:49:00', 4, 'aaa', '1597826957_Untitled.png'),
(6, 'Lost', '2020-08-20 16:06:00', 1, 'dfsdfs', '1597828024_Untitled.png'),
(7, 'Bad', '2020-08-19 20:23:00', 5, '-', '1597843401_Untitled.png'),
(8, 'Good', '2020-08-23 00:31:00', 6, '-', '1598117494_4.png');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `nama_lokasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id`, `nama_lokasi`) VALUES
(1, 'LabP1'),
(2, 'LabP2'),
(3, 'LabSI'),
(5, 'LabMM'),
(6, 'LabJar');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` smallint(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `api_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `api_token`, `created_at`, `updated_at`) VALUES
(1, 'users', 'user@example.com', '$2y$10$tfZzgTMy29T8VVKAu2D68.iu5BeVvLuwSPx2lhIszd4RB2.B2zNwe', 'drOOiJLMUadUU8dx7CvJXyXemUsyoih5DgDsndNJ', '2020-07-25 15:39:44', '2020-08-01 08:59:22'),
(2, 'vira', 'vira@example.com', '123456', '122', '2020-12-02 17:00:00', '2020-08-18 07:56:31'),
(5, 'vira', 'vira@gmail.com', '123456', '122', '2020-12-02 17:00:00', '2020-08-19 09:03:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aset`
--
ALTER TABLE `aset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_aset`
--
ALTER TABLE `kategori_aset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kondisi_aset`
--
ALTER TABLE `kondisi_aset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user.email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aset`
--
ALTER TABLE `aset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kategori_aset`
--
ALTER TABLE `kategori_aset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kondisi_aset`
--
ALTER TABLE `kondisi_aset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
