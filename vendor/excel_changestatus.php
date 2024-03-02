<?php 
// This file Changes orders status in the orderlog. 
require "config.php";

$timedate = $_POST['timedate'];
$newstatus = $_POST['status'];


$meta = mysqli_query($db, "UPDATE `orderlog` SET `status`='$newstatus' WHERE `timedate`='$timedate'");

echo "UPDATE `orderlog` SET `status`='$newstatus' WHERE `timedate`='$timedate'";
