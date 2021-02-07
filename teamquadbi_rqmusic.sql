-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 07, 2021 at 01:38 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teamquadbi_rqmusic`
--

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `pl_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pl_ytid` text COLLATE utf8_unicode_ci NOT NULL,
  `pl_ytname` text COLLATE utf8_unicode_ci NOT NULL,
  `pl_justplay` char(1) COLLATE utf8_unicode_ci NOT NULL COMMENT '0 Not Play / 1 End',
  `pl_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`pl_id`, `pl_ytid`, `pl_ytname`, `pl_justplay`, `pl_datetime`) VALUES
('601f5da5c0', 'kULAFHImUEc', 'test', '1', '2021-02-07 10:25:25'),
('601f666cea', 'wPcyW3eKL20', 'test', '1', '2021-02-07 11:02:52'),
('601f66d19f', 'fj9ala8nZ7U', 'test', '1', '2021-02-07 11:04:33'),
('601f75d1c2', 'VsuFVUjXYsI', 'test', '1', '2021-02-07 12:08:33'),
('601f77366c', 'APzqxJdnKfI', 'test', '1', '2021-02-07 12:14:30'),
('601f774587', 'pM76LtznNrc', 'test', '1', '2021-02-07 12:14:45'),
('601f775e64', 'VsuFVUjXYsl', 'test', '1', '2021-02-07 12:15:10'),
('601f79fbbd', 'uUT45SF9q7Y', 'LAZYLOXY X OG-ANIC X URBOYTJ - TMRW (Official Music Video) / Prod. by NINO | YUPP!', '1', '2021-02-07 12:26:19'),
('601f7e02f2', 'QWBMCtIllEM', 'Daddy DJ (Chico & Tonio Radio Edit)', '1', '2021-02-07 12:43:30'),
('601f7e0a26', 'APzqxJdnKfI', 'Bobby Lashley - Titan (Entrance Theme)', '1', '2021-02-07 12:43:38'),
('601f7e0fa8', '8Xu7ZqPylKg', 'Power You Up - โอ๊ต ปราโมทย์[Official MV]', '1', '2021-02-07 12:43:43'),
('601f819b7c', 'QWBMCtIllEM', 'Daddy DJ (Chico & Tonio Radio Edit)', '1', '2021-02-07 12:58:51'),
('601f81a1c3', 'APzqxJdnKfI', 'Bobby Lashley - Titan (Entrance Theme)', '1', '2021-02-07 12:58:57'),
('601f81a930', '8Xu7ZqPylKg', 'Power You Up - โอ๊ต ปราโมทย์[Official MV]', '1', '2021-02-07 12:59:05'),
('601f867d0c', 'APzqxJdnKfI', 'Bobby Lashley - Titan (Entrance Theme)', '1', '2021-02-07 13:19:41'),
('601f8684ce', 'QWBMCtIllEM', 'Daddy DJ (Chico & Tonio Radio Edit)', '1', '2021-02-07 13:19:48'),
('601f86d1b3', '7xxgRUyzgs0', 'Living Colour - Cult Of Personality (Official Video)', '1', '2021-02-07 13:21:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`pl_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
