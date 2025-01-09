-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 09, 2025 at 07:24 AM
-- Server version: 8.0.40-0ubuntu0.22.04.1
-- PHP Version: 8.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_exam60`
--

-- --------------------------------------------------------

--
-- Table structure for table `payout_table`
--

CREATE TABLE `payout_table` (
  `id` int NOT NULL,
  `student_id` int NOT NULL,
  `amount` float NOT NULL,
  `upi_id` varchar(100) NOT NULL,
  `status` enum('Pending','PAID') DEFAULT 'Pending',
  `requested_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payout_table`
--
ALTER TABLE `payout_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payout_table`
--
ALTER TABLE `payout_table`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payout_table`
--
ALTER TABLE `payout_table`
  ADD CONSTRAINT `payout_table_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_table` (`student_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



ALTER TABLE student_table
ADD COLUMN referral_by_student_id INT NULL,
ADD COLUMN balance FLOAT NOT NULL DEFAULT 0;


ALTER TABLE purchase_table
ADD COLUMN student_id INT NULL;
