<?php
// This file updates room status and workdiary

require 'vendor/config.php';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
  [$project_id, $room, $status] = explode(';', $_GET['post']);
  [$letter, $x, $y] = explode(',', $room);

  $rooms = json_decode(mysqli_query($db, "SELECT `meta_value` from `projectmeta` WHERE `id`=$project_id AND `meta_key`='{$letter}_rooms'")->fetch_row()[0], true);

  foreach ($rooms as $id => $room_data) {
    if ($room_data['positionX'] == $x && $room_data['positionY'] == $y) {
      break;
    }
  }

  $walls = ['a_room', 'b_room', 'c_room', 'd_room', 'k_room', 'l_room'];
  foreach ($walls as $wall) {
    $room_data[$wall] = str_replace(explode('~', $room_data[$wall])[1], $status, $room_data[$wall]);
  }

  $rooms[$id] = $room_data;
  $rooms = json_encode($rooms);

  mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$rooms' WHERE `id`=$project_id AND `meta_key`='{$letter}_rooms'");

  $timestamp = time();
  mysqli_query($db, "INSERT INTO `workdiary` (`meta_id`, `projectid`, `who`, `what`, `where`, `timestamp`) VALUES (NULL,'$project_id','','$status','$room','$timestamp');");
} catch (Exception $e) {
  $error = true;
}
?>


<!DOCTYPE html>
<html lang="fI">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kiitos!</title>

  <link rel="stylesheet" href="/css/modal.css">
  <link rel="stylesheet" href="/css/style.css">

  <link rel="apple-touch-icon" sizes="180x180" href="/css/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/css/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/css/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/css/favicon-16x16.png">
  <link rel="icon" type="image/x-icon" href="/css/favicon.ico">

  <style>

    h1 {
      margin-top: 10vh
    }
    p,img,i {
      text-align: center;
      margin: 10px auto;
      display: block;
      max-width: 100%
    }
  </style>
</head>
<body>
<?php if (!$error) { ?>
  <h1>Kiitämme ilmoituksesta!</h1>
  <p>Voimme nyt edetä urakassa eteenpäin :) </p>
  <img src="https://www.kiipeilytekniikka.com/wp-content/uploads/2017/03/Ruuvausta_pieni.jpg">
<?php } else { ?>
  <h1>:(</h1>
  <p>Näyttäisi siltä, että linkki on jo vanhentunut. Ottakaa yhteyttä asiakaspalveluun info@kiipeilytekniikka.com</p>
<?php } ?>
</body>
</html>
