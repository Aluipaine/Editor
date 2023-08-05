<?php

require './vendor/config.php';

$project_id = $_POST["project_id"];
$arak = $_POST["arak"];
$wall = $_POST["wall"];
$asjarj = $_POST["asjarj"];
$name = $_POST["name"];
$description = $_POST["description"];
$hidden = $_POST["hidden"];

$insert_new = intval(mysqli_query($db, "SELECT COUNT(1) FROM `roomwalls` WHERE `project_id`='$project_id' AND `arak`='$arak' AND `wall`='$wall'")->fetch_assoc()["COUNT(1)"]) < 1;

if($insert_new) {
    mysqli_query($db, "INSERT INTO `roomwalls` (`project_id`, `arak`, `wall`) VALUES ('$project_id', '$arak', '$wall');");
    echo "fuck";
}

if(isset($asjarj)) mysqli_query($db, "UPDATE `roomwalls` SET `asjarj`='$asjarj' WHERE `project_id`='$project_id' AND `arak`='$arak' AND `wall`='$wall'");
if(isset($name)) mysqli_query($db, "UPDATE `roomwalls` SET `name`='$name' WHERE `project_id`='$project_id' AND `arak`='$arak' AND `wall`='$wall'");
if(isset($description)) mysqli_query($db, "UPDATE `roomwalls` SET `description`='$description' WHERE `project_id`='$project_id' AND `arak`='$arak' AND `wall`='$wall'");
if(isset($hidden)) mysqli_query($db, "UPDATE `roomwalls` SET `hidden`='$hidden' WHERE `project_id`='$project_id' AND `arak`='$arak' AND `wall`='$wall'");

echo "ok";