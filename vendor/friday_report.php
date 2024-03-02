<?php 

// This file sends friday report to the administrator about the comments on all projects via email
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

$_userslist = mysqli_query($db, "SELECT * FROM `users`");
$userslist = mysqli_fetch_all($_userslist);
$userslist = array_unique($userslist, SORT_REGULAR);


$_project_ids = mysqli_query($db, "SELECT `id` FROM `projects`");
$project_ids = mysqli_fetch_all($_project_ids);
$project_ids = array_unique($project_ids, SORT_REGULAR);
$ga=array();
$message__tyonjohto = '';






// foreach ($userslist as $u) {
//     $message__tyonjohto_ = '';
//     $usertickets = 0;
//     $user = $u;
//     $_ticketlist = mysqli_query($db, "SELECT * FROM `comments` WHERE `comment_to`='$user[1]' AND `ending_time`='' AND `answer_to`=''");
//     $ticketlist = mysqli_fetch_all($_ticketlist);
//     $_a=array();
//     $all_hours = 0;
//     $message__tekija = '';

//     if(count($ticketlist) >= 1 ) {
//         $message__tekija .= "<div class='row'><h1 class='col-6'>" . ucfirst($user[1]) . "</h1>";
//         $message__tyonjohto_ .= "<div class='row'><h1 class='col-6'>" . ucfirst($user[1]) . "</h1>";
//         $projects_array = array();
//         foreach ($ticketlist as $sl) {
//             $__ = mb_convert_encoding($sl[2],'HTML-ENTITIES','utf-8');
//             $link = "https://editori.westface.fi/post.php?id=".$sl[1]."&role=kommentointi&user=".$user[1]."&apartment=".strtolower(explode(">",str_replace("<br>", "", str_replace(" ", "", $__)))[0]);
//             $all_hours += intval($sl[15]);

//             $_p = explode("https://", $sl[6]);
//             $_z = "";
//             foreach ($_p as $v) {
//                 if(strlen($v) >= 7 ) {
//                     $_z .= "<a href=https://" . $v . " target=`_blank`>" . $v . "</a>";
//                 }
//             }
//             $item = $sl[3] . "|" . $sl[1] . "|" . $sl[2] . "|<a href='".$link."' target='_blank'>".$link."</a>|" . $sl[5] . "|". $_z  . "|" . $sl[7] . "|" . $sl[8] . "|" . str_replace("critical", "KYLLÄ", str_replace("no_critical", "EI", $sl[9])) . "|" . $sl[13] . "|" . $sl[15]. "|" . $sl[16]. "|" . $sl[4];
//             array_push($_a,$item);
//             array_push($projects_array,$sl[1]);
//         }
        
//         $message__tekija .= "<h3 class='col-6'> Yhteensä työtunteja ".$all_hours."</h3></div>";
//         $message__tyonjohto_ .= "<h3 class='col-6'> Yhteensä työtunteja ".$all_hours."</h3></div>";
        
//         foreach ($project_ids as $p) {
            
//             $pr_name_ = mysqli_query($db, "SELECT * FROM `projects` WHERE `id`='$p[0]' ");
//             $_pr_name = mysqli_fetch_all($pr_name_);
//             $pr_name = $_pr_name[0][1];

           
//             $found = 0;

            
//             $message__tekija_2 = '';
//             $message__tyonjohto_2 = '';
//             foreach ($_a as $a) {

//                 $message__tekija_2 .="<tr>";
//                 $message__tyonjohto_2 .="<tr>";
//                 $_a_array = explode("|",$a);
            
//                 if($p[0] === $_a_array[1]) {
//                     $message__tekija_2 .="<td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[2]  . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[3] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[0] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[4] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[5] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[6] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[7] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[8] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[9] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[10] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[11] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[12] . "</td>";
//                     $message__tyonjohto_2 .="<td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[2]  . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[3] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[0] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[4] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[5] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[6] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[7] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[8] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[9] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[10] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[11] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[12] . "</td>";
                    
//                     $found = 1;
//                     $usertickets = 1;
//                 }
                

//                 $message__tekija_2 .="</tr>";
//                 $message__tyonjohto_2 .="</tr>";
//             }

//             if($found===1) {
//                 $message__tekija .="<h3 class='".$user[1]."_".$p[0]."' style='margin-top: 21px;'>" . $pr_name ."</h3>";
//                 $message__tyonjohto_ .="<h3 class='".$user[1]."_".$p[0]."' style='margin-top: 21px;'>" . $pr_name ."</h3>";
//                 $message__tekija .="<table><tr  class='".$user[1]."_".$p[0]."'><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Huone</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Kuittaa</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Nimi</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Sisältö</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Kuvat</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Keneltä</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Kenelle</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Kriittinen?</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Deadline</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Tuntiarvio</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Status</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Millä viikolla tehdään?</td></tr>";
//                 $message__tyonjohto_ .="<table><tr  class='".$user[1]."_".$p[0]."'><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Huone</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Kuittaa</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Nimi</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Sisältö</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Kuvat</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Keneltä</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Kenelle</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Kriittinen?</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Deadline</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Tuntiarvio</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Status</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Millä viikolla tehdään?</td></tr>";
    
//                 $message__tyonjohto_ .= $message__tyonjohto_2;
//                 $message__tekija .= $message__tekija_2;
//                 // $message__tyonjohto .= $message__tyonjohto_;

//                 // $message__tyonjohto_ = '';
//                 $message__tyonjohto_2 = '';
//                 $message__tekija_2 = '';

//                 // $message__tekija .="<style>.".$user[1]."_".$p[0]." {display:none}</style>";
//                 // $message__tyonjohto_ .="<style>.".$user[1]."_".$p[0]." {display:none}</style>";
//             }
//             $message__tekija .="</table>";
//             $message__tekija .="<style>.row {display:block;width: 100%;}.col-6 {width:49%; display:inline-block;}</style>";
//             $message__tekija .="</tr>";

//             $message__tyonjohto_ .="</table>";
//             $message__tyonjohto_ .="<style>.row {display:block;width: 100%;margin-top:14px;}.col-6 {width:49%; display:inline-block;}</style>";
//             $message__tyonjohto_ .="</tr>";

//         }

//         if($usertickets === 1 ) {
//             $to = $user[7];
//             $m_data = mysqli_query($db, "SELECT * FROM `mail_templates` WHERE `messagename`='comments_toworkers'");
//             $m_da = mysqli_fetch_all($m_data);
//             $m_data = $m_da[0];

//             $m_headers = explode("~~~~", $m_data[1]);
//             $m_subject = explode("~~~~", $m_data[3]);
//             $m_messages = explode("~~~~", $m_data[4]);


        
//             $mail = new PHPMailer(); 
//             $mail->CharSet = "UTF-8";

//             $from = $m_headers[0];
//             $subject = $m_subject[0] . " (".$user[1].") " . date("d-m-Y") . $m_subject[1];

//             $mail->isSMTP();                                            // Send using SMTP
//             $mail->Host       = 'mail.westface.fi';                    // Set the SMTP server to send through
//             $mail->SMTPAuth   = true;          
//             $mail->addReplyTo($from, $m_headers[2]);

//             $mail->Username   = $from;                     // SMTP username
//             $mail->Password   = $m_headers[3];                               // SMTP password
//             $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
//             $mail->Port       = 587; 
//             $mail->From = $from; 

//             $mail->FromName = $m_headers[2]; 
//             $mail->addAddress($to, $m_headers[4]); 
           

//             $mail->isHTML(true); 
//             $mail->Subject = $subject; 
//             $mail->Body = $message__tekija; 

//             if(!$mail->send()) 
//             { 
//             // $message__tekija .="Mailer Error: " . $mail->ErrorInfo;
//             } 
//             else 
//             {$ok= 1;}

//             $message__tyonjohto .= $message__tyonjohto_;
//         }
        
        

        
//         $mail = '';
//         $message__tekija = '';
//     }
// }

// $m_data = mysqli_query($db, "SELECT * FROM `mail_templates` WHERE `messagename`='reppanareport'");
// $m_da = mysqli_fetch_all($m_data);
// $m_data = $m_da[0];

// $m_headers = explode("~~~~", $m_data[1]);
// $m_subject = explode("~~~~", $m_data[3]);
// $m_messages = explode("~~~~", $m_data[4]);

// $to = $m_headers[1];

// $mail = new PHPMailer(); 
// $mail->CharSet = "UTF-8";

// $from = $m_headers[0];
// $subject = $m_subject[0] . date("d-m-Y") . $m_subject[1];

// $mail->isSMTP();                                            // Send using SMTP
// $mail->Host       = 'mail.westface.fi';                    // Set the SMTP server to send through
// $mail->SMTPAuth   = true;          
// $mail->addReplyTo($from, $m_subject[2]);

// $mail->Username   = $m_subject[2];                     // SMTP username
// $mail->Password   = $m_subject[3];                               // SMTP password
// $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
// $mail->Port       = 587; 
// $mail->From = $from; 

// $mail->FromName = $m_subject[2]; 
// $mail->addAddress($to, $m_subject[4]); 

// $mail->isHTML(true); 
// $mail->Subject = $subject; 
// $mail->Body = $message__tyonjohto; 

// if(!$mail->send()) 
// { 
// // $message__tekija .="Mailer Error: " . $mail->ErrorInfo;
// } 
// else 
// {$ok= 1;}



// foreach ($project_ids as $p) {
//     $usertickets = 0;
    
//     $_ticketlist = mysqli_query($db, "SELECT * FROM `comments` WHERE `projectid`='$p[0]' AND `ending_time`='' AND `answer_to`=''");
//     $ticketlist = mysqli_fetch_all($_ticketlist);

//     if(count($ticketlist) >= 1 ) {
//         $_a=array();
//         $all_hours = 0;

//         $pr_name_ = mysqli_query($db, "SELECT * FROM `projects` WHERE `id`='$p[0]' ");
//         $_pr_name = mysqli_fetch_all($pr_name_);
//         $pr_name = $_pr_name[0][1];


//         $message__tekija .= "<div class='row'><h1 class='col-6'>" . ucfirst($pr_name) . "</h1>";
//         $projects_array = array();
//         foreach ($ticketlist as $sl) {
//             $__ = mb_convert_encoding($sl[2],'HTML-ENTITIES','utf-8');
//             $link = "https://editori.westface.fi/post.php?id=".$sl[1]."&role=kommentointi&user=".$sl[8]."&apartment=".strtolower(explode(">",str_replace("<br>", "", str_replace(" ", "", $__)))[0]);
//             $all_hours += intval($sl[15]);

//             $_p = explode("https://", $sl[6]);
//             $_z = "";
//             foreach ($_p as $v) {
//                 if(strlen($v) >= 7 ) {
//                     $_z .= "<a href=https://" . $v . " target=`_blank`>" . $v . "</a>";
//                 }
//             }
//             $item = $sl[3] . "|" . $sl[1] . "|" . $sl[2] . "|<a href='".$link."' target='_blank'>".$link."</a>|" . $sl[5] . "|". $_z  . "|" . $sl[7] . "|" . $sl[8] . "|" . str_replace("critical", "KYLLÄ", str_replace("no_critical", "EI", $sl[9])) . "|" . $sl[13] . "|" . $sl[15]. "|" . $sl[16]. "|" . $sl[4];
//             array_push($_a,$item);
//             array_push($projects_array,$sl[1]);
//         }
        
//         $message__tekija .= "<h3 class='col-6'> Yhteensä työtunteja ".$all_hours."</h3></div>";
//         $found = 0;    

//         $message__tekija .="<table><tr  class='".$user[1]."_".$p[0]."'><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Huone</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Kuittaa</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Nimi</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Sisältö</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Kuvat</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Keneltä</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Kenelle</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Kriittinen?</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Deadline</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Tuntiarvio</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Status</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Millä viikolla tehdään?</td></tr>";


//         foreach ($_a as $a) {
//             $message__tekija .="<tr>";
//             $message__tyonjohto_ .="<tr>";
//             $_a_array = explode("|",$a);
           
//             if($p[0] === $_a_array[1]) {
//                 $message__tekija .="<td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[2]  . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[3] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[0] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[4] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[5] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[6] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[7] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[8] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[9] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[10] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[11] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[12] . "</td>";
//                 $message__tyonjohto_ .="<td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[2]  . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[3] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[0] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[4] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[5] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[6] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[7] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[8] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[9] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[10] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[11] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[12] . "</td>";
//                 $found = 1;

//                 $usertickets = 1;
//             }
            

//             $message__tekija .="</tr>";
//             $message__tyonjohto_ .="</tr>";
//         }

//         if($found===0) {
//             $message__tekija .="<style>.".$user[1]."_".$p[0]." {display:none}</style>";
//             $message__tyonjohto_ .="<style>.".$user[1]."_".$p[0]." {display:none}</style>";
//         }
//         $message__tekija .="</table>";
//         $message__tekija .="<style>.row {display:block;width: 100%;}.col-6 {width:49%; display:inline-block;}</style>";
//         $message__tekija .="</tr>";
        

//     }

    
//     $mail = '';
// }


// $m_data = mysqli_query($db, "SELECT * FROM `mail_templates` WHERE `messagename`='projectreport'");
// $m_da = mysqli_fetch_all($m_data);
// $m_data = $m_da[0];

// $m_headers = explode("~~~~", $m_data[1]);
// $m_subject = explode("~~~~", $m_data[3]);
// $m_messages = explode("~~~~", $m_data[4]);

// $to = $m_headers[1];

// $mail = new PHPMailer(); 
// $mail->CharSet = "UTF-8";

// $from = $m_headers[0];
// $subject = $m_subject[0] . date("d-m-Y") . $m_subject[1];

// $mail->isSMTP();                                            // Send using SMTP
// $mail->Host       = 'mail.westface.fi';                    // Set the SMTP server to send through
// $mail->SMTPAuth   = true;          
// $mail->addReplyTo($from, $m_headers[2]);

// $mail->Username   = $from;                     // SMTP username
// $mail->Password   = $m_headers[3];                               // SMTP password
// $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
// $mail->Port       = 587; 
// $mail->From = $from; 

// $mail->FromName = $m_headers[2]; 
// $mail->addAddress($to, $m_headers[4]);  
// // $mail->addAddress('Marko Virtanen', "marko.virtanen@westface.fi"); 

// $mail->isHTML(true); 
// $mail->Subject = $subject; 
// $mail->Body = $message__tekija; 

// if(!$mail->send()) 
// { 
// // $message__tekija .="Mailer Error: " . $mail->ErrorInfo;
// } 
// else 
// {$ok= 1;}

foreach ($project_ids as $p) {
    $usertickets = 0;
    
    $_ticketlist = mysqli_query($db, "SELECT * FROM `comments` WHERE `projectid`='$p[0]' AND `ending_time`='' AND `answer_to`=''");
    $ticketlist = mysqli_fetch_all($_ticketlist);

    $_projectdata = mysqli_query($db, "SELECT * FROM `projects` WHERE `id`='$p[0]'");
    $projectdata = mysqli_fetch_all($_projectdata)[0];

    
    $message__tyonjohto_ .= "<h2>".$projectdata[1]."</h2>";
    if(count($ticketlist) >= 1 ) {
        $avoimet = array();
        $kuitattu = array();
        $poistettu_kuittaamatta = array();
        $all_hours = 0;

        $pr_name_ = mysqli_query($db, "SELECT * FROM `projects` WHERE `id`='$p[0]' ");
        $_pr_name = mysqli_fetch_all($pr_name_);
        $pr_name = $_pr_name[0][1];

        $projects_array = array();
        foreach ($ticketlist as $sl) {
            if(intval($sl[1]) === intval($p[0])) {
                print_r( $sl[1]);
                print_r( $p[0]);
                $__ = mb_convert_encoding($sl[2],'HTML-ENTITIES','utf-8');
                $link = "https://editori.westface.fi/post.php?id=".$sl[1]."&role=kommentointi&user=".$sl[8]."&apartment=".strtolower(explode(">",str_replace("<br>", "", str_replace(" ", "", $__)))[0]);
                $all_hours += intval($sl[15]);

                $_p = explode("https://", $sl[6]);
                $_z = "";
                foreach ($_p as $v) {
                    if(strlen($v) >= 7 ) {
                        $_z .= "<a href=https://" . $v . " target=`_blank`>" . $v . "</a>";
                    }
                }
                $item = $sl[3] . "|" . $sl[1] . "|" . $sl[2] . "|<a href='".$link."' target='_blank'>".$link."</a>|" . $sl[5] . "|". $_z  . "|" . $sl[7] . "|" . $sl[8] . "|" . str_replace("critical", "KYLLÄ", str_replace("no_critical", "EI", $sl[9])) . "|" . $sl[13] . "|" . $sl[15]. "|" . $sl[16]. "|" . $sl[4];
                if($sl[16] == 'kuitattu') {
                    array_push($kuitattu,$item);
                }
                elseif($sl[16] == 'poistettu_kuittaamatta') {
                    array_push($poistettu_kuittaamatta,$item);
                }
                else {
                    array_push($avoimet,$item);
                }
                
                array_push($projects_array,$sl[1]);
            }
        }
        
        $found = 0;    

        $message__tyonjohto_ .="<h3 class='".$user[1]."_".$p[0]."' style='margin-top: 21px;'>KUITATUT</h3>";
        $message__tyonjohto_ .="<table><tr  class='".$user[1]."_".$p[0]."'><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Huone</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Kuittaa</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Nimi</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Sisältö</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Kuvat</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Keneltä</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Kenelle</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Kriittinen?</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Deadline</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Tuntiarvio</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Status</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Millä viikolla tehdään?</td></tr>";
        foreach ($kuitattu as $a) {
            $message__tyonjohto_ .="<tr>";
            $_a_array = explode("|",$a);
           
            if($p[0] === $_a_array[1]) {
                $message__tyonjohto_ .="<td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[2]  . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[3] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[0] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[4] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[5] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[6] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[7] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[8] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[9] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[10] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[11] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[12] . "</td>";
                $found = 1;

                $usertickets = 1;
            }
            

            $message__tyonjohto_ .="</tr>";
        }
        $message__tyonjohto_ .="</table>";
        $message__tyonjohto_ .="<style>.row {display:block;width: 100%;margin-top:14px;}.col-6 {width:49%; display:inline-block;}</style>";
        $message__tyonjohto_ .="<h3 class='".$user[1]."_".$p[0]."' style='margin-top: 21px;'>POISTETTU KUITTAAMATTA</h3>";
        foreach ($poistettu_kuittaamatta as $a) {
            $message__tyonjohto_ .="<tr>";
            $_a_array = explode("|",$a);
           
            if($p[0] === $_a_array[1]) {
                $message__tyonjohto_ .="<td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[2]  . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[3] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[0] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[4] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[5] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[6] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[7] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[8] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[9] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[10] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[11] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[12] . "</td>";
                $found = 1;

                $usertickets = 1;
            }
            

            $message__tyonjohto_ .="</tr>";
        }
        
        $message__tyonjohto_ .="<h3 class='".$user[1]."_".$p[0]."' style='margin-top: 21px;'>AVOIMET</h3>";
        $message__tyonjohto_ .="<table><tr class='".$user[1]."_".$p[0]."'><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Huone</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Kuittaa</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Nimi</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Sisältö</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Kuvat</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Keneltä</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Kenelle</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Kriittinen?</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Deadline</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Tuntiarvio</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Status</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>Millä viikolla tehdään?</td></tr>";

        foreach ($avoimet as $a) {
            $message__tyonjohto_ .="<tr>";
            $_a_array = explode("|",$a);
           
            if($p[0] === $_a_array[1]) {
                $message__tyonjohto_ .="<td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[2]  . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[3] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[0] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[4] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[5] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[6] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[7] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[8] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[9] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[10] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[11] . "</td><td style='border:1px solid black;min-width:200px;padding: 2px 5px;'>" . $_a_array[12] . "</td>";
                $found = 1;

                $usertickets = 1;
            }
            

            $message__tyonjohto_ .="</tr>";
        }

        $message__tyonjohto_ .="</table>";
        $message__tyonjohto_ .="<style>.row {display:block;width: 100%;margin-top:14px;}.col-6 {width:49%; display:inline-block;}</style>";
        if($found===0) {
            $message__tyonjohto_ .="<style>.".$user[1]."_".$p[0]." {display:none}</style>";
        }
    }
    $message__tyonjohto = $message__tyonjohto_;
    
    $mail = '';

    $_userslist = mysqli_query($db, "SELECT * FROM `users` WHERE `username` LIKE '$projectdata[5]'");
    $userslist = mysqli_fetch_all($_userslist)[0];

    $myyja = $userslist[1];
    $myyja_email = $userslist[7];
    print_r($myyja);

    $m_data = mysqli_query($db, "SELECT * FROM `mail_templates` WHERE `messagename`='myyjaproject_report'");
    $m_da = mysqli_fetch_all($m_data);
    $m_data = $m_da[0];

    $m_headers = explode("~~~~", $m_data[1]);
    $m_subject = explode("~~~~", $m_data[3]);
    $m_messages = explode("~~~~", $m_data[4]);

    $to = $myyja_email;

    $mail = new PHPMailer(); 
    $mail->CharSet = "UTF-8";

    $from = $m_headers[0];
    $subject = $m_subject[0] ." ". $projectdata[1];

    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'mail.westface.fi';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;          
    $mail->addReplyTo($from, $m_headers[2]);

    $mail->Username   = $from;                     // SMTP username
    $mail->Password   = $m_headers[3];                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587; 
    $mail->From = $from; 

    print($myyja);
    print($myyja_email);
    $mail->FromName = $m_headers[2]; 
    $mail->addAddress($to, $myyja);  
    // $mail->addAddress('Marko Virtanen', "marko.virtanen@westface.fi"); 

    $mail->isHTML(true); 
    $mail->Subject = $subject; 
    $mail->Body = $message__tyonjohto; 

    if(!$mail->send()) 
    { 
    // $message__tekija .="Mailer Error: " . $mail->ErrorInfo;
    } 
    else 
    {    echo $message__tyonjohto;

        $ok= 1;
        $ticketlist = '';
        $message__tyonjohto_ = $message__tyonjohto ='';    
    }
}


echo "<h1>Työt lähetetty</h1>";
?>