-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2022 at 03:39 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cucu_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `bsregistration`
--

CREATE TABLE `bsregistration` (
  `id` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `yos` int(11) NOT NULL,
  `pastor` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bsregistration`
--

INSERT INTO `bsregistration` (`id`, `uname`, `phone`, `yos`, `pastor`) VALUES
(11, 'Jonathan Wambua', '0719463736', 1, '0'),
(12, 'Jonathan Mrk', '0719463737', 2, '0'),
(13, 'Jonathan Mrking', '0719463739', 3, '1'),
(14, 'Jonathan Melv', '0719463740', 4, '1'),
(15, 'Jonathan Melvin', '0719463741', 4, '1'),
(16, 'JM', '0719463742', 4, '1'),
(17, 'Testing', '0719463743', 3, '1'),
(18, 'Testing 2', '0719463744', 2, '1'),
(19, 'Testing 3', '0719463745', 2, '1'),
(20, 'Testing 4', '0780653076', 4, '1'),
(21, 'Testing 5', '0780653078', 4, '1'),
(22, 'Testing 6', '0780653079', 2, '1'),
(23, 'Testing 7', '0780653080', 1, '1'),
(24, 'Testing 8', '0780653081', 3, '0'),
(25, 'Testing 9', '0780653082', 2, '0'),
(26, 'Testing 10', '0780653083', 4, '1'),
(27, 'Testing 11', '0780653082', 3, '0'),
(28, 'Testing 12', '0780653082', 2, '0'),
(29, 'Testing 13', '0780653083', 1, '1'),
(30, 'Testing 14', '0780653084', 2, '0'),
(31, 'Testing 15', '0780653085', 2, '0'),
(32, 'Testing 16', '0780653086', 4, '1'),
(33, 'Testing 17', '0780653083', 3, '0'),
(34, 'Testing 20', '0780653084', 1, '0'),
(35, 'Testing 21', '0780653085', 4, '1');

-- --------------------------------------------------------

--
-- Table structure for table `membersreg`
--

CREATE TABLE `membersreg` (
  `id` int(11) NOT NULL,
  `regno` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `yos` int(11) NOT NULL,
  `course` int(30) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ministry` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` int(10) NOT NULL,
  `profile` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `membersreg`
--

INSERT INTO `membersreg` (`id`, `regno`, `fname`, `sname`, `yos`, `course`, `email`, `phone`, `ministry`, `gender`, `profile`, `created`, `modified`) VALUES
(7, 'EB1/37631/18', 'Jonathan', 'Wambua', 1, 2, 'jonathanwambua10219@gmail.com', '0719463736', '1', 2, 'default.png', '2022-04-20 08:31:11', '2022-04-20 06:31:11'),
(9, 'EB1/', 'Jonathan', 'Peter Pettigrew', 2, 0, 'admin@email.com', '07111111111', '0', 1, 'default.png', '2022-04-20 20:52:44', '2022-04-20 18:52:44'),
(11, 'EB1/35555/18', 'Jonathan', 'Wambua2', 3, 0, 'jonathanwambua10219@gmail.com', '0719463736', '1,5,8,12,14,15', 2, 'default.png', '2022-04-20 21:01:22', '2022-04-20 19:01:22'),
(12, 'EB1/35565/18', 'Jonathan', 'Mark', 4, 0, 'jonathanwambua10219@gmail.com', '0719463736', '1,5,8,12,14,15', 2, 'default.png', '2022-04-20 21:01:22', '2022-04-20 19:01:22');

-- --------------------------------------------------------

--
-- Table structure for table `uadmin`
--

CREATE TABLE `uadmin` (
  `id` int(11) NOT NULL,
  `regno` varchar(30) NOT NULL,
  `upassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uadmin`
--

INSERT INTO `uadmin` (`id`, `regno`, `upassword`) VALUES
(1, 'ABC/111/11', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bsregistration`
--
ALTER TABLE `bsregistration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membersreg`
--
ALTER TABLE `membersreg`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `regno` (`regno`);

--
-- Indexes for table `uadmin`
--
ALTER TABLE `uadmin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bsregistration`
--
ALTER TABLE `bsregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `membersreg`
--
ALTER TABLE `membersreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `uadmin`
--
ALTER TABLE `uadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
