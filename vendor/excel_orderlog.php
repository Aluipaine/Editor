<?php 
// Adds order to orderlog with the status Hyväksyttävä "=to approve"
require "config.php";

$project_id = $_POST['project_id'];
$generated_array = $_POST['generated_array'];
$room = $_POST['room'];
$wall = $_POST['wall'];
$who = $_POST['who'];
$type = $_POST['type'];
$timedate = date('Y-m-d H:i:s');

$meta = mysqli_query($db, "INSERT INTO `orderlog` (`project_id`, `generated_array`,`room`,`wall`,`who`,`type`,`timedate`,`status`) VALUES ('$project_id', '$generated_array', '$room', '$wall', '$who', '$type', '$timedate','hyväksyttävä'); ");
echo "INSERT INTO `orderlog` (`project_id`, `generated_array`,`room`,`wall`,`who`,`type`,`timedate`,`status`) VALUES ('$project_id', '$generated_array', '$room', '$wall', '$who', '$type', '$timedate','hyväksyttävä'); ";