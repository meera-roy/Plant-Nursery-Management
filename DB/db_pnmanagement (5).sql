-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 31, 2023 at 11:39 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pnmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL auto_increment,
  `admin_name` varchar(100) NOT NULL,
  `admin_contact` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  PRIMARY KEY  (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_contact`, `admin_email`, `admin_password`) VALUES
(2, 'Anagha', '9877562017', 'anaghasuresh@gmail.com', 'anagha12345'),
(3, 'Akhil', '9077672109', 'akilmanoj@gmail.com', 'akhil12345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(11) NOT NULL auto_increment,
  `booking_date` varchar(100) NOT NULL default '0',
  `user_id` varchar(100) NOT NULL,
  `booking_status` varchar(100) NOT NULL default '0',
  `booking_amount` varchar(50) NOT NULL,
  PRIMARY KEY  (`booking_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `booking_date`, `user_id`, `booking_status`, `booking_amount`) VALUES
(28, '2023-10-31', '7', '1', '1998.00'),
(29, '2023-10-31', '7', '1', '1998.00'),
(30, '2023-10-31', '7', '1', '1998.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL auto_increment,
  `booking_quantity` varchar(100) NOT NULL default '1',
  `booking_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `cart_status` int(11) NOT NULL default '1',
  `cart_qty` int(11) NOT NULL,
  PRIMARY KEY  (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `booking_quantity`, `booking_id`, `product_id`, `cart_status`, `cart_qty`) VALUES
(52, '1', '28', '15', 4, 0),
(53, '1', '28', '16', 4, 0),
(54, '3', '29', '15', 1, 0),
(55, '3', '29', '16', 1, 0),
(56, '6', '30', '23', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE `tbl_complaint` (
  `complaint_id` int(11) NOT NULL auto_increment,
  `complainttype_id` varchar(100) NOT NULL,
  `complaint_content` varchar(100) NOT NULL,
  `complaint_date` varchar(100) NOT NULL,
  `complaint_reply` varchar(100) NOT NULL,
  `complaint_status` varchar(100) NOT NULL default '0',
  `user_id` varchar(100) NOT NULL,
  PRIMARY KEY  (`complaint_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_complaint`
--

INSERT INTO `tbl_complaint` (`complaint_id`, `complainttype_id`, `complaint_content`, `complaint_date`, `complaint_reply`, `complaint_status`, `user_id`) VALUES
(8, '1', 'badddddd', '2023-10-02', 'ok doone', '1', '7'),
(9, '3', 'ahhhhhh', '2023-10-02', '', '0', '7'),
(10, '6', 'Bad smell', '2023-10-02', 'cant do anything', '1', '10'),
(12, '--select--', '', '2023-10-30', '', '0', '7'),
(13, '--select--', '', '2023-10-30', '', '0', '7'),
(14, '4', 'bad', '2023-10-31', '', '0', '7');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complainttype`
--

CREATE TABLE `tbl_complainttype` (
  `complainttype_id` int(11) NOT NULL auto_increment,
  `complainttype_name` varchar(100) NOT NULL,
  PRIMARY KEY  (`complainttype_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_complainttype`
--

INSERT INTO `tbl_complainttype` (`complainttype_id`, `complainttype_name`) VALUES
(1, 'Bad Quality'),
(2, 'Yellowing of leaves '),
(3, 'Leaf drop '),
(4, 'Infestation '),
(5, 'Leaves turning brown'),
(6, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `district_id` int(11) NOT NULL auto_increment,
  `district_name` varchar(100) NOT NULL,
  PRIMARY KEY  (`district_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`district_id`, `district_name`) VALUES
(1, 'Ernakulam'),
(7, 'Idukki'),
(13, 'Kottayam'),
(14, 'Alappuzha');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(11) NOT NULL auto_increment,
  `feedback_content` varchar(100) NOT NULL,
  `feedback_date` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  PRIMARY KEY  (`feedback_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `feedback_content`, `feedback_date`, `user_id`) VALUES
(1, 'good', '2023-09-19', '7'),
(2, 'Such a Good Plant', '2023-10-02', '10'),
(3, 'very nice', '2023-10-04', '7'),
(4, 'good', '2023-10-31', '7');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `place_id` int(11) NOT NULL auto_increment,
  `place_name` varchar(100) NOT NULL,
  `district_id` int(11) NOT NULL,
  PRIMARY KEY  (`place_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`place_id`, `place_name`, `district_id`) VALUES
(14, 'Thodupuzha', 0),
(15, 'Thodupuzha', 0),
(16, 'Thodupuzha', 0),
(17, 'Thodupuzha', 7),
(18, 'Perumbavoor', 0),
(19, 'Perumbavoor', 1),
(20, 'Munnar', 7),
(21, 'Vazhakulam', 1),
(22, 'Muvattupuzha', 1),
(23, 'Muttom', 7),
(24, 'Puthupalli', 13),
(25, 'Kuravilangaadu', 0),
(26, 'Koothattukulam', 0),
(27, 'Kuravilangaadu', 13),
(28, 'Koothattukulam', 13),
(29, 'Pala', 13),
(30, 'Eetumaanur', 13),
(31, 'Kalavoor', 14),
(32, 'Vaikom', 14),
(33, 'Cheerthala', 14),
(34, 'Kuttanad', 14);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL auto_increment,
  `product_name` varchar(100) NOT NULL,
  `type_id` varchar(100) NOT NULL,
  `shop_id` varchar(100) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_rate` varchar(100) NOT NULL,
  `product_description` varchar(1000) NOT NULL,
  `product_careinstructions` varchar(1000) NOT NULL,
  PRIMARY KEY  (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `type_id`, `shop_id`, `product_image`, `product_rate`, `product_description`, `product_careinstructions`) VALUES
(15, 'MILT Sansevieria Plant', '2', '4', 'new2.jpg', '450', 'The milt sansevieria, known for its air-purifying properties, brings freshness and positivity to any space. ', 'Keep plants in medium light locations, out of direct sunlight.\r\nNatural light is best, but some plants can also thrive in office fluorescent light.\r\nPlant soil should be kept moist at all time.'),
(16, 'Spider Plant', '2', '4', 'Spiderr.jpg', '1200', 'Gift the goodness of pure air to your loved one. The Spider plant, both beautiful in looks and useful in its air purifying properties, makes for a thoughtful gift.', 'Keep plants in medium light locations, out of direct sunlight.\r\nNatural light is best, but some plants can also thrive in office fluorescent light.\r\nPlant soil should be kept moist at all time.\r\nBe careful to avoid overwatering.'),
(17, 'Green Aglaonema', '1', '4', 'new4.png', '1500', 'The green Aglaonema plant brings good luck and fortune while the parrot green planter adds to the workstation or a corner of the home.', 'Keep plants in medium light locations, out of direct sunlight.\r\nNatural light is best, but some plants can also thrive in office fluorescent light.\r\nPlant soil should be kept moist at all time.\r\nBe careful to avoid overwatering.\r\nDo not allow plants to stand in water.'),
(20, 'Red Cordyline', '4', '4', 'nxt2.jpg', '750', 'Origin of Red Cordyline is a genus of flowering plants in the arum family, Araceae that is native to tropical and subtropical regions of Asia and New Guinea.\r\nDuring summer once the plant matures in growth and age it can produce very small flowers which then turn into berries. If these do appear they grow between the leaves and are quite insignificant.', 'Keep plants in medium light locations, out of direct sunlight.\r\nNatural light is best, but some plants can also thrive in office fluorescent light.\r\nPlant soil should be kept moist at all time.\r\nBe careful to avoid overwatering.\r\nDo not allow plants to stand in water.\r\nAvoid wetting plant leaves excessively.'),
(21, 'lizard plant', '4', '4', 'plant1.jpg', '650', 'Exotic succulent plant that can be grown in sufficient water and light. This can be a unique gift to your dear and near ones. Ferns N Petals delivers the best quality plant on your order. Make your order now!', 'Please take out the plant from the box immediately after receiving and water it as required.\r\n\r\nWater the soil, not the leaves and flowers.\r\n\r\nKeep it away from direct sunlight. Avoid placing plants in trouble spots, such as near heat or air conditioning ducts.'),
(22, 'Sali Plant', '1', '4', 'plant6.jpg', '240', 'Origin- This plant is native to South America. It is believed that this plant helps in reducing stress, anxiety, and sleep disorders.', 'Keep plants in medium light locations, out of direct sunlight.\r\nNatural light is best, but some plants can also thrive in office fluorescent light.\r\nPlant soil should be kept moist at all time.\r\nBe careful to avoid overwatering.'),
(23, 'new plant', '4', '4', '3.jpg', '333', 'vbnm', 'care');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `review_id` int(10) NOT NULL auto_increment,
  `user_name` varchar(25) NOT NULL,
  `user_rating` varchar(10) NOT NULL,
  `user_review` varchar(500) NOT NULL,
  `review_datetime` varchar(10) NOT NULL,
  `product_id` int(30) NOT NULL,
  PRIMARY KEY  (`review_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`review_id`, `user_name`, `user_rating`, `user_review`, `review_datetime`, `product_id`) VALUES
(1, 'kjhutyre', '4', 'rtgfhjnk\n', '2023-10-29', 15),
(3, 'Rena', '5', 'Best Ever', '2023-10-29', 17);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shop`
--

CREATE TABLE `tbl_shop` (
  `shop_id` int(11) NOT NULL auto_increment,
  `shop_name` varchar(100) NOT NULL,
  `shop_contact` varchar(100) NOT NULL,
  `shop_email` varchar(100) NOT NULL,
  `shop_address` varchar(100) NOT NULL,
  `shop_photo` varchar(100) NOT NULL,
  `shop_proof` varchar(100) NOT NULL,
  `shop_password` varchar(100) NOT NULL,
  `place_id` int(100) NOT NULL,
  PRIMARY KEY  (`shop_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_shop`
--

INSERT INTO `tbl_shop` (`shop_id`, `shop_name`, `shop_contact`, `shop_email`, `shop_address`, `shop_photo`, `shop_proof`, `shop_password`, `place_id`) VALUES
(1, 'Meenu', '9847660187', 'meenu@gmail.com', 'Cherukombil H', 'life death.png', 'VICTUS Dark.jpg', 'meenu12345', 19),
(3, 'Anu S', '9794521220', 'anu12@gmail.com', 'Annakotil H', 'VICTUS Dark.jpg', 'life death.png', 'anumol12345', 17),
(4, 'Lilly', '9897999650', 'plantify@gmail.com', 'Va', 'plant-shops-in-singapore-6.jpg', 'hogwars jpg.jpeg', 'lilly12345', 24),
(7, 'Hannaaa', '8547449286', 'hannapi@gmail.com', 'hannaa h', '', '', 'aahhhgeyt', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock`
--

CREATE TABLE `tbl_stock` (
  `stock_id` int(11) NOT NULL auto_increment,
  `product_id` varchar(100) NOT NULL,
  `stock_quantity` varchar(100) NOT NULL,
  PRIMARY KEY  (`stock_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_stock`
--

INSERT INTO `tbl_stock` (`stock_id`, `product_id`, `stock_quantity`) VALUES
(3, '18', '35'),
(4, '13', '42'),
(5, '17', '105'),
(6, '22', '165'),
(7, '15', '322'),
(8, '16', '89'),
(9, '20', '670'),
(10, '21', '340'),
(11, '26', '200'),
(12, '23', '66');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `type_id` int(11) NOT NULL auto_increment,
  `type_name` varchar(100) NOT NULL,
  PRIMARY KEY  (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`type_id`, `type_name`) VALUES
(1, 'Outdoor Plants'),
(2, 'Indoor Plants'),
(4, 'Office Plants'),
(5, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL auto_increment,
  `user_name` varchar(100) NOT NULL,
  `user_contact` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_place` varchar(100) NOT NULL,
  `user_pincode` varchar(100) NOT NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_contact`, `user_email`, `user_password`, `user_address`, `user_place`, `user_pincode`) VALUES
(5, 'Aleena', '9077733429', 'aleena@gmail.com', 'aleena12345', 'annakombhil h', '19', '686670'),
(6, 'Sona Bulesh', '6282998228', 'sonabulesh12@gmail.com', 'sonabulesh', 'chakkarakomhil', '17', '686672'),
(7, 'Rena Mol', '6282998282', 'rena12@gmail.com', 'rena1234', 'Rena H', '19', '686770'),
(8, 'Hanna', '9899702341', 'hanna12@gmail.com', 'hanna12345', 'hannap', '17', '68770'),
(9, 'Alka', '6282998221', 'alka@gmail.com', 'alka123', 'alkah', '19', '687760'),
(10, 'Somy Kurian', '6282998228', 'somy130@gmail.com', 'somy123', 'Kannikattu H', '21', '686670');
