<?php
// SENDS AND UPLOADS ATTACHMENT TO THE SERVER IN THE COMMENT FUNCTIONALITY


echo $_FILES["comment__files"];

foreach ($_FILES["comment__files"] as $key) {
    $uploaddir = './uploads/';
    $uploadfile = $uploaddir . basename($key['name']);

    $tmp_name = $key["tmp_name"][$key];
    // basename() may prevent filesystem traversal attacks;
    // further validation/sanitation of the filename may be appropriate
    $name = basename($key["name"][$key]);
    move_uploaded_file($tmp_name, "./uploads/$name");
    echo "ok?";
}

?>