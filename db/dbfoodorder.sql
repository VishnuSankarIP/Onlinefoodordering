-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 22, 2020 at 05:35 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbfoodorder`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblallocation`
--

CREATE TABLE IF NOT EXISTS `tblallocation` (
  `allocation_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`allocation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tblallocation`
--

INSERT INTO `tblallocation` (`allocation_id`, `order_id`, `emp_id`, `status`) VALUES
(1, 32, 1, 'delivered'),
(2, 32, 2, 'delivered'),
(3, 32, 1, 'delivered'),
(4, 32, 2, 'delivered'),
(5, 32, 1, 'delivered'),
(6, 32, 1, 'delivered'),
(7, 32, 2, 'delivered'),
(8, 32, 2, 'delivered'),
(9, 32, 2, 'delivered'),
(10, 32, 2, 'delivered'),
(11, 33, 2, 'allocated'),
(12, 46, 2, 'allocated'),
(14, 48, 9, 'delivered'),
(15, 47, 8, 'allocated'),
(16, 45, 7, 'allocated'),
(17, 49, 9, 'delivered');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE IF NOT EXISTS `tblcategory` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`category_id`, `category`, `status`) VALUES
(3, 'desert', '1'),
(4, 'starters', '1'),
(5, 'drinks', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tblemployee`
--

CREATE TABLE IF NOT EXISTS `tblemployee` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_name` varchar(50) DEFAULT NULL,
  `emp_phno` varchar(50) DEFAULT NULL,
  `emp_email` varchar(50) DEFAULT NULL,
  `emp_address` varchar(50) DEFAULT NULL,
  `emp_qualification` varchar(50) DEFAULT NULL,
  `emp_image` varchar(50) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tblemployee`
--

INSERT INTO `tblemployee` (`emp_id`, `emp_name`, `emp_phno`, `emp_email`, `emp_address`, `emp_qualification`, `emp_image`, `status`) VALUES
(5, 'Radha', '0011223344', 'r@gmail.com', 'kollam', 'degree', 'images/', '1'),
(6, 'mahi', '9876543211', 'mahii@gmail.com', 'kottayam', 'bcom', 'images/', '1'),
(7, 'priya.p', '9876543212', 'priyap@gmail.com', 'kollam', 'bcom', 'images/', '1'),
(8, 'sreelakshmi.k', '9876543214', 'sreek@gmail.com', 'ernakulam', 'bcom', 'images/', '1'),
(9, 'lijo.p', '9876543213', 'lijop@gmail.com', 'pathanamthitta', 'Bsc', 'images/', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tblfeedback`
--

CREATE TABLE IF NOT EXISTS `tblfeedback` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `feedback` varchar(50) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblfeedback`
--

INSERT INTO `tblfeedback` (`f_id`, `customer_id`, `feedback`) VALUES
(1, 8, 'good..');

-- --------------------------------------------------------

--
-- Table structure for table `tbllogin`
--

CREATE TABLE IF NOT EXISTS `tbllogin` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllogin`
--

INSERT INTO `tbllogin` (`username`, `password`, `usertype`, `status`) VALUES
('sree@gmail.com', '1234', 'user', '1'),
('priya@gmail.com', '5678', 'user', '1'),
('mahi@gmail.com', '9012', 'user', '1'),
('lijo@gmail.com', '2365', 'user', '1'),
('ijas@gmail.com', 'ijaspp', 'user', '1'),
('admin@gmail.com', 'admin', 'admin', '1'),
('achu@gmail.com', 'achu', 'user', '1'),
('ajay@gmail.com ', 'ajay', 'user', '1'),
('r@gmail.com', 'r@gmail.com', 'employee', '1'),
('mahii@gmail.com', 'mahii@gmail.com', 'employee', '1'),
('priyap@gmail.com', 'priyap@gmail.com', 'employee', '1'),
('sreek@gmail.com', 'sreek@gmail.com', 'employee', '1'),
('lijop@gmail.com', 'lijop@gmail.com', 'employee', '1'),
('shinod@gmail.com', 'shinod', 'user', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tblorder_child`
--

CREATE TABLE IF NOT EXISTS `tblorder_child` (
  `child_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(50) NOT NULL,
  `product_id` int(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  PRIMARY KEY (`child_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `tblorder_child`
--

INSERT INTO `tblorder_child` (`child_id`, `order_id`, `product_id`, `quantity`, `price`) VALUES
(29, 33, 11, '3', '105'),
(30, 34, 5, '2', '300'),
(31, 35, 5, '1', '150'),
(32, 36, 5, '3', '450'),
(33, 37, 11, '12', '420'),
(34, 38, 7, '5', '1500'),
(35, 39, 5, '2', '300'),
(36, 40, 14, '3', '105'),
(37, 41, 14, '3', '105'),
(38, 42, 14, '1', '35'),
(39, 43, 8, '3', '120'),
(40, 44, 14, '3', '105'),
(41, 45, 10, '7', '70'),
(42, 46, 11, '2', '70'),
(43, 46, 14, '5', '175'),
(44, 47, 9, '4', '1400'),
(45, 48, 5, '2', '300'),
(46, 49, 12, '2', '700'),
(47, 49, 11, '1', '35'),
(48, 50, 10, '4', '40'),
(49, 50, 12, '1', '350'),
(50, 51, 12, '2', '700');

-- --------------------------------------------------------

--
-- Table structure for table `tblorder_master`
--

CREATE TABLE IF NOT EXISTS `tblorder_master` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `total_amount` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `tblorder_master`
--

INSERT INTO `tblorder_master` (`order_id`, `customer_id`, `order_date`, `total_amount`, `status`) VALUES
(32, 8, '2019-10-04', '0', 'delivered'),
(33, 8, '2019-10-04', '0', 'employee allocated'),
(34, 8, '2019-10-04', '0', 'delivered'),
(35, 8, '2019-10-04', '0', 'delivered'),
(36, 8, '2019-10-04', '0', 'ordered'),
(37, 8, '2019-10-04', '0', 'delivered'),
(38, 8, '2019-10-04', '0', 'ordered'),
(39, 8, '2019-10-04', '0', 'ordered'),
(40, 8, '2019-10-04', '0', 'delivered'),
(41, 8, '2019-10-04', '1000', 'ordered'),
(42, 8, '2019-10-09', '35', 'ordered'),
(43, 8, '2019-10-09', '120', 'ordered'),
(44, 8, '2019-10-11', '105', 'ordered'),
(45, 8, '2019-10-11', '70', 'employee allocated'),
(46, 7, '2019-10-11', '245', 'employee allocated'),
(47, 8, '2019-10-11', '1400', 'employee allocated'),
(48, 14, '2019-11-05', '300', 'delivered'),
(49, 14, '2019-11-08', '735', 'delivered'),
(50, 14, '2020-10-22', '390', 'ordered'),
(51, 14, '2020-10-22', '', 'ordered');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE IF NOT EXISTS `tblproduct` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) DEFAULT NULL,
  `product_rate` varchar(50) DEFAULT NULL,
  `product_category` varchar(50) NOT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`product_id`, `product_name`, `product_rate`, `product_category`, `product_image`, `category_id`) VALUES
(5, 'burger', '150', 'non vegitarian', 'images/', 1),
(7, 'biriyani', '300', 'non vegitarian', 'images/', 4),
(8, 'Pepsi', '40', 'not applicable', 'images/Night-Guardian-2.jpg', 5),
(9, 'tomato soop', '350', 'vegitarian', 'images/ool (copy).jpg', 4),
(10, 'chappathi', '10', 'vegitarian', 'images/ptt.jpg', 4),
(11, '7up', '35', 'not applicable', 'images/ptt (copy).jpg', 5),
(12, 'chicken fried rice', '350', 'non vegitarian', 'images/pp (5th copy).jpg', 4),
(13, 'ac', '23', 'non vegitarian', 'images/pp (3rd copy).jpg', 4),
(14, 'pizza', '35', 'non vegitarian', 'images/ptt.jpg', 3),
(15, 'Chicken cheese sandwich', '90', 'non vegitarian', 'images/Raspberry-Brie-Grilled-Cheese-Sandwich.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tblpurchase_child`
--

CREATE TABLE IF NOT EXISTS `tblpurchase_child` (
  `purchase_id` int(11) NOT NULL AUTO_INCREMENT,
  `child_id` int(11) NOT NULL,
  `raw_id` int(11) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  PRIMARY KEY (`purchase_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tblpurchase_child`
--


-- --------------------------------------------------------

--
-- Table structure for table `tblpurchase_master`
--

CREATE TABLE IF NOT EXISTS `tblpurchase_master` (
  `purchase_id` int(11) NOT NULL AUTO_INCREMENT,
  `dealer_name` varchar(50) DEFAULT NULL,
  `dealer_phno` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`purchase_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tblpurchase_master`
--


-- --------------------------------------------------------

--
-- Table structure for table `tblrawmaterial`
--

CREATE TABLE IF NOT EXISTS `tblrawmaterial` (
  `raw_id` int(5) NOT NULL AUTO_INCREMENT,
  `raw_name` varchar(50) DEFAULT NULL,
  `raw_rate` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`raw_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tblrawmaterial`
--

INSERT INTO `tblrawmaterial` (`raw_id`, `raw_name`, `raw_rate`, `status`) VALUES
(1, 'rice', '200', '1'),
(3, 'salt', '50', '1'),
(4, 'chilly', '50', '1'),
(5, '', 'dw', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tblregister`
--

CREATE TABLE IF NOT EXISTS `tblregister` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(50) DEFAULT NULL,
  `customer_address` varchar(50) DEFAULT NULL,
  `customer_phno` varchar(50) DEFAULT NULL,
  `customer_email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tblregister`
--

INSERT INTO `tblregister` (`customer_id`, `customer_name`, `customer_address`, `customer_phno`, `customer_email`) VALUES
(7, 'sree', 'abcdefg', '9876543210', 'sree@gmail.com'),
(8, 'priya', 'hijklmnop', '1234567890', 'priya@gmail.com'),
(9, 'mahi', 'qrstuvw', '5432167890', 'mahi@gmail.com'),
(10, 'lijo', 'xyz', '6789054321', 'lijo@gmail.com'),
(11, 'muhammed ijas P P', 'P P house', '975612342190', 'ijas@gmail.com'),
(12, 'achu', 'kollam', '0011223344', 'achu@gmail.com'),
(13, 'AJAY', 'trivandrum', '9283746501', 'ajay@gmail.com '),
(14, 'Shinod', 'rgeg', '9658741023', 'shinod@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tblreview`
--

CREATE TABLE IF NOT EXISTS `tblreview` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `rating` varchar(50) DEFAULT NULL,
  `feedback` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tblreview`
--


-- --------------------------------------------------------

--
-- Table structure for table `tblstock`
--

CREATE TABLE IF NOT EXISTS `tblstock` (
  `stock_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`stock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tblstock`
--


-- --------------------------------------------------------

--
-- Table structure for table `tblview_payment`
--

CREATE TABLE IF NOT EXISTS `tblview_payment` (
  `pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `pay_amount` varchar(50) DEFAULT NULL,
  `pay_type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`pay_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tblview_payment`
--

INSERT INTO `tblview_payment` (`pay_id`, `order_id`, `pay_amount`, `pay_type`) VALUES
(1, 33, '105', 'Online Transaction'),
(2, 34, '300', 'Online Transaction'),
(3, 35, '150', 'Online Transaction'),
(4, 36, '450', 'Online Transaction'),
(5, 36, '450', 'Online Transaction'),
(6, 37, '420', 'Online Transaction'),
(7, 38, '1500', 'Online Transaction'),
(8, 39, '300', 'Online Transaction'),
(9, 40, '105', 'Online Transaction'),
(10, 41, '105', 'Online Transaction'),
(11, 41, '105', 'Online Transaction'),
(12, 42, '35', 'Online Transaction'),
(13, 43, '120', 'Online Transaction'),
(14, 0, '$total', 'Online Transaction'),
(15, 44, '105', 'Online Transaction'),
(16, 45, '70', 'Online Transaction'),
(17, 46, '245', 'Online Transaction'),
(18, 47, '1400', 'Online Transaction'),
(19, 48, '300', 'Online Transaction'),
(20, 49, '735', 'Online Transaction'),
(21, 50, '390', 'Online Transaction'),
(22, 51, '700', 'Online Transaction');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE IF NOT EXISTS `temp` (
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp`
--

