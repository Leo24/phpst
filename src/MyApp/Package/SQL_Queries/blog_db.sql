-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 21, 2015 at 01:18 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.6.15-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `content` text,
  `status` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `name`, `publish_date`, `content`, `status`) VALUES
(1, 'First post', '2015-12-21', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'published'),
(2, 'Second Post', '2015-12-22', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'published'),
(3, 'Third Post', '2015-12-03', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'published'),
(4, 'Fourth POst', '2015-12-26', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'published'),
(5, 'Blog English (GB) Sample Data', '2015-12-09', 'Installing the blog sample data, Joomla 3.0 will look like a blog right from the start.\r\n\r\nYour homepage will list a few sample posts using the blog layout style in the main content area, and in the right sidebar you''ll see typical blog modules such as Older Posts, Blog Roll, and a Most Read Posts section.\r\n\r\nAt the top of the content section you will see it automatically installs a module containing a picture banner, handy if you want to have a banner module at the top of your pages.', 'published'),
(6, 'Brochure English (GB) Sample Data', '2015-12-16', 'The brochure sample data sets up Joomla like a sample brochure type website.\r\n\r\nWhat this means is that your homepage will show only one article.\r\nYour sidebar will show an informational module, and there will also be a login form as well.\r\n\r\nThis is usually used for small websites with little content  for advertising services or specialised products.', 'unpublished'),
(7, 'Default English (GB) Sample Data', '2015-12-24', 'The default English sample data looks much like the brochure sample data. The major difference, at least from simply looking at the pages, is that the sidebar contains a Latest Articles module instead of a simple text module.', 'unpublished'),
(8, 'Learn Joomla English (GB) Sample Data', '2015-12-17', 'When you install the learn joomla sample data, the sample data installed includes articles that explain how Joomla 3.0 works. This looks much like earlier versions of Joomla. The homepage includes articles about beginners, up-graders, and professional Joomla users. The sidebar includes links that go to articles about the Joomla! Project and the Joomla! Community.', 'published'),
(9, 'What is Data Visualization?', '2015-12-04', 'Data visualization refers to representing data in a visual context, like a chart or a map, to help people understand the significance of that data.\r\n\r\nWhereas data in text form can be really confusing (not to mention bland), data represented in a visual format helps people extract meaning from that data much more quickly and easily. You can expose patterns, trends, and correlations that may otherwise go undetected.\r\n\r\nData visualization can be static or interactive. For centuries, people have been using static data visualization like charts and maps. Interactive data visualization is a little bit newer: It lets people drill down into the dirty details of these charts and graphs using their computers and mobile devices, and then interactively change which data they see and how it''s processed.\r\n\r\nReady to feel inspired? Let''s take a look at some great examples of interactive and static data visualization.', 'published'),
(10, 'Examples of Interactive Data Visualization ', '2015-12-26', '1) Why Buses Bunch\r\n\r\nHere''s a wonderful example of a complex data set boiled down into what that looks and feels like a game. In this visualization, the folks at Setosa are showing how "bus bunching" happens, i.e. when a bus gets delayed and later causes multiple buses to arrive at a single stop at the same time.\r\n\r\nTelling this story in numbers alone would be pretty difficult, but instead, they turn it into an interactive game. While the buses rotate along a route, we can click and hold a button to delay a bus. Then, all we have to do is watch to see how even a short delay causes the buses to bunch together after a time.\r\n\r\nwhy-buses-bunch.png\r\n2) Languages in the World\r\n\r\nThis interactive by DensityDesign does an impressive job of introducing the non-linguist (aka most of us) to the many world languages. All 2,678 of them.\r\n\r\nThis piece allows you to explore common languages families, see which languages are most spoken, and view where languages are spoken around the world. This is great visual storytelling: taking an in-depth subject and breaking it down in an easy-to-understand way. \r\n\r\nlanguages-in-the-world.png\r\n3) Percent of U.S. Population by Age Group\r\n\r\nThis is a strong example of how to present a single data set in a compelling way. Pew Research created this animated GIF composite to show shifts in population demographics over time. It’s a great way to tell a larger story in a neat package.\r\n\r\nPlus, this type of micro-content is easy to share on social or embed in blogs, extending the content’s reach. If you want to make a GIF of your own using Photoshop, here''s a step-by-step tutorial.', 'published'),
(11, '16 Captivating Data Visualization Examples', '2015-12-16', 'Data can be very powerful. If you can actually understand what it''s telling you, that is.\r\n\r\nIt''s not easy to get clear takeaways by looking at a slew of numbers and stats. You''ve got to have the data presented in a logical, easy-to-understand way.\r\n\r\nEnter data visualization. The human brain processes visual information better than it processes text -- so using charts, graphs, and design elements, data visualization can help you explain trends and stats much more easily.\r\n\r\nBut not all data visualization is created equal. (Just check out “Why Most People’s Charts and Graphs Look Like Crap” to see what I mean.)\r\n\r\nSo, how do organize data in a way that''s both compelling and easy to digest? Get inspired by the following 16 examples of data visualization that communicate interesting information with both style and substance.', 'unpublished'),
(12, 'Sample datasets for benchmarking and testing', '2015-12-31', 'Sometimes you just need some data to test and stress things. But randomly generated data is awful — it doesn’t have realistic distributions, and it isn’t easy to understand whether your results are meaningful and correct. Real or quasi-real data is best. Whether you’re looking for a couple of megabytes or many terabytes, the following sources of data might help you benchmark and test under more realistic conditions.\r\n\r\n    The venerable sakila test database: small, fake database of movies.\r\n    The employees test database: small, fake database of employees.\r\n    The Wikipedia page-view statistics database: large, real website traffic data.\r\n    The IMDB database: moderately large, real database of movies.\r\n    The FlightStats database: flight on-time arrival data, easy to import into MySQL.\r\n    The Bureau of Transportation Statistics: airline on-time data, downloadable in customizable ways.\r\n    The airline on-time performance and causes of delays data from data.gov: ditto.\r\n    The statistical review of world energy from British Petroleum: real data about our energy usage.\r\n    The Amazon AWS Public Data Sets: a large variety of data such as the mapping of the Human Genome and the US Census data.\r\n    The Weather Underground weather data: customize and download as CSV files.\r\n\r\nPost your favorites in the comments!', 'unpublished'),
(13, 'About Percona', '2015-12-30', 'Percona is the only company that delivers enterprise-class software, support, consulting and managed services solutions for both MySQL® and MongoDB® across traditional and cloud-based platforms that maximize application performance while streamlining database efficiencies. Our global 24x7x365 consulting team has worked with over 3,000 clients worldwide, including the largest companies on the Internet, who use MySQL, Percona Server, Amazon® RDS for MySQL, MariaDB® and MongoDB.', 'published'),
(14, 'Percona Technical Webinars\r\n', '2015-12-12', 'Percona offers free webinars about MySQL®, MongoDB®, and Percona open source software. Webinar topics include DBA and operational best practices such as configuration, migration, backup and recovery, performance, query tuning, replication, database architecture, big data, OpenStack/Cloud solutions, hybrid environments, security, and much, much more. ', 'published');

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

CREATE TABLE IF NOT EXISTS `post_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `post_tags`
--

INSERT INTO `post_tags` (`id`, `post_id`, `tag_id`) VALUES
(1, 1, 12),
(2, 2, 11),
(3, 3, 10),
(4, 4, 9),
(5, 5, 8),
(6, 6, 7),
(7, 7, 6),
(8, 8, 5),
(9, 9, 4),
(10, 10, 3),
(11, 11, 2),
(12, 12, 1),
(13, 1, 9),
(14, 5, 8),
(15, 12, 4),
(16, 3, 5),
(17, 4, 8),
(18, 9, 3),
(19, 7, 10),
(20, 10, 6),
(21, 4, 6),
(22, 5, 6),
(23, 4, 2),
(24, 12, 23);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`) VALUES
(1, 'Lviv'),
(2, 'world'),
(3, 'wow'),
(4, 'style'),
(5, 'selfie'),
(6, 'instagram'),
(7, 'instaphoto'),
(8, 'journey'),
(9, 'travel'),
(10, 'ukraine'),
(11, 'photo'),
(12, 'photomafia'),
(13, 'cherkassy'),
(14, 'uman'),
(15, 'chygyryn'),
(16, 'odessa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
