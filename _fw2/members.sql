-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Sep 09, 2008 at 05:49 PM
-- Server version: 5.0.41
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `pcaframework`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `members`
-- 

CREATE TABLE `members` (
  `ID` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Members Directory' AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `members`
-- 

INSERT INTO `members` (`ID`, `name`, `email`) VALUES 
(1, 'Michael', 'michael@peacockcarter.co.uk'),
(2, 'Richard', 'richard@peacockcarter.co.uk'),
(3, 'Joe Bloggs', ''),
(4, 'John Smith', '');
