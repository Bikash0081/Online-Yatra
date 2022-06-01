-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2022 at 07:20 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_bus`
--

CREATE TABLE `add_bus` (
  `bus_id` int(255) NOT NULL,
  `bus_name` text NOT NULL,
  `from_route` text NOT NULL,
  `to_route` text NOT NULL,
  `bus_date` date NOT NULL,
  `departure` varchar(20) NOT NULL,
  `arrival` varchar(20) NOT NULL,
  `bus_type` text NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_bus`
--

INSERT INTO `add_bus` (`bus_id`, `bus_name`, `from_route`, `to_route`, `bus_date`, `departure`, `arrival`, `bus_type`, `picture`) VALUES
(84, 'Pokhara Express', 'Kathmandu', 'Chitwan', '2022-05-05', '06:00', '15:30', 'NonAc', 'bus4.png'),
(86, 'KTM Express', 'Gorkha', 'Nuwakot', '2022-05-03', '07:00', '15:00', 'AC', 'R.png'),
(87, 'Bullet', 'Kathmandu', 'Darchula', '2022-05-07', '18:53', '03:53', 'NonAc', 'bus1.png');

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(1) NOT NULL,
  `admin_email` varchar(60) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `admin_email`, `admin_name`, `admin_pass`) VALUES
(1, 'admin@gmail.com', 'bikash', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `bus_boarding`
--

CREATE TABLE `bus_boarding` (
  `id` int(255) NOT NULL,
  `bus_id` int(255) NOT NULL,
  `bus_name` varchar(255) NOT NULL,
  `boarding_pnt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus_boarding`
--

INSERT INTO `bus_boarding` (`id`, `bus_id`, `bus_name`, `boarding_pnt`) VALUES
(19, 84, 'Pokhara Express', 'Kalanki'),
(21, 86, 'KTM Express', 'Kalanki');

-- --------------------------------------------------------

--
-- Table structure for table `bus_inside`
--

CREATE TABLE `bus_inside` (
  `id` int(255) NOT NULL,
  `bus_id` int(255) NOT NULL,
  `bus_name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `seatsize` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus_inside`
--

INSERT INTO `bus_inside` (`id`, `bus_id`, `bus_name`, `price`, `seatsize`) VALUES
(16, 84, 'Pokhara Express', 400, 22),
(18, 86, 'KTM Express', 400, 24);

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `id` int(255) NOT NULL,
  `bus_id` int(255) NOT NULL,
  `bus_name` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `boardingpnt` varchar(255) NOT NULL,
  `seatno` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `seatnoextra` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `password`) VALUES
(63, 'bikash55', 'bikash55@gmail.com', '9876543210', '57e46f2f0ed47ab86e5c919f13828a83');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_bus`
--
ALTER TABLE `add_bus`
  ADD PRIMARY KEY (`bus_id`);

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus_boarding`
--
ALTER TABLE `bus_boarding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus_inside`
--
ALTER TABLE `bus_inside`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
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
-- AUTO_INCREMENT for table `add_bus`
--
ALTER TABLE `add_bus`
  MODIFY `bus_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bus_boarding`
--
ALTER TABLE `bus_boarding`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `bus_inside`
--
ALTER TABLE `bus_inside`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
