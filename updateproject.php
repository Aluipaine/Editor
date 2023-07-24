<?php 
// Include config file
require "vendor/config.php";


// Count total files
 //$_POST['id']
$id = $_POST['id'];
$saving_a = $_POST['saving_a_rooms'];
$saving_b = $_POST['saving_b_rooms'];
$saving_c = $_POST['saving_c_rooms'];
$saving_d = $_POST['saving_d_rooms'];
$saving_e = $_POST['saving_e_rooms'];
$saving_f = $_POST['saving_f_rooms']; //$_POST['c_saved']
$saving_g = $_POST['saving_g_rooms'];
$saving_h = $_POST['saving_h_rooms'];
$settings = $_POST['settings'];
// $projectdata = $_POST['projectdata'];


// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_3_email', '$prc_3_email')");

// $meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$wall' WHERE `id`=$id AND `meta_key`='wall'");

// $meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$room' WHERE `id`=$id AND `meta_key`='room'");

// $meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$step' WHERE `id`=$id AND `meta_key`='step'");

$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$settings' WHERE `id`=$id AND `meta_key`='settings'");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$w_content' WHERE `id`=$id AND `meta_key`='walls_content'");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$a_settings' WHERE `id`=$id AND `meta_key`='aukko_settings'");

$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$saving_a' WHERE `id`=$id AND `meta_key`='a_rooms'");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$saving_b' WHERE `id`=$id AND `meta_key`='b_rooms'");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$saving_c' WHERE `id`=$id AND `meta_key`='c_rooms'");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$saving_d' WHERE `id`=$id AND `meta_key`='d_rooms'");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$saving_e' WHERE `id`=$id AND `meta_key`='e_rooms'");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$saving_f' WHERE `id`=$id AND `meta_key`='f_rooms'");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$saving_g' WHERE `id`=$id AND `meta_key`='g_rooms'");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$saving_h' WHERE `id`=$id AND `meta_key`='h_rooms'");
// $meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$l_saved' WHERE `id`=$id AND `meta_key`='l_saved'");


   



 ?>