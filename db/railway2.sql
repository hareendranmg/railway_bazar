-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2018 at 09:52 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `railway2`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_cat`
--

CREATE TABLE IF NOT EXISTS `add_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` int(11) NOT NULL,
  `type` varchar(32) NOT NULL,
  `logo` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `add_cat`
--

INSERT INTO `add_cat` (`id`, `num`, `type`, `logo`) VALUES
(4, 1, 'hotel', 'hotal.jpg'),
(5, 2, 'super market', 'supper market.jpg'),
(6, 3, 'medical shop', 'medical shop.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE IF NOT EXISTS `add_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `original_price` int(11) NOT NULL,
  `desc` varchar(300) NOT NULL,
  `st` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `prdt_id` varchar(30) NOT NULL,
  `name` varchar(20) NOT NULL,
  `shop_ac` int(11) NOT NULL,
  `loc` varchar(30) NOT NULL,
  `shop_num` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`id`, `product`, `image`, `price`, `original_price`, `desc`, `st`, `type`, `prdt_id`, `name`, `shop_ac`, `loc`, `shop_num`) VALUES
(23, 'meet curry', '1.jpg', 231, 250, 'meet curry is created with  chiken', 0, 'hotel', '56', 'zamzam', 8888, '7', 36),
(24, 'meetroll chikken ', '2.jpg', 125, 132, 'meetroll chikken is helthy', 0, 'hotel', '98', 'zamzam', 8888, '7', 36),
(25, 'coca cola', '3.png', 15, 20, 'cola product', 0, 'supper market', '12', 'bigbazaar', 1515, '7', 12),
(26, 'frooty', '4.png', 10, 15, 'mango product', 1, 'supper market', '16', 'bigbazaar', 1515, '7', 12),
(27, 'Tropicana', '5.png', 53, 55, 'Heigh quality juice', 0, 'supper market', '17', 'bigbazaar', 1515, '7', 12),
(28, 'salt', '6.png', 10, 11, 'tata salt', 0, 'supper market', '18', 'bigbazaar', 1515, '7', 12),
(29, 'Ashirvad', '7.png', 56, 60, 'helthy product', 0, 'supper market', '19', 'bigbazaar', 1515, '7', 12),
(30, 'water', '8.png', 15, 50, 'purified one', 0, 'supper market', '20', 'bigbazaar', 1515, '7', 12),
(31, 'tonic', '9.jpg', 456, 460, 'kid tonic', 0, 'medical shop', '21', 'srsrsr', 1616, '7', 1616);

-- --------------------------------------------------------

--
-- Table structure for table `add_train`
--

CREATE TABLE IF NOT EXISTS `add_train` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `train_number` int(10) NOT NULL,
  `train_name` varchar(30) NOT NULL,
  `train_type` varchar(20) NOT NULL,
  `train_status` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `add_train`
--

INSERT INTO `add_train` (`id`, `train_number`, `train_name`, `train_type`, `train_status`) VALUES
(1, 12624, 'Chennail mail', 'supper Fast', 0),
(2, 56304, 'NCJ-KTYM Passenger', 'passenger', 0),
(3, 16317, 'CAPE-SVDK HIMSAGAR EXP', 'Express', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `addr` varchar(30) NOT NULL,
  `cont` varchar(30) NOT NULL,
  `ph` varchar(30) NOT NULL,
  `id_proof` varchar(30) NOT NULL,
  `acnt` int(11) NOT NULL,
  `aadar` varchar(19) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `name`, `addr`, `cont`, `ph`, `id_proof`, `acnt`, `aadar`, `amount`) VALUES
(6, 'Radhika', 'gayathri mel-vettoor po varkal', '9645264565', '1010-1010-1010-1010.jpg', '10203040.jpg', 10203040, '1010-1010-1010-1010', 96394),
(8, 'library', 'library', '9645217589', '9696-9696-9696-9696.jpg', '773322.jpg', 773322, '9696-9696-9696-9696', 101268),
(9, 'dhaya', 'dhaya sreenivas', '9645325896', '7474-7474-7474-7474.jpg', '333333.jpg', 333333, '7474-7474-7474-7474', 100000),
(10, 'shiva', 'kailasam', '8585858585', '6565-6565-6565-6565.jpg', '556363.jpg', 556363, '6565-6565-6565-6565', 100000),
(11, 'zamzam', 'zamzam\r\nkaryavattom', '789632587', '8888-8888-8888-8888.jpg', '8888.jpg', 8888, '8888-8888-8888-8888', 3375031),
(12, 'thakkaram', 'thakkaram\r\nshop\r\n', '7896541235', '1414-1414-1414-1414.jpg', '1414.jpg', 1414, '1414-1414-1414-1414', 2000),
(13, 'Big Bazaar', 'Big bazaar\r\nthambanoor\r\ntrivan', '9632587452', '1515-1515-1515-1515.jpg', '1515.jpg', 1515, '1515-1515-1515-1515', 10),
(14, 'sr medicals', 'sr medicals\r\nvarkala', '7412589632', '1616-1616-1616-1616.jpg', '1616.jpg', 1616, '1616-1616-1616-1616', 0),
(15, 'harikrishnan', 'harisree thamalam', '7736493078', '5555-5555-5555-5555.jpg', '11111.jpg', 11111, '5555-5555-5555-5555', 996735219),
(16, 'manuraj', 'medayil veedu,tvpm', '9020398754', '9632-5874-1000-0000.jpg', '22222.jpg', 22222, '9632-5874-1000-0000', 100000000);

-- --------------------------------------------------------

--
-- Table structure for table `bank_log`
--

CREATE TABLE IF NOT EXISTS `bank_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bank_log`
--

INSERT INTO `bank_log` (`id`, `user_name`, `pass`, `st`) VALUES
(1, 'bank', 'bank', 1);

-- --------------------------------------------------------

--
-- Table structure for table `book_product`
--

CREATE TABLE IF NOT EXISTS `book_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(25) NOT NULL,
  `shop_name` varchar(25) NOT NULL,
  `station` varchar(25) NOT NULL,
  `product` varchar(25) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `Req_by` varchar(20) NOT NULL,
  `shop_nme` varchar(20) NOT NULL,
  `shop_con` int(11) NOT NULL,
  `req_con` int(11) NOT NULL,
  `adar` varchar(20) NOT NULL,
  `ac_num` varchar(20) NOT NULL,
  `req_station` varchar(50) NOT NULL,
  `train_number` int(11) NOT NULL,
  `shp_num` int(11) NOT NULL,
  `shp_own` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cart1`
--

CREATE TABLE IF NOT EXISTS `cart1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(20) NOT NULL,
  `prdt` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `shop_stn` varchar(30) NOT NULL,
  `Shp_nme` varchar(30) NOT NULL,
  `train_num` int(11) NOT NULL,
  `coach` varchar(5) NOT NULL,
  `qnty` int(11) NOT NULL,
  `seat` varchar(5) NOT NULL,
  `st` int(11) NOT NULL,
  `ac_num` int(11) NOT NULL,
  `shp_ac` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `cart1`
--

INSERT INTO `cart1` (`id`, `nme`, `prdt`, `price`, `shop_stn`, `Shp_nme`, `train_num`, `coach`, `qnty`, `seat`, `st`, `ac_num`, `shp_ac`) VALUES
(1, 'radhika', 'meetroll chikken ', '125', '98', 'zamzam', 11223, 'e4', 2, '3', 1, 10203040, 8888),
(2, 'harikrishnan', 'meet curry', '231', '56', 'zamzam', 0, '1', 1, '2', 2, 11111, 8888),
(3, 'harikrishnan', 'meet curry', '231', '56', 'zamzam', 34346, '34', 1, '454', 2, 11111, 8888),
(4, 'harikrishnan', 'meet curry', '231', '56', 'zamzam', 34, '34', 34, '34', 2, 11111, 8888),
(5, 'harikrishnan', 'meet curry', '231', '56', 'zamzam', 21, '2', 1, '5', 2, 11111, 8888),
(6, 'harikrishnan', 'meet curry', '231', '56', 'zamzam', 11111, '12313', 14134, '123', 2, 11111, 8888),
(7, 'harikrishnan', 'meet curry', '231', '56', 'zamzam', 111111, '21', 5, '54', 2, 11111, 8888),
(8, 'harikrishnan', 'meetroll chikken ', '125', '98', 'zamzam', 16, '3', 1, '12', 1, 11111, 8888);

-- --------------------------------------------------------

--
-- Table structure for table `cash_dep`
--

CREATE TABLE IF NOT EXISTS `cash_dep` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `acunt_no` int(11) NOT NULL,
  `aadar` varchar(19) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `cash_dep`
--

INSERT INTO `cash_dep` (`id`, `acunt_no`, `aadar`, `amount`) VALUES
(1, 33333, '7777-7777-3', 333),
(2, 789654123, '5855-5555-6666-6666', 1000),
(3, 789654123, '5855-5555-6666-6666', 100),
(4, 789654123, '5855-5555-6666-6666', 500),
(5, 789654123, '5855-5555-6666-6666', 1000),
(6, 10203040, '1010-1010-1010-1010', 100000),
(7, 11112222, '7777-7777-7777-7777', 100000),
(8, 556363, '5563-5563-5563-5563', 100000),
(9, 773322, '9696-9696-9696-9696', 100000),
(10, 333333, '7474-7474-7474-7474', 100000),
(11, 556363, '6565-6565-6565-6565', 100000),
(12, 8888, '8888-8888-8888-8888', 100000),
(13, 1414, '1414-1414-1414-1414', 2000),
(14, 1515, '1515-1515-1515-1515', 10),
(15, 11111, '9999-9999-9999-9999', 10000),
(16, 11111, '9999-9999-9999-9999', 10000),
(17, 11111, '5555-5555-5555-5555', 10000),
(18, 22222, '9632-5874-1000-0000', 100000000),
(19, 11111, '5555-5555-5555-5555', 1000000000);

-- --------------------------------------------------------

--
-- Table structure for table `communication`
--

CREATE TABLE IF NOT EXISTS `communication` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `shop_name` varchar(20) NOT NULL,
  `msg` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `communication`
--

INSERT INTO `communication` (`id`, `user_name`, `shop_name`, `msg`, `status`) VALUES
(1, 'radhika', 'ZAM-ZAM', 'hiii\r\n', 0),
(2, 'radhika', 'ZAM-ZAM', 'zam zam\r\n', 0),
(3, 'radhika', 'ZAM-ZAM', 'aa', 0),
(4, 'radhika', 'ZAM-ZAM', 'product', 0),
(5, 'ZAM-ZAM', 'radhika', 'hiii\r\n', 0),
(6, 'ZAM-ZAM', 'radhika', 'hiii...radhika', 0),
(7, 'ZAM-ZAM', 'radhika', 'hiii', 0),
(8, 'ZAM-ZAM', 'radhika', 'hiiii', 0),
(9, 'ZAM-ZAM', 'radhika', 'kazhcho', 0),
(10, 'ZAM-ZAM', 'ZAM-ZAM', 'hiiiuuu', 0),
(11, 'ZAM-ZAM', 'ZAM-ZAM', 'haaiiii', 0);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `DistCode` int(11) NOT NULL AUTO_INCREMENT,
  `StCode` int(11) DEFAULT NULL,
  `DistrictName` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`DistCode`),
  KEY `StCode` (`StCode`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=651 ;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`DistCode`, `StCode`, `DistrictName`) VALUES
(1, 1, 'North and Middle Andama'),
(2, 1, 'South Andama'),
(3, 1, 'Nicobar'),
(4, 2, 'Anantapur'),
(5, 2, 'Chittoor'),
(6, 2, 'East Godavari'),
(7, 2, 'Guntur'),
(8, 2, 'Krishna'),
(9, 2, 'Kurnool'),
(10, 2, 'Prakasam'),
(11, 2, 'Srikakulam'),
(12, 2, 'Sri Potti Sri Ramulu Nellore'),
(13, 2, 'Vishakhapatnam'),
(14, 2, 'Vizianagaram'),
(15, 2, 'West Godavari'),
(16, 2, 'Cudappah'),
(17, 3, 'Anjaw'),
(18, 3, 'Changlang'),
(19, 3, 'East Siang'),
(20, 3, 'East Kameng'),
(21, 3, 'Kurung Kumey'),
(22, 3, 'Lohit'),
(23, 3, 'Lower Dibang Valley'),
(24, 3, 'Lower Subansiri'),
(25, 3, 'Papum Pare'),
(26, 3, 'Tawang'),
(27, 3, 'Tirap'),
(28, 3, 'Dibang Valley'),
(29, 3, 'Upper Siang'),
(30, 3, 'Upper Subansiri'),
(31, 3, 'West Kameng'),
(32, 3, 'West Siang'),
(33, 4, 'Baksa'),
(34, 4, 'Barpeta'),
(35, 4, 'Bongaigao'),
(36, 4, 'Cachar'),
(37, 4, 'Chirang'),
(38, 4, 'Darrang'),
(39, 4, 'Dhemaji'),
(40, 4, 'Dima Hasao'),
(41, 4, 'Dhubri'),
(42, 4, 'Dibrugarh'),
(43, 4, 'Goalpara'),
(44, 4, 'Golaghat'),
(45, 4, 'Hailakandi'),
(46, 4, 'Jorhat'),
(47, 4, 'Kamrup'),
(48, 4, 'Kamrup Metropolita'),
(49, 4, 'Karbi Anglong'),
(50, 4, 'Karimganj'),
(51, 4, 'Kokrajhar'),
(52, 4, 'Lakhimpur'),
(53, 4, 'Morigao'),
(54, 4, 'Nagao'),
(55, 4, 'Nalbari'),
(56, 4, 'Sivasagar'),
(57, 4, 'Sonitpur'),
(58, 4, 'Tinsukia'),
(59, 4, 'Udalguri'),
(60, 5, 'Araria'),
(61, 5, 'Arwal'),
(62, 5, 'Aurangabad'),
(63, 5, 'Banka'),
(64, 5, 'Begusarai'),
(65, 5, 'Bhagalpur'),
(66, 5, 'Bhojpur'),
(67, 5, 'Buxar'),
(68, 5, 'Darbhanga'),
(69, 5, 'East Champara'),
(70, 5, 'Gaya'),
(71, 5, 'Gopalganj'),
(72, 5, 'Jamui'),
(73, 5, 'Jehanabad'),
(74, 5, 'Kaimur'),
(75, 5, 'Katihar'),
(76, 5, 'Khagaria'),
(77, 5, 'Kishanganj'),
(78, 5, 'Lakhisarai'),
(79, 5, 'Madhepura'),
(80, 5, 'Madhubani'),
(81, 5, 'Munger'),
(82, 5, 'Muzaffarpur'),
(83, 5, 'Nalanda'),
(84, 5, 'Nawada'),
(85, 5, 'Patna'),
(86, 5, 'Purnia'),
(87, 5, 'Rohtas'),
(88, 5, 'Saharsa'),
(89, 5, 'Samastipur'),
(90, 5, 'Sara'),
(91, 5, 'Sheikhpura'),
(92, 5, 'Sheohar'),
(93, 5, 'Sitamarhi'),
(94, 5, 'Siwa'),
(95, 5, 'Supaul'),
(96, 5, 'Vaishali'),
(97, 5, 'West Champara'),
(98, 6, 'Chandigarh'),
(99, 7, 'Bastar'),
(100, 7, 'Bijapur'),
(101, 7, 'Bilaspur'),
(102, 7, 'Dantewada'),
(103, 7, 'Dhamtari'),
(104, 7, 'Durg'),
(105, 7, 'Jashpur'),
(106, 7, 'Janjgir-Champa'),
(107, 7, 'Korba'),
(108, 7, 'Koriya'),
(109, 7, 'Kanker'),
(110, 7, 'Kabirdham (formerly Kawardha);'),
(111, 7, 'Mahasamund'),
(112, 7, 'Narayanpur'),
(113, 7, 'Raigarh'),
(114, 7, 'Rajnandgao'),
(115, 7, 'Raipur'),
(116, 7, 'Surajpur'),
(117, 8, 'Dadra and Nagar Haveli'),
(118, 9, 'Dama'),
(119, 9, 'Diu'),
(120, 10, 'Central Delhi'),
(121, 10, 'East Delhi'),
(122, 10, 'New Delhi'),
(123, 10, 'North Delhi'),
(124, 10, 'North East Delhi'),
(125, 10, 'North West Delhi'),
(126, 10, 'South Delhi'),
(127, 10, 'South West Delhi'),
(128, 10, 'West Delhi'),
(129, 11, 'North Goa'),
(130, 11, 'South Goa'),
(131, 12, 'Ahmedabad'),
(132, 12, 'Amreli'),
(133, 12, 'Anand'),
(134, 12, 'Aravalli'),
(135, 12, 'Banaskantha'),
(136, 12, 'Bharuch'),
(137, 12, 'Bhavnagar'),
(138, 12, 'Dahod'),
(139, 12, 'Dang'),
(140, 12, 'Gandhinagar'),
(141, 12, 'Jamnagar'),
(142, 12, 'Junagadh'),
(143, 12, 'Kutch'),
(144, 12, 'Kheda'),
(145, 12, 'Mehsana'),
(146, 12, 'Narmada'),
(147, 12, 'Navsari'),
(148, 12, 'Pata'),
(149, 12, 'Panchmahal'),
(150, 12, 'Porbandar'),
(151, 12, 'Rajkot'),
(152, 12, 'Sabarkantha'),
(153, 12, 'Surendranagar'),
(154, 12, 'Surat'),
(155, 12, 'Tapi'),
(156, 12, 'Vadodara'),
(157, 12, 'Valsad'),
(158, 13, 'Ambala'),
(159, 13, 'Bhiwani'),
(160, 13, 'Faridabad'),
(161, 13, 'Fatehabad'),
(162, 13, 'Gurgao'),
(163, 13, 'Hissar'),
(164, 13, 'Jhajjar'),
(165, 13, 'Jind'),
(166, 13, 'Karnal'),
(167, 13, 'Kaithal'),
(168, 13, 'Kurukshetra'),
(169, 13, 'Mahendragarh'),
(170, 13, 'Mewat'),
(171, 13, 'Palwal'),
(172, 13, 'Panchkula'),
(173, 13, 'Panipat'),
(174, 13, 'Rewari'),
(175, 13, 'Rohtak'),
(176, 13, 'Sirsa'),
(177, 13, 'Sonipat'),
(178, 13, 'Yamuna Nagar'),
(179, 14, 'Bilaspur'),
(180, 14, 'Chamba'),
(181, 14, 'Hamirpur'),
(182, 14, 'Kangra'),
(183, 14, 'Kinnaur'),
(184, 14, 'Kullu'),
(185, 14, 'Lahaul and Spiti'),
(186, 14, 'Mandi'),
(187, 14, 'Shimla'),
(188, 14, 'Sirmaur'),
(189, 14, 'Sola'),
(190, 14, 'Una'),
(191, 15, 'Anantnag'),
(192, 15, 'Badgam'),
(193, 15, 'Bandipora'),
(194, 15, 'Baramulla'),
(195, 15, 'Doda'),
(196, 15, 'Ganderbal'),
(197, 15, 'Jammu'),
(198, 15, 'Kargil'),
(199, 15, 'Kathua'),
(200, 15, 'Kishtwar'),
(202, 15, 'Kupwara'),
(203, 15, 'Kulgam'),
(204, 15, 'Leh'),
(205, 15, 'Poonch'),
(206, 15, 'Pulwama'),
(207, 15, 'Rajouri'),
(208, 15, 'Ramba'),
(209, 15, 'Reasi'),
(210, 15, 'Samba'),
(211, 15, 'Shopia'),
(212, 15, 'Srinagar'),
(213, 15, 'Udhampur'),
(214, 16, 'Bokaro'),
(215, 16, 'Chatra'),
(216, 16, 'Deoghar'),
(217, 16, 'Dhanbad'),
(218, 16, 'Dumka'),
(219, 16, 'East Singhbhum'),
(220, 16, 'Garhwa'),
(221, 16, 'Giridih'),
(222, 16, 'Godda'),
(223, 16, 'Gumla'),
(224, 16, 'Hazaribag'),
(225, 16, 'Jamtara'),
(226, 16, 'Khunti'),
(227, 16, 'Koderma'),
(228, 16, 'Latehar'),
(229, 16, 'Lohardaga'),
(230, 16, 'Pakur'),
(231, 16, 'Palamu'),
(232, 16, 'Ramgarh'),
(233, 16, 'Ranchi'),
(234, 16, 'Sahibganj'),
(235, 16, 'Seraikela Kharsawa'),
(236, 16, 'Simdega'),
(237, 16, 'West Singhbhum'),
(238, 17, 'Bagalkot'),
(239, 17, 'Bangalore Rural'),
(240, 17, 'Bangalore Urba'),
(241, 17, 'Belgaum'),
(242, 17, 'Bellary'),
(243, 17, 'Bidar'),
(244, 17, 'Bijapur'),
(245, 17, 'Chamarajnagar'),
(246, 17, 'Chikkamagaluru'),
(247, 17, 'Chikkaballapur'),
(248, 17, 'Chitradurga'),
(249, 17, 'Davanagere'),
(250, 17, 'Dharwad'),
(251, 17, 'Dakshina Kannada'),
(252, 17, 'Gadag'),
(253, 17, 'Gulbarga'),
(254, 17, 'Hassa'),
(255, 17, 'Haveri'),
(256, 17, 'Kodagu'),
(257, 17, 'Kolar'),
(258, 17, 'Koppal'),
(259, 17, 'Mandya'),
(260, 17, 'Mysore'),
(261, 17, 'Raichur'),
(262, 17, 'Shimoga'),
(263, 17, 'Tumkur'),
(264, 17, 'Udupi'),
(265, 17, 'Uttara Kannada'),
(266, 17, 'Ramanagara'),
(267, 17, 'Yadgir'),
(268, 18, 'Alappuzha'),
(269, 18, 'Ernakulam'),
(270, 18, 'Idukki'),
(271, 18, 'Kannur'),
(272, 18, 'Kasaragod'),
(273, 18, 'Kollam'),
(274, 18, 'Kottayam'),
(275, 18, 'Kozhikode'),
(276, 18, 'Malappuram'),
(277, 18, 'Palakkad'),
(278, 18, 'Pathanamthitta'),
(279, 18, 'Thrissur'),
(280, 18, 'Thiruvananthapuram'),
(281, 18, 'Wayanad'),
(282, 19, 'Lakshadweep'),
(283, 20, 'Agar'),
(284, 20, 'Alirajpur'),
(285, 20, 'Anuppur'),
(286, 20, 'Ashok Nagar'),
(287, 20, 'Balaghat'),
(288, 20, 'Barwani'),
(289, 20, 'Betul'),
(290, 20, 'Bhind'),
(291, 20, 'Bhopal'),
(292, 20, 'Burhanpur'),
(293, 20, 'Chhatarpur'),
(294, 20, 'Chhindwara'),
(295, 20, 'Damoh'),
(296, 20, 'Datia'),
(297, 20, 'Dewas'),
(298, 20, 'Dhar'),
(299, 20, 'Dindori'),
(300, 20, 'Guna'),
(301, 20, 'Gwalior'),
(302, 20, 'Harda'),
(303, 20, 'Hoshangabad'),
(304, 20, 'Indore'),
(305, 20, 'Jabalpur'),
(306, 20, 'Jhabua'),
(307, 20, 'Katni'),
(308, 20, 'Khandwa (East Nimar);'),
(309, 20, 'Khargone (West Nimar);'),
(310, 20, 'Mandla'),
(311, 20, 'Mandsaur'),
(312, 20, 'Morena'),
(313, 20, 'Narsinghpur'),
(314, 20, 'Neemuch'),
(315, 20, 'Panna'),
(316, 20, 'Raise'),
(317, 20, 'Rajgarh'),
(318, 20, 'Ratlam'),
(319, 20, 'Rewa'),
(320, 20, 'Sagar'),
(321, 20, 'Satna'),
(322, 20, 'Sehore'),
(323, 20, 'Seoni'),
(324, 20, 'Shahdol'),
(325, 20, 'Shajapur'),
(326, 20, 'Sheopur'),
(327, 20, 'Shivpuri'),
(328, 20, 'Sidhi'),
(329, 20, 'Singrauli'),
(330, 20, 'Tikamgarh'),
(331, 20, 'Ujjai'),
(332, 20, 'Umaria'),
(333, 20, 'Vidisha'),
(334, 21, 'Ahmednagar'),
(335, 21, 'Akola'),
(336, 21, 'Amravati'),
(337, 21, 'Aurangabad'),
(338, 21, 'Beed'),
(339, 21, 'Bhandara'),
(340, 21, 'Buldhana'),
(341, 21, 'Chandrapur'),
(342, 21, 'Dhule'),
(343, 21, 'Gadchiroli'),
(344, 21, 'Gondia'),
(345, 21, 'Hingoli'),
(346, 21, 'Jalgao'),
(347, 21, 'Jalna'),
(348, 21, 'Kolhapur'),
(349, 21, 'Latur'),
(350, 21, 'Mumbai City'),
(351, 21, 'Mumbai suburba'),
(352, 21, 'Nanded'),
(353, 21, 'Nandurbar'),
(354, 21, 'Nagpur'),
(355, 21, 'Nashik'),
(356, 21, 'Osmanabad'),
(357, 21, 'Parbhani'),
(358, 21, 'Pune'),
(359, 21, 'Raigad'),
(360, 21, 'Ratnagiri'),
(361, 21, 'Sangli'),
(362, 21, 'Satara'),
(363, 21, 'Sindhudurg'),
(364, 21, 'Solapur'),
(365, 21, 'Thane'),
(366, 21, 'Wardha'),
(367, 21, 'Washim'),
(368, 21, 'Yavatmal'),
(369, 22, 'Bishnupur'),
(370, 22, 'Churachandpur'),
(371, 22, 'Chandel'),
(372, 22, 'Imphal East'),
(373, 22, 'Senapati'),
(374, 22, 'Tamenglong'),
(375, 22, 'Thoubal'),
(376, 22, 'Ukhrul'),
(377, 22, 'Imphal West'),
(378, 23, 'East Garo Hills'),
(379, 23, 'East Khasi Hills'),
(380, 23, 'Jaintia Hills'),
(381, 23, 'Ri Bhoi'),
(382, 23, 'South Garo Hills'),
(383, 23, 'West Garo Hills'),
(384, 23, 'West Khasi Hills'),
(385, 24, 'Aizawl'),
(386, 24, 'Champhai'),
(387, 24, 'Kolasib'),
(388, 24, 'Lawngtlai'),
(389, 24, 'Lunglei'),
(390, 24, 'Mamit'),
(391, 24, 'Saiha'),
(392, 24, 'Serchhip'),
(393, 25, 'Dimapur'),
(394, 25, 'Kiphire'),
(395, 25, 'Kohima'),
(396, 25, 'Longleng'),
(397, 25, 'Mokokchung'),
(398, 25, 'Mo'),
(399, 25, 'Pere'),
(400, 25, 'Phek'),
(401, 25, 'Tuensang'),
(402, 25, 'Wokha'),
(403, 25, 'Zunheboto'),
(404, 26, 'Angul'),
(405, 26, 'Boudh (Bauda);'),
(406, 26, 'Bhadrak'),
(407, 26, 'Balangir'),
(408, 26, 'Bargarh (Baragarh);'),
(409, 26, 'Balasore'),
(410, 26, 'Cuttack'),
(411, 26, 'Debagarh (Deogarh);'),
(412, 26, 'Dhenkanal'),
(413, 26, 'Ganjam'),
(414, 26, 'Gajapati'),
(415, 26, 'Jharsuguda'),
(416, 26, 'Jajpur'),
(417, 26, 'Jagatsinghpur'),
(418, 26, 'Khordha'),
(419, 26, 'Kendujhar (Keonjhar);'),
(420, 26, 'Kalahandi'),
(421, 26, 'Kandhamal'),
(422, 26, 'Koraput'),
(423, 26, 'Kendrapara'),
(424, 26, 'Malkangiri'),
(425, 26, 'Mayurbhanj'),
(426, 26, 'Nabarangpur'),
(427, 26, 'Nuapada'),
(428, 26, 'Nayagarh'),
(429, 26, 'Puri'),
(430, 26, 'Rayagada'),
(431, 26, 'Sambalpur'),
(432, 26, 'Subarnapur (Sonepur);'),
(433, 26, 'Sundergarh'),
(434, 27, 'Karaikal'),
(435, 27, 'Mahe'),
(436, 27, 'Pondicherry'),
(437, 27, 'Yanam'),
(438, 28, 'Amritsar'),
(439, 28, 'Barnala'),
(440, 28, 'Bathinda'),
(441, 28, 'Firozpur'),
(442, 28, 'Faridkot'),
(443, 28, 'Fatehgarh Sahib'),
(444, 28, 'Fazilka'),
(445, 28, 'Gurdaspur'),
(446, 28, 'Hoshiarpur'),
(447, 28, 'Jalandhar'),
(448, 28, 'Kapurthala'),
(449, 28, 'Ludhiana'),
(450, 28, 'Mansa'),
(451, 28, 'Moga'),
(452, 28, 'Sri Muktsar Sahib'),
(453, 28, 'Pathankot'),
(454, 28, 'Patiala'),
(455, 28, 'Rupnagar'),
(456, 28, 'Ajitgarh (Mohali);'),
(457, 28, 'Sangrur'),
(458, 28, 'Shahid Bhagat Singh Nagar'),
(459, 28, 'Tarn Tara'),
(460, 29, 'Ajmer'),
(461, 29, 'Alwar'),
(462, 29, 'Bikaner'),
(463, 29, 'Barmer'),
(464, 29, 'Banswara'),
(465, 29, 'Bharatpur'),
(466, 29, 'Bara'),
(467, 29, 'Bundi'),
(468, 29, 'Bhilwara'),
(469, 29, 'Churu'),
(470, 29, 'Chittorgarh'),
(471, 29, 'Dausa'),
(472, 29, 'Dholpur'),
(473, 29, 'Dungapur'),
(474, 29, 'Ganganagar'),
(475, 29, 'Hanumangarh'),
(476, 29, 'Jhunjhunu'),
(477, 29, 'Jalore'),
(478, 29, 'Jodhpur'),
(479, 29, 'Jaipur'),
(480, 29, 'Jaisalmer'),
(481, 29, 'Jhalawar'),
(482, 29, 'Karauli'),
(483, 29, 'Kota'),
(484, 29, 'Nagaur'),
(485, 29, 'Pali'),
(486, 29, 'Pratapgarh'),
(487, 29, 'Rajsamand'),
(488, 29, 'Sikar'),
(489, 29, 'Sawai Madhopur'),
(490, 29, 'Sirohi'),
(491, 29, 'Tonk'),
(492, 29, 'Udaipur'),
(493, 30, 'East Sikkim'),
(494, 30, 'North Sikkim'),
(495, 30, 'South Sikkim'),
(496, 30, 'West Sikkim'),
(497, 31, 'Ariyalur'),
(498, 31, 'Chennai'),
(499, 31, 'Coimbatore'),
(500, 31, 'Cuddalore'),
(501, 31, 'Dharmapuri'),
(502, 31, 'Dindigul'),
(503, 31, 'Erode'),
(504, 31, 'Kanchipuram'),
(505, 31, 'Kanyakumari'),
(506, 31, 'Karur'),
(507, 31, 'Krishnagiri'),
(508, 31, 'Madurai'),
(509, 31, 'Nagapattinam'),
(510, 31, 'Nilgiris'),
(511, 31, 'Namakkal'),
(512, 31, 'Perambalur'),
(513, 31, 'Pudukkottai'),
(514, 31, 'Ramanathapuram'),
(515, 31, 'Salem'),
(516, 31, 'Sivaganga'),
(517, 31, 'Tirupur'),
(518, 31, 'Tiruchirappalli'),
(519, 31, 'Theni'),
(520, 31, 'Tirunelveli'),
(521, 31, 'Thanjavur'),
(522, 31, 'Thoothukudi'),
(523, 31, 'Tiruvallur'),
(524, 31, 'Tiruvarur'),
(525, 31, 'Tiruvannamalai'),
(526, 31, 'Vellore'),
(527, 31, 'Viluppuram'),
(528, 31, 'Virudhunagar'),
(529, 32, 'Adilabad'),
(530, 32, 'Hyderabad'),
(531, 32, 'Karimnagar'),
(532, 32, 'Khammam'),
(533, 32, 'Mahbubnagar'),
(534, 32, 'Medak'),
(535, 32, 'Nalgonda'),
(536, 32, 'Nizamabad'),
(537, 32, 'Ranga Reddy'),
(538, 32, 'Warangal'),
(539, 33, 'Dhalai'),
(540, 33, 'North Tripura'),
(541, 33, 'South Tripura'),
(542, 33, 'Khowai'),
(543, 33, 'West Tripura'),
(544, 35, 'Agra'),
(545, 35, 'Aligarh'),
(546, 35, 'Allahabad'),
(547, 35, 'Ambedkar Nagar'),
(548, 35, 'Auraiya'),
(549, 35, 'Azamgarh'),
(550, 35, 'Bagpat'),
(551, 35, 'Bahraich'),
(552, 35, 'Ballia'),
(553, 35, 'Balrampur'),
(554, 35, 'Banda'),
(555, 35, 'Barabanki'),
(556, 35, 'Bareilly'),
(557, 35, 'Basti'),
(558, 35, 'Bijnor'),
(559, 35, 'Budau'),
(560, 35, 'Bulandshahr'),
(561, 35, 'Chandauli'),
(562, 35, 'Amethi (Chhatrapati Shahuji Maharaj Nagar)'),
(563, 35, 'Chitrakoot'),
(564, 35, 'Deoria'),
(565, 35, 'Etah'),
(566, 35, 'Etawah'),
(567, 35, 'Faizabad'),
(568, 35, 'Farrukhabad'),
(569, 35, 'Fatehpur'),
(570, 35, 'Firozabad'),
(571, 35, 'Gautam Buddh Nagar'),
(572, 35, 'Ghaziabad'),
(573, 35, 'Ghazipur'),
(574, 35, 'Gonda'),
(575, 35, 'Gorakhpur'),
(576, 35, 'Hamirpur'),
(577, 35, 'Hardoi'),
(578, 35, 'Hathras (Mahamaya Nagar);'),
(579, 35, 'Jalau'),
(580, 35, 'Jaunpur'),
(581, 35, 'Jhansi'),
(582, 35, 'Jyotiba Phule Nagar'),
(583, 35, 'Kannauj'),
(584, 35, 'Kanpur Dehat (Ramabai Nagar);'),
(585, 35, 'Kanpur Nagar'),
(586, 35, 'Kanshi Ram Nagar'),
(587, 35, 'Kaushambi'),
(588, 35, 'Kushinagar'),
(589, 35, 'Lakhimpur Kheri'),
(590, 35, 'Lalitpur'),
(591, 35, 'Lucknow'),
(592, 35, 'Maharajganj'),
(593, 35, 'Mahoba'),
(594, 35, 'Mainpuri'),
(595, 35, 'Mathura'),
(596, 35, 'Mau'),
(597, 35, 'Meerut'),
(598, 35, 'Mirzapur'),
(599, 35, 'Moradabad'),
(600, 35, 'Muzaffarnagar'),
(601, 35, 'Panchsheel Nagar (Hapur);'),
(602, 35, 'Pilibhit'),
(603, 35, 'Pratapgarh'),
(604, 35, 'Raebareli'),
(605, 35, 'Rampur'),
(606, 35, 'Saharanpur'),
(607, 35, 'Sambhal(Bheem Nagar);'),
(608, 35, 'Sant Kabir Nagar'),
(609, 35, 'Sant Ravidas Nagar'),
(610, 35, 'Shahjahanpur'),
(611, 35, 'Shamli'),
(612, 35, 'Shravasti'),
(613, 35, 'Siddharthnagar'),
(614, 35, 'Sitapur'),
(615, 35, 'Sonbhadra'),
(616, 35, 'Sultanpur'),
(617, 35, 'Unnao'),
(618, 35, 'Varanasi'),
(619, 34, 'Almora'),
(620, 34, 'Bageshwar'),
(621, 34, 'Chamoli'),
(622, 34, 'Champawat'),
(623, 34, 'Dehradu'),
(624, 34, 'Haridwar'),
(625, 34, 'Nainital'),
(626, 34, 'Pauri Garhwal'),
(627, 34, 'Pithoragarh'),
(628, 34, 'Rudraprayag'),
(629, 34, 'Tehri Garhwal'),
(630, 34, 'Udham Singh Nagar'),
(631, 34, 'Uttarkashi'),
(632, 36, 'Bankura'),
(633, 36, 'Bardhama'),
(634, 36, 'Birbhum'),
(635, 36, 'Cooch Behar'),
(636, 36, 'Dakshin Dinajpur'),
(637, 36, 'Darjeeling'),
(638, 36, 'Hooghly'),
(639, 36, 'Howrah'),
(640, 36, 'Jalpaiguri'),
(641, 36, 'Kolkata'),
(642, 36, 'Maldah'),
(643, 36, 'Murshidabad'),
(644, 36, 'Nadia'),
(645, 36, 'North 24 Parganas'),
(646, 36, 'Paschim Medinipur'),
(647, 36, 'Purba Medinipur'),
(648, 36, 'Purulia'),
(649, 36, 'South 24 Parganas'),
(650, 36, 'Uttar Dinajpur');

-- --------------------------------------------------------

--
-- Table structure for table `post_complient`
--

CREATE TABLE IF NOT EXISTS `post_complient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(25) NOT NULL,
  `shop` varchar(25) NOT NULL,
  `station` varchar(25) NOT NULL,
  `complients` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `post_complient`
--

INSERT INTO `post_complient` (`id`, `user_name`, `shop`, `station`, `complients`) VALUES
(1, 'harikrishnan', 'ZAM-ZAM', 'VARKALA', ' not delivered');

-- --------------------------------------------------------

--
-- Table structure for table `post_feedback`
--

CREATE TABLE IF NOT EXISTS `post_feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `shop_name` varchar(20) NOT NULL,
  `station` varchar(20) NOT NULL,
  `feedback` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `post_feedback`
--

INSERT INTO `post_feedback` (`id`, `user_name`, `shop_name`, `station`, `feedback`) VALUES
(1, 'arya', 'ZAM-ZAM', 'VARKALA', ' good one'),
(2, 'radhika', 'ZAM-ZAM', 'VARKALA', 'nice one'),
(3, 'harikrishnan', 'Thakkaram', 'Balaramapuram', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE IF NOT EXISTS `rate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `star` varchar(5) NOT NULL,
  `shop` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`id`, `star`, `shop`, `name`, `st`) VALUES
(1, '4', 'ZAM-ZAM', 'arya', 0),
(2, '2', 'ZAM-ZAM', 'arya', 0),
(3, '5', '36', 'arya', 0),
(4, '5', '36', 'arya', 0),
(5, '5', '36', 'arya', 0),
(6, '3', '36', 'arya', 0),
(7, '2', '36', 'radhika', 0),
(8, '4', '36', 'arya', 0);

-- --------------------------------------------------------

--
-- Table structure for table `shop_reg`
--

CREATE TABLE IF NOT EXISTS `shop_reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_num` int(11) NOT NULL,
  `shop_name` varchar(30) NOT NULL,
  `owner` varchar(30) NOT NULL,
  `shop_typ` varchar(30) NOT NULL,
  `shop_loc` varchar(30) NOT NULL,
  `shop_pic` varchar(30) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `passwd` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  `acnt_num` int(11) NOT NULL,
  `rat` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `shop_reg`
--

INSERT INTO `shop_reg` (`id`, `shop_num`, `shop_name`, `owner`, `shop_typ`, `shop_loc`, `shop_pic`, `contact`, `user_id`, `passwd`, `type`, `status`, `acnt_num`, `rat`) VALUES
(17, 36, 'ZAM-ZAM', 'AKBAR SHA', 'hotel', '7', '1.jpg', '2147483647', 'zamzam', 'zamzam', 'shop', 1, 8888, '4'),
(18, 11, 'Thakkaram', 'muhammad', 'hotel', '7', '2.jpg', '236514789', 'thakkaram', 'thakkaram', 'shop', 1, 1414, '0'),
(19, 12, 'Big Bazar', 'Amirtha', 'supper market', '7', '3.jpg', '7856329685', 'bigbazaar', 'bigbazaar', 'shop', 1, 1515, '0'),
(20, 1616, 'S R Medicals', 's r govind', 'medical shop', '7', '4.jpg', '7418529632', 'srsrsr', 'srsrsr', 'shop', 1, 1616, '0');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `StCode` int(11) NOT NULL AUTO_INCREMENT,
  `StateName` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`StCode`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`StCode`, `StateName`) VALUES
(1, 'Andaman and Nicobar Island (UT)'),
(2, 'Andhra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh (UT)'),
(7, 'Chhattisgarh'),
(8, 'Dadra and Nagar Haveli (UT)'),
(9, 'Daman and Diu (UT)'),
(10, 'Delhi (NCT)'),
(11, 'Goa'),
(12, 'Gujarat'),
(13, 'Haryana'),
(14, 'Himachal Pradesh'),
(15, 'Jammu and Kashmir'),
(16, 'Jharkhand'),
(17, 'Karnataka'),
(18, 'Kerala'),
(19, 'Lakshadweep (UT)'),
(20, 'Madhya Pradesh'),
(21, 'Maharashtra'),
(22, 'Manipur'),
(23, 'Meghalaya'),
(24, 'Mizoram'),
(25, 'Nagaland'),
(26, 'Odisha'),
(27, 'Puducherry (UT)'),
(28, 'Punjab'),
(29, 'Rajastha'),
(30, 'Sikkim'),
(31, 'Tamil Nadu'),
(32, 'Telangana'),
(33, 'Tripura'),
(34, 'Uttarakhand'),
(35, 'Uttar Pradesh'),
(36, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `train_mangmt`
--

CREATE TABLE IF NOT EXISTS `train_mangmt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `st_id` int(11) NOT NULL,
  `state` varchar(35) NOT NULL,
  `dist` varchar(35) NOT NULL,
  `station_name` varchar(35) NOT NULL,
  `code` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `train_mangmt`
--

INSERT INTO `train_mangmt` (`id`, `st_id`, `state`, `dist`, `station_name`, `code`) VALUES
(6, 400, '18', '280', 'Balaramapuram', 'blm'),
(7, 101, '18', '280', 'VARKALA', 'VAK');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE IF NOT EXISTS `user_reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `user_adrs` varchar(30) NOT NULL,
  `user_mobno` varchar(11) NOT NULL,
  `user_adhar_no` varchar(20) NOT NULL,
  `user_a/c_no` varchar(20) NOT NULL,
  `user_em` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `user_dob` date NOT NULL,
  `stat` varchar(30) NOT NULL,
  `user_dp` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `user_pass` varchar(20) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `status` int(10) NOT NULL,
  `dist` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`id`, `user_name`, `user_adrs`, `user_mobno`, `user_adhar_no`, `user_a/c_no`, `user_em`, `gender`, `user_dob`, `stat`, `user_dp`, `user_id`, `user_pass`, `user_type`, `status`, `dist`) VALUES
(1, '', '', '', '', '', '', '', '0000-00-00', '', '', 'admin', 'admin', 'admin', 1, ''),
(7, 'Arya', 'gayathri varkala', '7896548525', '5855-5555-6666-6666', '789654123', 'arya@gmail.com', 'female', '2002-01-24', 'India', 'arya.jpg', 'arya', 'arya', 'user', 1, ''),
(8, 'Radhika', 'gayathr varkala', '9645217896', '1010-1010-1010-1010', '10203040', 'radhika@gmail.com', 'female', '1983-10-10', 'India', 'radhika.jpg', 'radhika', 'radhika', 'user', 2, ''),
(9, 'harikrishnan', 'harisree tc 19/1719(4)\r\nthamal', '7736493078', '5555-5555-5555-5555', '11111', 'greathari555@gmail.com', 'male', '1997-01-14', '18', 'harikrishnan.jpg', 'harikrishnan', 'harikrishnan', 'user', 1, '280'),
(10, 'manuraj', 'medayil veedu', '9035245654', '9632-5874-1000-0000', '22222', 'manurajvr1@gmail.com', 'male', '1997-02-17', '18', 'manurajvr.jpg', 'manurajvr', 'manurajvr', 'user', 1, '280');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
