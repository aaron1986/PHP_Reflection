-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2023 at 12:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `office_netmatters`
--

-- --------------------------------------------------------

--
-- Table structure for table `office_tables`
--

CREATE TABLE `office_tables` (
  `office_id` int(11) NOT NULL,
  `office_image` varchar(255) NOT NULL,
  `office_title` varchar(255) NOT NULL,
  `office_desceiption` varchar(255) NOT NULL,
  `office_telephone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `office_tables`
--

INSERT INTO `office_tables` (`office_id`, `office_image`, `office_title`, `office_desceiption`, `office_telephone`) VALUES
(1, 'img/img/contact_media/office_img_one.jpg', 'Cambridge Office', 'Unit 1.31, \r\nSt John\'s Innovation Centre, \r\nCowley Road, Milton, \r\nCambridge, \r\nCB4 0WS', '01223 37 57 72'),
(2, 'img/img/contact_media/office_img_two.jpg', 'Wymondham Office', 'Unit 15,Penfold Drive,Gateway 11 Business Park,Wymondham, Norfolk, NR18 0WZ', '01603 70 40 20'),
(3, 'img/img/contact_media/office_img_three.jpg', 'Great Yarmouth Office', 'Suite F23, Beacon Innovation Centre, Beacon Park, Gorleston, Great Yarmouth, Norfolk, NR31 7RA ', '01493 60 32 04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `office_tables`
--
ALTER TABLE `office_tables`
  ADD PRIMARY KEY (`office_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `office_tables`
--
ALTER TABLE `office_tables`
  MODIFY `office_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
