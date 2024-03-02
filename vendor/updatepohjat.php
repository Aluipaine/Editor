<?php 
require "config.php";

// This code puts content from room section screen to database.
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$k = $_POST['k'];
$l = $_POST['l'];
$meta = mysqli_query($db, "INSERT INTO `pohjat` (`id`, `a`,`b`,`c`,`d`, `k`, `l`) VALUES (NULL,'$a', '$b', '$c', '$d', '$k', '$l'); ");

?>