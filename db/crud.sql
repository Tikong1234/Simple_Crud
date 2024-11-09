-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2024 at 07:31 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile_num` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `name`, `mobile_num`, `email`, `password`) VALUES
(1, 'JESSA MAE MARU ARELLANO', 34343, 'Jessaarellano672@gmail.com', '123433'),
(2, 'Antonnette', 39439, 'antonete@gmail.com', 'net1234'),
(3, 'Dodong ', 203289382, 'dodong@gmail.com', 'dong123'),
(4, 'letlet', 283892, 'letknow@gmail.com', 'let321'),
(6, 'DEXTER', 3493748, 'Dexter@gmail.com', 'dex231'),
(7, 'JESSA MARU ', 12345655, 'Jessaarellano672@gmail.com', '1234'),
(8, 'Daryl Cabalican', 3434343, 'Daryl23@gmail.com', '2323'),
(9, 'Sabit sabit', 392732, 'sabit234@gmail.com', 'sabit');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `homeAdd` varchar(255) NOT NULL,
  `presentAdd` varchar(255) NOT NULL,
  `contact` int(12) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `dateOfbirth` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `placeOfbirth` varchar(255) NOT NULL,
  `civilstatus` varchar(255) NOT NULL,
  `elementary` varchar(255) NOT NULL,
  `elemgraduated` varchar(255) NOT NULL,
  `highschool` varchar(255) NOT NULL,
  `highgraduated` varchar(255) NOT NULL,
  `shs` varchar(255) NOT NULL,
  `shsgraduated` varchar(255) NOT NULL,
  `track_strand` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `lname`, `fname`, `mname`, `homeAdd`, `presentAdd`, `contact`, `sex`, `dateOfbirth`, `email`, `placeOfbirth`, `civilstatus`, `elementary`, `elemgraduated`, `highschool`, `highgraduated`, `shs`, `shsgraduated`, `track_strand`, `course`) VALUES
(5, ' Polloso', 'Merbeth', 'Gerbabuena', 'Lipayran', 'Lipayran', 2147483647, 'Female', '2003-01-19', 'merbethpolloso@gmail.com', 'Tugas, Madridejos, Cebu', 'Single', 'Tugas Elementary School', '2018', 'MNHS', '2018', 'Madridejos National High School', '', 'EIM', 'BSIT'),
(6, 'Marfa', 'Juniel', 'Maru', 'Tugas, Madridejos, Cebu', 'Tugas, Madridejos, Cebu', 1230, 'Male', '2000-07-12', 'marfajuniel5@gmail.com', '', 'Single', 'Pili Elementary School', '2015', 'dsfsd', '2015', 'fdsfsdf', '', 'HUMMS', 'BSIT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
