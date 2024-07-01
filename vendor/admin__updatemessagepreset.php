<?php

// This file updates message preset
require "config.php";
$id = $_POST['id'];
$name = $_POST['name'];
$subject = $_POST['subject'];
$preset_type = $_POST['preset_type'];
$message = $_POST['message'];
$meta = mysqli_query($db, "REPLACE `message_templates` VALUES ($id, '$name', '$subject','$preset_type', '$message')");
