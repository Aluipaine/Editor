<?php 
// Include config file
require "vendor/config.php";


// Count total files
 //$_POST['id']
$id = $_POST['id'];
$w_content = $_POST['w_content'];
$a_settings = $_POST['aukko_settings'];
$k_saved = $_POST['k_saved'];
$a_saved = $_POST['a_saved'];
$b_saved = $_POST['b_saved'];
$c_saved = $_POST['c_saved']; //$_POST['c_saved']
$d_saved = $_POST['d_saved'];
$l_saved = $_POST['l_saved'];
// $step = $_POST['step'];
// $step = $_POST['step'];
// $settings = $_POST['settings'];
// $projectdata = $_POST['projectdata'];


// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_3_email', '$prc_3_email')");

// $meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$wall' WHERE `id`=$id AND `meta_key`='wall'");

// $meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$room' WHERE `id`=$id AND `meta_key`='room'");

// $meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$step' WHERE `id`=$id AND `meta_key`='step'");

// $meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$settings' WHERE `id`=$id AND `meta_key`='settings'");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$w_content' WHERE `id`=$id AND `meta_key`='walls_content'");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$a_settings' WHERE `id`=$id AND `meta_key`='aukko_settings'");

$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$k_saved' WHERE `id`=$id AND `meta_key`='k_saved'");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$a_saved' WHERE `id`=$id AND `meta_key`='a_saved'");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$b_saved' WHERE `id`=$id AND `meta_key`='b_saved'");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$c_saved' WHERE `id`=$id AND `meta_key`='c_saved'");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$d_saved' WHERE `id`=$id AND `meta_key`='d_saved'");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$l_saved' WHERE `id`=$id AND `meta_key`='l_saved'");


   



 ?>