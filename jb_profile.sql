-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2017 at 03:43 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jb`
--

-- --------------------------------------------------------

--
-- Table structure for table `jb_profile`
--

CREATE TABLE `jb_profile` (
  `userid` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `date_of_birth` datetime(6) DEFAULT NULL,
  `marital_status` varchar(45) DEFAULT NULL,
  `religion` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `location_city` varchar(45) DEFAULT NULL,
  `location_country` varchar(45) DEFAULT NULL,
  `photo` varchar(500) DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT NULL,
  `date_modified` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jb_profile`
--

INSERT INTO `jb_profile` (`userid`, `first_name`, `last_name`, `date_of_birth`, `marital_status`, `religion`, `gender`, `location_city`, `location_country`, `photo`, `date_created`, `date_modified`) VALUES
(1, 'Emdad', 'Haque', '1987-01-01 00:00:00.000000', 'Single', 'Islam', 'Male', 'Sydney', 'Australia', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p160x160/17951628_10155383583387526_134160429639862015_n.jpg?oh=d2f7fe5ead8ec38b22269806cd0a3be8&oe=59BC74B8', '2017-05-15 23:00:00', '2017-05-15 14:41:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jb_profile`
--
ALTER TABLE `jb_profile`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `fk_jb_profile_jb_user_idx` (`userid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jb_profile`
--
ALTER TABLE `jb_profile`
  ADD CONSTRAINT `fk_jb_profile_jb_user` FOREIGN KEY (`userid`) REFERENCES `jb_user` (`userid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
