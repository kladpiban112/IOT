<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'dfixx_db');


// define('DB_SERVER', '43.229.134.24:2222');
// define('DB_USERNAME', 'dfixx_users');
// define('DB_PASSWORD', 'dfixxdb2022**');
// define('DB_NAME', 'dfixx_db');
/* Attempt to connect to MySQL database */
$linkdifxx = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($linkdifxx === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$gmailid = ''; // YOUR gmail email
$gmailpassword = ''; // YOUR gmail password
$gmailusername = ''; // YOUR gmail User name
$linkdifxx -> set_charset("utf8");
?>
