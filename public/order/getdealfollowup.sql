-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2022 at 03:52 PM
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
-- Database: `bwccrm`
--

-- --------------------------------------------------------

--
-- Structure for view `getdealfollowup`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `getdealfollowup`  AS  select `fu`.`followup_comment` AS `followup_comment`,`fu`.`order_token` AS `order_token`,`fu`.`status_id` AS `status_id`,`fu`.`created_at` AS `created_at`,`u`.`user_name` AS `user_name`,`md`.`mergedeal_token` AS `mergedeal_token` from ((`followup` `fu` join `user` `u` on(`fu`.`created_by` = `u`.`user_id`)) left join `mergedeal` `md` on(`md`.`order_token` = `fu`.`order_token`)) ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
