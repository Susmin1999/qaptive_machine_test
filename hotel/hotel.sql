-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 09:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `room_no` varchar(50) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `name`, `room_no`, `from_date`, `to_date`, `price`) VALUES
(2, 'Susmin Mariam', 'A100', '2023-03-01', '2023-03-05', '3000/day'),
(4, 'Ancy Alexander', 'B101', '2023-03-08', '2023-03-10', '2000/day'),
(6, 'Ammu Vyshak', 'A101', '2023-03-09', '2023-03-11', '3000/day'),
(45, 'Radhika M', 'C100', '0000-00-00', '0000-00-00', '1500/day'),
(49, 'Radhika M', 'B101', '0000-00-00', '0000-00-00', '2000/day'),
(50, 'Susmin Mariam', 'A100', '0000-00-00', '0000-00-00', '3000/day'),
(51, 'Susmin Mariam', 'A100', '2023-03-01', '2023-03-03', '3000'),
(52, 'Susmin Mariam', 'A100', '2023-03-01', '2023-03-03', '3000'),
(54, 'Susmin Mariam', 'B101', '2023-03-04', '2023-03-05', '2000/day'),
(55, 'Radhika M', 'A100', '2023-03-01', '2023-03-04', '3000/day'),
(56, 'Susmin Mariam', 'B101', '2023-03-03', '2023-03-05', '2000/day');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `username`, `password`, `type`) VALUES
(1, 'admin@gmail.com', 'Admin@123', 'admin'),
(9, 'radhu@gmail.com', 'Radhu@123', 'user'),
(10, 'susmin@gmail.com', 'Susu@123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reg`
--

CREATE TABLE `tbl_reg` (
  `reg_id` int(10) NOT NULL,
  `login_id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_reg`
--

INSERT INTO `tbl_reg` (`reg_id`, `login_id`, `name`, `address`, `mobile`, `email`) VALUES
(7, 9, 'Radhika M', 'Radhunilayam Kollam', 9856432199, 'radhu@gmail.com'),
(8, 10, 'Susmin Mariam', 'Thayil Vennikulam', 9856430978, 'susmin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rooms`
--

CREATE TABLE `tbl_rooms` (
  `room_id` int(100) NOT NULL,
  `room_no` varchar(100) NOT NULL,
  `room_type` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rooms`
--

INSERT INTO `tbl_rooms` (`room_id`, `room_no`, `room_type`, `price`) VALUES
(1, 'A100', 'AC', '3000/day'),
(2, 'A101', 'AC', '3000/day'),
(3, 'B100', 'NON-AC', '2000/day'),
(4, 'B101', 'NON-AC', '2000/day');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `tbl_rooms`
--
ALTER TABLE `tbl_rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  MODIFY `reg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_rooms`
--
ALTER TABLE `tbl_rooms`
  MODIFY `room_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
