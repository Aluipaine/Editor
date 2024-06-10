<?php
// This file updates projects specs in the walls (partially deprecated)
require "vendor/config.php";
header('Content-type: text/plain; charset=utf-8');


$id = $_POST['id'];
$saving_a = $_POST['saving_a_rooms'];
$saving_b = $_POST['saving_b_rooms'];
$saving_c = $_POST['saving_c_rooms'];
$saving_d = $_POST['saving_d_rooms'];
$saving_e = $_POST['saving_e_rooms'];
$saving_f = $_POST['saving_f_rooms'];
$saving_g = $_POST['saving_g_rooms'];
$saving_h = $_POST['saving_h_rooms'];
// $settings = $_POST['settings'];
// $projectdata = $_POST['projectdata'];


// $query .= "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_3_email', '$prc_3_email')");

// $query .= "UPDATE `projectmeta` SET `meta_value`='$wall' WHERE `id`=$id AND `meta_key`='wall'");

// $query .= "UPDATE `projectmeta` SET `meta_value`='$room' WHERE `id`=$id AND `meta_key`='room'");

// $query .= "UPDATE `projectmeta` SET `meta_value`='$step' WHERE `id`=$id AND `meta_key`='step'");

$query = mysqli_query($db, "UPDATE `settingsmeta` SET `meta_value`='$settings' WHERE `id`=$id AND `meta_key`='settings';");
$query = mysqli_query($db, "UPDATE `settingsmeta` SET `meta_value`='$w_content' WHERE `id`=$id AND `meta_key`='walls_content';");
$query = mysqli_query($db, "UPDATE `settingsmeta` SET `meta_value`='$a_settings' WHERE `id`=$id AND `meta_key`='aukko_settings';");

$query = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$saving_a' WHERE `id`=$id AND `meta_key`='a_rooms';");
$query = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$saving_b' WHERE `id`=$id AND `meta_key`='b_rooms';");
$query = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$saving_c' WHERE `id`=$id AND `meta_key`='c_rooms';");
$query = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$saving_d' WHERE `id`=$id AND `meta_key`='d_rooms';");
$query = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$saving_e' WHERE `id`=$id AND `meta_key`='e_rooms';");
$query = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$saving_f' WHERE `id`=$id AND `meta_key`='f_rooms';");
$query = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$saving_g' WHERE `id`=$id AND `meta_key`='g_rooms';");
$query = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$saving_h' WHERE `id`=$id AND `meta_key`='h_rooms';");
// $query .= "UPDATE `projectmeta` SET `meta_value`='$l_saved' WHERE `id`=$id AND `meta_key`='l_saved'");
echo "UPDATE `projectmeta` SET `meta_value`='$saving_a' WHERE `id`=$id AND `meta_key`='a_rooms';";
echo "UPDATE `projectmeta` SET `meta_value`='$saving_b' WHERE `id`=$id AND `meta_key`='b_rooms';";
$undo = "UPDATE `projectmeta` SET `meta_value`='" . $values['settings'] . " WHERE `id`=$id AND `meta_key`='settings';";
$undo .= "UPDATE `projectmeta` SET `meta_value`='" . $values['walls_content'] . " WHERE `id`=$id AND `meta_key`='walls_content';";
$undo .= "UPDATE `projectmeta` SET `meta_value`='" . $values['aukko_settings'] . " WHERE `id`=$id AND `meta_key`='aukko_settings';";

$undo .= "UPDATE `projectmeta` SET `meta_value`='" . $values['a_rooms'] . " WHERE `id`=$id AND `meta_key`='a_rooms';";
$undo .= "UPDATE `projectmeta` SET `meta_value`='" . $values['b_rooms'] . " WHERE `id`=$id AND `meta_key`='b_rooms';";
$undo .= "UPDATE `projectmeta` SET `meta_value`='" . $values['c_rooms'] . " WHERE `id`=$id AND `meta_key`='c_rooms';";
$undo .= "UPDATE `projectmeta` SET `meta_value`='" . $values['d_rooms'] . " WHERE `id`=$id AND `meta_key`='d_rooms';";
$undo .= "UPDATE `projectmeta` SET `meta_value`='" . $values['e_rooms'] . " WHERE `id`=$id AND `meta_key`='e_rooms';";
$undo .= "UPDATE `projectmeta` SET `meta_value`='" . $values['f_rooms'] . " WHERE `id`=$id AND `meta_key`='f_rooms';";
$undo .= "UPDATE `projectmeta` SET `meta_value`='" . $values['g_rooms'] . " WHERE `id`=$id AND `meta_key`='g_rooms';";
$undo .= "UPDATE `projectmeta` SET `meta_value`='" . $values['h_rooms'] . " WHERE `id`=$id AND `meta_key`='h_rooms';";

// $queries = explode(";", $query . $kumora);
//
// foreach($queries as $q) {
//     if($q != "")
//         mysqli_query($db, $q);
// }

 ?>
