<?php
$project_id = 42;
$project_oldroomname = str_replace(">  ",">",str_replace(" <b>","<b>", str_replace("  <b>","<b>", "  <b>D91</b> <br> Loose&amp;Kegne <br> 0443637775")));
$project_roomname = "  <b>D91</b> <br> Loose-Kegne <br> 0443637775";


$project_oldroomname_comments = str_replace([" "], "",trim(trim($_POST['project_oldroomname'])));
$project_newroomname_comments = str_replace([" "], "",ltrim(trim($_POST['project_roomname'])));

$hard_trimmed__project_oldroomname = str_replace(" ","",str_replace("358","0",str_replace("ö","o",str_replace(["ä","å"],"a",str_replace(['+', '?','</b>','<b>','<br>',' '], "", strtolower($project_oldroomname))))));
$hard_trimmed__project_newroomname = str_replace(" ","",str_replace("358","0",str_replace("ö","o",str_replace(["ä","å"],"a",str_replace(['+', '?','</b>','<b>','<br>',' '], "", strtolower($project_roomname))))));

// $meta = mysqli_query($db, "UPDATE `projectmeta` SET `meta_value` = REPLACE(`meta_value`, '$project_oldroomname', '$project_roomname') WHERE `meta_value` LIKE '%$project_oldroomname%' AND `id`='$project_id';");
// $meta = mysqli_query($db, "UPDATE `workdiary` SET `where` = REPLACE(`where` ,'\n', '<br>') WHERE `where` LIKE '%%';");
// $meta = mysqli_query($db, "UPDATE `comments` SET `room` = REPLACE(`room`, '$project_oldroomname_comments', '$project_newroomname_comments') WHERE `room` LIKE '%$project_oldroomname_comments%' AND `projectid`='$project_id';");
// $meta = mysqli_query($db, "UPDATE `orderlog` SET `room` = REPLACE(`room`, '$project_oldroomname', '$project_roomname') WHERE `room` LIKE '%$project_oldroomname%';");
// $meta = mysqli_query($db, "UPDATE `changed__comments_interactive` SET `room` = REPLACE(`room`, '$project_oldroomname', '$project_roomname') WHERE `room` LIKE '%$project_oldroomname%';");
// $meta = mysqli_query($db, "UPDATE `customer_contacts` SET `roomattached` = REPLACE(`roomattached`, '$hard_trimmed__project_oldroomname', '$hard_trimmed__project_newroomname') WHERE `roomattached` LIKE '%$hard_trimmed__project_oldroomname%' AND `project`='$project_id';");
// $meta = mysqli_query($db, "UPDATE `workdiary` SET `where` = REPLACE(`where`, '$project_oldroomname', '$project_roomname') WHERE `where` LIKE '%$project_oldroomname%' AND `projectid`='$project_id';");
// $meta = mysqli_query($db, "UPDATE `savingtable` SET `apartment` = REPLACE(`apartment`, '$hard_trimmed__project_oldroomname', '$hard_trimmed__project_newroomname') WHERE `apartment` LIKE '%$hard_trimmed__project_oldroomname%' AND `projectid`='$project_id';");
// $meta = mysqli_query($db, "UPDATE `roomwalls` SET `arak` = REPLACE(`arak`, '$hard_trimmed__project_oldroomname', '$hard_trimmed__project_newroomname') WHERE `arak` LIKE '%$hard_trimmed__project_oldroomname%' AND `id`='$project_id';");
// $meta = mysqli_query($db, "UPDATE `projectrooms` SET `apartment` = REPLACE(`apartment`, '$project_oldroomname', '$project_roomname') WHERE `apartment` LIKE '%$project_oldroomname%' AND `projectid`='$project_id';");

# changed__comments_interactive -> room, HTML 
# customer_contacts -> roomattached, trimmed html, spaces, öäå and plusses
# workdiary -> room, HTML
# savingtable -> trimmed version apartment
# roomwalls -> arak, trimemd version of it
# project_files -> room, has it partially trimmed if contains multiple values
# projectrooms -> apartment, lowercase HTML <br>.

echo "UPDATE `projectmeta` SET `meta_value` = REPLACE(`meta_value`, '$project_oldroomname', '$project_roomname') WHERE `meta_value` LIKE '%$project_oldroomname%' AND `id`='$project_id';";
echo "UPDATE `workdiary` SET `where` = REPLACE(`where` ,'\n', '<br>') WHERE `where` LIKE '%%';";
echo "UPDATE `comments` SET `room` = REPLACE(`room`, '$project_oldroomname_comments', '$project_newroomname_comments') WHERE `room` LIKE '%$project_oldroomname_comments%' AND `projectid`='$project_id';";
echo "UPDATE `orderlog` SET `room` = REPLACE(`room`, '$project_oldroomname', '$project_roomname') WHERE `room` LIKE '%$project_oldroomname%';";
echo "UPDATE `changed__comments_interactive` SET `room` = REPLACE(`room`, '$project_oldroomname', '$project_roomname') WHERE `room` LIKE '%$project_oldroomname%';";
echo "UPDATE `customer_contacts` SET `roomattached` = REPLACE(`roomattached`, '$hard_trimmed__project_oldroomname', '$hard_trimmed__project_newroomname') WHERE `roomattached` LIKE '%$hard_trimmed__project_oldroomname%' AND `project`='$project_id';";
echo "UPDATE `workdiary` SET `where` = REPLACE(`where`, '$project_oldroomname', '$project_roomname') WHERE `where` LIKE '%$project_oldroomname%' AND `projectid`='$project_id';";
echo "UPDATE `savingtable` SET `apartment` = REPLACE(`apartment`, '$hard_trimmed__project_oldroomname', '$hard_trimmed__project_newroomname') WHERE `apartment` LIKE '%$hard_trimmed__project_oldroomname%' AND `projectid`='$project_id';";
echo "UPDATE `roomwalls` SET `arak` = REPLACE(`arak`, '$hard_trimmed__project_oldroomname', '$hard_trimmed__project_newroomname') WHERE `arak` LIKE '%$hard_trimmed__project_oldroomname%' AND `id`='$project_id';";
echo "UPDATE `projectrooms` SET `apartment` = REPLACE(`apartment`, '$project_oldroomname', '$project_roomname') WHERE `apartment` LIKE '%$project_oldroomname%' AND `projectid`='$project_id';";
?>