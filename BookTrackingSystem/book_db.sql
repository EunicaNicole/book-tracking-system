-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2026 at 03:37 PM
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
-- Database: `book_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `status` varchar(50) DEFAULT 'Available',
  `date_added` date DEFAULT curdate(),
  `time_borrowed` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `genre`, `quantity`, `status`, `date_added`, `time_borrowed`) VALUES
(1, 'Computer', 'IT', 2, 'Available', '2026-06-15', NULL),
(2, 'Don\'t Make Me Think: A Common Sense Approach to Web Usability', 'IT', 6, 'Available', '2026-06-15', NULL),
(3, 'Interaction Design: Beyond Human-Computer Interaction', 'IT', 4, 'Available', '2026-06-15', NULL),
(4, 'Designing the User Interface: Strategies for Effective HCI', 'IT', 3, 'Available', '2026-06-15', NULL),
(5, 'Clean Code: A Handbook of Agile Software Craftsmanship', 'IT', 5, 'Available', '2026-06-15', NULL),
(6, 'Fundamentals of Nursing: The Art and Science of Person-Centered Care', 'Nursing', 8, 'Available', '2026-06-15', NULL),
(7, 'Brunner & Suddarth\'s Textbook of Medical-Surgical Nursing', 'Nursing', 6, 'Available', '2026-06-15', NULL),
(8, 'Maternal and Child Health Nursing', 'Nursing', 5, 'Available', '2026-06-15', NULL),
(9, 'Advanced Engineering Mathematics', 'Engineering', 4, 'Available', '2026-06-15', NULL),
(10, 'Introduction to Environmental Engineering', 'Engineering', 3, 'Available', '2026-06-15', NULL),
(11, 'Materials Science and Engineering: An Introduction', 'Engineering', 5, 'Available', '2026-06-15', NULL),
(12, 'Readings in Philippine History', 'General Education', 20, 'Available', '2026-06-15', NULL),
(13, 'The Contemporary World', 'General Education', 15, 'Available', '2026-06-15', NULL),
(14, 'Ethics: Foundations of Moral Valuation', 'General Education', 12, 'Available', '2026-06-15', NULL),
(15, 'Science, Technology, and Society', 'General Education', 18, 'Available', '2026-06-15', NULL),
(16, 'Learning PHP, MySQL & JavaScript', 'IT', 7, 'Available', '2026-06-15', NULL),
(17, 'PHP and MySQL for Dynamic Web Sites', 'IT', 5, 'Available', '2026-06-15', NULL),
(18, 'The Elements of User Experience', 'IT', 4, 'Available', '2026-06-15', NULL),
(19, 'Responsive Web Design with HTML5 and CSS', 'IT', 6, 'Available', '2026-06-15', NULL),
(20, 'Mosby\'s Dictionary of Medicine, Nursing & Health Professions', 'Nursing', 5, 'Available', '2026-06-15', NULL),
(21, 'Psychiatric-Mental Health Nursing', 'Nursing', 6, 'Available', '2026-06-15', NULL),
(22, 'Fundamentals of Electric Circuits', 'Engineering', 4, 'Available', '2026-06-15', NULL),
(23, 'Fluid Mechanics Fundamentals and Applications', 'Engineering', 5, 'Available', '2026-06-15', NULL),
(24, 'Art Appreciation', 'General Education', 10, 'Available', '2026-06-15', NULL),
(25, 'Mathematics in the Modern World', 'General Education', 15, 'Available', '2026-06-15', NULL),
(26, 'Fullstack Web Development with PHP', 'IT', 8, 'Available', '2026-06-15', NULL),
(27, 'Database System Concepts', 'IT', 5, 'Available', '2026-06-15', NULL),
(28, 'About Face: The Essentials of Interaction Design', 'IT', 4, 'Available', '2026-06-15', NULL),
(29, 'JavaScript and JQuery: Interactive Front-End Web Development', 'IT', 7, 'Available', '2026-06-15', NULL),
(30, 'Information Architecture for the World Wide Web', 'IT', 3, 'Available', '2026-06-15', NULL),
(31, 'Pharmacology for Nurses: A Pathophysiologic Approach', 'Nursing', 6, 'Available', '2026-06-15', NULL),
(32, 'Wong\'s Essentials of Pediatric Nursing', 'Nursing', 5, 'Available', '2026-06-15', NULL),
(33, 'Community Health Nursing in the Philippines', 'Nursing', 10, 'Available', '2026-06-15', NULL),
(34, 'Mechanics of Materials', 'Engineering', 5, 'Available', '2026-06-15', NULL),
(35, 'Design of Concrete Structures', 'Engineering', 4, 'Available', '2026-06-15', NULL),
(36, 'Principles of Electronic Materials and Devices', 'Engineering', 3, 'Available', '2026-06-15', NULL),
(37, 'Life and Works of Rizal', 'General Education', 25, 'Available', '2026-06-15', NULL),
(38, 'Panitikang Pilipino', 'General Education', 15, 'Available', '2026-06-15', NULL),
(39, 'Physical Education and Health', 'General Education', 20, 'Available', '2026-06-15', NULL),
(40, 'Introduction to the Philosophy of the Human Person', 'General Education', 12, 'Available', '2026-06-15', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
