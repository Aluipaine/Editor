<?php
// This file changes shopping list item status to the invoiced (=ready)
require "config.php";




$identification = $_POST['identification'];

$meta = mysqli_query($db, "UPDATE `shoppinglist` SET `laskutettu`='KYLLA' WHERE `identification`='$identification'");
print_r($meta);


?>
