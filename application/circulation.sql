-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2018 at 10:45 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `circulation`
--

CREATE TABLE `circulation` (
  `id` int(11) NOT NULL,
  `circulation_id` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `book_name` varchar(30) NOT NULL,
  `date_borrowed` date NOT NULL,
  `due_date` date NOT NULL,
  `fee` double NOT NULL,
  `date_returned` date NOT NULL,
  `penalty` double NOT NULL,
  `returned` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `circulation`
--

INSERT INTO `circulation` (`id`, `circulation_id`, `user_id`, `book_id`, `book_name`, `date_borrowed`, `due_date`, `fee`, `date_returned`, `penalty`, `returned`) VALUES
(11, 'CIR554678', 2342, 35345, '', '2018-05-09', '2018-05-16', 0, '0000-00-00', 0, 0),
(12, 'CIR544787', 345, 45645, '', '2018-05-01', '2018-05-08', 20, '0000-00-00', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `circulation`
--
ALTER TABLE `circulation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `circulation_id` (`circulation_id`),
  ADD UNIQUE KEY `book_id` (`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `circulation`
--
ALTER TABLE `circulation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
