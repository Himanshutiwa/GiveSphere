-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2025 at 03:30 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `givesphere`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(30) NOT NULL,
  `event_title` varchar(299) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `location` text NOT NULL,
  `fundraising_goal` decimal(10,2) NOT NULL,
  `cover_image` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `event_title`, `description`, `date`, `location`, `fundraising_goal`, `cover_image`, `timestamp`) VALUES
(21, 'Food Help (Together We Serve – Volunteers United for Community Support)', 'This charity event highlights the power of unity and kindness as volunteers come together to support those in need. With essential food supplies and a shared sense of purpose, the initiative reflects compassion, teamwork, and a commitment to creating positive change in the community.', '2025-12-19', 'lucknow uttar pradesh', 75000.00, '[\"uploads/1766041264_5335_charity-event.jpg\"]', '2025-12-18 07:01:04'),
(24, 'Medical Help', 'Compassionate medical volunteers extend care and support to those in need, offering vital health services with dignity and empathy. This initiative represents hope, healing, and a commitment to building a healthier future for underserved communities through kindness and generosity.', '2025-12-26', 'Mumbai', 100000.00, '[\"uploads/1766042608_8268_medical-charity-gallery-04.webp\"]', '2025-12-18 07:23:28'),
(25, 'School on Wheels – Learning Beyond Classrooms', 'Bringing education directly to children, this initiative creates a joyful learning space where young minds grow through interactive teaching, care, and creativity—making learning accessible wherever they are.', '2025-01-18', 'Gorakhpur', 50000.00, '[\"uploads/1766043435_1515_gettyimages-2201147911-1024x1024.jpg\"]', '2025-12-18 07:37:15');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(30) NOT NULL,
  `name` varchar(299) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `respons` int(11) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `respons`, `timestamp`) VALUES
(2, 'HIMANSHU TIWARI', 'himanshutiwari77290@gmail.com', 'zf', 'wete464dg', NULL, '2025-12-03 03:48:12'),
(3, 'HIMANSHU TIWARI', 'himanshutiwari77290@gmail.com', 'zf', 'wete464dg', NULL, '2025-12-03 03:51:14'),
(4, 'HIMANSHU TIWARI', 'himanshutiwari77290@gmail.com', 'zf', 'wete464dg', NULL, '2025-12-03 03:52:27'),
(5, 'HIMANSHU TIWARI', 'himanshutiwari77290@gmail.com', 'zf', 'efsvs', NULL, '2025-12-03 03:52:47'),
(6, 'HIMANSHU TIWARI', 'himanshutiwari77290@gmail.com', 'zf', 'efsvs', NULL, '2025-12-03 03:57:58'),
(7, 'HIMANSHU TIWARI', 'himanshutiwari77290@gmail.com', 'zf', 'efsvs', NULL, '2025-12-03 03:58:32'),
(8, 'HIMANSHU TIWARI', 'himanshutiwari77290@gmail.com', 'zf', 'efsvs', NULL, '2025-12-03 04:02:38'),
(9, 'HIMANSHU TIWARI', 'ht@gmail.com', 'zf', 'sdgdfgdf', NULL, '2025-12-03 04:03:23'),
(10, 'HIMANSHU TIWARI', 'ht@gmail.com', 'zf', 'sasdcd', NULL, '2025-12-04 17:31:42'),
(12, 'HIMANSHU TIWARI', 'himanshutiwari77290@gmail.com', '23423', 'HFGKJK', NULL, '2025-12-08 17:29:08'),
(13, 'HIMANSHU TIWARI', 'ht@gmail.com', 'zfasdas', 'hii', NULL, '2025-12-08 17:31:48'),
(14, 'HIMANSHU TIWARI', 'ht@gmail.com', 'zfasdas', 'hii', NULL, '2025-12-08 17:32:43'),
(15, 'HIMANSHU TIWARI', 'ht@gmail.com', 'zfasdas', 'hii bro', NULL, '2025-12-08 17:37:58'),
(16, 'HIMANSHU TIWARI', 'himanshutiwari77290@gmail.com', '23423', 'qwfsdvxcvxssd', NULL, '2025-12-18 16:23:37');

-- --------------------------------------------------------

--
-- Table structure for table `doner`
--

CREATE TABLE `doner` (
  `id` int(11) NOT NULL,
  `fullname` varchar(299) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `donation_cat` varchar(299) NOT NULL,
  `donate_amount` decimal(20,0) NOT NULL,
  `timestamp` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doner`
--

INSERT INTO `doner` (`id`, `fullname`, `email`, `phone`, `address`, `donation_cat`, `donate_amount`, `timestamp`) VALUES
(1, 'HIMANSHU TIWARI', 'himanshutiwari77290@gmail.com', '7729038218', 'dfhsrtyuwr', 'Clothes Donation', 10, '2025-12-18 17:01:48');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(20) NOT NULL,
  `slider_title` varchar(299) NOT NULL,
  `image` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_title`, `image`, `timestamp`) VALUES
(1, '', '1766682495_Array', '2025-12-25 17:08:15'),
(2, 'hindi is mother toung', '1766682612_enrocin4.png', '2025-12-25 17:10:12'),
(3, 'hindi is mother toung', '1766683447_enrocin4.png', '2025-12-25 17:24:07'),
(4, 'hindi is mother toung', '1766683607_enrocin4.png', '2025-12-25 17:26:47'),
(5, 'hindi is mother toung', '1766683630_enrocin4.png', '2025-12-25 17:27:10'),
(6, 'hindi is mother toung', '1766684168_enrocin4.png', '2025-12-25 17:36:08'),
(7, 'hindi is mother toung', '1766684500_enrocin4.png', '2025-12-25 17:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `fullname` varchar(299) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `image` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `cpass` varchar(200) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'admin' COMMENT 'user,admin',
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `phone`, `image`, `address`, `password`, `cpass`, `role`, `timestamp`) VALUES
(3, 'himanshu', 'himanshutiwari77290@gmail.com', '7729038218', NULL, NULL, 'ht3433', '', 'user', '2025-12-05 09:23:47'),
(4, 'himanshu', 'himanshutiwari77290@gmail.com', '7729038218', NULL, NULL, '$2y$10$amD4W/5PI9Hs1WgI7g.plebndaaxvsOgvyjQ95QF6mc37tRDkrlxi', '', 'user', '2025-12-05 09:27:08'),
(5, 'himanshu tiwari', 'himanshutiwari77290@gmail.com', '7729038218', NULL, NULL, '$2y$10$FOEeda92W/2UlFLGKiqPh.5.WZMFNKqF3KWe.OSqHOLk6l3L7xwO6', '', 'user', '2025-12-05 09:28:02'),
(8, 'himanshuy', 'ht@gmail.com', '7729038218', NULL, NULL, 'ht78hfdx', '', 'user', '2025-12-08 17:41:11'),
(9, 'aman', 'htfe@gmail.com', '7729038218', NULL, NULL, 'A1234gd#', '', 'user', '2025-12-08 18:00:42'),
(10, 'himanshu', 'himanshutiwari77290@gmail.com', '7729038218', NULL, NULL, 'he4234343', '', 'user', '2025-12-18 16:24:42'),
(11, 'himanshu', 'himanshutiwari77290@gmail.com', '7729038218', NULL, NULL, '1234567', '', 'admin', '2025-12-20 12:12:43'),
(12, 'HIMANSHU TIWARId', 'anu@gmail.com', '7887694560', 'user_12.jpg', 'dsfsdfsdf', '12345678', '', 'user', '2025-12-23 17:15:59');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(30) NOT NULL,
  `full_name` varchar(299) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `country` varchar(300) NOT NULL,
  `city` varchar(300) NOT NULL,
  `full_address` text NOT NULL,
  `join_fee` decimal(10,2) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `full_name`, `email`, `phone`, `password`, `country`, `city`, `full_address`, `join_fee`, `timestamp`) VALUES
(2, 'Himanshu ', 'ht@gmail.com', '7729038218', 'fgjtyi6797', 'india', 'Gorakhpur', 'ergrtuytiyuh', 100.00, '2025-12-14 16:50:48'),
(3, 'Himanshu Tiwari bela', 'himanshutiwari77290@gmail.com', '   7729038218', 'rgtery5y54', 'india', 'Chennai', 'w534egdfgdf', 100.00, '2025-12-14 16:51:12'),
(4, 'Himanshu Tiwari', 'himanshutiwari77290@gmail.com', '   7729038218', 'rgtery5y54', 'india', 'Chennai', 'w534egdfgdf', 100.00, '2025-12-14 17:21:20'),
(5, 'Himanshu Tiwari', 'himanshutiwari77290@gmail.com', '7729038218', 'gdddwre', 'india', 'Gorakhpur', 'sfdgfwer', 100.00, '2025-12-14 17:22:16'),
(6, 'Himanshu Tiwarifds', 'himanshutiwari77290@gmail.com', '7729038218', '$2y$10$4qPfFLKQp7RmTU.DTm1yeOaiusjPeKrEGvFIgNZACfsXoHYiahHOu', 'india', 'Bengaluru', 'ergrerty575676', 3222.00, '2025-12-14 17:29:56'),
(7, 'Himanshu Tiwari', 'ht@gmailcom', '   7729038218', '23545sdfsA', 'india', 'Kolkata', 'wer343dcvx23', 100.00, '2025-12-18 16:24:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doner`
--
ALTER TABLE `doner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `doner`
--
ALTER TABLE `doner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
