<?php
// Include config file
require "config.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

header('Content-Type: text/html; charset=utf-8');
function utf8_for_xml($string)
{
  return preg_replace('/[^\x{0009}\x{000a}\x{000d}\x{0020}-\x{D7FF}\x{E000}-\x{FFFD}]+/u',' ', $string);
}
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
$subject = $_POST['aihe'];
$deadline = $_POST['deadline'];
$answer_to = $_POST['answer_to'];
$time_estimate = $_POST['time_estimate'];
$starting_time = date("Y-m-d H:i:s");

// $subject= "tyonjohto kommentit";
// $answer_to = "";
// $attachments = "https://editori.westface.fi/uploads/48950WIN_20231027_17_50_07_Pro.jpg\n";
// $comment_from = "tyonjohto";
// $comment_id = "combabf7e14f25c8";
// $comment_to = "Admin";
// $content = "test";
// $deadline = "2023-11-02";
// $ending_time = "";
// $name = "TEST";
// $project_id = 25;
// $room = "L11B308TSTOJYRI>a";
// $time_estimate = "1";
// $urgency = "no_critical";
// $x_y = '1';


$meta = mysqli_query($db, "INSERT INTO `comments` (`id`, `projectid`,`room`,`name`,`x_y`, `content`, `attachments`, `comment_from`, `comment_to`, `urgency`, `creation_time`, `ending_time`, `aihe`, `deadline`, `answer_to`,`time_estimate`,`status`,`tja`,`tta`,`h_remaining`,`pvm_remaining`,`readiness`,`myyja_lupaus`) VALUES ('$comment_id', '$project_id', '$room', '$name', '$x_y', '$content', '$attachments', '$comment_from', '$comment_to', '$urgency',  '$starting_time', '$ending_time', '$subject', '$deadline', '$answer_to', '$time_estimate','aloittamatta','','','$time_estimate','','','');");
echo "INSERT INTO `comments` (`id`, `projectid`,`room`,`name`,`x_y`, `content`, `attachments`, `comment_from`, `comment_to`, `urgency`, `creation_time`, `ending_time`, `aihe`, `deadline`, `answer_to`,`time_estimate`,`status`,`tja`,`tta`,`h_remaining`,`pvm_remaining`,`readiness`,`myyja_lupaus`) VALUES ('$comment_id', '$project_id', '$room', '$name', '$x_y', '$content', '$attachments', '$comment_from', '$comment_to', '$urgency',  '$starting_time', '$ending_time', '$subject', '$deadline', '$answer_to', '$time_estimate','aloittamatta','','','$time_estimate','','','');";
$meta = mysqli_query($db, "INSERT INTO `changed__comments_interactive` (`commentid`, `projectid`,`room`,`name`,`x_y`, `content`, `attachments`, `comment_from`, `comment_to`, `urgency`, `creation_time`, `ending_time`, `aihe`, `deadline`, `answer_to`,`time_estimate`,`status`,`tja`,`tta`,`h_remaining`,`pvm_remaining`,`readiness`,`myyja_lupaus`) VALUES ('$comment_id', '$project_id', '$room', '$name', '$x_y', '$content', '$attachments', '$comment_from', '$comment_to', '$urgency',  '$starting_time', '$ending_time', '$subject', '$deadline', '$answer_to', '$time_estimate','aloitettu','','','$time_estimate','','','') ON DUPLICATE KEY UPDATE `commentid`='$comment_id', `projectid`='$project_id', `room`='$room', `name`='$name', `x_y`='$x_y', `content`='$content', `attachments`='$attachments', `comment_from`='$comment_from', `comment_to`='$comment_to', `urgency`='$urgency', `creation_time`='$starting_time', `ending_time`='$ending_time', `aihe`='$subject', `deadline`='$deadline', `answer_to`='$answer_to', `time_estimate`='$time_estimate';");
// $date = date("Y-m-d H:i:s");
$pr_name_ = mysqli_query($db, "SELECT * FROM `projects` WHERE `id`=$project_id ");
$_pr_name = mysqli_fetch_all($pr_name_);
$pr_name = $_pr_name[0][1];

$ausr_ = mysqli_query($db, "SELECT * FROM `users` WHERE `username`='$comment_to'");
$_ausr = mysqli_fetch_all($ausr_);
$usr_email = $_ausr[0][7];


if($urgency == 'no_critical') {

}
else {
  $m_data = mysqli_query($db, "SELECT * FROM `mail_templates` WHERE `messagename`='kommentin_lisays'");
  $m_da = mysqli_fetch_all($m_data);
  $m_data = $m_da[0];

  $m_headers = explode("~~~~", $m_data[1]);
  $m_subject = explode("~~~~", $m_data[3]);
  $m_messages = explode("~~~~", $m_data[4]);

  $mail = new PHPMailer();
  $mail->CharSet = "UTF-8";
  $to = $m_headers[1];
  $from = $m_headers[0];
  $subject = $m_subject[0] . $pr_name . $m_subject[1];
  $txt = "Huone " . $room . ".
  <br>Aihe ".$subject."
  <br>Sisältö: ".$content."
  <br>Tuntiarvio: ".$time_estimate."
  <br>Tiedostot: ".$attachments."
  <br>Keneltä: ".$comment_from."
  <br>Kenelle: ".$comment_to."
  <br>Kriittisyys: ".str_replace("critical", "Kriittinen", str_replace("no_critical", "Ei kriittinen", $urgency))."
  <br>Deadline: ".$ending_time."
  <br>Avattu: ".$starting_time."";

  $mail->isSMTP();                                            // Send using SMTP
  $mail->Host       = 'mail.westface.fi';                    // Set the SMTP server to send through
  $mail->SMTPAuth   = true;
  $mail->addReplyTo($from, $m_headers[2]);

  $mail->Username   = $from;                     // SMTP username
  $mail->Password   = $m_headers[3];                               // SMTP password
  $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
  $mail->Port       = 587;
  $mail->From = $from;


  $mail->FromName = $m_headers[2];
  $mail->addAddress($to, $m_headers[4]);
  // $mail->addAddress('marko.virtanen@westface.fi', "Marko Virtanen");
  // $mail->addAddress($usr_email, $comment_to);

  //Provide file path and name of the attachments
  // $mail->addAttachment("file.txt", "File.txt");
  // $mail->addAttachment("images/profile.png"); //Filename is optional
  $mail->isHTML(true);
  $mail->Subject = $subject;
  $mail->Body = $txt;
  // $mail->AltBody = $txt;
  if(!$mail->send())
  {
  echo "Mailer Error: " . $mail->ErrorInfo;
  }
  else
  {  echo "Message has been sent successfully"; }
}


?>
