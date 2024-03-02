<?php 
// Include config file
require "config.php";

// Count total files
$id = $_POST['id'];
$username = $_POST['username'];

$wall = $_POST['wall'];
$room = $_POST['room'];
$settings = $_POST['settings'];
$step = $_POST['step'];
$measure_point = $_POST['measure_point'];
$small_holes = $_POST['reijat'];
$seams = $_POST['saumat'];
$panels = $_POST['levyt'];
$armatures = $_POST['rangat'];
$lists = $_POST['listat'];
$totalcanvasarea = $_POST['kokonaisalue'];
$topanel_area = $_POST['levytettava_alue'];
$absent_area = $_POST['poisjaava_alue'];
$keskusmittapiste_cord = $_POST['keskusmittapiste_cord'];
$reklamaatiot = $_POST['reklamaatiot'];

$query = "UPDATE `projectmeta` SET `meta_value`='$wall' WHERE `id`=$id AND `meta_key`='wall';";
$query .= "UPDATE `projectmeta` SET `meta_value`='$room' WHERE `id`=$id AND `meta_key`='room';";
$query .= "UPDATE `projectmeta` SET `meta_value`='$settings' WHERE `id`=$id AND `meta_key`='settings';";
$query .= "UPDATE `projectmeta` SET `meta_value`='$step' WHERE `id`=$id AND `meta_key`='step';";

$query .= "UPDATE `projectmeta` SET `meta_value`='$measure_point' WHERE `id`=$id AND `meta_key`='measure_point';";
$query .= "UPDATE `projectmeta` SET `meta_value`='$small_holes' WHERE `id`=$id AND `meta_key`='reijat';";
$query .= "UPDATE `projectmeta` SET `meta_value`='$panels' WHERE `id`=$id AND `meta_key`='levyt';";
$query .= "UPDATE `projectmeta` SET `meta_value`='$listat' WHERE `id`=$id AND `meta_key`='listat';";
$query .= "UPDATE `projectmeta` SET `meta_value`='$totalcanvasarea' WHERE `id`=$id AND `meta_key`='kokonaisalue';";
$query .= "UPDATE `projectmeta` SET `meta_value`='$topanel_area' WHERE `id`=$id AND `meta_key`='levytettava_alue';";
$query .= "UPDATE `projectmeta` SET `meta_value`='$absent_area' WHERE `id`=$id AND `meta_key`='poisjaava_alue';";
$query .= "UPDATE `projectmeta` SET `meta_value`='$keskusmittapiste_cord' WHERE `id`=$id AND `meta_key`='keskusmittapiste_cord';";
$query .= "UPDATE `projectmeta` SET `meta_value`='$reklamaatiot' WHERE `id`=$id AND `meta_key`='reklamaatiot';";

$values = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id")->fetch_all();
$values = array_column($values, null, "meta_key");

$undo = "UPDATE `projectmeta` SET `meta_value`='" . $values['wall'] . "' WHERE `id`=$id AND `meta_key`='wall';";
$undo .= "UPDATE `projectmeta` SET `meta_value`='" . $values['room'] . "' WHERE `id`=$id AND `meta_key`='room';";
$undo .= "UPDATE `projectmeta` SET `meta_value`='" . $values['settings'] . "' WHERE `id`=$id AND `meta_key`='settings';";
$undo .= "UPDATE `projectmeta` SET `meta_value`='" . $values['step'] . "' WHERE `id`=$id AND `meta_key`='step';";

$undo .= "UPDATE `projectmeta` SET `meta_value`='" . $values['measure_point'] . "' WHERE `id`=$id AND `meta_key`='measure_point';";
$undo .= "UPDATE `projectmeta` SET `meta_value`='" . $values['reijat'] . "' WHERE `id`=$id AND `meta_key`='reijat';";
$undo .= "UPDATE `projectmeta` SET `meta_value`='" . $values['levyt'] . "' WHERE `id`=$id AND `meta_key`='levyt';";
$undo .= "UPDATE `projectmeta` SET `meta_value`='" . $values['listat'] . "' WHERE `id`=$id AND `meta_key`='listat';";
$undo .= "UPDATE `projectmeta` SET `meta_value`='" . $values['kokonaisalue'] . "' WHERE `id`=$id AND `meta_key`='kokonaisalue';";
$undo .= "UPDATE `projectmeta` SET `meta_value`='" . $values['levytettava_alue'] . "' WHERE `id`=$id AND `meta_key`='levytettava_alue';";
$undo .= "UPDATE `projectmeta` SET `meta_value`='" . $values['poisjaava_alue'] . "' WHERE `id`=$id AND `meta_key`='poisjaava_alue';";
$undo .= "UPDATE `projectmeta` SET `meta_value`='" . $values['keskusmittapiste_cord'] . "' WHERE `id`=$id AND `meta_key`='keskusmittapiste_cord';";
$undo .= "UPDATE `projectmeta` SET `meta_value`='" . $values['reklamaatiot'] . "' WHERE `id`=$id AND `meta_key`='reklamaatiot';";

$kumoa = "INSERT INTO `kumoalog` (`project_id`, `username`, `redo`, `undo`) VALUES ($id, '$username', '" . mysqli_real_escape_string($db, $query) . "' , '" . mysqli_real_escape_string($db, $query) . "');";

$queries = explode(";", $query . $kumora);

foreach($queries as $q) {
    if($q != "")
        mysqli_query($db, $q);
}

 ?>