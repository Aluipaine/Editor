<?php
// This file updates room status and workdiary

require 'vendor/config.php';

$project_id = $_POST['project_id'];
$room = $_POST['room'];
$status = $_POST['status'];
[$letter, $x, $y] = explode(',', $room);

$rooms = json_decode(mysqli_query($db, "SELECT `meta_value` from `projectmeta` WHERE `id`=$project_id AND `meta_key`='{$letter}_rooms'")->fetch_row()[0], true);

foreach ($rooms as $id => $room_data) {
  if ($room_data['positionX'] == $x && $room_data['positionY'] == $y) {
    break;
  }
}

$walls = ['a_room', 'b_room', 'c_room', 'd_room', 'k_room', 'l_room'];
foreach ($walls as $wall) {
  $room_data[$wall] = str_replace(explode('~', $room_data[$wall])[1], $status, $room_data[$wall]);
}

$rooms[$id] = $room_data;
$rooms = json_encode($rooms);

mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$rooms' WHERE `id`=$project_id AND `meta_key`='{$letter}_rooms'");

$timestamp = time();
mysqli_query($db, "INSERT INTO `workdiary` (`meta_id`, `projectid`, `who`, `what`, `where`, `timestamp`) VALUES (NULL,'$project_id','','$status','$room','$timestamp');");
