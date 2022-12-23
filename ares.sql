-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 06:32 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ares`
--

-- --------------------------------------------------------

--
-- Table structure for table `ares_admin`
--

CREATE TABLE `ares_admin` (
  `id` bigint(20) NOT NULL,
  `uid` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `upw` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `name` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ares_test`
--

CREATE TABLE `ares_test` (
  `id` bigint(20) NOT NULL,
  `debug` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `ares_test`
--

INSERT INTO `ares_test` (`id`, `debug`) VALUES
(1, 'Hello, world!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ares_admin`
--
ALTER TABLE `ares_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ares_test`
--
ALTER TABLE `ares_test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ares_admin`
--
ALTER TABLE `ares_admin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ares_test`
--
ALTER TABLE `ares_test`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
