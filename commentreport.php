<?php 
// Include config file
require "vendor/config.php";




$open_comments_ = mysqli_query($db, "SELECT * FROM `comments` WHERE `ending_time`='' ");
$_open_comments = mysqli_fetch_all($open_comments_);


// print_r($_open_comments);

$txt = "";
foreach ($_open_comments as $value) {
    $txt .= "\n \n" . "Kommentti projektissa " . $value[1] . ", huone " . $value[2] . ", X|Y (mm): ". $value[4]. " \n" ."Keneltä: " . $value[7] . ", Kenelle: " . $value[8] . " \n" . "Aihe: " . $value[12] . "\n" . "Sisältö: " . $value[5] . "\n" ."Avattu: " . $value[10] . "\n" ."Lisätyt tiedostot: " . $value[6] . " \n \n " . "_____________________";
}

echo "<h1 style='display: block;font-size: 40px;font-family: sans-serif;color: #0e0e0e;height: 100vh;width: 100%;padding-top: 33vh;text-align: center;'>RAPORTTI ON LAADITTU, KATSO SÄHKÖPOSTISI.</h1>";

$timestamp = date("Y-m-d H:i:s");
$to = "jyri@gromi.fi";
$subject = "Avoimet tiketit " . $timestamp;
$headers = "From: webmaster@teditori.gromi.fi";
mail($to,$subject,$txt,$headers);


 ?>