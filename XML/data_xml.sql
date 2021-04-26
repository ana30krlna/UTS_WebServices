-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 26, 2021 at 11:36 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_xml`
--

-- --------------------------------------------------------

--
-- Table structure for table `tokenlistrik`
--

CREATE TABLE `tokenlistrik` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `No_token` char(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tokenlistrik`
--

INSERT INTO `tokenlistrik` (`id`, `nama`, `Alamat`, `No_token`, `harga`) VALUES
(1, 'Neng Ana Karlina', 'Kp. Kalapadua RT.018 RW.003 Ds. Margaluyu, Manonjaya, Tasikmalaya', '01234567891021', 27000),
(2, 'Kim Taehyung', 'Jl. Sidoarjo RT.010 RW.007 Ds. Silihasih, Kuningan', '23456789098764', 53000),
(3, 'Neng Ani Karleni', 'Jl. Soekarno No. 24 Bandung', '14326576890090', 27000),
(4, 'Zahira Nur Fadilah', 'Kp. Korea No. 07 Tasikmalaya', '15243556543432', 53000),
(5, 'Jeon Jungkook', 'Kp. Pasti Aman RT.021 RW.007 Ds. Pamungkas, Tasikmalaya', '22213487009089', 53000),
(6, 'Zahran Ahmad', 'Jl. Sukaendah Sumedang', '10226767889709', 27000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tokenlistrik`
--
ALTER TABLE `tokenlistrik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tokenlistrik`
--
ALTER TABLE `tokenlistrik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
