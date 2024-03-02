<?php
// THIS FILE GETS ADDED USERS IN THE PROJECT ID
require_once 'vendor/config.php';

if(!isset($_POST['project_id'])) {
    die();
}

$users = mysqli_query($db, "SELECT `username` FROM `addedusers` WHERE `project_id`=\"" . $_POST['project_id'] . "\");");

echo json_encode(mysqli_fetch_all($users));

?>