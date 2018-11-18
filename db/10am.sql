-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2018 at 09:31 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `imagepath` varchar(200) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `latestupd`
--

INSERT INTO `latestupd` (`upd_id`, `title`, `content`, `image`, `date`) VALUES
(17, 'dep', 'qwertyuiop', '66zgojk.jpg', '2018-11-12');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `trash`
--

INSERT INTO `trash` (`trash_id`, `rec_id`, `sen_id`, `sub`, `msg`, `date`) VALUES
(29, 'ajayv', 'sunilc', 'fgdfgd', 'fgddfdgfdf', '2018-11-12'),
(30, 'ajayv', 'sunilc', 'sdgssdfsdsf', 'gdgfdgfdgfgd', '2018-11-12'),
(31, 'ajayv', 'sunilc', 'sdgffgdsg', 'dgfdgfdfgdg', '2018-11-12'),
(32, 'ajayv', 'sunilc', 'xcvxcvxvc', 'dfbdcbdvb', '2018-11-12'),
(33, 'ajayv', 'sunilc', 'dsdvc', 'cvcxvcx', '2018-11-12'),
(34, 'ajayv', 'sunilc', 'sdsdsds', 'ffdffv', '2018-11-12'),
(35, 'ajayv', 'sunilc', 'ffgfgd', 'cxvxcxvc', '2018-11-12'),
(36, 'ajayv', 'sunilc', 'dfdfgdfvfvd', 'dfdfvvdf', '2018-11-12'),
(37, 'ajayv', 'sunilc', 'csdfvf', 'dsvscvc', '2018-11-12'),
(38, 'ajayv', 'sunilc', 'sfdsfdsdf', 'sdfsfsfd', '2018-11-12'),
(39, 'ajayv', 'sunilc', 'sfgsdfg', 'sdfsds', '2018-11-12'),
(40, 'ajayv', 'sunilc', 'sdf', 'fgee', '2018-11-12'),
(41, 'sunilc', 'ajayv', 'asasas', 'asasasaas', '2018-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `user_jd` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(2000) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `cstatus` int(11) DEFAULT NULL,
  `vstatus` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_jd`),
  UNIQUE KEY `user_name` (`user_name`,`mobile`,`email`),
  KEY `gender` (`gender`,`dob`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`user_jd`, `user_name`, `password`, `mobile`, `email`, `gender`, `address`, `dob`, `image`, `cstatus`, `vstatus`) VALUES
(28, 'lgHc978Bqdnpb8Ralbc-cm_NIyfjGhjbk4EHU3zY0QQ', 'lgHc978Bqdnpb8Ralbc-cm_NIyfjGhjbk4EHU3zY0QQ', 'ZwFOssrusqc9G-2O4n2QEibL5HXHGlKBVY7-pwbkOpo', 'z2eciNVEsT_HjNMlGjjx9lQ_2K6-tpFhXPMGeVuEeUQ', 'RrwG--Kai51w2fiGp1K778p45ueEjU5lxVk3b4BDbdc', 'xWq3d-hPrlBl9-BYEP-dKTb2RRSJ7qdAzc7mrEaNEPLO-nN-TbwYeTCgC0aicM87wfeUCJt_0d7gCfTrRWltmQ', 'xCyFtVmJWsvx1RGoHELQds5ZQtl7AG9i_VJO2SX-gSU', '22.jpg', 1, 1),
(13, 'ajayv', 'ajayv', '1235435265', 'ajayv@gmail.com', 'm', 'vra 17 pallimukkhu', '1912-10-29', '66zgojk.jpg', 1, 1),
(14, 'sunilc', 'sunilc', '7656456765', 'sunilc@gmail.com', 'm', 'cricket,football', '1933-10-17', '8558659.jpg', 1, 1),
(27, 'NvPg8w-2yATKP3nL93WSyqJ2XteKYfJEukS5RXmagfw', 'NvPg8w-2yATKP3nL93WSyqJ2XteKYfJEukS5RXmagfw', 'ZwFOssrusqc9G-2O4n2QEibL5HXHGlKBVY7-pwbkOpo', 'URtEk6tT2HOAC1Mq956HrrBKXMMixtAJE-w_FzIzPl8', 'W13VGi0gc76GpPs6642FXByh2JR7FdVvmNl39Yd2uys', 'xWq3d-hPrlBl9-BYEP-dKTb2RRSJ7qdAzc7mrEaNEPLO-nN-TbwYeTCgC0aicM87wfeUCJt_0d7gCfTrRWltmQ', 'DuVL09Vf5qwAJjFVZTuYNKRVjFRzhf8Y4SBXTT2n_PA', '22.jpg', 1, 1);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=145 ;

--
-- Dumping data for table `usermail`
--

INSERT INTO `usermail` (`mail_id`, `rec_id`, `sen_id`, `sub`, `msg`, `attachement`, `recDT`) VALUES
(141, 'NvPg8w-2yATKP3nL93WSyqJ2XteKYf', 'NvPg8w-2yATKP3nL93WSyqJ2XteKYf', 'test1--msg failed', 'testing in process', '22.jpg', '2018-11-17'),
(142, 'raja', 'NvPg8w-2yATKP3nL93WSyqJ2XteKYf', 'test2', 'testing in progress', '22.jpg', '2018-11-17'),
(143, 'lgHc978Bqdnpb8Ralbc-cm_NIyfjGh', 'NvPg8w-2yATKP3nL93WSyqJ2XteKYf', 'ItpCBU2t8Ra8FQOV6iruY5dEvBP4wX', '4dfJbLvB0bMmQa-e38K7_bqRm1Jyu1-aHzf9ihesXkk', '22.jpg', '2018-11-18'),
(144, 'NvPg8w-2yATKP3nL93WSyqJ2XteKYf', 'lgHc978Bqdnpb8Ralbc-cm_NIyfjGh', 'KXS35gMP8Ms4iBYRNsFsYGiG2SYsF5', 'g6vkmvdlgeIrKq7SlwRKl7NjSSER7Ss4cKvPG9IikRs', '', '2018-11-18');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
