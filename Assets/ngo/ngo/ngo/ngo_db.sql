-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 04:43 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` bigint(20) NOT NULL,
  `event_title` varchar(250) DEFAULT NULL,
  `event_description` varchar(1000) DEFAULT NULL,
  `event_location` varchar(25) DEFAULT NULL,
  `event_date` varchar(25) DEFAULT NULL,
  `event_time` varchar(25) DEFAULT NULL,
  `event_image` varchar(25) DEFAULT NULL,
  `timestamp` varchar(25) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_title`, `event_description`, `event_location`, `event_date`, `event_time`, `event_image`, `timestamp`, `date_time`) VALUES
(3, 'Health camp proposal', 'The first mate and his Skipper too will do their very comfortable in their tropic island nest.The first mate and his Skipper too will do their very comfortable in their tropic island nest.', 'noida62', '2019-12-07', '02:00', 'event_images/event-1.jpg', '1575185084', '2019-12-01 17:30:33'),
(5, 'Education Awareness Program', 'The first mate and his Skipper too will do their very comfortable in their tropic island nest.The first mate and his Skipper too will do their very comfortable in their tropic island nest.', 'Dwarka', '2019-12-07', '14:00', 'event_images/event-2.jpg', '1575219249', '2019-12-01 17:30:46'),
(6, 'Volunteer awareness program', 'The first mate and his Skipper too will do their very comfortable in their tropic island nest.The first mate and his Skipper too will do their very comfortable in their tropic island nest.', 'Dwarka', '2019-12-14', '15:01', 'event_images/event-3.jpg', '1575219310', '2019-12-01 17:30:57'),
(7, 'Volunteer awareness program', 'The first mate and his Skipper too will do their very comfortable in their tropic island nest.The first mate and his Skipper too will do their very comfortable in their tropic island nest..\r\nThe first mate and his Skipper too will do their very comfortable in their tropic island nest.The first mate and his Skipper too will do their very comfortable in their tropic island nest..', 'noida62', '2019-12-02', '00:00', 'event_images/event-4.jpg', '1575220912', '2019-12-01 17:31:10');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `img_id` bigint(20) NOT NULL,
  `image_one` varchar(25) DEFAULT NULL,
  `image_two` varchar(25) DEFAULT NULL,
  `image_three` varchar(25) NOT NULL,
  `timestamp` varchar(25) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`img_id`, `image_one`, `image_two`, `image_three`, `timestamp`, `date_time`) VALUES
(14, 'Gallery/15752195291.jpg', 'Gallery/15752195292.jpg', 'Gallery/3.jpg', '1575219529', '2019-12-01 16:58:49'),
(15, 'Gallery/15752195454.jpg', 'Gallery/15752195455.jpg', 'Gallery/6.jpg', '1575219545', '2019-12-01 16:59:05'),
(16, 'Gallery/15752196425.jpg', 'Gallery/15752196426.jpg', 'Gallery/3.jpg', '1575219642', '2019-12-01 17:00:42'),
(17, 'Gallery/15752196875.jpg', 'Gallery/15752196876.jpg', 'Gallery/3.jpg', '1575219687', '2019-12-01 17:01:27');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(25) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `timestamp` varchar(25) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password`, `email`, `timestamp`, `date_time`) VALUES
(1, 'admin', '123', 'admin@ngo.com', '1575137974', '2019-11-30 18:19:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `img_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
