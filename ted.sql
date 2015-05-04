-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: May 04, 2015 at 12:24 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ted`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `text` varchar(999) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `ID` int(11) NOT NULL,
  `title` varchar(75) NOT NULL,
  `text` varchar(1024) NOT NULL,
  `imageName` varchar(75) NOT NULL,
  `longlitude` double NOT NULL,
  `latitude` double NOT NULL,
  `slug` varchar(128) NOT NULL,
  `date` date NOT NULL,
  `text_full` varchar(299) NOT NULL,
  `sprekers` varchar(29) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`ID`, `title`, `text`, `imageName`, `longlitude`, `latitude`, `slug`, `date`, `text_full`, `sprekers`) VALUES
(1, 'Bedreigde diersoorten in Europa', 'From connecting mobile gaming with raising funds, to connecting the experience of food with the perception of pain. TEDxUHasselt 2014 speakers have one thing in common: they create breakthrough innovation by making unexpected connections. On Saturday March 29th 2014, speakers from around the world will share innovative ideas in talks of maximum 18 minutes; creating the ultimate brain spa.', 'event1.jpg', 23.5, 34.7, 'hierMoetEenLinkKomen', '2015-06-15', '', ''),
(2, 'heh jij daar', 'ikjslfjzejfiojzioe,fozfio zoiozjdf ioz jiofziofjzpo f uisucjuerhtqljsych,xcnr<=qiohfqàçqzef qz fj', 'event2.jpg', 12.4, 56.3, 'hierMoetEenLinkKomen', '0000-00-00', '', ''),
(3, 'oooh neee', 's vijfqzefi iozef,!ç''jf ziosjfq,fmqjfiosdjioc,qiejiojyrqfcsd,sigiswidjf è!"''tqozf!çet!ç''skjdhgfuieqjs', 'event3.jpg', 45.7, 74.6, 'hierMoetEenLinkKomen', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL,
  `text_full` varchar(999) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`, `text_full`) VALUES
(1, 'Dit is de eerste news post', 'lala', 'Dit is de eerste news post', '');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `comments` varchar(999) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `text`, `user_id`, `comments`) VALUES
(1, 'Dit is de eerste form post', 'lalal', 'Dit is de eerste form post', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `sprekers`
--

CREATE TABLE `sprekers` (
  `Id` int(11) NOT NULL,
  `Naam` varchar(99) NOT NULL,
  `Voornaam` varchar(99) NOT NULL,
  `Functie` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(99) NOT NULL,
  `name` varchar(15) NOT NULL,
  `firstName` varchar(15) NOT NULL,
  `avatar` varchar(999) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `firstName`, `avatar`) VALUES
(1, 'Freek', 'pxl', 'Gielen', 'Freek', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `sprekers`
--
ALTER TABLE `sprekers`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sprekers`
--
ALTER TABLE `sprekers`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
