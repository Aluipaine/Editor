<?php


require "config.php";

$project_id = intval($_POST['project_id']);
$project_roomname = $_POST['project_roomname'];
$project_oldroomname = $_POST['project_oldroomname'];


$project_oldroomname_comments = trim($_POST['project_oldroomname']);
$project_newroomname_comments = trim($_POST['project_roomname']);

$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value` = REPLACE(`meta_value`, '$project_oldroomname', '$project_roomname') WHERE `meta_value` LIKE '%$project_oldroomname%' AND `id`='$project_id'");
$meta = mysqli_query($db, "UPDATE `comments` SET `room` = REPLACE(`room`, '$project_oldroomname_comments', '$project_newroomname_comments') WHERE `room` LIKE '%$project_oldroomname_comments%' AND `projectid`='$project_id'");


?>