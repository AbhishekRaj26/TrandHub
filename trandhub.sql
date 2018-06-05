-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 05, 2018 at 05:34 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trandhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer_signup`
--

DROP TABLE IF EXISTS `buyer_signup`;
CREATE TABLE IF NOT EXISTS `buyer_signup` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `uid_buyer` varchar(255) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `email_varification` tinyint(1) NOT NULL,
  `acceptT&C` tinyint(1) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL,
  `phone` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uid_buyer` (`uid_buyer`),
  UNIQUE KEY `email` (`email`),
  KEY `email_varification` (`email_varification`),
  KEY `acceptT&C` (`acceptT&C`),
  KEY `password` (`password`),
  KEY `cpassword` (`cpassword`),
  KEY `phone` (`phone`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer_signup`
--

INSERT INTO `buyer_signup` (`id`, `uid_buyer`, `fname`, `lname`, `email`, `email_varification`, `acceptT&C`, `password`, `cpassword`, `phone`) VALUES
(2, '7a52016fdf6369a86414febe9be037ca4b6e6722', 'Sanjeev', 'Jauhari', 'sanjeev.jauhari31@gmail.com', 0, 1, 'Abhiraj@267', 'Abhiraj@267', 9690021001);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid_company` varchar(50) NOT NULL,
  `uid_user` varchar(50) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `zip` varchar(12) NOT NULL,
  `logo` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uid_company` (`uid_company`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `uid_company`, `uid_user`, `company_name`, `street`, `city`, `state`, `country`, `zip`, `logo`) VALUES
(5, '56b7fed14919751b4bff8ef3f5a09da77b93b8b7', '59fe4cf4aeeddc73fa06043fa7a7a36d9fb54800', 'R K Digital World', 'H.No. 2, Ghanta Ghar Chowk', 'Aonla', 'U. P.', 'India', '243301', 'company_logo/acc-1-back.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `item_images`
--

DROP TABLE IF EXISTS `item_images`;
CREATE TABLE IF NOT EXISTS `item_images` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name_image` varchar(200) NOT NULL,
  `uid_product` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_images`
--

INSERT INTO `item_images` (`id`, `name_image`, `uid_product`, `link`) VALUES
(13, '3.jpg', 'f2d43ef48c261d1b0e8a8038151d91918316eb90', 'image/3.jpg'),
(14, '3.jpg', '5a5f6023934adc807a9a4c7c663608ba77df782d', 'image/3111.jpg'),
(15, '4.jpg', '5a5f6023934adc807a9a4c7c663608ba77df782d', 'image/4111.jpg'),
(12, '2.jpg', 'f2d43ef48c261d1b0e8a8038151d91918316eb90', 'image/2.jpg'),
(11, '1.jpg', 'f2d43ef48c261d1b0e8a8038151d91918316eb90', 'image/6.jpg'),
(10, '1.jpg', 'f2d43ef48c261d1b0e8a8038151d91918316eb90', 'image/1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(3, 'abhi.rajjauhari26@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `notifyseller`
--

DROP TABLE IF EXISTS `notifyseller`;
CREATE TABLE IF NOT EXISTS `notifyseller` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid_buyer` varchar(100) NOT NULL,
  `uid_seller` varchar(100) NOT NULL,
  `uid_product` varchar(100) NOT NULL,
  `uid_query` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `perunitprice` float NOT NULL,
  `category` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `seen` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `perunitprice` (`perunitprice`),
  KEY `category` (`category`),
  KEY `status` (`status`),
  KEY `seen` (`seen`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifyseller`
--

INSERT INTO `notifyseller` (`id`, `uid_buyer`, `uid_seller`, `uid_product`, `uid_query`, `description`, `perunitprice`, `category`, `status`, `seen`) VALUES
(7, '7a52016fdf6369a86414febe9be037ca4b6e6722', '59fe4cf4aeeddc73fa06043fa7a7a36d9fb54800', '5a5f6023934adc807a9a4c7c663608ba77df782d', 'a9310edc62c0484a060a3c7475b5303577f2ae20', 'Best Glasses with wieght 100gms', 20, 'Metal', 1, 1),
(8, '7a52016fdf6369a86414febe9be037ca4b6e6722', '59fe4cf4aeeddc73fa06043fa7a7a36d9fb54800', 'f2d43ef48c261d1b0e8a8038151d91918316eb90', 'a9310edc62c0484a060a3c7475b5303577f2ae20', '', 0, 'Metal', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `uid_company` varchar(100) NOT NULL,
  `uid_user` varchar(100) NOT NULL,
  `uid_product` varchar(100) NOT NULL,
  `name_product` varchar(200) NOT NULL,
  `price` int(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `max_order` int(11) NOT NULL,
  `min_order` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `max_order` (`max_order`),
  KEY `min_order` (`min_order`),
  KEY `price` (`price`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `uid_company`, `uid_user`, `uid_product`, `name_product`, `price`, `description`, `max_order`, `min_order`, `category`) VALUES
(32, '56b7fed14919751b4bff8ef3f5a09da77b93b8b7', '59fe4cf4aeeddc73fa06043fa7a7a36d9fb54800', '5a5f6023934adc807a9a4c7c663608ba77df782d', 'Metal Glasses', 30, 'Good quality metal glass', 10, 120, 'metal'),
(31, '56b7fed14919751b4bff8ef3f5a09da77b93b8b7', '59fe4cf4aeeddc73fa06043fa7a7a36d9fb54800', 'f2d43ef48c261d1b0e8a8038151d91918316eb90', 'Card Shaadi', 100, 'Good Cards', 1234, 1324423, 'Metal');

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

DROP TABLE IF EXISTS `quotation`;
CREATE TABLE IF NOT EXISTS `quotation` (
  `id` double NOT NULL AUTO_INCREMENT,
  `uid_query` varchar(100) NOT NULL,
  `uid_product` varchar(100) NOT NULL,
  `product_category` varchar(200) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `uid_buyer` varchar(100) NOT NULL,
  `uid_seller` varchar(100) NOT NULL,
  `message` longtext NOT NULL,
  `date_time` datetime NOT NULL,
  `read_msg_sender` tinyint(1) NOT NULL,
  `read_msg_rcv` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `phone` (`phone`),
  KEY `date_time` (`date_time`),
  KEY `read` (`read_msg_sender`),
  KEY `uid_seller` (`uid_seller`),
  KEY `read_msg_rcv` (`read_msg_rcv`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quotation`
--

INSERT INTO `quotation` (`id`, `uid_query`, `uid_product`, `product_category`, `name`, `email`, `phone`, `uid_buyer`, `uid_seller`, `message`, `date_time`, `read_msg_sender`, `read_msg_rcv`, `status`) VALUES
(18, 'a9310edc62c0484a060a3c7475b5303577f2ae20', 'f2d43ef48c261d1b0e8a8038151d91918316eb90', 'Metal', 'Sanjeev Jauhari', 'sanjeev.jauhari31@gmail.com', '9690021001', '7a52016fdf6369a86414febe9be037ca4b6e6722', '59fe4cf4aeeddc73fa06043fa7a7a36d9fb54800', ' hihi', '2018-06-04 12:40:55', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sign up`
--

DROP TABLE IF EXISTS `sign up`;
CREATE TABLE IF NOT EXISTS `sign up` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(50) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `email_varification` tinyint(1) NOT NULL,
  `acceptT&C` tinyint(1) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Confirm_Password` varchar(20) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uid` (`uid`),
  KEY `Password` (`Password`),
  KEY `Confirm_Password` (`Confirm_Password`),
  KEY `Phone` (`Phone`),
  KEY `fname` (`fname`) USING BTREE,
  KEY `acceptT&C` (`acceptT&C`),
  KEY `email_varification` (`email_varification`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign up`
--

INSERT INTO `sign up` (`id`, `uid`, `fname`, `lname`, `email`, `email_varification`, `acceptT&C`, `Password`, `Confirm_Password`, `Phone`) VALUES
(1, '', 'abhishek', 'raj', 'abhi.jauhari26@gmail.com', 0, 0, 'abhiraj', 'abhiraj', '1212121212'),
(7, '59fe4cf4aeeddc73fa06043fa7a7a36d9fb54800', 'Abhishek', 'Raj', 'abhi.rajjauhari26@gmail.com', 1, 11, 'raj1', 'raj1', '123444');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer_signup`
--
ALTER TABLE `buyer_signup` ADD FULLTEXT KEY `fname` (`fname`);
ALTER TABLE `buyer_signup` ADD FULLTEXT KEY `lname` (`lname`);

--
-- Indexes for table `company`
--
ALTER TABLE `company` ADD FULLTEXT KEY `Name` (`company_name`);
ALTER TABLE `company` ADD FULLTEXT KEY `street` (`street`);
ALTER TABLE `company` ADD FULLTEXT KEY `city` (`city`);
ALTER TABLE `company` ADD FULLTEXT KEY `state` (`state`);
ALTER TABLE `company` ADD FULLTEXT KEY `country` (`country`);
ALTER TABLE `company` ADD FULLTEXT KEY `zip` (`zip`);
ALTER TABLE `company` ADD FULLTEXT KEY `logo` (`logo`);

--
-- Indexes for table `item_images`
--
ALTER TABLE `item_images` ADD FULLTEXT KEY `name_image` (`name_image`);
ALTER TABLE `item_images` ADD FULLTEXT KEY `uid_product` (`uid_product`);
ALTER TABLE `item_images` ADD FULLTEXT KEY `link` (`link`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter` ADD FULLTEXT KEY `email` (`email`);

--
-- Indexes for table `notifyseller`
--
ALTER TABLE `notifyseller` ADD FULLTEXT KEY `uid_seller` (`uid_seller`);
ALTER TABLE `notifyseller` ADD FULLTEXT KEY `uid_product` (`uid_product`);
ALTER TABLE `notifyseller` ADD FULLTEXT KEY `uid_query` (`uid_query`);
ALTER TABLE `notifyseller` ADD FULLTEXT KEY `description` (`description`);

--
-- Indexes for table `products`
--
ALTER TABLE `products` ADD FULLTEXT KEY `uid_company` (`uid_company`);
ALTER TABLE `products` ADD FULLTEXT KEY `uid_user` (`uid_user`);
ALTER TABLE `products` ADD FULLTEXT KEY `uid_product` (`uid_product`);
ALTER TABLE `products` ADD FULLTEXT KEY `name_product` (`name_product`);
ALTER TABLE `products` ADD FULLTEXT KEY `description` (`description`);
ALTER TABLE `products` ADD FULLTEXT KEY `category` (`category`);

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation` ADD FULLTEXT KEY `uid_product` (`uid_product`);
ALTER TABLE `quotation` ADD FULLTEXT KEY `name` (`name`);
ALTER TABLE `quotation` ADD FULLTEXT KEY `email` (`email`);
ALTER TABLE `quotation` ADD FULLTEXT KEY `phone_2` (`phone`);
ALTER TABLE `quotation` ADD FULLTEXT KEY `uid_user` (`uid_buyer`);
ALTER TABLE `quotation` ADD FULLTEXT KEY `message` (`message`);
ALTER TABLE `quotation` ADD FULLTEXT KEY `product_category` (`product_category`);
ALTER TABLE `quotation` ADD FULLTEXT KEY `uid_query` (`uid_query`);

--
-- Indexes for table `sign up`
--
ALTER TABLE `sign up` ADD FULLTEXT KEY `lname` (`lname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
