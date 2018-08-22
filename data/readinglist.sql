-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2018 at 03:03 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment5`
--

-- --------------------------------------------------------

--
-- Table structure for table `readinglist`
--

CREATE TABLE `readinglist` (
  `ID` int(11) NOT NULL,
  `theDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` text NOT NULL,
  `URL` text NOT NULL,
  `theDesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `readinglist`
--

INSERT INTO `readinglist` (`ID`, `theDate`, `name`, `URL`, `theDesc`) VALUES
(1, '2018-04-23 12:48:45', 'JSON Examples', 'http://json.org/example.html', 'Some nice JSON examples from the official resource json.org'),
(2, '2018-04-23 12:49:59', 'W3Schools HTML Tutorial', 'https://www.w3schools.com/html/default.asp', 'This tutorial teaches you everything about HTML.'),
(3, '2018-04-23 12:53:07', 'TrinityTuts RESTful Web Services', 'https://trinitytuts.com/restful-web-services-with-php-mysqli/', 'Explains how to build a web service with PHP Mysqli'),
(4, '2018-04-23 12:58:42', 'JavaScript Cookies Tutorial', 'https://www.w3schools.com/js/js_cookies.asp', 'Gives examples on how to use cookies'),
(5, '2018-04-23 13:01:06', 'LeaseWeb - REST API in PHP', 'https://www.leaseweb.com/labs/2015/10/creating-a-simple-rest-api-in-php/', ' A sample 65 line PHP RESTful service');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `readinglist`
--
ALTER TABLE `readinglist`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `readinglist`
--
ALTER TABLE `readinglist`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
