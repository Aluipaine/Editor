<?php
/* Database credentials. Assuming you are running MySQL
// server with default setting (user 'root' with no password) */
// define('DB_SERVER', 'mysql10.domainhotelli.fi:3306');
// define('DB_USERNAME', 'kkixmips_config');
// define('DB_PASSWORD', 'C)ADotY3VA?o');
// define('DB_NAME', 'kkixmips_config');

define('DB_SERVER', '127.0.0.1:3307');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'teditori_gro');

/* Attempt to connect to MySQL database */
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>