-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2022 at 09:59 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artlinco`
--

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Teacher'),
(3, 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `state_id` int(11) NOT NULL,
  `status_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`state_id`, `status_name`) VALUES
(1, 'Active'),
(2, 'Not Active');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(11) NOT NULL,
  `test_title` text DEFAULT NULL,
  `test_duration` varchar(255) DEFAULT NULL,
  `test_date` date DEFAULT NULL,
  `test_description` mediumtext DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testanswers`
--

CREATE TABLE `testanswers` (
  `testanswers_id` int(11) NOT NULL,
  `testanswers_answer` text DEFAULT NULL,
  `testquestions_id` int(11) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testattachment`
--

CREATE TABLE `testattachment` (
  `testattachment_id` int(11) NOT NULL,
  `testattachment_name` text DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testquestions`
--

CREATE TABLE `testquestions` (
  `testquestions_id` int(11) NOT NULL,
  `testquestions_question` text DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_firstname` varchar(255) DEFAULT NULL,
  `users_lastname` varchar(255) DEFAULT NULL,
  `users_email` varchar(255) DEFAULT NULL,
  `users_mobileno` varchar(255) DEFAULT NULL,
  `users_password` varchar(255) DEFAULT NULL,
  `users_gender` varchar(255) DEFAULT NULL,
  `users_dob` date DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_firstname`, `users_lastname`, `users_email`, `users_mobileno`, `users_password`, `users_gender`, `users_dob`, `role_id`, `status_id`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'Muhammad', 'Mehroz', 'a@gmail.com', '0333', '123', NULL, '2022-09-25', 2, 1, NULL, '2022-09-27 05:37:50', NULL, NULL, NULL, NULL),
(2, 'Muhammad1', 'Mehroz1', 'muhammad.mehroz1@bizzworld.com', '03331', '111', 'Male', '2022-09-29', 3, 2, 1, '2022-09-27 09:11:58', 1, '2022-09-28 04:13:57', 1, '2022-09-28 04:21:39'),
(3, 'hamdan', 'khairi', 'hnk@gmail.com', '456', '789', NULL, NULL, 2, 1, NULL, '2022-09-27 11:10:31', NULL, NULL, NULL, NULL),
(4, 'saif', 'khan', 's.khan@ymail.com', '896', '456', 'Gender', '2022-09-28', 3, 1, 3, '2022-09-27 11:11:23', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `testanswers`
--
ALTER TABLE `testanswers`
  ADD PRIMARY KEY (`testanswers_id`);

--
-- Indexes for table `testattachment`
--
ALTER TABLE `testattachment`
  ADD PRIMARY KEY (`testattachment_id`);

--
-- Indexes for table `testquestions`
--
ALTER TABLE `testquestions`
  ADD PRIMARY KEY (`testquestions_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testanswers`
--
ALTER TABLE `testanswers`
  MODIFY `testanswers_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testattachment`
--
ALTER TABLE `testattachment`
  MODIFY `testattachment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testquestions`
--
ALTER TABLE `testquestions`
  MODIFY `testquestions_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
