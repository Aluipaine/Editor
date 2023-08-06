<?php 
// Include config file
require "config.php";

$id = 100;
$marko_name = "marko Settings";

$s_settings = $_POST['s_settings'];
$s_materials = $_POST['s_materials'];

$query = "UPDATE `projectmeta` SET `meta_value`='$s_settings' WHERE `meta_key`='s_settings';
UPDATE `projectmeta` SET `meta_value`='$s_materials' WHERE `meta_key`='s_materials'";

$meta = mysqli_query($db, $query);

echo "<script>window.location.replace('http://teditori.gromi.fi');</script>";

?>