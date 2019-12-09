-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2017 at 06:08 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(255) NOT NULL,
  `user_last` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_uid` varchar(255) NOT NULL,
  `user_pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`) VALUES
(3, 'wasif', 'shikder', 'wasif@gmail.com', 'wasif', '$2y$10$hZCrPewUbDviXtluZlT3XuTApSm.nQxyCRWuKKGF1kWuXHlp878ha'),
(4, 'Sojol', 'Almaruffujjaman', 'siatn@gmail.com', 'sojol', '$2y$10$O7E3hual1kzwW8tcoG6Dj..4.gLMHI84YglSxxYvgfTQRI7g6mSu.'),
(5, 'nasirul', 'islam', 'siat@gmail.com', 'admin', '$2y$10$B2WLysSvNGA7tMjMP49Hvu/ej7CGBCi3fsq5dbu8t.KWMtg7HMclW'),
(6, 'maruf', 'hossain', 'mrf@gmail.com', 'maruf', '$2y$10$q1QvCN33CBNdOcJibOVXiulEG5gkphMcfOlVtR/l6LZCACPxWuRoG'),
(8, 'anamul', 'hok', 'anamul@gmail.com', 'anamul', '$2y$10$5XMIstFNyWiPGVZThlfCjuWXuL/y9.f.zwIgDm/Fy48yDCFVCicyK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
