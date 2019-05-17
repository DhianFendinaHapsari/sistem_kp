-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 15, 2019 at 11:58 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_kp`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `niy` varchar(20) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `user_Id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`niy`, `nama`, `user_Id`, `created_at`) VALUES
('1111111111', 'Pak Azhari', 5, 1557793506),
('1111111112', 'Pak Wahyu', 0, 1557793506),
('1111111113', 'Bu Murein', 7, 1557949533);

-- --------------------------------------------------------

--
-- Table structure for table `kp`
--

CREATE TABLE `kp` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `lokasi` varchar(40) NOT NULL,
  `skema_id` int(11) DEFAULT NULL,
  `dosen_niy` varchar(20) NOT NULL,
  `nilai_UTS` varchar(5) NOT NULL,
  `nilai_UAS` varchar(5) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kp`
--

INSERT INTO `kp` (`id`, `judul`, `lokasi`, `skema_id`, `dosen_niy`, `nilai_UTS`, `nilai_UAS`, `created_at`) VALUES
(13, 'Ngasih Tutorial', 'Semin, Gunungkidul', 1, '1111111111', 'A', 'A', 1557795076),
(14, 'test', 'bantul', 1, '1111111111', 'D', 'D', 1557808932);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kode_kp` int(11) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `user_id`, `nama`, `kode_kp`, `created_at`) VALUES
('1600018001', 4, 'Yadhi', 14, 1557808932),
('1600018015', 3, 'Muhammad Insan Kamil', 13, 1557795077);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `nama`) VALUES
(1, 'dosen'),
(2, 'mahasiswa'),
(3, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `skema_kp`
--

CREATE TABLE `skema_kp` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skema_kp`
--

INSERT INTO `skema_kp` (`id`, `nama`) VALUES
(1, 'PPM'),
(2, 'Mandiri'),
(3, 'Magang');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role_id`, `is_active`, `created_at`) VALUES
(3, 'insanz01', '$2y$10$XB0RqL1ZVhZuzTtij/WUVulF4VWu7e3G3HPJl.w1pDwm0j9kqa3L6', 2, 1, 1557794181),
(4, 'test1', '$2y$10$uAi3Yu7s8o6aes8.NrMWiOTnxY.PGoHrfo6Dk6ePh4NgRLOl89M7q', 2, 0, 1557808864),
(5, 'dosen', '$2y$10$qowJEwzdfN0rlSjTojkHteO/u3jiETudrKW34041q2m1HMJ4R9a62', 1, 1, 1557900196),
(6, 'admin', '$2y$10$FbqPywA/hTr/NrBMTORDTekIqIc7kJ7ze/bLN8EQJNB9XGS2RU2K2', 3, 1, 1557948732),
(7, 'dosen2', '$2y$10$oO9Xb2I2fJeZPzAJe0dj0./mp.deq9fQyTaUJQsO4uRlYudx9OS9i', 1, 1, 1557949533),
(8, 'metafisika', '$2y$10$UusByXG.rZfZqKnZeW2vDOyryVu4GrEYApT51ZSqAnOl4.xLx7ige', 2, 1, 1557950143);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`niy`),
  ADD KEY `user_Id` (`user_Id`);

--
-- Indexes for table `kp`
--
ALTER TABLE `kp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `skema_id` (`skema_id`,`dosen_niy`),
  ADD KEY `kp_ibfk_2` (`dosen_niy`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `kode_kp` (`kode_kp`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skema_kp`
--
ALTER TABLE `skema_kp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kp`
--
ALTER TABLE `kp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skema_kp`
--
ALTER TABLE `skema_kp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kp`
--
ALTER TABLE `kp`
  ADD CONSTRAINT `kp_ibfk_1` FOREIGN KEY (`skema_id`) REFERENCES `skema_kp` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kp_ibfk_2` FOREIGN KEY (`dosen_niy`) REFERENCES `dosen` (`niy`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mahasiswa_ibfk_2` FOREIGN KEY (`kode_kp`) REFERENCES `kp` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
