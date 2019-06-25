-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2018 at 11:06 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `client` (IN `cid` INT)  SELECT * from client where client_id=cid$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `uname`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `billing_details`
--

CREATE TABLE `billing_details` (
  `BILL_ID` int(6) NOT NULL,
  `BILL_DATE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `BILL_STATUS` varchar(15) DEFAULT 'cleared',
  `HIRE_AMOUNT` int(11) NOT NULL,
  `DISCOUNT_AMOUNT` decimal(10,2) NOT NULL,
  `TOTAL_AMOUNT` decimal(10,2) NOT NULL,
  `TAX_AMOUNT` decimal(10,2) NOT NULL,
  `BOOKING_ID` char(5) NOT NULL,
  `TOTAL_LATE_FEE` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing_details`
--

INSERT INTO `billing_details` (`BILL_ID`, `BILL_DATE`, `BILL_STATUS`, `HIRE_AMOUNT`, `DISCOUNT_AMOUNT`, `TOTAL_AMOUNT`, `TAX_AMOUNT`, `BOOKING_ID`, `TOTAL_LATE_FEE`) VALUES
(1, '2018-11-13 00:00:00', 'P', 7500, '10.00', '7613.00', '123.00', 'B1001', '0.00'),
(2, '2018-11-13 00:00:00', 'P', 23000, '55.00', '23101.90', '36.90', 'B1002', '120.00'),
(3, '2018-11-13 00:00:00', 'P', 8000, '0.00', '8012.00', '12.00', 'B1003', '0.00'),
(4, '2018-11-13 00:00:00', 'P', 13500, '0.00', '13515.00', '15.00', 'B1004', '0.00'),
(5, '2018-11-13 00:00:00', 'P', 8000, '150.00', '8003.56', '23.56', 'B1008', '130.00'),
(120, '2018-11-13 00:00:00', 'P', 5600, '120.00', '5503.00', '23.00', 'B1003', '0.00'),
(2955, '2018-11-15 00:00:00', 'P', 50000, '50.00', '50073.00', '45.00', 'B1008', '78.00');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `BOOKING_ID` char(5) NOT NULL,
  `FROM_DT_TIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `RET_DT_TIME` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `AMOUNT` decimal(10,2) NOT NULL,
  `BOOKING_STATUS` char(1) NOT NULL,
  `PICKUP_LOC` char(4) DEFAULT NULL,
  `DROP_LOC` char(4) DEFAULT NULL,
  `REG_NUM` int(11) NOT NULL,
  `DL_NUM` int(11) NOT NULL,
  `INS_CODE` char(4) DEFAULT NULL,
  `ACT_RET_DT_TIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DISCOUNT_CODE` char(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`BOOKING_ID`, `FROM_DT_TIME`, `RET_DT_TIME`, `AMOUNT`, `BOOKING_STATUS`, `PICKUP_LOC`, `DROP_LOC`, `REG_NUM`, `DL_NUM`, `INS_CODE`, `ACT_RET_DT_TIME`, `DISCOUNT_CODE`) VALUES
('B1001', '2018-11-11 02:30:00', '2018-11-15 11:30:00', '7500.00', 'A', 'L101', 'L101', 103, 7, 'I204', '2018-11-09 10:00:06', 'D297'),
('B1002', '2018-11-09 08:26:33', '2018-11-17 18:30:00', '23000.00', 'A', 'L103', 'L103', 101, 10, 'INS1', '2018-11-12 22:01:44', 'D678'),
('B1003', '2018-11-09 08:26:33', '2018-11-17 18:30:00', '8000.00', 'A', 'L103', 'L103', 101, 10, 'INS1', '2018-11-09 10:04:24', 'D109'),
('B1004', '2018-11-12 22:02:53', '2018-11-15 11:30:00', '13500.00', 'A', 'L101', 'L101', 103, 11, 'I204', '2018-11-12 22:01:44', 'D972'),
('B1008', '2018-11-12 22:04:14', '2018-11-14 18:30:00', '8000.00', 'A', 'L102', 'L102', 101, 13, 'I203', '2018-11-15 18:30:00', 'D972');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `car_type` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `hire_cost` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `CAR_CATEGORY_NAME` varchar(25) NOT NULL,
  `LOC_ID` char(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `car_name`, `car_type`, `image`, `hire_cost`, `capacity`, `status`, `CAR_CATEGORY_NAME`, `LOC_ID`) VALUES
(1, 'Waganor', 'Maruthi Suzuki', 'wagonr_side.png', 10000, 6, 'Available', 'MINI VAN', NULL),
(101, 'Swift', 'Maruthi suzuki', 'maruthi suzuki.png', 8000, 5, 'Available', 'ECONOMY', NULL),
(102, 'Mercedes', 'Benz', 'mercedes-benz-gla-class.jpg', 20000, 5, 'Available', 'STANDARD SUV', NULL),
(103, 'A-Star', 'Maruthi Suzuki', '24-1511531140-maruti-a-star.jpg', 7500, 4, 'Available', 'ECONOMY', NULL),
(104, 'Brezza', 'Maruthi Suzuki', 'vitara-brezza-photo-side-profile-1-1.jpg', 12000, 6, 'Available', 'FULL SIZE', NULL),
(123, 'ahg', 'asaw', 'compact executive.jpg', 1235, 6, 'Pending', 'FULL SIZE', NULL),
(124, 'HEXA', 'TATA', 'tata-hexa.jpg', 6500, 5, 'Available', 'MID SIZE', NULL),
(201, 'Mercedes 2015', 'Benz', '2015-mercedes-benz-g-class_100480885_491x308.jpg', 23000, 8, 'Available', 'MINI VAN', NULL),
(202, '2018_toyota_land_cruiser_angularfront', 'Toyato', '2018_toyota_land_cruiser_angularfront.jpg', 17000, 6, 'Available', 'STANDARD', NULL),
(203, 'Baleno', 'Maruthi Suzuki', 'baleno.jpg', 13500, 5, 'Available', 'ECONOMY', NULL),
(205, 'HondaFit', 'Honda', 'hondafit_honda.jpg', 16300, 6, 'Available', 'MID SIZE', NULL),
(698, 'dhsaf', 'sdudiyi', 'vintage_maruthi.jpg', 23000, 5, 'Pending', 'ECONOMY', NULL),
(1238, 'ygtg', 'hy8h7', '24-1511531140-maruti-a-star.jpg', 50000, 9, 'Available', 'MID SIZE', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `car_category`
--

CREATE TABLE `car_category` (
  `CATEGORY_NAME` varchar(25) NOT NULL,
  `NO_OF_LUGGAGE` int(11) NOT NULL,
  `NO_OF_PERSON` int(11) NOT NULL,
  `COST_PER_DAY` decimal(5,2) NOT NULL,
  `LATE_FEE_PER_HOUR` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_category`
--

INSERT INTO `car_category` (`CATEGORY_NAME`, `NO_OF_LUGGAGE`, `NO_OF_PERSON`, `COST_PER_DAY`, `LATE_FEE_PER_HOUR`) VALUES
('COMPACT', 3, 5, '32.00', '0.96'),
('ECONOMY', 2, 5, '30.00', '0.90'),
('FULL SIZE', 4, 5, '40.00', '1.20'),
('FULL SIZE SUV', 2, 8, '60.00', '1.80'),
('LUXURY CAR', 5, 5, '75.00', '2.25'),
('MID SIZE', 3, 5, '35.00', '1.05'),
('MID SIZE SUV', 2, 5, '36.00', '1.08'),
('MINI VAN', 5, 7, '70.00', '2.10'),
('STANDARD', 3, 5, '38.00', '1.14'),
('STANDARD SUV', 3, 5, '40.00', '1.20');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_no` int(11) NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `car_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `mpesa` varchar(255) NOT NULL,
  `FROM_DT_TIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `RET_DT_TIME` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `fname`, `email`, `id_no`, `phone`, `location`, `gender`, `car_id`, `status`, `mpesa`, `FROM_DT_TIME`, `RET_DT_TIME`) VALUES
(5, 'Ram', 'ram@gmail.com', 12345, 963245698, 'mysuru', 'male', 220, 'available', '120', '2018-11-11 08:40:08', '0000-00-00 00:00:00'),
(6, 'Tejas', 'tejas@gmail.com', 24497, 56478912, 'mysuru', 'Male', 101, 'Returned', '', '2018-11-13 08:17:45', '2018-11-14 18:30:00'),
(7, 'ram', 'ram@gmail.com', 111, 963232017, 'bangalore', 'Male', 103, 'Returned', '', '2018-11-13 08:25:38', '2018-12-02 18:30:00'),
(8, 'preethi', 'preethig109@gmail.com', 1234, 2147483647, 'mysuru', 'Female', 0, 'Available', '', '2018-11-09 03:54:46', '0000-00-00 00:00:00'),
(9, 'prabhu', 'p@gmail.com', 12345, 897564, 'bangalore', 'Male', 0, 'Available', '', '2018-11-09 05:01:02', '0000-00-00 00:00:00'),
(10, 'darshan', 'd@gmail.com', 12345, 63616159, 'bangalore', 'Male', 101, 'Returned', '', '2018-11-13 08:25:47', '2018-11-17 18:30:00'),
(11, 'sanjay', 's@gmail.com', 12345, 456123, 'mysuru', 'Male', 203, 'Approved', '', '2018-11-10 03:04:02', '2018-11-14 18:30:00'),
(12, 'madesh', 'm@gmail.com', 12345, 4654646, 'mys', 'Male', 1223, 'Pending', '', '2018-11-12 18:30:00', '2018-11-14 18:30:00'),
(13, 'raju', 'raju@gmail.com', 12345, 4546456, 'ramnagar', 'Male', 201, 'Approved', '', '2018-11-12 22:03:44', '2018-11-14 18:30:00'),
(14, 'a', 'a@gmail.com', 12345, 45, 'm', 'Male', 1223, 'Pending', '', '2018-11-11 18:30:00', '2018-11-12 18:30:00'),
(15, 'nandan', 'nandan@gmail.com', 12345, 96666666, 'mysuru', 'Male', 101, 'Approved', '', '2018-11-13 08:25:27', '2018-11-18 18:30:00'),
(16, 'san', 'san@gmail.com', 12345, 456613315, 'bangalore', 'Male', 103, 'Approved', '', '2018-11-13 23:22:47', '2018-11-14 18:30:00'),
(17, 'madesh', 'mades@gmail.com', 123, 4598, 'mysuru', 'Male', 101, 'Pending', '', '2018-04-01 18:30:00', '2018-05-03 18:30:00');

--
-- Triggers `client`
--
DELIMITER $$
CREATE TRIGGER `add_msg` AFTER INSERT ON `client` FOR EACH ROW INSERT INTO message (message,client_id,time,status)
				
VALUES('Approve my request','1',NOW(),'Unread')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `client_pending`
-- (See below for the actual view)
--
CREATE TABLE `client_pending` (
`client_id` int(11)
,`fname` varchar(255)
,`car_id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `client_returned`
-- (See below for the actual view)
--
CREATE TABLE `client_returned` (
`client_id` int(11)
,`fname` varchar(255)
,`car_id` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `discount_details`
--

CREATE TABLE `discount_details` (
  `DISCOUNT_CODE` char(4) NOT NULL,
  `DISCOUNT_NAME` varchar(25) NOT NULL,
  `EXPIRY_DATE` date NOT NULL,
  `DISCOUNT_PERCENTAGE` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discount_details`
--

INSERT INTO `discount_details` (`DISCOUNT_CODE`, `DISCOUNT_NAME`, `EXPIRY_DATE`, `DISCOUNT_PERCENTAGE`) VALUES
('D101', 'HOLIDAY SPECIAL', '2018-11-18', '20.00'),
('D109', 'WEEKLY RENTALS', '2018-12-20', '25.00'),
('D234', 'CTS CORPORATE', '2019-01-25', '20.00'),
('D297', 'UPGRADE SPECIAL', '2018-12-25', '23.00'),
('D678', 'IBM CORPORATE', '2018-12-25', '25.00'),
('D972', 'ONE WAY SPECIAL', '2019-11-25', '12.00');

-- --------------------------------------------------------

--
-- Table structure for table `location_details`
--

CREATE TABLE `location_details` (
  `LOCATION_ID` char(4) NOT NULL,
  `LOCATION_NAME` varchar(50) NOT NULL,
  `STREET` varchar(30) NOT NULL,
  `CITY` varchar(20) NOT NULL,
  `STATE_NAME` varchar(20) NOT NULL,
  `ZIPCODE` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location_details`
--

INSERT INTO `location_details` (`LOCATION_ID`, `LOCATION_NAME`, `STREET`, `CITY`, `STATE_NAME`, `ZIPCODE`) VALUES
('L101', 'kuvempunagar', '4th street', 'mysuru', 'karnataka', 521458),
('L102', 'T K Layout', '5th block', 'Mysuru', 'Karnatala', 574698),
('L103', 'Rajajinagar', '6th block', 'Bangalore', 'Karnatala', 560001),
('L104', 'gandhi nagar', '5th street', 'Mandya', 'Karnatala', 579368);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `client_id`, `message`, `status`, `time`) VALUES
(4, 1, 'Approve my request', 'Unread', '2018-11-14 06:15:27'),
(5, 0, 'aaa\r\n', 'Unread', '2018-11-14 06:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `rental_car_insurance`
--

CREATE TABLE `rental_car_insurance` (
  `INSURANCE_CODE` char(4) NOT NULL,
  `INSURANCE_NAME` varchar(50) NOT NULL,
  `COVERAGE_TYPE` varchar(200) NOT NULL,
  `COST_PER_DAY` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rental_car_insurance`
--

INSERT INTO `rental_car_insurance` (`INSURANCE_CODE`, `INSURANCE_NAME`, `COVERAGE_TYPE`, `COST_PER_DAY`) VALUES
('I202', 'SUPPLEMENTAL LIABILITY PROTECTION', 'Covers damage done to others', '12.00'),
('I203', 'PERSONAL ACCIDENT INSURANCE', 'Covers medical costs for driver and passengers', '10.00'),
('I204', 'PERSONAL EFFECTS COVERAGE', 'Covers theft of personal belongings', '5.00'),
('INS1', 'COLLISION DAMAGE WAIVER', 'Cover theft and total damage to the rental car', '15.00');

-- --------------------------------------------------------

--
-- Structure for view `client_pending`
--
DROP TABLE IF EXISTS `client_pending`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `client_pending`  AS  select `client`.`client_id` AS `client_id`,`client`.`fname` AS `fname`,`client`.`car_id` AS `car_id` from `client` where (`client`.`status` = 'Pending') ;

-- --------------------------------------------------------

--
-- Structure for view `client_returned`
--
DROP TABLE IF EXISTS `client_returned`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `client_returned`  AS  select `client`.`client_id` AS `client_id`,`client`.`fname` AS `fname`,`client`.`car_id` AS `car_id` from `client` where (`client`.`status` = 'Returned') ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `billing_details`
--
ALTER TABLE `billing_details`
  ADD PRIMARY KEY (`BILL_ID`),
  ADD KEY `BILLINGFK1` (`BOOKING_ID`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`BOOKING_ID`),
  ADD KEY `BOOKINGFK1` (`PICKUP_LOC`),
  ADD KEY `BOOKINGFK2` (`DROP_LOC`),
  ADD KEY `BOOKINGFK4` (`DL_NUM`),
  ADD KEY `BOOKINGFK3` (`REG_NUM`),
  ADD KEY `BOOKINGFK5` (`INS_CODE`),
  ADD KEY `BOOKINGFK6` (`DISCOUNT_CODE`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `CARFK1` (`CAR_CATEGORY_NAME`),
  ADD KEY `CARFK2` (`LOC_ID`);

--
-- Indexes for table `car_category`
--
ALTER TABLE `car_category`
  ADD PRIMARY KEY (`CATEGORY_NAME`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `discount_details`
--
ALTER TABLE `discount_details`
  ADD PRIMARY KEY (`DISCOUNT_CODE`),
  ADD UNIQUE KEY `DISCOUNTSK` (`DISCOUNT_NAME`);

--
-- Indexes for table `location_details`
--
ALTER TABLE `location_details`
  ADD PRIMARY KEY (`LOCATION_ID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `rental_car_insurance`
--
ALTER TABLE `rental_car_insurance`
  ADD PRIMARY KEY (`INSURANCE_CODE`),
  ADD UNIQUE KEY `INSURANCESK` (`INSURANCE_NAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `billing_details`
--
ALTER TABLE `billing_details`
  MODIFY `BILL_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2956;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billing_details`
--
ALTER TABLE `billing_details`
  ADD CONSTRAINT `BILLINGFK1` FOREIGN KEY (`BOOKING_ID`) REFERENCES `booking_details` (`BOOKING_ID`);

--
-- Constraints for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD CONSTRAINT `BOOKINGFK1` FOREIGN KEY (`PICKUP_LOC`) REFERENCES `location_details` (`LOCATION_ID`),
  ADD CONSTRAINT `BOOKINGFK2` FOREIGN KEY (`DROP_LOC`) REFERENCES `location_details` (`LOCATION_ID`),
  ADD CONSTRAINT `BOOKINGFK3` FOREIGN KEY (`REG_NUM`) REFERENCES `cars` (`car_id`),
  ADD CONSTRAINT `BOOKINGFK4` FOREIGN KEY (`DL_NUM`) REFERENCES `client` (`client_id`),
  ADD CONSTRAINT `BOOKINGFK5` FOREIGN KEY (`INS_CODE`) REFERENCES `rental_car_insurance` (`INSURANCE_CODE`),
  ADD CONSTRAINT `BOOKINGFK6` FOREIGN KEY (`DISCOUNT_CODE`) REFERENCES `discount_details` (`DISCOUNT_CODE`);

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `CARFK1` FOREIGN KEY (`CAR_CATEGORY_NAME`) REFERENCES `car_category` (`CATEGORY_NAME`),
  ADD CONSTRAINT `CARFK2` FOREIGN KEY (`LOC_ID`) REFERENCES `location_details` (`LOCATION_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
