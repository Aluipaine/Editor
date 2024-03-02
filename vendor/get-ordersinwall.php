<?php
// This file gets walls Orders from orderlog for the tilauskirja section
require "config.php";

$pr_id = $_POST['pr_id'];
$room = $_POST['room'];
$wall = $_POST['wall'];
$type = $_POST['type'];

$content = mysqli_query($db, "SELECT `generated_array`,`timedate`,`status` FROM `orderlog` WHERE `project_id`='$pr_id' AND `wall`='$wall' AND `room`='$room' AND `type`='$type'")->fetch_all();

$con = $content;

$response = "";
foreach ($con as $c) {
    $response = $c[0] . "----" . $c[1] . "----" . $c[2] . "&&";
}

// print_r($con);
echo $response;


// SELECT  `generated_array` FROM `orderlog` WHERE `project_id`='30' AND `room`='L11A200_Porras_Yleinen' AND `type`='levyt'