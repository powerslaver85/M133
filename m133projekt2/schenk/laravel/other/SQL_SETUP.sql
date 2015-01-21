-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2015 at 11:53 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webseite`
--
CREATE DATABASE IF NOT EXISTS `webseite` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `webseite`;

-- --------------------------------------------------------

--
-- Table structure for table `antwort`
--

CREATE TABLE IF NOT EXISTS `antwort` (
`ID` int(50) NOT NULL,
  `WERT` int(3) NOT NULL,
  `fk_frage` int(11) NOT NULL,
  `fk_benutzer` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=317 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `antwort`
--

INSERT INTO `antwort` (`ID`, `WERT`, `fk_frage`, `fk_benutzer`) VALUES
(269, 100, 1, 8),
(270, 75, 2, 8),
(271, 75, 3, 8),
(272, 50, 4, 8),
(273, 25, 5, 8),
(274, 50, 6, 8),
(275, 25, 7, 8),
(276, 25, 8, 8),
(277, 75, 9, 8),
(278, 75, 10, 8),
(279, 25, 11, 8),
(280, 75, 12, 8),
(281, 25, 1, 9),
(282, 0, 2, 9),
(283, 25, 3, 9),
(284, 75, 4, 9),
(285, 75, 5, 9),
(286, 75, 6, 9),
(287, 25, 7, 9),
(288, 25, 8, 9),
(289, 100, 9, 9),
(290, 0, 10, 9),
(291, 75, 11, 9),
(292, 100, 12, 9),
(293, 100, 1, 11),
(294, 100, 2, 11),
(295, 100, 3, 11),
(296, 100, 4, 11),
(297, 100, 5, 11),
(298, 100, 6, 11),
(299, 100, 7, 11),
(300, 100, 8, 11),
(301, 100, 9, 11),
(302, 100, 10, 11),
(303, 100, 11, 11),
(304, 100, 12, 11),
(305, 0, 1, 12),
(306, 0, 2, 12),
(307, 0, 3, 12),
(308, 25, 4, 12),
(309, 25, 5, 12),
(310, 100, 6, 12),
(311, 100, 7, 12),
(312, 100, 8, 12),
(313, 75, 9, 12),
(314, 75, 10, 12),
(315, 75, 11, 12),
(316, 100, 12, 12);

-- --------------------------------------------------------

--
-- Table structure for table `benutzer`
--

CREATE TABLE IF NOT EXISTS `benutzer` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `vorname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nachname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remeber_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `benutzer`
--

INSERT INTO `benutzer` (`id`, `username`, `password`, `vorname`, `nachname`, `email`, `created_at`, `updated_at`, `remeber_token`) VALUES
(8, 'ramsc', '$2y$10$jjM2o.O1x0QzhXIMT9jMjucUdEacXOoJ9blPsKfiQkOj.rXICZbiO', 'Ramon', 'schenk', 'ram.schenk@gmail.ch', '2014-12-23 06:36:48', '2014-12-23 06:36:48', NULL),
(9, 'Demo01', '$2y$10$HaGdyDZd0s9R37quCNJyROL9I.SBiyUM6syfGsoQlR/udjsNChoum', 'Demooooo', 'uuuhser', 'demo@user01.de', '2014-12-29 05:51:44', '2014-12-29 05:51:44', NULL),
(10, 'Demo02', '$2y$10$ZTOzKjOiYT1Nc9Ij5kcptOevx.mfTfYRp5IMelYaw3ldMkvLgUGjK', 'Demonstrativer', 'Abuser', 'demo@user02.de', '2014-12-29 13:04:49', '2014-12-29 13:04:49', NULL),
(11, 'Demo03', '$2y$10$KsnecFxXulry9oS1B3Y2EuUFhzUg1AHo1Qufocm09j0C.pLzxw9KK', 'Demooo', 'User', 'demo@user3.de', '2015-01-05 09:47:06', '2015-01-05 09:47:06', NULL),
(12, 'Demo04', '$2y$10$DTzP2SVl3AWPpL/I4AiF.u6Lj51u6RSdUn.CPU4idNvc0.6kXZjMu', 'Demo', 'Usoeer', 'demo@user4.de', '2015-01-05 09:51:35', '2015-01-05 09:51:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `frage`
--

CREATE TABLE IF NOT EXISTS `frage` (
`Id` int(11) NOT NULL,
  `Frag` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frage`
--

INSERT INTO `frage` (`Id`, `Frag`) VALUES
(1, 'Wie bewerten Sie den Kontakt zu Ihrem ISP?'),
(2, 'Wie bewerten Sie die Freundlichkeit der Mitarbeiter?'),
(3, 'Wie bewerten Sie das Preis/Leistungs Niveau der Abos?'),
(4, 'Wie bewerten Sie die Vielfalt der Angebote?'),
(5, 'Wie bewerten Sie die tatsächliche Leistung Ihres Abos?'),
(6, 'Wie bewerten Sie die Zuverlässigkeit Ihres Anschlusses?'),
(7, 'Wie bewerten Sie den Kundensupport?'),
(8, 'Wie bewerten Sie den Technischen Support?'),
(9, 'Wie bewerten Sie das Image Ihres ISP?'),
(10, 'Wie bewerten Sie Ihren ISP im Vergleich zur Konkurenz?'),
(11, 'Wie bewerten Sie die Zufriedenheit mit Ihrem ISP?'),
(12, 'Wie gross ist die Chance das Sie Ihren ISP weiterempfehlen?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antwort`
--
ALTER TABLE `antwort`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `benutzer`
--
ALTER TABLE `benutzer`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frage`
--
ALTER TABLE `frage`
 ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antwort`
--
ALTER TABLE `antwort`
MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=317;
--
-- AUTO_INCREMENT for table `benutzer`
--
ALTER TABLE `benutzer`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `frage`
--
ALTER TABLE `frage`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
