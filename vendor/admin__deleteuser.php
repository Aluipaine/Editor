<?php

// This file deletes user from the database (admin page)
require "config.php";
$prid = $_POST['prid'];
$user = str_replace("\n","",$_POST['user']);
$meta = mysqli_query($db, "DELETE FROM `addedusers` WHERE `project_id`='$prid' AND `username` LIKE '%$user%'");
echo "DELETE FROM `addedusers` WHERE `project_id`='$prid' AND `username` LIKE '%$user%'";

















?>