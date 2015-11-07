-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2015 at 12:34 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cyber`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `emailid` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `lastlogin` datetime NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `emailid`, `password`, `lastlogin`, `status`) VALUES
(2, 'rock', 'admin', 'admin@admin.com', 'admin123', '2015-03-11 00:00:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `bank_details`
--

CREATE TABLE IF NOT EXISTS `bank_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `account_no` varchar(30) NOT NULL,
  `ifsc` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `bank adderss` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `chattures`
--

CREATE TABLE IF NOT EXISTS `chattures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `organization` varchar(50) NOT NULL,
  `country` varchar(30) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `level` int(11) NOT NULL,
  `parent_chatture_id` int(11) NOT NULL,
  `emailid` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `chattures`
--

INSERT INTO `chattures` (`id`, `name`, `organization`, `country`, `contact_number`, `level`, `parent_chatture_id`, `emailid`, `password`, `username`, `status`) VALUES
(16, 'chatture', 'org', 'uk', '45454545', 0, 1, 'chatture@gmail.com', '202cb962ac59075b964b07152d234b70', 'chatture', '1'),
(17, 'chhh', 'hdf', 'dfh', 'dsfgs', 0, 1, 'chare@gmail.com', '202cb962ac59075b964b07152d234b70', '', '1'),
(18, 'chatture', 'tech', 'us', '5257425', 0, 1, 'chat@gmail.com', '202cb962ac59075b964b07152d234b70', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `chip_investment_history`
--

CREATE TABLE IF NOT EXISTS `chip_investment_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `chip_count` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `chip_sold`
--

CREATE TABLE IF NOT EXISTS `chip_sold` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `chip_price` varchar(150) NOT NULL,
  `chip_value` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `chip_sold`
--

INSERT INTO `chip_sold` (`id`, `user_id`, `chip_price`, `chip_value`) VALUES
(1, 16, '9.69', '138'),
(2, 16, '9.69', ''),
(3, 16, '140', '2000'),
(4, 16, '160', '2286'),
(5, 16, '', ''),
(6, 16, '', '4'),
(7, 16, '', ''),
(8, 16, '99.69', '1424');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `countryid` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `countryname` varchar(100) NOT NULL,
  `countrycode` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `adddate` date NOT NULL,
  `editdate` date NOT NULL,
  `displayflag` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`countryid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=246 ;

-- --------------------------------------------------------

--
-- Table structure for table `developer`
--

CREATE TABLE IF NOT EXISTS `developer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `region` enum('NORTH/SOUTH AMERICA','ASIA/EUROPE') NOT NULL,
  `organisation` varchar(11) NOT NULL,
  `country` varchar(30) NOT NULL,
  `address` int(200) NOT NULL,
  `pin` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `emailid` varchar(256) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` enum('0','1','','') NOT NULL DEFAULT '1',
  `role` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_id`, `emailid`, `password`, `status`, `role`) VALUES
(1, 6, 'qwrweq', '3ee1ef6a07301b706f8e5269a58f5072', '1', ''),
(2, 8, 'dutt@yahoo.com', '202cb962ac59075b964b07152d234b70', '1', 'user'),
(3, 9, 'dubeymit@gmail.com', '202cb962ac59075b964b07152d234b70', '1', ''),
(4, 10, 'dubeymit@gmail.com', '202cb962ac59075b964b07152d234b70', '1', ''),
(5, 11, '', 'd41d8cd98f00b204e9800998ecf8427e', '1', ''),
(6, 12, 'dddd@ddd.com', '202cb962ac59075b964b07152d234b70', '1', ''),
(7, 13, 'fffffff', 'dce8c1f63dfc752c7502e823763179a9', '1', ''),
(8, 14, 'asfgdsfg', 'ddf697f418874c458bf5c05497c8da04', '1', ''),
(9, 15, 'sdfgds', 'fff2670841c5c3c730c93bbc6a0cc4d6', '1', 'user'),
(10, 16, 'aa@gmail.com', '202cb962ac59075b964b07152d234b70', '1', 'user'),
(11, 5, 'model3@gmail.com', '202cb962ac59075b964b07152d234b70', '1', 'model'),
(12, 6, 'sfssdfs@thg.com', '123', '1', 'model'),
(13, 17, 'chare@gmail.com', '202cb962ac59075b964b07152d234b70', '1', ''),
(14, 17, 'fsdds', '0b8316127ccac428ce0d10d7702bd53b', '1', 'user'),
(15, 18, '', 'd41d8cd98f00b204e9800998ecf8427e', '1', ''),
(16, 18, 'chat@gmail.com', '202cb962ac59075b964b07152d234b70', '1', ''),
(17, 7, 'model@gmail.com', '202cb962ac59075b964b07152d234b70', '1', 'model'),
(18, 8, 'model2@gmail.com', '202cb962ac59075b964b07152d234b70', '1', 'model');

-- --------------------------------------------------------

--
-- Table structure for table `marketing_managers`
--

CREATE TABLE IF NOT EXISTS `marketing_managers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `organisation` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `country` varchar(30) NOT NULL,
  `contact` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE IF NOT EXISTS `models` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chattureId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(15) NOT NULL,
  `interestedIn` varchar(100) NOT NULL,
  `country` varchar(30) NOT NULL,
  `language` varchar(50) NOT NULL,
  `bodyType` varchar(50) NOT NULL,
  `smokingDrinking` enum('yes','no','social','regular','addicted') NOT NULL,
  `bodyDecoration` varchar(200) NOT NULL,
  `aboutMe` text NOT NULL,
  `emailid` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `live_status` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`id`, `chattureId`, `name`, `dob`, `age`, `sex`, `interestedIn`, `country`, `language`, `bodyType`, `smokingDrinking`, `bodyDecoration`, `aboutMe`, `emailid`, `password`, `contact`, `status`, `live_status`) VALUES
(1, 1, 'victo', '2015-11-03', 0, 'sadfa', 'asdf', 'sadf', '', 'sadf', 'yes', 'wefqwer', 'wqerwqrewe', 'email', '', 'sadf', '1', '1'),
(2, 16, 'jess', '2015-11-04', 18, 'sex', 'men', 'england', '', 'slim', 'no', 'good', 'about me', 'email', '', '5454545', '1', '0'),
(3, 16, 'alice', '2015-11-11', 0, 'fdasfs', 'sadfsa', 'asdfas', '', 'dscsa', 'no', 'dfgdg', 'dgfds', 'model@gmail.com', '', 'sadfsa', '1', '0'),
(4, 16, 'lastri', '2015-11-11', 0, 'fdasfs', 'sadfsa', 'asdfas', '', 'dscsa', 'no', 'dfgdg', 'dgfds', 'model@gmail.com', '', 'sadfsa', '1', '0'),
(5, 16, 'marry', '2015-11-11', 0, 'fdasfs', 'sadfsa', 'asdfas', '', 'dscsa', 'no', 'dfgdg', 'dgfds', 'model@gmail.com', '', 'sadfsa', '1', '0'),
(6, 16, 'jarry', '2015-11-10', 0, 'safsa', 'asfdsa', 'asdfsa', '', 'adsa', 'no', 'wefqwer', 'sSA', 'sfssdfs@thg.com', '123', 'sdfsdasa', '1', '0'),
(7, 0, 'lazoy', '2015-11-10', 18, 'fmale', 'men', 'us', '', 'eeee', 'no', 'www', 'wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww', 'model@gmail.com', '202cb962ac59075b964b07152d234b70', '5257425', '1', '1'),
(8, 18, 'mona', '2015-11-03', 18, 'fmale', 'men', 'us', '', 'tyjutu', 'no', 'wqrweqweq', 'wrfwerwqer', 'model2@gmail.com', '202cb962ac59075b964b07152d234b70', '5257425', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `model_chip_earning_history`
--

CREATE TABLE IF NOT EXISTS `model_chip_earning_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `chip_count` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `package_name` varchar(150) NOT NULL,
  `chip_price` varchar(150) NOT NULL,
  `chip_value` varchar(150) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `package_name`, `chip_price`, `chip_value`, `status`) VALUES
(1, 'Basic', '9.69', '138', '1'),
(2, 'Silver', '49.69', '710', '1'),
(3, 'Gold', '99.69', '1424', '1'),
(4, 'Elite ', '149.69', '2138', '1');

-- --------------------------------------------------------

--
-- Table structure for table `payment_distribution`
--

CREATE TABLE IF NOT EXISTS `payment_distribution` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reciever_id` int(11) NOT NULL,
  `receiver_type` enum('bank','model','DEVELOPER (NORTH/SOUTH AMERICA)','DEVELOPER (ASIA/EUROPE)','SALES MARKETING REPS','MARKETING MANAGER/TL','STAKE HOLDERS/PARTNERS') NOT NULL,
  `amount` int(11) NOT NULL,
  `regarding_payment_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `reciever_id` (`reciever_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sale_marketing_reps`
--

CREATE TABLE IF NOT EXISTS `sale_marketing_reps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `level` enum('1','2','3') NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(300) NOT NULL,
  `country` varchar(30) NOT NULL,
  `pin` int(11) NOT NULL,
  `organization` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `age` varchar(20) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `uploadimage` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(200) NOT NULL,
  `availableChips` varchar(11) NOT NULL DEFAULT '0',
  `rank` varchar(11) NOT NULL,
  `countryid` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `interestedIn` varchar(200) NOT NULL,
  `postalcode` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `gender` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `dob`, `age`, `emailid`, `address`, `uploadimage`, `city`, `state`, `availableChips`, `rank`, `countryid`, `contact`, `interestedIn`, `postalcode`, `password`, `status`, `gender`) VALUES
(6, 'qwfewq', 'qwqw', '0-0-0', '', 'qwrweq', 'wqrqw', '', 'wqrwqe', 'wqerqw', '', '', '', 'qwrwqe', 'qwerfwe', 'wqerweq', '3ee1ef6a07301b706f8e5269a58f5072', '0', 'm'),
(7, 'ankush', 'sdfgvs', '3-19-1979', '', 'ankush@gmail.com', 'uuy', '', 'iiio', 'up', '', '', '', 'asdfasfdas', 'asdasfas', '111111', 'ea05ab181dd5b4cb546b317a0b5ce216', '0', 'm'),
(8, 'ankush', 'sharma', '3-19-1993', '', 'dutt@yahoo.com', 'noida', '', 'noida', 'up', '', '', 'india', '98989', 'wwwww', '111111', '202cb962ac59075b964b07152d234b70', '0', 'm'),
(9, 'dutt', 'sharma', '3-2-1995', '', 'dubeymit@gmail.com', 'qwedfq', '', 'wqerw', 'werw', '', '', 'we', '98989', 'wdf', 'wew', '202cb962ac59075b964b07152d234b70', '0', 'm'),
(10, 'jimmy', 'd', '3-4-1996', '', 'dubeymit@gmail.com', 'wewq', '', 'wqew', 'wedrewq', '', '', 'werdweq', '98989', 'wedwed', 'wer', '202cb962ac59075b964b07152d234b70', '0', 'm'),
(12, 'fvdsa', 'cwd', '11-19-0', '', 'dddd@ddd.com', 'cafscdsaf', '168', 'sdafdsa', 'asdfas', '', '', 'asfsda', '98989', 'dcas', 'sdfsda', '202cb962ac59075b964b07152d234b70', '0', 'm'),
(13, 'fvdsa', 'cwd', '11-19-0', '', 'fffffff', 'cafscdsaf', '165', 'sdafdsa', 'asdfas', '', '', 'asfsda', '98989', 'dcas', 'sdfsda', 'dce8c1f63dfc752c7502e823763179a9', '0', 'm'),
(14, 'fvdsa', 'cwd', '11-19-0', '', 'asfgdsfg', 'cafscdsaf', '134', 'sdafdsa', 'asdfas', '', '', 'asfsda', '98989', 'dcas', 'sdfsda', 'ddf697f418874c458bf5c05497c8da04', '0', 'm'),
(15, 'gfdsgf', 'sdgf', '3-1-1997', '', 'sdfgds', 'dsg', '352bg1.gif', 'sdfgds', 'dsfgdsf', '', '', 'dsfgsd', 'dsfgsdf', 'sdgd', 'dfsgdfdfs', 'fff2670841c5c3c730c93bbc6a0cc4d6', '0', 'm'),
(16, 'aaaaa', 'aaa', '2-18-1980', '', 'aa@gmail.com', 'sdca', '424bg1.gif', 'sadfsd', 'sdfsda', '6642', '', 'qwdq', '222', 'cdsa', 'qweq', '202cb962ac59075b964b07152d234b70', '0', 'm'),
(17, 'sdfsa', 'dfsad', '2-18-1981', '', 'fsdds', 'asdfsa', '393bg.gif', 'safdsa', 'sadfsa', '', '', 'safdf', 'asdfsda', 'asfdsa', 'asfdas', '0b8316127ccac428ce0d10d7702bd53b', '0', 'm');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chip_investment_history`
--
ALTER TABLE `chip_investment_history`
  ADD CONSTRAINT `chip_investment_history_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
