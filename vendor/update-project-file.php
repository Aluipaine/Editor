<?php

require "config.php";

$id = $_POST['id'];
$tags = $_POST['tags'];

$meta = mysqli_query($db, "UPDATE `project_files` SET `tags`='$tags' WHERE `id`='$id'");
