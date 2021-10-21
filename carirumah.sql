-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 10:31 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carirumah`
--

-- --------------------------------------------------------

--
-- Table structure for table `iklan`
--

CREATE TABLE `iklan` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `sertifikat` varchar(40) NOT NULL,
  `kamar` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iklan`
--

INSERT INTO `iklan` (`id`, `nama`, `foto`, `sertifikat`, `kamar`) VALUES
(2, 'Rumah 2 lantai bandar lampung', '1634724819_c0e61717fefe06cf4e60.jpg', 'HGB', 5),
(3, 'Rumah SHM jaksel', '1634724861_d5e6bc84e58ec880d2f6.jpeg', 'SHM', 3),
(4, 'Rumah HGB bandar lampung', '1634724895_95f88d494216a2267c62.jpg', 'SHM', 3),
(5, 'Rumah SHM palembang kota', '1634725147_b4372e9709b87efc66d1.jpg', 'HGB', 6),
(6, 'Rumah tengah kota palembang SHM', '1634727309_f7ca32dc1c1ed74ad648.jpg', 'HGB', 4),
(7, 'Rumah luas jakarta pusat', '1634732770_707c23bbcb35b54b40c8.jpg', 'SHM', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `nama`, `level`) VALUES
(1, 'asrilrinaldi@gmail.com', 'asrilrinaldi123', 'Asril Rinaldi', 1),
(2, 'asrilrinaldy@gmail.com', 'asrilrinaldy123', 'RINALDI', 2),
(3, 'sisidian@gmail.com', 'sisidian1234', 'Sisi Dian Yuriska', 2),
(4, 'imamharis@gmail.com', 'imamharis1234', 'Imam Haris', 2),
(5, 'mahesa@gmail.com', 'mahesa1234', 'mahesa', 2),
(6, 'eza@gmail.com', 'ezaeza1234', 'Eza', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iklan`
--
ALTER TABLE `iklan`
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
-- AUTO_INCREMENT for table `iklan`
--
ALTER TABLE `iklan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
