-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2019 at 10:28 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_notifier`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_name` varchar(20) NOT NULL,
  `a_password` varchar(20) NOT NULL,
  `a_email` varchar(30) NOT NULL,
  `a_cno` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_name`, `a_password`, `a_email`, `a_cno`) VALUES
('admin', 'admin', 'sanketpatel850@gmail.com', '+917202075420');

-- --------------------------------------------------------

--
-- Table structure for table `eventlist`
--

CREATE TABLE `eventlist` (
  `e_id` int(11) NOT NULL,
  `e_name` varchar(20) NOT NULL,
  `em_id` int(11) NOT NULL,
  `e_description` text NOT NULL,
  `e_startdate` date NOT NULL,
  `e_enddate` date NOT NULL,
  `e_reg_startdate` date NOT NULL,
  `e_reg_lastdate` date NOT NULL,
  `e_link` varchar(100) NOT NULL,
  `e_locationlink` varchar(300) NOT NULL,
  `e_imagepath` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventlist`
--

INSERT INTO `eventlist` (`e_id`, `e_name`, `em_id`, `e_description`, `e_startdate`, `e_enddate`, `e_reg_startdate`, `e_reg_lastdate`, `e_link`, `e_locationlink`, `e_imagepath`) VALUES
(3, 'Spectrum', 2, 'We aim to foster innovation, inquisition and creativity among the masses and to enlighten young minds through technology. With many events and activities Spectrum 2019 is here to blow your minds off, to push you beyond your limits, to give you a platform to work on your ideas, to increase your knowledge and skills and to take you on a ride of an unforgettable and breathtaking journey. ', '2019-05-30', '2019-06-04', '2019-05-08', '2019-05-13', 'http://spectrum.adit.ac.in/', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14742.147157904154!2d72.9164636!3d22.5215561!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xadbe2043bbfd455b!2sA.+D.+Patel+Institute+of+Technology!5e0!3m2!1sen!2sin!4v1554579518368!5m2!1sen!2sin', 'spectrum.jpg'),
(5, 'Know How', 2, 'A Training & Placement Department Event', '2019-04-27', '2019-04-30', '2019-04-26', '2019-05-30', 'https://www.imaze2k19.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1095.4717656235046!2d72.92357017641694!3d22.55241675134009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e4e74c03b7749%3A0xab364c66fd4834c!2sBirla+Vishvakarma+Mahavidyalaya!5e0!3m2!1sen!2sin!4v1554578065393!5m2!1sen!2sin', 'knowhow.jpg'),
(6, 'Imaze 19', 2, 'With 17 years of history and still counting, IMAZE...', '2019-06-05', '2019-06-20', '2019-04-30', '2019-05-14', 'https://www.imaze2k19.com/', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.508606768005!2d72.91754191459539!3d22.56007323911656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e4e1285d628d5%3A0xe6cee346bfaa35d0!2sG+H+Patel+College+of+Engineering+%26+Technology!5e0!3m2!1sen!2sin!4v1554580163408!5m2!1sen!2sin', 'imaze.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `eventmanager`
--

CREATE TABLE `eventmanager` (
  `em_id` int(11) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_city` varchar(20) NOT NULL,
  `em_name` varchar(20) NOT NULL,
  `em_password` varchar(20) NOT NULL,
  `em_cno` int(11) NOT NULL,
  `em_email` varchar(30) NOT NULL,
  `em_imagepath` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventmanager`
--

INSERT INTO `eventmanager` (`em_id`, `c_name`, `c_city`, `em_name`, `em_password`, `em_cno`, `em_email`, `em_imagepath`) VALUES
(2, 'BVM', 'Surat', 'Sanket', '12345678', 123123164, 'sanket@gmail.com', 0),
(5, 'BVM', 'Surat', 'Parth', '$123Qwe$', 123456789, 'parth@gmail.com', 0),
(7, 'asdasd', 'Surat', 'asda', '$qweRTY@wW$12', 1231656489, 'sanketpatel850@gmail.com', 0),
(8, 'BVM', 'Anand', 'Rushabh', 'Poi12344', 12345646, 'r@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `eventmanager_temp`
--

CREATE TABLE `eventmanager_temp` (
  `em_tmpid` int(11) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_city` varchar(20) NOT NULL,
  `em_name` varchar(20) NOT NULL,
  `em_password` varchar(20) NOT NULL,
  `em_cno` int(11) NOT NULL,
  `em_email` varchar(30) NOT NULL,
  `em_imagepath` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventmanager_temp`
--

INSERT INTO `eventmanager_temp` (`em_tmpid`, `c_name`, `c_city`, `em_name`, `em_password`, `em_cno`, `em_email`, `em_imagepath`) VALUES
(2, 'fetr', 'basda', 'Ja', 'Qwer123w', 12345678, 'jay@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `p_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`p_id`, `u_id`, `sub_id`) VALUES
(1, 1, 4),
(34, 1, 13),
(35, 1, 28),
(36, 1, 11),
(37, 1, 9),
(38, 1, 21),
(39, 1, 21),
(40, 1, 17),
(41, 1, 10),
(42, 1, 24);

-- --------------------------------------------------------

--
-- Table structure for table `subevent`
--

CREATE TABLE `subevent` (
  `sub_id` int(11) NOT NULL,
  `e_id` int(11) NOT NULL,
  `sub_name` varchar(20) NOT NULL,
  `sub_description` text NOT NULL,
  `sub_date` date NOT NULL,
  `sub_time` time NOT NULL,
  `sub_price` int(11) NOT NULL,
  `sub_points` int(11) NOT NULL,
  `sub_venue` varchar(20) NOT NULL,
  `sub_type` varchar(20) NOT NULL,
  `sub_totalentry` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subevent`
--

INSERT INTO `subevent` (`sub_id`, `e_id`, `sub_name`, `sub_description`, `sub_date`, `sub_time`, `sub_price`, `sub_points`, `sub_venue`, `sub_type`, `sub_totalentry`) VALUES
(3, 2, 'Code', 'Coed', '2019-03-29', '01:30:00', 20, 20, 'Anand', 'Tech', 5),
(4, 1, 'CS:Go', 'Gaming', '2019-04-25', '20:20:26', 25, 0, 'Anand', 'Non Tech', 2),
(5, 1, 'Hard Wizard', 'Hardware Quiz', '2019-04-27', '14:11:00', 30, 15, 'Anand', 'Tech', 0),
(6, 3, 'Group Discussion', 'Soft Skills Development', '2019-04-17', '00:25:00', 15, 25, 'BVM', 'Placement', 1),
(8, 1, 'PUBG', 'GAme', '2019-04-25', '00:25:00', 20, 30, 'GCET', 'Non TECH', 10),
(9, 5, 'Interview', 'An INterview', '2019-04-30', '00:00:00', 20, 10, 'A BLOCK', 'Placement', 1),
(10, 1, 'Webician', 'Curious UI/UX Weber', '2019-04-30', '17:25:00', 10, 25, 'B Block', 'Tech', 5),
(11, 1, 'F.R..I.E.N.D.S', 'a FUN EVENT', '2019-04-23', '00:25:00', 10, 10, 'A BLOCK', 'Tech', 1),
(12, 1, 'Robofight', 'Fights between robots', '2019-04-30', '12:25:00', 10, 10, 'A Block', 'Tech', 5),
(13, 1, 'FantacyCRICKET', 'A fun event', '2019-04-30', '15:25:00', 15, 10, '15', 'Non TECH', 12),
(15, 6, 'Mr.Robot', 'Cyber Sec Event', '2019-07-10', '12:00:00', 20, 10, 'B12', 'Tech', 12),
(16, 6, 'Design Web', 'Web Designing Event', '2019-06-13', '10:25:00', 30, 10, 'A12', 'Tech', 2),
(17, 1, 'Mecha Hunt', 'Paper Based Quiz & Treasure Hunt', '2019-05-28', '14:00:00', 20, 10, 'D Block', 'Tech', 15),
(18, 3, 'Box Cricket', 'Fun event', '2019-05-17', '17:10:00', 15, 15, 'A Block ', 'Non Tech', 10),
(19, 3, 'Electro Mania', 'Quiz on Electronics', '2019-05-10', '03:25:00', 25, 20, 'B12', 'Tech', 15),
(20, 5, 'Cribado', '3 Round Test', '2019-05-16', '14:05:00', 25, 10, 'A BLOCK', 'Placement', 12),
(21, 5, 'Vyaktitvam', 'A Personality Development Test', '2019-05-16', '16:25:00', 25, 10, 'D Block', 'Placement', 20),
(22, 1, 'Gadget Hunter', 'Find The Gadgets & Name it', '2019-05-17', '15:25:00', 25, 15, 'B Block', 'Tech', 15),
(23, 1, 'Path finder', 'Tresure event', '2019-05-09', '14:22:00', 20, 20, 'front lawn', 'Tech', 40),
(24, 1, 'Bottel Soda', 'Fun Event', '2019-05-05', '12:00:00', 10, 0, 'front lawn', 'Non TECH', 50),
(26, 1, 'web Quiz', 'General Quiz', '2019-05-06', '10:00:00', 50, 30, 'B401', 'Tech', 60),
(27, 1, 'Open MIC on Faculty', 'Fun Event', '2019-05-07', '18:06:00', 50, 0, 'BVM', 'Non TECH', 15),
(28, 1, 'Mini Militia', 'A Mutilplayer MObile Game', '2019-05-14', '15:20:00', 25, 10, 'B Block', 'Tech', 15);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `college` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `email`, `fname`, `lname`, `password`, `college`) VALUES
(1, 'sanketpatel850@gmail.com', 'Sanket', 'Patel', '12345', 'BVM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `a_name` (`a_name`);

--
-- Indexes for table `eventlist`
--
ALTER TABLE `eventlist`
  ADD PRIMARY KEY (`e_id`),
  ADD KEY `em_id` (`em_id`);

--
-- Indexes for table `eventmanager`
--
ALTER TABLE `eventmanager`
  ADD PRIMARY KEY (`em_id`);

--
-- Indexes for table `eventmanager_temp`
--
ALTER TABLE `eventmanager_temp`
  ADD PRIMARY KEY (`em_tmpid`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `sub_id` (`sub_id`);

--
-- Indexes for table `subevent`
--
ALTER TABLE `subevent`
  ADD PRIMARY KEY (`sub_id`),
  ADD UNIQUE KEY `sub_name` (`sub_name`),
  ADD KEY `e_id` (`e_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eventlist`
--
ALTER TABLE `eventlist`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `eventmanager`
--
ALTER TABLE `eventmanager`
  MODIFY `em_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `eventmanager_temp`
--
ALTER TABLE `eventmanager_temp`
  MODIFY `em_tmpid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `subevent`
--
ALTER TABLE `subevent`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
