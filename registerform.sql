-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2024 at 10:52 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `registerform`
--

CREATE TABLE `registerform` (
  `number` int(100) NOT NULL,
  `name` text NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `gender` text NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `fileToUpload` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registerform`
--

INSERT INTO `registerform` (`number`, `name`, `address`, `email`, `date`, `gender`, `phonenumber`, `fileToUpload`) VALUES
(4567, 'saral', '       malayappa nagar ', 'sara@gmail.com', '1998-11-30', 'f', 469929202, '29234536pexels-nishant-aneja-2955819.jpg'),
(8908, 'rani', '        trichy', 'rani@gmail.com', '1971-10-17', 'f', 234590504, '86241021299061_house_icon.png'),
(87776, 'king', '    ambikapuram    ', 'king@gmail.com', '1993-07-21', 'm', 2147483647, '804771395296522_youtube_youtube logo_icon.png'),
(678999, 'kumar', '     trichy   ', 'kumar@gmail.com', '2024-03-01', 'm', 567880098, '61946730pexels-xxss-is-back-777001.jpg'),
(889910, 'mani', '      trichy  ', 'mani@gmail.com', '2024-02-29', 'm', 89012345, '4708IMG-20161011-WA0003.jpg'),
(992134, 'lumina', '     trichy   ', 'lumi@gmail.com', '2024-02-10', 'f', 678902233, '9389IMG-20161023-WA0007.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registerform`
--
ALTER TABLE `registerform`
  ADD PRIMARY KEY (`number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
