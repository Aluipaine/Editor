<?php
// Gets preset ID for settings 
require 'config.php';
$preset_id = $_POST["preset_id"];
$key = $_POST["key"];

$content = mysqli_query($db, "SELECT `meta_value` FROM `pohjat_meta` WHERE `id`='$preset_id' AND `meta_key`='$key'")->fetch_all();
echo json_encode($content);
