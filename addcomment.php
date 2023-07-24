<?php 
// Include config file
require "vendor/config.php";

$comment_id = $_POST['comment_id'];
$project_id = $_POST['project_id'];
$room = $_POST['room'];
$name = $_POST['name'];
$x_y = $_POST['x_y'];
$content = $_POST['content'];
$attachments = $_POST['attachments'];
$comment_from = $_POST['comment_from'];
$comment_to = $_POST['comment_to'];
$urgency = $_POST['urgency'];
$ending_time = $_POST['ending_time']; 
$aihe = $_POST['aihe']; 


$starting_time = date("Y-m-d H:i:s");
$meta = mysqli_query($db, "INSERT INTO `comments` (`id`, `projectid`,`room`,`name`,`x_y`, `content`, `attachments`, `comment_from`, `comment_to`, `urgency`, `creation_time`, `ending_time`, `aihe`) VALUES ('$comment_id', '$project_id', '$room', '$name', '$x_y', '$content', '$attachments', '$comment_from', '$comment_to', '$urgency',  '$starting_time', '$ending_time', '$aihe');");

// $date = date("Y-m-d H:i:s");

$pr_name_ = mysqli_query($db, "SELECT * FROM `projects` WHERE `id`=$project_id ");
$_pr_name = mysqli_fetch_all($pr_name_);
$pr_name = $_pr_name[0][1];

$to = "jyri@gromi.fi";
$subject = "Uusi kommentti, hanke " . $pr_name;
// $comment_id #OK
// $project_id #OK
// $room #OK
// $x_y #OK
// $content #OK
// $attachments
// $comment_from #OK
// $comment_to #OK
// $urgency #OK
// $ending_time
// $starting_time
$txt = "Uusi kommentti projektissa #" . $project_id . ", huone " . $room . ", X|Y (mm): ". $x_y . " \n" ."Keneltä: " . $comment_from . ", Kenelle: " . $comment_to . " \n" . "Sisältö: " . $aihe . "\n" . $content . "\n" ."Avattu: " . $starting_time . "\n" ."Lisätyt tiedostot: " . $attachments;
$headers = "From: webmaster@teditori.gromi.fi";
mail($to,$subject,$txt,$headers);


 ?>