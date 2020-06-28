-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2018 at 07:20 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `a_uname` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `father` varchar(200) NOT NULL,
  `mother` varchar(200) NOT NULL,
  `aadhar` bigint(20) NOT NULL,
  `number` bigint(20) NOT NULL,
  `a_no` bigint(20) NOT NULL,
  `a_bal` bigint(20) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `time` datetime NOT NULL,
  `a_type` varchar(10) NOT NULL,
  `a_opendate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`a_uname`, `dob`, `father`, `mother`, `aadhar`, `number`, `a_no`, `a_bal`, `username`, `password`, `time`, `a_type`, `a_opendate`) VALUES
('Aajush', '1994-10-01', 'SGVGVA', 'DGAVAH', 135484841, 11188885, 112233, 1000, 'aajush', '123456', '0000-00-00 00:00:00', 'Savings', '0000-00-00'),
('Harshit', '1999-09-24', 'A K Gupta', 'Deepa Gupta', 987564662122, 9410079741, 24091999, 13745, 'cheeku', '123456', '2018-09-22 16:32:14', 'Savings', '0000-00-00'),
('Aayush Gupta', '1996-10-24', 'Ashok Kumar Gupta', 'Deepa Gupta', 944407755420, 9719654203, 34561390678, 57100, 'aayush', '123456', '2018-09-25 13:50:25', 'Savings', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `acknowledgement`
--

CREATE TABLE `acknowledgement` (
  `ac_id` int(11) NOT NULL,
  `ac_accno` bigint(20) NOT NULL,
  `ac_subject` varchar(100) NOT NULL,
  `ac_msg` varchar(1000) NOT NULL,
  `ac_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acknowledgement`
--

INSERT INTO `acknowledgement` (`ac_id`, `ac_accno`, `ac_subject`, `ac_msg`, `ac_time`) VALUES
(2, 34561390678, 'Deposit', 'Succesfully deposited 10000 in your account 34561390678', '2018-09-19 23:13:18'),
(3, 34561390678, 'Deposit', 'Succesfully deposited 1000 in your account 34561390678 ', '2018-09-19 23:21:46'),
(4, 34561390678, 'Paid', 'Succesfully paid 500 from your account 34561390678', '2018-09-19 23:37:36'),
(16, 24091999, 'Deposit', 'Succesfully Deposited 	1000 in your account 24091999', '2018-09-22 15:59:13'),
(17, 34561390678, 'Paid', 'Succesfully paid 1300 from your account 34561390678', '2018-09-22 16:02:22'),
(18, 24091999, 'Deposit', 'Succesfully Deposited 	1300 in your account 24091999', '2018-09-22 16:02:33'),
(19, 34561390678, 'Paid', 'Succesfully paid 1000 from your account 34561390678', '2018-09-22 16:07:11'),
(20, 24091999, 'Deposit', 'Succesfully Deposited 	1000 in your account 24091999', '2018-09-22 16:07:27'),
(21, 24091999, 'Paid', 'Succesfully paid 10000 from your account 24091999', '2018-09-22 16:08:55'),
(22, 34561390678, 'Deposit', 'Succesfully Deposited 	10000 in your account 34561390678', '2018-09-22 16:09:24'),
(23, 24091999, 'Deposit', 'Succesfully deposited 20000 in your account 24091999 ', '2018-09-22 16:09:43'),
(24, 24091999, 'Paid', 'Succesfully paid 1000 from your account 24091999', '2018-09-22 16:13:52'),
(25, 24091999, 'Paid', 'Succesfully paid 100 from your account 24091999', '2018-09-22 16:30:45'),
(26, 12345678, 'Deposit', 'Succesfully Deposited 	100 in your account 12345678', '2018-09-22 16:31:02'),
(27, 24091999, 'Paid', 'Succesfully paid 455 from your account 24091999', '2018-09-22 16:36:12'),
(28, 34561390678, 'Paid', 'Succesfully paid 1000 from your account 34561390678', '2018-09-23 12:23:37');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` varchar(200) NOT NULL,
  `a_pwd` varchar(200) NOT NULL,
  `a_name` varchar(30) NOT NULL,
  `a_bran` varchar(20) NOT NULL,
  `a_lastlogin` datetime NOT NULL,
  `a_status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_pwd`, `a_name`, `a_bran`, `a_lastlogin`, `a_status`) VALUES
('aajush', '123456', 'Aayush Bansal', 'Meerut', '0000-00-00 00:00:00', 'P'),
('aayush24', '123456', 'Aayush Bansal', 'Meerut', '2018-09-25 13:49:26', 'A'),
('shinchan', '123456', 'Shinchan', 'Meerut', '2018-09-23 14:53:44', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `b_id` varchar(20) NOT NULL,
  `b_name` varchar(30) NOT NULL,
  `b_pass` varchar(20) NOT NULL,
  `b_code` varchar(20) NOT NULL,
  `b_location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`b_id`, `b_name`, `b_pass`, `b_code`, `b_location`) VALUES
('aayush0110', 'Aayush Bank', '123456', 'Aa1234', 'Meerut');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_accno` bigint(20) NOT NULL,
  `f_date` datetime NOT NULL,
  `f_msg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_accno`, `f_date`, `f_msg`) VALUES
(34561390678, '2018-09-20 00:48:05', 'Very good services..');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `t_id` int(20) NOT NULL,
  `t_acno` bigint(20) NOT NULL,
  `t_pacno` bigint(20) DEFAULT NULL,
  `t_details` varchar(20) NOT NULL,
  `t_amount` bigint(20) NOT NULL,
  `t_type` varchar(10) NOT NULL,
  `t_date` date NOT NULL,
  `t_status` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`t_id`, `t_acno`, `t_pacno`, `t_details`, `t_amount`, `t_type`, `t_date`, `t_status`) VALUES
(2, 34561390678, NULL, 'Deposit', 10000, 'Credit', '2018-09-19', ''),
(3, 34561390678, NULL, 'Cash Deposit', 1000, 'Credit', '2018-09-19', ''),
(4, 34561390678, NULL, 'Atm Withdrawal', 500, 'Debit', '2018-09-19', ''),
(11, 34561390678, 24091999, 'Salary', 1300, 'Debit', '2018-09-22', 'A'),
(13, 34561390678, 24091999, 'Rent', 1000, 'Debit', '2018-09-22', 'A'),
(14, 24091999, NULL, 'Rent', 1000, 'Credit', '2018-09-22', NULL),
(15, 24091999, 34561390678, 'Dep', 10000, 'Debit', '2018-09-22', 'A'),
(16, 34561390678, NULL, 'Dep', 10000, 'Credit', '2018-09-22', NULL),
(17, 24091999, NULL, 'Deposit', 20000, 'Credit', '2018-09-22', NULL),
(18, 24091999, 34561390678, 'Cash', 1000, 'Debit', '2018-09-22', 'P'),
(19, 24091999, 12345678, 'fyfh', 100, 'Debit', '2018-09-22', 'A'),
(20, 12345678, NULL, 'fyfh', 100, 'Credit', '2018-09-22', NULL),
(21, 24091999, 112545, 'jh', 455, 'Debit', '2018-09-22', 'P'),
(22, 34561390678, 112233, 'vgdhg', 1000, 'Debit', '2018-09-23', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` varchar(20) NOT NULL,
  `u_name` varchar(30) NOT NULL,
  `u_pass` varchar(20) NOT NULL,
  `u_lastlogin` datetime NOT NULL,
  `u_accno` bigint(20) NOT NULL,
  `u_status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_pass`, `u_lastlogin`, `u_accno`, `u_status`) VALUES
('aajush', 'Aajush', '123456', '2018-09-23 12:04:50', 112233, 'P');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`a_no`),
  ADD UNIQUE KEY `number` (`number`),
  ADD UNIQUE KEY `account` (`a_no`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `acknowledgement`
--
ALTER TABLE `acknowledgement`
  ADD PRIMARY KEY (`ac_id`),
  ADD KEY `account` (`ac_accno`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_accno`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `account` (`t_acno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acknowledgement`
--
ALTER TABLE `acknowledgement`
  MODIFY `ac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `t_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
