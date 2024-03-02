<?php

//THIS FILE MAKES CANCELS THE PREVIOUS MOVE IN THE EDITOR
require_once 'vendor/config.php';

$project_id = $_POST['project_id'];
$username = $_POST['username'];

$log = mysqli_query($db, "SELECT * FROM `kumoalog` WHERE `project_id`=$project_id AND `username`='$username' ORDER BY `id` DESC")->fetch_assoc();

try {
    $queries = explode(";", $log["undo"]);
    foreach($queries as $q) {
        if(isset($q) && $q != "")
            mysqli_query($db, $q);
    }

    mysqli_query($db, "DELETE FROM `kumoalog` WHERE `project_id`='$project_id' AND `username`='$username'");
    echo "ok";
} catch(Exception $e) {
    echo "sql error: " . $e;
}
