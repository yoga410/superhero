-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2021 at 12:16 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `superhero`
--

-- --------------------------------------------------------

--
-- Table structure for table `superhero`
--

CREATE TABLE `superhero` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `j_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `skill` set('Bisa Terbang','Bisa Membuat Hujan','Bisa Membuat Petir','Bisa Mengendalikan Angin dan Badai','Bisa Sembuh Dengan Cepat','Mempunyai Cakar Yang Lebih Kuat Dari Baja','Makan Beling','Bisa Tidur Tanpa Merem','Bisa Merem Tanpa Tidur') NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `superhero`
--

INSERT INTO `superhero` (`id`, `nama`, `j_kelamin`, `skill`, `created_at`, `update_at`) VALUES
(1, 'Proffesor X', 'Laki-laki', 'Bisa Tidur Tanpa Merem', NULL, NULL),
(2, 'Wolverine', 'Laki-laki', 'Bisa Sembuh Dengan Cepat,Mempunyai Cakar Yang Lebih Kuat Dari Baja,Bisa Tidur Tanpa Merem', NULL, NULL),
(3, 'Raven', 'Perempuan', 'Bisa Merem Tanpa Tidur', NULL, NULL),
(4, 'Beast', 'Laki-laki', 'Bisa Sembuh Dengan Cepat,Mempunyai Cakar Yang Lebih Kuat Dari Baja,Makan Beling,Bisa Merem Tanpa Tidur', NULL, NULL),
(5, 'Storm', 'Perempuan', 'Bisa Terbang,Bisa Membuat Hujan,Bisa Membuat Petir,Bisa Mengendalikan Angin dan Badai,Bisa Tidur Tanpa Merem', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `superhero`
--
ALTER TABLE `superhero`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `superhero`
--
ALTER TABLE `superhero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
