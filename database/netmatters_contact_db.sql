-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2023 at 12:04 PM
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
-- Database: `netmatters_contact_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `telephone_num` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `company_name`, `user_email`, `telephone_num`, `subject`, `message`) VALUES
('dick head', 'werwwerwereerwe', '', '', '', ''),
('Aaron Bruce Smith', 'werwwerwereerwe', '', '', '', ''),
('okokoo', 'aaple', '', '', '', ''),
('david free', 'netmatters', 'fhfghfghfgh@aol.com', '', '', ''),
('poo', 'netmatters', 'fhfghfghfgh@aol.com', '', '', ''),
('Aaron Bruce Smith', 'Nirvana', 'aaronbrucesmith86@gmail.com', '34234323242324454353', '', ''),
('aaron', 'aaple', 'okokokok@aol.com', '324233232', 'asdaasasdsa', ''),
('rent free', 'N/A', 'poo@aol.com', '569114', 'sexing tits', 'tits tits tits tits tioits tits tits tits'),
('alice wicks', 'park resorts', 'alicejadeweicks@aol.com', '6969696969', 'me and alice', 'nnweir nneruinruitnerui erineruineruineruie rnuierneruiniutrnie uineruieriuetni'),
('aaron', 'netmatters', 'comeonbigbum_1@hotmail.com', '569114', 'asdaasasdsa', 'fgdgffgdgdgdf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
