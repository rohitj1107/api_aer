-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2022 at 05:26 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `Departments`
--

CREATE TABLE `Departments` (
  `d_id` int(10) NOT NULL,
  `d_name` varchar(20) DEFAULT NULL,
  `d_description` text,
  `d_c_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Departments`
--

INSERT INTO `Departments` (`d_id`, `d_name`, `d_description`, `d_c_date`) VALUES
(3, 'Marketing and sales', 'While marketing and sales drive brand awareness and revenue, the operations department delivers on a business’s promise. This means handling production, fulfilment and customer service', '2022-06-11 15:42:57'),
(4, 'Human resources', 'The six central functional units are production, research and development, sales, marketing, human resources, and accounting/finance.\n\n', '2022-06-11 15:43:28'),
(5, 'Customer service', 'While marketing and sales drive brand awareness and revenue, the operations department delivers on a business’s promise. This means handling production, fulfilment and customer service.', '2022-06-11 15:43:59'),
(6, 'ace', 'Most small businesses use a functional organisational structure. This type of structure has both benefits and drawbacks. In a functional organisational structure,', '2022-06-11 15:44:23'),
(7, 'Accounting', 'Most small businesses use a functional organisational structure. This type of structure has both benefits and drawbacks. In a functional organisational structure,', '2022-06-12 02:46:40'),
(8, 'Accounting', 'Most small businesses use a functional organisational structure. This type of structure has both benefits and drawbacks. In a functional organisational structure,', '2022-06-12 02:50:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Departments`
--
ALTER TABLE `Departments`
  ADD PRIMARY KEY (`d_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Departments`
--
ALTER TABLE `Departments`
  MODIFY `d_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
