<?php


require "config.php";

$project_id = intval($_POST['project_id']);
$added__username = $_POST['added__username'];
$added__userpuh = $_POST['added__userpuh'];
$added__useremail = $_POST['added__useremail'];
$added__userrole = $_POST['added__userrole'];
$added__usernewpermission = $_POST['added__usernewpermission'];
$added__userhidingpermission = $_POST['added__userhidingpermission'];
$added__by = $_POST['added__by'];

$created_at = date("Y-m-d H:i:s");
$password = "";

$meta = mysqli_query($db, "INSERT INTO `addedusers`(`project_id`, `username`, `added_by`) VALUES ('$project_id','$added__username','$added__by')");
// echo ;
$meta = mysqli_query($db, "INSERT INTO `users` (`id`, `username`, `password`, `role`, `permissionrank`, `visible_forall`, `phone`, `email`, `company`, `created_at`) VALUES (NULL,'$added__username','$password','$added__userrole','$added__usernewpermission','$added__userhidingpermission','$added__userpuh','$added__useremail','','$created_at') ON DUPLICATE KEY UPDATE `phone`=$added__userpuh, `email`='$added__useremail';");
?>