<?php
#Configuration Script
$env = trim(file_get_contents('switches/env'));
$storage = "/mount/disk1/psup/" . $env . "/"; #Main File Storage

$sqldb = 'psup';
$sqlsrv = 'localhost';
$sqluser = trim(getenv('mysqluser'));
$sqlpass = trim(getenv('mysqlpass'));

// Create connection
$conn = new mysqli($sqlsrv, $sqluser, $sqlpass, $sqldb);

if (mysqli_connect_errno())
  {
  die("Failed to connect to MySQL: " . mysqli_connect_error());
  }
?>
