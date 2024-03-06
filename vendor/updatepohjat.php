<?php 
require "config.php";

// This code puts content from room section screen to database.

$template_name = $_POST['name'];
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$k = $_POST['k'];
$l = $_POST['l'];

$sql = "SELECT * FROM `pohjat` WHERE `name`='$template_name'";
$result = mysqli_query($db, $sql);

if(mysqli_num_rows($result) > 0){
    // if template name is not unique - return error
    header('HTTP/1.1 409 Conflict');
    exit();
}

$meta = mysqli_query($db, "INSERT INTO `pohjat` (`id`, `name`, `a`,`b`,`c`,`d`, `k`, `l`) VALUES (NULL,'$template_name','$a', '$b', '$c', '$d', '$k', '$l'); ");

?>