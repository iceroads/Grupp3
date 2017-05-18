-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2017 at 09:58 AM
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
  `genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `bild` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `roller`
--

CREATE TABLE IF NOT EXISTS `roller` (
  `id` int(11) NOT NULL,
  `roll` int(11) NOT NULL
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
-- Indexes for table `personer`
--
ALTER TABLE `personer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filmer`
--
ALTER TABLE `filmer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `personer`
--
ALTER TABLE `personer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
