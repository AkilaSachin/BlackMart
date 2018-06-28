-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 21, 2016 at 03:47 AM
-- Server version: 5.5.52-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blackmart_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartdetails`
--

CREATE TABLE IF NOT EXISTS `cartdetails` (
  `ser_no` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `image1` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  PRIMARY KEY (`ser_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cartdetails`
--

INSERT INTO `cartdetails` (`ser_no`, `email`, `image1`, `product_name`, `price`) VALUES
(1, 'rashmicsjm5@gmail.com', 'm1.jpg', 'HP Laptop', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `S.no` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(200) NOT NULL,
  `address` varchar(5000) NOT NULL,
  `phone_no` varchar(200) NOT NULL,
  `mobile_no` varchar(200) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  PRIMARY KEY (`S.no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`S.no`, `company_name`, `address`, `phone_no`, `mobile_no`, `email_id`) VALUES
(1, 'Himanshu Electronics & Communitation ', '', '45455455', 'q44234', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `ser_no` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`ser_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ser_no`, `user_name`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `newtable`
--

CREATE TABLE IF NOT EXISTS `newtable` (
  `ivoice` int(15) NOT NULL AUTO_INCREMENT,
  `dff` int(10) NOT NULL,
  PRIMARY KEY (`ivoice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payment_history`
--

CREATE TABLE IF NOT EXISTS `payment_history` (
  `invoicenum` int(15) NOT NULL AUTO_INCREMENT,
  `ser_no` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `product_description` varchar(500) NOT NULL,
  `quantity` int(100) NOT NULL,
  `price_total` float NOT NULL,
  `date` varchar(500) NOT NULL,
  PRIMARY KEY (`invoicenum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `payment_history`
--

INSERT INTO `payment_history` (`invoicenum`, `ser_no`, `email`, `product_description`, `quantity`, `price_total`, `date`) VALUES
(1, 126, 'admin@gmail.com', 'Apple iPad', 1, 115000, '2016-09-20'),
(2, 127, 'admin@gmail.com', 'Htc A9', 1, 28000, '2016-09-20'),
(3, 128, 'admin@gmail.com', 'LUMIA 640', 1, 18000, '2016-09-20'),
(4, 126, 'admin@gmail.com', 'Apple iPad', 1, 115000, '2016-09-20'),
(5, 127, 'admin@gmail.com', 'Htc A9', 1, 28000, '2016-09-20'),
(6, 128, 'admin@gmail.com', 'LUMIA 640', 1, 18000, '2016-09-20'),
(7, 129, 'admin@gmail.com', 'HTC m9 prime', 1, 26000, '2016-09-20'),
(8, 126, 'admin@gmail.com', 'Apple iPad', 1, 115000, '2016-09-20'),
(9, 127, 'admin@gmail.com', 'Htc A9', 1, 28000, '2016-09-20'),
(10, 128, 'admin@gmail.com', 'LUMIA 640', 1, 18000, '2016-09-20'),
(11, 129, 'admin@gmail.com', 'HTC m9 prime', 1, 26000, '2016-09-20'),
(12, 130, 'admin@gmail.com', 'Samsung galaxy tab', 1, 24000, '2016-09-20'),
(13, 126, 'admin@gmail.com', 'Apple iPad', 1, 115000, '2016-09-20'),
(14, 127, 'admin@gmail.com', 'Htc A9', 1, 28000, '2016-09-20'),
(15, 128, 'admin@gmail.com', 'LUMIA 640', 1, 18000, '2016-09-20'),
(16, 129, 'admin@gmail.com', 'HTC m9 prime', 1, 26000, '2016-09-20'),
(17, 130, 'admin@gmail.com', 'Samsung galaxy tab', 1, 24000, '2016-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `ser_no` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `pro_cat` varchar(200) NOT NULL,
  `product_price` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `brand` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `features` varchar(200) NOT NULL,
  `plateform` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `display` varchar(200) NOT NULL,
  `waranty` varchar(200) NOT NULL,
  `shipping_time` varchar(300) NOT NULL,
  `price` varchar(100) NOT NULL,
  `offer_price` varchar(100) NOT NULL,
  `save` varchar(200) NOT NULL,
  `image1` varchar(200) NOT NULL,
  PRIMARY KEY (`ser_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ser_no`, `product_code`, `product_name`, `pro_cat`, `product_price`, `description`, `brand`, `category`, `features`, `plateform`, `model`, `type`, `display`, `waranty`, `shipping_time`, `price`, `offer_price`, `save`, `image1`) VALUES
(38, 'LUMIA 640', 'LUMIA 640', 'microsoft', '20000', 'microUSB', 'MICROSOFT', 'MICROSOFT', 'internal 16gb,8mp camera,512mb ram', 'WINDOWS', 'MICROSOFT', 'smart phone', 'MICROSOFT', '1 year', '10-15 days', '20000', '18000', '2000', 'lumia_640_xl_lte.jpg'),
(40, 'Apple iPad', 'Apple iPad', 'apple', '125000', 'retina display', 'APPLE', 'APPLE', 'internal 32gb,8mp camera,GB ram', 'APPLE', 'APPLE', 'smart phone', 'APPLE', '1 year', '15-20 days', '125000', '115000', '10000', 'ipad_pro.jpg'),
(42, 'Htc A9', 'Htc A9', 'htc', '29000', 'USB Cable,', 'SAMSUNG', 'SAMSUNG', 'internal 32gb,8mp camera,512mb ram', 'SAMSUNG', 'SAMSUNG', 'smart phone', 'HTC', '1 year', '10-15 days', '29000', '28000', '1000', 'htc_one_a9s.jpg'),
(43, 'HTC m9 prime', 'HTC m9 prime', 'htc', '28000', 'USB Cable,', 'SAMSUNG', 'SAMSUNG', 'internal 16gb,8mp camera,512mb ram', 'SAMSUNG', 'SAMSUNG', 'smart phone', 'HTC', '1 year', '15-20 days', '28000', '26000', '2000', 'htc_one_m9_prime.jpg'),
(8, 'Lumia 540', 'Lumia 540', 'microsoft', '15000', '', 'MICROSOFT', 'MICROSOFT', 'internal 32gb,8mp camera,GB ram', 'MICROSOFT', 'MICROSOFT', 'smart phone', 'MICROSOFT', '1 years', '20-25 days', '15000', '12000', '3000', 'lumia_540.jpg'),
(11, 'Lumia 650', 'Lumia 650', 'microsoft', '8000', '', 'MICROSOFT', 'MICROSOFT', 'internal 32gb,8mp camera,GB ram', 'MICROSOFT', 'MICROSOFT', 'smart phone', 'MICROSOFT', '1 year', 'within 10-15 days', '8000', '7500', '500', 'lumia_650.jpg'),
(12, 'Lumia 950', 'Lumia 950', 'microsoft', '11000', '', 'MICROSOFT', 'MICROSOFT', 'internal 32gb,8mp camera,GB ram', 'MICROSOFT', 'MICROSOFT', 'smart phone', 'MICROSOFT', '2 year', 'within 20 days', '11000', '10000', '1000', 'lumia_950_xl.jpg'),
(16, 'Samsung galaxy j2', 'Samsung galaxy j2', 'samsung', '30000', 'USB Cable,', 'SAMSUNG', 'SAMSUNG', 'internal 32gb,8mp camera,GB ram', 'SAMSUNG', 'SAMSUNG', 'smart phone', 'SAMSUNG', '2 years', 'within 21 days', '30000', '28000', '2000', 'samsung_galaxy_j2.jpg'),
(17, 'Samsung galaxy s7', 'SAMSUNG galaxy s7', 'samsung', '28000', 'USB Cable,', 'SAMSUNG', 'SAMSUNG', 'internal 32gb,8mp camera,GB ram', 'SAMSUNG', 'SAMSUNG', 'smart phone', 'SAMSUNG', '2 years', '20 days', '28000', '27000', '1000', 'samsung_galaxy_s7_active.jpg'),
(18, 'Samsung galaxy tab', 'Samsung galaxy tab', 'samsung', '25000', 'USB Cable,', 'SAMSUNG', 'SAMSUNG', 'internal 32gb,8mp camera,GB ram', 'SAMSUNG', 'SAMSUNG', 'smart phone', 'SAMSUNG', '5 year', '15-20 days', '25000', '24000', '1000', 'samsung_galaxy_tab_a_10_1.jpg'),
(22, 'xperia z5 premium', 'xperia z5 premium', 'sony', '25000', '', 'SONY', 'SONY', 'internal 32gb,8mp camera,GB ram', 'SONY', 'SONY', 'smart phone', 'SONY', '1 year warranty', 'within 30 days', '25000', '24000', '1000', 'xperia_z5_premium.jpg'),
(23, 'xperia x performance', 'xperia x performance', 'sony', '28000', '', 'SONY', 'SONY', 'internal 32gb,8mp camera,GB ram', 'SONY', 'SONY', 'smart phone', 'SONY', '2 years', '15 days', '28000', '26000', '2000', 'xperia_x_performance.jpg'),
(27, 'HTC desire 825', 'HTC desire 825', 'htc', '40000', ' USB Cable, Charger, Battery', 'SAMSUNG', 'SAMSUNG', 'internal 32gb,8mp camera,GB ram', 'SAMSUNG', 'SAMSUNG', 'smart phone', 'HTC', '1 year warranty ', 'within 15-20 working days', '40000', '38000', '2000', 'htc_desire_825.jpg'),
(28, 'HTC 10', 'HTC 10', 'htc', '36000', 'LENOVO Laptop', 'LENOVO', 'LENOVO Laptop', 'internal 32gb,8mp camera,GB ram', 'LENOVO Laptop', 'SAMSUNG', 'smart phone', 'HTC', '1 year warranty ', 'within 15-20 working days', '36000', '35000', '1000', 'htc10.jpg'),
(29, 'Apple 6s plus', 'Apple 6s plus', 'apple', '10000', '', 'APPLE', 'APPLE', 'internal 32gb,8mp camera,GB ram', 'APPLE', 'APPLE', 'smart phone', 'APPLE', '1 year warranty ', 'within 15-20 working days', '10000', '9000', '1000', '6s+.jpg'),
(30, 'Apple SE', 'Apple SE', 'apple', '6000', '', 'APPLE', 'APPLE', 'Internal Memory Capacity 16 GB', 'APPLE', 'APPLE', 'smart phone', 'APPLE', '1 year warranty ', 'within 5-7 working days', '6000', '5200', '800', 'se.jpg'),
(32, 'xperia m5', 'xperia m5', 'sony', '20000', 'iPads & Tablets', 'SONY', 'SONY', 'internal 32gb,8mp camera,GB ram', 'SONY', 'SONY', 'smart phone', 'SONY', '1 year warranty ', 'within 15-20 working days', '20000', '18000', '2000', 'xperia_m5.jpg'),
(34, 'xperia e5', 'xperia e5', 'sony', '8000', '2G Android Dual Core Phablet', 'SONY', 'SONY', '8 MP With Video Recording,Front 0.3 MP Digital Camera5.2 Inch (13.20 c) Screen Size,Android 4.0.3 ICS Operating System', 'SONY', 'SONY', 'smart phone', 'SONY', '1 year', 'within 5-7 working days', '8000', '5990', '2010', 'xperia_e5.jpg'),
(41, 'Apple 6s', 'Apple 6s', 'apple', '', '', 'APPLE', 'APPLE', '', 'APPLE', 'APPLE', 'smart phone', 'APPLE', '1 year', '15-20 days', '112000', '90000', '22000', '6s.jpg'),
(44, 'samsung galaxy j3 ', 'samsung galaxy j3 ', 'samsung', '', '', 'SAMSUNG', 'SAMSUNG', '', 'SAMSUNG', 'samsung', 'smart phone', 'SAMSUNG', '1 year', '10-15 days', '20000', '17000', '3000', 'samsung_galaxy_j3_v.jpg'),
(46, '1234', 'ghjk', 'mobile', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'xperia_z5_premium.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE IF NOT EXISTS `shopping_cart` (
  `ser_no` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(500) NOT NULL,
  `product_code` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `image1` varchar(500) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `txn_status` varchar(255) NOT NULL,
  PRIMARY KEY (`ser_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=131 ;

--
-- Dumping data for table `shopping_cart`
--

INSERT INTO `shopping_cart` (`ser_no`, `email`, `product_code`, `product_name`, `image1`, `quantity`, `price`, `txn_status`) VALUES
(105, 'r@gmail.com', 'SNTVE1', 'Samsung SNTVE1', 'tv1.png', '1', '5500', ''),
(5, 'rashmi@gmail.com', '$code', 'Nokia SNTV3', 'm3.png', '3', '6000', ''),
(14, 'rashmi@gmail.com', 'SNTVE2', 'philipsSNTVE2', 'tv3.png', '1', '', ''),
(64, 'rashmicsjm5@gmail.com', 'SNM1', 'SONYMUSIC1', 'music1.png', '1', '35000', ''),
(21, 'h@gmail.com', 'SNTVE2', 'philipsSNTVE2', 'tv3.png', '1', '', ''),
(70, 'h@gmail.com', 'SNM2', 'LGMUSIC2', 'music2.png', '1', '28000', ''),
(67, 'a@gmail.com', 'SNTVE2', 'SONYSNTVE2', 'tv2.png', '1', '10500', ''),
(122, 'kamal@gmail.com', 'SNTVE2', 'SONYSNTVE2', 'tv2.png', '1', '10500', ''),
(68, 'h@gmail.com', 'SNTVE1', 'Samsung SNTVE1', 'tv1.png', '1', '5500', ''),
(69, 'h@gmail.com', 'SNTVE1', 'Samsung SNTVE1', 'tv1.png', '1', '5500', ''),
(95, 'bsraazit@gmail.com', 'SNTVE2', 'SONYSNTVE2', 'tv2.png', '1', '10500', ''),
(89, 'raj@gmail.com', 'SNCAMERA3', 'SAMSUNG SNCAMERA3', 'camera3.png', '12', '7500', ''),
(88, 'raj@gmail.com', 'SNTVE3', 'VideoconSNTVE3', 'tv3.png', '2', '18000', ''),
(115, 'amit@gmail.com', 'SNMO2', 'LG-L5II- E450SNMO2', 'm2.png', '1', '9000', ''),
(103, 'rashmicsjm5@gmail.com', 'SNTVE4', 'ONIDASNTVE4', 'tv4.png', '1', '24000', ''),
(121, 'kamal@gmail.com', 'SNTVE1', 'Samsung SNTVE1', 'tv1.png', '2', '5500', ''),
(111, 'amit@gmail.com', 'SNTVE3', 'VideoconSNTVE3', 'tv3.png', '1', '18000', ''),
(117, 'anuj.lpu1@gmail.com', 'SNM1', 'SONYMUSIC1', 'music1.png', '1', '35000', ''),
(118, 'anuj.lpu1@gmail.com', 'SNTVE2', 'SONYSNTVE2', 'tv2.png', '1', '10500', ''),
(120, 'anuj.lpu1@gmail.com', 'SNM4', 'SAMSUNGMUSIC4', 'music4.png', '1', '24000', ''),
(123, 'kamal@gmail.com', 'SNCAMERA4', 'NIKON SNCAMERA4', 'camera4.png', '1', '10000', ''),
(124, 'manish@gmail.com', ' PSP-1004E BL', 'SONY PLAY STATION PSP-1004E BL', '6s+.jpg', '1', '9000', ''),
(125, 'm@gmail.com', ' PSP-1004E WH', 'SONY PLAY STATION PSP-1004E WH', 'se.jpg', '1', '5200', ''),
(126, 'admin@gmail.com', 'Apple iPad', 'Apple iPad', 'ipad_pro.jpg', '1', '115000', ''),
(127, 'admin@gmail.com', 'Htc A9', 'Htc A9', 'htc_one_a9s.jpg', '1', '28000', ''),
(128, 'admin@gmail.com', 'LUMIA 640', 'LUMIA 640', 'lumia_640_xl_lte.jpg', '1', '18000', ''),
(129, 'admin@gmail.com', 'HTC m9 prime', 'HTC m9 prime', 'htc_one_m9_prime.jpg', '1', '26000', ''),
(130, 'admin@gmail.com', 'Samsung galaxy tab', 'Samsung galaxy tab', 'samsung_galaxy_tab_a_10_1.jpg', '1', '24000', '');

-- --------------------------------------------------------

--
-- Table structure for table `static`
--

CREATE TABLE IF NOT EXISTS `static` (
  `static_id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(200) NOT NULL,
  `details` longtext NOT NULL,
  PRIMARY KEY (`static_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `static`
--

INSERT INTO `static` (`static_id`, `page`, `details`) VALUES
(1, 'aboutus', '\r\n<font style="font-family:Verdana, Geneva, sans-serif; color:#930;">\r\n\r\n \r\n<font style="font-family:Verdana, Geneva, sans-serif; color:#930;">\r\n\r\n \r\n<font style="font-family:Verdana, Geneva, sans-serif; color:#930;">\r\n\r\n \r\n<font style="font-family:Verdana, Geneva, sans-serif; color:#930;">\r\n\r\n \r\n<font style="font-family:Verdana, Geneva, sans-serif; color:#930;">\r\n\r\n \r\n<font style="font-family:Verdana, Geneva, sans-serif; color:#930;">\r\n\r\n <font style="font-family:Verdana, Geneva, sans-serif; color:#930;">\r\n <font style="font-family: Verdana, Geneva, sans-serif;">\r\n <div style="text-align: justify;"><font face="times new roman" color="#000033" size="5"><b>BlackMart <br></b><br></font></div><div style="text-align: justify;"><font face="times new roman" color="#000033" size="5"><br></font></div><div><font face="times new roman"><div style="text-align: justify;"><font size="5"><b style="color: rgb(0, 0, 51);">BlackMart</b><font color="#000033">, holds the distinction of being the one-stop-destination for quality electronic Products in Central India. It offers an array of world-renowned brands like Apple, Sony, Samsung, LG, Philips, Nokia, Dell, Lenovo, Blackberry, Compaq, Nikon, Canon, Whirlpool, Hitachi etc. all under one roof.</font></font></div><div style="text-align: justify;"><font color="#000033" size="5"><br></font></div><div><div style="text-align: justify;"><font color="#000033" size="5">Online shopping - Great Brands, Great Value</font></div></div><div style="text-align: justify;"><font color="#000033" size="5"><br></font></div><div><div style="text-align: justify;"><font color="#000033" size="5">Apart from 9 mega showrooms in Delhi, </font><font style="font-family:Verdana, Geneva, sans-serif; color:#930;" size="5"><font style="font-family:Verdana, Geneva, sans-serif; color:#930;"><font style="font-family:Verdana, Geneva, sans-serif; color:#930;"><font style="font-family: Verdana, Geneva, sans-serif;"><font face="times new roman" color="#000033"><b>BlackMart</b></font></font></font></font></font><font color="#000033" size="5"> now boasts of a strong presence in the virtual world too. BlackMart facilitates safe &amp; convenient online shopping for the customers.&nbsp;</font></div></div><div><div style="text-align: justify;"><font color="#000033" size="5">There are many wonderful things that you can do on this website - Get acquainted with the vast number of brands available for each product. Get in-depth information about them, compare the options &amp; select the product of your choice. You can also chat online with our advisors - clear queries &amp; get expert guidance. Plus there are special schemes and offers for the customers. The buying process too is very easy &amp; convenient. Every purchase comes with an assurance of timely delivery, anywhere in India. The happiness does not fade away even after the purchase. The prompt after-sales service keeps the product and your smile intact - year after year.</font></div></div><div style="text-align: justify;"><font color="#000033" size="5"><br></font></div><div style="text-align: justify;"><font color="#000033" size="5"><br></font></div><div><div style="text-align: justify;"><font color="#000033" size="5">A bond with a better life, this is the philosophy that we live by and it is reflected in each and every endeavor of the company.</font></div></div><div style="text-align: justify;">&nbsp;</div></font></div></font>\r\n\r\n</font>\r\n\r\n</font>\r\n\r\n\r\n\r\n</font>\r\n\r\n\r\n\r\n</font>\r\n\r\n\r\n\r\n</font>\r\n\r\n\r\n\r\n</font>\r\n\r\n\r\n\r\n</font>\r\n\r\n\r\n\r\n'),
(2, 'contact', '\r\n<font style="font-family:Verdana, Geneva, sans-serif; color:#930;">\r\n\r\n \r\n<font style="font-family:Verdana, Geneva, sans-serif; color:#930;">\r\n\r\n \r\n<font style="font-family:Verdana, Geneva, sans-serif; color:#930;">\r\n\r\n <font style="font-family:Verdana, Geneva, sans-serif; color:#930;">\r\n <font style="font-family:Verdana, Geneva, sans-serif; color:#930;">\r\n <font style="font-family:Verdana, Geneva, sans-serif; color:#930;">\r\n <font style="font-family:Verdana, Geneva, sans-serif; color:#930;">\r\n <font style="font-family: Verdana, Geneva, sans-serif;">\r\n <font style="font-family: Verdana, Geneva, sans-serif;">\r\n <font style="font-family: Verdana, Geneva, sans-serif;">\r\n <div><b>BlackMart</b></div><div><font face="Verdana, Geneva, sans-serif" color="#000033"><br></font></div><div><font face="Verdana, Geneva, sans-serif" color="#000033">&nbsp;Address : &nbsp; &nbsp;&nbsp; Sri Lanka Institue of Information Technology,Colombo,Sri Lanka<br></font></div><div><font face="Verdana, Geneva, sans-serif" color="#000033"><br></font></div><div><font face="Verdana, Geneva, sans-serif" color="#000033"><br></font></div><div><font face="Verdana, Geneva, sans-serif" color="#000033">&nbsp;Contact No : &nbsp;+91-9999857868</font></div><div style="color: rgb(153, 51, 0);"><font face="Verdana, Geneva, sans-serif">&nbsp;</font></div></font>\r\n\r\n</font>\r\n\r\n</font>\r\n\r\n</font>\r\n\r\n</font>\r\n\r\n</font>\r\n\r\n</font>\r\n\r\n</font>\r\n\r\n\r\n\r\n</font>\r\n\r\n\r\n\r\n</font>\r\n\r\n\r\n\r\n'),
(3, 'Privacy&Policy', ''),
(4, 'Terms&Condition', '\n<font style="font-family:Verdana, Geneva, sans-serif; color:#930;">\n\n \n<font style="font-family:Verdana, Geneva, sans-serif; color:#930;">\n\n </font>\n\n\n\n</font>\n\n\n\n');

-- --------------------------------------------------------

--
-- Table structure for table `txn_status`
--

CREATE TABLE IF NOT EXISTS `txn_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `txn_status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `ser_no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`ser_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`ser_no`, `name`, `email`, `contact`, `password`) VALUES
(1, 'anuj', 'anuj.lpu1@gmail.com', '123456789', 'phpgurukul'),
(4, 'amit saini', 'amit@gmail.com', '123456789', '123'),
(6, 'Amit', 'a@gmail.com', '123456789', '12'),
(7, 'manish', 'manish@gmail.com', '123456789', '12'),
(8, 'himanshu', 'h@gmail.com', '123456789', '12345'),
(9, 'raj', 'raj@gmail.com', '123456789', '1234567890'),
(10, 'manisha', 'm@gmail.com', '123456789', '111'),
(11, 'naukri', 'm1@gmail.com', '123456789', '111'),
(13, 'demo', 'demouser@gmail.com', '1234567891', 'php'),
(14, 'nimal', 'kamal@gmail.com', '0112345679', '1234'),
(23, 'cj', 'cj@gmail.com', '0112345678', '123'),
(24, 'shehan', 'admin@gmail.com', '0774527153', '12'),
(25, 'akila', 'akila@gmail.com', '0774527153', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
