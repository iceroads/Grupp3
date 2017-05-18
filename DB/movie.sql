-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2017 at 10:39 AM
-- Server version: 5.6.30
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `filmer`
--

CREATE TABLE IF NOT EXISTS `filmer` (
  `id` int(11) NOT NULL,
  `titel` varchar(255) NOT NULL,
  `producer` int(11) NOT NULL,
  `writer` int(11) NOT NULL,
  `rate` int(2) NOT NULL,
  `trailer` varchar(255) NOT NULL,
  `release_year` date NOT NULL,
  `info` text NOT NULL,
  `bild` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `filmer`
--

INSERT INTO `filmer` (`id`, `titel`, `producer`, `writer`, `rate`, `trailer`, `release_year`, `info`, `bild`, `genre`, `created_at`, `updated_at`) VALUES
(1, 'Test', 1, 1, 1, 'none', '0000-00-00', 'Testar', 'none', 'Action', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `filmerxpersoner`
--

CREATE TABLE IF NOT EXISTS `filmerxpersoner` (
  `film_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `personer`
--

CREATE TABLE IF NOT EXISTS `personer` (
  `id` int(11) NOT NULL,
  `f_namn` varchar(255) NOT NULL,
  `e_namn` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `info` text NOT NULL,
  `bild` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personer`
--

INSERT INTO `personer` (`id`, `f_namn`, `e_namn`, `birthdate`, `info`, `bild`, `created_at`, `updated_at`) VALUES
(1, 'Testa', 'Testsson', '0000-00-00', 'Test', 'none', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `roller`
--

CREATE TABLE IF NOT EXISTS `roller` (
  `id` int(11) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rollerxpersoner`
--

CREATE TABLE IF NOT EXISTS `rollerxpersoner` (
  `roll_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `filmer`
--
ALTER TABLE `filmer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filmerxpersoner`
--
ALTER TABLE `filmerxpersoner`
  ADD KEY `film_id` (`film_id`),
  ADD KEY `person_id` (`person_id`);

--
-- Indexes for table `personer`
--
ALTER TABLE `personer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roller`
--
ALTER TABLE `roller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rollerxpersoner`
--
ALTER TABLE `rollerxpersoner`
  ADD KEY `roll_id` (`roll_id`),
  ADD KEY `person_id` (`person_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filmer`
--
ALTER TABLE `filmer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `personer`
--
ALTER TABLE `personer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `roller`
--
ALTER TABLE `roller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `filmerxpersoner`
--
ALTER TABLE `filmerxpersoner`
  ADD CONSTRAINT `filmerxpersoner_ibfk_1` FOREIGN KEY (`film_id`) REFERENCES `filmer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `filmerxpersoner_ibfk_2` FOREIGN KEY (`person_id`) REFERENCES `personer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rollerxpersoner`
--
ALTER TABLE `rollerxpersoner`
  ADD CONSTRAINT `rollerxpersoner_ibfk_1` FOREIGN KEY (`roll_id`) REFERENCES `roller` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rollerxpersoner_ibfk_2` FOREIGN KEY (`person_id`) REFERENCES `personer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
