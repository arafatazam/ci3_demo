-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1build0.15.04.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2015 at 08:07 PM
-- Server version: 5.6.27-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci3_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `stock` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `stock`) VALUES
(2, 'Aj notun book', 'Automo', 7),
(4, 'Ajke notun diin', 'Sumon Ahmed', 23),
(5, 'Ami Ekjon Bhalo Chele', 'Sumon Ahmad', 12),
(6, 'Kaj kore?', 'Koreto', 100),
(7, 'The Book', 'Best Author', 2);

-- --------------------------------------------------------

--
-- Table structure for table `documentaries`
--

CREATE TABLE IF NOT EXISTS `documentaries` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `director` varchar(100) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documentaries`
--

INSERT INTO `documentaries` (`id`, `name`, `director`, `year`) VALUES
(2, 'The Good Nazi', 'Bismarch Dalli', '1989');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documentaries`
--
ALTER TABLE `documentaries`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `documentaries`
--
ALTER TABLE `documentaries`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
