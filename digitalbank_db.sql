-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2022 at 08:18 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitalbank_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `trade`
--

CREATE TABLE `trade` (
  `id` int(11) NOT NULL,
  `Order_No` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `Share_Name` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `Share_Id` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `Quantity` int(11) NOT NULL DEFAULT 0,
  `BuyOrSell` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `PricePerShare` int(11) NOT NULL DEFAULT 0,
  `Customer_Id` int(11) NOT NULL DEFAULT 0,
  `Account` int(11) NOT NULL DEFAULT 0,
  `Front_Desk_Officer_id` int(11) NOT NULL DEFAULT 0,
  `Brach_Code` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `Trading_Charge` int(11) NOT NULL DEFAULT 0,
  `Exchange` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `Trade_Date_Time` varchar(26) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trade`
--

INSERT INTO `trade` (`id`, `Order_No`, `Share_Name`, `Share_Id`, `Quantity`, `BuyOrSell`, `PricePerShare`, `Customer_Id`, `Account`, `Front_Desk_Officer_id`, `Brach_Code`, `Trading_Charge`, `Exchange`, `Trade_Date_Time`) VALUES
(36, 'O123456', 'TCS', 'T8590', 100, 'B', 1000, 9488878, 5234244, 101, 'S4525', 100, 'BSC', '2022-05-11T10:30:52.208653'),
(37, 'O834537', 'Infosys', 'I5667', 200, 'B', 1200, 5234274, 2345666, 102, 'S4525', 240, 'NSC', '2022-05-11T10:50:51.208345'),
(38, 'O643539', 'MarutiSuzuki', 'M2890', 250, 'S', 1500, 8723469, 3886414, 103, 'S4529', 375, 'NSC', '2022-05-11T13:12:15.148709'),
(39, 'O123466', 'TCS', 'T8590', 200, 'S', 1000, 9488878, 5234244, 101, 'S4525', 100, 'BSC', '2022-05-11T10:50:30.208653'),
(40, 'O834577', 'Infosys', 'I5667', 400, 'B', 1200, 5234274, 2345666, 102, 'S4525', 240, 'NSC', '2022-05-11T11:44:22.243345'),
(41, 'O643588', 'MarutiSuzuki', 'M2890', 500, 'B', 1500, 8723469, 3886414, 103, 'S4529', 375, 'NSC', '2022-05-11T14:55:10.148709');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trade`
--
ALTER TABLE `trade`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trade`
--
ALTER TABLE `trade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
