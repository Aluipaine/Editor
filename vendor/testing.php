<?php

function rand_string( $length ) {

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars),0,$length);

}

echo date("Y-m-d H:i:s");

$to = "jyri@gromi.fi";
$subject = "My subject";
$txt = date("Y-m-d H:i:s");
$headers = "From: jyri.gromyko3003@gmail.com";

mail($to,$subject,$txt,$headers);
?>