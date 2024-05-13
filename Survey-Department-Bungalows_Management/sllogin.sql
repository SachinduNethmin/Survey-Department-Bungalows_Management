-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2024 at 11:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sllogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(16) NOT NULL,
  `usersName` varchar(32) NOT NULL,
  `usersEmail` varchar(32) NOT NULL,
  `usersUiD` varchar(32) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=Aria DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `usersName`, `usersEmail`, `usersUiD`, `usersPwd`) VALUES
(1, 'sachindu', 'sachindu@mail.com', 'sachindu', '$2y$10$/PJrIuk3/L.c/yPUVlZ4cur1z.b57fxOcPrW1jA5rmV6o5FxEQINm'),
(2, 'game', 'game@gmail.com', 'game', '$2y$10$o5.bINFQv9rvdBWYVozNqegf6RxQEp/Nux1x.UqsAk4/g8Yc7l6N2'),
(3, 'ravindu', 'ravindu@gamil.com', 'ravindu', '$2y$10$yZqkPbAH2socD.Dr8KITE.XVW.HvfQTA8DE7zKvq8yfQr.QnW9/FW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
