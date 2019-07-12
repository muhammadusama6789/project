-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2017 at 03:43 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `qid` int(5) DEFAULT NULL,
  `Question` text,
  `opt1` text,
  `opt2` text,
  `opt3` text,
  `opt4` text,
  `woptcode` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`qid`, `Question`, `opt1`, `opt2`, `opt3`, `opt4`, `woptcode`) VALUES
(1, 'how many fathers you have?', '1', '2', '3', '4', 'a'),
(2, 'when pakistan came into being', '1945', '1946', '1947', '1948', 'c'),
(3, 'how many provinces of pakistan?', '1', '2', '3', '4', 'd'),
(4, 'how many surah are there in Quran?', '100', '110', '114', '115', 'c'),
(5, 'who mend shoes?', 'cobler', 'milkman', 'joker', 'father', 'a'),
(6, 'how many islamic books are there?', '1', '2', '3', '4', 'd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
