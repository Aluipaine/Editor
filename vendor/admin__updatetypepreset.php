<?php

// This file updates message type
require "config.php";
$id = $_POST['id'];
$name = $_POST['name'];
$svg_adress = $_POST['svg_adress'];
$meta = mysqli_query($db, "REPLACE `message_types` VALUES ($id, '$name', '$svg_adress')");
