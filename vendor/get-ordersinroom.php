<?php
// This file gets rooms orders from the orderlog for the tilauskirja section
require "config.php";

$pr_id = $_POST['pr_id'];
$room = $_POST['room'];
$type = $_POST['type'];

$content = mysqli_query($db, "SELECT `generated_array`,`wall`,`timedate`,`status` FROM `orderlog` WHERE `project_id`='$pr_id' AND `room`='$room' AND `type`='$type'")->fetch_all();

$con = $content;

$response = "";
foreach ($con as $c) {
    $response .= $c[0] . "----" . $c[1] . "----" . $c[2] . "----" . $c[3] . "&&";
}

// print_r($con);
echo $response;


// SELECT  `generated_array` FROM `orderlog` WHERE `project_id`='30' AND `room`='L11A200_Porras_Yleinen' AND `type`='levyt'