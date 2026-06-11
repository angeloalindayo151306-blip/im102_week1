-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2026 at 03:52 AM
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
-- Database: `im102_week1`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `course`, `year`, `created_at`, `email`, `phone`, `address`) VALUES
(1, 'Angelica Iligan', 'BSIT', 2, '2026-06-10 00:56:10', 'justincarlcanalita07@gmail.com', '09941547437', 'DEL CARMEN'),
(2, 'Angelo Alindayo', 'Information Technology', 2, '2026-06-10 00:56:10', NULL, NULL, NULL),
(3, 'Dy-m Lopecillo', 'Software Engineering', 2, '2026-06-10 00:56:10', NULL, NULL, NULL),
(4, 'Allysa Gaton', 'Computer Science', 2, '2026-06-10 00:56:10', NULL, NULL, NULL),
(5, 'Salman Mutia', 'Computer Science', 2, '2026-06-10 00:56:10', NULL, NULL, NULL),
(6, 'Jenrex Pitogo', 'Information Technology', 2, '2026-06-10 00:56:10', NULL, NULL, NULL),
(7, 'Angelo Fabricante', 'Computer Engineering', 2, '2026-06-10 00:56:10', NULL, NULL, NULL),
(8, 'Albhend Bacalso', 'Secondary Education', 3, '2026-06-10 00:56:10', NULL, NULL, NULL),
(9, 'Ag Gasal', 'Basic Education', 3, '2026-06-10 00:56:10', NULL, NULL, NULL),
(10, 'Godfrid Dublin', 'Economics', 1, '2026-06-10 00:56:10', NULL, NULL, NULL),
(11, 'Godfrid Dublin', 'Economics', 1, '2026-06-10 00:56:10', NULL, NULL, NULL),
(12, 'Godfrid Dublin', 'Economics', 1, '2026-06-10 00:56:10', NULL, NULL, NULL),
(13, 'sdasd', 'asdas', 3, '2026-06-10 00:56:10', NULL, NULL, NULL),
(14, 'sdasd', 'asdas', 3, '2026-06-10 00:56:10', NULL, NULL, NULL),
(15, 'sdasd', 'asdas', 3, '2026-06-10 00:56:10', NULL, NULL, NULL),
(16, 'sdasd', 'asdas', 3, '2026-06-10 00:56:10', NULL, NULL, NULL),
(17, 'sdasd', 'asdas', 3, '2026-06-10 00:56:13', NULL, NULL, NULL),
(18, 'gwapo na bata', 'BSBA', 2, '2026-06-10 01:28:02', NULL, NULL, NULL),
(19, 'gwapo na bata', 'BSBA', 2, '2026-06-10 01:29:15', NULL, NULL, NULL),
(20, 'gwapo na bata', 'BSIT', 2, '2026-06-10 01:30:13', 'justincarlcanalita07@gmail.com', '09941547437', 'DEL CARMEN'),
(21, 'gwapo na bata', 'BSBA', 2, '2026-06-10 01:32:45', NULL, NULL, NULL),
(22, 'gwapo na bata', 'BSBA', 2, '2026-06-10 01:36:37', NULL, NULL, NULL),
(23, 'gwapo na bata', 'BSBA', 2, '2026-06-10 01:36:39', NULL, NULL, NULL),
(25, 'gwapo na bata', 'BSBA', 2, '2026-06-10 01:37:30', 'justincarlcanalita07@gmail.com', '09941547437', 'Palao'),
(26, 'IVAN LOYD OWATAN', 'BSEd', 3, '2026-06-10 01:44:02', NULL, NULL, NULL),
(27, 'IVAN LOYD OWATAN', 'BSIT', 3, '2026-06-10 01:44:02', 'justincarlcanalita07@gmail.com', '09941547437', 'Palao1'),
(35, '', '', 0, '2026-06-11 01:27:17', NULL, NULL, NULL),
(37, '', '', 0, '2026-06-11 01:29:03', NULL, NULL, NULL),
(38, '', '', 0, '2026-06-11 01:29:10', NULL, NULL, NULL),
(40, '', '', 0, '2026-06-11 01:30:39', NULL, NULL, NULL),
(42, '', '', 0, '2026-06-11 01:32:29', NULL, NULL, NULL),
(44, '', '', 0, '2026-06-11 01:36:29', NULL, NULL, NULL),
(47, 'Angelica Iligan', 'BSIT', 2, '2026-06-11 01:40:37', NULL, NULL, NULL),
(56, '', '', 0, '2026-06-11 01:49:29', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
