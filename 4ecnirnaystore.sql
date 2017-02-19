-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2017 at 04:58 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4ecnirnaystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(100) NOT NULL,
  `course_id` int(100) NOT NULL,
  `ip_address` varchar(300) NOT NULL,
  `user_id` int(100) NOT NULL,
  `course_title` varchar(300) NOT NULL,
  `course_image` varchar(300) NOT NULL,
  `course_type` varchar(300) NOT NULL,
  `course_college` int(100) NOT NULL,
  `course_price` varchar(300) NOT NULL,
  `total_amount` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `course_id`, `ip_address`, `user_id`, `course_title`, `course_image`, `course_type`, `course_college`, `course_price`, `total_amount`) VALUES
(1, 2, '3.196.73.45', 1, 'Electrical Engineering', 'electrical.jpg', 'Weekend Course', 3, '2000', '2000'),
(4, 2, '3.196.73.45', 4, 'Aerospace Engineering', 'aeronautical.jpg', 'Weekend Course', 38, '2000', '2000'),
(5, 3, '3.196.73.45', 5, 'Civil Engineering', 'civil.jpg', 'Weekend Course', 33, '2000', '2000'),
(6, 2, '3.196.73.45', 5, 'Aerospace Engineering', 'aeronautical.jpg', 'Weekend Course', 38, '2000', '2000'),
(7, 5, '3.196.73.45', 5, 'Electrical Engineering', 'electrical.jpg', 'Weekend Course', 25, '2000', '2000'),
(8, 4, '3.196.73.45', 5, 'Computer Engineering', 'computer.jpg', 'Weekend Course', 29, '2000', '2000'),
(9, 1, '3.196.73.45', 6, 'Architecture Engineering', 'architecture.jpg', 'Weekend Course', 37, '2000', '2000'),
(10, 3, '3.196.73.45', 6, 'Civil Engineering', 'civil.jpg', 'Weekend Course', 33, '2000', '2000'),
(11, 2, '3.196.73.45', 6, 'Aerospace Engineering', 'aeronautical.jpg', 'Weekend Course', 38, '2000', '2000'),
(12, 1, '3.196.73.45', 4, 'Architecture Engineering', 'architecture.jpg', 'Weekend Course', 37, '2000', '2000'),
(13, 1, '3.196.73.45', 9, 'Architecture Engineering', 'architecture.jpg', 'Weekend Course', 37, '2000', '2000'),
(14, 2, '3.196.73.45', 9, 'Aerospace Engineering', 'aeronautical.jpg', 'Weekend Course', 38, '2000', '2000'),
(15, 3, '3.196.73.45', 9, 'Civil Engineering', 'civil.jpg', 'Weekend Course', 33, '2000', '2000'),
(16, 4, '3.196.73.45', 9, 'Computer Engineering', 'computer.jpg', 'Weekend Course', 29, '2000', '2000'),
(17, 1, '3.196.73.45', 10, 'Architecture Engineering', 'architecture.jpg', 'Weekend Course', 37, '2000', '2000'),
(18, 1, '3.196.73.45', 12, 'Architecture Engineering', 'architecture.jpg', 'Weekend Course', 37, '2000', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `college_info`
--

CREATE TABLE `college_info` (
  `college_id` int(100) NOT NULL,
  `discipline_id` int(100) NOT NULL,
  `stream_id` int(100) NOT NULL,
  `college_name` text NOT NULL,
  `college_address1` text NOT NULL,
  `college_address2` text NOT NULL,
  `college_city` text NOT NULL,
  `college_state` text NOT NULL,
  `college_country` varchar(200) NOT NULL,
  `college_website` varchar(300) NOT NULL,
  `college_image` varchar(300) NOT NULL,
  `college_contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_info`
--

INSERT INTO `college_info` (`college_id`, `discipline_id`, `stream_id`, `college_name`, `college_address1`, `college_address2`, `college_city`, `college_state`, `college_country`, `college_website`, `college_image`, `college_contact`) VALUES
(1, 1, 1, 'National Institute of Design', 'Paldi  Ahmedabad 380 007\r\nPhone:+91 79 2662 9500 /2662 9600\r\nFax: +91 79 26621167', '', 'Ahmedabad', 'Gujarat', 'India', 'http://www.nid.edu/institute/campuses/ahmedabad.html', 'NIDlogo.jpg', ''),
(2, 1, 1, 'Industrial Design Centre (IDC)  IIT Bombay', 'Industrial Design Centre \r\nIndian Institute of Technology Bombay \r\nPowai Mumbai 400 076  \r\nIndia \r\nPhone\r\n091-022-2576 7801\r\nFax\r\n091-022-2576 7803\r\n091-022-2572 3480', '', 'Mumbai', 'Maharashtra', 'India', 'http://www.idc.iitb.ac.in/index.php', 'IDChome_logo.jpg', ''),
(3, 1, 1, 'Indian Institute of Digital Art & Animation', 'BJ-97  BJ Block Sector II Salt Lake City Kolkata West Bengal 700091', '', 'Kolkata', 'West Bengal', 'India', 'http://iidaaindia.com/', '', ''),
(4, 1, 1, 'Birla Institute of Technology\r\n', 'Campus Vidya Vihar Pilani Pilani Road BITS  Pilani Rajasthan 333031\r\nPhone:01596 245 073\r\n', '', 'Pilani\r\n', 'Rajasthan\r\n', 'India\r\n', 'http://www.bits-pilani.ac.in/\r\n', 'BITS_university_logo.jpg\r\n', ''),
(5, 1, 1, 'Film and Television Institute of India\r\n', '"Law College Road Pune - 411 004 \r\n(Maharashtra) INDIA.\r\n\r\nTel No.: \r\n+91 - 020- 25431817 / 25433016 / 25430017"\r\n', 'Pune\r\n', 'Pune\r\n', 'Maharashtra\r\n', 'India\r\n', 'http://www.ftiindia.com/\r\n', 'ftii.jpg\r\n', ''),
(6, 1, 1, 'Vogue Institute of Fashion Technology\r\n', '"No. 4 Anand Towers III Floor Opp. To PF Building \r\nRajaram Mohan Roy Road  Richmond Circle\r\nBangalore ? 560025 Karnataka  India.\r\nGive a Missed Call: 02261816372"\r\n', '', 'Bengaluru\r\n', 'Karnataka\r\n', 'India\r\n', 'http://www.voguefashioninstitute.com/\r\n', 'vogue-logo.jpg\r\n', ''),
(7, 1, 1, 'IIFA Multimedia (Institute for Interior Fashion and Animation)\r\n', '"Address: 261 80 feet main road 9th Main road Srinivasa Nagar near banckcolony bus stop Banashankari Bengaluru Karnataka 560050\r\nPhone: 098450 06824"\r\n', '', 'Bengaluru\r\n', 'Karnataka\r\n', 'India\r\n', 'http://www.iifamultimedia.in/index.php\r\n', 'IIFA_logo.jpg\r\n', ''),
(8, 1, 1, 'National Institute of Management Studies - Bangalore GOVERNMENT\r\n', '"Address: 123 1st Main Road  Kengeri Satellite Town  Bengaluru  Karnataka 560060\r\nPhone: 080 2848 5569"\r\n', '', 'Bengaluru\r\n', 'Karnataka\r\n', 'India\r\n', '', 'nims_logo.jpg\r\n', ''),
(9, 1, 1, 'Manipal University Bangalore Campus (Department of Animation) GOVERNMENT\r\n', 'Manipal.edu  Madhav Nagar  Manipal-576104\r\n', '', 'Manipal\r\n', 'Karnataka\r\n', 'India\r\n', 'http://manipal.edu/\r\n', 'manipal_logo.jpg\r\n', ''),
(10, 1, 1, 'Arena Multimedia Bangalore\r\n', '"11  11TH MAIN ROAD  \r\nJAYANAGAR 4TH BLOCK  OPPOSITE ARVIND STORES  BANGALORE  KARNATAKA\r\nINDIA-560011\r\nPh: 80-26653866 / 80-41307228 / 919341228440 / 918546811140 "\r\n', '', 'Bengaluru\r\n', 'Karnataka\r\n', 'India\r\n', 'http://www.arena-multimedia.com/\r\n', '', ''),
(11, 2, 6, 'Christ University (CU Bangalore)\r\n', 'Hosur Road  Bangalore  Karnataka, India- 560029\r\n', '', 'Bengaluru\r\n', 'Karnataka\r\n', 'India\r\n', 'http://www.christuniversity.in/\r\n', 'ChristUniv-logo.jpg\r\n', ''),
(12, 2, 6, 'St. Joseph''s College of Commerce (SJCC)\r\n', 'No:163  Brigade Road Bangalore  Karnataka  India- 560025\r\n', '', 'Bengaluru\r\n', 'Karnataka\r\n', 'India\r\n', 'http://www.sjc.ac.in/\r\n', 'St Joseph-logo.jpg\r\n', ''),
(13, 2, 6, 'MOUNT CARMEL COLLEGE - [MCC]\r\n', 'No.58  Palace Road  Vasanth Nagar Bengaluru Karnataka 560052\r\n', '', 'Bengaluru\r\n', 'Karnataka\r\n', 'India\r\n', 'http://www.mountcarmelcollegeblr.co.in/\r\n', 'Mount Carmel-logo.jpg\r\n', ''),
(14, 3, 16, 'R V College of Engineering\r\n', 'R V Vidyanikethan Post Mysore Road Bangalore Karnataka India- 560059         \r\n', '', 'Bengaluru\r\n', 'Karnataka\r\n', 'India\r\n', 'http://www.rvce.edu.in/\r\n', 'rvce-logo.jpg\r\n', ''),
(15, 3, 16, 'PES University\r\n', '100 Feet Ring Road BSK III Stage Banashankari Bangalore Karnataka India- 560085\r\n', '', 'Bengaluru\r\n', 'Karnataka\r\n', 'India\r\n', 'http://pesit.pes.edu/\r\n', 'pesit-logo.jpg\r\n', ''),
(16, 3, 16, 'BMS College of Engineering\r\n', 'P.O. Box No. 1908 Bull Temple Road Kempe Gowda Road Bangalore Karnataka India- 560019\r\n', '', 'Bengaluru\r\n', 'Karnataka\r\n', 'India\r\n', 'http://www.bmsce.ac.in/\r\n', 'bmsce-logo.jpg\r\n', ''),
(17, 3, 16, 'M S Ramaiya College of Engineering\r\n', 'MSR Nagar MSRIT Post 80 Ft. Road Bangalore Karnataka India- 560054\r\n', '', 'Bengaluru\r\n', 'Karnataka\r\n', 'India\r\n', 'http://www.msrit.edu:8080/index.jsp\r\n', 'msrit-logo.jpg\r\n', ''),
(18, 3, 14, 'R V College of Engineering\r\n', 'R V Vidyanikethan Post Mysore Road Bangalore Karnataka India- 560059         \r\n', '', 'Bengaluru\r\n', 'Karnataka\r\n', 'India\r\n', 'http://www.rvce.edu.in/\r\n', 'rvce-logo.jpg\r\n', ''),
(19, 3, 14, 'PES University\r\n', '100 Feet Ring Road BSK III Stage Banashankari Bangalore Karnataka India- 560085\r\n', '', 'Bengaluru\r\n', 'Karnataka\r\n', 'India\r\n', 'http://pesit.pes.edu/\r\n', 'pesit-logo.jpg\r\n', ''),
(20, 3, 14, 'BMS College of Engineering\r\n', 'P.O. Box No. 1908 Bull Temple Road Kempe Gowda Road Bangalore Karnataka India- 560019\r\n', '', 'Bengaluru\r\n', 'Karnataka\r\n', 'India\r\n', 'http://www.bmsce.ac.in/\r\n', 'bmsce-logo.jpg\r\n', ''),
(21, 3, 14, 'M S Ramaiya College of Engineering\r\n', 'MSR Nagar MSRIT Post 80 Ft. Road Bangalore Karnataka India- 560054\r\n', '', 'Bengaluru\r\n', 'Karnataka\r\n', 'India\r\n', 'http://www.msrit.edu:8080/index.jsp\r\n', 'msrit-logo.jpg\r\n', ''),
(22, 3, 13, 'R V College of Engineering\r\n', 'R V Vidyanikethan Post Mysore Road Bangalore Karnataka India- 560059         \r\n', '', 'Bengaluru\r\n', 'Karnataka\r\n', 'India\r\n', 'http://www.rvce.edu.in/\r\n', 'rvce-logo.jpg\r\n', ''),
(23, 3, 13, 'PES University\r\n', '100 Feet Ring Road BSK III Stage Banashankari Bangalore Karnataka India- 560085\r\n', '\r\n', 'Bengaluru\r\n', 'Karnataka\r\n', 'India\r\n', 'http://pesit.pes.edu/\r\n', 'pesit-logo.jpg', ''),
(24, 3, 13, 'BMS College of Engineering\r\n', 'P.O. Box No. 1908 Bull Temple Road Kempe Gowda Road Bangalore Karnataka India- 560019\r\n', '', 'Bengaluru\r\n', 'Karnataka\r\n', 'India\r\n', 'http://www.bmsce.ac.in/\r\n', 'bmsce-logo.jpg\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `course_info`
--

CREATE TABLE `course_info` (
  `course_id` int(100) NOT NULL,
  `course_title` text NOT NULL,
  `course_college` int(100) NOT NULL,
  `course_discipline` int(100) NOT NULL,
  `course_stream` int(100) NOT NULL,
  `course_desc` text NOT NULL,
  `course_image` varchar(300) NOT NULL,
  `course_type` varchar(300) NOT NULL,
  `course_price` varchar(300) NOT NULL,
  `course_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_info`
--

INSERT INTO `course_info` (`course_id`, `course_title`, `course_college`, `course_discipline`, `course_stream`, `course_desc`, `course_image`, `course_type`, `course_price`, `course_keywords`) VALUES
(1, 'Architecture Engineering', 37, 3, 9, '', 'architecture.jpg', 'Weekend Course', '2000', 'architecture, msrit'),
(2, 'Aerospace Engineering', 38, 3, 10, '', 'aeronautical.jpg', 'Weekend Course', '2000', 'Aerospace Aeronautical'),
(3, 'Civil Engineering', 33, 3, 11, '', 'civil.jpg', 'Weekend Course', '2000', 'civil, msrit'),
(4, 'Computer Engineering', 29, 3, 12, '', 'computer.jpg', 'Weekend Course', '2000', 'computer'),
(5, 'Electrical Engineering', 25, 3, 13, '', 'electrical.jpg', 'Weekend Course', '2000', 'electrical');

-- --------------------------------------------------------

--
-- Table structure for table `discipline_info`
--

CREATE TABLE `discipline_info` (
  `discipline_id` int(100) NOT NULL,
  `discipline_title` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discipline_info`
--

INSERT INTO `discipline_info` (`discipline_id`, `discipline_title`) VALUES
(1, 'Arts'),
(2, 'Commerce'),
(3, 'Engineering'),
(4, 'Hospitality'),
(5, 'Law'),
(6, 'Medicine'),
(7, 'Sciences');

-- --------------------------------------------------------

--
-- Table structure for table `stream_info`
--

CREATE TABLE `stream_info` (
  `stream_id` int(100) NOT NULL,
  `discipline_id` int(100) NOT NULL,
  `stream_title` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stream_info`
--

INSERT INTO `stream_info` (`stream_id`, `discipline_id`, `stream_title`) VALUES
(1, 1, 'Animation'),
(2, 1, 'Designing'),
(3, 1, 'Film/Media'),
(4, 1, 'Journalism'),
(5, 1, 'Languages'),
(6, 2, 'Accounting'),
(7, 2, 'Banking'),
(8, 2, 'Finance'),
(9, 3, 'Architecture'),
(10, 3, 'Aerospace'),
(11, 3, 'Civil'),
(12, 3, 'Computer'),
(13, 3, 'Electrical'),
(14, 3, 'Electronics'),
(15, 3, 'Information Sciences'),
(16, 3, 'Mechanical'),
(17, 3, 'Marine'),
(18, 4, 'Chef'),
(19, 4, 'Event Management'),
(20, 4, 'Hotel Management'),
(21, 5, 'Agriculture'),
(22, 5, 'Dental'),
(23, 5, 'Medical'),
(24, 5, 'Nursing'),
(25, 5, 'Pharmacy'),
(26, 5, 'Physiotherapy'),
(27, 6, 'BCA'),
(28, 6, 'Biology'),
(29, 6, 'Biotechnology'),
(30, 6, 'Chemistry'),
(31, 6, 'Environmental Sciences'),
(32, 6, 'Mathematics'),
(33, 6, 'Physics'),
(34, 6, 'BBA'),
(35, 6, 'MBA');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(300) NOT NULL,
  `class` int(10) NOT NULL,
  `school` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`, `class`, `school`) VALUES
(1, 'Chitra', 'Balgopal', 'test@test.com', 'abcdefghi', '1234567890', 'cfefrerf', 'fedred', 7, 'csdfe'),
(2, 'Chitra', 'Balgopal', 'chitu_1999@yahoo.com', '33ccfb19998c79872060312a6890e799', '1234567890', 'fdefedf', 'ugbnhjjhgf', 6, 'ghjuikj'),
(3, 'Asskjd', 'Ddfcdc', 'test@mail.com', '7adfca2f2aba4cd301a02b9f33ca9037', '1234567890', 'dvsdfef', 'vfvfcwd', 4, 'vdfverffer'),
(6, 'Suresh', 'Gangadharan', 'suresh@test.com', '7adfca2f2aba4cd301a02b9f33ca9037', '1234567890', 'dvsdvfgb', 'fgvsdfsdfed', 5, 'vdvfdsc'),
(7, 'Testtest', 'Test', 'test@test1.com', '7f2ababa423061c509f4923dd04b6cf1', '1234567890', 'sdedgr', 'sfrfghgf', 3, 'cdvf'),
(8, 'TestTest', 'Testing', 'testing@gmail.com', 'e1a7c4358706c6202e95d0356b9d7672', '1234567890', 'dsfrhggthb', 'gvfgbgfbg', 3, 'safrfhggh'),
(10, 'Advait', 'Suresh', 'adu@test.com', 'aa70efd8d9f523bfd0807c35d1ce57fd', '1234567890', 'dvfvrefr', 'vdfvdgerfr', 5, 'dxvdfvf'),
(12, 'Mythili', 'Suresh', 'mitu@test.com', 'aa70efd8d9f523bfd0807c35d1ce57fd', '1234567890', 'cdfef', 'fvfdrref', 1, 'cefefe'),
(13, 'Mythili', 'Suresh', 'm@test.com', 'aa70efd8d9f523bfd0807c35d1ce57fd', '1234567890', 'dfvfvf', ' fvbfdvfgv', 3, 'sdfasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `college_info`
--
ALTER TABLE `college_info`
  ADD PRIMARY KEY (`college_id`);

--
-- Indexes for table `course_info`
--
ALTER TABLE `course_info`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `discipline_info`
--
ALTER TABLE `discipline_info`
  ADD PRIMARY KEY (`discipline_id`);

--
-- Indexes for table `stream_info`
--
ALTER TABLE `stream_info`
  ADD PRIMARY KEY (`stream_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `college_info`
--
ALTER TABLE `college_info`
  MODIFY `college_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `course_info`
--
ALTER TABLE `course_info`
  MODIFY `course_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `discipline_info`
--
ALTER TABLE `discipline_info`
  MODIFY `discipline_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `stream_info`
--
ALTER TABLE `stream_info`
  MODIFY `stream_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
