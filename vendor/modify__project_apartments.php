<?php
// Include config file
require "config.php";

$project_id = $_POST['project_id'];
$room_identificator = $_POST['room_identificator'];
$rooms = $_POST['rooms'];
$rooms_nowork = $_POST['rooms_nowork'];

$roomselector1 = $room_identificator . "_rooms";
$roomselector2 = $room_identificator . "_nowork";

$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$rooms' WHERE `id`='$project_id' AND `meta_key`='$roomselector1'");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$rooms_nowork' WHERE `id`='$project_id' AND `meta_key`='$roomselector2'");


?>