-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2021 at 06:31 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `valas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bank`
--

CREATE TABLE `tb_bank` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `url` text NOT NULL,
  `logo` text NOT NULL,
  `status` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bank`
--

INSERT INTO `tb_bank` (`id`, `nama`, `url`, `logo`, `status`, `date_created`, `date_updated`) VALUES
(12, 'bank jatim', 'https://bankjatim.com', '1.jpg', 'Aktif', '2021-01-22 06:42:09', '2021-01-22 06:42:09'),
(13, 'bank mandiri', 'https://mandiri.com', '2.jpg', 'Aktif', '2021-01-22 06:42:38', '2021-01-22 06:42:38'),
(14, 'bank bca', 'https://bca.net', '3.jpg', 'Tidak Aktif', '2021-01-22 06:43:22', '2021-01-22 06:46:43'),
(15, 'bank bri', 'https://bri.com', '1.jpg', 'Aktif', '2021-01-22 06:46:14', '2021-01-22 06:46:14'),
(16, 'bank bni', 'https://bni.net', '2.jpg', 'Tidak Aktif', '2021-01-23 05:21:19', '2021-01-23 05:26:47');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `token` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_valas`
--

CREATE TABLE `tb_valas` (
  `id` int(11) NOT NULL,
  `bank_id` text NOT NULL,
  `mata_uang` text NOT NULL,
  `beli` text NOT NULL,
  `jual` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_valas`
--

INSERT INTO `tb_valas` (`id`, `bank_id`, `mata_uang`, `beli`, `jual`, `date_created`, `date_updated`) VALUES
(9, 'bank jatim', 'usd', '10000', '12000', '2021-01-23 05:18:27', '2021-01-23 05:29:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bank`
--
ALTER TABLE `tb_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_valas`
--
ALTER TABLE `tb_valas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bank`
--
ALTER TABLE `tb_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_valas`
--
ALTER TABLE `tb_valas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
