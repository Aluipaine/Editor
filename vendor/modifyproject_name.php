<?php


require "config.php";

$project_id = intval($_POST['project_id']);
$project_name = $_POST['project_name'];

$meta = mysqli_query($db, "UPDATE `projects` SET `title`='$project_name' WHERE `id`='$project_id'");

?>