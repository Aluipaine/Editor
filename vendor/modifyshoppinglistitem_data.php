<?php


require "config.php";
$item_id = $_POST['item_id'];
$item_name = $_POST['item_name'];
$item_kpl = $_POST['item_kpl'];
$item_shop = $_POST['item_shop'];
$item_meaning = $_POST['item_meaning'];
$item_price = $_POST['item_price'];
$item_measures = $_POST['item_measures'];
$item_from = $_POST['item_from'];
$item_to = $_POST['item_to'];

$meta = mysqli_query($db, "UPDATE `shoppinglist` SET `item`='$item_name',`kpl`='$item_kpl',`shop`='$item_shop',`purpose`='$item_meaning',`hinta`='$item_price',`pituus`='$item_measures',`userfrom`='$item_from',`noutaja`='$item_to' WHERE `identification`='$item_id';");
print_r($meta);