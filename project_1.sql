-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 05, 2023 at 03:59 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_status`
--

CREATE TABLE `account_status` (
  `id` int NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `account_status`
--

INSERT INTO `account_status` (`id`, `status`) VALUES
(1, 'Active'),
(2, 'Closed'),
(3, 'Canceled'),
(4, 'Blacklisted');

-- --------------------------------------------------------

--
-- Table structure for table `bill_bookings`
--

CREATE TABLE `bill_bookings` (
  `id` int NOT NULL,
  `id_booking` int NOT NULL,
  `id_bill` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bill_bookings`
--

INSERT INTO `bill_bookings` (`id`, `id_booking`, `id_bill`) VALUES
(2, 29, 1),
(3, 31, 1),
(4, 32, 1),
(5, 33, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bill_transaction`
--

CREATE TABLE `bill_transaction` (
  `id` int NOT NULL,
  `id_momo` int NOT NULL,
  `total_price` int NOT NULL,
  `payment_status` int NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bill_transaction`
--

INSERT INTO `bill_transaction` (`id`, `id_momo`, `total_price`, `payment_status`) VALUES
(1, 3, 20000, 2),
(2, 3, 20000, 2),
(3, 3, 72000, 2),
(4, 3, 54000, 2),
(5, 3, 30000, 2),
(6, 3, 45000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int NOT NULL,
  `id_room` int NOT NULL,
  `id_user` int NOT NULL,
  `name_guest` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone_number` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `adult` int NOT NULL,
  `children` int NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `duration_in_day` int NOT NULL,
  `total_price` int NOT NULL,
  `booking_status` int NOT NULL DEFAULT '1',
  `start_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `id_room`, `id_user`, `name_guest`, `phone_number`, `adult`, `children`, `message`, `check_in`, `check_out`, `duration_in_day`, `total_price`, `booking_status`, `start_date`) VALUES
(27, 15, 2, 'Viet Chi ', '12345', 3, 1, '', '2023-12-05', '2023-12-08', 3, 45000, 1, '2023-12-03 05:37:19'),
(28, 15, 2, 'Viet', '123', 2, 0, '', '2023-12-08', '2023-12-10', 2, 30000, 1, '2023-12-03 05:37:43'),
(29, 16, 2, 'Nguyen Viet', '123333', 2, 1, '', '2023-12-04', '2023-12-08', 4, 72000, 2, '2023-12-03 07:00:39'),
(30, 15, 2, 'Viet nc', '12321', 2, 1, '', '2023-12-03', '2023-12-06', 3, 45000, 1, '2023-12-03 07:14:34'),
(31, 16, 2, 'Viet Chi', '12345', 2, 1, '', '2023-12-04', '2023-12-07', 3, 54000, 2, '2023-12-03 07:17:35'),
(32, 14, 2, 'Viet Chi ', '123', 2, 1, '', '2023-12-04', '2023-12-07', 3, 30000, 2, '2023-12-03 07:19:16'),
(33, 15, 2, 'Viet Chi', '123', 2, 0, '', '2023-12-04', '2023-12-07', 3, 45000, 2, '2023-12-03 07:59:18'),
(34, 15, 2, 'Viet Chi', '12399', 5, 1, '', '2023-12-05', '2023-12-09', 4, 60000, 1, '2023-12-05 03:58:05');

-- --------------------------------------------------------

--
-- Table structure for table `booking_status`
--

CREATE TABLE `booking_status` (
  `id` int NOT NULL,
  `booking_status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `booking_status`
--

INSERT INTO `booking_status` (`id`, `booking_status`) VALUES
(1, 'PENDING'),
(2, 'BOOKED'),
(3, 'CHECK-IN'),
(4, 'CHECK-OUT'),
(5, 'CANCELED'),
(6, 'ABANDONED'),
(7, 'REQUESTED');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `subject` varchar(225) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'aaa', 'aaa@aaa', 'aaaa', 'aaaa');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int NOT NULL,
  `name_facility` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(225) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `name_facility`, `image`, `description`) VALUES
(25, 'TV', '/uploads/tv.svg', ''),
(26, 'Spa', '/uploads/spa.svg', ''),
(27, 'Air conditioner', '/uploads/Air conditioner.svg', ''),
(28, 'Electric Water Heater', '/uploads/Geyser.svg', ''),
(29, 'Room Heater', '/uploads/Room heater.svg', ''),
(30, 'Wifi', '/uploads/wifi.svg', ''),
(31, 'Minibar', '/uploads/minibar.png', ''),
(32, 'Gym', '/uploads/gym.png', ''),
(33, 'Swimming pool', '/uploads/swimming-pool.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int NOT NULL,
  `name_feature` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `name_feature`) VALUES
(1, 'Balcony'),
(2, 'Bedroom'),
(6, 'Bathroom'),
(40, 'Kitchen'),
(41, 'Sea view'),
(42, 'City view'),
(43, 'Queen-sized bed'),
(44, 'King-sized bed');

-- --------------------------------------------------------

--
-- Table structure for table `image_room`
--

CREATE TABLE `image_room` (
  `id` int NOT NULL,
  `id_room` int NOT NULL,
  `image` varchar(225) NOT NULL,
  `thumb` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `image_room`
--

INSERT INTO `image_room` (`id`, `id_room`, `image`, `thumb`) VALUES
(14, 14, '/uploads/benjamin-r-bTkSg5XF4E8-unsplash.jpg', 0),
(15, 14, '/uploads/backbone-visuals-L4iRkKL5dng-unsplash.jpg', 0),
(16, 14, '/uploads/frames-for-your-heart-8_V45fGyWz4-unsplash.jpg', 0),
(17, 14, '/uploads/andrea-davis-1uNh3B3ppl4-unsplash.jpg', 1),
(18, 15, '/uploads/francesca-tosolini-6japTIjUQoI-unsplash.jpg', 1),
(19, 15, '/uploads/isaac-quesada-xc4oxgAbDmw-unsplash.jpg', 0),
(20, 15, '/uploads/javier-vinals--PlfpOk6VKs-unsplash.jpg', 0),
(21, 15, '/uploads/sidekix-media-g51F6-WYzyU-unsplash.jpg', 0),
(22, 15, '/uploads/reisetopia-yoOeM6iXVPY-unsplash.jpg', 0),
(23, 16, '/uploads/upgraded-points-c8UktkMDrbc-unsplash.jpg', 1),
(24, 16, '/uploads/kenny-eliason-ZqqwJA71Ke4-unsplash.jpg', 0),
(25, 16, '/uploads/man-pan-KTSYy-3XVSo-unsplash.jpg', 0),
(26, 16, '/uploads/taylor-beach-PR7h5QGXd8A-unsplash.jpg', 0),
(27, 17, '/uploads/roberto-nickson-tleCJiDOri0-unsplash.jpg', 1),
(28, 17, '/uploads/roberto-nickson-emqnSQwQQDo-unsplash.jpg', 0),
(29, 17, '/uploads/olexandr-ignatov-w72a24brINI-unsplash.jpg', 0),
(30, 17, '/uploads/upgraded-points-meSC2Mi8tM4-unsplash.jpg', 0),
(31, 17, '/uploads/francesca-tosolini-DmOhItSo49k-unsplash.jpg', 0),
(32, 18, '/uploads/upgraded-points-c8UktkMDrbc-unsplash.jpg', 1),
(33, 18, '/uploads/shai-pal-56WKMCORs-0-unsplash.jpg', 0),
(34, 18, '/uploads/reisetopia-cbxynt_6Aao-unsplash.jpg', 0),
(35, 18, '/uploads/photo-1560185127-bdf08e449371.webp', 0),
(36, 18, '/uploads/reisetopia-yoOeM6iXVPY-unsplash.jpg', 0),
(37, 18, '/uploads/backbone-visuals-L4iRkKL5dng-unsplash.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `momo`
--

CREATE TABLE `momo` (
  `id` int NOT NULL,
  `partnerCode` varchar(100) NOT NULL,
  `orderId` varchar(100) NOT NULL,
  `requestId` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `orderInfo` varchar(100) NOT NULL,
  `orderType` varchar(100) NOT NULL,
  `transId` varchar(100) NOT NULL,
  `payType` varchar(100) NOT NULL,
  `signature` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `momo`
--

INSERT INTO `momo` (`id`, `partnerCode`, `orderId`, `requestId`, `amount`, `orderInfo`, `orderType`, `transId`, `payType`, `signature`) VALUES
(3, 'MOMOBKUN20180529', '1701579271', '1701579271', 'MOMOBKUN20180529', 'MOMOBKUN20180529', 'MOMOBKUN20180529', 'MOMOBKUN20180529', 'MOMOBKUN20180529', 'MOMOBKUN20180529'),
(4, 'MOMOBKUN20180529', '1701581007', '1701581007', '20000', 'Thanh toán qua MoMo', 'momo_wallet', '3105605626', 'napas', '0d0d9694a2304bb5db57d9aec03f292d08716fc5b5c9323f8b36a88acb1b3f3f'),
(5, 'MOMOBKUN20180529', '1701581007', '1701581007', '20000', 'Thanh toán qua MoMo', 'momo_wallet', '3105605626', 'napas', '0d0d9694a2304bb5db57d9aec03f292d08716fc5b5c9323f8b36a88acb1b3f3f'),
(7, 'MOMOBKUN20180529', '1701587855', '1701587855', '54000', 'Thanh toán qua MoMo', 'momo_wallet', '3105670414', 'napas', '23b55e69997cca9317bb7e429994dceb72a7f5f23d5cb2acadd99f191ca0519b'),
(8, 'MOMOBKUN20180529', '1701587956', '1701587956', '30000', 'Thanh toán qua MoMo', 'momo_wallet', '3105645771', 'napas', '233e95ed21b24e40795bcf5cf27ca56df9c01e7e4dbdbf6195dc9d1aadd15e1b'),
(9, 'MOMOBKUN20180529', '1701590358', '1701590358', '45000', 'Thanh toán qua MoMo', 'momo_wallet', '3105670688', 'napas', 'a66f006b964230711d7fbeffeb49ae696133645ca98bb038e10fc53e5f4cd6c5');

-- --------------------------------------------------------

--
-- Table structure for table `payment_status`
--

CREATE TABLE `payment_status` (
  `id` int NOT NULL,
  `payment_status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `payment_status`
--

INSERT INTO `payment_status` (`id`, `payment_status`) VALUES
(1, 'Pending'),
(2, 'Completed'),
(3, 'Unpaid'),
(4, 'Failed'),
(5, 'Declined'),
(6, 'Cancelled'),
(7, 'Abandoned'),
(8, 'Settling'),
(9, 'Settled'),
(10, 'Refunded');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int NOT NULL,
  `role` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'User'),
(2, 'Manager'),
(3, 'Receptionist\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int NOT NULL,
  `name` varchar(225) NOT NULL,
  `area` int NOT NULL,
  `max_adult` int NOT NULL,
  `max_children` int NOT NULL,
  `quantity` int NOT NULL,
  `price` int NOT NULL,
  `description` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `area`, `max_adult`, `max_children`, `quantity`, `price`, `description`) VALUES
(14, 'Standard Room', 25, 2, 0, 30, 10000, '                                                                                                                                    '),
(15, 'Deluxe Room', 30, 3, 1, 20, 15000, '                                                                                                                                    '),
(16, 'Business Room ', 33, 3, 2, 20, 18000, '                                                                                                                                    '),
(17, 'Family Room ', 40, 5, 3, 18, 20000, '                                                                                                                                    '),
(18, 'Royal Suite', 50, 8, 5, 15, 25000, '                                                                                                                                    ');

-- --------------------------------------------------------

--
-- Table structure for table `room_facilities`
--

CREATE TABLE `room_facilities` (
  `id` int NOT NULL,
  `id_facilities` int NOT NULL,
  `id_room` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `room_facilities`
--

INSERT INTO `room_facilities` (`id`, `id_facilities`, `id_room`) VALUES
(64, 30, 14),
(65, 28, 14),
(66, 27, 14),
(67, 25, 14),
(68, 31, 15),
(69, 28, 15),
(70, 27, 15),
(71, 25, 15),
(72, 31, 16),
(73, 30, 16),
(74, 29, 16),
(75, 28, 16),
(76, 27, 16),
(77, 25, 16),
(78, 31, 17),
(79, 30, 17),
(80, 29, 17),
(81, 28, 17),
(82, 27, 17),
(83, 25, 17),
(84, 33, 18),
(85, 29, 18),
(86, 28, 18),
(87, 27, 18),
(88, 26, 18);

-- --------------------------------------------------------

--
-- Table structure for table `room_features`
--

CREATE TABLE `room_features` (
  `id` int NOT NULL,
  `id_room` int NOT NULL,
  `id_features` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `room_features`
--

INSERT INTO `room_features` (`id`, `id_room`, `id_features`) VALUES
(65, 14, 6),
(66, 14, 2),
(67, 15, 44),
(68, 15, 6),
(69, 15, 2),
(70, 15, 1),
(71, 16, 43),
(72, 16, 42),
(73, 16, 40),
(74, 16, 6),
(75, 16, 2),
(76, 16, 1),
(77, 17, 43),
(78, 17, 42),
(79, 17, 40),
(80, 17, 6),
(81, 17, 2),
(82, 17, 1),
(83, 18, 44),
(84, 18, 41),
(85, 18, 40),
(86, 18, 6),
(87, 18, 2),
(88, 18, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name_user` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(225) NOT NULL,
  `email` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `phone` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `address` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `avatar` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '/uploads/person-circle.svg',
  `nationality` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_role` int NOT NULL DEFAULT '1',
  `id_status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name_user`, `password`, `email`, `phone`, `address`, `avatar`, `nationality`, `id_role`, `id_status`) VALUES
(2, 'Viet', '', 'chiviet296@gmail.com', '123', 'Quoc Oai - Ha Noi', '/uploads/7239657091273657606 (1).jpg', 'Viet Nam', 2, 1),
(17, 'chi', '@29Md320320', 'chiviet@gmail.com', '0384590116', 'Quoc Oai - Ha Noi', '/uploads/362670413_1272574213628876_2816707130068875618_n.jpg', 'Viet Nam', 1, 1),
(18, 'Viet Nguyen', '@29Md320320', 'viet@gmail.com', '0384590119', 'Ha Noi', '/uploads/person-circle.svg', 'Viet Nam', 1, 1),
(19, 'Viet Chi', '@29Md320320', 'vietnc@gmail.com', NULL, NULL, '/uploads/person-circle.svg', NULL, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_status`
--
ALTER TABLE `account_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill_bookings`
--
ALTER TABLE `bill_bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bill` (`id_bill`),
  ADD KEY `id_booking` (`id_booking`);

--
-- Indexes for table `bill_transaction`
--
ALTER TABLE `bill_transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_status` (`payment_status`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_room` (`id_room`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `booking_status` (`booking_status`);

--
-- Indexes for table `booking_status`
--
ALTER TABLE `booking_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_room`
--
ALTER TABLE `image_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `momo`
--
ALTER TABLE `momo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_status`
--
ALTER TABLE `payment_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_facilities`
--
ALTER TABLE `room_facilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_facilities` (`id_facilities`),
  ADD KEY `id_room` (`id_room`);

--
-- Indexes for table `room_features`
--
ALTER TABLE `room_features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_features` (`id_features`),
  ADD KEY `id_room` (`id_room`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`phone`),
  ADD UNIQUE KEY `email_2` (`email`,`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_status`
--
ALTER TABLE `account_status`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bill_bookings`
--
ALTER TABLE `bill_bookings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bill_transaction`
--
ALTER TABLE `bill_transaction`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `booking_status`
--
ALTER TABLE `booking_status`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `image_room`
--
ALTER TABLE `image_room`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `momo`
--
ALTER TABLE `momo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payment_status`
--
ALTER TABLE `payment_status`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `room_facilities`
--
ALTER TABLE `room_facilities`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `room_features`
--
ALTER TABLE `room_features`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill_bookings`
--
ALTER TABLE `bill_bookings`
  ADD CONSTRAINT `bill_bookings_ibfk_1` FOREIGN KEY (`id_bill`) REFERENCES `bill_transaction` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `bill_bookings_ibfk_2` FOREIGN KEY (`id_booking`) REFERENCES `bookings` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `bill_transaction`
--
ALTER TABLE `bill_transaction`
  ADD CONSTRAINT `bill_transaction_ibfk_1` FOREIGN KEY (`payment_status`) REFERENCES `payment_status` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`id_room`) REFERENCES `rooms` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `bookings_ibfk_3` FOREIGN KEY (`booking_status`) REFERENCES `booking_status` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `room_facilities`
--
ALTER TABLE `room_facilities`
  ADD CONSTRAINT `room_facilities_ibfk_1` FOREIGN KEY (`id_facilities`) REFERENCES `facilities` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `room_facilities_ibfk_2` FOREIGN KEY (`id_room`) REFERENCES `rooms` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `room_features`
--
ALTER TABLE `room_features`
  ADD CONSTRAINT `room_features_ibfk_1` FOREIGN KEY (`id_features`) REFERENCES `features` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `room_features_ibfk_2` FOREIGN KEY (`id_room`) REFERENCES `rooms` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
