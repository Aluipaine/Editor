<?php

require_once '../vendor/config.php';
/**
 * @var mysqli $db
 */
$project_id = $_POST["project_id"];
$room = $_POST["room"];
$name = $db->real_escape_string($_POST["name"]);
$phone = $db->real_escape_string($_POST["phone"]);
$email = $db->real_escape_string($_POST["email"]);
$type = $db->real_escape_string($_POST["type"]);

$db->query("INSERT INTO `customer_contacts` (`project`, `roomattached`, `name`, `tel`, `email`, `type`) 
						VALUES ($project_id, '$room', '$name', '$phone', '$email', '$type')");

echo "ok";
