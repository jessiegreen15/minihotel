-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 09:17 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `about` mediumtext NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `Title`, `about`, `photo`) VALUES
(1, 'PCZC', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'hotels.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `middlename`, `lastname`, `username`, `password`) VALUES
(1, 'Administrator', 'middle', 'last', 'Admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `amenities_id` int(11) NOT NULL,
  `amenities_description` mediumtext NOT NULL,
  `amenities_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dine_and_lounge`
--

CREATE TABLE `dine_and_lounge` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `event_transaction`
--

CREATE TABLE `event_transaction` (
  `transaction_id` int(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `event_type_id` int(11) NOT NULL,
  `extra_lunch` int(11) NOT NULL,
  `extra_snack` int(11) NOT NULL,
  `status` varchar(500) NOT NULL,
  `days` int(11) NOT NULL,
  `people` int(11) NOT NULL,
  `checkin` date NOT NULL,
  `checkin_time` time NOT NULL,
  `checkout` date NOT NULL,
  `checkout_time` time NOT NULL,
  `bill` int(11) NOT NULL,
  `event_name` varchar(500) NOT NULL,
  `payment` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `changes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_transaction`
--

INSERT INTO `event_transaction` (`transaction_id`, `guest_id`, `event_id`, `event_type_id`, `extra_lunch`, `extra_snack`, `status`, `days`, `people`, `checkin`, `checkin_time`, `checkout`, `checkout_time`, `bill`, `event_name`, `payment`, `amount`, `changes`) VALUES
(1, 2, 0, 1, 15, 15, 'approved', 1, 65, '2022-12-29', '00:00:00', '0000-00-00', '00:00:00', 0, 'bday', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `event_type`
--

CREATE TABLE `event_type` (
  `event_type_id` int(11) NOT NULL,
  `event_type_name` varchar(500) NOT NULL,
  `type_description` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  `reservation_fee` int(11) NOT NULL,
  `lunch_price` int(11) NOT NULL,
  `snack_price` int(11) NOT NULL,
  `lunch_description` varchar(500) NOT NULL,
  `snack_description` varchar(500) NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_type`
--

INSERT INTO `event_type` (`event_type_id`, `event_type_name`, `type_description`, `price`, `reservation_fee`, `lunch_price`, `snack_price`, `lunch_description`, `snack_description`, `photo`) VALUES
(1, 'Birthday', 'Land of Fairy Tales', 2999, 599, 367, 150, 'Full course meal - Main Dish, Appetizer, Desert', 'Light Snacks', 'R.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `photo` text NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `guest_id` int(11) NOT NULL,
  `firstname` varchar(500) NOT NULL,
  `middlename` varchar(500) NOT NULL,
  `lastname` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `contactno` text NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guest_id`, `firstname`, `middlename`, `lastname`, `email`, `address`, `contactno`, `username`, `password`) VALUES
(1, 'jessie', 'alvarez', 'datiles', 'jmadatiles785@gmail.com', 'mampang zamboanga city', '09356126812', 'jessie', '123456'),
(2, 'Jessie Marc', 'Alvarez', 'Datiles', 'jmadatiles785@gmail.com', 'mampang zamboanga city', '09356126812', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `restrictions`
--

CREATE TABLE `restrictions` (
  `room_status_id` int(11) NOT NULL,
  `room_status_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restrictions`
--

INSERT INTO `restrictions` (`room_status_id`, `room_status_name`) VALUES
(1, 'Under Renovation'),
(2, 'Under Maintenance'),
(3, 'Reserved'),
(4, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_type_id` int(11) NOT NULL,
  `photo` text NOT NULL,
  `description` varchar(500) NOT NULL,
  `room_status_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_type_id`, `photo`, `description`, `room_status_name`) VALUES
(1, 1, 'Deluxe.JPG', 'this is an airconditioned room with single bed ', 'Dirty'),
(2, 1, '3.jpg', 'this is an airconditioned room with one medium sized bed', 'Dirty');

-- --------------------------------------------------------

--
-- Table structure for table `room_transaction`
--

CREATE TABLE `room_transaction` (
  `transaction_id` int(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `extra_bed` int(11) NOT NULL,
  `extra_pillow` int(11) NOT NULL,
  `extra_sheet` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `days` int(11) NOT NULL,
  `checkin` date NOT NULL,
  `checkin_time` time NOT NULL,
  `checkout` date NOT NULL,
  `checkout_time` time NOT NULL,
  `bill` int(11) NOT NULL,
  `reservation_time` datetime NOT NULL,
  `extra_breakfast` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `changes` int(11) NOT NULL,
  `changes_two` varchar(500) NOT NULL,
  `service` varchar(500) NOT NULL,
  `restriction_description` varchar(500) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `room_type_id` int(11) NOT NULL,
  `room_type` varchar(500) NOT NULL,
  `person` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  `room_reservation_fee` int(11) NOT NULL,
  `pillow_price` int(11) NOT NULL,
  `sheet_price` int(11) NOT NULL,
  `bed_price` int(11) NOT NULL,
  `breakfast_price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `discount_price` int(11) NOT NULL,
  `downpayment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`room_type_id`, `room_type`, `person`, `price`, `room_reservation_fee`, `pillow_price`, `sheet_price`, `bed_price`, `breakfast_price`, `discount`, `discount_price`, `downpayment`) VALUES
(1, 'Single Room', '1', 899, 0, 100, 200, 500, 350, 0, 0, 0),
(2, 'Single Room', '1', 999, 0, 200, 450, 700, 150, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rulesregulations`
--

CREATE TABLE `rulesregulations` (
  `id` int(11) NOT NULL,
  `Title` varchar(500) NOT NULL,
  `rule` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`amenities_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dine_and_lounge`
--
ALTER TABLE `dine_and_lounge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `event_transaction`
--
ALTER TABLE `event_transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `event_type`
--
ALTER TABLE `event_type`
  ADD PRIMARY KEY (`event_type_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`guest_id`);

--
-- Indexes for table `restrictions`
--
ALTER TABLE `restrictions`
  ADD PRIMARY KEY (`room_status_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `room_transaction`
--
ALTER TABLE `room_transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`room_type_id`);

--
-- Indexes for table `rulesregulations`
--
ALTER TABLE `rulesregulations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `amenities_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dine_and_lounge`
--
ALTER TABLE `dine_and_lounge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_transaction`
--
ALTER TABLE `event_transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event_type`
--
ALTER TABLE `event_type`
  MODIFY `event_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `restrictions`
--
ALTER TABLE `restrictions`
  MODIFY `room_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room_transaction`
--
ALTER TABLE `room_transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `room_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rulesregulations`
--
ALTER TABLE `rulesregulations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
