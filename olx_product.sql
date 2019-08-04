-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2019 at 12:21 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olx_product`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `ID` varchar(10) NOT NULL,
  `Date` date NOT NULL,
  `Productcode` varchar(10) NOT NULL,
  `Message` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`ID`, `Date`, `Productcode`, `Message`) VALUES
('1', '2019-05-12', '12', 'hello'),
('2', '2019-05-05', '5', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `LoginID` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`LoginID`, `Password`) VALUES
('ns422691', '1234'),
('ns422691', '85214'),
('nitesh@123', '123456'),
('1705', '74154');

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `Product_Code` varchar(10) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Price` varchar(10) NOT NULL,
  `Company` varchar(15) NOT NULL,
  `Description` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`Product_Code`, `Category`, `Name`, `Price`, `Company`, `Description`) VALUES
('', '', '', '', '', ''),
('101', 'Laptop', 'Nitesh', '39900', 'HP', 'HP'),
('102', 'Washing machine', 'washing', '45000', 'Samsung 6.5 kg ', 'Samsung 6.5 kg '),
('103', 'tv', 'manisha', '9000', 'sensui', 'LED'),
('104', 'Dishwasher', 'sharma', '7500', 'IFB', 'Kaff 45 Place S');

-- --------------------------------------------------------

--
-- Table structure for table `registrationol`
--

CREATE TABLE `registrationol` (
  `LoginID` varchar(15) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `Phoneno` varchar(12) NOT NULL,
  `Email` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrationol`
--

INSERT INTO `registrationol` (`LoginID`, `Password`, `username`, `Phoneno`, `Email`) VALUES
('nitesh@123', 'nitesh', '123456', '98547', 'ns422691@gmail.'),
('1705', 'NItesh', '74154', '9589534154', 'ns422691@gmail.'),
('ns422691@gmail.', 'nite', '95895', '9589534154', 'nitesharma123@g'),
('ns422691@gmail.', 'nite', '2587', '9589534154', 'nitesharma123@g'),
('ns422691@gmail.', 'nite', '9874', '9589534154', 'nitesharma123@g');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`Product_Code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
