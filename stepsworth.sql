-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2019 at 10:15 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stepsworth`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE IF NOT EXISTS `career` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profile` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `status` varchar(25) NOT NULL,
  `experience` varchar(25) NOT NULL,
  `resume` longtext NOT NULL,
  `profiledata` varchar(10) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `profile`, `name`, `email`, `qualification`, `phone`, `status`, `experience`, `resume`, `profiledata`, `date`) VALUES
(7, '3', 'somu', 'shashikalsarwd@gmail.com', 'mca', '7676434468', '2', '18 Years and 18 Months', 'Resume/somu.jpg', '2', '0000-00-00 00:00:00'),
(8, '3', 'somu', 'shashikalsarwd@gmail.com', 'mca', '7353482903', '2', '1 Years and 3 Months', 'Resume/somu.jpeg', '3', '0000-00-00 00:00:00'),
(9, '2', 'shashikala ss', 'shashikalsarwd@gmail.com', 'mca', '9845335134', '4', '17 Years and 20 Months', 'Resume/shas.jpeg', '1', '2019-04-27 11:26:29');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `message` longtext NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `mobile`, `message`, `date`) VALUES
(1, 'shashikala s', '6666666666', 'gvgvhv', '0000-00-00 00:00:00'),
(2, 'shashikala s', '4646434468', 'got this message', '0000-00-00 00:00:00'),
(3, 'shashikala s', '7676434468', 'Message...gggggggg', '0000-00-00 00:00:00'),
(4, '   geeta', '9845335134', 'ghnbcnmbcnmsbcnb bnv ', '0000-00-00 00:00:00'),
(5, 'suma', '[object HTMLI', 'hello i got it..u can check it....', '0000-00-00 00:00:00'),
(6, 'ddd', '5555', 'hbhjb', '0000-00-00 00:00:00'),
(7, 'ggg', '8', 'ggvfgvt', '0000-00-00 00:00:00'),
(8, 'ggg', '8', 'ggvfgvt', '0000-00-00 00:00:00'),
(9, 'shashikala s', '555555', 'mkkkkkkkkkkkkkkk', '0000-00-00 00:00:00'),
(10, 'shashikala s', '555555', 'mkkkkkkkkkkkkkkk', '0000-00-00 00:00:00'),
(11, 'shashikala s', '555555', 'mkkkkkkkkkkkkkkk', '0000-00-00 00:00:00'),
(12, 'shashikala s', '555555', 'mkkkkkkkkkkkkkkk', '0000-00-00 00:00:00'),
(13, 'shashikala s', '555555', 'mkkkkkkkkkkkkkkk', '0000-00-00 00:00:00'),
(14, 'yyy', '5454', 'gvg', '0000-00-00 00:00:00'),
(15, 'tttt', '8', 'hgjh', '0000-00-00 00:00:00'),
(16, '545', '545', '54545', '0000-00-00 00:00:00'),
(17, 'shashikala', '55565', 'bhb', '0000-00-00 00:00:00'),
(18, '45', '5645', '55', '0000-00-00 00:00:00'),
(19, 'shashikala', '44', 'hjbhjb', '0000-00-00 00:00:00'),
(20, 'dd', '333', 'ddd', '0000-00-00 00:00:00'),
(21, '222', '3333333333', 'ssssssssssssssssss', '0000-00-00 00:00:00'),
(22, 'uu', '7777777777', 'bbb', '0000-00-00 00:00:00'),
(23, 'Name', 'Mobile', 'Message...', '0000-00-00 00:00:00'),
(24, 'Name', 'Mobile', 'Message...', '0000-00-00 00:00:00'),
(25, 'Name', 'Mobile', 'Message...', '0000-00-00 00:00:00'),
(26, 'shashikala s', '3333', 'Message...', '0000-00-00 00:00:00'),
(27, 'sss', '3333333333', 'dddddddddd', '0000-00-00 00:00:00'),
(28, 'shashikala s', '6666666666', 'bcvbc', '0000-00-00 00:00:00'),
(29, 'shashikala s', '5555555555', 'bhb', '0000-00-00 00:00:00'),
(30, 'shashikala s', '9845335134', 'hii i got this message', '0000-00-00 00:00:00'),
(31, 'ss', '7676434468', 'ssss', '2019-04-27 02:57:32');
