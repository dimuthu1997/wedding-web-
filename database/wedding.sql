-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2020 at 07:27 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `registered_user`
--

CREATE TABLE `registered_user` (
  `userId` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(8) NOT NULL,
  `budget` int(11) NOT NULL,
  `weddingcity` varchar(40) NOT NULL,
  `weddingdate` date NOT NULL,
  `phoneno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_user`
--

INSERT INTO `registered_user` (`userId`, `username`, `email`, `password`, `budget`, `weddingcity`, `weddingdate`, `phoneno`) VALUES
(0, 'Nawodya Prebhani', 'nawodya@yahoo.com', 'nawo123', 0, 'warakapola', '0000-00-00', 0),
(1, 'dimuthu dilshan', 'dimuthu@yahoo.com', 'dimuthu2', 0, 'Narammala', '0000-00-00', 0),
(2, 'sunil premarathna', 'sunil@gmail.com', 'sunil123', 0, 'kurunegala', '0000-00-00', 0),
(10, 'sajitha priyashan', 'sajitha@yahoo.com', 'sajitha1', 0, 'kadawatha', '0000-00-00', 0),
(11, 'tharindu buddika', 'gangani@yahoo.comtharindu', 'tharindu', 0, 'nawala', '0000-00-00', 0),
(12, 'lakshan sadakelum', 'sadakelum@gamil.com', 'sad123', 0, 'wariyapola', '0000-00-00', 0),
(13, 'presanna sadakelum', 'pressanna@gamil.com', 'pre46', 0, 'kadana', '0000-00-00', 0),
(14, 'arosha idunil', 'arosha123@gmail.com', 'arosha12', 0, 'alpitiya', '0000-00-00', 0),
(15, 'lasanatha madusanka', 'lasa@gmail.com', 'las123', 0, 'walasmulla', '0000-00-00', 0),
(16, 'senith tharuka', 'senith@gmail.com', 'senith12', 0, 'kottawa', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `serviceId` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `category` varchar(40) NOT NULL,
  `description` varchar(255) NOT NULL,
  `supplierId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`serviceId`, `name`, `category`, `description`, `supplierId`) VALUES
(1, 'janaka', 'reception', 'sdfghjk', 1);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplierId` int(10) NOT NULL,
  `companyname` varchar(40) NOT NULL,
  `postalcode` int(10) NOT NULL,
  `category` varchar(40) NOT NULL,
  `suppliername` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(10) NOT NULL,
  `phonenumber` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplierId`, `companyname`, `postalcode`, `category`, `suppliername`, `email`, `password`, `phonenumber`) VALUES
(1, '', 0, '', '', '', '', 0),
(2, 'amaya reception', 60100, 'reception', 'dimuthu', 'dimuthud2017@gmail.com', 'sdsfdg', 784611933),
(3, 'susila ', 6090, 'catering', 'susila', 'susila@yahoo.com', 'susila123', 725416564),
(4, 'sajitha resturant', 5034, 'music', 'sajitha', 'sajitha@yahoo.com', 'sajithaaaa', 710870170),
(5, 'senith catering', 3456, 'catering', 'senith tharuka', 'senith@gmail.com', 'senith123', 712345673);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registered_user`
--
ALTER TABLE `registered_user`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`serviceId`),
  ADD KEY `foringkey` (`supplierId`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplierId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registered_user`
--
ALTER TABLE `registered_user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplierId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
