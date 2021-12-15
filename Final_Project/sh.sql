-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 01:03 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sh`
--

-- --------------------------------------------------------

--
-- Table structure for table `apartment_details`
--

CREATE TABLE `apartment_details` (
  `id` int(11) NOT NULL,
  `Aid` int(30) NOT NULL,
  `Aname` int(30) NOT NULL,
  `Aemail` varchar(30) NOT NULL,
  `Aphone` varchar(30) NOT NULL,
  `A_buliding` varchar(30) NOT NULL,
  `A_area` varchar(30) NOT NULL,
  `A_price` varchar(30) NOT NULL,
  `A_pname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apartment_details`
--

INSERT INTO `apartment_details` (`id`, `Aid`, `Aname`, `Aemail`, `Aphone`, `A_buliding`, `A_area`, `A_price`, `A_pname`) VALUES
(1, 20, 0, '', '', '22', 'Nikunjo', '2500000', 'House 22'),
(2, 20, 0, 'shovon@gmail.com', '01744304396', '12121', '21', '2000000', 'project name');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `user`, `message`) VALUES
(1, 'hassan', 'H e l l o'),
(2, 'hassan', 'H e l l o'),
(3, 'hassan', 'message'),
(4, 'hassan', 'msg'),
(5, 'hassan', 'msg'),
(6, 'hassan', 'Api alam'),
(7, 'Jannatul', 'Hi hassan'),
(8, 'hassan', 'Hi jannatul'),
(9, 'Jannatul', 'message 12december');

-- --------------------------------------------------------

--
-- Table structure for table `renters_details`
--

CREATE TABLE `renters_details` (
  `id` int(11) NOT NULL,
  `A_Id` int(30) NOT NULL,
  `A_Name` varchar(30) NOT NULL,
  `A_Email` varchar(30) NOT NULL,
  `Aphone` varchar(30) NOT NULL,
  `P_address` varchar(30) NOT NULL,
  `Pr_address` varchar(30) NOT NULL,
  `S_income` varchar(30) NOT NULL,
  `M_Income` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `renters_details`
--

INSERT INTO `renters_details` (`id`, `A_Id`, `A_Name`, `A_Email`, `Aphone`, `P_address`, `Pr_address`, `S_income`, `M_Income`) VALUES
(1, 25, '25', 'sample@gmail.com', '01744304396', 'nikunjo', '20', 'govt job', '250000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `rule` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `full_name`, `username`, `password`, `rule`) VALUES
(1, 'nahid hassan', 'hassan', '12345', 'Admin'),
(2, 'turna', 'Jannatul', '6789', 'Admin'),
(3, 'User0011', 'user', '12345', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apartment_details`
--
ALTER TABLE `apartment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `renters_details`
--
ALTER TABLE `renters_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apartment_details`
--
ALTER TABLE `apartment_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `renters_details`
--
ALTER TABLE `renters_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
