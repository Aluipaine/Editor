<?php 
// Include config file
require "config.php";

session_start();

function rand_string( $length ) {

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars),0,$length);

}
// 1.0
$prc_12 = "";
$prc_12_puh = "";
$prc_12_email = "";
$prc_12_role = "";
$prc_12_permission = "";
$prc_12_hiding = "";
$prc_13 = "";
$prc_13_puh = "";
$prc_13_email = "";
$prc_13_role = "";
$prc_13_permission = "";
$prc_13_hiding = "";
$prc_14 = "";
$prc_14_puh = "";
$prc_14_email = "";
$prc_14_role = "";
$prc_14_permission = "";
$prc_14_hiding = "";
$prc_15 = "";
$prc_15_puh = "";
$prc_15_email = "";
$prc_15_role = "";
$prc_15_permission = "";
$prc_15_hiding = "";
$prc_16 = "";
$prc_16_puh = "";
$prc_16_email = "";
$prc_16_role = "";
$prc_16_permission = "";
$prc_16_hiding = "";
$prc_17 = "";
$prc_17_puh = "";
$prc_17_email = "";
$prc_17_role = "";
$prc_17_permission = "";
$prc_17_hiding = "";
$prc_18 = "";
$prc_18_puh = "";
$prc_18_email = "";
$prc_18_role = "";
$prc_18_permission = "";
$prc_18_hiding = "";
$prc_19 = "";
$prc_19_puh = "";
$prc_19_email = "";
$prc_19_role = "";
$prc_19_permission = "";
$prc_19_hiding = "";
$prc_20 = "";
$prc_20_puh = "";
$prc_20_email = "";
$prc_20_role = "";
$prc_20_permission = "";
$prc_20_hiding = "";
$prc_21 = "";
$prc_21_puh = "";
$prc_21_email = "";
$prc_21_role = "";
$prc_21_permission = "";
$prc_21_hiding = "";
$prc_22 = "";
$prc_22_puh = "";
$prc_22_email = "";
$prc_22_role = "";
$prc_22_permission = "";
$prc_22_hiding = "";
$prc_23 = "";
$prc_23_puh = "";
$prc_23_email = "";
$prc_23_role = "";
$prc_23_permission = "";
$prc_23_hiding = "";
$prc_24 = "";
$prc_24_puh = "";
$prc_24_email = "";
$prc_24_role = "";
$prc_24_permission = "";
$prc_24_hiding = "";
$prc_25 = "";
$prc_25_puh = "";
$prc_25_email = "";
$prc_25_role = "";
$prc_25_permission = "";
$prc_25_hiding = "";
$prc_26 = "";
$prc_26_puh = "";
$prc_26_email = "";
$prc_26_role = "";
$prc_26_permission = "";
$prc_26_hiding = "";
$prc_27 = "";
$prc_27_puh = "";
$prc_27_email = "";
$prc_27_role = "";
$prc_27_permission = "";
$prc_27_hiding = "";
$prc_28 = "";
$prc_28_puh = "";
$prc_28_email = "";
$prc_28_role = "";
$prc_28_permission = "";
$prc_28_hiding = "";
$prc_29 = "";
$prc_29_puh = "";
$prc_29_email = "";
$prc_29_role = "";
$prc_29_permission = "";
$prc_29_hiding = "";
$prc_30 = "";
$prc_30_puh = "";
$prc_30_email = "";
$prc_30_role = "";
$prc_30_permission = "";
$prc_30_hiding = "";

$rowSQL = mysqli_query($db, "SELECT MAX( id ) AS max FROM `projects`;" );
$row = mysqli_fetch_array( $rowSQL );
$id = intval($row['max'])+1;

$project_name = $_POST['project_name'];
$project_type = $_POST['project_type'];
$date = date("Y-m-d");

$to = "jyri@gromi.fi";
$subject = "Tervetuloa Editoriin!";

// Будь проклят тот кто это накодил. Фронт кодил бэк полагаю? Но в любом случаи мне платят не за то чтобы я это исправлял, так что хрен с ним.

if(isset($_POST['prc_1']) && strlen($_POST['prc_1']) > 2){
	$prc_1 = $_POST['prc_1'];
	$prc_1_puh = $_POST['prc_1_puh'];
	$prc_1_email = $_POST['prc_1_email'];
	$prc_1_phone = $_POST['prc_1_phone'];
	$prc_1_company = $_POST['prc_1_company'];
	$prc_1_role = $_POST['prc_1_role'];
	$prc_1_permission = $_POST['prc_1_permission'];
	$prc_1_hiding = $_POST['prc_1_hiding'];

	$username_role_ = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username` LIKE '$prc_1'");
	$username_role = mysqli_fetch_assoc($username_role_);

	if(strlen($username_role["username"]) < 1){
		$p_symbols = rand_string(8);
		$password = password_hash($p_symbols, PASSWORD_DEFAULT); #2022-01-26 15:12:01
		$created_att = date("Y-m-d H:i:s");
		print_r("INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `phone`, `email`, `company`, `created_at`) VALUES ('$prc_{1}', '$password', '$prc_{1}_role', '$prc_{1}_permission', '$prc_{1}_hiding', '$prc_{1}_phone', '$prc_{1}_email', '$prc_{1}_company', '$created_att')");
		$meta = mysqli_query($db, "INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `phone`, `email`, `company`, `created_at`) VALUES ('$prc_{1}', '$password', '$prc_{1}_role', '$prc_{1}_permission', '$prc_{1}_hiding', '$prc_{1}_phone', '$prc_{1}_email', '$prc_{1}_company', '$created_att')");
		$txt = "Hei " . $prc_1 . "!\n" ."Käyttäjätilisi on " . $prc_1_email . " ja salasanasi on " . $p_symbols . "\n" . "Tämä puhelinnumerosi näkyy hankkeessa: " . $prc_1_puh . "\n" ."Roolisi on:" . $prc_1_role . "\n" ."Käyttäjätilisi luotiin " . $created_att;
		$headers = "From: webmaster@teditori.gromi.fi";
		mail($to,$subject,$txt,$headers);
		$adduser = $prc_1_email;
	}
	else {
		echo "User already Exists";
		$adduser = $prc_1;
	}

	$project_id = mysqli_fetch_array(mysqli_query($db, "SELECT MAX(id) as max_id FROM `projects`"))["max_id"] + 1;
	$user = $_SESSION["username"];
	mysqli_query($db, "INSERT INTO `addedusers` (`username`, `project_id`, `added_by`) VALUES ('$adduser', $project_id, '$user')");
}

if(isset($_POST['prc_2']) && strlen($_POST['prc_2']) > 2) {
	$prc_2 = $_POST['prc_2'];
	$prc_2_puh = $_POST['prc_2_puh'];
	$prc_2_email = $_POST['prc_2_email'];
	$prc_2_role = $_POST['prc_2_role'];
	$prc_2_permission = $_POST['prc_2_permission'];
	$prc_2_hiding = $_POST['prc_2_hiding'];

	$username_role_ = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username` LIKE '$prc_2'");
	$username_role = mysqli_fetch_assoc($username_role_);

	if(strlen($username_role["username"]) < 1){
		$p_symbols = rand_string(8);
		$password = "'" . password_hash($p_symbols, PASSWORD_DEFAULT) . "'"; #2022-01-26 15:12:01
		$created_att = "'" . date("Y-m-d H:i:s") . "'";
		print_r("INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_2, $password, $prc_2_role, $prc_2_permission, $prc_2_hiding, $created_att)");
		$meta = mysqli_query($db, "INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_2, $password, $prc_2_role, $prc_2_permission, $prc_2_hiding, $created_att)");
		$txt = "Hei " . $prc_1 . "!\n" ."Käyttäjätilisi on " . $prc_2_email . " ja salasanasi on " . $p_symbols . "\n" . "Tämä puhelinnumerosi näkyy hankkeessa: " . $prc_2_puh . "\n" ."Roolisi on:" . $prc_2_role . "\n" ."Käyttäjätilisi luotiin " . $created_att;
		$headers = "From: webmaster@teditori.gromi.fi";
		mail($to,$subject,$txt,$headers);
		$adduser = $prc_1_email;
	}
	else {
		echo "User already Exists";
		$adduser = $prc_1;
	}

	$project_id = mysqli_fetch_array(mysqli_query($db, "SELECT MAX(id) as max_id FROM `projects`"))["max_id"] + 1;
	$user = $_SESSION["username"];
	mysqli_query($db, "INSERT INTO `addedusers` (`username`, `project_id`, `added_by`) VALUES ('$adduser', $project_id, '$user')");

}

if(isset($_POST['prc_3'])  && strlen($_POST['prc_3']) > 2) {
	$prc_3 = $_POST['prc_3'];
	$prc_3_puh = $_POST['prc_3_puh'];
	$prc_3_email = $_POST['prc_3_email'];
	$prc_3_role = $_POST['prc_3_role'];
	$prc_3_permission = $_POST['prc_3_permission'];
	$prc_3_hiding = $_POST['prc_3_hiding'];

	$username_role_ = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username` LIKE '$prc_3_email'");
	$username_role = mysqli_fetch_assoc($username_role_);

	if(strlen($username_role["username"]) < 1){
		$p_symbols = rand_string(8);
		$password = "'" . password_hash($p_symbols, PASSWORD_DEFAULT) . "'"; #2022-01-26 15:12:01
		$created_att = "'" . date("Y-m-d H:i:s") . "'";
		$meta = mysqli_query($db, "INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_3_email, $password, $prc_3_role, $prc_3_permission, $prc_3_hiding, $created_att)");
		$txt = "Hei " . $prc_1 . "!\n" ."Käyttäjätilisi on " . $prc_3_email . " ja salasanasi on " . $p_symbols . "\n" . "Tämä puhelinnumerosi näkyy hankkeessa: " . $prc_3_puh . "\n" ."Roolisi on:" . $prc_3_role . "\n" ."Käyttäjätilisi luotiin " . $created_att;
		$headers = "From: webmaster@teditori.gromi.fi";
		print_r("INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_3, $p_symbols, $prc_3_role, $prc_3_permission, $prc_3_hiding, $created_att)");
		mail($to,$subject,$txt,$headers);
		$adduser = $prc_1_email;
	}
	else {
		echo "User already Exists";
		$adduser = $prc_1;
	}

	$project_id = mysqli_fetch_array(mysqli_query($db, "SELECT MAX(id) as max_id FROM `projects`"))["max_id"] + 1;
	$user = $_SESSION["username"];
	mysqli_query($db, "INSERT INTO `addedusers` (`username`, `project_id`, `added_by`) VALUES ('$adduser', $project_id, '$user')");
}

if(isset($_POST['prc_4'])  && strlen($_POST['prc_4']) > 2) {
	$prc_4 = $_POST['prc_4'];
	$prc_4_puh = $_POST['prc_4_puh'];
	$prc_4_email = $_POST['prc_4_email'];
	$prc_4_role = $_POST['prc_4_role'];
	$prc_4_permission = $_POST['prc_4_permission'];
	$prc_4_hiding = $_POST['prc_4_hiding'];

	$username_role_ = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username` LIKE '$prc_4_email'");
	$username_role = mysqli_fetch_assoc($username_role_);

	if(strlen($username_role["username"]) < 1){
		$p_symbols = rand_string(8);
		$password = "'" . password_hash($p_symbols, PASSWORD_DEFAULT) . "'"; #2022-01-26 15:12:01
		$created_att = "'" . date("Y-m-d H:i:s") . "'";
		$meta = mysqli_query($db, "INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_4_email, $password, $prc_4_role, $prc_4_permission, $prc_4_hiding, $created_att)");
		$txt = "Hei " . $prc_1 . "!\n" ."Käyttäjätilisi on " . $prc_4_email . " ja salasanasi on " . $p_symbols . "\n" . "Tämä puhelinnumerosi näkyy hankkeessa: " . $prc_4_puh . "\n" ."Roolisi on:" . $prc_4_role . "\n" ."Käyttäjätilisi luotiin " . $created_att;
		$headers = "From: webmaster@teditori.gromi.fi";
		print_r("INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_4, $p_symbols, $prc_4_role, $prc_4_permission, $prc_4_hiding, $created_att)");
		mail($to,$subject,$txt,$headers);
		$adduser = $prc_1_email;
	}
	else {
		echo "User already Exists";
		$adduser = $prc_1;
	}

	$project_id = mysqli_fetch_array(mysqli_query($db, "SELECT MAX(id) as max_id FROM `projects`"))["max_id"] + 1;
	$user = $_SESSION["username"];
	mysqli_query($db, "INSERT INTO `addedusers` (`username`, `project_id`, `added_by`) VALUES ('$adduser', $project_id, '$user')");
}

if(isset($_POST['prc_5']) && strlen($_POST['prc_5']) > 2) {
	$prc_5 = $_POST['prc_5'];
	$prc_5_puh = $_POST['prc_5_puh'];
	$prc_5_email = $_POST['prc_5_email'];
	$prc_5_role = $_POST['prc_5_role'];
	$prc_5_permission = $_POST['prc_5_permission'];
	$prc_5_hiding = $_POST['prc_5_hiding'];

	$username_role_ = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username` LIKE '$prc_5_email'");
	$username_role = mysqli_fetch_assoc($username_role_);

	if(strlen($username_role["username"]) < 1){
		$p_symbols = rand_string(8);
		$password = "'" . password_hash($p_symbols, PASSWORD_DEFAULT) . "'"; #2022-01-26 15:12:01
		$created_att = "'" . date("Y-m-d H:i:s") . "'";
		$meta = mysqli_query($db, "INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_5_email, $password, $prc_5_role, $prc_5_permission, $prc_5_hiding, $created_att)");
		$txt = "Hei " . $prc_1 . "!\n" ."Käyttäjätilisi on " . $prc_5_email . " ja salasanasi on " . $p_symbols . "\n" . "Tämä puhelinnumerosi näkyy hankkeessa: " . $prc_5_puh . "\n" ."Roolisi on:" . $prc_5_role . "\n" ."Käyttäjätilisi luotiin " . $created_att;
		$headers = "From: webmaster@teditori.gromi.fi";
		print_r("INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_5, $p_symbols, $prc_5_role, $prc_5_permission, $prc_5_hiding, $created_att)");
		mail($to,$subject,$txt,$headers);
		$adduser = $prc_1_email;
	}
	else {
		echo "User already Exists";
		$adduser = $prc_1;
	}

	$project_id = mysqli_fetch_array(mysqli_query($db, "SELECT MAX(id) as max_id FROM `projects`"))["max_id"] + 1;
	$user = $_SESSION["username"];
	mysqli_query($db, "INSERT INTO `addedusers` (`username`, `project_id`, `added_by`) VALUES ('$adduser', $project_id, '$user')");
}

if(isset($_POST['prc_6']) && strlen($_POST['prc_6']) > 2) {
	$prc_6 = $_POST['prc_6'];
	$prc_6_puh = $_POST['prc_6_puh'];
	$prc_6_email = $_POST['prc_6_email'];
	$prc_6_role = $_POST['prc_6_role'];
	$prc_6_permission = $_POST['prc_6_permission'];
	$prc_6_hiding = $_POST['prc_6_hiding'];

	$username_role_ = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username` LIKE '$prc_6_email'");
	$username_role = mysqli_fetch_assoc($username_role_);

	if(strlen($username_role["username"]) < 1){
		$p_symbols = rand_string(8);
		$password = "'" . password_hash($p_symbols, PASSWORD_DEFAULT) . "'"; #2022-01-26 15:12:01
		$created_att = "'" . date("Y-m-d H:i:s") . "'";
		$meta = mysqli_query($db, "INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_6_email, $password, $prc_6_role, $prc_6_permission, $prc_6_hiding, $created_att)");
		$txt = "Hei " . $prc_1 . "!\n" ."Käyttäjätilisi on " . $prc_6_email . " ja salasanasi on " . $p_symbols . "\n" . "Tämä puhelinnumerosi näkyy hankkeessa: " . $prc_6_puh . "\n" ."Roolisi on:" . $prc_6_role . "\n" ."Käyttäjätilisi luotiin " . $created_att;
		$headers = "From: webmaster@teditori.gromi.fi";
		print_r("INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_6, $p_symbols, $prc_6_role, $prc_6_permission, $prc_6_hiding, $created_att)");
		mail($to,$subject,$txt,$headers);
		$adduser = $prc_1_email;
	}
	else {
		echo "User already Exists";
		$adduser = $prc_1;
	}

	$project_id = mysqli_fetch_array(mysqli_query($db, "SELECT MAX(id) as max_id FROM `projects`"))["max_id"] + 1;
	$user = $_SESSION["username"];
	mysqli_query($db, "INSERT INTO `addedusers` (`username`, `project_id`, `added_by`) VALUES ('$adduser', $project_id, '$user')");
}

if(isset($_POST['prc_7']) && strlen($_POST['prc_7']) > 2) {
	$prc_7 = $_POST['prc_7'];
	$prc_7_puh = $_POST['prc_7_puh'];
	$prc_7_email = $_POST['prc_7_email'];
	$prc_7_role = $_POST['prc_7_role'];
	$prc_7_permission = $_POST['prc_7_permission'];
	$prc_7_hiding = $_POST['prc_7_hiding'];

	$username_role_ = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username` LIKE '$prc_7_email'");
	$username_role = mysqli_fetch_assoc($username_role_);

	if(strlen($username_role["username"]) < 1){
		$p_symbols = rand_string(8);
		$password = "'" . password_hash($p_symbols, PASSWORD_DEFAULT) . "'"; #2022-01-26 15:12:01
		$created_att = "'" . date("Y-m-d H:i:s") . "'";
		$meta = mysqli_query($db, "INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_7_email, $password, $prc_7_role, $prc_7_permission, $prc_7_hiding, $created_att)");
		$txt = "Hei " . $prc_1 . "!\n" ."Käyttäjätilisi on " . $prc_7_email . " ja salasanasi on " . $p_symbols . "\n" . "Tämä puhelinnumerosi näkyy hankkeessa: " . $prc_7_puh . "\n" ."Roolisi on:" . $prc_7_role . "\n" ."Käyttäjätilisi luotiin " . $created_att;
		$headers = "From: webmaster@teditori.gromi.fi";
		print_r("INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_7, $p_symbols, $prc_7_role, $prc_7_permission, $prc_7_hiding, $created_att)");
		mail($to,$subject,$txt,$headers);
		$adduser = $prc_1_email;
	}
	else {
		echo "User already Exists";
		$adduser = $prc_1;
	}

	$project_id = mysqli_fetch_array(mysqli_query($db, "SELECT MAX(id) as max_id FROM `projects`"))["max_id"] + 1;
	$user = $_SESSION["username"];
	mysqli_query($db, "INSERT INTO `addedusers` (`username`, `project_id`, `added_by`) VALUES ('$adduser', $project_id, '$user')");
}

if(isset($_POST['prc_8']) && strlen($_POST['prc_8']) > 2) {
	$prc_8 = $_POST['prc_8'];
	$prc_8_puh = $_POST['prc_8_puh'];
	$prc_8_email = $_POST['prc_8_email'];
	$prc_8_role = $_POST['prc_8_role'];
	$prc_8_permission = $_POST['prc_8_permission'];
	$prc_8_hiding = $_POST['prc_8_hiding'];

	$username_role_ = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username` LIKE '$prc_8_email'");
	$username_role = mysqli_fetch_assoc($username_role_);

	if(strlen($username_role["username"]) < 1){
		$p_symbols = rand_string(8);
		$password = "'" . password_hash($p_symbols, PASSWORD_DEFAULT) . "'"; #2022-01-26 15:12:01
		$created_att = "'" . date("Y-m-d H:i:s") . "'";
		$meta = mysqli_query($db, "INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_8_email, $password, $prc_8_role, $prc_8_permission, $prc_8_hiding, $created_att)");
		$txt = "Hei " . $prc_1 . "!\n" ."Käyttäjätilisi on " . $prc_8_email . " ja salasanasi on " . $p_symbols . "\n" . "Tämä puhelinnumerosi näkyy hankkeessa: " . $prc_8_puh . "\n" ."Roolisi on:" . $prc_8_role . "\n" ."Käyttäjätilisi luotiin " . $created_att;
		$headers = "From: webmaster@teditori.gromi.fi";
		print_r("INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_8, $p_symbols, $prc_8_role, $prc_8_permission, $prc_8_hiding, $created_att)");
		mail($to,$subject,$txt,$headers);
		$adduser = $prc_1_email;
	}
	else {
		echo "User already Exists";
		$adduser = $prc_1;
	}

	$project_id = mysqli_fetch_array(mysqli_query($db, "SELECT MAX(id) as max_id FROM `projects`"))["max_id"] + 1;
	$user = $_SESSION["username"];
	mysqli_query($db, "INSERT INTO `addedusers` (`username`, `project_id`, `added_by`) VALUES ('$adduser', $project_id, '$user')");
}

if(isset($_POST['prc_9']) && strlen($_POST['prc_9']) > 2) {
	$prc_9 = $_POST['prc_9'];
	$prc_9_puh = $_POST['prc_9_puh'];
	$prc_9_email = $_POST['prc_9_email'];
	$prc_9_role = $_POST['prc_9_role'];
	$prc_9_permission = $_POST['prc_9_permission'];
	$prc_9_hiding = $_POST['prc_9_hiding'];

	$username_role_ = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username` LIKE '$prc_9_email'");
	$username_role = mysqli_fetch_assoc($username_role_);

	if(strlen($username_role["username"]) < 1){
		$p_symbols = rand_string(8);
		$password = "'" . password_hash($p_symbols, PASSWORD_DEFAULT) . "'"; #2022-01-26 15:12:01
		$created_att = "'" . date("Y-m-d H:i:s") . "'";
		$meta = mysqli_query($db, "INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_9_email, $password, $prc_9_role, $prc_9_permission, $prc_9_hiding, $created_att)");
		$txt = "Hei " . $prc_1 . "!\n" ."Käyttäjätilisi on " . $prc_9_email . " ja salasanasi on " . $p_symbols . "\n" . "Tämä puhelinnumerosi näkyy hankkeessa: " . $prc_9_puh . "\n" ."Roolisi on:" . $prc_9_role . "\n" ."Käyttäjätilisi luotiin " . $created_att;
		$headers = "From: webmaster@teditori.gromi.fi";
		print_r("INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_9, $p_symbols, $prc_9_role, $prc_9_permission, $prc_9_hiding, $created_att)");
		mail($to,$subject,$txt,$headers);
		$adduser = $prc_1_email;
	}
	else {
		echo "User already Exists";
		$adduser = $prc_1;
	}

	$project_id = mysqli_fetch_array(mysqli_query($db, "SELECT MAX(id) as max_id FROM `projects`"))["max_id"] + 1;
	$user = $_SESSION["username"];
	mysqli_query($db, "INSERT INTO `addedusers` (`username`, `project_id`, `added_by`) VALUES ('$adduser', $project_id, '$user')");
}

if(isset($_POST['prc_10']) && strlen($_POST['prc_10']) > 2) {
	$prc_10 = $_POST['prc_10'];
	$prc_10_puh = $_POST['prc_10_puh'];
	$prc_10_email = $_POST['prc_10_email'];
	$prc_10_role = $_POST['prc_10_role'];
	$prc_10_permission = $_POST['prc_10_permission'];
	$prc_10_hiding = $_POST['prc_10_hiding'];

	$username_role_ = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username` LIKE '$prc_10_email'");
	$username_role = mysqli_fetch_assoc($username_role_);

	if(strlen($username_role["username"]) < 1){
		$p_symbols = rand_string(8);
		$password = "'" . password_hash($p_symbols, PASSWORD_DEFAULT) . "'"; #2022-01-26 15:12:01
		$created_att = "'" . date("Y-m-d H:i:s") . "'";
		$meta = mysqli_query($db, "INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_10_email, $password, $prc_10_role, $prc_10_permission, $prc_10_hiding, $created_att)");
		$txt = "Hei " . $prc_1 . "!\n" ."Käyttäjätilisi on " . $prc_10_email . " ja salasanasi on " . $p_symbols . "\n" . "Tämä puhelinnumerosi näkyy hankkeessa: " . $prc_10_puh . "\n" ."Roolisi on:" . $prc_10_role . "\n" ."Käyttäjätilisi luotiin " . $created_att;
		$headers = "From: webmaster@teditori.gromi.fi";
		print_r("INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_10, $p_symbols, $prc_10_role, $prc_10_permission, $prc_10_hiding, $created_att)");
		mail($to,$subject,$txt,$headers);
		$adduser = $prc_1_email;
	}
	else {
		echo "User already Exists";
		$adduser = $prc_1;
	}

	$project_id = mysqli_fetch_array(mysqli_query($db, "SELECT MAX(id) as max_id FROM `projects`"))["max_id"] + 1;
	$user = $_SESSION["username"];
	mysqli_query($db, "INSERT INTO `addedusers` (`username`, `project_id`, `added_by`) VALUES ('$adduser', $project_id, '$user')");
}

if(isset($_POST['prc_11']) && strlen($_POST['prc_11']) > 2) {
	$prc_11 = $_POST['prc_11'];
	$prc_11_puh = $_POST['prc_11_puh'];
	$prc_11_email = $_POST['prc_11_email'];
	$prc_11_role = $_POST['prc_11_role'];
	$prc_11_permission = $_POST['prc_11_permission'];
	$prc_11_hiding = $_POST['prc_11_hiding'];

	$username_role_ = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username` LIKE '$prc_11_email'");
	$username_role = mysqli_fetch_assoc($username_role_);

	if(strlen($username_role["username"]) < 1){
		$p_symbols = rand_string(8);
		$password = "'" . password_hash($p_symbols, PASSWORD_DEFAULT) . "'"; #2022-01-26 15:12:01
		$created_att = "'" . date("Y-m-d H:i:s") . "'";
		$meta = mysqli_query($db, "INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_11_email, $password, $prc_11_role, $prc_11_permission, $prc_11_hiding, $created_att)");
		$txt = "Hei " . $prc_1 . "!\n" ."Käyttäjätilisi on " . $prc_11_email . " ja salasanasi on " . $p_symbols . "\n" . "Tämä puhelinnumerosi näkyy hankkeessa: " . $prc_11_puh . "\n" ."Roolisi on:" . $prc_11_role . "\n" ."Käyttäjätilisi luotiin " . $created_att;
		$headers = "From: webmaster@teditori.gromi.fi";
		print_r("INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_11, $p_symbols, $prc_11_role, $prc_11_permission, $prc_11_hiding, $created_att)");
		mail($to,$subject,$txt,$headers);
		$adduser = $prc_1_email;
	}
	else {
		echo "User already Exists";
		$adduser = $prc_1;
	}

	$project_id = mysqli_fetch_array(mysqli_query($db, "SELECT MAX(id) as max_id FROM `projects`"))["max_id"] + 1;
	$user = $_SESSION["username"];
	mysqli_query($db, "INSERT INTO `addedusers` (`username`, `project_id`, `added_by`) VALUES ('$adduser', $project_id, '$user')");
}

if(isset($_POST['prc_12']) && strlen($_POST['prc_12']) > 2) {
	$prc_12 = $_POST['prc_12'];
	$prc_12_puh = $_POST['prc_12_puh'];
	$prc_12_email = $_POST['prc_12_email'];
	$prc_12_role = $_POST['prc_12_role'];
	$prc_12_permission = $_POST['prc_12_permission'];
	$prc_12_hiding = $_POST['prc_12_hiding'];

	$username_role_ = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username` LIKE '$prc_12_email'");
	$username_role = mysqli_fetch_assoc($username_role_);

	if(strlen($username_role["username"]) < 1){
		$p_symbols = rand_string(8);
		$password = "'" . password_hash($p_symbols, PASSWORD_DEFAULT) . "'"; #2022-01-26 15:12:01
		$created_att = "'" . date("Y-m-d H:i:s") . "'";
		$meta = mysqli_query($db, "INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_12_email, $password, $prc_12_role, $prc_12_permission, $prc_12_hiding, $created_att)");
		$txt = "Hei " . $prc_1 . "!\n" ."Käyttäjätilisi on " . $prc_12_email . " ja salasanasi on " . $p_symbols . "\n" . "Tämä puhelinnumerosi näkyy hankkeessa: " . $prc_12_puh . "\n" ."Roolisi on:" . $prc_12_role . "\n" ."Käyttäjätilisi luotiin " . $created_att;
		$headers = "From: webmaster@teditori.gromi.fi";
		print_r("INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_12, $p_symbols, $prc_12_role, $prc_12_permission, $prc_12_hiding, $created_att)");
		mail($to,$subject,$txt,$headers);
		$adduser = $prc_1_email;
	}
	else {
		echo "User already Exists";
		$adduser = $prc_1;
	}

	$project_id = mysqli_fetch_array(mysqli_query($db, "SELECT MAX(id) as max_id FROM `projects`"))["max_id"] + 1;
	$user = $_SESSION["username"];
	mysqli_query($db, "INSERT INTO `addedusers` (`username`, `project_id`, `added_by`) VALUES ('$adduser', $project_id, '$user')");

	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_12', '$prc_12')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_12_role', '$prc_12_role')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_12_permission', '$prc_12_permission')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_12_hiding', '$prc_12_hiding')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_12_puh', '$prc_12_puh')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_12_email', '$prc_12_email')");


}
if(isset($_POST['prc_13']) && strlen($_POST['prc_13']) > 2) {
	$prc_13 = $_POST['prc_13'];
	$prc_13_puh = $_POST['prc_13_puh'];
	$prc_13_email = $_POST['prc_13_email'];
	$prc_13_role = $_POST['prc_13_role'];
	$prc_13_permission = $_POST['prc_13_permission'];
	$prc_13_hiding = $_POST['prc_13_hiding'];

	$username_role_ = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username` LIKE '$prc_13_email'");
	$username_role = mysqli_fetch_assoc($username_role_);

	if(strlen($username_role["username"]) < 1){
		$p_symbols = rand_string(8);
		$password = "'" . password_hash($p_symbols, PASSWORD_DEFAULT) . "'"; #2022-01-26 15:12:01
		$created_att = "'" . date("Y-m-d H:i:s") . "'";
		$meta = mysqli_query($db, "INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_13_email, $password, $prc_13_role, $prc_13_permission, $prc_13_hiding, $created_att)");
		$txt = "Hei " . $prc_1 . "!\n" ."Käyttäjätilisi on " . $prc_13_email . " ja salasanasi on " . $p_symbols . "\n" . "Tämä puhelinnumerosi näkyy hankkeessa: " . $prc_13_puh . "\n" ."Roolisi on:" . $prc_13_role . "\n" ."Käyttäjätilisi luotiin " . $created_att;
		$headers = "From: webmaster@teditori.gromi.fi";
		print_r("INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_13, $p_symbols, $prc_13_role, $prc_13_permission, $prc_13_hiding, $created_att)");
		mail($to,$subject,$txt,$headers);
		$adduser = $prc_1_email;
	}
	else {
		echo "User already Exists";
		$adduser = $prc_1;
	}

	$project_id = mysqli_fetch_array(mysqli_query($db, "SELECT MAX(id) as max_id FROM `projects`"))["max_id"] + 1;
	$user = $_SESSION["username"];
	mysqli_query($db, "INSERT INTO `addedusers` (`username`, `project_id`, `added_by`) VALUES ('$adduser', $project_id, '$user')");

	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_13', '$prc_13')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_13_role', '$prc_13_role')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_13_permission', '$prc_13_permission')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_13_hiding', '$prc_13_hiding')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_13_puh', '$prc_13_puh')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_13_email', '$prc_13_email')");


}
if(isset($_POST['prc_14']) && strlen($_POST['prc_14']) > 2) {
	$prc_14 = $_POST['prc_14'];
	$prc_14_puh = $_POST['prc_14_puh'];
	$prc_14_email = $_POST['prc_14_email'];
	$prc_14_role = $_POST['prc_14_role'];
	$prc_14_permission = $_POST['prc_14_permission'];
	$prc_14_hiding = $_POST['prc_14_hiding'];

	$username_role_ = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username` LIKE '$prc_14_email'");
	$username_role = mysqli_fetch_assoc($username_role_);

	if(strlen($username_role["username"]) < 1){
		$p_symbols = rand_string(8);
		$password = "'" . password_hash($p_symbols, PASSWORD_DEFAULT) . "'"; #2022-01-26 15:12:01
		$created_att = "'" . date("Y-m-d H:i:s") . "'";
		$meta = mysqli_query($db, "INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_14_email, $password, $prc_14_role, $prc_14_permission, $prc_14_hiding, $created_att)");
		$txt = "Hei " . $prc_1 . "!\n" ."Käyttäjätilisi on " . $prc_14_email . " ja salasanasi on " . $p_symbols . "\n" . "Tämä puhelinnumerosi näkyy hankkeessa: " . $prc_14_puh . "\n" ."Roolisi on:" . $prc_14_role . "\n" ."Käyttäjätilisi luotiin " . $created_att;
		$headers = "From: webmaster@teditori.gromi.fi";
		print_r("INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_14, $p_symbols, $prc_14_role, $prc_14_permission, $prc_14_hiding, $created_att)");
		mail($to,$subject,$txt,$headers);
		$adduser = $prc_1_email;
	}
	else {
		echo "User already Exists";
		$adduser = $prc_1;
	}

	$project_id = mysqli_fetch_array(mysqli_query($db, "SELECT MAX(id) as max_id FROM `projects`"))["max_id"] + 1;
	$user = $_SESSION["username"];
	mysqli_query($db, "INSERT INTO `addedusers` (`username`, `project_id`, `added_by`) VALUES ('$adduser', $project_id, '$user')");

	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_14', '$prc_14')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_14_role', '$prc_14_role')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_14_permission', '$prc_14_permission')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_14_hiding', '$prc_14_hiding')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_14_puh', '$prc_14_puh')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_14_email', '$prc_14_email')");


}

if(isset($_POST['prc_15']) && strlen($_POST['prc_15']) > 2) {
	$prc_15 = $_POST['prc_15'];
	$prc_15_puh = $_POST['prc_15_puh'];
	$prc_15_email = $_POST['prc_15_email'];
	$prc_15_role = $_POST['prc_15_role'];
	$prc_15_permission = $_POST['prc_15_permission'];
	$prc_15_hiding = $_POST['prc_15_hiding'];

	$username_role_ = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username` LIKE '$prc_15_email'");
	$username_role = mysqli_fetch_assoc($username_role_);

	if(strlen($username_role["username"]) < 1){
		$p_symbols = rand_string(8);
		$password = "'" . password_hash($p_symbols, PASSWORD_DEFAULT) . "'"; #2022-01-26 15:12:01
		$created_att = "'" . date("Y-m-d H:i:s") . "'";
		$meta = mysqli_query($db, "INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_15_email, $password, $prc_15_role, $prc_15_permission, $prc_15_hiding, $created_att)");
		$txt = "Hei " . $prc_1 . "!\n" ."Käyttäjätilisi on " . $prc_15_email . " ja salasanasi on " . $p_symbols . "\n" . "Tämä puhelinnumerosi näkyy hankkeessa: " . $prc_15_puh . "\n" ."Roolisi on:" . $prc_15_role . "\n" ."Käyttäjätilisi luotiin " . $created_att;
		$headers = "From: webmaster@teditori.gromi.fi";
		print_r("INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_15, $p_symbols, $prc_15_role, $prc_15_permission, $prc_15_hiding, $created_att)");
		mail($to,$subject,$txt,$headers);
		$adduser = $prc_1_email;
	}
	else {
		echo "User already Exists";
		$adduser = $prc_1;
	}

	$project_id = mysqli_fetch_array(mysqli_query($db, "SELECT MAX(id) as max_id FROM `projects`"))["max_id"] + 1;
	$user = $_SESSION["username"];
	mysqli_query($db, "INSERT INTO `addedusers` (`username`, `project_id`, `added_by`) VALUES ('$adduser', $project_id, '$user')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_15', '$prc_15')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_15_role', '$prc_15_role')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_15_permission', '$prc_15_permission')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_15_hiding', '$prc_15_hiding')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_15_puh', '$prc_15_puh')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_15_email', '$prc_15_email')");

}

if(isset($_POST['prc_16'])  && strlen($_POST['prc_16']) > 2) {
	$prc_16 = $_POST['prc_16'];
	$prc_16_puh = $_POST['prc_16_puh'];
	$prc_16_email = $_POST['prc_16_email'];
	$prc_16_role = $_POST['prc_16_role'];
	$prc_16_permission = $_POST['prc_16_permission'];
	$prc_16_hiding = $_POST['prc_16_hiding'];

	$username_role_ = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username` LIKE '$prc_16_email'");
	$username_role = mysqli_fetch_assoc($username_role_);

	if(strlen($username_role["username"]) < 1){
		$p_symbols = rand_string(8);
		$password = "'" . password_hash($p_symbols, PASSWORD_DEFAULT) . "'"; #2022-01-26 15:12:01
		$created_att = "'" . date("Y-m-d H:i:s") . "'";
		$meta = mysqli_query($db, "INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_16_email, $password, $prc_16_role, $prc_16_permission, $prc_16_hiding, $created_att)");
		$txt = "Hei " . $prc_1 . "!\n" ."Käyttäjätilisi on " . $prc_16_email . " ja salasanasi on " . $p_symbols . "\n" . "Tämä puhelinnumerosi näkyy hankkeessa: " . $prc_16_puh . "\n" ."Roolisi on:" . $prc_16_role . "\n" ."Käyttäjätilisi luotiin " . $created_att;
		$headers = "From: webmaster@teditori.gromi.fi";
		print_r("INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_16, $p_symbols, $prc_16_role, $prc_16_permission, $prc_16_hiding, $created_att)");
		mail($to,$subject,$txt,$headers);
		$adduser = $prc_1_email;
	}
	else {
		echo "User already Exists";
		$adduser = $prc_1;
	}

	$project_id = mysqli_fetch_array(mysqli_query($db, "SELECT MAX(id) as max_id FROM `projects`"))["max_id"] + 1;
	$user = $_SESSION["username"];
	mysqli_query($db, "INSERT INTO `addedusers` (`username`, `project_id`, `added_by`) VALUES ('$adduser', $project_id, '$user')");

	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_16', '$prc_16')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_16_role', '$prc_16_role')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_16_permission', '$prc_16_permission')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_16_hiding', '$prc_16_hiding')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_16_puh', '$prc_16_puh')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_16_email', '$prc_16_email')");


}

if(isset($_POST['prc_17'])  && strlen($_POST['prc_17']) > 2) {
	$prc_17 = $_POST['prc_17'];
	$prc_17_puh = $_POST['prc_17_puh'];
	$prc_17_email = $_POST['prc_17_email'];
	$prc_17_role = $_POST['prc_17_role'];
	$prc_17_permission = $_POST['prc_17_permission'];
	$prc_17_hiding = $_POST['prc_17_hiding'];

	$username_role_ = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username` LIKE '$prc_17_email'");
	$username_role = mysqli_fetch_assoc($username_role_);

	if(strlen($username_role["username"]) < 1){
		$p_symbols = rand_string(8);
		$password = "'" . password_hash($p_symbols, PASSWORD_DEFAULT) . "'"; #2022-01-26 15:12:01
		$created_att = "'" . date("Y-m-d H:i:s") . "'";
		$meta = mysqli_query($db, "INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_17_email, $password, $prc_17_role, $prc_17_permission, $prc_17_hiding, $created_att)");
		$txt = "Hei " . $prc_1 . "!\n" ."Käyttäjätilisi on " . $prc_17_email . " ja salasanasi on " . $p_symbols . "\n" . "Tämä puhelinnumerosi näkyy hankkeessa: " . $prc_17_puh . "\n" ."Roolisi on:" . $prc_17_role . "\n" ."Käyttäjätilisi luotiin " . $created_att;
		$headers = "From: webmaster@teditori.gromi.fi";
		print_r("INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_17, $p_symbols, $prc_17_role, $prc_17_permission, $prc_17_hiding, $created_att)");
		mail($to,$subject,$txt,$headers);
		$adduser = $prc_1_email;
	}
	else {
		echo "User already Exists";
		$adduser = $prc_1;
	}

	$project_id = mysqli_fetch_array(mysqli_query($db, "SELECT MAX(id) as max_id FROM `projects`"))["max_id"] + 1;
	$user = $_SESSION["username"];
	mysqli_query($db, "INSERT INTO `addedusers` (`username`, `project_id`, `added_by`) VALUES ('$adduser', $project_id, '$user')");

	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_17', '$prc_17')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_17_role', '$prc_17_role')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_17_permission', '$prc_17_permission')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_17_hiding', '$prc_17_hiding')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_17_puh', '$prc_17_puh')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_17_email', '$prc_17_email')");


}

if(isset($_POST['prc_18'])  && strlen($_POST['prc_18']) > 2) {
	$prc_18 = $_POST['prc_18'];
	$prc_18_puh = $_POST['prc_18_puh'];
	$prc_18_email = $_POST['prc_18_email'];
	$prc_18_role = $_POST['prc_18_role'];
	$prc_18_permission = $_POST['prc_18_permission'];
	$prc_18_hiding = $_POST['prc_18_hiding'];

	$username_role_ = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username` LIKE '$prc_18_email'");
	$username_role = mysqli_fetch_assoc($username_role_);

	if(strlen($username_role["username"]) < 1){
		$p_symbols = rand_string(8);
		$password = "'" . password_hash($p_symbols, PASSWORD_DEFAULT) . "'"; #2022-01-26 15:12:01
		$created_att = "'" . date("Y-m-d H:i:s") . "'";
		$meta = mysqli_query($db, "INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_18_email, $password, $prc_18_role, $prc_18_permission, $prc_18_hiding, $created_att)");
		$txt = "Hei " . $prc_1 . "!\n" ."Käyttäjätilisi on " . $prc_18_email . " ja salasanasi on " . $p_symbols . "\n" . "Tämä puhelinnumerosi näkyy hankkeessa: " . $prc_18_puh . "\n" ."Roolisi on:" . $prc_18_role . "\n" ."Käyttäjätilisi luotiin " . $created_att;
		$headers = "From: webmaster@teditori.gromi.fi";
		print_r("INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_18, $p_symbols, $prc_18_role, $prc_18_permission, $prc_18_hiding, $created_att)");
		mail($to,$subject,$txt,$headers);
		$adduser = $prc_1_email;
	}
	else {
		echo "User already Exists";
		$adduser = $prc_1;
	}

	$project_id = mysqli_fetch_array(mysqli_query($db, "SELECT MAX(id) as max_id FROM `projects`"))["max_id"] + 1;
	$user = $_SESSION["username"];
	mysqli_query($db, "INSERT INTO `addedusers` (`username`, `project_id`, `added_by`) VALUES ('$adduser', $project_id, '$user')");

	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_18', '$prc_18')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_18_role', '$prc_18_role')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_18_permission', '$prc_18_permission')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_18_hiding', '$prc_18_hiding')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_18_puh', '$prc_18_puh')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_18_email', '$prc_18_email')");


}

if(isset($_POST['prc_19'])  && strlen($_POST['prc_19']) > 2) {
	$prc_19 = $_POST['prc_19'];
	$prc_19_puh = $_POST['prc_19_puh'];
	$prc_19_email = $_POST['prc_19_email'];
	$prc_19_role = $_POST['prc_19_role'];
	$prc_19_permission = $_POST['prc_19_permission'];
	$prc_19_hiding = $_POST['prc_19_hiding'];

	$username_role_ = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username` LIKE '$prc_19_email'");
	$username_role = mysqli_fetch_assoc($username_role_);

	if(strlen($username_role["username"]) < 1){
		$p_symbols = rand_string(8);
		$password = "'" . password_hash($p_symbols, PASSWORD_DEFAULT) . "'"; #2022-01-26 15:12:01
		$created_att = "'" . date("Y-m-d H:i:s") . "'";
		$meta = mysqli_query($db, "INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_19_email, $password, $prc_19_role, $prc_19_permission, $prc_19_hiding, $created_att)");
		$txt = "Hei " . $prc_1 . "!\n" ."Käyttäjätilisi on " . $prc_19_email . " ja salasanasi on " . $p_symbols . "\n" . "Tämä puhelinnumerosi näkyy hankkeessa: " . $prc_19_puh . "\n" ."Roolisi on:" . $prc_19_role . "\n" ."Käyttäjätilisi luotiin " . $created_att;
		$headers = "From: webmaster@teditori.gromi.fi";
		print_r("INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_19, $p_symbols, $prc_19_role, $prc_19_permission, $prc_19_hiding, $created_att)");
		mail($to,$subject,$txt,$headers);
		$adduser = $prc_1_email;
	}
	else {
		echo "User already Exists";
		$adduser = $prc_1;
	}

	$project_id = mysqli_fetch_array(mysqli_query($db, "SELECT MAX(id) as max_id FROM `projects`"))["max_id"] + 1;
	$user = $_SESSION["username"];
	mysqli_query($db, "INSERT INTO `addedusers` (`username`, `project_id`, `added_by`) VALUES ('$adduser', $project_id, '$user')");

	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_19', '$prc_19')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_19_role', '$prc_19_role')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_19_permission', '$prc_19_permission')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_19_hiding', '$prc_19_hiding')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_19_puh', '$prc_19_puh')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_19_email', '$prc_19_email')");
}

if(isset($_POST['prc_20'])  && strlen($_POST['prc_20']) > 2) {
	$prc_20 = $_POST['prc_20'];
	$prc_20_puh = $_POST['prc_20_puh'];
	$prc_20_email = $_POST['prc_20_email'];
	$prc_20_role = $_POST['prc_20_role'];
	$prc_20_permission = $_POST['prc_20_permission'];
	$prc_20_hiding = $_POST['prc_20_hiding'];

	$username_role_ = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username` LIKE '$prc_20_email'");
	$username_role = mysqli_fetch_assoc($username_role_);

	if(strlen($username_role["username"]) < 1){
		$p_symbols = rand_string(8);
		$password = "'" . password_hash($p_symbols, PASSWORD_DEFAULT) . "'"; #2022-01-26 15:12:01
		$created_att = "'" . date("Y-m-d H:i:s") . "'";
		$meta = mysqli_query($db, "INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_20_email, $password, $prc_20_role, $prc_20_permission, $prc_20_hiding, $created_att)");
		$txt = "Hei " . $prc_1 . "!\n" ."Käyttäjätilisi on " . $prc_20_email . " ja salasanasi on " . $p_symbols . "\n" . "Tämä puhelinnumerosi näkyy hankkeessa: " . $prc_20_puh . "\n" ."Roolisi on:" . $prc_20_role . "\n" ."Käyttäjätilisi luotiin " . $created_att;
		$headers = "From: webmaster@teditori.gromi.fi";
		print_r("INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_20, $p_symbols, $prc_20_role, $prc_20_permission, $prc_20_hiding, $created_att)");
		mail($to,$subject,$txt,$headers);
		$adduser = $prc_1_email;
	}
	else {
		echo "User already Exists";
		$adduser = $prc_1;
	}

	$project_id = mysqli_fetch_array(mysqli_query($db, "SELECT MAX(id) as max_id FROM `projects`"))["max_id"] + 1;
	$user = $_SESSION["username"];
	mysqli_query($db, "INSERT INTO `addedusers` (`username`, `project_id`, `added_by`) VALUES ('$adduser', $project_id, '$user')");

	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_20', '$prc_20')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_20_role', '$prc_20_role')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_20_permission', '$prc_20_permission')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_20_hiding', '$prc_20_hiding')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_20_puh', '$prc_20_puh')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_20_email', '$prc_20_email')");


}

if(isset($_POST['prc_21'])  && strlen($_POST['prc_21']) > 2) {
	$prc_21 = $_POST['prc_21'];
	$prc_21_puh = $_POST['prc_21_puh'];
	$prc_21_email = $_POST['prc_21_email'];
	$prc_21_role = $_POST['prc_21_role'];
	$prc_21_permission = $_POST['prc_21_permission'];
	$prc_21_hiding = $_POST['prc_21_hiding'];

	$username_role_ = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username` LIKE '$prc_21_email'");
	$username_role = mysqli_fetch_assoc($username_role_);

	if(strlen($username_role["username"]) < 1){
		$p_symbols = rand_string(8);
		$password = "'" . password_hash($p_symbols, PASSWORD_DEFAULT) . "'"; #2022-01-26 15:12:01
		$created_att = "'" . date("Y-m-d H:i:s") . "'";
		$meta = mysqli_query($db, "INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_21_email, $password, $prc_21_role, $prc_21_permission, $prc_21_hiding, $created_att)");
		$txt = "Hei " . $prc_1 . "!\n" ."Käyttäjätilisi on " . $prc_21_email . " ja salasanasi on " . $p_symbols . "\n" . "Tämä puhelinnumerosi näkyy hankkeessa: " . $prc_21_puh . "\n" ."Roolisi on:" . $prc_21_role . "\n" ."Käyttäjätilisi luotiin " . $created_att;
		$headers = "From: webmaster@teditori.gromi.fi";
		print_r("INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_2`, $p_symbols, $prc_21_role, $prc_21_permission, $prc_21_hiding, $created_att)");
		mail($to,$subject,$txt,$headers);
		$adduser = $prc_1_email;
	}
	else {
		echo "User already Exists";
		$adduser = $prc_1;
	}

	$project_id = mysqli_fetch_array(mysqli_query($db, "SELECT MAX(id) as max_id FROM `projects`"))["max_id"] + 1;
	$user = $_SESSION["username"];
	mysqli_query($db, "INSERT INTO `addedusers` (`username`, `project_id`, `added_by`) VALUES ('$adduser', $project_id, '$user')");

	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_21', '$prc_21')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_21_role', '$prc_21_role')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_21_permission', '$prc_21_permission')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_21_hiding', '$prc_21_hiding')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_21_puh', '$prc_21_puh')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_21_email', '$prc_21_email')");


}

if(isset($_POST['prc_22'])  && strlen($_POST['prc_22']) > 2) {
	$prc_22 = $_POST['prc_22'];
	$prc_22_puh = $_POST['prc_22_puh'];
	$prc_22_email = $_POST['prc_22_email'];
	$prc_22_role = $_POST['prc_22_role'];
	$prc_22_permission = $_POST['prc_22_permission'];
	$prc_22_hiding = $_POST['prc_22_hiding'];

	$username_role_ = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username` LIKE '$prc_22_email'");
	$username_role = mysqli_fetch_assoc($username_role_);

	if(strlen($username_role["username"]) < 1){
		$p_symbols = rand_string(8);
		$password = "'" . password_hash($p_symbols, PASSWORD_DEFAULT) . "'"; #2022-01-26 15:12:01
		$created_att = "'" . date("Y-m-d H:i:s") . "'";
		$meta = mysqli_query($db, "INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_22_email, $password, $prc_22_role, $prc_22_permission, $prc_22_hiding, $created_att)");
		$txt = "Hei " . $prc_1 . "!\n" ."Käyttäjätilisi on " . $prc_22_email . " ja salasanasi on " . $p_symbols . "\n" . "Tämä puhelinnumerosi näkyy hankkeessa: " . $prc_22_puh . "\n" ."Roolisi on:" . $prc_22_role . "\n" ."Käyttäjätilisi luotiin " . $created_att;
		$headers = "From: webmaster@teditori.gromi.fi";
		print_r("INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_22, $p_symbols, $prc_22_role, $prc_22_permission, $prc_22_hiding, $created_att)");
		mail($to,$subject,$txt,$headers);
		$adduser = $prc_1_email;
	}
	else {
		echo "User already Exists";
		$adduser = $prc_1;
	}

	$project_id = mysqli_fetch_array(mysqli_query($db, "SELECT MAX(id) as max_id FROM `projects`"))["max_id"] + 1;
	$user = $_SESSION["username"];
	mysqli_query($db, "INSERT INTO `addedusers` (`username`, `project_id`, `added_by`) VALUES ('$adduser', $project_id, '$user')");

	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_22', '$prc_22')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_22_role', '$prc_22_role')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_22_permission', '$prc_22_permission')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_22_hiding', '$prc_22_hiding')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_22_puh', '$prc_22_puh')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_22_email', '$prc_22_email')");


}

if(isset($_POST['prc_23'])  && strlen($_POST['prc_23']) > 2) {
	$prc_23 = $_POST['prc_23'];
	$prc_23_puh = $_POST['prc_23_puh'];
	$prc_23_email = $_POST['prc_23_email'];
	$prc_23_role = $_POST['prc_23_role'];
	$prc_23_permission = $_POST['prc_23_permission'];
	$prc_23_hiding = $_POST['prc_23_hiding'];

	$username_role_ = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username` LIKE '$prc_23_email'");
	$username_role = mysqli_fetch_assoc($username_role_);

	if(strlen($username_role["username"]) < 1){
		$p_symbols = rand_string(8);
		$password = "'" . password_hash($p_symbols, PASSWORD_DEFAULT) . "'"; #2022-01-26 15:12:01
		$created_att = "'" . date("Y-m-d H:i:s") . "'";
		$meta = mysqli_query($db, "INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_23_email, $password, $prc_23_role, $prc_23_permission, $prc_23_hiding, $created_att)");
		$txt = "Hei " . $prc_1 . "!\n" ."Käyttäjätilisi on " . $prc_23_email . " ja salasanasi on " . $p_symbols . "\n" . "Tämä puhelinnumerosi näkyy hankkeessa: " . $prc_23_puh . "\n" ."Roolisi on:" . $prc_23_role . "\n" ."Käyttäjätilisi luotiin " . $created_att;
		$headers = "From: webmaster@teditori.gromi.fi";
		print_r("INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_23, $p_symbols, $prc_23_role, $prc_23_permission, $prc_23_hiding, $created_att)");
		mail($to,$subject,$txt,$headers);
		$adduser = $prc_1_email;
	}
	else {
		echo "User already Exists";
		$adduser = $prc_1;
	}

	$project_id = mysqli_fetch_array(mysqli_query($db, "SELECT MAX(id) as max_id FROM `projects`"))["max_id"] + 1;
	$user = $_SESSION["username"];
	mysqli_query($db, "INSERT INTO `addedusers` (`username`, `project_id`, `added_by`) VALUES ('$adduser', $project_id, '$user')");

	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_23', '$prc_23')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_23_role', '$prc_23_role')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_23_permission', '$prc_23_permission')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_23_hiding', '$prc_23_hiding')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_23_puh', '$prc_23_puh')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_23_email', '$prc_23_email')");


}

if(isset($_POST['prc_24'])  && strlen($_POST['prc_24']) > 2) {
	$prc_24 = $_POST['prc_24'];
	$prc_24_puh = $_POST['prc_24_puh'];
	$prc_24_email = $_POST['prc_24_email'];
	$prc_24_role = $_POST['prc_24_role'];
	$prc_24_permission = $_POST['prc_24_permission'];
	$prc_24_hiding = $_POST['prc_24_hiding'];

	$username_role_ = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username` LIKE '$prc_24_email'");
	$username_role = mysqli_fetch_assoc($username_role_);

	if(strlen($username_role["username"]) < 1){
		$p_symbols = rand_string(8);
		$password = "'" . password_hash($p_symbols, PASSWORD_DEFAULT) . "'"; #2022-01-26 15:12:01
		$created_att = "'" . date("Y-m-d H:i:s") . "'";
		$meta = mysqli_query($db, "INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_24_email, $password, $prc_24_role, $prc_24_permission, $prc_24_hiding, $created_att)");
		$txt = "Hei " . $prc_1 . "!\n" ."Käyttäjätilisi on " . $prc_24_email . " ja salasanasi on " . $p_symbols . "\n" . "Tämä puhelinnumerosi näkyy hankkeessa: " . $prc_24_puh . "\n" ."Roolisi on:" . $prc_24_role . "\n" ."Käyttäjätilisi luotiin " . $created_att;
		$headers = "From: webmaster@teditori.gromi.fi";
		print_r("INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_24, $p_symbols, $prc_24_role, $prc_24_permission, $prc_24_hiding, $created_att)");
		mail($to,$subject,$txt,$headers);
		$adduser = $prc_1_email;
	}
	else {
		echo "User already Exists";
		$adduser = $prc_1;
	}

	$project_id = mysqli_fetch_array(mysqli_query($db, "SELECT MAX(id) as max_id FROM `projects`"))["max_id"] + 1;
	$user = $_SESSION["username"];
	mysqli_query($db, "INSERT INTO `addedusers` (`username`, `project_id`, `added_by`) VALUES ('$adduser', $project_id, '$user')");

	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_24', '$prc_25')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_24_role', '$prc_24_role')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_24_permission', '$prc_24_permission')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_24_hiding', '$prc_24_hiding')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_24_puh', '$prc_24_puh')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_24_email', '$prc_24_email')");


}
if(isset($_POST['prc_25'])  && strlen($_POST['prc_25']) > 2) {
	$prc_25 = $_POST['prc_25'];
	$prc_25_puh = $_POST['prc_25_puh'];
	$prc_25_email = $_POST['prc_25_email'];
	$prc_25_role = $_POST['prc_25_role'];
	$prc_25_permission = $_POST['prc_25_permission'];
	$prc_25_hiding = $_POST['prc_25_hiding'];

	$username_role_ = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username` LIKE '$prc_25_email'");
	$username_role = mysqli_fetch_assoc($username_role_);

	if(strlen($username_role["username"]) < 1){
		$p_symbols = rand_string(8);
		$password = "'" . password_hash($p_symbols, PASSWORD_DEFAULT) . "'"; #2022-01-26 15:12:01
		$created_att = "'" . date("Y-m-d H:i:s") . "'";
		$meta = mysqli_query($db, "INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_25_email, $password, $prc_25_role, $prc_25_permission, $prc_25_hiding, $created_att)");
		$txt = "Hei " . $prc_1 . "!\n" ."Käyttäjätilisi on " . $prc_25_email . " ja salasanasi on " . $p_symbols . "\n" . "Tämä puhelinnumerosi näkyy hankkeessa: " . $prc_25_puh . "\n" ."Roolisi on:" . $prc_25_role . "\n" ."Käyttäjätilisi luotiin " . $created_att;
		$headers = "From: webmaster@teditori.gromi.fi";
		print_r("INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_26, $p_symbols, $prc_25_role, $prc_25_permission, $prc_25_hiding, $created_att)");
		mail($to,$subject,$txt,$headers);
		$adduser = $prc_1_email;
	}
	else {
		echo "User already Exists";
		$adduser = $prc_1;
	}

	$project_id = mysqli_fetch_array(mysqli_query($db, "SELECT MAX(id) as max_id FROM `projects`"))["max_id"] + 1;
	$user = $_SESSION["username"];
	mysqli_query($db, "INSERT INTO `addedusers` (`username`, `project_id`, `added_by`) VALUES ('$adduser', $project_id, '$user')");

	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_25', '$prc_26')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_25_role', '$prc_25_role')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_25_permission', '$prc_25_permission')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_25_hiding', '$prc_25_hiding')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_25_puh', '$prc_25_puh')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_25_email', '$prc_25_email')");


}

if(isset($_POST['prc_26'])  && strlen($_POST['prc_26']) > 2) {
	$prc_26 = $_POST['prc_26'];
	$prc_26_puh = $_POST['prc_26_puh'];
	$prc_26_email = $_POST['prc_26_email'];
	$prc_26_role = $_POST['prc_26_role'];
	$prc_26_permission = $_POST['prc_26_permission'];
	$prc_26_hiding = $_POST['prc_26_hiding'];

	$username_role_ = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username` LIKE '$prc_26_email'");
	$username_role = mysqli_fetch_assoc($username_role_);

	if(strlen($username_role["username"]) < 1){
		$p_symbols = rand_string(8);
		$password = "'" . password_hash($p_symbols, PASSWORD_DEFAULT) . "'"; #2022-01-26 15:12:01
		$created_att = "'" . date("Y-m-d H:i:s") . "'";
		$meta = mysqli_query($db, "INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_26_email, $password, $prc_26_role, $prc_26_permission, $prc_26_hiding, $created_att)");
		$txt = "Hei " . $prc_1 . "!\n" ."Käyttäjätilisi on " . $prc_26_email . " ja salasanasi on " . $p_symbols . "\n" . "Tämä puhelinnumerosi näkyy hankkeessa: " . $prc_26_puh . "\n" ."Roolisi on:" . $prc_26_role . "\n" ."Käyttäjätilisi luotiin " . $created_att;
		$headers = "From: webmaster@teditori.gromi.fi";
		print_r("INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_26, $p_symbols, $prc_26_role, $prc_26_permission, $prc_26_hiding, $created_att)");
		mail($to,$subject,$txt,$headers);
		$adduser = $prc_1_email;
	}
	else {
		echo "User already Exists";
		$adduser = $prc_1;
	}

	$project_id = mysqli_fetch_array(mysqli_query($db, "SELECT MAX(id) as max_id FROM `projects`"))["max_id"] + 1;
	$user = $_SESSION["username"];
	mysqli_query($db, "INSERT INTO `addedusers` (`username`, `project_id`, `added_by`) VALUES ('$adduser', $project_id, '$user')");

	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_26', '$prc_26')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_26_role', '$prc_26_role')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_26_permission', '$prc_26_permission')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_26_hiding', '$prc_26_hiding')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_26_puh', '$prc_26_puh')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_26_email', '$prc_26_email')");


}

if(isset($_POST['prc_27'])  && strlen($_POST['prc_27']) > 2) {
	$prc_27 = $_POST['prc_27'];
	$prc_27_puh = $_POST['prc_27_puh'];
	$prc_27_email = $_POST['prc_27_email'];
	$prc_27_role = $_POST['prc_27_role'];
	$prc_27_permission = $_POST['prc_27_permission'];
	$prc_27_hiding = $_POST['prc_27_hiding'];

	$username_role_ = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username` LIKE '$prc_27_email'");
	$username_role = mysqli_fetch_assoc($username_role_);

	if(strlen($username_role["username"]) < 1){
		$p_symbols = rand_string(8);
		$password = "'" . password_hash($p_symbols, PASSWORD_DEFAULT) . "'"; #2022-01-26 15:12:01
		$created_att = "'" . date("Y-m-d H:i:s") . "'";
		$meta = mysqli_query($db, "INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_27_email, $password, $prc_27_role, $prc_27_permission, $prc_27_hiding, $created_att)");
		$txt = "Hei " . $prc_1 . "!\n" ."Käyttäjätilisi on " . $prc_27_email . " ja salasanasi on " . $p_symbols . "\n" . "Tämä puhelinnumerosi näkyy hankkeessa: " . $prc_27_puh . "\n" ."Roolisi on:" . $prc_27_role . "\n" ."Käyttäjätilisi luotiin " . $created_att;
		$headers = "From: webmaster@teditori.gromi.fi";
		print_r("INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_27, $p_symbols, $prc_27_role, $prc_27_permission, $prc_27_hiding, $created_att)");
		mail($to,$subject,$txt,$headers);
		$adduser = $prc_1_email;
	}
	else {
		echo "User already Exists";
		$adduser = $prc_1;
	}

	$project_id = mysqli_fetch_array(mysqli_query($db, "SELECT MAX(id) as max_id FROM `projects`"))["max_id"] + 1;
	$user = $_SESSION["username"];
	mysqli_query($db, "INSERT INTO `addedusers` (`username`, `project_id`, `added_by`) VALUES ('$adduser', $project_id, '$user')");

	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_27', '$prc_27')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_27_role', '$prc_27_role')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_27_permission', '$prc_27_permission')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_27_hiding', '$prc_27_hiding')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_27_puh', '$prc_27_puh')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_27_email', '$prc_27_email')");


}

if(isset($_POST['prc_28'])  && strlen($_POST['prc_28']) > 2) {
	$prc_28 = $_POST['prc_28'];
	$prc_28_puh = $_POST['prc_28_puh'];
	$prc_28_email = $_POST['prc_28_email'];
	$prc_28_role = $_POST['prc_28_role'];
	$prc_28_permission = $_POST['prc_28_permission'];
	$prc_28_hiding = $_POST['prc_28_hiding'];

	$username_role_ = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username` LIKE '$prc_28_email'");
	$username_role = mysqli_fetch_assoc($username_role_);

	if(strlen($username_role["username"]) < 1){
		$p_symbols = rand_string(8);
		$password = "'" . password_hash($p_symbols, PASSWORD_DEFAULT) . "'"; #2022-01-26 15:12:01
		$created_att = "'" . date("Y-m-d H:i:s") . "'";
		$meta = mysqli_query($db, "INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_28_email, $password, $prc_28_role, $prc_28_permission, $prc_28_hiding, $created_att)");
		$txt = "Hei " . $prc_1 . "!\n" ."Käyttäjätilisi on " . $prc_28_email . " ja salasanasi on " . $p_symbols . "\n" . "Tämä puhelinnumerosi näkyy hankkeessa: " . $prc_28_puh . "\n" ."Roolisi on:" . $prc_28_role . "\n" ."Käyttäjätilisi luotiin " . $created_att;
		$headers = "From: webmaster@teditori.gromi.fi";
		print_r("INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_28, $p_symbols, $prc_28_role, $prc_28_permission, $prc_28_hiding, $created_att)");
		mail($to,$subject,$txt,$headers);
		$adduser = $prc_1_email;
	}
	else {
		echo "User already Exists";
		$adduser = $prc_1;
	}

	$project_id = mysqli_fetch_array(mysqli_query($db, "SELECT MAX(id) as max_id FROM `projects`"))["max_id"] + 1;
	$user = $_SESSION["username"];
	mysqli_query($db, "INSERT INTO `addedusers` (`username`, `project_id`, `added_by`) VALUES ('$adduser', $project_id, '$user')");

	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_28', '$prc_28')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_28_role', '$prc_28_role')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_28_permission', '$prc_28_permission')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_28_hiding', '$prc_28_hiding')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_28_puh', '$prc_28_puh')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_28_email', '$prc_28_email')");


}

if(isset($_POST['prc_29'])  && strlen($_POST['prc_29']) > 2) {
	$prc_29 = $_POST['prc_29'];
	$prc_29_puh = $_POST['prc_29_puh'];
	$prc_29_email = $_POST['prc_29_email'];
	$prc_29_role = $_POST['prc_29_role'];
	$prc_29_permission = $_POST['prc_29_permission'];
	$prc_29_hiding = $_POST['prc_29_hiding'];

	$username_role_ = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username` LIKE '$prc_29_email'");
	$username_role = mysqli_fetch_assoc($username_role_);

	if(strlen($username_role["username"]) < 1){
		$p_symbols = rand_string(8);
		$password = "'" . password_hash($p_symbols, PASSWORD_DEFAULT) . "'"; #2022-01-26 15:12:01
		$created_att = "'" . date("Y-m-d H:i:s") . "'";
		$meta = mysqli_query($db, "INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_29_email, $password, $prc_29_role, $prc_29_permission, $prc_29_hiding, $created_att)");
		$txt = "Hei " . $prc_1 . "!\n" ."Käyttäjätilisi on " . $prc_29_email . " ja salasanasi on " . $p_symbols . "\n" . "Tämä puhelinnumerosi näkyy hankkeessa: " . $prc_29_puh . "\n" ."Roolisi on:" . $prc_29_role . "\n" ."Käyttäjätilisi luotiin " . $created_att;
		$headers = "From: webmaster@teditori.gromi.fi";
		print_r("INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_29, $p_symbols, $prc_29_role, $prc_29_permission, $prc_29_hiding, $created_att)");
		mail($to,$subject,$txt,$headers);
		$adduser = $prc_1_email;
	}
	else {
		echo "User already Exists";
		$adduser = $prc_1;
	}

	$project_id = mysqli_fetch_array(mysqli_query($db, "SELECT MAX(id) as max_id FROM `projects`"))["max_id"] + 1;
	$user = $_SESSION["username"];
	mysqli_query($db, "INSERT INTO `addedusers` (`username`, `project_id`, `added_by`) VALUES ('$adduser', $project_id, '$user')");

	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_29', '$prc_29')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_29_role', '$prc_29_role')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_29_permission', '$prc_29_permission')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_29_hiding', '$prc_29_hiding')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_29_puh', '$prc_29_puh')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_29_email', '$prc_29_email')");


}

if(isset($_POST['prc_30'])  && strlen($_POST['prc_30']) > 2) {
	$prc_30 = $_POST['prc_30'];
	$prc_30_puh = $_POST['prc_30_puh'];
	$prc_30_email = $_POST['prc_30_email'];
	$prc_30_role = $_POST['prc_30_role'];
	$prc_30_permission = $_POST['prc_30_permission'];
	$prc_30_hiding = $_POST['prc_30_hiding'];

	$username_role_ = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username` LIKE '$prc_30_email'");
	$username_role = mysqli_fetch_assoc($username_role_);

	if(strlen($username_role["username"]) < 1){
		$p_symbols = rand_string(8);
		$password = "'" . password_hash($p_symbols, PASSWORD_DEFAULT) . "'"; #2022-01-26 15:12:01
		$created_att = "'" . date("Y-m-d H:i:s") . "'";
		$meta = mysqli_query($db, "INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_30_email, $password, $prc_30_role, $prc_30_permission, $prc_30_hiding, $created_att)");
		$txt = "Hei " . $prc_1 . "!\n" ."Käyttäjätilisi on " . $prc_30_email . " ja salasanasi on " . $p_symbols . "\n" . "Tämä puhelinnumerosi näkyy hankkeessa: " . $prc_30_puh . "\n" ."Roolisi on:" . $prc_30_role . "\n" ."Käyttäjätilisi luotiin " . $created_att;
		$headers = "From: webmaster@teditori.gromi.fi";
		print_r("INSERT INTO `users` (`username`, `password`, `role`, `permissionrank`, `visible_forall`, `created_at`) VALUES ($prc_30, $p_symbols, $prc_30_role, $prc_30_permission, $prc_30_hiding, $created_att)");
		mail($to,$subject,$txt,$headers);
		$adduser = $prc_1_email;
	}
	else {
		echo "User already Exists";
		$adduser = $prc_1;
	}

	$project_id = mysqli_fetch_array(mysqli_query($db, "SELECT MAX(id) as max_id FROM `projects`"))["max_id"] + 1;
	$user = $_SESSION["username"];
	mysqli_query($db, "INSERT INTO `addedusers` (`username`, `project_id`, `added_by`) VALUES ('$adduser', $project_id, '$user')");

	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_30', '$prc_30')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_30_role', '$prc_30_role')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_30_permission', '$prc_30_permission')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_30_hiding', '$prc_30_hiding')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_30_puh', '$prc_30_puh')");
	$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_30_email', '$prc_30_email')");


}
// 1.5
$a_pr_rap = $_POST['a_pr_rap'];
$a_pr_krs = $_POST['a_pr_krs'];

$b_pr_rap = $_POST['b_pr_rap'];
$b_pr_krs = $_POST['b_pr_krs'];

$c_pr_rap = $_POST['c_pr_rap'];
$c_pr_krs = $_POST['c_pr_krs'];

$d_pr_rap = $_POST['d_pr_rap'];
$d_pr_krs = $_POST['d_pr_krs'];

$e_pr_rap = $_POST['e_pr_rap'];
$e_pr_krs = $_POST['e_pr_krs'];

$f_pr_rap = $_POST['f_pr_rap'];
$f_pr_krs = $_POST['f_pr_krs'];


$rooms_per_rappu = $_POST['rooms_per_rappu'];
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



// 2.0
$room_name = $_POST['room_name'];
$room_one_a = $_POST['room_one_a'] . '\r\n';
$room_one_a_desc = $_POST['room_one_a_desc'] . '\r\n';
$room_one_a_h = $_POST['room_one_a_h'];
$room_one_a_w = $_POST['room_one_a_w'];
$room_one_b = $_POST['room_one_b'] . '\r\n';
$room_one_b_desc = $_POST['room_one_b_desc'] . '\r\n';
$room_one_b_h = $_POST['room_one_b_h'];
$room_one_b_w = $_POST['room_one_b_w'];
$room_one_c = $_POST['room_one_c'] . '\r\n';
$room_one_c_desc = $_POST['room_one_c_desc'] . '\r\n';
$room_one_c_h = $_POST['room_one_c_h'];
$room_one_c_w = $_POST['room_one_c_w'];
$room_one_d = $_POST['room_one_d'] . '\r\n';
$room_one_d_desc = $_POST['room_one_d_desc'] . '\r\n';
$room_one_d_h = $_POST['room_one_d_h'];
$room_one_d_w = $_POST['room_one_d_w'];
$room_one_roof = $_POST['room_one_roof'] . '\r\n';
$room_one_roof_desc = $_POST['room_one_roof_desc'] . '\r\n';
$room_one_roof_h = $_POST['room_one_roof_h'];
$room_one_roof_w = $_POST['room_one_roof_w'];
$room_one_floor = $_POST['room_one_floor'] . '\r\n';
$room_one_floor_desc = $_POST['room_one_floor_desc'] . '\r\n';
$room_one_floor_h = $_POST['room_one_floor_h'];
$room_one_floor_w = $_POST['room_one_floor_w'];

$s_settings = "";
$s_materials = "";

$post = mysqli_query($db, "INSERT INTO `projects` (`id`, `title`, `created_at`, `link`, `project_type`, `user`) VALUES ('$id', '$project_name', '$date', '', '$project_type', '$prc_3')");
if (!$post) {
	echo $project_name . "<br>" . $date . "<br>" . $project_type;
}

$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_id', '$id')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_name', '$project_name')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_type', '$project_type')");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$s_settings' WHERE `id`=$id AND `meta_key`='s_settings'");
$meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value`='$s_materials' WHERE `id`=$id AND `meta_key`='s_materials'");


$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_settings', '$s_settings')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_materials', '$s_materials')");

$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_1', '$prc_1')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_1_role', '$prc_1_role')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_1_permission', '$prc_1_permission')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_1_hiding', '$prc_1_hiding')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_1_puh', '$prc_1_puh')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_1_email', '$prc_1_email')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_2', '$prc_2')"); // this
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_2_role', '$prc_2_role')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_2_permission', '$prc_2_permission')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_2_hiding', '$prc_2_hiding')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_2_puh', '$prc_2_puh')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_2_email', '$prc_2_email')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_3', '$prc_3')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_3_role', '$prc_3_role')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_3_permission', '$prc_3_permission')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_3_hiding', '$prc_3_hiding')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_3_puh', '$prc_3_puh')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_3_email', '$prc_3_email')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_4', '$prc_4')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_4_role', '$prc_4_role')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_4_permission', '$prc_4_permission')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_4_hiding', '$prc_4_hiding')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_4_puh', '$prc_4_puh')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_4_email', '$prc_4_email')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_5', '$prc_5')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_5_role', '$prc_5_role')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_5_permission', '$prc_5_permission')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_5_hiding', '$prc_5_hiding')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_5_puh', '$prc_5_puh')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_5_email', '$prc_5_email')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_6', '$prc_6')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_6_role', '$prc_6_role')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_6_permission', '$prc_6_permission')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_6_hiding', '$prc_6_hiding')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_6_puh', '$prc_6_puh')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_6_email', '$prc_6_email')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_7', '$prc_7')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_7_role', '$prc_7_role')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_7_permission', '$prc_7_permission')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_7_hiding', '$prc_7_hiding')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_7_puh', '$prc_7_puh')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_7_email', '$prc_7_email')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_8', '$prc_8')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_8_role', '$prc_8_role')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_8_permission', '$prc_8_permission')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_8_hiding', '$prc_8_hiding')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_8_puh', '$prc_8_puh')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_8_email', '$prc_8_email')");

$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_9', '$prc_9')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_9_role', '$prc_9_role')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_9_permission', '$prc_9_permission')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_9_hiding', '$prc_9_hiding')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_9_puh', '$prc_9_puh')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_9_email', '$prc_9_email')");

$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_10', '$prc_10')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_10_role', '$prc_10_role')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_10_permission', '$prc_10_permission')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_10_hiding', '$prc_10_hiding')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_10_puh', '$prc_10_puh')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_10_email', '$prc_10_email')");

$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_11', '$prc_11')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_11_role', '$prc_11_role')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_11_permission', '$prc_11_permission')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_11_hiding', '$prc_11_hiding')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_11_puh', '$prc_11_puh')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'prc_11_email', '$prc_11_email')");


$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'a_pr_krs', '$a_pr_krs')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'a_pr_rap', '$a_pr_rap')");

$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'b_pr_krs', '$b_pr_krs')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'b_pr_rap', '$b_pr_rap')");

$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'c_pr_krs', '$c_pr_krs')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'c_pr_rap', '$c_pr_rap')");

$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'd_pr_krs', '$d_pr_krs')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'd_pr_rap', '$d_pr_rap')");

$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'e_pr_krs', '$e_pr_krs')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'e_pr_rap', '$e_pr_rap')");

$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'f_pr_krs', '$f_pr_krs')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'f_pr_rap', '$f_pr_rap')");

$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_room_in_rap', '$rooms_per_rappu')");

$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'a_rooms', '$a_rooms')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'b_rooms', '$b_rooms')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'c_rooms', '$c_rooms')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'd_rooms', '$d_rooms')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'e_rooms', '$e_rooms')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'f_rooms', '$f_rooms')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'g_rooms', '$g_rooms')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'h_rooms', '$h_rooms')");

$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'a_rooms_nowork', '$a_rooms_nowork')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'b_rooms_nowork', '$b_rooms_nowork')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'c_rooms_nowork', '$c_rooms_nowork')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'd_rooms_nowork', '$d_rooms_nowork')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'e_rooms_nowork', '$e_rooms_nowork')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'f_rooms_nowork', '$f_rooms_nowork')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'g_rooms_nowork', '$g_rooms_nowork')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'h_rooms_nowork', '$h_rooms_nowork')");

$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_room_name', '$room_name')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_rap_name', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s1_name', '$room_one_a')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s1_order', '1')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s1_desc', '$room_one_a_desc')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s1_h', '$room_one_a_h')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s1_w', '$room_one_a_w')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s2_name', '$room_one_b')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s2_order', '2')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s2_desc', '$room_one_b_desc')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s2_h', '$room_one_b_h')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s2_w', '$room_one_b_w')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s3_name', '$room_one_c')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s3_order', '3')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s3_desc', '$room_one_c_desc')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s3_h', '$room_one_c_h')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s3_w', '$room_one_c_w')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s4_name', '$room_one_d')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s4_order', '4')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s4_desc', '$room_one_d_desc')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s4_h', '$room_one_d_h')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s4_w', '$room_one_d_w')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s5_name', 'room_one_roof')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s5_order', '5')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s5_desc', 'room_one_roof_desc')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s5_h', 'room_one_roof_h')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s5_w', 'room_one_roof_w')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s6_name', 'room_one_floor')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s6_order', '6')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s6_desc', 'room_one_floor_desc')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s6_h', 'room_one_floor_h')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_s6_w', 'room_one_floor_w')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'm_materials', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'm_name', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'm_one', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'm_two', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'm_three', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'm_four', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'm_five', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_ladonta_levytyssuunta', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_saumoitus', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_ladontasystem', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_materials', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_rangan_suunta', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_kiinnikkeiden_linjojen_alkupaikka', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_kiinnikelinjan_etaisyydet', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_levytys_levytyksen_katkeaminen', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_levytys_pituus_y', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_levytys_pituus_x', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_levytyksen_suunta', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_lapiviennit', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_levyt_standard', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_jarjestelma', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_olosuhteet', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_olosuhde', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_aukko', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_reika_', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_levy_', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_rankatyypit', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_tyypin_pituudet', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_pystyasennus', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_listat', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_rankojen_sijoittelu', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 's_users', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_step', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_recl_msg', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_recl_from', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_recl_to', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_recl_attention', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_1_origo', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_1_gooddist_w', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_1_gooddist_h', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_1_1_name', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_1_1_dist_x', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_1_1_dist_y', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_1_1_comments', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_2_1_name', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_2_1_dist_x', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_2_1_dist_y', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_2_1_comments', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_2_1_h', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_2_1_w', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_3_1_name', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_3_1_dist_x', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_3_1_dist_y', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_3_1_comments', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_3_1_r', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_4_1_name', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_4_1_num', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_4_1_type', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_4_1_x', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_4_1_y', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'pr_4_1_comments', '')");

$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'step', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'wall', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'room', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'settings', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'mittapisteet', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'aukot', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'reijat', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'saumat', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'levyt', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'rangat', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'listat', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'kokonaisalue', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'levytettava_alue', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'poisjaava_alue', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'keskusmittapiste_cord', '')");
$meta = mysqli_query($db, "INSERT INTO `projectmeta` (`id`, `meta_key`, `meta_value`) VALUES ($id, 'reklamaatiot', '')");

echo '<h1>Projekti luotu onnistuneesti!</h1>';
echo '<h5>*Jos näet virheitä yläosassa, ne voidaan todennäköisesti jättää huomiotta.</h5>';
echo '<button href="/welcome.php" style="font-size: 15">Palaa pääsivulle</button>';

// if ($post) {
// 	echo "<script>window.location.replace('http://teditori.gromi.fi');</script>";
// }
?>