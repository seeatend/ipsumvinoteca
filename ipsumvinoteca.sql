-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2018 at 07:35 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipsumvinoteca`
--

-- --------------------------------------------------------

--
-- Table structure for table `ipsumvinoteca_admin`
--

CREATE TABLE `ipsumvinoteca_admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Conatct_number` varchar(255) NOT NULL,
  `avatar` varchar(250) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `admin_type` tinyint(1) DEFAULT '2' COMMENT '1 for superadmin and 2 for admin',
  `status` tinyint(1) DEFAULT '1',
  `login_ip` varchar(255) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `ipsumvinoteca_admin`
--

INSERT INTO `ipsumvinoteca_admin` (`id`, `user_name`, `first_name`, `last_name`, `email`, `Address`, `password`, `Conatct_number`, `avatar`, `salt`, `admin_type`, `status`, `login_ip`, `last_login`) VALUES
(1, 'admin', 'ravi', 'tripathi', 'admin', 'near rohni delhi,check', '79804b72852f1e4d664fb7ffd3d98672', '123456', 'D2EF77B8-BD95-4AC0-91F8-F52E76EA7AE2.png', '', 1, 1, NULL, NULL),
(2, 'shiv', 'Shiv Kumar', 'Tiwari', 'a@a.com', '', '79804b72852f1e4d664fb7ffd3d98672', '', 'DD0D940C-0797-4F57-94F3-33D9F348B4E3.png', '', 1, 1, NULL, NULL),
(3, 'shiwjee', 'test-admin', 'test', 'testshiw@a.com', '', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', 3, 1, NULL, NULL),
(4, 'sunny', 'testy', 'test', 'testy@gmail.com', '', '79804b72852f1e4d664fb7ffd3d98672', '', '41', '', 2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ipsumvinoteca_contact_us`
--

CREATE TABLE `ipsumvinoteca_contact_us` (
  `id` int(11) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `post_code` varchar(38) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipsumvinoteca_contact_us`
--

INSERT INTO `ipsumvinoteca_contact_us` (`id`, `contact_name`, `contact_email`, `contact_phone`, `address`, `city`, `post_code`, `message`) VALUES
(2, 'ty', 'yyy', 'uiuiui', 'y', 'uiuui', 'uiui', 'uiuiuiu');

-- --------------------------------------------------------

--
-- Table structure for table `ipsumvinoteca_online_booking`
--

CREATE TABLE `ipsumvinoteca_online_booking` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `customer_message` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipsumvinoteca_online_booking`
--

INSERT INTO `ipsumvinoteca_online_booking` (`id`, `customer_name`, `customer_email`, `customer_phone`, `customer_message`, `status`) VALUES
(2, 'ravi tripathi', 'ravi@gmail.com', '1234567890', 'today is ygbhghjhjkjkkkj', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ipsumvinoteca_admin`
--
ALTER TABLE `ipsumvinoteca_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name_UNIQUE` (`user_name`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indexes for table `ipsumvinoteca_contact_us`
--
ALTER TABLE `ipsumvinoteca_contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipsumvinoteca_online_booking`
--
ALTER TABLE `ipsumvinoteca_online_booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ipsumvinoteca_admin`
--
ALTER TABLE `ipsumvinoteca_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ipsumvinoteca_contact_us`
--
ALTER TABLE `ipsumvinoteca_contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ipsumvinoteca_online_booking`
--
ALTER TABLE `ipsumvinoteca_online_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
