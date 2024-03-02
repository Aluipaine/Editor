<?php
// This file enables search function by time periods in work diary
require "config.php";

$start_time = $_POST['start_time'];
if(strlen($_POST['start_time']) > 2) {
    $start_time = strtotime($start_time);
}
else {
    $start_time = 1697789989;
}

$end_time = $_POST['end_time'];

$projektihaku = $_POST['projektihaku'];
$tekijahaku = $_POST['tekijahaku'];

$projektihaku_query = "";
$tekijahaku_query = "";

if(strlen($projektihaku) >= 2) {
    $projektihaku_query = $projektihaku;
} 

if(strlen($tekijahaku) >= 2) {
    $tekijahaku_query = $tekijahaku;
} 


if(strlen($end_time) > 2) {
  $end_time = strtotime($end_time);

  if(strlen($tekijahaku) > 2 && strlen($projektihaku) >= 2) {
    $meta = mysqli_query($db, "SELECT * FROM `workdiary` WHERE `timestamp`>'$start_time' AND `timestamp`<'$end_time' AND `projectid`='$projektihaku_query' AND `who`='$tekijahaku_query'"); 
    //print_r("SELECT * FROM `workdiary` WHERE `timestamp`>'$start_time' AND `timestamp`<'$end_time' AND `projectid`='$projektihaku_query' AND `who`='$tekijahaku_query'");
  }
  elseif(strlen($tekijahaku) >= 2) {
    $meta = mysqli_query($db, "SELECT * FROM `workdiary` WHERE `timestamp`>'$start_time' AND `timestamp`<'$end_time' AND `who`='$tekijahaku_query'"); 
    //print_r("SELECT * FROM `workdiary` WHERE `timestamp`>'$start_time' AND `timestamp`<'$end_time' AND `who`='$tekijahaku_query'");

  }
  elseif(strlen($projektihaku) >= 2) {
    $meta = mysqli_query($db, "SELECT * FROM `workdiary` WHERE `timestamp`>'$start_time' AND `timestamp`<'$end_time' AND `projectid`='$projektihaku_query'");
    //print_r("SELECT * FROM `workdiary` WHERE `timestamp`>'$start_time' AND `timestamp`<'$end_time' AND `projectid`='$projektihaku_query'"); 
  }
  else {
    $meta = mysqli_query($db, "SELECT * FROM `workdiary` WHERE `timestamp`>'$start_time' AND `timestamp`<'$end_time'"); 
    //print_r("SELECT * FROM `workdiary` WHERE `timestamp`>'$start_time' AND `timestamp`<'$end_time'");
  }
}
else {    
    if(strlen($tekijahaku) >= 2 && strlen($projektihaku) >= 2) {
        $meta = mysqli_query($db, "SELECT * FROM `workdiary` WHERE `timestamp`>'$start_time' AND `projectid`='$projektihaku_query' AND `who`='$tekijahaku_query'");
        //print_r("SELECT * FROM `workdiary` WHERE `timestamp`>'$start_time' AND `projectid`='$projektihaku_query' AND `who`='$tekijahaku_query'");
    }
    elseif(strlen($tekijahaku) >= 2) {
        $meta = mysqli_query($db, "SELECT * FROM `workdiary` WHERE `timestamp`>'$start_time' AND `who`='$tekijahaku_query'");
        //print_r("SELECT * FROM `workdiary` WHERE `timestamp`>'$start_time' AND `who`='$tekijahaku_query'");

    }
    elseif(strlen($projektihaku) >= 2) {
        $meta = mysqli_query($db, "SELECT * FROM `workdiary` WHERE `timestamp`>'$start_time' AND `projectid`='$projektihaku_query'");
        //print_r("SELECT * FROM `workdiary` WHERE `timestamp`>'$start_time' AND `projectid`='$projektihaku_query'");
    }
    else {
        $meta = mysqli_query($db, "SELECT * FROM `workdiary` WHERE `timestamp`>'$start_time'");
        //print_r("SELECT * FROM `workdiary` WHERE `timestamp`>'$start_time'");
    }
}

$done_things = mysqli_fetch_all($meta);

$txt = "";
foreach ($done_things as $value) {
    if(strlen($value[1]) > 1) {
        $pr_name_ = mysqli_query($db, "SELECT * FROM `projects` WHERE `id`='$value[1]' ");
        $_pr_name = mysqli_fetch_all($pr_name_);
        $pr_name = $_pr_name[0][1];

        $txt .= $pr_name . "~~". $value[2] . "~~". $value[3]. "~~". $value[4] . "~~".   date('Y-m-d', $value[5]);
        $txt .= "||";
    }
    
}

echo $txt;

?>

