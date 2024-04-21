<?php

echo 'BEGIN UPLOADING FILES' . '<br>';

if (isset($_FILES['pdffile']) && $_FILES['pdffile']['error'] === UPLOAD_ERR_OK) {
  $tmp_name = $_FILES['pdffile']['tmp_name'];
  $filename = 'uploads/' . $_FILES['pdffile']['name'];
  move_uploaded_file($tmp_name, $filename);
  echo 'PDF file uploaded successfully!' . '<br>';
  sendEmail($filename);
}

if (isset($_POST['xlsfile'])) {
  file_put_contents('uploads/' . $_POST['xlsname'], base64_decode($_POST['xlsfile']));
  echo 'XLS "' . $_POST['xlsname'] . '" file uploaded successfully!' . '<br>';
}

echo 'END UPLOADING FILES' . '<br>';

if (isset($_GET['justsend'])) {
  sendEmail('uploads/L11A203B_WC_Yleinen [4 Seinän Excel].pdf');
}

use PHPMailer\PHPMailer\PHPMailer;

function sendEmail(string $filename) {

  $pdfattach = $filename;
  $xlsattach = str_replace('.pdf', '.xlsx', $filename);

  if (!file_exists($pdfattach)) {
    echo 'File "' .$pdfattach . '" not exists!' ;
    return;
  }

  if (!file_exists($xlsattach)) {
    echo 'File "' .$xlsattach . '" not exists!' ;
    return;
  }

  //Now the filename contains a PDF extension.


  include "vendor/config.php";
  
  require 'vendor/phpmailer/src/Exception.php';
  require 'vendor/phpmailer/src/PHPMailer.php';
  require 'vendor/phpmailer/src/SMTP.php';
  

  $m_data = mysqli_query($db, "SELECT * FROM `mail_templates` WHERE `messagename`='kommentin_lisays'");
  $m_da = mysqli_fetch_all($m_data);
  $m_data = $m_da[0];

  $m_headers = explode("~~~~", $m_data[1]);
  $m_subject = explode("~~~~", $m_data[3]);
  $m_messages = explode("~~~~", $m_data[4]);

  $to = 'jyri@gromi.fi';
  $from = $m_headers[0];
  $subject = 'Projektitiedostot';
  $txt = $xlsattach . '<br>' . $pdfattach;

  $mail = new PHPMailer(true);
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

  $mail->isHTML(true); 
  $mail->Subject = $subject; 
  $mail->Body = $txt; 
  $mail->addAttachment($xlsattach);
  $mail->addAttachment($pdfattach);
  // $mail->AltBody = $txt; 
  if(!$mail->send()) 
  { 
  echo "Mailer Error: " . $mail->ErrorInfo . '<br>';
  } 
  else 
  {  echo "Message has been sent successfully" . '<br>'; }


}