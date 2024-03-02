<?php
// This code gets preset settings for room screen
require 'config.php';
$preset_id = $_POST["preset_id"];
$content = mysqli_query($db, "SELECT * FROM `settingsmeta` WHERE `id`='$preset_id'")->fetch_all();
echo json_encode($content);
