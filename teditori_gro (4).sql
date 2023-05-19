-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 19, 2023 at 11:29 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.21

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
-- Table structure for table `projectmeta`
--

CREATE TABLE `projectmeta` (
  `meta_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `meta_key` varchar(255) NOT NULL,
  `meta_value` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projectmeta`
--

INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES
(3772, 100, 's_settings', '[[\"Classic vaaka\",\"\",\"\",\"Alpha vaaka\",\"Alpha pysty\",\"Delta\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],[\"R1\",\"Pistorasia\",\"30\",\"\",\"\",\"\",\"\"],[\"R2\",\"Valorasia\",\"50\",\"\",\"\",\"\",\"\"],[\"R3\",\"Sähkörasia\",\"30\",\"\",\"\",\"\",\"\"],[\"R4\",\"Viemäri 32\",\"20\",\"\",\"\",\"\",\"\"],[\"R5\",\"Viemäri50\",\"60\",\"\",\"\",\"\",\"\"],[\"R6\",\"Viemäri 75\",\"45\",\"\",\"\",\"\",\"\",\"\"],[\"R7\",\"Viemäri 100\",\"55\",\"\",\"\",\"\",\"\",\"\"],[\"R8\",\"IV100\",\"55\",\"\",\"\",\"\",\"\",\"\"],[\"R9\",\"IV 160\",\"\",\"\",\"\",\"\",\"\",\"\"],[\"R10\",\"IV200\",\"85\",\"\",\"\",\"\",\"\",\"\"],[\"R11\",\"IV 250\",\"105\",\"\",\"\",\"\",\"\",\"\"],[\"R12\",\"IV315\",\"130\",\"\",\"\",\"\",\"\",\"\"],[\"R13\",\"Neliö 100x100\",\"165\",\"\",\"\",\"\",\"\",\"\"],[\"R14\",\"Neliö 100x100\",\"\",\"\",\"\",\"\",\"\",\"\"],[\"R15\",\"Neliö 500x500\",\"\",\"\",\"\",\"\",\"\",\"\"]]'),
(3773, 100, 's_materials', '[\"{Exterior Blue,Exterior Blue,B_s2_d0,1250,3000,8,Laminate,#45769d}\"]'),
(4299, 13, 'pr_id', '13'),
(4300, 13, 'pr_name', ' '),
(4301, 13, 'pr_type', ''),
(4302, 13, 's_settings', '[[\"Classic vaaka\",\"\",\"\",\"Alpha vaaka\",\"Alpha pysty\",\"Delta\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],[\"R1\",\"Pistorasia\",\"30\",\"\",\"\",\"\",\"\"],[\"R2\",\"Valorasia\",\"50\",\"\",\"\",\"\",\"\"],[\"R3\",\"Sähkörasia\",\"30\",\"\",\"\",\"\",\"\"],[\"R4\",\"Viemäri 32\",\"20\",\"\",\"\",\"\",\"\"],[\"R5\",\"Viemäri50\",\"60\",\"\",\"\",\"\",\"\"],[\"R6\",\"Viemäri 75\",\"45\",\"\",\"\",\"\",\"\",\"\"],[\"R7\",\"Viemäri 100\",\"55\",\"\",\"\",\"\",\"\",\"\"],[\"R8\",\"IV100\",\"55\",\"\",\"\",\"\",\"\",\"\"],[\"R9\",\"IV 160\",\"\",\"\",\"\",\"\",\"\",\"\"],[\"R10\",\"IV200\",\"85\",\"\",\"\",\"\",\"\",\"\"],[\"R11\",\"IV 250\",\"105\",\"\",\"\",\"\",\"\",\"\"],[\"R12\",\"IV315\",\"130\",\"\",\"\",\"\",\"\",\"\"],[\"R13\",\"Neliö 100x100\",\"165\",\"\",\"\",\"\",\"\",\"\"],[\"R14\",\"Neliö 100x100\",\"\",\"\",\"\",\"\",\"\",\"\"],[\"R15\",\"Neliö 500x500\",\"\",\"\",\"\",\"\",\"\",\"\"]]'),
(4303, 13, 's_materials', '[\"{Exterior Blue,Exterior Blue,B_s2_d0,1250,3000,8,Laminate,#45769d}\"]'),
(4304, 13, 'prc_1', ' '),
(4305, 13, 'prc_1_puh', ' '),
(4306, 13, 'prc_1_email', ' '),
(4307, 13, 'prc_2_puh', ' '),
(4308, 13, 'prc_2_email', ' '),
(4309, 13, 'prc_3', ' '),
(4310, 13, 'prc_3_puh', ' '),
(4311, 13, 'prc_3_email', ' '),
(4312, 13, 'prc_4', ' '),
(4313, 13, 'prc_4_puh', ' '),
(4314, 13, 'prc_4_email', ' '),
(4315, 13, 'prc_5', ' '),
(4316, 13, 'prc_5_puh', ' '),
(4317, 13, 'prc_5_email', ' '),
(4318, 13, 'prc_6', ' '),
(4319, 13, 'prc_6_puh', ' '),
(4320, 13, 'prc_6_email', ' '),
(4321, 13, 'prc_7', ' '),
(4322, 13, 'prc_7_puh', ' '),
(4323, 13, 'prc_7_email', ' '),
(4324, 13, 'prc_8', ' '),
(4325, 13, 'prc_8_puh', ' '),
(4326, 13, 'prc_8_email', ' '),
(4327, 13, 'prc_9', ' '),
(4328, 13, 'prc_9_puh', ' '),
(4329, 13, 'prc_9_email', ' '),
(4330, 13, 'prc_10', ' '),
(4331, 13, 'prc_10_puh', ' '),
(4332, 13, 'prc_10_email', ' '),
(4333, 13, 'prc_11', ' '),
(4334, 13, 'prc_11_puh', ' '),
(4335, 13, 'prc_11_email', ' '),
(4336, 13, 'a_pr_krs', ''),
(4337, 13, 'a_pr_rap', ''),
(4338, 13, 'b_pr_krs', ''),
(4339, 13, 'b_pr_rap', ''),
(4340, 13, 'c_pr_krs', ''),
(4341, 13, 'c_pr_rap', ''),
(4342, 13, 'd_pr_krs', ''),
(4343, 13, 'd_pr_rap', ''),
(4344, 13, 'e_pr_krs', ''),
(4345, 13, 'e_pr_rap', ''),
(4346, 13, 'f_pr_krs', ''),
(4347, 13, 'f_pr_rap', ''),
(4348, 13, 'pr_room_in_rap', ''),
(4349, 13, 'a_rooms', '[{\"name\":\"ARAK-14\",\"positionX\":5,\"positionY\":1},{\"name\":\"ARAK-13\",\"positionX\":5,\"positionY\":2},{\"name\":\"ARAK-15\",\"positionX\":5,\"positionY\":3},{\"name\":\"ARAK-10\",\"positionX\":6,\"positionY\":1},{\"name\":\"ARAK-11\",\"positionX\":6,\"positionY\":2},{\"name\":\"ARAK-12\",\"positionX\":6,\"positionY\":3},{\"name\":\"ARAK-6\",\"positionX\":7,\"positionY\":1},{\"name\":\"ARAK-7\",\"positionX\":7,\"positionY\":2},{\"name\":\"ARAK-8\",\"positionX\":7,\"positionY\":3},{\"name\":\"ARAK-5\",\"positionX\":8,\"positionY\":1},{\"name\":\"ARAK-4\",\"positionX\":8,\"positionY\":2},{\"name\":\"ARAK-9\",\"positionX\":8,\"positionY\":3},{\"name\":\"ARAK-1\",\"positionX\":9,\"positionY\":1},{\"name\":\"ARAK-2\",\"positionX\":9,\"positionY\":2},{\"name\":\"ARAK-3\",\"positionX\":9,\"positionY\":3}]'),
(4350, 13, 'b_rooms', '[{\"name\":\"BRAK-9\",\"positionX\":7,\"positionY\":1},{\"name\":\"BRAK-8\",\"positionX\":7,\"positionY\":2},{\"name\":\"BRAK-7\",\"positionX\":7,\"positionY\":3},{\"name\":\"BRAK-5\",\"positionX\":8,\"positionY\":1},{\"name\":\"BRAK-4\",\"positionX\":8,\"positionY\":2},{\"name\":\"BRAK-6\",\"positionX\":8,\"positionY\":3},{\"name\":\"BRAK-1\",\"positionX\":9,\"positionY\":1},{\"name\":\"BRAK-2\",\"positionX\":9,\"positionY\":2},{\"name\":\"BRAK-3\",\"positionX\":9,\"positionY\":3}]'),
(4351, 13, 'c_rooms', ''),
(4352, 13, 'd_rooms', ''),
(4353, 13, 'e_rooms', ''),
(4354, 13, 'f_rooms', ''),
(4355, 13, 'g_rooms', ''),
(4356, 13, 'h_rooms', ''),
(4357, 13, 'a_rooms_nowork', ''),
(4358, 13, 'b_rooms_nowork', ''),
(4359, 13, 'c_rooms_nowork', ''),
(4360, 13, 'd_rooms_nowork', ''),
(4361, 13, 'e_rooms_nowork', ''),
(4362, 13, 'f_rooms_nowork', ''),
(4363, 13, 'g_rooms_nowork', ''),
(4364, 13, 'h_rooms_nowork', ''),
(4365, 13, 'pr_room_name', 'on'),
(4366, 13, 'pr_rap_name', ''),
(4367, 13, 'pr_s1_name', '\r\n'),
(4368, 13, 'pr_s1_order', '1'),
(4369, 13, 'pr_s1_desc', '\r\n'),
(4370, 13, 'pr_s1_h', ''),
(4371, 13, 'pr_s1_w', ''),
(4372, 13, 'pr_s2_name', '\r\n'),
(4373, 13, 'pr_s2_order', '2'),
(4374, 13, 'pr_s2_desc', '\r\n'),
(4375, 13, 'pr_s2_h', ''),
(4376, 13, 'pr_s2_w', ''),
(4377, 13, 'pr_s3_name', '\r\n'),
(4378, 13, 'pr_s3_order', '3'),
(4379, 13, 'pr_s3_desc', '\r\n'),
(4380, 13, 'pr_s3_h', ''),
(4381, 13, 'pr_s3_w', ''),
(4382, 13, 'pr_s4_name', '\r\n'),
(4383, 13, 'pr_s4_order', '4'),
(4384, 13, 'pr_s4_desc', '\r\n'),
(4385, 13, 'pr_s4_h', ''),
(4386, 13, 'pr_s4_w', ''),
(4387, 13, 'pr_s5_name', 'room_one_roof'),
(4388, 13, 'pr_s5_order', '5'),
(4389, 13, 'pr_s5_desc', 'room_one_roof_desc'),
(4390, 13, 'pr_s5_h', 'room_one_roof_h'),
(4391, 13, 'pr_s5_w', 'room_one_roof_w'),
(4392, 13, 'pr_s6_name', 'room_one_floor'),
(4393, 13, 'pr_s6_order', '6'),
(4394, 13, 'pr_s6_desc', 'room_one_floor_desc'),
(4395, 13, 'pr_s6_h', 'room_one_floor_h'),
(4396, 13, 'pr_s6_w', 'room_one_floor_w'),
(4397, 13, 'm_materials', ''),
(4398, 13, 'm_name', ''),
(4399, 13, 'm_one', ''),
(4400, 13, 'm_two', ''),
(4401, 13, 'm_three', ''),
(4402, 13, 'm_four', ''),
(4403, 13, 'm_five', ''),
(4404, 13, 's_ladonta_levytyssuunta', ''),
(4405, 13, 's_saumoitus', ''),
(4406, 13, 's_ladontasystem', ''),
(4407, 13, 's_materials', '[\"{Exterior Blue,Exterior Blue,B_s2_d0,1250,3000,8,Laminate,#45769d}\"]'),
(4408, 13, 's_rangan_suunta', ''),
(4409, 13, 's_kiinnikkeiden_linjojen_alkupaikka', ''),
(4410, 13, 's_kiinnikelinjan_etaisyydet', ''),
(4411, 13, 's_levytys_levytyksen_katkeaminen', ''),
(4412, 13, 's_levytys_pituus_y', ''),
(4413, 13, 's_levytys_pituus_x', ''),
(4414, 13, 's_levytyksen_suunta', ''),
(4415, 13, 's_lapiviennit', ''),
(4416, 13, 's_levyt_standard', ''),
(4417, 13, 's_jarjestelma', ''),
(4418, 13, 's_olosuhteet', ''),
(4419, 13, 's_olosuhde', ''),
(4420, 13, 's_aukko', ''),
(4421, 13, 's_reika_', ''),
(4422, 13, 's_levy_', ''),
(4423, 13, 's_rankatyypit', ''),
(4424, 13, 's_tyypin_pituudet', ''),
(4425, 13, 's_pystyasennus', ''),
(4426, 13, 's_listat', ''),
(4427, 13, 's_rankojen_sijoittelu', ''),
(4428, 13, 's_users', ''),
(4429, 13, 'pr_step', ''),
(4430, 13, 'pr_recl_msg', ''),
(4431, 13, 'pr_recl_from', ''),
(4432, 13, 'pr_recl_to', ''),
(4433, 13, 'pr_recl_attention', ''),
(4434, 13, 'pr_1_origo', ''),
(4435, 13, 'pr_1_gooddist_w', ''),
(4436, 13, 'pr_1_gooddist_h', ''),
(4437, 13, 'pr_1_1_name', ''),
(4438, 13, 'pr_1_1_dist_x', ''),
(4439, 13, 'pr_1_1_dist_y', ''),
(4440, 13, 'pr_1_1_comments', ''),
(4441, 13, 'pr_2_1_name', ''),
(4442, 13, 'pr_2_1_dist_x', ''),
(4443, 13, 'pr_2_1_dist_y', ''),
(4444, 13, 'pr_2_1_comments', ''),
(4445, 13, 'pr_2_1_h', ''),
(4446, 13, 'pr_2_1_w', ''),
(4447, 13, 'pr_3_1_name', ''),
(4448, 13, 'pr_3_1_dist_x', ''),
(4449, 13, 'pr_3_1_dist_y', ''),
(4450, 13, 'pr_3_1_comments', ''),
(4451, 13, 'pr_3_1_r', ''),
(4452, 13, 'pr_4_1_name', ''),
(4453, 13, 'pr_4_1_num', ''),
(4454, 13, 'pr_4_1_type', ''),
(4455, 13, 'pr_4_1_x', ''),
(4456, 13, 'pr_4_1_y', ''),
(4457, 13, 'pr_4_1_comments', ''),
(4458, 13, 'step', ''),
(4459, 13, 'walls', ''),
(4460, 13, 'room', ''),
(4461, 13, 'settings', ''),
(4462, 13, 'mittapisteet', ''),
(4463, 13, 'aukot', ''),
(4464, 13, 'reijat', ''),
(4465, 13, 'saumat', ''),
(4466, 13, 'levyt', ''),
(4467, 13, 'rangat', ''),
(4468, 13, 'listat', ''),
(4469, 13, 'kokonaisalue', ''),
(4470, 13, 'levytettava_alue', ''),
(4471, 13, 'poisjaava_alue', ''),
(4472, 13, 'keskusmittapiste_cord', ''),
(4473, 13, 'reklamaatiot', ''),
(4474, 100, 'aukko_mallit', '[\"-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-,-\"]'),
(4475, 100, 'aukko_mallityypit', '[\"A\"]'),
(4476, 13, 'project_rooms_data', '\"ARAK-13\": {[mp:{name:\"Mittapiste\";bottom:\"500\";left:\"500\";count:\"1\";}__{name:\"Mittapiste\";bottom:\"500\";left:\"500\";count:\"1\";}]__[aukot:{name:\"Ovi \";type:\"ovi\";bottom:\"5\";left:\"500\";top:\"2100\";right:\"1500\";count:\"1\";from:\"Jyri\";to:\"Jari\";comment:\"Tämä toimii?\"}__{name:\"Ikkuna\";type:\"ikkuna\";bottom:\"500\";left:\"1500\";top:\"1500\";right:\"2500\";count:\"1\";from:\"Jyri\";to:\"Jari\";comment:\"Tämä toimii?\"}]__[lv:{name:\"Läpivienti \";sade:\"125\";bottom:\"5\";left:\"500\";count:\"1\";from:\"Jyri\";to:\"Jari\";comment:\"Tämä Läpivienti toimii?\"}__{name:\"Läpivienti \";sade:\"125\";bottom:\"2000\";left:\"5000\";count:\"1\";from:\"Jyri\";to:\"Jari\";comment:\"Tämä Läpivienti toimii?\"}]__[saumat:{name:\"Sauma \";type:\"pysty\";bottom:\"0\";left:\"500\";cord:\"500\";count:\"1\";}__{name:\"Sauma \";type:\"vaaka\";bottom:\"500\";left:\"0\";cord:\"500\";count:\"1\";}]__[levyt:{name:\"ARAK-14_C_B2\";type:\"pysty\";bottom:\"0\";left:\"500\";width:\"\";height:\"\";title:\"2990|1065|1080|3005\";no:\"3\";tyostot_x:\"6.5|115|230|345|460|589.9\";tyostot_y:\"6.5|100|206.5\"}]__[rangat:]__[listat:]},'),
(4477, 13, 'project_rooms_settings', ''),
(4478, 13, 'k_saved', ''),
(4479, 13, 'a_saved', '13,1|1,2200|6000,,Ovi # 1|5|530|1|aukko3fb4c1aa48a5f|2127|1025|ovi aukko|||__,,,'),
(4480, 13, 'b_saved', '13,1|1,2200|2200,,,,,'),
(4481, 13, 'c_saved', '13,1|1,2975|3075,,Ikkuna # 1|786|0|1|aukko63410f3013b31|1320|1503|aukko ikkuna|||__Ovi # 1|0|1503|1|aukko31a3987fc5566|2106|884|aukko ovi|||__,,,'),
(4482, 13, 'd_saved', '13,1|1,2200|2200,,,,2|pysty|0|250|1250|2__3|pysty|0|440|950|3__1|pysty|0|0||1__A|vaaka|0|0||A__B|vaaka|410|0|2050|B__C|vaaka|440|0|150|C__A|vaaka|0|0||A__,'),
(4483, 13, 'l_saved', ''),
(4484, 13, 'walls_content', 'LATTIA ARAK-14_L ,SEINÄ ARAK-14_A ,SEINÄ ARAK-14_B ,SEINÄ ARAK-14_C ,SEINÄ ARAK-14_D ,KATTO ARAK-14_K'),
(4485, 13, 'aukko_settings', 'Ikkuna,+8,+13,-18,-23,-18,-32,-1,-15,Ikkunalista,-,Ikkunaranka,-,Ikkunalista,-,Ikkunaranka,-,Ikkunalista,-,Ikkunaranka,-,Ikkunalista,-,Ikkunaranka,-,ovi,+8,+13,-18,-23,-18,-32,-1,-15,ovilista,-,oviranka,-,ovilista,-,oviranka,-,ovilista,-,oviranka,-,ovilista,-,oviranka,-,ilmastointi,+38,+63,-38,-63,-38,-62,-1,-25,ilmastointilista,-,ilmastointiranka,-,ilmastointilista,-,ilmastointiranka,-,ilmastointilista,-,ilmastointiranka,-,ilmastointilista,-,ilmastointiranka,-,pilari,+38,+63,-38,-63,-38,-62,-1,-25,pilarilista,-,pilariranka,-,pilarilista,-,pilariranka,-,pilarilista,-,pilariranka,-,pilarilista,-,pilariranka,-,palkki,+38,+63,-38,-63,-38,-62,-1,-25,palkkilista,-,palkkiranka,-,palkkilista,-,palkkiranka,-,palkkilista,-,palkkiranka,-,palkkilista,-,palkkiranka,-');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `link` text CHARACTER SET latin1 NOT NULL,
  `project_type` varchar(300) COLLATE utf8_swedish_ci DEFAULT NULL,
  `user` text CHARACTER SET latin1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `created_at`, `link`, `project_type`, `user`) VALUES
(13, 'Test', '2023-02-27', '', '', 'Jyri');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', '$2y$10$H3081r4OB97irEoTMJoKouI2odKyU0d2vRVtm3EV987pXDJ2ue7oq', '2022-01-26 15:12:01'),
(2, 'Jyri', '$2y$10$SGyk40ELdJrak44ZKPqgNOrSklCBEpspTQk.wUQjkgeemBYiO8.jG', '2022-01-26 15:22:02'),
(4, 'Marko', '$2y$10$goFDu8dFgD7k3Emnm7g.fe7z.5OD6TdC3oMLifRxMOr1ZFuUvQl1y', '2023-01-12 19:11:17');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `projectmeta`
--
ALTER TABLE `projectmeta`
  MODIFY `meta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4486;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
