-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2021 at 05:54 PM
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
-- Database: `pw_tubes_203040112`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nrp` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `img`, `nrp`, `nama`, `email`, `jurusan`) VALUES
(1, 'agoy.jpg', '203040112', 'Yoga Bagja Ramadhan', 'yogaarmdhn@gmail.com', 'Teknik Informatika'),
(2, 'wawa.jpg', '203040500', 'Nazwa Cecillia', 'nzwccll@gmail.com', 'Fakultas Kedokteran Gigi'),
(3, 'vin.jpg', '203040097', 'Hervin Fakhrul', 'hervinfakhrulm@gmail.com', 'Teknik Informatika'),
(4, 'mahen.jpg', '203040094', 'Rizki Mahendra', 'rzkymhnn@gmail.com', 'Teknik Informatika'),
(5, 'butong.jpg', '203040117', 'Fikri Ardiansyah', 'fkryadr@gmail.com', 'Teknik Informatika'),
(6, 'agam.jpg', '203040098', 'Agam Ramdhan Kamil Atmaja', 'agamramdhan@gmail.com', 'Teknik Informatika'),
(7, 'vale.jpg', '203040086', 'Abizar Valentino Fachri', 'abivale@gmail.com', 'Teknik Informatika'),
(8, 'man.jpg', '203040029', 'Hilman Sulaeman', 'hilmansulaeman@gmail.com', 'Teknik Informatika'),
(9, 'bule.jpg', '203040043', 'Muhammad Rizky', 'muhammadrizky@gmail.com', 'Teknik Informatika'),
(10, 'izal.jpg', '203040075', 'Muhammad Afrizal Fadillah', 'afrizalfadillah@gmail.com', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'yoga', '$2y$10$bAyeQ3YzTqByS4hQFxCHbu83jwzPIvekmrfr/kuLyR.Qwq7CSKlB.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
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
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
