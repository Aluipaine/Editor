<?php

// This file deletes message type from the database
require "config.php";
$id = $_POST['id'];
$meta = mysqli_query($db, "DELETE FROM `message_type` WHERE `id`='$id'");
