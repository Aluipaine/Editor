-- phpMyAdmin SQL Dump
-- version 5.2.1deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 30, 2023 at 02:45 PM
-- Server version: 10.11.3-MariaDB-1
-- PHP Version: 8.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teditori_gro`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` varchar(255) NOT NULL,
  `projectid` int(11) NOT NULL,
  `room` varchar(50) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `x_y` varchar(255) DEFAULT NULL,
  `content` varchar(2000) DEFAULT NULL,
  `attachments` varchar(3000) DEFAULT NULL,
  `comment_from` varchar(255) DEFAULT NULL,
  `comment_to` varchar(255) DEFAULT NULL,
  `urgency` varchar(255) DEFAULT NULL,
  `creation_time` varchar(255) DEFAULT NULL,
  `ending_time` varchar(255) DEFAULT NULL,
  `aihe` varchar(255) DEFAULT NULL,
  `deadline` varchar(255) DEFAULT NULL,
  `answer_to` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `projectid`, `room`, `name`, `x_y`, `content`, `attachments`, `comment_from`, `comment_to`, `urgency`, `creation_time`, `ending_time`, `aihe`, `deadline`, `answer_to`) VALUES
('com0ca5daa2218ed', 8, '--Tila   L11-1>a', 'Kommentti ', '500|1500', '5rwwrwrrwwr asdaddsa sadsd ddd', '', 'Jiri', 'Jari', '1', '2023-07-10 17:41:54', '2023-07-10 17:41:54', NULL, NULL, ''),
('com0ddcbdd1c48a6', 8, '--Tila   L11-1>a', 'Kommentti ', '5|5', '', 'https://teditori.gromi.fi/uploads/извините.jpg\n\n', 'duunari', 'Jari', '1', '2023-07-12 13:20:52', '2023-07-13 13:56:28', NULL, NULL, ''),
('com0ea32dadcb218', 8, '--Tila    L11-1>a', 'Kommentti ', '5|5', 'Tesr', 'https://teditori.gromi.fi/uploads/ТЗ на копитрейдер (1).pdf\n\n', 'duunari', 'Jari', '1', '2023-07-13 14:35:40', '2023-07-30 13:40:32', 'Ilmastointi', NULL, ''),
('com0f1a1fe59d9fc', 8, '--Tila   L11-3>c', 'Kommentti jkkjkj', '5|5', 'jhjhbjhb', '', 'duunari', 'Jari', '1', '2023-07-30 14:44:42', '', 'Ei aihetta', '2023-08-05', ''),
('com1c1f1bb1cd531', 8, '--Tila   L11-1>a', 'Kommentti ', '999|1607', '12345689FS Ssdsd', 'https://teditori.gromi.fi/uploads/Theeta-järjestelmä.pdf\n\n\nhttps://teditori.gromi.fi/uploads/Kappa-järjestelmä.pdf\n\n\nhttps://teditori.gromi.fi/uploads/Myy-järjestelmä.pdf\n\n', 'Jyri', 'Marko', '2', '2023-07-11 15:54:43', '2023-07-11 15:54:48', NULL, NULL, ''),
('com3255cf2a39a59', 8, '--Tila L11-3 >c', 'Kommentti ', '5|5', '', '', 'duunari', 'Jari', '1', '2023-07-30 14:43:35', '', 'Ei aihetta', '', ''),
('com33215713bc12e', 8, '--Tila   L11-1>a', 'Kommentti ', '500|500', '', 'https://teditori.gromi.fi/uploads/Sigma-järjestelmä.pdf\n\n', 'duunari', 'Jari', '1', '2023-07-12 13:11:35', '2023-07-13 13:56:22', NULL, NULL, ''),
('com35964196ddb0e', 8, '--Tila   L11-3>a', 'Kommentti test', '5|5', 'werwerwerwer', '', 'duunari', 'Marko', '1', '2023-07-30 14:23:47', '2023-08-05', 'Sähkö', NULL, NULL),
('com41617b4cc1a2', 8, '--Tila    L11-1>a', 'Kommentti ', '5|5', '', 'https://teditori.gromi.fi/uploads/ТЗ Парсер Alibaba.pdf\n\n', 'duunari', 'Jari', '1', '2023-07-12 14:35:40', '2023-07-13 13:56:13', NULL, NULL, ''),
('com44bcbf1140358', 8, '--Tila   L11-3>c', 'Kommentti ', '5|5', '', '', 'duunari', 'Jari', '1', '2023-07-30 14:33:44', '', 'Ei aihetta', NULL, NULL),
('com47d3c854b3cf9', 8, '--Tila    L11-1>a', 'Kommentti ', '5|5', '', 'https://teditori.gromi.fi/uploads/ТЗ Парсер Alibaba.pdf\n\n\nhttps://teditori.gromi.fi/uploads/ТЗ Парсер Alibaba.pdf\n\n', 'duunari', 'Jari', '1', '2023-07-12 14:32:04', '2023-07-13 13:56:06', NULL, NULL, ''),
('com5edd3b2bab3a8', 8, '--Tila   L11-1', 'Kommentti ', '5|5', 'TEST', 'https://teditori.gromi.fi/Скриншот 10-07-2023 143741.jpg\n\n\nhttps://teditori.gromi.fi/Скриншот-10-07-2023 11_37_04.jpg\n\n', 'Jyri', 'Jari', '1', '2023-07-10 16:54:18', '', NULL, NULL, ''),
('com687be7b4f518e', 8, '--Tila   L11-3>c', 'Kommenttrxdctfgvbhi ', '5|5', 'trcyvgbhnj', '', 'duunari', 'Jari', '1', '2023-07-30 14:33:59', '', 'Sähkö', NULL, NULL),
('com8715c00552fc68', 8, '--Tila L11-3 >c', 'Kommentti 123', '5|5', '', '', 'duunari', 'Marko', '1', '2023-07-30 14:43:59', '', 'Sähkö', '2023-08-05', ''),
('com883e48217d814', 8, '--Tila   L11-1', 'Kommentti ', '500|500', 'TEST', '', 'Jyri', 'Jari', '1', '2023-07-10 16:54:04', '', NULL, NULL, ''),
('combe7b588b6a198', 8, '--Tila   L11-1>a', 'Kommentti ', '5|5', 'Testi sisältöä kommenttiin öäöäöä', '', 'Jyri', 'Jari', '1', '2023-07-10 18:15:49', '2023-07-11 15:36:26', NULL, NULL, ''),
('comcd87eb79f8494', 8, '--Tila    L11-1>a', 'Kommentti ', '5|5', 'hhhhhhhhhhhhhhhhh', 'https://teditori.gromi.fi/uploads/извините.jpg\n\n', 'duunari', 'Jari', '1', '2023-07-12 13:20:08', '2023-07-13 13:55:59', NULL, NULL, ''),
('comd00194a614cb3', 8, '--Tila   L11-1>a', 'Kommentti ', '500|500', 'dsssdsd', 'https://teditori.gromi.fi/uploads/Beta-järjestelmä.pdf\n\n\nhttps://teditori.gromi.fi/uploads/Beta Balcony-järjestelmä.pdf\n\n\nhttps://teditori.gromi.fi/uploads/Gamma-järjestelmä.pdf\n\n', 'duunari', 'Jari', '1', '2023-07-11 16:22:58', '2023-07-13 13:55:52', NULL, NULL, ''),
('comf9dd498e672c6', 8, '--Tila L11-3 >c', 'Kommentti kmkmkm', '5|5', 'esdrftgyhujikmj', '', 'duunari', 'Jari', '1', '2023-07-30 14:32:56', '2023-08-05', 'Sähkö', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
