<?php
require "config.php";

$pr_id = $_POST['pr_id'];
$apartment = $_POST['apartment'];
$wall = $_POST['wall'];

$content = mysqli_query($db, "SELECT * FROM `projectrooms` WHERE `projectid`='$pr_id' AND `apartment`='$apartment' AND `wall`='$wall'")->fetch_all();

$con = $content;

$response = "";
foreach ($con as $c) {
    $response .= $c[1] . "~~" . $c[2] . "~~" . $c[3] . "~~" . $c[4] . "&&";
}

echo $response;

