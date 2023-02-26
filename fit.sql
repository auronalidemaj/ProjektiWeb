-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 06:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fit`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `name`, `email`, `message`) VALUES
(1, 'auronalidemaj', 'auronalidemaj@gmail.com', 'This is the message for the contact.');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `Id` int(11) NOT NULL,
  `i_image` varchar(255) NOT NULL,
  `i_title` varchar(255) NOT NULL,
  `i_body` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`Id`, `i_image`, `i_title`, `i_body`) VALUES
(2, './img/ac1.jpg', 'Item 1', '$9.99'),
(3, './img/ac3.webp', 'Item 2', '$19.99'),
(4, './img/other2.jpg', 'Item 3', '$29.99'),
(5, './img/item3.jpg', 'Item 4', '$39.99'),
(6, './img/item2.webp', 'Item 5', '$99.99'),
(7, './img/weight1.jpg', 'Item 6', '$99.99'),
(8, './img/weight4.jpg', 'Item 7', '$49.99'),
(9, './img/item4.jpeg', 'Item 8', '$69.99');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `Id` int(11) NOT NULL,
  `menu_image` varchar(255) NOT NULL,
  `menu_title` varchar(255) NOT NULL,
  `menu_body` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`Id`, `menu_image`, `menu_title`, `menu_body`) VALUES
(1, './img/ac4.jpeg', 'item', 'Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text '),
(2, './img/clothing3.webp', 'News', 'Text text Text text Text text Text text Text text Text text Text text Text text Text text Text text Text text Text text Text text Text text Text text '),
(3, './img/clothing2.jpg', 'News', 'Text text Text text Text text Text text Text text Text text Text text Text text Text text Text text Text text Text text Text text Text text Text text '),
(4, './img/clothing1.webp', 'Title for the news', 'content content content content content content content content content content content content content content content content content content conten'),
(5, './img/traning.jpg', 'Training', 'Traning and training and training and training and training and training and training and training and training and training and training and training and training and training and training and ');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `Id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`Id`, `email`) VALUES
(1, 'roniofficial@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userpassword` binary(60) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `email`, `username`, `userpassword`, `role`) VALUES
(13, 'auronalidemaj@gmail.com', 'auronalidemaj', 0x2432792431302453686f6353356d6338514847525a463447366c4977655a4a794847534d666d7774502e4e4c4f506961484f7a753237566877433332, '1'),
(23, 'ronialidemaj@gmail.com', 'ronialidemaj', 0x24327924313024786378566f6d6e496e614e496f4d727543766d6b6c2e4255357870386a4e3576626f594944686432386853674c5842364f6853326d, '1'),
(24, 'auronalidemaj3@gmail.com', 'auronialidemaj', 0x2432792431302444715731526b2e6566556272784a7a783265575255756b4f656a6d435559306977616e4b65386b576d4b774d71316856444f704f32, '1'),
(25, 'aritaalidemaj@gmail.com', 'aritaalidemaj', 0x243279243130247179713353513556662e575752596c6e756a3534484f5a5977375677312e516c7654372e466b6779626670324b6958302f6b386661, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
