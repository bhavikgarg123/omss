-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2017 at 06:42 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amaze`
--

-- --------------------------------------------------------

--
-- Table structure for table `amazes`
--

CREATE TABLE IF NOT EXISTS `amazes` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amazes`
--

INSERT INTO `amazes` (`id`, `name`) VALUES
(1, 'Amazecreators.com'),
(2, 'www.html.com'),
(3, 'www.css.in'),
(4, 'Wordpress.com');

-- --------------------------------------------------------

--
-- Table structure for table `amazess`
--

CREATE TABLE IF NOT EXISTS `amazess` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amazess`
--

INSERT INTO `amazess` (`id`, `name`, `email`, `password`, `contact`) VALUES
(1, 'bhavik', 'bhavikgarg228@gmail.com', 'bhavikk', 2147483647),
(2, 'amaze', 'AmazeCreators@gmail.com', 'amaze', 2147483647),
(3, 'ksbkajka', 'ksjkkq@.com', 'abcdef', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amazes`
--
ALTER TABLE `amazes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amazess`
--
ALTER TABLE `amazess`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amazes`
--
ALTER TABLE `amazes`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `amazess`
--
ALTER TABLE `amazess`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
