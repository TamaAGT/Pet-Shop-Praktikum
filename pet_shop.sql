-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2021 at 08:36 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `pemilik` varchar(35) NOT NULL,
  `hewan` varchar(35) NOT NULL,
  `perawatan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `pemilik`, `hewan`, `perawatan`, `tanggal`) VALUES
(1, 'Novita Sari', 'Hamster', 'Grooming', '2020-12-17'),
(6, 'Eddy Prabowo', 'Sugar Glider', 'Cek Kesehatan', '2021-01-08'),
(7, 'Leonardo Simanjuntak', 'Anjing', 'Pemberian Vaksin', '2021-01-21'),
(8, 'Richard Pedro', 'Kucing', 'Grooming', '2021-01-05'),
(9, 'Richard Dawkins', 'Sugar Glider', 'Cek Kesehatan', '2021-01-21'),
(10, 'Jared Diamond', 'Anjing', 'Penitipan', '2021-01-11'),
(11, 'Alfonso De Albuquerque', 'Hamster', 'Pembersihan Kutu', '2021-01-27'),
(12, 'Siti Nurbaya', 'Kucing', 'Pemberian Vaksin', '2021-01-01'),
(14, 'indah pertiwi', 'Hamster', 'Penitipan', '2021-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(2, 'anggit', 'kitasemuabisa@gmail.com', '$2y$10$iNUPmr7noECN51o.n7Rk/u621qo4R1NE8V5wj.yJAgdZ3S4VTwBl6'),
(3, 'yantri mahesa', 'admin@gmail.com', '$2y$10$iDf1szXyo31TZj0UpGTf4.o2.qnd5JY4YKAR5IhiXpD8FrC.CqTJ6'),
(4, 'mahesa', 'anggittama90@gmail.com', '$2y$10$nfyAOJJ3pWjy/Po2rOEnKOZuOczQo5og74F1Ta3uvTBfTUH7d3eFq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
