-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2024 at 05:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `traindetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `payment_code` varchar(50) NOT NULL,
  `train_number` varchar(20) NOT NULL,
  `departure` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `departure_time` varchar(200) NOT NULL,
  `arrival_time` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `full_name`, `email`, `phone`, `address`, `username`, `payment_code`, `train_number`, `departure`, `destination`, `departure_time`, `arrival_time`, `status`) VALUES
(1, 'SAMARTH VISHNU JOSHI', 'samarth31j@gmail.com', '9356804972', 'dharashiv', 'sama', '345', '300', 'nagpur', 'pune', '03:30:00.000000', '04:30:00.000000', 'pending'),
(4, 'SAMARTH VISHNU JOSHI', 'samarth31j@gmail.com', '9356804972', 'dharashiv', 'samarth', '6556', '100', 'banglore', 'chennai', '02:30:00.000000', '04:30:00.000000', 'confirmed'),
(5, 'SAMARTH VISHNU JOSHI', 'samarth31j@gmail.com', '9356804972', 'dharashiv', 'legend', '6556', '200', 'mumbai', 'delhi', '02:30:00.000000', '04:30:00.000000', 'confirmed'),
(6, 'SAMARTH VISHNU JOSHI', 'samarth31j@gmail.com', '9356804972', 'dharashiv', 'legend', 'uuu', '300', 'nagpur', 'pune', '03:30:00.000000', '04:30:00.000000', 'pending'),
(7, 'SAMARTH VISHNU JOSHI', 'samarth31j@gmail.com', '9356804972', 'dharashiv', 'legend', '4567890', '300', 'nagpur', 'pune', '03:30:00.000000', '04:30:00.000000', 'confirmed'),
(9, 'shivani', 'shiv31j@gmail.com', '9356804972', 'dharashiv', 'shivani', '1224', '100', 'banglore', 'chennai', '02:30:00.000000', '04:30:00.000000', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `Train Number` int(20) NOT NULL,
  `Departure` varchar(20) NOT NULL,
  `Destination` varchar(20) NOT NULL,
  `Departure Time` time(6) NOT NULL,
  `Arrival Time` time(6) NOT NULL,
  `Available Seats` int(20) NOT NULL,
  `Action` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`Train Number`, `Departure`, `Destination`, `Departure Time`, `Arrival Time`, `Available Seats`, `Action`) VALUES
(200, 'mumbai', 'delhi', '02:30:00.000000', '04:30:00.000000', 49, 'go'),
(100, 'banglore', 'chennai', '02:30:00.000000', '04:30:00.000000', 29, ''),
(300, 'nagpur', 'pune', '03:30:00.000000', '04:30:00.000000', 33, ''),
(400, 'dharashiv', 'nagpur', '16:38:26.000000', '15:38:26.000000', 45, ''),
(500, 'dharashiv', 'nagpur', '16:38:26.000000', '15:38:26.000000', 45, ''),
(700, 'dharashiv', 'nagpur', '16:38:26.000000', '15:38:26.000000', 45, ''),
(800, 'dharashiv', 'nagpur', '16:38:26.000000', '15:38:26.000000', 45, ''),
(900, 'dharashiv', 'nagpur', '16:38:26.000000', '15:38:26.000000', 45, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `phone`, `address`, `username`, `password`, `state`) VALUES
(52, 'SAMARTH VISHNU JOSHI', 'samarth31j@gmail.com', '9876567890', 'DFGYUIO', 'sam', 'b59c67bf196a4758191e42f76670ceba', '876'),
(53, 'SAMARTH VISHNU JOSHI', 'samarth31j@gmail.com', '9876567890', 'DFGYUIO', 'samarth1', '202cb962ac59075b964b07152d234b70', '876');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
