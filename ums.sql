-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2020 at 10:07 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ums`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `course1` varchar(255) NOT NULL,
  `course2` varchar(255) NOT NULL,
  `course3` varchar(255) NOT NULL,
  `course4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `email`, `course1`, `course2`, `course3`, `course4`) VALUES
(2, 'akash@gmail.com', 'ELECTRICAL CIRCUITS 2 (AC) [A]', 'WEB TECHNOLOGIES [K]', 'WEB TECHNOLOGIES [K]', 'ENGINEERING MANAGEMENT [K]');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `gender`, `address`, `city`, `state`, `subject`, `password`, `type`) VALUES
(1, 'Akash Ahmed', 'akash@gmail.com', '353457577', 'Female', 'Dhaka Bangladesh', 'Dhaka', 'Dhaka', 'CSE', 'e10adc3949ba59abbe56e057f20f883e', 'student'),
(6, 'fnjcnvmc', 'mahmudurrahman171@gmail.com', '+8801861808863', 'Female', 'Maninganj, Dhaka, Bangladesh', 'Dhaka', 'Dhaka', 'ENGLISH', 'e10adc3949ba59abbe56e057f20f883e', ''),
(7, 'fnjcnvmc', 'akash1@gmail.com', '+8801861808863', 'Female', 'Maninganj, Dhaka, Bangladesh', 'Dhaka', 'Choose...', 'ENGLISH', 'e10adc3949ba59abbe56e057f20f883e', 'teacher'),
(8, 'Mahmudur Rahman', 'mahmudur@gmail.com', '+8801861808863', 'Female', 'Maninganj, Dhaka, Bangladesh', 'Dhaka', 'Dhaka', 'CSE', 'e10adc3949ba59abbe56e057f20f883e', ''),
(11, 'Akash Ahmed', 'akash3@gmail.com', '75845475747', 'Male', 'Dhaka Bangladesh', 'Dhaka', 'Dhaka', 'CSE', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(12, 'Teacher', 'teacher@gmail.com', '+8801861808863', 'Female', 'Maninganj, Dhaka, Bangladesh', 'Dhaka', 'Dhaka', 'EEE', 'e10adc3949ba59abbe56e057f20f883e', 'teacher'),
(14, 'Student2', 'student2@gmail.com', '7483575577', 'Male', 'Maninganj, Dhaka, Bangladesh', 'Dhaka', 'Dhaka', 'CSE', 'e10adc3949ba59abbe56e057f20f883e', 'student'),
(15, 'Student3', 'student3@gmail.com', '7584574758', 'Male', 'Maninganj, Dhaka, Bangladesh', 'Dhaka', 'Dhaka', 'CSE', 'e10adc3949ba59abbe56e057f20f883e', 'student'),
(16, 'Student4', 'student4@gmail.com', '85945454885', 'Male', 'Maninganj, Dhaka, Bangladesh', 'Dhaka', 'Choose...', 'CSE', 'e10adc3949ba59abbe56e057f20f883e', 'student'),
(17, 'Student5', 'student5@gmail.com', '849399853859', 'Male', 'Maninganj, Dhaka, Bangladesh', 'Dhaka', 'Dhaka', 'CSE', 'e10adc3949ba59abbe56e057f20f883e', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
