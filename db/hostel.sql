-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2019 at 05:06 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `fee_schedule`
--

CREATE TABLE `fee_schedule` (
  `id` int(11) NOT NULL,
  `seat_range` varchar(50) NOT NULL,
  `wifi` varchar(25) NOT NULL,
  `current` varchar(20) NOT NULL,
  `total_fee` varchar(20) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `status` varchar(5) NOT NULL DEFAULT '1',
  `created_at` varchar(150) NOT NULL,
  `updated_at` varchar(50) DEFAULT NULL,
  `deleted_at` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fee_schedule`
--

INSERT INTO `fee_schedule` (`id`, `seat_range`, `wifi`, `current`, `total_fee`, `unique_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, '850', '400', '360', '1610', 'e2478af57ee8cb711fe68bbd1d6b8234', '1', '2019-01-14 06:15:33 pm', '2019-01-21 05:38:09 pm', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `meal_entry`
--

CREATE TABLE `meal_entry` (
  `id` int(11) NOT NULL,
  `year` varchar(11) NOT NULL,
  `month` varchar(25) NOT NULL,
  `day_meal` varchar(50) NOT NULL,
  `days` varchar(25) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `status` varchar(5) NOT NULL DEFAULT '1',
  `created_at` varchar(150) NOT NULL,
  `updated_at` varchar(50) DEFAULT NULL,
  `deleted_at` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `meal_entry`
--

INSERT INTO `meal_entry` (`id`, `year`, `month`, `day_meal`, `days`, `student_id`, `unique_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, '2019', 'January', '2', '20', '7', '2b15a76b53217aee7bd0241582715c2b', '1', '2019-01-20 12:26:21 pm', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `meal_fee`
--

CREATE TABLE `meal_fee` (
  `id` int(11) NOT NULL,
  `year` varchar(11) NOT NULL,
  `month` varchar(25) NOT NULL,
  `meal_fee` varchar(50) NOT NULL,
  `student_id` int(11) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `status` varchar(5) NOT NULL DEFAULT '1',
  `created_at` varchar(150) NOT NULL,
  `updated_at` varchar(50) DEFAULT NULL,
  `deleted_at` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `meal_fee`
--

INSERT INTO `meal_fee` (`id`, `year`, `month`, `meal_fee`, `student_id`, `unique_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, '2019', 'January', '1800', 13, '54cbc7223840c7b5e8bdbec6edc6700d', '1', '2019-01-20 01:34:32 pm', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_01_12_050201_create_tbl_employee_table', 1),
(2, '2019_01_12_113238_create_tbl_contact_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `lastname`, `gender`, `mobile_no`, `email`, `password`, `confirm_password`, `status`) VALUES
(43, 'Golam', 'Moktadir', 'male', '01798933230', 'cse.limon.33@gmail.com', '123', '123', 'active'),
(46, 'Md Migniur', ' Rahman', 'male', '01723997962', 'konoknew@gmail.com', '741', '741', 'active'),
(47, 'Sujan', 'Islam', 'male', '01751079144', 'sujanislam144@gmail.com', '963', '963', 'active'),
(48, 'Golam', 'Moktadir', 'male', '01798633230', 'cse.limon.33@gmail.com', '123', '123', '0');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `id` int(11) NOT NULL,
  `year` varchar(11) NOT NULL,
  `month` varchar(25) NOT NULL,
  `month_fee` varchar(50) NOT NULL,
  `due` varchar(50) NOT NULL,
  `student_id` int(11) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `status` varchar(5) NOT NULL DEFAULT '1',
  `created_at` varchar(150) NOT NULL,
  `updated_at` varchar(50) DEFAULT NULL,
  `deleted_at` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `shopping`
--

CREATE TABLE `shopping` (
  `id` int(11) NOT NULL,
  `year` varchar(50) NOT NULL,
  `month` varchar(25) NOT NULL,
  `days` varchar(20) NOT NULL,
  `shopping_cost` varchar(20) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `status` varchar(5) NOT NULL DEFAULT '1',
  `created_at` varchar(150) NOT NULL,
  `updated_at` varchar(50) DEFAULT NULL,
  `deleted_at` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shopping`
--

INSERT INTO `shopping` (`id`, `year`, `month`, `days`, `shopping_cost`, `unique_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2019', 'January', '17', '1500', '3de9912924926d19754e2637b9d2e027', '1', '2019-01-17 05:18:52 pm', NULL, NULL),
(4, '2019', 'January', '20', '2000', 'f716a6415bd30d0b7698302e055a176a', '1', '2019-01-20 05:35:42 pm', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `class` varchar(25) NOT NULL,
  `shift` varchar(25) NOT NULL,
  `branch` varchar(25) NOT NULL,
  `class_roll` varchar(25) NOT NULL,
  `birthday` varchar(150) NOT NULL,
  `blood_group` varchar(25) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `village` varchar(150) NOT NULL,
  `post_office` varchar(100) NOT NULL,
  `post_code` varchar(100) NOT NULL,
  `thana` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `guardian_number` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `status` varchar(5) NOT NULL DEFAULT '1',
  `created_at` varchar(150) DEFAULT NULL,
  `updated_at` varchar(50) DEFAULT NULL,
  `deleted_at` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`id`, `name`, `sex`, `class`, `shift`, `branch`, `class_roll`, `birthday`, `blood_group`, `religion`, `mobile_number`, `father_name`, `mother_name`, `village`, `post_office`, `post_code`, `thana`, `district`, `guardian_number`, `image`, `unique_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'Md Golam Moktadir', 'Male', '7', 'Day', 'B', '10', '2019-01-19', 'B+', 'Buddhist', '0236598', 'Md. Nurul Islam Mondal', 'Most. Laila Arzumand Banu', 'ddd', 'ss', 'ss', 'ss', 'ss', 'dd', '2HsRPhNa8NKoala.jpg', 'a364c1669b416418e179b11599d51306', '1', '2019-01-13 01:34:38 pm', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fee_schedule`
--
ALTER TABLE `fee_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meal_entry`
--
ALTER TABLE `meal_entry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meal_fee`
--
ALTER TABLE `meal_fee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopping`
--
ALTER TABLE `shopping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fee_schedule`
--
ALTER TABLE `fee_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `meal_entry`
--
ALTER TABLE `meal_entry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `meal_fee`
--
ALTER TABLE `meal_fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `shopping`
--
ALTER TABLE `shopping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_data`
--
ALTER TABLE `student_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
