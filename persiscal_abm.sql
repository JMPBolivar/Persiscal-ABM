-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2017 at 11:16 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `persiscal_abm`
--

-- --------------------------------------------------------

--
-- Table structure for table `turbinas`
--

CREATE TABLE IF NOT EXISTS `turbinas` (
  `id` int(11) NOT NULL,
  `tipo` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `turbinas`
--

INSERT INTO `turbinas` (`id`, `tipo`, `active`) VALUES
(1, 'HWR', 1),
(2, 'PWR', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `turbinas`
--
ALTER TABLE `turbinas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo` (`tipo`),
  ADD KEY `tipo_2` (`tipo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `turbinas`
--
ALTER TABLE `turbinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
