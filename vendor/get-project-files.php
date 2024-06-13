<?php

require "config.php";

$query = "SELECT * from `project_files` WHERE `projectid`={$_GET['project_id']}";
if (isset($_GET['room'])) {
	$query .= " AND `room` LIKE '%{$_GET['room']}%'";
}
$files = mysqli_query($db, $query)->fetch_all(MYSQLI_ASSOC);

echo json_encode($files);
