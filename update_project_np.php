<?php
// This file updates rooms wall description and other data in the room selection

require './vendor/config.php';

/**
 * @var $db mysqli
 */

$project_id = $_POST["project_id"];
$username = $_POST["username"];
$entrance = $_POST["entrance"];
$np = $_POST["np"];
$index = $_POST["index"];

$np_sql_result = $db->query("SELECT `meta_value` FROM `projectmeta` WHERE `id` = $project_id AND `meta_key` = '{$entrance}_np_text'");
if ($np_sql_result && $np_sql_result->num_rows) {
    $np_array = json_decode($np_sql_result->fetch_row()[0], true);
}
else {
    $db->query("INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($project_id, '{$entrance}_np_text', '[]')");
    $np_array = [];
}
$np_array[$index] = $np;
$np_json = json_encode($np_array, JSON_UNESCAPED_UNICODE);
$np_json = $db->real_escape_string($np_json);
$db->query("UPDATE `projectmeta` SET `meta_value` = '$np_json' WHERE `id` = $project_id AND `meta_key` = '{$entrance}_np_text'");