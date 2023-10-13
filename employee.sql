-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2023 at 04:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_success`
--

CREATE TABLE `login_success` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `network_ip` varchar(100) NOT NULL,
  `system_ip` varchar(100) NOT NULL,
  `browser_details` varchar(100) NOT NULL,
  `server_name` varchar(100) NOT NULL,
  `user_city` varchar(100) DEFAULT NULL,
  `user_state` varchar(100) DEFAULT NULL,
  `user_country` varchar(100) DEFAULT NULL,
  `login_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_success`
--

INSERT INTO `login_success` (`id`, `username`, `network_ip`, `system_ip`, `browser_details`, `server_name`, `user_city`, `user_state`, `user_country`, `login_date`) VALUES
(1, '1000', '::1', '{\n  \"ip\": \"110.224.84.144\",\n  \"city\": \"Chennai\",\n  \"region\": \"Tamil Nadu\",\n  \"country\": \"IN\",\n  \"loc', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Sa', 'DESKTOP-9K1D2EQ', NULL, NULL, NULL, '2023-10-03 09:36:21'),
(2, '1001', '::1', '{\n  \"ip\": \"106.203.6.100\",\n  \"city\": \"Tiruchirappalli\",\n  \"region\": \"Tamil Nadu\",\n  \"country\": \"IN\",', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Sa', 'DESKTOP-9K1D2EQ', NULL, NULL, NULL, '2023-10-07 10:59:09'),
(3, '1001', '::1', '{\n  \"ip\": \"106.203.6.100\",\n  \"city\": \"Tiruchirappalli\",\n  \"region\": \"Tamil Nadu\",\n  \"country\": \"IN\",', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Sa', 'DESKTOP-9K1D2EQ', NULL, NULL, NULL, '2023-10-07 11:01:45'),
(4, '1000', '::1', '{\n  \"ip\": \"106.197.139.114\",\n  \"city\": \"Coimbatore\",\n  \"region\": \"Tamil Nadu\",\n  \"country\": \"IN\",\n  ', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Sa', 'DESKTOP-9K1D2EQ', NULL, NULL, NULL, '2023-10-07 18:00:34'),
(5, '1001', '::1', '{\n  \"ip\": \"42.106.179.142\",\n  \"city\": \"Kozhikode\",\n  \"region\": \"Kerala\",\n  \"country\": \"IN\",\n  \"loc\":', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Sa', 'DESKTOP-9K1D2EQ', NULL, NULL, NULL, '2023-10-08 07:27:52'),
(6, '1001', '::1', '{\n  \"ip\": \"223.187.116.64\",\n  \"city\": \"Chennai\",\n  \"region\": \"Tamil Nadu\",\n  \"country\": \"IN\",\n  \"loc', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Sa', 'DESKTOP-9K1D2EQ', NULL, NULL, NULL, '2023-10-08 12:45:07'),
(7, '1001', '::1', '{\n  \"ip\": \"223.187.112.28\",\n  \"city\": \"Chennai\",\n  \"region\": \"Tamil Nadu\",\n  \"country\": \"IN\",\n  \"loc', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Sa', 'DESKTOP-9K1D2EQ', NULL, NULL, NULL, '2023-10-09 14:10:36'),
(8, '1002', '::1', '{\n  \"ip\": \"223.187.115.68\",\n  \"city\": \"Chennai\",\n  \"region\": \"Tamil Nadu\",\n  \"country\": \"IN\",\n  \"loc', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Sa', 'DESKTOP-9K1D2EQ', NULL, NULL, NULL, '2023-10-09 18:06:39'),
(9, '1002', '::1', '{\n  \"ip\": \"223.187.116.35\",\n  \"city\": \"Chennai\",\n  \"region\": \"Tamil Nadu\",\n  \"country\": \"IN\",\n  \"loc', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Sa', 'DESKTOP-9K1D2EQ', NULL, NULL, NULL, '2023-10-10 17:32:43'),
(10, '1000', '::1', '{\n  \"ip\": \"223.187.116.35\",\n  \"city\": \"Chennai\",\n  \"region\": \"Tamil Nadu\",\n  \"country\": \"IN\",\n  \"loc', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Sa', 'DESKTOP-9K1D2EQ', NULL, NULL, NULL, '2023-10-10 20:24:11'),
(11, '1001', '::1', '{\n  \"ip\": \"106.197.131.191\",\n  \"city\": \"Coimbatore\",\n  \"region\": \"Tamil Nadu\",\n  \"country\": \"IN\",\n  ', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Sa', 'DESKTOP-9K1D2EQ', NULL, NULL, NULL, '2023-10-13 09:47:30'),
(12, '1000', '::1', '{\n  \"ip\": \"106.197.148.129\",\n  \"city\": \"Injambakkam\",\n  \"region\": \"Tamil Nadu\",\n  \"country\": \"IN\",\n ', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Sa', 'DESKTOP-9K1D2EQ', NULL, NULL, NULL, '2023-10-13 17:55:43'),
(13, '1000', '::1', '{\n  \"ip\": \"106.197.148.129\",\n  \"city\": \"Injambakkam\",\n  \"region\": \"Tamil Nadu\",\n  \"country\": \"IN\",\n ', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Sa', 'DESKTOP-9K1D2EQ', NULL, NULL, NULL, '2023-10-13 19:36:35'),
(14, '1000', '::1', '{\n  \"ip\": \"106.197.148.129\",\n  \"city\": \"Injambakkam\",\n  \"region\": \"Tamil Nadu\",\n  \"country\": \"IN\",\n ', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Sa', 'DESKTOP-9K1D2EQ', NULL, NULL, NULL, '2023-10-13 19:41:21');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `pwd_hint` varchar(100) NOT NULL,
  `mob` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `pin` int(50) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `date_of_joining` datetime NOT NULL,
  `login_count` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `username`, `pwd`, `pwd_hint`, `mob`, `email`, `name`, `fname`, `lname`, `pin`, `nationality`, `dob`, `gender`, `date_of_joining`, `login_count`) VALUES
(1, '1000', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', '111', 2147483647, 'hathimshynu@gmail.com', 'Super', '', '', 0, '', '0000-00-00', '', '2023-10-13 09:44:16', 3),
(2, '1001', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', '111', 2147483647, 'aji@gmail.com', 'ajith', 'hathim', 'hathim', 17824314, 'india', '2023-10-04', 'male', '2023-10-13 09:47:06', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_success`
--
ALTER TABLE `login_success`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_success`
--
ALTER TABLE `login_success`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
