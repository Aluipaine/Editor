<?php 
// Include config file
require "vendor/config.php";

$comment_id = $_POST['comment_id'];
$ending_time = date("Y-m-d H:i:s");
$meta = mysqli_query($db, "UPDATE `comments` SET `ending_time` = '$ending_time' WHERE `comments`.`id` = '$comment_id';");
$date = date("Y-m-d H:i:s");



// $comment_id = "combe7b588b6a198";
// $ending_time = date("Y-m-d H:i:s");


// $pr_name = $_pr_name

$pr_comm_ = mysqli_query($db, "SELECT * FROM `comments` WHERE `id`='$comment_id' ");
$_pr_comm = mysqli_fetch_all($pr_comm_);
$pr_comm = $_pr_comm[0][5];

// print_r($_pr_name);

$project_id = $_pr_comm[0][1];
$pr_name_ = mysqli_query($db, "SELECT * FROM `projects` WHERE `id`=$project_id ");
$_pr_name = mysqli_fetch_all($pr_name_)[0][1];

// print_r($_pr_comm);
// print_r($_pr_name);
// print_r("SELECT * FROM `comments` WHERE `id`='$comment_id' ");

$to = "jyri@gromi.fi";
$subject = "Tiketti kuitattu, hanke " . $_pr_name;
$txt = "Tiketti kuitattu projektissa " . $_pr_name . " \n Sisältö: " . '"' . $pr_comm . '"' . " \n Kuittausaika: " . $ending_time;

// echo $subject;
// echo $txt;
$headers = "From: webmaster@teditori.gromi.fi";
mail($to,$subject,$txt,$headers);


?>