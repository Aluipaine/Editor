<?php
// THIS FILE GETS ROOMS WALL FOR THE ROOMS PAGE IN THE EDITOR
require_once './vendor/config.php';

$project_id = $_POST["project_id"];
$arak = $_POST["arak"];

$walls = mysqli_query($db, "SELECT * FROM `roomwalls` WHERE `project_id`='$project_id' AND `arak`='$arak'")->fetch_all(MYSQLI_ASSOC);

echo json_encode($walls);
