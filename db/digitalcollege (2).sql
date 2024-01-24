-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 01, 2021 at 02:38 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `digitalcollege`
--

-- --------------------------------------------------------

--
-- Table structure for table `addsubject`
--

CREATE TABLE IF NOT EXISTS `addsubject` (
  `subjectcode` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addsubject`
--


-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `A_id` int(12) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Class` varchar(20) NOT NULL,
  `Type` varchar(20) NOT NULL,
  PRIMARY KEY (`A_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`A_id`, `Name`, `Class`, `Type`) VALUES
(1, 'dfg', '5', 'present'),
(2, 'ammu', 'bsc', 'present');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `coursecode` varchar(50) NOT NULL,
  `coursename` varchar(50) NOT NULL,
  PRIMARY KEY (`coursecode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--


-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `gnder` varchar(40) NOT NULL,
  `dob` varchar(40) NOT NULL,
  `adr` varchar(100) NOT NULL,
  `phn` varchar(40) NOT NULL,
  `eml` varchar(40) NOT NULL,
  `qua` varchar(10) NOT NULL,
  `up` varchar(10) NOT NULL,
  `dpt` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `gnder`, `dob`, `adr`, `phn`, `eml`, `qua`, `up`, `dpt`) VALUES
(1, 'anju', 'Female', '2017-05-09', 'BFG ', '2345678909', 'an@gmail.com', '', '', 'BBA'),
(2, 'kripa', 'Female', '2021-04-14', 'kripa bhavan', '8088554444', 'k@gmail.com', '', '', 'BCOM'),
(3, 'ammu', 'Female', '2021-04-18', 'ammu bhavan', '9087766555', 'ammu@gmail.com', '', '', 'BBA'),
(4, 'jiji', 'Female', '1999-12-01', 'jiji house', '1234567891', 'jiji@22.com', '', '', 'BSCIT'),
(5, 'jiji', 'Female', '1999-12-01', 'jiji house', '1234567891', 'jiji@22.com', '', '', 'BSCIT'),
(6, 'jiji', 'Female', '1999-12-01', 'jiji house', '1234567891', 'jiji@22.com', '', '', 'BSCIT'),
(7, 'adeena', 'Female', '1990-01-01', 'adeena home', '974413130', 'adeena123@gmail.com', '', '', 'BSCIT'),
(8, 'simi', 'Female', '1999-09-01', 'simi home', '3581972425', 'simi@12gmail.com', 'MED', 'Graduate-S', 'BSCIT'),
(9, 'jiji', 'Female', '2021-09-28', 'jijivilla', '4879654323', 'jiji@12', 'MSC', 'ecollege.j', 'BCA');

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE IF NOT EXISTS `fee` (
  `fid` int(12) NOT NULL AUTO_INCREMENT,
  `dept` varchar(20) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `fees` varchar(20) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`fid`, `dept`, `sem`, `fees`) VALUES
(1, 'fgm', '15000', ''),
(2, 'cs', 's3', '25000'),
(3, 'BSC', 's1', '13010'),
(4, 'bsc', 's1', '13010');

-- --------------------------------------------------------

--
-- Table structure for table `libnote`
--

CREATE TABLE IF NOT EXISTS `libnote` (
  `lid` int(10) NOT NULL AUTO_INCREMENT,
  `dep` varchar(10) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `sub` varchar(10) NOT NULL,
  `pdf` varchar(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `libnote`
--

INSERT INTO `libnote` (`lid`, `dep`, `sem`, `sub`, `pdf`, `date`) VALUES
(1, 'BSCIT', 'Sem1', 'cg', 'but_ov.jpg', '2021-04-25'),
(2, 'BBA', 'Sem1', 'chemistry', 'fish2.gif', '2021-09-25'),
(3, 'BBA', 'Sem2', 'chemistry', 'bot_r.png', '2021-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `lid` int(20) NOT NULL AUTO_INCREMENT,
  `uid` int(20) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `upass` varchar(20) NOT NULL,
  `utype` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`lid`, `uid`, `uname`, `upass`, `utype`, `status`) VALUES
(1, 1002, 'appu@gmail.com', 'appu', 'staff', 'approved'),
(2, 0, 'admin', 'admin', 'admin', 'admin'),
(3, 3, 'ammu', 'ammu', 'faculty', ''),
(4, 10, 'karthu', 'karthu', 'student', ''),
(5, 4, 'jiji', 'jiji', 'faculty', ''),
(6, 5, 'jiji', 'jiji', 'faculty', ''),
(7, 6, 'jiji', 'jiji', 'faculty', ''),
(8, 7, 'adeena', 'adeena', 'faculty', 'approved'),
(9, 8, 'simi', 'simi', 'faculty', 'reject'),
(10, 1003, 'ambily@gmail.com', 'ambily', 'staff', 'reject'),
(11, 1004, 'ambily@gmail.com', 'ambily', 'staff', 'reject'),
(12, 9, 'jijimol', 'jiji', 'faculty', ''),
(13, 11, 'karthi', 'karthi', 'student', '');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentid` varchar(10) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `marks` int(50) NOT NULL,
  `mof` varchar(20) NOT NULL,
  `tdate` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `studentid`, `subject`, `marks`, `mof`, `tdate`) VALUES
(1, '1234', 'OS', 43, 'FI', '2017-05-16'),
(2, '1234', 'OS', 80, 'CT', '2021-04-14'),
(3, '39227', 'web technology', 43, 'FI', '2021-09-14'),
(4, '1234', '4321', 50, 'FI', '2021-09-01');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `msid` int(20) NOT NULL AUTO_INCREMENT,
  `faname` varchar(20) NOT NULL,
  `message` varchar(20) NOT NULL,
  `studname` varchar(20) NOT NULL,
  `vid` int(20) NOT NULL,
  `replay` varchar(20) NOT NULL,
  PRIMARY KEY (`msid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msid`, `faname`, `message`, `studname`, `vid`, `replay`) VALUES
(1, 'ammu', 'dfrghj', '', 0, 'kkk'),
(2, 'Ammu', 'sdfff', '', 0, 'qwert'),
(3, 'ammu', 'please explain the j', 'karthika', 10, 'ok i will explain'),
(5, 'jiji', 'what is mm?', 'karthika', 10, 'i dont no');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE IF NOT EXISTS `parent` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `rno` varchar(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `focc` varchar(100) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `mocc` varchar(100) NOT NULL,
  `fph` varchar(25) NOT NULL,
  `mph` varchar(25) NOT NULL,
  PRIMARY KEY (`pid`,`rno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`pid`, `rno`, `fname`, `focc`, `mname`, `mocc`, `fph`, `mph`) VALUES
(1, '1234', 'safd', 'df', 'd', 'sf', '9873456789', '3456789876'),
(2, '39227', 'sanjay', 'driver', 'surya', 'house wife', '9088777777', '8926666555'),
(3, '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', ''),
(5, '3422556', 'venu', 'farmer', 'latha', 'house wife', '9088777777', '8966443333'),
(6, '464574', 'dsssv', 'ds', 'ds', 'ds', '6567567686', '7787868574'),
(7, '43646645', 'fdg', 'fddfd', 'dfgfdg', 'dfg', '4356565434', '435466u654'),
(8, '565787765', 'dvfdv', 'fvf', 'vdfv', 'fgb', '4567876586', '5467897656'),
(9, '39227', 'fdg', 'vbnb', 'vbn', 'vcb', '9088775555', '8966443333'),
(10, '8977665', 'venu', 'driver', 'latha', 'house wife', '9088775555', '8966443333'),
(11, '1234567778', 'appu', 'nil', 'ammu', 'nil', '1234556789', '0987654321');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `fid` varchar(10) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `fee` varchar(10) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `cvvno` varchar(10) NOT NULL,
  `dte` varchar(10) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pid`, `fid`, `dept`, `sem`, `fee`, `cname`, `cvvno`, `dte`) VALUES
(1, '2', 'cs', 's3', '25000', 'venunu', '123', '2021-04-18'),
(2, '4', 'bsc', 's1', '13010', 'jiji', '45543', '2021-08-31'),
(3, '3', 'BSC', 's1', '13010', 'adeena', '7642', '2021-09-25');

-- --------------------------------------------------------

--
-- Table structure for table `pst`
--

CREATE TABLE IF NOT EXISTS `pst` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(20) DEFAULT NULL,
  `dte` varchar(40) NOT NULL,
  `notify` varchar(1000) NOT NULL,
  `dpt` varchar(15) NOT NULL,
  `sem` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `pst`
--

INSERT INTO `pst` (`id`, `uid`, `dte`, `notify`, `dpt`, `sem`) VALUES
(1, '0', '2017-05-01', 'exam dates declared', 'BCA', 'Sem3'),
(2, '0', '2017-05-02', 'your child is not studying ...', 'BCA', 'Sem3'),
(3, '0', '2017-05-03', 'there will be a parents meeting on february 13 2017', 'BCA', 'Sem2'),
(4, '0', '2017-05-04', 'parentsmeeting', 'BBA', 'Sem6'),
(5, '5', '2017-05-05', 'fgdvb', 'BCA', 'Sem4'),
(6, '3', '2021-09-25', 'hlo ...', 'BSCIT', 'Sem5'),
(7, '0', '2021-09-30', 'hlo teachers.......', 'BCA', 'Sem5'),
(8, '0', '2021-09-30', 'PTA Meetting', 'BSCIT', 'Sem3');

-- --------------------------------------------------------

--
-- Table structure for table `pta`
--

CREATE TABLE IF NOT EXISTS `pta` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `rno` int(11) NOT NULL,
  `msg` varchar(6000) NOT NULL,
  `mdate` varchar(25) NOT NULL,
  `faculty` varchar(25) DEFAULT NULL,
  `rply` varchar(6000) DEFAULT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pta`
--

INSERT INTO `pta` (`mid`, `rno`, `msg`, `mdate`, `faculty`, `rply`) VALUES
(1, 1234, 'gbfbv', '2017-05-09', '1', 'fdxgg'),
(2, 1234, 'fdvvdzdvv', '2021-04-14', '1', ''),
(3, 1234, 'halo', '2021-09-25', '4', ''),
(4, 1234, 'hlo...', '2021-09-30', '9', ''),
(5, 1234567778, 'hloooooooooo', '2021-09-30', '4', 'hiiiii');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rno` varchar(20) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `name` varchar(20) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `dist` varchar(20) NOT NULL,
  `ph` varchar(20) NOT NULL,
  `emid` varchar(20) NOT NULL,
  `gen` varchar(20) NOT NULL,
  `dept` varchar(25) NOT NULL,
  `sem` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `rno`, `image`, `name`, `addr`, `city`, `dist`, `ph`, `emid`, `gen`, `dept`, `sem`) VALUES
(1, '1234', '', 'neenu', 'kaloor', 'kaloor', 'calicut', '9876543212', 'n@gmail.com', 'Female', 'BBA', 'Sem2'),
(2, '39227', '', 'krishna', 'krishna bhavan', 'adoor', 'pathanamthitta', '9035536666', 'krishna@gmail.com', 'Female', 'BBA', 'Sem1'),
(4, '', '', '', '', '', '', '', '', '', '', ''),
(5, '3422556', 'karthu', 'Graduate_Student-512', 'gugdt', 'ganesha vilasam', 'kollam', '9077665555', 'karthu@gmail.com', 'Female', 'BSCIT', 'Sem2'),
(6, '464574', 'img1.jpg', 'rgdgbdchh', 'zsfrdshgv t', 'tgvftgtfr', 'rgdgtr', '4567865443', 'd@gmail.com', 'Male', 'BCA', ''),
(7, '43646645', 'img3.jpg', 'fgff', 'fgxgfffffffffff', 'ffffffg', 'fxgxf', 'fgfh', 'df@gmail.com', 'Male', 'BBA', ''),
(8, '565787765', 'cont.png', 'cdf dg', 'g dfgcfb', 'bgghfnf', 'nfgvfngf', '7890876545', 'sd@gmail.com', 'Male', 'BCA', 'Sem3'),
(9, '39227', 'img1.jpg', 'amrutha', 'fdvvgfds', 'sdfg', 'dfbghn', '9077665555', 'ku@gmail.com', 'Female', 'BBA', 'Sem3'),
(10, '8977665', 'img2.jpg', 'karthika', 'karthika bhavan', 'ezhamkulam', 'pathanamthitta', '9077665555', 'karthu@gmail.com', 'Female', 'BCOM', 'Sem2'),
(11, '1234567778', 'ecollege.jpg', 'karthika', 'karthika villa', 'punalur', 'kollam', '4311345678', 'karthika@12', 'Female', 'BCA', 'Sem3');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `sid` int(25) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `adrs` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `quali` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1005 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sid`, `name`, `adrs`, `gender`, `quali`, `phone`, `email`) VALUES
(1001, '', '', '', '', '', ''),
(1002, 'appu', 'bjhbjhb', 'male', ' MCA', '9088776644', 'appu@gmail.com'),
(1003, 'ambily', 'ambilybhavan', 'female', 'degree', '123456789', 'ambily@gmail.com'),
(1004, 'ambily', 'ambilybhavan', 'female', 'degree', '123456789', 'ambily@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `ccode` varchar(50) NOT NULL,
  `subcode` varchar(50) NOT NULL,
  `subname` varchar(100) NOT NULL,
  `sem` varchar(10) NOT NULL,
  PRIMARY KEY (`subcode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`ccode`, `subcode`, `subname`, `sem`) VALUES
('BBA', '', '10', '0'),
('BCA', '4055', 'cg', 'Sem5'),
('BSCIT', '709988', 'computer graphics', 'Sem3'),
('BBA', 'b003', 'oomd', 'Sem5'),
('BSCIT', 'DBMS', '29', 'Sem3'),
('BBA', 'economics', '45', 'Sem3'),
('BSCIT', 'java', '356', 'Sem6'),
('BSCIT', 'operating system', '876', 'Sem6'),
('BSCIT', 'OS', '12', 'Sem2'),
('BCA', 'web technology', '345', 'Sem1');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE IF NOT EXISTS `timetable` (
  `tid` int(20) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `dow` varchar(20) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`tid`, `date`, `dow`) VALUES
(1, '2021-09-30', ''),
(2, '2021-09-15', 'Graduate-Student-Ico'),
(3, '2021-09-01', 'ecollege.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `up`
--

CREATE TABLE IF NOT EXISTS `up` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(100) NOT NULL,
  `type` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `up`
--

INSERT INTO `up` (`id`, `file`, `type`) VALUES
(1, '52273-how_to_apply_sscregistration_2016.pdf', 'application/pdf'),
(2, '89719-New Microsoft Office Word Document.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'),
(3, '36028-ACKNOWLEDGEMENT.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `dte` varchar(50) NOT NULL,
  `course` varchar(20) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `type` varchar(40) NOT NULL,
  `title` varchar(50) NOT NULL,
  `filepath` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `uid`, `dte`, `course`, `sem`, `type`, `title`, `filepath`) VALUES
(1, 1, '2017-05-06', 'BSCIT', 'Sem3', 'pdf', 'mats', '87009-INTRODUCTION.docx'),
(2, 1, '2017-05-06', 'BCOM', 'Sem4', 'pdf', 'gt', '4658-how_to_apply_sscregistration_2016.pdf'),
(3, 1, '2017-05-06', 'BBA', 'Sem2', 'ppt', 'ppt', '53715-Antony Fitness Club.pptx'),
(4, 1, '2021-04-14', 'BBA', 'Sem4', 'pdf', 'ggghh', '67622-ch3.ppt'),
(5, 3, '2021-09-25', 'BSCIT', 'Sem5', 'pdf', 'cg', ''),
(6, 9, '2021-09-30', 'BCA', 'Sem2', 'pdf', 'multimedia', '65232-Graduate-Student-Icon.jpg'),
(7, 9, '2021-09-30', 'BCA', 'Sem2', 'pdf', 'multimedia', ''),
(8, 9, '2021-09-30', 'BCA', 'Sem3', 'pdf', 'cg', '41475-ecollege.jpg');
