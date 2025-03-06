-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2025 at 02:41 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lpi_blod`
--

-- --------------------------------------------------------

--
-- Table structure for table `donars`
--

CREATE TABLE `donars` (
  `id` int(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `mobile` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `weight` int(255) NOT NULL,
  `f_num` int(255) NOT NULL,
  `last_donate_date` date NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donars`
--

INSERT INTO `donars` (`id`, `firstName`, `lastName`, `mobile`, `email`, `address`, `blood_group`, `weight`, `f_num`, `last_donate_date`, `img`) VALUES
(11, 'MD ', 'Fahim', 1914742633, 'itsfahim100@gmail.com', 'Mandari, Lakshmipur Sadar, Lakshmipur ', 'AB+', 55, 1750965595, '2023-11-15', 'fahim - no background.png'),
(13, 'Sohag', 'Hosen', 1750965595, 'sohag@gmail.com', 'Jockshin Bazar, Lakshmipur Sadar, Lakshmipur', 'O-', 52, 0, '2023-12-20', 'sohag.png'),
(14, 'Foysal', 'Mahmud', 1783810649, 'foysalmahmud841@gmail.com', 'Lakshmipur Sadar, Lakshmipur', 'O+', 51, 0, '0000-00-00', 'foysal.jpg'),
(15, 'Rahat', ' Hossain', 1319295267, 'rahat@gmail.com', 'Jockshin Bazar, Lakshmipur Sadar, Lakshmipur', 'O+', 54, 1750965595, '2024-01-17', 'rahat.png'),
(16, 'Daudur', 'Rahman', 1825459852, 'daud@gmail.com', 'Jockshin Bazar, Lakshmipur Sadar, Lakshmipur', 'B+', 70, 0, '2023-11-13', 'Md daud.png'),
(17, 'Tarek ', 'Hossain', 1745155649, 'tarek879@gmail.com', 'Bangakhan, Lakshmipur ', 'O+', 0, 0, '2023-10-02', 'tarek.png'),
(18, 'MD', 'Hasan', 1258695875, 'hasan@gmail.com', 'Jockshin Bazar, Lakshmipur Sadar, Lakshmipur', 'O+', 65, 0, '2023-03-13', 'hasan.png'),
(19, 'Masum', 'Rasel', 1958756512, 'rasel@gmail.com', 'Lakshmipur Sadar, Lakshmipur', 'A+', 55, 0, '2023-06-15', 'rasel.png'),
(20, 'Foysal', 'Rana', 1345857951, 'foysalrana@gmail.com', 'Mandari, Lakshmipur Sadar, Lakshmipur', 'A-', 50, 0, '2023-10-17', 'foysal.png'),
(21, 'Abdur', 'Rahman', 1452896874, 'abdurrahman@gmail.com', 'Raypur, Lakshmipur ', 'A-', 51, 0, '2022-12-07', 'abdur rahman.png'),
(22, 'Saidur Rahman', 'Sohan', 175896478, 'sohan@gmail.com', 'Komol Nogor, Lakshmipur ', 'A-', 53, 0, '2023-06-22', 'sohan.png'),
(23, 'Hasan', 'Shanto', 197864126, 'hasan@gmail.com', 'Komol Nogor, Lakshmipur', 'A-', 0, 0, '2023-08-15', 'shanto.jpg'),
(24, 'Yeasin ', 'Arafat', 2147483647, 'arafat@gmail.com', 'Mandari, Lakshmipur Sadar, Lakshmipur', 'A-', 56, 0, '2023-05-19', 'yasin.png'),
(25, 'Rohman', 'Rafy', 1865785496, 'rafy@gmail.com', 'Jockshin Bazar, Lakshmipur Sadar, Lakshmipur', 'A+', 54, 0, '2023-08-16', 'rafy.png'),
(26, 'Reshi Kesh', 'Bhowmik', 1856967581, 'reshi@gmail.com', 'Noyakhali', 'A+', 57, 0, '2023-07-04', 'Rishi kesh .jpg'),
(27, 'Abul', 'Hasan', 1852697814, 'hasan@gmail.com', 'Hospital Road, Lakshmipur Sadar, Lakshmipur ', 'A+', 67, 0, '2023-08-09', 'Abul Hasan.jpg'),
(28, 'Gazi', 'Nahid', 1848229341, 'gazinahid986@gmail.com', 'Zilla: Lakshmipur, Upozilla: Sadar, Thana: Chandragonj, P/O: Keramotgonj', 'B+', 58, 0, '2023-04-05', 'JIHAD.jpg'),
(29, 'Kamrul', 'Islam', 1767871814, 'kamrul@gmail.com', 'Mandari, Lakshmipur Sadar, Lakshmipur', 'B+', 78, 0, '2022-12-14', 'kamrul.jpg'),
(30, 'Omor Faruk', 'Shanto', 1791220261, 'foysalmahmud841@gmail.com', 'Bagbari, Lakshmipur ', 'B+', 56, 0, '2023-11-14', 'omor.jpg'),
(31, 'Meheraj Hosen', 'Rimon', 1749653265, 'rimon@gmail.com', 'Jockshin Bazar, Lakshmipur Sadar, Lakshmipur', 'B+', 50, 0, '2023-05-16', 'rimon.jpg'),
(32, 'Tasnim ', 'Hasan', 1734780021, 'tasnim@gmail.com', 'Jockshin Bazar, Lakshmipur Sadar, Lakshmipur', 'B-', 52, 0, '2023-04-27', 'Tasnim - collage.jpg'),
(33, 'PRONOY KUMAR', 'PAUL', 1867552617, 'ppronoy655@gmail.com', 'Baismara,Lakshmipur     Sadar,Laksmipur', 'B-', 5, 0, '2023-05-23', 'Pronoy.jpg'),
(34, 'Abdur Rahman', 'Mujahid', 1832883174, 'abdurrahman612730@gmail.com', 'Zilla: Noakhali, Upozilla: Chatkhil, P/O: Sompara, Village: Purosottompur', 'B-', 56, 0, '2023-11-20', 'mujahid.jpg'),
(35, 'Raiad Habib', 'Niloy', 1870857835, 'rhniloy638@gmail.com', 'laxmipur   upazila : Raipur, P.O: ulpath Nagor.  vill: Bamni, Bhuiyan bari.', 'B-', 70, 0, '2023-09-19', '3.jpg'),
(36, 'Yeasin', 'Arafat', 1710076586, 'yeasinarafat202219@gmail.com', 'Chandragonj, Sadar, Lakshmipur ', 'B-', 85, 0, '2023-11-20', 'yeasin.jpg'),
(37, 'Emon Hossain', 'Hira', 1817516654, 'emonhossainhira231@gmail.com', 'Zilla: Lakshmipur, Upozilla: Kamalnager, Thana: Kamalnager ', 'O+', 50, 0, '2023-03-01', 'emon hira.jpg'),
(38, 'Shohidul islam ', 'Arman', 1703025893, 'ahmedarman0302@gmail.com', 'Nangolkot , Cumilla ', 'O-', 54, 0, '2024-02-07', 'arman.jpg'),
(39, 'Arman', 'hossain', 1886887639, 'armanhossainsharif11@gmail.com', 'Boshikpur, Sadar, Lakshmipur ', 'AB-', 55, 0, '2020-02-10', 'sorif.jpg'),
(40, 'Abdullah ', 'Al Marup', 1836563200, 'mdabdullahmaruf83@gmail.com', 'noakhli Sadar', 'O-', 45, 0, '2023-10-03', 'marup.jpg'),
(41, 'Emon', 'Hossain', 1844463584, '012emonhossen@gmail.com', 'Lakshmipur Sadar, Lakshmipur', 'AB+', 56, 0, '2023-08-29', 'emon.jpg'),
(42, 'Jonayed', 'Hossain', 1484596785, 'junu@gmail.com', 'Mandari, Lakshmipur Sadar, Lakshmipur', 'AB+', 55, 0, '2024-02-20', 'Jonayed.jpg'),
(43, 'Azgor ', 'Hossain', 1892834745, 'azgor@gmail.com', 'Jockshin Bazar, Lakshmipur Sadar, Lakshmipur', 'AB+', 55, 0, '2023-07-17', 'azgor.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `user_email`, `user_password`, `user_role`) VALUES
(1, 'admin', 'admin@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0),
(9, 'lpiblood', 'lpiblood@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donars`
--
ALTER TABLE `donars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donars`
--
ALTER TABLE `donars`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
