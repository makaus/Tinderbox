-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2016 at 03:45 PM
-- Server version: 5.5.53
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cl27-admin-xgt`
--
CREATE DATABASE IF NOT EXISTS `cl27-admin-xgt` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cl27-admin-xgt`;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `NotificationID` int(11) NOT NULL,
  `SupervisorID` int(11) NOT NULL,
  `TeamID` int(11) NOT NULL,
  `Content` text NOT NULL,
  `Datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`NotificationID`, `SupervisorID`, `TeamID`, `Content`, `Datetime`) VALUES
(1, 12, 2, 'Test text', '2016-11-18 20:57:28'),
(2, 5, 2, 'Test text two', '2016-11-18 20:58:11'),
(3, 22, 12, 'Tests', '2016-10-18 23:25:43'),
(4, 12, 2, 'Check', '2016-11-20 14:55:55'),
(5, 5, 12, 'Test again', '2016-11-20 17:31:11');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `SupervisorID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `PhoneNr` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`SupervisorID`, `Name`, `PhoneNr`, `Image`) VALUES
(5, 'Mads Mortensen', 89898989, 'boss.png'),
(12, 'Martin Jensen', 31313131, 'boss.png');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `TeamID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`TeamID`, `name`) VALUES
(1, 'Toilets'),
(2, 'Parking'),
(3, 'Testteam');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `teamid` int(11) NOT NULL,
  `first_name` varchar(300) NOT NULL,
  `username` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `mobile` varchar(8) NOT NULL DEFAULT '',
  `department` varchar(200) NOT NULL DEFAULT '0',
  `period` varchar(200) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_admin` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `is_confirmed` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `teamid`, `first_name`, `username`, `email`, `password`, `mobile`, `department`, `period`, `created_at`, `updated_at`, `is_admin`, `is_confirmed`, `is_deleted`) VALUES
(1, 0, '', 'admin', 'brumea.ionut@gmail.com', '$2y$10$sZ8qe0BAdlPigYeor.FP5ubLrCOK4suDkPxwo9BKfCOlYGVH2z0ui', '52738800', '', '', '2016-11-20 09:11:42', NULL, 0, 0, 0),
(3, 0, '', 'gabriel', 'gabriel@gmail.com', '$2y$10$ubCjSk/pZziGNBlCZu6g4OccxZWT8REQ.rMhNerXGKp7zHhl/.dOS', '52738800', '2', 'Before the Festival', '2016-11-20 09:59:38', NULL, 0, 0, 0),
(4, 0, '', 'ionutz', 'ionutz@gmail.com', '$2y$10$B0UBTOJqWVkn.Dn2EYyXGuJUEr7YrzEqxK.1BdUmm66XsWwKbNrgW', '52738800', '2', 'After the Festival', '2016-11-20 12:59:08', NULL, 0, 0, 0),
(5, 0, '', 'anamaria', 'anamaria@gmail.com', '$2y$10$03z8YzNZJhFDmY1F5MHPDuF18hdczFyYPaRX90cuuyaoDs6ez03RO', '52738800', '2', 'During the Festival', '2016-11-20 13:00:01', NULL, 0, 0, 0),
(6, 2, '', 'Mark', 'mark@gmail.com', '$2y$10$FubkRFnAgP8j2ExiUoPE4OR85REoJ428HBcUXhOD539YFvkrQjjsC', '52738800', '2', 'Before the Festival', '2016-11-23 12:10:09', NULL, 0, 0, 0),
(7, 0, '', 'Casper', 'casper@gmail.com', '$2y$10$JslRONQgswxgC0VKToG13eg77croS3i/rEpo15917jcF5jlGDvdOa', '58585858', '3', 'During the Festival', '2016-11-23 14:05:38', NULL, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teamid` (`teamid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
