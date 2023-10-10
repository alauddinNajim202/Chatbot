-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2023 at 11:09 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatbot`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot_hints`
--

CREATE TABLE `chatbot_hints` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `reply` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `chatbot_hints`
--

INSERT INTO `chatbot_hints` (`id`, `question`, `reply`) VALUES
(1, 'Hello', 'Hello, how are you?'),
(2, 'How are you', 'Good to see you again!'),
(3, 'whats your name', 'My name is Alauddin Najim'),
(4, 'what should I call you?', 'You can call me Vishal Bot'),
(5, 'Where are your from?', 'I m from Bangladesh'),
(6, 'Bye||See you later||Have a Good Day', 'Sad to see you are going. Have a nice day'),
(8, 'who developed you', 'I am developed/created by Aarav. I am Here to help you with your queries.'),
(10, 'I want to ask about professors of first year.', 'Professors of GEU are amazing.\r\nI m listing names of few\r\nchemistry-Arunima nayak mam\'\r\nfirst year b'),
(11, 'How old are you?', 'I am 20'),
(12, 'Your university name?', 'Eastern University'),
(13, 'Your Age?', '29'),
(14, 'Why did you choose this university?', 'I just love everything about your place. First of all, the campus. The huge library, the park, I just found the place incredibly inspirational and motivating'),
(15, 'Please tell me total credit in this university?', 'Total credit 150.'),
(16, 'Gender?', 'Male'),
(18, 'City?', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `invalid`
--

CREATE TABLE `invalid` (
  `id` int(11) NOT NULL,
  `messages` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invalid`
--

INSERT INTO `invalid` (`id`, `messages`) VALUES
(1, 'dijh'),
(2, 'dijh'),
(3, 'dijh'),
(4, 'sd'),
(5, 'a'),
(6, 'anbasfnsdkghb nlegyfbnyfudkgajhg'),
(7, 'afc');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `added_on` datetime NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message`, `added_on`, `type`) VALUES
(1, 'Hi', '2020-04-22 12:41:04', 'user'),
(2, 'Hello, how are you.', '2020-04-22 12:41:05', 'bot'),
(3, 'what is your name', '2020-04-22 12:41:22', 'user'),
(4, 'My name is Vishal Bot', '2020-04-22 12:41:22', 'bot'),
(5, 'Where are your from', '2020-04-22 12:41:30', 'user'),
(6, 'I m from India', '2020-04-22 12:41:30', 'bot'),
(7, 'Go to hell', '2020-04-22 12:41:41', 'user'),
(8, 'Sorry not be able to understand you', '2020-04-22 12:41:41', 'bot'),
(9, 'bye', '2020-04-22 12:41:46', 'user'),
(10, 'Sad to see you are going. Have a nice day', '2020-04-22 12:41:46', 'bot');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(8, 'Ashifa', 'ashifa@gmail.com', '87654321'),
(9, 'najim', 'najim202@gmail.com', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbot_hints`
--
ALTER TABLE `chatbot_hints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot_hints`
--
ALTER TABLE `chatbot_hints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
