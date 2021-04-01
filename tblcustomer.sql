-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 15, 2020 at 09:03 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teambam`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomer`
--

DROP TABLE IF EXISTS `tblcustomer`;
CREATE TABLE IF NOT EXISTS `tblcustomer` (
  `C_ID` int(50) NOT NULL AUTO_INCREMENT,
  `C_FNAME` varchar(50) NOT NULL,
  `C_LNAME` varchar(50) NOT NULL,
  `C_AGE` int(2) NOT NULL,
  `C_ADDRESS` text NOT NULL,
  `C_PNUMBER` varchar(50) NOT NULL,
  `C_GENDER` varchar(50) NOT NULL,
  `C_EMAILADD` varchar(50) NOT NULL,
  `ZIPCODE` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` longtext NOT NULL,
  PRIMARY KEY (`C_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcustomer`
--

INSERT INTO `tblcustomer` (`C_ID`, `C_FNAME`, `C_LNAME`, `C_AGE`, `C_ADDRESS`, `C_PNUMBER`, `C_GENDER`, `C_EMAILADD`, `ZIPCODE`, `username`, `password`) VALUES
(1, 'Joken', 'Villanueva', 30, 'Enclaro, Binalbagan', '09096798565', 'Male', 'Joken@yahoo.com', '6100', 'j', '$2y$10$0COwfAt8Yy6JTR2omeq5sOfdaKrFtVzh8C3a5WbP8intcwDG5H.Xm'),
(2, 'gladez', 'Jimenez', 23, 'Brgy.9 Isabela', '09096787453', 'Female', 'glad@yahoo.com', '6100', 'gladez', '$2y$10$sZU0lDPm3UdWQz.8lPhuQexh.uW3Dt0D.i8SeHRTD2cuzn4egCpfG'),
(3, 'Lenny', 'Jane', 23, 'Brgy.Santol Binalbagan', '09097865342', 'Female', 'Lenny@yahoo.com', '6100', 'Lenny', '$2y$10$nAIowngDF/uUOWi5G2FCru4RsbVAeliVqYLUIQ9E3Y2h.hEO1dt3u'),
(4, 'chidera', 'nebo', 22, '13 etudo', '07086117986', 'Male', 'nebochidera16@gmail.com', '234', 'lasiegase', '$2y$10$vOcu54w/oi9sZM/0Giu7iudAQSW4VdtZ1ccejXwivstKlDj.ymHIa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
