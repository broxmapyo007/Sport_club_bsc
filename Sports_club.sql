-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 26, 2020 at 12:30 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Sports_club`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `msg` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `email`, `title`, `msg`) VALUES
('Pol', 'Kaka@.com', 'Iimk', 'Je wns'),
('Pol', 'Kaka@.com', 'Iimk', 'Je wns');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `title` text NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`name`, `email`, `title`, `msg`) VALUES
('Pol', 'Kaka@.com', 'Iimk', 'Je wns'),
('Pol', 'His@.con', 'Freee', 'Chal hogya project');

-- --------------------------------------------------------

--
-- Table structure for table `Login_cred`
--

CREATE TABLE `Login_cred` (
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Login_cred`
--

INSERT INTO `Login_cred` (`fname`, `mname`, `lname`, `email`, `username`, `password`) VALUES
('Fadmin', 'MAdmin', 'Ladmin', 'admin@aaa.com', 'admin', 'admin'),
('Fadmin', 'MAdmin', 'Ladmin', 'admin@aaa.com', 'admin', 'admin'),
('P1', 'P2', 'P3', 'P4', 'P5', 'p6'),
('Pol1', 'Pol11', 'Pol12', 'Pol@pol.com', 'a11', 'a11');

-- --------------------------------------------------------

--
-- Table structure for table `Register`
--

CREATE TABLE `Register` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `gender` text NOT NULL,
  `email` text NOT NULL,
  `dob` text NOT NULL,
  `contact` text NOT NULL,
  `sports` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Register`
--

INSERT INTO `Register` (`fname`, `lname`, `gender`, `email`, `dob`, `contact`, `sports`) VALUES
('', '', 'on', 'waaa@gmail.com', 'Ssssss', '1222', 'Cricket/Football'),
('', '', 'on', 'waaa@gmail.com', 'Ssssss', '1222', 'Cricket/Football'),
('', '', 'on', 'waaa@gmail.com', 'Ssssss', '1222', 'Swimming/VollyBall'),
('Aa', 'Ssbabab', 'on', 'waaa@gmail.com', 'Ssssss', '1222', 'Swimming/VollyBall'),
('Aa', 'Ssbabab', 'on', 'waaa@gmail.com', 'Ssssss', '1222', 'Swimming/VollyBall'),
('Pol1', 'Pol2', 'on', 'waaa@gmail.com', '30/10/2020', '82738472827', 'Badminton');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
