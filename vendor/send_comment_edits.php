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

$yes = 0;

$c_ch_n_ = mysqli_query($db, "SELECT * FROM `changed__comments_interactive`");
$c_ch_n = mysqli_fetch_all($c_ch_n_);
$message__tyonjohto = $m_messages[0] . '';

$message__tyonjohto .= "
<h3 style='font-family:Arial,sans-serif;'>Nämä muutokset ovat tapahtuneet kommenteissa:</h3>
<table><tr>
  <td style='border:1px solid black;min-width:200px;padding: 2px 5px;font-family:Arial,sans-serif;'>Kommentin tunniste</td>
  <td style='border:1px solid black;min-width:200px;padding: 2px 5px;font-family:Arial,sans-serif;'>Projektin tunniste</td>
  <td style='border:1px solid black;min-width:200px;padding: 2px 5px;font-family:Arial,sans-serif;'>Huone</td>
  <td style='border:1px solid black;min-width:200px;padding: 2px 5px;font-family:Arial,sans-serif;'>Nimi</td>
  <td style='border:1px solid black;min-width:200px;padding: 2px 5px;font-family:Arial,sans-serif;'>Viikko</td>
  <td style='border:1px solid black;min-width:200px;padding: 2px 5px;font-family:Arial,sans-serif;'>Sisältö</td>
  <td style='border:1px solid black;min-width:200px;padding: 2px 5px;font-family:Arial,sans-serif;'>Kuvat</td>
  <td style='border:1px solid black;min-width:200px;padding: 2px 5px;font-family:Arial,sans-serif;'>Keneltä</td>
  <td style='border:1px solid black;min-width:200px;padding: 2px 5px;font-family:Arial,sans-serif;'>Kenelle</td>
  <td style='border:1px solid black;min-width:200px;padding: 2px 5px;font-family:Arial,sans-serif;'>Kiirellisyys</td>
  <td style='border:1px solid black;min-width:200px;padding: 2px 5px;font-family:Arial,sans-serif;'>Tekoaika</td>
  <td style='border:1px solid black;min-width:200px;padding: 2px 5px;font-family:Arial,sans-serif;'>Päättöaika</td>
  <td style='border:1px solid black;min-width:200px;padding: 2px 5px;font-family:Arial,sans-serif;'>Aihe</td>
  <td style='border:1px solid black;min-width:200px;padding: 2px 5px;font-family:Arial,sans-serif;'>Deadline</td>
  <td style='border:1px solid black;min-width:200px;padding: 2px 5px;font-family:Arial,sans-serif;'>Vastauksen tunniste</td>
  <td style='border:1px solid black;min-width:200px;padding: 2px 5px;font-family:Arial,sans-serif;'>Aika-arvio</td>
  <td style='border:1px solid black;min-width:200px;padding: 2px 5px;font-family:Arial,sans-serif;'>Status</td>
  <td style='border:1px solid black;min-width:200px;padding: 2px 5px;font-family:Arial,sans-serif;'>Työnjohto arvio</td>
  <td style='border:1px solid black;min-width:200px;padding: 2px 5px;font-family:Arial,sans-serif;'>Työntekijän arvio</td>
  <td style='border:1px solid black;min-width:200px;padding: 2px 5px;font-family:Arial,sans-serif;'>Tunteja jäljellä</td>
  <td style='border:1px solid black;min-width:200px;padding: 2px 5px;font-family:Arial,sans-serif;'>Jatkuu päivämäärässä</td>
  <td style='border:1px solid black;min-width:200px;padding: 2px 5px;font-family:Arial,sans-serif;'>Valmiusaste</td>
    <td style='border:1px solid black;min-width:200px;padding: 2px 5px;font-family:Arial,sans-serif;'>Myyjän lupaus pvm</td>

</tr>";
foreach ($c_ch_n as $ticket) {
    $message__tyonjohto .= '<tr>';
    foreach ($ticket as $ticket_bit) {
        $message__tyonjohto .= '<td style="border: 1px solid;font-family:Arial,sans-serif;">' . $ticket_bit . '</td>';
        $yes = 1;
        
    }
    $message__tyonjohto .= '</tr>';
}
$message__tyonjohto .= "</table>";

if($yes == 1) {
  $m_data = mysqli_query($db, "SELECT * FROM `mail_templates` WHERE `messagename`='project_sendedits'");
  $m_da = mysqli_fetch_all($m_data);
  $m_data = $m_da[0];

  $m_headers = explode("~~~~", $m_data[1]);
  $m_subject = explode("~~~~", $m_data[3]);
  $m_messages = explode("~~~~", $m_data[4]);

    $to = $m_headers[0];

    $mail = new PHPMailer(); 
    $mail->CharSet = "UTF-8";

    $from = $m_headers[0];
    $subject = $m_subject[0] . date("d-m-Y") . $m_subject[1];

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
    $mail->Body = $message__tyonjohto; 

    if(!$mail->send()) 
    { 
    // $message__tekija .="Mailer Error: " . $mail->ErrorInfo;
    } 
    else 
    {$ok= mysqli_query($db, "DELETE FROM `changed__comments_interactive`");
    }
}

?>