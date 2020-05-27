-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2020 at 07:57 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `msgs`
--

CREATE TABLE `msgs` (
  `sno` int(11) NOT NULL,
  `msg` text NOT NULL,
  `room` text NOT NULL,
  `ip` text NOT NULL,
  `stime` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msgs`
--

INSERT INTO `msgs` (`sno`, `msg`, `room`, `ip`, `stime`) VALUES
(1, 'this', 'room', '123', '2020-05-26 19:11:11'),
(2, 'hii', 'aaa', '::1', '2020-05-26 22:42:06'),
(3, 'chandan is the best boy', 'aaa', '::1', '2020-05-26 22:59:14'),
(4, 'chandan is the best boy', 'aaa', '::1', '2020-05-26 22:59:15'),
(5, 'chandan is', 'aaa', '::1', '2020-05-26 23:02:22'),
(6, 'chandan is', 'aaa', '::1', '2020-05-26 23:02:31'),
(7, 'chandan is', 'aaa', '::1', '2020-05-26 23:02:32'),
(8, 'Chandan i', 'aaa', '::1', '2020-05-26 23:03:19'),
(9, 'hi', 'aaa', '::1', '2020-05-27 00:42:31'),
(10, 'chandan', 'aaa', '::1', '2020-05-27 00:42:37'),
(16, 'hwllo', 'hemant', '::1', '2020-05-27 02:35:33'),
(17, 'chandan is gpp', 'hemant', '::1', '2020-05-27 02:35:45'),
(18, 'hello', 'abcd', '::1', '2020-05-27 02:36:46'),
(19, 'hi', 'hemant', '::1', '2020-05-27 09:59:22');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `sno` int(11) NOT NULL,
  `roomname` text NOT NULL,
  `stime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`sno`, `roomname`, `stime`) VALUES
(1, 'chandan', '2020-05-26 14:23:39'),
(2, 'aarya', '2020-05-26 14:24:20'),
(3, 'neelam', '2020-05-26 14:28:36'),
(4, 'cv', '2020-05-26 17:33:59'),
(5, 'check1', '2020-05-26 17:34:56'),
(6, 'abc', '2020-05-26 17:50:21'),
(7, 'aaa', '2020-05-26 22:41:58'),
(8, 'hemant', '2020-05-27 00:45:23'),
(9, 'abcd', '2020-05-27 02:36:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msgs`
--
ALTER TABLE `msgs`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `msgs`
--
ALTER TABLE `msgs`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
