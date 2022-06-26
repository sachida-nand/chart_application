-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 04:26 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatingapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(150) NOT NULL,
  `out_going_id` int(120) NOT NULL,
  `in_coming_id` int(120) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `out_going_id`, `in_coming_id`, `message`) VALUES
(1, 937451743, 1296811711, 'hiii'),
(2, 937451743, 1296811711, 'kaise ho'),
(3, 937451743, 1296811711, 'hiii'),
(4, 937451743, 937451743, 'hiii'),
(5, 937451743, 937451743, 'bhaiii'),
(6, 937451743, 937451743, 'kaisa hai tu '),
(7, 937451743, 937451743, 'thik hu'),
(8, 1296811711, 937451743, 'kaisa h'),
(9, 937451743, 1296811711, 'hello'),
(10, 1296811711, 937451743, 'hello'),
(11, 937451743, 1296811711, 'hiiii'),
(12, 1556108897, 937451743, 'hlow'),
(13, 937451743, 1556108897, 'hlw'),
(14, 1556108897, 937451743, 'sun na bhai'),
(15, 937451743, 1556108897, 'ha bol'),
(16, 1556108897, 937451743, 'kya kr rha h tu'),
(17, 937451743, 1556108897, 'kux nhi baitha hu'),
(18, 937451743, 1556108897, 'tu bata'),
(19, 1556108897, 937451743, 'me bhi thik hu'),
(20, 1556108897, 937451743, 'tu kais h'),
(21, 937451743, 1556108897, 'sb thuk h bhai'),
(22, 937451743, 1556108897, 'axaa'),
(23, 937451743, 1556108897, 'or sb kaisa h'),
(24, 937451743, 1296811711, 'hiiii bhai'),
(25, 1296811711, 937451743, 'hli bhia'),
(26, 937451743, 1296811711, 'hello'),
(27, 937451743, 1296811711, 'bhai'),
(28, 1296811711, 937451743, 'tu kaisa h'),
(29, 1296811711, 1556108897, 'hello bhai'),
(30, 937451743, 1296811711, 'tu bata'),
(31, 937451743, 1296811711, 'me bhi thuikh hu'),
(32, 1296811711, 937451743, 'sun na bhai'),
(33, 937451743, 1296811711, 'ha  bol bhai'),
(34, 1296811711, 937451743, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(35, 937451743, 1296811711, 'haaa'),
(36, 1296811711, 937451743, 'haa bol'),
(37, 1296811711, 937451743, 'kaisa h'),
(38, 1296811711, 937451743, 'hhhh'),
(39, 937451743, 1296811711, 'ghftfh'),
(40, 937451743, 1296811711, 'ty'),
(41, 1296811711, 937451743, 'yhtryrty'),
(42, 937451743, 1296811711, 'yttyt'),
(43, 937451743, 1296811711, 'hjtuj'),
(44, 1296811711, 937451743, 'jhhuy'),
(45, 1296811711, 937451743, 'hbftghj'),
(46, 1296811711, 937451743, 'ghbnf'),
(47, 1296811711, 937451743, 'ftyhgyyf'),
(48, 1296811711, 937451743, 'haa bol na'),
(49, 937451743, 1296811711, 'haa kaisa h'),
(50, 216439275, 1556108897, 'hello'),
(51, 1556108897, 216439275, 'hiii bhi kijikdsjf'),
(52, 902629995, 322270698, 'HLW'),
(53, 902629995, 865460367, 'HII'),
(54, 865460367, 322270698, 'HII'),
(55, 322270698, 865460367, 'hlw jiii kaisa h'),
(56, 865460367, 322270698, 'sb badhiya bhai');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(200) NOT NULL,
  `fName` varchar(200) NOT NULL,
  `lName` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `passWord` varchar(400) NOT NULL,
  `img` varchar(400) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fName`, `lName`, `email`, `passWord`, `img`, `status`) VALUES
(9, 322270698, 'SACHIDA NAND', 'RAY', 'sachidanand.code@gmail.com', '$2y$10$WSWTM.8Mz28IFGteYwSUiO8f3XAyGxxPa9PbgQj.dWzga7LvrEUnC', '1620536566IMG-20191013-WA0024.jpg', 'Active now'),
(10, 865460367, 'RAJJA ', 'BABU', 'sachida.mv@gmail.com', '$2y$10$o5QykAU5tEj6zx/6nZlb9OudTnhjcx4HhH08lj8nSfIyirfenVz/y', '162053709320181006_143455.jpg', 'Active now'),
(11, 902629995, 'BIKI', 'KUMAR', 'newemailhai.12q@gmail.com', '$2y$10$BxCQi2KwNbEM1gN75TrgEeKynJWR8/F4CAP9p8j2/UQ0.9KJCLHxK', '162053721520191013_094609.jpg', 'Active now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
