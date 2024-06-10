<?php

// THIS FILE MAKES UPLOAD FUNCTIONALITY FROM THE NEW-PROJECT.PHP PAGE
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_FILES['files'])) {
      $errors = [];
      $extensions = ['jpg', 'jpeg', 'png', 'gif', 'pdf', 'mp4', 'xml', 'xls', 'xlsx'];
      $target = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
      $all_files = count($_FILES['files']['tmp_name']);

      for ($i = 0; $i < $all_files; $i++) {
          $file_name = $_FILES['files']['name'];
          $file_tmp = $_FILES['files']['tmp_name'];
          $file_type = $_FILES['files']['type'];
          $file_size = $_FILES['files']['size'];
          $file_ext = strtolower(end(explode('.', $_FILES['files']['name'])));
          $rand = substr(uniqid('', true), -5);

          $file = $target . $rand . $file_name;

          if (!in_array($file_ext, $extensions)) {
              $errors[] = 'Extension not allowed: ' . $file_name . ' ' . $file_type;
          }

        //   if ($file_size > 2097152) {
        //       $errors[] = 'File size exceeds limit: ' . $file_name . ' ' . $file_type;
        //   }

          if (empty($errors)) {
              move_uploaded_file($file_tmp, $file);
              echo str_replace("C:/OSPanel/domains/localhost/uploads/","",str_replace("/var/www/westface_fi_usr/data/www/editori.westface.fi/uploads/","",$file));
          }
      }

      if ($errors) print_r($errors);
  }
}
?>