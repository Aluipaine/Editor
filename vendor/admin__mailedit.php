<?php

// This file updates mail template text
require "config.php";
$header_array = $_POST['header_array'];
$subject_array = $_POST['subject_array'];
$messagename = $_POST['messagename'];
$message_array = $_POST['message_array'];


$meta = mysqli_query($db, "UPDATE `mail_templates` SET `header_array`='$header_array', `subject_array`='$subject_array', `message_array`='$message_array' WHERE `messagename`='$messagename'");



















?>