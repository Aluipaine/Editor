<?php

require_once '../vendor/config.php';
/**
 * @var mysqli $db
 */
$project_id = $_POST["project_id"];

$rooms = implode("','", $_POST["rooms"]);

$contacts = $db->query("SELECT * FROM `customer_contacts` WHERE `project`='$project_id' AND `roomattached` IN ('$rooms')");
if ($contacts && $contacts->num_rows) {
    $contacts = $contacts->fetch_all(MYSQLI_ASSOC);
}
else {
    $contacts = [];
}


$project_contacts = $db->query("SELECT JSON_OBJECTAGG(meta_key, meta_value) FROM projectmeta WHERE meta_key IN ('prc_1', 'prc_1_email', 'prc_1_puh', 'prc_2', 'prc_2_email', 'prc_2_puh', 'prc_3', 'prc_3_email', 'prc_3_puh')");
if ($project_contacts) {
    $project_contacts = json_decode($project_contacts->fetch_row()[0], true);
    $contacts[] = [
        'name' => $project_contacts['prc_1'],
        'tel' => $project_contacts['prc_1_puh'],
        'email' => $project_contacts['prc_1_email'],
        'type' => 'hankkeen_johtaja',
    ];
    $contacts[] = [
        'name' => $project_contacts['prc_2'],
        'tel' => $project_contacts['prc_2_puh'],
        'email' => $project_contacts['prc_2_email'],
        'type' => 'tilaaja',
    ];
    $contacts[] = [
        'name' => $project_contacts['prc_3'],
        'tel' => $project_contacts['prc_3_puh'],
        'email' => $project_contacts['prc_3_email'],
        'type' => 'myyja',
    ];
}

echo json_encode($contacts);
