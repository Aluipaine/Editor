<?php
// THIS FILE GETS ANSWER TO THE COMMENT

require "vendor/config.php";

$answer_to = $_POST['answer_to'];
$usr = $_POST['user'];
$usrpermissions_ = mysqli_query($db, "SELECT * FROM `users` WHERE `username`='$usr';");
$usrpermissions = mysqli_fetch_all($usrpermissions_);


$open_comments_ = mysqli_query($db, "SELECT * FROM `comments` WHERE `ending_time`='' AND `answer_to`='$answer_to';");
$_open_comments = mysqli_fetch_all($open_comments_);
// print_r($_open_comments);

// echo $usrpermissions[0][4];
$txt = "";
foreach ($_open_comments as $value) {
    if($usrpermissions[0][4] == 0) {
        if($usrpermissions[0][1] == $value[7] || $usrpermissions[0][1] == $value[8]) {
            $txt .= $value[0] . "," . $value[1] . "," . $value[2] . "," . $value[3]. "," . $value[4] . "," .  $value[5] . "," . $value[6] . "," . $value[7] . "," .  $value[8] . "," . $value[9] . "," . $value[10] . "," . $value[11] . "," . $value[12] . "," . $value[13] . "," . $value[14];
            $txt .= "~";
        }
    }
    else {
        $txt .= $value[0] . "," . $value[1] . "," . $value[2] . "," . $value[3]. "," . $value[4] . "," .  $value[5] . "," . $value[6] . "," . $value[7] . "," .  $value[8] . "," . $value[9] . "," . $value[10] . "," . $value[11] . "," . $value[12] . "," . $value[13] . "," . $value[14];
        $txt .= "~";
    }
    
}

echo $txt;

?>