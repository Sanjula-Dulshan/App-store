-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 06:40 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_information`
--

CREATE TABLE `app_information` (
  `App_ID` int(11) NOT NULL,
  `App_Name` varchar(50) NOT NULL,
  `Curr_ver` varchar(50) NOT NULL,
  `Description` varchar(2000) NOT NULL,
  `Icon_Link` varchar(2000) NOT NULL,
  `Screenshot1` varchar(2000) NOT NULL,
  `Screenshot2` varchar(2000) NOT NULL,
  `Apk_Link` varchar(2000) NOT NULL,
  `C_ID` varchar(50) NOT NULL,
  `Price` float NOT NULL,
  `Tags` varchar(100) NOT NULL,
  `Size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `app_information`
--

INSERT INTO `app_information` (`App_ID`, `App_Name`, `Curr_ver`, `Description`, `Icon_Link`, `Screenshot1`, `Screenshot2`, `Apk_Link`, `C_ID`, `Price`, `Tags`, `Size`) VALUES
(25, 'Facebook', 'v293.0.0.43.120', 'Keeping up with friends is faster and easier than ever. Share updates and photos, engage with friends and Pages, and stay connected to communities important to you.\r\nThe most important desktop features of Facebook are also available on the app, such as writing on timelines, liking photos, browsing for people, and editing your profile and groups.', '../file/icon/FacebookIcon.jpg', '../file/screenshot/FacebookScreen.jpg', '../file/screenshot/FacebookScreen1.jpg', '../file/apk/facebook.apk', 'Social', 0, 'facebook,social,fb   ', 52),
(26, 'Moodle', 'v3.9.3', 'This official Moodle app will ONLY work with Moodle sites that have been set up to allow it. Please talk to your Moodle administrator if you have any problems connecting.\r\n\r\nIf your Moodle site has been configured correctly, you can use this app to:\r\n\r\n- Browse the content of your courses, even when offline\r\n- Receive instant notifications of messages and other events\r\n- Quickly find and contact other people in your courses', '../file/icon/MoodleIcon.webp', '../file/screenshot/MoodleScreen.jpg', '../file/screenshot/MoodleScreen.jpg', '../file/apk/moodle.apk', 'Education', 10, 'moodle,education,learn', 17),
(27, 'Mini Militia Doodle Army 2', 'v5.3.3', 'Mini Militia - Doodle Army 2 is all about intense multiplayer combat!\r\nBattle with up to 6 players online in this 2D fun cartoon themed cross between Soldat and Halo, inspired on the original stickman shooter Doodle Army.\r\n\r\n\r\nKey features:\r\n.Online multiplayer with up to 6 players\r\n.Intuitive dual stick shooting controls with jetpack flight\r\n.Over 20 maps to explore\r\n.Wide range of modern and futuristic weapon types\r\n.Offline Survival mode', '../file/icon/MiniIcon.webp', '../file/screenshot/MiniScreen.jpg', '../file/screenshot/MiniScreen1.jpg', '../file/apk/Mini.apk', 'Games', 12.9, 'mini,army,game', 43),
(28, 'Tinder Lite', 'v1.1.1', 'Whether you’re here to meet new people, expand your social network, or to do as the locals do while you’re traveling — you’ve come to the right place. Some call us “the world’s hottest dating app”, but you can call us your most dependable wingmate. With 30 billion matches to date and a presence in 190 countries, we’re always here when you need us.', '../file/icon/TinderIcon.png', '../file/screenshot/TinderScreen.jpg', '../file/screenshot/TinderScreen1.jpg', '../file/apk/Tinder.apk', 'Lifestyle', 5, 'tinder,Lifestyle,friends', 1),
(29, 'Amazon Shopping - Search, Find, Ship, and Save', 'v20.20.0.100', 'The Amazon Shopping app lets you shop millions of products and manage your Amazon orders from anywhere. Browse, shop by department, compare prices, read reviews, share products with friends, and check the status of your orders.\r\n', '../file/icon/AmazonIcon.webp', '../file/screenshot/AmazonScreen.jpg', '../file/screenshot/AmazonScreen1.jpg', '../file/apk/Amazon.apk', 'Shopping', 19.9, 'amazon,shopping,buy', 53);

-- --------------------------------------------------------

--
-- Table structure for table `categorylist`
--

CREATE TABLE `categorylist` (
  `C_ID` int(11) NOT NULL,
  `Category_Name` varchar(100) COLLATE ucs2_unicode_ci NOT NULL,
  `No_Of_Apps` int(11) NOT NULL,
  `Cat_Description` varchar(100) COLLATE ucs2_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_unicode_ci;

--
-- Dumping data for table `categorylist`
--

INSERT INTO `categorylist` (`C_ID`, `Category_Name`, `No_Of_Apps`, `Cat_Description`) VALUES
(1, 'Finance.', 0, ''),
(2, 'Education', 65, 'Learn a language| Discover science| Learn English'),
(3, 'Entertainment', 34, 'Premium apps| Channel '),
(4, 'Social Media', 73, 'Social networking| Premium apps| Get chatting| video chatting| Communication.....'),
(5, 'Business', 25, 'Billing & invoicing| Tools & utilizing'),
(6, 'Photography', 41, 'Share photos &  videos| Premium apps| Take a better photo'),
(7, 'Shopping', 32, 'Premium apps| Food & drink apps| Tools and utilizing'),
(8, 'Kids', 67, 'Entertaining| Learning| studying'),
(9, 'Beauty', 37, 'Beauty makeup editor| Beauty cameras| Change your look'),
(10, 'Finance', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `Fd_ID` int(5) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `App_ID` int(5) NOT NULL,
  `Feedback` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`Fd_ID`, `Username`, `App_ID`, `Feedback`) VALUES
(10, 'asd', 25, 'This app is good but I hope there will be options to delete all the photos at once, or to select photos we would like to delete.'),
(15, 'asd', 27, 'Great game. A little heavy handed with buying in game product. What mobile game isnt...but not excusing this app at all. They have more superior weapons.'),
(17, 'dula', 29, 'I used to really love this app, but the update before last made it SUPER clunky and slow. And my phone is only a few months old and has no problems with any of my other apps.'),
(18, 'dula', 27, 'Simply amazing. The graphics are 5 star. Same for the voices for Simon ghost and chatting things.'),
(20, 'dula', 26, 'This is the best app there is...Just try your luck and see!'),
(24, 'dula', 28, 'This is the best app there is...Just try your luck and see!'),
(25, 'rowan', 28, 'Lightweight and running smooth! Download very fast and have all feature I need. Can\'t purchase Tinder Gold but can buy it on website and use it in the app! Definitely a good app');

-- --------------------------------------------------------

--
-- Table structure for table `saved_cards`
--

CREATE TABLE `saved_cards` (
  `username` varchar(50) NOT NULL,
  `Card_No` bigint(20) NOT NULL,
  `Month` int(2) NOT NULL,
  `Year` int(2) NOT NULL,
  `CVV` int(3) NOT NULL,
  `Nickname` varchar(20) NOT NULL DEFAULT 'No Name'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saved_cards`
--

INSERT INTO `saved_cards` (`username`, `Card_No`, `Month`, `Year`, `CVV`, `Nickname`) VALUES
('SampleUser001', 4216000011119999, 12, 20, 555, 'No Name'),
('SampleUser001', 4505000000000001, 1, 21, 121, 'Card 01'),
('SampleUser001', 4505111122223333, 1, 23, 123, 'No Name');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `Username` varchar(20) NOT NULL,
  `Psw` varchar(1000) NOT NULL,
  `Acc_type` text NOT NULL DEFAULT 'General',
  `F_Name` text NOT NULL,
  `L_Name` text DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `M_No` varchar(12) DEFAULT NULL,
  `DOB` date NOT NULL,
  `Img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`Username`, `Psw`, `Acc_type`, `F_Name`, `L_Name`, `Email`, `M_No`, `DOB`, `Img`) VALUES
('asd', '$2y$10$r8Dvw4lfHrOMg2vb3aHk0.Z3T2kOADQLHMF8A86k.8uehpkzZSk.2', 'General', 'Asd', 'asd', 'asd@gmail.com', '4345345343', '2020-10-15', '../images/default-profile.png'),
('dula', '$2y$10$EiUjXkQ3M5cHaxH1Rj.7zuHlfp0u0MC0Kf8ZFWswO/rb0CeIe573y', 'Developer', 'Dulanja', 'Lak', 'dulana@gmail.com', '5673385', '1998-04-14', '../images/default-profile.png'),
('dulshan', '$2y$10$OQtTOPvID3ouZZHcRrH2ruCy/JjmRMZMOQ3rmrH7nZtQJzM.0WLiK', 'Developer', 'dulshan', 'sanjula', 'sdulshan10@gmail.com', '0719647830', '1999-03-18', '../images/default-profile.png'),
('rowan', '$2y$10$6JM1Mcc1D8WZJoRF4yUXKOLPSwE6iGw/1oPxKWunsv.PGLB405swm', 'Developer', 'Rowan', 'Smith', 'rowan@outlook.com', '714113648', '1994-06-29', '../images/default-profile.png'),
('sanjula', '$2y$10$SENBoeoF1.VnPQidsNpALum0rGANVvdZxWnARNpmuchsCozj6khPG', 'Admin', 'Sanjula', 'Dulshan', 'sanjula@gmail.com', '0712341373', '2020-10-13', '../images/androidlogo.png');

-- --------------------------------------------------------

--
-- Table structure for table `valid_cards`
--

CREATE TABLE `valid_cards` (
  `card_No` bigint(20) NOT NULL,
  `Month` int(2) NOT NULL,
  `Year` int(2) NOT NULL,
  `CVV` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `valid_cards`
--

INSERT INTO `valid_cards` (`card_No`, `Month`, `Year`, `CVV`) VALUES
(450511112222666, 3, 26, 326),
(4216000011119999, 12, 20, 555),
(4505000000000001, 1, 21, 121),
(4505111111112222, 1, 22, 122),
(4505111122223333, 1, 23, 123),
(4505111122223334, 4, 24, 424),
(4505111122223345, 4, 32, 432),
(4505111122224444, 2, 24, 224),
(4505111122225555, 3, 25, 325),
(4505111122228888, 8, 28, 828);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_information`
--
ALTER TABLE `app_information`
  ADD PRIMARY KEY (`App_ID`);

--
-- Indexes for table `categorylist`
--
ALTER TABLE `categorylist`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`Fd_ID`);

--
-- Indexes for table `saved_cards`
--
ALTER TABLE `saved_cards`
  ADD PRIMARY KEY (`username`,`Card_No`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `valid_cards`
--
ALTER TABLE `valid_cards`
  ADD PRIMARY KEY (`card_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_information`
--
ALTER TABLE `app_information`
  MODIFY `App_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `categorylist`
--
ALTER TABLE `categorylist`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=667;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `Fd_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
