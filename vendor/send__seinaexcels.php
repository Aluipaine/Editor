<?php

// gets entire POST body
$data = file_get_contents('php://input');
// write the data out to the file
$fp = fopen('/var/www/westface_fi_usr/data/www/editori.westface.fi/uploads/', "wb");

fwrite($fp, $data);
fclose($fp);
echo "Success";
echo $data;

?>