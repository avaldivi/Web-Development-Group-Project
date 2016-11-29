-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2016 at 04:52 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gt_getaride`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `accounts_id` int(30) NOT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `role` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`accounts_id`, `lastname`, `firstname`, `email`, `gender`, `phone`, `username`, `password`, `Role`) VALUES
(0, NULL, NULL, NULL, NULL, NULL, 'admin', 'admin', 1),
(1, 'Smith', 'John4', 'jss@ggc.edu', 'Male', '678-987-6543', 'jsmith', '123456', 0),
(2, 'Johns', 'Marry', 'jmc@ggc.edu', 'Female', '678-123-4567', 'jm', '123456', 0),
(3, 'user', 'user12', 'user23', 'male', '123555', 'user', '1234', 2),
(4, 'john', 'Sparow', 'jm@ggc.eduj', 'male', '666-777-8888', 'sparow', '123', 0),
(5, 'john', 'Sparow', 'jm@ggc.eduj', 'male', '666-777-8888', 'user', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pick_up`
--

CREATE TABLE `pick_up` (
  `pick_up_id` int(30) NOT NULL,
  `student_id` int(30) DEFAULT NULL,
  `volunteer_id` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(30) NOT NULL,
  `level` varchar(30) DEFAULT NULL,
  `major` varchar(30) DEFAULT NULL,
  `accounts_id` int(30) DEFAULT NULL,
  `airport_pickup` char(3) DEFAULT NULL,
  `require_housing` char(3) DEFAULT NULL,
  `arriving_flight_nr` varchar(30) DEFAULT NULL,
  `arriving_date` date DEFAULT NULL,
  `arriving_time` varchar(30) DEFAULT NULL,
  `departing_flight_nr` varchar(30) DEFAULT NULL,
  `luggage_amount` int(30) DEFAULT NULL,
  `host_address` varchar(30) DEFAULT NULL,
  `host_contact` varchar(30) DEFAULT NULL,
  `nights_stay` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `level`, `major`, `accounts_id`, `airport_pickup`, `require_housing`, `arriving_flight_nr`, `arriving_date`, `arriving_time`, `departing_flight_nr`, `luggage_amount`, `host_address`, `host_contact`, `nights_stay`) VALUES
(0, 'jun', 'it', 1, 'yes', 'yes', '555', '0000-00-00', '2:45', '666', 3, 'N/A', 'N/a', 0);

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `volunteer_id` int(30) NOT NULL,
  `accounts_id` int(30) DEFAULT NULL,
  `affiliation` varchar(30) DEFAULT NULL,
  `period_preference` varchar(30) DEFAULT NULL,
  `luggage` int(30) DEFAULT NULL,
  `offer_pickup` char(3) DEFAULT NULL,
  `offer_housing` char(3) DEFAULT NULL,
  `pick_up_limit` int(30) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `volunteer_contact` varchar(30) DEFAULT NULL,
  `nights_offering` int(30) DEFAULT NULL,
  `max_guests` int(30) DEFAULT NULL,
  `trip_rounds` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`volunteer_id`, `accounts_id`, `affiliation`, `period_preference`, `luggage`, `offer_pickup`, `offer_housing`, `pick_up_limit`, `address`, `volunteer_contact`, `nights_offering`, `max_guests`, `trip_rounds`) VALUES
(0, 2, 'Kamilah', 'Morning', 2, 'Yes', 'Yes', 5, 'qwe', 'sde', 2, 2, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`accounts_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`volunteer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `accounts_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `volunteer_id` int(30) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
