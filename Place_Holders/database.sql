-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2017 at 09:09 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `our_users`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(600) NOT NULL,
  `datejoined` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `firstname`, `lastname`, `username`, `email`, `password`, `datejoined`) VALUES
(47, 'Antony', 'Makombora', 'makenduru', 'apmmakombora@gmail.com', '9e821972073aa9dc8d3583d3df0723300a5f1b75', 1510366620),
(48, 'munyagf', 'humphreygf', 'bf', 'apmmakomboa@gmail.comgf', '4747796ce3d277145a83c0bf7cb222bbb8af2570', 1510367837),
(49, 'mggg', 'Makomborag', 'benfc', 'beb@sg', '1f9436adc60da49e0bcfc270dd75cc479c36afb6', 1510368832),
(50, 'Antony Mako', 'Makombora', '$hunt', 'cd@s', 'c02a6ec5dfd73cfc10ca7de517ef168a97d0aa71', 1510370027),
(51, 'admin', 'makombora', 'makpranto', 'tinasakalaapmlp@da', '47c85b57b96415565dd54cc20b98ceac57b38e1c', 1510377895),
(52, 'Moyo', 'Makombora', 'tony', 'b@d', '1308c5a3e365a86df24888654bacee406b10f5a0', 1510380971),
(53, 'Munya', 'Munyaradzi', 'bullyking', 'asadad@d', '4992135c26c0a0d7cff045b636e111d861a1cd24', 1510561615),
(54, 'Antony', 'Makombora', 'place_holder', 'a@f', 'cb6db28167173d70285023c0df19708f8012fc53', 1510562913),
(55, 'dffdf', 'dfffd', 'dfdffd', 'sfsf@d', '0bbbbe45f8e8669e566f824a650e60ee8839ed51', 1510382716);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
