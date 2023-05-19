<?php 

require "vendor/config.php";


$id = $_GET["id"];
$post = mysqli_query($db, "SELECT * FROM `projects` WHERE `id` = '$id'");
$post = mysqli_fetch_assoc($post);


include('./header.php');
// echo "<form action='' method='post' onsubmit='return false' class='post__form'>";
include('./templates/2_0.php');
include('./templates/drawarea.php');
include('./templates/2_1.php');
include('./templates/2_2.php');
include('./templates/2_3.php');
include('./templates/2_4.php');
include('./templates/2_5.php');
include('./templates/2_5-5.php');
include('./templates/2_5-esikatselu.php');
include('./templates/2_6.php');
include('./templates/2_7.php');
// echo "</form>";

include('./footer-post.php');

 ?>
