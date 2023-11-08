<?php


require "config.php";
$item_id = $_POST['item_id'];
$item_status = $_POST['item_status'];

$meta = mysqli_query($db, "UPDATE `shoppinglist` SET `status`='$item_status' WHERE `identification`='$item_id';");
print_r($meta);