-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 25 พ.ย. 2020 เมื่อ 08:22 PM
-- เวอร์ชันของเซิร์ฟเวอร์: 10.3.18-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginadminuser`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(225) NOT NULL,
  `lastname` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phonenumber` char(11) NOT NULL,
  `address` varchar(225) NOT NULL,
  `postingdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `tblusers`
--

INSERT INTO `tblusers` (`id`, `firstname`, `lastname`, `email`, `phonenumber`, `address`, `postingdate`) VALUES
(1, 'sooya', 'jisoo', 'sooyaaa@gmail.com', '0951551515', 'South Korea', '2020-11-18 17:38:29'),
(2, 'jennie', 'Jennine Kim', 'jenninenini@gmail.com', '0611111111', 'South Korea', '2020-11-18 17:48:18'),
(3, 'Lisa', 'lalalisa', 'lalalalisa_m@gmail.com', '0699999999', 'Thailand', '2020-11-18 17:49:59'),
(4, 'Roses', 'roseanne', 'roses_rosie@gmail.com', '0933333333', 'Australia', '2020-11-18 17:54:49'),
(6, 'm', 'm1', 'mmm@gmail.com', '0951234567', '54', '2020-11-25 08:21:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
