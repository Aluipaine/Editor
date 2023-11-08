<?php

require "config.php";

$project_id = intval($_POST['project_id']);
$naming = $_POST['naming'];
$attachments = $_POST['attachments'];
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$attachments' WHERE `id`='$project_id' AND `meta_key`='$naming'");
echo  "UPDATE `projectmeta` SET `meta_value`='$attachments' WHERE `id`='$project_id' AND `meta_key`='$naming'";
?>