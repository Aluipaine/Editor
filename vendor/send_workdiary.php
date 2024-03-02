<?php
require "config.php";

// This file sends work diary events to database
$pr_id = $_POST['pr_id'];
$who = $_POST['who'];
$what = $_POST['what'];
$where = $_POST['where'];
$timestamp = time();
$meta = mysqli_query($db, "INSERT INTO `workdiary` (`meta_id`, `projectid`, `who`, `what`, `where`, `timestamp`) VALUES (NULL,'$pr_id','$who','$what','$where','$timestamp');");

echo "INSERT INTO `workdiary`(`meta_id`, `projectid`, `who`, `what`, `where`, `timestamp`) VALUES (NULL,'$pr_id','$what','$who','$where','$timestamp');";


?>

