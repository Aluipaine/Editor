<?php 

require "vendor/config.php";


$id = $_GET["id"];
$post = mysqli_query($db, "SELECT * FROM `projects` WHERE `id` = '$id'");
$post = mysqli_fetch_assoc($post);


include('./header.php');
// echo "<form action='' method='post' onsubmit='return false' class='post__form'>";


if(isset($_GET["role"]) && $_GET["role"] == 'mittaus'){
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
    echo '<style> .da_controls_commenting {display: none !important}</style>';
}
else { 
    $usr = $_GET['user'];
    if(strtolower($_GET["user"]) == "tyonjohto") {
        $usrpermissions_ = mysqli_query($db, "SELECT * FROM `users` WHERE `username`='$usr';");
        $usrpermissions = mysqli_fetch_all($usrpermissions_);
        $open_comments_ = mysqli_query($db, "SELECT * FROM `comments` WHERE `projectid`=$id AND `ending_time`='' AND `answer_to`=''");
        $_open_comments = mysqli_fetch_all($open_comments_);

        $txt = "";
        foreach ($_open_comments as $value) {
            $txt .= $value[0] . "," . $value[1] . "," . $value[2] . "," . $value[3]. "," . $value[4] . "," .  $value[5] . "," . $value[6] . "," . $value[7] . "," .  $value[8] . "," . $value[9] . "," . $value[10] . "," . $value[11] . "," . $value[12] . "," . $value[13] . "," . $value[14];
            $txt .= "~";
        } 
        echo '<input type="hidden" value="' . $txt . '" id="open_comments" name="open_comments">';
        include('./templates/2_0.php');
        include('./templates/drawarea.php');
        include('./templates/commentator.php');
        echo '<style> .drawarea__top,.box,.drawarea__right.recl_btn,.drawarea__controls_one {display: none !important} .da_controls_commenting {display: block !important} .nav li div.nav_current {color:black}</style>';    

    }
    else {
        $usrpermissions_ = mysqli_query($db, "SELECT * FROM `users` WHERE `username`='$usr';");
        $usrpermissions = mysqli_fetch_all($usrpermissions_);
        $open_comments_ = mysqli_query($db, "SELECT * FROM `comments` WHERE `projectid`=$id AND `ending_time`='' AND `answer_to`='' AND `comment_to` LIKE '%$usr%';");
        $_open_comments = mysqli_fetch_all($open_comments_);

        $txt = "";
        foreach ($_open_comments as $value) {
            if($usrpermissions[0][4] == 0) {
                if($usrpermissions[0][1] == $value[7] || $usrpermissions[0][1] == $value[8]) {
                    $txt .= $value[0] . "," . $value[1] . "," . $value[2] . "," . $value[3]. "," . $value[4] . "," .  $value[5] . "," . $value[6] . "," . $value[7] . "," .  $value[8] . "," . $value[9] . "," . $value[10] . "," . $value[11] . "," . $value[12] . "," . $value[13] . "," . $value[14];
                    $txt .= "~";
                }
            }
            else {
                $txt .= $value[0] . "," . $value[1] . "," . $value[2] . "," . $value[3]. "," . $value[4] . "," .  $value[5] . "," . $value[6] . "," . $value[7] . "," .  $value[8] . "," . $value[9] . "," . $value[10] . "," . $value[11] . "," . $value[12] . "," . $value[13] . "," . $value[14];
                $txt .= "~";
            }
            
        } 
        echo '<input type="hidden" value="' . $txt . '" id="open_comments" name="open_comments">';
        include('./templates/2_0.php');
        include('./templates/drawarea.php');
        include('./templates/commentator.php');
        echo '<style> .drawarea__top,.box,.drawarea__right.recl_btn,.drawarea__controls_one {display: none !important} .da_controls_commenting {display: block !important} .nav li div.nav_current {color:black}</style>';    
    }
}


// print_r($usrpermissions[0][1]);
// print_r($usrpermissions[0][4]);
echo '<input type="hidden" value="' . $usrpermissions[0][1] . '" id="current_user" name="current_user">';
echo '<input type="hidden" value="' . strtolower($_GET["role"]) . '" id="current_role" name="current_role">';
echo '<input type="hidden" value="' . $usrpermissions[0][4] . '" id="current_user_permissions" name="current_user_permissions">';
echo '<input type="hidden" value="' . $id . '" id="current_project_id" name="current_project_id">';


include('./footer-post.php');

?>