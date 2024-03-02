<?php
// This file saves rooms walls sizes to database
require "config.php";

$rowSQL = mysqli_query($db, "SELECT MAX( id ) AS max FROM `projects`;" );
$row = mysqli_fetch_array( $rowSQL );
$id = intval($row['max'])+1;

$pr_id = $id;
$apartment = $_POST['apartment'];
$wall = $_POST['wall'];
$function = $_POST['function'];
$timestamp = $_POST['timestamp'];

$content = mysqli_query($db, "INSERT INTO `projectrooms`(`meta_id`, `projectid`, `apartment`, `wall`, `function`, `timestamp`) VALUES (NULL,'$pr_id','$apartment','$wall','$function','$timestamp');");
