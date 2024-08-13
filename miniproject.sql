-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2024 at 06:58 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_book`
--

CREATE TABLE `add_book` (
  `b_id` int(11) NOT NULL,
  `b_name` varchar(70) NOT NULL,
  `b_author` varchar(30) NOT NULL,
  `b_category` varchar(200) NOT NULL,
  `b_quantity` int(11) NOT NULL,
  `b_page` int(11) NOT NULL,
  `b_publisher` varchar(30) NOT NULL,
  `b_image` varchar(300) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_book`
--

INSERT INTO `add_book` (`b_id`, `b_name`, `b_author`, `b_category`, `b_quantity`, `b_page`, `b_publisher`, `b_image`, `added_on`) VALUES
(1, 'You Can', 'George Matthew Adams', 'Motivation', 10, 300, 'Publisher 1', 'b1.jpeg', '2023-10-09 21:26:33'),
(2, 'Three Thousand Stitches: Ordinary People, Extraordinary Lives', 'sudha murthy', 'Motivation', 15, 250, 'Publisher 2', 'b2.jpeg', '2023-10-09 21:26:33'),
(3, 'Life\'s Amazing Secrets: How to Find Bala', 'Guar gopal das', 'Motivation', 8, 400, 'Publisher 3', 'b3.jpeg', '2023-10-09 21:26:33'),
(4, 'The Alchemist', 'Panlo Coelho', 'Motivation', 12, 350, 'Publisher 4', 'b4.jpeg', '2023-10-09 21:26:33'),
(5, 'Think and grow rich', 'Napoleon Hill', 'Motivation', 20, 200, 'Publisher 5', 'b5.jpeg', '2023-10-09 21:26:33'),
(6, 'The Subtle Art Of Not Giving A F*ck', 'Mark Manson', 'Motivation', 5, 500, 'Publisher 6', 'b6.jpeg', '2023-10-09 21:26:33'),
(7, 'Black Flag', 'David Ricciardi', 'action', 10, 300, 'Publisher 7', 'b7.jpeg', '2023-10-09 21:36:18'),
(8, 'The Sentinel', 'Lee child and andrew child', 'action', 15, 250, 'Publisher 8', 'b8.jpeg', '2023-10-09 21:36:18'),
(9, 'Hour of the assassin', 'Matthew Quirk', 'action', 8, 400, 'Publisher 9', 'b9.jpeg', '2023-10-09 21:36:18'),
(10, 'Wrath of poseidon', 'Clive Cussler and Robin Burcel', 'action', 12, 350, 'Publisher 10', 'b10.jpeg', '2023-10-09 21:36:18'),
(11, 'The Ancient Nine', 'Ian K. Smith', 'action', 20, 200, 'Publisher 11', 'b11.jpeg', '2023-10-09 21:36:18'),
(12, 'Coastal Pursuit', 'J.D. Dudycha', 'action', 5, 500, 'Publisher 12', 'b12.jpeg', '2023-10-09 21:36:18'),
(13, 'The Lord of the Rings', 'J.R.R. Tolkien', 'fantasy', 10, 300, 'Publisher 13', 'b13.jpeg', '2023-10-09 21:50:21'),
(14, 'Harry Potter', 'J.K. Rowling', 'fantasy', 15, 250, 'Publisher 14', 'b14.jpeg', '2023-10-09 21:50:21'),
(15, 'The Doors Of Stone', 'Patrick Rothfus', 'fantasy', 8, 400, 'Publisher 15', 'b15.jpeg', '2023-10-09 21:50:21'),
(16, 'The Name of the Wind: The Kingkiller Chronicle', 'Patrick Rothfuss', 'fantasy', 12, 350, 'Publisher 16', 'b16.jpeg', '2023-10-09 21:50:21'),
(17, 'The Wheel Of Time', 'Robert Jordan', 'fantasy', 20, 200, 'Publisher 17', 'b17.jpeg', '2023-10-09 21:50:21'),
(18, 'A song of ice and fire', 'George R.R. Martin', 'fantasy', 5, 500, 'Publisher 18', 'b18.jpeg', '2023-10-09 21:50:21'),
(19, 'Salem’s Lot', 'Stephen King', 'horror', 10, 300, 'Publisher 19', 'b19.jpeg', '2023-10-09 22:01:08'),
(20, 'Those Across the River', 'Christopher Buehlman', 'horror', 15, 250, 'Publisher 20', 'b20.jpeg', '2023-10-09 22:01:08'),
(21, 'The Exorcist', 'William Peter Blatty', 'horror', 8, 400, 'Publisher 21', 'b21.jpeg', '2023-10-09 22:01:08'),
(22, 'The Ruins', 'Scott Smith', 'horror', 12, 350, 'Publisher 22', 'b22.jpeg', '2023-10-09 22:01:08'),
(23, 'White Is for Witching', 'Helen Oyeyemi', 'horror', 20, 200, 'Publisher 23', 'b23.jpeg', '2023-10-09 22:01:08'),
(24, 'The Haunting of Hill House', 'Shirley Jackson', 'horror', 5, 500, 'Publisher 24', 'b24.jpeg', '2023-10-09 22:01:08'),
(25, 'Atomic Habits', 'James Clear', 'self-help', 10, 300, 'Publisher 25', 'b25.jpeg', '2023-10-09 22:13:57'),
(26, 'Can’t Hurt Me', 'David Goggins', 'self-help', 15, 250, 'Publisher 26', 'b26.jpeg', '2023-10-09 22:13:57'),
(27, 'I’m Judging You', 'Luvvie Ajayi', 'self-help', 8, 400, 'Publisher 27', 'b27.jpeg', '2023-10-09 22:13:57'),
(28, 'The Power of Now', 'Eckhart Tolle', 'self-help', 12, 350, 'Publisher 28', 'b28.jpeg', '2023-10-09 22:13:57'),
(29, 'The 7 Habits of Highly Effective People', 'Stephen R. Covey', 'self-help', 20, 200, 'Publisher 29', 'b29.jpeg', '2023-10-09 22:13:57'),
(30, 'How to Win Friends & Influence People', 'Dale Carnegie', 'self-help', 5, 500, 'Publisher 30', 'b30.jpeg', '2023-10-09 22:13:57'),
(31, 'Boredom', 'Tsugumi Ohba', 'anime', 10, 300, 'Publisher 31', 'b31.jpeg', '2023-10-09 22:26:24'),
(32, 'Vampire knight', 'Masturi Hino', 'anime', 15, 250, 'Publisher 32', 'b32.jpeg', '2023-10-09 22:26:24'),
(33, 'Skip beat', 'Yoshika Nakamura', 'anime', 8, 400, 'Publisher 33', 'b33.jpeg', '2023-10-09 22:26:24'),
(34, 'Naruto', 'Masashi Kishimoto', 'anime', 12, 350, 'Publisher 34', 'b34.jpeg', '2023-10-09 22:26:24'),
(35, 'Dragon Ball', 'Akira Toriyama', 'anime', 20, 200, 'Publisher 35', 'b35.jpeg', '2023-10-09 22:26:24'),
(36, 'Attack On Titan', 'Hajime Isayama', 'anime', 5, 500, 'Publisher 36', 'b36.jpeg', '2023-10-09 22:26:24'),
(39, 'dankhara', 'arvindbhai', 'horror', 7, 0, '', '1.jpg', '2023-11-07 23:18:12');

-- --------------------------------------------------------

--
-- Table structure for table `issue_book`
--

CREATE TABLE `issue_book` (
  `sno` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `b_name` varchar(100) NOT NULL,
  `issue_date` date NOT NULL,
  `return_date` date NOT NULL,
  `charges` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `issue_book`
--

INSERT INTO `issue_book` (`sno`, `uname`, `b_name`, `issue_date`, `return_date`, `charges`) VALUES
(7, 'mp', 'The Alchemist', '2023-10-10', '2023-10-21', 50),
(8, 'het', 'Bhagwat Gita', '2023-10-10', '2023-10-28', 50);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `sno` int(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sno`, `fname`, `lname`, `uname`, `pwd`, `created_on`) VALUES
(9, 'nihar', 'dankhara', 'ninin', '12345678', '2023-10-05 14:12:30'),
(16, 'Nihar', 'Dankhara', 'admin', 'admin123', '2023-10-05 20:23:14'),
(38, 'yo', 'yo', 'q', '123123123', '2023-10-09 12:19:08'),
(40, 'mehul', 'pativar', 'mp', '123123123', '2023-10-09 12:49:05'),
(41, 'w', 'y', 't', '123123123', '2023-10-10 11:22:03'),
(42, '&amp;lt;/script&amp;gt;&amp;', '&amp;lt;/script&amp;gt;&amp;', '&amp;lt;/script&amp;gt;&amp;', '123123123', '2023-10-14 03:09:58'),
(43, 'nitvik', 'sou', 'nitvik', '123123123', '2023-10-14 03:18:58'),
(44, '&amp;lt;/script&amp;gt;', '&amp;lt;/script&amp;gt;', '&amp;lt;/script&amp;gt;', '123123123', '2023-10-14 03:22:52');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `r_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `b_name` varchar(255) NOT NULL,
  `b_author` varchar(255) NOT NULL,
  `b_publisher` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`r_id`, `username`, `b_name`, `b_author`, `b_publisher`) VALUES
(18, 'JuniorGameArtist', 'rich dad poor dad', 'robert kiyosaki', 'robert kiyosaki'),
(19, 'mehul', 'The psychology of money', 'Morgan Housel', 'Morgan Housel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_book`
--
ALTER TABLE `add_book`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `issue_book`
--
ALTER TABLE `issue_book`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_book`
--
ALTER TABLE `add_book`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `issue_book`
--
ALTER TABLE `issue_book`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `sno` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
