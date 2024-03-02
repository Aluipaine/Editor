<?php 
//This file creates database files in the project creation

// Enable error showing for debug
// ini_set ('display_errors', 1); ini_set ('display_startup_errors', 1); error_reporting (E_ALL);

// Include config file
require "config.php";

session_start();
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

function rand_string( $length ) {

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars),0,$length);

}


// 1.0
$prc_1 = $prc_1_puh = $prc_1_email = $prc_1_role = $prc_1_permission = $prc_1_hiding = $prc_2 = $prc_2_puh = $prc_2_email = $prc_2_role = $prc_2_permission = $prc_2_hiding = $prc_3 = $prc_3_puh = $prc_3_email = $prc_3_role = $prc_3_permission = $prc_3_hiding = $prc_4 = $prc_4_puh = $prc_4_email = $prc_4_role = $prc_4_permission = $prc_4_hiding = $prc_5 = $prc_5_puh = $prc_5_email = $prc_5_role = $prc_5_permission = $prc_5_hiding = $prc_6 = $prc_6_puh = $prc_6_email = $prc_6_role = $prc_6_permission = $prc_6_hiding = $prc_7 = $prc_7_puh = $prc_7_email = $prc_7_role = $prc_7_permission = $prc_7_hiding = $prc_8 = $prc_8_puh = $prc_8_email = $prc_8_role = $prc_8_permission = $prc_8_hiding = $prc_9 = $prc_9_puh = $prc_9_email = $prc_9_role = $prc_9_permission = $prc_9_hiding = $prc_10 = $prc_10_puh = $prc_10_email = $prc_10_role = $prc_10_permission = $prc_10_hiding = $prc_11 = $prc_11_puh = $prc_11_email = $prc_11_role = $prc_11_permission = $prc_11_hiding = $prc_12 = $prc_12_puh = $prc_12_email = $prc_12_role = $prc_12_permission = $prc_12_hiding = $prc_13 = $prc_13_puh = $prc_13_email = $prc_13_role = $prc_13_permission = $prc_13_hiding = $prc_14 = $prc_14_puh = $prc_14_email = $prc_14_role = $prc_14_permission = $prc_14_hiding = $prc_15 = $prc_15_puh = $prc_15_email = $prc_15_role = $prc_15_permission = $prc_15_hiding = $prc_16 = $prc_16_puh = $prc_16_email = $prc_16_role = $prc_16_permission = $prc_16_hiding = $prc_17 = $prc_17_puh = $prc_17_email = $prc_17_role = $prc_17_permission = $prc_17_hiding = $prc_18 = $prc_18_puh = $prc_18_email = $prc_18_role = $prc_18_permission = $prc_18_hiding = $prc_19 = $prc_19_puh = $prc_19_email = $prc_19_role = $prc_19_permission = $prc_19_hiding = $prc_20 = $prc_20_puh = $prc_20_email = $prc_20_role = $prc_20_permission = $prc_20_hiding = $prc_21 = $prc_21_puh = $prc_21_email = $prc_21_role = $prc_21_permission = $prc_21_hiding = $prc_22 = $prc_22_puh = $prc_22_email = $prc_22_role = $prc_22_permission = $prc_22_hiding = $prc_23 = $prc_23_puh = $prc_23_email = $prc_23_role = $prc_23_permission = $prc_23_hiding = $prc_24 = $prc_24_puh = $prc_24_email = $prc_24_role = $prc_24_permission = $prc_24_hiding = $prc_25 = $prc_25_puh = $prc_25_email = $prc_25_role = $prc_25_permission = $prc_25_hiding = $prc_26 = $prc_26_puh = $prc_26_email = $prc_26_role = $prc_26_permission = $prc_26_hiding = $prc_27 = $prc_27_puh = $prc_27_email = $prc_27_role = $prc_27_permission = $prc_27_hiding = $prc_28 = $prc_28_puh = $prc_28_email = $prc_28_role = $prc_28_permission = $prc_28_hiding = $prc_29 = $prc_29_puh = $prc_29_email = $prc_29_role = $prc_29_permission = $prc_29_hiding = $prc_30 = $prc_30_puh = $prc_30_email = $prc_30_role = $prc_30_permission = $prc_30_hiding = "";


$rowSQL = mysqli_query($db, "SELECT MAX( id ) AS max FROM `projects`;" );
$row = mysqli_fetch_array( $rowSQL );
$id = intval($row['max'])+1;

$project_name = $_POST['project_name'];
$project_type = $_POST['project_type'];
$date = date("Y-m-d");

$kaupalliset_asiakirjat = $_POST['kaupalliset_asiakirjat'];
$tyomaan_asiakirjat = $_POST['tyomaan_asiakirjat'];
$arkkitehtisuunnitelmat = $_POST['arkkitehtisuunnitelmat'];
$rakennesuunnitelmat = $_POST['rakennesuunnitelmat'];
$omat_suunnitelmat = $_POST['omat_suunnitelmat'];
$muut_asiakirjat = $_POST['muut_asiakirjat'];



//LOOP FOR 30
for ($i=0; $i < 31; $i++) { 
	if(isset($_POST['prc_'.$i]) && strlen($_POST['prc_'.$i]) > 5){
		$name = $_POST['prc_'.$i];
		$puh = $_POST['prc_'.$i.'_puh'];
		$email = $_POST['prc_'.$i.'_email'];
		$phone = $_POST['prc_'.$i.'_phone'];
		$company = $_POST['prc_'.$i.'_company'];
		$role = $_POST['prc_'.$i.'_role'];
		$permission = $_POST['prc_'.$i.'_permission'];
		$hiding = $_POST['prc_'.$i.'_hiding'];
		$adduser = $_POST['prc_'.$i];

		$username_role_ = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username` LIKE '$name'");
		$username_role = mysqli_fetch_assoc($username_role_);

		if(strlen($username_role["username"]) < 1){
			$p_symbols = rand_string(8);
			$password = password_hash($p_symbols, PASSWORD_DEFAULT); #2022-01-26 15:12:01
			$created_att = date("Y-m-d H:i:s");
			//print_r("INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `phone`, `email`, `company`, `created_at`) VALUES ('$prc_1', '$password', '$prc_1_role', '$prc_1_permission', '$prc_1_hiding', '$prc_1_phone', '$prc_1_email', '$prc_1_company', '$created_att')");
			// $meta = mysqli_query($db, "INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `phone`, `email`, `company`, `created_at`) VALUES ('$name', '$password', '$role', '$permission', '$hiding', '$phone', '$email', '$company', '$created_att')");
			$project_id = mysqli_fetch_array(mysqli_query($db, "SELECT MAX(id) as max_id FROM `projects`"))["max_id"] + 1;
			$user = $_SESSION["username"];
			$mail = new PHPMailer(); 
			$mail->CharSet = "UTF-8";
			$to =  $email;
			$m_data = mysqli_query($db, "SELECT * FROM `mail_templates` WHERE `messagename`='project_newuser'");
			$m_da = mysqli_fetch_all($m_data);
			$m_data = $m_da[0];

			$m_headers = explode("~~~~", $m_data[1]);
			$m_subject = explode("~~~~", $m_data[3]);
			$m_messages = explode("~~~~", $m_data[4]);

			$from = $m_headers[0];
			$subject = $m_subject[0] . $pr_name . $m_subject[1];
			$txt = $m_messages[0] . $name . $m_messages[1] ."<br>" .$m_messages[2] . $name . $m_messages[3] . $m_messages[4] . $p_symbols . $m_messages[5] . "<br>" . $m_messages[6] . $phone . $m_messages[7] . "<br>" . $m_messages[8] . $role. $m_messages[9] . "<br>" . $m_messages[10] . $created_att . $m_messages[11] . "<br>" .  $m_messages[12];
			

			$mail->isSMTP();                                            // Send using SMTP
			$mail->Host       = 'mail.westface.fi';                    // Set the SMTP server to send through
			$mail->SMTPAuth   = true;          
			$mail->addReplyTo($from,  $m_headers[2]);

			$mail->Username   = $from;                     // SMTP username
			$mail->Password   = $m_headers[3];                               // SMTP password
			$mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
			$mail->Port       = 587; 
			$mail->From = $from; 


			$mail->FromName =  $m_headers[2]; 
			$mail->addAddress($to, $name); 
			// $mail->addAddress('marko.virtanen@westface.fi', "Marko Virtanen"); 
			// $mail->addAddress($usr_email, $comment_to); 

			$mail->isHTML(true); 
			$mail->Subject = $subject; 
			$mail->Body = $txt; 
			if(!$mail->send()) 
			{ 
			echo "Mailer Error: " . $mail->ErrorInfo;
			} 
			else 
			{  echo "Message has been sent successfully"; }
		}
		
		

		
		
		 
		$project_id = mysqli_fetch_array(mysqli_query($db, "SELECT MAX(id) as max_id FROM `projects`"))["max_id"] + 1;
		
		$user = $_SESSION["username"];
		$myyja = $_POST['prc_3'];
		// mysqli_query($db, "INSERT INTO `addedusers` (`username`, `project_id`, `added_by`) VALUES ('$adduser', $project_id, '$myyja')");
		
		
	}
}
$list_of_the_workers = "";
$users = mysqli_query($db, "SELECT * FROM `addedusers` WHERE `project_id`='".$id."'");
$users = mysqli_fetch_all($users);
foreach ($users as $user) { 
	$list_of_the_workers.=$user[1].", ";
}

$list_of_the_workers_ = explode(",",$list_of_the_workers);

foreach ($users as $user) { 
	if(strlen($user[1]) > 3) {
		$username = mysqli_query($db, "SELECT * FROM `users` WHERE `username`='".$user[1]."'");
		$username = mysqli_fetch_all($username)[0];

		$m_data = mysqli_query($db, "SELECT * FROM `mail_templates` WHERE `messagename`='project_creation'");
		$m_da = mysqli_fetch_all($m_data);
		$m_data = $m_da[0];

		$m_headers = explode("~~~~", $m_data[1]);
		$m_subject = explode("~~~~", $m_data[3]);
		$m_messages = explode("~~~~", $m_data[4]);

		$mail = new PHPMailer(); 
		$mail->CharSet = "UTF-8";
		$to = $username[7];

		$from = $m_headers[0];
		$subject = $m_subject[0] . $project_name . $m_subject[1];

		$txt = $m_messages[0] . $name . "<br>" .$m_messages[1]. $myyja . $m_messages[2] . "<br>" . $m_messages[3] . $list_of_the_workers . $m_messages[4] . "<br>" . $m_messages[5] . $project_name. $m_messages[6] . "<br>";



		$mail->isSMTP();                                            // Send using SMTP
		$mail->Host       = 'mail.westface.fi';                    // Set the SMTP server to send through
		$mail->SMTPAuth   = true;          
		$mail->addReplyTo($from, $m_headers[2]);

		$mail->Username   = $m_headers[0];                     // SMTP username
		$mail->Password   = $m_headers[3];                               // SMTP password
		$mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		$mail->Port       = 587; 
		$mail->From = $from; 


		$mail->FromName = $m_headers[2]; 
		$mail->addAddress($to, $username[1]); 
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
	
}

$a_rooms = $_POST['a_rooms'];
$b_rooms = $_POST['b_rooms'];
$c_rooms = $_POST['c_rooms'];
$d_rooms = $_POST['d_rooms'];
$e_rooms = $_POST['e_rooms'];
$f_rooms = $_POST['f_rooms'];
$g_rooms = $_POST['g_rooms'];
$h_rooms = $_POST['h_rooms'];

$a_rooms_nowork = $_POST['a_rooms_nowork'];
$b_rooms_nowork = $_POST['b_rooms_nowork'];
$c_rooms_nowork = $_POST['c_rooms_nowork'];
$d_rooms_nowork = $_POST['d_rooms_nowork'];
$e_rooms_nowork = $_POST['e_rooms_nowork'];
$f_rooms_nowork = $_POST['f_rooms_nowork'];
$g_rooms_nowork = $_POST['g_rooms_nowork'];
$h_rooms_nowork = $_POST['h_rooms_nowork'];



$chosen_jarjestelma = $_POST['adminpreset__current_type'];

$s_settings = "";
$s_materials = "";
$raw = ["ö", "", " "];
$processed = ["o", "a", "_"];

$a_rooms_processed = str_replace($raw, $processed, $a_rooms);
$b_rooms_processed = str_replace($raw, $processed, $b_rooms);
$c_rooms_processed = str_replace($raw, $processed, $c_rooms);
$d_rooms_processed = str_replace($raw, $processed, $d_rooms);
$e_rooms_processed = str_replace($raw, $processed, $e_rooms);
$f_rooms_processed = str_replace($raw, $processed, $f_rooms);
$g_rooms_processed = str_replace($raw, $processed, $g_rooms);
$h_rooms_processed = str_replace($raw, $processed, $h_rooms);


$a_rooms_nowork_processed = str_replace($raw, $processed, $a_rooms_nowork);
$b_rooms_nowork_processed = str_replace($raw, $processed, $b_rooms_nowork);
$c_rooms_nowork_processed = str_replace($raw, $processed, $c_rooms_nowork);
$d_rooms_nowork_processed = str_replace($raw, $processed, $d_rooms_nowork);
$e_rooms_nowork_processed = str_replace($raw, $processed, $e_rooms_nowork);
$f_rooms_nowork_processed = str_replace($raw, $processed, $f_rooms_nowork);
$g_rooms_nowork_processed = str_replace($raw, $processed, $g_rooms_nowork);
$h_rooms_nowork_processed = str_replace($raw, $processed, $h_rooms_nowork);


$prc_3 = $_POST['prc_3'];
// $post = mysqli_query($db, "INSERT INTO `projects` (`id`, `title`, `created_at`, `link`, `project_type`, `user`) VALUES ('$id', '$project_name', '$date', '', '$project_type', '$prc_3')");
if (!$post) {
	echo $project_name . "<br>" . $date . "<br>" . $project_type;
}

// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_id', '$id')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_name', '$project_name')");



// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_settings', '$chosen_jarjestelma')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_materials', '')");



// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'a_rooms', '$a_rooms_processed')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'b_rooms', '$b_rooms_processed')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'c_rooms', '$c_rooms_processed')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'd_rooms', '$d_rooms_processed')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'e_rooms', '$e_rooms_processed')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'f_rooms', '$f_rooms_processed')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'g_rooms', '$g_rooms_processed')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'h_rooms', '$h_rooms_processed')");



// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'a_rooms_title', 'RAPPU A')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'b_rooms_title', 'RAPPU B')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'c_rooms_title', 'RAPPU C')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'd_rooms_title', 'RAPPU D')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'e_rooms_title', 'RAPPU E')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'f_rooms_title', 'RAPPU F')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'g_rooms_title', 'RAPPU G')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'h_rooms_title', 'RAPPU H')");

// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'a_rooms_nowork', '$a_rooms_nowork_processed')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'b_rooms_nowork', '$b_rooms_nowork_processed')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'c_rooms_nowork', '$c_rooms_nowork_processed')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'd_rooms_nowork', '$d_rooms_nowork_processed')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'e_rooms_nowork', '$e_rooms_nowork_processed')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'f_rooms_nowork', '$f_rooms_nowork_processed')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'g_rooms_nowork', '$g_rooms_nowork_processed')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'h_rooms_nowork', '$h_rooms_nowork_processed')");

// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'step', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'wall', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'room', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'settings', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'mittapisteet', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'aukot', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'reijat', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'saumat', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'levyt', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'rangat', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'listat', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'kokonaisalue', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'levytettava_alue', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'poisjaava_alue', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'keskusmittapiste_cord', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'reklamaatiot', '')");


// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'kaupalliset_asiakirjat', '$kaupalliset_asiakirjat')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'tyomaan_asiakirjat', '$tyomaan_asiakirjat')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'arkkitehtisuunnitelmat', '$arkkitehtisuunnitelmat')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'rakennesuunnitelmat', '$rakennesuunnitelmat')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'omat_suunnitelmat', '$omat_suunnitelmat')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'muut_asiakirjat', '$muut_asiakirjat')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'statuses__text', 'KESKEN~~EI TYÖTÄ~~ONGELMA~~KRIITTINEN ONGELMA~~L5 TILATTU~~L5 TYÖMAALLA~~L5 ASENNETTU~~L5 HYVÄKSYTTY~~L4 TILATTU~~L4 TYÖMAALLA~~L4 ASENNETTU~~L4 HYVÄKSYTTY~~L3 TILATTU~~L3 TYÖMAALLA~~L3 ASENNETTU~~L3 HYVÄKSYTTY~~L2 TILATTU~~L2 TYÖMAALLA~~L2 ASENNETTU~~L2 HYVÄKSYTTY~~L1 TILATTU~~L1 TYÖMAALLA~~L1 ASENNETTU~~L1 HYVÄKSYTTY')");



// $meta = mysqli_query($db, "INSERT INTO `addedusers`(`project_id`, `username`, `added_by`) VALUES ($id,'tyonjohto','tyonjohto')");


$redirect_from = $_POST['project_slug'];
$redirect_to = '/post.php?id='.$id.'&user=valinta';
// $meta = mysqli_query($db, "INSERT INTO `rewritelib` (`slug`, `slugto`) VALUES ('$redirect_from', '$redirect_to')");


// echo "<script>window.location.replace('/login.php');</script>";



// DEPRECATED BUT I FEAR TO DELETE THIS!!!:
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_room_name', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_rap_name', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s1_name', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s1_order', '1')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s1_desc', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s1_h', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s1_w', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s2_name', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s2_order', '2')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s2_desc', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s2_h', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s2_w', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s3_name', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s3_order', '3')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s3_desc', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s3_h', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s3_w', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s4_name', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s4_order', '4')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s4_desc', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s4_h', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s4_w', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s5_name', 'room_one_roof')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s5_order', '5')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s5_desc', 'room_one_roof_desc')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s5_h', 'room_one_roof_h')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s5_w', 'room_one_roof_w')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s6_name', 'room_one_floor')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s6_order', '6')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s6_desc', 'room_one_floor_desc')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s6_h', 'room_one_floor_h')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s6_w', 'room_one_floor_w')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'm_materials', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'm_name', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'm_one', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'm_two', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'm_three', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'm_four', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'm_five', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_ladonta_levytyssuunta', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_saumoitus', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_ladontasystem', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_materials', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_rangan_suunta', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_kiinnikkeiden_linjojen_alkupaikka', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_kiinnikelinjan_etaisyydet', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_levytys_levytyksen_katkeaminen', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_levytys_pituus_y', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_levytys_pituus_x', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_levytyksen_suunta', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_lapiviennit', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_levyt_standard', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_jarjestelma', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_olosuhteet', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_olosuhde', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_aukko', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_reika_', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_levy_', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_rankatyypit', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_tyypin_pituudet', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_pystyasennus', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_listat', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_rankojen_sijoittelu', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_users', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_step', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_recl_msg', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_recl_from', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_recl_to', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_recl_attention', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_1_origo', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_1_gooddist_w', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_1_gooddist_h', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_1_1_name', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_1_1_dist_x', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_1_1_dist_y', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_1_1_comments', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_2_1_name', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_2_1_dist_x', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_2_1_dist_y', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_2_1_comments', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_2_1_h', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_2_1_w', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_3_1_name', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_3_1_dist_x', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_3_1_dist_y', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_3_1_comments', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_3_1_r', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_4_1_name', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_4_1_num', '')");
// $meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_4_1_type', '')");

?>

