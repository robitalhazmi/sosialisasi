-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2017 at 08:35 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unairsos`
--

-- --------------------------------------------------------

--
-- Table structure for table `agendas`
--

CREATE TABLE `agendas` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kegiatan` text NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `lokasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agendas`
--

INSERT INTO `agendas` (`id`, `tanggal`, `kegiatan`, `kontak`, `lokasi`) VALUES
(1, '2017-12-21', 'Sosialisasi PMB', '+6281252823952', 'SMA Darul Ulum 2'),
(2, '2017-08-02', 'Sosialisasi UKT', '+628123456789', 'Universitas Airlangga');

-- --------------------------------------------------------

--
-- Table structure for table `laporans`
--

CREATE TABLE `laporans` (
  `id` int(11) NOT NULL,
  `detail` text NOT NULL,
  `kendala` text NOT NULL,
  `dokumen` text NOT NULL,
  `agendas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `nama` text,
  `telepon` varchar(15) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `berkas` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `nama`, `telepon`, `gender`, `tgl_lahir`, `berkas`) VALUES
(1, NULL, NULL, NULL, NULL, NULL),
(2, 'Ahmad Alif Robit', '+6281252823952', 'Male', '1998-03-27', NULL),
(3, 'Binti Lathifatul', '+628123456789', 'Female', '1998-02-21', NULL),
(4, 'Adib Aulia', '+6281252823952', 'Male', '1998-03-27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sosialisasis`
--

CREATE TABLE `sosialisasis` (
  `id` int(11) NOT NULL,
  `agendas_id` int(11) NOT NULL,
  `petugas_id` int(11) NOT NULL,
  `jabatan` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(320) NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'robitalhazmi@gmail.com', '$2y$10$pgNpwkeTVzK1iM8ekQ3v4.kqVnh7Gm0bwEoMAFjo9xcksdFCbq/oO', '2017-07-07 03:03:52', '2017-07-05 09:40:32', 'ToyNNqAhps26478lP1dOh5HFxh3ZuaTsjEn4mF2wMILvFuKqhqS29hnxYwSV'),
(2, 'cobaemail@gmail.com', '$2y$10$J4mWojhmAjBR35LwrUlqQOJhPk9cQbLvngMMg0nlJAxO0gcaoHG.i', '2017-07-06 08:30:20', '2017-07-05 09:40:57', 'yP0kMR6m9vd7oReqS5mkPV0vl0MgzgGaVEcURiWOTnKFGyPmQIxDOt3esK6w'),
(3, 'email@gmail.com', '$2y$10$HBOBVWo7fAN5u8J5sXilHuxEu8.pd3HIKl4EAyfjF.WqZtaABAJt.', '2017-07-05 16:42:05', '2017-07-05 09:41:34', 'yFrs2NTPksiFTLHTcFwYO1BnJ5cMD16eDOCahBLU4hessp4B1Xp1Eeg46NZP'),
(4, 'adibaulia@gmail.com', '$2y$10$Bpshj0EGM2uFQVNaZqM0NeX97DihMRdNu.4/ZcP/rqteKkSm.YmiK', '2017-07-06 03:10:27', '2017-07-05 20:09:29', 'aSEeKpUrM9luxMGiDliLac2V1eSVcIapUrMUOXz6LCy0d0PnND7o4SWYAzft');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporans`
--
ALTER TABLE `laporans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `laporans_agendas` (`agendas_id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sosialisasis`
--
ALTER TABLE `sosialisasis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sosialisasi_agendas` (`agendas_id`),
  ADD KEY `sosialisasi_petugas` (`petugas_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `laporans`
--
ALTER TABLE `laporans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sosialisasis`
--
ALTER TABLE `sosialisasis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `laporans`
--
ALTER TABLE `laporans`
  ADD CONSTRAINT `laporans_agendas` FOREIGN KEY (`agendas_id`) REFERENCES `agendas` (`id`);

--
-- Constraints for table `petugas`
--
ALTER TABLE `petugas`
  ADD CONSTRAINT `petugas_users` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `sosialisasis`
--
ALTER TABLE `sosialisasis`
  ADD CONSTRAINT `sosialisasi_agendas` FOREIGN KEY (`agendas_id`) REFERENCES `agendas` (`id`),
  ADD CONSTRAINT `sosialisasi_petugas` FOREIGN KEY (`petugas_id`) REFERENCES `petugas` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
