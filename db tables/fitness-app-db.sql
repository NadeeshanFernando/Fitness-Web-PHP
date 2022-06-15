-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 06:21 PM
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
-- Database: `fitness-app-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `total_price` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `payment` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `message` varchar(50) DEFAULT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `name`, `email`, `subject`, `message`, `date`) VALUES
(4, 'df', 'df@gmail.com', 'Feedback', 'sgsdg', '2022-05-16 20:58:31'),
(5, 'anton', 'anton@gmail.com', 'Feedback', 'adsafg', '2022-06-08 21:33:08'),
(6, 'anton', 'anton@gmail.com', 'Feedback', 'asdf', '2022-06-08 21:33:31'),
(7, 'new', 'new@gmail.com', 'Counseling', 'hi lets have a session', '2022-06-09 18:15:46'),
(8, 'jagath', 'jagath@gmail.com', 'Counseling', 'hi lets have a session', '2022-06-09 18:16:13'),
(9, 'jehan', 'jehan@gmail.com', 'Feedback', 'this is so good', '2022-06-09 18:17:26'),
(10, 'ramani', 'ramani@gmail.com', 'Feedback', 'i love these workouts', '2022-06-09 18:17:49'),
(11, 'gayan', 'gayan@gmail.com', 'Counseling', 'i need to contact wit a counsellor', '2022-06-09 18:18:20');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `products` varchar(50) NOT NULL,
  `amount_paid` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `code`, `products`, `amount_paid`, `date`) VALUES
(1, 'Anton Fernando', 'anton@gmail.com', '0726618185', 'wwww', 'OnlinePayment', '965b11a46418878a13732a04b3db07b3', 'Nike Shoe(1)', '4500', '2022-06-06 21:27:37'),
(2, 'nirasha', 'new@gmail.com', '0721134346', 'fghjklkjhgvf', 'CardOnDelivery', '88b1432e046d3580de43f0d2ccc09bce', 'Ancke Sneaker (1), Sport Shoes(1), Anckle Basketba', '71600', '2022-06-10 09:36:35'),
(3, ' nirasha', 'new@gmail.com', '522652652', 'vgbhjkjhgfghjk', 'CashOfDelivery', '88b1432e046d3580de43f0d2ccc09bce', '', '', '2022-06-10 09:39:19'),
(4, ' reggg', 'nirasha@gmail.com', '5657787', 'thtrjr', 'CashOfDelivery', '88b1432e046d3580de43f0d2ccc09bce', '', '', '2022-06-10 09:41:46'),
(5, ' ga', 'new@gmail.com', '78767767', 'rhysjhggtfrdfgfg', 'CashOfDelivery', '88b1432e046d3580de43f0d2ccc09bce', '', '', '2022-06-10 09:47:02'),
(6, ' rgtrw', 'new@gmail.com', '77', 'urhjtukktkd', 'CashOfDelivery', '88b1432e046d3580de43f0d2ccc09bce', '', '', '2022-06-10 09:50:00'),
(7, ' yrsys', 'new@gmail.com', '87676', 'ktkitki', 'CashOfDelivery', '88b1432e046d3580de43f0d2ccc09bce', '', '', '2022-06-10 09:51:53'),
(8, 'new user', 'new@gmail.com', '0721134346', 'wgtrt', 'CashOfDelivery', '88b1432e046d3580de43f0d2ccc09bce', 'Anckle Basketball Shoe(1), Ancke Sneaker (1)', '28600', '2022-06-10 09:55:34'),
(9, ' user', 'new@gmail.com', '0721134346', 'gsshs', 'CardOnDelivery', '88b1432e046d3580de43f0d2ccc09bce', 'Anckle Basketball Shoe(1), Ancke Sneaker (1), Spor', '45600', '2022-06-10 09:59:45');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `fid` int(11) NOT NULL,
  `rid` int(11) DEFAULT NULL,
  `shopName` varchar(50) DEFAULT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `image` varchar(50) NOT NULL DEFAULT '',
  `description` varchar(500) NOT NULL DEFAULT '',
  `price` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`fid`, `rid`, `shopName`, `name`, `image`, `description`, `price`, `code`, `qty`) VALUES
(1, 1, 'Nike', 'Nike Shoe', '/nikeshoe.jpeg', 'Available in Black & White', 4500, '965b11a46418878a13732a04b3db07b3', 5),
(2, 2, 'Reebok', 'Anckle Basketball Shoe', '/reebok1.webp', 'Super comfortable and Hard', 12600, '88b1432e046d3580de43f0d2ccc09bce', 5),
(3, 2, 'Reebok', 'Ancke Sneaker ', '/reebok3.jpg', 'Comfortable and use for Casual Outfits', 16000, '88b1432e046d3580de43f0d2ccc09bce', 4),
(4, 2, 'Reebok', 'Sport Shoes', '/reebok 2.webp', 'Comfortable and easy move', 17000, '88b1432e046d3580de43f0d2ccc09bce', 3),
(5, 5, 'Puma', 'Puma Basketball SHoe', '/puma4.jpg', 'High Standard sport shoe', 8000, '6a2da4c5a66a403631ce4167c3c1eb95', 6),
(6, 5, 'Puma', 'Puma Sneaker', '/Puma 1.jpg', 'Black Matte casual ', 6000, '6a2da4c5a66a403631ce4167c3c1eb95', 7),
(7, 5, 'Puma', 'Puma Crossfit Shoe', '/puma2.jpg', 'Colorful comfortable sport shoe', 12000, '6a2da4c5a66a403631ce4167c3c1eb95', 5);

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `restname` varchar(50) NOT NULL,
  `promoname` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `nprice` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `dob` varchar(500) NOT NULL DEFAULT '',
  `message` varchar(50) NOT NULL DEFAULT '',
  `image` varchar(500) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `name`, `lastname`, `email`, `dob`, `message`, `image`) VALUES
(13, 'piyal', 'senarathne', 'piyal@gmail.com', '2022-06-22', 'i need to join for the zumbaclasses', '/aaa.jpg'),
(14, 'ramani', 'silva', 'ramani@gmail.com', '1989-06-15', 'hi all we need a discussion', '/aaa.jpg'),
(15, 'gayan', 'gamage', 'gayan@gmail.com', '1992-06-11', 'i need to join my kid for the classes', '/aaa.jpg'),
(16, 'rohan', 'perera', 'roh@gmail.com', '1981-12-18', 'hi i need to join for the yoga classes', '/aaa.jpg'),
(17, 'jagath', 'chamila', 'jagath@gmail.com', '1996-04-17', 'i need to join my kid for the classes', '/aaa.jpg'),
(18, 'indika', 'thotawatta', 'indika@gmail.com', '1965-10-14', 'hi i need to join for the yoga classes', '/aaa.jpg'),
(19, 'raman', 'thilina', 'raman@gmail.com', '1991-06-06', 'hi im anjali i need to book a classs', '/aaa.jpg'),
(20, 'nihal', 'ekanayaka', 'nihalgmail.com', '1981-05-21', 'hi i neet to get into this class', '/aaa.jpg'),
(21, 'kamal', 'wijesiri', 'ksmsl@gmsil.com', '2014-04-30', '', '/aaa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `code` varchar(150) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `name`, `email`, `password`, `description`, `telephone`, `address`, `image`, `status`, `code`, `date`) VALUES
(1, 'Nike', 'nike@gmail.com', '99689cbe4ec8eeb302aded3560cfff52', 'Good and Best Quality Products', '0727652524', 'No 14/5/B, kirindiwita road, udugampola', '/nike.jpg', '1', '965b11a46418878a13732a04b3db07b3', '2022-02-26 21:55:16'),
(2, 'Reebok', 'reeboksl@gmail.com', 'fd790503ab5b8585cf05cee735242114', 'International high branded reebok products are available', '0775856554', 'No 12/ colombo', '/reebok.jpg', '1', '88b1432e046d3580de43f0d2ccc09bce', '2022-05-07 09:11:13'),
(5, 'Puma', 'puma@gmail.com', 'd9f32436125b47e03d11fbf1fa62424a', 'All Branded Puma Sports Items', '0775484579', 'No14/ Rajagiriya', '/puma.jpg', '1', '6a2da4c5a66a403631ce4167c3c1eb95', '2022-06-06 08:35:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bmi` varchar(50) NOT NULL,
  `bmr` varchar(50) NOT NULL,
  `body_fat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype`, `email`, `password`, `fname`, `lname`, `telephone`, `image`, `status`, `date`, `bmi`, `bmr`, `body_fat`) VALUES
(4, 'Admin', 'nirasha@gmail.com', 'a9e425d4d6c204aab4d2446c98f8debe', 'Nirasha', 'Wimalananda', '0772026111', '', '1', '2022-02-26 21:47:50', '31', '', ''),
(5, 'Customer', 'anton@gmail.com', '7f0733e11e61922c2a435e5d2215c6b8', 'Anton', 'Fernando', '0726618185', '/360_F_248648034_llxG0QQuG61wWIvHdCp3lWH9ykxnI50u.', '1', '2022-02-26 21:48:26', '20', '343.673', '-62.37'),
(6, 'Customer', 'new@gmail.com', 'b4635f86d4f22d055751b8393a25653a', 'new', 'user', '0721134346', '/p1.png', '1', '2022-06-08 21:22:16', '33', '343.673', '-62.62'),
(7, 'Customer', 'user@gmail.com', '6edf26f6e0badff12fca32b16db38bf2', 'user', 'perera', '0778548759', '/p1.png', '1', '2022-06-09 17:37:28', '', '', ''),
(8, 'Customer', 'nimali@gmail.com', '7f0733e11e61922c2a435e5d2215c6b8', 'nimali', 'silva', '0775487521', '/p1.png', '1', '2022-06-09 17:38:45', '', '', ''),
(9, 'Customer', 'gayan@gmail.com', '7f0733e11e61922c2a435e5d2215c6b8', 'gayan', 'Silva', '0778457845', '', '1', '2022-06-09 17:39:19', '', '', ''),
(10, 'Customer', 'manik@gmail.com', '7f0733e11e61922c2a435e5d2215c6b8', 'manik', 'silva', '0775487548', '/p1.png', '1', '2022-06-09 17:40:10', '', '', ''),
(12, 'customer', 'cus@gmail.com', 'cus', 'fcus', 'lcus', '07737873', '', '1', '2022-06-09 17:41:26', '12', '14', '16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`fid`) USING BTREE,
  ADD KEY `FK__restuarants` (`rid`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_promotions_restuarants` (`rid`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
