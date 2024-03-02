<?php
// Gets preset ID for settings 
require 'config.php';
$pr_id = $_POST["pr_id"];
$key = $_POST["key"];
$content = mysqli_query($db, "SELECT `meta_value` FROM `projectmeta` WHERE `id`='$pr_id' AND `meta_key`='$key'")->fetch_all();
$con = $content[0][0];
$id = mysqli_query($db, "SELECT `id` FROM `settings__templates` WHERE `name`='$con'")->fetch_all();
echo $id[0][0];
