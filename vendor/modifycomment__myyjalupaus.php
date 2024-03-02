<?php
require "config.php";

$comment_id = $_POST['comment_id'];
$sellers_promise = strtolower($_POST['myyja_lupaus']);

$meta = mysqli_query($db, "UPDATE `comments` SET `myyja_lupaus`='$sellers_promise' WHERE `id`='$comment_id'");
print_r($meta);


$c_ch_n_ = mysqli_query($db, "SELECT * FROM `comments` WHERE `id`='$comment_id'; ");
$c_ch_n = mysqli_fetch_all($c_ch_n_)[0];
print_r($c_ch_n[0]);

// $meta = mysqli_query($db, "INSERT INTO `changed__comments_interactive` (`commentid`, `projectid`,`room`,`name`,`x_y`, `content`, `attachments`, `comment_from`, `comment_to`, `urgency`, `creation_time`, `ending_time`, `aihe`, `deadline`, `answer_to`,`time_estimate`,`status`,`tja`,`tta`,`h_remaining`,`pvm_remaining`,`readiness`) VALUES ('$c_ch_n[0]', '$c_ch_n[1]', '$c_ch_n[2]', '$c_ch_n[3]', '$c_ch_n[4]', '$c_ch_n[5]', '$c_ch_n[6]', '$c_ch_n[7]', '$c_ch_n[8]', '$c_ch_n[9]',  '$c_ch_n[10]', '$c_ch_n[11]', '$c_ch_n[12]', '$c_ch_n[13]', '$c_ch_n[14]', '$c_ch_n[15]','$c_ch_n[16]','$c_ch_n[17]','$c_ch_n[18]','$c_ch_n[19]','$c_ch_n[20]','$c_ch_n[21]') ON DUPLICATE KEY UPDATE `commentid`='$c_ch_n[0]', `projectid`='$c_ch_n[1]', `room`='$room', `name`='$name', `x_y`='$x_y', `content`='$content', `attachments`='$attachments', `comment_from`='$comment_from', `comment_to`='$comment_to', `urgency`='$urgency', `creation_time`='$starting_time', `ending_time`='$ending_time', `aihe`='$aihe', `deadline`='$deadline', `answer_to`='$answer_to', `time_estimate`='$time_estimate',`status`='$status',`tja`='$tja',`tta`='$tta',`h_remaining`='$h_remaining',`pvm_remaining`='$pvm_remaining',`readiness`='$readiness');");

$pr_name_ = mysqli_query($db, "SELECT * FROM `projects` WHERE `id`='$c_ch_n[1]' ");
$_pr_name = mysqli_fetch_all($pr_name_);
$pr_name = $_pr_name[0][1];

$meta = mysqli_query($db, "INSERT INTO `changed__comments_interactive` (`commentid`, `projectid`,`room`,`name`,`x_y`, `content`, `attachments`, `comment_from`, `comment_to`, `urgency`, `creation_time`, `ending_time`, `aihe`, `deadline`, `answer_to`,`time_estimate`,`status`,`tja`,`tta`,`h_remaining`,`pvm_remaining`,`readiness`,`myyja_lupaus`) VALUES ('$c_ch_n[0]', '$pr_name', '$c_ch_n[2]', '$c_ch_n[3]', '$c_ch_n[4]', '', '', '', '', '$c_ch_n[9]',  '', '', '', '$c_ch_n[13]', '', '$c_ch_n[15]','','','','$c_ch_n[19]','','','$myyja_lupaus') ON DUPLICATE KEY UPDATE `myyja_lupaus`='$myyja_lupaus';");




?>