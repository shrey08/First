-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 05, 2019 at 05:46 AM
-- Server version: 10.3.14-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id6756811_school`
--
CREATE DATABASE IF NOT EXISTS `id6756811_school` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id6756811_school`;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `studentid` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `session` int(11) NOT NULL,
  `ispresent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name`) VALUES
(1, 'isp'),
(2, 'pubg'),
(3, 'mpl'),
(4, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uid` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` varchar(255) NOT NULL,
  `location` varchar(100) NOT NULL,
  `caption` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `location`, `caption`) VALUES
('0', 'photos/220px-Dark_Knight.jpg', 'batman'),
('0', 'photos/the_joker_cartoon.jpg', 'caption'),
('0', 'photos/appicon1.JPG', 'aalu'),
('0', 'photos/dj excel.JPG', 'uiu'),
('123', 'photos/excel window.jpg', 'nk'),
('123', 'photos/dj excel.JPG', 'asas'),
('123', 'photos/Screenshot (6).png', 'vishal'),
('905', 'photos/WIN_20190123_22_33_54_Pro.jpg', 'ss'),
('0', 'photos/220px-Dark_Knight.jpg', 'batman'),
('0', 'photos/the_joker_cartoon.jpg', 'caption'),
('0', 'photos/appicon1.JPG', 'aalu'),
('0', 'photos/dj excel.JPG', 'uiu'),
('123', 'photos/excel window.jpg', 'nk'),
('123', 'photos/dj excel.JPG', 'asas'),
('123', 'photos/Screenshot (6).png', 'vishal'),
('905', 'photos/WIN_20190123_22_33_54_Pro.jpg', 'ss'),
('0905cs161183', 'photos/_51978124_011676719-1.jpg', 'aaaaa'),
('0905cs161183', 'photos/220px-Sophia_at_the_AI_for_Good_Global_Summit_2018_(27254369347)_(cropped).jpg', 'xzx');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `msg` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `msg`, `name`) VALUES
(10, 'hello', 'aa'),
(11, 'Hurrr', 'Sjain'),
(12, '????????????????????????', 'Vj'),
(13, '', 'Vj'),
(14, 'Ha', 'Vj'),
(15, 'hello\r\n', 'batu'),
(16, 'Hiii batu', 'Vj'),
(17, '????', 'Vj'),
(18, 'Koi h? ', 'Vj'),
(19, ':)\r\n', 'batu'),
(20, 'aur kaise ho vj', 'batu'),
(21, 'Hi', 'Sjain'),
(22, 'Hello sab kaise ', 'Vj'),
(23, '', 'Vj'),
(24, 'Hoo', 'Vj'),
(25, 'sab badiya', 'batu'),
(26, 'Badiya', 'Sjain'),
(27, 'hello', ''),
(28, 'Hi vishal', 'raj'),
(29, 'hello', 'vj'),
(30, 'hi', 'sj'),
(31, 'hi this is vishal', ''),
(32, 'Hrllo', ''),
(33, 'yo', ''),
(34, 'hello everyone', '123'),
(35, 'hello !!!', '123'),
(36, 'hi', '123'),
(37, 'hi', '123');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `full_name` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `rollno` varchar(15) NOT NULL,
  `sem` int(1) NOT NULL,
  `gen` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`full_name`, `f_name`, `rollno`, `sem`, `gen`, `pass`) VALUES
('vishal jain', 'aa', '03', 8, 'on', '11235'),
('vishal jain', 'Mr Jain', '0905cs161183', 4, 'on', '123'),
('asus', 'aa', '123', 1, 'on', '123'),
('vj', 'aa', 'aa', 6, 'on', '13554');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `uid` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`uid`, `username`, `email`, `password`) VALUES
(18, 'sj', 'sj', 'sj'),
(19, 'aa', 'aa@gmail.com', '123'),
(20, 'Sjain', 'Jj@gmail.com', '123456'),
(21, 'vj', 'vj@gmail.com', '123'),
(22, '', '', ''),
(23, 'batu', 'batu@gmail.com', 'aa'),
(24, 'raj', 'raj@gmail.com', '123'),
(25, 'shi', 'shi@gmail.com', '12345'),
(26, 'sj', 'sj', 'sj'),
(27, '123', 'ip.student258@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `email` text NOT NULL,
  `role` text NOT NULL,
  `class` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `role`, `class`) VALUES
(1, 'isp', 'ip.student258@gmail.com', 'student', ''),
(2, 'isp', 'ip.student258@gmail.com', 'student', 'isp'),
(3, 'a', 'jainvishal258@gmail.com', 'teacher', 'isp'),
(4, 'ap', 'vj@gmail.com', 'teacher', 'isp'),
(5, 'shrey', 'f@gmail.com', 'student', 'isp'),
(6, 'aa', 'i.student258@gmail.com', 'teacher', 'isp'),
(7, 'aalu', 'fa@gmail.com', 'teacher', 'Administrator'),
(8, 'shrayansh', 'shrayansh151@gmail.com', 'student', 'isp'),
(9, 'vishal', 'jainvishal258@gmail.com', 'student', 'isp'),
(10, 'shashank', 'sj@gmail.com', 'student', 'mpl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`(255));

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
