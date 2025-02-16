-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2024 at 07:31 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homeservices`
--

-- --------------------------------------------------------

--
-- Table structure for table `addsp`
--

CREATE TABLE `addsp` (
  `service` varchar(200) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` int(15) NOT NULL,
  `file` varchar(255) NOT NULL,
  `experience` int(5) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addsp`
--

INSERT INTO `addsp` (`service`, `name`, `address`, `contact`, `file`, `experience`, `price`) VALUES
('electrician', 'A A Mane', 'satara', 2147483647, '5.jpeg', 2, 1000),
('Choose service', 'deep', 'kachrawadi', 2147483647, '1.jpg', 9, 1000),
('plumber', 'dnyaneshwari', 'satara', 2147483647, 'img12.jpeg', 9, 1000),
('plumber', 'shivani', 'satara', 2147483647, 'img12.jpeg', 6, 600),
('electrician', 'shraddha', 'satara', 2147483647, 'img10.jpeg', 6, 200),
('gardning', 'sdk', 'satara', 2147483647, 'img.jpg', 9, 600),
('gardning', 'sdk', 'satara', 2147483647, 'img.jpg', 9, 600),
('gardning', 'sdk', 'satara', 2147483647, 'img.jpg', 9, 600),
('gardening', 'd kanase', 'satara', 2147483647, 'img.jpg', 20, 500),
('electrician', 'deep', 'pegk', 2147483647, '20230110_163039.jpg', 2, 500);

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `emailid` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`emailid`, `password`) VALUES
('deep', 'Satara'),
('deep@gmail.com', 'Satara');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contactno` int(15) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `chooseservice` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `workdiscription` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`name`, `address`, `contactno`, `emailid`, `date`, `chooseservice`, `price`, `workdiscription`) VALUES
('shiva', 'satara', 2147483647, 'shivanikanase8165@gmail.com', '2023-03-07', 'electrician', 0, 'afdtgcg gfgh'),
('shiva', 'satara', 2147483647, 'shivanikanase8165@gmail.com', '2023-03-07', 'painter', 0, 'afdtgcg gfgh'),
('dnyaneshwari', 'satara', 2147483647, 'shivanikanase8165@gmail.com', '2023-03-07', 'painter', 0, 'afdtgcg gfgh'),
('dnyaneshwari', 'satara', 2147483647, 'shivanikanase8165@gmail.com', '2023-03-17', 'gardning', 0, 'afdtgcg gfgh'),
('deep', 'kachrawadi', 2147483647, 'shivanikanase8165@gmail.com', '2002-08-01', 'geyser repair', 0, 'jsjshfusjhv sjdkjfkldnv'),
('Rahat', 'Satara', 2147483647, 'shivanikanase8165@gmail.com', '2024-03-20', 'gardening', 500, 'afdtgcg gfghdgh'),
('sahil', 'satara', 2147483647, 'shivanikanase8165@gmail.com', '2024-04-20', 'electrician', 1000, 'ddfhg');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(15) NOT NULL,
  `address` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `date` int(10) NOT NULL,
  `que_1` varchar(10) NOT NULL,
  `que_2` varchar(10) NOT NULL,
  `que_3` varchar(10) NOT NULL,
  `que_4` varchar(10) NOT NULL,
  `que_5` varchar(10) NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `gender`, `emailid`, `date`, `que_1`, `que_2`, `que_3`, `que_4`, `que_5`, `comment`) VALUES
('shiva', 'Female', '', 2023, 'Yes', 'Very good', 'Definitely', 'Yes', 'Yes', 'rahat'),
('dnyaneshwari', 'Female', '', 2023, 'Yes', 'Very good', 'Definitely', 'Yes', 'Yes', 'agyasghdb');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `emailid` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`emailid`, `password`) VALUES
('rahat@gmail.com', 'satara');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `bookingno` int(10) NOT NULL,
  `date` int(10) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `address`, `contactno`, `emailid`, `password`) VALUES
('shivani', 'satara', '7517723376', 'shivanikanase8165@gmail.com', 'satara@123'),
('shivani', 'satara', '7517723376', 'shivanikanase8165@gmail.com', 'satara@123'),
('dnyaneshwari', 'satara', '7020607535', 'dnyaneshwarikanase6@gmail.com', 'satara#123'),
('deep', 'satara', '7517723376', 'shivanikanase8165@gmail.com', 'deep@123'),
('shivani', 'ang', '7020607535', 'dnyaneshwarikanase6@gmail.com', 'satara@123'),
('shivani', 'satara', '7517723376', 'rahat@gmail.com', 'satara'),
('shivani', 'satara', '9172958842', 'shivanikanase@gmail.com', 'satara'),
('shivani', 'pune', '9172958842', 'akanksha@gmail.com', 'satara');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `servicename` varchar(20) NOT NULL,
  `spimg` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
