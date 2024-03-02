<?php
// Remove saving from room
require "config.php";


$id = $_POST['projectid'];
$apartment = $_POST['apartment'];
$wall = $_POST['wall'];
$function = $_POST['function'];

$meta = mysqli_query($db, "DELETE FROM `savingtable` WHERE `projectid`='$id' AND `apartment`='$apartment' AND `wall`='$wall' AND `function` LIKE '%$function%'");
?>