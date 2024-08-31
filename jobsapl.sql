-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2024 at 06:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobsapl`
--

-- --------------------------------------------------------

--
-- Table structure for table `aplform`
--

CREATE TABLE `aplform` (
  `id` int(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `cnic` varchar(20) NOT NULL,
  `age` int(255) NOT NULL,
  `depart` varchar(30) NOT NULL,
  `exp` int(255) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `post` varchar(40) NOT NULL,
  `speciality` varchar(30) NOT NULL,
  `resume` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aplform`
--

INSERT INTO `aplform` (`id`, `gender`, `name`, `email`, `phone`, `cnic`, `age`, `depart`, `exp`, `skill`, `dob`, `post`, `speciality`, `resume`) VALUES
(40, 'Mr', 'azwar', 'r.azwar42@gmail.co', '1234567890', '3333333333333333', 0, 'IT', 0, 'LHR', '2004-02-04', 'Php Developer', 'Php Developer', '5377-pxfuel.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aplform`
--
ALTER TABLE `aplform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aplform`
--
ALTER TABLE `aplform`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
