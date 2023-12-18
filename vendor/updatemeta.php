<?php
require "config.php";


$pr_id = $_POST['pr_id'];
$key = $_POST['meta'];
$value = $_POST['value'];

print_r($key);
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$value' WHERE `id`='$pr_id' AND `meta_key`='$key'");

echo "UPDATE `projectmeta` SET `meta_value`='$value' WHERE `id`=$pr_id AND `meta_key`='$meta'";
?>