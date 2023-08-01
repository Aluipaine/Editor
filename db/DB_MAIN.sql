-- phpMyAdmin SQL Dump
-- version 5.2.1deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 01, 2023 at 12:55 PM
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
-- Table structure for table `addedusers`
--

CREATE TABLE `addedusers` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `added_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addedusers`
--

INSERT INTO `addedusers` (`id`, `project_id`, `user_id`, `added_by`) VALUES
(1, 8, '9', 'Marko');

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
('com1940cf12e1d31', 8, '--Tila   L11-3>c', 'Kommentti 098', '5|5', 'An another test answer to a comment', '', 'duunari', 'Jari', '1', '2023-07-30 23:36:09', '', 'Ei aihetta', '2024-09-19', 'com8715c00552fc68'),
('com1c1f1bb1cd531', 8, '--Tila   L11-1>a', 'Kommentti ', '999|1607', '12345689FS Ssdsd', 'https://teditori.gromi.fi/uploads/Theeta-järjestelmä.pdf\n\n\nhttps://teditori.gromi.fi/uploads/Kappa-järjestelmä.pdf\n\n\nhttps://teditori.gromi.fi/uploads/Myy-järjestelmä.pdf\n\n', 'Jyri', 'Marko', '2', '2023-07-11 15:54:43', '2023-07-11 15:54:48', NULL, NULL, ''),
('com2e67ed1265d588', 8, '--Tila    L11-3>c', 'Kommentti testo123 answer', '5|5', 'wfwefwef', '', 'duunari', 'Jari', '1', '2023-07-31 00:27:37', '', 'Levyssä ongelmaa', '', 'com3255cf2a39a59'),
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
('com9751f9f3470f28', 8, '--Tila    L11-3>c', 'Kommentti answerri', '5|5', '', '', 'duunari', 'Jari', '1', '2023-07-30 21:45:38', '', 'Sähkö', '', 'com8715c00552fc68'),
('combe7b588b6a198', 8, '--Tila   L11-1>a', 'Kommentti ', '5|5', 'Testi sisältöä kommenttiin öäöäöä', '', 'Jyri', 'Jari', '1', '2023-07-10 18:15:49', '2023-07-11 15:36:26', NULL, NULL, ''),
('comcd87eb79f8494', 8, '--Tila    L11-1>a', 'Kommentti ', '5|5', 'hhhhhhhhhhhhhhhhh', 'https://teditori.gromi.fi/uploads/извините.jpg\n\n', 'duunari', 'Jari', '1', '2023-07-12 13:20:08', '2023-07-13 13:55:59', NULL, NULL, ''),
('comd00194a614cb3', 8, '--Tila   L11-1>a', 'Kommentti ', '500|500', 'dsssdsd', 'https://teditori.gromi.fi/uploads/Beta-järjestelmä.pdf\n\n\nhttps://teditori.gromi.fi/uploads/Beta Balcony-järjestelmä.pdf\n\n\nhttps://teditori.gromi.fi/uploads/Gamma-järjestelmä.pdf\n\n', 'duunari', 'Jari', '1', '2023-07-11 16:22:58', '2023-07-13 13:55:52', NULL, NULL, ''),
('come0ae42aa8c847', 8, '--Tila    L11-3>c', 'Kommentti testo', '5|5', '', '', 'duunari', 'Jari', '1', '2023-07-31 00:26:47', '', 'Ilmastointi', '', 'com3255cf2a39a59'),
('comf9dd498e672c6', 8, '--Tila L11-3 >c', 'Kommentti kmkmkm', '5|5', 'esdrftgyhujikmj', '', 'duunari', 'Jari', '1', '2023-07-30 14:32:56', '2023-08-05', 'Sähkö', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pohjat`
--

CREATE TABLE `pohjat` (
  `id` int(11) NOT NULL,
  `a` text DEFAULT NULL,
  `b` text DEFAULT NULL,
  `c` text DEFAULT NULL,
  `d` text DEFAULT NULL,
  `k` text DEFAULT NULL,
  `l` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pohjat`
--

INSERT INTO `pohjat` (`id`, `a`, `b`, `c`, `d`, `k`, `l`) VALUES
(1, '13,undone,1|1,2200|4000,,,,,', '13,undone,1|1,2200|2200,,,,,', '13,undone,1|1,2200|4000,,,,,', '13,undone,1|1,2200|2200,,,,,', '13,undone,1|1,2200|4000,,,,,', '13,undone,1|1,2200|4000,,,,,'),
(8, '8,measured,1|1,2200|6000,,,,,', '   8,undone,1|1,2200|2200,,,,,', '8,undone,1|1,2200|4000,,,,,', '   8,measured,1|1,2200|2200,,,,,', '   13,undone,1|1,2200|4000,,,,,', '   13,undone,1|1,2200|4000,,,,,'),
(9, '   8,measured,1|1,2200|6000,,,,,', '  8,undone,1|1,2200|2200,,,,,', '8,undone,1|1,1670|4000,,,,,', '  8,measured,1|1,2200|2200,,,,,', '  13,undone,1|1,2200|4000,,,,,', '  13,undone,1|1,2200|4000,,,,,');

-- --------------------------------------------------------

--
-- Table structure for table `projectmeta`
--

CREATE TABLE `projectmeta` (
  `meta_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `meta_key` varchar(255) NOT NULL,
  `meta_value` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `projectmeta`
--

INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES
(3772, 100, 's_settings', '[[\"Classic vaaka\",\"\",\"\",\"Alpha vaaka\",\"Alpha pysty\",\"Delta\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],[\"R1\",\"Pistorasia\",\"30\",\"\",\"\",\"\",\"\"],[\"R2\",\"Valorasia\",\"50\",\"\",\"\",\"\",\"\"],[\"R3\",\"Sähkörasia\",\"30\",\"\",\"\",\"\",\"\"],[\"R4\",\"Viemäri 32\",\"20\",\"\",\"\",\"\",\"\"],[\"R5\",\"Viemäri50\",\"60\",\"\",\"\",\"\",\"\"],[\"R6\",\"Viemäri 75\",\"45\",\"\",\"\",\"\",\"\",\"\"],[\"R7\",\"Viemäri 100\",\"55\",\"\",\"\",\"\",\"\",\"\"],[\"R8\",\"IV100\",\"55\",\"\",\"\",\"\",\"\",\"\"],[\"R9\",\"IV 160\",\"\",\"\",\"\",\"\",\"\",\"\"],[\"R10\",\"IV200\",\"85\",\"\",\"\",\"\",\"\",\"\"],[\"R11\",\"IV 250\",\"105\",\"\",\"\",\"\",\"\",\"\"],[\"R12\",\"IV315\",\"130\",\"\",\"\",\"\",\"\",\"\"],[\"R13\",\"Neliö 100x100\",\"165\",\"\",\"\",\"\",\"\",\"\"],[\"R14\",\"Neliö 100x100\",\"\",\"\",\"\",\"\",\"\",\"\"],[\"R15\",\"Neliö 500x500\",\"\",\"\",\"\",\"\",\"\",\"\"]]'),
(3773, 100, 's_materials', '[\"{Exterior Blue,Exterior Blue,B_s2_d0,1250,3000,8,Laminate,#45769d}\"]'),
(4474, 100, 'aukko_mallit', '[\"-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-\"]'),
(4475, 100, 'aukko_mallityypit', '[\"A\"]'),
(8860, 8, 'pr_id', '8'),
(8861, 8, 'pr_name', ' L11 1krs'),
(8862, 8, 'pr_type', ''),
(8863, 8, 's_settings', ''),
(8864, 8, 's_materials', ''),
(8865, 8, 'prc_1', ' '),
(8866, 8, 'prc_1_puh', ' '),
(8867, 8, 'prc_1_email', ' '),
(8868, 8, 'prc_2_puh', ' '),
(8869, 8, 'prc_2_email', ' '),
(8870, 8, 'prc_3', ' '),
(8871, 8, 'prc_3_puh', ' '),
(8872, 8, 'prc_3_email', ' '),
(8873, 8, 'prc_4', ' '),
(8874, 8, 'prc_4_puh', ' '),
(8875, 8, 'prc_4_email', ' '),
(8876, 8, 'prc_5', ' '),
(8877, 8, 'prc_5_puh', ' '),
(8878, 8, 'prc_5_email', ' '),
(8879, 8, 'prc_6', ' '),
(8880, 8, 'prc_6_puh', ' '),
(8881, 8, 'prc_6_email', ' '),
(8882, 8, 'prc_7', ' '),
(8883, 8, 'prc_7_puh', ' '),
(8884, 8, 'prc_7_email', ' '),
(8885, 8, 'prc_8', ' '),
(8886, 8, 'prc_8_puh', ' '),
(8887, 8, 'prc_8_email', ' '),
(8888, 8, 'prc_9', ' '),
(8889, 8, 'prc_9_puh', ' '),
(8890, 8, 'prc_9_email', ' '),
(8891, 8, 'prc_10', ' '),
(8892, 8, 'prc_10_puh', ' '),
(8893, 8, 'prc_10_email', ' '),
(8894, 8, 'prc_11', ' '),
(8895, 8, 'prc_11_puh', ' '),
(8896, 8, 'prc_11_email', ' '),
(8897, 8, 'a_pr_krs', ''),
(8898, 8, 'a_pr_rap', ''),
(8899, 8, 'b_pr_krs', ''),
(8900, 8, 'b_pr_rap', ''),
(8901, 8, 'c_pr_krs', ''),
(8902, 8, 'c_pr_rap', ''),
(8903, 8, 'd_pr_krs', ''),
(8904, 8, 'd_pr_rap', ''),
(8905, 8, 'e_pr_krs', ''),
(8906, 8, 'e_pr_rap', ''),
(8907, 8, 'f_pr_krs', ''),
(8908, 8, 'f_pr_rap', ''),
(8909, 8, 'pr_room_in_rap', ''),
(8910, 8, 'a_rooms', '[{\"name\": \" L11-1\",\"positionY\":  9,\"positionX\":  1,\"a_room\": \" 13~undone~1|1~2200|4000~~~~~\",\"b_room\": \" 13~undone~1|1~2200|2200~~~~~\",\"c_room\": \" 13~undone~1|1~2200|4000~~~~~\",\"d_room\": \" 13~undone~1|1~2200|2200~~~~~\",\"k_room\": \" 13~undone~1|1~2200|4000~~~~~\",\"l_room\": \" 13~undone~1|1~2200|4000~~~~~\"},{\"name\": \" L11-2\",\"positionY\":  9,\"positionX\":  2,\"a_room\": \"  8~undone~1|1~2200|4000~mittapiste #1|1555|2287|1|mpcdc9f6e30333c|a__~ovi # 1|5|500|1|aukkobc792060f8199|2095|1000|aukko ovi|||__ikkuna # 1|1000|2500|1|aukko68cba39e5bf14|1100|1000|aukko ikkuna|||__ikkuna # 2|100|2400|2|aukkofcd03bf01a1cc|800|900|ikkuna aukko|||__~l�pivienti #1|1555|2287|1|lv2389095d9de4e|125|test comment|jyri|jari__~~\",\"b_room\": \" 13~undone~1|1~2200|2200~~~~~\",\"c_room\": \" 13~undone~1|1~2200|4000~~~~~\",\"d_room\": \" 13~undone~1|1~2200|2200~~~~~\",\"k_room\": \" 13~undone~1|1~2200|4000~~~~~\",\"l_room\": \" 13~undone~1|1~2200|4000~~~~~\"},{\"name\": \" L11-3\",\"positionY\":  9,\"positionX\":  3,\"a_room\": \" 8 ~undone~1|1~3200|4000~~~~~\",\"b_room\": \"  8~undone~1|1~2200|2200~~~~~\",\"c_room\": \"8 ~undone~1|1~3200|4000~~~~~\",\"d_room\": \"  8~measured~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \" 8~undone~1|1~2200|4000~~~~~\"},{\"name\": \" L11-4\",\"positionY\":  9,\"positionX\":  4,\"a_room\": \"  8~undone~1|1~2200|4000~~~~~\",\"b_room\": \" 13~undone~1|1~2200|2200~~~~~\",\"c_room\": \" 13~undone~1|1~2200|4000~~~~~\",\"d_room\": \" 13~undone~1|1~2200|2200~~~~~\",\"k_room\": \" 13~undone~1|1~2200|4000~~~~~\",\"l_room\": \" 13~undone~1|1~2200|4000~~~~~\"},{\"name\": \" L11-5\",\"positionY\":  9,\"positionX\":  5,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \" L11-6\",\"positionY\":  9,\"positionX\":  6,\"a_room\": \" 8~measured~1|1~2200|6000~~~~~\",\"b_room\": \"  8~undone~1|1~2200|2200~~~~~\",\"c_room\": \" 8~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  8~measured~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \" 8~undone~1|1~2200|4000~~~~~\"},{\"name\": \" L11-7\",\"positionY\":  9,\"positionX\":  7,\"a_room\": \" 13~undone~1|1~2200|4000~~~~~\",\"b_room\": \" 13~undone~1|1~2200|2200~~~~~\",\"c_room\": \" 13~undone~1|1~2200|4000~~~~~\",\"d_room\": \" 13~undone~1|1~2200|2200~~~~~\",\"k_room\": \" 13~undone~1|1~2200|4000~~~~~\",\"l_room\": \" 13~undone~1|1~2200|4000~~~~~\"},{\"name\": \" L11-8\",\"positionY\":  9,\"positionX\":  8,\"a_room\": \"  8~undone~1|1~2200|5000~mittapiste #1|500|522|1|mpdddd3ddcb34fe|a__~ovi # 1|5|1400|1|aukkobf701dd3cf3ba|2095|1100|aukko ovi|||__~~~\",\"b_room\": \"  8~measured~1|1~2200|2200~~~~~\",\"c_room\": \"  8~measured~1|1~2200|4000~~~~~\",\"d_room\": \" 13~undone~2200|2200~2200|2200~~~~\",\"k_room\": \" 13~undone~2200|5000~2200|4000~~~~\",\"l_room\": \" 13~undone~2200|5000~2200|4000~~~~}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}\"},]'),
(8911, 8, 'b_rooms', '[]'),
(8912, 8, 'c_rooms', '[]'),
(8913, 8, 'd_rooms', ''),
(8914, 8, 'e_rooms', ''),
(8915, 8, 'f_rooms', ''),
(8916, 8, 'g_rooms', ''),
(8917, 8, 'h_rooms', ''),
(8918, 8, 'a_rooms_nowork', ''),
(8919, 8, 'b_rooms_nowork', ''),
(8920, 8, 'c_rooms_nowork', ''),
(8921, 8, 'd_rooms_nowork', ''),
(8922, 8, 'e_rooms_nowork', ''),
(8923, 8, 'f_rooms_nowork', ''),
(8924, 8, 'g_rooms_nowork', ''),
(8925, 8, 'h_rooms_nowork', ''),
(8926, 8, 'pr_room_name', 'on'),
(8927, 8, 'pr_rap_name', ''),
(8928, 8, 'pr_s1_name', '\r\n'),
(8929, 8, 'pr_s1_order', '1'),
(8930, 8, 'pr_s1_desc', '\r\n'),
(8931, 8, 'pr_s1_h', ''),
(8932, 8, 'pr_s1_w', ''),
(8933, 8, 'pr_s2_name', '\r\n'),
(8934, 8, 'pr_s2_order', '2'),
(8935, 8, 'pr_s2_desc', '\r\n'),
(8936, 8, 'pr_s2_h', ''),
(8937, 8, 'pr_s2_w', ''),
(8938, 8, 'pr_s3_name', '\r\n'),
(8939, 8, 'pr_s3_order', '3'),
(8940, 8, 'pr_s3_desc', '\r\n'),
(8941, 8, 'pr_s3_h', ''),
(8942, 8, 'pr_s3_w', ''),
(8943, 8, 'pr_s4_name', '\r\n'),
(8944, 8, 'pr_s4_order', '4'),
(8945, 8, 'pr_s4_desc', '\r\n'),
(8946, 8, 'pr_s4_h', ''),
(8947, 8, 'pr_s4_w', ''),
(8948, 8, 'pr_s5_name', 'room_one_roof'),
(8949, 8, 'pr_s5_order', '5'),
(8950, 8, 'pr_s5_desc', 'room_one_roof_desc'),
(8951, 8, 'pr_s5_h', 'room_one_roof_h'),
(8952, 8, 'pr_s5_w', 'room_one_roof_w'),
(8953, 8, 'pr_s6_name', 'room_one_floor'),
(8954, 8, 'pr_s6_order', '6'),
(8955, 8, 'pr_s6_desc', 'room_one_floor_desc'),
(8956, 8, 'pr_s6_h', 'room_one_floor_h'),
(8957, 8, 'pr_s6_w', 'room_one_floor_w'),
(8958, 8, 'm_materials', ''),
(8959, 8, 'm_name', ''),
(8960, 8, 'm_one', ''),
(8961, 8, 'm_two', ''),
(8962, 8, 'm_three', ''),
(8963, 8, 'm_four', ''),
(8964, 8, 'm_five', ''),
(8965, 8, 's_ladonta_levytyssuunta', ''),
(8966, 8, 's_saumoitus', ''),
(8967, 8, 's_ladontasystem', ''),
(8968, 8, 's_materials', ''),
(8969, 8, 's_rangan_suunta', ''),
(8970, 8, 's_kiinnikkeiden_linjojen_alkupaikka', ''),
(8971, 8, 's_kiinnikelinjan_etaisyydet', ''),
(8972, 8, 's_levytys_levytyksen_katkeaminen', ''),
(8973, 8, 's_levytys_pituus_y', ''),
(8974, 8, 's_levytys_pituus_x', ''),
(8975, 8, 's_levytyksen_suunta', ''),
(8976, 8, 's_lapiviennit', ''),
(8977, 8, 's_levyt_standard', ''),
(8978, 8, 's_jarjestelma', ''),
(8979, 8, 's_olosuhteet', ''),
(8980, 8, 's_olosuhde', ''),
(8981, 8, 's_aukko', ''),
(8982, 8, 's_reika_', ''),
(8983, 8, 's_levy_', ''),
(8984, 8, 's_rankatyypit', ''),
(8985, 8, 's_tyypin_pituudet', ''),
(8986, 8, 's_pystyasennus', ''),
(8987, 8, 's_listat', ''),
(8988, 8, 's_rankojen_sijoittelu', ''),
(8989, 8, 's_users', ''),
(8990, 8, 'pr_step', ''),
(8991, 8, 'pr_recl_msg', ''),
(8992, 8, 'pr_recl_from', ''),
(8993, 8, 'pr_recl_to', ''),
(8994, 8, 'pr_recl_attention', ''),
(8995, 8, 'pr_1_origo', ''),
(8996, 8, 'pr_1_gooddist_w', ''),
(8997, 8, 'pr_1_gooddist_h', ''),
(8998, 8, 'pr_1_1_name', ''),
(8999, 8, 'pr_1_1_dist_x', ''),
(9000, 8, 'pr_1_1_dist_y', ''),
(9001, 8, 'pr_1_1_comments', ''),
(9002, 8, 'pr_2_1_name', ''),
(9003, 8, 'pr_2_1_dist_x', ''),
(9004, 8, 'pr_2_1_dist_y', ''),
(9005, 8, 'pr_2_1_comments', ''),
(9006, 8, 'pr_2_1_h', ''),
(9007, 8, 'pr_2_1_w', ''),
(9008, 8, 'pr_3_1_name', ''),
(9009, 8, 'pr_3_1_dist_x', ''),
(9010, 8, 'pr_3_1_dist_y', ''),
(9011, 8, 'pr_3_1_comments', ''),
(9012, 8, 'pr_3_1_r', ''),
(9013, 8, 'pr_4_1_name', ''),
(9014, 8, 'pr_4_1_num', ''),
(9015, 8, 'pr_4_1_type', ''),
(9016, 8, 'pr_4_1_x', ''),
(9017, 8, 'pr_4_1_y', ''),
(9018, 8, 'pr_4_1_comments', ''),
(9019, 8, 'step', ''),
(9020, 8, 'wall', ''),
(9021, 8, 'room', ''),
(9022, 8, 'settings', ''),
(9023, 8, 'mittapisteet', ''),
(9024, 8, 'aukot', ''),
(9025, 8, 'reijat', ''),
(9026, 8, 'saumat', ''),
(9027, 8, 'levyt', ''),
(9028, 8, 'rangat', ''),
(9029, 8, 'listat', ''),
(9030, 8, 'kokonaisalue', ''),
(9031, 8, 'levytettava_alue', ''),
(9032, 8, 'poisjaava_alue', ''),
(9033, 8, 'keskusmittapiste_cord', ''),
(9034, 8, 'reklamaatiot', ''),
(13545, 9, 'pr_id', '9'),
(13546, 9, 'pr_name', ' test'),
(13547, 9, 'pr_type', ''),
(13548, 9, 's_settings', ''),
(13549, 9, 's_materials', ''),
(13550, 9, 'prc_1', ''),
(13551, 9, 'prc_1_role', ''),
(13552, 9, 'prc_1_permission', ''),
(13553, 9, 'prc_1_hiding', ''),
(13554, 9, 'prc_1_puh', ''),
(13555, 9, 'prc_1_email', ''),
(13556, 9, 'prc_2_puh', ''),
(13557, 9, 'prc_2_email', ''),
(13558, 9, 'prc_3', ''),
(13559, 9, 'prc_3_role', ''),
(13560, 9, 'prc_3_permission', ''),
(13561, 9, 'prc_3_hiding', ''),
(13562, 9, 'prc_3_puh', ''),
(13563, 9, 'prc_3_email', ''),
(13564, 9, 'prc_4', ''),
(13565, 9, 'prc_4_role', ''),
(13566, 9, 'prc_4_permission', ''),
(13567, 9, 'prc_4_hiding', ''),
(13568, 9, 'prc_4_puh', ''),
(13569, 9, 'prc_4_email', ''),
(13570, 9, 'prc_5', ''),
(13571, 9, 'prc_5_role', ''),
(13572, 9, 'prc_5_permission', ''),
(13573, 9, 'prc_5_hiding', ''),
(13574, 9, 'prc_5_puh', ''),
(13575, 9, 'prc_5_email', ''),
(13576, 9, 'prc_6', ''),
(13577, 9, 'prc_6_role', ''),
(13578, 9, 'prc_6_permission', ''),
(13579, 9, 'prc_6_hiding', ''),
(13580, 9, 'prc_6_puh', ''),
(13581, 9, 'prc_6_email', ''),
(13582, 9, 'prc_7', ''),
(13583, 9, 'prc_7_role', ''),
(13584, 9, 'prc_7_permission', ''),
(13585, 9, 'prc_7_hiding', ''),
(13586, 9, 'prc_7_puh', ''),
(13587, 9, 'prc_7_email', ''),
(13588, 9, 'prc_8', ''),
(13589, 9, 'prc_8_role', ''),
(13590, 9, 'prc_8_permission', ''),
(13591, 9, 'prc_8_hiding', ''),
(13592, 9, 'prc_8_puh', ''),
(13593, 9, 'prc_8_email', ''),
(13594, 9, 'prc_9', ''),
(13595, 9, 'prc_9_role', ''),
(13596, 9, 'prc_9_permission', ''),
(13597, 9, 'prc_9_hiding', ''),
(13598, 9, 'prc_9_puh', ''),
(13599, 9, 'prc_9_email', ''),
(13600, 9, 'prc_10', ''),
(13601, 9, 'prc_10_role', ''),
(13602, 9, 'prc_10_permission', ''),
(13603, 9, 'prc_10_hiding', ''),
(13604, 9, 'prc_10_puh', ''),
(13605, 9, 'prc_10_email', ''),
(13606, 9, 'prc_11', ''),
(13607, 9, 'prc_11_role', ''),
(13608, 9, 'prc_11_permission', ''),
(13609, 9, 'prc_11_hiding', ''),
(13610, 9, 'prc_11_puh', ''),
(13611, 9, 'prc_11_email', ''),
(13612, 9, 'a_pr_krs', ''),
(13613, 9, 'a_pr_rap', ''),
(13614, 9, 'b_pr_krs', ''),
(13615, 9, 'b_pr_rap', ''),
(13616, 9, 'c_pr_krs', ''),
(13617, 9, 'c_pr_rap', ''),
(13618, 9, 'd_pr_krs', ''),
(13619, 9, 'd_pr_rap', ''),
(13620, 9, 'e_pr_krs', ''),
(13621, 9, 'e_pr_rap', ''),
(13622, 9, 'f_pr_krs', ''),
(13623, 9, 'f_pr_rap', ''),
(13624, 9, 'pr_room_in_rap', ''),
(13625, 9, 'a_rooms', '[{\"name\": \"ARAK-1\",\"positionY\": 9,\"positionX\": 1,\"a_room\": \"9~undone~1|1~2200|4000~~~~~\",\"b_room\": \"13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"13~undone~1|1~2200|4000~~~~~\"},]'),
(13626, 9, 'b_rooms', '[]'),
(13627, 9, 'c_rooms', '[]'),
(13628, 9, 'd_rooms', ''),
(13629, 9, 'e_rooms', ''),
(13630, 9, 'f_rooms', ''),
(13631, 9, 'g_rooms', ''),
(13632, 9, 'h_rooms', ''),
(13633, 9, 'a_rooms_nowork', ''),
(13634, 9, 'b_rooms_nowork', ''),
(13635, 9, 'c_rooms_nowork', ''),
(13636, 9, 'd_rooms_nowork', ''),
(13637, 9, 'e_rooms_nowork', ''),
(13638, 9, 'f_rooms_nowork', ''),
(13639, 9, 'g_rooms_nowork', ''),
(13640, 9, 'h_rooms_nowork', ''),
(13641, 9, 'pr_room_name', 'on'),
(13642, 9, 'pr_rap_name', ''),
(13643, 9, 'pr_s1_name', '\r\n'),
(13644, 9, 'pr_s1_order', '1'),
(13645, 9, 'pr_s1_desc', '\r\n'),
(13646, 9, 'pr_s1_h', ''),
(13647, 9, 'pr_s1_w', ''),
(13648, 9, 'pr_s2_name', '\r\n'),
(13649, 9, 'pr_s2_order', '2'),
(13650, 9, 'pr_s2_desc', '\r\n'),
(13651, 9, 'pr_s2_h', ''),
(13652, 9, 'pr_s2_w', ''),
(13653, 9, 'pr_s3_name', '\r\n'),
(13654, 9, 'pr_s3_order', '3'),
(13655, 9, 'pr_s3_desc', '\r\n'),
(13656, 9, 'pr_s3_h', ''),
(13657, 9, 'pr_s3_w', ''),
(13658, 9, 'pr_s4_name', '\r\n'),
(13659, 9, 'pr_s4_order', '4'),
(13660, 9, 'pr_s4_desc', '\r\n'),
(13661, 9, 'pr_s4_h', ''),
(13662, 9, 'pr_s4_w', ''),
(13663, 9, 'pr_s5_name', 'room_one_roof'),
(13664, 9, 'pr_s5_order', '5'),
(13665, 9, 'pr_s5_desc', 'room_one_roof_desc'),
(13666, 9, 'pr_s5_h', 'room_one_roof_h'),
(13667, 9, 'pr_s5_w', 'room_one_roof_w'),
(13668, 9, 'pr_s6_name', 'room_one_floor'),
(13669, 9, 'pr_s6_order', '6'),
(13670, 9, 'pr_s6_desc', 'room_one_floor_desc'),
(13671, 9, 'pr_s6_h', 'room_one_floor_h'),
(13672, 9, 'pr_s6_w', 'room_one_floor_w'),
(13673, 9, 'm_materials', ''),
(13674, 9, 'm_name', ''),
(13675, 9, 'm_one', ''),
(13676, 9, 'm_two', ''),
(13677, 9, 'm_three', ''),
(13678, 9, 'm_four', ''),
(13679, 9, 'm_five', ''),
(13680, 9, 's_ladonta_levytyssuunta', ''),
(13681, 9, 's_saumoitus', ''),
(13682, 9, 's_ladontasystem', ''),
(13683, 9, 's_materials', ''),
(13684, 9, 's_rangan_suunta', ''),
(13685, 9, 's_kiinnikkeiden_linjojen_alkupaikka', ''),
(13686, 9, 's_kiinnikelinjan_etaisyydet', ''),
(13687, 9, 's_levytys_levytyksen_katkeaminen', ''),
(13688, 9, 's_levytys_pituus_y', ''),
(13689, 9, 's_levytys_pituus_x', ''),
(13690, 9, 's_levytyksen_suunta', ''),
(13691, 9, 's_lapiviennit', ''),
(13692, 9, 's_levyt_standard', ''),
(13693, 9, 's_jarjestelma', ''),
(13694, 9, 's_olosuhteet', ''),
(13695, 9, 's_olosuhde', ''),
(13696, 9, 's_aukko', ''),
(13697, 9, 's_reika_', ''),
(13698, 9, 's_levy_', ''),
(13699, 9, 's_rankatyypit', ''),
(13700, 9, 's_tyypin_pituudet', ''),
(13701, 9, 's_pystyasennus', ''),
(13702, 9, 's_listat', ''),
(13703, 9, 's_rankojen_sijoittelu', ''),
(13704, 9, 's_users', ''),
(13705, 9, 'pr_step', ''),
(13706, 9, 'pr_recl_msg', ''),
(13707, 9, 'pr_recl_from', ''),
(13708, 9, 'pr_recl_to', ''),
(13709, 9, 'pr_recl_attention', ''),
(13710, 9, 'pr_1_origo', ''),
(13711, 9, 'pr_1_gooddist_w', ''),
(13712, 9, 'pr_1_gooddist_h', ''),
(13713, 9, 'pr_1_1_name', ''),
(13714, 9, 'pr_1_1_dist_x', ''),
(13715, 9, 'pr_1_1_dist_y', ''),
(13716, 9, 'pr_1_1_comments', ''),
(13717, 9, 'pr_2_1_name', ''),
(13718, 9, 'pr_2_1_dist_x', ''),
(13719, 9, 'pr_2_1_dist_y', ''),
(13720, 9, 'pr_2_1_comments', ''),
(13721, 9, 'pr_2_1_h', ''),
(13722, 9, 'pr_2_1_w', ''),
(13723, 9, 'pr_3_1_name', ''),
(13724, 9, 'pr_3_1_dist_x', ''),
(13725, 9, 'pr_3_1_dist_y', ''),
(13726, 9, 'pr_3_1_comments', ''),
(13727, 9, 'pr_3_1_r', ''),
(13728, 9, 'pr_4_1_name', ''),
(13729, 9, 'pr_4_1_num', ''),
(13730, 9, 'pr_4_1_type', ''),
(13731, 9, 'pr_4_1_x', ''),
(13732, 9, 'pr_4_1_y', ''),
(13733, 9, 'pr_4_1_comments', ''),
(13734, 9, 'step', ''),
(13735, 9, 'wall', ''),
(13736, 9, 'room', ''),
(13737, 9, 'settings', ''),
(13738, 9, 'mittapisteet', ''),
(13739, 9, 'aukot', ''),
(13740, 9, 'reijat', ''),
(13741, 9, 'saumat', ''),
(13742, 9, 'levyt', ''),
(13743, 9, 'rangat', ''),
(13744, 9, 'listat', ''),
(13745, 9, 'kokonaisalue', ''),
(13746, 9, 'levytettava_alue', ''),
(13747, 9, 'poisjaava_alue', ''),
(13748, 9, 'keskusmittapiste_cord', ''),
(13749, 9, 'reklamaatiot', ''),
(13750, 10, 'pr_id', '10'),
(13751, 10, 'pr_name', ' test'),
(13752, 10, 'pr_type', ''),
(13753, 10, 's_settings', ''),
(13754, 10, 's_materials', ''),
(13755, 10, 'prc_1', ''),
(13756, 10, 'prc_1_role', ''),
(13757, 10, 'prc_1_permission', ''),
(13758, 10, 'prc_1_hiding', ''),
(13759, 10, 'prc_1_puh', ''),
(13760, 10, 'prc_1_email', ''),
(13761, 10, 'prc_2_puh', ''),
(13762, 10, 'prc_2_email', ''),
(13763, 10, 'prc_3', ''),
(13764, 10, 'prc_3_role', ''),
(13765, 10, 'prc_3_permission', ''),
(13766, 10, 'prc_3_hiding', ''),
(13767, 10, 'prc_3_puh', ''),
(13768, 10, 'prc_3_email', ''),
(13769, 10, 'prc_4', ''),
(13770, 10, 'prc_4_role', ''),
(13771, 10, 'prc_4_permission', ''),
(13772, 10, 'prc_4_hiding', ''),
(13773, 10, 'prc_4_puh', ''),
(13774, 10, 'prc_4_email', ''),
(13775, 10, 'prc_5', ''),
(13776, 10, 'prc_5_role', ''),
(13777, 10, 'prc_5_permission', ''),
(13778, 10, 'prc_5_hiding', ''),
(13779, 10, 'prc_5_puh', ''),
(13780, 10, 'prc_5_email', ''),
(13781, 10, 'prc_6', ''),
(13782, 10, 'prc_6_role', ''),
(13783, 10, 'prc_6_permission', ''),
(13784, 10, 'prc_6_hiding', ''),
(13785, 10, 'prc_6_puh', ''),
(13786, 10, 'prc_6_email', ''),
(13787, 10, 'prc_7', ''),
(13788, 10, 'prc_7_role', ''),
(13789, 10, 'prc_7_permission', ''),
(13790, 10, 'prc_7_hiding', ''),
(13791, 10, 'prc_7_puh', ''),
(13792, 10, 'prc_7_email', ''),
(13793, 10, 'prc_8', ''),
(13794, 10, 'prc_8_role', ''),
(13795, 10, 'prc_8_permission', ''),
(13796, 10, 'prc_8_hiding', ''),
(13797, 10, 'prc_8_puh', ''),
(13798, 10, 'prc_8_email', ''),
(13799, 10, 'prc_9', ''),
(13800, 10, 'prc_9_role', ''),
(13801, 10, 'prc_9_permission', ''),
(13802, 10, 'prc_9_hiding', ''),
(13803, 10, 'prc_9_puh', ''),
(13804, 10, 'prc_9_email', ''),
(13805, 10, 'prc_10', ''),
(13806, 10, 'prc_10_role', ''),
(13807, 10, 'prc_10_permission', ''),
(13808, 10, 'prc_10_hiding', ''),
(13809, 10, 'prc_10_puh', ''),
(13810, 10, 'prc_10_email', ''),
(13811, 10, 'prc_11', ''),
(13812, 10, 'prc_11_role', ''),
(13813, 10, 'prc_11_permission', ''),
(13814, 10, 'prc_11_hiding', ''),
(13815, 10, 'prc_11_puh', ''),
(13816, 10, 'prc_11_email', ''),
(13817, 10, 'a_pr_krs', ''),
(13818, 10, 'a_pr_rap', ''),
(13819, 10, 'b_pr_krs', ''),
(13820, 10, 'b_pr_rap', ''),
(13821, 10, 'c_pr_krs', ''),
(13822, 10, 'c_pr_rap', ''),
(13823, 10, 'd_pr_krs', ''),
(13824, 10, 'd_pr_rap', ''),
(13825, 10, 'e_pr_krs', ''),
(13826, 10, 'e_pr_rap', ''),
(13827, 10, 'f_pr_krs', ''),
(13828, 10, 'f_pr_rap', ''),
(13829, 10, 'pr_room_in_rap', ''),
(13830, 10, 'a_rooms', '[{\"name\":\"ARAK-1\",\"positionX\":9,\"positionY\":1,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"}]'),
(13831, 10, 'b_rooms', ''),
(13832, 10, 'c_rooms', ''),
(13833, 10, 'd_rooms', ''),
(13834, 10, 'e_rooms', ''),
(13835, 10, 'f_rooms', ''),
(13836, 10, 'g_rooms', ''),
(13837, 10, 'h_rooms', ''),
(13838, 10, 'a_rooms_nowork', ''),
(13839, 10, 'b_rooms_nowork', ''),
(13840, 10, 'c_rooms_nowork', ''),
(13841, 10, 'd_rooms_nowork', ''),
(13842, 10, 'e_rooms_nowork', ''),
(13843, 10, 'f_rooms_nowork', ''),
(13844, 10, 'g_rooms_nowork', ''),
(13845, 10, 'h_rooms_nowork', ''),
(13846, 10, 'pr_room_name', 'on'),
(13847, 10, 'pr_rap_name', ''),
(13848, 10, 'pr_s1_name', '\r\n'),
(13849, 10, 'pr_s1_order', '1'),
(13850, 10, 'pr_s1_desc', '\r\n'),
(13851, 10, 'pr_s1_h', ''),
(13852, 10, 'pr_s1_w', ''),
(13853, 10, 'pr_s2_name', '\r\n'),
(13854, 10, 'pr_s2_order', '2'),
(13855, 10, 'pr_s2_desc', '\r\n'),
(13856, 10, 'pr_s2_h', ''),
(13857, 10, 'pr_s2_w', ''),
(13858, 10, 'pr_s3_name', '\r\n'),
(13859, 10, 'pr_s3_order', '3'),
(13860, 10, 'pr_s3_desc', '\r\n'),
(13861, 10, 'pr_s3_h', ''),
(13862, 10, 'pr_s3_w', ''),
(13863, 10, 'pr_s4_name', '\r\n'),
(13864, 10, 'pr_s4_order', '4'),
(13865, 10, 'pr_s4_desc', '\r\n'),
(13866, 10, 'pr_s4_h', ''),
(13867, 10, 'pr_s4_w', ''),
(13868, 10, 'pr_s5_name', 'room_one_roof'),
(13869, 10, 'pr_s5_order', '5'),
(13870, 10, 'pr_s5_desc', 'room_one_roof_desc'),
(13871, 10, 'pr_s5_h', 'room_one_roof_h'),
(13872, 10, 'pr_s5_w', 'room_one_roof_w'),
(13873, 10, 'pr_s6_name', 'room_one_floor'),
(13874, 10, 'pr_s6_order', '6'),
(13875, 10, 'pr_s6_desc', 'room_one_floor_desc'),
(13876, 10, 'pr_s6_h', 'room_one_floor_h'),
(13877, 10, 'pr_s6_w', 'room_one_floor_w'),
(13878, 10, 'm_materials', ''),
(13879, 10, 'm_name', ''),
(13880, 10, 'm_one', ''),
(13881, 10, 'm_two', ''),
(13882, 10, 'm_three', ''),
(13883, 10, 'm_four', ''),
(13884, 10, 'm_five', ''),
(13885, 10, 's_ladonta_levytyssuunta', ''),
(13886, 10, 's_saumoitus', ''),
(13887, 10, 's_ladontasystem', ''),
(13888, 10, 's_materials', ''),
(13889, 10, 's_rangan_suunta', ''),
(13890, 10, 's_kiinnikkeiden_linjojen_alkupaikka', ''),
(13891, 10, 's_kiinnikelinjan_etaisyydet', ''),
(13892, 10, 's_levytys_levytyksen_katkeaminen', ''),
(13893, 10, 's_levytys_pituus_y', ''),
(13894, 10, 's_levytys_pituus_x', ''),
(13895, 10, 's_levytyksen_suunta', ''),
(13896, 10, 's_lapiviennit', ''),
(13897, 10, 's_levyt_standard', ''),
(13898, 10, 's_jarjestelma', ''),
(13899, 10, 's_olosuhteet', ''),
(13900, 10, 's_olosuhde', ''),
(13901, 10, 's_aukko', ''),
(13902, 10, 's_reika_', ''),
(13903, 10, 's_levy_', ''),
(13904, 10, 's_rankatyypit', ''),
(13905, 10, 's_tyypin_pituudet', ''),
(13906, 10, 's_pystyasennus', ''),
(13907, 10, 's_listat', ''),
(13908, 10, 's_rankojen_sijoittelu', ''),
(13909, 10, 's_users', ''),
(13910, 10, 'pr_step', ''),
(13911, 10, 'pr_recl_msg', ''),
(13912, 10, 'pr_recl_from', ''),
(13913, 10, 'pr_recl_to', ''),
(13914, 10, 'pr_recl_attention', ''),
(13915, 10, 'pr_1_origo', ''),
(13916, 10, 'pr_1_gooddist_w', ''),
(13917, 10, 'pr_1_gooddist_h', ''),
(13918, 10, 'pr_1_1_name', ''),
(13919, 10, 'pr_1_1_dist_x', ''),
(13920, 10, 'pr_1_1_dist_y', ''),
(13921, 10, 'pr_1_1_comments', ''),
(13922, 10, 'pr_2_1_name', ''),
(13923, 10, 'pr_2_1_dist_x', ''),
(13924, 10, 'pr_2_1_dist_y', ''),
(13925, 10, 'pr_2_1_comments', ''),
(13926, 10, 'pr_2_1_h', ''),
(13927, 10, 'pr_2_1_w', ''),
(13928, 10, 'pr_3_1_name', ''),
(13929, 10, 'pr_3_1_dist_x', ''),
(13930, 10, 'pr_3_1_dist_y', ''),
(13931, 10, 'pr_3_1_comments', ''),
(13932, 10, 'pr_3_1_r', ''),
(13933, 10, 'pr_4_1_name', ''),
(13934, 10, 'pr_4_1_num', ''),
(13935, 10, 'pr_4_1_type', ''),
(13936, 10, 'pr_4_1_x', ''),
(13937, 10, 'pr_4_1_y', ''),
(13938, 10, 'pr_4_1_comments', ''),
(13939, 10, 'step', ''),
(13940, 10, 'wall', ''),
(13941, 10, 'room', ''),
(13942, 10, 'settings', ''),
(13943, 10, 'mittapisteet', ''),
(13944, 10, 'aukot', ''),
(13945, 10, 'reijat', ''),
(13946, 10, 'saumat', ''),
(13947, 10, 'levyt', ''),
(13948, 10, 'rangat', ''),
(13949, 10, 'listat', ''),
(13950, 10, 'kokonaisalue', ''),
(13951, 10, 'levytettava_alue', ''),
(13952, 10, 'poisjaava_alue', ''),
(13953, 10, 'keskusmittapiste_cord', ''),
(13954, 10, 'reklamaatiot', '');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(300) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `link` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `project_type` varchar(300) DEFAULT NULL,
  `user` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_swedish_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `created_at`, `link`, `project_type`, `user`) VALUES
(8, ' L11 1krs', '2023-07-06', '', '', ' '),
(9, ' test', '2023-07-18', '', '', ''),
(10, ' test', '2023-07-18', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `permissionrank` varchar(1) NOT NULL DEFAULT '0',
  `visible_forall` varchar(1) NOT NULL DEFAULT '0',
  `phone` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `permissionrank`, `visible_forall`, `phone`, `email`, `company`, `created_at`) VALUES
(1, 'admin', '$2y$10$H3081r4OB97irEoTMJoKouI2odKyU0d2vRVtm3EV987pXDJ2ue7oq', 'admin', '1', '0', 0, '', '', '2022-01-26 15:12:01'),
(2, 'Jyri', '$2y$10$SGyk40ELdJrak44ZKPqgNOrSklCBEpspTQk.wUQjkgeemBYiO8.jG', 'mittaus', '1', '0', 0, '', '', '2022-01-26 15:22:02'),
(4, 'Marko', '$2y$10$goFDu8dFgD7k3Emnm7g.fe7z.5OD6TdC3oMLifRxMOr1ZFuUvQl1y', 'admin', '1', '0', 0, '', '', '2023-01-12 19:11:17'),
(5, 'JariRannanjarvi', '$2y$10$96y6r6yV14bQMGyPN18/luUMQWD3mu9svWrg4EBcCEBjNXlkncjEO', 'mittaus', '1', '0', 0, '', '', '2023-05-30 16:33:14'),
(6, 'Virtanen', '$2y$10$.kaoJanCFAlf0Jz4Q3W9VedLheLWGckGtSQ6YvltVJTiNZ5IQUxWu', 'mittaus', '1', '0', 0, '', '', '2023-07-04 18:11:09'),
(7, 'saaja', '$2y$10$md0nFoTex6NTY.l9w8Kx9.y95kertRGmVXeQKOyrn7gqy8BG.UdYu', 'saaja', '0', '0', 0, '', '', '2023-07-06 14:05:14'),
(8, 'katsoja', '$2y$10$PxBfLfqBLDWttW8MFs48VOCIG98uOHrPS7Err9o0XluAVrgMSmtfm', 'katsoja', '0', '0', 0, '', '', '2023-07-06 14:05:29'),
(9, 'duunari', '$2y$10$4Cbpj.gmgVnLgQNLWUUG4OOPwt/AZPmxgRRo/Vkzavc9Pbj6wllM6', 'duunari', '0', '0', 0, '', '', '2023-07-06 14:05:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addedusers`
--
ALTER TABLE `addedusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pohjat`
--
ALTER TABLE `pohjat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projectmeta`
--
ALTER TABLE `projectmeta`
  ADD PRIMARY KEY (`meta_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
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
-- AUTO_INCREMENT for table `addedusers`
--
ALTER TABLE `addedusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pohjat`
--
ALTER TABLE `pohjat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `projectmeta`
--
ALTER TABLE `projectmeta`
  MODIFY `meta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13955;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
