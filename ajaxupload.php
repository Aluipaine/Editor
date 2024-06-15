<?php

require "vendor/config.php";

// Count total files
if (isset($_FILES['files-1'])) {
   $countfiles_1 = count($_FILES['files-1']['name']);
}
if (isset($_FILES['files-2'])) {
   $countfiles_2 = count($_FILES['files-2']['name']);
}
if (isset($_FILES['files-3'])) {
   $countfiles_3 = count($_FILES['files-3']['name']);
}
if (isset($_FILES['files-4'])) {
   $countfiles_4 = count($_FILES['files-4']['name']);
}
if (isset($_FILES['files-5'])) {
   $countfiles_5 = count($_FILES['files-5']['name']);
}
if (isset($_FILES['files-6'])) {
   $countfiles_6 = count($_FILES['files-6']['name']);
}
if (isset($_FILES['comment__files'])) {
   $comment__files = count($_FILES['comment__files']['name']);
}

// Upload Location
$upload_location = "uploads/";

// To store uploaded files path
$files_arr = [];
for ($index = 0; $index < $comment__files; $index++) {
   if (isset($_FILES['comment__files']['name'][$index]) && $_FILES['comment__files']['name'][$index] != '') {
      // File name
      $filename = $_FILES['comment__files']['name'][$index];

      // Get extension
      $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

      // Valid extension
      $valid_ext = ["pdf","jpg","png","sql","dwg","docx","xls","xlsx","mp4"];

      // Check extension
      if (in_array($ext, $valid_ext)) {
         $preset = str_replace(
            [' ', 'ä', 'ö', 'å' ],
            ['-', 'a', 'o', 'ao'],
            $_POST['preset']
         );

         $projectid = $_POST['projectid'];
         $rooms = $_POST['room'];
         $room = explode(',', $rooms)[0];
         $date = date('Y-m-d_H-i');

         // Check if directory exists
         $dir = $upload_location.$projectid.'/'.$room;
         if (!is_dir($dir)) {
            mkdir($dir, 0775, true);
         }

         // Unique file path
         do {
            $rand = substr(uniqid('', true), -4);
            $title = $room.'_'.$preset.'_'.$date.'_'.$rand.'.'.$ext;
            $path = $dir.'/'.$title;
         } while (file_exists($path));

         // Upload file
         if (move_uploaded_file($_FILES['comment__files']['tmp_name'][$index], $path)) {
            // Add file to database
            $timestamp = time();
            mysqli_query($db, "INSERT INTO `project_files` (`projectid`, `room`, `photo_title`, `url`, `tags`, `timestamp`) VALUES ('$projectid', '$rooms', '$title', '$path', '', '$timestamp')");

            $id = mysqli_insert_id($db);
            $files_arr[$id] = $path;
         }
      }
   }
}
// Loop all files
for($index = 0;$index < $countfiles_1;$index++){

   if(isset($_FILES['files-1']['name'][$index]) && $_FILES['files-1']['name'][$index] != ''){
      // File name
      $filename = $_FILES['files-1']['name'][$index];

      // Get extension
      $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

      // Valid image extension
      $valid_ext = array("pdf");

      // Check extension
      if(in_array($ext, $valid_ext)){

         // File path
         $path = $upload_location.$filename;

         // Upload file
         if(move_uploaded_file($_FILES['files-1']['tmp_name'][$index],$path)){
            $files_arr[] = $path;
         }
      }
   }
}
for($index = 0;$index < $countfiles_2;$index++){

   if(isset($_FILES['files-2']['name'][$index]) && $_FILES['files-2']['name'][$index] != ''){
      // File name
      $filename = $_FILES['files-2']['name'][$index];

      // Get extension
      $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

      // Valid image extension
      $valid_ext = array("pdf");

      // Check extension
      if(in_array($ext, $valid_ext)){

         // File path
         $path = $upload_location.$filename;

         // Upload file
         if(move_uploaded_file($_FILES['files-2']['tmp_name'][$index],$path)){
            $files_arr[] = $path;
         }
      }
   }
}

for($index = 0;$index < $countfiles_3;$index++){

   if(isset($_FILES['files-3']['name'][$index]) && $_FILES['files-3']['name'][$index] != ''){
      // File name
      $filename = $_FILES['files-3']['name'][$index];

      // Get extension
      $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

      // Valid image extension
      $valid_ext = array("pdf");

      // Check extension
      if(in_array($ext, $valid_ext)){

         // File path
         $path = $upload_location.$filename;

         // Upload file
         if(move_uploaded_file($_FILES['files-3']['tmp_name'][$index],$path)){
            $files_arr[] = $path;
         }
      }
   }
}

for($index = 0;$index < $countfiles_4;$index++){

   if(isset($_FILES['files-4']['name'][$index]) && $_FILES['files-4']['name'][$index] != ''){
      // File name
      $filename = $_FILES['files-4']['name'][$index];

      // Get extension
      $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

      // Valid image extension
      $valid_ext = array("pdf");

      // Check extension
      if(in_array($ext, $valid_ext)){

         // File path
         $path = $upload_location.$filename;

         // Upload file
         if(move_uploaded_file($_FILES['files-4']['tmp_name'][$index],$path)){
            $files_arr[] = $path;
         }
      }
   }
}

for($index = 0;$index < $countfiles_5;$index++){

   if(isset($_FILES['files-5']['name'][$index]) && $_FILES['files-5']['name'][$index] != ''){
      // File name
      $filename = $_FILES['files-5']['name'][$index];

      // Get extension
      $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

      // Valid image extension
      $valid_ext = array("pdf");

      // Check extension
      if(in_array($ext, $valid_ext)){

         // File path
         $path = $upload_location.$filename;

         // Upload file
         if(move_uploaded_file($_FILES['files-5']['tmp_name'][$index],$path)){
            $files_arr[] = $path;
         }
      }
   }
}

for($index = 0;$index < $countfiles_6;$index++){

   if(isset($_FILES['files-6']['name'][$index]) && $_FILES['files-6']['name'][$index] != ''){
      // File name
      $filename = $_FILES['files-6']['name'][$index];

      // Get extension
      $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

      // Valid image extension
      $valid_ext = array("pdf");

      // Check extension
      if(in_array($ext, $valid_ext)){

         // File path
         $path = $upload_location.$filename;

         // Upload file
         if(move_uploaded_file($_FILES['files-6']['tmp_name'][$index],$path)){
            $files_arr[] = $path;
         }
      }
   }
}


echo json_encode($files_arr);
die;
