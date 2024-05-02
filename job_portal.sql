-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 07, 2021 at 05:45 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE IF NOT EXISTS `applicant` (
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `jtitle` varchar(100) NOT NULL,
  `mobi` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(100) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `qual` varchar(50) NOT NULL,
  `insti` varchar(100) NOT NULL,
  `resume` varchar(500) NOT NULL,
  `cuser` varchar(100) NOT NULL,
  `jobid` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`email`, `name`, `jtitle`, `mobi`, `state`, `city`, `dob`, `qual`, `insti`, `resume`, `cuser`, `jobid`, `status`) VALUES
('harshyadav724@gmail.com', 'Harsh Yadav', 'Associate Software Engineer', '1234567890', 'UP', 'Sitapur', '28-12-2001', 'Graduation', 'Sacred Heart Degree College', 'resumes/Resume.pdf', 'no@kai.com', '322', 'Waiting'),
('harshyadav724@gmail.com', 'Harsh Yadav', 'Associate Software Engineer', '1234567890', 'UP', 'Sitapur', '28-12-2001', 'Graduation', 'Sacred Heart Degree College', 'resumes/Resume.pdf', 'tata@tcs.com', '323', 'Waiting'),
('harshyadav724@gmail.com', 'Harsh Yadav', 'Associate Software Engineer', '1234567890', 'UP', 'Sitapur', '28-12-2001', 'Graduation', 'Sacred Heart Degree College', 'resumes/Resume.pdf', 'kentuky@kfc.com', '325', 'Waiting'),
('ishanyadav724@gmail.com', 'Ishan Yadav', 'Associate Software Engineer', '1234567890', 'UP', 'Sitapur', '25-9-2001', 'Graduation', 'Sacred Heart Degree College', 'resumes/Resume.pdf', 'no@kai.com', '322', 'Waiting'),
('shashankyadav724@gmail.com', 'Shashank Yadav', 'Associate Software Engineer', '1234567890', 'UP', 'Sitapur', '28-12-2001', 'Graduation', 'Sacred Heart Degree College', 'resumes/Resume.pdf', 'ora@oracle.com', '328', 'Waiting'),
('udayyadav724@gmail.com', 'Uday Yadav', 'Associate Software Engineer', '123456789', 'UP', 'Sitapur', '28-12-2001', 'Graduation', 'Sacred Heart Degree College', 'resumes/Resume.pdf', 'elon@tesla.com', '461', 'Waiting'),
('udayyadav724@gmail.com', 'Uday Yadav', 'Associate Software Engineer', '1234567890', 'UP', 'Sitapur', '28-12-2001', 'Graduation', 'Sacred Heart Degree College', 'resumes/Resume.pdf', 'Coca@cola.com', '788', 'Waiting');

-- --------------------------------------------------------

--
-- Table structure for table `askadmin`
--

CREATE TABLE IF NOT EXISTS `askadmin` (
  `username` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `com` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `askcomp`
--

CREATE TABLE IF NOT EXISTS `askcomp` (
  `user` varchar(50) NOT NULL,
  `cuser` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ques` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `indreg`
--

CREATE TABLE IF NOT EXISTS `indreg` (
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `mob` varchar(15) NOT NULL,
  `user` varchar(10) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indreg`
--

INSERT INTO `indreg` (`email`, `name`, `state`, `city`, `addr`, `dob`, `mob`, `user`, `photo`) VALUES
('harshyadav724@gmail.com', 'Harsh Yadav', 'UP', 'Sitapur', 'Lohar Bagh', '28-12-2001', '1234567890', 'User', 'user/WA-IMG-20210323-0f34.jpg'),
('ishanyadav724@gmail.com', 'Ishan Yadav', 'UP', 'Sitapur', 'Lohar Bagh', '28-12-2001', '1234567890', 'User', 'user/WA-IMG-20210323-0f34.jpg'),
('rajyadav724@gmail.com', 'Raj Yadav', 'UP', 'Sitapur', 'Lohar Bagh', '28-12-2001', '1234567890', 'User', 'user/WA-IMG-20210323-0f34.jpg'),
('shashankyadav724@gmail.com', 'ShashankYadav', 'UP', 'Sitapur', 'Lohar Bagh', '28-12-2001', '1234567890', 'User', 'user/WA-IMG-20210323-0f34.jpg'),
('udayyadav724@gmail.com', 'Uday Yadav', 'UP', 'Sitapur', 'Lohar Bagh', '28-12-2001', '1234567890', 'User', 'user/WA-IMG-20210323-0f34.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `user` varchar(50) NOT NULL,
  `jtitle` varchar(50) NOT NULL,
  `jloc` varchar(50) NOT NULL,
  `eligi` varchar(50) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `post` varchar(50) NOT NULL,
  `last` varchar(50) NOT NULL,
  `jid` varchar(50) NOT NULL,
  `disc` varchar(1000) NOT NULL,
  `jtype` varchar(100) NOT NULL,
  `jrole` varchar(100) NOT NULL,
  `jcat` varchar(100) NOT NULL,
  `jhir` varchar(100) NOT NULL,
  `jwho` varchar(100) NOT NULL,
  PRIMARY KEY (`jid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`user`, `jtitle`, `jloc`, `eligi`, `salary`, `post`, `last`, `jid`, `disc`, `jtype`, `jrole`, `jcat`, `jhir`, `jwho`) VALUES
('no@kai.com', 'Associate Software Engineer', 'Banglore', 'B.E/B.Tech [CSE/IS/IT] from 2020/2021 batch with 6', '25 LPA ', '2021-06-06', '2021-07-28', '322', 'This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.\nBuild quick Mobile App prototypes on Android and iOS platforms Build quick Mobile App prototypes on Android and iOS platformsBuild quick Mobile App prototypes on Android and iOS platforms.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update).\n', 'Full Time', 'Build quick Mobile App prototypes on Android and iOS platforms', 'IT', 'Interview', 'Freshers'),
('tata@tcs.com', 'Associate Software Engineer', 'Banglore', 'B.E/B.Tech [CSE/IS/IT] from 2020/2021 batch with 6', '25 LPA ', '2021-06-06', '2021-07-28', '323', 'This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.\nBuild quick Mobile App prototypes on Android and iOS platforms Build quick Mobile App prototypes on Android and iOS platformsBuild quick Mobile App prototypes on Android and iOS platforms.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update).\n', 'Full Time', 'Build quick Mobile App prototypes on Android and iOS platforms', 'IT', 'Interview', 'Freshers'),
('kentuky@kfc.com', 'Associate Software Engineer', 'Banglore', 'B.E/B.Tech [CSE/IS/IT] from 2020/2021 batch with 6', '25 LPA ', '2021-06-06', '2021-07-28', '325', 'This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.\nBuild quick Mobile App prototypes on Android and iOS platforms Build quick Mobile App prototypes on Android and iOS platformsBuild quick Mobile App prototypes on Android and iOS platforms.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update).\n', 'Full Time', 'Build quick Mobile App prototypes on Android and iOS platforms', 'IT', 'Interview', 'Freshers'),
('in@intel.com', 'Associate Software Engineer', 'Banglore', 'B.E/B.Tech [CSE/IS/IT] from 2020/2021 batch with 6', '25 LPA ', '2021-06-06', '2021-07-28', '327', 'This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.\nBuild quick Mobile App prototypes on Android and iOS platforms Build quick Mobile App prototypes on Android and iOS platformsBuild quick Mobile App prototypes on Android and iOS platforms.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update).\n', 'Full Time', 'Build quick Mobile App prototypes on Android and iOS platforms', 'IT', 'Interview', 'Freshers'),
('ora@oracle.com', 'Associate Software Engineer', 'Banglore', 'B.E/B.Tech [CSE/IS/IT] from 2020/2021 batch with 6', '25 LPA ', '2021-06-06', '2021-07-28', '328', 'This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.\nBuild quick Mobile App prototypes on Android and iOS platforms Build quick Mobile App prototypes on Android and iOS platformsBuild quick Mobile App prototypes on Android and iOS platforms.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update).\n', 'Full Time', 'Build quick Mobile App prototypes on Android and iOS platforms', 'IT', 'Interview', 'Freshers'),
('sam@sang.com', 'Associate Software Engineer', 'Banglore', 'B.E/B.Tech [CSE/IS/IT] from 2020/2021 batch with 6', '25 LPA ', '2021-06-06', '2021-07-28', '329', 'This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.\nBuild quick Mobile App prototypes on Android and iOS platforms Build quick Mobile App prototypes on Android and iOS platformsBuild quick Mobile App prototypes on Android and iOS platforms.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update).\n', 'Full Time', 'Build quick Mobile App prototypes on Android and iOS platforms', 'IT', 'Interview', 'Freshers'),
('fed@fedex.com', 'Associate Software Engineer', 'Banglore', 'B.E/B.Tech [CSE/IS/IT] from 2020/2021 batch with 6', '25 LPA ', '2021-06-06', '2021-07-28', '460', 'This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.\nBuild quick Mobile App prototypes on Android and iOS platforms Build quick Mobile App prototypes on Android and iOS platformsBuild quick Mobile App prototypes on Android and iOS platforms.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update).\n', 'Full Time', 'Build quick Mobile App prototypes on Android and iOS platforms', 'IT', 'Interview', 'Freshers'),
('elon@tesla.com', 'Associate Software Engineer', 'Banglore', 'B.E/B.Tech [CSE/IS/IT] from 2020/2021 batch with 6', '25 LPA ', '2021-06-06', '2021-07-28', '461', 'This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.\nBuild quick Mobile App prototypes on Android and iOS platforms Build quick Mobile App prototypes on Android and iOS platformsBuild quick Mobile App prototypes on Android and iOS platforms.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update).\n', 'Full Time', 'Build quick Mobile App prototypes on Android and iOS platforms', 'IT', 'Interview', 'Freshers'),
('app@apple.com', 'Associate Software Engineer', 'Banglore', 'B.E/B.Tech [CSE/IS/IT] from 2020/2021 batch with 6', '25 LPA ', '2021-06-06', '2021-07-28', '462', 'This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.\nBuild quick Mobile App prototypes on Android and iOS platforms Build quick Mobile App prototypes on Android and iOS platformsBuild quick Mobile App prototypes on Android and iOS platforms.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update).\n', 'Full Time', 'Build quick Mobile App prototypes on Android and iOS platforms', 'IT', 'Interview', 'Freshers'),
('hp@hewlett.com', 'Associate Software Engineer', 'Banglore', 'B.E/B.Tech [CSE/IS/IT] from 2020/2021 batch with 6', '25 LPA ', '2021-06-06', '2021-07-28', '464', 'This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.\nBuild quick Mobile App prototypes on Android and iOS platforms Build quick Mobile App prototypes on Android and iOS platformsBuild quick Mobile App prototypes on Android and iOS platforms.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update).\n', 'Full Time', 'Build quick Mobile App prototypes on Android and iOS platforms', 'IT', 'Interview', 'Freshers'),
('flip@kart.com', 'Associate Software Engineer', 'Banglore', 'B.E/B.Tech [CSE/IS/IT] from 2020/2021 batch with 6', '25 LPA ', '2021-06-06', '2021-07-28', '468', 'This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.\nBuild quick Mobile App prototypes on Android and iOS platforms Build quick Mobile App prototypes on Android and iOS platformsBuild quick Mobile App prototypes on Android and iOS platforms.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update).\n', 'Full Time', 'Build quick Mobile App prototypes on Android and iOS platforms', 'IT', 'Interview', 'Freshers'),
('ibm@machine.com', 'Associate Software Engineer', 'Banglore', 'B.E/B.Tech [CSE/IS/IT] from 2020/2021 batch with 6', '25 LPA ', '2021-06-06', '2021-07-28', '543', 'This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.\nBuild quick Mobile App prototypes on Android and iOS platforms Build quick Mobile App prototypes on Android and iOS platformsBuild quick Mobile App prototypes on Android and iOS platforms.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update).\n', 'Full Time', 'Build quick Mobile App prototypes on Android and iOS platforms', 'IT', 'Interview', 'Freshers'),
('cap@gemini.com', 'Associate Software Engineer', 'Banglore', 'B.E/B.Tech [CSE/IS/IT] from 2020/2021 batch with 6', '10 LPA', '2021-06-06', '2021-06-30', '547', 'This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.\nBuild quick Mobile App prototypes on Android and iOS platforms Build quick Mobile App prototypes on Android and iOS platformsBuild quick Mobile App prototypes on Android and iOS platforms.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update).\n', 'Full Time', 'Build quick Mobile App prototypes on Android and iOS platforms', 'IT', 'Interview', 'Fresher'),
('Google@gmail.com', 'Associate Software Engineer', 'Banglore', 'B.E/B.Tech [CSE/IS/IT] from 2020/2021 batch with 6', '25 LPA ', '2021-06-06', '2021-07-28', '568', 'This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.\nBuild quick Mobile App prototypes on Android and iOS platforms Build quick Mobile App prototypes on Android and iOS platformsBuild quick Mobile App prototypes on Android and iOS platforms.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update).\n', 'Full Time', 'Build quick Mobile App prototypes on Android and iOS platforms', 'IT', 'Interview', 'Freshers'),
('bbva@bancomer.com', 'Associate Software Engineer', 'Mumbai', 'B.E/B.Tech [CSE/IS/IT] from 2020/2021 batch with 6', '3LPA', '2021-06-06', '2021-07-29', '719', 'This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.\nBuild quick Mobile App prototypes on Android and iOS platforms Build quick Mobile App prototypes on Android and iOS platformsBuild quick Mobile App prototypes on Android and iOS platforms.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update).\n', 'Full Time', 'Build quick Mobile App prototypes on Android and iOS platforms', 'IT', 'Interview', 'Fresher'),
('cis@amazon.com', 'Associate Software Engineer', 'Mumbai', 'B.E/B.Tech [CSE/IS/IT] from 2020/2021 batch with 6', '10 LPA', '2021-06-06', '2021-07-29', '777', 'This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.\nBuild quick Mobile App prototypes on Android and iOS platforms Build quick Mobile App prototypes on Android and iOS platformsBuild quick Mobile App prototypes on Android and iOS platforms.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update).\n', 'Full Time', 'Build quick Mobile App prototypes on Android and iOS platforms', 'Information Technology', 'Test,Interview', 'Freshers'),
('acc@accenture.com', 'Associate Software Engineer', 'Delhi', 'B.E/B.Tech [CSE/IS/IT] from 2020/2021 batch with 6', '10 LPA', '2021-06-06', '2021-07-29', '785', 'This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.\nBuild quick Mobile App prototypes on Android and iOS platforms Build quick Mobile App prototypes on Android and iOS platformsBuild quick Mobile App prototypes on Android and iOS platforms.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update).\n', 'Full Time', 'Build quick Mobile App prototypes on Android and iOS platforms', 'Information Technology', 'Test,Interview', 'Freshers'),
('dell@dell.com', 'Associate Software Engineer', 'Delhi', 'B.E/B.Tech [CSE/IS/IT] from 2020/2021 batch with 6', '10 LPA', '2021-06-06', '2021-07-29', '786', 'This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.\nBuild quick Mobile App prototypes on Android and iOS platforms Build quick Mobile App prototypes on Android and iOS platformsBuild quick Mobile App prototypes on Android and iOS platforms.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update).\n', 'Full Time', 'Build quick Mobile App prototypes on Android and iOS platforms', 'Information Technology', 'Test,Interview', 'Freshers'),
('Coca@cola.com', 'Associate Software Engineer', 'Indore', 'B.E/B.Tech [CSE/IS/IT] from 2020/2021 batch with 6', '10 LPA', '2021-06-06', '2021-07-29', '788', 'This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.\nBuild quick Mobile App prototypes on Android and iOS platforms Build quick Mobile App prototypes on Android and iOS platformsBuild quick Mobile App prototypes on Android and iOS platforms.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update).\n', 'Full Time', 'Build quick Mobile App prototypes on Android and iOS platforms', 'Information Technology', 'Test,Interview', 'Freshers'),
('cis@cisco.com', 'Associate Software Engineer', 'Delhi', 'B.E/B.Tech [CSE/IS/IT] from 2020/2021 batch with 6', '10 LPA', '2021-06-06', '2021-07-29', '789', 'This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.\nBuild quick Mobile App prototypes on Android and iOS platforms Build quick Mobile App prototypes on Android and iOS platformsBuild quick Mobile App prototypes on Android and iOS platforms.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update) and it is a monthly release to all the customers.This is the requirement for Apple product. Part of the work is called PRU (Product Recognition Update).\n', 'Full Time', 'Build quick Mobile App prototypes on Android and iOS platforms', 'Information Technology', 'Test,Interview', 'Freshers');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(100) NOT NULL,
  `pswd` varchar(50) NOT NULL,
  `utype` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `pswd`, `utype`) VALUES
('acc@accenture.com', 'accenture', 'corporate'),
('app@apple.com', 'apple', 'corporate'),
('bbva@bancomer.com', 'bancomer', 'corporate'),
('cap@gemini.com', 'capegemini', 'corporate'),
('cis@amazon.com', 'amazon', 'corporate'),
('cis@cisco.com', 'cisco', 'corporate'),
('Coca@cola.com', 'cocacola', 'corporate'),
('dell@dell.com', 'dell', 'corporate'),
('elon@tesla.com', 'tesla', 'corporate'),
('fed@fedex.com', 'fedex', 'corporate'),
('flip@kart.com', 'flipkart', 'corporate'),
('Google@gmail.com', 'google', 'corporate'),
('harshyadav724@gmail.com', '12345678', 'user'),
('hp@hewlett.com', 'hewlett', 'corporate'),
('ibm@machine.com', 'ibmachine', 'corporate'),
('in@intel.com', 'intel', 'corporate'),
('ishanyadav724@gmail.com', '12345678', 'user'),
('kentuky@kfc.com', 'kentuky', 'corporate'),
('no@kai.com', 'nokia', 'corporate'),
('ora@oracle.com', 'oracle', 'corporate'),
('rajyadav724@gmail.com', '12345678', 'user'),
('sam@sang.com', 'samsang', 'corporate'),
('shashankyadav724@gmail.com', '12345678', 'user'),
('tata@tcs.com', 'tata', 'corporate'),
('udayyadav724@gmail.com', '12345678', 'user'),
('xcvxc', 'xvxc', 'corporate');

-- --------------------------------------------------------

--
-- Table structure for table `mssge`
--

CREATE TABLE IF NOT EXISTS `mssge` (
  `id` varchar(50) NOT NULL,
  `mssg` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mssge`
--

INSERT INTO `mssge` (`id`, `mssg`) VALUES
('1', 'All Registered Companies are 100% Verified'),
('2', 'Kindly Check Last Date To Apply !'),
('3', 'You Can Apply Any Company In which Your Qualification Meets . '),
('4', 'kindly Give Your Correct Information !'),
('5', 'You Can Apply Any Number of Companies !'),
('6', 'You Can Apply Free Of Cost !'),
('7', 'You Can Ask Your Queries To Particular Company !'),
('8', 'Keep Visiting For Regular Update !');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `qid` varchar(100) NOT NULL,
  `ques` varchar(500) NOT NULL,
  `opt1` varchar(500) NOT NULL,
  `opt2` varchar(500) NOT NULL,
  `opt3` varchar(500) NOT NULL,
  `opt4` varchar(500) NOT NULL,
  `corrct` varchar(500) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qid`, `ques`, `opt1`, `opt2`, `opt3`, `opt4`, `corrct`) VALUES
('1', 'HTML is what type of language ?', 'Scripting Language', 'Markup Language', 'Programming Language', 'Network Protocol', 'Markup Language'),
('10', 'What tag is used to display a picture in a HTML page?', 'picture', 'image', 'img', 'src', 'img'),
('2', 'HTML uses', 'User defined tags', 'Pre-specified tags', 'Fixed tags defined by the language', 'Tags only for linking', 'Fixed tags defined by the language'),
('3', 'The year in which HTML was first proposed _______.', '1990', '1980', '2000', '1995', '1990'),
('4', 'Fundamental HTML Block is known as ___________.', 'HTML Body', 'HTML Tag', 'HTML Attribute', 'HTML Element', 'HTML Tag'),
('5', 'Apart from bold tag, what other tag makes text bold ?', 'fat', 'strong', 'black', 'emp', 'strong'),
('6', 'What is the full form of HTML?', 'HyperText Markup Language', 'Hyper Teach Markup Language', 'Hyper Tech Markup Language', 'None of these', 'HyperText Markup Language'),
('7', 'Who is Known as the father of World Wide Web WWW?', 'Robert Cailliau', 'Tim Thompson', 'Charles Darwin', 'Tim Berners-Lee', 'Tim Berners-Lee'),
('8', 'What should be the first tag in any HTML document', 'head', 'title', 'html', 'document', 'html'),
('9', 'HTML web pages can be read and rendered by _________.', 'Compiler', 'Server', 'Web Browser', 'Interpreter', 'Web Browser');

-- --------------------------------------------------------

--
-- Table structure for table `regcmp`
--

CREATE TABLE IF NOT EXISTS `regcmp` (
  `oname` varchar(100) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `web` varchar(100) NOT NULL,
  `count` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pin` varchar(20) NOT NULL,
  `ocon` varchar(20) NOT NULL,
  `iso` varchar(20) NOT NULL,
  `utype` varchar(20) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regcmp`
--

INSERT INTO `regcmp` (`oname`, `addr`, `web`, `count`, `state`, `pin`, `ocon`, `iso`, `utype`, `logo`, `fname`, `email`, `phone`, `status`) VALUES
('Accenture', 'B-2/62', 'www.accenture.com', 'India', 'Delhi', '324569', '1234567890', 'ISO 9001:2015', 'Corporate', 'corporate/acc.png', 'XYZ', 'acc@accenture.com', '1234567890', 'Allowed'),
('Apple', 'B-2/62', 'www.apple.com', 'India', 'Banglore', '234567', '1234567890', 'ISO 9001:2015', 'Corporate', 'corporate/apple.png', 'XYZ', 'app@apple.com', '1234567890', 'Allowed'),
('Bancomer', 'B-2/62', 'www.bbva.com', 'India', 'Delhi', '245793', '1234567890', 'ISO 9001:2015', 'Corporate', 'corporate/BBVA-Company-Logo.gif', 'XYZ', 'bbva@bancomer.com', '1234567890', 'Allowed'),
('Capgemini', 'B-2/62', 'www.capegemini.com', 'India', 'Mumbai', '400001', '1234567890', 'ISO 9001:2015', 'Corporate', 'corporate/capgemini_logo-768x178.png', 'XYZ', 'cap@gemini.com', '1234567899', 'Allowed'),
('Amazon', 'B-2/62', 'www.amazon.in', 'India', 'Delhi', '201309', '1234567890', 'ISO 9001:2015', 'Corporate', 'corporate/amazon-logo.png', 'XYZ', 'cis@amazon.com', '1234567898', 'Allowed'),
('Cisco', 'B-2/62', 'www.cisco.com', 'India', 'Delhi', '201397', '1234567890', 'ISO 9001:2015', 'Corporate', 'corporate/Cisco-Company-Logo.jpg', 'XYZ', 'cis@cisco.com', '1234567899', 'Allowed'),
('Cocacola', 'B-2/62', 'www.cocacola.com', 'India', 'Noida', '321975', '1234567890', 'ISO 9001:2015', 'Corporate', 'corporate/Coca-Cola-Company-Logo.jpg', 'XYZ', 'Coca@cola.com', '1234567890', 'Allowed'),
('Dell', 'B-2/62', 'www.dell.com', 'India', 'Banglore', '234563', '1234567890', 'ISO 9001:2015', 'Corporate', 'corporate/dell.png', 'XYZ', 'dell@dell.com', '1234567899', 'Allowed'),
('Tesla', 'B-2/62', 'www.tesla.com', 'India', 'Mumbai', '234678', '1234567890', 'ISO 9001:2015', 'Corporate', 'corporate/R0287303cf91f9e6d6786fe4882e31858.jfif', 'XYZ', 'elon@tesla.com', '1234567890', 'Allowed'),
('fedex', 'B-2/62', 'www.fedex.com', 'India', 'Mumbai', '40001', '1234567890', 'ISO 9001:2015', 'Corporate', 'corporate/Fed-Ex-Company-Logo.jpg', 'XYZ', 'fed@fedex.com', '1234567898', 'Allowed'),
('Flipkart', 'B-2/62', 'www.flipkart.com', 'India', 'Mumbai', '400001', '1234567890', 'ISO 9001:2015', 'Corporate', 'corporate/flipkart-logo-696x198.jpg', 'XYZ', 'flip@kart.com', '1234567899', 'Allowed'),
('Google', 'B-2/62', 'www.google.com', 'India', 'Mumbai', '300004', '1234567890', 'ISO 9001:2015', 'Corporate', 'corporate/google.png', 'XYZ', 'Google@gmail.com', '1234567890', 'Allowed'),
('HP', 'B-2/62', 'www.hp.com', 'India', 'Banglore', '235987', '1234567890', 'ISO 9001:2015', 'Corporate', 'corporate/hp-bangalore-768x182.jpeg', 'XYZ', 'hp@hewlett.com', '1234567899', 'Allowed'),
('IBM', 'B-2/62', 'www.ibm.com', 'India', 'Indore', '234543', '1234567890', 'ISO 9001:2015', 'Corporate', 'corporate/234751-15796438337369962_origin.png', 'XYZ', 'ibm@machine.com', '1234567890', 'Allowed'),
('Intel', 'B-2/62', 'www.intel.com', 'India', 'Mumbai', '343200', '1234567890', 'ISO 9001:2015', 'Corporate', 'corporate/Intel-Company-Logo.jpg', 'XYZ', 'in@intel.com', '1234567899', 'Allowed'),
('KFC', 'B-2/62', 'www.kfc.com', 'India', 'Indore', '234876', '1234567890', 'ISO 9001:2015', 'Corporate', 'corporate/KFC-1048x582.jpg', 'XYz', 'kentuky@kfc.com', '1234567890', 'Allowed'),
('Nokia', 'B-2/62', 'www.nokia.com', 'India', 'Mumbai', '234543', '1234567890', 'ISO 9001:2015', 'Corporate', 'corporate/Nokia-Company-Logo.jpg', 'XYZ', 'no@kai.com', '1234567899', 'Allowed'),
('Oracle', 'B-2/62', 'www.oracle.com', 'India', 'Banglore', '234768', '1234567890', 'ISO 9001:2015', 'Corporate', 'corporate/oracle_logo.gif', 'XYZ', 'ora@oracle.com', '1234567890', 'Allowed'),
('Samsung', 'B-2/62', 'www.samsung.com', 'India', 'Chennai', '234567', '1234567890', 'ISO 9001:2015', 'Corporate', 'corporate/Samsung-Company-Logo.jpg', 'XYZ', 'sam@sang.com', '1234567899', 'Allowed'),
('TCS', 'B-2/62', 'www.tcs.com', 'India', 'Mumbai', '400001', '1234567890', 'ISO 9001:2015', 'Corporate', 'corporate/TCS_Logo.jpg', 'XYZ', 'tata@tcs.com', '1234567890', 'Allowed');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `sid` varchar(100) NOT NULL,
  `edate` varchar(100) NOT NULL,
  `maximum` varchar(100) NOT NULL,
  `obtained` varchar(100) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`sid`, `edate`, `maximum`, `obtained`) VALUES
('ishanyadav724@gmail.com', '2021-06-07', '50', '50'),
('shashankyadav724@gmail.com', '2021-06-07', '50', '50'),
('udayyadav724@gmail.com', '2021-06-07', '50', '40');

-- --------------------------------------------------------

--
-- Table structure for table `storeans`
--

CREATE TABLE IF NOT EXISTS `storeans` (
  `user` varchar(100) NOT NULL,
  `qid` varchar(100) NOT NULL,
  `ans` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storeans`
--

INSERT INTO `storeans` (`user`, `qid`, `ans`, `date`) VALUES
('shashankyadav724@gmail.com', '1', 'Markup Language', '2021-06-07'),
('shashankyadav724@gmail.com', '10', 'img', '2021-06-07'),
('shashankyadav724@gmail.com', '2', 'Fixed tags defined by the language', '2021-06-07'),
('shashankyadav724@gmail.com', '3', '1990', '2021-06-07'),
('shashankyadav724@gmail.com', '4', 'HTML Tag', '2021-06-07'),
('shashankyadav724@gmail.com', '5', 'strong', '2021-06-07'),
('shashankyadav724@gmail.com', '6', 'HyperText Markup Language', '2021-06-07'),
('shashankyadav724@gmail.com', '7', 'Tim Berners-Lee', '2021-06-07'),
('shashankyadav724@gmail.com', '8', 'html', '2021-06-07'),
('shashankyadav724@gmail.com', '9', 'Web Browser', '2021-06-07'),
('ishanyadav724@gmail.com', '1', 'Markup Language', '2021-06-07'),
('ishanyadav724@gmail.com', '10', 'img', '2021-06-07'),
('ishanyadav724@gmail.com', '2', 'Fixed tags defined by the language', '2021-06-07'),
('ishanyadav724@gmail.com', '3', '1990', '2021-06-07'),
('ishanyadav724@gmail.com', '4', 'HTML Tag', '2021-06-07'),
('ishanyadav724@gmail.com', '5', 'strong', '2021-06-07'),
('ishanyadav724@gmail.com', '6', 'HyperText Markup Language', '2021-06-07'),
('ishanyadav724@gmail.com', '7', 'Tim Berners-Lee', '2021-06-07'),
('ishanyadav724@gmail.com', '8', 'html', '2021-06-07'),
('ishanyadav724@gmail.com', '9', 'Web Browser', '2021-06-07'),
('udayyadav724@gmail.com', '1', 'Markup Language', '2021-06-07'),
('udayyadav724@gmail.com', '10', 'img', '2021-06-07'),
('udayyadav724@gmail.com', '2', 'Fixed tags defined by the language', '2021-06-07'),
('udayyadav724@gmail.com', '3', '1990', '2021-06-07'),
('udayyadav724@gmail.com', '4', 'HTML Tag', '2021-06-07'),
('udayyadav724@gmail.com', '5', 'strong', '2021-06-07'),
('udayyadav724@gmail.com', '6', 'HyperText Markup Language', '2021-06-07'),
('udayyadav724@gmail.com', '7', 'Tim Berners-Lee', '2021-06-07'),
('udayyadav724@gmail.com', '8', 'title', '2021-06-07'),
('udayyadav724@gmail.com', '9', 'Interpreter', '2021-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `vid` varchar(100) NOT NULL,
  `vtitle` varchar(5000) NOT NULL,
  `vdis` varchar(5000) NOT NULL,
  `video` varchar(10000) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`vid`, `vtitle`, `vdis`, `video`) VALUES
('18', 'Lecture-9', 'Web development refers to the building, creating, and maintaining of websites. It includes aspects such as web design, web publishing, web programming, and database management.', 'video/Namaste Bootstrap  .mp4'),
('26', 'Lecture-6', 'Web development refers to the building, creating, and maintaining of websites. It includes aspects such as web design, web publishing, web programming, and database management.', 'video/Css Lecture 5.mp4'),
('27', 'Lecture-4', 'Web development refers to the building, creating, and maintaining of websites. It includes aspects such as web design, web publishing, web programming, and database management.', 'video/Learn Animations in CSS.mp4'),
('32', 'Lecture-3', 'Web development refers to the building, creating, and maintaining of websites. It includes aspects such as web design, web publishing, web programming, and database management.', 'video/Lecture 3.mp4'),
('42', 'Lecture-5', 'Web development refers to the building, creating, and maintaining of websites. It includes aspects such as web design, web publishing, web programming, and database management.', 'video/Css Lecture 2.mp4'),
('59', 'Lecture-7', 'Web development refers to the building, creating, and maintaining of websites. It includes aspects such as web design, web publishing, web programming, and database management.', 'video/Customization .mp4'),
('62', 'Lecture-2', 'Web development refers to the building, creating, and maintaining of websites. It includes aspects such as web design, web publishing, web programming, and database management.', 'video/Lecture 2.mp4'),
('66', 'Lecture-0', 'Web development refers to the building, creating, and maintaining of websites. It includes aspects such as web design, web publishing, web programming, and database management.', 'video/Web Development  .mp4'),
('81', 'Lecture-1', 'Web development refers to the building, creating, and maintaining of websites. It includes aspects such as web design, web publishing, web programming, and database management.', 'video/Lecture1.mp4'),
('94', 'Lecture-8', 'Web development refers to the building, creating, and maintaining of websites. It includes aspects such as web design, web publishing, web programming, and database management.', 'video/Bootstrap .mp4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
