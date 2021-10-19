-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2021 at 12:59 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_point`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_point`
--

CREATE TABLE `user_point` (
  `id` int(5) NOT NULL,
  `name` varchar(200) NOT NULL,
  `point` int(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_point`
--

INSERT INTO `user_point` (`id`, `name`, `point`, `date`) VALUES
(1, 'ravi', 12, '2021-01-12'),
(2, 'teza', 10, '2021-02-21'),
(3, 'jonny', 5, '2021-03-01'),
(4, 'maya', 9, '2021-05-13'),
(8, 'ravi', 5, '2021-06-05'),
(11, 'jonny', 6, '2021-04-03'),
(12, 'teza', 7, '2021-12-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_point`
--
ALTER TABLE `user_point`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_point`
--
ALTER TABLE `user_point`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
