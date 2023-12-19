<?php

// Include config file
require "config.php";

$pr_id = $_POST['pr_id'];
$type = $_POST['type'];

$content = mysqli_query($db, "SELECT `generated_array`,`wall`,`timedate`,`room` FROM `orderlog` WHERE `project_id`='$pr_id' AND `type`='$type'")->fetch_all();

$con = $content;

$response = "";
foreach ($con as $c) {
    $response .= $c[0] . "----" . $c[1] . "----" . $c[2] . "----" . $c[3] ."&&";
}

echo $response;
