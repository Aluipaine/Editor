<?php 
// Include config file
require "../vendor/config.php";


// Count total files
 //$_POST['id']
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$k = $_POST['k'];
$l = $_POST['l'];


$meta = mysqli_query($db, "INSERT INTO `pohjat` (`id`, `a`,`b`,`c`,`d`, `k`, `l`) VALUES (NULL,'$a', '$b', '$c', '$d', '$k', '$l'); ");




// $p_data = mysqli_query($db, "SELECT * FROM `pohjat`");
// $p_da = mysqli_fetch_all($p_data);
// $p_data = $p_da[0][3];

// print_r($p_da);
// print_r($p_data);
 ?>