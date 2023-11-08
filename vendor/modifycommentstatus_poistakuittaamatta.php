<?php
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
$comment_status = strtolower($_POST['comment_status']);
$ending_time = date("Y-m-d H:i:s");

$meta = mysqli_query($db, "UPDATE `comments` SET `status`='$comment_status', `ending_time`='$ending_time' WHERE `id`='$comment_id'");
print_r($meta);


$pr_comm_ = mysqli_query($db, "SELECT * FROM `comments` WHERE `id`='$comment_id' ");
$_pr_comm = mysqli_fetch_all($pr_comm_);
$pr_comm = $_pr_comm[0][5];
// print_r($_pr_name);
$project_id = $_pr_comm[0][1];
$pr_name_ = mysqli_query($db, "SELECT * FROM `projects` WHERE `id`=$project_id ");
$pr_name = mysqli_fetch_all($pr_name_)[0][1];

$m_data = mysqli_query($db, "SELECT * FROM `mail_templates` WHERE `messagename`='deleted_without_consent'");
$m_da = mysqli_fetch_all($m_data);
$m_data = $m_da[0];

$m_headers = explode("~~~~", $m_data[1]);
$m_subject = explode("~~~~", $m_data[3]);
$m_messages = explode("~~~~", $m_data[4]);

$mail = new PHPMailer(); 
$mail->CharSet = "UTF-8";

$to =  $m_headers[1];
$from =  $m_headers[0];
$subject = $m_subject[0] . $pr_name . $m_subject[1];
$txt = "<br>" . "Huone " . $_pr_comm[0][2] . ". 
<br>Aihe ".$_pr_comm[0][3]."
<br>Sisältö: ".$_pr_comm[0][5]."
<br>Tiedostot: ".$_pr_comm[0][6]."
<br>Keneltä: ".$_pr_comm[0][7]."
<br>Kenelle: ".$_pr_comm[0][8]."
<br>Kriittisyys: ". str_replace("critical", "Kriittinen", str_replace("no_critical", "Ei kriittinen", $_pr_comm[0][9]))."
<br>Deadline: ".$_pr_comm[0][14]."
<br>Avattu: ".$_pr_comm[0][10]."
<br>Aikaleima: ".$date."";


$mail->isSMTP();                                            // Send using SMTP
$mail->Host       = 'mail.westface.fi';                    // Set the SMTP server to send through
$mail->SMTPAuth   = true;          
$mail->addReplyTo($from,  $m_headers[2]);

$mail->Username   =  $from;                     // SMTP username
$mail->Password   = $m_headers[3];                               // SMTP password
$mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
$mail->Port       = 587; 
$mail->From = $from; 

$mail->FromName = $m_headers[2]; 
$mail->addAddress($to, $m_headers[4]); 
// $mail->addAddress('marko.virtanen@westface.fi', "Marko Virtanen"); 

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


?>