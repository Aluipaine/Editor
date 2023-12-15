<!DOCTYPE html>
<html lang="fi">
<head>
  <meta charset="UTF-8">
  <title>WF työmaaeditori</title>
  <link rel="stylesheet" href="/css/modal.css">
  <link rel="stylesheet" href="/css/style.css">
  
  <link rel="apple-touch-icon" sizes="180x180" href="/css/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/css/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/css/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/css/favicon-16x16.png">
  <link rel="icon" type="image/x-icon" href="/css/favicon.ico">

  <?php 


    $usr = $_GET["user"];

    $usr_role = mysqli_query($db, "SELECT * FROM `users` WHERE `username`='$usr'; ");
    $usr_role = mysqli_fetch_all($usr_role);

    $usr_role = $usr_role[3];

    if($usr_role) {
      if($usr_role != 'mittaus') {
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        
      }
      else {
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
      }
    }
    else {
      echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    }
  ?>
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/css/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  
  <!-- <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script> -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>

  <script src='/js/html2canvas.min.js'></script>
  

</head>
<body>
