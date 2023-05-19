<?php 
// Include config file
require "config.php";

// 1.0

$rowSQL = mysqli_query($db, "SELECT MAX( id ) AS max FROM `projects`;" );
$row = mysqli_fetch_array( $rowSQL );
$id = intval($row['max'])+1;

$project_name = $_POST['project_name'];
$project_type = $_POST['project_type'];
$date = date("Y-m-d");

$prc_1 = $_POST['prc_1'];
$prc_1_puh = $_POST['prc_1_puh'];
$prc_1_email = $_POST['prc_1_email'];
$prc_2 = $_POST['prc_2'];
$prc_2_puh = $_POST['prc_2_puh'];
$prc_2_email = $_POST['prc_2_email'];
$prc_3 = $_POST['prc_3'];
$prc_3_puh = $_POST['prc_3_puh'];
$prc_3_email = $_POST['prc_3_email'];
$prc_4 = $_POST['prc_4'];
$prc_4_puh = $_POST['prc_4_puh'];
$prc_4_email = $_POST['prc_4_email'];
$prc_5 = $_POST['prc_5'];
$prc_5_puh = $_POST['prc_5_puh'];
$prc_5_email = $_POST['prc_5_email'];
$prc_6 = $_POST['prc_6'];
$prc_6_puh = $_POST['prc_6_puh'];
$prc_6_email = $_POST['prc_6_email'];
$prc_7 = $_POST['prc_7'];
$prc_7_puh = $_POST['prc_7_puh'];
$prc_7_email = $_POST['prc_7_email'];
$prc_8 = $_POST['prc_8'];
$prc_8_puh = $_POST['prc_8_puh'];
$prc_8_email = $_POST['prc_8_email'];

$prc_9 = $_POST['prc_9'];
$prc_9_puh = $_POST['prc_9_puh'];
$prc_9_email = $_POST['prc_9_email'];
$prc_10 = $_POST['prc_10'];
$prc_10_puh = $_POST['prc_10_puh'];
$prc_10_email = $_POST['prc_10_email'];
$prc_11 = $_POST['prc_11'];
$prc_11_puh = $_POST['prc_11_puh'];
$prc_11_email = $_POST['prc_11_email'];
// 1.5
$a_pr_rap = $_POST['a_pr_rap'];
$a_pr_krs = $_POST['a_pr_krs'];

$b_pr_rap = $_POST['b_pr_rap'];
$b_pr_krs = $_POST['b_pr_krs'];

$c_pr_rap = $_POST['c_pr_rap'];
$c_pr_krs = $_POST['c_pr_krs'];

$d_pr_rap = $_POST['d_pr_rap'];
$d_pr_krs = $_POST['d_pr_krs'];

$e_pr_rap = $_POST['e_pr_rap'];
$e_pr_krs = $_POST['e_pr_krs'];

$f_pr_rap = $_POST['f_pr_rap'];
$f_pr_krs = $_POST['f_pr_krs'];


$rooms_per_rappu = $_POST['rooms_per_rappu'];
$a_rooms = $_POST['a_rooms'];
$b_rooms = $_POST['b_rooms'];
$c_rooms = $_POST['c_rooms'];
$d_rooms = $_POST['d_rooms'];
$e_rooms = $_POST['e_rooms'];
$f_rooms = $_POST['f_rooms'];
$g_rooms = $_POST['g_rooms'];
$h_rooms = $_POST['h_rooms'];

$a_rooms_nowork = $_POST['a_rooms_nowork'];
$b_rooms_nowork = $_POST['b_rooms_nowork'];
$c_rooms_nowork = $_POST['c_rooms_nowork'];
$d_rooms_nowork = $_POST['d_rooms_nowork'];
$e_rooms_nowork = $_POST['e_rooms_nowork'];
$f_rooms_nowork = $_POST['f_rooms_nowork'];
$g_rooms_nowork = $_POST['g_rooms_nowork'];
$h_rooms_nowork = $_POST['h_rooms_nowork'];



// 2.0
$room_name = $_POST['room_name'];
$room_one_a = $_POST['room_one_a'] . '\r\n';
$room_one_a_desc = $_POST['room_one_a_desc'] . '\r\n';
$room_one_a_h = $_POST['room_one_a_h'];
$room_one_a_w = $_POST['room_one_a_w'];
$room_one_b = $_POST['room_one_b'] . '\r\n';
$room_one_b_desc = $_POST['room_one_b_desc'] . '\r\n';
$room_one_b_h = $_POST['room_one_b_h'];
$room_one_b_w = $_POST['room_one_b_w'];
$room_one_c = $_POST['room_one_c'] . '\r\n';
$room_one_c_desc = $_POST['room_one_c_desc'] . '\r\n';
$room_one_c_h = $_POST['room_one_c_h'];
$room_one_c_w = $_POST['room_one_c_w'];
$room_one_d = $_POST['room_one_d'] . '\r\n';
$room_one_d_desc = $_POST['room_one_d_desc'] . '\r\n';
$room_one_d_h = $_POST['room_one_d_h'];
$room_one_d_w = $_POST['room_one_d_w'];
$room_one_roof = $_POST['room_one_roof'] . '\r\n';
$room_one_roof_desc = $_POST['room_one_roof_desc'] . '\r\n';
$room_one_roof_h = $_POST['room_one_roof_h'];
$room_one_roof_w = $_POST['room_one_roof_w'];
$room_one_floor = $_POST['room_one_floor'] . '\r\n';
$room_one_floor_desc = $_POST['room_one_floor_desc'] . '\r\n';
$room_one_floor_h = $_POST['room_one_floor_h'];
$room_one_floor_w = $_POST['room_one_floor_w'];

$s_settings = "";
$s_materials = "";

$post = mysqli_query($db, "INSERT INTO `projects` (`id`, `title`, `created_at`, `link`, `project_type`, `user`) VALUES ('$id', '$project_name', '$date', '', '$project_type', '$prc_3')");
if (!$post) {
	echo $project_name . "<br>" . $date . "<br>" . $project_type;
}

$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_id', '$id')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_name', '$project_name')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_type', '$project_type')");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$s_settings' WHERE `id`=$id AND `meta_key`='s_settings'");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$s_materials' WHERE `id`=$id AND `meta_key`='s_materials'");


$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 's_settings', '$s_settings')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 's_materials', '$s_materials')");

$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_1', '$prc_1')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_1_puh', '$prc_1_puh')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_1_email', '$prc_1_email')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_2', '$prc_2)");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_2_puh', '$prc_2_puh')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_2_email', '$prc_2_email')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_3', '$prc_3')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_3_puh', '$prc_3_puh')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_3_email', '$prc_3_email')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_4', '$prc_4')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_4_puh', '$prc_4_puh')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_4_email', '$prc_4_email')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_5', '$prc_5')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_5_puh', '$prc_5_puh')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_5_email', '$prc_5_email')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_6', '$prc_6')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_6_puh', '$prc_6_puh')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_6_email', '$prc_6_email')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_7', '$prc_7')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_7_puh', '$prc_7_puh')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_7_email', '$prc_7_email')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_8', '$prc_8')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_8_puh', '$prc_8_puh')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_8_email', '$prc_8_email')");

$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_9', '$prc_9')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_9_puh', '$prc_9_puh')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_9_email', '$prc_9_email')");

$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_10', '$prc_10')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_10_puh', '$prc_10_puh')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_10_email', '$prc_10_email')");

$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_11', '$prc_11')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_11_puh', '$prc_11_puh')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_11_email', '$prc_11_email')");


$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'a_pr_krs', '$a_pr_krs')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'a_pr_rap', '$a_pr_rap')");

$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'b_pr_krs', '$b_pr_krs')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'b_pr_rap', '$b_pr_rap')");

$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'c_pr_krs', '$c_pr_krs')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'c_pr_rap', '$c_pr_rap')");

$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'd_pr_krs', '$d_pr_krs')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'd_pr_rap', '$d_pr_rap')");

$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'e_pr_krs', '$e_pr_krs')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'e_pr_rap', '$e_pr_rap')");

$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'f_pr_krs', '$f_pr_krs')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'f_pr_rap', '$f_pr_rap')");

$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_room_in_rap', '$rooms_per_rappu')");

$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'a_rooms', '$a_rooms')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'b_rooms', '$b_rooms')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'c_rooms', '$c_rooms')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'd_rooms', '$d_rooms')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'e_rooms', '$e_rooms')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'f_rooms', '$f_rooms')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'g_rooms', '$g_rooms')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'h_rooms', '$h_rooms')");

$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'a_rooms_nowork', '$a_rooms_nowork')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'b_rooms_nowork', '$b_rooms_nowork')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'c_rooms_nowork', '$c_rooms_nowork')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'd_rooms_nowork', '$d_rooms_nowork')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'e_rooms_nowork', '$e_rooms_nowork')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'f_rooms_nowork', '$f_rooms_nowork')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'g_rooms_nowork', '$g_rooms_nowork')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'h_rooms_nowork', '$h_rooms_nowork')");

$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_room_name', '$room_name')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_rap_name', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_s1_name', '$room_one_a')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_s1_order', '1')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_s1_desc', '$room_one_a_desc')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_s1_h', '$room_one_a_h')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_s1_w', '$room_one_a_w')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_s2_name', '$room_one_b')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_s2_order', '2')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_s2_desc', '$room_one_b_desc')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_s2_h', '$room_one_b_h')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_s2_w', '$room_one_b_w')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_s3_name', '$room_one_c')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_s3_order', '3')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_s3_desc', '$room_one_c_desc')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_s3_h', '$room_one_c_h')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_s3_w', '$room_one_c_w')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_s4_name', '$room_one_d')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_s4_order', '4')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_s4_desc', '$room_one_d_desc')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_s4_h', '$room_one_d_h')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_s4_w', '$room_one_d_w')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_s5_name', 'room_one_roof')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_s5_order', '5')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_s5_desc', 'room_one_roof_desc')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_s5_h', 'room_one_roof_h')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_s5_w', 'room_one_roof_w')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_s6_name', 'room_one_floor')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_s6_order', '6')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_s6_desc', 'room_one_floor_desc')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_s6_h', 'room_one_floor_h')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_s6_w', 'room_one_floor_w')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'm_materials', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'm_name', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'm_one', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'm_two', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'm_three', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'm_four', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'm_five', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 's_ladonta_levytyssuunta', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 's_saumoitus', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 's_ladontasystem', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 's_materials', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 's_rangan_suunta', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 's_kiinnikkeiden_linjojen_alkupaikka', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 's_kiinnikelinjan_etaisyydet', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 's_levytys_levytyksen_katkeaminen', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 's_levytys_pituus_y', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 's_levytys_pituus_x', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 's_levytyksen_suunta', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 's_lapiviennit', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 's_levyt_standard', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 's_jarjestelma', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 's_olosuhteet', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 's_olosuhde', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 's_aukko', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 's_reika_', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 's_levy_', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 's_rankatyypit', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 's_tyypin_pituudet', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 's_pystyasennus', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 's_listat', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 's_rankojen_sijoittelu', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 's_users', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_step', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_recl_msg', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_recl_from', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_recl_to', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_recl_attention', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_1_origo', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_1_gooddist_w', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_1_gooddist_h', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_1_1_name', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_1_1_dist_x', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_1_1_dist_y', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_1_1_comments', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_2_1_name', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_2_1_dist_x', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_2_1_dist_y', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_2_1_comments', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_2_1_h', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_2_1_w', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_3_1_name', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_3_1_dist_x', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_3_1_dist_y', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_3_1_comments', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_3_1_r', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_4_1_name', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_4_1_num', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_4_1_type', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_4_1_x', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_4_1_y', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'pr_4_1_comments', '')");

$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'step', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'wall', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'room', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'settings', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'mittapisteet', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'aukot', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'reijat', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'saumat', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'levyt', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'rangat', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'listat', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'kokonaisalue', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'levytettava_alue', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'poisjaava_alue', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'keskusmittapiste_cord', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'reklamaatiot', '')");



if ($post) {
	echo "<script>window.location.replace('http://teditori.gromi.fi');</script>";
}
?>