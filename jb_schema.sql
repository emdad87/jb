-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2017 at 03:20 PM
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
  `date_of_birth` varchar(45) DEFAULT NULL,
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
(1, 'Emdad', 'Haque', '20170430', 'Single', 'Islam', 'Male', 'Sydney', 'Australia', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p160x160/17951628_10155383583387526_134160429639862015_n.jpg?oh=d2f7fe5ead8ec38b22269806cd0a3be8&oe=59BC74B8', '2017-05-15 23:00:00', '2017-05-15 14:41:00');

-- --------------------------------------------------------

--
-- Table structure for table `jb_user`
--

CREATE TABLE `jb_user` (
  `userid` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `date_created` varchar(45) DEFAULT NULL,
  `date_modified` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jb_user`
--

INSERT INTO `jb_user` (`userid`, `username`, `password`, `date_created`, `date_modified`, `email`) VALUES
(1, 'emdad', '123', '2017-04-30 00:00:00', '2017-04-30 00:00:00', 'emdad87@gmail.com');

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
-- Indexes for table `jb_user`
--
ALTER TABLE `jb_user`
  ADD PRIMARY KEY (`userid`);

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
