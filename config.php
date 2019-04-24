<?php
#Configuration Script
$env = trim(file_get_contents('switches/env'));
$storage = "/mount/disk1/psup/" . $env . "/"; #Main File Storage
if ($env == 'prod') {
  $prodBT = trim(file_get_contents('switches/prodbt'));
}

$sqldb = 'psup';
$sqlsrv = 'localhost';

/* mysql_settings.php
 * For File template see extras/mysql_settings.php
 * File is used so my MySql (MariaDB) creds dont make it onto GitHub
 * Feel free to replace this require with the variables used in that file.
*/
require '/var/www/private/mysql_settings.php';

// Create connection
$conn = new mysqli($sqlsrv, $sqluser, $sqlpass, $sqldb);

if (mysqli_connect_errno())
  {
  die("Failed to connect to MySQL: " . mysqli_connect_error());
  }
?>
