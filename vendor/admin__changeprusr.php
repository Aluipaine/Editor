<?php

//This file sets new user to project
require "config.php";
$prid = $_POST['prid'];
$user = str_replace("\n","", $_POST['user']);
$meta = mysqli_query($db, "UPDATE `projects` SET `user`='$user' WHERE `id`='$prid'");
echo "UPDATE `projects` SET `user`='$user' WHERE `id`='$prid'";










?>