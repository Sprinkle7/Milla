-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2016 at 06:20 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maps`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `claims`
--

CREATE TABLE `claims` (
  `claim_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `wh_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `claims`
--

INSERT INTO `claims` (`claim_id`, `user_id`, `wh_id`, `date`) VALUES
(1, 0, 21, '2016-02-29 15:54:26'),
(2, 2, 12, '2016-02-29 15:54:51'),
(3, 2, 11, '2016-02-29 16:09:55'),
(4, 2, 22, '2016-02-29 16:10:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `contactno` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `lat` varchar(200) NOT NULL,
  `long` varchar(200) NOT NULL,
  `profile_picture` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `contactno`, `address`, `lat`, `long`, `profile_picture`) VALUES
(1, 'asdlkfjdsaj', 'allauddin2015@gmail.com', '3438992212', 'jlkfjq', '', '', '', ''),
(2, 'Allauddin', 'allauddin2015@gmail.com', 'welcome', 'welcome', '', '', '', ''),
(5, 'sdafd', 'allauddin2015@gmail.com', '2343424323', 'dsafddf', '', '', '', ''),
(6, 'sdafds', 'allauddin2015@gmail.com', '13412432432', 'sdl;jfds', '', '', '', ''),
(7, 'alkdfjka', 'allauddin2015@gmail.com', '1423423432423', 'fdsfadsfd', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `whathappend`
--

CREATE TABLE `whathappend` (
  `id` int(11) NOT NULL,
  `title` varchar(400) NOT NULL,
  `desc` longtext NOT NULL,
  `long` varchar(100) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `what` tinyint(2) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `whathappend`
--

INSERT INTO `whathappend` (`id`, `title`, `desc`, `long`, `lat`, `address`, `what`, `userid`) VALUES
(5, 'Purse', 'I Lost My Purse Which includes My CNIC. Its Black And I Want It To Return To Me. In Return I Will Give You Something.\nOh Nooooo\nSomething Fishy Fishy ;-) :-) :-p', '71.50828811897122', '34.00558670879829', 'GT Rd, Peshawar, Pakistan', 0, 0),
(6, 'asfddsf', 'sdfsdfsd', '71.5037820078262', '34.00448384276413', '27 Sial Flat GT Rd, Peshawar, Pakistan', 1, 0),
(7, 'asdfsdf', 'sdfdsfds', '71.50099251045071', '34.00626265186939', 'Arbab Rd, Peshawar, Pakistan', 0, 2),
(8, 'Wallet', 'Black Wallet With 2333 Rupess', '71.52837250007474', '34.007721247533965', 'Kafla Rd, Peshawar, Pakistan', 1, 2),
(9, 'dsfdsf', 'sdfdsf', '71.58741987304688', '34.01741142575128', 'City Mall Gadown Rd, Peshawar, Pakistan', 0, 2),
(10, '24324', '432432', '71.58330000000001', '34.0167', 'Sakira Ram, Peshawar, Pakistan', 1, 2),
(11, 'fdgfdg', 'fdgfdgfd', '71.58330000000001', '34.0167', 'Sakira Ram, Peshawar, Pakistan', 0, 2),
(12, 'dfgfdgfd', 'gfdgfdgdf', '71.58330000000001', '34.0167', 'Sakira Ram, Peshawar, Pakistan', 0, 2),
(13, '3w4r435435', 'fdgfdgfdgfd', '71.57789266662598', '34.01844298250038', 'Dalazak Rd, Peshawar 25000, Pakistan', 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `claims`
--
ALTER TABLE `claims`
  ADD PRIMARY KEY (`claim_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `whathappend`
--
ALTER TABLE `whathappend`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `claims`
--
ALTER TABLE `claims`
  MODIFY `claim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `whathappend`
--
ALTER TABLE `whathappend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
