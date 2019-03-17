-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2019 at 01:53 PM
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `draft`
--

INSERT INTO `draft` (`draft_id`, `user_id`, `sub`, `attach`, `msg`, `date`) VALUES
(7, 'lgHc978Bqdnpb8Ralbc-cm_NIyfjGhjbk4EHU3zY0QQ', 'GmWwTxcTzbdLtijAMK_jvBkjY1Zbql77keHrapV2ANw', 'epapertechnology-170418124405.pdf', '-4rd2is2iH3OuF4xhgb-6tJEaA8LEBtxDEmL8hsELwF6RzShvTSeA-DGOsQNwk3H3eC2w2LDCrIDVxFIKOCq8Q', '2018-11-19'),
(8, 'NvPg8w-2yATKP3nL93WSyqJ2XteKYfJEukS5RXmagfw', 'lGzYcJmfLanuygC7Cyks5Bh5zVlPeJWFIx2ZSUT2NCk', 'NP_Complete.pdf', '-gEoP9yIAq5gCTlUBg-bjGNxRGEOw8qmsEhSF9nUdbw', '2018-11-19');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `latestupd`
--

INSERT INTO `latestupd` (`upd_id`, `title`, `content`, `image`, `date`) VALUES
(17, 'dep', 'qwertyuiop', '66zgojk.jpg', '2018-11-12'),
(19, 'advertisement', 'advertise', 'about.png', '2018-11-21');

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
  `rec_id` varchar(1000) NOT NULL,
  `sen_id` varchar(1000) NOT NULL,
  `sub` varchar(1000) NOT NULL,
  `msg` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`trash_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `trash`
--

INSERT INTO `trash` (`trash_id`, `rec_id`, `sen_id`, `sub`, `msg`, `date`) VALUES
(2, 'NvPg8w-2yATKP3nL93WSyqJ2XteKYfJEukS5RXmagfw', 'xw_ag5kBnZOk07vnYrXWpVTm-DMxP1gUOQR9fd_ADB8', 'Aq7cPx2419H-E8SouhxdDT8ny20LN2rfjSRWuwwgldE', '40ni1CYM9ksMNA6EhiRoWoXnFO8UPBikSZCBqhiSlj0', '2018-11-21'),
(3, 'lgHc978Bqdnpb8Ralbc-cm_NIyfjGhjbk4EHU3zY0QQ', 'xw_ag5kBnZOk07vnYrXWpVTm-DMxP1gUOQR9fd_ADB8', 'Aq7cPx2419H-E8SouhxdDT8ny20LN2rfjSRWuwwgldE', '40ni1CYM9ksMNA6EhiRoWoXnFO8UPBikSZCBqhiSlj0', '2018-11-21'),
(4, 'NvPg8w-2yATKP3nL93WSyqJ2XteKYfJEukS5RXmagfw', 'lgHc978Bqdnpb8Ralbc-cm_NIyfjGhjbk4EHU3zY0QQ', 'VygSObvCBSiq8helnuotYt_fcZmK8Eg5NX-wI3n9TpI', 'wx4iPM5SHcGwmTSEVo5Xh90IypOAYMMf1NPTXv9EiIY', '2018-11-22');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`user_jd`, `user_name`, `password`, `mobile`, `email`, `gender`, `address`, `dob`, `image`, `cstatus`, `vstatus`) VALUES
(1, 'NvPg8w-2yATKP3nL93WSyqJ2XteKYfJEukS5RXmagfw', 'NvPg8w-2yATKP3nL93WSyqJ2XteKYfJEukS5RXmagfw', 'ZwFOssrusqc9G-2O4n2QEibL5HXHGlKBVY7-pwbkOpo', '454fS_he62KQZbCZ_Kr4bSwDe0TKTXyXUXYpUoBGh_Y', 'W13VGi0gc76GpPs6642FXByh2JR7FdVvmNl39Yd2uys', 'rJAhdFNY7xWZUALNjlZEtg67Vwlx2dn0fPIg9H_np6w', 'xCyFtVmJWsvx1RGoHELQds5ZQtl7AG9i_VJO2SX-gSU', 'Mangum.jpg', 1, 1),
(2, 'lgHc978Bqdnpb8Ralbc-cm_NIyfjGhjbk4EHU3zY0QQ', 'lgHc978Bqdnpb8Ralbc-cm_NIyfjGhjbk4EHU3zY0QQ', 'ZwFOssrusqc9G-2O4n2QEibL5HXHGlKBVY7-pwbkOpo', 'z2eciNVEsT_HjNMlGjjx9lQ_2K6-tpFhXPMGeVuEeUQ', 'RrwG--Kai51w2fiGp1K778p45ueEjU5lxVk3b4BDbdc', 'he_I4dRWvmAshLfGxOZ9J1yXyJCBNl1VKlJ5O8hv6JPlWlkCVd4fjij7d_q4_V2v7recN8n9As9MHAqb-w4duA', 'y2MMsb6TIQCBGVpbCjjhrHWd48OaM6vzzGyD8U3YGV4', 'LCA.jpg', 0, 2),
(3, 'LCmXtIU4pFTgXTQRlgu66SLx0h3dty3eB4TdWiY3A6E', 'LCmXtIU4pFTgXTQRlgu66SLx0h3dty3eB4TdWiY3A6E', 'ZwFOssrusqc9G-2O4n2QEibL5HXHGlKBVY7-pwbkOpo', '2i0cFl73XaG7-Tz52Crz5Iey1K2NsLkFybwjXxt_PGc', 'W13VGi0gc76GpPs6642FXByh2JR7FdVvmNl39Yd2uys', 'he_I4dRWvmAshLfGxOZ9J1yXyJCBNl1VKlJ5O8hv6JPlWlkCVd4fjij7d_q4_V2v7recN8n9As9MHAqb-w4duA', 'ic5XkDU6Z63C0eUXPVqdGYlx64G9EXet3R7ypouyDa0', 'Mangum.jpg', 1, 1),
(4, '3GdJC71M1Cbeq5oFIh74w9SAaZxazmlV1w_u2DZuCnA', '3GdJC71M1Cbeq5oFIh74w9SAaZxazmlV1w_u2DZuCnA', 'hsPJeDqrRoMX9Wu4DmYs7H2WubzvdEhi_m_R-6wKhZo', 'aYiebqObHSs9q2wjNVBIJI7Tn7Z_-LiF_iY0jmS_zhM', 'W13VGi0gc76GpPs6642FXByh2JR7FdVvmNl39Yd2uys', 'I0GLOtukAHVglqB4OyQqsiHKR6m8lEhBV2XGX7rxhyY', 'U55MdaVwUdVldk3En3rz1y9DbFsxS2tOGl0VSqrawwY', '', 1, 1),
(5, 'A4dzcAIstrSzPlrWqNIB4VRRChFwRH-gC_Aj2LoU2ZI', 'A4dzcAIstrSzPlrWqNIB4VRRChFwRH-gC_Aj2LoU2ZI', 'LvJCbPOqry1oQHaP_Zt-x_B7r3BADnFmpdM8uWRewQs', 'NlRNRBNhSDH4dxzyEQu0RYW1OcFH4ghN2UROX3tOszQ', 'RrwG--Kai51w2fiGp1K778p45ueEjU5lxVk3b4BDbdc', 'H78_Q4LIcu7ZzoXine4VpuGajRaDSAvgoXuxTmbM6ZM', 'nB8In1REqkQjDQqk40rCdeteiMNV4ctxPgbonmP5UeI', 'Mangum.jpg', 1, 1),
(6, 'jUn3pJ-CAjPkYdXvpYiUUVk1mV-APzAPeZyNsCSXJRM', 'jUn3pJ-CAjPkYdXvpYiUUVk1mV-APzAPeZyNsCSXJRM', 'pXE0MApQ9KzSdJXxYX6zWBUtlHZudgewq9chJ7oCMEk', '63CUz50TH09mIAUcqBN3J_BICRY80eJyCN5snNvJ-zc', 'RrwG--Kai51w2fiGp1K778p45ueEjU5lxVk3b4BDbdc', 'he_I4dRWvmAshLfGxOZ9J1yXyJCBNl1VKlJ5O8hv6JPhr6MhO7Yb66o6Vyf6R99TAffUTZI_6WrTqHZ9WmrF-g', '9YsW_ne4omqmtmGB_d3261NcbQx-AhU5HaRE6w-dl7U', 'img_avatar2.png', 1, 1),
(8, 'yiqobCYKNuafQ_t4UpR4HTYgCXQ6KGviW6lAgQE3rHs', 'yiqobCYKNuafQ_t4UpR4HTYgCXQ6KGviW6lAgQE3rHs', 'k1IVusL5VRXMm8cKLd9LUZzBT38UDbANUYLgSvDL5cU', 'Dcv1yknDYHBV_x7hlzaGl-5dWsUBvtlR1hHBdxc9Lqo', 'W13VGi0gc76GpPs6642FXByh2JR7FdVvmNl39Yd2uys', 'he_I4dRWvmAshLfGxOZ9J1yXyJCBNl1VKlJ5O8hv6JPlWlkCVd4fjij7d_q4_V2v7recN8n9As9MHAqb-w4duA', 'kLICIT73QhJ58CgzfJk9YVvSkH4-D0_QfDXrNNZyxXw', 'img_avatar2.png', 0, 0),
(9, '7e22hPI7YX9au-nJY54QOqAt4FxYoJ7nQmH6ffAD3p8', '7e22hPI7YX9au-nJY54QOqAt4FxYoJ7nQmH6ffAD3p8', 'ZwFOssrusqc9G-2O4n2QEibL5HXHGlKBVY7-pwbkOpo', 'E3xCWLfc9UXbJ0aq8VVma-p2RNWbZAeaLXjzbc408dw', 'RrwG--Kai51w2fiGp1K778p45ueEjU5lxVk3b4BDbdc', 'he_I4dRWvmAshLfGxOZ9J1yXyJCBNl1VKlJ5O8hv6JPlWlkCVd4fjij7d_q4_V2v7recN8n9As9MHAqb-w4duA', 'A1nMpz2z-WwF7uSQkJM1XfRwaMph2kxuIWhOLDF3Mt4', 'img_avatar2.png', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `usermail`
--

CREATE TABLE IF NOT EXISTS `usermail` (
  `mail_id` int(11) NOT NULL AUTO_INCREMENT,
  `rec_id` varchar(3000) NOT NULL,
  `sen_id` varchar(3000) NOT NULL,
  `sub` varchar(3000) NOT NULL,
  `msg` varchar(3000) NOT NULL,
  `attachement` text NOT NULL,
  `recDT` date NOT NULL,
  PRIMARY KEY (`mail_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `usermail`
--

INSERT INTO `usermail` (`mail_id`, `rec_id`, `sen_id`, `sub`, `msg`, `attachement`, `recDT`) VALUES
(12, '3GdJC71M1Cbeq5oFIh74w9SAaZxazmlV1w_u2DZuCnA', 'A4dzcAIstrSzPlrWqNIB4VRRChFwRH-gC_Aj2LoU2ZI', 'RnxncHqkOlLgsDna5baDCPENwkZYWRTnNeH7xGUPeZE', 'CqPprEE9jDEeSJYK67IfXAZkJckyfwYmHVM5NI00R3M', '', '2018-11-21'),
(13, '3GdJC71M1Cbeq5oFIh74w9SAaZxazmlV1w_u2DZuCnA', 'xw_ag5kBnZOk07vnYrXWpVTm-DMxP1gUOQR9fd_ADB8', 'gPXY78Pgdg4ffCe-Ie-Cw3KS6TNyU4_SYndGcT2xmy4', 'jijHVDyWP1o21KbLqGWyupqYL5kghN7Q9lSpeUgn75Q', '', '2018-11-21'),
(10, 'lgHc978Bqdnpb8Ralbc-cm_NIyfjGhjbk4EHU3zY0QQ', 'NvPg8w-2yATKP3nL93WSyqJ2XteKYfJEukS5RXmagfw', 'g0RhkLm3JqtY87nglHZspVian7qQj_cckdZwAUl6y8o', 'SBfI6m5IkN1k2wpEh27zJbiYAdywUJMQeEEJPzZ5CTc', '', '2018-11-19'),
(11, 'lgHc978Bqdnpb8Ralbc-cm_NIyfjGhjbk4EHU3zY0QQ', 'NvPg8w-2yATKP3nL93WSyqJ2XteKYfJEukS5RXmagfw', 'g0RhkLm3JqtY87nglHZspVian7qQj_cckdZwAUl6y8o', 'SBfI6m5IkN1k2wpEh27zJbiYAdywUJMQeEEJPzZ5CTc', '', '2018-11-19'),
(7, 'LCmXtIU4pFTgXTQRlgu66SLx0h3dty3eB4TdWiY3A6E', 'lgHc978Bqdnpb8Ralbc-cm_NIyfjGhjbk4EHU3zY0QQ', 'lGzYcJmfLanuygC7Cyks5Bh5zVlPeJWFIx2ZSUT2NCk', '-4rd2is2iH3OuF4xhgb-6tJEaA8LEBtxDEmL8hsELwFFlkzXjZiluvGPGHV7QrVpRMtEH_mZsImYJnQIYDgcUg', 'NP_Complete.pdf', '2018-11-19'),
(17, 'NvPg8w-2yATKP3nL93WSyqJ2XteKYfJEukS5RXmagfw', 'xw_ag5kBnZOk07vnYrXWpVTm-DMxP1gUOQR9fd_ADB8', 'RnxncHqkOlLgsDna5baDCPENwkZYWRTnNeH7xGUPeZE', 'mkYmRYl4onDBmx9q3DJzuA2qADDNpymWlENcNTtLzY8', '', '2018-11-22');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
