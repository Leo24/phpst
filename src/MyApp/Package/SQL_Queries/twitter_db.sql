-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 21, 2015 at 04:11 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.6.15-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `twitter_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_text` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `twitt_id` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment_text`, `user_id`, `twitt_id`, `date`) VALUES
(1, 'Lorem ipsum dolor sit amet, cum adipiscing scribentur te, eam in elitr fabellas. Decore nullam delicatissimi no nam, dolorum tib', 2, 3, '2015-12-11'),
(2, 'putando has. Ut quem dicta debitis vim.', 2, 6, '2015-12-02'),
(3, 'rehensam, at primis disputando has. Ut quem dicta debitis vim.', 4, 5, '2015-12-11'),
(4, 'at mei inimicus vulputate conclusionemque.\r\n\r\nAn nec mentitum consectetuer. Everti voluptua eum in, suscipit recteque ullamcorpe', 4, 4, '2015-12-23'),
(5, 'No nam prima debet urbanitas. Eos sint mnesarchum ad, vim id harum dolores epicurei. Mei agam quando vulputate te, labore aperir', 4, 4, '2015-12-11'),
(6, '\r\nSit ad omnes timeam euismod, mel docendi consectetuer ut. Eum copiosae voluptatibus ad, nibh dolor te quo. Eirmod expetendis a', 6, 2, '2015-12-16'),
(7, 'Lorem ipsum dolor sit amet, cum adipiscing scribentur te, eam in elitr fabellas.Simul cotidieque mei in, eruditi torquatos tinci', 4, 5, '2015-12-19'),
(8, ' at primis disputando has. Ut quem dicta debitis vim.', 5, 6, '2015-12-03'),
(9, 'Lorem ipsum dolor sit amet, cum adipiscing scribentur te, eam in elitr fabellas. Decore nullam delicatissimi no nam, dolorum tib', 3, 4, '2015-12-05'),
(10, 'Lorem ipsum dolor sit amet, cum adipiscing scribentur te, eam in elitr dicta debitis vim.', 3, 5, '2015-12-16'),
(11, 'Lorem ipsum dolor sit amet, cum adipiscing scribentur te, eam in elitr fabellas. Decore nullam delicatissimi no nam, dolorum tib', 3, 6, '2015-12-18');

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE IF NOT EXISTS `followers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `follower_id` int(11) NOT NULL,
  `followed_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `followers`
--

INSERT INTO `followers` (`id`, `user_id`, `follower_id`, `followed_date`) VALUES
(1, 1, 2, '2015-12-02'),
(2, 1, 3, '2015-12-15'),
(3, 1, 5, '2015-12-12'),
(4, 2, 5, '2015-12-23'),
(5, 3, 4, '2015-12-24'),
(6, 4, 2, '2015-12-06'),
(7, 5, 3, '2015-12-10'),
(8, 3, 5, '2015-12-23'),
(9, 1, 4, '2015-12-10'),
(10, 5, 2, '2015-12-03');

-- --------------------------------------------------------

--
-- Table structure for table `twitt`
--

CREATE TABLE IF NOT EXISTS `twitt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(128) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `twitt`
--

INSERT INTO `twitt` (`id`, `content`, `create_date`, `user_id`) VALUES
(1, 'To succeed in our Networked Society, you need to stay on the cutting edge. Subscribe for the latest insights ', '2015-12-11', 1),
(2, 'Зі святом Святого Миколая! Нехай він принесе нам сили і мудрості. Мудрості -вибрати правильну дорогу. Сили -дійти до кінцевої ме', '2015-12-19', 2),
(3, 'Карта на стене в одном из ресторанов Калифорнии. Каждый посетитель отмечает булавкой, откуда он прибыл. ', '2015-12-19', 3),
(4, 'У центрі Києва мітингувальники блокують Сбербанк Росії http://fakty.ictv.ua/ua/index/read-news/id/1570270 … #ICTV #новости #Киев', '2015-12-21', 3),
(5, '\r\nПеречитывать список много раз, восхищаться, какой ты крутой мэн. По вопросам сотрудничества twittershop@yandex.ru\r\n', '2015-12-16', 5),
(6, 'Депутати Британії вимагають ОНН визнати злочини ІДІЛ «геноцидом» http://goo.gl/TcpZje', '2015-12-21', 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `birthdate` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `birthdate`) VALUES
(1, 'Ericsson', 'Smith', '2002-08-23'),
(2, 'Svyatoslav', 'Vakarchuk', '2005-11-03'),
(3, ' Ты не поверишь!', 'Deer', '1987-12-01'),
(4, 'Факти на ICTV', '‏@ICTV_Fakty', '2001-02-08'),
(5, 'Мужской список дел', '@twiasshole', '1952-01-26'),
(6, 'Hromadske.TV', '@HromadskeTV', '2014-12-01');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
