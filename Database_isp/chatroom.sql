-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 05, 2019 at 05:47 AM
-- Server version: 10.3.13-MariaDB
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
-- Database: `id6756811_chatroom`
--
CREATE DATABASE IF NOT EXISTS `id6756811_chatroom` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id6756811_chatroom`;

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
(37, 'hi', '123'),
(38, 'hey everyone', '123'),
(39, '', '123'),
(40, 'ko', '123'),
(41, 'hello', 'shrey'),
(42, '123', 'vshl'),
(43, 'yo ', 'vj'),
(44, 'Gm', '0905cs161183');

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
(27, '123', 'ip.student258@gmail.com', '123'),
(28, '123', 'ip.student258@gmail.com', '123'),
(29, 'shrey', 'jainvishal258@gmail.com', '123'),
(30, 'vshl', 'ip.student258@gmail.com', '123'),
(31, 'vj', 'ip.student258@gmail.com', 'vj'),
(32, '0905cs161183', '', '123');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
