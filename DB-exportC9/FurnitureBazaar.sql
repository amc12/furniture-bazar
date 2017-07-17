-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2017 at 12:46 PM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `FurnitureBazaar`
--

-- --------------------------------------------------------

--
-- Table structure for table `Brands`
--

CREATE TABLE IF NOT EXISTS `Brands` (
  `BrandID` int(30) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`BrandID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Categories`
--

CREATE TABLE IF NOT EXISTS `Categories` (
  `CategID` int(30) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`CategID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Conversion`
--

CREATE TABLE IF NOT EXISTS `Conversion` (
  `ISOCode` int(3) NOT NULL,
  `ConversionDate` date NOT NULL,
  `ConversionValue` decimal(10,3) NOT NULL,
  PRIMARY KEY (`ISOCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Currencies`
--

CREATE TABLE IF NOT EXISTS `Currencies` (
  `ISOCode` int(3) NOT NULL,
  `symbolChar` varchar(1) NOT NULL,
  `Name` varchar(15) NOT NULL,
  PRIMARY KEY (`ISOCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Images`
--

CREATE TABLE IF NOT EXISTS `Images` (
  `ImageID` int(30) NOT NULL AUTO_INCREMENT,
  `MainImage` tinyint(15) NOT NULL,
  `ImageName` varchar(30) NOT NULL,
  `ProductID` int(30) NOT NULL,
  PRIMARY KEY (`ImageID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `OrderDetails`
--

CREATE TABLE IF NOT EXISTS `OrderDetails` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `OrderId` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` decimal(10,3) NOT NULL,
  `Currency` char(3) NOT NULL,
  `Total` decimal(10,3) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE IF NOT EXISTS `Orders` (
  `OrderId` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `Total` decimal(10,3) NOT NULL,
  `Currency` char(3) NOT NULL,
  `Cancelled` tinyint(1) NOT NULL DEFAULT '0',
  `OrderDate` datetime NOT NULL,
  PRIMARY KEY (`OrderId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE IF NOT EXISTS `Products` (
  `ProductId` int(30) NOT NULL AUTO_INCREMENT,
  `ProductName` varchar(30) NOT NULL,
  `CategID` int(30) NOT NULL,
  `BrandID` int(30) NOT NULL,
  `CurrentStock` int(100) NOT NULL,
  `Description` text NOT NULL,
  `Price` decimal(10,3) NOT NULL,
  `CurrencyID` int(100) NOT NULL,
  PRIMARY KEY (`ProductId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`ProductId`, `ProductName`, `CategID`, `BrandID`, `CurrentStock`, `Description`, `Price`, `CurrencyID`) VALUES
(1, 'Pat ', 3, 6, 20, 'pat matrimonial', '1200.000', 4),
(2, 'Bed ', 1, 5, 20, 'black bed', '1200.000', 100),
(3, 'Table', 2, 7, 30, 'red table', '100.000', 35);

-- --------------------------------------------------------

--
-- Table structure for table `ProductSpecs`
--

CREATE TABLE IF NOT EXISTS `ProductSpecs` (
  `ID` int(30) NOT NULL AUTO_INCREMENT,
  `ProductID` varchar(30) NOT NULL,
  `SpecType` varchar(30) NOT NULL,
  `SpecValue` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `userID` int(15) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `birthDate` date NOT NULL,
  `adress` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  PRIMARY KEY (`userID`),
  UNIQUE KEY `userID` (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`userID`, `username`, `password`, `birthDate`, `adress`, `email`, `telephone`, `fullname`) VALUES
(1, 'johns', 'john12', '1990-03-23', '20th Sunset blvd.', 'johns@gmail.com', '+40723895623', 'John Smith'),
(3, 'janed', 'jane12', '1999-03-16', '34th Sunrise str.', 'janed@yahoo.com', '+40744568923', 'Jane Doe'),
(5, 'dan', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', '0000-00-00', '', 'danbrown@msn.com', '', ''),
(6, 'andyb', '65e84be33532fb784c48129675f9eff3a682b27168c0ea744b2cf58ee02337c5', '0000-00-00', '', 'andyb@yahoo.com', '', ''),
(7, 'ana_b', '5365669c64d2a2e60a8b90fd71c4c4a8021a3a21d364d7ee40a8015c5b59f9bb', '0000-00-00', '', 'anab@gmail.com', '', ''),
(11, 'ana_b', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', '0000-00-00', '', 'asd@yahoo.com', '', ''),
(12, 'dan', '22a3c85609d4d626bc01cd87df71d01f6bb9a62efce214d37b0d4faf4f3ebb74', '0000-00-00', '', 'dan1@gmal.com', '', ''),
(13, 'asa', '61be55a8e2f6b4e172338bddf184d6dbee29c98853e0a0485ecee7f27b9af0b4', '0000-00-00', '', 'aaa@ff.to', '', ''),
(14, 'aaaa', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', '0000-00-00', '', 'ddd@fff.to', '', ''),
(15, 'aaaa', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', '0000-00-00', '', 'ddd@fff.to', '', ''),
(16, 'ddd', '89aa1e580023722db67646e8149eb246c748e180e34a1cf679ab0b41a416d904', '0000-00-00', '', 'danbrown@msn.com', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
