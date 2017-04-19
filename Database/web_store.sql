-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2017 at 11:13 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `Cart_id` int(11) NOT NULL,
  `Member_id` int(11) NOT NULL,
  `Product_id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  PRIMARY KEY (`Cart_id`),
  KEY `Member_id` (`Member_id`,`Product_id`),
  KEY `Member_id_2` (`Member_id`),
  KEY `Product_id` (`Product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `Member_id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `F_name` varchar(100) NOT NULL,
  `L_name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone` int(20) NOT NULL,
  `Gender` varchar(8) NOT NULL,
  `Birthdate` int(12) NOT NULL,
  PRIMARY KEY (`Member_id`),
  UNIQUE KEY `Email` (`Email`),
  UNIQUE KEY `Phone` (`Phone`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`Member_id`, `Username`, `Password`, `Email`, `F_name`, `L_name`, `Address`, `Phone`, `Gender`, `Birthdate`) VALUES
(1, 'qwerty', 'qwerty', 'qwerty', 'qwerty', 'qwerty', 'qwerty', 123456, 'qwerty', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `Product_id` int(11) NOT NULL AUTO_INCREMENT,
  `Product_name` varchar(100) NOT NULL,
  `Product_type` varchar(20) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `ImageSource` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Product_id`),
  UNIQUE KEY `ImageSource` (`ImageSource`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_id`, `Product_name`, `Product_type`, `Description`, `Stock`, `Price`, `ImageSource`) VALUES
(1, 'asdfgh', 'asdfgh', 'asdfgh', 123456, 123456, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transections`
--

CREATE TABLE IF NOT EXISTS `transections` (
  `Transection_id` int(11) NOT NULL AUTO_INCREMENT,
  `Member_id` int(11) NOT NULL,
  `Product_id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Approval_Status` varchar(10) NOT NULL,
  PRIMARY KEY (`Transection_id`),
  KEY `Member_id` (`Member_id`,`Product_id`),
  KEY `Product_id` (`Product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `transections`
--

INSERT INTO `transections` (`Transection_id`, `Member_id`, `Product_id`, `Quantity`, `Approval_Status`) VALUES
(1, 1, 1, 123456, 'asdfg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_product_fk` FOREIGN KEY (`Product_id`) REFERENCES `product` (`Product_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_member_fk` FOREIGN KEY (`Member_id`) REFERENCES `member` (`Member_id`) ON DELETE NO ACTION;

--
-- Constraints for table `transections`
--
ALTER TABLE `transections`
  ADD CONSTRAINT `transition_product_fk` FOREIGN KEY (`Product_id`) REFERENCES `product` (`Product_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `transection_member_fk` FOREIGN KEY (`Member_id`) REFERENCES `member` (`Member_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
