-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 15, 2023 at 07:11 PM
-- Server version: 8.0.30
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `editori_west`
--

-- --------------------------------------------------------

--
-- Table structure for table `addedusers`
--

CREATE TABLE `addedusers` (
  `project_id` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `added_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addedusers`
--

INSERT INTO `addedusers` (`project_id`, `username`, `added_by`) VALUES
(0, 'username', 'added_by'),
(8, 'duunari', 'Marko'),
(11, 'Jyri', ''),
(18, 'Jyri G', 'Jyri'),
(25, 'ark', 'Jyri'),
(25, 'ilmastointi', 'Jyri'),
(25, 'ivs', 'Jyri'),
(25, 'keittio', 'Jyri'),
(25, 'limu', 'Jyri'),
(25, 'lukkomies', 'Jyri'),
(25, 'myynti', 'Jyri'),
(25, 'pu', 'Jyri'),
(25, 'purku', 'Jyri'),
(25, 'putki_iv', 'Jyri'),
(25, 'rak', 'Jyri'),
(25, 'rakennustyo', 'Jyri'),
(25, 'rakennustyo2', 'Jyri'),
(25, 'rakennustyo3', 'Jyri'),
(25, 'sahko', 'Jyri'),
(25, 'sahkos', 'Jyri'),
(25, 'siivous', 'Jyri'),
(25, 'suunnittelu', 'Jyri'),
(25, 'vesi', 'Jyri'),
(25, 'vesis', 'Jyri'),
(25, 'wf', 'Jyri'),
(26, 'duunari', 'Jyri'),
(26, 'ilmastointi', 'Jyri'),
(26, 'keittio', 'Jyri'),
(26, 'lukkomies', 'Jyri'),
(26, 'putki_iv', 'Jyri'),
(26, 'rakennustyo', 'Jyri'),
(26, 'sahko', 'Jyri'),
(26, 'siivous', 'Jyri'),
(26, 'suunnittelu', 'Jyri'),
(27, 'duunari', 'Jyri'),
(27, 'ilmastointi', 'Jyri'),
(27, 'keittio', 'Jyri'),
(27, 'lukkomies', 'Jyri'),
(27, 'putki_iv', 'Jyri'),
(27, 'rakennustyo', 'Jyri'),
(27, 'sahko', 'Jyri'),
(27, 'siivous', 'Jyri'),
(27, 'suunnittelu', 'Jyri'),
(29, 'jyri', ''),
(29, 'tyonjohto', ''),
(30, ' ', 'tyonjohto'),
(30, 'Denis Khasanov', ''),
(30, 'Henri Luostarinen', ''),
(30, 'Jari Rannanjarvi', ''),
(30, 'Jarno Himmela', ''),
(30, 'Jyri IT-velho', 'tyonjohto'),
(30, 'rakennustyo1', 'tyonjohto'),
(30, 'rakennustyo2', 'tyonjohto'),
(30, 'Sampsa Jyrkynen', ''),
(30, 'Severi Lainevuo', 'tyonjohto'),
(30, 'Timo Koskinen', 'tyonjohto'),
(30, 'tyonjohto', 'tyonjohto'),
(31, ' Henri Luostarinen', 'Marko Virtanen'),
(31, ' Jarmo Himmelä', 'Marko Virtanen'),
(31, 'Jari Rannanjarvi', 'Marko Virtanen'),
(31, 'Jyri Testaus', ''),
(31, 'Kuusemo Harri', 'Marko Virtanen'),
(31, 'Marko Virtanen', 'Marko Virtanen'),
(31, 'Pl concept', 'Marko Virtanen'),
(31, 'Suomen Kiipeilytekniikka ', 'Marko Virtanen'),
(31, 'tyonjohto', 'tyonjohto'),
(32, ' Tero Tirkkonen', 'Sampsa Jyrkynen'),
(32, 'Henri Luostarinen', 'Sampsa Jyrkynen'),
(32, 'Jarno Himmela', 'Sampsa Jyrkynen'),
(32, 'Joni Vepsäläinen', 'Sampsa Jyrkynen'),
(32, 'Marko Virtanen', 'Sampsa Jyrkynen'),
(32, 'Sampsa Jyrkynen', 'Sampsa Jyrkynen'),
(32, 'Timo Koskinen', 'Sampsa Jyrkynen'),
(32, 'tyonjohto', 'tyonjohto'),
(36, 'Jyri IT-velho', 'Jyri IT-velho'),
(36, 'Marko Virtanen', 'Jyri IT-velho'),
(42, 'Jyri IT-velho', ''),
(42, 'Jyri Testaus', ''),
(43, 'Jyri IT-velho', ''),
(43, 'Jyri Testaus', '');

-- --------------------------------------------------------

--
-- Table structure for table `changed__comments_interactive`
--

CREATE TABLE `changed__comments_interactive` (
  `commentid` varchar(244) NOT NULL,
  `projectid` varchar(255) NOT NULL,
  `room` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `x_y` int NOT NULL DEFAULT '0',
  `content` varchar(2000) NOT NULL,
  `attachments` varchar(3000) NOT NULL,
  `comment_from` varchar(255) NOT NULL,
  `comment_to` varchar(255) NOT NULL,
  `urgency` varchar(255) NOT NULL,
  `creation_time` varchar(255) NOT NULL,
  `ending_time` varchar(255) NOT NULL,
  `aihe` varchar(255) NOT NULL,
  `deadline` varchar(255) NOT NULL,
  `answer_to` varchar(255) NOT NULL,
  `time_estimate` int NOT NULL DEFAULT '1',
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'aloittamatta',
  `tja` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `tta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `h_remaining` int NOT NULL,
  `pvm_remaining` varchar(255) NOT NULL,
  `readiness` varchar(255) NOT NULL,
  `myyja_lupaus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `changed__comments_interactive`
--

INSERT INTO `changed__comments_interactive` (`commentid`, `projectid`, `room`, `name`, `x_y`, `content`, `attachments`, `comment_from`, `comment_to`, `urgency`, `creation_time`, `ending_time`, `aihe`, `deadline`, `answer_to`, `time_estimate`, `status`, `tja`, `tta`, `h_remaining`, `pvm_remaining`, `readiness`, `myyja_lupaus`) VALUES
('com09b6e0f87d532', 'Palsbo L11', 'L11A107C <br> Pukuhuo <br> Miehet>a', 'Tuolit pukuhuoneeseen', 48, '', '', '', 'Denis Khasanov', 'no_critical', '', '', '', '2023-12-31', '', 16, '', '', '', 16, '', '', ''),
('com16152443befcd', 'Palsbo L11', 'L11B310B <br> WC <br> Yleinen>a', 'Wc kansi', 47, '', '', '', 'Denis Khasanov', 'no_critical', '', '', '', '2023-11-30', '', 2, '', '', '', 2, '', '', ''),
('com2c7af1e1269fe', 'Palsbo L11', 'L11A305 <br> TSTOtie <br> Tyhjä>a', 'Oven kiinnitys', 47, '', '', '', '', 'no_critical', '', '', '', '2023-11-30', '', 2, '', '', '', 2, '', '', ''),
('com332aedebec53b', 'Palsbo L11', 'L11A100A <br> Porras <br> Yleinen>a', 'Terasrakenteiden maalaus', 45, '', '', '', 'Denis Khasanov', 'no_critical', '', '', '', '2023-11-30', '', 4, '', '', '', 4, '', '', ''),
('com36699b472afb4', 'Palsbo L11', 'L11A203A <br> WC <br> Yleinen>a', 'Maalaus seinassa', 48, '', '', '', 'Denis Khasanov', 'no_critical', '', '', '', '2023-12-31', '', 4, '', '', '', 4, '', '', ''),
('com3c142dfb12baf', 'Palsbo L11', 'L11A302 <br> TSTOsis <br> Tyhjä>a', 'Listat irti', 47, '', '', '', '', 'no_critical', '', '', '', '2023-11-30', '', 2, '', '', '', 2, '', '', ''),
('com4756c3fbb1df9', 'Palsbo L11', 'L11B221 <br> Huone <br> Himmelä>a', 'Pelastusportaat', 45, '', '', '', '', 'no_critical', '', '', '', '2023-11-30', '', 8, '', '', '', 8, '', '', ''),
('com4a0f38cb4099d', 'Palsbo L11', 'L11A309 <br> Käytävä <br> Yleinen>a', 'Levyt kaytavan levyt', 46, '', '', '', '', 'no_critical', '', '', '', '2023-12-31', '', 16, '', '', '', 16, '', '', ''),
('com595218bb51724', 'Palsbo L11', 'L11B308 <br> TSTO <br> Gromi>a', 'Sahkokansia asentamatta', 47, '', '', '', '', 'no_critical', '', '', '', '2023-12-31', '', 2, '', '', '', 2, '', '', ''),
('com5cc9035be05a', 'Palsbo L11', 'L11B218 <br> TekniTila <br> Asunto>a', 'Sahkot auki keittion oven vieressa', 46, '', '', '', '', 'no_critical', '', '', '', '', '', 1, '', '', '', 1, '', '', ''),
('com5d0ac36caa6f6', 'Palsbo L11', 'L11A107B <br> Pukuhuo <br> Naiset>a', 'Suihkukaappi', 45, '', '', '', 'Denis Khasanov', 'no_critical', '', '', '', '2023-12-31', '', 8, '', '', '', 8, '', '', ''),
('com67cea2f0346c4', 'Palsbo L11', 'L11B310B <br> WC <br> Yleinen>a', 'Valot', 46, '', '', '', 'Denis Khasanov', 'no_critical', '', '', '', '2023-11-30', '', 2, '', '', '', 2, '', '', ''),
('com6ff06ee84ea96', 'Palsbo L11', 'L11A100A <br> Porras <br> Yleinen>a', 'Ulos ikkunoiden valkoinen ulkokulma', 45, '', '', '', 'Denis Khasanov', 'no_critical', '', '', '', '2023-11-30', '', 8, '', '', '', 8, '', '', ''),
('com74e0e142e57f1', 'Palsbo L11', 'L11A101B <br> Keittio <br> Finstar>a', 'Tarkastettava etta toimii ja on valmis', 46, '', '', '', 'Denis Khasanov', 'no_critical', '', '', '', '2023-11-30', '', 1, '', '', '', 1, '', '', ''),
('com7872d2bf9ced9', 'Palsbo L11', 'L11A100A <br> Porras <br> Yleinen>a', 'Kyltit oviin', 45, '', '', '', 'Denis Khasanov', 'no_critical', '', '', '', '2023-12-31', '', 2, '', '', '', 2, '', '', ''),
('com7bcedcab056a7', 'Palsbo L11', 'L11A100A <br> Porras <br> Yleinen>a', 'Ovipumput kaikkialle', 46, '', '', '', 'Denis Khasanov', 'no_critical', '', '', '', '2023-11-30', '', 8, '', '', '', 8, '', '', ''),
('com7f2bbe689205', 'Palsbo L11', 'L11A100A <br> Porras <br> Yleinen>a', 'Vaahtosammuttimet 12 kpl', 46, '', '', '', 'Denis Khasanov', 'no_critical', '', '', '', '2023-12-31', '', 8, '', '', '', 8, '', '', ''),
('com8056f13a278f1', 'Palsbo L11', 'L11A100A <br> Porras <br> Yleinen>a', 'Kynnyslistat kaikkialle', 46, '', '', '', 'Denis Khasanov', 'no_critical', '', '', '', '2023-11-30', '', 8, '', '', '', 8, '', '', ''),
('com8a282e7877e14', 'Palsbo L11', 'L11A305 <br> TSTOtie <br> Tyhjä>a', 'Katosta roikkuu johto', 46, '', '', '', '', 'no_critical', '', '', '', '2023-12-31', '', 1, '', '', '', 1, '', '', ''),
('comc47404b9bd7ca', 'Palsbo L11', 'L11B104 <br> Myymälä <br> Sieniseur>a', 'Valokatkaisia', 46, '', '', '', '', 'no_critical', '', '', '', '', '', 6, '', '', '', 6, '', '', ''),
('comccff360fca951', 'Palsbo L11', 'L11A100A <br> Porras <br> Yleinen>a', 'Kuramatot kaytavaan 4 kpl', 46, '', '', '', 'Denis Khasanov', 'no_critical', '', '', '', '2023-12-31', '', 0, '', '', '', 0, '', '', ''),
('comd0a1a59068e2c', 'Palsbo L11', 'L11A100A <br> Porras <br> Yleinen>a', 'Palopostit kuntoon', 45, '', '', '', 'Denis Khasanov', 'no_critical', '', '', '', '2023-12-31', '', 16, '', '', '', 16, '', '', ''),
('comd3f17b142a1f8', 'Palsbo L11', 'L11B218 <br> TekniTila <br> Asunto>a', 'Paloovet', 45, '', '', '', '', 'no_critical', '', '', '', '2023-12-31', '', 0, '', '', '', 0, '', '', ''),
('comd72df18b2f385', 'Palsbo L11', 'L11B308 <br> TSTO <br> Gromi>a', 'Venttiilit', 45, '', '', '', 'jarno himmela', 'no_critical', '', '', '', '2023-12-31', '', 2, '', '', '', 2, '', '', ''),
('comef3d9e0218d', 'Palsbo L11', 'L11A100A <br> Porras <br> Yleinen>a', 'Vaahtosammuttimet 12 kpl', 46, '', '', '', 'Denis Khasanov', 'no_critical', '', '', '', '2023-12-31', '', 8, '', '', '', 8, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `projectid` int NOT NULL,
  `room` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `x_y` int DEFAULT '0',
  `content` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachments` varchar(3000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_from` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_to` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urgency` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creation_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ending_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aihe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deadline` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer_to` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_estimate` int NOT NULL DEFAULT '1',
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'aloittamatta',
  `tja` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `h_remaining` int NOT NULL,
  `pvm_remaining` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `readiness` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `myyja_lupaus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `projectid`, `room`, `name`, `x_y`, `content`, `attachments`, `comment_from`, `comment_to`, `urgency`, `creation_time`, `ending_time`, `aihe`, `deadline`, `answer_to`, `time_estimate`, `status`, `tja`, `tta`, `h_remaining`, `pvm_remaining`, `readiness`, `myyja_lupaus`) VALUES
('com09b6e0f87d532', 30, 'L11A107C <br> Pukuhuo <br> Miehet>a', 'Tuolit pukuhuoneeseen', 48, '', '', 'tyonjohto', 'Severi Lainevuo', 'no_critical', '2023-11-01 12:41:31', '', 'tyonjohto kommentit', '2023-12-31', '', 16, 'aloittamatta', '', '', 16, '', '', ''),
('com16152443befcd', 30, 'L11B310B <br> WC <br> Yleinen>a', 'Wc kansi', 47, '', '', 'tyonjohto', 'Denis Khasanov', 'no_critical', '2023-11-01 12:28:06', '', 'tyonjohto kommentit', '2023-11-30', '', 2, 'aloittamatta', '', '', 2, '', '', ''),
('com206adaacddfb7', 30, 'L11A309 <br> Käytävä <br> Yleinen>a', 'Ya siru ei toimi oveen', 48, '', '', 'tyonjohto', 'Lukkomies', 'no_critical', '2023-11-01 12:22:57', '', 'tyonjohto kommentit', '', '', 4, 'aloittamatta', '', '', 4, '', '', ''),
('com27081d0ec3705', 30, 'L11B106 <br> Lämpöjako <br> Yleinen>a', 'Ulkoseinän aukko ja pieni hylly papereille', 47, '', '', 'tyonjohto', 'Severi Lainevuo', 'no_critical', '2023-11-01 10:04:10', '', 'tyonjohto kommentit', '2023-12-31', '', 6, 'aloittamatta', '', '', 6, '', '', ''),
('com2c7af1e1269fe', 30, 'L11A305 <br> TSTOtie <br> Tyhjä>a', 'Oven kiinnitys', 47, '', '', 'tyonjohto', 'Severi Lainevuo', 'no_critical', '2023-11-01 12:15:16', '', 'tyonjohto kommentit', '2023-11-30', '', 2, 'aloittamatta', '', '', 2, '', '', ''),
('com307ea9e07f483', 30, 'L11B308 <br> TSTO <br> Gromi>a', 'Katosta vuotaa vettä kovalla sateella', 46, 'Tarkastetaan katto -  samalla myös P10 katto vuotaa C315 mendez. Mvi tietaa', '', 'tyonjohto', 'Severi Lainevuo', 'no_critical', '2023-10-31 20:33:12', '', 'tyonjohto kommentit', '2023-11-30', '', 1, 'aloittamatta', '', '', 1, '', '', ''),
('com332aedebec53b', 30, 'L11A100A <br> Porras <br> Yleinen>a', 'Terasrakenteiden maalaus', 45, '', '', 'tyonjohto', 'Denis Khasanov', 'no_critical', '2023-11-01 12:33:23', '', 'tyonjohto kommentit', '2023-11-30', '', 4, 'aloittamatta', '', '', 4, '', '', ''),
('com36699b472afb4', 30, 'L11A203A <br> WC <br> Yleinen>a', 'Maalaus seinassa', 48, 'Ylakerran kanssa samalla', 'https://editori.westface.fi/uploads/3728816988284133304573458054917350088.jpg\n', 'tyonjohto', 'Severi Lainevuo', 'no_critical', '2023-11-01 10:51:23', '', 'tyonjohto kommentit', '2023-12-31', '', 4, 'aloittamatta', '', '', 4, '', '', ''),
('com3c142dfb12baf', 30, 'L11A302 <br> TSTOsis <br> Tyhjä>a', 'Listat irti', 47, '', '', 'tyonjohto', 'Severi Lainevuo', 'no_critical', '2023-11-01 12:25:21', '', 'tyonjohto kommentit', '2023-11-30', '', 2, 'aloittamatta', '', '', 2, '', '', ''),
('com4756c3fbb1df9', 30, 'L11B221 <br> Huone <br> Himmelä>a', 'Pelastusportaat', 45, '', '', 'tyonjohto', 'Marko Virtanen', 'no_critical', '2023-11-01 12:30:25', '', 'tyonjohto kommentit', '2023-11-30', '', 8, 'aloittamatta', '', '', 8, '', '', ''),
('com4a0f38cb4099d', 30, 'L11A309 <br> Käytävä <br> Yleinen>a', 'Levyt kaytavan levyt', 46, 'Ne on huoneessa 303', '', 'tyonjohto', 'Severi Lainevuo', 'no_critical', '2023-11-01 10:43:40', '', 'tyonjohto kommentit', '2023-12-31', '', 16, 'aloittamatta', '', '', 16, '', '', ''),
('com4d29567eeb88f', 30, 'L11B217 <br> Keittio <br> Asunto>a', 'L lista tiiliseina', 48, '', '', 'tyonjohto', 'Severi Lainevuo', 'no_critical', '2023-11-01 12:29:25', '', 'tyonjohto kommentit', '2023-11-30', '', 2, 'aloittamatta', '', '', 2, '', '', ''),
('com595218bb51724', 30, 'L11B308 <br> TSTO <br> Gromi>a', 'Sahkokansia asentamatta', 47, '', '', 'tyonjohto', 'Timo Koskinen', 'no_critical', '2023-11-01 12:12:50', '', 'tyonjohto kommentit', '2023-12-31', '', 2, 'aloittamatta', '', '', 2, '', '', ''),
('com5cc9035be05a', 30, 'L11B218 <br> TekniTila <br> Asunto>a', 'Sahkot auki keittion oven vieressa', 46, 'Jakorasia seinassa', '', 'tyonjohto', 'Timo Koskinen', 'no_critical', '2023-11-01 10:29:25', '', 'tyonjohto kommentit', '', '', 1, 'aloittamatta', '', '', 1, '', '', ''),
('com5d0ac36caa6f6', 30, 'L11A107B <br> Pukuhuo <br> Naiset>a', 'Suihkukaappi', 45, 'Osta kaappi tahan', '', 'tyonjohto', 'Marko Virtanen', 'no_critical', '2023-11-01 11:05:30', '', 'tyonjohto kommentit', '2023-12-31', '', 8, 'aloittamatta', '', '', 8, '', '', ''),
('com67cea2f0346c4', 30, 'L11B310B <br> WC <br> Yleinen>a', 'Valot', 46, '', '', 'tyonjohto', 'Timo Koskinen', 'no_critical', '2023-11-01 12:27:30', '', 'tyonjohto kommentit', '2023-11-30', '', 2, 'aloittamatta', '', '', 2, '', '', ''),
('com6afe1ef2b2c4a', 30, 'L11B303 <br> TSTO <br> Tyhjä>a', 'Katon listat', 48, 'Vastalistat katolle on huoneessa', '', 'tyonjohto', 'Severi Lainevuo', 'no_critical', '2023-11-01 10:39:24', '', 'tyonjohto kommentit', '2023-12-31', '', 16, 'aloittamatta', '', '', 16, '', '', ''),
('com6ff06ee84ea96', 30, 'L11A100A <br> Porras <br> Yleinen>a', 'Ulos ikkunoiden valkoinen ulkokulma', 45, '', '', 'tyonjohto', 'Henri Luostarinen', 'no_critical', '2023-11-01 12:32:31', '', 'tyonjohto kommentit', '2023-11-30', '', 8, 'aloittamatta', '', '', 8, '', '', ''),
('com74a9e647c4c01', 30, 'L11A201 <br> TSTO <br> Tyhjä>a', 'Sahkot', 48, '', '', 'tyonjohto', 'Timo Koskinen', 'no_critical', '2023-11-01 10:53:10', '', 'tyonjohto kommentit', '2023-12-31', '', 24, 'aloittamatta', '', '', 24, '', '', ''),
('com74e0e142e57f1', 30, 'L11A101B <br> Keittio <br> Finstar>a', 'Tarkastettava etta toimii ja on valmis', 46, '', '', 'tyonjohto', 'Denis Khasanov', 'no_critical', '2023-11-01 11:03:50', '', 'tyonjohto kommentit', '2023-11-30', '', 1, 'aloittamatta', '', '', 1, '', '', ''),
('com7872d2bf9ced9', 30, 'L11A100A <br> Porras <br> Yleinen>a', 'Kyltit oviin', 45, '', '', 'tyonjohto', 'Marko Virtanen', 'no_critical', '2023-11-01 11:46:29', '', 'tyonjohto kommentit', '2023-12-31', '', 2, 'aloittamatta', '', '', 2, '', '', ''),
('com7bcedcab056a7', 30, 'L11A100A <br> Porras <br> Yleinen>a', 'Ovipumput kaikkialle', 46, '', '', 'tyonjohto', 'Denis Khasanov', 'no_critical', '2023-11-01 12:35:13', '', 'tyonjohto kommentit', '2023-11-30', '', 8, 'aloittamatta', '', '', 8, '', '', ''),
('com7f2bbe689205', 30, 'L11A100A <br> Porras <br> Yleinen>a', 'Vaahtosammuttimet 12 kpl', 46, 'Marko ja denis yhdessa', '', 'tyonjohto', 'Marko Virtanen', 'no_critical', '2023-11-01 11:10:01', '', 'tyonjohto kommentit', '2023-12-31', '', 8, 'aloittamatta', '', '', 8, '', '', ''),
('com8056f13a278f1', 30, 'L11A100A <br> Porras <br> Yleinen>a', 'Kynnyslistat kaikkialle', 46, '', '', 'tyonjohto', 'Henri Luostarinen', 'no_critical', '2023-11-01 12:31:50', '', 'tyonjohto kommentit', '2023-11-30', '', 8, 'aloittamatta', '', '', 8, '', '', ''),
('com8a282e7877e14', 30, 'L11A305 <br> TSTOtie <br> Tyhjä>a', 'Katosta roikkuu johto', 46, 'Tikkaat ja rallakka mukaan alumiinia', 'https://editori.westface.fi/uploads/232551698828276636995776249616336951.jpg\n', 'tyonjohto', 'Severi Lainevuo', 'no_critical', '2023-11-01 10:45:31', '', 'tyonjohto kommentit', '2023-12-31', '', 1, 'aloittamatta', '', '', 1, '', '', ''),
('com98dc68b01ac94', 30, 'L11A201 <br> TSTO <br> Tyhjä>a', 'Vesipisteen purku', 46, '', 'https://editori.westface.fi/uploads/3750316988287174967131681337267276496.jpg\n', 'tyonjohto', 'Denis Khasanov', 'no_critical', '2023-11-01 10:52:30', '', 'tyonjohto kommentit', '', '', 8, 'aloittamatta', '', '', 8, '', '', ''),
('comc47404b9bd7ca', 30, 'L11B104 <br> Myymälä <br> Sieniseur>a', 'Valokatkaisia', 46, 'Tuomas puh 0505522466 voi siivota alueet tarvittaessa ennen tyota ', 'https://editori.westface.fi/uploads/382621698825985734499484868331287556.jpg\n', 'tyonjohto', 'Timo Koskinen', 'no_critical', '2023-11-01 10:09:44', '', 'tyonjohto kommentit', '', '', 6, 'aloittamatta', '', '', 6, '', '', ''),
('comccff360fca951', 30, 'L11A100A <br> Porras <br> Yleinen>a', 'Kuramatot kaytavaan 4 kpl', 46, 'Kuramatot 4 porrasta 1200x3000 2kpl per porras', 'https://editori.westface.fi/uploads/4956616988298439292565386085874956570.jpg\n', 'tyonjohto', 'Marko Virtanen', 'no_critical', '2023-11-01 11:11:11', '', 'tyonjohto kommentit', '2023-12-31', '', 0, 'aloittamatta', '', '', 0, '', '', ''),
('comd0a1a59068e2c', 30, 'L11A100A <br> Porras <br> Yleinen>a', 'Palopostit kuntoon', 45, 'Kaikki portaat', 'https://editori.westface.fi/uploads/3381716988296940481539411297158765049.jpg\n', 'tyonjohto', 'Denis Khasanov', 'no_critical', '2023-11-01 11:08:59', '', 'tyonjohto kommentit', '2023-12-31', '', 16, 'aloittamatta', '', '', 16, '', '', ''),
('comd3f17b142a1f8', 30, 'L11B218 <br> TekniTila <br> Asunto>a', 'Paloovet', 45, 'Ovi keittioon 900x2090 huoneeseen 850x2020 eteiseen850x2020 mieti tarviiko rajata mitat karmimittoja ovet valkoisia', '', 'tyonjohto', 'Marko Virtanen', 'no_critical', '2023-11-01 10:28:24', '', 'tyonjohto kommentit', '2023-12-31', '', 0, 'aloittamatta', '', '', 0, '', '', ''),
('comd72df18b2f385', 30, 'L11B308 <br> TSTO <br> Gromi>a', 'Venttiilit', 45, '', '', 'tyonjohto', 'Jarno Himmela', 'no_critical', '2023-11-01 12:14:11', '', 'tyonjohto kommentit', '2023-12-31', '', 2, 'aloittamatta', '', '', 2, '', '', ''),
('come96aa9b028a7e', 30, 'L11B308 <br> TSTO <br> Gromi>a', 'Palokatkot lattiassa', 48, '', '', 'tyonjohto', 'Severi Lainevuo', 'no_critical', '2023-11-01 12:13:38', '2023-11-01 17:34:48', 'tyonjohto kommentit', '2023-12-31', '', 4, 'poistettu_kuittaamatta', '', '', 4, '', '', ''),
('comed5e44b723594', 30, 'L11A302 <br> TSTOsis <br> Tyhjä>a', 'Epalookisuus valot ja sahkokisko', 48, '', '', 'tyonjohto', 'Timo Koskinen', 'no_critical', '2023-11-01 12:24:31', '', 'tyonjohto kommentit', '2023-11-30', '', 2, 'aloittamatta', '', '', 2, '', '', ''),
('comef3d9e0218d', 30, 'L11A100A <br> Porras <br> Yleinen>a', 'Vaahtosammuttimet 12 kpl', 46, 'Marko ja denis yhdessa', '', 'tyonjohto', 'Denis Khasanov', 'no_critical', '2023-11-01 11:10:01', '', 'tyonjohto kommentit', '2023-12-31', '', 8, 'aloittamatta', '', '', 8, '', '', ''),
('comf90ab3ad7c1ce', 30, 'L11A309 <br> Käytävä <br> Yleinen>a', 'Seinan maalaus', 48, '', '', 'tyonjohto', 'Severi Lainevuo', 'no_critical', '2023-11-01 10:41:00', '', 'tyonjohto kommentit', '2023-12-31', '', 8, 'aloittamatta', '', '', 8, '', '', ''),
('comfeca50fa7978c', 30, 'L11A100A <br> Porras <br> Yleinen>a', 'Katso myos pukarien ovipumput', 48, 'Ovipumppukiinni pyoravajaan loytyy vajasta', 'https://editori.westface.fi/uploads/2068816988301597346382129001209748965.jpg\n', 'tyonjohto', 'Severi Lainevuo', 'no_critical', '2023-11-01 11:16:24', '2023-11-01 12:34:27', 'tyonjohto kommentit', '2023-12-31', '', 1, 'poistettu_kuittaamatta', '', '', 1, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kumoalog`
--

CREATE TABLE `kumoalog` (
  `id` int NOT NULL,
  `project_id` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `redo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `undo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mail_templates`
--

CREATE TABLE `mail_templates` (
  `id` int NOT NULL,
  `header_array` varchar(2555) NOT NULL DEFAULT '',
  `messagename` varchar(2555) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `subject_array` varchar(2555) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `message_array` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mail_templates`
--

INSERT INTO `mail_templates` (`id`, `header_array`, `messagename`, `subject_array`, `message_array`) VALUES
(1, 'editori@westface.fi~~~~~~~~Editori Westface~~~~Ipah6Xae!~~~~', 'project_creation', 'Tervetuloa hankeeseen ~~~~!!!', 'Hei ~~~~Tervetuloa uuteen hankkeeseen, joka on tehty myyjämme ~~~~ toimesta~~~~Projektissa ovat nämä henkilöt mukana: ~~~~~~~~Hankkeen nimeksi tulee: ~~~~~~~~test '),
(2, 'editori@westface.fi~~~~~~~~Editori Westface~~~~Ipah6Xae!~~~~', 'project_newuser', 'Tilin luonti Editoriin: ~~~~, kirjautumistunnukset', 'Hei ~~~~~~~~Käyttäjätilisi on ~~~~~~~~ja salasanasi on ~~~~~~~~Tämä puhelinnumerosi näkyy hankkeessa: ~~~~~~~~Käyttäjätilisi luotiin: ~~~~~~~~~~~~~~~~ööäääää'),
(3, 'editori@westface.fi~~~~marko.virtanen@westface.fi~~~~Editori Westface~~~~Ipah6Xae!~~~~Marko Virtanen', 'project_sendedits', 'Muutoksia kommenteissa ~~~~', 'Nämä muutokset ovat tapahtuneet kommenteissa:'),
(4, 'editori@westface.fi~~~~marko.virtanen@westface.fi~~~~Editori Westface~~~~Ipah6Xae!~~~~Marko Virtanen', 'sent_purchases', 'Laskutettavat ostot ~~~~', ''),
(5, 'editori@westface.fi~~~~marko.virtanen@westface.fi~~~~Editori Westface~~~~Ipah6Xae!~~~~Marko Virtanen', 'deleted_without_consent', 'Kommentti suljettu kuittaamatta, hanke ~~~~ ', ''),
(6, 'editori@westface.fi~~~~~~~~Editori Westface~~~~Ipah6Xae!~~~~', 'comments_toworkers', 'Avoimet Kommenttisi ~~~~ !', ''),
(7, 'editori@westface.fi~~~~marko.virtanen@westface.fi~~~~Editori Westface~~~~Ipah6Xae!~~~~Marko Virtanen', 'reppanareport', 'Kommentit reppanoittain ~~~~', ''),
(8, 'editori@westface.fi~~~~marko.virtanen@westface.fi~~~~Editori Westface~~~~Ipah6Xae!~~~~Marko Virtanen', 'projectreport', 'Kommentit hankettain ~~~~', ''),
(9, 'editori@westface.fi~~~~marko.virtanen@westface.fi~~~~Editori Westface~~~~Ipah6Xae!~~~~Marko Virtanen', 'comment_sending_to_tyonjohto', 'Kommentti kuitattu, hanke ~~~~!!', ''),
(10, 'editori@westface.fi~~~~marko.virtanen@westface.fi~~~~Editori Westface~~~~Ipah6Xae!~~~~Marko Virtanen', 'tilauksen_lisays', 'Uusi tilaus, hanke ~~~~!', ''),
(11, 'editori@westface.fi~~~~marko.virtanen@westface.fi~~~~Editori Westface~~~~Ipah6Xae!~~~~Marko Virtanen', 'kommentin_lisays', 'Tärkeä korjaus, hanke ~~~~', ''),
(12, 'editori@westface.fi~~~~marko.virtanen@westface.fi~~~~Editori Westface~~~~Ipah6Xae!~~~~Marko Virtanen', 'myyjaproject_report', 'Kommentit hankettain ~~~~', '');

-- --------------------------------------------------------

--
-- Table structure for table `message_templates`
--

CREATE TABLE `message_templates` (
  `id` int NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `message_templates`
--

INSERT INTO `message_templates` (`id`, `subject`, `message`) VALUES
(1, 'new_project', 'test'),
(2, 'new_comment', 'test'),
(3, 'comment_ready', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `pohjat`
--

CREATE TABLE `pohjat` (
  `id` int NOT NULL,
  `a` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `b` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `c` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `d` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `k` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `l` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
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
  `meta_id` int NOT NULL,
  `id` int NOT NULL,
  `meta_key` varchar(255) NOT NULL,
  `meta_value` text CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `projectmeta`
--

INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES
(3772, 100, 's_settings', ''),
(3773, 100, 's_materials', ''),
(3776, 100, 'aukko_template', ''),
(4474, 100, 'aukko_mallit', ''),
(4475, 100, 'aukko_mallityypit', ''),
(19419, 30, 'pr_id', '30'),
(19420, 30, 'pr_name', 'Palsbo L11'),
(19421, 30, 'pr_type', ''),
(19422, 30, 'chosen_jarjestelma', 'Delta'),
(19423, 30, 's_settings', 'DEFAULT'),
(19424, 30, 's_materials', ''),
(19425, 30, 'prc_1', 'Marko Virtanen'),
(19426, 30, 'prc_1_role', 'kommentointi'),
(19427, 30, 'prc_1_permission', '1'),
(19428, 30, 'prc_1_hiding', ''),
(19429, 30, 'prc_1_puh', '+358405206942'),
(19430, 30, 'prc_1_email', 'marko.virtanen@kiipeilytekniikka.com'),
(19431, 30, 'prc_2', 'marko'),
(19432, 30, 'prc_2_role', 'saaja'),
(19433, 30, 'prc_2_permission', '1'),
(19434, 30, 'prc_2_hiding', ''),
(19435, 30, 'prc_2_puh', '0405206942'),
(19436, 30, 'prc_2_email', 'editori@westface.fi'),
(19437, 30, 'prc_3', 'Sampsa Jyrkynen'),
(19438, 30, 'prc_3_role', 'saaja'),
(19439, 30, 'prc_3_permission', '1'),
(19440, 30, 'prc_3_hiding', ''),
(19441, 30, 'prc_3_puh', '+358445768976'),
(19442, 30, 'prc_3_email', 'sampsa.jyrkynen@kiipeilytekniikka.com'),
(19443, 30, 'prc_4', 'Severi Lainevuo'),
(19444, 30, 'prc_4_role', 'mittaus'),
(19445, 30, 'prc_4_permission', '1'),
(19446, 30, 'prc_4_hiding', ''),
(19447, 30, 'prc_4_puh', '+358406856299'),
(19448, 30, 'prc_4_email', 'severi.lainevuo@westface.fi'),
(19449, 30, 'prc_5', 'Jari Rannanjarvi'),
(19450, 30, 'prc_5_role', 'mittaus'),
(19451, 30, 'prc_5_permission', '1'),
(19452, 30, 'prc_5_hiding', ''),
(19453, 30, 'prc_5_puh', '+358456357793'),
(19454, 30, 'prc_5_email', 'jari.rannanjarvi@kiipeilytekniikka.com'),
(19455, 30, 'prc_6', 'Timo Koskinen'),
(19456, 30, 'prc_6_role', 'kommentointi'),
(19457, 30, 'prc_6_permission', '1'),
(19458, 30, 'prc_6_hiding', ''),
(19459, 30, 'prc_6_puh', '+358440331340'),
(19460, 30, 'prc_6_email', 'timo.koskinen@msn.com'),
(19461, 30, 'prc_7', 'Denis Khasanov'),
(19462, 30, 'prc_7_role', 'kommentointi'),
(19463, 30, 'prc_7_permission', '1'),
(19464, 30, 'prc_7_hiding', ''),
(19465, 30, 'prc_7_puh', '+358468909804'),
(19466, 30, 'prc_7_email', 'shinexo1@mail.ru'),
(19467, 30, 'prc_8', 'Jarno Himmela'),
(19468, 30, 'prc_8_role', 'kommentointi'),
(19469, 30, 'prc_8_permission', ''),
(19470, 30, 'prc_8_hiding', ''),
(19471, 30, 'prc_8_puh', '+358400569659'),
(19472, 30, 'prc_8_email', 'himmi00@icloud.com'),
(19473, 30, 'prc_9', 'Henri Luostarinen'),
(19474, 30, 'prc_9_role', 'kommentointi'),
(19475, 30, 'prc_9_permission', ''),
(19476, 30, 'prc_9_hiding', ''),
(19477, 30, 'prc_9_puh', '+3587502200'),
(19478, 30, 'prc_9_email', 'henri.luostarinen@kiipeilytekniikka.com'),
(19479, 30, 'prc_10', ''),
(19480, 30, 'prc_10_role', ''),
(19481, 30, 'prc_10_permission', ''),
(19482, 30, 'prc_10_hiding', ''),
(19483, 30, 'prc_10_puh', ''),
(19484, 30, 'prc_10_email', ''),
(19485, 30, 'prc_11', ''),
(19486, 30, 'prc_11_role', ''),
(19487, 30, 'prc_11_permission', ''),
(19488, 30, 'prc_11_hiding', ''),
(19489, 30, 'prc_11_puh', ''),
(19490, 30, 'prc_11_email', ''),
(19491, 30, 'a_pr_krs', ''),
(19492, 30, 'a_pr_rap', ''),
(19493, 30, 'b_pr_krs', ''),
(19494, 30, 'b_pr_rap', ''),
(19495, 30, 'c_pr_krs', ''),
(19496, 30, 'c_pr_rap', ''),
(19497, 30, 'd_pr_krs', ''),
(19498, 30, 'd_pr_rap', ''),
(19499, 30, 'e_pr_krs', ''),
(19500, 30, 'e_pr_rap', ''),
(19501, 30, 'f_pr_krs', ''),
(19502, 30, 'f_pr_rap', ''),
(19503, 30, 'a_rooms', '[{\"name\": \"  L11A300 <br> PORRAS <br> Yleinen\",\"positionY\":  1,\"positionX\":  1,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  L11A300A <br> WC <br> Yleinen\",\"positionY\":  1,\"positionX\":  2,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  L11A301 <br> TSTOsis <br> Karl_Vi\",\"positionY\":  1,\"positionX\":  3,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  L11A302 <br> TSTOsis <br> Tyhjä\",\"positionY\":  1,\"positionX\":  4,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  L11A305 <br> TSTOtie <br> Tyhjä\",\"positionY\":  1,\"positionX\":  5,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  L11A306 <br> TSTOtie <br> Juho_Ma\",\"positionY\":  1,\"positionX\":  6,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  L11A309 <br> Käytävä <br> Yleinen\",\"positionY\":  1,\"positionX\":  7,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  L11A <br> 300S <br> SähĶaappi\",\"positionY\":  1,\"positionX\":  10,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  L11A200 <br> Porras <br> Yleinen\",\"positionY\":  2,\"positionX\":  1,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  L11A201 <br> TSTO <br> Tyhjä\",\"positionY\":  2,\"positionX\":  2,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  L11A202 <br> TSTO <br> Tyhjä\",\"positionY\":  2,\"positionX\":  3,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  L11A203A <br> WC <br> Yleinen\",\"positionY\":  2,\"positionX\":  4,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  L11A203B <br> WC <br> Yleinen\",\"positionY\":  2,\"positionX\":  5,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  L11A204 <br> Eteinen <br> Yleinen\",\"positionY\":  2,\"positionX\":  6,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  L11A205 <br> TSTO <br> Tyhjä\",\"positionY\":  2,\"positionX\":  7,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  L11A206 <br> TSTO <br> Mara_L.\",\"positionY\":  2,\"positionX\":  8,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  L11A207 <br> Varasto <br> Tyhjä\",\"positionY\":  2,\"positionX\":  9,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  L11A <br> 200S <br> SähĶaappi\",\"positionY\":  2,\"positionX\":  10,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  L11A100A <br> Porras <br> Yleinen\",\"positionY\":  3,\"positionX\":  1,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  L11A100B <br> Pyorät <br> Yleinen\",\"positionY\":  3,\"positionX\":  2,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  L11A101A <br> Myymälä <br> Finstar\",\"positionY\":  3,\"positionX\":  3,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  L11A101B <br> Keittio <br> Finstar\",\"positionY\":  3,\"positionX\":  4,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  L11A101 <br> Varasto <br> Finstar\",\"positionY\":  3,\"positionX\":  5,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  L11A107A <br> Pukuhuo <br> Eteinen\",\"positionY\":  3,\"positionX\":  6,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  L11A107B <br> Pukuhuo <br> Naiset\",\"positionY\":  3,\"positionX\":  7,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  L11A107C <br> Pukuhuo <br> Miehet\",\"positionY\":  3,\"positionX\":  8,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  L11B105 <br> Sähkoke <br> Pää\",\"positionY\":  3,\"positionX\":  9,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  L11A <br> 100S <br> SähĶaappi\",\"positionY\":  3,\"positionX\":  10,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}\"}]'),
(19504, 30, 'b_rooms', '[{\"name\": \"  L11B310A <br> Porras <br> Yleinen\",\"positionY\":1,\"positionX\":1,\"a_room\": \"13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"13~undone~1|1~2200|4000~~~~~}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}\"},{\"name\": \"  L11B310B <br> WC <br> Yleinen\",\"positionY\":1,\"positionX\":2,\"a_room\": \"13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"13~undone~1|1~2200|4000~~~~~}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}\"},{\"name\": \"  L11B303 <br> TSTO <br> Tyhjä\",\"positionY\":1,\"positionX\":3,\"a_room\": \"13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"13~undone~1|1~2200|4000~~~~~}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}\"},{\"name\": \"  L11B304 <br> TSTO <br> VFlame\",\"positionY\":1,\"positionX\":4,\"a_room\": \"13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"13~undone~1|1~2200|4000~~~~~}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}\"},{\"name\": \"  L11B307 <br> TSTO <br> Tyhjä\",\"positionY\":1,\"positionX\":5,\"a_room\": \"13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"13~undone~1|1~2200|4000~~~~~}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}\"},{\"name\": \"  L11B308 <br> TSTO <br> Gromi\",\"positionY\":1,\"positionX\":6,\"a_room\": \"13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"13~undone~1|1~2200|4000~~~~~}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}\"},{\"name\": \"  L11B309 <br> IVKH <br> Yleinen\",\"positionY\":1,\"positionX\":7,\"a_room\": \"13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"13~undone~1|1~2200|4000~~~~~}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}\"},{\"name\": \"  L11B210A <br> Porras <br> Yleinen\",\"positionY\":2,\"positionX\":1,\"a_room\": \"13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"13~undone~1|1~2200|4000~~~~~}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}\"},{\"name\": \"  L11B210B <br> Siivous <br> Yleinen\",\"positionY\":2,\"positionX\":2,\"a_room\": \"13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"13~undone~1|1~2200|4000~~~~~}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}\"},{\"name\": \"  L11B211 <br> WC <br> suihkuAs\",\"positionY\":2,\"positionX\":3,\"a_room\": \"13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"13~undone~1|1~2200|4000~~~~~}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}\"},{\"name\": \"  L11B212 <br> Huone <br> Tyhjä\",\"positionY\":2,\"positionX\":4,\"a_room\": \"13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"13~undone~1|1~2200|4000~~~~~}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}\"},{\"name\": \"  L11B213 <br> Huone <br> Tyhjä\",\"positionY\":2,\"positionX\":5,\"a_room\": \"13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"13~undone~1|1~2200|4000~~~~~}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}\"},{\"name\": \"  L11B214 <br> Huone <br> Tyhjä\",\"positionY\":2,\"positionX\":6,\"a_room\": \"13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"13~undone~1|1~2200|4000~~~~~}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}\"},{\"name\": \"  L11B215 <br> Huone <br> HimmeläJr\",\"positionY\":2,\"positionX\":7,\"a_room\": \"13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"13~undone~1|1~2200|4000~~~~~}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}\"},{\"name\": \"  L11B216 <br> Käytävä <br> Asunto\",\"positionY\":2,\"positionX\":8,\"a_room\": \"13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"13~undone~1|1~2200|4000~~~~~}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}\"},{\"name\": \"  L11B217 <br> Keittio <br> Asunto\",\"positionY\":2,\"positionX\":9,\"a_room\": \"13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"13~undone~1|1~2200|4000~~~~~}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}\"},{\"name\": \"  L11B218 <br> TekniTila <br> Asunto\",\"positionY\":2,\"positionX\":10,\"a_room\": \"13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"13~undone~1|1~2200|4000~~~~~}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}\"},{\"name\": \"  L11B219WC <br> _/_ <br> suihkuAsu\",\"positionY\":2,\"positionX\":11,\"a_room\": \"13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"13~undone~1|1~2200|4000~~~~~}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}\"},{\"name\": \"  L11B220 <br> Huone <br> Jyri\",\"positionY\":2,\"positionX\":12,\"a_room\": \"13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"13~undone~1|1~2200|4000~~~~~}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}\"},{\"name\": \"  L11B221 <br> Huone <br> Himmelä\",\"positionY\":2,\"positionX\":13,\"a_room\": \"13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"13~undone~1|1~2200|4000~~~~~}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}\"},{\"name\": \"  L11B105A <br> Porras <br> Yleinen\",\"positionY\":3,\"positionX\":1,\"a_room\": \"13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"13~undone~1|1~2200|4000~~~~~}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}\"},{\"name\": \"  L11B106 <br> Lämpöjako <br> Yleinen\",\"positionY\":3,\"positionX\":2,\"a_room\": \"13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"13~undone~1|1~2200|4000~~~~~}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}\"},{\"name\": \"  L11B104 <br> Myymälä <br> Sieniseur\",\"positionY\":3,\"positionX\":3,\"a_room\": \"13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"13~undone~1|1~2200|4000~~~~~}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}\"},{\"name\": \"  L11B107 <br> Käytävä <br> Westface\",\"positionY\":3,\"positionX\":4,\"a_room\": \"13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"13~undone~1|1~2200|4000~~~~~}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}\"},{\"name\": \"  L11B108 <br> Keittio <br> Westface\",\"positionY\":3,\"positionX\":5,\"a_room\": \"13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"13~undone~1|1~2200|4000~~~~~}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}\"},{\"name\": \"  L11B109 <br> TSTO <br> Westface\",\"positionY\":3,\"positionX\":6,\"a_room\": \"13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"13~undone~1|1~2200|4000~~~~~}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}\"}]'),
(19505, 30, 'c_rooms', '[]'),
(19506, 30, 'd_rooms', '[]'),
(19507, 30, 'e_rooms', '[]'),
(19508, 30, 'f_rooms', '[]'),
(19509, 30, 'g_rooms', '[]'),
(19510, 30, 'h_rooms', '[]'),
(19511, 30, 'a_rooms_nowork', ''),
(19512, 30, 'b_rooms_nowork', ''),
(19513, 30, 'c_rooms_nowork', ''),
(19514, 30, 'd_rooms_nowork', ''),
(19515, 30, 'e_rooms_nowork', ''),
(19516, 30, 'f_rooms_nowork', ''),
(19517, 30, 'g_rooms_nowork', ''),
(19518, 30, 'h_rooms_nowork', ''),
(19519, 30, 'pr_room_name', ''),
(19520, 30, 'pr_rap_name', ''),
(19521, 30, 'pr_s1_name', ''),
(19522, 30, 'pr_s1_order', '1'),
(19523, 30, 'pr_s1_desc', ''),
(19524, 30, 'pr_s1_h', ''),
(19525, 30, 'pr_s1_w', ''),
(19526, 30, 'pr_s2_name', ''),
(19527, 30, 'pr_s2_order', '2'),
(19528, 30, 'pr_s2_desc', ''),
(19529, 30, 'pr_s2_h', ''),
(19530, 30, 'pr_s2_w', ''),
(19531, 30, 'pr_s3_name', ''),
(19532, 30, 'pr_s3_order', '3'),
(19533, 30, 'pr_s3_desc', ''),
(19534, 30, 'pr_s3_h', ''),
(19535, 30, 'pr_s3_w', ''),
(19536, 30, 'pr_s4_name', ''),
(19537, 30, 'pr_s4_order', '4'),
(19538, 30, 'pr_s4_desc', ''),
(19539, 30, 'pr_s4_h', ''),
(19540, 30, 'pr_s4_w', ''),
(19541, 30, 'pr_s5_name', 'room_one_roof'),
(19542, 30, 'pr_s5_order', '5'),
(19543, 30, 'pr_s5_desc', 'room_one_roof_desc'),
(19544, 30, 'pr_s5_h', 'room_one_roof_h'),
(19545, 30, 'pr_s5_w', 'room_one_roof_w'),
(19546, 30, 'pr_s6_name', 'room_one_floor'),
(19547, 30, 'pr_s6_order', '6'),
(19548, 30, 'pr_s6_desc', 'room_one_floor_desc'),
(19549, 30, 'pr_s6_h', 'room_one_floor_h'),
(19550, 30, 'pr_s6_w', 'room_one_floor_w'),
(19551, 30, 'm_materials', ''),
(19552, 30, 'm_name', ''),
(19553, 30, 'm_one', ''),
(19554, 30, 'm_two', ''),
(19555, 30, 'm_three', ''),
(19556, 30, 'm_four', ''),
(19557, 30, 'm_five', ''),
(19558, 30, 's_ladonta_levytyssuunta', ''),
(19559, 30, 's_saumoitus', ''),
(19560, 30, 's_ladontasystem', ''),
(19561, 30, 's_materials', ''),
(19562, 30, 's_rangan_suunta', ''),
(19563, 30, 's_kiinnikkeiden_linjojen_alkupaikka', ''),
(19564, 30, 's_kiinnikelinjan_etaisyydet', ''),
(19565, 30, 's_levytys_levytyksen_katkeaminen', ''),
(19566, 30, 's_levytys_pituus_y', ''),
(19567, 30, 's_levytys_pituus_x', ''),
(19568, 30, 's_levytyksen_suunta', ''),
(19569, 30, 's_lapiviennit', ''),
(19570, 30, 's_levyt_standard', ''),
(19571, 30, 's_jarjestelma', ''),
(19572, 30, 's_olosuhteet', ''),
(19573, 30, 's_olosuhde', ''),
(19574, 30, 's_aukko', ''),
(19575, 30, 's_reika_', ''),
(19576, 30, 's_levy_', ''),
(19577, 30, 's_rankatyypit', ''),
(19578, 30, 's_tyypin_pituudet', ''),
(19579, 30, 's_pystyasennus', ''),
(19580, 30, 's_listat', ''),
(19581, 30, 's_rankojen_sijoittelu', ''),
(19582, 30, 's_users', ''),
(19583, 30, 'pr_step', ''),
(19584, 30, 'pr_recl_msg', ''),
(19585, 30, 'pr_recl_from', ''),
(19586, 30, 'pr_recl_to', ''),
(19587, 30, 'pr_recl_attention', ''),
(19588, 30, 'pr_1_origo', ''),
(19589, 30, 'pr_1_gooddist_w', ''),
(19590, 30, 'pr_1_gooddist_h', ''),
(19591, 30, 'pr_1_1_name', ''),
(19592, 30, 'pr_1_1_dist_x', ''),
(19593, 30, 'pr_1_1_dist_y', ''),
(19594, 30, 'pr_1_1_comments', ''),
(19595, 30, 'pr_2_1_name', ''),
(19596, 30, 'pr_2_1_dist_x', ''),
(19597, 30, 'pr_2_1_dist_y', ''),
(19598, 30, 'pr_2_1_comments', ''),
(19599, 30, 'pr_2_1_h', ''),
(19600, 30, 'pr_2_1_w', ''),
(19601, 30, 'pr_3_1_name', ''),
(19602, 30, 'pr_3_1_dist_x', ''),
(19603, 30, 'pr_3_1_dist_y', ''),
(19604, 30, 'pr_3_1_comments', ''),
(19605, 30, 'pr_3_1_r', ''),
(19606, 30, 'pr_4_1_name', ''),
(19607, 30, 'pr_4_1_num', ''),
(19608, 30, 'pr_4_1_type', ''),
(19609, 30, 'pr_4_1_x', ''),
(19610, 30, 'pr_4_1_y', ''),
(19611, 30, 'pr_4_1_comments', ''),
(19612, 30, 'step', ''),
(19613, 30, 'wall', ''),
(19614, 30, 'room', ''),
(19615, 30, 'settings', ''),
(19616, 30, 'mittapisteet', ''),
(19617, 30, 'aukot', ''),
(19618, 30, 'reijat', ''),
(19619, 30, 'saumat', ''),
(19620, 30, 'levyt', ''),
(19621, 30, 'rangat', ''),
(19622, 30, 'listat', ''),
(19623, 30, 'kokonaisalue', ''),
(19624, 30, 'levytettava_alue', ''),
(19625, 30, 'poisjaava_alue', ''),
(19626, 30, 'keskusmittapiste_cord', ''),
(19627, 30, 'reklamaatiot', ''),
(19628, 30, 'kaupalliset_asiakirjat', ''),
(19629, 30, 'tyomaan_asiakirjat', ''),
(19630, 30, 'arkkitehtisuunnitelmat', ''),
(19631, 30, 'rakennesuunnitelmat', ''),
(19632, 30, 'omat_suunnitelmat', ''),
(19633, 30, 'muut_asiakirjat', ''),
(19849, 31, 'pr_id', '31'),
(19850, 31, 'pr_name', ''),
(19851, 31, 'chosen_jarjestelma', 'Delta'),
(19852, 31, 's_settings', 'DEFAULT'),
(19853, 31, 's_materials', ''),
(19854, 31, 'a_rooms', '[{\"name\": \"  1_M1-2_3 <br> IN_8000 <br> Levytys\",\"positionY\":   1,\"positionX\":   1,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  1_M2-3_3 <br> IN_8000 <br> Levytys\",\"positionY\":   1,\"positionX\":   2,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  1_M3-4_3 <br> IN_8000 <br> Levytys\",\"positionY\":   1,\"positionX\":   3,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  1_M4-4A3 <br> IN_8000 <br> Levytys\",\"positionY\":   1,\"positionX\":   4,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  1_M4-6_3 <br> IN_8000 <br> Levytys\",\"positionY\":   1,\"positionX\":   5,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  1_M1-2_2 <br> IN_8000 <br> Levytys\",\"positionY\":   2,\"positionX\":   1,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  1_M2-3_2 <br> IN_8000 <br> Levytys\",\"positionY\":   2,\"positionX\":   2,\"a_room\": \"  13~problem~1|1~2200|4000~~~~~\",\"b_room\": \"  13~problem~1|1~2200|2200~~~~~\",\"c_room\": \"  13~problem~1|1~2200|4000~~~~~\",\"d_room\": \"  13~problem~1|1~2200|2200~~~~~\",\"k_room\": \"  13~problem~1|1~2200|4000~~~~~\",\"l_room\": \"  13~problem~1|1~2200|4000~~~~~\"},{\"name\": \"  1_M3-4_2 <br> IN_8000 <br> Levytys\",\"positionY\":   2,\"positionX\":   3,\"a_room\": \"  13~problem~1|1~2200|4000~~~~~\",\"b_room\": \"  13~problem~1|1~2200|2200~~~~~\",\"c_room\": \"  13~problem~1|1~2200|4000~~~~~\",\"d_room\": \"  13~problem~1|1~2200|2200~~~~~\",\"k_room\": \"  13~problem~1|1~2200|4000~~~~~\",\"l_room\": \"  13~problem~1|1~2200|4000~~~~~\"},{\"name\": \"  1_M4-4A2 <br> IN_8000 <br> Levytys\",\"positionY\":   2,\"positionX\":   4,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  1_M4-6_2 <br> IN_8000 <br> Levytys\",\"positionY\":   2,\"positionX\":   5,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  1_M1-2_1 <br> IN_8000 <br> Levytys\",\"positionY\":   3,\"positionX\":   1,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  1_M2-3_1 <br> IN_8000 <br> Levytys\",\"positionY\":   3,\"positionX\":   2,\"a_room\": \"  13~problem~1|1~2200|4000~~~~~\",\"b_room\": \"  13~problem~1|1~2200|2200~~~~~\",\"c_room\": \"  13~problem~1|1~2200|4000~~~~~\",\"d_room\": \"  13~problem~1|1~2200|2200~~~~~\",\"k_room\": \"  13~problem~1|1~2200|4000~~~~~\",\"l_room\": \"  13~problem~1|1~2200|4000~~~~~\"},{\"name\": \"  1_M3-4_1 <br> IN_8000 <br> Levytys\",\"positionY\":   3,\"positionX\":   3,\"a_room\": \"  13~problem~1|1~2200|4000~~~~~\",\"b_room\": \"  13~problem~1|1~2200|2200~~~~~\",\"c_room\": \"  13~problem~1|1~2200|4000~~~~~\",\"d_room\": \"  13~problem~1|1~2200|2200~~~~~\",\"k_room\": \"  13~problem~1|1~2200|4000~~~~~\",\"l_room\": \"  13~problem~1|1~2200|4000~~~~~\"},{\"name\": \"  1_M4-4A1 <br> IN_8000 <br> Levytys\",\"positionY\":   3,\"positionX\":   4,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~\"},{\"name\": \"  1_M4-6_1 <br> IN_8000 <br> Levytys\",\"positionY\":   3,\"positionX\":   5,\"a_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"b_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"c_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"d_room\": \"  13~undone~1|1~2200|2200~~~~~\",\"k_room\": \"  13~undone~1|1~2200|4000~~~~~\",\"l_room\": \"  13~undone~1|1~2200|4000~~~~~}}}}}}}}}}}}\"},]'),
(19855, 31, 'b_rooms', '[]'),
(19856, 31, 'c_rooms', '[]'),
(19857, 31, 'd_rooms', ''),
(19858, 31, 'e_rooms', ''),
(19859, 31, 'f_rooms', ''),
(19860, 31, 'g_rooms', ''),
(19861, 31, 'h_rooms', ''),
(19862, 31, 'a_rooms_nowork', ''),
(19863, 31, 'b_rooms_nowork', ''),
(19864, 31, 'c_rooms_nowork', ''),
(19865, 31, 'd_rooms_nowork', ''),
(19866, 31, 'e_rooms_nowork', ''),
(19867, 31, 'f_rooms_nowork', ''),
(19868, 31, 'g_rooms_nowork', ''),
(19869, 31, 'h_rooms_nowork', ''),
(19870, 31, 'step', ''),
(19871, 31, 'wall', ''),
(19872, 31, 'room', ''),
(19873, 31, 'settings', ''),
(19874, 31, 'mittapisteet', ''),
(19875, 31, 'aukot', ''),
(19876, 31, 'reijat', ''),
(19877, 31, 'saumat', ''),
(19878, 31, 'levyt', ''),
(19879, 31, 'rangat', ''),
(19880, 31, 'listat', ''),
(19881, 31, 'kokonaisalue', ''),
(19882, 31, 'levytettava_alue', ''),
(19883, 31, 'poisjaava_alue', ''),
(19884, 31, 'keskusmittapiste_cord', ''),
(19885, 31, 'reklamaatiot', ''),
(19886, 31, 'kaupalliset_asiakirjat', ''),
(19887, 31, 'tyomaan_asiakirjat', ''),
(19888, 31, 'arkkitehtisuunnitelmat', ''),
(19889, 31, 'rakennesuunnitelmat', ''),
(19890, 31, 'omat_suunnitelmat', ''),
(19891, 31, 'muut_asiakirjat', ''),
(20021, 30, 'a_rooms_title', 'RAPPU A'),
(20022, 30, 'b_rooms_title', 'RAPPU'),
(20023, 30, 'c_rooms_title', 'RAPPU'),
(20024, 30, 'd_rooms_title', 'RAPPU'),
(20025, 30, 'e_rooms_title', 'RAPPU'),
(20026, 30, 'f_rooms_title', 'RAPPU'),
(20027, 30, 'g_rooms_title', 'RAPPU'),
(20028, 30, 'h_rooms_title', 'RAPPU'),
(20029, 31, 'a_rooms_title', 'Julkisivu'),
(20030, 31, 'b_rooms_title', 'RAPPU'),
(20031, 31, 'c_rooms_title', 'RAPPU'),
(20032, 31, 'd_rooms_title', 'RAPPU'),
(20033, 31, 'e_rooms_title', 'RAPPU'),
(20034, 31, 'f_rooms_title', 'RAPPU'),
(20035, 31, 'g_rooms_title', 'RAPPU'),
(20036, 31, 'h_rooms_title', 'RAPPU'),
(20088, 32, 'pr_id', '32'),
(20089, 32, 'pr_name', 'Basso'),
(20090, 32, 'chosen_jarjestelma', 'Delta'),
(20091, 32, 's_settings', 'DEFAULT'),
(20092, 32, 's_materials', ''),
(20093, 32, 'a_rooms', '[{\"name\": \"  Katu 1 <br>12A<br>Vihreä\",\"positionY\":12,\"positionX\":1,\"a_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"b_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"c_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"d_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"k_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"l_room\": \"  13~l5_c~1|1~2200|4000~~~~~\"},{\"name\": \"  Katu 1 <br>12B<br>Vihreä\",\"positionY\":12,\"positionX\":2,\"a_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"b_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"c_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"d_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"k_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"l_room\": \"  13~l5_c~1|1~2200|4000~~~~~\"},{\"name\": \"  Katu 1 <br>12C<br>Vihreä\",\"positionY\":12,\"positionX\":3,\"a_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"b_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"c_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"d_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"k_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"l_room\": \"  13~l5_c~1|1~2200|4000~~~~~\"},{\"name\": \"  Katu 1 <br>11A<br>Vihreä\",\"positionY\":11,\"positionX\":1,\"a_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"b_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"c_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"d_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"k_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"l_room\": \"  13~l5_c~1|1~2200|4000~~~~~\"},{\"name\": \"  Katu 1 <br>11B<br>Vihreä\",\"positionY\":11,\"positionX\":2,\"a_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"b_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"c_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"d_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"k_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"l_room\": \"  13~l5_c~1|1~2200|4000~~~~~\"},{\"name\": \"  Katu 1 <br>11C<br>Vihreä\",\"positionY\":11,\"positionX\":3,\"a_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"b_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"c_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"d_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"k_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"l_room\": \"  13~l5_c~1|1~2200|4000~~~~~\"},{\"name\": \"  Katu 1 <br>10A<br>Vihreä\",\"positionY\":10,\"positionX\":1,\"a_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"b_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"c_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"d_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"k_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"l_room\": \"  13~l5_c~1|1~2200|4000~~~~~\"},{\"name\": \"  Katu 1 <br>10B<br>Vihreä\",\"positionY\":10,\"positionX\":2,\"a_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"b_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"c_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"d_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"k_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"l_room\": \"  13~l5_c~1|1~2200|4000~~~~~\"},{\"name\": \"  Katu 1 <br>10C<br>Vihreä\",\"positionY\":10,\"positionX\":3,\"a_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"b_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"c_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"d_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"k_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"l_room\": \"  13~l5_c~1|1~2200|4000~~~~~\"},{\"name\": \"  Katu_1<br>9B<br>Vihreä\",\"positionY\":9,\"positionX\":2,\"a_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"b_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"c_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"d_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"k_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"l_room\": \"  13~l5_c~1|1~2200|4000~~~~~\"},{\"name\": \"  Katu_1<br>8B<br>Vihreä\",\"positionY\":8,\"positionX\":2,\"a_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"b_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"c_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"d_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"k_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"l_room\": \"  13~l5_c~1|1~2200|4000~~~~~\"},{\"name\": \"  Katu_1<br>7B<br>Vihreä\",\"positionY\":7,\"positionX\":2,\"a_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"b_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"c_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"d_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"k_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"l_room\": \"  13~l5_c~1|1~2200|4000~~~~~\"},{\"name\": \"  Katu_1<br>6A<br>Vihreä\",\"positionY\":6,\"positionX\":1,\"a_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"b_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"c_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"d_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"k_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"l_room\": \"  13~l5_c~1|1~2200|4000~~~~~\"},{\"name\": \"  Katu_1<br>6B<br>Vihreä\",\"positionY\":6,\"positionX\":2,\"a_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"b_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"c_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"d_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"k_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"l_room\": \"  13~l5_c~1|1~2200|4000~~~~~\"},{\"name\": \"  Katu_1<br>6C<br>Vihreä\",\"positionY\":6,\"positionX\":3,\"a_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"b_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"c_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"d_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"k_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"l_room\": \"  13~l5_c~1|1~2200|4000~~~~~\"},{\"name\": \"  Katu_1<br>5B<br>Vihreä\",\"positionY\":5,\"positionX\":2,\"a_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"b_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"c_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"d_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"k_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"l_room\": \"  13~l5_c~1|1~2200|4000~~~~~\"},{\"name\": \"  Katu_1<br>4B<br>Vihreä\",\"positionY\":4,\"positionX\":2,\"a_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"b_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"c_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"d_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"k_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"l_room\": \"  13~l5_c~1|1~2200|4000~~~~~\"},{\"name\": \"  Katu_1<br>3A<br>Vihreä\",\"positionY\":3,\"positionX\":1,\"a_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"b_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"c_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"d_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"k_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"l_room\": \"  13~l5_c~1|1~2200|4000~~~~~\"},{\"name\": \"  Katu_1<br>3B<br>Vihreä\",\"positionY\":3,\"positionX\":2,\"a_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"b_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"c_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"d_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"k_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"l_room\": \"  13~l5_c~1|1~2200|4000~~~~~\"},{\"name\": \"  Katu_1<br>3C<br>Vihreä\",\"positionY\":3,\"positionX\":3,\"a_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"b_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"c_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"d_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"k_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"l_room\": \"  13~l5_c~1|1~2200|4000~~~~~\"},{\"name\": \"  Katu_1<br>2B<br>Vihreä\",\"positionY\":2,\"positionX\":2,\"a_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"b_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"c_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"d_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"k_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"l_room\": \"  13~l5_c~1|1~2200|4000~~~~~\"},{\"name\": \"  Katu_1<br>1B<br>Vihreä\",\"positionY\":1,\"positionX\":2,\"a_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"b_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"c_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"d_room\": \"  13~l5_c~1|1~2200|2200~~~~~\",\"k_room\": \"  13~l5_c~1|1~2200|4000~~~~~\",\"l_room\": \"  13~l5_c~1|1~2200|4000~~~~~}}}}}\"}]');
INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES
(20094, 32, 'b_rooms', '[{\"name\": \"  Katu 2 <br>12B<br>Sininen\",\"positionY\":12,\"positionX\":2,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}\"},{\"name\": \"  Katu 2 <br>12D<br>Sininen\",\"positionY\":12,\"positionX\":4,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}\"},{\"name\": \"  Katu 2 <br>11B<br>Sininen\",\"positionY\":11,\"positionX\":2,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}\"},{\"name\": \"  Katu 2 <br>11D<br>Sininen\",\"positionY\":11,\"positionX\":4,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}\"},{\"name\": \"  Katu 2 <br>10B<br>Sininen\",\"positionY\":10,\"positionX\":2,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}\"},{\"name\": \"  Katu 2 <br>10D<br>Sininen\",\"positionY\":10,\"positionX\":4,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}\"},{\"name\": \"Katu_2<br>9A<br>Sininen\",\"positionY\":9,\"positionX\":1,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}\"},{\"name\": \"Katu_2<br>9B<br>Sininen\",\"positionY\":9,\"positionX\":2,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}\"},{\"name\": \"Katu_2<br>9C<br>Sininen\",\"positionY\":9,\"positionX\":3,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}\"},{\"name\": \"Katu_2<br>9D<br>Sininen\",\"positionY\":9,\"positionX\":4,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}\"},{\"name\": \"Katu_2<br>9E<br>Sininen\",\"positionY\":9,\"positionX\":5,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}\"},{\"name\": \"Katu_2<br>8B<br>Sininen\",\"positionY\":8,\"positionX\":2,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}\"},{\"name\": \"Katu_2<br>8D<br>Sininen\",\"positionY\":8,\"positionX\":4,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}\"},{\"name\": \"Katu_2<br>7B<br>Sininen\",\"positionY\":7,\"positionX\":2,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}\"},{\"name\": \"Katu_2<br>7D<br>Sininen\",\"positionY\":7,\"positionX\":4,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}\"},{\"name\": \"Katu_2<br>6A<br>Sininen\",\"positionY\":6,\"positionX\":1,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}\"},{\"name\": \"Katu_2<br>6B<br>Sininen\",\"positionY\":6,\"positionX\":2,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}\"},{\"name\": \"Katu_2<br>6C<br>Sininen\",\"positionY\":6,\"positionX\":3,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}\"},{\"name\": \"Katu_2<br>6D<br>Sininen\",\"positionY\":6,\"positionX\":4,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}\"},{\"name\": \"Katu_2<br>6E<br>Sininen\",\"positionY\":6,\"positionX\":5,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}\"},{\"name\": \"Katu_2<br>5B<br>Sininen\",\"positionY\":5,\"positionX\":2,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}\"},{\"name\": \"Katu_2<br>5D<br>Sininen\",\"positionY\":5,\"positionX\":4,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}\"},{\"name\": \"Katu_2<br>4B<br>Sininen\",\"positionY\":4,\"positionX\":2,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}\"},{\"name\": \"Katu_2<br>4D<br>Sininen\",\"positionY\":4,\"positionX\":4,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}\"},{\"name\": \"Katu_2<br>3A<br>Sininen\",\"positionY\":3,\"positionX\":1,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}\"},{\"name\": \"Katu_2<br>3B<br>Sininen\",\"positionY\":3,\"positionX\":2,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}\"},{\"name\": \"Katu_2<br>3C<br>Sininen\",\"positionY\":3,\"positionX\":3,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}\"},{\"name\": \"Katu_2<br>3D<br>Sininen\",\"positionY\":3,\"positionX\":4,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}\"},{\"name\": \"Katu_2<br>3E<br>Sininen\",\"positionY\":3,\"positionX\":5,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}\"},{\"name\": \"Katu_2<br>2B<br>Sininen\",\"positionY\":2,\"positionX\":2,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}\"},{\"name\": \"Katu_2<br>2D<br>Sininen\",\"positionY\":2,\"positionX\":4,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}\"},{\"name\": \"Katu_2<br>1B<br>Sininen\",\"positionY\":1,\"positionX\":2,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}\"},{\"name\": \"Katu_2<br>1D<br>Sininen\",\"positionY\":1,\"positionX\":4,\"a_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"b_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"c_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"d_room\": \" 13~l2_c~1|1~2200|2200~~~~~\",\"k_room\": \" 13~l2_c~1|1~2200|4000~~~~~\",\"l_room\": \" 13~l2_c~1|1~2200|4000~~~~~}}}}}\"}]'),
(20095, 32, 'c_rooms', '[{\"name\":\"Katu 3 <br>15B<br>Vihreä \",\"positionX\":15,\"positionY\":2,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>15D<br>Vihreä \",\"positionX\":15,\"positionY\":4,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>14B<br>Vihreä \",\"positionX\":14,\"positionY\":2,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>14D<br>Vihreä \",\"positionX\":14,\"positionY\":4,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>13B<br>Vihreä \",\"positionX\":13,\"positionY\":2,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>13D<br>Vihreä \",\"positionX\":13,\"positionY\":4,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>12A<br>Vihreä \",\"positionX\":12,\"positionY\":1,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>12B<br>Vihreä \",\"positionX\":12,\"positionY\":2,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>12C<br>Vihreä \",\"positionX\":12,\"positionY\":3,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>12D<br>Vihreä \",\"positionX\":12,\"positionY\":4,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>12E<br>Vihreä \",\"positionX\":12,\"positionY\":5,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>11B<br>Vihreä \",\"positionX\":11,\"positionY\":2,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>11D<br>Vihreä \",\"positionX\":11,\"positionY\":4,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>10B<br>Vihreä \",\"positionX\":10,\"positionY\":2,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>10D<br>Vihreä \",\"positionX\":10,\"positionY\":4,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>9A<br>Vihreä \",\"positionX\":9,\"positionY\":1,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>9B<br>Vihreä \",\"positionX\":9,\"positionY\":2,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>9C<br>Vihreä \",\"positionX\":9,\"positionY\":3,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>9D<br>Vihreä \",\"positionX\":9,\"positionY\":4,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>9E<br>Vihreä \",\"positionX\":9,\"positionY\":5,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>8B<br>Vihreä \",\"positionX\":8,\"positionY\":2,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>8D<br>Vihreä \",\"positionX\":8,\"positionY\":4,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>7B<br>Vihreä \",\"positionX\":7,\"positionY\":2,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>7D<br>Vihreä \",\"positionX\":7,\"positionY\":4,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>6A<br>Vihreä \",\"positionX\":6,\"positionY\":1,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>6B<br>Vihreä \",\"positionX\":6,\"positionY\":2,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>6C<br>Vihreä \",\"positionX\":6,\"positionY\":3,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>6D<br>Vihreä \",\"positionX\":6,\"positionY\":4,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>6E<br>Vihreä \",\"positionX\":6,\"positionY\":5,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>5B<br>Vihreä \",\"positionX\":5,\"positionY\":2,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>5D<br>Vihreä \",\"positionX\":5,\"positionY\":4,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>4B<br>Vihreä \",\"positionX\":4,\"positionY\":2,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>4D<br>Vihreä \",\"positionX\":4,\"positionY\":4,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>3A<br>Vihreä \",\"positionX\":3,\"positionY\":1,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>3B<br>Vihreä \",\"positionX\":3,\"positionY\":2,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>3C<br>Vihreä \",\"positionX\":3,\"positionY\":3,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>3D<br>Vihreä \",\"positionX\":3,\"positionY\":4,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>3E<br>Vihreä \",\"positionX\":3,\"positionY\":5,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>2B<br>Vihreä \",\"positionX\":2,\"positionY\":2,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>2D<br>Vihreä \",\"positionX\":2,\"positionY\":4,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>1B<br>Vihreä \",\"positionX\":1,\"positionY\":2,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"},{\"name\":\"Katu 3 <br>1D<br>Vihreä \",\"positionX\":1,\"positionY\":4,\"a_room\":\"13~undone~1|1~2200|4000~~~~~\",\"b_room\":\"13~undone~1|1~2200|2200~~~~~\",\"c_room\":\"13~undone~1|1~2200|4000~~~~~\",\"d_room\":\"13~undone~1|1~2200|2200~~~~~\",\"k_room\":\"13~undone~1|1~2200|4000~~~~~\",\"l_room\":\"13~undone~1|1~2200|4000~~~~~\"}]'),
(20096, 32, 'd_rooms', '[]'),
(20097, 32, 'e_rooms', '[]'),
(20098, 32, 'f_rooms', '[]'),
(20099, 32, 'g_rooms', '[]'),
(20100, 32, 'h_rooms', '[]'),
(20101, 32, 'a_rooms_title', 'KENTTÄ A'),
(20102, 32, 'b_rooms_title', 'KENTTÄ B'),
(20103, 32, 'c_rooms_title', 'RAPPU C'),
(20104, 32, 'd_rooms_title', 'RAPPU '),
(20105, 32, 'e_rooms_title', 'RAPPU '),
(20106, 32, 'f_rooms_title', 'RAPPU '),
(20107, 32, 'g_rooms_title', 'RAPPU '),
(20108, 32, 'h_rooms_title', 'RAPPU '),
(20109, 32, 'a_rooms_nowork', ''),
(20110, 32, 'b_rooms_nowork', ''),
(20111, 32, 'c_rooms_nowork', ''),
(20112, 32, 'd_rooms_nowork', ''),
(20113, 32, 'e_rooms_nowork', ''),
(20114, 32, 'f_rooms_nowork', ''),
(20115, 32, 'g_rooms_nowork', ''),
(20116, 32, 'h_rooms_nowork', ''),
(20117, 32, 'step', ''),
(20118, 32, 'wall', ''),
(20119, 32, 'room', ''),
(20120, 32, 'settings', ''),
(20121, 32, 'mittapisteet', ''),
(20122, 32, 'aukot', ''),
(20123, 32, 'reijat', ''),
(20124, 32, 'saumat', ''),
(20125, 32, 'levyt', ''),
(20126, 32, 'rangat', ''),
(20127, 32, 'listat', ''),
(20128, 32, 'kokonaisalue', ''),
(20129, 32, 'levytettava_alue', ''),
(20130, 32, 'poisjaava_alue', ''),
(20131, 32, 'keskusmittapiste_cord', ''),
(20132, 32, 'reklamaatiot', ''),
(20133, 32, 'kaupalliset_asiakirjat', ''),
(20134, 32, 'tyomaan_asiakirjat', ''),
(20135, 32, 'arkkitehtisuunnitelmat', ''),
(20136, 32, 'rakennesuunnitelmat', ''),
(20137, 32, 'omat_suunnitelmat', ''),
(20138, 32, 'muut_asiakirjat', ''),
(20190, 30, 'statuses__text', 'KESKEN~~EI TYÖTÄ~~ONGELMA~~KRIITTINEN ONGELMA~~L5 TILATTU~~L5 TYÖMAALLA~~L5 ASENNETTU~~L5 HYVÄKSYTTY~~L4 TILATTU~~L4 TYÖMAALLA~~L4 ASENNETTU~~L4 HYVÄKSYTTY~~L3 TILATTU~~L3 TYÖMAALLA~~L3 ASENNETTU~~L3 HYVÄKSYTTY~~L2 TILATTU~~L2 TYÖMAALLA~~L2 ASENNETTU~~L2 HYVÄKSYTTY~~L1 TILATTU~~L1 TYÖMAALLA~~L1 ASENNETTU~~L1 HYVÄKSYTTY~~'),
(20191, 31, 'statuses__text', 'KESKEN~~EI TYÖTÄ~~ONGELMA~~KRIITTINEN ONGELMA~~L5 TILATTU~~L5 TYÖMAALLA~~L5 ASENNETTU~~L5 HYVÄKSYTTY~~L4 TILATTU~~L4 TYÖMAALLA~~L4 ASENNETTU~~L4 HYVÄKSYTTY~~L3 TILATTU~~L3 TYÖMAALLA~~L3 ASENNETTU~~L3 HYVÄKSYTTY~~L2 TILATTU~~L2 TYÖMAALLA~~L2 ASENNETTU~~L2 HYVÄKSYTTY~~L1 TILATTU~~L1 TYÖMAALLA~~L1 ASENNETTU~~L1 HYVÄKSYTTY'),
(20192, 32, 'statuses__text', 'KESKEN~~EI TYÖTÄ~~ONGELMA~~KRIITTINEN ONGELMA~~L5 TILATTU~~L5 TYÖMAALLA~~L5 ASENNETTU~~L5 HYVÄKSYTTY~~L4 TILATTU~~L4 TYÖMAALLA~~L4 ASENNETTU~~L4 HYVÄKSYTTY~~L3 TILATTU~~L3 TYÖMAALLA~~L3 ASENNETTU~~L3 HYVÄKSYTTY~~L2 TILATTU~~L2 TYÖMAALLA~~L2 ASENNETTU~~L2 HYVÄKSYTTY~~L1 TILATTU~~L1 TYÖMAALLA~~L1 ASENNETTU~~L1 HYVÄKSYTTY~~');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int NOT NULL,
  `title` varchar(300) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `link` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `project_type` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci DEFAULT NULL,
  `user` text CHARACTER SET latin1 COLLATE latin1_swedish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_swedish_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `created_at`, `link`, `project_type`, `user`) VALUES
(30, 'Palsbo L11', '2023-10-31', '', 'after_measure_comment', 'Marko Virtanen'),
(31, 'Pihlajalinna', '2023-11-07', '', '', 'Marko Virtanen'),
(32, 'Basso', '2023-11-13', '', '', 'Marko Virtanen');

-- --------------------------------------------------------

--
-- Table structure for table `rewritelib`
--

CREATE TABLE `rewritelib` (
  `slug` varchar(2555) NOT NULL DEFAULT '',
  `slugto` varchar(2555) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rewritelib`
--

INSERT INTO `rewritelib` (`slug`, `slugto`) VALUES
('palsbo', '/post.php?id=30&user=valinta'),
('pihlajalinna', '/post.php?id=31&user=valinta'),
('basso', '/post.php?id=32&user=valinta'),
('trump-tower', '/post.php?id=33&user=valinta');

-- --------------------------------------------------------

--
-- Table structure for table `roomwalls`
--

CREATE TABLE `roomwalls` (
  `id` int NOT NULL,
  `project_id` int NOT NULL,
  `arak` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `wall` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asjarj` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '',
  `hidden` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roomwalls`
--

INSERT INTO `roomwalls` (`id`, `project_id`, `arak`, `wall`, `asjarj`, `name`, `description`, `hidden`) VALUES
(52, 30, 'l11a100aporrasyleinen', 'd', NULL, NULL, '', 0),
(53, 30, 'l11a100aporrasyleinen', 'c', NULL, NULL, '', 0),
(54, 30, 'l11a100aporrasyleinen', 'b', NULL, NULL, '', 0),
(55, 30, 'l11a101bkeittiofinstar', 'k', NULL, NULL, '', 0),
(56, 30, 'l11a107bpukuhuonaiset', 'a', NULL, NULL, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `settingsmeta`
--

CREATE TABLE `settingsmeta` (
  `meta_id` int NOT NULL,
  `id` int NOT NULL,
  `meta_key` varchar(255) NOT NULL,
  `meta_value` text CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `settingsmeta`
--

INSERT INTO `settingsmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES
(3772, 100, 's_settings', '[[\"R1\",\"Pistorasia\",\"30\",\"showoneeditor\"],[\"R2\",\"Valorasia\",\"50\",\"\"],[\"R3\",\"Sahkorasia\",\"30\",\"showoneeditor\"],[\"R4\",\"Viemari 32\",\"20\",\"\"],[\"R5\",\"Viemari50\",\"60\",\"\"],[\"R6\",\"Viemari 75\",\"45\",\"\"],[\"R7\",\"Viemari 100\",\"55\",\"showoneeditor\"],[\"R8\",\"IV100\",\"55\",\"\"],[\"R9\",\"IV 160\",\"\",\"\"],[\"R10\",\"IV200\",\"85\",\"\"],[\"R11\",\"IV 250\",\"105\",\"\"],[\"R12\",\"IV315\",\"130\",\"\"],[\"R13\",\"Nelio 100x100\",\"165\",\"showoneeditor\"],[\"R14\",\"Nelio 100x100\",\"\",\"\"],[\"R15\",\"Nelio 500x500\",\"\",\"\"],\"0\",\"2\",\"2\",\"1\",\"1\"]'),
(3773, 100, 's_materials', '[on,TRA36.3.5_SA,1525,3050,1525,3050,6,0,14825120946.jpg,]~~[on,TRA03.1.0_SA_VT_B06_3650x1860,1860,3650,1860,3650,6,0,015059656-industrial-grey.jpg,]~~[on,TRA34.8.1_SA_VT_B06_3050x1530,1530,3050,1530,3050,6,0,240559653-eucalyptus-green.jpg,]~~[,FORMICA,1525,3660,1525,3660,6,0,,]~~[,Trespa,2550,1860,2550,1860,6,0,,]~~[,Trespa,3050,1525,3050,1525,6,0,,]~~[,Trespa,3660,1860,3660,1860,6,0,,]~~[,Trespa,4150,2150,4150,2150,6,0,,]~~[,Steni,1300,2450,1300,2450,6,0,,]~~[,Steni,1300,3050,1300,3050,6,0,,]~~[,Steni,1300,3660,1300,3660,6,0,,]~~[,Steni,1525,3660,1525,3660,6,0,,]~~[,,,,,,,,,]'),
(4474, 100, 'aukko_mallit', '[Ovi vasen reuna,25,0,,-25 MOD korkeus,,-25 MOD korkeus - OVIAUKON KORKEUS MOD]~~[Ovi oikea reuna,25,0,,-25 MOD korkeus,,-25 MOD korkeus - OVIAUKON KORKEUS MOD]~~[Ovi Yläreuna,25,0, ,-10 MOD LEVEYS,,]~~[Ovi alareuna,25,0,,−10,,]~~[Ikkuna vasen reuna,25,0,,,,]~~[Ikkuna oikea  reuna,25,0,,,,]~~[Ikkuna ylä reuna,25,0,,,,]~~[Ikkuna ala reuna,25,0,,,,]~~[Pilari vasen reuna,25,0,,,,]~~[Pilari oikea reuna,25,0,,,,]~~[Pilari ylä reuna,25,0,,,,]~~[Pilari ala reuna,25,0,,,,]~~[Palkki vasen reuna,25,0,,,,]~~[Palkki oikea reuna,25,0,,,,]~~[Palkki ylä reuna,25,0,,,,]~~[Palkki ala reuna,25,0,,,,]~~[Ilmastointi vasen reuna,25,0,,,,]~~[Ilmastointi oikea reuna,25,0,,,,]~~[Ilmastointi ylä reuna,25,0,,,,]~~[Ilmastointi ala reuna,25,0,,,,]~~[,,,,,,]~~[,,,,,,]'),
(20193, 100, 's_systems', '[on,Classic,W22_ST_CLASSIC,Näkyvä kiinnike,]~~[,Classic VHB,W22_ST_CLASSIC,Näkyvä kiinnike 123,]~~[,Alpha Pysty Y,,Urat reunassa,]~~[,Alpha Vaaka Y,,Urat reunassa,]~~[,Beta,,Teipattu levy,]~~[,Gamma 5,,Takakiinnike,]~~[,Gamma 6,,Takakiinnike,]~~[,Gamma KEIL,,Takakiinnike,]'),
(20194, 100, 's_levytysreunat', '[,Vasenreuna moduulista,0,A24 ,A24,,,,MOD korkeus -pystysauman paksuus,0,0,0,%LSAU%/2,A22,]~~[on,Oikereuna moduulista,12,A24 ,A24,,,,MOD korkeus -pystysauman paksuus,0,0,0,0,A22,]~~[on,Yläreuna moduulista,25,A24 ,A29,,,,MOD leveys - vaakasauman paksuus,0,0,0,0,A22,]~~[,Alareuna moduulista,0,A24 ,A28,,,,MOD leveys - vaakasauman paksuus,%LSAU%/2,0,0,0,A22,]'),
(20196, 100, 's_rangat', '[,Hatturanka XS 25/25/25,A20A,,Alumiini,Anodisoitu ,Luonnon anodisointi,,Hattu , A20,65,20,,0_32.5_65,2400,3000,3600,mod-25,]~~[,Hatturanka S 25/20/40/20/25,A21A,,Alumiini,Anodisoitu ,Luonnon anodisointi,,Hattu , A20,90,20,,0_25_65_90,2400,3000,3600,mod-25,]~~[,Hatturanka M 25/20/65/20/25,A22A,,Alumiini,Anodisoitu ,Luonnon anodisointi,,Hattu , A20,115,20,,0_25_62.5_90_115,2400,3000,3600,mod-25,]~~[,Hatturanka L 25/20/90/20/25,A23A,,Alumiini,Anodisoitu ,Luonnon anodisointi,,Hattu , A20,140,20,,0_25_70_115_140,2400,3000,3600,mod-25,]~~[,Hatturanka XL 25/20/115/20/25,A24A,,Alumiini,Anodisoitu ,Luonnon anodisointi,,Hattu , A20,165,20,,0_25_82.5_140_165,2400,3000,3600,mod-25,]~~[,Alaranka J-profiili 55/20/15,A25A,,Alumiini,Anodisoitu ,Luonnon anodisointi,,J-ranka, A20,55,20,,0_15_55,2400,3000,3600,mod-10,]~~[,Yläranka J-profiili 55/20/15,A26A,,Alumiini,Anodisoitu ,Luonnon anodisointi,,J-ranka, A20,55,20,,0_15_55,2400,3000,3600,mod-10,]~~[,Pääteranka P-profiili 0_25_20_40_25,A27A,,Alumiini,Anodisoitu ,Luonnon anodisointi,,P-ranka , A20,60,20,,0_25_60,2400,3000,3600,mod-10,]~~[,L2B yhdistyranka 25/20/40/20/25,A28A,,Alumiini,Anodisoitu ,Luonnon anodisointi,,Hattu , A20,90,20,,0_25_65_90,2400,3000,3600,mod-25,]~~[,,,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,,,]'),
(20198, 100, 's_reikaframe', '[ba-bd,]~~[be-bh,]~~[bi-bl,dust]~~[bm-bp,]~~[bq-bt,frame]~~[bu-bx,]'),
(20199, 100, 's_lapiviennit', '[on,R1,Pistorasia,30,,]~~[on,R2,Valorasia,50,,]~~[,R3,Sahkorasia,30,,]~~[,R4,Viemari 32,20,,]~~[,R5,Viemari50,60,,]~~[,R6,Viemari 75,45,,]~~[,R7,Viemari 100,55,,]~~[,R8,IV100,55,,]~~[,R9,IV 160,0,,]~~[,R10,IV200,85,,]~~[,R11,IV 250,105,,]~~[,R12,IV315,130,,]~~[on,R13,Nelio 100x100,100,100,]~~[,R14,Nelio 100x100,,,]~~[,R15,Nelio 500x500,,,]'),
(20200, 100, 's_rangat_1', '[on,Saumaranka ,A20A,,Alumiini,,Anodisoitu ,Luonnon anodisointi,,Pysty/Vaaka,-25,Pystymitasta,]~~[on,Väliranka ,A21A,,Alumiini,,Anodisoitu ,Luonnon anodisointi,,Pysty/Vaaka,-25,Pystymitasta,]~~[,Alueen alareuna ,A25A,A23_EC,Alumiini,,Anodisoitu ,Luonnon anodisointi,,Vaaka,Vähennä sauma,MOD leveysmitasta -sauma,]~~[,Alueen yläreuna ,A26A,A26_EC,Alumiini,,Anodisoitu ,Luonnon anodisointi,,Vaaka,Vähennä sauma,MOD leveysmitasta -sauma,]~~[on,Alueen vasenreuna ,A27A,A27_ST ,,,,,S0900-N,Pysty,Vähennä sauma,MOD korkeusmitasta -sauma,]~~[on,Alueen oikeareuna ,A27A,A27_ST ,Alumiini,,Anodisoitu ,Luonnon anodisointi,,Pysty,Vähennä sauma,MOD korkeusmitasta -sauma,]'),
(20201, 100, 's_rangat_2', '[,Saumaranka ,A20A,,,,,,,Pysty/Vaaka,-25,Pystymitasta,]~~[,Väliranka ,A21A,,Alumiini,,Anodisoitu ,Luonnon anodisointi,,Pysty/Vaaka,-25,Pystymitasta,]~~[,Alueen alareuna ,A25A,,Alumiini,,Anodisoitu ,Luonnon anodisointi,,Vaaka,Vähennä sauma,Leveysmitasta-sauma,]~~[,Alueen yläreuna ,A26A,,Alumiini,,Anodisoitu ,Luonnon anodisointi,,Vaaka,Vähennä sauma,Leveysmitasta-sauma,]~~[,Alueen vasenreuna ,A27A,,Alumiini,,Anodisoitu ,Luonnon anodisointi,,Pysty,Vähennä sauma,Korkeusmitasta-sauma,]~~[,Alueen oikeareuna ,A27A,,,,,,,Pysty,Vähennä sauma,Korkeusmitasta-sauma,]'),
(20202, 100, 's_rangat_3', '[,Saumaranka ,,,,,,,,,,,]~~[,Väliranka ,,,,,,,,,,,]~~[,Alueen alareuna ,,,,,,,,,,,]~~[,Alueen yläreuna  ,,,,,,,,,,,]~~[,Alueen vasenreuna ,,,,,,,,,,,]~~[,Alueen oikeareuna ,,,,,,,,,,,]'),
(20203, 100, 's_rangat_4', '[,Saumaranka ,,,,,,,,,,,]~~[,Väliranka ,,,,,,,,,,,]~~[on,Alueen alareuna ,A25A,A23_EC,Alumiini,,Anodisoitu ,Luonnon anodisointi,,Vaaka,Vähennä sauma,MOD leveysmitasta -sauma,]~~[on,Alueen yläreuna ,A26A,A26_EC,Alumiini,,Anodisoitu ,Luonnon anodisointi,,Vaaka,Vähennä sauma,MOD leveysmitasta -sauma,]~~[,Alueen vasenreuna ,,,,,,,,,,,]~~[,Alueen oikeareuna ,,,,,,,,,,,]~~[,,,,,,,,,,,,]'),
(20204, 100, 's_rangat_5', '[,Saumaranka ,,,,,,,,,,,]~~[,Väliranka ,A21A,,Alumiini,,Anodisoitu ,Luonnon anodisointi,,Vaaka,Vähennä sauma,Leveysmitasta-sauma,]~~[,Alueen alareuna ,,,,,,,,,,,]~~[,Alueen yläreuna ,,,,,,,,,,,]~~[,Alueen vasenreuna ,,,,,,,,,,,]~~[,Alueen oikeareuna ,,,,,,,,,,,]'),
(20205, 100, 's_rangat_6', '[,Saumaranka ,,,,,,,,,,,]~~[,Väliranka ,,,,,,,,,,,]~~[,Alueen alareuna ,,,,,,,,,,,]~~[,Alueen yläreuna ,,,,,,,,,,,]~~[,Alueen vasenreuna ,,,,,,,,,,,]~~[,Alueen oikeareuna ,,,,,,,,,,,]'),
(20206, 100, 's_saumasuunta', 'levytys_pystyyn'),
(20207, 100, 's_saumatyyppi', 'oik~~yla'),
(20208, 100, 's_saumakulku', 'yli~~yli'),
(20209, 100, 's_saumatpysty', '[,Testi,10,,,]~~[,Testi,10,,,]~~[,Testi,10,,,]~~[,Testi,10,,,]~~[on,Testi,10,,,]~~[,Testi,10,,,]'),
(20210, 100, 's_saumatvaaka', '[on,Testi,10,Teräs,-,]~~[,Testi,8,Teräs,-,]~~[,Testi,10,Teräs,-,]~~[,Testi,10,Teräs,-,]~~[,Testi,10,Teräs,-,]~~[,testi 123,11,Testi 123,1,]~~[,testi 123,12,Testi 123 ,2,]~~[,,,,,]'),
(20211, 100, 's_aukot_1', '[Ovi vasen reuna,0,-25,,-25 MOD korkeus,,,,,]~~[Ovi oikea reuna,25,0,,-25 MOD korkeus,,,,,]~~[Ovi Yläreuna,25,0,,-10 MOD LEVEYS,,,,,]~~[Ovi alareuna,25,0,,-10,,,,,]~~[Ovi vasen reuna,0,0,A23,,,,,,]~~[Ovi oikea reuna,0,0,A23,,,,,,]~~[Ovi Yläreuna,0,0,A23,,,,,,]~~[Ovi alareuna,0,0,A23,,,,,,]'),
(20212, 100, 's_aukot_2', '[Ikkuna alareuna,0,-25,,,,,,,]~~[Ikkuna yläreuna,25,0,,,,,,,]~~[Ikkuna vasen reuna,25,0,,,,,,,]~~[Ikkuna oikea reuna,25,0,,,,,,,]~~[Ikkuna alareuna,0,0,,,,,,,]~~[Ikkuna yläreuna,0,0,,,,,,,]~~[Ikkuna vasen reuna,0,0,,,,,,,]~~[Ikkuna oikea reuna,0,0,,,,,,,]'),
(20213, 100, 's_aukot_3', '[Pilari alareuna,0,-25,,,,,,,]~~[Pilari yläreuna,25,0,,,,,,,]~~[Pilari vasen reuna,25,0,,,,,,,]~~[Pilari oikea reuna,25,0,,,,,,,]~~[Pilari alareuna,0,0,,,,,,,]~~[Pilari yläreuna,0,0,,,,,,,]~~[Pilari vasen reuna,0,0,,,,,,,]~~[Pilari oikea reuna,0,0,,,,,,,]'),
(20214, 100, 's_aukot_4', '[Palkki alareuna,0,-25,,,,,,,]~~[Palkki yläreuna,25,0,,,,,,,]~~[Palkki vasen reuna,25,0,,,,,,,]~~[Palkki oikea reuna,25,0,,,,,,,]\n'),
(20215, 100, 's_aukot_5', '[Ilmastointi alareuna,0,-25,,,,,,,]~~[Ilmastointi yläreuna,25,0,,,,,,,]~~[Ilmastointi vasen reuna,25,0,,,,,,,]~~[Ilmastointi oikea reuna,25,0,,,,,,,]\n'),
(20217, 100, 's_listatpysty', '[on,Saumaranka ,Pysty / Vaaka,-25,Pystymitasta,,,,,,,,20-23,]~~[on,Väliranka ,Pysty / Vaaka,,,,,,,,,,24,]~~[on,Alueen alareuna ,Vaaka,,,,,,,,,,24-27,]~~[on,Alueen yläreuna ,Vaaka,,,,,,,,,,24-27,]~~[,Alueen vasenreuna ,Pysty,,,,,,,,,,24-27,]~~[,Alueen oikeareuna ,Pysty,,,,,,,,,,24-27,]~~[,,,,,,,,,,,,,]'),
(20218, 100, 's_listatvaaka', '[on,Saumaranka ,1,20-23,Pysty / Vaaka,]~~[on,Väliranka ,5,24,Pysty / Vaaka,]~~[on,Alueen alareuna ,,24-27,Vaaka,]~~[on,Alueen yläreuna ,,24-27,Vaaka,]~~[on,Alueen vasenreuna ,,24-27,Pysty,]~~[on,Alueen oikeareuna ,,24-27,Pysty,]~~[,,,,,]'),
(20381, 100, 's_rangat_7', '[,Saumaranka ,,,,,,,,,,,]~~[,Väliranka ,,,,,,,,,,,]~~[,Alueen alareuna ,,,,,,,,,,,]~~[,Alueen yläreuna ,,,,,,,,,,,]~~[,Alueen vasenreuna ,,,,,,,,,,,]~~[,Alueen oikeareuna ,,,,,,,,,,,]'),
(20382, 100, 's_rangat_8', '[,Saumaranka ,,,,,,,,,,,]~~[,Väliranka ,,,,,,,,,,,]~~[,Alueen alareuna ,,,,,,,,,,,]~~[,Alueen yläreuna ,,,,,,,,,,,]~~[,Alueen vasenreuna ,,,,,,,,,,,]~~[,Alueen oikeareuna ,,,,,,,,,,,]'),
(20803, 123, 's_settings', ''),
(20804, 123, 's_materials', '[on,FORMICA,1350,2450,6,0,,]~~[on,FORMICA,1350,3050,6,0,,]~~[,FORMICA,1300,3660,6,0,,]~~[,FORMICA,1525,3660,6,0,,]~~[,Trespa,2550,1860,6,0,,]~~[,Trespa,3050,1525,6,0,,]~~[,Trespa,3660,1860,6,0,,]~~[,Trespa,4150,2150,6,0,,]~~[,Steni,1300,2450,6,0,,]~~[,Steni,1300,3050,6,0,,]~~[,Steni,1300,3660,6,0,,]~~[,Steni,1525,3660,6,0,,]~~[,,,,,,,]'),
(20805, 123, 'aukko_mallit', ''),
(20806, 123, 's_systems', '[on,Classic,W22_ST_CLASSIC,Näkyvä kiinnike,]~~[on,Classic VHB,W22_ST_CLASSIC,Näkyvä kiinnike 123,]~~[,Alpha Pysty Y,,Urat reunassa,]~~[,Alpha Vaaka Y,,Urat reunassa,]~~[,Beta,,Teipattu levy,]~~[,Gamma 5,,Takakiinnike,]~~[,Gamma 6,,Takakiinnike,]~~[,Gamma KEIL,,Takakiinnike,]'),
(20807, 123, 's_levytysreunat', '[,Vasenreuna moduulista,0,A24 ,A24,u221225,,,MOD korkeus -pystysauman paksuus,0,0,0,%LSAU%/2,A22,]~~[,Oikereuna moduulista,u221225,A24 ,A24,u221225,,,MOD korkeus -pystysauman paksuus,0,0,0,0,A22,]~~[,Yläreuna moduulista,u221225,A24 ,A29,u221210,,,MOD leveys - vaakasauman paksuus,0,0,0,0,A22,]~~[,Alareuna moduulista,0,A24 ,A28,u221210,,,MOD leveys - vaakasauman paksuus,%LSAU%/2,0,0,0,A22,]'),
(20808, 123, 's_rangat', '[,A20,Hatturanka S 25/40/25,Alumiini,,90,20,0_25_65_90,3000,2400,,,,A20,, A20,]~~[,A21,Hatturanka M 25/65/25,Alumiini,,115,20,0_25_90_115,3000,2400,,,,,,,]~~[,A22,Hatturanka L 25/90/25,Alumiini,,140,20,0_25_115_140,3000,2400,,,,A20,,undefined,]~~[,A23,Hatturanka XL 25/115/25,Alumiini,,165,20,0_25_140_90,3000,2400,,,,A20,,undefined,]~~[,A24,Reunaranka S 25/40,Alumiini,,65,20,0_25_65,3000,2400,,,,A20,,undefined,]~~[,A25,Alaranka J 15/23/55,Alumiini,,55,23,0_15_55,3000,2400,,,,A20,,undefined,]~~[,A26,Yläranka J 15/23/55,Alumiini,,55,23,0_15_55,3000,2400,,,,A20,,undefined,]~~[,A27,L2B Väliranka 30/35/30,Alumiini,,95,23,0_30-65_95,3000,2400,,,,A20,,undefined,]~~[,A28,Alaranka 20+20 J  25/40/60,Alumiini,,60,43,0_25_60,3000,2400,,,,A20,,undefined,]~~[,A29,Yläranka 20+20 J  25/40/60,Alumiini,,60,43,0_25_60,3000,2400,,,,A20,,undefined,]~~[,S20,Hatturanka S 25/40/25,Teräs,,90,20,0_25_65_90,3000,2400,,,,S20,,undefined,]~~[,S21,Hatturanka M 25/65/25,Teräs,,115,20,0_25_90_115,3000,2400,,,,S20,,undefined,]~~[,S22,Hatturanka L 25/90/25,Teräs,,140,20,0_25_115_140,3000,2400,,,,S20,,undefined,]~~[,S23,Hatturanka XL 25/115/25,Teräs,,165,20,0_25_140_90,3000,2400,,,,S20,,undefined,]~~[,S24,Reunaranka S 25/40,Teräs,,65,20,0_25_65,3000,2400,,,,S20,,undefined,]~~[,S25,Alaranka J 15/23/55,Teräs,,55,23,0_15_55,3000,2400,,,,S20,,undefined,]~~[,S26,Yläranka J 15/23/55,Teräs,,55,23,0_15_55,3000,2400,,,,S20,,undefined,]~~[,S27,L2B Väliranka 30/35/30,Teräs,,95,23,0_30-65_95,3000,2400,,,,S20,,undefined,]~~[,S28,Alaranka 20+20 J  25/40/60,Teräs,,60,43,0_25_60,3000,2400,,,,S20,,undefined,]~~[,S29,Yläranka 20+20 J  25/40/60,Teräs,,60,43,0_25_60,3000,2400,,,,S20,,undefined,]~~[,A30,,,,,,,,,,,,A30,,undefined,]~~[,S30,,,,,,,,,,,,S30,,undefined,]~~[,W20,,,,,,,,,,,,W20,,undefined,]~~[,W30,,,,,,,,,,,,W30,,undefined,]'),
(20809, 123, 's_reikaframe', '[ba-bd,]~~[be-bh,]~~[bi-bl,dust]~~[bm-bp,]~~[bq-bt,frame]~~[bu-bx,]'),
(20810, 123, 's_lapiviennit', '[,R1,Pistorasia,30,,]~~[,R2,Valorasia,50,,]~~[,R3,Sahkorasia,30,,]~~[,R4,Viemari 32,20,,]~~[,R5,Viemari50,60,,]~~[,R6,Viemari 75,45,,]~~[,R7,Viemari 100,55,,]~~[,R8,IV100,55,,]~~[,R9,IV 160,0,,]~~[,R10,IV200,85,,]~~[,R11,IV 250,105,,]~~[,R12,IV315,130,,]~~[,R13,Nelio 100x100,100,100,]~~[,R14,Nelio 100x100,,,]~~[,R15,Nelio 500x500,,,]'),
(20811, 123, 's_rangat_1', '[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]'),
(20812, 123, 's_rangat_2', '[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]'),
(20813, 123, 's_rangat_3', '[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]'),
(20814, 123, 's_rangat_4', '[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]'),
(20815, 123, 's_rangat_5', '[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]'),
(20816, 123, 's_rangat_6', '[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]'),
(20817, 123, 's_rangat_7', ''),
(20818, 123, 's_rangat_8', ''),
(20819, 123, 's_saumasuunta', 'levytys_pystyyn'),
(20820, 123, 's_saumatyyppi', 'tasoitus~~vaakatasoitus'),
(20821, 123, 's_saumakulku', 'yli~~yli'),
(20822, 123, 's_saumatpysty', '[,Testi,10,Teräs,-,]~~[,Testi,10,Teräs,-,]~~[,Testi,10,Teräs,-,]~~[,Testi,10,Teräs,-,]~~[,Testi 123,10,Teräs,-,]~~[,Test 123 ,,,,]'),
(20823, 123, 's_saumatvaaka', '[,Testi,10,Terös,-,]~~[,Testi,10,Teräs,-,]~~[on,Testi,10,Teräs,-,]~~[,Testi,10,Teräs,-,]~~[,Testi,10,Teräs,-,]~~[,testi 123,11,Testi 123,1,]~~[,testi 123,12,Testi 123 ,2,]~~[on,,,,,]'),
(20824, 123, 's_aukot_1', '[Ovi alareuna,0,-25,,,,,,,]~~[Ovi yläreuna,25,0,,,,,,,]~~[Ovi vasen reuna,25,0,,,,,,,]~~[Ovi oikea reuna,25,0,,,,,,,n]'),
(20825, 123, 's_aukot_2', '[Ikkuna alareuna,0,-25,,,,,,,]~~[Ikkuna yläreuna,25,0,,,,,,,]~~[Ikkuna vasen reuna,25,0,,,,,,,]~~[Ikkuna oikea reuna,25,0,,,,,,,]'),
(20826, 123, 's_aukot_3', '[Pilari alareuna,0,-25,,,,,,,]~~[Pilari yläreuna,25,0,,,,,,,]~~[Pilari vasen reuna,25,0,,,,,,,]~~[Pilari oikea reuna,25,0,,,,,,,]'),
(20827, 123, 's_aukot_4', '[Palkki alareuna,0,-25,,,,,,,]~~[Palkki yläreuna,25,0,,,,,,,]~~[Palkki vasen reuna,25,0,,,,,,,]~~[Palkki oikea reuna,25,0,,,,,,,n]'),
(20828, 123, 's_aukot_5', '[Ilmastointi alareuna,0,-25,,,,,,,]~~[Ilmastointi yläreuna,25,0,,,,,,,]~~[Ilmastointi vasen reuna,25,0,,,,,,,]~~[Ilmastointi oikea reuna,25,0,,,,,,,n]'),
(20829, 123, 's_listatpysty', '[,Pysty TEST 1 ,10,,,]~~[,Pysty TEST 2 ,10,,,]'),
(20830, 123, 's_listatvaaka', '[,Vaaka TEST 1 ,10,,,]~~[,Vaaka TEST 2 ,10,,,]~~[,Vaaka TEST #3,,,,]'),
(20831, 124, 's_settings', ''),
(20832, 124, 's_materials', '[,FORMICA,1300,2450,6,0,,]~~[,FORMICA,1300,3050,6,0,,]~~[,FORMICA,1300,3660,6,0,,]~~[,FORMICA,1525,3660,6,0,,]~~[,Trespa,2550,1860,6,0,,]~~[,Trespa,3050,1525,6,0,,]~~[,Trespa,3660,1860,6,0,,]~~[,Trespa,4150,2150,6,0,,]~~[,Steni,1300,2450,6,0,,]~~[,Steni,1300,3050,6,0,,]~~[,Steni,1300,3660,6,0,,]~~[,Steni,1525,3660,6,0,,]~~[,,,,,,,]'),
(20833, 124, 'aukko_mallit', ''),
(20834, 124, 's_systems', '[,Classic,W22_ST_CLASSIC,Näkyvä kiinnike,]~~[,Classic VHB,W22_ST_CLASSIC,Näkyvä kiinnike 123,]~~[,Alpha Pysty Y,,Urat reunassa,]~~[,Alpha Vaaka Y,,Urat reunassa,]~~[,Beta,,Teipattu levy,]~~[,Gamma 5,,Takakiinnike,]~~[,Gamma 6,,Takakiinnike,]~~[,Gamma KEIL,,Takakiinnike,]'),
(20835, 124, 's_levytysreunat', '[,Vasenreuna moduulista,0,A24 ,A24,u221225,,,MOD korkeus -pystysauman paksuus,0,0,0,%LSAU%/2,A22,]~~[,Oikereuna moduulista,u221225,A24 ,A24,u221225,,,MOD korkeus -pystysauman paksuus,0,0,0,0,A22,]~~[,Yläreuna moduulista,u221225,A24 ,A29,u221210,,,MOD leveys - vaakasauman paksuus,0,0,0,0,A22,]~~[,Alareuna moduulista,0,A24 ,A28,u221210,,,MOD leveys - vaakasauman paksuus,%LSAU%/2,0,0,0,A22,]'),
(20836, 124, 's_rangat', '[,A20,Hatturanka S 25/40/25,Alumiini,,90,20,0_25_65_90,3000,2400,,,,A20,, A20,]~~[,A21,Hatturanka M 25/65/25,Alumiini,,115,20,0_25_90_115,3000,2400,,,,,,,]~~[,A22,Hatturanka L 25/90/25,Alumiini,,140,20,0_25_115_140,3000,2400,,,,A20,,undefined,]~~[,A23,Hatturanka XL 25/115/25,Alumiini,,165,20,0_25_140_90,3000,2400,,,,A20,,undefined,]~~[,A24,Reunaranka S 25/40,Alumiini,,65,20,0_25_65,3000,2400,,,,A20,,undefined,]~~[,A25,Alaranka J 15/23/55,Alumiini,,55,23,0_15_55,3000,2400,,,,A20,,undefined,]~~[,A26,Yläranka J 15/23/55,Alumiini,,55,23,0_15_55,3000,2400,,,,A20,,undefined,]~~[,A27,L2B Väliranka 30/35/30,Alumiini,,95,23,0_30-65_95,3000,2400,,,,A20,,undefined,]~~[,A28,Alaranka 20+20 J  25/40/60,Alumiini,,60,43,0_25_60,3000,2400,,,,A20,,undefined,]~~[,A29,Yläranka 20+20 J  25/40/60,Alumiini,,60,43,0_25_60,3000,2400,,,,A20,,undefined,]~~[,S20,Hatturanka S 25/40/25,Teräs,,90,20,0_25_65_90,3000,2400,,,,S20,,undefined,]~~[,S21,Hatturanka M 25/65/25,Teräs,,115,20,0_25_90_115,3000,2400,,,,S20,,undefined,]~~[,S22,Hatturanka L 25/90/25,Teräs,,140,20,0_25_115_140,3000,2400,,,,S20,,undefined,]~~[,S23,Hatturanka XL 25/115/25,Teräs,,165,20,0_25_140_90,3000,2400,,,,S20,,undefined,]~~[,S24,Reunaranka S 25/40,Teräs,,65,20,0_25_65,3000,2400,,,,S20,,undefined,]~~[,S25,Alaranka J 15/23/55,Teräs,,55,23,0_15_55,3000,2400,,,,S20,,undefined,]~~[,S26,Yläranka J 15/23/55,Teräs,,55,23,0_15_55,3000,2400,,,,S20,,undefined,]~~[,S27,L2B Väliranka 30/35/30,Teräs,,95,23,0_30-65_95,3000,2400,,,,S20,,undefined,]~~[,S28,Alaranka 20+20 J  25/40/60,Teräs,,60,43,0_25_60,3000,2400,,,,S20,,undefined,]~~[,S29,Yläranka 20+20 J  25/40/60,Teräs,,60,43,0_25_60,3000,2400,,,,S20,,undefined,]~~[,A30,,,,,,,,,,,,A30,,undefined,]~~[,S30,,,,,,,,,,,,S30,,undefined,]~~[,W20,,,,,,,,,,,,W20,,undefined,]~~[,W30,,,,,,,,,,,,W30,,undefined,]'),
(20837, 124, 's_reikaframe', '[ba-bd,]~~[be-bh,]~~[bi-bl,dust]~~[bm-bp,]~~[bq-bt,frame]~~[bu-bx,]'),
(20838, 124, 's_lapiviennit', '[,R1,Pistorasia,30,,]~~[,R2,Valorasia,50,,]~~[,R3,Sahkorasia,30,,]~~[,R4,Viemari 32,20,,]~~[,R5,Viemari50,60,,]~~[,R6,Viemari 75,45,,]~~[,R7,Viemari 100,55,,]~~[,R8,IV100,55,,]~~[,R9,IV 160,0,,]~~[,R10,IV200,85,,]~~[,R11,IV 250,105,,]~~[,R12,IV315,130,,]~~[,R13,Nelio 100x100,100,100,]~~[,R14,Nelio 100x100,,,]~~[,R15,Nelio 500x500,,,]'),
(20839, 124, 's_rangat_1', '[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]'),
(20840, 124, 's_rangat_2', '[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]'),
(20841, 124, 's_rangat_3', '[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]'),
(20842, 124, 's_rangat_4', '[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]'),
(20843, 124, 's_rangat_5', '[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]'),
(20844, 124, 's_rangat_6', '[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]'),
(20845, 124, 's_rangat_7', ''),
(20846, 124, 's_rangat_8', ''),
(20847, 124, 's_saumasuunta', 'levytys_pystyyn'),
(20848, 124, 's_saumatyyppi', 'tasoitus~~vaakatasoitus'),
(20849, 124, 's_saumakulku', 'yli~~yli'),
(20850, 124, 's_saumatpysty', '[,Testi,10,Teräs,-,]~~[,Testi,10,Teräs,-,]~~[,Testi,10,Teräs,-,]~~[,Testi,10,Teräs,-,]~~[,Testi 123,10,Teräs,-,]~~[,Test 123 ,,,,]'),
(20851, 124, 's_saumatvaaka', '[,Testi,10,Terös,-,]~~[,Testi,10,Teräs,-,]~~[on,Testi,10,Teräs,-,]~~[,Testi,10,Teräs,-,]~~[,Testi,10,Teräs,-,]~~[,testi 123,11,Testi 123,1,]~~[,testi 123,12,Testi 123 ,2,]~~[on,,,,,]'),
(20852, 124, 's_aukot_1', '[Ovi alareuna,0,-25,,,,,,,]~~[Ovi yläreuna,25,0,,,,,,,]~~[Ovi vasen reuna,25,0,,,,,,,]~~[Ovi oikea reuna,25,0,,,,,,,n]'),
(20853, 124, 's_aukot_2', '[Ikkuna alareuna,0,-25,,,,,,,]~~[Ikkuna yläreuna,25,0,,,,,,,]~~[Ikkuna vasen reuna,25,0,,,,,,,]~~[Ikkuna oikea reuna,25,0,,,,,,,]'),
(20854, 124, 's_aukot_3', '[Pilari alareuna,0,-25,,,,,,,]~~[Pilari yläreuna,25,0,,,,,,,]~~[Pilari vasen reuna,25,0,,,,,,,]~~[Pilari oikea reuna,25,0,,,,,,,]'),
(20855, 124, 's_aukot_4', '[Palkki alareuna,0,-25,,,,,,,]~~[Palkki yläreuna,25,0,,,,,,,]~~[Palkki vasen reuna,25,0,,,,,,,]~~[Palkki oikea reuna,25,0,,,,,,,n]'),
(20856, 124, 's_aukot_5', '[Ilmastointi alareuna,0,-25,,,,,,,]~~[Ilmastointi yläreuna,25,0,,,,,,,]~~[Ilmastointi vasen reuna,25,0,,,,,,,]~~[Ilmastointi oikea reuna,25,0,,,,,,,n]'),
(20857, 124, 's_listatpysty', '[,Pysty TEST 1 ,10,,,]~~[,Pysty TEST 2 ,10,,,]'),
(20858, 124, 's_listatvaaka', '[,Vaaka TEST 1 ,10,,,]~~[,Vaaka TEST 2 ,10,,,]~~[,Vaaka TEST #3,,,,]'),
(20859, 100, 's_listat', '[1,Päätelista 20,SPL20_,,Teräs,Hiarc,,,L-profiili,KAIKKI,10,20,,0_5_10,2400,3000,3600,mod-10,]~~[2,Päätelista 30,SPL30_,,Teräs,Hiarc,,,L-profiili,KAIKKI,10,30,,0_5_10,2400,3000,3600,mod-10,]~~[3,Päätelista 40,SPL40_,,Teräs,Hiarc,,,L-profiili,KAIKKI,10,40,,0_5_10,2400,3000,3600,mod-10,]~~[4,Päätelista 50,SPL50_,,Teräs,Hiarc,,,L-profiili,KAIKKI,10,50,,0_5_10,2400,3000,3600,mod-10,]~~[5,Päätelista 60,SPL60_,,Teräs,Hiarc,,,L-profiili,KAIKKI,10,60,,0_5_10,2400,3000,3600,mod-10,]~~[6,Päätelista 70,SPL70_,,Teräs,Hiarc,,,L-profiili,KAIKKI,10,70,,0_5_10,2400,3000,3600,mod-10,]~~[7,Ulkokulmalista 20/30,SUKL20/30,,Teräs,Hiarc,,,Kulmalista,KAIKKI,20,30,,0_30,2400,3000,3600,mod-10,]~~[8,Ulkokulmalista 20/40,SUKL20/40,,Teräs,Hiarc,,,Kulmalista,KAIKKI,20,40,,0_40,2400,3000,3600,mod-10,]~~[9,Ulkokulmalista 20/50,SUKL20/50,,Teräs,Hiarc,,,Kulmalista,KAIKKI,20,50,,0_50,2400,3000,3600,mod-10,]~~[10,Ulkokulmalista 20/60,SUKL20/60,,Teräs,Hiarc,,,Kulmalista,KAIKKI,20,60,,0_60,2400,3000,3600,mod-10,]~~[11,Ulkokulmalista 20/70,SUKL20/70,,Teräs,Hiarc,,,Kulmalista,KAIKKI,20,70,,0_70,2400,3000,3600,mod-10,]~~[12,Sisäkulmalista 30/30,SSKL30/30,,Teräs,Hiarc,,,Kulmalista,KAIKKI,30,30,,,2400,3000,3600,mod-10,]~~[13,Sisäkulmalista 40/40,SSKL40/40,,Teräs,Hiarc,,,Kulmalista,KAIKKI,40,40,,,2400,3000,3600,mod-10,]~~[14,Sisäkulmalista 50/50,SSKL50/50,,Teräs,Hiarc,,,Kulmalista,KAIKKI,50,50,,,2400,3000,3600,mod-10,]~~[15,Vastalista ,SVL10/10/10,,Teräs,Hiarc,,,Vastalista,KAIKKI,50,50,,,2400,3000,3600,mod-10,]~~[16,,,,,,,,,,,,,,,,,,]~~[17,,,,,,,,,,,,,,,,,,]~~[18,,,,,,,,,,,,,,,,,,]~~[19,,,,,,,,,,,,,,,,,,]~~[20,,,,,,,,,,,,,,,,,,]~~[21,,,,,,,,,,,,,,,,,,]~~[22,,,,,,,,,,,,,,,,,,]~~[23,,,,,,,,,,,,,,,,,,]~~[24,Ikkunalauta 50,SIL20/50/20,,Teräs,Hiarc,,,Kulmalista,KAIKKI,,50,,0_20_10_20,2400,3000,,mod+25,]~~[25,Ikkunalauta 60,SIL20/60/20,,Teräs,Hiarc,,,Kulmalista,KAIKKI,,50,,0_20_10_20,2400,3000,,mod+25,]~~[26,Ikkunalauta 70,SIL20/70/20,,Teräs,Hiarc,,,Kulmalista,KAIKKI,,60,,0_20_20_20,2400,3000,,mod+25,]~~[27,Ikkunalauta 80,SIL20/80/20,,Teräs,Hiarc,,,Kulmalista,KAIKKI,,60,,0_20_20_20,2400,3000,,mod+25,]~~[28,Ikkunalauta 90,SIL20/90/20,,Teräs,Hiarc,,,Kulmalista,KAIKKI,,60,,0_20_20_20,2400,3000,,mod+25,]~~[29,Ikkunalauta 100,SIL20/100/20,,Teräs,Hiarc,,,Kulmalista,KAIKKI,,70,,0_20_30_20,2400,3000,,mod+25,]~~[30,Ikkunalauta 110,SIL20/110/20,,Teräs,Hiarc,,,Kulmalista,KAIKKI,,70,,0_20_30_20,2400,3000,,mod+25,]~~[31,Ikkunalauta 120,SIL20/120/20,,Teräs,Hiarc,,,Kulmalista,KAIKKI,,70,,0_20_30_20,2400,3000,,mod+25,]~~[32,Ikkunalauta 130,SIL20/130/20,,Teräs,Hiarc,,,Kulmalista,KAIKKI,,80,,0_20_40_20,2400,3000,,mod+25,]~~[33,Ikkunalauta 140,SIL20/140/20,,Teräs,Hiarc,,,Kulmalista,KAIKKI,,80,,0_20_40_20,2400,3000,,mod+25,]~~[34,Ikkunalauta 150,SIL20/150/20,,Teräs,Hiarc,,,Kulmalista,KAIKKI,,80,,0_20_40_20,2400,3000,,mod+25,]~~[35,Ikkunalauta 160,SIL20/160/20,,Teräs,Hiarc,,,Kulmalista,KAIKKI,,90,,0_20_50_20,2400,3000,,mod+25,]~~[36,Ikkunalauta 170,SIL20/170/20,,Teräs,Hiarc,,,Kulmalista,KAIKKI,,90,,0_20_50_20,2400,3000,,mod+25,]~~[37,Ikkunalauta 180,SIL20/180/20,,Teräs,Hiarc,,,Kulmalista,KAIKKI,,90,,0_20_50_20,2400,3000,,mod+25,]~~[38,Ikkunalauta 190,SIL20/190/20,,Teräs,Hiarc,,,Kulmalista,KAIKKI,,100,,0_20_60_20,2400,3000,,mod+25,]~~[39,Ikkunalauta 200,SIL20/200/20,,Teräs,Hiarc,,,Kulmalista,KAIKKI,,100,,0_20_60_20,2400,3000,,mod+25,]~~[40,,,,,,,,,,,,,,,,,,]~~[41,,,,,,,,,,,,,,,,,,]~~[42,,,,,,,,,,,,,,,,,,]'),
(20860, 123, 's_listat', '[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]'),
(20861, 124, 's_listat', '[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]~~[,,,,,,,,,,,,,,,,]');

-- --------------------------------------------------------

--
-- Table structure for table `settings__templates`
--

CREATE TABLE `settings__templates` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `settings__templates`
--

INSERT INTO `settings__templates` (`id`, `name`) VALUES
(100, 'DEFAULT'),
(123, 'A'),
(124, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `shoppinglist`
--

CREATE TABLE `shoppinglist` (
  `identification` int NOT NULL,
  `id` varchar(255) NOT NULL,
  `projectid` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `kpl` varchar(255) NOT NULL,
  `shop` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `start` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `deadline` varchar(255) NOT NULL,
  `attachments` varchar(255) NOT NULL,
  `hinta` varchar(255) NOT NULL,
  `pituus` varchar(255) NOT NULL,
  `userfrom` varchar(255) NOT NULL,
  `noutaja` varchar(255) NOT NULL,
  `laskutettu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `shoppinglist`
--

INSERT INTO `shoppinglist` (`identification`, `id`, `projectid`, `room`, `item`, `kpl`, `shop`, `purpose`, `start`, `status`, `deadline`, `attachments`, `hinta`, `pituus`, `userfrom`, `noutaja`, `laskutettu`) VALUES
(108, '', '', '', '', '', '', '', '2023-10-04 16:03:50', '', '', '', '', '', '', '', 'EI'),
(109, '', '', '', '', '', '', '', '2023-10-04 16:05:14', '', '', '', '', '', '', '', 'EI');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `permissionrank` varchar(1) NOT NULL DEFAULT '0',
  `visible_forall` varchar(1) NOT NULL DEFAULT '0',
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `company` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `permissionrank`, `visible_forall`, `phone`, `email`, `company`, `created_at`) VALUES
(2, 'Jyri IT-velho', '$2y$10$SGyk40ELdJrak44ZKPqgNOrSklCBEpspTQk.wUQjkgeemBYiO8.jG', 'mittaus', '1', '', '0', 'editori@westface.fi', '', '2022-01-26 15:22:02'),
(57, 'Marko Virtanen', '$2y$10$Rd8g1pjlVXg/lPUKBSw/B.jFHu6y6sslzdCWoAxgvvHdxHDHkbTL2', 'kommentointi', '1', '', '', 'marko.virtanen@kiipeilytekniikka.com', '', '2023-10-31 20:26:48'),
(58, 'Sampsa Jyrkynen', '$2y$10$.HA8OK3LORJUzzqf4UDbNOz5qoef8kAF5CuTYHB4XIRoxWPvzepV2', 'saaja', '1', '', '', 'sampsa.jyrkynen@kiipeilytekniikka.com', '', '2023-10-31 20:26:48'),
(59, 'Severi Lainevuo', '$2y$10$jQhtpM2R3vabnI.GqvSJ6uJcuZ1jiYk6WNehQklJUmoXDFrn9wdai', 'mittaus', '1', '', '', 'severi.lainevuo@westface.fi', '', '2023-10-31 20:26:48'),
(60, 'Jari Rannanjarvi', '$2y$10$NOB48n0JyLiRgg/9FQwxEumY2ovidxjYzvyMWSa8rikXFF.4qyDoe', 'mittaus', '1', '', '', 'jari.rannanjarvi@kiipeilytekniikka.com', '', '2023-10-31 20:26:49'),
(61, 'Timo Koskinen', '$2y$10$hDVPsnr1eAPpVl6trxYZJuOkS2d16DGHkj2hjx/5Uh5rPjLklV5iq', 'kommentointi', '1', '', '', 'timo.koskinen@msn.com', '', '2023-10-31 20:26:49'),
(62, 'Denis Khasanov', '$2y$10$QTA7Iq81FhGZLbURret3De7Ziu4.89J5eYpvIQ5ssgKLP9yScw2WO', 'kommentointi', '1', '', '', 'shinexo1@mail.ru', '', '2023-10-31 20:26:49'),
(63, 'Jarno Himmela', '$2y$10$/CJC/JMtWHN5MeMcLRK9FeKKmrd7qcSULKxBmw3NDghcwty0HLosK', 'kommentointi', '', '', '', 'himmi00@icloud.com', '', '2023-10-31 20:26:49'),
(64, 'Henri Luostarinen', '$2y$10$9YDDCSifUiDWv72QKDMYmekx0DuMKsi6OSqF9bupjdKVgovMIITNu', 'kommentointi', '', '', '', ' henri.luostarinen@hotmail.com', '', '2023-10-31 20:26:49'),
(65, 'tyonjohto', '$2y$10$AaelWgY2HfP4R0wGeqZRB.4rgLs05LVWZE.fGkvMO4Wmuto.L.2bS', 'kommentointi', '1', '1', '0449782028', 'editori@westface.fi', 'skt', '2023-10-09 10:10:53'),
(67, 'asentaja1', '', 'kommentointi', '1', '1', '0', 'laita@sahkoposti.fi', '', '2023-11-01 16:47:01'),
(68, 'asentaja2', '', 'kommentointi', '1', '1', '0', 'laita@sahkoposti.fi', '', '2023-11-01 16:47:12'),
(69, 'rakennustyo1', '', 'saaja', '1', '1', '0', 'laita@sahkoposti.fi', '', '2023-11-01 16:47:37'),
(70, 'rakennustyo2', '', 'kommentointi', '1', '1', '0', 'laita@sahkoposti.fi', '', '2023-11-01 16:47:49'),
(71, 'admin', '$2y$10$BtpxG7hUaZtsq9CFaoDlq.Blk8WFVKhzOZ8eEcLDCtAvZZDyUFug2', 'admin', '0', '0', NULL, NULL, NULL, '2023-11-06 16:32:25'),
(92, 'Suomen Kiipeilytekniikka ', '$2y$10$vdyKEeMQ6/k3TBclLCanfORcJtugew7j7dUs/On1wWWdzLpH0nUHq', 'kommentointi', '1', '', '', 'marko.virtanen@kiipeilytekniikka.com', '', '2023-11-07 18:09:22'),
(93, 'Pl concept', '$2y$10$zR4XHp33GwM69e2jukniCez5NxCiAuV5m8o57Q9XOQSveIpvmELXu', 'saaja', '', '', '', 'marko.virtanen@kiipeilytekniikka.co ', '', '2023-11-07 18:09:23'),
(94, 'Kuusemo Harri', '$2y$10$WHKMCpHtPz7pdjQ3XQuY2.fuIYUevKctJ22q1zA3aDozACHNSmFB2', 'saaja', '', '', '', 'marko.virtanen@kiipeilytekniikka.com', '', '2023-11-07 18:09:23'),
(97, 'Joni Vepsäläinen', '$2y$10$n1ZRUpYYZ.InW.8C8TiY1..LWsyam6ug/TySO1e0Z8o7lxLYGayIO', 'saaja', '1', '', '', 'tapani.vepsalainen@gmail.com', '', '2023-11-13 15:23:07'),
(98, ' Tero Tirkkonen', '$2y$10$fTFrYNwnEL.C8bD682i.3uC9CHlcYvsVvCgD49i5ZV8q0P2tdKz4m', 'saaja', '1', '', '', ' terotir@gmail.com', '', '2023-11-13 15:23:08');

-- --------------------------------------------------------

--
-- Table structure for table `workdiary`
--

CREATE TABLE `workdiary` (
  `meta_id` int NOT NULL,
  `projectid` int NOT NULL,
  `who` varchar(2555) NOT NULL DEFAULT '',
  `what` varchar(255) NOT NULL,
  `where` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `timestamp` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `workdiary`
--

INSERT INTO `workdiary` (`meta_id`, `projectid`, `who`, `what`, `where`, `timestamp`) VALUES
(2, 30, 'Marko Virtanen', 'L5 ASENNETTU', '', '1700141569'),
(3, 30, 'Marko Virtanen', 'L5 ASENNETTU', '', '1700141603'),
(4, 30, 'Marko Virtanen', 'L5 ASENNETTU', 'RAPPU A A - L11A203B\nWC\nYleinen <br>RAPPU A A - L11A204\nEteinen\nYleinen <br>RAPPU A A - L11A101\nVarasto\nFinstar <br>RAPPU A A - L11A107A\nPukuhuo\nEteinen <br>', '1700141659'),
(5, 30, 'Marko Virtanen', 'L5 ASENNETTU', 'RAPPU A A - L11A203B\nWC\nYleinen <br>RAPPU A A - L11A204\nEteinen\nYleinen <br>RAPPU A A - L11A101\nVarasto\nFinstar <br>RAPPU A A - L11A107A\nPukuhuo\nEteinen <br>', '1700141659'),
(6, 30, 'Marko Virtanen', 'L5 ASENNETTU', 'RAPPU A A - L11A301\nTSTOsis\nKarl_Vi <br>RAPPU A A - L11A202\nTSTO\nTyhjä <br>RAPPU A A - L11A101A\nMyymälä\nFinstar <br>', '1700142948'),
(7, 30, 'Marko Virtanen', 'L5 ASENNETTU', 'RAPPU A A - L11A301\nTSTOsis\nKarl_Vi <br>RAPPU A A - L11A202\nTSTO\nTyhjä <br>RAPPU A A - L11A101A\nMyymälä\nFinstar <br>', '1700142948'),
(8, 32, 'Marko Virtanen', 'L5 ASENNETTU', 'KENTTÄ B B - Katu_2\n9C\nSininen <br>KENTTÄ B B - Katu_2\n9D\nSininen <br>', '1700143447'),
(9, 32, 'Marko Virtanen', 'L5 ASENNETTU', 'KENTTÄ B B - Katu_2\n9C\nSininen <br>KENTTÄ B B - Katu_2\n9D\nSininen <br>', '1700143447'),
(10, 32, 'Marko Virtanen', 'L5 ASENNETTU', 'KENTTÄ A A - Katu_1\n8B\nVihreä <br>KENTTÄ B B - Katu_2\n9B\nSininen <br>KENTTÄ B B - Katu_2\n9D\nSininen <br>', '1700143901'),
(11, 32, 'Marko Virtanen', 'L5 ASENNETTU', 'KENTTÄ A A - Katu_1\n8B\nVihreä <br>KENTTÄ B B - Katu_2\n9B\nSininen <br>KENTTÄ B B - Katu_2\n9D\nSininen <br>', '1700143901'),
(12, 32, 'Marko Virtanen', 'L5 ASENNETTU', 'KENTTÄ B B - Katu_2\n9B\nSininen <br>KENTTÄ B B - Katu_2\n9D\nSininen <br>', '1700143924'),
(13, 32, 'Marko Virtanen', 'L5 ASENNETTU', 'KENTTÄ B B - Katu_2\n9B\nSininen <br>KENTTÄ B B - Katu_2\n9D\nSininen <br>', '1700143924'),
(14, 32, 'Marko Virtanen', 'L5 ASENNETTU', 'KENTTÄ B B - Katu_2\n9B\nSininen <br>KENTTÄ B B - Katu_2\n9D\nSininen <br>', '1700143942'),
(15, 32, 'Marko Virtanen', 'L5 ASENNETTU', 'KENTTÄ B - Katu_2\n9B\nSininen <br>KENTTÄ B - Katu_2\n9D\nSininen <br>', '1700144200'),
(16, 32, 'Marko Virtanen', 'L5 ASENNETTU', 'KENTTÄ B - Katu_2\n9B\nSininen <br>KENTTÄ B - Katu_2\n9D\nSininen <br>', '1700144201'),
(17, 32, 'Marko Virtanen', 'L5 ASENNETTU', 'KENTTÄ B - Katu_2\n9B\nSininen <br>KENTTÄ B - Katu_2\n9D\nSininen <br>', '1700144383'),
(18, 32, 'Marko Virtanen', 'L5 ASENNETTU', 'KENTTÄ B - Katu_2\n9B\nSininen <br>KENTTÄ B - Katu_2\n9D\nSininen <br>', '1700144383'),
(19, 32, 'Marko Virtanen', 'L5 ASENNETTU', 'KENTTÄ B - Katu_2\n9A\nSininen <br>KENTTÄ B - Katu_2\n9B\nSininen <br>KENTTÄ B - Katu_2\n9D\nSininen <br>', '1700144594'),
(20, 32, 'Marko Virtanen', 'L5 ASENNETTU', 'KENTTÄ A - Katu_1\n9B\nVihreä <br>KENTTÄ B - Katu_2\n9C\nSininen <br>', '1700144746'),
(21, 32, 'Marko Virtanen', 'L5 ASENNETTU', 'KENTTÄ B - Katu_2\n9C\nSininen <br>', '1700144862'),
(22, 32, 'Marko Virtanen', 'L5 ASENNETTU', 'KENTTÄ B - Katu_2\n9B\nSininen <br>KENTTÄ B - Katu_2\n9C\nSininen <br>', '1700145498'),
(23, 32, 'Marko Virtanen', 'L5 ASENNETTU', 'KENTTÄ B - Katu_2\n9B\nSininen <br>KENTTÄ B - Katu_2\n9C\nSininen <br>KENTTÄ B - Katu_2\n9D\nSininen <br>KENTTÄ B - Katu_2\n8D\nSininen <br>', '1700145594'),
(24, 32, 'Marko Virtanen', 'L5 ASENNETTU', 'KENTTÄ B - Katu_2\n9B\nSininen <br>KENTTÄ B - Katu_2\n9C\nSininen <br>KENTTÄ B - Katu_2\n9D\nSininen <br>KENTTÄ B - Katu_2\n8D\nSininen <br>', '1700145594'),
(25, 32, 'Marko Virtanen', 'L5 ASENNETTU', 'KENTTÄ B - Katu_2\n9B\nSininen <br>KENTTÄ B - Katu_2\n9C\nSininen <br>KENTTÄ B - Katu_2\n9D\nSininen <br>KENTTÄ B - Katu_2\n8B\nSininen <br>KENTTÄ B - Katu_2\n8D\nSininen <br>', '1700145693'),
(26, 32, 'Marko Virtanen', 'L5 ASENNETTU', 'KENTTÄ B - Katu_2\n9B\nSininen <br>KENTTÄ B - Katu_2\n9C\nSininen <br>KENTTÄ B - Katu_2\n9D\nSininen <br>KENTTÄ B - Katu_2\n8B\nSininen <br>KENTTÄ B - Katu_2\n8D\nSininen <br>', '1700145693'),
(27, 32, 'Marko Virtanen', 'L5 ASENNETTU', 'KENTTÄ B - Katu_2\n9B\nSininen <br>KENTTÄ B - Katu_2\n9C\nSininen <br>KENTTÄ B - Katu_2\n9D\nSininen <br>KENTTÄ B - Katu_2\n8D\nSininen <br>', '1700145709'),
(28, 32, 'Marko Virtanen', 'L5 ASENNETTU', 'KENTTÄ B - Katu_2\n9B\nSininen <br>KENTTÄ B - Katu_2\n9C\nSininen <br>KENTTÄ B - Katu_2\n9D\nSininen <br>KENTTÄ B - Katu_2\n8D\nSininen <br>', '1700145709'),
(29, 32, 'Marko Virtanen', 'L5 ASENNETTU', 'KENTTÄ B - Katu_2\n9B\nSininen <br>KENTTÄ B - Katu_2\n9D\nSininen <br>', '1700145977'),
(30, 32, 'Marko Virtanen', 'L5 ASENNETTU', 'KENTTÄ B - Katu_2\n9B\nSininen <br>KENTTÄ B - Katu_2\n9D\nSininen <br>', '1700145978'),
(31, 32, 'Marko Virtanen', 'L5 ASENNETTU', 'KENTTÄ B - Katu_2\n9A\nSininen <br>KENTTÄ B - Katu_2\n9B\nSininen <br>KENTTÄ B - Katu_2\n9C\nSininen <br>KENTTÄ B - Katu_2\n9D\nSininen <br>KENTTÄ B - Katu_2\n9E\nSininen <br>', '1700146031'),
(32, 32, 'Marko Virtanen', 'L5 ASENNETTU', 'KENTTÄ B - Katu_2\n9B\nSininen <br>KENTTÄ B - Katu_2\n9E\nSininen <br>', '1700146815'),
(33, 32, 'Marko Virtanen', 'L5 ASENNETTU', 'KENTTÄ B - Katu_2\n9B\nSininen <br>KENTTÄ B - Katu_2\n9E\nSininen <br>', '1700146815'),
(34, 32, 'Marko Virtanen', 'L5 ASENNETTU', 'KENTTÄ B - Katu_2\n9A\nSininen <br>KENTTÄ B - Katu_2\n9C\nSininen <br>', '1700146910'),
(35, 32, 'Marko Virtanen', 'L5 ASENNETTU', 'KENTTÄ B - Katu 2\n12B\nSininen <br>KENTTÄ B - Katu 2\n12D\nSininen <br>KENTTÄ B - Katu 2\n10B\nSininen <br>KENTTÄ B - Katu 2\n10D\nSininen <br>', '1700149262'),
(36, 32, 'Marko Virtanen', 'L5 ASENNETTU', 'KENTTÄ B - Katu 2\n12B\nSininen <br>KENTTÄ B - Katu 2\n12D\nSininen <br>KENTTÄ B - Katu 2\n10B\nSininen <br>KENTTÄ B - Katu 2\n10D\nSininen <br>', '1700149262'),
(37, 32, 'Marko Virtanen', 'L5 ASENNETTU', 'KENTTÄ B - Katu 2\n12B\nSininen <br>KENTTÄ B - Katu 2\n12D\nSininen <br>KENTTÄ B - Katu 2\n10B\nSininen <br>KENTTÄ B - Katu 2\n10D\nSininen <br>', '1700149295'),
(38, 32, 'Marko Virtanen', 'L5 ASENNETTU', 'KENTTÄ B - Katu 2\n12B\nSininen <br>KENTTÄ B - Katu 2\n12D\nSininen <br>KENTTÄ B - Katu 2\n10B\nSininen <br>KENTTÄ B - Katu 2\n10D\nSininen <br>', '1700149296'),
(39, 30, 'Timo Koskinen', 'KESKEN ', 'RAPPU A - L11A301\nTSTOsis\nKarl_Vi <br>RAPPU A - L11A202\nTSTO\nTyhjä <br>RAPPU A - L11A101A\nMyymälä\nFinstar <br>', '1700570065'),
(40, 30, 'Severi Lainevuo', 'L5 TILATTU', 'RAPPU A - L11A301\nTSTOsis\nKarl_Vi <br>RAPPU A - L11A302\nTSTOsis\nTyhjä <br>RAPPU A - L11A305\nTSTOtie\nTyhjä <br>RAPPU A - L11A203A\nWC\nYleinen <br>RAPPU A - L11A101B\nKeittio\nFinstar <br>', '1700651496'),
(41, 30, 'Severi Lainevuo', 'L5 TILATTU', 'RAPPU A - L11A301\nTSTOsis\nKarl_Vi <br>RAPPU A - L11A302\nTSTOsis\nTyhjä <br>RAPPU A - L11A305\nTSTOtie\nTyhjä <br>RAPPU A - L11A203A\nWC\nYleinen <br>RAPPU A - L11A101B\nKeittio\nFinstar <br>', '1700651496'),
(42, 30, 'Severi Lainevuo', 'KESKEN ', 'RAPPU A - L11A301\nTSTOsis\nKarl_Vi <br>RAPPU A - L11A302\nTSTOsis\nTyhjä <br>RAPPU A - L11A305\nTSTOtie\nTyhjä <br>RAPPU A - L11A203A\nWC\nYleinen <br>RAPPU A - L11A101B\nKeittio\nFinstar <br>', '1700651513'),
(43, 30, 'Severi Lainevuo', 'KESKEN ', 'RAPPU A - L11A301\nTSTOsis\nKarl_Vi <br>RAPPU A - L11A302\nTSTOsis\nTyhjä <br>RAPPU A - L11A305\nTSTOtie\nTyhjä <br>RAPPU A - L11A203A\nWC\nYleinen <br>RAPPU A - L11A101B\nKeittio\nFinstar <br>', '1700651513');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addedusers`
--
ALTER TABLE `addedusers`
  ADD PRIMARY KEY (`project_id`,`username`) USING BTREE;

--
-- Indexes for table `changed__comments_interactive`
--
ALTER TABLE `changed__comments_interactive`
  ADD PRIMARY KEY (`commentid`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kumoalog`
--
ALTER TABLE `kumoalog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail_templates`
--
ALTER TABLE `mail_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_templates`
--
ALTER TABLE `message_templates`
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
-- Indexes for table `roomwalls`
--
ALTER TABLE `roomwalls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settingsmeta`
--
ALTER TABLE `settingsmeta`
  ADD PRIMARY KEY (`meta_id`);

--
-- Indexes for table `settings__templates`
--
ALTER TABLE `settings__templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoppinglist`
--
ALTER TABLE `shoppinglist`
  ADD PRIMARY KEY (`identification`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `workdiary`
--
ALTER TABLE `workdiary`
  ADD PRIMARY KEY (`meta_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kumoalog`
--
ALTER TABLE `kumoalog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mail_templates`
--
ALTER TABLE `mail_templates`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `message_templates`
--
ALTER TABLE `message_templates`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pohjat`
--
ALTER TABLE `pohjat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `projectmeta`
--
ALTER TABLE `projectmeta`
  MODIFY `meta_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20193;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `roomwalls`
--
ALTER TABLE `roomwalls`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `settingsmeta`
--
ALTER TABLE `settingsmeta`
  MODIFY `meta_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20862;

--
-- AUTO_INCREMENT for table `settings__templates`
--
ALTER TABLE `settings__templates`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `shoppinglist`
--
ALTER TABLE `shoppinglist`
  MODIFY `identification` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `workdiary`
--
ALTER TABLE `workdiary`
  MODIFY `meta_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
