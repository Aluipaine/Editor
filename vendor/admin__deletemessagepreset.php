<?php

// This file deletes message preset from the database
require "config.php";
$id = $_POST['id'];
$meta = mysqli_query($db, "DELETE FROM `message_templates` WHERE `id`='$id'");
