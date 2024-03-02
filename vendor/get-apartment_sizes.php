<?php

// This file gets apartments wall sizes and / or specs for future prorcessing
require "config.php";

$pr_id = $_POST['pr_id'];
$apartment = $_POST['apartment'];

$content = mysqli_query($db, "SELECT * FROM `projectrooms` WHERE `projectid`='$pr_id' AND `apartment`='$apartment'")->fetch_all();

$con = $content;

$response = "";
foreach ($con as $c) {
    $response .= $c[1] . "~~" . $c[2] . "~~" . $c[3] . "~~" . $c[4] . "&&";
}

// print_r($con);
echo $response;


// SELECT  `generated_array` FROM `orderlog` WHERE `project_id`='30' AND `room`='L11A200_Porras_Yleinen' AND `type`='levyt'