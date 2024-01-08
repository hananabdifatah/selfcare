-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 08, 2024 at 12:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SecretBeauty`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `skintype` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `productdescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `productname`, `skintype`, `price`, `productdescription`) VALUES
(2, 'toner', 'all skin types', '60000', 'this is a liquid that penetrates your skin super fast to remove dead skin cells and provide a quick hit of hydration'),
(4, 'cleanser', 'all skin types', '50000', 'remove make-up, dead skin cells oil, dirt and other types of pollutants from the skin, helping to keep pores clear'),
(5, 'moisturiser', 'all skin types', '100000', 'helps skin retain moisture and reduces skin problems'),
(6, 'vitamin C Serum', 'all skin types', '80000', 'brightens the skin'),
(7, 'sunscreen', 'all skin types', '100000', 'prevents sunburns and provides moisture'),
(8, 'body lotion', 'all skin types', '120000', 'keeps body moisture and soft'),
(9, 'scrub', 'all skin types', '70000', 'exfoliat the skin and removes dead skin '),
(10, 'sleeping lip mask', 'all skin types', '40000', 'exfoliate the lips and removes dead skin from the lips '),
(11, 'face mask', 'all skin types', '50000', 'exfoliate the skin and removes dead skin from the face and softens the face ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
