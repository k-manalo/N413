-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2021 at 02:40 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ampjam_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_responses`
--

CREATE TABLE `form_responses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fColor` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `food` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_responses`
--

INSERT INTO `form_responses` (`id`, `name`, `email`, `fColor`, `job`, `food`, `location`, `comment`, `timestamp`) VALUES
(10, 'kyle', 'myle@mail.com', 'black', 'cashier', 'pizza', 'forest', 'hello', '2021-02-04 22:37:55'),
(11, 'kyle', 'myle@mail.com', 'black', 'cashier', 'pizza', 'forest', 'hello', '2021-02-04 22:39:34'),
(12, 'shrek', 'myle@mail.com', 'green', 'ogre', 'onion', 'swamp', 'Ogres have layers!', '2021-02-04 22:48:34'),
(13, 'Shrek', 'Shrek@swampmail.com', 'green', 'ogre', 'onion', 'the swamp', 'Ogres have layers!', '2021-02-04 22:52:57'),
(14, 'Shrek', 'Shrek@swampmail.com', 'green', 'ogre', 'onion', 'the swamp', 'Ogres have layers!', '2021-02-04 22:54:55'),
(15, 'kyle', 'myle@mail.com', 'red', 'ogre', 'asd', 'forest', 'asdfasd', '2021-02-04 23:10:37'),
(16, 'kyle', 'myle@mail.com', 'red', 'ogre', 'asd', 'forest', 'asdfasd', '2021-02-04 23:11:51'),
(17, 'asdffe', 'asfasd@mail.com', 'asdf', 'ggg', 'ggeg', 'gdsd', 'asdfasd', '2021-02-04 23:12:12'),
(18, 'asdffe', 'asfasd@mail.com', 'asdf', 'ggg', 'ggeg', 'gdsd', 'asdfasd', '2021-02-04 23:12:28'),
(19, 'asdffe', 'asfasd@mail.com', 'asdf', 'ggg', 'ggeg', 'gdsd', 'asdfasd', '2021-02-04 23:13:00'),
(20, 'asdffe', 'asfasd@mail.com', 'asdf', 'ggg', 'ggeg', 'gdsd', 'asdfasd', '2021-02-04 23:13:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_responses`
--
ALTER TABLE `form_responses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_responses`
--
ALTER TABLE `form_responses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
