<?php
// This file inserts new settings template to settings templates 

require "config.php";
$index = $_POST['index'];
$meta = mysqli_query($db, "INSERT INTO `settings__templates`(`id`, `name`) VALUES (NULL,'$index')");
//echo "INSERT INTO `settings__templates`(`id`, `name`) VALUES (NULL,'$index')";
$s_data = mysqli_query($db, "SELECT * FROM `settings__templates` WHERE `name`='$index'; ");
$id = mysqli_fetch_all($s_data)[0][0];

$meta = mysqli_query($db, "INSERT INTO `settingsmeta`(`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL,'$id','s_settings','');");
$meta = mysqli_query($db, "INSERT INTO `settingsmeta`(`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL,'$id','s_materials','');");
$meta = mysqli_query($db, "INSERT INTO `settingsmeta`(`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL,'$id','aukko_mallit','');");
$meta = mysqli_query($db, "INSERT INTO `settingsmeta`(`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL,'$id','s_systems','');");
$meta = mysqli_query($db, "INSERT INTO `settingsmeta`(`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL,'$id','s_levytysreunat','');");
$meta = mysqli_query($db, "INSERT INTO `settingsmeta`(`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL,'$id','s_rangat','');");
$meta = mysqli_query($db, "INSERT INTO `settingsmeta`(`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL,'$id','s_reikaframe','');");
$meta = mysqli_query($db, "INSERT INTO `settingsmeta`(`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL,'$id','s_lapiviennit','');");
$meta = mysqli_query($db, "INSERT INTO `settingsmeta`(`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL,'$id','s_rangat_1','');");
$meta = mysqli_query($db, "INSERT INTO `settingsmeta`(`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL,'$id','s_rangat_2','');");
$meta = mysqli_query($db, "INSERT INTO `settingsmeta`(`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL,'$id','s_rangat_3','');");
$meta = mysqli_query($db, "INSERT INTO `settingsmeta`(`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL,'$id','s_rangat_4','');");
$meta = mysqli_query($db, "INSERT INTO `settingsmeta`(`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL,'$id','s_rangat_5','');");
$meta = mysqli_query($db, "INSERT INTO `settingsmeta`(`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL,'$id','s_rangat_6','');");
$meta = mysqli_query($db, "INSERT INTO `settingsmeta`(`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL,'$id','s_rangat_7','');");
$meta = mysqli_query($db, "INSERT INTO `settingsmeta`(`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL,'$id','s_rangat_8','');");
$meta = mysqli_query($db, "INSERT INTO `settingsmeta`(`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL,'$id','s_saumasuunta',''); ");
$meta = mysqli_query($db, "INSERT INTO `settingsmeta`(`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL,'$id','s_saumatyyppi',''); ");
$meta = mysqli_query($db, "INSERT INTO `settingsmeta`(`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL,'$id','s_saumakulku',''); ");
$meta = mysqli_query($db, "INSERT INTO `settingsmeta`(`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL,'$id','s_saumatpysty',''); ");
$meta = mysqli_query($db, "INSERT INTO `settingsmeta`(`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL,'$id','s_saumatvaaka',''); ");
$meta = mysqli_query($db, "INSERT INTO `settingsmeta`(`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL,'$id','s_aukot_1',''); ");
$meta = mysqli_query($db, "INSERT INTO `settingsmeta`(`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL,'$id','s_aukot_2',''); ");
$meta = mysqli_query($db, "INSERT INTO `settingsmeta`(`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL,'$id','s_aukot_3',''); ");
$meta = mysqli_query($db, "INSERT INTO `settingsmeta`(`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL,'$id','s_aukot_4',''); ");
$meta = mysqli_query($db, "INSERT INTO `settingsmeta`(`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL,'$id','s_aukot_5',''); ");
$meta = mysqli_query($db, "INSERT INTO `settingsmeta`(`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL,'$id','s_listatpysty',''); ");
$meta = mysqli_query($db, "INSERT INTO `settingsmeta`(`meta_id`, `id`, `meta_key`, `meta_value`) VALUES (NULL,'$id','s_listatvaaka',''); ");

echo $id;

?>