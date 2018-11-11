-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2016 at 01:01 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `10am`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindb`
--

CREATE TABLE IF NOT EXISTS `admindb` (
  `user` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admindb`
--

INSERT INTO `admindb` (`user`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `draft`
--

CREATE TABLE IF NOT EXISTS `draft` (
  `draft_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `attach` varchar(200) NOT NULL,
  `msg` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`draft_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `draft`
--

INSERT INTO `draft` (`draft_id`, `user_id`, `sub`, `attach`, `msg`, `date`) VALUES
(1, 'hema', 'hiiiiiii', 'Winter.jpg', 'hiiiiiiiiiiii', '0000-00-00'),
(2, 'hema', 'my pics', 'Sunset.jpg', 'this is my pics', '0000-00-00'),
(3, 'hema', 'my pics', 'Sunset.jpg', 'this is my pics', '0000-00-00'),
(4, 'hema', 'abhi', 'Water lilies.jpg', 'hhhhhhhhhhhhh', '2013-06-09'),
(5, 'abhishek', 'my resume ', '', 'this is my resume format..........', '2013-06-13'),
(6, 'ajayv', 'dgfg', 'ucadmin.jpg', 'fdfgdfg', '2016-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `imagepath` varchar(200) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`img_id`, `imagepath`) VALUES
(1, 'Winter.jpg'),
(2, 'Winter.jpg'),
(3, 'Blue hills.jpg'),
(4, 'Winter.jpg'),
(5, ''),
(6, 'Winter.jpg'),
(7, 'Winter.jpg'),
(8, 'Winter.jpg'),
(9, 'Winter.jpg'),
(10, 'Sunset.jpg'),
(11, 'Water lilies.jpg'),
(12, 'Sunset.jpg'),
(13, 'Sunset.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `latestupd`
--

CREATE TABLE IF NOT EXISTS `latestupd` (
  `upd_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`upd_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `latestupd`
--

INSERT INTO `latestupd` (`upd_id`, `title`, `content`, `image`, `date`) VALUES
(1, 'resul', 'mca result is declared.....', 'AboutPlugin.dll', '2013-06-13'),
(2, 'resul', 'mca result is declared.....', 'AboutPlugin.dll', '2013-06-13'),
(3, 'resue', 'resume......', 'Winter.jpg', '2013-06-13'),
(10, 'news', 'news herte', 'images (5).jpg', '2016-03-26'),
(11, 'BANGLES...', 'These are the latest designs of bangles available in the store goto www.amazon.com for more details', 'images (1).jpg', '2016-04-02'),
(12, 'LADY', 'This is a womwn wearing a saree', 'anarkhali.jpg', '2016-04-02'),
(13, 'AJAY', 'Looking at the project', 'breath_taking_tropical_beach-wallpaper-2400x1350.jpg', '2016-04-07'),
(14, 'bca', 'cource 2016', '8558659.jpg', '2016-04-17'),
(15, 'BCA', 'COURSE 2016', '8558659.jpg', '2016-04-17'),
(16, 'News', 'look here guys', '66zgojk.jpg', '2016-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE IF NOT EXISTS `mails` (
  `mail_id` int(11) NOT NULL AUTO_INCREMENT,
  `rec_id` varchar(50) NOT NULL,
  `sen_id` varchar(50) NOT NULL,
  `sub` char(50) NOT NULL,
  `msg` text NOT NULL,
  `draft` text NOT NULL,
  `trash` text NOT NULL,
  `attachement` varchar(200) NOT NULL,
  `msgdate` varchar(50) NOT NULL,
  PRIMARY KEY (`mail_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Table structure for table `trash`
--

CREATE TABLE IF NOT EXISTS `trash` (
  `trash_id` int(11) NOT NULL AUTO_INCREMENT,
  `rec_id` varchar(50) NOT NULL,
  `sen_id` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `msg` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`trash_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `trash`
--

INSERT INTO `trash` (`trash_id`, `rec_id`, `sen_id`, `sub`, `msg`, `date`) VALUES
(1, 'hema', 'ravi', 'hello', 'hello prabhat..........', '2015-06-22'),
(2, 'hema', 'hema', 'hhhhh', 'hello ravi', '2015-06-22'),
(3, 'hema', 'ravi', 'hello', 'hello prabhat..........', '2015-06-22'),
(4, 'hema', 'ravi', 'hello', 'hello deep hows you?......', '2015-06-22'),
(5, 'ajayv', 'sunilc', 'fdgdgd', 'zcvzvz', '2016-04-20'),
(6, 'ajayv', 'sunilc', 'kjnnn,m', 'cghfhhghg', '2016-05-15'),
(7, 'ajayv', 'sunilc', 'dfgd', 'dfgdgdgd', '2016-05-15'),
(8, 'ajayv', 'sunilc', 'cvbcvb', 'bvbcbcbv', '2016-05-15'),
(9, 'ajayv', 'sunilc', 'xdfg', 'dfgdfdgf', '2016-05-15'),
(10, 'ajayv', 'sunilc', 'cfv', 'dfbdvcv', '2016-05-16'),
(11, 'ajayv', 'sunilc', 'cxcvx', 'fgdfgd', '2016-05-19'),
(12, 'ajayv', 'sunilc', 'sgsfg', 'bxcvxbcbv', '2016-05-19'),
(13, 'ajayv', 'sunilc', 'xcvxcvxvx', 'xvbvcbcv', '2016-05-19'),
(14, 'ajayv', 'sunilc', 'xbcbcv', 'vbcvb', '2016-05-19'),
(15, 'ajayv', 'sunilc', 'fdfgd', 'fxbvcbvb', '2016-05-19'),
(16, 'ajayv', 'sunilc', 'sdfgdsgdsgf', 'xfbcb', '2016-05-19'),
(17, 'ajayv', 'sunilc', 'dfggd', 'fdgdgfg', '2016-05-19'),
(18, 'ajayv', 'sunilc', 'fdgfdf', 'fgdgdf', '2016-05-19'),
(19, 'ajayv', 'sunilc', 'sdfsgsd', 'fgdgf', '2016-05-19'),
(20, 'ajayv', 'sunilc', 'fgdfgdf', 'fgddf', '2016-05-19'),
(21, 'ajayv', 'sunilc', 'sfgddgf', 'fgdfdg', '2016-05-19'),
(22, 'ajayv', 'ajayv', 'asdsds--msg failed', 'dfdfdfdf', '2016-05-25'),
(23, 'ajayv', 'admin', 'aaa', 'bbb', '2016-05-29'),
(24, 'ajayv', 'admin', 'sdsdsd', 'sddsdsddsds', '2016-05-29'),
(25, 'admin', 'ajayv', 'dfsd', 'dsdfs', '2016-05-29'),
(26, 'admin', 'ajayv', 'asasas', 'sdsddsdsdsdsd', '2016-05-29'),
(27, 'ajayv', 'admin', 'sdsdsd', 'sddsdsddsds', '2016-05-29'),
(28, 'admin', 'ajayv', 'sds', 'scscscsccscsc', '2016-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `user_jd` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` char(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `hobbies` varchar(1000) NOT NULL,
  `dob` date NOT NULL,
  `image` varchar(100) NOT NULL,
  `cstatus` int(11) DEFAULT NULL,
  `vstatus` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_jd`),
  UNIQUE KEY `user_name` (`user_name`,`mobile`,`email`),
  KEY `gender` (`gender`,`dob`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`user_jd`, `user_name`, `password`, `mobile`, `email`, `gender`, `hobbies`, `dob`, `image`, `cstatus`, `vstatus`) VALUES
(1, 'hema', 'hema123', 1234567890, '', 'f', 'reading', '1902-03-04', 'Blue hills.jpg', 0, 0),
(2, 'mehak', 'mehak', 11111, 'mehak@gmail.com', 'f', 'cricket,football', '1917-11-16', '', 0, 0),
(3, 'sanjeev', 'sanjeev', 55578857878, 'sanjeev@yahoo.com', 'm', 'cricket,football', '0000-00-00', '', 1, 1),
(4, 'admin', 'fdf', 0, 'dfdfd@gmail.lcom', 'm', 'cricket', '0000-00-00', '', 0, 2),
(5, 'satish@gmail.com', 'satish', 45444, 'sanjeev@yahoo.com', 'm', 'cricket,football', '1902-04-04', 'Winter.jpg', 1, 1),
(6, 'xyz', 'xyz111', 444444, 'xyz@gmail.com', 'm', 'cricket,football', '1901-04-04', 'Blue hills.jpg', 0, 2),
(7, 'ravi', 'ravi111', 44444444, 'ravi@gmail.com', 'm', 'cricket,football', '1901-03-03', 'Winter.jpg', 0, 2),
(8, 'abhishek', 'abhi', 888888888, 'abhishek@gmail.com', 'm', 'cricket,football', '1915-10-16', 'Sunset.jpg', 0, 2),
(9, 'Aruna', 'abc', 9867554321, 'aruna@gmail.com', 'f', 'cricket', '1988-06-17', 'sub.jpg', 1, 1),
(16, 'rahul.r', 'sajilekha', 3454654576, 'rahulsa@gmail.com', 'm', 'cricket', '1917-10-17', '2799.png', 1, 1),
(11, 'rahul', 'luhar', 2323232323, 'rahul@gmail.com', 'm', 'cricket', '1994-10-16', '1427997180236.jpg', 1, 1),
(12, 'arjun', '123atrjun', 345682901, 'arjun@gmail.com', 'm', 'cricket', '1916-10-17', 'gd.gif', 1, 1),
(13, 'ajayv', 'ajayv', 1235435265, 'ajayv@gmail.com', 'm', 'vra 17 pallimukkhu', '1912-10-29', '66zgojk.jpg', 1, 1),
(14, 'sunilc', 'sunilc', 7656456765, 'sunilc@gmail.com', 'm', 'cricket,football', '1933-10-17', '8558659.jpg', 1, 1),
(15, 'achu', 'q1234', 3456789021, 'add@gmail.com', 'm', 'football', '1913-09-16', '8558659.jpg', 1, 1),
(19, 'rahulsajilekha', 'sajilekha', 9846758948, 'hai@gmail.com', 'm', 'vra 17, vettamukkhu, thirumala po tvm', '1994-10-16', '66zgojk.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `usermail`
--

CREATE TABLE IF NOT EXISTS `usermail` (
  `mail_id` int(11) NOT NULL AUTO_INCREMENT,
  `rec_id` varchar(30) NOT NULL,
  `sen_id` varchar(30) NOT NULL,
  `sub` char(30) NOT NULL,
  `msg` text NOT NULL,
  `attachement` text NOT NULL,
  `recDT` date NOT NULL,
  PRIMARY KEY (`mail_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=132 ;

--
-- Dumping data for table `usermail`
--

INSERT INTO `usermail` (`mail_id`, `rec_id`, `sen_id`, `sub`, `msg`, `attachement`, `recDT`) VALUES
(3, 'ravi', 'ravi', 'welcome--msg failed', 'dljfldjfldj', '', '2013-03-05'),
(4, 'prabhat', 'ravi', 'hiiiii', 'hii prabhat.........', '', '2013-03-06'),
(5, 'prabhat', 'ravi', 'docs', 'project docs.............', '', '2013-03-06'),
(8, 'rahul', 'sunil', 'sas', 'asdasasdasdads', '', '2016-03-26'),
(9, 'rahul', 'sunil', 'pic', 'dfdfdadf', '', '2016-03-26'),
(10, 'rahul', 'sunil', 'sdaf', 'fgdgdf', 'images (14).jpg', '2016-03-26'),
(11, 'rahul', 'sunil', 'sca', 'sdasdsds', 'images (5).jpg', '2016-03-26'),
(12, 'rahul', 'sunil', 'fgdf', 'sfrgdfg', 'lulu.jpg', '2016-03-26'),
(65, '', 'admin', '', '', '', '2016-05-29'),
(66, '', 'admin', '', '', '', '2016-05-29'),
(64, '', 'admin', '', '', '', '2016-05-29'),
(63, '', 'admin', '', '', '', '2016-05-29'),
(62, '', 'admin', '', '', '', '2016-05-29'),
(61, '', 'admin', '', '', '', '2016-05-29'),
(60, '', 'admin', '', '', '', '2016-05-29'),
(59, '', 'admin', '', '', '', '2016-05-29'),
(58, '', 'admin', '', '', '', '2016-05-29'),
(57, '', 'admin', '', '', '', '2016-05-29'),
(103, '', 'admin', '', '', '', '2016-05-29'),
(55, '', 'admin', '', '', '', '2016-05-25'),
(56, '', 'admin', '', '', '', '2016-05-28'),
(52, '', 'admin', '', '', '', '2016-05-25'),
(111, '', 'admin', '', '', '', '2016-05-29'),
(99, '', 'admin', '', '', '', '2016-05-29'),
(102, '', 'admin', '', '', '', '2016-05-29'),
(109, 'sunilc', 'ajayv', 'dsf', 'ghghgh', 'ucmodel.jpg', '2016-05-29'),
(48, '', 'admin', '', '', '', '2016-05-25'),
(33, 'ajayv', 'sunilc', 'fgdfgd', 'fgddfdgfdf', '', '2016-05-08'),
(34, 'ajayv', 'sunilc', 'sdgssdfsdsf', 'gdgfdgfdgfgd', '', '2016-05-08'),
(35, 'ajayv', 'sunilc', 'sdgffgdsg', 'dgfdgfdfgdg', '', '2016-05-08'),
(36, 'ajayv', 'sunilc', 'xcvxcvxvc', 'dfbdcbdvb', '', '2016-05-08'),
(37, 'ajayv', 'sunilc', 'dsdvc', 'cvcxvcx', '', '2016-05-08'),
(38, 'ajayv', 'sunilc', 'sdsdsds', 'ffdffv', '', '2016-05-08'),
(39, 'sunilc', 'sunilc', 'vdfvcvxxcbxbx--msg failed', 'cxcbx', '', '2016-05-08'),
(40, 'ajayv', 'sunilc', 'ffgfgd', 'cxvxcxvc', '', '2016-05-08'),
(41, 'ajayv', 'sunilc', 'dfdfgdfvfvd', 'dfdfvvdf', '', '2016-05-08'),
(42, 'ajayv', 'sunilc', 'csdfvf', 'dsvscvc', '', '2016-05-08'),
(43, 'ajayv', 'sunilc', 'sfdsfdsdf', 'sdfsfsfd', '', '2016-05-08'),
(44, 'ajayv', 'sunilc', 'sfgsdfg', 'sdfsds', '', '2016-05-08'),
(45, 'ajayv', 'sunilc', 'sdf', 'fgee', '', '2016-05-08'),
(68, '', 'admin', '', '', '', '2016-05-29'),
(67, '', 'admin', '', '', '', '2016-05-29'),
(69, '', 'admin', '', '', '', '2016-05-29'),
(70, '', 'admin', '', '', '', '2016-05-29'),
(71, '', 'admin', '', '', '', '2016-05-29'),
(72, '', 'admin', '', '', '', '2016-05-29'),
(73, '', 'admin', '', '', '', '2016-05-29'),
(74, '', 'admin', '', '', '', '2016-05-29'),
(75, '', 'admin', '', '', '', '2016-05-29'),
(76, '', 'admin', '', '', '', '2016-05-29'),
(77, '', 'admin', '', '', '', '2016-05-29'),
(78, '', 'admin', '', '', '', '2016-05-29'),
(79, '', 'admin', '', '', '', '2016-05-29'),
(80, '', 'admin', '', '', '', '2016-05-29'),
(81, '', 'admin', '', '', '', '2016-05-29'),
(82, '', 'admin', '', '', '', '2016-05-29'),
(83, '', 'admin', '', '', '', '2016-05-29'),
(84, '', 'admin', '', '', '', '2016-05-29'),
(85, '', 'admin', '', '', '', '2016-05-29'),
(86, '', 'admin', '', '', '', '2016-05-29'),
(87, '', 'admin', '', '', '', '2016-05-29'),
(88, '', 'admin', '', '', '', '2016-05-29'),
(89, '', 'admin', '', '', '', '2016-05-29'),
(90, '', 'admin', '', '', '', '2016-05-29'),
(91, '', 'admin', '', '', '', '2016-05-29'),
(92, '', 'admin', '', '', '', '2016-05-29'),
(93, '', 'admin', '', '', '', '2016-05-29'),
(94, '', 'admin', '', '', '', '2016-05-29'),
(95, '', 'admin', '', '', '', '2016-05-29'),
(96, '', 'admin', '', '', '', '2016-05-29'),
(97, '', 'admin', '', '', '', '2016-05-29'),
(98, '', 'admin', '', '', '', '2016-05-29'),
(104, '', 'admin', '', '', '', '2016-05-29'),
(105, '', 'admin', '', '', '', '2016-05-29'),
(106, '', 'admin', '', '', '', '2016-05-29'),
(107, '', 'admin', '', '', '', '2016-05-29'),
(108, 'sunilc', 'ajayv', 'asasas', 'asasasaas', 'minusprojects (1).doc', '2016-05-29'),
(110, '', 'admin', '', '', '', '2016-05-29'),
(112, '', 'admin', '', '', '', '2016-05-29'),
(113, '', 'admin', '', '', '', '2016-05-29'),
(114, '', 'admin', '', '', '', '2016-05-30'),
(115, '', 'admin', '', '', '', '2016-05-30'),
(116, '', 'admin', '', '', '', '2016-05-30'),
(117, '', 'admin', '', '', '', '2016-05-30'),
(118, '', 'admin', '', '', '', '2016-05-30'),
(119, '', 'admin', '', '', '', '2016-05-30'),
(120, '', 'admin', '', '', '', '2016-05-30'),
(121, '', 'admin', '', '', '', '2016-05-30'),
(122, '', 'admin', '', '', '', '2016-05-30'),
(123, '', 'admin', '', '', '', '2016-05-30'),
(124, '', 'admin', '', '', '', '2016-05-30'),
(125, '', 'admin', '', '', '', '2016-05-30'),
(126, '', 'admin', '', '', '', '2016-05-30'),
(127, '', 'admin', '', '', '', '2016-05-31'),
(128, '', 'admin', '', '', '', '2016-05-31'),
(129, '', 'admin', '', '', '', '2016-05-31'),
(130, 'admin', 'ajayv', 'request', 'hello', '', '2016-05-31'),
(131, 'admin', 'ajayv', 'transaction', 'hellooo', '', '2016-05-31');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
