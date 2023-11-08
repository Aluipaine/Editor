<?php


require "config.php";

$project_id = intval($_POST['project_id']);
$project_type = $_POST['project_type'];

$meta = mysqli_query($db, "UPDATE `projects` SET `project_type`='$project_type' WHERE `id`='$project_id'");

?>