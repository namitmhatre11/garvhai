-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2016 at 08:05 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.18-1+deb.sury.org~precise+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `codeignitor`
--

-- --------------------------------------------------------

--
-- Table structure for table `garvhai_adminuser`
--

CREATE TABLE IF NOT EXISTS `garvhai_adminuser` (
  `admin_user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_role` int(5) NOT NULL,
  `user_status` tinyint(1) NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`admin_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `garvhai_adminuser`
--

INSERT INTO `garvhai_adminuser` (`admin_user_id`, `user_name`, `user_email`, `user_pass`, `user_role`, `user_status`, `created_date`) VALUES
(1, 'Admin', 'admin@hilux.com', '0192023a7bbd73250516f069df18b500', 1, 1, '2015-08-16 17:42:53');

-- --------------------------------------------------------

--
-- Table structure for table `garvhai_players`
--

CREATE TABLE IF NOT EXISTS `garvhai_players` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `profile_photo` varchar(255) NOT NULL,
  `contest` varchar(500) NOT NULL,
  `championship` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `garvhai_players`
--

INSERT INTO `garvhai_players` (`id`, `name`, `profile_photo`, `contest`, `championship`) VALUES
(1, 'Namit', '10360243_10201175153259060_796972224872714011_n1.jpg', '<ul>\r\n	<li>Hi</li>\r\n	<li>Hello</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Bye</li>\r\n</ul>\r\n'),
(2, 'Pratiksha', '0', '', ''),
(3, 'Amol', '0', '', ''),
(4, 'Priyanka', '0', '', ''),
(5, 'Mit', '0', '', ''),
(6, 'Dipashree', '0', '', ''),
(8, 'Dipashree', '659', '', ''),
(9, 'Dipashree', 'ninja1.jpg', '', ''),
(10, 'Dipashree', 'fido.jpg', '', ''),
(12, 'Dipashree', 'fido1.jpg', '', ''),
(13, 'Aryan Sanjay Pawashe', 'ninja11.jpg', '<ul>\r\n	<li>Wimbeldon</li>\r\n	<li>Australian Open</li>\r\n	<li>Chennai Open</li>\r\n	<li>US Open</li>\r\n	<li>French Open</li>\r\n	<li>Dubai Open</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Olympics</li>\r\n	<li>Wimbledon</li>\r\n	<li>Grand slam</li>\r\n</ul>\r\n'),
(14, 'sdfsdf', '659_17.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `garvhai_players_media`
--

CREATE TABLE IF NOT EXISTS `garvhai_players_media` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `player_id` int(10) NOT NULL,
  `type` char(10) NOT NULL COMMENT 'image/video/social',
  `media_value` varchar(500) NOT NULL COMMENT 'title',
  `link` varchar(255) NOT NULL,
  `published_date` date NOT NULL,
  `description` varchar(1000) NOT NULL,
  `video_title` varchar(255) NOT NULL,
  `video_thumbnail` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `garvhai_players_media`
--

INSERT INTO `garvhai_players_media` (`id`, `player_id`, `type`, `media_value`, `link`, `published_date`, `description`, `video_title`, `video_thumbnail`, `timestamp`) VALUES
(3, 13, 'social', 'fido12.jpg', '', '0000-00-00', '', '', '', '2016-05-11 12:42:34'),
(4, 13, 'social', 'fido12.jpg', '', '0000-00-00', '', '', '', '2016-05-11 12:42:34'),
(5, 13, 'social', 'fido12.jpg', '', '0000-00-00', '', '', '', '2016-05-11 12:42:34'),
(7, 13, 'image', 'fido18.jpg', '', '0000-00-00', '', '', '', '2016-05-11 12:48:32'),
(8, 13, 'image', 'android-mobicon-150x1501.png', '', '0000-00-00', '', '', '', '2016-05-11 12:48:32'),
(10, 13, 'social', 'android-mobicon-150x1501.png', '', '0000-00-00', '', '', '', '2016-05-11 12:48:32'),
(11, 13, 'social', 'android-mobicon-150x1501.png', '', '0000-00-00', '', '', '', '2016-05-11 12:48:32'),
(12, 13, 'image', 'ninja26.jpg', '', '0000-00-00', '', '', '', '2016-05-11 12:49:18'),
(13, 13, 'image', 'fido19.jpg', '', '0000-00-00', '', '', '', '2016-05-11 12:49:18'),
(14, 13, 'image', 'android-mobicon-150x1502.png', '', '0000-00-00', '', '', '', '2016-05-11 12:49:18'),
(16, 13, 'social', 'Testing for social news', '', '0000-00-00', '', '', '', '2016-05-11 12:49:18'),
(17, 13, 'social', 'Testing for social news', '', '0000-00-00', '', '', '', '2016-05-11 12:49:18'),
(18, 13, 'image', 'ninja28.jpg', '', '0000-00-00', '', '', '', '2016-05-11 12:51:37'),
(19, 13, 'image', 'fido21.jpg', '', '0000-00-00', '', '', '', '2016-05-11 12:51:37'),
(20, 13, 'image', 'android-mobicon-150x1504.png', '', '0000-00-00', '', '', '', '2016-05-11 12:51:37'),
(22, 13, 'social', 'Testing for social news', '', '0000-00-00', '', '', '', '2016-05-11 12:51:37'),
(23, 13, 'image', 'ninja29.jpg', '', '0000-00-00', '', '', '', '2016-05-11 13:18:46'),
(24, 13, 'image', 'fido22.jpg', '', '0000-00-00', '', '', '', '2016-05-11 13:18:46'),
(25, 13, 'image', 'android-mobicon-150x1505.png', '', '0000-00-00', '', '', '', '2016-05-11 13:18:47'),
(27, 13, 'social', 'Testing for social news', '', '0000-00-00', '', '', '', '2016-05-11 13:18:47'),
(28, 13, 'image', 'ninja30.jpg', '', '0000-00-00', '', '', '', '2016-05-11 13:30:58'),
(29, 13, 'image', 'fido23.jpg', '', '0000-00-00', '', '', '', '2016-05-11 13:30:58'),
(30, 13, 'image', 'android-mobicon-150x1506.png', '', '0000-00-00', '', '', '', '2016-05-11 13:30:58'),
(32, 13, 'social', 'Testing for social news', '', '0000-00-00', '', '', '', '2016-05-11 13:30:58'),
(33, 13, 'image', 'ninja31.jpg', '', '0000-00-00', '', '', '', '2016-05-11 13:31:46'),
(34, 13, 'image', 'fido24.jpg', '', '0000-00-00', '', '', '', '2016-05-11 13:31:46'),
(35, 13, 'image', 'android-mobicon-150x1507.png', '', '0000-00-00', '', '', '', '2016-05-11 13:31:46'),
(37, 13, 'social', 'Testing for social news', '', '0000-00-00', '', '', '', '2016-05-11 13:31:46'),
(38, 13, 'image', 'Vserv-online-shopping-Mobile-apps-and-sites-featured.png', '', '0000-00-00', '', '', '', '2016-05-11 13:33:23'),
(40, 13, 'social', 'Testing for social news', '', '0000-00-00', '', '', '', '2016-05-11 13:33:23'),
(41, 13, 'image', 'HPCMS-8677-EC4.png', '', '0000-00-00', '', '', '', '2016-05-11 13:50:48'),
(43, 13, 'social', 'Testing for social news', '', '0000-00-00', '', '', '', '2016-05-11 13:50:48'),
(44, 13, 'image', 'HPCMS-8677-EC41.png', '', '0000-00-00', '', '', '', '2016-05-11 13:51:31'),
(45, 13, 'video', 'https://youtu.be/eZ_IOp638kQ', '', '0000-00-00', '', '', '', '2016-05-11 13:51:32'),
(46, 13, 'social', 'Testing for social news', '', '0000-00-00', '', '', '', '2016-05-11 13:51:32'),
(47, 13, 'image', 'fido25.jpg', '', '0000-00-00', '', '', '', '2016-05-12 09:00:00'),
(48, 13, 'video', '<iframe width="560" height="315" src="https://www.youtube.com/embed/I_GynscynmQ" frameborder="0" allowfullscreen></iframe>', '', '0000-00-00', '', 'Comedy Speech By Dimple Yadav, Wife Of Akhilesh Yadav !', 'ninja31.jpg', '2016-05-12 09:00:00'),
(49, 13, 'social', 'sdfdsdsfd', '', '0000-00-00', '', '', '', '2016-05-12 09:00:00'),
(50, 1, '', '<iframe width="420" height="315" src="https://www.youtube.com/embed/eL5Ei9-HNXQ" frameborder="0" allowfullscreen></iframe>', '', '0000-00-00', '', 'dsgdfgdfg', 'birthday56.jpg', '2016-05-12 11:13:48'),
(51, 1, 'video', 'https://youtu.be/X-SfKUoLv9g', '', '0000-00-00', '', '2016 Kawasaki ZX-10R takes on superbike rivals| Group Tests | Motorcyclenews.com', 'MrToan_WinStore-md2kg2s5b5vsx5iq0c44j6g4t911n0qmg5x9rfbfui.jpg', '2016-05-12 11:23:26'),
(52, 1, 'video', 'https://youtu.be/X-SfKUoLv9g', '', '0000-00-00', '', '2016 Kawasaki ZX-10R takes on superbike rivals| Group Tests | Motorcyclenews.com', 'birthday57.jpg', '2016-05-12 11:24:34'),
(53, 2, 'video', 'https://youtu.be/X-SfKUoLv9g', '', '0000-00-00', '', '2016 Kawasaki ZX-10R takes on superbike rivals| Group Tests | Motorcyclenews.com', 'birthday510.jpg', '2016-05-12 11:26:17'),
(54, 2, 'video', 'https://youtu.be/X-SfKUoLv9g', '', '0000-00-00', '', '2016 Kawasaki ZX-10R takes on superbike rivals| Group Tests | Motorcyclenews.com', 'birthday511.jpg', '2016-05-12 11:27:26'),
(55, 3, 'video', 'https://youtu.be/-zEfN8koucU', '', '0000-00-00', '', 'Top 10 Fastest bikes In The World 2016', 'Vserv-online-shopping-Mobile-apps-and-sites-featured1.png', '2016-05-12 11:31:45'),
(56, 2, 'image', 'MCG1.jpg', '', '0000-00-00', '', '', '', '2016-05-12 12:28:43'),
(57, 2, 'image', 'birthday512.jpg', '', '0000-00-00', '', '', '', '2016-05-12 12:30:40'),
(58, 2, 'image', '659_174.jpg', '', '0000-00-00', '', '', '', '2016-05-12 12:38:19'),
(59, 2, 'image', '659_175.jpg', '', '0000-00-00', '', '', '', '2016-05-12 12:41:30'),
(60, 2, 'image', '10360243_10201175153259060_796972224872714011_n.jpg', '', '0000-00-00', '', '', '', '2016-05-12 12:43:09'),
(62, 1, 'social', 'Plane Flies Across The Pacific Using Only Solar Power', 'http://127.0.0.1/cg/index.php/news/plane-flies-across-the-pacific-using-only-solar-power', '2016-04-13', '<p>A solar-powered plane has completed a three-day nonstop flight across the Pacific Ocean without a single drop of fuel, marking a major milestone for innovations in renewable energy. Bertrand Piccard landed the single-pilot plane, Solar Impulse 2, in Mountain View, California, on Saturday night after taking off from Hawaii 62 hours prior. Since setting off from Abu Dhabi in March 2015, Piccard and fellow pilot Andre Borschberg have taken turns flying the plane as part of their mission to fly it around the world.</p>\r\n', '', '', '2016-05-12 13:37:12'),
(64, 1, 'social', 'SC Wonders Why Subrata Roy Spent Two Years In Jail When Dues Only A Fraction Of Assets', 'http://www.huffingtonpost.in/2016/05/12/sc_1_n_9926968.html?utm_hp_ref=india', '2016-05-12', '<p>In a breather to Subrata Roy the supreme court on Wednesday extended his parole but also said that it was &lsquo;surprised&rsquo; as to why a rich person like the Sahara chief himself did not part with a fraction of his wealth to pay the dues but rather chose to spend two years in jail.</p>\r\n\r\n<p>The apex court made the observation while extending Roy&rsquo;s parole till July 11 to enable him to deposit Rs 200 crore with market regulator Securities and Exchange Board of India (SEBI). Roy has been in Tihar jail since March 4, 2014 on the orders of the apex court in relation to a long running dispute with market regulator SEBI.</p>\r\n\r\n<p>The bench, which gave relief to Roy, noted that the fresh list of properties provided in the sealed cover speaks that &quot;value of your properties was far more than your liability&quot;.</p>\r\n', '', '', '2016-05-12 13:55:30'),
(65, 1, 'image', '10360243_10201175153259060_796972224872714011_n2.jpg', '', '0000-00-00', '', '', '', '2016-05-12 13:57:37');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`) VALUES
(1, 'PM Modi visits Brussele', 'pm', 'PM Modi visits Brussele, after terror attack on brussele in March'),
(2, 'IPL starts', 'ipl', 'IPL starts on arpil, 7th'),
(3, 'Plane Flies Across The Pacific Using Only Solar Power', 'plane-flies-across-the-pacific-using-only-solar-power', 'A solar-powered plane has completed a three-day nonstop flight across the Pacific Ocean without a single drop of fuel, marking a major milestone for innovations in renewable energy.\r\n\r\nBertrand Piccard landed the single-pilot plane, Solar Impulse 2, in Mountain View, California, on Saturday night after taking off from Hawaii 62 hours prior. Since setting off from Abu Dhabi in March 2015, Piccard and fellow pilot Andre Borschberg have taken turns flying the plane as part of their mission to fly it around the world. '),
(4, 'testing ckeditor', 'testing-ckeditor', '<p>This is my textarea to be replaced with CKEditor.</p>\n\n<ul>\n	<li>how&#39;s that?</li>\n	<li>:P</li>\n	<li>;)</li>\n	<li>:D</li>\n</ul>\n'),
(5, 'table', 'table', '<table align="left" border="1" cellpadding="1" cellspacing="0" style="width:500px">\r\n	<thead>\r\n		<tr>\r\n			<th scope="col">\r\n			<p>Olympic Qualifying Standards</p>\r\n			</th>\r\n			<th scope="col">Olympic Qualifying Throw</th>\r\n			<th scope="col">Personal Best</th>\r\n			<th scope="col">Recent Training</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>20.50M</td>\r\n			<td>20.65M</td>\r\n			<td>20.65M</td>\r\n			<td>Focusing On Strength Training</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
