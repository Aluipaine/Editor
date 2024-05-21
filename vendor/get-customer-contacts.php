<?php

require_once '../vendor/config.php';
/**
 * @var mysqli $db
 */
$project_id = $_POST["project_id"];
$room = $_POST["room"];

$contacts = $db->query("SELECT * FROM `customer_contacts` WHERE `project`='$project_id' AND `roomattached`='$room'");
if ($contacts && $contacts->num_rows) {
    $contacts = $contacts->fetch_all(MYSQLI_ASSOC);
}
else {
    $contacts = [];
}

echo json_encode($contacts);
