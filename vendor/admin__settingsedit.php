<?php


// This file updates settings on admin page 
require "config.php";
$prid = $_POST['prid'];
$key = $_POST['mkey'];
$material_array = $_POST['material_array'];
$meta = mysqli_query($db, "UPDATE `settingsmeta` SET `meta_value`='$material_array' WHERE `meta_key`='$key' AND `id`='$prid'");
echo "UPDATE `settingsmeta` SET `meta_value`='$material_array' WHERE `meta_key`='$key' AND `id`='$prid'";
















?>