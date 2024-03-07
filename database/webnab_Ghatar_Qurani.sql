-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 15, 2024 at 11:36 AM
-- Server version: 10.6.16-MariaDB
-- PHP Version: 8.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webnab_Ghatar_Qurani`
--

-- --------------------------------------------------------

--
-- Table structure for table `popup_data`
--

CREATE TABLE `popup_data` (
  `id` int(11) NOT NULL,
  `messagePopup` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `imagePopup` varchar(255) NOT NULL,
  `button_text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `button_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop_data`
--

CREATE TABLE `shop_data` (
  `id` int(11) NOT NULL,
  `Price2500` int(11) NOT NULL,
  `PriceCrossedOut2500` int(11) NOT NULL,
  `Ribbon2500` text NOT NULL,
  `Price5000` int(11) NOT NULL,
  `PriceCrossedOut5000` int(11) NOT NULL,
  `Ribbon5000` text NOT NULL,
  `Price10000` int(11) NOT NULL,
  `PriceCrossedOut10000` int(11) NOT NULL,
  `Ribbon10000` text NOT NULL,
  `Price20000` int(11) NOT NULL,
  `PriceCrossedOut20000` int(11) NOT NULL,
  `Ribbon20000` text NOT NULL,
  `Price40000` int(11) NOT NULL,
  `PriceCrossedOut40000` int(11) NOT NULL,
  `Ribbon40000` text NOT NULL,
  `Price100000` int(11) NOT NULL,
  `PriceCrossedOut100000` int(11) NOT NULL,
  `Ribbon100000` text NOT NULL,
  `eghtesadi` int(11) NOT NULL,
  `vizhe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_data`
--

INSERT INTO `shop_data` (`id`, `Price2500`, `PriceCrossedOut2500`, `Ribbon2500`, `Price5000`, `PriceCrossedOut5000`, `Ribbon5000`, `Price10000`, `PriceCrossedOut10000`, `Ribbon10000`, `Price20000`, `PriceCrossedOut20000`, `Ribbon20000`, `Price40000`, `PriceCrossedOut40000`, `Ribbon40000`, `Price100000`, `PriceCrossedOut100000`, `Ribbon100000`, `eghtesadi`, `vizhe`) VALUES
(1, 7000, 10000, '', 11700, 18000, '', 19800, 33000, '', 33000, 60000, '', 55000, 110000, '', 215000, 100000, '', 18900, 23900);

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) UNSIGNED NOT NULL,
  `phone_number` bigint(20) NOT NULL,
  `player_name` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `popup_data`
--
ALTER TABLE `popup_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_data`
--
ALTER TABLE `shop_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `popup_data`
--
ALTER TABLE `popup_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shop_data`
--
ALTER TABLE `shop_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
