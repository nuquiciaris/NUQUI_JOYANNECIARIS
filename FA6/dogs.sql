-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2026 at 06:10 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_crb`
--

-- --------------------------------------------------------

--
-- Table structure for table `dogs`
--

CREATE TABLE `dogs` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `breed` varchar(100) NOT NULL,
  `age` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `color` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dogs`
--

INSERT INTO `dogs` (`id`, `name`, `breed`, `age`, `address`, `color`, `height`, `weight`) VALUES
(2, 'browny', 'Pug', '2yrs old', 'Quezon City', 'white', '2 ft', '2.5 kilos'),
(3, 'Whitey', 'Siberian Husky', '3 yrs old', 'Malabon City', 'brown', '3 ft', '5.5 kilos'),
(4, 'Venti', 'Golden Retriever', '3', 'Mondstadt', 'Green', '2 ft', '30 kg'),
(5, 'Zhongli', 'German Shepherd', '6', 'Liyue Harbor', 'Golden Brown', '2.1 ft', '40 kg'),
(6, 'Raiden Shogun', 'Doberman', '4', 'Inazuma City', 'Purple', '2.2 ft', '38 kg'),
(7, 'Nahida', 'Shitzu', '2', 'Sumeru City', 'White Green', '0.9 ft', '6 kg'),
(8, 'Furina', 'Siberian Husky', '3', 'Fontaine', 'Blue White', '1.9 ft', '27 kg'),
(9, 'Diluc', 'Rottweiler', '5', 'Dawn Winery', 'Red Black', '2.3 ft', '50 kg'),
(10, 'Xiao', 'Belgian Malinois', '4', 'Wangshu Inn', 'Teal brown', '2 ft', '32 kg'),
(11, 'Ganyu', 'Samoyed', '3', 'Qingce Village', 'Light Blue', '1.8 ft', '25 kg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dogs`
--
ALTER TABLE `dogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dogs`
--
ALTER TABLE `dogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
