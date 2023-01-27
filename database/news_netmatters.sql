-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2023 at 11:57 AM
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
-- Database: `news_netmatters`
--

-- --------------------------------------------------------

--
-- Table structure for table `news_tables`
--

CREATE TABLE `news_tables` (
  `news_id` int(11) NOT NULL,
  `news_image` varchar(255) NOT NULL,
  `news_images2` varchar(255) NOT NULL,
  `news_title` varchar(50) NOT NULL,
  `news_description` varchar(255) NOT NULL,
  `author` varchar(20) NOT NULL,
  `news_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_tables`
--

INSERT INTO `news_tables` (`news_id`, `news_image`, `news_images2`, `news_title`, `news_description`, `author`, `news_date`) VALUES
(1, 'img/img/media/news_img_one.jpg', 'img/img/media/netmatters_logo.jpg', 'Ashley Ward - Netmatters 5 Year Legend', 'Congratulations to Ashley Ward for achieving Netmatters’ Long Service Award and becoming the latest...', 'Posted by Netmatters', '0000-00-00'),
(2, 'img/img/media/news_img_two.jpg', 'img/img/media/netmatters_logo.jpg', 'What Makes a Good Web Development Partner?', 'With the number of monthly internet users in the UK predicted to rise to 65 million by 2026 (Statista, 2022)...', 'Posted by Netmatters', '0000-00-00'),
(3, 'img/img/media/news_img_three.jpg', 'img/img/media/netmatters_logo.jpg', 'December Notables 2022', 'Each month, various departments recognise those employees who have excelled in their work and helped...', 'Posted by Netmatters', '0000-00-00'),
(4, 'img/img/media/news_img_four.jpg', 'img/img/media/netmatters_logo.jpg', 'Netmatters End-Of-Year Staff Awards 2022', 'As we step into a new year, we would like to take some time to look back on yet...', 'Posted by Netmatters', '0000-00-00'),
(5, 'img/img/media/news_img_five.jpg', 'img/img/media/netmatters_logo.jpg', 'November Notables 2022', 'Each month, various departments recognise those employees who have excelled in their work and helped...', 'Posted by Netmatters', '0000-00-00'),
(6, 'img/img/media/news_img_six.jpg', 'img/img/media/netmatters_logo.jpg', 'The Green Team Reducing Our Carbon Footprint - Par', 'At Netmatters, we are continuing to support carbon reduction and reforestation projects through our...', 'Posted by Netmatters', '0000-00-00'),
(7, 'img/img/media/news_img_seven.jpg', 'img/img/media/netmatters_logo.jpg', 'Peter Holmes - Netmatters 5 Year Legend', 'Netmatters would like to take this time to say a huge congratulations to Peter Holmes on gaining the...', 'Posted by Netmatters', '0000-00-00'),
(8, 'img/img/media/news_img_eight.jpg', 'img/img/media/netmatters_logo.jpg', 'Simon Wright - Netmatters 10 Year Hero', 'Netmatters would like to congratulate Simon Wright on surpassing ‘Legend’ status and gaining the HERO ‘Long Service Award.', 'Posted by Netmatters', '0000-00-00'),
(9, 'img/img/media/news_img_nine.jpg', 'img/img/media/netmatters_logo.jpg', 'September Notables 2022', 'Each month, various departments recognise those employees who have excelled in their work and helped...', 'Posted by Netmatters', '0000-00-00'),
(10, 'img/img/media/news_img_ten.jpg ', 'img/img/media/netmatters_logo.jpg', 'The Green Team Reducing Our Carbon Footprint', 'Back in November 2021 we documented our fantastic...', 'Posted by Netmatters', '0000-00-00'),
(11, 'img/img/media/news_img_eleven.jpg ', 'img/img/media/netmatters_logo.jpg', 'Shopify Explained: Why You Should be Building', 'Shopify is an all-in-one eCommerce website-buildin...', 'Posted by Netmatters', '0000-00-00'),
(12, 'img/img/media/news_img_twelve.jpg ', 'img/img/media/netmatters_logo.jpg', 'August Notables 2022', 'Each month, various departments recognize those em...', 'Posted by Netmatters', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news_tables`
--
ALTER TABLE `news_tables`
  ADD PRIMARY KEY (`news_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news_tables`
--
ALTER TABLE `news_tables`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
