-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Mar 26, 2023 at 04:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ivofspades`
--

-- --------------------------------------------------------

--
-- Table structure for table `boarders`
--

CREATE TABLE `boarders` (
  `id` int(11) NOT NULL,
  `boarderid` varchar(11) NOT NULL,
  `bname` varchar(255) NOT NULL,
  `baddress` varchar(255) NOT NULL,
  `bage` int(2) NOT NULL,
  `bbirthdate` date NOT NULL,
  `buniversity` varchar(255) NOT NULL,
  `bcontact` varchar(255) NOT NULL,
  `bemail` varchar(255) NOT NULL,
  `bstatus` varchar(255) NOT NULL,
  `bemergencyname` varchar(255) NOT NULL,
  `bemergencyrel` varchar(255) NOT NULL,
  `bemergencynum` varchar(255) NOT NULL,
  `bisactive` int(1) NOT NULL,
  `bgender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `boarders`
--

INSERT INTO `boarders` (`id`, `boarderid`, `bname`, `baddress`, `bage`, `bbirthdate`, `buniversity`, `bcontact`, `bemail`, `bstatus`, `bemergencyname`, `bemergencyrel`, `bemergencynum`, `bisactive`, `bgender`) VALUES
(1, 'B0001', 'Stan Rainier Salazar', 'Blk 24, Lot 14. Stingray St. Bacolod City', 21, '2001-08-05', 'University of Negros Occidental - Recoletos', '2147483647', 'stanrainiersalazar@gmail.com', '0', 'Precious Angel Paglomutan ', '', '2147483647', 1, ''),
(2, 'B0002', 'Stan Rainier Salazar', 'Blk 24, Lot 14. Stingray St. Bacolod City', 0, '2001-08-05', 'University of Negros Occidental - Recoletos', '0', 'stanrainiersalazar@gmail.com', '0', '', '', '0', 1, ''),
(3, 'B0003', 'Stan Rainier Salazar', 'Blk 24, Lot 14. Stingray St. Bacolod City', 21, '2001-08-05', 'University of Negros Occidental - Recoletos', '2147483647', 'stanrainiersalazar@gmail.com', '0', 'Precious Angel Paglomutan ', '', '2147483647', 1, ''),
(4, 'B0004', 'Stan Rainier Salazar', 'Blk 24, Lot 14. Stingray St. Bacolod City', 21, '2001-08-05', 'University of Negros Occidental - Recoletos', '09567091130', 'stanrainiersalazar@gmail.com', '0', 'Precious Angel Paglomutan ', '', '09486564277', 1, ''),
(5, 'B0005', 'Stan Rainier Salazar', 'Blk 24, Lot 14. Stingray St. Bacolod City', 21, '2001-08-05', 'University of Negros Occidental - Recoletos', '09567091130', 'stanrainiersalazar@gmail.com', '0', 'Precious Angel Paglomutan ', '', '09486564277', 1, ''),
(6, 'B0006', 'Khart Danzen Velez', 'Secret', 21, '2001-09-23', 'University of Negros Occidental - Recoletos', '09090909090', 'khartvelez@gmail.com', '0', 'Stan Rainier Salazar', '', '09567091130', 1, ''),
(7, 'B0007', 'Khart Danzen Velez', 'Secret', 21, '2001-09-23', 'University of Negros Occidental - Recoletos', '09090909090', 'khartvelez@gmail.com', '0', 'Stan Rainier Salazar', '', '09567091130', 1, ''),
(8, 'B0008', 'Khart Danzen Velez', 'Secret', 21, '2001-09-23', 'University of Negros Occidental - Recoletos', '09090909090', 'khartvelez@gmail.com', '0', 'Stan Rainier Salazar', '', '09567091130', 1, ''),
(9, 'B0009', 'Khart Danzen Velez', 'Secret', 21, '2001-09-23', 'University of Negros Occidental - Recoletos', '09090909090', 'khartvelez@gmail.com', '0', 'Stan Rainier Salazar', '', '09567091130', 1, ''),
(10, 'B0010', 'Khart Danzen Velez', 'Secret', 21, '2001-09-23', 'University of Negros Occidental - Recoletos', '09090909090', 'khartvelez@gmail.com', '0', 'Stan Rainier Salazar', '', '09567091130', 1, ''),
(11, 'B0011', 'Khart Danzen Velez', 'Secret', 21, '2001-09-23', 'University of Negros Occidental - Recoletos', '09090909090', 'khartvelez@gmail.com', '0', 'Stan Rainier Salazar', '', '09567091130', 1, ''),
(12, 'B0012', 'Khart Danzen Velez', 'Secret', 21, '2001-09-23', 'University of Negros Occidental - Recoletos', '09090909090', 'khartvelez@gmail.com', '0', 'Stan Rainier Salazar', '', '09567091130', 1, ''),
(13, 'B0013', '', '', 0, '0000-00-00', '', '', '', '0', '', '', '', 1, ''),
(14, 'B0014', 'Stan Rainier Salazar', 'Blk 24, Lot 14. Stingray St. Bacolod City', 21, '2001-08-05', 'University of Negros Occidental - Recoletos', '09567091130', 'stanrainiersalazar@gmail.com', '0', 'Precious Angel Paglomutan ', 'Partner', '09486564277', 1, 'Male'),
(15, 'B0015', 'Stan Rainier Salazar', 'Blk 24, Lot 14. Stingray St. Bacolod City', 21, '2001-08-05', 'University of Negros Occidental - Recoletos', '09567091130', 'stanrainiersalazar@gmail.com', 'Single', 'Precious Angel Paglomutan ', 'Partner', '09486564277', 1, 'Male'),
(16, 'B0016', 'Stan Rainier Salazar', 'Blk 24, Lot 14. Stingray St. Bacolod City', 21, '2001-08-05', 'University of Negros Occidental - Recoletos', '09567091130', 'stanrainiersalazar@gmail.com', 'Single', 'Precious Angel Paglomutan ', 'Partner', '09486564277', 1, 'Male'),
(17, 'B0017', 'Stan Rainier Salazar', 'Blk 24, Lot 14. Stingray St. Bacolod City', 21, '2001-08-05', 'University of Negros Occidental - Recoletos', '09567091130', 'stanrainiersalazar@gmail.com', 'Single', 'Precious Angel Paglomutan ', 'Partner', '09486564277', 1, 'Male'),
(18, 'B0018', 'Stan Rainier Salazar', 'Blk 24, Lot 14. Stingray St. Bacolod City', 21, '2001-08-05', 'University of Negros Occidental - Recoletos', '09567091130', 'stanrainiersalazar@gmail.com', 'Single', 'Precious Angel Paglomutan ', 'Partner', '09486564277', 1, 'Male'),
(19, 'B0019', 'Stan Rainier Salazar', 'Blk 24, Lot 14. Stingray St. Bacolod City', 21, '2001-08-05', 'University of Negros Occidental - Recoletos', '09567091130', 'stanrainiersalazar@gmail.com', 'Single', 'Precious Angel Paglomutan ', 'Partner', '09486564277', 1, 'Male'),
(20, 'B0020', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(21, 'B0021', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(22, 'B0022', '123', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(23, 'B0023', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(24, 'B0024', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(25, 'B0025', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(26, 'B0026', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(27, 'B0027', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(28, 'B0028', 'test', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(29, 'B0029', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(30, 'B0030', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(31, 'B0031', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(32, 'B0032', 'asdasd', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(33, 'B0033', 'asdasd', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(34, 'B0034', 'Stan Rainier Salazar', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(35, 'B0035', 'Stan Rainier Salazar', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(36, 'B0036', 'test22', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(37, 'B0037', 'test22', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(38, 'B0038', 'Stan Rainier Salazar', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(39, 'B0039', 'Stan Rainier Salazar', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(40, 'B0040', 'Stan Rainier Salazar', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(41, 'B0041', 'Stan Rainier Salazar', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(42, 'B0042', 'Stan Rainier Salazar', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(43, 'B0043', 'Stan Rainier Salazar', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(44, 'B0044', 'Stan', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(45, 'B0045', 'Test233', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(46, 'B0046', 'TEst223', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(47, 'B0047', 'Test22', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(48, 'B0048', 'Stannnnn', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(49, 'B0049', 'Swewe', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(50, 'B0050', '123123213', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(51, 'B0051', '1231231', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(52, 'B0052', '123213', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(53, 'B0053', 'TDST', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(54, 'B0054', 'Julius Bawang', 'Secret', 0, '2022-10-29', 'University of St. La Salle ', '1231312313112312', 'jb@gmail.com', 'Single', 'Mark Henry', 'Friend', '0913029312093012', 1, 'Male'),
(55, 'B0055', 'Stan', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(56, 'B0056', 'Stan Rainier ', 'bacolod city', 21, '2022-12-12', 'University of Negros Occidental - Recoletos', '090909090909', 'stanrainier@mail.com', 'Single', 'None', 'None', 'None', 1, 'Male'),
(57, 'B0057', 'Stan', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(58, 'B0058', 'Stan', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(59, 'B0059', 'TestMarch182023', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(60, 'B0060', 'Kent Antenor Cruz', 'Taculing auh!', 21, '2001-09-16', 'University of Negros Occidental - Recoletos', '09090909099', 'kentoterz@gmail.com', 'Single', 'Catto', 'Girlfriend', '90909090909', 1, 'Male'),
(61, 'B0061', 'asdasdasd', '', 0, '0000-00-00', '', '', 'asdasd@ss.com', '', '', '', '', 1, ''),
(62, 'B0062', 'asdasd', '', 0, '0000-00-00', '', '', 'asdasdasd@asdasd', '', '', '', '', 1, ''),
(63, 'B0063', 'asdasdasd', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(64, 'B0064', 'asdadas', '', 0, '0000-00-00', '', '', 'asd123@asd.com', '', '', '', '', 1, ''),
(65, 'B0065', 'asdasdasd', '', 0, '0000-00-00', '', '', 'asdds@asdasd.com', '', '', '', '', 1, ''),
(66, 'B0066', 'asdasdasd', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(67, 'B0067', 'asdasd', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(68, 'B0068', 'asdasdasd', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(69, 'B0069', 'Carl Angeles', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(70, 'B0070', 'Carl Angeles two', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(71, 'B0071', 'New Test', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(72, 'B0072', 'NewProdtwo', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(73, 'B0073', 'NewTestThree', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(74, 'B0074', 'NewProdTestFour', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(75, 'B0075', 'Stan ', '', 0, '0000-00-00', '', '', '', '', '', '', '', 1, ''),
(76, 'B0076', 'Test UI', '', 0, '0000-00-00', '', '', 'asdasdasd@gmail.com', '', '', '', '', 1, ''),
(77, 'B0077', 'Stan Rainier', '', 0, '0000-00-00', '', '', 'stan@emai.com', '', '', '', '', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', '$2y$10$py3SlhGLbY10D7GOmEbYuOup3nrk7TYpQOaldnUIczAKpLUdKM6o2', '2022-10-17 22:18:27'),
(2, 'stan', '$2y$10$yz7T8Hx42ip/HZzM/gDhAOM5EH7mTm3exBT0r7yEemq5qvsV/ILkq', '2022-10-17 22:35:39'),
(3, 'test', '$2y$10$IA.F8nYqxbAbWbyALELp1uFPUBn3.q31EXNdughsAf/iThA8Lv1ki', '2022-10-17 22:45:53'),
(4, 'RegisterTest', '$2y$10$tPKjIuBCrbDNWXJ0VodcL.vdFYNqaQKr8J.Vql/kxkhca5yBF/nyO', '2022-10-28 22:32:10'),
(5, 'stanstanstan', '$2y$10$ff/AeqwV0opnOgt2Cq1wOu8BD..UiB1m00QGst48YnJcHzxHsZPOO', '2023-03-18 02:28:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boarders`
--
ALTER TABLE `boarders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boarders`
--
ALTER TABLE `boarders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
