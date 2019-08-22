-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2018 at 05:09 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moodmusic`
--

-- --------------------------------------------------------

--
-- Table structure for table `moods`
--

CREATE TABLE `moods` (
  `id` int(255) NOT NULL,
  `mood` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moods`
--

INSERT INTO `moods` (`id`, `mood`) VALUES
(1, 'happy'),
(2, 'sad'),
(3, 'excited'),
(4, 'romantic');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(255) NOT NULL,
  `mood_id` int(255) NOT NULL,
  `song_name` varchar(255) NOT NULL,
  `runtime` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `song_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `mood_id`, `song_name`, `runtime`, `thumbnail`, `song_link`) VALUES
(1, 4, 'tum hi ho', '6.03 minutes', 'tum_hi_ho.jpg', 'tum_hi_ho.mp3'),
(2, 1, 'Koi Vi Nahi', '4.30 minutes', 'koi_vi_nahi.jpg', 'koi_vi_nahi.mp3'),
(3, 3, 'Badnaam', '5.13 minutes', 'badnaam.jpg', 'badnaam.mp3'),
(4, 2, 'Judaai', '3.25 minutes', 'judaai.jpg', 'judaai.mp3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `moods`
--
ALTER TABLE `moods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `moods`
--
ALTER TABLE `moods`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
