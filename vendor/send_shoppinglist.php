<?php
// This file updates status of shopping list items and sends table of edits to admin (management) email
require "config.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

header('Content-Type: text/html; charset=utf-8');

$identification = $_POST['identification'];
$project_id = $_POST['project_id'];
$table = $_POST['table'];

$meta = mysqli_query($db, "UPDATE `shoppinglist` SET `laskutettu`='KYLLA' WHERE `identification`='$identification'");
print_r($meta);

$pr_name_ = mysqli_query($db, "SELECT * FROM `projects` WHERE `id`=$project_id ");
$_pr_name = mysqli_fetch_all($pr_name_);
$pr_name = $_pr_name[0][1];

$modified_data = mysqli_query($db, "SELECT * FROM `mail_templates` WHERE `messagename`='sent_purchases'");
$modified_da = mysqli_fetch_all($modified_data);
$modified_data = $modified_da[0];

$modified_headers = explode("~~~~", $modified_data[1]);
$modified_subject = explode("~~~~", $modified_data[3]);
$modified_messages = explode("~~~~", $modified_data[4]);

$mail = new PHPMailer(); 
$mail->CharSet = "UTF-8";

$to = $modified_headers[1];
$from = $modified_headers[0];
$subject = $modified_subject[0] . $pr_name . $modified_subject[1];
$txt = "<h1>Laskutettavaksi:</h1>". "<br>".$table."";

$mail->isSMTP();                                            // Send using SMTP
$mail->Host       = 'mail.westface.fi';                    // Set the SMTP server to send through
$mail->SMTPAuth   = true;          
$mail->addReplyTo($from, $modified_headers[2]);

$mail->Username   = $from;                     // SMTP username
$mail->Password   = $modified_headers[3];                               // SMTP password
$mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
$mail->Port       = 587; 
$mail->From = $from; 


$mail->FromName = $modified_headers[2]; 
$mail->addAddress($to, $modified_headers[4]);  
$mail->isHTML(true); 
$mail->Subject = $subject; 
$mail->Body = $txt; 

if(!$mail->send()) 
{ 
echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{  echo "Message has been sent successfully"; }


?>
