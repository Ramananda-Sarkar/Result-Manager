-- phpMyAdmin SQL Dump
-- version 2.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 22, 2012 at 08:55 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `dusra`
--

-- --------------------------------------------------------

--
-- Table structure for table `result_015`
--

CREATE TABLE `result_015` (
  `Year` varchar(25) collate latin1_general_ci NOT NULL,
  `Roll` varchar(7) collate latin1_general_ci NOT NULL,
  `Name` varchar(25) collate latin1_general_ci NOT NULL,
  `Board` varchar(25) collate latin1_general_ci NOT NULL,
  `Father_name` varchar(25) collate latin1_general_ci NOT NULL,
  `Group` varchar(15) collate latin1_general_ci NOT NULL,
  `Mother_name` varchar(25) collate latin1_general_ci NOT NULL,
  `Session` varchar(25) collate latin1_general_ci NOT NULL,
  `Registration_no` varchar(6) collate latin1_general_ci NOT NULL,
  `Type` varchar(15) collate latin1_general_ci NOT NULL,
  `Date_of_Birth` varchar(25) collate latin1_general_ci NOT NULL,
  `Center` varchar(25) collate latin1_general_ci NOT NULL,
  `Institute` varchar(30) collate latin1_general_ci NOT NULL,
  `Result` varchar(25) collate latin1_general_ci NOT NULL,
  `GPA` varchar(15) collate latin1_general_ci NOT NULL,
  `C1` varchar(8) collate latin1_general_ci NOT NULL,
  `S1` varchar(15) collate latin1_general_ci NOT NULL,
  `M1` varchar(5) collate latin1_general_ci NOT NULL,
  `G1` varchar(5) collate latin1_general_ci NOT NULL,
  `C2` varchar(5) collate latin1_general_ci NOT NULL,
  `S2` varchar(15) collate latin1_general_ci NOT NULL,
  `M2` varchar(5) collate latin1_general_ci NOT NULL,
  `G2` varchar(5) collate latin1_general_ci NOT NULL,
  `C3` varchar(5) collate latin1_general_ci NOT NULL,
  `S3` varchar(15) collate latin1_general_ci NOT NULL,
  `M3` varchar(5) collate latin1_general_ci NOT NULL,
  `G3` varchar(5) collate latin1_general_ci NOT NULL,
  `C4` varchar(5) collate latin1_general_ci NOT NULL,
  `S4` varchar(15) collate latin1_general_ci NOT NULL,
  `M4` varchar(5) collate latin1_general_ci NOT NULL,
  `G4` varchar(5) collate latin1_general_ci NOT NULL,
  `C5` varchar(5) collate latin1_general_ci NOT NULL,
  `S5` varchar(15) collate latin1_general_ci NOT NULL,
  `M5` varchar(5) collate latin1_general_ci NOT NULL,
  `G5` varchar(5) collate latin1_general_ci NOT NULL,
  `C6` varchar(5) collate latin1_general_ci NOT NULL,
  `S6` varchar(15) collate latin1_general_ci NOT NULL,
  `M6` varchar(5) collate latin1_general_ci NOT NULL,
  `G6` varchar(5) collate latin1_general_ci NOT NULL,
  `C7` varchar(5) collate latin1_general_ci NOT NULL,
  `S7` varchar(15) collate latin1_general_ci NOT NULL,
  `M7` varchar(5) collate latin1_general_ci NOT NULL,
  `G7` varchar(5) collate latin1_general_ci NOT NULL,
  `C8` varchar(5) collate latin1_general_ci NOT NULL,
  `S8` varchar(15) collate latin1_general_ci NOT NULL,
  `M8` varchar(5) collate latin1_general_ci NOT NULL,
  `G8` varchar(5) collate latin1_general_ci NOT NULL,
  `C9` varchar(5) collate latin1_general_ci NOT NULL,
  `S9` varchar(15) collate latin1_general_ci NOT NULL,
  `M9` varchar(5) collate latin1_general_ci NOT NULL,
  `G9` varchar(5) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`Roll`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `result_015`
--

INSERT INTO `result_015` (`Year`, `Roll`, `Name`, `Board`, `Father_name`, `Group`, `Mother_name`, `Session`, `Registration_no`, `Type`, `Date_of_Birth`, `Center`, `Institute`, `Result`, `GPA`, `C1`, `S1`, `M1`, `G1`, `C2`, `S2`, `M2`, `G2`, `C3`, `S3`, `M3`, `G3`, `C4`, `S4`, `M4`, `G4`, `C5`, `S5`, `M5`, `G5`, `C6`, `S6`, `M6`, `G6`, `C7`, `S7`, `M7`, `G7`, `C8`, `S8`, `M8`, `G8`, `C9`, `S9`, `M9`, `G9`) VALUES
('Select one', '910032', 'gggggggggggg', 'Rajshahi', 'father', 'SCIENCE', 'kk', '2008-2009', '44', 'regulalr', '11-12-1991', 'thakurgaon', 'thakurgaon polytec', '3.83', 'passed', '102', 'bangla', '77', 'A', '102', 'English', '77', 'A+', '104', 'Math', '85', 'A+', '107', 'Chemestry', '55', 'B', '103', 'Fhycis', '66', 'A-', '144', 'Boylogy', '77', 'A', '145', 'Computer', '55', 'B', '451', 'Civics', '77', 'A', '109', 'Social science', '74', 'A'),
('2012', '910020', 'rama', 'Dinajpur', 'fsa', 'SCIENCE', 'mother', '2009-20010', '999', 'regulalr', '11-12-1991', 'thakurgaon', 'thakurgaon polytec', '3.83', 'passed', '101', 'bangla', '77', 'A', '102', 'English', '77', 'A+', '104', 'Math', '85', 'A+', '107', 'Chemestry', '55', 'B', '103', 'Fhycis', '66', 'A-', '144', 'Boylogy', '77', 'A', '145', 'Computer', '55', 'B', '451', 'Civics', '77', 'A', '109', 'Social science', '74', 'A'),
('2012', '910021', 'an', 'Dinajpur', 'father', 'SCIENCE', 'mother', '2008-2009', '999', 'REGULAR ', '12-12-12', 'thakurgaon', 'thakurgaon polytec', '3.94', 'Passed', '101', '	BANGLA', '96', 'A+', '107', '	ENGLISH', '85', 'A+', '109', '	MATHEMATICS', '85', 'A+', '145', '	SOCIAL SCIENCE', '77', 'A', '112', '	RELIGION,HINDU', '78', 'A', '136', '	PHYSICS', '69', 'A-', '137', '	CHEMISTRY', '59', 'B', '138', '	BIOLOGY', '78', 'A', '126', '	HIGHER MATHEMA', '46', 'C'),
('2012', '910022', 'rama', 'Dinajpur', 'father', 'SCIENCE', 'mother', '2008-2009', '999', 'REGULAR', '11-12-1991', 'thakurgaon', 'thakurgaon polytec', '3.83', 'Passed', '101', 'BANGLA', '78', 'A', '107', 'ENGLISH', '55', 'B', '109', 'MATHEMATICS', '55', 'B', '145', 'SOCIAL SCIENCE', '78', 'A', '112', 'RELIGION,HINDU', '77', 'A', '136', 'PHYSICS', '78', 'A', '137', 'CHEMISTRY', '65', 'A-', '138', 'BIOLOGY', '77', 'A', '126', 'HIGHER MATHEMAT', '87', 'A+'),
('2012', '910025', 'NNNN', 'Dinajpur', 'father', 'SCIENCE', 'mother', '2008-2009', '999', 'REGULAR', '11-12-1991', 'thakurgaon', 'thakurgaon polytec', '5.00', 'Passed', '102', 'BANGLA', '80', 'A+', '107', 'ENGLISH', '80', 'A+', '109', 'MATHEMATICS', '85', 'A+', '145', 'SOCIAL SCIENCE', '88', 'A+', '112', 'RELIGION,HINDU', '90', 'A+', '136', 'PHYSICS', '85', 'A+', '137', 'CHEMISTRY', '95', 'A+', '138', 'BIOLOGY', '99', 'A+', '126', 'HIGHER MATHEMAT', '85', 'A+');
