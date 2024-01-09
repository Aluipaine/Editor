<?php
require "config.php";

$pr_id = $_POST["pr_id"];
$room = $_POST["room"];
$wall = $_POST["wall"];

$content = mysqli_query($db, "SELECT * FROM `savingtable` WHERE `projectid`='$pr_id' AND `apartment`='$room' AND `wall`='$wall'")->fetch_all();
echo json_encode($content);



?>