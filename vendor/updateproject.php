<?php 
// Include config file
require "config.php";






// Count total files
$id = $_POST['id'];

$wall = $_POST['wall'];
$room = $_POST['room'];
$settings = $_POST['settings'];
$step = $_POST['step'];
$mittapisteet = $_POST['mittapisteet'];
$reijat = $_POST['reijat'];
$saumat = $_POST['saumat'];
$levyt = $_POST['levyt'];
$rangat = $_POST['rangat'];
$listat = $_POST['listat'];
$kokonaisalue = $_POST['kokonaisalue'];
$levytettava_alue = $_POST['levytettava_alue'];
$poisjaava_alue = $_POST['poisjaava_alue'];
$keskusmittapiste_cord = $_POST['keskusmittapiste_cord'];
$reklamaatiot = $_POST['reklamaatiot'];


// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL, $id, 'prc_3_email', '$prc_3_email')");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$wall' WHERE `id`=$id AND `meta_key`='wall'");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$room' WHERE `id`=$id AND `meta_key`='room'");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$settings' WHERE `id`=$id AND `meta_key`='settings'");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$step' WHERE `id`=$id AND `meta_key`='step'");

$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$mittapisteet' WHERE `id`=$id AND `meta_key`='mittapisteet'");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$reijat' WHERE `id`=$id AND `meta_key`='reijat'");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$levyt' WHERE `id`=$id AND `meta_key`='levyt'");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$listat' WHERE `id`=$id AND `meta_key`='listat'");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$kokonaisalue' WHERE `id`=$id AND `meta_key`='kokonaisalue'");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$levytettava_alue' WHERE `id`=$id AND `meta_key`='levytettava_alue'");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$poisjaava_alue' WHERE `id`=$id AND `meta_key`='poisjaava_alue'");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$keskusmittapiste_cord' WHERE `id`=$id AND `meta_key`='keskusmittapiste_cord'");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$reklamaatiot' WHERE `id`=$id AND `meta_key`='reklamaatiot'");

   



 ?>