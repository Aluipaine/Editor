<?php
require "config.php";
//This file updates sizes in project room
$pr_id = $_POST['pr_id'];
$apartment = $_POST['apartment'];
$wall = $_POST['wall'];
$function = $_POST['function'];

$content = mysqli_query($db, "UPDATE `projectrooms` SET `function`='$function' WHERE `projectid`='$pr_id' AND `apartment`='$apartment' AND `wall`='$wall'");
