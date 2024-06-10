<?php
// This file updates rooms wall description and other data in the room selection

require './vendor/config.php';

$project_id = $_POST["project_id"];
$username = $_POST["username"];
$arak = $_POST["arak"];
$wall = $_POST["wall"];
$asjarj = $_POST["asjarj"];
$name = $_POST["name"];
$description = $_POST["description"];
$hidden = $_POST["hidden"];

$query = '';
$undo = '';

$insert_new = intval(mysqli_query($db, "SELECT COUNT(1) FROM `roomwalls` WHERE `project_id`=$project_id AND `arak`='$arak' AND `wall`='$wall'")->fetch_assoc()["COUNT(1)"]) < 1;

if($insert_new) {
    $query .= "INSERT INTO `roomwalls` (`project_id`, `arak`, `wall`) VALUES ($project_id, '$arak', '$wall'); ";
    $undo .= "DELETE FROM `roomwalls` WHERE `project_id`=$project_id AND `arak`='$arak' AND `wall`=$wall;";
}

$values = mysqli_query($db, "SELECT * FROM `roomwalls` WHERE `project_id`=$project_id AND `arak`='$arak' AND `wall`='$wall'")->fetch_assoc();

if(isset($asjarj)) {
    $undo .= "UPDATE `roomwalls` SET `asjarj`='" . $values["asjarj"] . "' WHERE `project_id`=$project_id AND `arak`='$arak' AND `wall`='$wall';";
    $query .= "UPDATE `roomwalls` SET `asjarj`='$asjarj' WHERE `project_id`=$project_id AND `arak`='$arak' AND `wall`='$wall';";
}
if(isset($name)) {
    $undo .= "UPDATE `roomwalls` SET `name`='" . $values["name"] . "' WHERE `project_id`=$project_id AND `arak`='$arak' AND `wall`='$wall';";
    $query .= "UPDATE `roomwalls` SET `name`='$name' WHERE `project_id`=$project_id AND `arak`='$arak' AND `wall`='$wall';";
}
if(isset($description)) {
    $undo .= "UPDATE `roomwalls` SET `description`='" . $values["description"] . "' WHERE `project_id`=$project_id AND `arak`='$arak' AND `wall`='$wall';";
    $query .= "UPDATE `roomwalls` SET `description`='$description' WHERE `project_id`=$project_id AND `arak`='$arak' AND `wall`='$wall';";
}
if(isset($hidden)) {
    $undo .= "UPDATE `roomwalls` SET `hidden`='" . $values["hidden"] . "' WHERE `project_id`=$project_id AND `arak`='$arak' AND `wall`='$wall';";
    $query .= "UPDATE `roomwalls` SET `hidden`='$hidden' WHERE `project_id`=$project_id AND `arak`='$arak' AND `wall`='$wall';";
}

$kumoa = "INSERT INTO `kumoalog` (`project_id`, `username`, `redo`, `undo`) VALUES ($project_id, '$username', '" . mysqli_real_escape_string($db, $query) . "' , '" . mysqli_real_escape_string($db, $undo) . "');";

//$queries = explode(";", $query . $kumoa);
$queries = explode(";", $query);

//var_dump($values);

foreach($queries as $q) {
    if($q != "")
        mysqli_query($db, $q);
}

echo "ok";