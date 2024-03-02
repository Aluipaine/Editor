<?php
require "config.php";

// This file adds saving of the apartments wall into savingtable
$id = $_POST['projectid'];
$apartment = $_POST['apartment'];
$wall = $_POST['wall'];
$function = $_POST['function'];
$timestamp = $_POST['timestamp'];
$meta = mysqli_query($db, "INSERT INTO `savingtable` (`meta_id`, `projectid`, `apartment`, `wall`, `function`, `timestamp`) VALUES (NULL,'$id','$apartment','$wall','$function','$timestamp');");
echo "INSERT INTO `savingtable` (`meta_id`, `projectid`, `apartment`, `wall`, `function`, `timestamp`) VALUES (NULL,'$id','$apartment','$wall','$function','$timestamp');";
?>